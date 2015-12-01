<?php

/* PimUIBundle:Form:pim-fields.html.twig */
class __TwigTemplate_30fd0ef3f948622c3244daa1ca8cb2af6f44766c90ec9b2f8b85acffe3350931 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:Form:fields.html.twig", "PimUIBundle:Form:pim-fields.html.twig", 1);
        $this->blocks = array(
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_row_field' => array($this, 'block_form_row_field'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
            'form_info' => array($this, 'block_form_info'),
            'form_errors' => array($this, 'block_form_errors'),
            'pim_wysiwyg_widget' => array($this, 'block_pim_wysiwyg_widget'),
            'pim_translatable_field_row' => array($this, 'block_pim_translatable_field_row'),
            'pim_enrich_media_row' => array($this, 'block_pim_enrich_media_row'),
            'pim_enrich_image_row' => array($this, 'block_pim_enrich_image_row'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'switch_widget' => array($this, 'block_switch_widget'),
            'pim_enrich_metric_row' => array($this, 'block_pim_enrich_metric_row'),
            'pim_enrich_price_collection_row' => array($this, 'block_pim_enrich_price_collection_row'),
            'pim_enrich_price_collection_widget' => array($this, 'block_pim_enrich_price_collection_widget'),
            'pim_enrich_price_widget' => array($this, 'block_pim_enrich_price_widget'),
            'pim_enrich_attribute_requirement_widget' => array($this, 'block_pim_enrich_attribute_requirement_widget'),
            'pim_ajax_entity_row' => array($this, 'block_pim_ajax_entity_row'),
            'pim_ajax_reference_data_row' => array($this, 'block_pim_ajax_reference_data_row'),
            'oro_date_widget' => array($this, 'block_oro_date_widget'),
            'pim_number_widget' => array($this, 'block_pim_number_widget'),
            'oro_acl_privilege_widget' => array($this, 'block_oro_acl_privilege_widget'),
            'oro_acl_permission_widget' => array($this, 'block_oro_acl_permission_widget'),
            'oro_acl_permission_collection_widget' => array($this, 'block_oro_acl_permission_collection_widget'),
            'pim_acl_access_level_selector_widget' => array($this, 'block_pim_acl_access_level_selector_widget'),
            'oro_acl_label_widget' => array($this, 'block_oro_acl_label_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:Form:fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "    ";
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : null));
        // line 6
        echo "    ";
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : null), array(0 => "GET", 1 => "POST"))) {
            // line 7
            echo "        ";
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : null);
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "        ";
            $context["form_method"] = "POST";
            // line 10
            echo "    ";
        }
        // line 11
        echo "    ";
        $context["formClass"] = ((array_key_exists("class", $context)) ? ((isset($context["class"]) ? $context["class"] : null)) : ("form-horizontal"));
        // line 12
        echo "    ";
        if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) {
            // line 13
            echo "        ";
            $context["class"] = (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()) . " ") . (isset($context["formClass"]) ? $context["formClass"] : null));
            // line 14
            echo "    ";
        } else {
            // line 15
            echo "        ";
            $context["class"] = (isset($context["formClass"]) ? $context["formClass"] : null);
            // line 16
            echo "    ";
        }
        // line 17
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => (isset($context["class"]) ? $context["class"] : null)));
        // line 18
        echo "    <form id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : null)), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
        echo "\"";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) ? $context["multipart"] : null)) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">
    ";
        // line 19
        if (((isset($context["form_method"]) ? $context["form_method"] : null) != (isset($context["method"]) ? $context["method"] : null))) {
            // line 20
            echo "        <input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : null), "html", null, true);
            echo "\" />
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 25
    public function block_form_end($context, array $blocks = array())
    {
        // line 26
        ob_start();
        // line 27
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'row');
        echo "
</form>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 32
    public function block_form_row_field($context, array $blocks = array())
    {
        // line 33
        echo "    <div class=\"control-group";
        if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "html", null, true);
        }
        echo "\">
        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', array("label_attr" => twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => "control-label"))));
        echo "
        <div class=\"controls";
        // line 35
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            echo " validation-error";
        }
        echo "\">
            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
            ";
        // line 37
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array())) == 0)) {
            // line 38
            echo "                ";
            $this->displayBlock("form_info", $context, $blocks);
            echo "
            ";
        }
        // line 40
        echo "        </div>
    </div>
";
    }

    // line 44
    public function block_form_row($context, array $blocks = array())
    {
        // line 45
        echo "    ";
        ob_start();
        // line 46
        echo "        ";
        $this->displayBlock("form_row_field", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 50
    public function block_form_label($context, array $blocks = array())
    {
        // line 51
        ob_start();
        // line 52
        echo "    ";
        if ( !((isset($context["label"]) ? $context["label"] : null) === false)) {
            // line 53
            echo "        ";
            if ( !(isset($context["compound"]) ? $context["compound"] : null)) {
                // line 54
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("for" => (isset($context["id"]) ? $context["id"] : null)));
                // line 55
                echo "        ";
            }
            // line 56
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 57
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 58
                echo "        ";
            }
            // line 59
            echo "        ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
                // line 60
                echo "            ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : null));
                // line 61
                echo "        ";
            }
            // line 62
            echo "        ";
            $context["isRadioLabel"] = ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "expanded", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "expanded", array()), false)) : (false)) && array_key_exists("checked", $context));
            // line 63
            echo "        ";
            $context["label"] = $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
            // line 64
            echo "        ";
            if (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "truncate", array(), "any", true, true) && $this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "truncate", array()))) {
                // line 65
                echo "            ";
                $context["label_attr"] = twig_array_merge(array("title" => (isset($context["label"]) ? $context["label"] : null)), (isset($context["label_attr"]) ? $context["label_attr"] : null));
                // line 66
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()) . " ")) : ("")) . "truncate")));
                // line 67
                echo "        ";
            }
            // line 68
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                if (($context["attrname"] != "truncate")) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 69
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "mode", array(), "any", true, true) && ("comparison" == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "vars", array()), "mode", array())))) {
                // line 70
                echo "                <input type=\"checkbox\" class=\"comparisonSelection exclude\" />
            ";
            } else {
                // line 72
                echo "                ";
                if (((isset($context["required"]) ? $context["required"] : null) &&  !(isset($context["isRadioLabel"]) ? $context["isRadioLabel"] : null))) {
                    echo "<em>*</em>";
                }
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "
            ";
            }
            // line 74
            echo "        </label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 79
    public function block_form_info($context, array $blocks = array())
    {
        // line 80
        echo "    ";
        ob_start();
        // line 81
        echo "        ";
        if (( !array_key_exists("type", $context) || ((isset($context["type"]) ? $context["type"] : null) != "hidden"))) {
            // line 82
            echo "            <div class=\"icons-container\">
                ";
            // line 83
            if (array_key_exists("help", $context)) {
                // line 84
                echo "                    <i class=\"icon-info-sign\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["help"]) ? $context["help"] : null)), "html", null, true);
                echo "\"></i>
                ";
            }
            // line 86
            echo "                ";
            if (array_key_exists("from_variant", $context)) {
                // line 87
                echo "                    <i class=\"icon-lock\" data-trigger=\"hover\" data-toggle=\"popover\" data-placement=\"right\" data-title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("pim_enrich.product_value.tooltip.from_variant.title"), "html", null, true);
                echo "\" data-content=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("pim_enrich.product_value.tooltip.from_variant.content"), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["from_variant"]) ? $context["from_variant"] : null), "code", array()), "html", null, true);
                echo "\" data-container=\"body\"></i>
                ";
            }
            // line 89
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "
            </div>
        ";
        }
        // line 92
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 99
    public function block_form_errors($context, array $blocks = array())
    {
        ob_start();
        // line 100
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 101
            echo "        <script type=\"text/javascript\">
            require(['jquery'], function (\$) {
                'use strict';

                \$(function() {
                    \$('#";
            // line 106
            echo $this->getAttribute($this, "getRootId", array(0 => (isset($context["form"]) ? $context["form"] : null)), "method");
            echo "').trigger('change');
                });
            });
        </script>
        ";
            // line 110
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array())) {
                // line 111
                echo "            ";
                $context["combinedError"] = "";
                // line 112
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 113
                    echo "                ";
                    $context["error"] = (((null === $this->getAttribute($context["error"], "messagePluralization", array()))) ? ($this->env->getExtension('translator')->trans($this->getAttribute(                    // line 114
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators")) : ($this->env->getExtension('translator')->transchoice($this->getAttribute(                    // line 115
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messagePluralization", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators")));
                    // line 116
                    echo "                ";
                    $context["combinedError"] = ((((isset($context["combinedError"]) ? $context["combinedError"] : null) != "")) ? ((((isset($context["combinedError"]) ? $context["combinedError"] : null) . "; ") . $context["error"])) : ($context["error"]));
                    // line 117
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 118
                echo "            <i class=\"validation-tooltip\" data-placement=\"right\" data-toggle=\"tooltip\" data-original-title=\"";
                echo twig_escape_filter($this->env, (isset($context["combinedError"]) ? $context["combinedError"] : null), "html", null, true);
                echo "\"></i>
        ";
            } else {
                // line 120
                echo "            ";
                $this->displayParentBlock("form_errors", $context, $blocks);
                echo "
        ";
            }
            // line 122
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 125
    public function block_pim_wysiwyg_widget($context, array $blocks = array())
    {
        // line 126
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()) . " ")) : ("")) . "wysiwyg")));
        // line 127
        echo "    ";
        $this->displayBlock("textarea_widget", $context, $blocks);
        echo "
