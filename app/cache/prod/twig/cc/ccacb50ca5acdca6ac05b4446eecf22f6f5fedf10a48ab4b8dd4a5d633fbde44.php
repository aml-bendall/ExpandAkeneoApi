<?php

/* OroNavigationBundle:ApplicationMenu:applicationMenu.html.twig */
class __TwigTemplate_ce6f25cfbe2cc8bb937901638f7e94724d2bf2ff23de11c4ed0b6ece4d11b7b1 extends Twig_Template
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
        echo $this->env->getExtension('oro_menu')->render("application_menu");
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:ApplicationMenu:applicationMenu.html.twig";
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
/* {{ oro_menu_render('application_menu') }}*/
/* */
