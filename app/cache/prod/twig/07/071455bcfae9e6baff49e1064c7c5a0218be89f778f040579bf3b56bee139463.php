<?php

/* OroUserBundle:User:view.html.twig */
class __TwigTemplate_c24f15dadafd3a56abdac240f09c53be0e03d14c550a265ff41074b6a05cf13d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroUserBundle:User:view.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'stats' => array($this, 'block_stats'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroUserBundle:User:view.html.twig", 2);
        // line 4
        $context["fullname"] = _twig_default_filter($this->env->getExtension('oro_locale_name')->format((isset($context["entity"]) ? $context["entity"] : null)), "N/A");

        $this->env->getExtension("oro_title")->set(array("params" => array("%username%" =>         // line 5
(isset($context["fullname"]) ? $context["fullname"] : null))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_navButtons($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        if (array_key_exists("editRoute", $context)) {
            // line 21
            echo "        ";
            echo $context["UI"]->getbutton(array("path" => $this->env->getExtension('routing')->getPath((isset($context["editRoute"]) ? $context["editRoute"] : null)), "iClass" => "icon-pencil ", "title" => "Edit profile", "label" => "Edit", "aClass" => "edit-user"));
            echo "
    ";
        } else {
            // line 23
            echo "        ";
            if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("pim_user_user_edit")) {
                // line 24
                echo "            ";
                echo $context["UI"]->getbutton(array("path" => $this->env->getExtension('routing')->getPath("oro_user_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "iClass" => "icon-pencil ", "title" => "Edit user", "label" => "Edit", "aClass" => "edit-user"));
                echo "
        ";
            }
            // line 26
            echo "    ";
        }
        // line 27
        echo "    ";
        if (($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("pim_user_user_remove") && ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()) != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array())))) {
            // line 28
            echo "        ";
            echo $context["UI"]->getdeleteButton(array("dataUrl" => $this->env->getExtension('routing')->getPath("oro_user_user_delete", array("id" => $this->getAttribute(            // line 29
(isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "dataRedirect" => $this->env->getExtension('routing')->getPath("oro_user_index"), "aCss" => "no-hash remove-button", "dataId" => $this->getAttribute(            // line 32
(isset($context["entity"]) ? $context["entity"] : null), "id", array()), "dataMessage" => $this->env->getExtension('translator')->trans("Are you sure you want to delete this user?"), "successMessage" => $this->env->getExtension('translator')->trans("User deleted"), "title" => "Delete user", "label" => "Delete"));
            // line 37
            echo "
    ";
        }
    }

    // line 41
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 42
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 43
(isset($context["entity"]) ? $context["entity"] : null), "indexPath" => $this->env->getExtension('routing')->getPath("oro_user_index"), "indexLabel" => $this->env->getExtension('translator')->trans("Users"), "entityTitle" =>         // line 46
(isset($context["fullname"]) ? $context["fullname"] : null), "hasAvatar" => true, "imagePath" => $this->getAttribute(        // line 48
(isset($context["entity"]) ? $context["entity"] : null), "imagePath", array()));
        // line 51
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 54
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 55
        echo "    ";
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "
    <div class=\"status-enabled pull-left\">
        ";
        // line 57
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "enabled", array())) {
            // line 58
            echo "            <div class=\"badge badge-enabled status-enabled\"><i class=\"icon-status-enabled icon-circle\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Active"), "html", null, true);
            echo "</div>
        ";
        } else {
            // line 60
            echo "            <div class=\"badge badge-enabled status-disabled\"><i class=\"icon-status-disabled icon-circle\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Inactive"), "html", null, true);
            echo "</div>
        ";
        }
        // line 62
        echo "    </div>
";
    }

    // line 65
    public function block_stats($context, array $blocks = array())
    {
        // line 66
        echo "    ";
        $this->displayParentBlock("stats", $context, $blocks);
        echo "
    <li>";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Last logged in"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "lastLogin", array())) ? ($this->env->getExtension('oro_locale_datetime')->formatDateTime($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "lastLogin", array()))) : ("N/A"));
        echo "</li>
    <li>";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login count"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "loginCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "loginCount", array()), 0)) : (0)), "html", null, true);
        echo "</li>
