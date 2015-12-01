<?php

/* PimEnrichBundle:Locale:_locale_switcher.html.twig */
class __TwigTemplate_e185cf6d8af5fc4c7a9e8668089808fc4e327d3fbbe783d97e9eaddca8a57139 extends Twig_Template
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
        $context["localeParamName"] = ((array_key_exists("localeParamName", $context)) ? (_twig_default_filter((isset($context["localeParamName"]) ? $context["localeParamName"] : null), "dataLocale")) : ("dataLocale"));
        // line 2
        echo "<div id=\"locale-switcher\" class=\"btn-group\">
    <span class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">
        ";
        // line 4
        echo $this->env->getExtension('pim_locale_extension')->flag($this->env, (isset($context["currentLocaleCode"]) ? $context["currentLocaleCode"] : null));
        echo "
        <i class=\"icon-caret-down\"></i>
    </span>
    <ul class=\"dropdown-menu\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) ? $context["locales"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 9
            echo "            <li";
            if (((isset($context["currentLocaleCode"]) ? $context["currentLocaleCode"] : null) == $this->getAttribute($context["locale"], "code", array()))) {
                echo " class=\"active\"";
            }
            echo ">
                ";
            // line 10
            $context["routeParams"] = twig_array_merge(((array_key_exists("routeParams", $context)) ? (_twig_default_filter((isset($context["routeParams"]) ? $context["routeParams"] : null), array())) : (array())), array((isset($context["localeParamName"]) ? $context["localeParamName"] : null) => $this->getAttribute($context["locale"], "code", array())));
            // line 11
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["routeName"]) ? $context["routeName"] : null), (isset($context["routeParams"]) ? $context["routeParams"] : null)), "html", null, true);
            echo "\"
                   title=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('pim_locale_extension')->localeLabel($this->getAttribute($context["locale"], "code", array())), "html", null, true);
            echo "\">
                    <span class=\"indicator\">
                        ";
            // line 14
            if (((isset($context["currentLocaleCode"]) ? $context["currentLocaleCode"] : null) == $this->getAttribute($context["locale"], "code", array()))) {
                // line 15
                echo "                            <i class=\"icon-circle\"></i>
                        ";
            }
            // line 17
            echo "                    </span>
                    ";
            // line 18
            echo $this->env->getExtension('pim_locale_extension')->flag($this->env, $this->getAttribute($context["locale"], "code", array()));
            echo "
                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Locale:_locale_switcher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 22,  64 => 18,  61 => 17,  57 => 15,  55 => 14,  50 => 12,  45 => 11,  43 => 10,  36 => 9,  32 => 8,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% set localeParamName = localeParamName|default('dataLocale') %}*/
/* <div id="locale-switcher" class="btn-group">*/
/*     <span class="btn dropdown-toggle" data-toggle="dropdown">*/
/*         {{ currentLocaleCode|flag }}*/
/*         <i class="icon-caret-down"></i>*/
/*     </span>*/
/*     <ul class="dropdown-menu">*/
/*         {% for locale in locales %}*/
/*             <li{% if currentLocaleCode == locale.code %} class="active"{% endif %}>*/
/*                 {% set routeParams = routeParams|default({})|merge({ (localeParamName): locale.code }) %}*/
/*                 <a href="{{ path(routeName, routeParams) }}"*/
/*                    title="{{ locale_label(locale.code) }}">*/
/*                     <span class="indicator">*/
/*                         {% if currentLocaleCode == locale.code %}*/
/*                             <i class="icon-circle"></i>*/
/*                         {% endif %}*/
/*                     </span>*/
/*                     {{ locale.code|flag }}*/
/*                 </a>*/
/*             </li>*/
/*         {%  endfor %}*/
/*     </ul>*/
/* </div>*/
/* */