";
    }

    // line 130
    public function block_pim_translatable_field_row($context, array $blocks = array())
    {
        // line 131
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
    <table class=\"table table-condensed\">
        <thead>
            <tr>
                ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["translation"]) {
            // line 136
            echo "                    <th>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["translation"], 'label');
            echo "</th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "            </tr>
        </thead>
        <tbody>
            <tr>
                ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["translation"]) {
            // line 143
            echo "                    <td>
                        ";
            // line 144
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["translation"], 'errors');
            echo "
                        ";
            // line 145
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["translation"], 'widget');
            echo "
                    </td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "            </tr>
        </tbody>
    </table>
";
    }

    // line 153
    public function block_pim_enrich_media_row($context, array $blocks = array())
    {
        // line 154
        echo "    ";
        ob_start();
        // line 155
        echo "
    ";
        // line 156
        $context["empty"] = ( !$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()) ||  !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "key", array()));
        // line 157
        echo "    ";
        if ( !(((isset($context["empty"]) ? $context["empty"] : null) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "mode", array(), "any", true, true)) && ("comparison" == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "vars", array()), "mode", array())))) {
            // line 158
            echo "        <div class=\"control-group\">
            ";
            // line 159
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', array("label_attr" => array("class" => "control-label", "for" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "uploadedFile", array()), "vars", array()), "id", array()))));
            echo "
            <div class=\"controls\">
                <label class=\"upload-zone file";
            // line 161
            if ((isset($context["empty"]) ? $context["empty"] : null)) {
                echo " empty";
            }
            if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
                echo " disabled";
            }
            echo "\">
                    <div class=\"upload-info\">
                        ";
            // line 163
            if ( !(isset($context["empty"]) ? $context["empty"] : null)) {
                // line 164
                echo "                            <a class=\"no-hash upload-preview\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pim_enrich_media_show", array("filename" => twig_urlencode_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "key", array())))), "html", null, true);
                echo "\" target=\"_blank\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "originalFilename", array()), "html", null, true);
                echo "\">
                                <i class=\"icon-file upload-preview\"></i>
                            </a>
                            ";
                // line 167
                $context["filename"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "originalFilename", array());
                // line 168
                echo "                            ";
                if ((twig_length_filter($this->env, (isset($context["filename"]) ? $context["filename"] : null)) > 20)) {
                    // line 169
                    echo "                                ";
                    $context["filename"] = (twig_slice($this->env, (isset($context["filename"]) ? $context["filename"] : null), 0, 17) . "...");
                    // line 170
                    echo "                            ";
                }
                // line 171
                echo "                        ";
            } else {
                // line 172
                echo "                            <i class=\"icon-file upload-preview empty\"></i>
                        ";
            }
            // line 174
            echo "                        <span class=\"upload-filename\" data-empty-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Drop a file or click here"), "html", null, true);
            echo "\">";
            if ((isset($context["empty"]) ? $context["empty"] : null)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Drop a file or click here"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, (isset($context["filename"]) ? $context["filename"] : null), "html", null, true);
            }
            echo "</span>
                    </div>
                    ";
            // line 176
            if (( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "mode", array(), "any", true, true) || ("comparison" != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "vars", array()), "mode", array())))) {
                // line 177
                echo "                        <a class=\"btn no-hash remove-upload";
                if ((isset($context["empty"]) ? $context["empty"] : null)) {
                    echo " hide";
                }
                if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
                    echo " disabled";
                }
                echo "\">
                            <i class=\"icon-trash\"></i>
                        </a>
                    ";
            }
            // line 181
            echo "                    ";
            if ((isset($context["empty"]) ? $context["empty"] : null)) {
                // line 182
                echo "                        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "uploadedFile", array()), 'widget');
                echo "
                    ";
            } else {
                // line 184
                echo "                        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "uploadedFile", array()), 'widget', array("attr" => array("class" => "hide", "disabled" => "disabled")));
                echo "
                        ";
                // line 185
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "removed", array()), 'widget', array("attr" => array("class" => "hide")));
                echo "
                    ";
            }
            // line 187
            echo "                </label>
                ";
            // line 188
            $this->displayBlock("form_info", $context, $blocks);
            echo "
                ";
            // line 189
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array()), 'widget');
            echo "
            </div>
        </div>
        <script type=\"text/javascript\">
            require(
                ['pim/fileinput'],
                function(fileinput) {
                    fileinput.init('";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "uploadedFile", array()), "vars", array()), "id", array()), "html", null, true);
            echo "');
                }
            );
        </script>
    ";
        } else {
            // line 201
            echo "        <div class=\"control-group\">
            <div class=\"controls\">
                <label class=\"upload-zone file empty\">
                    <div class=\"upload-info\">
                        <span class=\"upload-filename\">
                            ";
            // line 206
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("pim_enrich.product.no_compared_media"), "html", null, true);
            echo "
                        </span>
                    </div>
                </label>
            </div>
        </div>
    ";
        }
        // line 213
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 217
    public function block_pim_enrich_image_row($context, array $blocks = array())
    {
        // line 218
        echo "    ";
        ob_start();
        // line 219
        echo "
    ";
        // line 220
        $context["empty"] = ( !$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()) ||  !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "key", array()));
        // line 221
        echo "    ";
        if ( !(((isset($context["empty"]) ? $context["empty"] : null) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "mode", array(), "any", true, true)) && ("comparison" == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "vars", array()), "mode", array())))) {
            // line 222
            echo "        <div class=\"control-group\">
            ";
            // line 223
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', array("label_attr" => array("class" => "control-label", "for" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "uploadedFile", array()), "vars", array()), "id", array()))));
            echo "
            <div class=\"controls\">
                <label class=\"upload-zone image";
            // line 225
            if ((isset($context["empty"]) ? $context["empty"] : null)) {
                echo " empty";
            }
            if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
                echo " disabled";
            }
            echo "\">
                    <div class=\"upload-info\">
                        ";
            // line 227
            if ( !(isset($context["empty"]) ? $context["empty"] : null)) {
                // line 228
                echo "                            <a class=\"no-hash upload-preview\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pim_enrich_media_show", array("filename" => twig_urlencode_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "key", array())), "filter" => "preview")), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "originalFilename", array()), "html", null, true);
                echo "\" rel=\"slimbox\">
                                <img src=\"";
                // line 229
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pim_enrich_media_show", array("filename" => twig_urlencode_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "key", array())), "filter" => "thumbnail_small")), "html", null, true);
                echo "\">
                            </a>
                            ";
                // line 231
                $context["filename"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "originalFilename", array());
                // line 232
                echo "                            ";
                if ((twig_length_filter($this->env, (isset($context["filename"]) ? $context["filename"] : null)) > 20)) {
                    // line 233
                    echo "                                ";
                    $context["filename"] = (twig_slice($this->env, (isset($context["filename"]) ? $context["filename"] : null), 0, 17) . "...");
                    // line 234
                    echo "                            ";
                }
                // line 235
                echo "                        ";
            } else {
                // line 236
                echo "                            <i class=\"icon-camera-retro upload-preview empty\"></i>
                        ";
            }
            // line 238
            echo "                        <span class=\"upload-filename\" data-empty-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Drop an image or click here"), "html", null, true);
            echo "\">";
            if ((isset($context["empty"]) ? $context["empty"] : null)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Drop an image or click here"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, (isset($context["filename"]) ? $context["filename"] : null), "html", null, true);
            }
            echo "</span>
                    </div>
                    ";
            // line 240
            if (( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "mode", array(), "any", true, true) || ("comparison" != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "vars", array()), "mode", array())))) {
                // line 241
                echo "                        <a class=\"btn no-hash remove-upload";
                if ((isset($context["empty"]) ? $context["empty"] : null)) {
                    echo " hide";
                }
                if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
                    echo " disabled";
                }
                echo "\">
                            <i class=\"icon-trash\"></i>
                        </a>
                    ";
            }
            // line 245
            echo "                    ";
            if ((isset($context["empty"]) ? $context["empty"] : null)) {
                // line 246
                echo "                        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "uploadedFile", array()), 'widget');
                echo "
                    ";
            } else {
                // line 248
                echo "                        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "uploadedFile", array()), 'widget', array("attr" => array("class" => "hide", "disabled" => "disabled")));
                echo "
                        ";
                // line 249
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "removed", array()), 'widget', array("attr" => array("class" => "hide")));
                echo "
                    ";
            }
            // line 251
            echo "                </label>
                ";
            // line 252
            $this->displayBlock("form_info", $context, $blocks);
            echo "
                ";
            // line 253
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array()), 'widget');
            echo "
            </div>
        </div>
        <script type=\"text/javascript\">
            require(
                ['pim/fileinput'],
                function(fileinput) {
                    fileinput.init('";
            // line 260
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "uploadedFile", array()), "vars", array()), "id", array()), "html", null, true);
            echo "');
                }
            );
        </script>
    ";
        } else {
            // line 265
            echo "        <div class=\"control-group\">
            <div class=\"controls\">
                <label class=\"upload-zone image empty\">
                    <div class=\"upload-info\">
                        <span class=\"upload-filename\">
                            ";
            // line 270
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("pim_enrich.product.no_compared_media"), "html", null, true);
            echo "
                        </span>
                    </div>
                </label>
            </div>
        </div>
    ";
        }
        // line 277
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 281
    public function block_widget_attributes($context, array $blocks = array())
    {
        // line 282
        if ( !$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "size", array(), "any", true, true)) {
            // line 283
            echo "    ";
            if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) {
                // line 284
                echo "        ";
                if (!twig_in_filter("input-", $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()))) {
                    // line 285
                    echo "            ";
                    $context["class"] = ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()) . " input-large");
                    // line 286
                    echo "        ";
                } else {
                    // line 287
                    echo "            ";
                    $context["class"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array());
                    // line 288
                    echo "        ";
                }
                // line 289
                echo "    ";
            } else {
                // line 290
                echo "        ";
                $context["class"] = "input-large";
                // line 291
                echo "    ";
            }
            // line 292
            echo "    ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => (isset($context["class"]) ? $context["class"] : null)));
        }
        // line 294
        ob_start();
        // line 295
        echo "    id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : null), "html", null, true);
        echo "\"";
        if ((isset($context["read_only"]) ? $context["read_only"] : null)) {
            echo " readonly=\"readonly\"";
        }
        if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
            echo " disabled=\"disabled\"";
        }
        if ((isset($context["required"]) ? $context["required"] : null)) {
            echo " required=\"required\"";
        }
        if ((isset($context["max_length"]) ? $context["max_length"] : null)) {
            echo " maxlength=\"";
            echo twig_escape_filter($this->env, (isset($context["max_length"]) ? $context["max_length"] : null), "html", null, true);
            echo "\"";
        }
        if ((isset($context["pattern"]) ? $context["pattern"] : null)) {
            echo " pattern=\"";
            echo twig_escape_filter($this->env, (isset($context["pattern"]) ? $context["pattern"] : null), "html", null, true);
            echo "\"";
        }
        // line 296
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                echo "\" ";
            } else {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\" ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 300
    public function block_switch_widget($context, array $blocks = array())
    {
        // line 301
        ob_start();
        // line 302
        echo "    ";
        $context["originalId"] = (isset($context["id"]) ? $context["id"] : null);
        // line 303
        echo "    ";
        $context["id"] = ("input-" . (isset($context["originalId"]) ? $context["originalId"] : null));
        // line 304
        echo "    ";
        $context["switchId"] = ("switch-" . (isset($context["originalId"]) ? $context["originalId"] : null));
        // line 305
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, (isset($context["switchId"]) ? $context["switchId"] : null), "html", null, true);
        echo "\" class=\"switch switch-";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "size", array(), "any", true, true)) ? ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "size", array())) : ("small")), "html", null, true);
        echo "\" data-on-label=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "data-on-label", array(), "array", true, true)) ? ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "data-on-label", array(), "array")) : ("switch_on"))), "html", null, true);
        echo "\" data-off-label=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "data-off-label", array(), "array", true, true)) ? ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "data-off-label", array(), "array")) : ("switch_off"))), "html", null, true);
        echo "\">
        ";
        // line 306
        if ((isset($context["required"]) ? $context["required"] : null)) {
            $context["required"] = false;
        }
        // line 307
        echo "        <input id=\"";
        echo twig_escape_filter($this->env, (isset($context["originalId"]) ? $context["originalId"] : null), "html", null, true);
        echo "\" type=\"checkbox\" ";
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : null)) {
            echo " checked=\"checked\"";
        }
        if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
            echo " disabled=\"disabled\"";
        }
        echo ">
        <input type=\"hidden\" ";
        // line 308
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (((isset($context["checked"]) ? $context["checked"] : null) || ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "checked", array(), "any", true, true) && $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "checked", array())))) {
            echo " value=\"1\"";
        }
        echo ">
    </div>
    <script type=\"text/javascript\">
    require(
        ['jquery'],
        function (\$) {
            'use strict';
            \$(function() {
                \$('#";
        // line 316
        echo twig_escape_filter($this->env, (isset($context["switchId"]) ? $context["switchId"] : null), "html", null, true);
        echo "').closest('form').on('switch-change', '#";
        echo twig_escape_filter($this->env, (isset($context["switchId"]) ? $context["switchId"] : null), "html", null, true);
        echo "', function (e, data) {
                    \$('#";
        // line 317
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "').val(+data.value);
                });
            });
        }
    );
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 326
    public function block_pim_enrich_metric_row($context, array $blocks = array())
    {
        // line 327
        ob_start();
        // line 328
        echo "    <div class=\"control-group\">
        ";
        // line 329
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', array("label_attr" => array("class" => "control-label", "for" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "data", array()), "vars", array()), "id", array()))));
        echo "
        <div class=\"controls metric input-append\">
            ";
        // line 331
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "data", array()), 'widget', array("attr" => array("class" => "input-small")));
        echo "
            ";
        // line 332
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "unit", array()), 'widget', array("attr" => array("class" => "select2 input-small append")));
        echo "
            ";
        // line 333
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "family", array()), 'widget');
        echo "
            ";
        // line 334
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "data", array()), 'errors');
        echo "
            ";
        // line 335
        $this->displayBlock("form_info", $context, $blocks);
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 341
    public function block_pim_enrich_price_collection_row($context, array $blocks = array())
    {
        // line 342
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'row', array("attr" => array("class" => "hide")));
        echo "