";
    }

    // line 71
    public function block_content_data($context, array $blocks = array())
    {
        // line 72
        echo "  <div>
    ";
        // line 73
        $context["id"] = "user-profile";
        // line 74
        echo "
    ";
        // line 75
        $context["dataSubBlocks"] = array(0 => $context["UI"]->getattibuteRow("Email", array("value" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "email", array()), "hint" => $this->env->getExtension('translator')->trans(""))));
        // line 76
        echo "
    ";
        // line 77
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('translator')->trans("General"), "class" => "active", "subblocks" => array(0 => array("title" => $this->env->getExtension('translator')->trans("Basic Information"), "data" => array(0 =>         // line 85
$context["UI"]->getattibuteRow($this->env->getExtension('translator')->trans("User name"), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "username", array())), 1 => (($this->getAttribute(        // line 86
(isset($context["entity"]) ? $context["entity"] : null), "namePrefix", array())) ? ($context["UI"]->getattibuteRow($this->env->getExtension('translator')->trans("Name prefix"), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "namePrefix", array()))) : ("")), 2 =>         // line 87
$context["UI"]->getattibuteRow($this->env->getExtension('translator')->trans("First name"), (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "firstName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "firstName", array()), "N/A")) : ("N/A"))), 3 => (($this->getAttribute(        // line 88
(isset($context["entity"]) ? $context["entity"] : null), "middleName", array())) ? ($context["UI"]->getattibuteRow($this->env->getExtension('translator')->trans("Middle name"), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "middleName", array()))) : ("")), 4 =>         // line 89
$context["UI"]->getattibuteRow($this->env->getExtension('translator')->trans("Last name"), (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "lastName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "lastName", array()), "N/A")) : ("N/A"))), 5 => (($this->getAttribute(        // line 90
(isset($context["entity"]) ? $context["entity"] : null), "nameSuffix", array())) ? ($context["UI"]->getattibuteRow($this->env->getExtension('translator')->trans("Name suffix"), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nameSuffix", array()))) : ("")), 6 =>         // line 91
$context["UI"]->getattibuteRow($this->env->getExtension('translator')->trans("Birthday"), (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "birthday", array())) ? ($this->env->getExtension('oro_locale_datetime')->formatDate($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "birthday", array()))) : ("N/A"))), 7 =>         // line 92
$context["UI"]->getrenderAttribute($this->env->getExtension('translator')->trans("API key"), $this->getAttribute($this, "api_data_block", array(0 => (isset($context["entity"]) ? $context["entity"] : null)), "method")))), 1 => array("title" => $this->env->getExtension('translator')->trans("Contact Information"), "data" =>         // line 97
(isset($context["dataSubBlocks"]) ? $context["dataSubBlocks"] : null)))));
        // line 103
        echo "
    ";
        // line 107
        echo "
    ";
        // line 108
        $context["filters"] = array();
        // line 109
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "productGridFilters", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
            // line 110
            echo "      ";
            $context["filters"] = twig_array_merge((isset($context["filters"]) ? $context["filters"] : null), array(0 => $this->env->getExtension('pim_datagrid_filter_extension')->filterLabel($context["filter"])));
            // line 111
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "
    ";
        // line 113
        $context["additional"] = array(0 => array("title" => $this->env->getExtension('translator')->trans("Additional Information"), "class" => "active", "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 121
$context["UI"]->getattibuteRow($this->env->getExtension('translator')->trans("Catalog locale"), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "catalogLocale", array())), 1 =>         // line 122
$context["UI"]->getattibuteRow($this->env->getExtension('translator')->trans("Catalog scope"), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "catalogScope", array())), 2 =>         // line 123
$context["UI"]->getattibuteRow($this->env->getExtension('translator')->trans("Default tree"), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "defaultTree", array())), 3 =>         // line 124
$context["UI"]->getattibuteRow($this->env->getExtension('translator')->trans("user.product_grid_filters"), twig_join_filter((isset($context["filters"]) ? $context["filters"] : null), ", ")))), 1 => array("title" => "", "data" => array(0 =>         // line 130
$context["UI"]->getattibuteRow($this->env->getExtension('translator')->trans("User salt"), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "salt", array())))))));
        // line 137
        echo "
    ";
        // line 138
        $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) ? $context["dataBlocks"] : null), (isset($context["additional"]) ? $context["additional"] : null));
        // line 139
        echo "
    ";
        // line 144
        ob_start();
        $context["additional_data"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 148
        if ( !twig_test_empty((isset($context["additional_data"]) ? $context["additional_data"] : null))) {
            // line 149
            echo "        ";
            $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) ? $context["dataBlocks"] : null), array(0 => array("title" => $this->env->getExtension('translator')->trans("Additional data"), "subblocks" => array(0 => array("title" => "", "data" => array(0 =>             // line 155
(isset($context["additional_data"]) ? $context["additional_data"] : null)))))));
            // line 160
            echo "    ";
        }
        // line 161
        echo "
    ";
        // line 162
        $context["data"] = array("dataBlocks" => (isset($context["dataBlocks"]) ? $context["dataBlocks"] : null));
        // line 163
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
  </div>
