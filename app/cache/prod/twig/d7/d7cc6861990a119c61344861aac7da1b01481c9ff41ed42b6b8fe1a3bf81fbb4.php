<?php

/* OroNavigationBundle:ApplicationMenu:dotsMenu.html.twig */
class __TwigTemplate_4d07203d85bbc4f54ca007449fb520f76e5e938bc891c2467f6b2d808a0b4226 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo $this->env->getExtension('oro_menu')->render("dots_menu");
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:ApplicationMenu:dotsMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {{ oro_menu_render('dots_menu') }}*/
/* */
