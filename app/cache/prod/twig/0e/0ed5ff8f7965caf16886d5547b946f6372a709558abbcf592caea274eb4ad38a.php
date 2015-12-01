<?php

/* PimEnrichBundle:Product:edit.html.twig */
class __TwigTemplate_85555f926b2124497e2fbaf896c69ef4f836d36705d55f7be161df0b79e8a482 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimEnrichBundle::layout.html.twig", "PimEnrichBundle:Product:edit.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'before_content' => array($this, 'block_before_content'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'messages' => array($this, 'block_messages'),
            'page_container' => array($this, 'block_page_container'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PimEnrichBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"main\">
        ";
        // line 5
        $this->displayBlock('before_content', $context, $blocks);
        // line 46
        echo "        <div class=\"hash-loading-mask\"></div>
        <div id=\"container\">
            ";
        // line 48
        $this->displayBlock('page_container', $context, $blocks);
        // line 91
        echo "        </div>
    </div>
";
    }

    // line 5
    public function block_before_content($context, array $blocks = array())
    {
        // line 6
        echo "        <div class=\"container-fluid breadcrumb-pin\">
            <div id=\"breadcrumb\">
                ";
        // line 8
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 11
        echo "            </div>
            ";
        // line 12
        $this->loadTemplate("OroNavigationBundle:ApplicationMenu:pinButton.html.twig", "PimEnrichBundle:Product:edit.html.twig", 12)->display($context);
        // line 13
        echo "            <div id=\"flash-messages\">
                ";
        // line 14
        $this->displayBlock('messages', $context, $blocks);
        // line 43
        echo "            </div>
        </div>
        ";
    }

    // line 8
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 9
        echo "                    ";
        $this->loadTemplate("OroNavigationBundle:ApplicationMenu:breabcrumbs.html.twig", "PimEnrichBundle:Product:edit.html.twig", 9)->display($context);
        // line 10
        echo "                ";
    }

    // line 14
    public function block_messages($context, array $blocks = array())
    {
        // line 15
        echo "                    <div class=\"flash-messages-frame\">
                        <div class=\"flash-messages-holder\"></div>
                    </div>
                    <script type=\"text/template\" id=\"message-item-template\">
                        <div class=\"alert <% if (type) {  %><%= 'alert-' + type %><% } %> fade in top-messages \">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                            <div class=\"message\"><%= message %></div>
                        </div>
                    </script>
                    <script type=\"text/javascript\">
                        require(['jquery', 'oro/messenger'],
                                function(\$, messenger) {
                                    messenger.setup({
                                        container: '#flash-messages .flash-messages-holder',
                                        template: _.template(\$.trim(\$('#message-item-template').html()))
                                    });
                                    ";
        // line 31
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "peekAll", array())) > 0)) {
            // line 32
            echo "                                        \$(function() {
                                            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "all", array()));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 34
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 35
                    echo "                                                    messenger.notificationFlashMessage(";
                    echo twig_jsonencode_filter($context["type"]);
                    echo ", ";
                    echo twig_jsonencode_filter($this->env->getExtension('translator')->trans($context["message"]));
                    echo ");
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                                        });
                                    ";
        }
        // line 40
        echo "                                });
                    </script>
                ";
    }

    // line 48
    public function block_page_container($context, array $blocks = array())
    {
        // line 49
        echo "                ";
        $this->displayBlock('content', $context, $blocks);
        // line 90
        echo "            ";
    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
        // line 50
        echo "                    ";
        // line 51
        echo "                    <div id=\"product-edit-form\">

                    </div>
                    <script>
                        require(
                            ['jquery', 'pim/fetcher-registry', 'pim/form-builder', 'pim/product-manager', 'pim/user-context', 'pim/dialog', 'oro/mediator', 'pim/error', 'oro/navigation'],
                            function(\$, FetcherRegistry, FormBuilder, ProductManager, UserContext, Dialog, mediator, Error, Navigation) {
                                \$(function() {
                                    FetcherRegistry.initialize().done(function () {
                                        ProductManager.get('";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["productId"]) ? $context["productId"] : null), "html", null, true);
        echo "')
                                            .then(function (product) {
                                                var sku      = _.escape(product.meta.label[UserContext.get('catalogLocale')]);
                                                var newTitle = document.title.replace('%product.sku%', sku);

                                                document.title  = newTitle;
                                                var navigation  = Navigation.getInstance();
                                                var navTitle    = navigation.getPinButtonsData('title');
                                                navTitle.params = {'%product.sku%': sku};
                                                navigation.setPinButtonsData('title', navTitle);
                                                navigation.setPinButtonsData('title-rendered-short', newTitle);

                                                FormBuilder.build(product.meta.form)
                                                    .then(function (form) {
                                                        form.setData(product);

                                                        mediator.trigger('pim_enrich:form:entity:post_fetch', product);

                                                        form.setElement('#product-edit-form').render();
                                                    });
                                            }).fail(function(response, textStatus, errorThrown) {
                                                var errorView = new Error(response.responseJSON.message, response.status);
                                                errorView.setElement('#product-edit-form').render();
                                            });
                                    })
                                });
                            });
                    </script>
                    ";
        // line 89
        echo "                ";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Product:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 89,  176 => 60,  165 => 51,  163 => 50,  160 => 49,  156 => 90,  153 => 49,  150 => 48,  144 => 40,  140 => 38,  134 => 37,  123 => 35,  118 => 34,  114 => 33,  111 => 32,  109 => 31,  91 => 15,  88 => 14,  84 => 10,  81 => 9,  78 => 8,  72 => 43,  70 => 14,  67 => 13,  65 => 12,  62 => 11,  60 => 8,  56 => 6,  53 => 5,  47 => 91,  45 => 48,  41 => 46,  39 => 5,  36 => 4,  33 => 3,  11 => 1,);
    }
}
/* {% extends 'PimEnrichBundle::layout.html.twig' %}*/
/* */
/* {% block main %}*/
/*     <div id="main">*/
/*         {% block before_content %}*/
/*         <div class="container-fluid breadcrumb-pin">*/
/*             <div id="breadcrumb">*/
/*                 {% block breadcrumb %}*/
/*                     {% placeholder breadcrumb %}*/
/*                 {% endblock breadcrumb %}*/
/*             </div>*/
/*             {% placeholder pin_button %}*/
/*             <div id="flash-messages">*/
/*                 {% block messages %}*/
/*                     <div class="flash-messages-frame">*/
/*                         <div class="flash-messages-holder"></div>*/
/*                     </div>*/
/*                     <script type="text/template" id="message-item-template">*/
/*                         <div class="alert <% if (type) {  %><%= 'alert-' + type %><% } %> fade in top-messages ">*/
/*                             <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*                             <div class="message"><%= message %></div>*/
/*                         </div>*/
/*                     </script>*/
/*                     <script type="text/javascript">*/
/*                         require(['jquery', 'oro/messenger'],*/
/*                                 function($, messenger) {*/
/*                                     messenger.setup({*/
/*                                         container: '#flash-messages .flash-messages-holder',*/
/*                                         template: _.template($.trim($('#message-item-template').html()))*/
/*                                     });*/
/*                                     {% if app.session.flashbag.peekAll|length > 0 %}*/
/*                                         $(function() {*/
/*                                             {% for type, messages in app.session.flashbag.all %}*/
/*                                                 {% for message in messages %}*/
/*                                                     messenger.notificationFlashMessage({{ type|json_encode|raw }}, {{ message|trans|json_encode|raw }});*/
/*                                                 {% endfor %}*/
/*                                             {% endfor %}*/
/*                                         });*/
/*                                     {% endif %}*/
/*                                 });*/
/*                     </script>*/
/*                 {% endblock messages %}*/
/*             </div>*/
/*         </div>*/
/*         {% endblock before_content %}*/
/*         <div class="hash-loading-mask"></div>*/
/*         <div id="container">*/
/*             {% block page_container %}*/
/*                 {% block content %}*/
/*                     {% placeholder content_before %}*/
/*                     <div id="product-edit-form">*/
/* */
/*                     </div>*/
/*                     <script>*/
/*                         require(*/
/*                             ['jquery', 'pim/fetcher-registry', 'pim/form-builder', 'pim/product-manager', 'pim/user-context', 'pim/dialog', 'oro/mediator', 'pim/error', 'oro/navigation'],*/
/*                             function($, FetcherRegistry, FormBuilder, ProductManager, UserContext, Dialog, mediator, Error, Navigation) {*/
/*                                 $(function() {*/
/*                                     FetcherRegistry.initialize().done(function () {*/
/*                                         ProductManager.get('{{ productId }}')*/
/*                                             .then(function (product) {*/
/*                                                 var sku      = _.escape(product.meta.label[UserContext.get('catalogLocale')]);*/
/*                                                 var newTitle = document.title.replace('%product.sku%', sku);*/
/* */
/*                                                 document.title  = newTitle;*/
/*                                                 var navigation  = Navigation.getInstance();*/
/*                                                 var navTitle    = navigation.getPinButtonsData('title');*/
/*                                                 navTitle.params = {'%product.sku%': sku};*/
/*                                                 navigation.setPinButtonsData('title', navTitle);*/
/*                                                 navigation.setPinButtonsData('title-rendered-short', newTitle);*/
/* */
/*                                                 FormBuilder.build(product.meta.form)*/
/*                                                     .then(function (form) {*/
/*                                                         form.setData(product);*/
/* */
/*                                                         mediator.trigger('pim_enrich:form:entity:post_fetch', product);*/
/* */
/*                                                         form.setElement('#product-edit-form').render();*/
/*                                                     });*/
/*                                             }).fail(function(response, textStatus, errorThrown) {*/
/*                                                 var errorView = new Error(response.responseJSON.message, response.status);*/
/*                                                 errorView.setElement('#product-edit-form').render();*/
/*                                             });*/
/*                                     })*/
/*                                 });*/
/*                             });*/
/*                     </script>*/
/*                     {% placeholder content_after %}*/
/*                 {% endblock content %}*/
/*             {% endblock page_container %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock main %}*/
/* */