";
    }

    // line 7
    public function getapi_data_block($__user__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 8
            echo "<div class=\"horizontal\">
    <label>";
            // line 9
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "api", array())) ? ($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "api", array()), "apiKey", array())) : ("N/A")), "html", null, true);
            echo "</label>
    ";
            // line 10
            if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("pim_user_user_edit")) {
                // line 11
                echo "        <a class=\"btn btn-small no-hash\" id=\"btn-apigen\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oro_user_apigen", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                echo "\"
           data-title=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Generate key"), "html", null, true);
                echo "\" data-message=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Generate key was successful. New key:"), "html", null, true);
                echo "\">
            ";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Generate key"), "html", null, true);
                echo "
        </a>
    ";
            }
            // line 16
            echo "</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroUserBundle:User:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 16,  268 => 13,  262 => 12,  257 => 11,  255 => 10,  251 => 9,  248 => 8,  236 => 7,  228 => 163,  226 => 162,  223 => 161,  220 => 160,  218 => 155,  216 => 149,  214 => 148,  211 => 144,  208 => 139,  206 => 138,  203 => 137,  201 => 130,  200 => 124,  199 => 123,  198 => 122,  197 => 121,  196 => 113,  193 => 112,  187 => 111,  184 => 110,  179 => 109,  177 => 108,  174 => 107,  171 => 103,  169 => 97,  168 => 92,  167 => 91,  166 => 90,  165 => 89,  164 => 88,  163 => 87,  162 => 86,  161 => 85,  160 => 77,  157 => 76,  155 => 75,  152 => 74,  150 => 73,  147 => 72,  144 => 71,  136 => 68,  130 => 67,  125 => 66,  122 => 65,  117 => 62,  111 => 60,  105 => 58,  103 => 57,  97 => 55,  94 => 54,  87 => 51,  85 => 48,  84 => 46,  83 => 43,  81 => 42,  78 => 41,  72 => 37,  70 => 32,  69 => 29,  67 => 28,  64 => 27,  61 => 26,  55 => 24,  52 => 23,  46 => 21,  43 => 20,  40 => 19,  36 => 1,  34 => 5,  31 => 4,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'OroUIBundle:actions:view.html.twig' %}*/
