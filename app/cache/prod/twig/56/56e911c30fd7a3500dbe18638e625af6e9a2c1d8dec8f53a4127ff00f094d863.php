<?php

/* OroAsseticBundle:Assets:oro_css.html.twig */
class __TwigTemplate_d797165c43b89b51be35895421e84e4f265892632011e0539e887428d3e410c6 extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        $context["hasLess"] = false;
        // line 4
        echo "
";
        // line 5
        // asset "15df054"
        $context["asset_url"] = $this->env->getExtension('asset')->getAssetUrl("css/oro.css");
        // line 6
        echo "    ";
        $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "."));
        // line 7
        echo "    ";
        $context["hasLess"] = (((isset($context["isLess"]) ? $context["isLess"] : null)) ? (true) : ((isset($context["hasLess"]) ? $context["hasLess"] : null)));
        // line 8
        echo "
    <link rel=\"";
        // line 9
        if ((isset($context["isLess"]) ? $context["isLess"] : null)) {
            echo "stylesheet/less";
        } else {
            echo "stylesheet";
        }
        echo "\" media=\"all\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
        echo "\" />
";
        unset($context["asset_url"]);
        // line 11
        echo "
";
        // line 12
        if ((isset($context["hasLess"]) ? $context["hasLess"] : null)) {
            // line 13
            echo "    <script type=\"text/javascript\">localStorage.clear();</script>
    <script type=\"text/javascript\" src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroassetic/lib/less-1.3.3.min.js"), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\">less.watch();</script>
";
        }
    }

    public function getTemplateName()
    {
        return "OroAsseticBundle:Assets:oro_css.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  55 => 13,  53 => 12,  50 => 11,  39 => 9,  36 => 8,  33 => 7,  30 => 6,  27 => 5,  24 => 4,  22 => 3,  19 => 2,);
    }
}
/* {# Css assetics #}*/
/* */
/* {% set hasLess = false %}*/
/* */
/* {% oro_css filter='cssrewrite, lessphp' output='css/oro.css' %}*/
/*     {% set isLess = ('less' in asset_url|split('.')) %}*/
/*     {% set hasLess = isLess ? true : hasLess %}*/
/* */
/*     <link rel="{% if isLess %}stylesheet/less{% else %}stylesheet{% endif %}" media="all" href="{{ asset_url }}" />*/
/* {% endoro_css %}*/
/* */
/* {% if hasLess %}*/
/*     <script type="text/javascript">localStorage.clear();</script>*/
/*     <script type="text/javascript" src="{{ asset('bundles/oroassetic/lib/less-1.3.3.min.js') }}"></script>*/
/*     <script type="text/javascript">less.watch();</script>*/
/* {% endif %}*/
/* */
