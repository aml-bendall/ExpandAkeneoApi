<?php

/* OroNavigationBundle:HashNav:hashNavAjax.html.twig */
class __TwigTemplate_f2dc839d2945bfa24761e22c4a0b695a28c762143b6040593a18115fd3353ff2 extends Twig_Template
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
        ob_start();
        // line 7
        echo "    ";
        $context["data"] = array("title" => $this->env->getExtension('oro_title')->render(), "titleSerialized" => $this->env->getExtension('oro_title')->renderSerialized(), "titleShort" => $this->env->getExtension('oro_title')->renderShort(), "scripts" =>         // line 11
(isset($context["script"]) ? $context["script"] : null), "mainMenu" =>         // line 12
(isset($context["menu"]) ? $context["menu"] : null), "userMenu" =>         // line 13
(isset($context["userMenu"]) ? $context["userMenu"] : null), "breadcrumb" =>         // line 14
(isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "flashMessages" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 15
(isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "all", array()), "history" => $this->env->getExtension('oro_menu')->render("history"), "mostviewed" => $this->env->getExtension('oro_menu')->render("mostviewed"), "content" =>         // line 18
(isset($context["content"]) ? $context["content"] : null), "showPinButton" => ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 19
(isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") != $this->getAttribute((isset($context["bap"]) ? $context["bap"] : null), "start_route", array())));
        // line 21
        echo "    ";
        echo twig_jsonencode_filter((isset($context["data"]) ? $context["data"] : null));
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:HashNav:hashNavAjax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 21,  29 => 19,  28 => 18,  27 => 15,  26 => 14,  25 => 13,  24 => 12,  23 => 11,  21 => 7,  19 => 1,);
    }
}
/* {% spaceless %}*/
/* {#*/
/*     Get page unique hash*/
/*     If we have entity object (view page) or form (edit page), return md5 of serialized object*/
/*     Othewise return md5 of full page content*/
/* #}*/
/*     {% set data = {*/
/*     'title': oro_title_render(),*/
/*     'titleSerialized': oro_title_render_serialized(),*/
/*     'titleShort': oro_title_render_short(),*/
/*     'scripts': script,*/
/*     'mainMenu': menu,*/
/*     'userMenu': userMenu,*/
/*     'breadcrumb': breadcrumb,*/
/*     'flashMessages': app.session.flashbag.all,*/
/*     'history': oro_menu_render('history'),*/
/*     'mostviewed': oro_menu_render('mostviewed'),*/
/*     'content': content,*/
/*     'showPinButton': (app.request.attributes.get('_route') != bap.start_route)*/
/*     } %}*/
/*     {{ data|json_encode|raw }}*/
/* {% endspaceless %}*/
/* */
