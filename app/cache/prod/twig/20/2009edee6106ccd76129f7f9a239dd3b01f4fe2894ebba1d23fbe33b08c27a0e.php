<?php

/* PimEnrichBundle::base.html.twig */
class __TwigTemplate_062dabe094f40010ab4e319724e5aa9cbb3fa89a9f3b0ce5c949cd3c3733a2b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimUIBundle:Default:index.html.twig", "PimEnrichBundle::base.html.twig", 1);
        $this->blocks = array(
            'head_script' => array($this, 'block_head_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PimUIBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head_script($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("head_script", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        require(['pim/init'], function(init) {
            init();
        });
    </script>
    ";
        // line 10
        if ( !(null === (isset($context["uservoice_key"]) ? $context["uservoice_key"] : null))) {
            // line 11
            echo "        ";
            $this->loadTemplate("PimUIBundle:Default:pim_uservoice.js.twig", "PimEnrichBundle::base.html.twig", 11)->display($context);
            // line 12
            echo "    ";
        }
        // line 13
        echo "    ";
        $this->displayBlock("head_script_component", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 13,  46 => 12,  43 => 11,  41 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "PimUIBundle:Default:index.html.twig" %}*/
/* */
/* {% block head_script %}*/
/*     {{ parent() }}*/
/*     <script type="text/javascript">*/
/*         require(['pim/init'], function(init) {*/
/*             init();*/
/*         });*/
/*     </script>*/
/*     {% if uservoice_key is not null %}*/
/*         {% include 'PimUIBundle:Default:pim_uservoice.js.twig' %}*/
/*     {% endif %}*/
/*     {{ block('head_script_component') }}*/
/* {% endblock %}*/
/* */
