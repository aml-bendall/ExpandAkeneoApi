<?php

/* OroNavigationBundle:Menu:_dots_tabs-content.html.twig */
class __TwigTemplate_2e79b5f8694537fa3b96c59998966ae853fc7b552859951911e0df368e2ec90e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:_dots_tabs-content.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNavigationBundle:Menu:menu.html.twig";
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
        $context["oro_menu"] = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:_dots_tabs-content.html.twig", 4);
        // line 5
        echo "
    <div class=\"tab-content\">
        ";
        // line 7
        $context["items"] = (isset($context["item"]) ? $context["item"] : null);
        // line 8
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "            ";
            $context["showNonAuthorized"] = ($this->getAttribute($this->getAttribute($context["item"], "extras", array(), "any", false, true), "showNonAuthorized", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["item"], "extras", array()), "showNonAuthorized", array()));
            // line 10
            echo "            ";
            $context["displayable"] = ($this->getAttribute($this->getAttribute($context["item"], "extras", array()), "isAllowed", array()) || (isset($context["showNonAuthorized"]) ? $context["showNonAuthorized"] : null));
            // line 11
            echo "            ";
            if ((isset($context["displayable"]) ? $context["displayable"] : null)) {
                // line 12
                echo "                <div class=\"tab-pane\"
                     id=\"";
                // line 13
                echo twig_escape_filter($this->env, trim(twig_lower_filter($this->env, twig_replace_filter($this->getAttribute($context["item"], "name", array()), array(" " => "_", "#" => "_")))), "html", null, true);
                echo "-content\">
                    ";
                // line 14
                $context["options"] = array("tabTitle" => $this->getAttribute($context["item"], "label", array()));
                // line 15
                echo "                    ";
                $context["options"] = array("defaultUrl" => $this->env->getExtension('routing')->getPath("oro_default"));
                // line 16
                echo "                    ";
                $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : null), $this->getAttribute($context["item"], "extras", array()));
                // line 17
                echo "                    ";
                echo $this->env->getExtension('oro_menu')->render($this->getAttribute($context["item"], "name", array()), (isset($context["options"]) ? $context["options"] : null));
                echo "
                </div>
            ";
            }
            // line 20
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        ";
        $context["item"] = (isset($context["items"]) ? $context["items"] : null);
        // line 22
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:_dots_tabs-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 22,  82 => 21,  76 => 20,  69 => 17,  66 => 16,  63 => 15,  61 => 14,  57 => 13,  54 => 12,  51 => 11,  48 => 10,  45 => 9,  40 => 8,  38 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'OroNavigationBundle:Menu:menu.html.twig' %}*/
/* */
/* {% block root %}*/
/*     {% import 'OroNavigationBundle:Menu:menu.html.twig' as oro_menu %}*/
/* */
/*     <div class="tab-content">*/
/*         {% set items = item %}*/
/*         {% for item in items %}*/
/*             {% set showNonAuthorized = item.extras.showNonAuthorized is defined and item.extras.showNonAuthorized %}*/
/*             {% set displayable = item.extras.isAllowed or showNonAuthorized %}*/
/*             {% if displayable %}*/
/*                 <div class="tab-pane"*/
/*                      id="{{- item.name|replace({' ': '_', '#': '_'})|lower|trim -}}-content">*/
/*                     {% set options = {'tabTitle': item.label} %}*/
/*                     {% set options = {'defaultUrl': path("oro_default")} %}*/
/*                     {% set options = options|merge(item.extras) %}*/
/*                     {{ oro_menu_render(item.name, options) }}*/
/*                 </div>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*         {% set item = items %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
