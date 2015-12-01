<?php

/* PimEnrichBundle::layout.html.twig */
class __TwigTemplate_779c3e646b86de7b3d9106f28fde77fd7dbf1925091a7bc0a450b3e64b674a86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'page_container' => array($this, 'block_page_container'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute((isset($context["bap"]) ? $context["bap"] : null), "layout", array()), "PimEnrichBundle::layout.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["elements"] = $this->loadTemplate("PimUIBundle:Default:page_elements.html.twig", "PimEnrichBundle::layout.html.twig", 2);
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_page_container($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  27 => 1,  25 => 2,  19 => 1,);
    }
}
/* {% extends bap.layout %}*/
/* {% import 'PimUIBundle:Default:page_elements.html.twig' as elements %}*/
/* */
/* {% block page_container %}*/
/*     {% block content %}{% endblock %}*/
/* {% endblock %}*/
/* */
