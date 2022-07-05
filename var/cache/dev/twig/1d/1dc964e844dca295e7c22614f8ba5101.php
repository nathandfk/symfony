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
        // line 8
        $this->loadTemplate("inc/pages/home/discovery.html.twig", "index.html.twig", 8)->display($context);
        // line 9
        echo "
";
        // line 10
        $this->loadTemplate("inc/pages/home/ideas.html.twig", "index.html.twig", 10)->display($context);
        // line 11
        echo "
";
        // line 12
        $this->loadTemplate("inc/pages/home/why.html.twig", "index.html.twig", 12)->display($context);
        // line 13
        echo "
";
        // line 14
        $this->loadTemplate("inc/pages/home/additional.html.twig", "index.html.twig", 14)->display($context);
        // line 15
        echo "

";
        // line 17
        $this->loadTemplate("inc/parts/footer.html.twig", "index.html.twig", 17)->display($context);
        
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
        return array (  76 => 17,  72 => 15,  70 => 14,  67 => 13,  65 => 12,  62 => 11,  60 => 10,  57 => 9,  55 => 8,  51 => 6,  49 => 5,  47 => 4,  44 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'inc/parts/head.html.twig' %}
{% include 'inc/parts/nav.html.twig' %}

{% include 'inc/parts/header.html.twig' %}
{% include 'inc/modules/search/popupsearch.html.twig' %}


{% include 'inc/pages/home/discovery.html.twig' %}

{% include 'inc/pages/home/ideas.html.twig' %}

{% include 'inc/pages/home/why.html.twig' %}

{% include 'inc/pages/home/additional.html.twig' %}


{% include 'inc/parts/footer.html.twig' %}", "index.html.twig", "/Users/nathandfk/Development/Symfony/atypikhouse/templates/index.html.twig");
    }
}
