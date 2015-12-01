<?php

/* OroUIBundle:Form:fields.html.twig */
class __TwigTemplate_d91b79e067157cf7dca0b86424524da1e1b3650ebb348272bffcd9ce80ab8908 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "OroUIBundle:Form:fields.html.twig", 1);
        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'form_errors' => array($this, 'block_form_errors'),
            'date_widget' => array($this, 'block_date_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'choice_widget_option_attributes' => array($this, 'block_choice_widget_option_attributes'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <div class=\"control-group";
        if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "html", null, true);
        }
        echo "\">
            ";
        // line 6
        if ( !((isset($context["label"]) ? $context["label"] : null) === false)) {
            // line 7
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', array("label_attr" => twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => "control-label"))));
            echo "
            ";
        }
        // line 9
        echo "            <div class=\"controls";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            echo " validation-error";
        }
        echo "\">
                ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 17
    public function block_widget_attributes($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 19
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()) . " error")) : ("error"))));
            // line 20
            echo "    ";
        }
        // line 21
        echo "    ";
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        echo "
";
    }

    // line 24
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 26
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()) . " error")) : ("error"))));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    ";
        $this->displayParentBlock("widget_container_attributes", $context, $blocks);
        echo "
";
    }

    // line 31
    public function block_form_errors($context, array $blocks = array())
    {
        // line 32
        ob_start();
        // line 33
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 34
            echo "            ";
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array())) {
                // line 35
                echo "                ";
                $context["combinedError"] = "";
                // line 36
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 37
                    echo "                    ";
                    $context["error"] = (((null === $this->getAttribute($context["error"], "messagePluralization", array()))) ? ($this->env->getExtension('translator')->trans($this->getAttribute(                    // line 38
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators")) : ($this->env->getExtension('translator')->transchoice($this->getAttribute(                    // line 39
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messagePluralization", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators")));
                    // line 40
                    echo "                    ";
                    $context["combinedError"] = ((((isset($context["combinedError"]) ? $context["combinedError"] : null) != "")) ? ((((isset($context["combinedError"]) ? $context["combinedError"] : null) . "; ") . $context["error"])) : ($context["error"]));
                    // line 41
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "                <span class=\"validation-failed\">";
                echo twig_escape_filter($this->env, (isset($context["combinedError"]) ? $context["combinedError"] : null), "html", null, true);
                echo "</span>
            ";
            } else {
                // line 44
                echo "                ";
                $this->displayParentBlock("form_errors", $context, $blocks);
                echo "
            ";
            }
            // line 46
            echo "        ";
        }
        // line 47
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 50
    public function block_date_widget($context, array $blocks = array())
    {
        // line 51
        echo "    ";
        ob_start();
        // line 52
        echo "        ";
        $context["type"] = "text";
        // line 53
        echo "        ";
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 54
            echo "            ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        ";
        } else {
            // line 56
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 57
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : null), array("{{ year }}" =>             // line 58
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "year", array()), 'widget'), "{{ month }}" =>             // line 59
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "month", array()), 'widget'), "{{ day }}" =>             // line 60
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "day", array()), 'widget')));
            // line 61
            echo "
            </div>
        ";
        }
        // line 64
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 67
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 68
        echo "    ";
        ob_start();
        // line 69
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()) . " horizontal")) : ("horizontal"))));
        // line 70
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()) . " validate-group")));
        // line 71
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 73
            echo "                <div class=\"oro-clearfix\">
                    ";
            // line 74
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
            echo "
                    ";
            // line 75
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label');
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 82
    public function block_choice_widget_options($context, array $blocks = array())
    {
        // line 83
        echo "    ";
        ob_start();
        // line 84
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 85
            echo "            ";
            if (twig_test_iterable($context["choice"])) {
                // line 86
                echo "                <optgroup label=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["group_label"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                echo "\">
                    ";
                // line 87
                $context["options"] = $context["choice"];
                // line 88
                echo "                    ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                </optgroup>
            ";
            } else {
                // line 91
                echo "                ";
                $context["label"] = $this->env->getExtension('translator')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
                // line 92
                echo "                <option ";
                $this->displayBlock("choice_widget_option_attributes", $context, $blocks);
                echo " value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if ($this->env->getExtension('form')->isSelectedChoice($context["choice"], (isset($context["value"]) ? $context["value"] : null))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                if (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "is_safe", array(), "any", true, true) && $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "is_safe", array()))) {
                    echo (isset($context["label"]) ? $context["label"] : null);
                } else {
                    echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                }
                echo "</option>
            ";
            }
            // line 94
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 98
    public function block_choice_widget_option_attributes($context, array $blocks = array())
    {
        // line 99
        ob_start();
        // line 100
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["choice"]) ? $context["choice"] : null), "label", array(), "any", false, true), "attr", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["choice"]) ? $context["choice"] : null), "label", array()), "attr", array())) > 0))) {
            // line 101
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["choice"]) ? $context["choice"] : null), "label", array()), "attr", array()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 102,  337 => 101,  334 => 100,  332 => 99,  329 => 98,  324 => 95,  310 => 94,  292 => 92,  289 => 91,  282 => 88,  280 => 87,  275 => 86,  272 => 85,  254 => 84,  251 => 83,  248 => 82,  242 => 78,  233 => 75,  229 => 74,  226 => 73,  222 => 72,  217 => 71,  214 => 70,  211 => 69,  208 => 68,  205 => 67,  200 => 64,  195 => 61,  193 => 60,  192 => 59,  191 => 58,  190 => 57,  185 => 56,  179 => 54,  176 => 53,  173 => 52,  170 => 51,  167 => 50,  162 => 47,  159 => 46,  153 => 44,  147 => 42,  141 => 41,  138 => 40,  136 => 39,  135 => 38,  133 => 37,  128 => 36,  125 => 35,  122 => 34,  120 => 33,  118 => 32,  115 => 31,  108 => 28,  105 => 27,  102 => 26,  99 => 25,  96 => 24,  89 => 21,  86 => 20,  83 => 19,  80 => 18,  77 => 17,  68 => 11,  64 => 10,  57 => 9,  51 => 7,  49 => 6,  41 => 5,  38 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'form_div_layout.html.twig' %}*/
/* */
/* {% block form_row %}*/
/*     {% spaceless %}*/
/*         <div class="control-group{% if attr.class is defined %} {{ attr.class }}{% endif %}">*/
/*             {% if label is not sameas(false) %}*/
/*             {{ form_label(form, '' , { label_attr: label_attr|merge({ class: 'control-label' })}) }}*/
/*             {% endif %}*/
/*             <div class="controls{% if errors|length > 0 %} validation-error{% endif %}">*/
/*                 {{ form_widget(form) }}*/
/*                 {{ form_errors(form) }}*/
/*             </div>*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock form_row %}*/
/* */
/* {% block widget_attributes %}*/
/*     {% if errors|length > 0 %}*/
/*         {% set attr = attr|merge({'class': attr.class is defined ? attr.class ~ ' error' : 'error'}) %}*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock widget_attributes %}*/
/* */
/* {% block widget_container_attributes %}*/
/*     {% if errors|length > 0 %}*/
/*         {% set attr = attr|merge({'class': attr.class is defined ? attr.class ~ ' error' : 'error'}) %}*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock widget_container_attributes %}*/
/* */
/* {% block form_errors %}*/
/*     {%- spaceless -%}*/
/*         {% if errors|length > 0 %}*/
/*             {% if form.parent %}*/
/*                 {% set combinedError = '' %}*/
/*                 {% for error in errors %}*/
/*                     {% set error = error.messagePluralization is null*/
/*                         ? error.messageTemplate|trans(error.messageParameters, 'validators')*/
/*                         : error.messageTemplate|transchoice(error.messagePluralization, error.messageParameters, 'validators') %}*/
/*                     {% set combinedError = (combinedError != '') ? combinedError ~ '; ' ~ error : error %}*/
/*                 {% endfor %}*/
/*                 <span class="validation-failed">{{ combinedError }}</span>*/
/*             {% else %}*/
/*                 {{ parent() }}*/
/*             {% endif %}*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock form_errors %}*/
/* */
/* {% block date_widget %}*/
/*     {% spaceless %}*/
/*         {% set type = 'text' %}*/
/*         {% if widget == 'single_text' %}*/
/*             {{ block('form_widget_simple')|raw }}*/
/*         {% else %}*/
/*             <div {{ block('widget_container_attributes') }}>*/
/*                 {{ date_pattern|replace({*/
/*                 '{{ year }}':  form_widget(form.year),*/
/*                 '{{ month }}': form_widget(form.month),*/
/*                 '{{ day }}':   form_widget(form.day),*/
/*                 })|raw }}*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock date_widget %}*/
/* */
/* {% block choice_widget_expanded %}*/
/*     {% spaceless %}*/
/*         {% set attr = attr|merge({'class': attr.class is defined ? attr.class ~ ' horizontal' : 'horizontal'}) %}*/
/*         {% set attr = attr|merge({'class': attr.class ~ ' validate-group'}) %}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {% for child in form %}*/
/*                 <div class="oro-clearfix">*/
/*                     {{ form_widget(child) }}*/
/*                     {{ form_label(child) }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock choice_widget_expanded %}*/
/* */
/* {% block choice_widget_options %}*/
/*     {% spaceless %}*/
/*         {% for group_label, choice in options %}*/
/*             {% if choice is iterable %}*/
/*                 <optgroup label="{{ group_label|trans({}, translation_domain) }}">*/
/*                     {% set options = choice %}*/
/*                     {{ block('choice_widget_options') }}*/
/*                 </optgroup>*/
/*             {% else %}*/
/*                 {% set label = choice.label|trans({}, translation_domain) %}*/
/*                 <option {{ block('choice_widget_option_attributes') }} value="{{ choice.value }}"{% if choice is selectedchoice(value) %} selected="selected"{% endif %}>{% if (configs.is_safe is defined and configs.is_safe) %}{{ label|raw }}{% else %}{{ label }}{% endif %}</option>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     {% endspaceless %}*/
/* {% endblock choice_widget_options %}*/
/* */
/* {% block choice_widget_option_attributes %}*/
/* {% spaceless %}*/
/*     {% if choice.label.attr is defined and choice.label.attr|length > 0 %}*/
/*         {% for attrname, attrvalue in choice.label.attr %}{{ attrname }}="{{ attrvalue }}" {% endfor %}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock choice_widget_option_attributes %}*/
/* */
