<?php

/* PimAnalyticsBundle:Update:last_patch.html.twig */
class __TwigTemplate_aecd141b5c6e0ffb181ec05e64740c6b521cfb51e1e407337f6039a0a205a5ec extends Twig_Template
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
        if ($this->env->getExtension('pim_analytics_update_extension')->isLastPatchEnabled()) {
            // line 2
            echo "    <div class=\"last-version\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("pim_analytics.new_patch_available"), "html", null, true);
            echo ":</span><span></span></div>

    <script type=\"text/javascript\">
        require(
            ['jquery', 'pim/patch-fetcher'],
            function (\$, Fetcher) {
                \$(function() {
                    try {
                        var updateServerUrl = '";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('pim_analytics_update_extension')->getUpdateServerUrl(), "html", null, true);
            echo "';
                        Fetcher.fetch(updateServerUrl).then(function (patch) {
                            var currentVersionName = \$('.current-version:first span:last').text();
                            var currentVersion = currentVersionName.split(' ')[0];
                            if (patch !== null && currentVersion < patch) {
                                \$('.last-version span:last').text(patch);
                            } else {
                                \$('.last-version').remove();
                            }
                        });
                    } catch (err) {
                        \$('.last-version').remove();
                    }
                });
            }
        );
    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "PimAnalyticsBundle:Update:last_patch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 10,  21 => 2,  19 => 1,);
    }
}
/* {% if is_last_patch_enabled() %}*/
/*     <div class="last-version"><span>{{ 'pim_analytics.new_patch_available'|trans }}:</span><span></span></div>*/
/* */
/*     <script type="text/javascript">*/
/*         require(*/
/*             ['jquery', 'pim/patch-fetcher'],*/
/*             function ($, Fetcher) {*/
/*                 $(function() {*/
/*                     try {*/
/*                         var updateServerUrl = '{{ get_update_server_url() }}';*/
/*                         Fetcher.fetch(updateServerUrl).then(function (patch) {*/
/*                             var currentVersionName = $('.current-version:first span:last').text();*/
/*                             var currentVersion = currentVersionName.split(' ')[0];*/
/*                             if (patch !== null && currentVersion < patch) {*/
/*                                 $('.last-version span:last').text(patch);*/
/*                             } else {*/
/*                                 $('.last-version').remove();*/
/*                             }*/
/*                         });*/
/*                     } catch (err) {*/
/*                         $('.last-version').remove();*/
/*                     }*/
/*                 });*/
/*             }*/
/*         );*/
/*     </script>*/
/* {% endif %}*/
/* */
