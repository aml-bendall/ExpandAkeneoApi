<?php

/* PimEnrichBundle:CategoryTree:children.json.twig */
class __TwigTemplate_337b192f5b5f39b2c0e0c15ec810db8600a39942bbdddf7f1c84b9601eca29c4 extends Twig_Template
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
        echo twig_jsonencode_filter($this->env->getExtension('pim_category_extension')->childrenResponse((isset($context["categories"]) ? $context["categories"] : null), (isset($context["parent"]) ? $context["parent"] : null), (isset($context["item_count"]) ? $context["item_count"] : null), (isset($context["include_sub"]) ? $context["include_sub"] : null), (isset($context["related_entity"]) ? $context["related_entity"] : null)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:CategoryTree:children.json.twig";
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
/* {{ children_response(categories, parent, item_count, include_sub, related_entity)|json_encode|raw }}*/
/* */
