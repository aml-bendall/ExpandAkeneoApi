<?php

/* OroNavigationBundle:Js:pinbar.js.twig */
class __TwigTemplate_0202eab00ca642faa5929394fed23e2498b010461eb680347f799ad3479d76f5 extends Twig_Template
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
        echo "<script type=\"text/html\" id=\"template-no-pins-message\">
    <a class=\"pin-bar-empty\"  href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("oro_pinbar_help");
        echo "\">";
        echo $this->env->getExtension('translator')->trans("Learn how to use this space");
        echo "</a>
</script>

<script type=\"text/html\" id=\"template-list-pin-item\">
    <div class=\"pin-holder\">
        <a class=\"btn-close icon-remove\" href=\"#\">";
        // line 7
        echo $this->env->getExtension('translator')->trans("close");
        echo "</a>
        <div><a href=\"#\" title=\"<%- title_rendered %>\"><%- title_rendered_short %></a></div>
    </div>
</script>

<script type=\"text/html\" id=\"template-tab-pin-item\">
    <button class=\"close\" type=\"button\">&times;</button><span title=\"<%- title_rendered %>\"><%- title_rendered_short %></span>
</script>
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Js:pinbar.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 7,  22 => 2,  19 => 1,);
    }
}
/* <script type="text/html" id="template-no-pins-message">*/
/*     <a class="pin-bar-empty"  href="{{ path('oro_pinbar_help')|raw }}">{{ 'Learn how to use this space'|trans|raw }}</a>*/
/* </script>*/
/* */
/* <script type="text/html" id="template-list-pin-item">*/
/*     <div class="pin-holder">*/
/*         <a class="btn-close icon-remove" href="#">{{ 'close'|trans|raw }}</a>*/
/*         <div><a href="#" title="<%- title_rendered %>"><%- title_rendered_short %></a></div>*/
/*     </div>*/
/* </script>*/
/* */
/* <script type="text/html" id="template-tab-pin-item">*/
/*     <button class="close" type="button">&times;</button><span title="<%- title_rendered %>"><%- title_rendered_short %></span>*/
/* </script>*/
/* */
