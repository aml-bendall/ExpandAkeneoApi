<?php

/* PimEnrichBundle:Product:index.html.twig */
class __TwigTemplate_095ba3ec41eecdbe79ea81ac0353aac022613ce9eeb7ee1348bc5de404ea9006 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimEnrichBundle::layout.html.twig", "PimEnrichBundle:Product:index.html.twig", 1);
        $this->blocks = array(
            'head_script' => array($this, 'block_head_script'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PimEnrichBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["dataGrid"] = $this->loadTemplate("PimDataGridBundle::macros.html.twig", "PimEnrichBundle:Product:index.html.twig", 2);
        // line 4
        $context["title"] = $this->env->getExtension('translator')->trans("products");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_head_script($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->displayParentBlock("head_script", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        require(['jquery', 'pim/user-context'], function (\$, UserContext) {
            'use strict';
            UserContext.set('catalogLocale', '";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataLocale"]) ? $context["dataLocale"] : null), "code", array()), "html", null, true);
        echo "');
        });

        sessionStorage.setItem('mass_edit_selected_attributes', JSON.stringify([]));
    </script>
";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "
    ";
        // line 20
        ob_start();
        // line 21
        echo "        ";
        $this->loadTemplate("PimEnrichBundle:Product:_index_buttons.html.twig", "PimEnrichBundle:Product:index.html.twig", 21)->display($context);
        // line 22
        echo "    ";
        $context["buttons"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 23
        echo "
    ";
        // line 24
        ob_start();
        // line 25
        echo "        ";
        $this->loadTemplate("PimEnrichBundle:Locale:_locale_switcher.html.twig", "PimEnrichBundle:Product:index.html.twig", 25)->display(array("locales" =>         // line 26
(isset($context["locales"]) ? $context["locales"] : null), "currentLocaleCode" => $this->getAttribute(        // line 27
(isset($context["dataLocale"]) ? $context["dataLocale"] : null), "code", array()), "routeName" => "pim_enrich_product_index"));
        // line 30
        echo "        ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("pim_datagrid.controller.datagrid_view:indexAction", array("alias" => "product-grid")));
        echo "
    ";
        $context["subtitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 32
        echo "
    ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), "page_header", array(0 => (isset($context["title"]) ? $context["title"] : null), 1 => (isset($context["buttons"]) ? $context["buttons"] : null), 2 => (isset($context["subtitle"]) ? $context["subtitle"] : null)), "method"), "html", null, true);
        echo "

    ";
        // line 35
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("pim_enrich_product_category_list")) {
            // line 36
            echo "        <script type=\"text/javascript\">
            require(['jquery', 'jquery.sidebarize'], function (\$) {
                'use strict';

                \$(function() {
                    \$('.has-sidebar').sidebarize();
                });
            });
        </script>

        <div class=\"row-fluid has-sidebar\">
            <div id=\"tree\" data-datalocale=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataLocale"]) ? $context["dataLocale"] : null), "code", array()), "html", null, true);
            echo "\" data-relatedentity=\"product\"></div>
            <div id=\"product-grid\">
                ";
            // line 49
            echo $context["dataGrid"]->getrenderStatefulGrid("product-grid", array("dataLocale" => $this->getAttribute((isset($context["dataLocale"]) ? $context["dataLocale"] : null), "code", array())), array(), "pim_enrich_categorytree");
            echo "
            </div>
        </div>
    ";
        } else {
            // line 53
            echo "        <div class=\"row-fluid\">
            <div id=\"product-grid\">
                ";
            // line 55
            echo $context["dataGrid"]->getrenderStatefulGrid("product-grid", array("dataLocale" => $this->getAttribute((isset($context["dataLocale"]) ? $context["dataLocale"] : null), "code", array())), array(), "pim_enrich_categorytree");
            echo "
            </div>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Product:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 55,  120 => 53,  113 => 49,  108 => 47,  95 => 36,  93 => 35,  88 => 33,  85 => 32,  79 => 30,  77 => 27,  76 => 26,  74 => 25,  72 => 24,  69 => 23,  66 => 22,  63 => 21,  61 => 20,  58 => 19,  55 => 18,  45 => 11,  37 => 7,  34 => 6,  30 => 1,  28 => 4,  26 => 2,  11 => 1,);
    }
}
/* {% extends 'PimEnrichBundle::layout.html.twig' %}*/
/* {% import 'PimDataGridBundle::macros.html.twig' as dataGrid %}*/
/* */
/* {% set title = 'products'|trans %}*/
/* */
/* {% block head_script %}*/
/*     {{ parent() }}*/
/*     <script type="text/javascript">*/
/*         require(['jquery', 'pim/user-context'], function ($, UserContext) {*/
/*             'use strict';*/
/*             UserContext.set('catalogLocale', '{{ dataLocale.code }}');*/
/*         });*/
/* */
/*         sessionStorage.setItem('mass_edit_selected_attributes', JSON.stringify([]));*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     {% set buttons %}*/
/*         {% include 'PimEnrichBundle:Product:_index_buttons.html.twig' %}*/
/*     {% endset %}*/
/* */
/*     {% set subtitle %}*/
/*         {% include 'PimEnrichBundle:Locale:_locale_switcher.html.twig' with {*/
/*             'locales':           locales,*/
/*             'currentLocaleCode': dataLocale.code,*/
/*             'routeName':         'pim_enrich_product_index'*/
/*         } only %}*/
/*         {{ render(controller('pim_datagrid.controller.datagrid_view:indexAction', { 'alias': 'product-grid' })) }}*/
/*     {% endset %}*/
/* */
/*     {{ elements.page_header(title, buttons, subtitle) }}*/
/* */
/*     {% if resource_granted('pim_enrich_product_category_list') %}*/
/*         <script type="text/javascript">*/
/*             require(['jquery', 'jquery.sidebarize'], function ($) {*/
/*                 'use strict';*/
/* */
/*                 $(function() {*/
/*                     $('.has-sidebar').sidebarize();*/
/*                 });*/
/*             });*/
/*         </script>*/
/* */
/*         <div class="row-fluid has-sidebar">*/
/*             <div id="tree" data-datalocale="{{ dataLocale.code }}" data-relatedentity="product"></div>*/
/*             <div id="product-grid">*/
/*                 {{ dataGrid.renderStatefulGrid('product-grid', { dataLocale: dataLocale.code }, {}, 'pim_enrich_categorytree') }}*/
/*             </div>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="row-fluid">*/
/*             <div id="product-grid">*/
/*                 {{ dataGrid.renderStatefulGrid('product-grid', { dataLocale: dataLocale.code }, {}, 'pim_enrich_categorytree') }}*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
