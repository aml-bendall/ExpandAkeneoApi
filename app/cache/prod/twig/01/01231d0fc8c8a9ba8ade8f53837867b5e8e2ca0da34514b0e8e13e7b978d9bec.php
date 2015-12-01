<?php

/* PimDataGridBundle:Datagrid:_views.html.twig */
class __TwigTemplate_1414da77a16330b9c736412d44ff8930ca9fb02f2e6b94c55d0aecd8dcdb661e extends Twig_Template
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
        echo "<select id=\"view-selector\" class=\"hide\">
    <option value=\"0\" data-default=\"1\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("datagrid_view.default"), "html", null, true);
        // line 4
        echo "</option>
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["views"]) ? $context["views"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["view"]) {
            // line 6
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["view"], "id", array()), "html", null, true);
            echo "\" data-filters=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["view"], "filters", array()), "html", null, true);
            echo "\" data-columns=\"";
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($context["view"], "columns", array()), ","), "html", null, true);
            echo "\" data-default=\"0\" data-removable=\"";
            echo ((($this->getAttribute($this->getAttribute($context["view"], "owner", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))) ? (1) : (0));
            echo "\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["view"], "label", array()), "html", null, true);
            // line 8
            echo "</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['view'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</select>

<a id=\"update-view\" class=\"muted hide\" href=\"javascript:void(0);\">
    <i class=\"icon-ok\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("datagrid_view.save_changes"), "html", null, true);
        echo "\"></i>
</a>

<a id=\"remove-view\" class=\"muted hide\" href=\"javascript:void(0);\">
    <i class=\"icon-trash\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("datagrid_view.remove"), "html", null, true);
        echo "\"></i>
</a>

<a id=\"create-view\" class=\"muted\" href=\"javascript:void(0);\">
    <i class=\"icon-plus\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("datagrid_view.create"), "html", null, true);
        echo "\"></i>
</a>

";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "hide")));
        echo "
    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array()), 'widget');
        echo "
    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "filters", array()), 'widget');
        echo "
    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "order", array()), 'widget');
        echo "
";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

