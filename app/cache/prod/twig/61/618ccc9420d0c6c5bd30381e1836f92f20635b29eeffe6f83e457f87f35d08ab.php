<?php

/* PimDashboardBundle:Widget:last_operations.html.twig */
class __TwigTemplate_88fad77390a99f14dc66cb71e79cc38eef06be7ed5cdca17b282d880b05147bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimDashboardBundle:Widget:base.html.twig", "PimDashboardBundle:Widget:last_operations.html.twig", 1);
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
        $context["widgetTitle"] = $this->env->getExtension('translator')->trans("pim_dashboard.widget.last_operations.title");
        // line 5
        $context["widgetContent"] = ('' === $tmp = "    <table id=\"last-operations-widget\" class=\"table table-condensed table-light groups unspaced\"></table>

    <script type=\"text/javascript\">
        require(
            ['jquery', 'pim/dashboard/widget-container', 'pim/dashboard/last-operations-widget'],
            function (\$, widgetContainer, LastOperationsWidget) {
                'use strict';
                \$(function () {
                    var options = {el: '#last-operations-widget', alias: 'last_operations'};
                    var widget = widgetContainer.getWidget(options, LastOperationsWidget);
                    widget.setShowListBtn(options.el);
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
        return "PimDashboardBundle:Widget:last_operations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 1,  26 => 5,  24 => 3,  11 => 1,);
    }
}
/* {% extends 'PimDashboardBundle:Widget:base.html.twig' %}*/
/* */
/* {% set widgetTitle = 'pim_dashboard.widget.last_operations.title'|trans %}*/
/* */
/* {% set widgetContent %}*/
/*     <table id="last-operations-widget" class="table table-condensed table-light groups unspaced"></table>*/
/* */
/*     <script type="text/javascript">*/
/*         require(*/
/*             ['jquery', 'pim/dashboard/widget-container', 'pim/dashboard/last-operations-widget'],*/
/*             function ($, widgetContainer, LastOperationsWidget) {*/
/*                 'use strict';*/
/*                 $(function () {*/
/*                     var options = {el: '#last-operations-widget', alias: 'last_operations'};*/
/*                     var widget = widgetContainer.getWidget(options, LastOperationsWidget);*/
/*                     widget.setShowListBtn(options.el);*/
/*                     widget.render().delayedLoad();*/
/*                 });*/
/*             }*/
/*         );*/
/*     </script>*/
/* {% endset %}*/
/* */
