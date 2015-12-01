<?php

/* OroLocaleBundle::locale_settings.html.twig */
class __TwigTemplate_240c08572a29b2bbae6dd9691a35e15707652bd157bbeba81e467f3b1f5833c6 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
require(['jquery', 'oro/locale-settings'],
function(\$, localeSettings) {
    ";
        // line 4
        $context["dateTimeFormats"] = array();
        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('oro_locale_dateformat')->getDateTimeFormatterList());
        foreach ($context['_seq'] as $context["_key"] => $context["formatterName"]) {
            // line 6
            echo "        ";
            $context["currentFormats"] = array("date" => $this->env->getExtension('oro_locale_dateformat')->getDateFormat(            // line 7
$context["formatterName"]), "time" => $this->env->getExtension('oro_locale_dateformat')->getTimeFormat(            // line 8
$context["formatterName"]), "datetime" => $this->env->getExtension('oro_locale_dateformat')->getDateTimeFormat(            // line 9
$context["formatterName"]));
            // line 11
            echo "        ";
            $context["dateTimeFormats"] = twig_array_merge((isset($context["dateTimeFormats"]) ? $context["dateTimeFormats"] : null), array($context["formatterName"] => (isset($context["currentFormats"]) ? $context["currentFormats"] : null)));
            // line 12
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formatterName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
    ";
        // line 14
        $context["numberFormatSettings"] = array();
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "decimal", 1 => "percent", 2 => "currency"));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 16
            echo "        ";
            $context["numberFormatSettings"] = twig_array_merge((isset($context["numberFormatSettings"]) ? $context["numberFormatSettings"] : null), array(            // line 17
$context["style"] => array("grouping_size" => $this->env->getExtension('oro_locale_number')->getAttribute("grouping_size",             // line 18
$context["style"]), "grouping_used" => $this->env->getExtension('oro_locale_number')->getAttribute("grouping_used",             // line 19
$context["style"]), "max_fraction_digits" => $this->env->getExtension('oro_locale_number')->getAttribute("max_fraction_digits",             // line 20
$context["style"]), "min_fraction_digits" => $this->env->getExtension('oro_locale_number')->getAttribute("min_fraction_digits",             // line 21
$context["style"]), "negative_prefix" => $this->env->getExtension('oro_locale_number')->getTextAttribute("negative_prefix",             // line 23
$context["style"]), "negative_suffix" => $this->env->getExtension('oro_locale_number')->getTextAttribute("negative_suffix",             // line 24
$context["style"]), "positive_prefix" => $this->env->getExtension('oro_locale_number')->getTextAttribute("positive_prefix",             // line 25
$context["style"]), "positive_suffix" => $this->env->getExtension('oro_locale_number')->getTextAttribute("positive_suffix",             // line 26
$context["style"]), "currency_code" => $this->env->getExtension('oro_locale_number')->getTextAttribute("currency_code",             // line 27
$context["style"]), "padding_character" => $this->env->getExtension('oro_locale_number')->getTextAttribute("padding_character",             // line 28
$context["style"]), "decimal_separator_symbol" => $this->env->getExtension('oro_locale_number')->getSymbol("decimal_separator_symbol",             // line 30
$context["style"]), "grouping_separator_symbol" => $this->env->getExtension('oro_locale_number')->getSymbol("grouping_separator_symbol",             // line 31
$context["style"]), "monetary_separator_symbol" => $this->env->getExtension('oro_locale_number')->getSymbol("monetary_separator_symbol",             // line 32
$context["style"]), "monetary_grouping_separator_symbol" => $this->env->getExtension('oro_locale_number')->getSymbol("monetary_grouping_separator_symbol",             // line 33
$context["style"]), "currency_symbol" => $this->env->getExtension('oro_locale_number')->getSymbol("currency_symbol",             // line 34
$context["style"]), "zero_digit_symbol" => $this->env->getExtension('oro_locale_number')->getSymbol("zero_digit_symbol",             // line 35
$context["style"]))));
            // line 38
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
    ";
        // line 40
        $context["localeConfigurationClass"] = "\\Oro\\Bundle\\LocaleBundle\\DependencyInjection\\Configuration::";
        // line 41
        echo "    ";
        $context["defaults"] = array("locale" => twig_constant((        // line 42
(isset($context["localeConfigurationClass"]) ? $context["localeConfigurationClass"] : null) . "DEFAULT_LOCALE")), "language" => twig_constant((        // line 43
(isset($context["localeConfigurationClass"]) ? $context["localeConfigurationClass"] : null) . "DEFAULT_LANGUAGE")), "country" => twig_constant((        // line 44
(isset($context["localeConfigurationClass"]) ? $context["localeConfigurationClass"] : null) . "DEFAULT_COUNTRY")), "currency" => twig_constant((        // line 45
(isset($context["localeConfigurationClass"]) ? $context["localeConfigurationClass"] : null) . "DEFAULT_CURRENCY")));
        // line 47
        echo "
    ";
        // line 48
        $context["settings"] = array("locale" => call_user_func_array($this->env->getFunction('oro_locale')->getCallable(), array()), "language" => call_user_func_array($this->env->getFunction('oro_language')->getCallable(), array()), "country" => call_user_func_array($this->env->getFunction('oro_country')->getCallable(), array()), "currency" => call_user_func_array($this->env->getFunction('oro_currency')->getCallable(), array()), "timezone" => call_user_func_array($this->env->getFunction('oro_timezone')->getCallable(), array()), "timezone_offset" => $this->env->getExtension('oro_locale')->getTimeZoneOffset(), "format_address_by_address_country" => call_user_func_array($this->env->getFunction('oro_format_address_by_address_country')->getCallable(), array()), "format" => array("datetime" =>         // line 57
(isset($context["dateTimeFormats"]) ? $context["dateTimeFormats"] : null), "number" =>         // line 58
(isset($context["numberFormatSettings"]) ? $context["numberFormatSettings"] : null)), "calendar" => array("dow" => array("wide" => $this->env->getExtension('oro_locale_calendar')->getDayOfWeekNames("wide"), "abbreviated" => $this->env->getExtension('oro_locale_calendar')->getDayOfWeekNames("abbreviated"), "short" => $this->env->getExtension('oro_locale_calendar')->getDayOfWeekNames("short"), "narrow" => $this->env->getExtension('oro_locale_calendar')->getDayOfWeekNames("narrow")), "months" => array("wide" => $this->env->getExtension('oro_locale_calendar')->getMonthNames("wide"), "abbreviated" => $this->env->getExtension('oro_locale_calendar')->getMonthNames("abbreviated"), "narrow" => $this->env->getExtension('oro_locale_calendar')->getMonthNames("narrow")), "first_dow" => $this->env->getExtension('oro_locale_calendar')->getFirstDayOfWeek()));
        // line 75
        echo "
    var defaults = ";
        // line 76
        echo twig_jsonencode_filter((isset($context["defaults"]) ? $context["defaults"] : null));
        echo ";
    var settings = ";
        // line 77
        echo twig_jsonencode_filter((isset($context["settings"]) ? $context["settings"] : null));
        echo ";

    localeSettings.extendDefaults(defaults);
    localeSettings.extendSettings(settings);
});
</script>
";
    }

    public function getTemplateName()
    {
        return "OroLocaleBundle::locale_settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 77,  104 => 76,  101 => 75,  99 => 58,  98 => 57,  97 => 48,  94 => 47,  92 => 45,  91 => 44,  90 => 43,  89 => 42,  87 => 41,  85 => 40,  82 => 39,  76 => 38,  74 => 35,  73 => 34,  72 => 33,  71 => 32,  70 => 31,  69 => 30,  68 => 28,  67 => 27,  66 => 26,  65 => 25,  64 => 24,  63 => 23,  62 => 21,  61 => 20,  60 => 19,  59 => 18,  58 => 17,  56 => 16,  51 => 15,  49 => 14,  46 => 13,  40 => 12,  37 => 11,  35 => 9,  34 => 8,  33 => 7,  31 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* <script type="text/javascript">*/
/* require(['jquery', 'oro/locale-settings'],*/
/* function($, localeSettings) {*/
/*     {% set dateTimeFormats = {} %}*/
/*     {% for formatterName in oro_datetime_formatter_list() %}*/
/*         {% set currentFormats = {*/
/*             'date': oro_date_format(formatterName),*/
/*             'time': oro_time_format(formatterName),*/
/*             'datetime': oro_datetime_format(formatterName),*/
/*         } %}*/
/*         {% set dateTimeFormats = dateTimeFormats|merge({ (formatterName) : currentFormats }) %}*/
/*     {% endfor %}*/
/* */
/*     {% set numberFormatSettings = {} %}*/
/*     {% for style in ['decimal', 'percent', 'currency'] %}*/
/*         {% set numberFormatSettings = numberFormatSettings|merge({*/
/*             (style): {*/
/*                 'grouping_size':       oro_locale_number_attribute('grouping_size', style),*/
/*                 'grouping_used':       oro_locale_number_attribute('grouping_used', style),*/
/*                 'max_fraction_digits': oro_locale_number_attribute('max_fraction_digits', style),*/
/*                 'min_fraction_digits': oro_locale_number_attribute('min_fraction_digits', style),*/
/* */
/*                 'negative_prefix':   oro_locale_number_text_attribute('negative_prefix', style),*/
/*                 'negative_suffix':   oro_locale_number_text_attribute('negative_suffix', style),*/
/*                 'positive_prefix':   oro_locale_number_text_attribute('positive_prefix', style),*/
/*                 'positive_suffix':   oro_locale_number_text_attribute('positive_suffix', style),*/
/*                 'currency_code':     oro_locale_number_text_attribute('currency_code', style),*/
/*                 'padding_character': oro_locale_number_text_attribute('padding_character', style),*/
/* */
/*                 'decimal_separator_symbol':           oro_locale_number_symbol('decimal_separator_symbol', style),*/
/*                 'grouping_separator_symbol':          oro_locale_number_symbol('grouping_separator_symbol', style),*/
/*                 'monetary_separator_symbol':          oro_locale_number_symbol('monetary_separator_symbol', style),*/
/*                 'monetary_grouping_separator_symbol': oro_locale_number_symbol('monetary_grouping_separator_symbol', style),*/
/*                 'currency_symbol':                    oro_locale_number_symbol('currency_symbol', style),*/
/*                 'zero_digit_symbol':                  oro_locale_number_symbol('zero_digit_symbol', style),*/
/*             }*/
/*         }) %}*/
/*     {% endfor %}*/
/* */
/*     {% set localeConfigurationClass = '\\Oro\\Bundle\\LocaleBundle\\DependencyInjection\\Configuration::' %}*/
/*     {% set defaults = {*/
/*         'locale':   constant(localeConfigurationClass ~ 'DEFAULT_LOCALE'),*/
/*         'language': constant(localeConfigurationClass ~ 'DEFAULT_LANGUAGE'),*/
/*         'country':  constant(localeConfigurationClass ~ 'DEFAULT_COUNTRY'),*/
/*         'currency': constant(localeConfigurationClass ~ 'DEFAULT_CURRENCY')*/
/*     } %}*/
/* */
/*     {% set settings = {*/
/*         'locale':   oro_locale(),*/
/*         'language': oro_language(),*/
/*         'country':  oro_country(),*/
/*         'currency': oro_currency(),*/
/*         'timezone': oro_timezone(),*/
/*         'timezone_offset': oro_timezone_offset(),*/
/*         'format_address_by_address_country': oro_format_address_by_address_country(),*/
/*         'format': {*/
/*             'datetime': dateTimeFormats,*/
/*             'number': numberFormatSettings*/
/*         },*/
/*         'calendar': {*/
/*             'dow': {*/
/*                 'wide':        oro_calendar_day_of_week_names('wide'),*/
/*                 'abbreviated': oro_calendar_day_of_week_names('abbreviated'),*/
/*                 'short':       oro_calendar_day_of_week_names('short'),*/
/*                 'narrow':      oro_calendar_day_of_week_names('narrow'),*/
/*             },*/
/*             'months': {*/
/*                 'wide':        oro_calendar_month_names('wide'),*/
/*                 'abbreviated': oro_calendar_month_names('abbreviated'),*/
/*                 'narrow':      oro_calendar_month_names('narrow'),*/
/*             },*/
/*             'first_dow': oro_calendar_first_day_of_week()*/
/*         }*/
/*     } %}*/
/* */
/*     var defaults = {{ defaults|json_encode|raw }};*/
/*     var settings = {{ settings|json_encode|raw }};*/
/* */
/*     localeSettings.extendDefaults(defaults);*/
/*     localeSettings.extendSettings(settings);*/
/* });*/
/* </script>*/
/* */
