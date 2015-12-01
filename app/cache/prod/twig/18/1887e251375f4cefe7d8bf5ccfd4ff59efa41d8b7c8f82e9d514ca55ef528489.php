<?php

/* OroNavigationBundle:Menu:history.html.twig */
class __TwigTemplate_9a125b4021be62a07bbbb934bc433e6205681f5cece14cb64594aaed9ebffd69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:history.html.twig", 1);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'label' => array($this, 'block_label'),
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
    public function block_list($context, array $blocks = array())
    {
        // line 4
        echo "    <ul";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oro_menu"]) ? $context["oro_menu"] : null), "attributes", array(0 => (isset($context["listAttributes"]) ? $context["listAttributes"] : null)), "method"), "html", null, true);
        echo ">

        ";
        // line 6
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren", array()))) {
            // line 7
            echo "            ";
            $context["oro_menu"] = $this;
            // line 8
            echo "
            ";
            // line 9
            $this->displayBlock("children", $context, $blocks);
            echo "
        ";
        } elseif (( !$this->getAttribute(        // line 10
(isset($context["item"]) ? $context["item"] : null), "hasChildren", array()) && (null === $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "parent", array())))) {
            // line 11
            echo "            <div class=\"dot-menu-empty-message\">";
            echo $this->env->getExtension('translator')->trans("No items");
            echo "</div>
        ";
        }
        // line 13
        echo "    </ul>
";
    }

    // line 16
    public function block_label($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('oro_title')->render($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array())), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 17,  63 => 16,  58 => 13,  52 => 11,  50 => 10,  46 => 9,  43 => 8,  40 => 7,  38 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'OroNavigationBundle:Menu:menu.html.twig' %}*/
/* */
/* {% block list %}*/
/*     <ul{{ oro_menu.attributes(listAttributes) }}>*/
/* */
/*         {% if item.hasChildren and options.depth is not sameas(0) and item.displayChildren %}*/
/*             {% import _self as oro_menu %}*/
/* */
/*             {{ block('children') }}*/
/*         {% elseif (not item.hasChildren and item.parent is null) %}*/
/*             <div class="dot-menu-empty-message">{{ 'No items'|trans|raw }}</div>*/
/*         {% endif %}*/
/*     </ul>*/
/* {% endblock %}*/
/* */
/* {% block label %}*/
/*     {{ oro_title_render(item.label|raw) }}*/
/* {% endblock %}*/
/* */
