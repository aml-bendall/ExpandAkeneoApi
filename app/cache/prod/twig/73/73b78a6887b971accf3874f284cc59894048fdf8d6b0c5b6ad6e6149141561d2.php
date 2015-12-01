<?php

/* OroFormBundle:Form:fields.html.twig */
class __TwigTemplate_cb146481034eaeccdbd9569f98076c3debff90168d05b7dd0174b9520bb3a239 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:Form:fields.html.twig", "OroFormBundle:Form:fields.html.twig", 1);
        $this->blocks = array(
            'percent_widget' => array($this, 'block_percent_widget'),
            'form_label' => array($this, 'block_form_label'),
            'oro_money_currency_addon' => array($this, 'block_oro_money_currency_addon'),
            'oro_money_widget' => array($this, 'block_oro_money_widget'),
            'oro_date_widget' => array($this, 'block_oro_date_widget'),
            'oro_datetime_widget' => array($this, 'block_oro_datetime_widget'),
            'oro_form_js_validation' => array($this, 'block_oro_form_js_validation'),
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
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 5
        echo "    <div class=\"input-append\">
        ";
        // line 6
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 7
        echo "        <input class=\"input-addon\" type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" ";
        }
        echo "/>
        <span class=\"add-on\">%</span>
    </div>
";
    }

    // line 12
    public function block_form_label($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        ob_start();
        // line 14
        echo "        ";
        if ( !(isset($context["compound"]) ? $context["compound"] : null)) {
            // line 15
            echo "            ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("for" => (isset($context["id"]) ? $context["id"] : null)));
            // line 16
            echo "        ";
        }
        // line 17
        echo "        ";
        if ((isset($context["required"]) ? $context["required"] : null)) {
            // line 18
            echo "            ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            // line 19
            echo "        ";
        }
        // line 20
        echo "        ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
            // line 21
            echo "            ";
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : null));
            // line 22
            echo "        ";
        }
        // line 23
        echo "        ";
        $context["isRadioLabel"] = ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "expanded", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "expanded", array()), false)) : (false)) && array_key_exists("checked", $context));
        // line 24
        echo "        <label";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
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
        echo ">
            ";
        // line 25
        if ((array_key_exists("tooltip", $context) && (isset($context["tooltip"]) ? $context["tooltip"] : null))) {
            // line 26
            echo "                ";
            $context["tooltip"] = $this->env->getExtension('translator')->trans((isset($context["tooltip"]) ? $context["tooltip"] : null));
            // line 27
            echo "                ";
            if (((array_key_exists("tooltip_details_enabled", $context) && (isset($context["tooltip_details_enabled"]) ? $context["tooltip_details_enabled"] : null)) || (            // line 28
array_key_exists("tooltip_details_anchor", $context) || array_key_exists("tooltip_details_link", $context)))) {
                // line 29
                echo "                    ";
                $context["helpLink"] = (isset($context["tooltip_details_link"]) ? $context["tooltip_details_link"] : null);
                // line 30
                echo "                    ";
                if ((array_key_exists("tooltip_details_anchor", $context) && (isset($context["tooltip_details_anchor"]) ? $context["tooltip_details_anchor"] : null))) {
                    // line 31
                    echo "                        ";
                    $context["helpLink"] = (((isset($context["helpLink"]) ? $context["helpLink"] : null) . "#") . (isset($context["tooltip_details_anchor"]) ? $context["tooltip_details_anchor"] : null));
                    // line 32
                    echo "                    ";
                }
                // line 33
                echo "                    ";
                $context["tooltip"] = ((((((isset($context["tooltip"]) ? $context["tooltip"] : null) . "<div class=\"clearfix\"><div class=\"pull-right\"><a href=\"") .                 // line 34
(isset($context["helpLink"]) ? $context["helpLink"] : null)) . "\">") . $this->env->getExtension('translator')->trans("Read more")) . "</a></div></div>");
                // line 35
                echo "                ";
            }
            // line 36
            echo "                <i class=\"icon-info-sign\"
                    style=\"color: #6b92d0;font-size: 13px;\"
                    ";
            // line 38
            if (array_key_exists("tooltip_placement", $context)) {
                echo "data-placement=\"";
                echo twig_escape_filter($this->env, (isset($context["tooltip_placement"]) ? $context["tooltip_placement"] : null), "html", null, true);
                echo "\"";
            }
            // line 39
            echo "                    data-content=\"";
            echo twig_escape_filter($this->env, (isset($context["tooltip"]) ? $context["tooltip"] : null), "html", null, true);
            echo "\"
                    data-toggle=\"popover\"></i>
            ";
        }
        // line 42
        echo "            ";
        if (((isset($context["required"]) ? $context["required"] : null) &&  !(isset($context["isRadioLabel"]) ? $context["isRadioLabel"] : null))) {
            // line 43
            echo "                <em>*</em>
            ";
        }
        // line 45
        echo "            ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null))), "html", null, true);
        echo "
        </label>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 50
    public function block_oro_money_currency_addon($context, array $blocks = array())
    {
        // line 51
        echo "    <span class=\"add-on\">";
        echo twig_escape_filter($this->env, (isset($context["currency_symbol"]) ? $context["currency_symbol"] : null), "html", null, true);
        echo "</span>
";
    }

    // line 54
    public function block_oro_money_widget($context, array $blocks = array())
    {
        // line 55
        echo "    ";
        ob_start();
        // line 56
        echo "        ";
        if ((null === (isset($context["currency_symbol_prepend"]) ? $context["currency_symbol_prepend"] : null))) {
            // line 57
            echo "            ";
            $context["div_input_class"] = "";
            // line 58
            echo "        ";
        } elseif (((isset($context["currency_symbol_prepend"]) ? $context["currency_symbol_prepend"] : null) == true)) {
            // line 59
            echo "            ";
            $context["div_input_class"] = "input-prepend";
            // line 60
            echo "        ";
        } else {
            // line 61
            echo "            ";
            $context["div_input_class"] = "input-append";
            // line 62
            echo "        ";
        }
        // line 63
        echo "
        ";
        // line 64
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " input-addon"))));
        // line 65
        echo "
        <div class=\"";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["div_input_class"]) ? $context["div_input_class"] : null), "html", null, true);
        echo "\">
            ";
        // line 67
        $context["money_field"] = (isset($context["money_pattern"]) ? $context["money_pattern"] : null);
        // line 68
        echo "            ";
        $context["money_field"] = twig_replace_filter((isset($context["money_field"]) ? $context["money_field"] : null), array("{{ widget }}" => $this->renderBlock("form_widget_simple", $context, $blocks)));
        // line 69
        echo "            ";
        $context["money_field"] = twig_replace_filter((isset($context["money_field"]) ? $context["money_field"] : null), array("{{ currency }}" => $this->renderBlock("oro_money_currency_addon", $context, $blocks)));
        // line 70
        echo "            ";
        echo (isset($context["money_field"]) ? $context["money_field"] : null);
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 75
    public function block_oro_date_widget($context, array $blocks = array())
    {
        // line 76
        echo "    ";
        $context["actual_id"] = (isset($context["id"]) ? $context["id"] : null);
        // line 77
        echo "    ";
        $context["selector_name"] = ("date_selector_" . (isset($context["id"]) ? $context["id"] : null));
        // line 78
        echo "    ";
        $context["selector_id"] = (isset($context["selector_name"]) ? $context["selector_name"] : null);
        // line 79
        echo "
    ";
        // line 81
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("data-input-id" => (isset($context["selector_id"]) ? $context["selector_id"] : null)));
        // line 82
        echo "    <span style=\"display:none\">";
        $this->displayBlock("date_widget", $context, $blocks);
        echo "</span>

    ";
        // line 85
        echo "    <input type=\"text\"
           name=\"";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["selector_name"]) ? $context["selector_name"] : null), "html", null, true);
        echo "\"
           id=\"";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["selector_id"]) ? $context["selector_id"] : null), "html", null, true);
        echo "\"
           placeholder=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["placeholder"]) ? $context["placeholder"] : null)), "html", null, true);
        echo "\" />

    <script type=\"text/javascript\">
        require(['jquery', 'oro/formatter/datetime', 'jquery-ui'],
        function(\$, datetimeFormatter) {
            var selector = \$(\"#";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["selector_id"]) ? $context["selector_id"] : null), "html", null, true);
        echo "\");
            var actual = \$(\"#";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["actual_id"]) ? $context["actual_id"] : null), "html", null, true);
        echo "\");
            var sync = function() {
                selector.val(datetimeFormatter.formatDate(actual.val()));
            };
            actual.on('change', sync);
            if (actual.val() && actual.val().length) {
                sync();
            }
            selector.datepicker({
                altField: '#";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["actual_id"]) ? $context["actual_id"] : null), "html", null, true);
        echo "',
                altFormat: 'yy-mm-dd',
                changeMonth: true,
                changeYear: true,
                yearRange: '-80:+1',
                showButtonPanel: true
            });
            selector.keyup(
                function () {
                    var selectorValue = selector.val();
                    if (datetimeFormatter.isDateValid(selectorValue)) {
                        actual.val(datetimeFormatter.convertDateToBackendFormat(selectorValue));
                    } else {
                        actual.val('');
                    }
                }
            );
        });
    </script>
