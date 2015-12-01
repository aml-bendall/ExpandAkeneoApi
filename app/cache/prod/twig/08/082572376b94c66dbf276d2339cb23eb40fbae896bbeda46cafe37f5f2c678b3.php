<?php

/* OroUIBundle:Default:help.html.twig */
class __TwigTemplate_1630775f754a27700b63bc2cb3cd8f67e1689d54721988c92f5e373fea8399cb extends Twig_Template
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
        echo "<li class=\"divider-vertical small-divider\"></li>
<li><a class=\"help no-hash\" href=\"http://www.akeneo.com/doc/user-guide/\" target=\"_blank\"><i class=\"icon-question-sign\" title=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Get help"), "html", null, true);
        echo "\"></i></a></li>
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:help.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* <li class="divider-vertical small-divider"></li>*/
/* <li><a class="help no-hash" href="http://www.akeneo.com/doc/user-guide/" target="_blank"><i class="icon-question-sign" title="{{ 'Get help'|trans }}"></i></a></li>*/
/* */
