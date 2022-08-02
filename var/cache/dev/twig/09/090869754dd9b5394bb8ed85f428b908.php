<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* inc/parts/head.html.twig */
class __TwigTemplate_8f7f1fa24768d6204aa9067b3c2f6120 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/parts/head.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "/assets/pictures/logo-ath1.png\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <script src=\"https://js.stripe.com/v3/\"></script>
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "            <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src=\"https://www.googletagmanager.com/gtag/js?id=G-Z3V1MB9V9Z\"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-Z3V1MB9V9Z');
        </script>
    </head>
<body>
";
        // line 62
        $this->loadTemplate("inc/modules/search/popupsearch.html.twig", "inc/parts/head.html.twig", 62)->display($context);
        // line 63
        echo "<div class=\"notification-card\">
    <span class=\"notification-icon size28\"></span>
    <p class=\"notification-msg\"></p>
</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "AtypikHouse";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.8.0/dist/leaflet.css\"
            integrity=\"sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==\"
            crossorigin=\"\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "/assets/smacss/base.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "/assets/css/checkout.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "/assets/smacss/layout.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "/assets/smacss/modules.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "/assets/smacss/states.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "/assets/smacss/theme.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "/assets/smacss/responsive.css\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
            <script src=\"https://unpkg.com/leaflet@1.8.0/dist/leaflet.js\"
            integrity=\"sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==\"
            crossorigin=\"\"></script>
            <script type='text/javascript' src='";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "/assets/js/functions.js'></script>
            <script type='text/javascript' src='";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "/assets/js/style.js'></script>
            <script type='text/javascript' src='";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "/assets/js/search.js'></script>
            ";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "request", [], "any", false, false, false, 31), "get", [0 => "_route"], "method", false, false, false, 31) == "historical")) {
            // line 32
            echo "            <script type='text/javascript' src='";
            echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 32, $this->source); })()), "html", null, true);
            echo "/assets/js/historical.js'></script>
            ";
        }
        // line 34
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "request", [], "any", false, false, false, 34), "get", [0 => "_route"], "method", false, false, false, 34) == "dashboard")) {
            // line 35
            echo "            <script type='text/javascript' src='";
            echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 35, $this->source); })()), "html", null, true);
            echo "/assets/js/users-list.js'></script>
            ";
        }
        // line 37
        echo "            ";
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "request", [], "any", false, false, false, 37), "get", [0 => "_route"], "method", false, false, false, 37) == "message_selected") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "request", [], "any", false, false, false, 37), "get", [0 => "_route"], "method", false, false, false, 37) == "message_details")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "request", [], "any", false, false, false, 37), "get", [0 => "_route"], "method", false, false, false, 37) == "message_send"))) {
            // line 38
            echo "            <script type='text/javascript' src='";
            echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 38, $this->source); })()), "html", null, true);
            echo "/assets/js/message.js'></script>
            ";
        }
        // line 40
        echo "            <script type='text/javascript' src='";
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "/assets/js/settings.js'></script>
            <script type='text/javascript' src='";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "/assets/js/category.js'></script>
            <script type='text/javascript' src='";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "/assets/js/dwellings.js'></script>
            <script type='text/javascript' src='";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "/assets/js/edit-dwelling.js'></script>
            ";
        // line 44
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "request", [], "any", false, false, false, 44), "get", [0 => "_route"], "method", false, false, false, 44) == "app_index")) {
            // line 45
            echo "            <script type='text/javascript' src='";
            echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 45, $this->source); })()), "html", null, true);
            echo "/assets/js/home.js'></script>
            ";
        }
        // line 47
        echo "            <script src=\"https://kit.fontawesome.com/06fe12cea6.js\"></script>
            <script src='";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "/assets/js/single-product.js' defer></script>
            <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "/assets/js/checkout.js\" defer></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/parts/head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 49,  231 => 48,  228 => 47,  222 => 45,  220 => 44,  216 => 43,  212 => 42,  208 => 41,  203 => 40,  197 => 38,  194 => 37,  188 => 35,  185 => 34,  179 => 32,  177 => 31,  173 => 30,  169 => 29,  165 => 28,  157 => 24,  150 => 23,  141 => 20,  137 => 19,  133 => 18,  129 => 17,  125 => 16,  121 => 15,  117 => 14,  112 => 11,  105 => 10,  92 => 5,  82 => 63,  80 => 62,  67 => 51,  65 => 23,  62 => 22,  60 => 10,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}AtypikHouse{% endblock %}</title>
        <link rel=\"icon\" href=\"{{ ath_link }}/assets/pictures/logo-ath1.png\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <script src=\"https://js.stripe.com/v3/\"></script>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.8.0/dist/leaflet.css\"
            integrity=\"sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==\"
            crossorigin=\"\"/>
            <link rel=\"stylesheet\" href=\"{{ ath_link }}/assets/smacss/base.css\">
            <link rel=\"stylesheet\" href=\"{{ ath_link }}/assets/css/checkout.css\">
            <link rel=\"stylesheet\" href=\"{{ ath_link }}/assets/smacss/layout.css\">
            <link rel=\"stylesheet\" href=\"{{ ath_link }}/assets/smacss/modules.css\">
            <link rel=\"stylesheet\" href=\"{{ ath_link }}/assets/smacss/states.css\">
            <link rel=\"stylesheet\" href=\"{{ ath_link }}/assets/smacss/theme.css\">
            <link rel=\"stylesheet\" href=\"{{ ath_link }}/assets/smacss/responsive.css\">
        {% endblock %}

        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
            <script src=\"https://unpkg.com/leaflet@1.8.0/dist/leaflet.js\"
            integrity=\"sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==\"
            crossorigin=\"\"></script>
            <script type='text/javascript' src='{{ ath_link }}/assets/js/functions.js'></script>
            <script type='text/javascript' src='{{ ath_link }}/assets/js/style.js'></script>
            <script type='text/javascript' src='{{ ath_link }}/assets/js/search.js'></script>
            {% if app.request.get('_route') == 'historical' %}
            <script type='text/javascript' src='{{ ath_link }}/assets/js/historical.js'></script>
            {% endif %}
            {% if app.request.get('_route') == 'dashboard' %}
            <script type='text/javascript' src='{{ ath_link }}/assets/js/users-list.js'></script>
            {% endif %}
            {% if app.request.get('_route') == 'message_selected' or app.request.get('_route') == 'message_details' or app.request.get('_route') == 'message_send' %}
            <script type='text/javascript' src='{{ ath_link }}/assets/js/message.js'></script>
            {% endif %}
            <script type='text/javascript' src='{{ ath_link }}/assets/js/settings.js'></script>
            <script type='text/javascript' src='{{ ath_link }}/assets/js/category.js'></script>
            <script type='text/javascript' src='{{ ath_link }}/assets/js/dwellings.js'></script>
            <script type='text/javascript' src='{{ ath_link }}/assets/js/edit-dwelling.js'></script>
            {% if app.request.get('_route') == 'app_index' %}
            <script type='text/javascript' src='{{ ath_link }}/assets/js/home.js'></script>
            {% endif %}
            <script src=\"https://kit.fontawesome.com/06fe12cea6.js\"></script>
            <script src='{{ ath_link }}/assets/js/single-product.js' defer></script>
            <script src=\"{{ ath_link }}/assets/js/checkout.js\" defer></script>
        {% endblock %}
            <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src=\"https://www.googletagmanager.com/gtag/js?id=G-Z3V1MB9V9Z\"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-Z3V1MB9V9Z');
        </script>
    </head>
<body>
{% include 'inc/modules/search/popupsearch.html.twig' %}
<div class=\"notification-card\">
    <span class=\"notification-icon size28\"></span>
    <p class=\"notification-msg\"></p>
</div>", "inc/parts/head.html.twig", "/Users/nathandfk/Development/Symfony/final/dsp-project/templates/inc/parts/head.html.twig");
    }
}