";
    }

    // line 124
    public function block_oro_datetime_widget($context, array $blocks = array())
    {
        // line 125
        echo "    ";
        $context["actual_id"] = (isset($context["id"]) ? $context["id"] : null);
        // line 126
        echo "    ";
        $context["selector_name"] = ("datetime_selector_" . (isset($context["id"]) ? $context["id"] : null));
        // line 127
        echo "    ";
        $context["selector_id"] = (isset($context["selector_name"]) ? $context["selector_name"] : null);
        // line 128
        echo "
    ";
        // line 130
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("data-input-id" => (isset($context["selector_id"]) ? $context["selector_id"] : null)));
        // line 131
        echo "    <span style=\"display:none\">";
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "</span>

    ";
        // line 134
        echo "    <input type=\"text\"
           name=\"";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["selector_name"]) ? $context["selector_name"] : null), "html", null, true);
        echo "\"
           id=\"";
        // line 136
        echo twig_escape_filter($this->env, (isset($context["selector_id"]) ? $context["selector_id"] : null), "html", null, true);
        echo "\"
           placeholder=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["placeholder"]) ? $context["placeholder"] : null)), "html", null, true);
        echo "\" />

    <script type=\"text/javascript\">
        require(['jquery', 'oro/formatter/datetime', 'jquery-ui-timepicker'],
        function(\$, datetimeFormatter) {
            var selector = \$(\"#";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["selector_id"]) ? $context["selector_id"] : null), "html", null, true);
        echo "\");
            var actual = \$(\"#";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["actual_id"]) ? $context["actual_id"] : null), "html", null, true);
        echo "\");
            var sync = function() {
                selector.val(datetimeFormatter.formatDateTime(actual.val()));
            };
            actual.on('change', sync);
            if (actual.val() && actual.val().length) {
                sync();
            }
            selector.datetimepicker({
                altField: '#";
        // line 152
        echo twig_escape_filter($this->env, (isset($context["actual_id"]) ? $context["actual_id"] : null), "html", null, true);
        echo "',
                altFormat: 'yy-mm-dd',
                altTimeFormat: 'HH:mm:ssz',
                altFieldTimeOnly: false,
                altSeparator: 'T',
                changeMonth: true,
                changeYear: true,
                yearRange: '-80:+1',
                showButtonPanel: true
            });
            selector.keyup(
                function () {
                    var selectorValue = selector.val();
                    if (datetimeFormatter.isDateTimeValid(selectorValue)) {
                        actual.val(datetimeFormatter.convertDateTimeToBackendFormat(selectorValue));
                    } else {
                        actual.val('');
                    }
                }
            );
        });
    </script>
