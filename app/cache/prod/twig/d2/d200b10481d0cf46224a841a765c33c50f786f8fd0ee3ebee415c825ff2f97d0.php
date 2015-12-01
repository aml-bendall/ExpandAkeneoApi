<?php

/* PimDataGridBundle:Datagrid:load.json.twig */
class __TwigTemplate_7f286100376c909bf6939340a96fe260a182c9240143dd1bc9dada542cba800e extends Twig_Template
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
        echo "{
    \"metadata\": ";
        // line 2
        echo twig_jsonencode_filter($this->env->getExtension('oro_datagrid_metadata')->getGridMetadata((isset($context["alias"]) ? $context["alias"] : null), (isset($context["params"]) ? $context["params"] : null)));
        echo ",
    \"data\": ";
        // line 3
        echo twig_jsonencode_filter($this->env->getExtension('oro_datagrid_metadata')->getGridData($this->env, (isset($context["alias"]) ? $context["alias"] : null), (isset($context["params"]) ? $context["params"] : null)));
        echo "
}
";
    }

    public function getTemplateName()
    {
        return "PimDataGridBundle:Datagrid:load.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* {*/
/*     "metadata": {{ oro_datagrid_metadata(alias, params)|json_encode|raw }},*/
/*     "data": {{ oro_datagrid_data(alias, params)|json_encode|raw }}*/
/* }*/
/* */
