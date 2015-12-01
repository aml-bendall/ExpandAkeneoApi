<?php

/* OroUIBundle:actions:view.html.twig */
class __TwigTemplate_e09f055d68cbbd2880efeb712d4e42adb58e2784762c4e77179f4cdf535d8d37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'stats' => array($this, 'block_stats'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute((isset($context["bap"]) ? $context["bap"] : null), "layout", array()), "OroUIBundle:actions:view.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroUIBundle:actions:view.html.twig", 2);
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"layout-content\">
    <div class=\"navigation clearfix navbar-extra\">
        <div class=\"row\">
            <div class=\"pull-right\">
                <div class=\"pull-right\">
                    ";
        // line 10
        $this->displayBlock('navButtons', $context, $blocks);
        // line 11
        echo "                </div>
            </div>
            <div class=\"span10\">
            ";
        // line 14
        $this->displayBlock('pageHeader', $context, $blocks);
        // line 56
        echo "            </div>
        </div>
    </div>
    <div class=\"layout-content scrollable-container\">
        ";
        // line 60
        $this->displayBlock('content_data', $context, $blocks);
        // line 63
        echo "    </div>
</div>
";
    }

    // line 10
    public function block_navButtons($context, array $blocks = array())
    {
    }

    // line 14
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 15
        echo "                <div class=\"customer-info ";
        if ( !$this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), "hasAvatar", array(), "any", true, true)) {
            echo "customer-simple";
        }
        echo "\">
                    ";
        // line 16
        if (($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), "hasAvatar", array(), "any", true, true) && $this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), "hasAvatar", array()))) {
            // line 17
            echo "                        <div class=\"visual\">
                            <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), "imagePath", array())) ? ($this->env->getExtension('liip_imagine')->filter($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), "imagePath", array()), "avatar_med")) : ($this->env->getExtension('asset')->getAssetUrl("bundles/pimui/img/info-user.png"))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), "entityTitle", array()), "html", null, true);
            echo "\"/>
                        </div>
                    ";
        }
        // line 21
        echo "                    <div class=\"pull-left\">
                        <div class=\"clearfix\">
                            ";
        // line 23
        $this->displayBlock('breadcrumbs', $context, $blocks);
        // line 44
        echo "                        </div>
                        <div class=\"clearfix\">
                            <ul class=\"inline\">
                                ";
        // line 47
        $this->displayBlock('stats', $context, $blocks);
        // line 51
        echo "                            </ul>
                        </div>
                    </div>
                </div>
            ";
    }

    // line 23
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 24
        echo "                                <div class=\"pull-left\">
                                    ";
        // line 25
        if ($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), "indexLabel", array(), "any", true, true)) {
            // line 26
            echo "                                    <div class=\"sub-title\">";
            // line 27
            if ($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), "indexPath", array(), "any", true, true)) {
                // line 28
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), "indexPath", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), "indexLabel", array())), "html", null, true);
                echo "</a>";
            } else {
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), "indexLabel", array())), "html", null, true);
            }
            // line 32
            echo "</div>
                                    <span class=\"separator\">/</span>
                                    ";
        }
        // line 35
        echo "                                    ";
        if ($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), "additional", array(), "any", true, true)) {
            // line 36
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), "additional", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 37
                echo "                                            <div class=\"sub-title\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "indexPath", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["breadcrumb"], "indexLabel", array())), "html", null, true);
                echo "</a></div>
                                            <span class=\"separator\">/</span>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                                    ";
        }
        // line 41
        echo "                                    <h1 class=\"user-name\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), "entityTitle", array()), "html", null, true);
        echo "</h1>
                                </div>
                            ";
    }

    // line 47
    public function block_stats($context, array $blocks = array())
    {
        // line 48
        echo "                                    <li>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Created"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), "entity", array()), "createdAt", array())) ? ($this->env->getExtension('oro_locale_datetime')->formatDateTime($this->getAttribute($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), "entity", array()), "createdAt", array()))) : ("N/A"));
        echo "</li>
                                    <li>";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Updated"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), "entity", array()), "updatedAt", array())) ? ($this->env->getExtension('oro_locale_datetime')->formatDateTime($this->getAttribute($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), "entity", array()), "updatedAt", array()))) : ("N/A"));
        echo "</li>
                                ";
    }

    // line 60
    public function block_content_data($context, array $blocks = array())
    {
        // line 61
        echo "            ";
        echo $context["UI"]->getscrollData((isset($context["id"]) ? $context["id"] : null), (isset($context["data"]) ? $context["data"] : null));
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:actions:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 61,  193 => 60,  185 => 49,  178 => 48,  175 => 47,  167 => 41,  164 => 40,  152 => 37,  147 => 36,  144 => 35,  139 => 32,  136 => 30,  129 => 28,  127 => 27,  125 => 26,  123 => 25,  120 => 24,  117 => 23,  109 => 51,  107 => 47,  102 => 44,  100 => 23,  96 => 21,  88 => 18,  85 => 17,  83 => 16,  76 => 15,  73 => 14,  68 => 10,  62 => 63,  60 => 60,  54 => 56,  52 => 14,  47 => 11,  45 => 10,  38 => 5,  35 => 4,  31 => 1,  29 => 2,  23 => 1,);
    }
}
/* {% extends bap.layout %}*/
/* {% import 'OroUIBundle::macros.html.twig' as UI %}*/
/* */
/* {% block content %}*/
/* <div class="layout-content">*/
/*     <div class="navigation clearfix navbar-extra">*/
/*         <div class="row">*/
/*             <div class="pull-right">*/
/*                 <div class="pull-right">*/
/*                     {% block navButtons %}{% endblock navButtons %}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="span10">*/
/*             {% block pageHeader %}*/
/*                 <div class="customer-info {% if (breadcrumbs.hasAvatar is not defined) %}customer-simple{% endif %}">*/
/*                     {% if breadcrumbs.hasAvatar is defined and breadcrumbs.hasAvatar %}*/
/*                         <div class="visual">*/
/*                             <img src="{{ breadcrumbs.imagePath ? breadcrumbs.imagePath | imagine_filter('avatar_med') : asset('bundles/pimui/img/info-user.png') }}" alt="{{ breadcrumbs.entityTitle }}"/>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     <div class="pull-left">*/
/*                         <div class="clearfix">*/
/*                             {% block breadcrumbs %}*/
/*                                 <div class="pull-left">*/
/*                                     {% if breadcrumbs.indexLabel is defined %}*/
/*                                     <div class="sub-title">*/
/*                                     {%- if breadcrumbs.indexPath is defined -%}*/
/*                                         <a href="{{ breadcrumbs.indexPath }}">{{ breadcrumbs.indexLabel|trans }}</a>*/
/*                                     {%- else -%}*/
/*                                         {{ breadcrumbs.indexLabel|trans }}*/
/*                                     {%- endif -%}*/
/*                                     </div>*/
/*                                     <span class="separator">/</span>*/
/*                                     {% endif %}*/
/*                                     {% if breadcrumbs.additional is defined %}*/
/*                                         {% for breadcrumb in breadcrumbs.additional %}*/
/*                                             <div class="sub-title"><a href="{{ breadcrumb.indexPath }}">{{ breadcrumb.indexLabel|trans }}</a></div>*/
/*                                             <span class="separator">/</span>*/
/*                                         {% endfor %}*/
/*                                     {% endif %}*/
/*                                     <h1 class="user-name">{{ breadcrumbs.entityTitle }}</h1>*/
/*                                 </div>*/
/*                             {% endblock breadcrumbs %}*/
/*                         </div>*/
/*                         <div class="clearfix">*/
/*                             <ul class="inline">*/
/*                                 {% block stats %}*/
/*                                     <li>{{ 'Created'|trans }}: {{ breadcrumbs.entity.createdAt ? breadcrumbs.entity.createdAt|oro_format_datetime : 'N/A' }}</li>*/
/*                                     <li>{{ 'Updated'|trans }}: {{ breadcrumbs.entity.updatedAt ? breadcrumbs.entity.updatedAt|oro_format_datetime : 'N/A' }}</li>*/
/*                                 {% endblock stats %}*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endblock pageHeader %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="layout-content scrollable-container">*/
/*         {% block content_data %}*/
/*             {{ UI.scrollData(id, data) }}*/
/*         {% endblock content_data %}*/
/*     </div>*/
/* </div>*/
/* {% endblock content %}*/
/* */