";
    }

    // line 345
    public function block_pim_enrich_price_collection_widget($context, array $blocks = array())
    {
        // line 346
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 347
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
            echo "
        ";
            // line 348
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["child"], "data", array()), 'errors');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 350
        echo "    ";
        $this->displayBlock("form_info", $context, $blocks);
        echo "
";
    }

    // line 353
    public function block_pim_enrich_price_widget($context, array $blocks = array())
    {
        // line 354
        ob_start();
        // line 355
        echo "    ";
        $context["metadata"] = array("label" => $this->env->getExtension('pim_locale_extension')->currencySymbol($this->getAttribute($this->getAttribute($this->getAttribute(        // line 356
(isset($context["form"]) ? $context["form"] : null), "currency", array()), "vars", array()), "value", array())), "currency" => array("fieldName" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 358
(isset($context["form"]) ? $context["form"] : null), "currency", array()), "vars", array()), "full_name", array()), "fieldId" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 359
(isset($context["form"]) ? $context["form"] : null), "currency", array()), "vars", array()), "id", array()), "data" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 360
(isset($context["form"]) ? $context["form"] : null), "currency", array()), "vars", array()), "value", array()), "disabled" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 361
(isset($context["form"]) ? $context["form"] : null), "data", array()), "vars", array()), "disabled", array())), "value" => array("fieldName" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 364
(isset($context["form"]) ? $context["form"] : null), "data", array()), "vars", array()), "full_name", array()), "fieldId" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 365
(isset($context["form"]) ? $context["form"] : null), "data", array()), "vars", array()), "id", array()), "data" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 366
(isset($context["form"]) ? $context["form"] : null), "data", array()), "vars", array()), "value", array()), "disabled" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 367
(isset($context["form"]) ? $context["form"] : null), "data", array()), "vars", array()), "disabled", array())));
        // line 370
        echo "    <div class=\"currency-field\" data-metadata=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["metadata"]) ? $context["metadata"] : null)), "html", null, true);
        echo "\"></div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 374
    public function block_pim_enrich_attribute_requirement_widget($context, array $blocks = array())
    {
        // line 375
        echo "    ";
        $context["requiredTitle"] = $this->env->getExtension('translator')->trans("Required");
        // line 376
        echo "    ";
        $context["nonRequiredTitle"] = $this->env->getExtension('translator')->trans("Not required");
        // line 377
        echo "    <div class=\"attribute-requirement\" data-required-title=\"";
        echo twig_escape_filter($this->env, (isset($context["requiredTitle"]) ? $context["requiredTitle"] : null), "html", null, true);
        echo "\" data-not-required-title=\"";
        echo twig_escape_filter($this->env, (isset($context["nonRequiredTitle"]) ? $context["nonRequiredTitle"] : null), "html", null, true);
        echo "\">
        ";
        // line 378
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "required", array()), "vars", array()), "keep_non_required", array())) {
            // line 379
            echo "            <input type=\"hidden\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "required", array()), "vars", array()), "id", array()), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "required", array()), "vars", array()), "full_name", array()), "html", null, true);
            echo "\" class=\"hide\" value=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "required", array()), "vars", array()), "value", array())) ? ("1") : ("0"));
            echo "\" />
            <i class=\"icon-";
            // line 380
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "required", array()), "vars", array()), "value", array())) ? ("ok ") : ("circle non-"));
            echo "required\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "required", array()), "vars", array()), "value", array())) ? ((isset($context["requiredTitle"]) ? $context["requiredTitle"] : null)) : ((isset($context["nonRequiredTitle"]) ? $context["nonRequiredTitle"] : null))), "html", null, true);
            echo "\"></i>
        ";
        } else {
            // line 382
            echo "            <input type=\"checkbox\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "required", array()), "vars", array()), "id", array()), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "required", array()), "vars", array()), "full_name", array()), "html", null, true);
            echo "\" class=\"hide\" ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "required", array()), "vars", array()), "checked", array())) {
                echo "checked=\"checked\"";
            }
            echo " />
            <i class=\"icon-";
            // line 383
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "required", array()), "vars", array()), "checked", array())) ? ("ok ") : ("circle non-"));
            echo "required\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "required", array()), "vars", array()), "checked", array())) ? ((isset($context["requiredTitle"]) ? $context["requiredTitle"] : null)) : ((isset($context["nonRequiredTitle"]) ? $context["nonRequiredTitle"] : null))), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 385
        echo "    </div>
