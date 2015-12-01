<?php

namespace Proxies\__CG__\Pim\Bundle\CatalogBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Family extends \Pim\Bundle\CatalogBundle\Entity\Family implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'id', 'code', 'attributes', 'locale', 'translations', 'attributeAsLabel', 'requirements', 'created', 'updated');
        }

        return array('__isInitialized__', 'id', 'code', 'attributes', 'locale', 'translations', 'attributeAsLabel', 'requirements', 'created', 'updated');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Family $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated', array());

        return parent::getCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated($created)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', array($created));

        return parent::setCreated($created);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdated', array());

        return parent::getUpdated();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdated($updated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdated', array($updated));

        return parent::setUpdated($updated);
    }

    /**
     * {@inheritDoc}
     */
    public function getCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCode', array());

        return parent::getCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setCode($code)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCode', array($code));

        return parent::setCode($code);
    }

    /**
     * {@inheritDoc}
     */
    public function addAttribute(\Pim\Bundle\CatalogBundle\Model\AttributeInterface $attribute)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAttribute', array($attribute));

        return parent::addAttribute($attribute);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAttribute(\Pim\Bundle\CatalogBundle\Model\AttributeInterface $attribute)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAttribute', array($attribute));

        return parent::removeAttribute($attribute);
    }

    /**
     * {@inheritDoc}
     */
    public function getAttributes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttributes', array());

        return parent::getAttributes();
    }

    /**
     * {@inheritDoc}
     */
    public function getAttributeCodes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttributeCodes', array());

        return parent::getAttributeCodes();
    }

    /**
     * {@inheritDoc}
     */
    public function getGroupedAttributes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroupedAttributes', array());

        return parent::getGroupedAttributes();
    }

    /**
     * {@inheritDoc}
     */
    public function hasAttribute(\Pim\Bundle\CatalogBundle\Model\AttributeInterface $attribute)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasAttribute', array($attribute));

        return parent::hasAttribute($attribute);
    }

    /**
     * {@inheritDoc}
     */
    public function hasAttributeCode($attributeCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasAttributeCode', array($attributeCode));

        return parent::hasAttributeCode($attributeCode);
    }

    /**
     * {@inheritDoc}
     */
    public function setAttributeAsLabel(\Pim\Bundle\CatalogBundle\Model\AttributeInterface $attributeAsLabel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAttributeAsLabel', array($attributeAsLabel));

        return parent::setAttributeAsLabel($attributeAsLabel);
    }

    /**
     * {@inheritDoc}
     */
    public function getAttributeAsLabel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttributeAsLabel', array());

        return parent::getAttributeAsLabel();
    }

    /**
     * {@inheritDoc}
     */
    public function getAttributeAsLabelChoices()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttributeAsLabelChoices', array());

        return parent::getAttributeAsLabelChoices();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocale($locale)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocale', array($locale));

        return parent::setLocale($locale);
    }

    /**
     * {@inheritDoc}
     */
    public function getTranslations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTranslations', array());

        return parent::getTranslations();
    }

    /**
     * {@inheritDoc}
     */
    public function getTranslation($locale = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTranslation', array($locale));

        return parent::getTranslation($locale);
    }

    /**
     * {@inheritDoc}
     */
    public function addTranslation(\Pim\Bundle\TranslationBundle\Entity\AbstractTranslation $translation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTranslation', array($translation));

        return parent::addTranslation($translation);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTranslation(\Pim\Bundle\TranslationBundle\Entity\AbstractTranslation $translation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTranslation', array($translation));

        return parent::removeTranslation($translation);
    }

    /**
     * {@inheritDoc}
     */
    public function getTranslationFQCN()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTranslationFQCN', array());

        return parent::getTranslationFQCN();
    }

    /**
     * {@inheritDoc}
     */
    public function getLabel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLabel', array());

        return parent::getLabel();
    }

    /**
     * {@inheritDoc}
     */
    public function setLabel($label)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLabel', array($label));

        return parent::setLabel($label);
    }

    /**
     * {@inheritDoc}
     */
    public function addAttributeRequirement(\Pim\Bundle\CatalogBundle\Model\AttributeRequirementInterface $requirement)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAttributeRequirement', array($requirement));

        return parent::addAttributeRequirement($requirement);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAttributeRequirement(\Pim\Bundle\CatalogBundle\Model\AttributeRequirementInterface $requirement)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAttributeRequirement', array($requirement));

        return parent::removeAttributeRequirement($requirement);
    }

    /**
     * {@inheritDoc}
     */
    public function setAttributeRequirements(array $requirements)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAttributeRequirements', array($requirements));

        return parent::setAttributeRequirements($requirements);
    }

    /**
     * {@inheritDoc}
     */
    public function getAttributeRequirements()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttributeRequirements', array());

        return parent::getAttributeRequirements();
    }

    /**
     * {@inheritDoc}
     */
    public function getAttributeRequirementKey(\Pim\Bundle\CatalogBundle\Model\AttributeRequirementInterface $requirement)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttributeRequirementKey', array($requirement));

        return parent::getAttributeRequirementKey($requirement);
    }

    /**
     * {@inheritDoc}
     */
    public function getReference()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReference', array());

        return parent::getReference();
    }

}
