<?php

/* PimDashboardBundle:Widget:completeness.html.twig */
class __TwigTemplate_bb492ef6aa4de28d30ef371f30ea2d526ee8b03adbbe2d320c66ca1b530018f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimDashboardBundle:Widget:base.html.twig", "PimDashboardBundle:Widget:completeness.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "PimDashboardBundle:Widget:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["widgetTitle"] = $this->env->getExtension('translator')->trans("pim_dashboard.widget.completeness.title");
        // line 5
        $context["widgetContent"] = ('' === $tmp = "    <table id=\"completeness-widget\"></table>

    <script type=\"text/javascript\">
        require(
            ['jquery', 'pim/dashboard/widget-container', 'pim/dashboard/completeness-widget'],
            function (\$, widgetContainer, CompletenessWidget) {
                'use strict';
                \$(function () {
                    var options = {el: '#completeness-widget', alias: 'completeness'};
                    var widget = widgetContainer.getWidget(options, CompletenessWidget);
                    widget.render().delayedLoad();
                });
            }
        );
    </script>
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "PimDashboardBundle:Widget:completeness.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,  26 => 5,  24 => 3,  11 => 1,);
    }
}
/* {% extends 'PimDashboardBundle:Widget:base.html.twig' %}*/
/* */
/* {% set widgetTitle = 'pim_dashboard.widget.completeness.title'|trans %}*/
/* */
/* {% set widgetContent %}*/
/*     <table id="completeness-widget"></table>*/
/* */
/*     <script type="text/javascript">*/
/*         require(*/
/*             ['jquery', 'pim/dashboard/widget-container', 'pim/dashboard/completeness-widget'],*/
/*             function ($, widgetContainer, CompletenessWidget) {*/
/*                 'use strict';*/
/*                 $(function () {*/
/*                     var options = {el: '#completeness-widget', alias: 'completeness'};*/
/*                     var widget = widgetContainer.getWidget(options, CompletenessWidget);*/
/*                     widget.render().delayedLoad();*/
/*                 });*/
/*             }*/
/*         );*/
/*     </script>*/
/* {% endset %}*/
/* */
