<?php

/* PimUserBundle::layout.html.twig */
class __TwigTemplate_5fc660bca287bc571d5e6bd06b506f610990ce9fba8f97a5d36202a70d784672 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimUIBundle:Default:index.html.twig", "PimUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'hash_nav' => array($this, 'block_hash_nav'),
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
            'messages' => array($this, 'block_messages'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PimUIBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_hash_nav($context, array $blocks = array())
    {
    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->displayBlock('messages', $context, $blocks);
        // line 21
        echo "
    ";
        // line 22
        $this->displayBlock('content', $context, $blocks);
    }

    // line 10
    public function block_messages($context, array $blocks = array())
    {
        // line 11
        echo "        ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "peekAll", array())) > 0)) {
            // line 12
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "all", array()));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 13
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 14
                    echo "                <div class=\"alert";
                    echo twig_escape_filter($this->env, (($context["type"]) ? ((" alert-" . $context["type"])) : ("")), "html", null, true);
                    echo "\">
                ";
                    // line 15
                    echo $this->env->getExtension('translator')->trans($context["message"]);
                    echo "
                </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        ";
        }
        // line 20
        echo "    ";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "    ";
    }

    public function getTemplateName()
    {
        return "PimUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 23,  98 => 22,  94 => 20,  91 => 19,  85 => 18,  76 => 15,  71 => 14,  66 => 13,  61 => 12,  58 => 11,  55 => 10,  51 => 22,  48 => 21,  45 => 10,  42 => 9,  37 => 6,  32 => 3,  11 => 1,);
    }
}
/* {% extends 'PimUIBundle:Default:index.html.twig' %}*/
/* */
/* {% block hash_nav %}*/
/* {% endblock %}*/
/* */
/* {% block header %}*/
/* {% endblock header %}*/
/* */
/* {% block main %}*/
/*     {% block messages %}*/
/*         {% if app.session.flashbag.peekAll|length > 0 %}*/
/*             {% for type, messages in app.session.flashbag.all %}*/
/*                 {% for message in messages %}*/
/*                 <div class="alert{{ type ? ' alert-'~type : '' }}">*/
/*                 {{ message|trans|raw }}*/
/*                 </div>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/*     {% endblock %}*/
/* */
/*     {% block content %}*/
/*     {% endblock content %}*/
/* {% endblock %}*/
/* */
