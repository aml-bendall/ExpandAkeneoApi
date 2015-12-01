<?php

/* PimDashboardBundle:Dashboard:version.html.twig */
class __TwigTemplate_38ddfcffc80917a040a790b040c8b4daff7d3d9226b13c9491ebf7357605b804 extends Twig_Template
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
        echo "<div class=\"current-version\"><span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("pim_dashboard.version"), "html", null, true);
        echo ":</span><span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('pim_version_extension')->version(), "html", null, true);
        echo "</span></div>
";
    }

    public function getTemplateName()
    {
        return "PimDashboardBundle:Dashboard:version.html.twig";
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
/* <div class="current-version"><span>{{ 'pim_dashboard.version'|trans }}:</span><span>{{ version() }}</span></div>*/
/* */
