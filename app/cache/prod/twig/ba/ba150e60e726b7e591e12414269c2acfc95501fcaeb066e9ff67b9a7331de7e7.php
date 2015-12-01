<?php

/* OroUIBundle::macros.html.twig */
class __TwigTemplate_5057856ade925968a8ba5bb60f94549a21c02989908ee65253cc4a5d21945e8c extends Twig_Template
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
        // line 27
        echo "
";
        // line 42
        echo "
";
        // line 66
        echo "
";
        // line 109
        echo "
";
        // line 128
        echo "
";
        // line 132
        echo "
";
        // line 138
        echo "
";
        // line 157
        echo "
";
        // line 194
        echo "
";
        // line 264
        echo "
";
    }

    // line 9
    public function getattribute_data($__value__ = null, $__additionalData__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "additionalData" => $__additionalData__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 10
            echo "            <div class=\"clearfix-oro\">
                ";
            // line 11
            if ( !$this->getAttribute((isset($context["value"]) ? $context["value"] : null), "value", array(), "any", true, true)) {
                // line 12
                echo "                    <p class=\"control-label\">";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "</p>
                ";
            } else {
                // line 14
                echo "                    <p class=\"control-label\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "value", array()), "html", null, true);
                echo " <strong>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "hint", array())), "html", null, true);
                echo "</strong></p>
                ";
            }
            // line 16
            echo "            </div>
            ";
            // line 17
            if (twig_length_filter($this->env, (isset($context["additionalData"]) ? $context["additionalData"] : null))) {
                // line 18
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["additionalData"]) ? $context["additionalData"] : null), "data", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                    // line 19
                    echo "                    <div class=\"clearfix-oro\">
                        <p class=\"control-label\">";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], $this->getAttribute((isset($context["additionalData"]) ? $context["additionalData"] : null), "field", array())), "html", null, true);
                    echo "</p>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "            ";
            }
            // line 24
            echo "        ";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 8
    public function getattibuteRow($__title__ = null, $__value__ = null, $__additionalData__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "value" => $__value__,
            "additionalData" => $__additionalData__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 9
            echo "        ";
            // line 25
            echo "        ";
            echo $this->getAttribute($this, "renderAttribute", array(0 => (isset($context["title"]) ? $context["title"] : null), 1 => $this->getAttribute($this, "attribute_data", array(0 => (isset($context["value"]) ? $context["value"] : null), 1 => (isset($context["additionalData"]) ? $context["additionalData"] : null)), "method")), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 34
    public function getrenderAttribute($__title__ = null, $__data__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "data" => $__data__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 35
            echo "    <div class=\"control-group\">
        <label class=\"control-label\">";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["title"]) ? $context["title"] : null)), "html", null, true);
            echo "</label>
        <div class=\"controls\">
            ";
            // line 38
            echo (isset($context["data"]) ? $context["data"] : null);
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

    // line 54
    public function getbutton($__parameters__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 55
            echo "    <div class=\"pull-left btn-group icons-holder\">
        <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "path", array()), "html", null, true);
            echo "\"
           class=\"btn back icons-holder-text ";
            // line 57
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "aClass", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "aClass", array())) : ("")), "html", null, true);
            echo "\"
           title=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "title", array())), "html", null, true);
            echo "\">
            ";
            // line 59
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "iClass", array(), "any", true, true)) {
                // line 60
                echo "                <i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "iClass", array()), "html", null, true);
                echo " hide-text\" >";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "label", array())), "html", null, true);
                echo "</i>
            ";
            }
            // line 62
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "label", array())), "html", null, true);
            echo "
        </a>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 80
    public function getdeleteButton($__parameters__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 81
            echo "    <div class=\"pull-left btn-group icons-holder\">
        <a href=\"javascript: void(0);\" class=\"btn icons-holder-text ";
            // line 82
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "aCss", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "aCss", array())) : ("")), "html", null, true);
            echo "\"
            ";
            // line 83
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "id", array(), "any", true, true)) {
                // line 84
                echo "                id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "id", array()), "html", null, true);
                echo "\"
            ";
            }
            // line 86
            echo "            ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataId", array(), "any", true, true)) {
                // line 87
                echo "                data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataId", array()), "html", null, true);
                echo "\"
            ";
            }
            // line 89
            echo "            data-message=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataMessage", array())), "html", null, true);
            echo "\"
            data-success-message=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "successMessage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "successMessage", array()), "Item deleted")) : ("Item deleted"))), "html", null, true);
            echo "\"
            ";
            // line 91
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataUrl", array(), "any", true, true)) {
                // line 92
                echo "                data-url=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataUrl", array()), "html", null, true);
                echo "\"
            ";
            }
            // line 94
            echo "            ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataRedirect", array(), "any", true, true)) {
                // line 95
                echo "                data-redirect=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataRedirect", array()), "html", null, true);
                echo "\"
            ";
            }
            // line 97
            echo "            ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "data", array(), "any", true, true)) {
                // line 98
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "data", array()));
                foreach ($context['_seq'] as $context["dataItemName"] => $context["dataItemValue"]) {
                    // line 99
                    echo "                data-";
                    echo twig_escape_filter($this->env, $context["dataItemName"], "html", null, true);
                    echo "=\"";
                    echo $context["dataItemValue"];
                    echo "\"
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['dataItemName'], $context['dataItemValue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "            ";
            }
            // line 102
            echo "            ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "title", array(), "any", true, true)) {
                // line 103
                echo "                title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "title", array())), "html", null, true);
                echo "\"
            ";
            }
            // line 105
            echo "           ><i class=\"icon-trash\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "label", array())), "html", null, true);
            // line 106
            echo "</a>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 119
    public function getbuttonType($__parameters__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 120
            echo "    <div class=\"btn-group\">
        <button type=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "type", array()), "html", null, true);
            echo "\" class=\"btn ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "class", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "class", array()), "html", null, true);
            }
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "action", array(), "any", true, true)) {
                echo " action-button";
            }
            echo "\"
                ";
            // line 122
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "action", array(), "any", true, true)) {
                echo "data-action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "action", array()), "html", null, true);
                echo "\"";
            }
            echo ">
            ";
            // line 123
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "iClass", array(), "any", true, true)) {
                echo "<i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "iClass", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 124
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "label", array())), "html", null, true);
            echo "
        </button>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 129
    public function getsaveAndCloseButton($__label__ = "Save and Close")
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 130
            echo "    ";
            echo $this->getAttribute($this, "buttonType", array(0 => array("type" => "submit", "class" => "btn-primary icons-holder-text", "label" => (isset($context["label"]) ? $context["label"] : null), "iClass" => "icon-ok")), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 133
    public function getsaveAndStayButton($__acl__ = "", $__label__ = "Save")
    {
        $context = $this->env->mergeGlobals(array(
            "acl" => $__acl__,
            "label" => $__label__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 134
            echo "    ";
            if ((twig_test_empty((isset($context["acl"]) ? $context["acl"] : null)) || $this->env->getExtension('oro_security_extension')->checkResourceIsGranted((isset($context["acl"]) ? $context["acl"] : null)))) {
                // line 135
                echo "    ";
                echo $this->getAttribute($this, "buttonType", array(0 => array("type" => "button", "class" => "btn-primary icons-holder-text", "label" => (isset($context["label"]) ? $context["label"] : null), "action" => "save_and_stay", "iClass" => "icon-ok")), "method");
                echo "
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 146
    public function getscrollSubblock($__title__ = null, $__data__ = null, $__isForm__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "data" => $__data__,
            "isForm" => $__isForm__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 147
            echo "    <div>
    ";
            // line 148
            if (twig_length_filter($this->env, (isset($context["title"]) ? $context["title"] : null))) {
                echo "<h5 class=\"user-fiedset\"><span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["title"]) ? $context["title"] : null)), "html", null, true);
                echo "</span></h5>";
            }
            // line 149
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["dataBlock"]) {
                // line 150
                echo "        ";
                echo $context["dataBlock"];
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dataBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 152
            echo "    </div>
    ";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 172
    public function getscrollBlock($__blockId__ = null, $__title__ = null, $__subblocks__ = null, $__isForm__ = null, $__contentAttributes__ = null, $__useSubBlockDivider__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "blockId" => $__blockId__,
            "title" => $__title__,
            "subblocks" => $__subblocks__,
            "isForm" => $__isForm__,
            "contentAttributes" => $__contentAttributes__,
            "useSubBlockDivider" => $__useSubBlockDivider__,
            "varargs" => func_num_args() > 6 ? array_slice(func_get_args(), 6) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 173
            echo "    ";
            $context["cols"] = twig_length_filter($this->env, (isset($context["subblocks"]) ? $context["subblocks"] : null));
            // line 174
            echo "    <div class=\"responsive-section\">
        <h4 class=\"scrollspy-title\">";
            // line 175
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["title"]) ? $context["title"] : null)), "html", null, true);
            echo "</h4>
        <div id=\"";
            // line 176
            echo twig_escape_filter($this->env, (isset($context["blockId"]) ? $context["blockId"] : null), "html", null, true);
            echo "\" class=\"scrollspy-nav-target\"></div>
        <div class=\"row-fluid";
            // line 177
            if (((array_key_exists("contentAttributes", $context) && $this->getAttribute((isset($context["contentAttributes"]) ? $context["contentAttributes"] : null), "class", array(), "any", true, true)) && twig_length_filter($this->env, $this->getAttribute((isset($context["contentAttributes"]) ? $context["contentAttributes"] : null), "class", array())))) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contentAttributes"]) ? $context["contentAttributes"] : null), "class", array()), "html", null, true);
            }
            if ((((isset($context["cols"]) ? $context["cols"] : null) > 1) && ( !array_key_exists("useSubBlockDivider", $context) || ((isset($context["useSubBlockDivider"]) ? $context["useSubBlockDivider"] : null) == true)))) {
                echo " row-fluid-divider";
            }
            echo "\" ";
            echo $this->getAttribute($this, "attributes", array(0 => (isset($context["contentAttributes"]) ? $context["contentAttributes"] : null), 1 => array(0 => "class")), "method");
            echo ">
            ";
            // line 178
            if ((array_key_exists("isForm", $context) && ((isset($context["isForm"]) ? $context["isForm"] : null) == true))) {
                // line 179
                echo "                <fieldset class=\"form-horizontal\">
            ";
            } else {
                // line 181
                echo "                <div class=\"form-horizontal\">
            ";
            }
            // line 183
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subblocks"]) ? $context["subblocks"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["subblock"]) {
                // line 184
                echo "                    ";
                echo $this->getAttribute($this, "scrollSubblock", array(0 => ((twig_length_filter($this->env, $this->getAttribute($context["subblock"], "title", array()))) ? ($this->getAttribute($context["subblock"], "title", array())) : (null)), 1 => $this->getAttribute($context["subblock"], "data", array()), 2 => (isset($context["isForm"]) ? $context["isForm"] : null), 3 => true), "method");
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subblock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 186
            echo "            ";
            if ((array_key_exists("isForm", $context) && ((isset($context["isForm"]) ? $context["isForm"] : null) == true))) {
                // line 187
                echo "                </fieldset>
            ";
            } else {
                // line 189
                echo "                </div>
            ";
            }
            // line 191
            echo "        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 218
    public function getscrollData($__dataTarget__ = null, $__data__ = null, $__form__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "dataTarget" => $__dataTarget__,
            "data" => $__data__,
            "form" => $__form__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 219
            echo "    ";
            if ((array_key_exists("form", $context) && (isset($context["form"]) ? $context["form"] : null))) {
                // line 220
                echo "        ";
                $context["isForm"] = true;
                // line 221
                echo "    ";
            } else {
                // line 222
                echo "        ";
                $context["isForm"] = false;
                // line 223
                echo "    ";
            }
            // line 224
            echo "
    ";
            // line 225
            $context["dataBlocks"] = $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "dataBlocks", array());
            // line 226
            echo "
    <div id=\"";
            // line 227
            echo twig_escape_filter($this->env, (isset($context["dataTarget"]) ? $context["dataTarget"] : null), "html", null, true);
            echo "\" class=\"navbar navbar-static scrollspy-nav\">
        <div class=\"navbar-inner\">
            <div class=\"row-fluid\" style=\"width: auto;\">
                <ul class=\"nav\">
                    ";
            // line 231
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dataBlocks"]) ? $context["dataBlocks"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["navElement"]) {
                // line 232
                echo "                        <li ";
                if ($this->getAttribute($context["navElement"], "class", array(), "any", true, true)) {
                    echo "class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["navElement"], "class", array()), "html", null, true);
                    echo "\"";
                }
                echo "><a href=\"#scroll-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["navElement"], "title", array())), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navElement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 234
            echo "                </ul>
            </div>
        </div>
    </div>
    <div class=\"clearfix\">
        ";
            // line 239
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "formErrors", array(), "any", true, true) && twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "formErrors", array())))) {
                // line 240
                echo "            <div class=\"customer-info-actions container-fluid alert-wrap\">
                <div class=\"alert alert-error\">
                    <button class=\"close\" type=\"button\" data-dismiss=\"alert\" data-target=\".alert-wrap\">×</button>
                    ";
                // line 243
                echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "formErrors", array());
                echo "
                </div>
            </div>
        ";
            }
            // line 247
            echo "        <div data-spy=\"scroll\" data-target=\"#";
            echo twig_escape_filter($this->env, (isset($context["dataTarget"]) ? $context["dataTarget"] : null), "html", null, true);
            echo "\" data-offset=\"1\" class=\"scrollspy container-fluid scrollable-container";
            if ((isset($context["isForm"]) ? $context["isForm"] : null)) {
                echo " form-container";
            }
            echo "\">
            ";
            // line 248
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dataBlocks"]) ? $context["dataBlocks"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["scrollBlock"]) {
                // line 249
                echo "                ";
                echo $this->getAttribute($this, "scrollBlock", array(0 => ("scroll-" . $this->getAttribute($context["loop"], "index", array())), 1 => $this->getAttribute($context["scrollBlock"], "title", array()), 2 => $this->getAttribute($context["scrollBlock"], "subblocks", array()), 3 => (isset($context["isForm"]) ? $context["isForm"] : null), 4 => (($this->getAttribute($context["scrollBlock"], "content_attr", array(), "any", true, true)) ? ($this->getAttribute($context["scrollBlock"], "content_attr", array())) : (null)), 5 => (($this->getAttribute($context["scrollBlock"], "useSubBlockDivider", array(), "any", true, true)) ? ($this->getAttribute($context["scrollBlock"], "useSubBlockDivider", array())) : (true))), "method");
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scrollBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 251
            echo "            ";
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "hiddenData", array(), "any", true, true) || (isset($context["isForm"]) ? $context["isForm"] : null))) {
                // line 252
                echo "                <div class=\"hide\">
                    ";
                // line 253
                if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "hiddenData", array(), "any", true, true)) {
                    // line 254
                    echo "                        ";
                    echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "hiddenData", array());
                    echo "
                    ";
                }
                // line 256
                echo "                    ";
                if ((isset($context["isForm"]) ? $context["isForm"] : null)) {
                    // line 257
                    echo "                        ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
                    echo "
                    ";
                }
                // line 259
                echo "                </div>
            ";
            }
            // line 261
            echo "        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 271
    public function getattributes($__attr__ = null, $__excludes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attr" => $__attr__,
            "excludes" => $__excludes__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 272
            echo "    ";
            ob_start();
            // line 273
            echo "        ";
            $context["attr"] = ((array_key_exists("attr", $context)) ? (_twig_default_filter((isset($context["attr"]) ? $context["attr"] : null), array())) : (array()));
            // line 274
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                if (( !array_key_exists("excludes", $context) ||  !$this->getAttribute((isset($context["excludes"]) ? $context["excludes"] : null), $context["attrname"], array(), "array", true, true))) {
                    if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                        echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                        echo "\" ";
                    } else {
                        echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                        echo "\" ";
                    }
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 275
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroUIBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  831 => 275,  809 => 274,  806 => 273,  803 => 272,  790 => 271,  777 => 261,  773 => 259,  767 => 257,  764 => 256,  758 => 254,  756 => 253,  753 => 252,  750 => 251,  733 => 249,  716 => 248,  707 => 247,  700 => 243,  695 => 240,  693 => 239,  686 => 234,  661 => 232,  644 => 231,  637 => 227,  634 => 226,  632 => 225,  629 => 224,  626 => 223,  623 => 222,  620 => 221,  617 => 220,  614 => 219,  600 => 218,  587 => 191,  583 => 189,  579 => 187,  576 => 186,  567 => 184,  562 => 183,  558 => 181,  554 => 179,  552 => 178,  540 => 177,  536 => 176,  532 => 175,  529 => 174,  526 => 173,  509 => 172,  497 => 152,  488 => 150,  483 => 149,  477 => 148,  474 => 147,  460 => 146,  445 => 135,  442 => 134,  429 => 133,  415 => 130,  403 => 129,  387 => 124,  381 => 123,  373 => 122,  362 => 121,  359 => 120,  347 => 119,  334 => 106,  331 => 105,  325 => 103,  322 => 102,  319 => 101,  308 => 99,  303 => 98,  300 => 97,  294 => 95,  291 => 94,  285 => 92,  283 => 91,  279 => 90,  274 => 89,  268 => 87,  265 => 86,  259 => 84,  257 => 83,  253 => 82,  250 => 81,  238 => 80,  222 => 62,  214 => 60,  212 => 59,  208 => 58,  204 => 57,  200 => 56,  197 => 55,  185 => 54,  170 => 38,  165 => 36,  162 => 35,  149 => 34,  135 => 25,  133 => 9,  119 => 8,  108 => 24,  105 => 23,  96 => 20,  93 => 19,  88 => 18,  86 => 17,  83 => 16,  75 => 14,  69 => 12,  67 => 11,  64 => 10,  51 => 9,  46 => 264,  43 => 194,  40 => 157,  37 => 138,  34 => 132,  31 => 128,  28 => 109,  25 => 66,  22 => 42,  19 => 27,);
    }
}
/* {#*/
/*     Render attribute row*/
/*     Parameters:*/
/*         title - attribute title*/
/*         value - attribute value*/
/*         additionalData - array with additional data*/
/* #}*/
/* {% macro attibuteRow(title, value, additionalData) %}*/
/*         {% macro attribute_data(value, additionalData) %}*/
/*             <div class="clearfix-oro">*/
/*                 {% if value.value is not defined  %}*/
/*                     <p class="control-label">{{ value }}</p>*/
/*                 {% else %}*/
/*                     <p class="control-label">{{ value.value }} <strong>{{ value.hint|trans }}</strong></p>*/
/*                 {% endif %}*/
/*             </div>*/
/*             {% if additionalData|length %}*/
/*                 {% for data in additionalData.data %}*/
/*                     <div class="clearfix-oro">*/
/*                         <p class="control-label">{{ attribute(data, additionalData.field) }}</p>*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/*         {% endmacro %}*/
/*         {{ _self.renderAttribute(title, _self.attribute_data(value, additionalData)) }}*/
/* {% endmacro %}*/
/* */
/* {#*/
/*     Render attribute row with custom data block*/
/*     Parameters:*/
/*         title - row title*/
/*         data - row data*/
/* #}*/
/* {% macro renderAttribute(title, data) %}*/
/*     <div class="control-group">*/
/*         <label class="control-label">{{ title|trans }}</label>*/
/*         <div class="controls">*/
/*             {{ data|raw }}*/
/*         </div>*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* {#*/
/*     Create the button*/
/*     Parameters - array:*/
/*         [*/
/*             'path' - button url*/
/*             'aClass' - additional button class*/
/*             'title' - button title*/
/*             'iClass' - css class for 'i' tag (icon)*/
/*             'label' - button label*/
/*         ]*/
/* #}*/
/* {% macro button(parameters) %}*/
/*     <div class="pull-left btn-group icons-holder">*/
/*         <a href="{{ parameters.path }}"*/
/*            class="btn back icons-holder-text {{ parameters.aClass is defined? parameters.aClass : '' }}"*/
/*            title="{{ parameters.title|trans }}">*/
/*             {% if parameters.iClass is defined %}*/
/*                 <i class="{{ parameters.iClass }} hide-text" >{{ parameters.label|trans }}</i>*/
/*             {% endif %}*/
/*             {{ parameters.label|trans }}*/
/*         </a>*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* {#*/
/*     Delete button with javascript handler*/
/*     Parameters - array:*/
/*         [*/
/*             'aCss' - additional css class for 'a' tag*/
/*             'dataId' - data-id parameter*/
/*             'dataMessage' - message before delete record*/
/*             'dataRedirect' - url to redirect after delete*/
/*             'dataUrl' - data-url parameter*/
/*             'title' - button title*/
/*             'label' - button label*/
/*         ]*/
/* #}*/
/* {% macro deleteButton(parameters) %}*/
/*     <div class="pull-left btn-group icons-holder">*/
/*         <a href="javascript: void(0);" class="btn icons-holder-text {{ parameters.aCss is defined? parameters.aCss : '' }}"*/
/*             {% if (parameters.id is defined) %}*/
/*                 id="{{ parameters.id }}"*/
/*             {% endif %}*/
/*             {% if (parameters.dataId is defined) %}*/
/*                 data-id="{{ parameters.dataId }}"*/
/*             {% endif %}*/
/*             data-message="{{ parameters.dataMessage|trans }}"*/
/*             data-success-message="{{ parameters.successMessage|default('Item deleted')|trans }}"*/
/*             {% if (parameters.dataUrl is defined) %}*/
/*                 data-url="{{ parameters.dataUrl }}"*/
/*             {% endif %}*/
/*             {% if parameters.dataRedirect is defined %}*/
/*                 data-redirect="{{ parameters.dataRedirect  }}"*/
/*             {% endif %}*/
/*             {% if parameters.data is defined %}*/
/*                 {% for dataItemName,dataItemValue in parameters.data %}*/
/*                 data-{{ dataItemName }}="{{ dataItemValue|raw }}"*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/*             {% if (parameters.title is defined) %}*/
/*                 title="{{ parameters.title|trans }}"*/
/*             {% endif %}*/
/*            ><i class="icon-trash"></i>{{ parameters.label|trans -}}*/
/*         </a>*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* {#*/
/*     Button macros with custom button type*/
/*     Parameters - array:*/
/*         [*/
/*             'type' - button type*/
/*             'class' - additional button css classes*/
/*             'label' - label of button*/
/*         ]*/
/* #}*/
/* {% macro buttonType(parameters) %}*/
/*     <div class="btn-group">*/
/*         <button type="{{ parameters.type }}" class="btn {% if (parameters.class is defined) %}{{ parameters.class }}{% endif %}{% if (parameters.action is defined) %} action-button{% endif %}"*/
/*                 {% if (parameters.action is defined) %}data-action="{{ parameters.action }}"{% endif %}>*/
/*             {% if (parameters.iClass is defined) %}<i class="{{ parameters.iClass }}"></i>{% endif %}*/
/*             {{ parameters.label|trans }}*/
/*         </button>*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* {% macro saveAndCloseButton(label = 'Save and Close') %}*/
/*     {{ _self.buttonType({'type': 'submit', 'class': 'btn-primary icons-holder-text', 'label': label, 'iClass': 'icon-ok'}) }}*/
/* {% endmacro %}*/
/* */
/* {% macro saveAndStayButton(acl = '', label = 'Save') %}*/
/*     {% if acl is empty or resource_granted(acl) %}*/
/*     {{ _self.buttonType({'type': 'button', 'class': 'btn-primary icons-holder-text', 'label': label, 'action': 'save_and_stay', 'iClass': 'icon-ok'}) }}*/
/*     {% endif %}*/
/* {% endmacro %}*/
/* */
/* {#*/
/*     Create scroll sub block for scroll block*/
/*     Parameters:*/
/*         title - title of sub block*/
/*         data - array with data fields (i.e. form_row() or attibuteRow() data)*/
/*         isForm - flag what scroll block mut contain the form*/
/* #}*/
/* {% macro scrollSubblock(title, data, isForm) %}*/
/*     <div>*/
/*     {% if title|length %}<h5 class="user-fiedset"><span>{{ title|trans }}</span></h5>{% endif %}*/
/*     {% for dataBlock in data %}*/
/*         {{ dataBlock|raw }}*/
/*     {% endfor %}*/
/*     </div>*/
/*     {#% if span %}*/
/*         </div>*/
/*     {% endif %#}*/
/* {% endmacro %}*/
/* */
/* {#*/
/*     Create scroll block for scroll data area*/
/*     Parameters:*/
/*         blockId - id of block*/
/*         title - block title*/
/*         'subblocks' - array with scroll sub blocks:*/
/*             [*/
/*                 'title' - title of sub block*/
/*                 'data' - array with data fields (i.e. form_row() or attibuteRow() data)*/
/*             ]*/
/*         isForm - flag what scroll block mut contain the form*/
/*         contentAttributes - additional attributes for block content*/
/*         useSubBlockDivider - indicates if 'row-fluid-divider' css class should be added to a row when there are more than one subblocks*/
/* #}*/
/* {% macro scrollBlock(blockId, title, subblocks, isForm, contentAttributes, useSubBlockDivider) %}*/
/*     {% set cols = subblocks|length %}*/
/*     <div class="responsive-section">*/
/*         <h4 class="scrollspy-title">{{ title|trans }}</h4>*/
/*         <div id="{{ blockId }}" class="scrollspy-nav-target"></div>*/
/*         <div class="row-fluid{% if (contentAttributes is defined and contentAttributes.class is defined and contentAttributes.class|length) %} {{ contentAttributes.class }}{% endif %}{% if cols > 1 and (useSubBlockDivider is not defined or useSubBlockDivider == true) %} row-fluid-divider{% endif %}" {{ _self.attributes(contentAttributes, ['class']) }}>*/
/*             {% if isForm is defined and isForm == true %}*/
/*                 <fieldset class="form-horizontal">*/
/*             {% else %}*/
/*                 <div class="form-horizontal">*/
/*             {% endif %}*/
/*                 {% for subblock in subblocks %}*/
/*                     {{ _self.scrollSubblock(subblock.title|length ? subblock.title : null, subblock.data, isForm, true) }}*/
/*                 {% endfor %}*/
/*             {% if isForm is defined and isForm == true %}*/
/*                 </fieldset>*/
/*             {% else %}*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* {#*/
/*     Create scroll blocks (like in view or update pages)*/
/*     Parameters:*/
/*         dataTarget - id of scroll block*/
/*         data - array with scroll data blocks*/
/*         form*/
/*     data parameter structure:*/
/*         [*/
/*             'dataBlocks' - array of blocks. each block consist of:*/
/*                 [*/
/*                     'title' - title of scroll block*/
/*                     'class' - additional css class for scroll block menu item*/
/*                     'useSubBlockDivider' - [optional] indicates if 'row-fluid-divider' css class should be added to a row when there are more than one subblocks*/
/*                     'subblocks' - array with scroll sub blocks:*/
/*                         [*/
/*                             'title' - title of sub block*/
/*                             'data' - array with data fields (i.e. form_row() or attibuteRow() data)*/
/*                         ]*/
/*                 ]*/
/*             'formErrors' - errors from the form*/
/*             'hiddenData' - additional data (hidden fields from the form)*/
/*         ]*/
/* #}*/
/* {% macro scrollData(dataTarget, data, form = null) %}*/
/*     {% if form is defined and form %}*/
/*         {% set isForm = true %}*/
/*     {% else %}*/
/*         {% set isForm = false %}*/
/*     {% endif %}*/
/* */
/*     {% set dataBlocks = data.dataBlocks %}*/
/* */
/*     <div id="{{ dataTarget }}" class="navbar navbar-static scrollspy-nav">*/
/*         <div class="navbar-inner">*/
/*             <div class="row-fluid" style="width: auto;">*/
/*                 <ul class="nav">*/
/*                     {% for navElement in dataBlocks %}*/
/*                         <li {% if navElement.class is defined %}class="{{ navElement.class }}"{% endif %}><a href="#scroll-{{ loop.index }}">{{ navElement.title|trans }}</a></li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="clearfix">*/
/*         {% if data.formErrors is defined and data.formErrors | length%}*/
/*             <div class="customer-info-actions container-fluid alert-wrap">*/
/*                 <div class="alert alert-error">*/
/*                     <button class="close" type="button" data-dismiss="alert" data-target=".alert-wrap">×</button>*/
/*                     {{ data.formErrors|raw }}*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*         <div data-spy="scroll" data-target="#{{ dataTarget }}" data-offset="1" class="scrollspy container-fluid scrollable-container{% if isForm %} form-container{% endif %}">*/
/*             {% for scrollBlock in dataBlocks %}*/
/*                 {{ _self.scrollBlock("scroll-" ~ loop.index, scrollBlock.title, scrollBlock.subblocks, isForm, scrollBlock.content_attr is defined ? scrollBlock.content_attr : null, scrollBlock.useSubBlockDivider is defined ? scrollBlock.useSubBlockDivider : true) }}*/
/*             {% endfor %}*/
/*             {% if data.hiddenData is defined or isForm %}*/
/*                 <div class="hide">*/
/*                     {% if data.hiddenData is defined %}*/
/*                         {{ data.hiddenData|raw }}*/
/*                     {% endif %}*/
/*                     {% if isForm %}*/
/*                         {{ form_rest(form) }}*/
/*                     {% endif %}*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* {#*/
/*     Render attributes of HTML element.*/
/*     Parameters:*/
/*         attr - attributes*/
/*         excludes - names of attributes which should not be rendered even if they exist in attr parameter*/
/* #}*/
/* {% macro attributes(attr, excludes) %}*/
/*     {% spaceless %}*/
/*         {% set attr = attr|default({}) %}*/
/*         {% for attrname, attrvalue in attr %}{% if not excludes is defined or not excludes[attrname] is defined %}{% if attrname in ['placeholder', 'title'] %}{{ attrname }}="{{ attrvalue|trans({}, translation_domain) }}" {% else %}{{ attrname }}="{{ attrvalue }}" {% endif %}{% endif %}{% endfor %}*/
/*     {% endspaceless %}*/
/* {% endmacro %}*/
/* */
