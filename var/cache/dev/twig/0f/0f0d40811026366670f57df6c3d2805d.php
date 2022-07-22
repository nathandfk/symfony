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

/* inc/pages/product/list-dwelling.html.twig */
class __TwigTemplate_fcc128e33c8a63bd750bdd8f7e2d3261 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/pages/product/list-dwelling.html.twig"));

        // line 1
        echo "<h2>Habitations</h2>
<input type=\"text\" id='host-search-dwelling' placeholder=\"Recherche un habitat par son titre ou le nom de la ville\">
<div class=\"habitation-list\">
</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/pages/product/list-dwelling.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2>Habitations</h2>
<input type=\"text\" id='host-search-dwelling' placeholder=\"Recherche un habitat par son titre ou le nom de la ville\">
<div class=\"habitation-list\">
</div>", "inc/pages/product/list-dwelling.html.twig", "/Users/nathandfk/Development/Symfony/final/dsp-project/templates/inc/pages/product/list-dwelling.html.twig");
    }
}
