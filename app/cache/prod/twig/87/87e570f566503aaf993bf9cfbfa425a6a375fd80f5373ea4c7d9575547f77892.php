<?php

/* PimNotificationBundle:Default:notifications.html.twig */
class __TwigTemplate_17871ed93ae9796869dba29c58fe625df6aafd2a63a3b794d860aff145f13865 extends Twig_Template
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
        echo "<li class=\"dropdown\" id=\"header-notification-widget\"></li>

<script type=\"text/javascript\">
    require(
        ['jquery', 'pim/notifications', 'oro/mediator'],
        function (\$, Notifications, mediator) {
            \$(function() {
                Notifications.init({
                    imgUrl: '";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pimimportexport/images/loading.gif"), "html", null, true);
        echo "',
                    loadingText: '";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Loading ..."), "html", null, true);
        echo "',
                    noNotificationsMessage: '";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("pim_notification.no_notifications"), "html", null, true);
        echo "',
                    markAsReadMessage: '";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("pim_notification.mark_all_as_read"), "html", null, true);
        echo "',
                    unreadCount: ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('pim_notification_extension')->countNotifications(), "html", null, true);
        echo "
                });
            });
        }
    );
</script>
";
    }

    public function getTemplateName()
    {
        return "PimNotificationBundle:Default:notifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  41 => 12,  37 => 11,  33 => 10,  29 => 9,  19 => 1,);
    }
}
/* <li class="dropdown" id="header-notification-widget"></li>*/
/* */
/* <script type="text/javascript">*/
/*     require(*/
/*         ['jquery', 'pim/notifications', 'oro/mediator'],*/
/*         function ($, Notifications, mediator) {*/
/*             $(function() {*/
/*                 Notifications.init({*/
/*                     imgUrl: '{{ asset('bundles/pimimportexport/images/loading.gif') }}',*/
/*                     loadingText: '{{ 'Loading ...'|trans }}',*/
/*                     noNotificationsMessage: '{{ 'pim_notification.no_notifications'|trans }}',*/
/*                     markAsReadMessage: '{{ 'pim_notification.mark_all_as_read'|trans }}',*/
/*                     unreadCount: {{ notification_count() }}*/
/*                 });*/
/*             });*/
/*         }*/
/*     );*/
/* </script>*/
/* */
