<?php

/* OroNavigationBundle:Menu:pinbar.html.twig */
class __TwigTemplate_37203315fa34804a088b033fc5212532c49b30599d7e5f4167aa11f934ed6a55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:pinbar.html.twig", 1);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNavigationBundle:Menu:menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_list($context, array $blocks = array())
    {
        // line 16
        echo "    <ul class=\"extra-list\"></ul>
    ";
        // line 17
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren", array()))) {
            // line 18
            echo "        ";
            $context["pinbarItems"] = array();
            // line 19
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["pinbarItem"]) {
                // line 20
                echo "            ";
                if ($this->getAttribute($this->getAttribute($context["pinbarItem"], "extras", array()), "isAllowed", array())) {
                    // line 21
                    echo "                ";
                    $context["pinbarItems"] = twig_array_merge((isset($context["pinbarItems"]) ? $context["pinbarItems"] : null), array(0 => array("id" => $this->getAttribute($this->getAttribute($context["pinbarItem"], "extras", array()), "id", array()), "title" => $this->getAttribute($context["pinbarItem"], "label", array()), "title_rendered" => $this->env->getExtension('oro_title')->render($this->getAttribute($context["pinbarItem"], "label", array())), "title_rendered_short" => $this->env->getExtension('oro_title')->renderShort($this->getAttribute($context["pinbarItem"], "label", array())), "url" => $this->getAttribute($context["pinbarItem"], "uri", array()), "type" => $this->getAttribute($this->getAttribute($context["pinbarItem"], "extras", array()), "type", array()))));
                    // line 22
                    echo "            ";
                }
                // line 23
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pinbarItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    ";
        }
        // line 25
        echo "    ";
        $context["pinbar"] = $this;
        // line 26
        echo "    <script type=\"text/javascript\">
        require(['jquery', 'oro/navigation/pinbar/view', 'oro/navigation'], function (\$, PinbarView, Navigation) {
            \$(function () {
                /** @type {oro.navigation.pinbar.View} */
                var pinbarView = new PinbarView(";
        // line 30
        echo $context["pinbar"]->getget_options(array(0 => "maxPinbarItems", 1 => "el", 2 => "listBar", 3 => "tabTitle", 4 => "tabIcon", 5 => "minimizeButton", 6 => "closeButton", 7 => "defaultUrl"), (isset($context["options"]) ? $context["options"] : null));
        echo ");
                Navigation.registerPinbarView(pinbarView);

                ";
        // line 33
        if (array_key_exists("pinbarItems", $context)) {
            // line 34
            echo "                pinbarView.resetCollection(";
            echo twig_jsonencode_filter((isset($context["pinbarItems"]) ? $context["pinbarItems"] : null));
            echo ");
                ";
        }
        // line 36
        echo "            });
        });
    </script>
";
    }

    // line 3
    public function getget_options($__attributes__ = null, $__data__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "data" => $__data__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            $context["options"] = array();
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 6
                if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), $context["attribute"], array(), "array", true, true)) {
                    // line 7
                    $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : null), array($context["attribute"] => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), $context["attribute"], array(), "array")));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            if ((isset($context["options"]) ? $context["options"] : null)) {
                // line 11
                echo twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : null));
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:pinbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 11,  120 => 10,  113 => 7,  111 => 6,  107 => 5,  105 => 4,  92 => 3,  85 => 36,  79 => 34,  77 => 33,  71 => 30,  65 => 26,  62 => 25,  59 => 24,  53 => 23,  50 => 22,  47 => 21,  44 => 20,  39 => 19,  36 => 18,  34 => 17,  31 => 16,  28 => 15,  11 => 1,);
    }
}
/* {% extends 'OroNavigationBundle:Menu:menu.html.twig' %}*/
/* */
/* {% macro get_options(attributes, data) %}*/
/*     {%- set options = {} %}*/
/*     {%- for attribute in attributes %}*/
/*         {%- if data[attribute] is defined %}*/
/*             {%- set options = options|merge({(attribute): data[attribute]}) %}*/
/*         {%- endif %}*/
/*     {%- endfor %}*/
/*     {%- if options %}*/
/*         {{- options|json_encode|raw -}}*/
/*     {% endif %}*/
/* {% endmacro %}*/
/* */
/* {% block list %}*/
/*     <ul class="extra-list"></ul>*/
/*     {% if item.hasChildren and options.depth is not sameas(0) and item.displayChildren %}*/
/*         {% set pinbarItems = [] %}*/
/*         {% for pinbarItem in item.children %}*/
/*             {% if pinbarItem.extras.isAllowed %}*/
/*                 {% set pinbarItems = pinbarItems|merge([{'id': pinbarItem.extras.id, 'title': pinbarItem.label|raw, 'title_rendered': oro_title_render(pinbarItem.label|raw), 'title_rendered_short': oro_title_render_short(pinbarItem.label|raw), 'url': pinbarItem.uri, 'type': pinbarItem.extras.type}]) %}*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     {% endif %}*/
/*     {% import _self as pinbar %}*/
/*     <script type="text/javascript">*/
/*         require(['jquery', 'oro/navigation/pinbar/view', 'oro/navigation'], function ($, PinbarView, Navigation) {*/
/*             $(function () {*/
/*                 /** @type {oro.navigation.pinbar.View} *//* */
/*                 var pinbarView = new PinbarView({{- pinbar.get_options(['maxPinbarItems', 'el', 'listBar', 'tabTitle', 'tabIcon', 'minimizeButton', 'closeButton', 'defaultUrl'], options) -}});*/
/*                 Navigation.registerPinbarView(pinbarView);*/
/* */
/*                 {% if pinbarItems is defined %}*/
/*                 pinbarView.resetCollection({{ pinbarItems|json_encode|raw }});*/
/*                 {% endif %}*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
