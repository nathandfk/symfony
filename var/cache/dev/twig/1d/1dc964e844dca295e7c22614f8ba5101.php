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

/* index.html.twig */
class __TwigTemplate_24faef7e152996f55a1dc60438ce7b69 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        // line 1
        $this->loadTemplate("inc/parts/head.html.twig", "index.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("inc/parts/nav.html.twig", "index.html.twig", 2)->display($context);
        // line 3
        echo "
";
        // line 4
        $this->loadTemplate("inc/parts/header.html.twig", "index.html.twig", 4)->display($context);
        // line 5
        $this->loadTemplate("inc/modules/search/popupsearch.html.twig", "index.html.twig", 5)->display($context);
        // line 6
        echo "
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "    <div class=\"alert alert-success\">
        ";
            // line 9
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "    <div class=\"alert alert-error\">
        ";
            // line 14
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
";
        // line 18
        $this->loadTemplate("inc/pages/home/discovery.html.twig", "index.html.twig", 18)->display($context);
        // line 19
        echo "
";
        // line 20
        $this->loadTemplate("inc/pages/home/ideas.html.twig", "index.html.twig", 20)->display($context);
        // line 21
        echo "
";
        // line 22
        $this->loadTemplate("inc/pages/home/why.html.twig", "index.html.twig", 22)->display($context);
        // line 23
        echo "
";
        // line 24
        $this->loadTemplate("inc/pages/home/additional.html.twig", "index.html.twig", 24)->display($context);
        // line 25
        echo "

";
        // line 27
        $this->loadTemplate("inc/parts/footer.html.twig", "index.html.twig", 27)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 27,  106 => 25,  104 => 24,  101 => 23,  99 => 22,  96 => 21,  94 => 20,  91 => 19,  89 => 18,  86 => 17,  77 => 14,  74 => 13,  70 => 12,  61 => 9,  58 => 8,  54 => 7,  51 => 6,  49 => 5,  47 => 4,  44 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'inc/parts/head.html.twig' %}
{% include 'inc/parts/nav.html.twig' %}

{% include 'inc/parts/header.html.twig' %}
{% include 'inc/modules/search/popupsearch.html.twig' %}

{% for message in app.flashes('success') %}
    <div class=\"alert alert-success\">
        {{ message }}
    </div>
{% endfor %}
{% for message in app.flashes('error') %}
    <div class=\"alert alert-error\">
        {{ message }}
    </div>
{% endfor %}

{% include 'inc/pages/home/discovery.html.twig' %}

{% include 'inc/pages/home/ideas.html.twig' %}

{% include 'inc/pages/home/why.html.twig' %}

{% include 'inc/pages/home/additional.html.twig' %}


{% include 'inc/parts/footer.html.twig' %}", "index.html.twig", "/Users/nathandfk/Development/Symfony/final/dsp-project/templates/index.html.twig");
    }
}
