<?php

/* OroUserBundle:Security:login.html.twig */
class __TwigTemplate_a26129101e80fd9958d4bd4e7b3db63edffc5b143202d9a2d03b18ee3e59f645 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimUserBundle::layout.html.twig", "OroUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'bodyClass' => array($this, 'block_bodyClass'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PimUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        if (sessionStorage) {
            sessionStorage.clear()
        }
    </script>
";
    }

    // line 12
    public function block_bodyClass($context, array $blocks = array())
    {
        echo "login-page";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "<div class=\"container\">
    ";
        // line 16
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 17
            echo "    <div class=\"alert alert-error\">
        <button data-dismiss=\"alert\" class=\"close\" type=\"button\">&times;</button>
        <div>";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    </div>
    ";
        }
        // line 22
        echo "
    <form action=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("oro_user_security_check");
        echo "\" method=\"post\" class=\"form-signin\">
        <div class=\"title-box\">
            <h1>
                <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/pimui/images/logo.png"), "html", null, true);
        echo "\" alt=\"Akeneo\">
            </h1>
        </div>
        <fieldset>
            <div class=\"input-prepend\">
                <label for=\"prependedInput\" class=\"add-on\" title=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Username or Email"), "html", null, true);
        echo "\"><i class=\"icon-user\"></i></label>
                <input type=\"text\" id=\"prependedInput\" autofocus=\"autofocus\" class=\"span2\" name=\"_username\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Username or Email"), "html", null, true);
        echo "\" />
            </div>
            <div class=\"input-prepend\">
                <label for=\"prependedInput2\" class=\"add-on\" title=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Password"), "html", null, true);
        echo "\"><i class=\"icon-lock\"></i></label>
                <input type=\"password\" id=\"prependedInput2\" class=\"span2\" name=\"_password\" required=\"required\" placeholder=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Password"), "html", null, true);
        echo "\" autocomplete=\"off\" />
            </div>
            <div class=\"form-row\">
                <label class=\"checkbox\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /> ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Remember me on this computer"), "html", null, true);
        echo "
                </label>
            </div>
            <div class=\"form-row\">
                <button type=\"submit\" class=\"btn btn-large btn-primary\" id=\"_submit\" name=\"_submit\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Log in"), "html", null, true);
        echo "</button>
            </div>
            <div class=\"signin-help\">
                <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("oro_user_reset_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Forgot your password?"), "html", null, true);
        echo "</a>
            </div>
        </fieldset>
        <input type=\"hidden\" name=\"_target_path\" value=\"\" />
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 51,  122 => 47,  116 => 44,  109 => 40,  102 => 36,  98 => 35,  90 => 32,  86 => 31,  78 => 26,  72 => 23,  69 => 22,  63 => 19,  59 => 17,  57 => 16,  54 => 15,  51 => 14,  45 => 12,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'PimUserBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {{ parent() }}*/
/*     <script type="text/javascript">*/
/*         if (sessionStorage) {*/
/*             sessionStorage.clear()*/
/*         }*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* {% block bodyClass %}login-page{% endblock %}*/
/* */
/* {% block content %}*/
/* <div class="container">*/
/*     {% if error %}*/
/*     <div class="alert alert-error">*/
/*         <button data-dismiss="alert" class="close" type="button">&times;</button>*/
/*         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     </div>*/
/*     {% endif %}*/
/* */
/*     <form action="{{ path('oro_user_security_check') }}" method="post" class="form-signin">*/
/*         <div class="title-box">*/
/*             <h1>*/
/*                 <img src="{{ asset('/bundles/pimui/images/logo.png') }}" alt="Akeneo">*/
/*             </h1>*/
/*         </div>*/
/*         <fieldset>*/
/*             <div class="input-prepend">*/
/*                 <label for="prependedInput" class="add-on" title="{{ 'Username or Email'|trans }}"><i class="icon-user"></i></label>*/
/*                 <input type="text" id="prependedInput" autofocus="autofocus" class="span2" name="_username" value="{{ last_username }}" required="required" placeholder="{{ 'Username or Email'|trans }}" />*/
/*             </div>*/
/*             <div class="input-prepend">*/
/*                 <label for="prependedInput2" class="add-on" title="{{ 'Password'|trans }}"><i class="icon-lock"></i></label>*/
/*                 <input type="password" id="prependedInput2" class="span2" name="_password" required="required" placeholder="{{ 'Password'|trans }}" autocomplete="off" />*/
/*             </div>*/
/*             <div class="form-row">*/
/*                 <label class="checkbox">*/
/*                     <input type="checkbox" id="remember_me" name="_remember_me" value="on" /> {{ 'Remember me on this computer'|trans }}*/
/*                 </label>*/
/*             </div>*/
/*             <div class="form-row">*/
/*                 <button type="submit" class="btn btn-large btn-primary" id="_submit" name="_submit">{{ 'Log in'|trans }}</button>*/
/*             </div>*/
/*             <div class="signin-help">*/
/*                 <a href="{{ path('oro_user_reset_request') }}">{{ 'Forgot your password?'|trans }}</a>*/
/*             </div>*/
/*         </fieldset>*/
/*         <input type="hidden" name="_target_path" value="" />*/
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*     </form>*/
/* </div>*/
/* {% endblock content %}*/
/* */
