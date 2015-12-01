<?php

/* OroNavigationBundle:Menu:dots_tabs.html.twig */
class __TwigTemplate_78d1c2094759a79eb484048e2b3c8ba1e0261273d0a23ab238f4d610d94697fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu_base.html.twig", "OroNavigationBundle:Menu:dots_tabs.html.twig", 1);
        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'navbar_tabs' => array($this, 'block_navbar_tabs'),
            'navbar_tabs_content' => array($this, 'block_navbar_tabs_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNavigationBundle:Menu:menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_compressed_root($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        ob_start();
        // line 4
        echo "        ";
        $this->displayBlock("root", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 8
    public function block_root($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren", array()))) {
            // line 10
            echo "        ";
            $this->displayBlock("navbar_tabs", $context, $blocks);
            echo "
        ";
            // line 11
            $this->displayBlock("navbar_tabs_content", $context, $blocks);
            echo "
    ";
        }
    }

    // line 15
    public function block_navbar_tabs($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : null), array("template" => "OroNavigationBundle:Menu:_dots_tabs.html.twig", "depth" => 1));
        // line 17
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["item"]) ? $context["item"] : null), (isset($context["options"]) ? $context["options"] : null));
        echo "
";
    }

    // line 20
    public function block_navbar_tabs_content($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : null), array("template" => "OroNavigationBundle:Menu:_dots_tabs-content.html.twig", "depth" => 1));
        // line 22
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["item"]) ? $context["item"] : null), (isset($context["options"]) ? $context["options"] : null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:dots_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 22,  79 => 21,  76 => 20,  69 => 17,  66 => 16,  63 => 15,  56 => 11,  51 => 10,  48 => 9,  45 => 8,  37 => 4,  34 => 3,  31 => 2,  11 => 1,);
    }
}
/* {% extends 'OroNavigationBundle:Menu:menu_base.html.twig' %}*/
/* {% block compressed_root %}*/
/*     {% spaceless %}*/
/*         {{ block('root') }}*/
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block root %}*/
/*     {% if item.hasChildren and options.depth is not sameas(0) and item.displayChildren %}*/
/*         {{ block('navbar_tabs') }}*/
/*         {{ block('navbar_tabs_content') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block navbar_tabs %}*/
/*     {% set options = options|merge({'template': 'OroNavigationBundle:Menu:_dots_tabs.html.twig', 'depth': 1}) %}*/
/*     {{ knp_menu_render(item, options) }}*/
/* {% endblock %}*/
/* */
/* {% block navbar_tabs_content %}*/
/*     {% set options = options|merge({'template': 'OroNavigationBundle:Menu:_dots_tabs-content.html.twig', 'depth': 1}) %}*/
/*     {{ knp_menu_render(item, options) }}*/
/* {% endblock %}*/
/* */
