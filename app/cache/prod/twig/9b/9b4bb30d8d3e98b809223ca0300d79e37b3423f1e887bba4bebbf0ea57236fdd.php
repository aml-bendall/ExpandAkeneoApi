<?php

/* OroUIBundle::requirejs.config.js.twig */
class __TwigTemplate_af6977e81f2afd343e25a535adfdded99d07f261360a322664d1f1313783a02d extends Twig_Template
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
        echo "require({
    baseUrl: ";
        // line 2
        echo twig_jsonencode_filter($this->env->getExtension('asset')->getAssetUrl("bundles"));
        echo "
});
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle::requirejs.config.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* require({*/
/*     baseUrl: {{ asset('bundles')|json_encode|raw }}*/
/* });*/
/* */
