<?php

/* PimUIBundle:Default:index.html.twig */
class __TwigTemplate_2f80ded2a1cf0256bf13dfdf569e6858f8abcb0c99b32bb3e7abe47693b93f49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'head_style' => array($this, 'block_head_style'),
            'script' => array($this, 'block_script'),
            'scripts_before' => array($this, 'block_scripts_before'),
            'hash_nav' => array($this, 'block_hash_nav'),
            'head_script' => array($this, 'block_head_script'),
            'bodyClass' => array($this, 'block_bodyClass'),
            'header' => array($this, 'block_header'),
            'navbar' => array($this, 'block_navbar'),
            'application_menu' => array($this, 'block_application_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'main' => array($this, 'block_main'),
            'right_panel' => array($this, 'block_right_panel'),
            'left_panel' => array($this, 'block_left_panel'),
            'before_content' => array($this, 'block_before_content'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'messages' => array($this, 'block_messages'),
            'page_container' => array($this, 'block_page_container'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ( !$this->env->getExtension('oro_hash_nav')->checkIsHashNavigation()) {
            // line 2
            echo "    <!DOCTYPE html>
    <html>
    <head>
        ";
            // line 5
            $this->displayBlock('head', $context, $blocks);
            // line 33
            echo "    </head>
    <body class=\"";
            // line 34
            $this->displayBlock('bodyClass', $context, $blocks);
            echo "\">
    ";
            // line 36
            echo "    <div id=\"progressbar\">
        <h3>";
            // line 37
            echo $this->env->getExtension('translator')->getTranslator()->trans("Loading ...", array(), "messages");
            echo "</h3>
        <div class=\"progress progress-striped active\">
            <div class=\"bar\" style=\"width: 90%;\"></div>
        </div>
    </div>
    <div id=\"page\" style=\"display:none;\">
        <div id=\"top-page\">
            ";
            // line 44
            $this->displayBlock('header', $context, $blocks);
            // line 73
            echo "            ";
            $this->displayBlock('main', $context, $blocks);
            // line 134
            echo "        </div>
    </div>
    ";
            // line 137
            echo "
    ";
            // line 138
            if (("prod" == $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "environment", array()))) {
                // line 139
                echo "        <script type=\"text/javascript\">
            require(
                ['pim/fetcher-registry'],
                function (FetcherRegistry) {
                    'use strict';

                    FetcherRegistry.initialize().then(function () {
                        FetcherRegistry.warmUp();
                    });
                }
            );
        </script>
    ";
            }
            // line 152
            echo "
    </body>
    </html>
";
        } else {
            // line 157
            $this->loadTemplate("OroNavigationBundle:HashNav:hashNavAjax.html.twig", "PimUIBundle:Default:index.html.twig", 157)->display(array_merge($context, array("script" => $this->renderBlock("head_script", $context, $blocks), "content" => $this->renderBlock("page_container", $context, $blocks), "menu" => $this->renderBlock("application_menu", $context, $blocks), "breadcrumb" => $this->renderBlock("breadcrumb", $context, $blocks), "userMenu" => $this->renderBlock("user_menu", $context, $blocks))));
        }
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "            <title>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Loading...", array(), "messages");
        echo "</title>
            <script id=\"page-title\" type=\"text/html\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('oro_title')->render(), "html", null, true);
        echo "</script>
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            ";
        // line 9
        $this->displayBlock('head_style', $context, $blocks);
        // line 13
        echo "
            ";
        // line 14
        $this->displayBlock('script', $context, $blocks);
        // line 32
        echo "        ";
    }

    // line 9
    public function block_head_style($context, array $blocks = array())
    {
        // line 10
        echo "                <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
               ";
        // line 11
        $this->loadTemplate("OroAsseticBundle:Assets:oro_css.html.twig", "PimUIBundle:Default:index.html.twig", 11)->display($context);
        // line 12
        echo "            ";
    }

    // line 14
    public function block_script($context, array $blocks = array())
    {
        // line 15
        echo "                ";
        $this->displayBlock('scripts_before', $context, $blocks);
        // line 18
        echo "                ";
        $this->loadTemplate("OroRequireJSBundle::scripts.html.twig", "PimUIBundle:Default:index.html.twig", 18)->display(array_merge($context, array("compressed" =>  !$this->getAttribute((isset($context["app"]) ? $context["app"] : null), "debug", array()))));
        // line 19
        echo "                <script type=\"text/javascript\">
                    require(['jquery', 'bootstrap', 'oro/init-layout', 'oro/init-user', 'pimuser/js/init-signin']);
                ";
        // line 21
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "debug", array())) {
            // line 22
            echo "                    require(['oro/app'], function(app){app.debug = true;});
                ";
        }
        // line 24
        echo "                </script>
                ";
        // line 25
        $this->displayBlock('hash_nav', $context, $blocks);
        // line 28
        echo "                ";
        $this->loadTemplate("OroLocaleBundle::locale_settings.html.twig", "PimUIBundle:Default:index.html.twig", 28)->display($context);
        // line 29
        echo "                ";
        $this->displayBlock('head_script', $context, $blocks);
        // line 31
        echo "            ";
    }

    // line 15
    public function block_scripts_before($context, array $blocks = array())
    {
        // line 16
        echo "                    ";
        $this->loadTemplate("OroNavigationBundle:Js:dot.menu.js.twig", "PimUIBundle:Default:index.html.twig", 16)->display($context);
        $this->loadTemplate("OroNavigationBundle:Js:pinbar.js.twig", "PimUIBundle:Default:index.html.twig", 16)->display($context);
        // line 17
        echo "                ";
    }

    // line 25
    public function block_hash_nav($context, array $blocks = array())
    {
        // line 26
        echo "                    ";
        $this->loadTemplate("OroNavigationBundle:HashNav:script.js.twig", "PimUIBundle:Default:index.html.twig", 26)->display($context);
        // line 27
        echo "                ";
    }

    // line 29
    public function block_head_script($context, array $blocks = array())
    {
        // line 30
        echo "                ";
    }

    // line 34
    public function block_bodyClass($context, array $blocks = array())
    {
    }

    // line 44
    public function block_header($context, array $blocks = array())
    {
        // line 45
        echo "                <header class=\"navbar\" id=\"oroplatform-header\">
                    ";
        // line 46
        $this->loadTemplate("OroNavigationBundle:ApplicationMenu:dotsMenu.html.twig", "PimUIBundle:Default:index.html.twig", 46)->display($context);
        // line 47
        echo "                    <div class=\"navbar-inner\">
                        <div class=\"container\">
                            ";
        // line 49
        $this->loadTemplate("OroUIBundle:Default:logo.html.twig", "PimUIBundle:Default:index.html.twig", 49)->display($context);
        // line 50
        echo "                            <div class=\"navbar-responsive-collapse\">
                                ";
        // line 51
        $this->displayBlock('navbar', $context, $blocks);
        // line 56
        echo "                                <div class=\"divider-vertical small-divider\"></div>
                                <div id=\"main-menu\">
                                    ";
        // line 58
        $this->displayBlock('application_menu', $context, $blocks);
        // line 61
        echo "                                 </div>
                                ";
        // line 62
        $this->displayBlock('user_menu', $context, $blocks);
        // line 67
        echo "                            </div>
                        </div>
                    </div>
                    ";
        // line 71
        echo "                </header>
            ";
    }

    // line 51
    public function block_navbar($context, array $blocks = array())
    {
        // line 52
        echo "                                <div class=\"nav pull-left top-search shortcuts\">
                                    ";
        // line 54
        echo "                                </div>
                                ";
    }

    // line 58
    public function block_application_menu($context, array $blocks = array())
    {
        // line 59
        echo "                                        ";
        $this->loadTemplate("OroNavigationBundle:ApplicationMenu:applicationMenu.html.twig", "PimUIBundle:Default:index.html.twig", 59)->display($context);
        // line 60
        echo "                                    ";
    }

    // line 62
    public function block_user_menu($context, array $blocks = array())
    {
        // line 63
        echo "                                    <ul class=\"nav pull-right user-menu\">
                                        ";
        // line 64
        $this->loadTemplate("PimNotificationBundle:Default:notifications.html.twig", "PimUIBundle:Default:index.html.twig", 64)->display($context);
        $this->loadTemplate("PimUserBundle:Menu:menuProfile.html.twig", "PimUIBundle:Default:index.html.twig", 64)->display($context);
        $this->loadTemplate("OroUIBundle:Default:help.html.twig", "PimUIBundle:Default:index.html.twig", 64)->display($context);
        // line 65
        echo "                                    </ul>
                                ";
    }

    // line 73
    public function block_main($context, array $blocks = array())
    {
        // line 74
        echo "                <div id=\"main\" >
                    ";
        // line 75
        $this->displayBlock('right_panel', $context, $blocks);
        // line 78
        echo "                    ";
        $this->displayBlock('left_panel', $context, $blocks);
        // line 81
        echo "                    ";
        $this->displayBlock('before_content', $context, $blocks);
        // line 123
        echo "                    <div class=\"hash-loading-mask\"></div>
                    <div id=\"container\" class=\"scrollable-container\">
                        ";
        // line 125
        $this->displayBlock('page_container', $context, $blocks);
        // line 131
        echo "                    </div>
                </div>
            ";
    }

    // line 75
    public function block_right_panel($context, array $blocks = array())
    {
        // line 76
        echo "                        ";
        // line 77
        echo "                    ";
    }

    // line 78
    public function block_left_panel($context, array $blocks = array())
    {
        // line 79
        echo "                        ";
        // line 80
        echo "                    ";
    }

    // line 81
    public function block_before_content($context, array $blocks = array())
    {
        // line 82
        echo "                    <div class=\"container-fluid breadcrumb-pin\">
                        <div id=\"breadcrumb\">
                            ";
        // line 84
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 87
        echo "                        </div>
                        ";
        // line 88
        $this->loadTemplate("OroNavigationBundle:ApplicationMenu:pinButton.html.twig", "PimUIBundle:Default:index.html.twig", 88)->display($context);
        // line 89
        echo "                        <div id=\"flash-messages\">
                            ";
        // line 90
        $this->displayBlock('messages', $context, $blocks);
        // line 119
        echo "                        </div>

                    </div>
                    ";
    }

    // line 84
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 85
        echo "                                ";
        $this->loadTemplate("OroNavigationBundle:ApplicationMenu:breabcrumbs.html.twig", "PimUIBundle:Default:index.html.twig", 85)->display($context);
        // line 86
        echo "                            ";
    }

    // line 90
    public function block_messages($context, array $blocks = array())
    {
        // line 91
        echo "                                <div class=\"flash-messages-frame\">
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
        // line 107
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "peekAll", array())) > 0)) {
            // line 108
            echo "                                                \$(function() {
                                                    ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "all", array()));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 110
                echo "                                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 111
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
                // line 113
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "                                                });
                                                ";
        }
        // line 116
        echo "                                            });
                                </script>
                            ";
    }

    // line 125
    public function block_page_container($context, array $blocks = array())
    {
        // line 126
        echo "                            ";
        $this->displayBlock('content', $context, $blocks);
        // line 130
        echo "                        ";
    }

    // line 126
    public function block_content($context, array $blocks = array())
    {
        // line 127
        echo "                                ";
        // line 128
        echo "                                ";
        // line 129
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "PimUIBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  447 => 129,  445 => 128,  443 => 127,  440 => 126,  436 => 130,  433 => 126,  430 => 125,  424 => 116,  420 => 114,  414 => 113,  403 => 111,  398 => 110,  394 => 109,  391 => 108,  389 => 107,  371 => 91,  368 => 90,  364 => 86,  361 => 85,  358 => 84,  351 => 119,  349 => 90,  346 => 89,  344 => 88,  341 => 87,  339 => 84,  335 => 82,  332 => 81,  328 => 80,  326 => 79,  323 => 78,  319 => 77,  317 => 76,  314 => 75,  308 => 131,  306 => 125,  302 => 123,  299 => 81,  296 => 78,  294 => 75,  291 => 74,  288 => 73,  283 => 65,  279 => 64,  276 => 63,  273 => 62,  269 => 60,  266 => 59,  263 => 58,  258 => 54,  255 => 52,  252 => 51,  247 => 71,  242 => 67,  240 => 62,  237 => 61,  235 => 58,  231 => 56,  229 => 51,  226 => 50,  224 => 49,  220 => 47,  218 => 46,  215 => 45,  212 => 44,  207 => 34,  203 => 30,  200 => 29,  196 => 27,  193 => 26,  190 => 25,  186 => 17,  182 => 16,  179 => 15,  175 => 31,  172 => 29,  169 => 28,  167 => 25,  164 => 24,  160 => 22,  158 => 21,  154 => 19,  151 => 18,  148 => 15,  145 => 14,  141 => 12,  139 => 11,  134 => 10,  131 => 9,  127 => 32,  125 => 14,  122 => 13,  120 => 9,  115 => 7,  110 => 6,  107 => 5,  102 => 157,  96 => 152,  81 => 139,  79 => 138,  76 => 137,  72 => 134,  69 => 73,  67 => 44,  57 => 37,  54 => 36,  50 => 34,  47 => 33,  45 => 5,  40 => 2,  38 => 1,);
    }
}
/* {% if not oro_is_hash_navigation() %}*/
/*     <!DOCTYPE html>*/
/*     <html>*/
/*     <head>*/
/*         {% block head %}*/
/*             <title>{% trans %}Loading...{% endtrans %}</title>*/
/*             <script id="page-title" type="text/html">{{ oro_title_render() }}</script>*/
/*             <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*             {% block head_style %}*/
/*                 <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />*/
/*                {% placeholder head_style %}*/
/*             {% endblock %}*/
/* */
/*             {% block script %}*/
/*                 {% block scripts_before %}*/
/*                     {% placeholder scripts_before %}*/
/*                 {% endblock %}*/
/*                 {% include 'OroRequireJSBundle::scripts.html.twig' with {compressed: not app.debug} %}*/
/*                 <script type="text/javascript">*/
/*                     require(['jquery', 'bootstrap', 'oro/init-layout', 'oro/init-user', 'pimuser/js/init-signin']);*/
/*                 {% if app.debug %}*/
/*                     require(['oro/app'], function(app){app.debug = true;});*/
/*                 {% endif %}*/
/*                 </script>*/
/*                 {% block hash_nav %}*/
/*                     {% placeholder hash_nav %}*/
/*                 {% endblock %}*/
/*                 {% placeholder scripts_after %}*/
/*                 {% block head_script %}*/
/*                 {% endblock %}*/
/*             {% endblock %}*/
/*         {% endblock %}*/
/*     </head>*/
/*     <body class="{% block bodyClass %}{% endblock %}">*/
/*     {% placeholder after_body_start %}*/
/*     <div id="progressbar">*/
/*         <h3>{% trans %}Loading ...{% endtrans %}</h3>*/
/*         <div class="progress progress-striped active">*/
/*             <div class="bar" style="width: 90%;"></div>*/
/*         </div>*/
/*     </div>*/
/*     <div id="page" style="display:none;">*/
/*         <div id="top-page">*/
/*             {% block header %}*/
/*                 <header class="navbar" id="oroplatform-header">*/
/*                     {% placeholder before_navigation %}*/
/*                     <div class="navbar-inner">*/
/*                         <div class="container">*/
/*                             {% placeholder header_logo %}*/
/*                             <div class="navbar-responsive-collapse">*/
/*                                 {% block navbar %}*/
/*                                 <div class="nav pull-left top-search shortcuts">*/
/*                                     {% placeholder navbar %}*/
/*                                 </div>*/
/*                                 {% endblock navbar %}*/
/*                                 <div class="divider-vertical small-divider"></div>*/
/*                                 <div id="main-menu">*/
/*                                     {% block application_menu %}*/
/*                                         {% placeholder application_menu %}*/
/*                                     {% endblock application_menu %}*/
/*                                  </div>*/
/*                                 {% block user_menu %}*/
/*                                     <ul class="nav pull-right user-menu">*/
/*                                         {% placeholder user_menu %}*/
/*                                     </ul>*/
/*                                 {% endblock %}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     {% placeholder after_navigation %}*/
/*                 </header>*/
/*             {% endblock header %}*/
/*             {% block main %}*/
/*                 <div id="main" >*/
/*                     {% block right_panel %}*/
/*                         {% placeholder right_panel %}*/
/*                     {% endblock right_panel %}*/
/*                     {% block left_panel %}*/
/*                         {% placeholder left_panel %}*/
/*                     {% endblock left_panel %}*/
/*                     {% block before_content %}*/
/*                     <div class="container-fluid breadcrumb-pin">*/
/*                         <div id="breadcrumb">*/
/*                             {% block breadcrumb %}*/
/*                                 {% placeholder breadcrumb %}*/
/*                             {% endblock breadcrumb %}*/
/*                         </div>*/
/*                         {% placeholder pin_button %}*/
/*                         <div id="flash-messages">*/
/*                             {% block messages %}*/
/*                                 <div class="flash-messages-frame">*/
/*                                     <div class="flash-messages-holder"></div>*/
/*                                 </div>*/
/*                                 <script type="text/template" id="message-item-template">*/
/*                                     <div class="alert <% if (type) {  %><%= 'alert-' + type %><% } %> fade in top-messages ">*/
/*                                         <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*                                         <div class="message"><%= message %></div>*/
/*                                     </div>*/
/*                                 </script>*/
/*                                 <script type="text/javascript">*/
/*                                     require(['jquery', 'oro/messenger'],*/
/*                                             function($, messenger) {*/
/*                                                 messenger.setup({*/
/*                                                     container: '#flash-messages .flash-messages-holder',*/
/*                                                     template: _.template($.trim($('#message-item-template').html()))*/
/*                                                 });*/
/*                                                 {% if app.session.flashbag.peekAll|length > 0 %}*/
/*                                                 $(function() {*/
/*                                                     {% for type, messages in app.session.flashbag.all %}*/
/*                                                     {% for message in messages %}*/
/*                                                     messenger.notificationFlashMessage({{ type|json_encode|raw }}, {{ message|trans|json_encode|raw }});*/
/*                                                     {% endfor %}*/
/*                                                     {% endfor %}*/
/*                                                 });*/
/*                                                 {% endif %}*/
/*                                             });*/
/*                                 </script>*/
/*                             {% endblock messages %}*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                     {% endblock before_content %}*/
/*                     <div class="hash-loading-mask"></div>*/
/*                     <div id="container" class="scrollable-container">*/
/*                         {% block page_container %}*/
/*                             {% block content %}*/
/*                                 {% placeholder content_before %}*/
/*                                 {% placeholder content_after %}*/
/*                             {% endblock content %}*/
/*                         {% endblock page_container %}*/
/*                     </div>*/
/*                 </div>*/
/*             {% endblock main %}*/
/*         </div>*/
/*     </div>*/
/*     {% placeholder before_body_end %}*/
/* */
/*     {% if 'prod' == app.environment %}*/
/*         <script type="text/javascript">*/
/*             require(*/
/*                 ['pim/fetcher-registry'],*/
/*                 function (FetcherRegistry) {*/
/*                     'use strict';*/
/* */
/*                     FetcherRegistry.initialize().then(function () {*/
/*                         FetcherRegistry.warmUp();*/
/*                     });*/
/*                 }*/
/*             );*/
/*         </script>*/
/*     {% endif %}*/
/* */
/*     </body>*/
/*     </html>*/
/* {% else %}*/
/* {# Template for hash tag navigation#}*/
/* {% include 'OroNavigationBundle:HashNav:hashNavAjax.html.twig'*/
/*     with {*/
/*         'script': block('head_script'),*/
/*         'content': block('page_container'),*/
/*         'menu': block('application_menu'),*/
/*         'breadcrumb': block('breadcrumb'),*/
/*         'userMenu': block('user_menu')*/
/*     }*/
/*     %}*/
/* {% endif %}*/
/* */