/* {% import 'OroUIBundle::macros.html.twig' as UI %}*/
/* */
/* {% set fullname = entity|oro_format_name|default('N/A') %}*/
/* {% oro_title_set({params : {"%username%": fullname }}) %}*/
/* */
/* {% macro api_data_block(user) %}*/
/* <div class="horizontal">*/
/*     <label>{{ user.api ? user.api.apiKey : 'N/A' }}</label>*/
/*     {% if resource_granted('pim_user_user_edit') %}*/
/*         <a class="btn btn-small no-hash" id="btn-apigen" href="{{ path('oro_user_apigen', { id: user.id }) }}"*/
/*            data-title="{{ 'Generate key'|trans }}" data-message="{{ 'Generate key was successful. New key:'|trans }}">*/
/*             {{ 'Generate key'|trans }}*/
/*         </a>*/
/*     {% endif %}*/
/* </div>*/
/* {% endmacro %}*/
/* */
/* {% block navButtons %}*/
/*     {% if editRoute is defined %}*/
/*         {{ UI.button({'path' : path(editRoute), 'iClass' : 'icon-pencil ', 'title' : 'Edit profile', 'label' : 'Edit', 'aClass' : 'edit-user'}) }}*/
/*     {% else %}*/
/*         {% if resource_granted('pim_user_user_edit') %}*/
/*             {{ UI.button({'path' : path('oro_user_update', { id: entity.id }), 'iClass' : 'icon-pencil ', 'title' : 'Edit user', 'label' : 'Edit', 'aClass' : 'edit-user'}) }}*/
/*         {% endif %}*/
/*     {% endif %}*/
/*     {% if resource_granted('pim_user_user_remove') and entity.id!=app.user.id %}*/
/*         {{ UI.deleteButton({*/
/*             'dataUrl': path('oro_user_user_delete', {'id': entity.id}),*/
/*             'dataRedirect': path('oro_user_index'),*/
/*             'aCss': 'no-hash remove-button',*/
/*             'dataId': entity.id,*/
/*             'dataMessage': 'Are you sure you want to delete this user?'|trans,*/
/*             'successMessage': 'User deleted'|trans,*/
/*             'title': 'Delete user',*/
/*             'label': 'Delete'*/
/*         }) }}*/
/*     {% endif %}*/
/* {% endblock navButtons %}*/
/* */
/* {% block pageHeader %}*/
/*     {% set breadcrumbs = {*/
/*         'entity':      entity,*/
/*         'indexPath':   path('oro_user_index'),*/
/*         'indexLabel': 'Users'|trans,*/
/*         'entityTitle': fullname,*/
/*         'hasAvatar':   true,*/
/*         'imagePath':   entity.imagePath,*/
/*     }*/
/*     %}*/
/*     {{ parent() }}*/
/* {% endblock pageHeader %}*/
/* */
/* {% block breadcrumbs %}*/
/*     {{ parent() }}*/
/*     <div class="status-enabled pull-left">*/
/*         {% if entity.enabled %}*/
/*             <div class="badge badge-enabled status-enabled"><i class="icon-status-enabled icon-circle"></i>{{ 'Active'|trans }}</div>*/
/*         {% else %}*/
/*             <div class="badge badge-enabled status-disabled"><i class="icon-status-disabled icon-circle"></i>{{ 'Inactive'|trans }}</div>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock breadcrumbs %}*/
/* */
/* {% block stats %}*/
/*     {{ parent() }}*/
/*     <li>{{ 'Last logged in'|trans }}: {{ entity.lastLogin ? entity.lastLogin|oro_format_datetime : 'N/A' }}</li>*/
/*     <li>{{ 'Login count'|trans }}: {{ entity.loginCount|default(0) }}</li>*/
/* {% endblock stats %}*/
/* */
/* {% block content_data %}*/
/*   <div>*/
/*     {% set id = 'user-profile' %}*/
/* */
/*     {% set dataSubBlocks = [UI.attibuteRow('Email', {value: entity.email, hint: ''|trans})] %}*/
/* */
/*     {% set dataBlocks = [*/
/*         {*/
/*             'title': 'General'|trans,*/
/*             'class': 'active',*/
/*             'subblocks': [*/
/*                 {*/
/*                     'title': 'Basic Information'|trans,*/
/*                     'data': [*/
/*                         UI.attibuteRow('User name'|trans, entity.username),*/
/*                         entity.namePrefix ? UI.attibuteRow('Name prefix'|trans, entity.namePrefix),*/
/*                         UI.attibuteRow('First name'|trans, entity.firstName|default('N/A')),*/
/*                         entity.middleName ? UI.attibuteRow('Middle name'|trans, entity.middleName),*/
/*                         UI.attibuteRow('Last name'|trans, entity.lastName|default('N/A')),*/
/*                         entity.nameSuffix ? UI.attibuteRow('Name suffix'|trans, entity.nameSuffix),*/
/*                         UI.attibuteRow('Birthday'|trans, entity.birthday ? entity.birthday|oro_format_date : 'N/A'),*/
/*                         UI.renderAttribute('API key'|trans, _self.api_data_block(entity))*/
/*                     ]*/
/*                 },*/
/*                 {*/
/*                     'title': 'Contact Information'|trans,*/
/*                     'data': dataSubBlocks*/
/*                 }*/
/*             ]*/
/*         }*/
/*     ]*/
/*     %}*/
/* */
/*     {#*/
/*       EntityExtend fields START*/
/*     #}*/
/* */
/*     {% set filters = [] %}*/
/*     {% for filter in entity.productGridFilters %}*/
/*       {% set filters = filters|merge([filter_label(filter)]) %}*/
/*     {% endfor %}*/
/* */
/*     {% set additional = [*/
/*         {*/
/*             'title': 'Additional Information'|trans,*/
/*             'class': 'active',*/
/*             'subblocks': [*/
/*                 {*/
/*                     'title': '',*/
/*                     'data': [*/
/*                         UI.attibuteRow('Catalog locale'|trans, entity.catalogLocale),*/
/*                         UI.attibuteRow('Catalog scope'|trans, entity.catalogScope),*/
/*                         UI.attibuteRow('Default tree'|trans, entity.defaultTree),*/
/*                         UI.attibuteRow('user.product_grid_filters'|trans, filters|join(', ')),*/
/*                     ]*/
/*                 },*/
/*                 {*/
/*                     'title': '',*/
/*                     'data': [*/
/*                         UI.attibuteRow('User salt'|trans, entity.salt)*/
/*                     ]*/
/*                 }*/
/*             ]*/
/*         }*/
/*     ]*/
/*     %}*/
/* */
/*     {% set dataBlocks = dataBlocks|merge(additional) %}*/
/* */
/*     {#*/
/*       EntityExtend fields END*/
/*     #}*/
/* */
/*     {%- set additional_data -%}*/
/*         {% placeholder oro_user_view_additional_data %}*/
/*     {%- endset -%}*/
/* */
/*     {% if additional_data is not empty %}*/
/*         {% set dataBlocks = dataBlocks|merge(*/
/*             [{*/
/*                 'title': 'Additional data'|trans,*/
/*                 'subblocks': [*/
/*                     {*/
/*                         'title': '',*/
/*                         'data': [additional_data]*/
/*                     }*/
/*                 ]*/
/*             }]*/
/*         ) %}*/
/*     {% endif %}*/
/* */
/*     {% set data = { 'dataBlocks': dataBlocks } %}*/
/*     {{ parent() }}*/
/*   </div>*/
/* {% endblock content_data %}*/
/* */
