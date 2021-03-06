<?php

/**
 * This file is part of the JsFormValidationBundle.
 *
 * (c) Abhoryo <abhoryo@free.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace APY\JsFormValidationBundle\Generator;

use Doctrine\ORM\EntityManager;
use APY\JsFormValidationBundle\Generator\GettersLibraries;
use APY\JsFormValidationBundle\Generator\PreProcessEvent;
use APY\JsFormValidationBundle\Generator\FieldsConstraints;
use APY\JsFormValidationBundle\Generator\PostProcessEvent;
use APY\JsFormValidationBundle\JsfvEvents;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Form\FormView;
use Doctrine\Common\Annotations\AnnotationReader;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use APY\JsFormValidationBundle\Generator\AnnotationLoader;
use Assetic\Filter\Yui\JsCompressorFilter;
use Assetic\Asset\AssetCollection;

class FormValidationScriptGenerator
{

    /**
     * @var ClassMetadata
     */
    protected $metadata;

    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * Constructor
     *
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->em = $container->get('doctrine')->getManager();
    }

    /**
     * Gets Entity Manager
     *
     * @return \Doctrine\ORM\EntityManager  Returns Entity Manager
     */
    public function getEntityManager()
    {
        return $this->em;
    }

    /**
     * Retrieves validation bundle name.
     *
     * Validation Bundle can be overridden in app/config/config.yml
     * apy_js_form_validation:
     *     validation_bundle: YourValidationBundle
     *
     * @return string Returns validation bundle name from config
     * @author Vitaliy Demidov   <zend@i.ua>
     * @since  31 July 2012
     */
    public function getValidationBundle()
    {
        return $this->getParameter('validation_bundle');
    }

    /**
     * Gets parameter value from apy_js_form_validation namespace
     *
     * @param    string      $parameter    Parameter name
     * @return   mixed|null  Returns parameter value, or NULL if it does not exist
     */
    public function getParameter($parameter)
    {
        return $this->container->hasParameter('apy_js_form_validation.' . $parameter) ?
               $this->container->getParameter('apy_js_form_validation.' . $parameter) : null;
    }

    /**
     * Gets ClassMetadata of desired entity with annotations info
     *
     * @param   string $entityName
     * @return  ClassMetadata Returns ClassMetadata object of desired entity with annotations info
     */
    public function getClassMetadata ($entityName)
    {
        // Load metadata
        $metadata = new ClassMetadata($entityName);

        // from annotations
        $annotationloader = new AnnotationLoader(new AnnotationReader());
        $annotationloader->loadClassMetadata($metadata);

        // from php
        // $entity = new $entityName();
        // $entity->loadValidatorMetadata($metadata);

        // from yml

        // from xml

        return $metadata;
    }

    /**
     * Checks, whether the entity has UiqueEntity Constraint
     *
     * @param    string   $entityName   Entity Name
     * @return   boolean  Returns TRUE if desired entity has UniqueEntity constraint
     */
    public function hasUniqueEntityConstraint ($entityName)
    {
        $ret = false;
        $metadata = $this->getClassMetadata($entityName);
        if (!empty($metadata->constraints)) {
            foreach ($metadata->constraints as $constraint) {
                if (preg_match("/\\\\UniqueEntity$/", get_class($constraint))) {
                    $ret = true;
                    break;
                }
            }
        }
        return $ret;
    }

    /**
     * Gets entity identifier value.
     *
     * When entity is updated UniqueEntity constraint should ignore
     * entity with the same primary key id
     *
     * @param     object       $entity    Entity object which is applied to the form
     * @return    array|null   Returns array that contains values of the fields that form
     *                         primary key of entity
     * @throws    \RuntimeException
     */
    public function getEntityIdentifierValue ($entity)
    {
        if (empty($entity) || !is_object($entity)) {
            throw new \RuntimeException("Invalid parameter. Entity should be provided.");
        }
        $entityMetadata = $this->getEntityManager()->getClassMetadata(get_class($entity));
        $identifier = $entityMetadata->getIdentifier();
        $ignore = array();
        if (!empty($identifier)) {
            foreach ($identifier as $prop) {
                $propGetter = 'get' . ucfirst($prop);
                if (method_exists($entity, $propGetter)) {
                    $ignore[] = $entity->$propGetter();
                } elseif (isset($entity->$prop)) {
                    $ignore[] = $entity->$prop;
                } else {
                    throw new \RuntimeException('Could not access value for the field: ' . $prop);
                }
            }
        }
        if (empty($ignore)) $ignore = null;

        return $ignore;
    }

    /**
     * Generates client-side javascript that validates form
     *
     * @param   FormView   $formView
     * @param   boolean    $overwrite
     * @throws  \RuntimeException
     */
    public function generate(FormView $formView, $overwrite = false)
    {
        // Prepare output file
        $scriptPath = $this->container->getParameter('apy_js_form_validation.script_directory');
        $scriptRealPath = $this->container->getParameter('assetic.write_to').'/'.$scriptPath;
        $formName = isset($formView->vars['name']) ? $formView->vars['name'] : 'form';
        $scriptFile = strtolower($this->container->get('request')->get('_route')) . "_" . strtolower($formName) . ".js";

        if ($overwrite || false === file_exists($scriptRealPath . $scriptFile)) {
            // Initializes variables
            $fieldsConstraints = new FieldsConstraints();
            $gettersLibraries = new GettersLibraries($this->container, $formView);
            $aConstraints = array();
            $aGetters = array();
            $dispatcher = $this->container->get('event_dispatcher');

            // Retrieves entity name from the form view
            $entityNames = array();
            $metadata = array();

            $formViewValue = isset($formView->vars['value']) ? $formView->vars['value'] : null;
            if (is_object($formViewValue)) {
                $entityNames[] = get_class($formViewValue);
            } elseif (!empty($formView->vars['data_class']) && class_exists($formView->vars['data_class'])) {
                $entityNames[] = $formView->vars['data_class'];
            } elseif (count($formView->children) > 0) {
                foreach ($formView->children as $children) {
                    $entity = isset($children->vars['value']) ? $children->vars['value'] : null;
                    if (is_object($entity)) {
                        $entityNames[] = get_class($entity);
                    } elseif (!empty($children->vars['data_class']) && class_exists($children->vars['data_class'])) {
                        $entityNames[] = $children->vars['data_class'];
                    }
                }
            }

            if (isset($entityNames) && !empty($entityNames)) {
                foreach ($entityNames as $key => $entityName) {
                    // Form is built on Entity
                    $metadata[$key] = $this->getClassMetadata($entityName);
                    $formValidationGroups = isset($formView->vars['validation_groups']) ?
                    $formView->vars['validation_groups'] : array('Default');
               
                    // Dispatch JsfvEvents::preProcess event
                    $preProcessEvent = new PreProcessEvent($formView, $metadata[$key]);
                    $dispatcher->dispatch(JsfvEvents::preProcess, $preProcessEvent);
     
                    if (!empty($metadata[$key]->constraints)) {
                        foreach ($metadata[$key]->constraints as $constraint) {
                            $constraintName = end((explode(chr(92), get_class($constraint))));
                            if ($constraintName == 'UniqueEntity') {
                                if (is_array($constraint->fields)) {
                                    //It has not been implemented yet
                                } else if (is_string($constraint->fields)) {
                                    if (!isset($aConstraints[$constraint->fields])) {
                                        $aConstraints[$constraint->fields] = array();
                                    }
                                    $aConstraints[$constraint->fields][] = $constraint;
                                }
                            }
                        }
                    }

                    $errorMapping = isset($formView->vars['error_mapping']) ? $formView->vars['error_mapping'] : null;
                    if (!empty($metadata[$key]->getters)) {
                        foreach ($metadata[$key]->getters as $getterMetadata) {
                            /* @var $getterMetadata \Symfony\Component\Validator\Mapping\GetterMetadata  */
                            if (!empty($getterMetadata->constraints)) {
                                if ($gettersLibraries->findLibrary($getterMetadata) === null) {
                                    // You have to provide getter templates in the following location
                                    // {EntityBundle}/Resources/views/Getters/{EntityName}.{GetterMethod}.js.twig
                                    // or all templates in one place:
                                    // app/Resources/APYJsFormValidationBundle/views/Getters/{EntityName}.{GetterMethod}.js.twig
                                    continue;
                                }
                                foreach ($getterMetadata->constraints as $constraint) {
                                    /* @var $constraint \Symfony\Component\Validator */
                                    $getterName = $getterMetadata->getName();
                                    $jsHandlerCallback = $gettersLibraries->getKey($getterMetadata, '_');
                                    $constraintName = end((explode(chr(92), get_class($constraint))));
                                    $constraintProperties = get_object_vars($constraint);
                                    $exist = array_intersect($formValidationGroups, $constraintProperties['groups']);
                                    if (!empty($exist)) {
                                        if (!$gettersLibraries->has($getterMetadata)) {
                                            $gettersLibraries->add($getterMetadata);
                                        }
                                        if (!$fieldsConstraints->hasLibrary($constraintName)) {
                                            $librairy = "APYJsFormValidationBundle:Constraints:{$constraintName}Validator.js.twig";
                                            $fieldsConstraints->addLibrary($constraintName, $librairy);
                                        }
                                        if (!empty($errorMapping[$getterName]) && is_string($errorMapping[$getterName])) {
                                            $fieldName = $errorMapping[$getterName];
                                            //'type' property is set in RepeatedTypeExtension class
                                            if (!empty($formView->children[$fieldName]) &&
                                                isset($formView->children[$fieldName]->vars['type']) &&
                                                $formView->children[$fieldName]->vars['type'] == 'repeated') {
                                                $repeatedNames = array_keys($formView->children[$fieldName]->vars['value']);
                                                //Listen first repeated element
                                                $fieldId = $formView->children[$fieldName]->vars['id'] . "_" . $repeatedNames[0];
                                            } else {
                                                $fieldId = $formView->children[$fieldName]->vars['id'];
                                            }
                                        } else {
                                            $fieldId = '.';
                                        }
                                        if (!isset($aGetters[$fieldId][$jsHandlerCallback])) {
                                            $aGetters[$fieldId][$jsHandlerCallback] = array();
                                        }

                                        unset($constraintProperties['groups']);

                                        $aGetters[$fieldId][$jsHandlerCallback][] = array(
                                            'name'       => $constraintName,
                                            'parameters' => json_encode($constraintProperties),
                                        );
                                    }
                                }
                            }
                        }
                    }
                }
            }

            if (isset($entityNames) && !empty($entityNames)) {
                $constraintsTarget = array();
                foreach ($entityNames as $key => $entity) {
                     $constraintsTarget = array_merge($constraintsTarget, $metadata[$key]->properties);
                }
            } else {
                // Simple form that is built manually
                $constraintsTarget = isset($formView->vars['constraints']) ? $formView->vars['constraints'] : null;
                if (isset($constraintsTarget[0]) && !empty($constraintsTarget[0]->fields)) {
                    //Get Default group ?
                    $constraintsTarget = $constraintsTarget[0]->fields;
                }
            }

            if (!empty($constraintsTarget)) {
                // we look through each field of the form
                foreach ($formView->children as $formField) {
                    $names = array();
                    $names[] = $formField;
                    
                    if (!empty($formField->children)) {
                        foreach ($formField->children as $nextLevelChildren) {
                            $names[] = $nextLevelChildren;
                        }
                    }

                    foreach ($names as $formFieldN) {
                        /* @var $formField \Symfony\Component\Form\FormView */
                        // Fields with property_path=false must be excluded from validation
                        if (isset($formFieldN->vars['property_path']) &&
                            $formFieldN->vars['property_path'] === false) {
                            continue;
                        }
                        //Setting "property_path" to "false" is deprecated since version 2.1 and will be removed in 2.3.
                        //Set "mapped" to "false" instead
                        if (isset($formFieldN->vars['mapped']) &&
                            $formFieldN->vars['mapped'] === false) {
                            continue;
                        }
                        // we look for constraints for the field
                        if (!isset($constraintsTarget[$formFieldN->vars['name']])) {
                            continue;
                        }
                        $constraintList = isset($entityName) ?
                            $constraintsTarget[$formFieldN->vars['name']]->getConstraints() :
                            $constraintsTarget[$formFieldN->vars['name']]->constraints;
                        //Adds entity level constraints that have been provided for this field
                        if (!empty($aConstraints[$formFieldN->vars['name']])) {
                            $constraintList = array_merge($constraintList, $aConstraints[$formFieldN->vars['name']]);
                        }
                        // we look through each field constraint
                        foreach ($constraintList as $constraint) {
                            $constraintName = end((explode(chr(92), get_class($constraint))));
                            $constraintProperties = get_object_vars($constraint);

                            // Groups are no longer needed
                            unset($constraintProperties['groups']);

                            if (!$fieldsConstraints->hasLibrary($constraintName)) {
                                $librairy = "APYJsFormValidationBundle:Constraints:{$constraintName}Validator.js.twig";
                                $fieldsConstraints->addLibrary($constraintName, $librairy);
                            }

                            $constraintParameters = array();
                            //We need to know entity class for the field which is applied by UniqueEntity constraint
                            if ($constraintName == 'UniqueEntity' && !empty($formFieldN->parent)) {
                                $entity = isset($formFieldN->parent->vars['value']) ?
                                    $formFieldN->parent->vars['value'] : null;
                                if(isset($formView->children[$this->getParameter('identifier_field')])) {
                                    $id = json_encode($formView->children[$this->getParameter('identifier_field')]->vars['id']);
                                } else {
                                    $id = json_encode($formFieldN->vars['id']);
                                }
                                $constraintParameters += array(
                                    'entity:' . json_encode(get_class($entity)),
                                    'identifier_field_id:'. $id,
                                );
                            }
                            foreach ($constraintProperties as $variable => $value) {
                                if (is_array($value)) {
                                    $value = json_encode($value);
                                } else {
                                    // regex
                                    if (stristr('pattern', $variable) === false) {
                                        $value = json_encode($value);
                                    }
                                }

                                $constraintParameters[] = "$variable:$value";
                            }

                            $fieldsConstraints->addFieldConstraint($formFieldN->vars['id'], array(
                                'name'       => $constraintName,
                                'parameters' => '{' . join(', ', $constraintParameters) . '}'
                            ));
                        }
                    }
                }

            }

            // Dispatch JsfvEvents::postProcess event
            $postProcessEvent = new PostProcessEvent($formView, $fieldsConstraints);
            $dispatcher->dispatch(JsfvEvents::postProcess, $postProcessEvent);

            // Retrieve validation mode from configuration
            $check_modes = array('submit' => false, 'blur' => false, 'change' => false);
            foreach ($this->container->getParameter('apy_js_form_validation.check_modes') as $check_mode) {
                $check_modes[$check_mode] = true;
            }

            // Render the validation script
            $validation_bundle = $this->getValidationBundle();
            $javascript_framework = strtolower($this->container->getParameter('apy_js_form_validation.javascript_framework'));
            $dataTemplate = array(
                    'formName'           => $formName,
                    'fieldConstraints'   => $fieldsConstraints->getFieldsConstraints(),
                    'librairyCalls'      => $fieldsConstraints->getLibraries(),
                    'check_modes'        => $check_modes,
                    'getterHandlers'     => $gettersLibraries->all(),
                    'gettersConstraints' => $aGetters,
                    'translation_group'  => $this->container->getParameter('apy_js_form_validation.translation_group'),
            );

            $template = $this->container->get('templating')->render(
                "{$validation_bundle}:Frameworks:JsFormValidation.js.{$javascript_framework}.twig",
                $dataTemplate
            );

            // Create asset and compress it
            $asset = new AssetCollection();
            $asset->setContent($template);
            $asset->setTargetPath($scriptRealPath.$scriptFile);

            // Js compression
            if ($this->container->getParameter('apy_js_form_validation.yui_js')) {
                $yui = new JsCompressorFilter($this->container->getParameter('assetic.filter.yui_js.jar'), $this->container->getParameter('assetic.java.bin'));
                $yui->filterDump($asset);
            }

            $this->container->get('filesystem')->mkdir($scriptRealPath);

            if (false === @file_put_contents($asset->getTargetPath(), $asset->getContent())) {
                throw new \RuntimeException('Unable to write file '.$asset->getTargetPath());
            }
        }

        return $this->container->get('templating.helper.assets')->getUrl($scriptPath.$scriptFile);
    }
}