";
    }

    // line 388
    public function block_pim_ajax_entity_row($context, array $blocks = array())
    {
        // line 389
        echo "    ";
        $this->displayBlock("form_row_field", $context, $blocks);
        echo "
";
    }

    // line 392
    public function block_pim_ajax_reference_data_row($context, array $blocks = array())
    {
        // line 393
        echo "    ";
        $this->displayBlock("form_row_field", $context, $blocks);
        echo "
";
    }

    // line 396
    public function block_oro_date_widget($context, array $blocks = array())
    {
        // line 397
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()) . " ")) : ("")) . "datepicker"), "placeholder" => $this->env->getExtension('translator')->trans((isset($context["placeholder"]) ? $context["placeholder"] : null))));
        // line 398
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "disabled", array())) {
            // line 399
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("disabled" => "disabled"));
            // line 400
            echo "    ";
        }
        // line 401
        echo "
    ";
        // line 402
        $this->displayBlock("date_widget", $context, $blocks);
        echo "
";
    }

    // line 405
    public function block_pim_number_widget($context, array $blocks = array())
    {
        // line 406
        echo "    ";
        $this->displayBlock("number_widget", $context, $blocks);
        echo "
";
    }

    // line 409
    public function block_oro_acl_privilege_widget($context, array $blocks = array())
    {
        // line 410
        echo "    ";
        ob_start();
        // line 411
        echo "        ";
        if (("groups" == $this->getAttribute((isset($context["privileges_config"]) ? $context["privileges_config"] : null), "view_type", array()))) {
            // line 412
            echo "            ";
            if ((("entity" == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "extensionKey", array())) && ("(default)" != $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "identity", array()), "name", array())))) {
                // line 413
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "identity", array()), "id", array()), 'widget');
                echo "
                ";
                // line 414
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "permissions", array()), 'widget');
                echo "
            ";
            } else {
                // line 416
                echo "                <div class=\"acl-permission";
                echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "identity", array()), "name", array()) == "(default)")) ? (" default-field hide") : (""));
                echo "\">
                    ";
                // line 417
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "identity", array()), 'widget');
                echo "
                    ";
                // line 418
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "permissions", array()), 'widget');
                echo "
                </div>
            ";
            }
            // line 421
            echo "        ";
        } else {
            // line 422
            echo "            <tr class=\"acl-permission";
            echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "identity", array()), "name", array()) == "(default)")) ? (" default-field hide") : (""));
            echo "\">
                <td>
                    ";
            // line 424
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "identity", array()), 'widget');
            echo "
                </td>
                ";
            // line 426
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "permissions", array()), 'widget');
            echo "
            </tr>
        ";
        }
        // line 429
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 432
    public function block_oro_acl_permission_widget($context, array $blocks = array())
    {
        // line 433
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'widget');
        echo "
    ";
        // line 434
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "accessLevel", array()), 'widget');
        echo "
