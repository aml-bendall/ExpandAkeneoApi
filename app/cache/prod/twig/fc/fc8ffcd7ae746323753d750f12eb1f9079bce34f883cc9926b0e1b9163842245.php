<?php

/* PimDataGridBundle:Property:completeness.html.twig */
class __TwigTemplate_e3a5d91d2ef4f1a885353d073eb8c8161cde8e96777ae9a077a73ac14ab27e62 extends Twig_Template
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
        if (((isset($context["value"]) ? $context["value"] : null) == 100)) {
            // line 2
            echo "    ";
            $context["class"] = "success";
        } elseif ((        // line 3
(isset($context["value"]) ? $context["value"] : null) == 0)) {
            // line 4
            echo "    ";
            $context["class"] = "important";
        } else {
            // line 6
            echo "    ";
            $context["class"] = "warning";
        }
        // line 8
        echo "
";
        // line 9
        if ((null === (isset($context["value"]) ? $context["value"] : null))) {
            // line 10
            echo " -
";
        } else {
            // line 12
            echo "    <span class=\"label label-";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "%</span>
";
        }
    }

    public function getTemplateName()
    {
        return "PimDataGridBundle:Property:completeness.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 12,  39 => 10,  37 => 9,  34 => 8,  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if value == 100 %}*/
/*     {% set class = 'success' %}*/
/* {% elseif value == 0 %}*/
/*     {% set class = 'important' %}*/
/* {% else %}*/
/*     {% set class = 'warning' %}*/
/* {% endif %}*/
/* */
/* {% if value is null %}*/
/*  -*/
/* {% else %}*/
/*     <span class="label label-{{ class }}">{{ value }}%</span>*/
/* {% endif %}*/
/* */
