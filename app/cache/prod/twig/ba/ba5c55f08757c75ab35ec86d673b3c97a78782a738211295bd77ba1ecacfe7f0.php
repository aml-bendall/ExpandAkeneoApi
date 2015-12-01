<?php

/* PimEnrichBundle:CategoryTree:listTree.json.twig */
class __TwigTemplate_6158b301f1d4c36e4525a13b8284388f2c2adaa5cd29a158a23df7be1fb52ab3 extends Twig_Template
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
        echo twig_jsonencode_filter($this->env->getExtension('pim_category_extension')->listTreesResponse((isset($context["trees"]) ? $context["trees"] : null), (isset($context["selectedTreeId"]) ? $context["selectedTreeId"] : null), (isset($context["item_count"]) ? $context["item_count"] : null), (isset($context["include_sub"]) ? $context["include_sub"] : null), (isset($context["related_entity"]) ? $context["related_entity"] : null)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:CategoryTree:listTree.json.twig";
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
/* {{ list_trees_response(trees, selectedTreeId, item_count, include_sub, related_entity)|json_encode|raw }}*/
/* */
