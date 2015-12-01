<?php

/* OroTranslationBundle::requirejs.config.js.twig */
class __TwigTemplate_edc370f095f431e5965a37525571074f4267dfded076ed746f13d54261178175 extends Twig_Template
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
    config: {
        'oro/translator': {
            messages: '";
        // line 4
        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_source($this->env, $this->env->getExtension('pim_translations_extension')->getTranslationsFile())), "js", null, true);
        echo "'
        }
    }
});
";
    }

    public function getTemplateName()
    {
        return "OroTranslationBundle::requirejs.config.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
/* require({*/
/*     config: {*/
/*         'oro/translator': {*/
/*             messages: '{{ source(get_translations_file())|json_encode }}'*/
/*         }*/
/*     }*/
/* });*/
/* */
