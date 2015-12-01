<?php

/* PimDataGridBundle:Property:enabled.html.twig */
class __TwigTemplate_3c0542abe82e6fae4a77f214e55217c461e498e49606b80667f7000dc480d09a extends Twig_Template
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
        $context["status"] = (((isset($context["value"]) ? $context["value"] : null)) ? ("enabled") : ("disabled"));
        // line 2
        echo "<div class=\"badge badge-";
        echo twig_escape_filter($this->env, (isset($context["status"]) ? $context["status"] : null), "html", null, true);
        echo " status-";
        echo twig_escape_filter($this->env, (isset($context["status"]) ? $context["status"] : null), "html", null, true);
        echo "\"><i class=\"icon-status-";
        echo twig_escape_filter($this->env, (isset($context["status"]) ? $context["status"] : null), "html", null, true);
        echo " icon-circle\"></i>";
        echo twig_escape_filter($this->env, (((isset($context["value"]) ? $context["value"] : null)) ? ($this->env->getExtension('translator')->trans("Enabled")) : ($this->env->getExtension('translator')->trans("Disabled"))), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "PimDataGridBundle:Property:enabled.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
/* {% set status = value ? 'enabled' : 'disabled' %}*/
/* <div class="badge badge-{{ status }} status-{{ status }}"><i class="icon-status-{{ status }} icon-circle"></i>{{ value ? 'Enabled'|trans : 'Disabled'|trans }}</div>*/
/* */
