<?php

/* OroNavigationBundle:HashNav:script.js.twig */
class __TwigTemplate_8f75f4614e8518fb8d0ee6eea64ca217d0929eb0d39e3fb0d70ca2ae06d21c74 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
    require(['backbone', 'oro/navigation'],
    function(Backbone, Navigation){
        if (Navigation.isEnabled()) {
            Navigation.setup({
                baseUrl :  '";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getSchemeAndHttpHost", array(), "method"), "js", null, true);
        echo "',
                headerId : '";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('oro_hash_nav')->getHashNavigationHeaderConst(), "js", null, true);
        echo "'
            });
            if (!Backbone.History.started) {
                Backbone.history.start();
            }
        }
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:HashNav:script.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <script type="text/javascript">*/
/*     require(['backbone', 'oro/navigation'],*/
/*     function(Backbone, Navigation){*/
/*         if (Navigation.isEnabled()) {*/
/*             Navigation.setup({*/
/*                 baseUrl :  '{{ app.request.getSchemeAndHttpHost() }}',*/
/*                 headerId : '{{ oro_hash_navigation_header() }}'*/
/*             });*/
/*             if (!Backbone.History.started) {*/
/*                 Backbone.history.start();*/
/*             }*/
/*         }*/
/*     });*/
/* </script>*/
/* */
