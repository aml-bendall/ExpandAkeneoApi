<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // pim_analytics_data_collect
        if ($pathinfo === '/analytics/collect_data') {
            return array (  '_controller' => 'pim_analytics.controller.data:collectAction',  '_format' => 'json',  '_route' => 'pim_analytics_data_collect',);
        }

        if (0 === strpos($pathinfo, '/datagrid')) {
            // pim_datagrid_load
            if (preg_match('#^/datagrid/(?P<alias>[^/]++)/load$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_pim_datagrid_load;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_datagrid_load')), array (  '_controller' => 'pim_datagrid.controller.datagrid:loadAction',));
            }
            not_pim_datagrid_load:

            if (0 === strpos($pathinfo, '/datagrid/export')) {
                // pim_datagrid_export_index
                if ($pathinfo === '/datagrid/export/index') {
                    return array (  '_controller' => 'pim_datagrid.controller.export:indexAction',  '_route' => 'pim_datagrid_export_index',);
                }

                // pim_datagrid_export_product_index
                if ($pathinfo === '/datagrid/export/product/index') {
                    return array (  '_controller' => 'pim_datagrid.controller.product_export:indexAction',  '_route' => 'pim_datagrid_export_product_index',);
                }

            }

            if (0 === strpos($pathinfo, '/datagrid_view')) {
                // pim_datagrid_view_index
                if (preg_match('#^/datagrid_view/(?P<alias>[^/]++)(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_pim_datagrid_view_index;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_datagrid_view_index')), array (  '_controller' => 'pim_datagrid.controller.datagrid_view:indexAction',  'id' => NULL,));
                }
                not_pim_datagrid_view_index:

                // pim_datagrid_view_list_columns
                if (preg_match('#^/datagrid_view/(?P<alias>[^/]++)/columns$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pim_datagrid_view_list_columns;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_datagrid_view_list_columns')), array (  '_controller' => 'pim_datagrid.controller.datagrid_view:listColumnsAction',));
                }
                not_pim_datagrid_view_list_columns:

                // pim_datagrid_view_remove
                if (preg_match('#^/datagrid_view/(?P<id>\\d+)/remove$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_pim_datagrid_view_remove;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_datagrid_view_remove')), array (  '_controller' => 'pim_datagrid.controller.datagrid_view:removeAction',));
                }
                not_pim_datagrid_view_remove:

            }

            // pim_datagrid_mass_action
            if (preg_match('#^/datagrid/(?P<gridName>[^/]++)/massAction/(?P<actionName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_datagrid_mass_action')), array (  '_controller' => 'pim_datagrid.controller.mass_action:massActionAction',));
            }

        }

        // pim_dashboard_widget_data
        if (0 === strpos($pathinfo, '/widget') && preg_match('#^/widget/(?P<alias>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_pim_dashboard_widget_data;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_dashboard_widget_data')), array (  '_controller' => 'pim_dashboard.controller.widget:dataAction',));
        }
        not_pim_dashboard_widget_data:

        if (0 === strpos($pathinfo, '/configuration')) {
            if (0 === strpos($pathinfo, '/configuration/attribute-group')) {
                // pim_enrich_attributegroup_index
                if (rtrim($pathinfo, '/') === '/configuration/attribute-group') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'pim_enrich_attributegroup_index');
                    }

                    return array (  '_controller' => 'pim_enrich.controller.attribute_group:indexAction',  '_route' => 'pim_enrich_attributegroup_index',);
                }

                // pim_enrich_attributegroup_create
                if ($pathinfo === '/configuration/attribute-group/create') {
                    return array (  '_controller' => 'pim_enrich.controller.attribute_group:createAction',  '_route' => 'pim_enrich_attributegroup_create',);
                }

                // pim_enrich_attributegroup_edit
                if (preg_match('#^/configuration/attribute\\-group/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attributegroup_edit')), array (  '_controller' => 'pim_enrich.controller.attribute_group:editAction',));
                }

                // pim_enrich_attributegroup_sort
                if ($pathinfo === '/configuration/attribute-group/sort') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pim_enrich_attributegroup_sort;
                    }

                    return array (  '_controller' => 'pim_enrich.controller.attribute_group:sortAction',  '_route' => 'pim_enrich_attributegroup_sort',);
                }
                not_pim_enrich_attributegroup_sort:

                // pim_enrich_attributegroup_remove
                if (preg_match('#^/configuration/attribute\\-group/(?P<id>\\d+)/remove$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_pim_enrich_attributegroup_remove;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attributegroup_remove')), array (  '_controller' => 'pim_enrich.controller.attribute_group:removeAction',));
                }
                not_pim_enrich_attributegroup_remove:

                // pim_enrich_attributegroup_addattributes
                if (preg_match('#^/configuration/attribute\\-group/(?P<id>\\d+)/attributes$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pim_enrich_attributegroup_addattributes;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attributegroup_addattributes')), array (  '_controller' => 'pim_enrich.controller.attribute_group:addAttributesAction',));
                }
                not_pim_enrich_attributegroup_addattributes:

                // pim_enrich_attributegroup_removeattribute
                if (preg_match('#^/configuration/attribute\\-group/(?P<groupId>\\d+)/attribute/(?P<attributeId>\\d+)/remove$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_pim_enrich_attributegroup_removeattribute;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attributegroup_removeattribute')), array (  '_controller' => 'pim_enrich.controller.attribute_group:removeAttributeAction',));
                }
                not_pim_enrich_attributegroup_removeattribute:

                // pim_enrich_attributegroup_rest_index
                if ($pathinfo === '/configuration/attribute-group/rest') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pim_enrich_attributegroup_rest_index;
                    }

                    return array (  '_controller' => 'pim_enrich.controller.rest.attribute_group:indexAction',  '_format' => 'json',  '_route' => 'pim_enrich_attributegroup_rest_index',);
                }
                not_pim_enrich_attributegroup_rest_index:

            }

            if (0 === strpos($pathinfo, '/configuration/c')) {
                if (0 === strpos($pathinfo, '/configuration/channel')) {
                    // pim_enrich_channel_index
                    if (0 === strpos($pathinfo, '/configuration/channel/') && preg_match('#^/configuration/channel/(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_channel_index')), array (  '_controller' => 'pim_enrich.controller.channel:indexAction',  '_format' => 'html',));
                    }

                    // pim_enrich_channel_create
                    if ($pathinfo === '/configuration/channel/create') {
                        return array (  '_controller' => 'pim_enrich.controller.channel:createAction',  '_route' => 'pim_enrich_channel_create',);
                    }

                    // pim_enrich_channel_edit
                    if (preg_match('#^/configuration/channel/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_channel_edit')), array (  '_controller' => 'pim_enrich.controller.channel:editAction',));
                    }

                    // pim_enrich_channel_remove
                    if (preg_match('#^/configuration/channel/(?P<id>\\d+)/remove$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_pim_enrich_channel_remove;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_channel_remove')), array (  '_controller' => 'pim_enrich.controller.channel:removeAction',));
                    }
                    not_pim_enrich_channel_remove:

                    // pim_enrich_channel_rest_index
                    if ($pathinfo === '/configuration/channel/rest') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_pim_enrich_channel_rest_index;
                        }

                        return array (  '_controller' => 'pim_enrich.controller.rest.channel:indexAction',  '_format' => 'json',  '_route' => 'pim_enrich_channel_rest_index',);
                    }
                    not_pim_enrich_channel_rest_index:

                }

                if (0 === strpos($pathinfo, '/configuration/currency')) {
                    // pim_enrich_currency_index
                    if (0 === strpos($pathinfo, '/configuration/currency/') && preg_match('#^/configuration/currency/(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_currency_index')), array (  '_controller' => 'pim_enrich.controller.currency:indexAction',  '_format' => 'html',));
                    }

                    // pim_enrich_currency_toggle
                    if (preg_match('#^/configuration/currency/(?P<id>\\d+)/toggle$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_currency_toggle')), array (  '_controller' => 'pim_enrich.controller.currency:toggleAction',));
                    }

                    // pim_enrich_currency_rest_index
                    if ($pathinfo === '/configuration/currency/rest') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_pim_enrich_currency_rest_index;
                        }

                        return array (  '_controller' => 'pim_enrich.controller.rest.currency:indexAction',  '_format' => 'json',  '_route' => 'pim_enrich_currency_rest_index',);
                    }
                    not_pim_enrich_currency_rest_index:

                }

            }

            if (0 === strpos($pathinfo, '/configuration/family')) {
                // pim_enrich_family_index
                if (0 === strpos($pathinfo, '/configuration/family/') && preg_match('#^/configuration/family/(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_family_index')), array (  '_controller' => 'pim_enrich.controller.family:indexAction',  '_format' => 'html',));
                }

                // pim_enrich_family_create
                if ($pathinfo === '/configuration/family/create') {
                    return array (  '_controller' => 'pim_enrich.controller.family:createAction',  '_route' => 'pim_enrich_family_create',);
                }

                // pim_enrich_family_edit
                if (preg_match('#^/configuration/family/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_family_edit')), array (  '_controller' => 'pim_enrich.controller.family:editAction',));
                }

                // pim_enrich_family_remove
                if (preg_match('#^/configuration/family/(?P<id>\\d+)/remove$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_pim_enrich_family_remove;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_family_remove')), array (  '_controller' => 'pim_enrich.controller.family:removeAction',));
                }
                not_pim_enrich_family_remove:

                // pim_enrich_family_addattributes
                if (preg_match('#^/configuration/family/(?P<id>\\d+)/attributes$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pim_enrich_family_addattributes;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_family_addattributes')), array (  '_controller' => 'pim_enrich.controller.family:addAttributesAction',));
                }
                not_pim_enrich_family_addattributes:

                // pim_enrich_family_removeattribute
                if (preg_match('#^/configuration/family/(?P<familyId>\\d+)/attribute/(?P<attributeId>\\d+)/remove$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_pim_enrich_family_removeattribute;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_family_removeattribute')), array (  '_controller' => 'pim_enrich.controller.family:removeAttributeAction',));
                }
                not_pim_enrich_family_removeattribute:

                // pim_enrich_family_history
                if (preg_match('#^/configuration/family/(?P<id>\\d+)/history(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_family_history')), array (  '_controller' => 'pim_enrich.controller.family:historyAction',  '_format' => 'html',));
                }

                // pim_enrich_family_rest_index
                if ($pathinfo === '/configuration/family/rest') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pim_enrich_family_rest_index;
                    }

                    return array (  '_controller' => 'pim_enrich.controller.rest.family:indexAction',  '_format' => 'json',  '_route' => 'pim_enrich_family_rest_index',);
                }
                not_pim_enrich_family_rest_index:

            }

            if (0 === strpos($pathinfo, '/configuration/locale')) {
                // pim_enrich_locale_index
                if (rtrim($pathinfo, '/') === '/configuration/locale') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'pim_enrich_locale_index');
                    }

                    return array (  '_controller' => 'pim_enrich.controller.locale:indexAction',  '_route' => 'pim_enrich_locale_index',);
                }

                // pim_enrich_locale_rest_index
                if ($pathinfo === '/configuration/locale/rest') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pim_enrich_locale_rest_index;
                    }

                    return array (  '_controller' => 'pim_enrich.controller.rest.locale:indexAction',  '_format' => 'json',  '_route' => 'pim_enrich_locale_rest_index',);
                }
                not_pim_enrich_locale_rest_index:

            }

            if (0 === strpos($pathinfo, '/configuration/attribute')) {
                // pim_enrich_attribute_index
                if (0 === strpos($pathinfo, '/configuration/attribute/') && preg_match('#^/configuration/attribute/(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attribute_index')), array (  '_controller' => 'pim_enrich.controller.attribute:indexAction',  '_format' => 'html',));
                }

                // pim_enrich_attribute_create
                if ($pathinfo === '/configuration/attribute/create') {
                    return array (  '_controller' => 'pim_enrich.controller.attribute:createAction',  '_route' => 'pim_enrich_attribute_create',);
                }

                // pim_enrich_attribute_edit
                if (preg_match('#^/configuration/attribute/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attribute_edit')), array (  '_controller' => 'pim_enrich.controller.attribute:editAction',));
                }

                // pim_enrich_attribute_sort
                if ($pathinfo === '/configuration/attribute/sort') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pim_enrich_attribute_sort;
                    }

                    return array (  '_controller' => 'pim_enrich.controller.attribute:sortAction',  '_route' => 'pim_enrich_attribute_sort',);
                }
                not_pim_enrich_attribute_sort:

                // pim_enrich_attribute_remove
                if (preg_match('#^/configuration/attribute/(?P<id>\\d+)/remove$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_pim_enrich_attribute_remove;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attribute_remove')), array (  '_controller' => 'pim_enrich.controller.attribute:removeAction',));
                }
                not_pim_enrich_attribute_remove:

                // pim_enrich_attribute_create_option
                if (preg_match('#^/configuration/attribute/(?P<id>\\d+)/create\\-option/(?P<dataLocale>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attribute_create_option')), array (  '_controller' => 'pim_enrich.controller.attribute:createOptionAction',));
                }

                // pim_enrich_attribute_rest_index
                if ($pathinfo === '/configuration/attribute/rest') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pim_enrich_attribute_rest_index;
                    }

                    return array (  '_controller' => 'pim_enrich.controller.rest.attribute:indexAction',  '_format' => 'json',  '_route' => 'pim_enrich_attribute_rest_index',);
                }
                not_pim_enrich_attribute_rest_index:

                if (0 === strpos($pathinfo, '/configuration/attribute_option')) {
                    // pim_enrich_attributeoption_index
                    if (preg_match('#^/configuration/attribute_option/(?P<attributeId>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_pim_enrich_attributeoption_index;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attributeoption_index')), array (  '_controller' => 'pim_enrich.controller.attribute_option:indexAction',  '_format' => 'json',));
                    }
                    not_pim_enrich_attributeoption_index:

                    // pim_enrich_attributeoption_create
                    if (preg_match('#^/configuration/attribute_option/(?P<attributeId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_pim_enrich_attributeoption_create;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attributeoption_create')), array (  '_controller' => 'pim_enrich.controller.attribute_option:createAction',  '_format' => 'json',));
                    }
                    not_pim_enrich_attributeoption_create:

                    // pim_enrich_attributeoption_update
                    if (preg_match('#^/configuration/attribute_option/(?P<attributeId>\\d+)/(?P<attributeOptionId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_pim_enrich_attributeoption_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attributeoption_update')), array (  '_controller' => 'pim_enrich.controller.attribute_option:updateAction',  '_format' => 'json',));
                    }
                    not_pim_enrich_attributeoption_update:

                    // pim_enrich_attributeoption_delete
                    if (preg_match('#^/configuration/attribute_option/(?P<attributeId>\\d+)/(?P<attributeOptionId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_pim_enrich_attributeoption_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attributeoption_delete')), array (  '_controller' => 'pim_enrich.controller.attribute_option:deleteAction',  '_format' => 'json',));
                    }
                    not_pim_enrich_attributeoption_delete:

                    // pim_enrich_attributeoption_update_sorting
                    if (preg_match('#^/configuration/attribute_option/(?P<attributeId>\\d+)/update\\-sorting$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_pim_enrich_attributeoption_update_sorting;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attributeoption_update_sorting')), array (  '_controller' => 'pim_enrich.controller.attribute_option:updateSortingAction',  '_format' => 'json',));
                    }
                    not_pim_enrich_attributeoption_update_sorting:

                }

            }

        }

        if (0 === strpos($pathinfo, '/enrich')) {
            if (0 === strpos($pathinfo, '/enrich/product')) {
                if (0 === strpos($pathinfo, '/enrich/product-category-tree')) {
                    // pim_enrich_categorytree_listtree
                    if (0 === strpos($pathinfo, '/enrich/product-category-tree/list-tree') && preg_match('#^/enrich/product\\-category\\-tree/list\\-tree\\.(?P<_format>json)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_categorytree_listtree')), array (  '_controller' => 'pim_enrich.controller.category_tree.product:listTreeAction',));
                    }

                    // pim_enrich_categorytree_movenode
                    if ($pathinfo === '/enrich/product-category-tree/move-node') {
                        return array (  '_controller' => 'pim_enrich.controller.category_tree.product:moveNodeAction',  '_route' => 'pim_enrich_categorytree_movenode',);
                    }

                    // pim_enrich_categorytree_children
                    if (0 === strpos($pathinfo, '/enrich/product-category-tree/children') && preg_match('#^/enrich/product\\-category\\-tree/children\\.(?P<_format>json)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_categorytree_children')), array (  '_controller' => 'pim_enrich.controller.category_tree.product:childrenAction',));
                    }

                    // pim_enrich_categorytree_index
                    if (rtrim($pathinfo, '/') === '/enrich/product-category-tree') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'pim_enrich_categorytree_index');
                        }

                        return array (  '_controller' => 'pim_enrich.controller.category_tree.product:indexAction',  '_route' => 'pim_enrich_categorytree_index',);
                    }

                    // pim_enrich_categorytree_create
                    if (0 === strpos($pathinfo, '/enrich/product-category-tree/create') && preg_match('#^/enrich/product\\-category\\-tree/create(?:/(?P<parent>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_categorytree_create')), array (  '_controller' => 'pim_enrich.controller.category_tree.product:createAction',  'parent' => NULL,));
                    }

                    // pim_enrich_categorytree_edit
                    if (preg_match('#^/enrich/product\\-category\\-tree/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_categorytree_edit')), array (  '_controller' => 'pim_enrich.controller.category_tree.product:editAction',));
                    }

                    // pim_enrich_categorytree_remove
                    if (preg_match('#^/enrich/product\\-category\\-tree/(?P<id>\\d+)/remove$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_pim_enrich_categorytree_remove;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_categorytree_remove')), array (  '_controller' => 'pim_enrich.controller.category_tree.product:removeAction',));
                    }
                    not_pim_enrich_categorytree_remove:

                }

                // pim_enrich_product_index
                if (0 === strpos($pathinfo, '/enrich/product/') && preg_match('#^/enrich/product/(?:\\.(?P<_format>html|json|csv))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_index')), array (  '_controller' => 'pim_enrich.controller.product:indexAction',  '_format' => 'html',));
                }

                // pim_enrich_product_create
                if (0 === strpos($pathinfo, '/enrich/product/create') && preg_match('#^/enrich/product/create(?:/(?P<dataLocale>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_create')), array (  '_controller' => 'pim_enrich.controller.product:createAction',  'dataLocale' => NULL,));
                }

                // pim_enrich_product_edit
                if (preg_match('#^/enrich/product/(?P<id>[0-9a-f]+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_pim_enrich_product_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_edit')), array (  '_controller' => 'pim_enrich.controller.rest.product:editAction',));
                }
                not_pim_enrich_product_edit:

                // pim_enrich_product_toggle_status
                if (preg_match('#^/enrich/product/(?P<id>[0-9a-f]+)/toggle\\-status$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_pim_enrich_product_toggle_status;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_toggle_status')), array (  '_controller' => 'pim_enrich.controller.product:toggleStatusAction',));
                }
                not_pim_enrich_product_toggle_status:

                // pim_enrich_product_listcategories
                if (0 === strpos($pathinfo, '/enrich/product/list-categories/product') && preg_match('#^/enrich/product/list\\-categories/product/(?P<id>[0-9a-f]+)/parent/(?P<categoryId>\\d+)\\.(?P<_format>json)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_listcategories')), array (  '_controller' => 'pim_enrich.controller.product:listCategoriesAction',));
                }

                if (0 === strpos($pathinfo, '/enrich/product/rest')) {
                    // pim_enrich_product_rest_get
                    if (preg_match('#^/enrich/product/rest/(?P<id>[0-9a-f]+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_pim_enrich_product_rest_get;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_rest_get')), array (  '_controller' => 'pim_enrich.controller.rest.product:getAction',  '_format' => 'json',));
                    }
                    not_pim_enrich_product_rest_get:

                    // pim_enrich_product_rest_post
                    if (preg_match('#^/enrich/product/rest/(?P<id>[0-9a-f]+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_pim_enrich_product_rest_post;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_rest_post')), array (  '_controller' => 'pim_enrich.controller.rest.product:postAction',  '_format' => 'json',));
                    }
                    not_pim_enrich_product_rest_post:

                    // pim_enrich_product_rest_remove
                    if (preg_match('#^/enrich/product/rest/(?P<id>[0-9a-f]+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_pim_enrich_product_rest_remove;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_rest_remove')), array (  '_controller' => 'pim_enrich.controller.rest.product:removeAction',  '_format' => 'json',));
                    }
                    not_pim_enrich_product_rest_remove:

                    // pim_enrich_product_category_rest_list
                    if (preg_match('#^/enrich/product/rest/(?P<id>[0-9a-f]+)/categories$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_pim_enrich_product_category_rest_list;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_category_rest_list')), array (  '_controller' => 'pim_enrich.controller.rest.product_category:listAction',  '_format' => 'json',));
                    }
                    not_pim_enrich_product_category_rest_list:

                    // pim_enrich_product_completeness_rest_get
                    if (preg_match('#^/enrich/product/rest/(?P<id>[0-9a-f]+)/completeness$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_pim_enrich_product_completeness_rest_get;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_completeness_rest_get')), array (  '_controller' => 'pim_enrich.controller.rest.completeness:getAction',  '_format' => 'json',));
                    }
                    not_pim_enrich_product_completeness_rest_get:

                    // pim_enrich_product_history_rest_get
                    if (preg_match('#^/enrich/product/rest/(?P<entityId>[0-9a-f]+)/history$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_pim_enrich_product_history_rest_get;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_history_rest_get')), array (  '_controller' => 'pim_enrich.controller.rest.versioning:getAction',  'entityType' => 'product',  '_format' => 'json',));
                    }
                    not_pim_enrich_product_history_rest_get:

                    // pim_enrich_product_remove_attribute_rest
                    if (preg_match('#^/enrich/product/rest/(?P<productId>[0-9a-f]+)/(?P<attributeId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_pim_enrich_product_remove_attribute_rest;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_remove_attribute_rest')), array (  '_controller' => 'pim_enrich.controller.rest.product:removeAttributeAction',  '_format' => 'json',));
                    }
                    not_pim_enrich_product_remove_attribute_rest:

                }

                // pim_enrich_product_comments_rest_get
                if (preg_match('#^/enrich/product/(?P<id>[0-9a-f]+)/comments(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pim_enrich_product_comments_rest_get;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_comments_rest_get')), array (  '_controller' => 'pim_enrich.controller.rest.product_comment:getAction',  '_format' => 'json',));
                }
                not_pim_enrich_product_comments_rest_get:

                // pim_enrich_product_comments_rest_post
                if (preg_match('#^/enrich/product/(?P<id>[0-9a-f]+)/comments(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pim_enrich_product_comments_rest_post;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_comments_rest_post')), array (  '_controller' => 'pim_enrich.controller.rest.product_comment:postAction',  '_format' => 'json',));
                }
                not_pim_enrich_product_comments_rest_post:

                // pim_enrich_product_comment_reply_rest_post
                if (preg_match('#^/enrich/product/(?P<id>[0-9a-f]+)/comments/(?P<commentId>[0-9a-f]+)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pim_enrich_product_comment_reply_rest_post;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_comment_reply_rest_post')), array (  '_controller' => 'pim_enrich.controller.rest.product_comment:postReplyAction',  '_format' => 'json',));
                }
                not_pim_enrich_product_comment_reply_rest_post:

            }

            if (0 === strpos($pathinfo, '/enrich/mass-edit-action')) {
                // pim_enrich_mass_edit_action_choose
                if ($pathinfo === '/enrich/mass-edit-action/choose') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_pim_enrich_mass_edit_action_choose;
                    }

                    return array (  '_controller' => 'pim_enrich.controller.mass_edit_action:chooseAction',  '_route' => 'pim_enrich_mass_edit_action_choose',);
                }
                not_pim_enrich_mass_edit_action_choose:

                // pim_enrich_mass_edit_action_configure
                if (preg_match('#^/enrich/mass\\-edit\\-action/(?P<operationAlias>[^/]++)/configure$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_pim_enrich_mass_edit_action_configure;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_mass_edit_action_configure')), array (  '_controller' => 'pim_enrich.controller.mass_edit_action:configureAction',));
                }
                not_pim_enrich_mass_edit_action_configure:

                // pim_enrich_mass_edit_action_perform
                if (preg_match('#^/enrich/mass\\-edit\\-action/(?P<operationAlias>[^/]++)/perform$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pim_enrich_mass_edit_action_perform;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_mass_edit_action_perform')), array (  '_controller' => 'pim_enrich.controller.mass_edit_action:performAction',));
                }
                not_pim_enrich_mass_edit_action_perform:

            }

            if (0 === strpos($pathinfo, '/enrich/variant-group')) {
                // pim_enrich_variant_group_index
                if (0 === strpos($pathinfo, '/enrich/variant-group/') && preg_match('#^/enrich/variant\\-group/(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_variant_group_index')), array (  '_controller' => 'pim_enrich.controller.variant_group:indexAction',  '_format' => 'html',));
                }

                // pim_enrich_variant_group_create
                if ($pathinfo === '/enrich/variant-group/create') {
                    return array (  '_controller' => 'pim_enrich.controller.variant_group:createAction',  '_route' => 'pim_enrich_variant_group_create',);
                }

                // pim_enrich_variant_group_edit
                if (preg_match('#^/enrich/variant\\-group/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_variant_group_edit')), array (  '_controller' => 'pim_enrich.controller.variant_group:editAction',));
                }

                // pim_enrich_variant_group_remove
                if (preg_match('#^/enrich/variant\\-group/(?P<id>\\d+)/remove$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_pim_enrich_variant_group_remove;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_variant_group_remove')), array (  '_controller' => 'pim_enrich.controller.variant_group:removeAction',));
                }
                not_pim_enrich_variant_group_remove:

                // pim_enrich_variant_group_add_attributes
                if (preg_match('#^/enrich/variant\\-group/(?P<id>\\d+)/attributes$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pim_enrich_variant_group_add_attributes;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_variant_group_add_attributes')), array (  '_controller' => 'pim_enrich.controller.variant_group_attribute:addAttributesAction',));
                }
                not_pim_enrich_variant_group_add_attributes:

                // pim_enrich_variant_group_remove_attribute
                if (preg_match('#^/enrich/variant\\-group/(?P<groupId>\\d+)/attribute/(?P<attributeId>\\d+)/remove$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_pim_enrich_variant_group_remove_attribute;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_variant_group_remove_attribute')), array (  '_controller' => 'pim_enrich.controller.variant_group_attribute:removeAttributeAction',));
                }
                not_pim_enrich_variant_group_remove_attribute:

                if (0 === strpos($pathinfo, '/enrich/variant-group/rest')) {
                    // pim_enrich_variant_group_rest_index
                    if ($pathinfo === '/enrich/variant-group/rest') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_pim_enrich_variant_group_rest_index;
                        }

                        return array (  '_controller' => 'pim_enrich.controller.rest.variant_group:indexAction',  '_format' => 'json',  '_route' => 'pim_enrich_variant_group_rest_index',);
                    }
                    not_pim_enrich_variant_group_rest_index:

                    // pim_enrich_variant_group_rest_get
                    if (preg_match('#^/enrich/variant\\-group/rest/(?P<identifier>[a-zA-Z0-9_]+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_pim_enrich_variant_group_rest_get;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_variant_group_rest_get')), array (  '_controller' => 'pim_enrich.controller.rest.variant_group:getAction',  '_format' => 'json',));
                    }
                    not_pim_enrich_variant_group_rest_get:

                }

            }

            if (0 === strpos($pathinfo, '/enrich/group')) {
                // pim_enrich_group_index
                if (0 === strpos($pathinfo, '/enrich/group/') && preg_match('#^/enrich/group/(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_group_index')), array (  '_controller' => 'pim_enrich.controller.group:indexAction',  '_format' => 'html',));
                }

                // pim_enrich_group_create
                if ($pathinfo === '/enrich/group/create') {
                    return array (  '_controller' => 'pim_enrich.controller.group:createAction',  '_route' => 'pim_enrich_group_create',);
                }

                // pim_enrich_group_edit
                if (preg_match('#^/enrich/group/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_group_edit')), array (  '_controller' => 'pim_enrich.controller.group:editAction',));
                }

                // pim_enrich_group_remove
                if (preg_match('#^/enrich/group/(?P<id>\\d+)/remove$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_pim_enrich_group_remove;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_group_remove')), array (  '_controller' => 'pim_enrich.controller.group:removeAction',));
                }
                not_pim_enrich_group_remove:

                // pim_enrich_group_history
                if (preg_match('#^/enrich/group/(?P<id>\\d+)/history(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_group_history')), array (  '_controller' => 'pim_enrich.controller.group:historyAction',  '_format' => 'html',));
                }

                if (0 === strpos($pathinfo, '/enrich/group/rest')) {
                    // pim_enrich_group_rest_index
                    if ($pathinfo === '/enrich/group/rest') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_pim_enrich_group_rest_index;
                        }

                        return array (  '_controller' => 'pim_enrich.controller.rest.group:indexAction',  '_format' => 'json',  '_route' => 'pim_enrich_group_rest_index',);
                    }
                    not_pim_enrich_group_rest_index:

                    // pim_enrich_group_rest_get
                    if (preg_match('#^/enrich/group/rest/(?P<identifier>[a-zA-Z0-9_]+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_pim_enrich_group_rest_get;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_group_rest_get')), array (  '_controller' => 'pim_enrich.controller.rest.group:getAction',  '_format' => 'json',));
                    }
                    not_pim_enrich_group_rest_get:

                    // pim_enrich_group_rest_list_products
                    if (preg_match('#^/enrich/group/rest/(?P<identifier>[a-zA-Z0-9_]+)/products$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_pim_enrich_group_rest_list_products;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_group_rest_list_products')), array (  '_controller' => 'pim_enrich.controller.rest.group:listProductsAction',  '_format' => 'json',));
                    }
                    not_pim_enrich_group_rest_list_products:

                }

            }

        }

        if (0 === strpos($pathinfo, '/configuration/association-type')) {
            // pim_enrich_associationtype_index
            if (0 === strpos($pathinfo, '/configuration/association-type/') && preg_match('#^/configuration/association\\-type/(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_associationtype_index')), array (  '_controller' => 'pim_enrich.controller.association_type:indexAction',  '_format' => 'html',));
            }

            // pim_enrich_associationtype_create
            if ($pathinfo === '/configuration/association-type/create') {
                return array (  '_controller' => 'pim_enrich.controller.association_type:createAction',  '_route' => 'pim_enrich_associationtype_create',);
            }

            // pim_enrich_associationtype_edit
            if (preg_match('#^/configuration/association\\-type/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_associationtype_edit')), array (  '_controller' => 'pim_enrich.controller.association_type:editAction',));
            }

            // pim_enrich_associationtype_remove
            if (preg_match('#^/configuration/association\\-type/(?P<id>\\d+)/remove$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_pim_enrich_associationtype_remove;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_associationtype_remove')), array (  '_controller' => 'pim_enrich.controller.association_type:removeAction',));
            }
            not_pim_enrich_associationtype_remove:

            // pim_enrich_associationtype_rest_index
            if (0 === strpos($pathinfo, '/configuration/association-type/rest') && preg_match('#^/configuration/association\\-type/rest(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_pim_enrich_associationtype_rest_index;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_associationtype_rest_index')), array (  '_controller' => 'pim_enrich.controller.rest.association_type:indexAction',  '_format' => 'json',));
            }
            not_pim_enrich_associationtype_rest_index:

        }

        if (0 === strpos($pathinfo, '/media')) {
            // pim_enrich_media_show
            if (0 === strpos($pathinfo, '/media/show') && preg_match('#^/media/show/(?P<filename>[^/]++)(?:/(?P<filter>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_pim_enrich_media_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_media_show')), array (  '_controller' => 'pim_enrich.controller.file:showAction',  'filter' => NULL,));
            }
            not_pim_enrich_media_show:

            if (0 === strpos($pathinfo, '/media/d')) {
                // pim_enrich_media_download
                if (0 === strpos($pathinfo, '/media/download') && preg_match('#^/media/download/(?P<filename>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pim_enrich_media_download;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_media_download')), array (  '_controller' => 'pim_enrich.controller.file:downloadAction',  'filter' => NULL,));
                }
                not_pim_enrich_media_download:

                // pim_enrich_default_thumbnail
                if (0 === strpos($pathinfo, '/media/default-thumbnail') && preg_match('#^/media/default\\-thumbnail/(?P<mimeType>[a-z-]+/[a-z0-9.-]+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pim_enrich_default_thumbnail;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_default_thumbnail')), array (  '_controller' => 'pim_enrich.controller.file:defaultThumbnailAction',  'filter' => 'thumbnail',));
                }
                not_pim_enrich_default_thumbnail:

            }

        }

        if (0 === strpos($pathinfo, '/configuration/group-type')) {
            // pim_enrich_grouptype_index
            if (0 === strpos($pathinfo, '/configuration/group-type/') && preg_match('#^/configuration/group\\-type/(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_grouptype_index')), array (  '_controller' => 'pim_enrich.controller.group_type:indexAction',  '_format' => 'html',));
            }

            // pim_enrich_grouptype_create
            if ($pathinfo === '/configuration/group-type/create') {
                return array (  '_controller' => 'pim_enrich.controller.group_type:createAction',  '_route' => 'pim_enrich_grouptype_create',);
            }

            // pim_enrich_grouptype_edit
            if (preg_match('#^/configuration/group\\-type/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_grouptype_edit')), array (  '_controller' => 'pim_enrich.controller.group_type:editAction',));
            }

            // pim_enrich_grouptype_remove
            if (preg_match('#^/configuration/group\\-type/(?P<id>\\d+)/remove$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_pim_enrich_grouptype_remove;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_grouptype_remove')), array (  '_controller' => 'pim_enrich.controller.group_type:removeAction',));
            }
            not_pim_enrich_grouptype_remove:

        }

        if (0 === strpos($pathinfo, '/enrich/sequential_edit')) {
            // pim_enrich_mass_edit_action_sequential_edit
            if (rtrim($pathinfo, '/') === '/enrich/sequential_edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_pim_enrich_mass_edit_action_sequential_edit;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'pim_enrich_mass_edit_action_sequential_edit');
                }

                return array (  '_controller' => 'pim_enrich.controller.sequential_edit:sequentialEditAction',  '_route' => 'pim_enrich_mass_edit_action_sequential_edit',);
            }
            not_pim_enrich_mass_edit_action_sequential_edit:

            // pim_enrich_mass_edit_action_sequential_edit_get
            if (0 === strpos($pathinfo, '/enrich/sequential_edit/get') && preg_match('#^/enrich/sequential_edit/get(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_pim_enrich_mass_edit_action_sequential_edit_get;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_mass_edit_action_sequential_edit_get')), array (  '_controller' => 'pim_enrich.controller.sequential_edit:getAction',  '_format' => 'json',));
            }
            not_pim_enrich_mass_edit_action_sequential_edit_get:

        }

        if (0 === strpos($pathinfo, '/job')) {
            // pim_enrich_job_tracker_index
            if (0 === strpos($pathinfo, '/job/') && preg_match('#^/job/(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_job_tracker_index')), array (  '_controller' => 'pim_enrich.controller.job_tracker:indexAction',  '_format' => 'html',));
            }

            // pim_enrich_job_tracker_download_log
            if (preg_match('#^/job/(?P<id>\\d+)/download$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_job_tracker_download_log')), array (  '_controller' => 'pim_enrich.controller.job_tracker:downloadLogFileAction',));
            }

            // pim_enrich_job_tracker_show
            if (0 === strpos($pathinfo, '/job/show') && preg_match('#^/job/show/(?P<id>\\d+)(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_job_tracker_show')), array (  '_controller' => 'pim_enrich.controller.job_tracker:showAction',  '_format' => 'html',));
            }

            // pim_enrich_job_tracker_download_file
            if (preg_match('#^/job/(?P<id>\\d+)/download/(?P<archiver>[^/]++)/(?P<key>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_job_tracker_download_file')), array (  '_controller' => 'pim_enrich.controller.job_tracker:downloadFilesAction',));
            }

        }

        // pim_enrich_measures_rest_index
        if ($pathinfo === '/configuration/measures/rest') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_pim_enrich_measures_rest_index;
            }

            return array (  '_controller' => 'pim_enrich.controller.rest.measures:indexAction',  '_format' => 'json',  '_route' => 'pim_enrich_measures_rest_index',);
        }
        not_pim_enrich_measures_rest_index:

        // pim_enrich_form_extension_rest_index
        if (0 === strpos($pathinfo, '/form/extensions') && preg_match('#^/form/extensions(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_form_extension_rest_index')), array (  '_controller' => 'pim_enrich.controller.rest.form_extension:getAction',  '_format' => 'json',));
        }

        // pim_enrich_media_rest_post
        if ($pathinfo === '/rest/media/') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_pim_enrich_media_rest_post;
            }

            return array (  '_controller' => 'pim_enrich.controller.rest.media:postAction',  '_format' => 'json',  '_route' => 'pim_enrich_media_rest_post',);
        }
        not_pim_enrich_media_rest_post:

        // pim_ui_ajaxentity_list
        if ($pathinfo === '/list.json') {
            return array (  '_controller' => 'pim_ui.controller.ajax_option:listAction',  '_format' => 'json',  '_route' => 'pim_ui_ajaxentity_list',);
        }

        if (0 === strpos($pathinfo, '/rest')) {
            // pim_user_user_rest_get
            if (0 === strpos($pathinfo, '/rest/user') && preg_match('#^/rest/user(?:/(?P<_format>json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_user_user_rest_get')), array (  '_controller' => 'pim_user.controller.user_rest:getAction',  '_format' => 'json',));
            }

            // pim_user_security_rest_get
            if (0 === strpos($pathinfo, '/rest/security') && preg_match('#^/rest/security(?:/(?P<_format>json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_user_security_rest_get')), array (  '_controller' => 'pim_user.controller.security_rest:getAction',  '_format' => 'json',));
            }

        }

        if (0 === strpos($pathinfo, '/spread/export')) {
            // pim_importexport_export_profile_index
            if (0 === strpos($pathinfo, '/spread/export/') && preg_match('#^/spread/export/(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_export_profile_index')), array (  '_controller' => 'pim_import_export.controller.export_profile:indexAction',  '_format' => 'html',));
            }

            // pim_importexport_export_profile_create
            if ($pathinfo === '/spread/export/create') {
                return array (  '_controller' => 'pim_import_export.controller.export_profile:createAction',  '_route' => 'pim_importexport_export_profile_create',);
            }

            // pim_importexport_export_profile_show
            if (preg_match('#^/spread/export/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_export_profile_show')), array (  '_controller' => 'pim_import_export.controller.export_profile:showAction',));
            }

            // pim_importexport_export_profile_edit
            if (preg_match('#^/spread/export/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_export_profile_edit')), array (  '_controller' => 'pim_import_export.controller.export_profile:editAction',));
            }

            // pim_importexport_export_profile_remove
            if (preg_match('#^/spread/export/(?P<id>\\d+)/remove$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_pim_importexport_export_profile_remove;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_export_profile_remove')), array (  '_controller' => 'pim_import_export.controller.export_profile:removeAction',));
            }
            not_pim_importexport_export_profile_remove:

            // pim_importexport_export_profile_report
            if (preg_match('#^/spread/export/(?P<id>\\d+)/reports$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_export_profile_report')), array (  '_controller' => 'pim_import_export.controller.export_profile:reportAction',));
            }

            // pim_importexport_export_profile_launch
            if (preg_match('#^/spread/export/(?P<id>\\d+)/launch$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_export_profile_launch')), array (  '_controller' => 'pim_import_export.controller.export_profile:launchAction',));
            }

        }

        if (0 === strpos($pathinfo, '/collect/import')) {
            // pim_importexport_import_profile_index
            if (0 === strpos($pathinfo, '/collect/import/') && preg_match('#^/collect/import/(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_import_profile_index')), array (  '_controller' => 'pim_import_export.controller.import_profile:indexAction',  '_format' => 'html',));
            }

            // pim_importexport_import_profile_create
            if ($pathinfo === '/collect/import/create') {
                return array (  '_controller' => 'pim_import_export.controller.import_profile:createAction',  '_route' => 'pim_importexport_import_profile_create',);
            }

            // pim_importexport_import_profile_show
            if (preg_match('#^/collect/import/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_import_profile_show')), array (  '_controller' => 'pim_import_export.controller.import_profile:showAction',));
            }

            // pim_importexport_import_profile_edit
            if (preg_match('#^/collect/import/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_import_profile_edit')), array (  '_controller' => 'pim_import_export.controller.import_profile:editAction',));
            }

            // pim_importexport_import_profile_remove
            if (preg_match('#^/collect/import/(?P<id>\\d+)/remove$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_pim_importexport_import_profile_remove;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_import_profile_remove')), array (  '_controller' => 'pim_import_export.controller.import_profile:removeAction',));
            }
            not_pim_importexport_import_profile_remove:

            // pim_importexport_import_profile_report
            if (preg_match('#^/collect/import/(?P<id>\\d+)/reports$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_import_profile_report')), array (  '_controller' => 'pim_import_export.controller.import_profile:reportAction',));
            }

            // pim_importexport_import_profile_launch
            if (preg_match('#^/collect/import/(?P<id>\\d+)/launch$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_import_profile_launch')), array (  '_controller' => 'pim_import_export.controller.import_profile:launchAction',));
            }

            // pim_importexport_import_profile_launch_upload
            if (preg_match('#^/collect/import/(?P<id>\\d+)/launch\\-upload$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_import_profile_launch_upload')), array (  '_controller' => 'pim_import_export.controller.import_profile:launchUploadedAction',));
            }

            if (0 === strpos($pathinfo, '/collect/import_execution')) {
                // pim_importexport_import_execution_index
                if (0 === strpos($pathinfo, '/collect/import_execution/') && preg_match('#^/collect/import_execution/(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_import_execution_index')), array (  '_controller' => 'pim_import_export.controller.import_execution:indexAction',  '_format' => 'html',));
                }

                // pim_importexport_import_execution_download_log
                if (preg_match('#^/collect/import_execution/(?P<id>\\d+)/download$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_import_execution_download_log')), array (  '_controller' => 'pim_import_export.controller.import_execution:downloadLogFileAction',));
                }

                // pim_importexport_import_execution_show
                if (preg_match('#^/collect/import_execution/(?P<id>\\d+)(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_import_execution_show')), array (  '_controller' => 'pim_import_export.controller.import_execution:showAction',  '_format' => 'html',));
                }

                // pim_importexport_import_execution_download_file
                if (preg_match('#^/collect/import_execution/(?P<id>\\d+)/download/(?P<archiver>[^/]++)/(?P<key>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_import_execution_download_file')), array (  '_controller' => 'pim_import_export.controller.import_execution:downloadFilesAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/spread/export_execution')) {
            // pim_importexport_export_execution_index
            if (0 === strpos($pathinfo, '/spread/export_execution/') && preg_match('#^/spread/export_execution/(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_export_execution_index')), array (  '_controller' => 'pim_import_export.controller.export_execution:indexAction',  '_format' => 'html',));
            }

            // pim_importexport_export_execution_download_log
            if (preg_match('#^/spread/export_execution/(?P<id>\\d+)/download$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_export_execution_download_log')), array (  '_controller' => 'pim_import_export.controller.export_execution:downloadLogFileAction',));
            }

            // pim_importexport_export_execution_show
            if (preg_match('#^/spread/export_execution/(?P<id>\\d+)(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_export_execution_show')), array (  '_controller' => 'pim_import_export.controller.export_execution:showAction',  '_format' => 'html',));
            }

            // pim_importexport_export_execution_download_file
            if (preg_match('#^/spread/export_execution/(?P<id>\\d+)/download/(?P<archiver>[^/]++)/(?P<key>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_export_execution_download_file')), array (  '_controller' => 'pim_import_export.controller.export_execution:downloadFilesAction',));
            }

        }

        // oro_api_get_product
        if (0 === strpos($pathinfo, '/api/rest/products') && preg_match('#^/api/rest/products/(?P<identifier>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_oro_api_get_product;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_product')), array (  '_controller' => 'Pim\\Bundle\\WebServiceBundle\\Controller\\Rest\\ProductController::getAction',  '_format' => 'json',));
        }
        not_oro_api_get_product:

        if (0 === strpos($pathinfo, '/comment')) {
            // pim_comment_comment_create
            if ($pathinfo === '/comment/create') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_pim_comment_comment_create;
                }

                return array (  '_controller' => 'pim_comment.controller.comment:createAction',  '_route' => 'pim_comment_comment_create',);
            }
            not_pim_comment_comment_create:

            // pim_comment_comment_reply
            if ($pathinfo === '/comment/reply') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_pim_comment_comment_reply;
                }

                return array (  '_controller' => 'pim_comment.controller.comment:replyAction',  '_route' => 'pim_comment_comment_reply',);
            }
            not_pim_comment_comment_reply:

            // pim_comment_comment_delete
            if (preg_match('#^/comment/(?P<id>\\d+)/remove$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_pim_comment_comment_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_comment_comment_delete')), array (  '_controller' => 'pim_comment.controller.comment:deleteAction',));
            }
            not_pim_comment_comment_delete:

        }

        // pim_pdf_generator_download_product_pdf
        if (0 === strpos($pathinfo, '/enrich/product') && preg_match('#^/enrich/product/(?P<id>[0-9a-f]+)/download\\-pdf$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_pim_pdf_generator_download_product_pdf;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_pdf_generator_download_product_pdf')), array (  '_controller' => 'pim_pdf_generator.controller.product:downloadPdfAction',));
        }
        not_pim_pdf_generator_download_product_pdf:

        if (0 === strpos($pathinfo, '/notification')) {
            // pim_notification_notification_list
            if ($pathinfo === '/notification/list') {
                return array (  '_controller' => 'pim_notification.controller.notification:listAction',  '_format' => 'json',  '_route' => 'pim_notification_notification_list',);
            }

            // pim_notification_notification_count_unread
            if ($pathinfo === '/notification/count_unread') {
                return array (  '_controller' => 'pim_notification.controller.notification:countUnreadAction',  '_format' => 'json',  '_route' => 'pim_notification_notification_count_unread',);
            }

            // pim_notification_notification_mark_viewed
            if (0 === strpos($pathinfo, '/notification/mark_viewed') && preg_match('#^/notification/mark_viewed(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pim_notification_notification_mark_viewed;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_notification_notification_mark_viewed')), array (  '_controller' => 'pim_notification.controller.notification:markAsViewedAction',  '_format' => 'json',  'id' => NULL,));
            }
            not_pim_notification_notification_mark_viewed:

            // pim_notification_notification_remove
            if (0 === strpos($pathinfo, '/notification/remove') && preg_match('#^/notification/remove/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_pim_notification_notification_remove;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_notification_notification_remove')), array (  '_controller' => 'pim_notification.controller.notification:removeAction',  '_format' => 'json',));
            }
            not_pim_notification_notification_remove:

        }

        // pim_reference_data_configuration_rest_get
        if (rtrim($pathinfo, '/') === '/rest/reference-data-configuration') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_pim_reference_data_configuration_rest_get;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pim_reference_data_configuration_rest_get');
            }

            return array (  '_controller' => 'pim_reference_data.controller.configuration_rest:indexAction',  '_route' => 'pim_reference_data_configuration_rest_get',);
        }
        not_pim_reference_data_configuration_rest_get:

        // oro_default
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'oro_default');
            }

            return array (  'template' => 'PimDashboardBundle:Dashboard:index.html.twig',  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  '_route' => 'oro_default',);
        }

        // oro_config_configuration_system
        if (0 === strpos($pathinfo, '/system') && preg_match('#^/system(?:/(?P<activeGroup>[^/]++)(?:/(?P<activeSubGroup>[^/]++))?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_config_configuration_system')), array (  '_controller' => 'Oro\\Bundle\\ConfigBundle\\Controller\\ConfigurationController::systemAction',  'activeGroup' => NULL,  'activeSubGroup' => NULL,));
        }

        if (0 === strpos($pathinfo, '/datagrid')) {
            // oro_datagrid_index
            if (preg_match('#^/datagrid/(?P<gridName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_datagrid_index')), array (  '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\GridController::getAction',));
            }

            // oro_datagrid_mass_action
            if (preg_match('#^/datagrid/(?P<gridName>[^/]++)/massAction/(?P<actionName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_datagrid_mass_action')), array (  '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\GridController::massActionAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_delete_navigationitems_id
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/navigationitems/(?P<type>[^/]++)/ids/(?P<itemId>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_navigationitems_id;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_navigationitems_id')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\NavigationItemController::deleteIdAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_navigationitems_id:

            // oro_api_get_navigationitems
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/navigationitems/(?P<type>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_navigationitems;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_navigationitems')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\NavigationItemController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_navigationitems:

            // oro_api_post_navigationitems
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/navigationitems/(?P<type>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_navigationitems;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_navigationitems')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\NavigationItemController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_navigationitems:

            // oro_api_put_navigationitems_id
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/navigationitems/(?P<type>[^/]++)/ids/(?P<itemId>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_navigationitems_id;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_navigationitems_id')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\NavigationItemController::putIdAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_navigationitems_id:

            // oro_api_delete_pagestate
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/pagestates/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_pagestate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_pagestate')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_pagestate:

            // oro_api_get_pagestate
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/pagestates/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_pagestate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_pagestate')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_pagestate:

            // oro_api_get_pagestate_checkid
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/pagestate/checkid(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_pagestate_checkid;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_pagestate_checkid')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::getCheckidAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_pagestate_checkid:

            // oro_api_get_pagestates
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/pagestates(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_pagestates;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_pagestates')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_pagestates:

            // oro_api_post_pagestate
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/pagestate(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_pagestate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_pagestate')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_pagestate:

            // oro_api_put_pagestate
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/pagestates/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_pagestate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_pagestate')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_pagestate:

        }

        // oro_pinbar_help
        if ($pathinfo === '/pinbar/help') {
            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroNavigationBundle:Pinbar:help.html.twig',  '_route' => 'oro_pinbar_help',);
        }

        // oro_translation_jstranslation
        if (0 === strpos($pathinfo, '/js/translation') && preg_match('#^/js/translation/(?P<_locale>[^/\\.]++)\\.js$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_translation_jstranslation')), array (  '_controller' => 'oro_translation.controller:indexAction',));
        }

        if (0 === strpos($pathinfo, '/user')) {
            if (0 === strpos($pathinfo, '/user/group')) {
                // oro_user_group_create
                if ($pathinfo === '/user/group/create') {
                    return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\GroupController::createAction',  '_route' => 'oro_user_group_create',);
                }

                // oro_user_group_update
                if (0 === strpos($pathinfo, '/user/group/update') && preg_match('#^/user/group/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_group_update')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\GroupController::updateAction',  'id' => 0,));
                }

                // oro_user_group_index
                if (preg_match('#^/user/group(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_group_index')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\GroupController::indexAction',  '_format' => 'html',));
                }

                // oro_user_group_delete
                if (0 === strpos($pathinfo, '/user/group/delete') && preg_match('#^/user/group/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_user_group_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_group_delete')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\GroupController::deleteAction',));
                }
                not_oro_user_group_delete:

            }

            // oro_user_reset_request
            if ($pathinfo === '/user/reset-request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_user_reset_request;
                }

                return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ResetController::requestAction',  '_route' => 'oro_user_reset_request',);
            }
            not_oro_user_reset_request:

            // oro_user_reset_send_email
            if ($pathinfo === '/user/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_user_reset_send_email;
                }

                return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ResetController::sendEmailAction',  '_route' => 'oro_user_reset_send_email',);
            }
            not_oro_user_reset_send_email:

            // oro_user_reset_check_email
            if ($pathinfo === '/user/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_user_reset_check_email;
                }

                return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ResetController::checkEmailAction',  '_route' => 'oro_user_reset_check_email',);
            }
            not_oro_user_reset_check_email:

            if (0 === strpos($pathinfo, '/user/r')) {
                // oro_user_reset_reset
                if (0 === strpos($pathinfo, '/user/reset') && preg_match('#^/user/reset/(?P<token>\\w+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_oro_user_reset_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_reset_reset')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ResetController::resetAction',));
                }
                not_oro_user_reset_reset:

                if (0 === strpos($pathinfo, '/user/role')) {
                    // oro_user_role_create
                    if ($pathinfo === '/user/role/create') {
                        return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\RoleController::createAction',  '_route' => 'oro_user_role_create',);
                    }

                    // oro_user_role_update
                    if (0 === strpos($pathinfo, '/user/role/update') && preg_match('#^/user/role/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_role_update')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\RoleController::updateAction',  'id' => 0,));
                    }

                    // oro_user_role_index
                    if (preg_match('#^/user/role(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_role_index')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\RoleController::indexAction',  '_format' => 'html',));
                    }

                    // oro_user_role_delete
                    if (0 === strpos($pathinfo, '/user/role/delete') && preg_match('#^/user/role/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_oro_user_role_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_role_delete')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\RoleController::deleteAction',));
                    }
                    not_oro_user_role_delete:

                }

            }

            if (0 === strpos($pathinfo, '/user/log')) {
                if (0 === strpos($pathinfo, '/user/login')) {
                    // oro_user_security_login
                    if ($pathinfo === '/user/login') {
                        return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'oro_user_security_login',);
                    }

                    // oro_user_security_check
                    if ($pathinfo === '/user/login-check') {
                        return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'oro_user_security_check',);
                    }

                }

                // oro_user_security_logout
                if ($pathinfo === '/user/logout') {
                    return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'oro_user_security_logout',);
                }

            }

            // oro_user_view
            if (0 === strpos($pathinfo, '/user/view') && preg_match('#^/user/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_view')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::viewAction',));
            }

            if (0 === strpos($pathinfo, '/user/profile')) {
                // oro_user_profile_view
                if ($pathinfo === '/user/profile/view') {
                    return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::viewProfileAction',  '_route' => 'oro_user_profile_view',);
                }

                // oro_user_profile_update
                if ($pathinfo === '/user/profile/edit') {
                    return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::updateProfileAction',  '_route' => 'oro_user_profile_update',);
                }

            }

            // oro_user_apigen
            if (0 === strpos($pathinfo, '/user/apigen') && preg_match('#^/user/apigen/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_apigen')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::apigenAction',));
            }

            // oro_user_create
            if ($pathinfo === '/user/create') {
                return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::createAction',  '_route' => 'oro_user_create',);
            }

            // oro_user_update
            if (0 === strpos($pathinfo, '/user/update') && preg_match('#^/user/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_update')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::updateAction',  'id' => 0,));
            }

            // oro_user_index
            if (preg_match('#^/user(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_index')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::indexAction',  '_format' => 'html',));
            }

            // oro_user_user_delete
            if (0 === strpos($pathinfo, '/user/delete') && preg_match('#^/user/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_user_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_user_delete')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::deleteAction',));
            }
            not_oro_user_user_delete:

        }

        // nelmio_api_doc_index
        if (0 === strpos($pathinfo, '/api/doc') && preg_match('#^/api/doc(?:/(?P<view>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_nelmio_api_doc_index;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nelmio_api_doc_index')), array (  '_controller' => 'Nelmio\\ApiDocBundle\\Controller\\ApiDocController::indexAction',  'view' => 'default',));
        }
        not_nelmio_api_doc_index:

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        if (0 === strpos($pathinfo, '/media/cache/resolve')) {
            // liip_imagine_filter_runtime
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter_runtime;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter_runtime')), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',));
            }
            not_liip_imagine_filter_runtime:

            // liip_imagine_filter
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter')), array (  '_controller' => 'liip_imagine.controller:filterAction',));
            }
            not_liip_imagine_filter:

        }

        if (0 === strpos($pathinfo, '/jsfv')) {
            // apy_js_form_validation_unique_entity
            if (0 === strpos($pathinfo, '/jsfv/unique-entity') && preg_match('#^/jsfv/unique\\-entity\\.(?P<_locale>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'apy_js_form_validation_unique_entity')), array (  '_controller' => 'jsfv.controller:uniqueEntityAction',  '_format' => 'json',));
            }

            // apy_js_form_validation_checkmx
            if (0 === strpos($pathinfo, '/jsfv/checkmx') && preg_match('#^/jsfv/checkmx(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'apy_js_form_validation_checkmx')), array (  '_controller' => 'jsfv.controller:checkMxAction',  '_format' => 'json',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
