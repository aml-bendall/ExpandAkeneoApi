<?php

/* OroNavigationBundle:ApplicationMenu:pinButton.html.twig */
class __TwigTemplate_34e816a0816db6e7570aabc9f46dd95dece900318d386520de9a31f0022702ea extends Twig_Template
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
        echo "<div id=\"pin-button-div\" ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == $this->getAttribute((isset($context["bap"]) ? $context["bap"] : null), "start_route", array()))) {
            echo "style=\"display: none\"";
        }
        echo ">
    <div class=\"navigation clearfix\">
        <div class=\"top-action-box\">
            <button class=\"btn favorite-button\"
                data-title=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('oro_title')->renderSerialized(), "html", null, true);
        echo "\"
                data-title-rendered-short=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('oro_title')->renderShort(), "html", null, true);
        echo "\"
                title=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Add this page to favorites"), "html", null, true);
        echo "\">
                    <i class=\"icon-star\"></i>
            </button>
            <button class=\"btn minimize-button\"
                data-title=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('oro_title')->renderSerialized(), "html", null, true);
        echo "\"
                data-title-rendered-short=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('oro_title')->renderShort(), "html", null, true);
        echo "\"
                title=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Minimize the window to the pinbar"), "html", null, true);
        echo "\">
                    <i class=\"icon-pushpin\"></i>
            </button>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:ApplicationMenu:pinButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  48 => 12,  44 => 11,  37 => 7,  33 => 6,  29 => 5,  19 => 1,);
    }
}
/* <div id="pin-button-div" {% if app.request.attributes.get('_route') == bap.start_route %}style="display: none"{% endif %}>*/
/*     <div class="navigation clearfix">*/
/*         <div class="top-action-box">*/
/*             <button class="btn favorite-button"*/
/*                 data-title="{{ oro_title_render_serialized() }}"*/
/*                 data-title-rendered-short="{{ oro_title_render_short() }}"*/
/*                 title="{{ 'Add this page to favorites'|trans }}">*/
/*                     <i class="icon-star"></i>*/
/*             </button>*/
/*             <button class="btn minimize-button"*/
/*                 data-title="{{ oro_title_render_serialized() }}"*/
/*                 data-title-rendered-short="{{ oro_title_render_short() }}"*/
/*                 title="{{ 'Minimize the window to the pinbar'|trans }}">*/
/*                     <i class="icon-pushpin"></i>*/
/*             </button>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