";
    }

    // line 437
    public function block_oro_acl_permission_collection_widget($context, array $blocks = array())
    {
        // line 438
        echo "    ";
        if (("entity" == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "vars", array()), "value", array()), "extensionKey", array()))) {
            // line 439
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["privileges_config"]) ? $context["privileges_config"] : null), "permissions", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 440
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($context["permission"], "vars", array()), "value", array()), "name", array()) == $context["field"])) {
                        // line 441
                        echo "                ";
                        $context["additionalClass"] = (((($context["field"] == "ASSIGN") || ("(default)" == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "vars", array()), "value", array()), "identity", array()), "name", array())))) ? (" default-field hide") : (""));
                        // line 442
                        echo "                ";
                        if (("entity:Oro\\Bundle\\UserBundle\\Entity\\Role" == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "vars", array()), "value", array()), "identity", array()), "id", array()))) {
                            // line 443
                            echo "                    ";
                            $context["additionalClass"] = ((isset($context["additionalClass"]) ? $context["additionalClass"] : null) . " default-field-toggle");
                            // line 444
                            echo "                ";
                        }
                        // line 445
                        echo "                <div class=\"acl-permission";
                        echo twig_escape_filter($this->env, (isset($context["additionalClass"]) ? $context["additionalClass"] : null), "html", null, true);
                        echo "\" data-permission=\"";
                        echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                        echo "\">
                    <strong>";
                        // line 446
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(twig_lower_filter($this->env, ((("oro_security.acl." . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "vars", array()), "value", array()), "identity", array()), "name", array())) . ".") . $context["field"]))), "html", null, true);
                        echo "</strong>
                    ";
                        // line 447
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["permission"], 'widget');
                        echo "
                </div>
            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 450
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 451
            echo "    ";
        } else {
            // line 452
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["privileges_config"]) ? $context["privileges_config"] : null), "permissions", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 453
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($context["permission"], "vars", array()), "value", array()), "name", array()) == $context["field"])) {
                        // line 454
                        echo "                ";
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["permission"], 'widget');
                        echo "
            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 456
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 457
            echo "    ";
        }
    }

    // line 460
    public function block_pim_acl_access_level_selector_widget($context, array $blocks = array())
    {
        // line 461
        echo "    <i class=\"icon-";
        echo (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "checked", array())) ? ("ok ") : ("remove non-"));
        echo "granted acl-permission-toggle\"></i>
    ";
        // line 462
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => "hide"));
        // line 463
        echo "    ";
        $this->displayBlock("checkbox_widget", $context, $blocks);
        echo "
