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
<html>
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
        <script src=\"https://js.stripe.com/v3/\"></script>

        ";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "get", [0 => "_route"], "method", false, false, false, 9) == "app_checkout")) {
            // line 10
            echo "


        ";
        }
        // line 14
        echo "
        ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "    </head>
<body>
<div class=\"notification-card\">
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

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "            <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.8.0/dist/leaflet.css\"
            integrity=\"sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==\"
            crossorigin=\"\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "/assets/smacss/base.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "/assets/css/checkout.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "/assets/smacss/layout.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "/assets/smacss/modules.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "/assets/smacss/states.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "/assets/smacss/theme.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "/assets/smacss/responsive.css\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
            <script src=\"https://unpkg.com/leaflet@1.8.0/dist/leaflet.js\"
            integrity=\"sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==\"
            crossorigin=\"\"></script>
            <script type='text/javascript' src='";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "/assets/js/functions.js'></script>
            <script type='text/javascript' src='";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "/assets/js/style.js'></script>
            <script type='text/javascript' src='";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "/assets/js/search.js'></script>
            <script type='text/javascript' src='";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "/assets/js/historical.js'></script>
            <script type='text/javascript' src='";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "/assets/js/users-list.js'></script>
            <script type='text/javascript' src='";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "/assets/js/message.js'></script>
            <script type='text/javascript' src='";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 39, $this->source); })()), "html", null, true);
        echo "/assets/js/settings.js'></script>
            <script type='text/javascript' src='";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "/assets/js/category.js'></script>
            <script type='text/javascript' src='";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "/assets/js/dwellings.js'></script>
            <script src=\"https://kit.fontawesome.com/06fe12cea6.js\"></script>
            <script src='";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "/assets/js/single-product.js' defer></script>
            <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 44, $this->source); })()), "html", null, true);
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
        return array (  203 => 44,  199 => 43,  194 => 41,  190 => 40,  186 => 39,  182 => 38,  178 => 37,  174 => 36,  170 => 35,  166 => 34,  162 => 33,  154 => 29,  147 => 28,  138 => 25,  134 => 24,  130 => 23,  126 => 22,  122 => 21,  118 => 20,  114 => 19,  109 => 16,  102 => 15,  89 => 5,  77 => 46,  75 => 28,  72 => 27,  70 => 15,  67 => 14,  61 => 10,  59 => 9,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}AtypikHouse{% endblock %}</title>
        <link rel=\"icon\" href=\"{{ ath_link }}/assets/pictures/logo-ath1.png\">
        <script src=\"https://js.stripe.com/v3/\"></script>

        {% if app.request.get('_route') == 'app_checkout' %}



        {% endif %}

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
            <script type='text/javascript' src='{{ ath_link }}/assets/js/historical.js'></script>
            <script type='text/javascript' src='{{ ath_link }}/assets/js/users-list.js'></script>
            <script type='text/javascript' src='{{ ath_link }}/assets/js/message.js'></script>
            <script type='text/javascript' src='{{ ath_link }}/assets/js/settings.js'></script>
            <script type='text/javascript' src='{{ ath_link }}/assets/js/category.js'></script>
            <script type='text/javascript' src='{{ ath_link }}/assets/js/dwellings.js'></script>
            <script src=\"https://kit.fontawesome.com/06fe12cea6.js\"></script>
            <script src='{{ ath_link }}/assets/js/single-product.js' defer></script>
            <script src=\"{{ ath_link }}/assets/js/checkout.js\" defer></script>
        {% endblock %}
    </head>
<body>
<div class=\"notification-card\">
    <span class=\"notification-icon size28\"></span>
    <p class=\"notification-msg\"></p>
</div>", "inc/parts/head.html.twig", "/Users/nathandfk/Development/Symfony/final/dsp-project/templates/inc/parts/head.html.twig");
    }
}
