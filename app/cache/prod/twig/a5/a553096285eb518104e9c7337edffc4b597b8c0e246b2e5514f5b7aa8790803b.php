<?php

/* OroNavigationBundle:Menu:mostviewed.html.twig */
class __TwigTemplate_134e5eb32fe6756de11b45aee633ef8846418518870fba64bfaabb526eaabd98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:history.html.twig", "OroNavigationBundle:Menu:mostviewed.html.twig", 1);
        $this->blocks = array(
            'linkElement' => array($this, 'block_linkElement'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNavigationBundle:Menu:history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_linkElement($context, array $blocks = array())
    {
        // line 4
        if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : null), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : null)), "method")) {
            // line 5
            echo "        <a class=\"menu-close\" href=\"#\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oro_menu"]) ? $context["oro_menu"] : null), "attributes", array(0 => (isset($context["linkAttributes"]) ? $context["linkAttributes"] : null)), "method"), "html", null, true);
            echo ">";
            $this->displayBlock("label", $context, $blocks);
            echo "</a>";
        } else {
            // line 7
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri", array()), "html", null, true);
            echo "\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oro_menu"]) ? $context["oro_menu"] : null), "attributes", array(0 => (isset($context["linkAttributes"]) ? $context["linkAttributes"] : null)), "method"), "html", null, true);
            echo ">";
            $this->displayBlock("label", $context, $blocks);
            echo "</a>";
        }
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:mostviewed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  33 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'OroNavigationBundle:Menu:history.html.twig' %}*/
/* */
/* {% block linkElement %}*/
/*     {%- if matcher.isCurrent(item) %}*/
/*         <a class="menu-close" href="#"{{ oro_menu.attributes(linkAttributes) }}>{{ block('label') }}</a>*/
/*     {%- else %}*/
/*         <a href="{{ item.uri }}"{{ oro_menu.attributes(linkAttributes) }}>{{ block('label') }}</a>*/
/*     {%- endif %}*/
/* {% endblock %}*/
/* */
