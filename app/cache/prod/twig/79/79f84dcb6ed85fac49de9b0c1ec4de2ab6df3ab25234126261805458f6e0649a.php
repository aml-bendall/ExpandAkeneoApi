<?php

/* OroNavigationBundle:Menu:menu.html.twig */
class __TwigTemplate_f611b0fff391701473a1ae3fa1eae05ca4a66c1b928ac99e783516486172c243 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu_base.html.twig", "OroNavigationBundle:Menu:menu.html.twig", 1);
        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'item_renderer' => array($this, 'block_item_renderer'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNavigationBundle:Menu:menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_compressed_root($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        ob_start();
        // line 18
        echo "        ";
        $this->displayBlock("root", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 22
    public function block_root($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $context["listAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttributes", array());
        // line 24
        echo "
    ";
        // line 25
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "rootClass", array(), "any", true, true)) {
            // line 26
            echo "        ";
            $context["oro_menu"] = $this;
            // line 27
            echo "        ";
            $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) ? $context["listAttributes"] : null), array("class" => $context["oro_menu"]->getadd_attribute_values((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class", array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "rootClass", array())))));
            // line 28
            echo "    ";
        }
        // line 29
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
    }

    // line 32
    public function block_list($context, array $blocks = array())
    {
        // line 33
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren", array()))) {
            // line 34
            echo "        ";
            $context["oro_menu"] = $this;
            // line 35
            echo "        <ul";
            echo $context["oro_menu"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : null));
            echo ">
            ";
            // line 36
            $this->displayBlock("children", $context, $blocks);
            echo "
        </ul>
    ";
        }
    }

    // line 41
    public function block_children($context, array $blocks = array())
    {
        // line 42
        echo "    ";
        // line 43
        echo "    ";
        $context["currentOptions"] = (isset($context["options"]) ? $context["options"] : null);
        // line 44
        echo "    ";
        $context["currentItem"] = (isset($context["item"]) ? $context["item"] : null);
        // line 45
        echo "    ";
        // line 46
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth", array()))) {
            // line 47
            echo "        ";
            $context["options"] = twig_array_merge((isset($context["currentOptions"]) ? $context["currentOptions"] : null), array("depth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : null), "depth", array()) - 1)));
            // line 48
            echo "    ";
        }
        // line 49
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["currentItem"]) ? $context["currentItem"] : null), "children", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 50
            $context["itemAttributes"] = $this->getAttribute($context["item"], "attributes", array());
            // line 51
            $context["childrenAttributes"] = $this->getAttribute($context["item"], "childrenAttributes", array());
            // line 52
            $context["classes"] = (($this->getAttribute((isset($context["itemAttributes"]) ? $context["itemAttributes"] : null), "class", array(), "any", true, true)) ? (twig_split_filter($this->env, $this->getAttribute((isset($context["itemAttributes"]) ? $context["itemAttributes"] : null), "class", array()), " ")) : (array()));
            // line 53
            $context["childrenClasses"] = (($this->getAttribute((isset($context["childrenAttributes"]) ? $context["childrenAttributes"] : null), "class", array(), "any", true, true)) ? (twig_split_filter($this->env, $this->getAttribute((isset($context["childrenAttributes"]) ? $context["childrenAttributes"] : null), "class", array()), " ")) : (array()));
            // line 54
            echo "        ";
            $this->displayBlock("item", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    ";
        // line 57
        echo "    ";
        $context["item"] = (isset($context["currentItem"]) ? $context["currentItem"] : null);
        // line 58
        echo "    ";
        $context["options"] = (isset($context["currentOptions"]) ? $context["currentOptions"] : null);
    }

    // line 61
    public function block_item($context, array $blocks = array())
    {
        // line 62
        echo "    ";
        $this->displayBlock("item_renderer", $context, $blocks);
        echo "
";
    }

    // line 65
    public function block_item_renderer($context, array $blocks = array())
    {
        // line 66
        echo "    ";
        $context["showNonAuthorized"] = ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "showNonAuthorized", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array()), "showNonAuthorized", array()));
        // line 67
        echo "    ";
        $context["displayable"] = ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array()), "isAllowed", array()) || (isset($context["showNonAuthorized"]) ? $context["showNonAuthorized"] : null));
        // line 68
        echo "    ";
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayed", array()) && (isset($context["displayable"]) ? $context["displayable"] : null))) {
            // line 69
            echo "        ";
            // line 70
            if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : null), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : null)), "method")) {
                // line 71
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 72
(isset($context["matcher"]) ? $context["matcher"] : null), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : null), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth", array())), "method")) {
                // line 73
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "ancestorClass", array())));
            }
            // line 75
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "actsLikeFirst", array())) {
                // line 76
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "firstClass", array())));
            }
            // line 78
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "actsLikeLast", array())) {
                // line 79
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "lastClass", array())));
            }
            // line 81
            if ( !twig_test_empty((isset($context["classes"]) ? $context["classes"] : null))) {
                // line 82
                $context["itemAttributes"] = twig_array_merge((isset($context["itemAttributes"]) ? $context["itemAttributes"] : null), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : null), " ")));
            }
            // line 84
            echo "        ";
            // line 85
            echo "        ";
            $context["oro_menu"] = $this;
            // line 86
            echo "        <li";
            echo $context["oro_menu"]->getattributes((isset($context["itemAttributes"]) ? $context["itemAttributes"] : null));
            echo ">";
            // line 87
            $context["linkAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "linkAttributes", array());
            // line 88
            $context["labelAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "labelAttributes", array());
            // line 89
            if (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri", array())) && ( !$this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : null), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : null)), "method") || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentAsLink", array())))) {
                // line 90
                echo "                ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 92
                echo "                ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 94
            echo "            ";
            // line 95
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), array(0 => ("menu-level-" . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "level", array()))));
            // line 96
            $context["listAttributes"] = twig_array_merge((isset($context["childrenAttributes"]) ? $context["childrenAttributes"] : null), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), " ")));
            // line 97
            echo "            ";
            $this->displayBlock("list", $context, $blocks);
            echo "
        </li>
    ";
        }
    }

    // line 102
    public function block_linkElement($context, array $blocks = array())
    {
        // line 103
        echo "    ";
        $context["oro_menu"] = $this;
        // line 104
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["oro_menu"]->getattributes((isset($context["linkAttributes"]) ? $context["linkAttributes"] : null));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>
";
    }

    // line 107
    public function block_spanElement($context, array $blocks = array())
    {
        // line 108
        echo "    ";
        $context["oro_menu"] = $this;
        // line 109
        echo "    <span";
        echo $context["oro_menu"]->getattributes((isset($context["labelAttributes"]) ? $context["labelAttributes"] : null));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>
";
    }

    // line 112
    public function block_label($context, array $blocks = array())
    {
        // line 113
        echo "    ";
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getExtra", array(0 => "icon"), "method")) {
            // line 114
            echo "        <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getExtra", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
    ";
        }
        // line 116
        echo "    ";
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            // line 117
            echo "        ";
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array());
            echo "
    ";
        } else {
            // line 119
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array()), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getExtra", array(0 => "translateParams", 1 => array()), "method"), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getExtra", array(0 => "translateDomain", 1 => "messages"), "method")), "html", null, true);
            echo "
    ";
        }
    }

    // line 2
    public function getattributes($__attributes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 4
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 5
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 10
    public function getadd_attribute_values($__attributes__ = null, $__attribute__ = null, $__values__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "attribute" => $__attribute__,
            "values" => $__values__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 11
            $context["_values"] = (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), (isset($context["attribute"]) ? $context["attribute"] : null), array(), "array", true, true)) ? (twig_split_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), (isset($context["attribute"]) ? $context["attribute"] : null), array(), "array"), " ")) : (array()));
            // line 12
            $context["_values"] = twig_array_merge((isset($context["_values"]) ? $context["_values"] : null), (isset($context["values"]) ? $context["values"] : null));
            // line 13
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["_values"]) ? $context["_values"] : null), " "), "html", null, true);
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 13,  370 => 12,  368 => 11,  354 => 10,  338 => 5,  336 => 4,  331 => 3,  319 => 2,  311 => 119,  305 => 117,  302 => 116,  296 => 114,  293 => 113,  290 => 112,  281 => 109,  278 => 108,  275 => 107,  264 => 104,  261 => 103,  258 => 102,  249 => 97,  247 => 96,  245 => 95,  243 => 94,  239 => 92,  235 => 90,  233 => 89,  231 => 88,  229 => 87,  225 => 86,  222 => 85,  220 => 84,  217 => 82,  215 => 81,  212 => 79,  210 => 78,  207 => 76,  205 => 75,  202 => 73,  200 => 72,  198 => 71,  196 => 70,  194 => 69,  191 => 68,  188 => 67,  185 => 66,  182 => 65,  175 => 62,  172 => 61,  167 => 58,  164 => 57,  162 => 56,  145 => 54,  143 => 53,  141 => 52,  139 => 51,  137 => 50,  119 => 49,  116 => 48,  113 => 47,  110 => 46,  108 => 45,  105 => 44,  102 => 43,  100 => 42,  97 => 41,  89 => 36,  84 => 35,  81 => 34,  78 => 33,  75 => 32,  70 => 29,  67 => 28,  64 => 27,  61 => 26,  59 => 25,  56 => 24,  53 => 23,  50 => 22,  42 => 18,  39 => 17,  36 => 16,  11 => 1,);
    }
}
/* {% extends 'OroNavigationBundle:Menu:menu_base.html.twig' %}*/
/* {% macro attributes(attributes) %}*/
/*     {% for name, value in attributes %}*/
/*         {%- if value is not none and value is not sameas(false) -%}*/
/*             {{- ' %s="%s"'|format(name, value is sameas(true) ? name|e : value|e)|raw -}}*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {% endmacro %}*/
/* */
/* {% macro add_attribute_values(attributes, attribute, values) %}*/
/*     {%- set _values = attributes[attribute] is defined ? attributes[attribute]|split(' ') : [] %}*/
/*     {%- set _values = _values|merge(values) %}*/
/*     {{- _values|join(' ') -}}*/
/* {% endmacro %}*/
/* */
/* {% block compressed_root %}*/
/*     {% spaceless %}*/
/*         {{ block('root') }}*/
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block root %}*/
/*     {% set listAttributes = item.childrenAttributes %}*/
/* */
/*     {% if options.rootClass is defined %}*/
/*         {% import _self as oro_menu %}*/
/*         {% set listAttributes = listAttributes|merge({'class': oro_menu.add_attribute_values(listAttributes, 'class', [options.rootClass])}) %}*/
/*     {% endif %}*/
/*     {{ block('list') -}}*/
/* {% endblock %}*/
/* */
/* {% block list %}*/
/*     {% if item.hasChildren and options.depth is not sameas(0) and item.displayChildren %}*/
/*         {% import _self as oro_menu %}*/
/*         <ul{{ oro_menu.attributes(listAttributes) }}>*/
/*             {{ block('children') }}*/
/*         </ul>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block children %}*/
/*     {# save current variables #}*/
/*     {% set currentOptions = options %}*/
/*     {% set currentItem = item %}*/
/*     {# update the depth for children #}*/
/*     {% if options.depth is not none %}*/
/*         {% set options = currentOptions|merge({'depth': currentOptions.depth - 1}) %}*/
/*     {% endif %}*/
/*     {% for item in currentItem.children %}*/
/*         {%- set itemAttributes = item.attributes %}*/
/*         {%- set childrenAttributes = item.childrenAttributes %}*/
/*         {%- set classes = itemAttributes.class is defined ? itemAttributes.class|split(' ') : [] %}*/
/*         {%- set childrenClasses = childrenAttributes.class is defined ? childrenAttributes.class|split(' ') : [] %}*/
/*         {{ block('item') }}*/
/*     {% endfor %}*/
/*     {# restore current variables #}*/
/*     {% set item = currentItem %}*/
/*     {% set options = currentOptions %}*/
/* {% endblock %}*/
/* */
/* {% block item %}*/
/*     {{ block('item_renderer') }}*/
/* {% endblock %}*/
/* */
/* {% block item_renderer %}*/
/*     {% set showNonAuthorized = item.extras.showNonAuthorized is defined and item.extras.showNonAuthorized %}*/
/*     {% set displayable = item.extras.isAllowed or showNonAuthorized %}*/
/*     {% if item.displayed and displayable %}*/
/*         {# building the class of the item #}*/
/*         {%- if matcher.isCurrent(item) %}*/
/*             {%- set classes = classes|merge([options.currentClass]) %}*/
/*         {%- elseif matcher.isAncestor(item, options.depth) %}*/
/*             {%- set classes = classes|merge([options.ancestorClass]) %}*/
/*         {%- endif %}*/
/*         {%- if item.actsLikeFirst %}*/
/*             {%- set classes = classes|merge([options.firstClass]) %}*/
/*         {%- endif %}*/
/*         {%- if item.actsLikeLast %}*/
/*             {%- set classes = classes|merge([options.lastClass]) %}*/
/*         {%- endif %}*/
/*         {%- if classes is not empty %}*/
/*             {%- set itemAttributes = itemAttributes|merge({'class': classes|join(' ')}) %}*/
/*         {%- endif %}*/
/*         {# displaying the item #}*/
/*         {% import _self as oro_menu %}*/
/*         <li{{ oro_menu.attributes(itemAttributes) }}>*/
/*             {%- set linkAttributes = item.linkAttributes %}*/
/*             {%- set labelAttributes = item.labelAttributes %}*/
/*             {%- if item.uri is not empty and (not matcher.isCurrent(item) or options.currentAsLink) %}*/
/*                 {{ block('linkElement') }}*/
/*             {%- else %}*/
/*                 {{ block('spanElement') }}*/
/*             {%- endif %}*/
/*             {# render the list of children#}*/
/*             {%- set childrenClasses = childrenClasses|merge(['menu-level-' ~ item.level]) %}*/
/*             {%- set listAttributes = childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}*/
/*             {{ block('list') }}*/
/*         </li>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block linkElement %}*/
/*     {% import _self as oro_menu %}*/
/*     <a href="{{ item.uri }}"{{ oro_menu.attributes(linkAttributes) }}>{{ block('label') }}</a>*/
/* {% endblock %}*/
/* */
/* {% block spanElement %}*/
/*     {% import _self as oro_menu %}*/
/*     <span{{ oro_menu.attributes(labelAttributes) }}>{{ block('label') }}</span>*/
/* {% endblock %}*/
/* */
/* {% block label %}*/
/*     {% if item.getExtra('icon') %}*/
/*         <i class="{{- item.getExtra('icon') -}}"></i>*/
/*     {% endif %}*/
/*     {% if options.allow_safe_labels and item.getExtra('safe_label', false) %}*/
/*         {{ item.label|raw }}*/
/*     {% else %}*/
/*         {{ item.label|trans(item.getExtra('translateParams', {}), item.getExtra('translateDomain', 'messages')) }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
