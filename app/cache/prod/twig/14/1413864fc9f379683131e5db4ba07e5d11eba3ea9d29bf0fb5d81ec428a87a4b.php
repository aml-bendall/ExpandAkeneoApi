<?php

/* OroNavigationBundle:Menu:application_menu.html.twig */
class __TwigTemplate_db305dc8e3e860ba6ea3c8b26e0ec7c91fd3fe7a2a407aba7d668149a4382d32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:application_menu.html.twig", 1);
        $this->blocks = array(
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
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

    // line 3
    public function block_item($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren", array()))) {
            // line 5
            $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => "dropdown"));
            // line 6
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), array(0 => "dropdown-menu"));
            // line 7
            echo "    ";
        }
        // line 8
        echo "    ";
        $this->displayBlock("item_renderer", $context, $blocks);
        echo "
";
    }

    // line 11
    public function block_linkElement($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $context["oro_menu"] = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:application_menu.html.twig", 12);
        // line 13
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren", array())) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "level", array()) === 0))) {
            // line 14
            echo "        ";
            $context["linkAttributes"] = twig_array_merge((isset($context["linkAttributes"]) ? $context["linkAttributes"] : null), array("class" =>             // line 15
$context["oro_menu"]->getadd_attribute_values((isset($context["linkAttributes"]) ? $context["linkAttributes"] : null), "class", array(0 => "dropdown-toggle")), "data-toggle" => "dropdown"));
            // line 17
            echo "    ";
        }
        // line 18
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["oro_menu"]->getattributes((isset($context["linkAttributes"]) ? $context["linkAttributes"] : null));
        echo "><span class=\"title\">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span></a>
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:application_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 18,  62 => 17,  60 => 15,  58 => 14,  55 => 13,  52 => 12,  49 => 11,  42 => 8,  39 => 7,  37 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'OroNavigationBundle:Menu:menu.html.twig' %}*/
/* */
/* {% block item %}*/
/*     {% if item.hasChildren and item.displayChildren %}*/
/*         {%- set classes = classes|merge(['dropdown']) %}*/
/*         {%- set childrenClasses = childrenClasses|merge(['dropdown-menu']) %}*/
/*     {% endif %}*/
/*     {{ block('item_renderer') }}*/
/* {% endblock %}*/
/* */
/* {% block linkElement %}*/
/*     {% import 'OroNavigationBundle:Menu:menu.html.twig' as oro_menu %}*/
/*     {% if item.hasChildren and item.displayChildren and item.level is sameas(0)%}*/
/*         {% set linkAttributes = linkAttributes|merge(*/
/*         {'class': oro_menu.add_attribute_values(linkAttributes, 'class', ['dropdown-toggle']), 'data-toggle': 'dropdown'})*/
/*         %}*/
/*     {% endif %}*/
/*     <a href="{{ item.uri }}"{{ oro_menu.attributes(linkAttributes) }}><span class="title">{{ block('label') }}</span></a>*/
/* {% endblock %}*/
/* */
