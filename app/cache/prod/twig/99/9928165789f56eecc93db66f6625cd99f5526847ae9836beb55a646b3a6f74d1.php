<?php

/* OroNavigationBundle:Menu:dots_menu.html.twig */
class __TwigTemplate_02ea8e0f98ff7d7c8f67a0cd91a2b33cd6646ee283cba425c5e35ff859604848 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:dots_tabs.html.twig", "OroNavigationBundle:Menu:dots_menu.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNavigationBundle:Menu:dots_tabs.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren", array()))) {
            // line 5
            echo "
        <div class=\"clearfix\">
            <div class=\"pin-bar clearfix\">
                <div class=\"pin-menus dropdown dropdown-close-prevent\">
                    <i class=\"icon-ellipsis-horizontal oro-dropdown-toggle\"></i>
                    <div class=\"dropdown-menu pull-right\">
                        <div class=\"tabbable tabs-left\">
                            ";
            // line 12
            $this->displayBlock("navbar_tabs", $context, $blocks);
            echo "
                            ";
            // line 13
            $this->displayBlock("navbar_tabs_content", $context, $blocks);
            echo "
                        </div>
                    </div>
                </div>
                <div class=\"list-bar\">
                  <ul>&nbsp;</ul>
                </div>
            </div>
        </div>

    ";
        }
        // line 24
        echo "        <script type=\"text/javascript\">
            require(['jquery'],
            function(\$) {
                function trueWidthPinBar(){
                    \$('div.list-bar li').each(function(){
                        var _tempWidth = \"auto\";
                        //\$(this).find('div.pin-holder div').width(_tempWidth);
                    });
                    var _sizeStart = \$(window).width() -30 - 55;
                    var _sizeEnd = \$('div.list-bar').width();
                    if(_sizeStart < _sizeEnd){
                        var _qty = \$('div.list-bar ul li').size();
                        var _sizePaddings = (23 + 15) * _qty;
                        var _mainPadding = \$('#main').innerWidth() - \$('#main').width();
                        if(\$(window).width() < 980){
                            var _size = 980 -30 - _mainPadding  - _sizePaddings;
                        }else{
                            var _size = \$(window).width() -30 - _mainPadding  - _sizePaddings;
                        }
                        var _tempWidth = _size / _qty;
                        _tempWidth = _tempWidth < 40 ? 40 : _tempWidth;
                        \$('div.list-bar ul li').each(function(){
                            \$(this).find('div.pin-holder div').width(_tempWidth);
                            \$(this).find('div.pin-holder div').addClass('pin-frame');
                        });
                    }
                }
                \$(function() {
                    trueWidthPinBar();
                    \$(window).resize(trueWidthPinBar);
                });
            });
        </script>
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:dots_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 24,  47 => 13,  43 => 12,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'OroNavigationBundle:Menu:dots_tabs.html.twig' %}*/
/* */
/* {% block root %}*/
/*     {% if item.hasChildren and options.depth is not sameas(0) and item.displayChildren %}*/
/* */
/*         <div class="clearfix">*/
/*             <div class="pin-bar clearfix">*/
/*                 <div class="pin-menus dropdown dropdown-close-prevent">*/
/*                     <i class="icon-ellipsis-horizontal oro-dropdown-toggle"></i>*/
/*                     <div class="dropdown-menu pull-right">*/
/*                         <div class="tabbable tabs-left">*/
/*                             {{ block('navbar_tabs') }}*/
/*                             {{ block('navbar_tabs_content') }}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="list-bar">*/
/*                   <ul>&nbsp;</ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     {% endif %}*/
/*         <script type="text/javascript">*/
/*             require(['jquery'],*/
/*             function($) {*/
/*                 function trueWidthPinBar(){*/
/*                     $('div.list-bar li').each(function(){*/
/*                         var _tempWidth = "auto";*/
/*                         //$(this).find('div.pin-holder div').width(_tempWidth);*/
/*                     });*/
/*                     var _sizeStart = $(window).width() -30 - 55;*/
/*                     var _sizeEnd = $('div.list-bar').width();*/
/*                     if(_sizeStart < _sizeEnd){*/
/*                         var _qty = $('div.list-bar ul li').size();*/
/*                         var _sizePaddings = (23 + 15) * _qty;*/
/*                         var _mainPadding = $('#main').innerWidth() - $('#main').width();*/
/*                         if($(window).width() < 980){*/
/*                             var _size = 980 -30 - _mainPadding  - _sizePaddings;*/
/*                         }else{*/
/*                             var _size = $(window).width() -30 - _mainPadding  - _sizePaddings;*/
/*                         }*/
/*                         var _tempWidth = _size / _qty;*/
/*                         _tempWidth = _tempWidth < 40 ? 40 : _tempWidth;*/
/*                         $('div.list-bar ul li').each(function(){*/
/*                             $(this).find('div.pin-holder div').width(_tempWidth);*/
/*                             $(this).find('div.pin-holder div').addClass('pin-frame');*/
/*                         });*/
/*                     }*/
/*                 }*/
/*                 $(function() {*/
/*                     trueWidthPinBar();*/
/*                     $(window).resize(trueWidthPinBar);*/
/*                 });*/
/*             });*/
/*         </script>*/
/* {% endblock %}*/
/* */
