<?php

/* OroNavigationBundle:Menu:breadcrumbs.html.twig */
class __TwigTemplate_a196b7c5e7a08b8ad8a3942bf23ed32b3d29619eaa43b6bba63d5d26c39df615 extends Twig_Template
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
        echo "<ul class=\"breadcrumb\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 3
            echo "        <li>
            ";
            // line 4
            echo $this->env->getExtension('translator')->trans($this->getAttribute($context["breadcrumb"], "label", array()));
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo "<span class=\"divider\">/</span>";
            }
            // line 5
            echo "        </li>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:breadcrumbs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 7,  47 => 5,  42 => 4,  39 => 3,  22 => 2,  19 => 1,);
    }
}
/* <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*         <li>*/
/*             {{ breadcrumb.label|trans|raw }}{% if not loop.last %}<span class="divider">/</span>{% endif %}*/
/*         </li>*/
/*     {% endfor %}*/
/* </ul>*/
/* */