<script type=\"text/javascript\">
require(
    ['jquery', 'underscore', 'backbone', 'routing', 'oro/mediator', 'pim/datagrid/state', 'oro/messenger', 'pim/dialog', 'jquery.multiselect', 'jquery.multiselect.filter'],
    function (\$, _, Backbone, Routing, mediator, DatagridState, messenger, Dialog) {
        'use strict';

        var reloadPage = function() {
            var url = window.location.hash;
            Backbone.history.fragment = new Date().getTime();
            Backbone.history.navigate(url, true);
        };

        var \$selector = \$('#view-selector');

        var activateView = function(viewId) {
            if (0 === +viewId) {
                DatagridState.remove('";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["alias"]) ? $context["alias"] : null), "html", null, true);
        echo "', ['view', 'filters', 'columns']);
            } else {
                var \$viewItem = \$selector.find('option[value=\"' + viewId + '\"]');
                if (\$viewItem.length) {
                    DatagridState.set('";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["alias"]) ? $context["alias"] : null), "html", null, true);
        echo "', { 'view': viewId, 'filters': \$viewItem.data('filters'), 'columns': \$viewItem.data('columns') });
                }
            }
        };

        var activeViewId = DatagridState.get('";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["alias"]) ? $context["alias"] : null), "html", null, true);
        echo "', 'view');
        var \$activeView  = \$selector.find('option[value=\"'+activeViewId+'\"]');

        if (!\$activeView.length) {
            \$activeView = \$selector.find('option[data-default=\"1\"]');
            activeViewId = \$activeView.val();
        }

        var activeViewLabel = \$activeView.text();

        var \$removeLink = \$('#remove-view');
        if (\$activeView.data('removable')) {
            \$removeLink.removeClass('hide').on('click', function() {
                Dialog.confirm('";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirmation.remove.datagrid view"), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirmation.delete"), "html", null, true);
        echo "', function() {
                    \$.ajax({
                        url: Routing.generate('pim_datagrid_view_remove', { id: activeViewId }),
                        type: 'POST',
                        headers: { accept:'application/json' },
                        data: { _method: 'DELETE' },
                        success: function() {
                            DatagridState.remove('";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["alias"]) ? $context["alias"] : null), "html", null, true);
        echo "', ['view', 'filters', 'columns']);
                            reloadPage();
                        }
                    });
                });
            });
        }

        var truncateTitle = function(title) {
            return title.length > 20 ? title.substr(0, 17) + '...' : title;
        };

        var opts = {
            title: truncateTitle(activeViewLabel),
            placeholder: '";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Search"), "html", null, true);
        echo "',
            header: '',
            height: 175,
            minWidth: 225,
            classes: 'pimmultiselect',
            position: {
                my: 'right top',
                at: 'right bottom',
                collision: 'none'
            }
        };
        opts.selectedText = opts.noneSelectedText = opts.title;

        \$selector.multiselect(opts).multiselectfilter({
            label: false,
            placeholder: opts.placeholder
        });

        var \$menu = \$('.ui-multiselect-menu.pimmultiselect').addClass('highlight-hover').appendTo(\$('#container'));
        \$menu.find('input[type=checkbox]').addClass('hide');
        \$menu.find('input[type=\"search\"]').width(207);

        var sendForm = function(url, cb) {
            \$.post(url, \$('#";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "').serialize(), function(response) {
                if (response && response.errors && response.errors.length) {
                    _.each(response.errors, function(error) {
                        messenger.notificationFlashMessage('error', error);
                    })
                } else if (response && response.id) {
                    DatagridState.set('";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["alias"]) ? $context["alias"] : null), "html", null, true);
        echo "', 'view', response.id);
                    if (cb) {
                        cb(response.id);
                    } else {
                        reloadPage();
                    }
                }
            });
        };

        var submitForm = function () {
            if (!\$('#";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array()), "vars", array()), "id", array()), "html", null, true);
        echo "').val()) {
                return;
            }
            \$('#";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "filters", array()), "vars", array()), "id", array()), "html", null, true);
        echo "').val(DatagridState.get('";
        echo twig_escape_filter($this->env, (isset($context["alias"]) ? $context["alias"] : null), "html", null, true);
        echo "', 'filters'));
            \$('#";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "order", array()), "vars", array()), "id", array()), "html", null, true);
        echo "').val(DatagridState.get('";
        echo twig_escape_filter($this->env, (isset($context["alias"]) ? $context["alias"] : null), "html", null, true);
        echo "', 'columns'));
            sendForm('";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pim_datagrid_view_index", array("alias" => (isset($context["alias"]) ? $context["alias"] : null))), "html", null, true);
        echo "');
        };

        var \$openButton = \$('button.pimmultiselect').addClass('btn btn-group').css({
            'margin-top': '-6px',
            'margin-left': '10px'
        }).prepend(\$('<span>', { 'text': '";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("datagrid_view.views"), "html", null, true);
        echo "', 'class': 'pull-left buffer-small-right' }).css({
            'margin-right': '10px',
            'border-right': '1px solid #ccc'
        }));
        \$openButton.append(\$('<i>', { 'class': 'icon-caret-down', 'css': { 'position': 'absolute', 'top': '6px', 'right': '6px' } }));

        var \$updateLink = \$('#update-view');
        \$updateLink.removeClass('hide').on('click', function() {
            var state = DatagridState.get('";
        // line 148
        echo twig_escape_filter($this->env, (isset($context["alias"]) ? $context["alias"] : null), "html", null, true);
        echo "', ['view', 'columns', 'filters']);
            \$('#";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "filters", array()), "vars", array()), "id", array()), "html", null, true);
        echo "').val(state.filters);
            \$('#";
        // line 150
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "order", array()), "vars", array()), "id", array()), "html", null, true);
        echo "').val(state.columns);

            sendForm(Routing.generate('pim_datagrid_view_index', { alias: '";
        // line 152
        echo twig_escape_filter($this->env, (isset($context["alias"]) ? $context["alias"] : null), "html", null, true);
        echo "', id: state.view }), function() {
                \$activeView.data('filters', state.filters);
                \$activeView.data('columns', state.columns);
                handleStateChange();
                messenger.notificationFlashMessage('success', '";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("flash.datagrid view.updated"), "html", null, true);
        echo "');
            });
        });

        var promptForLabel = function() {
            var content = '<input name=\"label\" id=\"view-label\" type=\"text\" placeholder=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("datagrid_view.placeholder"), "html", null, true);
        echo "\">';
            var label = null;
            Dialog.confirm(content, '";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("datagrid_view.choose_label"), "html", null, true);
        echo "', function() {
                \$('#";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array()), "vars", array()), "id", array()), "html", null, true);
        echo "').val(label);
                submitForm();
            });
            var \$input = \$('#view-label');
            var \$submitBtn = \$input.parent().parent().find('.btn.ok').hide();
            \$input.on('input', function() {
                label = \$input.val();
                if (!label.length) {
                    \$submitBtn.hide();
                } else {
                    \$submitBtn.show();
                }
            }).on('keypress', function(e) {
                if ((e.keyCode || e.which) == 13 && label.length) {
                    \$submitBtn.trigger('click');
                }
            });
        };

        var \$createLink = \$('#create-view').on('click', promptForLabel);

        mediator.once('hash_navigation_request:start', function() {
            \$selector.multiselect('destroy').hide();
            \$createLink.addClass('hide');
            \$updateLink.addClass('hide');
            \$removeLink.addClass('hide');
        });

        var setTitle = function(title, suffix) {
            title = truncateTitle(title);
            if (suffix) {
                title += suffix;
            }
            \$selector.multiselect({
                title: title,
                selectedText: title,
                noneSelectedText: title
            });
        };

        var handleStateChange = function() {
            var cleanState = { 'filters': \$activeView.data('filters'), 'columns': \$activeView.data('columns') };
            var currentState = DatagridState.get('";
        // line 206
        echo twig_escape_filter($this->env, (isset($context["alias"]) ? $context["alias"] : null), "html", null, true);
        echo "', ['filters', 'columns']);
            var \$updateLink = \$('#update-view');

            if ((!currentState.filters || currentState.filters == cleanState.filters)
                && (!currentState.columns || currentState.columns == cleanState.columns)
            ) {
                setTitle(activeViewLabel);
                \$updateLink.addClass('hide');

            } else {
                setTitle(activeViewLabel, ' *');
                if (!\$activeView.data('default') && \$activeView.data('removable')) {
                    \$updateLink.removeClass('hide');
                } else {
                    \$updateLink.addClass('hide');
                }
            }
        };

        handleStateChange();

        mediator.bind('grid:";
        // line 227
        echo twig_escape_filter($this->env, (isset($context["alias"]) ? $context["alias"] : null), "html", null, true);
        echo ":state_changed', handleStateChange);

        \$menu.on('click', 'li', function() {
            var gridViewId = \$(this).find('input').val();
            activateView(gridViewId);

            reloadPage();
        });
    }
);
</script>
";
    }

    public function getTemplateName()
    {
        return "PimDataGridBundle:Datagrid:_views.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 227,  341 => 206,  296 => 164,  292 => 163,  287 => 161,  279 => 156,  272 => 152,  267 => 150,  263 => 149,  259 => 148,  248 => 140,  239 => 134,  233 => 133,  227 => 132,  221 => 129,  207 => 118,  198 => 112,  172 => 89,  155 => 75,  143 => 68,  127 => 55,  119 => 50,  112 => 46,  91 => 28,  87 => 27,  83 => 26,  79 => 25,  75 => 24,  69 => 21,  62 => 17,  55 => 13,  50 => 10,  43 => 8,  41 => 7,  31 => 6,  27 => 5,  24 => 4,  22 => 3,  19 => 1,);
    }
}
/* <select id="view-selector" class="hide">*/
/*     <option value="0" data-default="1">*/
/*         {{- 'datagrid_view.default'|trans -}}*/
/*     </option>*/
/* {% for view in views %}*/
/*     <option value="{{ view.id }}" data-filters="{{ view.filters }}" data-columns="{{ view.columns|join(',') }}" data-default="0" data-removable="{{ view.owner.id == app.user.id ? 1 : 0 }}">*/
/*         {{- view.label -}}*/
/*     </option>*/
/* {% endfor %}*/
/* </select>*/
/* */
/* <a id="update-view" class="muted hide" href="javascript:void(0);">*/
/*     <i class="icon-ok" data-toggle="tooltip" data-placement="right" data-original-title="{{ 'datagrid_view.save_changes'|trans }}"></i>*/
/* </a>*/
/* */
/* <a id="remove-view" class="muted hide" href="javascript:void(0);">*/
/*     <i class="icon-trash" data-toggle="tooltip" data-placement="right" data-original-title="{{ 'datagrid_view.remove'|trans }}"></i>*/
/* </a>*/
/* */
/* <a id="create-view" class="muted" href="javascript:void(0);">*/
/*     <i class="icon-plus" data-toggle="tooltip" data-placement="right" data-original-title="{{ 'datagrid_view.create'|trans }}"></i>*/
/* </a>*/
/* */
/* {{ form_start(form, { attr: { class: 'hide' } }) }}*/
/*     {{ form_widget(form.label) }}*/
/*     {{ form_widget(form.filters) }}*/
/*     {{ form_widget(form.order) }}*/
/* {{ form_end(form) }}*/
/* */
/* <script type="text/javascript">*/
/* require(*/
/*     ['jquery', 'underscore', 'backbone', 'routing', 'oro/mediator', 'pim/datagrid/state', 'oro/messenger', 'pim/dialog', 'jquery.multiselect', 'jquery.multiselect.filter'],*/
/*     function ($, _, Backbone, Routing, mediator, DatagridState, messenger, Dialog) {*/
/*         'use strict';*/
/* */
/*         var reloadPage = function() {*/
/*             var url = window.location.hash;*/
/*             Backbone.history.fragment = new Date().getTime();*/
/*             Backbone.history.navigate(url, true);*/
/*         };*/
/* */
/*         var $selector = $('#view-selector');*/
/* */
/*         var activateView = function(viewId) {*/
/*             if (0 === +viewId) {*/
/*                 DatagridState.remove('{{ alias }}', ['view', 'filters', 'columns']);*/
/*             } else {*/
/*                 var $viewItem = $selector.find('option[value="' + viewId + '"]');*/
/*                 if ($viewItem.length) {*/
/*                     DatagridState.set('{{ alias }}', { 'view': viewId, 'filters': $viewItem.data('filters'), 'columns': $viewItem.data('columns') });*/
/*                 }*/
/*             }*/
/*         };*/
/* */
/*         var activeViewId = DatagridState.get('{{ alias }}', 'view');*/
/*         var $activeView  = $selector.find('option[value="'+activeViewId+'"]');*/
/* */
/*         if (!$activeView.length) {*/
/*             $activeView = $selector.find('option[data-default="1"]');*/
/*             activeViewId = $activeView.val();*/
/*         }*/
/* */
/*         var activeViewLabel = $activeView.text();*/
/* */
/*         var $removeLink = $('#remove-view');*/
/*         if ($activeView.data('removable')) {*/
/*             $removeLink.removeClass('hide').on('click', function() {*/
/*                 Dialog.confirm('{{ 'confirmation.remove.datagrid view'|trans }}', '{{ 'confirmation.delete'|trans }}', function() {*/
/*                     $.ajax({*/
/*                         url: Routing.generate('pim_datagrid_view_remove', { id: activeViewId }),*/
/*                         type: 'POST',*/
/*                         headers: { accept:'application/json' },*/
/*                         data: { _method: 'DELETE' },*/
/*                         success: function() {*/
/*                             DatagridState.remove('{{ alias }}', ['view', 'filters', 'columns']);*/
/*                             reloadPage();*/
/*                         }*/
/*                     });*/
/*                 });*/
/*             });*/
/*         }*/
/* */
/*         var truncateTitle = function(title) {*/
/*             return title.length > 20 ? title.substr(0, 17) + '...' : title;*/
/*         };*/
/* */
/*         var opts = {*/
/*             title: truncateTitle(activeViewLabel),*/
/*             placeholder: '{{ 'Search'|trans }}',*/
/*             header: '',*/
/*             height: 175,*/
/*             minWidth: 225,*/
/*             classes: 'pimmultiselect',*/
/*             position: {*/
/*                 my: 'right top',*/
/*                 at: 'right bottom',*/
/*                 collision: 'none'*/
/*             }*/
/*         };*/
/*         opts.selectedText = opts.noneSelectedText = opts.title;*/
/* */
/*         $selector.multiselect(opts).multiselectfilter({*/
/*             label: false,*/
/*             placeholder: opts.placeholder*/
/*         });*/
/* */
/*         var $menu = $('.ui-multiselect-menu.pimmultiselect').addClass('highlight-hover').appendTo($('#container'));*/
/*         $menu.find('input[type=checkbox]').addClass('hide');*/
/*         $menu.find('input[type="search"]').width(207);*/
/* */
/*         var sendForm = function(url, cb) {*/
/*             $.post(url, $('#{{ form.vars.id }}').serialize(), function(response) {*/
/*                 if (response && response.errors && response.errors.length) {*/
/*                     _.each(response.errors, function(error) {*/
/*                         messenger.notificationFlashMessage('error', error);*/
/*                     })*/
/*                 } else if (response && response.id) {*/
/*                     DatagridState.set('{{ alias }}', 'view', response.id);*/
/*                     if (cb) {*/
/*                         cb(response.id);*/
/*                     } else {*/
/*                         reloadPage();*/
/*                     }*/
/*                 }*/
/*             });*/
/*         };*/
/* */
/*         var submitForm = function () {*/
/*             if (!$('#{{ form.label.vars.id }}').val()) {*/
/*                 return;*/
/*             }*/
/*             $('#{{ form.filters.vars.id }}').val(DatagridState.get('{{ alias }}', 'filters'));*/
/*             $('#{{ form.order.vars.id }}').val(DatagridState.get('{{ alias }}', 'columns'));*/
/*             sendForm('{{ path('pim_datagrid_view_index', { alias: alias }) }}');*/
/*         };*/
/* */
/*         var $openButton = $('button.pimmultiselect').addClass('btn btn-group').css({*/
/*             'margin-top': '-6px',*/
/*             'margin-left': '10px'*/
/*         }).prepend($('<span>', { 'text': '{{ 'datagrid_view.views'|trans }}', 'class': 'pull-left buffer-small-right' }).css({*/
/*             'margin-right': '10px',*/
/*             'border-right': '1px solid #ccc'*/
/*         }));*/
/*         $openButton.append($('<i>', { 'class': 'icon-caret-down', 'css': { 'position': 'absolute', 'top': '6px', 'right': '6px' } }));*/
/* */
/*         var $updateLink = $('#update-view');*/
/*         $updateLink.removeClass('hide').on('click', function() {*/
/*             var state = DatagridState.get('{{ alias }}', ['view', 'columns', 'filters']);*/
/*             $('#{{ form.filters.vars.id }}').val(state.filters);*/
/*             $('#{{ form.order.vars.id }}').val(state.columns);*/
/* */
/*             sendForm(Routing.generate('pim_datagrid_view_index', { alias: '{{ alias }}', id: state.view }), function() {*/
/*                 $activeView.data('filters', state.filters);*/
/*                 $activeView.data('columns', state.columns);*/
/*                 handleStateChange();*/
/*                 messenger.notificationFlashMessage('success', '{{ 'flash.datagrid view.updated'|trans }}');*/
/*             });*/
/*         });*/
/* */
/*         var promptForLabel = function() {*/
/*             var content = '<input name="label" id="view-label" type="text" placeholder="{{ 'datagrid_view.placeholder'|trans }}">';*/
/*             var label = null;*/
/*             Dialog.confirm(content, '{{ 'datagrid_view.choose_label'|trans }}', function() {*/
/*                 $('#{{ form.label.vars.id }}').val(label);*/
/*                 submitForm();*/
/*             });*/
/*             var $input = $('#view-label');*/
/*             var $submitBtn = $input.parent().parent().find('.btn.ok').hide();*/
/*             $input.on('input', function() {*/
/*                 label = $input.val();*/
/*                 if (!label.length) {*/
/*                     $submitBtn.hide();*/
/*                 } else {*/
/*                     $submitBtn.show();*/
/*                 }*/
/*             }).on('keypress', function(e) {*/
/*                 if ((e.keyCode || e.which) == 13 && label.length) {*/
/*                     $submitBtn.trigger('click');*/
/*                 }*/
/*             });*/
/*         };*/
/* */
/*         var $createLink = $('#create-view').on('click', promptForLabel);*/
/* */
/*         mediator.once('hash_navigation_request:start', function() {*/
/*             $selector.multiselect('destroy').hide();*/
/*             $createLink.addClass('hide');*/
/*             $updateLink.addClass('hide');*/
/*             $removeLink.addClass('hide');*/
/*         });*/
/* */
/*         var setTitle = function(title, suffix) {*/
/*             title = truncateTitle(title);*/
/*             if (suffix) {*/
/*                 title += suffix;*/
/*             }*/
/*             $selector.multiselect({*/
/*                 title: title,*/
/*                 selectedText: title,*/
/*                 noneSelectedText: title*/
/*             });*/
/*         };*/
/* */
/*         var handleStateChange = function() {*/
/*             var cleanState = { 'filters': $activeView.data('filters'), 'columns': $activeView.data('columns') };*/
/*             var currentState = DatagridState.get('{{ alias }}', ['filters', 'columns']);*/
/*             var $updateLink = $('#update-view');*/
/* */
/*             if ((!currentState.filters || currentState.filters == cleanState.filters)*/
/*                 && (!currentState.columns || currentState.columns == cleanState.columns)*/
/*             ) {*/
/*                 setTitle(activeViewLabel);*/
/*                 $updateLink.addClass('hide');*/
/* */
/*             } else {*/
/*                 setTitle(activeViewLabel, ' *');*/
/*                 if (!$activeView.data('default') && $activeView.data('removable')) {*/
/*                     $updateLink.removeClass('hide');*/
/*                 } else {*/
/*                     $updateLink.addClass('hide');*/
/*                 }*/
/*             }*/
/*         };*/
/* */
/*         handleStateChange();*/
/* */
/*         mediator.bind('grid:{{ alias }}:state_changed', handleStateChange);*/
/* */
/*         $menu.on('click', 'li', function() {*/
/*             var gridViewId = $(this).find('input').val();*/
/*             activateView(gridViewId);*/
/* */
/*             reloadPage();*/
/*         });*/
/*     }*/
/* );*/
/* </script>*/
/* */
