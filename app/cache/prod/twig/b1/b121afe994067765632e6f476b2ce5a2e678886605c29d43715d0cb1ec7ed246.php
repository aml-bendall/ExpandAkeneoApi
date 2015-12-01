<?php

/* OroNavigationBundle:Js:requirejs.config.js.twig */
class __TwigTemplate_663bc864ba8dd6660bda9bf20c2d19a3fe2a6ce4a9c665c65f25f787c574527f extends Twig_Template
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
        echo "require({
    shim: {
        'oro/routes': {
            deps: ['routing'],
            init: function(routing) {
                ";
        // line 6
        if ( !$this->getAttribute((isset($context["app"]) ? $context["app"] : null), "debug", array())) {
            // line 7
            echo "                routing.setBaseUrl(";
            echo twig_jsonencode_filter(twig_slice($this->env, $this->env->getExtension('asset')->getAssetUrl(""), 0,  -1));
            echo ");
                ";
        }
        // line 9
        echo "                return routing;
            }
        }
    },
    map: {
        '*': {
            'routing': 'oro/routes'
        },
        'oro/routes': {
            'routing': 'routing'
        }
    },
    paths: {
    ";
        // line 22
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "debug", array())) {
            // line 23
            echo "        'oro/routes': '";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData")), "js", null, true);
            echo "'
    ";
        } else {
            // line 25
            echo "        'oro/routes': '../js/routes'
    ";
        }
        // line 27
        echo "    }
});
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Js:requirejs.config.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 27,  57 => 25,  51 => 23,  49 => 22,  34 => 9,  28 => 7,  26 => 6,  19 => 1,);
    }
}
/* require({*/
/*     shim: {*/
/*         'oro/routes': {*/
/*             deps: ['routing'],*/
/*             init: function(routing) {*/
/*                 {% if not app.debug %}*/
/*                 routing.setBaseUrl({{ asset('')[:-1]|json_encode|raw }});*/
/*                 {% endif %}*/
/*                 return routing;*/
/*             }*/
/*         }*/
/*     },*/
/*     map: {*/
/*         '*': {*/
/*             'routing': 'oro/routes'*/
/*         },*/
/*         'oro/routes': {*/
/*             'routing': 'routing'*/
/*         }*/
/*     },*/
/*     paths: {*/
/*     {% if app.debug %}*/
/*         'oro/routes': '{{ path('fos_js_routing_js', {"callback": "fos.Router.setData"}) }}'*/
/*     {% else %}*/
/*         'oro/routes': '../js/routes'*/
/*     {% endif %}*/
/*     }*/
/* });*/
/* */