";
    }

    // line 466
    public function block_oro_acl_label_widget($context, array $blocks = array())
    {
        // line 467
        echo "    <strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["value"]) ? $context["value"] : null)), "html", null, true);
        echo "</strong>
";
    }

    // line 95
    public function getgetRootId($__form__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 96
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array())) ? ($this->getAttribute($this, "getRootId", array(0 => $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array())), "method")) : ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()))), "html", null, true);
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "PimUIBundle:Form:pim-fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1367 => 96,  1355 => 95,  1348 => 467,  1345 => 466,  1338 => 463,  1336 => 462,  1331 => 461,  1328 => 460,  1323 => 457,  1317 => 456,  1307 => 454,  1301 => 453,  1296 => 452,  1293 => 451,  1287 => 450,  1277 => 447,  1273 => 446,  1266 => 445,  1263 => 444,  1260 => 443,  1257 => 442,  1254 => 441,  1248 => 440,  1243 => 439,  1240 => 438,  1237 => 437,  1231 => 434,  1226 => 433,  1223 => 432,  1218 => 429,  1212 => 426,  1207 => 424,  1201 => 422,  1198 => 421,  1192 => 418,  1188 => 417,  1183 => 416,  1178 => 414,  1173 => 413,  1170 => 412,  1167 => 411,  1164 => 410,  1161 => 409,  1154 => 406,  1151 => 405,  1145 => 402,  1142 => 401,  1139 => 400,  1136 => 399,  1133 => 398,  1130 => 397,  1127 => 396,  1120 => 393,  1117 => 392,  1110 => 389,  1107 => 388,  1102 => 385,  1095 => 383,  1084 => 382,  1077 => 380,  1068 => 379,  1066 => 378,  1059 => 377,  1056 => 376,  1053 => 375,  1050 => 374,  1042 => 370,  1040 => 367,  1039 => 366,  1038 => 365,  1037 => 364,  1036 => 361,  1035 => 360,  1034 => 359,  1033 => 358,  1032 => 356,  1030 => 355,  1028 => 354,  1025 => 353,  1018 => 350,  1010 => 348,  1005 => 347,  1000 => 346,  997 => 345,  990 => 342,  987 => 341,  978 => 335,  974 => 334,  970 => 333,  966 => 332,  962 => 331,  957 => 329,  954 => 328,  952 => 327,  949 => 326,  937 => 317,  931 => 316,  917 => 308,  900 => 307,  896 => 306,  885 => 305,  882 => 304,  879 => 303,  876 => 302,  874 => 301,  871 => 300,  848 => 296,  823 => 295,  821 => 294,  817 => 292,  814 => 291,  811 => 290,  808 => 289,  805 => 288,  802 => 287,  799 => 286,  796 => 285,  793 => 284,  790 => 283,  788 => 282,  785 => 281,  779 => 277,  769 => 270,  762 => 265,  754 => 260,  744 => 253,  740 => 252,  737 => 251,  732 => 249,  727 => 248,  721 => 246,  718 => 245,  705 => 241,  703 => 240,  691 => 238,  687 => 236,  684 => 235,  681 => 234,  678 => 233,  675 => 232,  673 => 231,  668 => 229,  661 => 228,  659 => 227,  649 => 225,  644 => 223,  641 => 222,  638 => 221,  636 => 220,  633 => 219,  630 => 218,  627 => 217,  621 => 213,  611 => 206,  604 => 201,  596 => 196,  586 => 189,  582 => 188,  579 => 187,  574 => 185,  569 => 184,  563 => 182,  560 => 181,  547 => 177,  545 => 176,  533 => 174,  529 => 172,  526 => 171,  523 => 170,  520 => 169,  517 => 168,  515 => 167,  506 => 164,  504 => 163,  494 => 161,  489 => 159,  486 => 158,  483 => 157,  481 => 156,  478 => 155,  475 => 154,  472 => 153,  465 => 148,  456 => 145,  452 => 144,  449 => 143,  445 => 142,  439 => 138,  430 => 136,  426 => 135,  418 => 131,  415 => 130,  408 => 127,  405 => 126,  402 => 125,  396 => 122,  390 => 120,  384 => 118,  378 => 117,  375 => 116,  373 => 115,  372 => 114,  370 => 113,  365 => 112,  362 => 111,  360 => 110,  353 => 106,  346 => 101,  343 => 100,  339 => 99,  334 => 92,  327 => 89,  317 => 87,  314 => 86,  308 => 84,  306 => 83,  303 => 82,  300 => 81,  297 => 80,  294 => 79,  287 => 74,  278 => 72,  274 => 70,  272 => 69,  254 => 68,  251 => 67,  248 => 66,  245 => 65,  242 => 64,  239 => 63,  236 => 62,  233 => 61,  230 => 60,  227 => 59,  224 => 58,  221 => 57,  218 => 56,  215 => 55,  212 => 54,  209 => 53,  206 => 52,  204 => 51,  201 => 50,  193 => 46,  190 => 45,  187 => 44,  181 => 40,  175 => 38,  173 => 37,  169 => 36,  163 => 35,  159 => 34,  151 => 33,  148 => 32,  139 => 27,  137 => 26,  134 => 25,  125 => 20,  123 => 19,  98 => 18,  95 => 17,  92 => 16,  89 => 15,  86 => 14,  83 => 13,  80 => 12,  77 => 11,  74 => 10,  71 => 9,  68 => 8,  65 => 7,  62 => 6,  59 => 5,  57 => 4,  54 => 3,  11 => 1,);
    }
}
/* {% extends 'OroUIBundle:Form:fields.html.twig' %}*/
/* */
/* {% block form_start %}*/
/* {% spaceless %}*/
/*     {% set method = method|upper %}*/
/*     {% if method in ["GET", "POST"] %}*/
/*         {% set form_method = method %}*/
/*     {% else %}*/
/*         {% set form_method = "POST" %}*/
/*     {% endif %}*/
/*     {% set formClass = class is defined ? class : 'form-horizontal' %}*/
/*     {% if attr.class is defined %}*/
/*         {% set class = attr.class ~ ' ' ~ formClass %}*/
/*     {% else %}*/
/*         {% set class = formClass %}*/
/*     {% endif %}*/
/*     {% set attr = attr|merge({'class': class }) %}*/
/*     <form id="{{ id }}" method="{{ form_method|lower }}" action="{{ action }}"{% for attrname, attrvalue in attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}{% if multipart %} enctype="multipart/form-data"{% endif %}>*/
/*     {% if form_method != method %}*/
/*         <input type="hidden" name="_method" value="{{ method }}" />*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_start %}*/
/* */
/* {% block form_end %}*/
/* {% spaceless %}*/
/*     {{ form_row(form._token) }}*/
/* </form>*/
/* {% endspaceless %}*/
/* {% endblock form_end %}*/
/* */
/* {% block form_row_field %}*/
/*     <div class="control-group{% if attr.class is defined %} {{ attr.class }}{% endif %}">*/
/*         {{ form_label(form, '', { label_attr: label_attr|merge({ class: 'control-label' })}) }}*/
/*         <div class="controls{% if errors|length > 0 %} validation-error{% endif %}">*/
/*             {{ form_widget(form) }}*/
/*             {% if form.children|length == 0 %}*/
/*                 {{ block('form_info') }}*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block form_row %}*/
/*     {% spaceless %}*/
/*         {{ block('form_row_field') }}*/
/*     {% endspaceless %}*/
/* {% endblock form_row %}*/
/* */
/* {% block form_label %}*/
/* {% spaceless %}*/
/*     {% if label is not sameas(false) %}*/
/*         {% if not compound %}*/
/*             {% set label_attr = label_attr|merge({'for': id}) %}*/
/*         {% endif %}*/
/*         {% if required %}*/
/*             {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*         {% endif %}*/
/*         {% if label is empty %}*/
/*             {% set label = name|humanize %}*/
/*         {% endif %}*/
/*         {% set isRadioLabel = form.parent.vars.expanded|default(false) and checked is defined %}*/
/*         {% set label = label|trans({}, translation_domain) %}*/
/*         {% if label_attr.truncate is defined and label_attr.truncate %}*/
/*             {% set label_attr = { 'title': label }|merge(label_attr) %}*/
/*             {% set label_attr = label_attr|merge({ 'class': (label_attr.class is defined ? label_attr.class ~ ' ' : '') ~ 'truncate' }) %}*/
/*         {% endif %}*/
/*         <label{% for attrname, attrvalue in label_attr if attrname != 'truncate' %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>*/
/*             {% if form.parent.vars.mode is defined and 'comparison' == form.parent.vars.mode %}*/
/*                 <input type="checkbox" class="comparisonSelection exclude" />*/
/*             {% else %}*/
/*                 {% if required and not isRadioLabel %}<em>*</em>{% endif %}{{ label }}*/
/*             {% endif %}*/
/*         </label>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_label %}*/
/* */
/* {% block form_info %}*/
/*     {% spaceless %}*/
/*         {% if type is not defined or type != 'hidden' %}*/
/*             <div class="icons-container">*/
/*                 {% if help is defined %}*/
/*                     <i class="icon-info-sign" data-toggle="tooltip" data-placement="right" data-original-title="{{ help|trans }}"></i>*/
/*                 {% endif %}*/
/*                 {% if from_variant is defined %}*/
/*                     <i class="icon-lock" data-trigger="hover" data-toggle="popover" data-placement="right" data-title="{{ 'pim_enrich.product_value.tooltip.from_variant.title'|trans }}" data-content="{{ 'pim_enrich.product_value.tooltip.from_variant.content'|trans }} : {{ from_variant.code }}" data-container="body"></i>*/
/*                 {% endif %}*/
/*                 {{ form_errors(form) }}*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock form_info %}*/
/* */
/* {% macro getRootId(form) -%}*/
/*     {{ form.parent ? _self.getRootId(form.parent) : form.vars.id }}*/
/* {%- endmacro %}*/
/* */
/* {% block form_errors %}{% spaceless %}*/
/*     {% if errors|length > 0 %}*/
/*         <script type="text/javascript">*/
/*             require(['jquery'], function ($) {*/
/*                 'use strict';*/
/* */
/*                 $(function() {*/
/*                     $('#{{ _self.getRootId(form) }}').trigger('change');*/
/*                 });*/
/*             });*/
/*         </script>*/
/*         {% if form.parent %}*/
/*             {% set combinedError = '' %}*/
/*             {% for error in errors %}*/
/*                 {% set error = error.messagePluralization is null*/
/*                     ? error.messageTemplate|trans(error.messageParameters, 'validators')*/
/*                     : error.messageTemplate|transchoice(error.messagePluralization, error.messageParameters, 'validators') %}*/
/*                 {% set combinedError = (combinedError != '') ? combinedError ~ '; ' ~ error : error %}*/
/*             {% endfor %}*/
/*             <i class="validation-tooltip" data-placement="right" data-toggle="tooltip" data-original-title="{{ combinedError }}"></i>*/
/*         {% else %}*/
/*             {{ parent() }}*/
/*         {% endif %}*/
/*     {% endif %}*/
/* {% endspaceless %}{% endblock form_errors %}*/
/* */
/* {% block pim_wysiwyg_widget %}*/
/*     {% set attr = attr|merge({ 'class': (attr.class is defined ? attr.class ~ ' ' : '') ~ 'wysiwyg' }) %}*/
/*     {{ block('textarea_widget') }}*/
/* {% endblock pim_wysiwyg_widget %}*/
/* */
/* {% block pim_translatable_field_row %}*/
/*     {{ form_errors(form) }}*/
/*     <table class="table table-condensed">*/
/*         <thead>*/
/*             <tr>*/
/*                 {% for translation in form %}*/
/*                     <th>{{ form_label(translation) }}</th>*/
/*                 {% endfor %}*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             <tr>*/
/*                 {% for translation in form %}*/
/*                     <td>*/
/*                         {{ form_errors(translation) }}*/
/*                         {{ form_widget(translation) }}*/
/*                     </td>*/
/*                 {% endfor %}*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
/* */
/* {% block pim_enrich_media_row %}*/
/*     {% spaceless %}*/
/* */
/*     {% set empty = not form.vars.value or not form.vars.value.key %}*/
/*     {% if not (empty and form.parent.vars.mode is defined and 'comparison' == form.parent.vars.mode) %}*/
/*         <div class="control-group">*/
/*             {{ form_label(form, null, { 'label_attr': {'class': 'control-label', 'for': form.uploadedFile.vars.id} }) }}*/
/*             <div class="controls">*/
/*                 <label class="upload-zone file{% if empty %} empty{% endif %}{% if disabled %} disabled{% endif %}">*/
/*                     <div class="upload-info">*/
/*                         {% if not empty %}*/
/*                             <a class="no-hash upload-preview" href="{{ path('pim_enrich_media_show', { 'filename': form.vars.value.key|url_encode }) }}" target="_blank" title="{{ form.vars.value.originalFilename }}">*/
/*                                 <i class="icon-file upload-preview"></i>*/
/*                             </a>*/
/*                             {% set filename = form.vars.value.originalFilename %}*/
/*                             {% if filename|length > 20 %}*/
/*                                 {% set filename = filename|slice(0, 17) ~ '...' %}*/
/*                             {% endif %}*/
/*                         {% else %}*/
/*                             <i class="icon-file upload-preview empty"></i>*/
/*                         {% endif %}*/
/*                         <span class="upload-filename" data-empty-title="{{ 'Drop a file or click here'|trans }}">{% if empty %}{{ 'Drop a file or click here'|trans }}{% else %}{{ filename }}{% endif %}</span>*/
/*                     </div>*/
/*                     {% if form.parent.vars.mode is not defined or 'comparison' != form.parent.vars.mode %}*/
/*                         <a class="btn no-hash remove-upload{% if empty %} hide{% endif %}{% if disabled %} disabled{% endif %}">*/
/*                             <i class="icon-trash"></i>*/
/*                         </a>*/
/*                     {% endif %}*/
/*                     {% if empty %}*/
/*                         {{ form_widget(form.uploadedFile) }}*/
/*                     {% else %}*/
/*                         {{ form_widget(form.uploadedFile, { attr: { 'class': 'hide', 'disabled': 'disabled' }}) }}*/
/*                         {{ form_widget(form.removed, {'attr': { 'class': 'hide' }}) }}*/
/*                     {% endif %}*/
/*                 </label>*/
/*                 {{ block('form_info') }}*/
/*                 {{ form_widget(form.id) }}*/
/*             </div>*/
/*         </div>*/
/*         <script type="text/javascript">*/
/*             require(*/
/*                 ['pim/fileinput'],*/
/*                 function(fileinput) {*/
/*                     fileinput.init('{{ form.uploadedFile.vars.id }}');*/
/*                 }*/
/*             );*/
/*         </script>*/
/*     {% else %}*/
/*         <div class="control-group">*/
/*             <div class="controls">*/
/*                 <label class="upload-zone file empty">*/
/*                     <div class="upload-info">*/
/*                         <span class="upload-filename">*/
/*                             {{ 'pim_enrich.product.no_compared_media'|trans }}*/
/*                         </span>*/
/*                     </div>*/
/*                 </label>*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block pim_enrich_image_row %}*/
/*     {% spaceless %}*/
/* */
/*     {% set empty = not form.vars.value or not form.vars.value.key %}*/
/*     {% if not (empty and form.parent.vars.mode is defined and 'comparison' == form.parent.vars.mode) %}*/
/*         <div class="control-group">*/
/*             {{ form_label(form, null, { 'label_attr': {'class': 'control-label', 'for': form.uploadedFile.vars.id} }) }}*/
/*             <div class="controls">*/
/*                 <label class="upload-zone image{% if empty %} empty{% endif %}{% if disabled %} disabled{% endif %}">*/
/*                     <div class="upload-info">*/
/*                         {% if not empty %}*/
/*                             <a class="no-hash upload-preview" href="{{ path('pim_enrich_media_show', { 'filename': form.vars.value.key|url_encode, 'filter': 'preview' }) }}" title="{{ form.vars.value.originalFilename }}" rel="slimbox">*/
/*                                 <img src="{{ path('pim_enrich_media_show', { 'filename': form.vars.value.key|url_encode, 'filter': 'thumbnail_small' }) }}">*/
/*                             </a>*/
/*                             {% set filename = form.vars.value.originalFilename %}*/
/*                             {% if filename|length > 20 %}*/
/*                                 {% set filename = filename|slice(0, 17) ~ '...' %}*/
/*                             {% endif %}*/
/*                         {% else %}*/
/*                             <i class="icon-camera-retro upload-preview empty"></i>*/
/*                         {% endif %}*/
/*                         <span class="upload-filename" data-empty-title="{{ 'Drop an image or click here'|trans }}">{% if empty %}{{ 'Drop an image or click here'|trans }}{% else %}{{ filename }}{% endif %}</span>*/
/*                     </div>*/
/*                     {% if form.parent.vars.mode is not defined or 'comparison' != form.parent.vars.mode %}*/
/*                         <a class="btn no-hash remove-upload{% if empty %} hide{% endif %}{% if disabled %} disabled{% endif %}">*/
/*                             <i class="icon-trash"></i>*/
/*                         </a>*/
/*                     {% endif %}*/
/*                     {% if empty %}*/
/*                         {{ form_widget(form.uploadedFile) }}*/
/*                     {% else %}*/
/*                         {{ form_widget(form.uploadedFile, { 'attr': { 'class': 'hide', 'disabled': 'disabled' }}) }}*/
/*                         {{ form_widget(form.removed, { 'attr': { 'class': 'hide' }}) }}*/
/*                     {% endif %}*/
/*                 </label>*/
/*                 {{ block('form_info') }}*/
/*                 {{ form_widget(form.id) }}*/
/*             </div>*/
/*         </div>*/
/*         <script type="text/javascript">*/
/*             require(*/
/*                 ['pim/fileinput'],*/
/*                 function(fileinput) {*/
/*                     fileinput.init('{{ form.uploadedFile.vars.id }}');*/
/*                 }*/
/*             );*/
/*         </script>*/
/*     {% else %}*/
/*         <div class="control-group">*/
/*             <div class="controls">*/
/*                 <label class="upload-zone image empty">*/
/*                     <div class="upload-info">*/
/*                         <span class="upload-filename">*/
/*                             {{ 'pim_enrich.product.no_compared_media'|trans }}*/
/*                         </span>*/
/*                     </div>*/
/*                 </label>*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     {% endspaceless %}*/
/* {% endblock pim_enrich_image_row %}*/
/* */
/* {% block widget_attributes %}*/
/* {% if attr.size is not defined %}*/
/*     {% if attr.class is defined %}*/
/*         {% if 'input-' not in attr.class %}*/
/*             {% set class = attr.class ~ ' input-large' %}*/
/*         {% else %}*/
/*             {% set class = attr.class %}*/
/*         {% endif %}*/
/*     {% else %}*/
/*         {% set class = 'input-large' %}*/
/*     {% endif %}*/
/*     {% set attr = attr|merge({'class': class }) %}*/
/* {% endif %}*/
/* {% spaceless %}*/
/*     id="{{ id }}" name="{{ full_name }}"{% if read_only %} readonly="readonly"{% endif %}{% if disabled %} disabled="disabled"{% endif %}{% if required %} required="required"{% endif %}{% if max_length %} maxlength="{{ max_length }}"{% endif %}{% if pattern %} pattern="{{ pattern }}"{% endif %}*/
/*     {% for attrname, attrvalue in attr %}{% if attrname in ['placeholder', 'title'] %}{{ attrname }}="{{ attrvalue|trans({}, translation_domain) }}" {% else %}{{ attrname }}="{{ attrvalue }}" {% endif %}{% endfor %}*/
/* {% endspaceless %}*/
/* {% endblock widget_attributes %}*/
/* */
/* {% block switch_widget %}*/
/* {% spaceless %}*/
/*     {% set originalId = id %}*/
/*     {% set id         = 'input-' ~ originalId %}*/
/*     {% set switchId   = 'switch-' ~ originalId %}*/
/*     <div id="{{ switchId }}" class="switch switch-{{ attr.size is defined ? attr.size : 'small' }}" data-on-label="{{ (attr['data-on-label'] is defined ? attr['data-on-label'] : 'switch_on')|trans }}" data-off-label="{{ (attr['data-off-label'] is defined ? attr['data-off-label'] : 'switch_off')|trans }}">*/
/*         {% if required %}{% set required = false %}{% endif %}*/
/*         <input id="{{ originalId }}" type="checkbox" {% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %}{% if disabled %} disabled="disabled"{% endif %}>*/
/*         <input type="hidden" {{ block('widget_attributes') }}{% if checked or attr.checked is defined and attr.checked %} value="1"{% endif %}>*/
/*     </div>*/
/*     <script type="text/javascript">*/
/*     require(*/
/*         ['jquery'],*/
/*         function ($) {*/
/*             'use strict';*/
/*             $(function() {*/
/*                 $('#{{ switchId }}').closest('form').on('switch-change', '#{{ switchId }}', function (e, data) {*/
/*                     $('#{{ id }}').val(+data.value);*/
/*                 });*/
/*             });*/
/*         }*/
/*     );*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endblock switch_widget %}*/
/* */
/* {% block pim_enrich_metric_row %}*/
/* {% spaceless %}*/
/*     <div class="control-group">*/
/*         {{ form_label(form, null, { 'label_attr': {'class': 'control-label', 'for': form.data.vars.id} }) }}*/
/*         <div class="controls metric input-append">*/
/*             {{ form_widget(form.data, { 'attr': { 'class': 'input-small' }}) }}*/
/*             {{ form_widget(form.unit, { 'attr': { 'class': 'select2 input-small append' }}) }}*/
/*             {{ form_widget(form.family) }}*/
/*             {{ form_errors(form.data) }}*/
/*             {{ block('form_info') }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock pim_enrich_metric_row %}*/
/* */
/* {% block pim_enrich_price_collection_row %}*/
/*     {{ form_row(form, { attr: { class: 'hide' }}) }}*/
/* {% endblock pim_enrich_price_collection_row %}*/
/* */
/* {% block pim_enrich_price_collection_widget %}*/
/*     {% for child in form.children %}*/
/*         {{ form_widget(child) }}*/
/*         {{ form_errors(child.data) }}*/
/*     {% endfor %}*/
/*     {{ block('form_info') }}*/
/* {% endblock pim_enrich_price_collection_widget %}*/
/* */
/* {% block pim_enrich_price_widget %}*/
/* {% spaceless %}*/
/*     {% set metadata = {*/
/*         label: currency_symbol(form.currency.vars.value),*/
/*         currency: {*/
/*             fieldName: form.currency.vars.full_name,*/
/*             fieldId:   form.currency.vars.id,*/
/*             data:      form.currency.vars.value,*/
/*             disabled:  form.data.vars.disabled*/
/*         },*/
/*         value: {*/
/*             fieldName: form.data.vars.full_name,*/
/*             fieldId:   form.data.vars.id,*/
/*             data:      form.data.vars.value,*/
/*             disabled:  form.data.vars.disabled*/
/*         }*/
/*     } %}*/
/*     <div class="currency-field" data-metadata="{{ metadata|json_encode }}"></div>*/
/* {% endspaceless %}*/
/* {% endblock pim_enrich_price_widget %}*/
/* */
/* {% block pim_enrich_attribute_requirement_widget %}*/
/*     {% set requiredTitle = 'Required'|trans %}*/
/*     {% set nonRequiredTitle = 'Not required'|trans %}*/
/*     <div class="attribute-requirement" data-required-title="{{ requiredTitle }}" data-not-required-title="{{ nonRequiredTitle }}">*/
/*         {% if form.required.vars.keep_non_required %}*/
/*             <input type="hidden" id="{{ form.required.vars.id }}" name="{{ form.required.vars.full_name }}" class="hide" value="{{ form.required.vars.value ? '1': '0' }}" />*/
/*             <i class="icon-{{ form.required.vars.value ? 'ok ' : 'circle non-' }}required" data-toggle="tooltip" data-placement="right" data-original-title="{{ form.required.vars.value ? requiredTitle : nonRequiredTitle }}"></i>*/
/*         {% else %}*/
/*             <input type="checkbox" id="{{ form.required.vars.id }}" name="{{ form.required.vars.full_name }}" class="hide" {% if form.required.vars.checked %}checked="checked"{% endif %} />*/
/*             <i class="icon-{{ form.required.vars.checked ? 'ok ' : 'circle non-' }}required" data-toggle="tooltip" data-placement="right" data-original-title="{{ form.required.vars.checked ? requiredTitle : nonRequiredTitle }}"></i>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock pim_enrich_attribute_requirement_widget %}*/
/* */
/* {% block pim_ajax_entity_row %}*/
/*     {{ block('form_row_field') }}*/
/* {% endblock %}*/
/* */
/* {% block pim_ajax_reference_data_row %}*/
/*     {{ block('form_row_field') }}*/
/* {% endblock %}*/
/* */
/* {% block oro_date_widget %}*/
/*     {% set attr = attr|merge({ 'class': (attr.class is defined ? attr.class ~ ' ' : '') ~ 'datepicker', 'placeholder': placeholder|trans }) %}*/
/*     {% if form.vars.disabled %}*/
/*         {% set attr = attr|merge({'disabled': 'disabled'}) %}*/
/*     {% endif %}*/
/* */
/*     {{ block('date_widget') }}*/
/* {% endblock oro_date_widget %}*/
/* */
/* {% block pim_number_widget %}*/
/*     {{ block('number_widget') }}*/
/* {% endblock %}*/
/* */
/* {% block oro_acl_privilege_widget %}*/
/*     {% spaceless %}*/
/*         {% if 'groups' == privileges_config.view_type %}*/
/*             {% if 'entity' == form.vars.value.extensionKey and '(default)' != form.vars.value.identity.name %}*/
/*                 {{ form_widget(form.identity.id) }}*/
/*                 {{ form_widget(form.permissions) }}*/
/*             {% else %}*/
/*                 <div class="acl-permission{{ form.vars.value.identity.name == '(default)' ? ' default-field hide' : '' }}">*/
/*                     {{ form_widget(form.identity) }}*/
/*                     {{ form_widget(form.permissions) }}*/
/*                 </div>*/
/*             {% endif %}*/
/*         {% else %}*/
/*             <tr class="acl-permission{{ form.vars.value.identity.name == '(default)' ? ' default-field hide' : '' }}">*/
/*                 <td>*/
/*                     {{ form_widget(form.identity) }}*/
/*                 </td>*/
/*                 {{ form_widget(form.permissions) }}*/
/*             </tr>*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block oro_acl_permission_widget %}*/
/*     {{ form_widget(form.name) }}*/
/*     {{ form_widget(form.accessLevel) }}*/
/* {% endblock %}*/
/* */
/* {% block oro_acl_permission_collection_widget %}*/
/*     {% if 'entity' == form.parent.vars.value.extensionKey %}*/
/*         {% for field in privileges_config['permissions'] %}*/
/*             {% for permission in form if permission.vars.value.name == field %}*/
/*                 {% set additionalClass = field == 'ASSIGN' or '(default)' == form.parent.vars.value.identity.name ? ' default-field hide' : '' %}*/
/*                 {% if 'entity:Oro\\Bundle\\UserBundle\\Entity\\Role' == form.parent.vars.value.identity.id %}*/
/*                     {% set additionalClass = additionalClass ~ ' default-field-toggle' %}*/
/*                 {% endif %}*/
/*                 <div class="acl-permission{{ additionalClass }}" data-permission="{{ field }}">*/
/*                     <strong>{{ ('oro_security.acl.' ~ form.parent.vars.value.identity.name ~ '.' ~ field)|lower|trans }}</strong>*/
/*                     {{ form_widget(permission) }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/*     {% else %}*/
/*         {% for field in privileges_config['permissions'] %}*/
/*             {% for permission in form if permission.vars.value.name == field %}*/
/*                 {{ form_widget(permission) }}*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block pim_acl_access_level_selector_widget %}*/
/*     <i class="icon-{{ form.vars.checked ? 'ok ' : 'remove non-' }}granted acl-permission-toggle"></i>*/
/*     {% set attr = attr|merge({ class: 'hide' }) %}*/
/*     {{ block('checkbox_widget') }}*/
/* {% endblock %}*/
/* */
/* {% block oro_acl_label_widget %}*/
/*     <strong>{{ value|trans }}</strong>*/
/* {% endblock %}*/
/* */