";
    }

    // line 176
    public function block_oro_form_js_validation($context, array $blocks = array())
    {
        // line 177
        echo "<script type=\"text/javascript\">
    require(['jquery', 'jquery.validate'],
    function (\$) {
        var options = ";
        // line 180
        echo (((isset($context["js_options"]) ? $context["js_options"] : null)) ? (twig_jsonencode_filter((isset($context["js_options"]) ? $context["js_options"] : null))) : ("{}"));
        echo ";
        \$('#";
        // line 181
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "name", array()), "html", null, true);
        echo "').validate(options);
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "OroFormBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 181,  418 => 180,  413 => 177,  410 => 176,  383 => 152,  371 => 143,  367 => 142,  359 => 137,  355 => 136,  351 => 135,  348 => 134,  342 => 131,  339 => 130,  336 => 128,  333 => 127,  330 => 126,  327 => 125,  324 => 124,  300 => 103,  288 => 94,  284 => 93,  276 => 88,  272 => 87,  268 => 86,  265 => 85,  259 => 82,  256 => 81,  253 => 79,  250 => 78,  247 => 77,  244 => 76,  241 => 75,  232 => 70,  229 => 69,  226 => 68,  224 => 67,  220 => 66,  217 => 65,  215 => 64,  212 => 63,  209 => 62,  206 => 61,  203 => 60,  200 => 59,  197 => 58,  194 => 57,  191 => 56,  188 => 55,  185 => 54,  178 => 51,  175 => 50,  166 => 45,  162 => 43,  159 => 42,  152 => 39,  146 => 38,  142 => 36,  139 => 35,  137 => 34,  135 => 33,  132 => 32,  129 => 31,  126 => 30,  123 => 29,  121 => 28,  119 => 27,  116 => 26,  114 => 25,  98 => 24,  95 => 23,  92 => 22,  89 => 21,  86 => 20,  83 => 19,  80 => 18,  77 => 17,  74 => 16,  71 => 15,  68 => 14,  65 => 13,  62 => 12,  45 => 7,  43 => 6,  40 => 5,  37 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'OroUIBundle:Form:fields.html.twig' %}*/
/* */
/* {% block percent_widget %}*/
/*     {% set type = type|default('text') %}*/
/*     <div class="input-append">*/
/*         {% set type = type|default('text') %}*/
/*         <input class="input-addon" type="{{ type }}" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %}/>*/
/*         <span class="add-on">%</span>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block form_label %}*/
/*     {% spaceless %}*/
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
/*         <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>*/
/*             {% if tooltip is defined and tooltip %}*/
/*                 {% set tooltip = tooltip|trans %}*/
/*                 {% if (tooltip_details_enabled is defined and tooltip_details_enabled)*/
/*                     or (tooltip_details_anchor is defined or tooltip_details_link is defined) %}*/
/*                     {% set helpLink = tooltip_details_link %}*/
/*                     {% if tooltip_details_anchor is defined and tooltip_details_anchor %}*/
/*                         {% set helpLink = helpLink ~ '#' ~ tooltip_details_anchor %}*/
/*                     {% endif %}*/
/*                     {% set tooltip = tooltip*/
/*                         ~ '<div class="clearfix"><div class="pull-right"><a href="' ~ helpLink ~ '">' ~ 'Read more'|trans ~ '</a></div></div>' %}*/
/*                 {% endif %}*/
/*                 <i class="icon-info-sign"*/
/*                     style="color: #6b92d0;font-size: 13px;"*/
/*                     {% if tooltip_placement is defined %}data-placement="{{ tooltip_placement }}"{% endif %}*/
/*                     data-content="{{ tooltip }}"*/
/*                     data-toggle="popover"></i>*/
/*             {% endif %}*/
/*             {% if required and not isRadioLabel %}*/
/*                 <em>*</em>*/
/*             {% endif %}*/
/*             {{ label|trans({}, translation_domain)|capitalize }}*/
/*         </label>*/
/*     {% endspaceless %}*/
/* {% endblock form_label %}*/
/* */
/* {% block oro_money_currency_addon %}*/
/*     <span class="add-on">{{ currency_symbol }}</span>*/
/* {% endblock oro_money_currency_addon %}*/
/* */
/* {% block oro_money_widget %}*/
/*     {% spaceless %}*/
/*         {% if currency_symbol_prepend is null %}*/
/*             {% set div_input_class = '' %}*/
/*         {% elseif currency_symbol_prepend == true %}*/
/*             {% set div_input_class = 'input-prepend' %}*/
/*         {% else %}*/
/*             {% set div_input_class = 'input-append' %}*/
/*         {% endif %}*/
/* */
/*         {% set attr = attr|merge({'class': (attr.class|default('') ~ ' input-addon')|trim}) %}*/
/* */
/*         <div class="{{ div_input_class }}">*/
/*             {% set money_field = money_pattern %}*/
/*             {% set money_field = money_field|replace({ '{{ widget }}': block('form_widget_simple') }) %}*/
/*             {% set money_field = money_field|replace({ '{{ currency }}': block('oro_money_currency_addon') }) %}*/
/*             {{ money_field|raw }}*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock oro_money_widget %}*/
/* */
/* {% block oro_date_widget %}*/
/*     {% set actual_id = id %}*/
/*     {% set selector_name = 'date_selector_' ~ id %}*/
/*     {% set selector_id = selector_name %}*/
/* */
/*     {# Actual date field that uses ISO format #}*/
/*     {% set attr = attr|merge({'data-input-id': selector_id}) %}*/
/*     <span style="display:none">{{ block('date_widget') }}</span>*/
/* */
/*     {# Visible fake datepicker field that uses localized format #}*/
/*     <input type="text"*/
/*            name="{{ selector_name }}"*/
/*            id="{{ selector_id }}"*/
/*            placeholder="{{ placeholder|trans }}" />*/
/* */
/*     <script type="text/javascript">*/
/*         require(['jquery', 'oro/formatter/datetime', 'jquery-ui'],*/
/*         function($, datetimeFormatter) {*/
/*             var selector = $("#{{ selector_id }}");*/
/*             var actual = $("#{{ actual_id }}");*/
/*             var sync = function() {*/
/*                 selector.val(datetimeFormatter.formatDate(actual.val()));*/
/*             };*/
/*             actual.on('change', sync);*/
/*             if (actual.val() && actual.val().length) {*/
/*                 sync();*/
/*             }*/
/*             selector.datepicker({*/
/*                 altField: '#{{ actual_id }}',*/
/*                 altFormat: 'yy-mm-dd',*/
/*                 changeMonth: true,*/
/*                 changeYear: true,*/
/*                 yearRange: '-80:+1',*/
/*                 showButtonPanel: true*/
/*             });*/
/*             selector.keyup(*/
/*                 function () {*/
/*                     var selectorValue = selector.val();*/
/*                     if (datetimeFormatter.isDateValid(selectorValue)) {*/
/*                         actual.val(datetimeFormatter.convertDateToBackendFormat(selectorValue));*/
/*                     } else {*/
/*                         actual.val('');*/
/*                     }*/
/*                 }*/
/*             );*/
/*         });*/
/*     </script>*/
/* {% endblock oro_date_widget %}*/
/* */
/* {% block oro_datetime_widget %}*/
/*     {% set actual_id = id %}*/
/*     {% set selector_name = 'datetime_selector_' ~ id %}*/
/*     {% set selector_id = selector_name %}*/
/* */
/*     {# Actual date field that uses ISO format #}*/
/*     {% set attr = attr|merge({'data-input-id': selector_id}) %}*/
/*     <span style="display:none">{{ block('datetime_widget') }}</span>*/
/* */
/*     {# Visible fake datetimepicker field that uses localized format #}*/
/*     <input type="text"*/
/*            name="{{ selector_name }}"*/
/*            id="{{ selector_id }}"*/
/*            placeholder="{{ placeholder|trans }}" />*/
/* */
/*     <script type="text/javascript">*/
/*         require(['jquery', 'oro/formatter/datetime', 'jquery-ui-timepicker'],*/
/*         function($, datetimeFormatter) {*/
/*             var selector = $("#{{ selector_id }}");*/
/*             var actual = $("#{{ actual_id }}");*/
/*             var sync = function() {*/
/*                 selector.val(datetimeFormatter.formatDateTime(actual.val()));*/
/*             };*/
/*             actual.on('change', sync);*/
/*             if (actual.val() && actual.val().length) {*/
/*                 sync();*/
/*             }*/
/*             selector.datetimepicker({*/
/*                 altField: '#{{ actual_id }}',*/
/*                 altFormat: 'yy-mm-dd',*/
/*                 altTimeFormat: 'HH:mm:ssz',*/
/*                 altFieldTimeOnly: false,*/
/*                 altSeparator: 'T',*/
/*                 changeMonth: true,*/
/*                 changeYear: true,*/
/*                 yearRange: '-80:+1',*/
/*                 showButtonPanel: true*/
/*             });*/
/*             selector.keyup(*/
/*                 function () {*/
/*                     var selectorValue = selector.val();*/
/*                     if (datetimeFormatter.isDateTimeValid(selectorValue)) {*/
/*                         actual.val(datetimeFormatter.convertDateTimeToBackendFormat(selectorValue));*/
/*                     } else {*/
/*                         actual.val('');*/
/*                     }*/
/*                 }*/
/*             );*/
/*         });*/
/*     </script>*/
/* {% endblock oro_datetime_widget %}*/
/* */
/* {% block oro_form_js_validation %}*/
/* <script type="text/javascript">*/
/*     require(['jquery', 'jquery.validate'],*/
/*     function ($) {*/
/*         var options = {{ js_options ? js_options|json_encode|raw : '{}' }};*/
/*         $('#{{ form.vars.name }}').validate(options);*/
/*     });*/
/* </script>*/
/* {% endblock %}*/
/* */
