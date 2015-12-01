<?php

/* PimDataGridBundle::macros.html.twig */
class __TwigTemplate_c4f631284dd83aad49d0358a1957eb299fa8866f7617a1a9e127b18424b8b618 extends Twig_Template
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
        // line 20
        echo "
";
        // line 88
        echo "
";
    }

    // line 4
    public function getrenderGrid($__name__ = null, $__params__ = array(), $__renderParams__ = array())
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "params" => $__params__,
            "renderParams" => $__renderParams__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 5
            echo "    ";
            $context["metaData"] = $this->env->getExtension('oro_datagrid_metadata')->getGridMetadata((isset($context["name"]) ? $context["name"] : null), (isset($context["params"]) ? $context["params"] : null));
            // line 6
            echo "
    <div id=\"grid-";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" data-type=\"datagrid\" data-data=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('oro_datagrid_metadata')->getGridData($this->env, (isset($context["name"]) ? $context["name"] : null), (isset($context["params"]) ? $context["params"] : null)));
            echo "\"
         ";
            // line 8
            if ($this->getAttribute((isset($context["renderParams"]) ? $context["renderParams"] : null), "cssClass", array(), "any", true, true)) {
                echo " class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["renderParams"]) ? $context["renderParams"] : null), "cssClass", array()), "html", null, true);
                echo "\" ";
            }
            // line 9
            echo "         data-metadata=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["metaData"]) ? $context["metaData"] : null)), "html", null, true);
            echo "\"></div>
    <script type=\"text/javascript\">
        require(['jquery', 'oro/datagrid-builder'].concat(";
            // line 11
            echo twig_jsonencode_filter($this->getAttribute((isset($context["metaData"]) ? $context["metaData"] : null), "requireJSModules", array()));
            echo "),
        function (\$, datagridBuilder) {
            var builders = _.toArray(arguments).slice(2);
            \$(function () {
                datagridBuilder(builders);
            });
        });
    </script>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 24
    public function getrenderStatefulGrid($__name__ = null, $__params__ = array(), $__renderParams__ = array(), $__categoryBaseRoute__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "params" => $__params__,
            "renderParams" => $__renderParams__,
            "categoryBaseRoute" => $__categoryBaseRoute__,
            "varargs" => func_num_args() > 4 ? array_slice(func_get_args(), 4) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 25
            echo "    <div id=\"grid-";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" data-type=\"datagrid\" ";
            if ($this->getAttribute((isset($context["renderParams"]) ? $context["renderParams"] : null), "cssClass", array(), "any", true, true)) {
                echo " class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["renderParams"]) ? $context["renderParams"] : null), "cssClass", array()), "html", null, true);
                echo "\" ";
            }
            echo "></div>
    <script type=\"text/javascript\">
        require(
            ['jquery', 'routing', 'oro/datagrid-builder', 'oro/pageable-collection', 'pim/datagrid/state', 'oro/datafilter/product_category-filter'],
            function (\$, Routing, datagridBuilder, PageableCollection, DatagridState, CategoryFilter) {
                'use strict';
                \$(function() {
                    var urlParams = ";
            // line 32
            echo twig_jsonencode_filter((isset($context["params"]) ? $context["params"] : null));
            echo ";
                    urlParams.alias = '";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "';
                    urlParams.params = ";
            // line 34
            echo twig_jsonencode_filter((isset($context["params"]) ? $context["params"] : null));
            echo ";

                    var state = DatagridState.get('";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "', ['view', 'filters', 'columns']);

                    if (state.view) {
                        urlParams['";
            // line 39
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "[_parameters][view][id]'] = state.view;
                    }

                    if (state.filters) {
                        var collection = new PageableCollection();

                        var filters = collection.decodeStateData(state.filters);
                        collection.processFiltersParams(urlParams, filters, '";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "[_filter]');

                        for (var column in filters.sorters) {
                            urlParams['";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "[_sort_by][' + column + ']'] =
                                parseInt(filters.sorters[column]) === 1 ?
                                    'DESC' :
                                    'ASC';
                        }

                        if (undefined != filters.pageSize) {
                            urlParams['";
            // line 56
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "[_pager][_per_page]'] = filters.pageSize;
                        }
                    }

                    if (state.columns) {
                        urlParams['";
            // line 61
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "[_parameters][view][columns]'] = state.columns;
                    }

                    ";
            // line 64
            if ( !(null === (isset($context["categoryBaseRoute"]) ? $context["categoryBaseRoute"] : null))) {
                // line 65
                echo "                    var categoryFilter = new CategoryFilter(urlParams, '";
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, (isset($context["categoryBaseRoute"]) ? $context["categoryBaseRoute"] : null), "html", null, true);
                echo "');
                    ";
            }
            // line 67
            echo "
                    \$.get(Routing.generate('pim_datagrid_load', urlParams), function(resp) {
                        if (state.columns) {
                            resp.metadata.state.parameters = _.extend({}, resp.metadata.state.parameters, { view: { columns: state.columns }});
                        }
                        \$('#grid-";
            // line 72
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "').data({ 'metadata': resp.metadata, 'data': JSON.parse(resp.data) });

                        var modules = resp.metadata.requireJSModules;
                        modules.push('pim/datagrid/state-listener');
                        require(modules, function () {
                            var builders = _.toArray(arguments);
                            \$(function () {
                                datagridBuilder(builders);
                            });
                        });
                    });
                });
            }
        );
    </script>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 92
    public function getrenderHistoryGrid($__entity__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "entity" => $__entity__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 93
            echo "    ";
            echo $this->getAttribute($this, "renderGrid", array(0 => "history-grid", 1 => array("object_class" => $this->env->getExtension('pim_object_class_extension')->getClass((isset($context["entity"]) ? $context["entity"] : null)), "object_id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "PimDataGridBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 93,  220 => 92,  193 => 72,  186 => 67,  178 => 65,  176 => 64,  170 => 61,  162 => 56,  152 => 49,  146 => 46,  136 => 39,  130 => 36,  125 => 34,  121 => 33,  117 => 32,  100 => 25,  85 => 24,  65 => 11,  59 => 9,  53 => 8,  47 => 7,  44 => 6,  41 => 5,  27 => 4,  22 => 88,  19 => 20,);
    }
}
/* {#*/
/*     Renders datagrid widget*/
/* #}*/
/* {% macro renderGrid(name, params = {}, renderParams = {}) %}*/
/*     {% set metaData = oro_datagrid_metadata(name, params) %}*/
/* */
/*     <div id="grid-{{ name }}" data-type="datagrid" data-data="{{ oro_datagrid_data(name, params)|escape }}"*/
/*          {% if renderParams.cssClass is defined %} class="{{ renderParams.cssClass }}" {% endif %}*/
/*          data-metadata="{{ metaData|json_encode }}"></div>*/
/*     <script type="text/javascript">*/
/*         require(['jquery', 'oro/datagrid-builder'].concat({{ metaData.requireJSModules|json_encode|raw }}),*/
/*         function ($, datagridBuilder) {*/
/*             var builders = _.toArray(arguments).slice(2);*/
/*             $(function () {*/
/*                 datagridBuilder(builders);*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endmacro %}*/
/* */
/* {#*/
/*     Datagrid macro to load the grid asynchronously*/
/* #}*/
/* {% macro renderStatefulGrid(name, params = {}, renderParams = {}, categoryBaseRoute = null) %}*/
/*     <div id="grid-{{ name }}" data-type="datagrid" {% if renderParams.cssClass is defined %} class="{{ renderParams.cssClass }}" {% endif %}></div>*/
/*     <script type="text/javascript">*/
/*         require(*/
/*             ['jquery', 'routing', 'oro/datagrid-builder', 'oro/pageable-collection', 'pim/datagrid/state', 'oro/datafilter/product_category-filter'],*/
/*             function ($, Routing, datagridBuilder, PageableCollection, DatagridState, CategoryFilter) {*/
/*                 'use strict';*/
/*                 $(function() {*/
/*                     var urlParams = {{ params|json_encode|raw }};*/
/*                     urlParams.alias = '{{ name }}';*/
/*                     urlParams.params = {{ params|json_encode|raw }};*/
/* */
/*                     var state = DatagridState.get('{{ name }}', ['view', 'filters', 'columns']);*/
/* */
/*                     if (state.view) {*/
/*                         urlParams['{{ name }}[_parameters][view][id]'] = state.view;*/
/*                     }*/
/* */
/*                     if (state.filters) {*/
/*                         var collection = new PageableCollection();*/
/* */
/*                         var filters = collection.decodeStateData(state.filters);*/
/*                         collection.processFiltersParams(urlParams, filters, '{{ name }}[_filter]');*/
/* */
/*                         for (var column in filters.sorters) {*/
/*                             urlParams['{{ name }}[_sort_by][' + column + ']'] =*/
/*                                 parseInt(filters.sorters[column]) === 1 ?*/
/*                                     'DESC' :*/
/*                                     'ASC';*/
/*                         }*/
/* */
/*                         if (undefined != filters.pageSize) {*/
/*                             urlParams['{{ name }}[_pager][_per_page]'] = filters.pageSize;*/
/*                         }*/
/*                     }*/
/* */
/*                     if (state.columns) {*/
/*                         urlParams['{{ name }}[_parameters][view][columns]'] = state.columns;*/
/*                     }*/
/* */
/*                     {% if categoryBaseRoute is not null %}*/
/*                     var categoryFilter = new CategoryFilter(urlParams, '{{ name }}', '{{ categoryBaseRoute }}');*/
/*                     {% endif %}*/
/* */
/*                     $.get(Routing.generate('pim_datagrid_load', urlParams), function(resp) {*/
/*                         if (state.columns) {*/
/*                             resp.metadata.state.parameters = _.extend({}, resp.metadata.state.parameters, { view: { columns: state.columns }});*/
/*                         }*/
/*                         $('#grid-{{ name }}').data({ 'metadata': resp.metadata, 'data': JSON.parse(resp.data) });*/
/* */
/*                         var modules = resp.metadata.requireJSModules;*/
/*                         modules.push('pim/datagrid/state-listener');*/
/*                         require(modules, function () {*/
/*                             var builders = _.toArray(arguments);*/
/*                             $(function () {*/
/*                                 datagridBuilder(builders);*/
/*                             });*/
/*                         });*/
/*                     });*/
/*                 });*/
/*             }*/
/*         );*/
/*     </script>*/
/* {% endmacro %}*/
/* */
/* {#*/
/*     Datagrid macro to render entity history grid*/
/* #}*/
/* {% macro renderHistoryGrid(entity) %}*/
/*     {{ _self.renderGrid('history-grid', { object_class: entity|class, object_id: entity.id }) }}*/
/* {% endmacro %}*/
/* */
