<?php

/* PimUserBundle:Menu:menuProfile.html.twig */
class __TwigTemplate_2ec9d31726369c4a61fbf0a6ca9950178136c6a80f37b8afc891a355d28b8578 extends Twig_Template
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
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 2
            echo "    <li class=\"dropdown\">
        <a href=\"javascript: void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('oro_locale_name')->format($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())));
            echo " <i class=\"icon-sort-down\"></i></a>
        ";
            // line 4
            echo $this->env->getExtension('oro_menu')->render("usermenu");
            echo "
    </li>
";
        } else {
            // line 7
            echo "    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("oro_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login"), "html", null, true);
            echo "</a></li>
";
        }
    }

    public function getTemplateName()
    {
        return "PimUserBundle:Menu:menuProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if app.user %}*/
/*     <li class="dropdown">*/
/*         <a href="javascript: void(0);" class="dropdown-toggle" data-toggle="dropdown">{{ app.user|oro_format_name|escape }} <i class="icon-sort-down"></i></a>*/
/*         {{ oro_menu_render('usermenu') }}*/
/*     </li>*/
/* {% else %}*/
/*     <li><a href="{{ path('oro_user_security_login') }}">{{ 'Login'|trans }}</a></li>*/
/* {% endif %}*/
/* */
