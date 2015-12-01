<?php

/* PimUIBundle:Default:page_elements.html.twig */
class __TwigTemplate_64c0e73681d8e5d90fdc9aad518bdd7e5a0d491efef4739ef4394d74c8797fa1 extends Twig_Template
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
        // line 32
        echo "
";
        // line 44
        echo "
";
        // line 61
        echo "
";
        // line 68
        echo "
";
        // line 75
        echo "
";
        // line 85
        echo "
";
        // line 96
        echo "
";
        // line 122
        echo "
";
        // line 142
        echo "
";
        // line 153
        echo "
";
        // line 173
        echo "
";
        // line 195
        echo "
";
        // line 204
        echo "
";
        // line 246
        echo "
";
        // line 285
        echo "
";
        // line 299
        echo "
";
        // line 304
        echo "
";
    }

    // line 1
    public function getcreateBtn($__entity__ = null, $__url__ = null, $__attr__ = null, $__acl__ = null, $__icon__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "entity" => $__entity__,
            "url" => $__url__,
            "attr" => $__attr__,
            "acl" => $__acl__,
            "icon" => $__icon__,
            "varargs" => func_num_args() > 5 ? array_slice(func_get_args(), 5) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            ob_start();
            // line 3
            echo "    ";
            if (((null === (isset($context["acl"]) ? $context["acl"] : null)) || $this->env->getExtension('oro_security_extension')->checkResourceIsGranted((isset($context["acl"]) ? $context["acl"] : null)))) {
                // line 4
                echo "        ";
                if (((isset($context["attr"]) ? $context["attr"] : null) == "dialog")) {
                    // line 5
                    echo "            ";
                    $context["buttonId"] = ("create-" . twig_lower_filter($this->env, twig_replace_filter((isset($context["entity"]) ? $context["entity"] : null), array(" " => "-", "." => "-"))));
                    // line 6
                    echo "            ";
                    $context["attr"] = array("id" => (isset($context["buttonId"]) ? $context["buttonId"] : null), "data-form-url" => (isset($context["url"]) ? $context["url"] : null));
                    // line 7
                    echo "            ";
                    $context["url"] = null;
                    // line 8
                    echo "        ";
                }
                // line 9
                echo "        ";
                $context["title"] = twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans(("btn.create." . (isset($context["entity"]) ? $context["entity"] : null))));
                // line 10
                echo "        <a class=\"btn btn-primary pull-right";
                if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "html", null, true);
                }
                echo " ";
                if (((isset($context["entity"]) ? $context["entity"] : null) && (isset($context["icon"]) ? $context["icon"] : null))) {
                    echo " icons-holder-text";
                } elseif ((isset($context["icon"]) ? $context["icon"] : null)) {
                    echo " icons-holder";
                }
                echo " \" href=\"";
                echo twig_escape_filter($this->env, (((isset($context["url"]) ? $context["url"] : null)) ? ((isset($context["url"]) ? $context["url"] : null)) : ("javascript:void(0);")), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "\"";
                if ((isset($context["attr"]) ? $context["attr"] : null)) {
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
                    foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                        if (($context["key"] != "class")) {
                            echo " ";
                            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                            echo "=\"";
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "\"";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                echo ">
          ";
                // line 11
                if ((isset($context["icon"]) ? $context["icon"] : null)) {
                    // line 12
                    echo "            <i class=\"icon-";
                    echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
                    echo "\"></i>
          ";
                }
                // line 14
                echo "          ";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "
        </a>
        ";
                // line 16
                if (array_key_exists("buttonId", $context)) {
                    // line 17
                    echo "            <script type=\"text/javascript\">
                require(
                    ['jquery', 'pim/dialogform'],
                    function (\$, DialogForm) {
                        'use strict';
                        \$(function() {
                            new DialogForm('#";
                    // line 23
                    echo twig_escape_filter($this->env, (isset($context["buttonId"]) ? $context["buttonId"] : null), "html", null, true);
                    echo "');
                        });
                    }
                );
            </script>
        ";
                }
                // line 29
                echo "    ";
            }
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 33
    public function getsubmitBtn($__text__ = null, $__icon__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "icon" => $__icon__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 34
            ob_start();
            // line 35
            echo "    ";
            $context["text"] = twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans(((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : null), "btn.save")) : ("btn.save"))));
            // line 36
            echo "    <button type=\"submit\" class=\"btn btn-primary btn-submit\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
            echo "\">
        ";
            // line 37
            if ((isset($context["icon"]) ? $context["icon"] : null)) {
                // line 38
                echo "            <i class=\"icon-";
                echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
                echo "\"></i>
        ";
            }
            // line 40
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
            echo "
    </button>
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 45
    public function getsubmitDropdownBtn($__actions__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "actions" => $__actions__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 46
            ob_start();
            // line 47
            echo "    <div class=\"btn-group submit-form\">
        ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) ? $context["actions"] : null));
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
            foreach ($context['_seq'] as $context["actionKey"] => $context["action"]) {
                // line 49
                echo "            ";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    // line 50
                    echo "                <button type=\"submit\" class=\"btn btn-primary\" title=\"";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute($context["action"], "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "text", array()), "")) : ("")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute($context["action"], "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "text", array()), "")) : ("")))), "html", null, true);
                    echo "</button>
                <button data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\"><span class=\"caret\"></span></button>
                <ul class=\"dropdown-menu right-align\">
            ";
                } else {
                    // line 54
                    echo "                    <li><a href=\"javascript:void(0);\" value=\"";
                    echo twig_escape_filter($this->env, $context["actionKey"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute($context["action"], "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "text", array()), "")) : ("")))), "html", null, true);
                    echo "</a></li>
            ";
                }
                // line 56
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['actionKey'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "        </ul>
    </div>
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 62
    public function getbackLink($__url__ = null, $__title__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "title" => $__title__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 63
            ob_start();
            // line 64
            echo "    ";
            $context["title"] = ((array_key_exists("title", $context)) ? (_twig_default_filter((isset($context["title"]) ? $context["title"] : null), "btn.to grid")) : ("btn.to grid"));
            // line 65
            echo "    <a class=\"btn icons-holder back-link\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["title"]) ? $context["title"] : null))), "html", null, true);
            echo "\"><i class=\"icon-chevron-left\"></i></a>
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 69
    public function getdeleteLinkAttributes($__url__ = null, $__redirectUrl__ = null, $__message__ = null, $__successMessage__ = null, $__title__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "redirectUrl" => $__redirectUrl__,
            "message" => $__message__,
            "successMessage" => $__successMessage__,
            "title" => $__title__,
            "varargs" => func_num_args() > 5 ? array_slice(func_get_args(), 5) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            ob_start();
            // line 70
            echo "    ";
            $context["message"] = ((array_key_exists("message", $context)) ? (_twig_default_filter((isset($context["message"]) ? $context["message"] : null), "confirmation.remove.item")) : ("confirmation.remove.item"));
            // line 71
            echo "    ";
            $context["title"] = ((array_key_exists("title", $context)) ? (_twig_default_filter((isset($context["title"]) ? $context["title"] : null), $this->env->getExtension('translator')->trans("confirmation.delete"))) : ($this->env->getExtension('translator')->trans("confirmation.delete")));
            // line 72
            echo "    ";
            $context["successMessage"] = ((array_key_exists("successMessage", $context)) ? (_twig_default_filter((isset($context["successMessage"]) ? $context["successMessage"] : null), $this->env->getExtension('translator')->trans("flash.entity.removed"))) : ($this->env->getExtension('translator')->trans("flash.entity.removed")));
            // line 73
            echo "    href=\"javascript:void(0);\" data-dialog=\"confirm\" data-title=\"";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "\" data-message=\"";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\" data-redirect-url=\"";
            echo twig_escape_filter($this->env, (isset($context["redirectUrl"]) ? $context["redirectUrl"] : null), "html", null, true);
            echo "\" data-method=\"DELETE\" data-error-message=\"";
            echo $this->env->getExtension('translator')->getTranslator()->trans("The element could not be deleted", array(), "messages");
            echo "\" data-success-message=\"";
            echo twig_escape_filter($this->env, (isset($context["successMessage"]) ? $context["successMessage"] : null), "html", null, true);
            echo "\"
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 76
    public function getdeleteLink($__url__ = null, $__acl__ = null, $__redirectUrl__ = null, $__message__ = null, $__successMessage__ = null, $__title__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "acl" => $__acl__,
            "redirectUrl" => $__redirectUrl__,
            "message" => $__message__,
            "successMessage" => $__successMessage__,
            "title" => $__title__,
            "varargs" => func_num_args() > 6 ? array_slice(func_get_args(), 6) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            ob_start();
            // line 77
            echo "    ";
            if (((null === (isset($context["acl"]) ? $context["acl"] : null)) || $this->env->getExtension('oro_security_extension')->checkResourceIsGranted((isset($context["acl"]) ? $context["acl"] : null)))) {
                // line 78
                echo "        ";
                $context["elements"] = $this;
                // line 79
                echo "        <a class=\"btn icons-holder-text no-hash btn-delete\" title=\"";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("btn.delete")), "html", null, true);
                echo "\" ";
                echo $context["elements"]->getdeleteLinkAttributes((isset($context["url"]) ? $context["url"] : null), (isset($context["redirectUrl"]) ? $context["redirectUrl"] : null), (isset($context["message"]) ? $context["message"] : null), (isset($context["successMessage"]) ? $context["successMessage"] : null), (isset($context["title"]) ? $context["title"] : null));
                echo " >
            <i class=\"icon-trash\"></i>
            ";
                // line 81
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("btn.delete")), "html", null, true);
                echo "
        </a>
    ";
            }
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 86
    public function getlink($__text__ = null, $__url__ = null, $__opts__ = array())
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "url" => $__url__,
            "opts" => $__opts__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 87
            ob_start();
            // line 88
            echo "    ";
            $context["title"] = (($this->getAttribute((isset($context["opts"]) ? $context["opts"] : null), "title", array(), "any", true, true)) ? ($this->getAttribute((isset($context["opts"]) ? $context["opts"] : null), "title", array())) : ((isset($context["text"]) ? $context["text"] : null)));
            // line 89
            echo "    ";
            $context["icon"] = (($this->getAttribute((isset($context["opts"]) ? $context["opts"] : null), "icon", array(), "any", true, true)) ? ($this->getAttribute((isset($context["opts"]) ? $context["opts"] : null), "icon", array())) : (null));
            // line 90
            echo "    <a";
            if ($this->getAttribute((isset($context["opts"]) ? $context["opts"] : null), "id", array(), "any", true, true)) {
                echo " id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opts"]) ? $context["opts"] : null), "id", array()), "html", null, true);
                echo "\"";
            }
            echo " class=\"btn ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["opts"]) ? $context["opts"] : null), "class", array(), "any", true, true)) ? (twig_join_filter($this->getAttribute((isset($context["opts"]) ? $context["opts"] : null), "class", array()), " ")) : ("")), "html", null, true);
            if (((isset($context["text"]) ? $context["text"] : null) && (isset($context["icon"]) ? $context["icon"] : null))) {
                echo " icons-holder-text";
            } elseif ((isset($context["icon"]) ? $context["icon"] : null)) {
                echo " icons-holder";
            }
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, (((isset($context["url"]) ? $context["url"] : null)) ? ((isset($context["url"]) ? $context["url"] : null)) : ("javascript:void(0);")), "html", null, true);
            echo "\"";
            if ((isset($context["title"]) ? $context["title"] : null)) {
                echo " title=\"";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["title"]) ? $context["title"] : null))), "html", null, true);
                echo "\"";
            }
            if ($this->getAttribute((isset($context["opts"]) ? $context["opts"] : null), "attr", array(), "any", true, true)) {
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["opts"]) ? $context["opts"] : null), "attr", array()));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            echo ">
        ";
            // line 91
            if ((isset($context["icon"]) ? $context["icon"] : null)) {
                echo "<i class=\"icon-";
                echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
                echo "\"></i>";
            }
            // line 92
            echo "        ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["text"]) ? $context["text"] : null))), "html", null, true);
            echo "
    </a>
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 97
    public function getpage_header($__title__ = null, $__buttons__ = null, $__subtitle__ = null, $__left__ = null, $__right__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "buttons" => $__buttons__,
            "subtitle" => $__subtitle__,
            "left" => $__left__,
            "right" => $__right__,
            "varargs" => func_num_args() > 5 ? array_slice(func_get_args(), 5) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 98
            echo "    <div class=\"navigation clearfix navbar-extra\">
        <div class=\"row-fluid\">
            ";
            // line 100
            if ( !twig_test_empty((isset($context["buttons"]) ? $context["buttons"] : null))) {
                // line 101
                echo "                <div class=\"navbar-buttons pull-right\">
                    ";
                // line 102
                echo twig_escape_filter($this->env, (isset($context["buttons"]) ? $context["buttons"] : null), "html", null, true);
                echo "
                </div>
            ";
            }
            // line 105
            echo "            <div class=\"navbar-content pull-left\">
                <div class=\"navbar-title clearfix-oro\">
                    <div class=\"sub-title\">";
            // line 107
            echo twig_escape_filter($this->env, (twig_capitalize_string_filter($this->env, twig_first($this->env, (isset($context["title"]) ? $context["title"] : null))) . twig_slice($this->env, (isset($context["title"]) ? $context["title"] : null), 1, null)), "html", null, true);
            echo "</div>
                    ";
            // line 108
            if ( !twig_test_empty((isset($context["subtitle"]) ? $context["subtitle"] : null))) {
                // line 109
                echo "                        <span class=\"separator\">/</span>
                        <div class=\"sub-title\">";
                // line 110
                echo twig_escape_filter($this->env, (isset($context["subtitle"]) ? $context["subtitle"] : null), "html", null, true);
                echo "</div>
                    ";
            }
            // line 112
            echo "                </div>
           </div>
           <div class=\"clearfix\"></div>
           <div class=\"navbar-content pull-left\">
               ";
            // line 116
            echo twig_escape_filter($this->env, (isset($context["left"]) ? $context["left"] : null), "html", null, true);
            echo "
           </div>
            ";
            // line 118
            echo twig_escape_filter($this->env, (isset($context["right"]) ? $context["right"] : null), "html", null, true);
            echo "
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 123
    public function getform_navbar($__tabs__ = null, $__translationSuffix__ = ".title")
    {
        $context = $this->env->mergeGlobals(array(
            "tabs" => $__tabs__,
            "translationSuffix" => $__translationSuffix__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 124
            echo "    <div id=\"form-navbar\" class=\"navbar navbar-static scrollspy-nav\">
        <div class=\"navbar-inner\">
            <div class=\"row-fluid\">
                ";
            // line 127
            if ( !twig_test_empty((isset($context["tabs"]) ? $context["tabs"] : null))) {
                // line 128
                echo "                    <ul class=\"nav\">
                        ";
                // line 129
                if (twig_test_iterable((isset($context["tabs"]) ? $context["tabs"] : null))) {
                    // line 130
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : null));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                        // line 131
                        echo "                                <li";
                        if ($this->getAttribute($context["loop"], "first", array())) {
                            echo " class=\"active\"";
                        }
                        echo "><a href=\"#";
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_replace_filter($context["tab"], array(" " => "-", "." => "-"))), "html", null, true);
                        echo "\" data-toggle=\"tab\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(($context["tab"] . (isset($context["translationSuffix"]) ? $context["translationSuffix"] : null))), "html", null, true);
                        echo "</a></li>
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 133
                    echo "                        ";
                } else {
                    // line 134
                    echo "                            <li class=\"active\"><a href=\"#";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_replace_filter((isset($context["tabs"]) ? $context["tabs"] : null), array(" " => "-", "." => "-"))), "html", null, true);
                    echo "\" data-toggle=\"tab\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(((isset($context["tabs"]) ? $context["tabs"] : null) . (isset($context["translationSuffix"]) ? $context["translationSuffix"] : null))), "html", null, true);
                    echo "</a></li>
                        ";
                }
                // line 136
                echo "                    </ul>
                ";
            }
            // line 138
            echo "            </div>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 143
    public function getform_errors($__form__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 144
            echo "    ";
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "errors", array()))) {
                // line 145
                echo "        <div class=\"alert alert-error fade in top-messages\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <div class=\"message\">
                ";
                // line 148
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
                echo "
            </div>
        </div>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 154
    public function getaccordion($__items__ = array(), $__counter__ = 1, $__no_buffer__ = false)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "counter" => $__counter__,
            "no_buffer" => $__no_buffer__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 155
            echo "    <div class=\"accordion\">
        ";
            // line 156
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
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
            foreach ($context['_seq'] as $context["title"] => $context["content"]) {
                // line 157
                echo "            <div class=\"accordion-group\">
                <div class=\"accordion-heading\">
                    <a class=\"accordion-toggle\" data-toggle=\"collapse\" href=\"#collapse-";
                // line 159
                echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : null), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                        <i class=\"icon-chevron-down\"></i>
                        ";
                // line 161
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["title"]), "html", null, true);
                echo "
                    </a>
                </div>
                <div id=\"collapse-";
                // line 164
                echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : null), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"accordion-body in\">
                    <div class=\"accordion-inner";
                // line 165
                echo (((isset($context["no_buffer"]) ? $context["no_buffer"] : null)) ? ("-unbuffered") : (""));
                echo "\">
                        ";
                // line 166
                echo $context["content"];
                echo "
                    </div>
                </div>
            </div>
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
            unset($context['_seq'], $context['_iterated'], $context['title'], $context['content'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 174
    public function getupdated($__formId__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "formId" => $__formId__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 175
            ob_start();
            // line 176
            echo "    <div id=\"entity-updated\" class=\"pull-right\">
        <span class=\"label label-warning\">
            <i class=\"icon icon-circle\"></i>
            ";
            // line 179
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("info.updated"), "html", null, true);
            echo "
        </span>
    </div>
    <script type=\"text/javascript\">
        require(
            ['jquery', 'pim/formupdatelistener'],
            function (\$, FormUpdateListener) {
                'use strict';
                \$(function () {
                    new FormUpdateListener(\$('#";
            // line 188
            echo twig_escape_filter($this->env, (isset($context["formId"]) ? $context["formId"] : null), "html", null, true);
            echo "'));
                });
            }
        );
    </script>
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 196
    public function getquickCreateOption($__id__ = null, $__route__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "route" => $__route__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 197
            ob_start();
            // line 198
            echo "    ";
            $context["id"] = ("add-option-link-" . (isset($context["id"]) ? $context["id"] : null));
            // line 199
            echo "    <a id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" data-form-url=\"";
            echo twig_escape_filter($this->env, (isset($context["route"]) ? $context["route"] : null), "html", null, true);
            echo "\" class=\"btn btn-small icons-holder add-attribute-option\" href=\"javascript:void(0);\" data-toggle=\"tooltip\" data-original-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Add an option"), "html", null, true);
            echo "\" data-success-message=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("flash.attribute.option created"), "html", null, true);
            echo "\" data-error-message=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("flash.attribute.error creating option"), "html", null, true);
            echo "\">
        <i class=\"icon-plus\"></i>
    </a>
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 205
    public function getchannelSwitcher($__channels__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "channels" => $__channels__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 206
            ob_start();
            // line 207
            echo "    ";
            $context["id"] = "channel-switcher";
            // line 208
            echo "    <div id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" class=\"btn-group\">
        <a class=\"btn dropdown-toggle\" href=\"javascript:void(0);\" title=\"";
            // line 209
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Scope"), "html", null, true);
            echo "\" data-toggle=\"dropdown\">
            <i class=\"icon-eye-open\"></i>
            <span>";
            // line 211
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Scope"), "html", null, true);
            echo "</span>
        </a>
        <ul class=\"dropdown-menu pull-right\">
            ";
            // line 214
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["channels"]) ? $context["channels"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                // line 215
                echo "                <li><a href=\"javascript:void(0);\" data-scope=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["channel"], "code", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["channel"], "label", array()), "html", null, true);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 217
            echo "        </ul>
        <a class=\"btn icons-holder\" href=\"javascript:void(0);\" title=\"";
            // line 218
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Expand all channels"), "html", null, true);
            echo "\" data-action=\"expand\" data-collapse-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Collapse all channels"), "html", null, true);
            echo "\" data-expand-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Expand all channels"), "html", null, true);
            echo "\">
            <i class=\"icon-caret-right\"></i>
        </a>
    </div>
    <script type=\"text/javascript\">
        require(
            ['jquery', 'oro/mediator'],
            function (\$, mediator) {
                'use strict';
                \$(function () {
                    var \$channelSwitcher = \$('#";
            // line 228
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "');
                    \$channelSwitcher.find('.dropdown-menu').find('a[data-scope]').on('click', function() {
                        mediator.trigger('scopablefield:changescope', \$(this).attr('data-scope'));
                    });
                    \$channelSwitcher.find('>a[data-action]').on('click', function() {
                        var \$el = \$(this),
                            action = \$el.attr('data-action');
                        mediator.trigger('scopablefield:' + action);
                        var newAction = action == 'collapse' ? 'expand' : 'collapse';
                        \$el.attr('title', \$el.attr('data-' + newAction + '-title')).attr('data-action', newAction);
                        \$el.find('i').toggleClass('icon-caret-right icon-caret-down');
                    });
                });
            }
        );
    </script>
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 247
    public function getenabledSwitch($__form__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 248
            ob_start();
            // line 249
            echo "    ";
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enabled", array(), "any", true, true)) {
                // line 250
                echo "        ";
                $context["switchId"] = "switch_status";
                // line 251
                echo "        ";
                $context["enableLabel"] = $this->env->getExtension('translator')->trans("info.product.enable");
                // line 252
                echo "        ";
                $context["disableLabel"] = $this->env->getExtension('translator')->trans("info.product.disable");
                // line 253
                echo "        ";
                $context["enabledLabel"] = $this->env->getExtension('translator')->trans("info.product.enabled");
                // line 254
                echo "        ";
                $context["disabledLabel"] = $this->env->getExtension('translator')->trans("info.product.disabled");
                // line 255
                echo "        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enabled", array()), 'widget');
                echo "
        <div class=\"btn-group\">
            <button id=\"";
                // line 257
                echo twig_escape_filter($this->env, (isset($context["switchId"]) ? $context["switchId"] : null), "html", null, true);
                echo "\" type=\"button\" class=\"btn\">";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enabled", array()), "vars", array()), "value", array())) ? ((isset($context["disableLabel"]) ? $context["disableLabel"] : null)) : ((isset($context["enableLabel"]) ? $context["enableLabel"] : null))), "html", null, true);
                echo "</button>
        </div>
        <script type=\"text/javascript\">
            require(
                ['jquery'],
                function (\$) {
                    'use strict';
                    \$(function () {
                        \$('#";
                // line 265
                echo twig_escape_filter($this->env, (isset($context["switchId"]) ? $context["switchId"] : null), "html", null, true);
                echo "').on('click', function () {
                            var \$field = \$('#";
                // line 266
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enabled", array()), "vars", array()), "id", array()), "html", null, true);
                echo "'),
                                \$status = \$('.status-enabled').find('.badge');
                            if (+\$field.val()) {
                                \$field.val(0).trigger('change');
                                \$(this).html('";
                // line 270
                echo twig_escape_filter($this->env, (isset($context["enableLabel"]) ? $context["enableLabel"] : null), "html", null, true);
                echo "');
                                \$status.html('<i class=\"icon-status-disabled icon-circle\"></i>";
                // line 271
                echo twig_escape_filter($this->env, (isset($context["disabledLabel"]) ? $context["disabledLabel"] : null), "html", null, true);
                echo "').removeClass('badge-enabled status-enabled').addClass('badge-disabled status-disabled');
                            } else {
                                \$field.val(1).trigger('change');
                                \$(this).html('";
                // line 274
                echo twig_escape_filter($this->env, (isset($context["disableLabel"]) ? $context["disableLabel"] : null), "html", null, true);
                echo "');
                                \$status.html('<i class=\"icon-status-enabled icon-circle\"></i>";
                // line 275
                echo twig_escape_filter($this->env, (isset($context["enabledLabel"]) ? $context["enabledLabel"] : null), "html", null, true);
                echo "').removeClass('badge-disabled status-disabled').addClass('badge-enabled status-enabled');
                            }
                        });
                    });
                }
            );
        </script>
    ";
            }
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 286
    public function getenabledLabel($__form__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 287
            ob_start();
            // line 288
            echo "    ";
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enabled", array(), "any", true, true)) {
                // line 289
                echo "        <div class=\"status-enabled pull-left\">
            ";
                // line 290
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enabled", array()), "vars", array()), "value", array())) {
                    // line 291
                    echo "                <div class=\"badge badge-enabled status-enabled\"><i class=\"icon-status-enabled icon-circle\"></i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("info.product.enabled"), "html", null, true);
                    echo "</div>
            ";
                } else {
                    // line 293
                    echo "                <div class=\"badge badge-disabled status-disabled\"><i class=\"icon-status-disabled icon-circle\"></i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("info.product.disabled"), "html", null, true);
                    echo "</div>
            ";
                }
                // line 295
                echo "        </div>
    ";
            }
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 300
    public function getconfirmLinkAttributes($__url__ = null, $__redirectUrl__ = null, $__message__ = null, $__successMessage__ = null, $__title__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "redirectUrl" => $__redirectUrl__,
            "message" => $__message__,
            "successMessage" => $__successMessage__,
            "title" => $__title__,
            "varargs" => func_num_args() > 5 ? array_slice(func_get_args(), 5) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            ob_start();
            // line 301
            echo "    ";
            $context["title"] = ((array_key_exists("title", $context)) ? (_twig_default_filter((isset($context["title"]) ? $context["title"] : null), $this->env->getExtension('translator')->trans("confirmation.confirm"))) : ($this->env->getExtension('translator')->trans("confirmation.confirm")));
            // line 302
            echo "    href=\"javascript:void(0);\" data-dialog=\"confirm\" data-title=\"";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "\" data-message=\"";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\" data-redirect-url=\"";
            echo twig_escape_filter($this->env, (isset($context["redirectUrl"]) ? $context["redirectUrl"] : null), "html", null, true);
            echo "\" data-method=\"POST\" data-error-message=\"";
            echo $this->env->getExtension('translator')->getTranslator()->trans("The action could not be performed", array(), "messages");
            echo "\" data-success-message=\"";
            echo twig_escape_filter($this->env, (isset($context["successMessage"]) ? $context["successMessage"] : null), "html", null, true);
            echo "\"
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 305
    public function getconfirmLink($__url__ = null, $__redirectUrl__ = null, $__successMessage__ = null, $__buttonLabel__ = null, $__buttonIcon__ = null, $__message__ = null, $__buttonClass__ = null, $__title__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "redirectUrl" => $__redirectUrl__,
            "successMessage" => $__successMessage__,
            "buttonLabel" => $__buttonLabel__,
            "buttonIcon" => $__buttonIcon__,
            "message" => $__message__,
            "buttonClass" => $__buttonClass__,
            "title" => $__title__,
            "varargs" => func_num_args() > 8 ? array_slice(func_get_args(), 8) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            ob_start();
            // line 306
            echo "    ";
            $context["this"] = $this;
            // line 307
            echo "    ";
            $context["buttonLabel"] = ("btn." . (isset($context["buttonLabel"]) ? $context["buttonLabel"] : null));
            // line 308
            echo "    <a class=\"btn ";
            echo twig_escape_filter($this->env, (isset($context["buttonClass"]) ? $context["buttonClass"] : null), "html", null, true);
            echo " icons-holder-text no-hash\" title=\"";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["buttonLabel"]) ? $context["buttonLabel"] : null))), "html", null, true);
            echo "\" ";
            echo $context["this"]->getconfirmLinkAttributes((isset($context["url"]) ? $context["url"] : null), (isset($context["redirectUrl"]) ? $context["redirectUrl"] : null), (isset($context["message"]) ? $context["message"] : null), (isset($context["successMessage"]) ? $context["successMessage"] : null), (isset($context["title"]) ? $context["title"] : null));
            echo " >
        <i class=\"icon-";
            // line 309
            echo twig_escape_filter($this->env, (isset($context["buttonIcon"]) ? $context["buttonIcon"] : null), "html", null, true);
            echo "\"></i>
        ";
            // line 310
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["buttonLabel"]) ? $context["buttonLabel"] : null))), "html", null, true);
            echo "
    </a>
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "PimUIBundle:Default:page_elements.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1256 => 310,  1252 => 309,  1243 => 308,  1240 => 307,  1237 => 306,  1217 => 305,  1192 => 302,  1189 => 301,  1172 => 300,  1158 => 295,  1152 => 293,  1146 => 291,  1144 => 290,  1141 => 289,  1138 => 288,  1136 => 287,  1124 => 286,  1103 => 275,  1099 => 274,  1093 => 271,  1089 => 270,  1082 => 266,  1078 => 265,  1065 => 257,  1059 => 255,  1056 => 254,  1053 => 253,  1050 => 252,  1047 => 251,  1044 => 250,  1041 => 249,  1039 => 248,  1027 => 247,  998 => 228,  981 => 218,  978 => 217,  967 => 215,  963 => 214,  957 => 211,  952 => 209,  947 => 208,  944 => 207,  942 => 206,  930 => 205,  905 => 199,  902 => 198,  900 => 197,  887 => 196,  869 => 188,  857 => 179,  852 => 176,  850 => 175,  838 => 174,  826 => 171,  807 => 166,  803 => 165,  797 => 164,  791 => 161,  784 => 159,  780 => 157,  763 => 156,  760 => 155,  746 => 154,  730 => 148,  725 => 145,  722 => 144,  710 => 143,  696 => 138,  692 => 136,  684 => 134,  681 => 133,  658 => 131,  640 => 130,  638 => 129,  635 => 128,  633 => 127,  628 => 124,  615 => 123,  600 => 118,  595 => 116,  589 => 112,  584 => 110,  581 => 109,  579 => 108,  575 => 107,  571 => 105,  565 => 102,  562 => 101,  560 => 100,  556 => 98,  540 => 97,  524 => 92,  518 => 91,  478 => 90,  475 => 89,  472 => 88,  470 => 87,  456 => 86,  440 => 81,  432 => 79,  429 => 78,  426 => 77,  408 => 76,  383 => 73,  380 => 72,  377 => 71,  374 => 70,  357 => 69,  340 => 65,  337 => 64,  335 => 63,  322 => 62,  308 => 57,  294 => 56,  286 => 54,  276 => 50,  273 => 49,  256 => 48,  253 => 47,  251 => 46,  239 => 45,  223 => 40,  217 => 38,  215 => 37,  210 => 36,  207 => 35,  205 => 34,  192 => 33,  179 => 29,  170 => 23,  162 => 17,  160 => 16,  154 => 14,  148 => 12,  146 => 11,  111 => 10,  108 => 9,  105 => 8,  102 => 7,  99 => 6,  96 => 5,  93 => 4,  90 => 3,  88 => 2,  72 => 1,  67 => 304,  64 => 299,  61 => 285,  58 => 246,  55 => 204,  52 => 195,  49 => 173,  46 => 153,  43 => 142,  40 => 122,  37 => 96,  34 => 85,  31 => 75,  28 => 68,  25 => 61,  22 => 44,  19 => 32,);
    }
}
/* {% macro createBtn(entity, url, attr, acl, icon) %}*/
/* {% spaceless %}*/
/*     {% if acl is null or resource_granted(acl) %}*/
/*         {% if attr == 'dialog' %}*/
/*             {% set buttonId = 'create-'~(entity|replace({' ': '-', '.': '-'})|lower) %}*/
/*             {% set attr = { 'id': buttonId, 'data-form-url': url } %}*/
/*             {% set url = null %}*/
/*         {% endif %}*/
/*         {% set title = ('btn.create.' ~ entity)|trans|capitalize %}*/
/*         <a class="btn btn-primary pull-right{% if attr.class is defined %} {{ attr.class }}{% endif %} {% if entity and icon %} icons-holder-text{% elseif icon %} icons-holder{% endif %} " href="{{ url ? url : 'javascript:void(0);' }}" title="{{ title }}"{% if attr %}{% for key, value in attr %}{% if key != 'class' %} {{ key }}="{{ value }}"{% endif %}{% endfor %}{% endif %}>*/
/*           {% if icon %}*/
/*             <i class="icon-{{ icon }}"></i>*/
/*           {% endif %}*/
/*           {{ title }}*/
/*         </a>*/
/*         {% if buttonId is defined %}*/
/*             <script type="text/javascript">*/
/*                 require(*/
/*                     ['jquery', 'pim/dialogform'],*/
/*                     function ($, DialogForm) {*/
/*                         'use strict';*/
/*                         $(function() {*/
/*                             new DialogForm('#{{ buttonId }}');*/
/*                         });*/
/*                     }*/
/*                 );*/
/*             </script>*/
/*         {% endif %}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endmacro %}*/
/* */
/* {% macro submitBtn(text, icon) %}*/
/* {% spaceless %}*/
/*     {% set text = text|default('btn.save')|trans|capitalize %}*/
/*     <button type="submit" class="btn btn-primary btn-submit" title="{{ text }}">*/
/*         {% if icon %}*/
/*             <i class="icon-{{ icon }}"></i>*/
/*         {% endif %}*/
/*         {{ text }}*/
/*     </button>*/
/* {% endspaceless %}*/
/* {% endmacro %}*/
/* */
/* {% macro submitDropdownBtn(actions) %}*/
/* {% spaceless %}*/
/*     <div class="btn-group submit-form">*/
/*         {% for actionKey, action in actions %}*/
/*             {% if loop.first %}*/
/*                 <button type="submit" class="btn btn-primary" title="{{ action.text|default('')|trans|capitalize }}">{{ action.text|default('')|trans|capitalize }}</button>*/
/*                 <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="caret"></span></button>*/
/*                 <ul class="dropdown-menu right-align">*/
/*             {% else %}*/
/*                     <li><a href="javascript:void(0);" value="{{ actionKey }}">{{ action.text|default('')|trans|capitalize }}</a></li>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endmacro %}*/
/* */
/* {% macro backLink(url, title) %}*/
/* {% spaceless %}*/
/*     {% set title = title|default('btn.to grid') %}*/
/*     <a class="btn icons-holder back-link" href="{{ url }}" title="{{ title|trans|capitalize }}"><i class="icon-chevron-left"></i></a>*/
/* {% endspaceless %}*/
/* {% endmacro %}*/
/* */
/* {% macro deleteLinkAttributes(url, redirectUrl, message, successMessage, title) %}{% spaceless %}*/
/*     {% set message = message|default('confirmation.remove.item') %}*/
/*     {% set title = title|default('confirmation.delete'|trans) %}*/
/*     {% set successMessage = successMessage|default('flash.entity.removed'|trans) %}*/
/*     href="javascript:void(0);" data-dialog="confirm" data-title="{{ title }}" data-message="{{ message }}" data-url="{{ url }}" data-redirect-url="{{ redirectUrl }}" data-method="DELETE" data-error-message="{% trans %}The element could not be deleted{% endtrans %}" data-success-message="{{ successMessage }}"*/
/* {% endspaceless %}{% endmacro %}*/
/* */
/* {% macro deleteLink(url, acl, redirectUrl, message, successMessage, title) %}{% spaceless %}*/
/*     {% if acl is null or resource_granted(acl) %}*/
/*         {% import _self as elements %}*/
/*         <a class="btn icons-holder-text no-hash btn-delete" title="{{ 'btn.delete'|trans|capitalize }}" {{elements.deleteLinkAttributes(url, redirectUrl, message, successMessage, title)}} >*/
/*             <i class="icon-trash"></i>*/
/*             {{ 'btn.delete'|trans|capitalize }}*/
/*         </a>*/
/*     {% endif %}*/
/* {% endspaceless %}{% endmacro %}*/
/* */
/* {% macro link(text, url, opts = {}) %}*/
/* {% spaceless %}*/
/*     {% set title = opts.title is defined ? opts.title : text %}*/
/*     {% set icon = opts.icon is defined ? opts.icon : null %}*/
/*     <a{% if opts.id is defined %} id="{{ opts.id }}"{% endif %} class="btn {{ opts.class is defined ? opts.class|join(' ') }}{% if text and icon %} icons-holder-text{% elseif icon %} icons-holder{% endif %} {{ icon }}" href="{{ url ? url : 'javascript:void(0);' }}"{% if title %} title="{{ title|trans|capitalize }}"{% endif %}{% if opts.attr is defined %}{% for key, value in opts.attr %} {{ key }}="{{ value }}"{% endfor %}{% endif %}>*/
/*         {% if icon %}<i class="icon-{{ icon }}"></i>{% endif %}*/
/*         {{ text|trans|capitalize }}*/
/*     </a>*/
/* {% endspaceless %}*/
/* {% endmacro %}*/
/* */
/* {% macro page_header(title, buttons, subtitle, left, right) %}*/
/*     <div class="navigation clearfix navbar-extra">*/
/*         <div class="row-fluid">*/
/*             {% if buttons is not empty %}*/
/*                 <div class="navbar-buttons pull-right">*/
/*                     {{ buttons }}*/
/*                 </div>*/
/*             {% endif %}*/
/*             <div class="navbar-content pull-left">*/
/*                 <div class="navbar-title clearfix-oro">*/
/*                     <div class="sub-title">{{ title|first|capitalize ~ title[1:] }}</div>*/
/*                     {% if subtitle is not empty %}*/
/*                         <span class="separator">/</span>*/
/*                         <div class="sub-title">{{ subtitle }}</div>*/
/*                     {% endif %}*/
/*                 </div>*/
/*            </div>*/
/*            <div class="clearfix"></div>*/
/*            <div class="navbar-content pull-left">*/
/*                {{ left }}*/
/*            </div>*/
/*             {{ right }}*/
/*         </div>*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* {% macro form_navbar(tabs, translationSuffix = '.title') %}*/
/*     <div id="form-navbar" class="navbar navbar-static scrollspy-nav">*/
/*         <div class="navbar-inner">*/
/*             <div class="row-fluid">*/
/*                 {% if tabs is not empty %}*/
/*                     <ul class="nav">*/
/*                         {% if tabs is iterable %}*/
/*                             {% for tab in tabs %}*/
/*                                 <li{% if loop.first %} class="active"{% endif %}><a href="#{{ tab|replace({' ': '-', '.': '-'})|lower }}" data-toggle="tab">{{ (tab ~ translationSuffix)|trans }}</a></li>*/
/*                             {% endfor %}*/
/*                         {% else %}*/
/*                             <li class="active"><a href="#{{ tabs|replace({' ': '-', '.': '-'})|lower }}" data-toggle="tab">{{ (tabs ~ translationSuffix)|trans }}</a></li>*/
/*                         {% endif %}*/
/*                     </ul>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* {% macro form_errors(form) %}*/
/*     {% if form.vars.errors|length %}*/
/*         <div class="alert alert-error fade in top-messages">*/
/*             <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*             <div class="message">*/
/*                 {{ form_errors(form) }}*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endmacro %}*/
/* */
/* {% macro accordion(items = {}, counter = 1, no_buffer = false) %}*/
/*     <div class="accordion">*/
/*         {% for title, content in items %}*/
/*             <div class="accordion-group">*/
/*                 <div class="accordion-heading">*/
/*                     <a class="accordion-toggle" data-toggle="collapse" href="#collapse-{{ counter }}-{{ loop.index }}">*/
/*                         <i class="icon-chevron-down"></i>*/
/*                         {{ title|trans }}*/
/*                     </a>*/
/*                 </div>*/
/*                 <div id="collapse-{{ counter }}-{{ loop.index }}" class="accordion-body in">*/
/*                     <div class="accordion-inner{{ no_buffer ? '-unbuffered' : '' }}">*/
/*                         {{ content|raw }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* {% macro updated(formId) %}*/
/* {% spaceless %}*/
/*     <div id="entity-updated" class="pull-right">*/
/*         <span class="label label-warning">*/
/*             <i class="icon icon-circle"></i>*/
/*             {{ 'info.updated'|trans }}*/
/*         </span>*/
/*     </div>*/
/*     <script type="text/javascript">*/
/*         require(*/
/*             ['jquery', 'pim/formupdatelistener'],*/
/*             function ($, FormUpdateListener) {*/
/*                 'use strict';*/
/*                 $(function () {*/
/*                     new FormUpdateListener($('#{{ formId }}'));*/
/*                 });*/
/*             }*/
/*         );*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endmacro %}*/
/* */
/* {% macro quickCreateOption(id, route) %}*/
/* {% spaceless %}*/
/*     {% set id = 'add-option-link-' ~ id %}*/
/*     <a id="{{ id }}" data-form-url="{{ route }}" class="btn btn-small icons-holder add-attribute-option" href="javascript:void(0);" data-toggle="tooltip" data-original-title="{{ 'Add an option'|trans }}" data-success-message="{{ 'flash.attribute.option created'|trans }}" data-error-message="{{ 'flash.attribute.error creating option'|trans }}">*/
/*         <i class="icon-plus"></i>*/
/*     </a>*/
/* {% endspaceless %}*/
/* {% endmacro %}*/
/* */
/* {% macro channelSwitcher(channels) %}*/
/* {% spaceless %}*/
/*     {% set id = 'channel-switcher' %}*/
/*     <div id="{{ id }}" class="btn-group">*/
/*         <a class="btn dropdown-toggle" href="javascript:void(0);" title="{{ 'Scope'|trans }}" data-toggle="dropdown">*/
/*             <i class="icon-eye-open"></i>*/
/*             <span>{{ 'Scope'|trans }}</span>*/
/*         </a>*/
/*         <ul class="dropdown-menu pull-right">*/
/*             {% for channel in channels %}*/
/*                 <li><a href="javascript:void(0);" data-scope="{{ channel.code }}">{{ channel.label }}</a></li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*         <a class="btn icons-holder" href="javascript:void(0);" title="{{ 'Expand all channels'|trans }}" data-action="expand" data-collapse-title="{{ 'Collapse all channels'|trans }}" data-expand-title="{{ 'Expand all channels'|trans }}">*/
/*             <i class="icon-caret-right"></i>*/
/*         </a>*/
/*     </div>*/
/*     <script type="text/javascript">*/
/*         require(*/
/*             ['jquery', 'oro/mediator'],*/
/*             function ($, mediator) {*/
/*                 'use strict';*/
/*                 $(function () {*/
/*                     var $channelSwitcher = $('#{{ id }}');*/
/*                     $channelSwitcher.find('.dropdown-menu').find('a[data-scope]').on('click', function() {*/
/*                         mediator.trigger('scopablefield:changescope', $(this).attr('data-scope'));*/
/*                     });*/
/*                     $channelSwitcher.find('>a[data-action]').on('click', function() {*/
/*                         var $el = $(this),*/
/*                             action = $el.attr('data-action');*/
/*                         mediator.trigger('scopablefield:' + action);*/
/*                         var newAction = action == 'collapse' ? 'expand' : 'collapse';*/
/*                         $el.attr('title', $el.attr('data-' + newAction + '-title')).attr('data-action', newAction);*/
/*                         $el.find('i').toggleClass('icon-caret-right icon-caret-down');*/
/*                     });*/
/*                 });*/
/*             }*/
/*         );*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endmacro %}*/
/* */
/* {% macro enabledSwitch(form) %}*/
/* {% spaceless %}*/
/*     {% if form.enabled is defined %}*/
/*         {% set switchId = 'switch_status' %}*/
/*         {% set enableLabel = 'info.product.enable'|trans %}*/
/*         {% set disableLabel = 'info.product.disable'|trans %}*/
/*         {% set enabledLabel = 'info.product.enabled'|trans %}*/
/*         {% set disabledLabel = 'info.product.disabled'|trans %}*/
/*         {{ form_widget(form.enabled) }}*/
/*         <div class="btn-group">*/
/*             <button id="{{ switchId }}" type="button" class="btn">{{ form.enabled.vars.value ? disableLabel : enableLabel }}</button>*/
/*         </div>*/
/*         <script type="text/javascript">*/
/*             require(*/
/*                 ['jquery'],*/
/*                 function ($) {*/
/*                     'use strict';*/
/*                     $(function () {*/
/*                         $('#{{ switchId }}').on('click', function () {*/
/*                             var $field = $('#{{ form.enabled.vars.id }}'),*/
/*                                 $status = $('.status-enabled').find('.badge');*/
/*                             if (+$field.val()) {*/
/*                                 $field.val(0).trigger('change');*/
/*                                 $(this).html('{{ enableLabel }}');*/
/*                                 $status.html('<i class="icon-status-disabled icon-circle"></i>{{ disabledLabel }}').removeClass('badge-enabled status-enabled').addClass('badge-disabled status-disabled');*/
/*                             } else {*/
/*                                 $field.val(1).trigger('change');*/
/*                                 $(this).html('{{ disableLabel }}');*/
/*                                 $status.html('<i class="icon-status-enabled icon-circle"></i>{{ enabledLabel }}').removeClass('badge-disabled status-disabled').addClass('badge-enabled status-enabled');*/
/*                             }*/
/*                         });*/
/*                     });*/
/*                 }*/
/*             );*/
/*         </script>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endmacro %}*/
/* */
/* {% macro enabledLabel(form) %}*/
/* {% spaceless %}*/
/*     {% if form.enabled is defined %}*/
/*         <div class="status-enabled pull-left">*/
/*             {% if form.enabled.vars.value %}*/
/*                 <div class="badge badge-enabled status-enabled"><i class="icon-status-enabled icon-circle"></i>{{ 'info.product.enabled'|trans }}</div>*/
/*             {% else %}*/
/*                 <div class="badge badge-disabled status-disabled"><i class="icon-status-disabled icon-circle"></i>{{ 'info.product.disabled'|trans }}</div>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endmacro %}*/
/* */
/* {% macro confirmLinkAttributes(url, redirectUrl, message, successMessage, title) %}{% spaceless %}*/
/*     {% set title = title|default('confirmation.confirm'|trans) %}*/
/*     href="javascript:void(0);" data-dialog="confirm" data-title="{{ title }}" data-message="{{ message }}" data-url="{{ url }}" data-redirect-url="{{ redirectUrl }}" data-method="POST" data-error-message="{% trans %}The action could not be performed{% endtrans %}" data-success-message="{{ successMessage }}"*/
/* {% endspaceless %}{% endmacro %}*/
/* */
/* {% macro confirmLink(url, redirectUrl, successMessage, buttonLabel, buttonIcon, message, buttonClass, title) %}{% spaceless %}*/
/*     {% import _self as this %}*/
/*     {% set buttonLabel = 'btn.' ~ buttonLabel %}*/
/*     <a class="btn {{ buttonClass }} icons-holder-text no-hash" title="{{ buttonLabel|trans|capitalize }}" {{this.confirmLinkAttributes(url, redirectUrl, message, successMessage, title)}} >*/
/*         <i class="icon-{{ buttonIcon }}"></i>*/
/*         {{ buttonLabel|trans|capitalize }}*/
/*     </a>*/
/* {% endspaceless %}{% endmacro %}*/
/* */
