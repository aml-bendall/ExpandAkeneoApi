<?php

/* OroNavigationBundle:ApplicationMenu:breabcrumbs.html.twig */
class __TwigTemplate_85b5d1174ac01b05dd67772a110e51605961e33cd4d5647c7e7a347b6c4012a1 extends Twig_Template
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
        echo $this->env->getExtension('oro_menu')->renderBreadCrumbs($this->env, "application_menu");
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:ApplicationMenu:breabcrumbs.html.twig";
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
/* {{ oro_breadcrumbs('application_menu') }}*/
