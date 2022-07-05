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

/* inc/modules/search/popupsearch.html.twig */
class __TwigTemplate_1ce1b3d87e28b8bd7809db60e0f96436 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/modules/search/popupsearch.html.twig"));

        // line 1
        echo "<div class=\"popup-search\">
    <div class=\"popup-close-search\">
        <div class=\"popup-closed-search\"></div>
        <span>Fermer</span>
    </div>
    ";
        // line 6
        $this->loadTemplate("inc/modules/search/search.html.twig", "inc/modules/search/popupsearch.html.twig", 6)->display($context);
        // line 7
        echo "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/modules/search/popupsearch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"popup-search\">
    <div class=\"popup-close-search\">
        <div class=\"popup-closed-search\"></div>
        <span>Fermer</span>
    </div>
    {% include 'inc/modules/search/search.html.twig' %}
</div>", "inc/modules/search/popupsearch.html.twig", "/Users/nathandfk/Development/Symfony/atypikhouse/templates/inc/modules/search/popupsearch.html.twig");
    }
}
