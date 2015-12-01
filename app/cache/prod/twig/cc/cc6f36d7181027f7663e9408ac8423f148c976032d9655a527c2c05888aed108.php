<?php

/* OroNavigationBundle:Menu:favorites.html.twig */
class __TwigTemplate_e2f4ff731a377bc92de7fe9dd0d05b3d2d06bd91c308b46d42c50fcba74f8966 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:favorites.html.twig", 1);
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
            $context["favorites"] = array();
            // line 19
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["favoritesItem"]) {
                // line 20
                echo "            ";
                if ($this->getAttribute($this->getAttribute($context["favoritesItem"], "extras", array()), "isAllowed", array())) {
                    // line 21
                    echo "                ";
                    $context["favorites"] = twig_array_merge((isset($context["favorites"]) ? $context["favorites"] : null), array(0 => array("id" => $this->getAttribute($this->getAttribute($context["favoritesItem"], "extras", array()), "id", array()), "title" => $this->getAttribute($context["favoritesItem"], "label", array()), "title_rendered" => $this->env->getExtension('oro_title')->render($this->getAttribute($context["favoritesItem"], "label", array())), "url" => $this->getAttribute($context["favoritesItem"], "uri", array()), "type" => $this->getAttribute($this->getAttribute($context["favoritesItem"], "extras", array()), "type", array()))));
                    // line 22
                    echo "            ";
                }
                // line 23
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['favoritesItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    ";
        }
        // line 25
        echo "
    ";
        // line 26
        $context["navigation"] = $this;
        // line 27
        echo "    <script type=\"text/javascript\">
        require(['jquery', 'oro/navigation/favorites/view'],
        function(\$, FavoritesView) {
            \$(function () {
                /** @type {oro.navigation.favorites.View} */
                var favorites = new FavoritesView(";
        // line 32
        echo $context["navigation"]->getget_options(array(0 => "el", 1 => "tabTitle", 2 => "tabIcon"), (isset($context["options"]) ? $context["options"] : null));
        echo ");
                ";
        // line 33
        if (array_key_exists("favorites", $context)) {
            // line 34
            echo "                favorites.getCollection().reset(";
            echo twig_jsonencode_filter((isset($context["favorites"]) ? $context["favorites"] : null));
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
        return "OroNavigationBundle:Menu:favorites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 11,  121 => 10,  114 => 7,  112 => 6,  108 => 5,  106 => 4,  93 => 3,  86 => 36,  80 => 34,  78 => 33,  74 => 32,  67 => 27,  65 => 26,  62 => 25,  59 => 24,  53 => 23,  50 => 22,  47 => 21,  44 => 20,  39 => 19,  36 => 18,  34 => 17,  31 => 16,  28 => 15,  11 => 1,);
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
/*         {% set favorites = [] %}*/
/*         {% for favoritesItem in item.children %}*/
/*             {% if favoritesItem.extras.isAllowed %}*/
/*                 {% set favorites = favorites|merge([{'id': favoritesItem.extras.id, 'title': favoritesItem.label|raw, 'title_rendered': oro_title_render(favoritesItem.label|raw),  'url': favoritesItem.uri, 'type': favoritesItem.extras.type}]) %}*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* */
/*     {% import _self as navigation %}*/
/*     <script type="text/javascript">*/
/*         require(['jquery', 'oro/navigation/favorites/view'],*/
/*         function($, FavoritesView) {*/
/*             $(function () {*/
/*                 /** @type {oro.navigation.favorites.View} *//* */
/*                 var favorites = new FavoritesView({{- navigation.get_options(['el', 'tabTitle', 'tabIcon'], options) -}});*/
/*                 {% if favorites is defined %}*/
/*                 favorites.getCollection().reset({{ favorites|json_encode|raw }});*/
/*                 {% endif %}*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
