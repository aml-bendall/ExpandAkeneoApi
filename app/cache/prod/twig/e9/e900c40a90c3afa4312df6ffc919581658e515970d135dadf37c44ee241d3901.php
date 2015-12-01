<?php

/* PimEnrichBundle:Product:_index_buttons.html.twig */
class __TwigTemplate_dcba47d93c7294e375035738f2184c94d17af5f55b701d438f2016d72653dc48 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), "createBtn", array(0 => "product", 1 => $this->env->getExtension('routing')->getPath("pim_enrich_product_create"), 2 => "dialog", 3 => "pim_enrich_product_create", 4 => "plus"), "method"), "html", null, true);
        // line 7
        echo "
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Product:_index_buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 7,  19 => 1,);
    }
}
/* {{ elements.createBtn(*/
/*     'product',*/
/*     path('pim_enrich_product_create'),*/
/*     'dialog',*/
/*     'pim_enrich_product_create',*/
/*     'plus'*/
/* ) }}*/
/* */
