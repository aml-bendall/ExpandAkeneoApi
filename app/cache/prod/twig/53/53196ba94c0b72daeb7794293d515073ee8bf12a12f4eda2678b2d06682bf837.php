<?php

/* PimDashboardBundle:Widget:links.html.twig */
class __TwigTemplate_5799370b6805a076e0110e7a6e42a4ab96381706b0f58ddc8562411067587110 extends Twig_Template
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
        echo "<div class=\"row unspaced buffer-bottom\">
    <div class=\"span12 shortcuts text-center\">
        <div class=\"btn-group fullwidth\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 5
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath($this->getAttribute($context["link"], "route", array()));
            echo "\" class=\"btn shortcut\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["link"], "label", array())), "html", null, true);
            echo "\">
                    ";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["link"], "label", array())), "html", null, true);
            echo "
                    <div class=\"big-icon\">
                        <i class=\"icon-";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "icon", array()), "html", null, true);
            echo "\"></i>
                    </div>
                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PimDashboardBundle:Widget:links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  40 => 8,  35 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="row unspaced buffer-bottom">*/
/*     <div class="span12 shortcuts text-center">*/
/*         <div class="btn-group fullwidth">*/
/*             {% for link in links %}*/
/*                 <a href="{{ path(link.route) }}" class="btn shortcut" title="{{ link.label|trans }}">*/
/*                     {{ link.label|trans }}*/
/*                     <div class="big-icon">*/
/*                         <i class="icon-{{ link.icon }}"></i>*/
/*                     </div>*/
/*                 </a>*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
