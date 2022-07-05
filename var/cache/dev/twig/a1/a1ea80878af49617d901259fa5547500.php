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

/* inc/modules/search/search.html.twig */
class __TwigTemplate_dc03fa4350aed700c5cc492305b03cd4 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/modules/search/search.html.twig"));

        // line 1
        echo "<div class=\"module-search-wrapper atypikhouse-container p-1 my-1 br-5\" id=\"module-search-wrapper\">
    <div class=\"module-search-inner atypikhouse-search-dispo grid-lg-4\">
        <div class=\"search-place\">
            Où allez-vous ?
            <label class=\"d-block c1\"></label>
        </div>
        <div class=\"search-arrival-date p-relative target-data cp\">
            Date d'arrivée
            <label class=\"d-block c1\"></label>
            <div class=\"superpose d-none calendar general-calendar\">";
        // line 10
        echo (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 10, $this->source); })());
        echo "</div>
        </div>
        <div class=\"search-departure-date p-relative target-data cp\" id=\"search-departure-date\">
            Date de départ
            <label class=\"d-block c1\"></label>
            <div class=\"superpose d-none calendar general-calendar\"></div>
        </div>
        <div class=\"nb-travelers p-relative target-data cp\">
            Qui sont les voyageurs ?
            <label class=\"d-block c1\"></label>
            <ul class=\"superpose d-none travelers\">
                <li>Adulte <input type=\"number\" min=\"1\" max=\"12\" value=\"1\" id=\"traveler-adult\"></li>
                <li>Enfant <input type=\"number\" min=\"0\" max=\"5\" value=\"0\" id=\"traveler-children\"></li>
                <li>Bébé <input type=\"number\" min=\"0\" max=\"5\" value=\"0\" id=\"traveler-baby\"></li>
                <li>Animaux <input type=\"number\" min=\"0\" max=\"3\" value=\"0\" id=\"traveler-animal\"></li>
            </ul>
        </div>
    </div>
    <button class=\"click click-rounded click-success br-50 btn-search fas fa-search size18\">
    </button>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/modules/search/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"module-search-wrapper atypikhouse-container p-1 my-1 br-5\" id=\"module-search-wrapper\">
    <div class=\"module-search-inner atypikhouse-search-dispo grid-lg-4\">
        <div class=\"search-place\">
            Où allez-vous ?
            <label class=\"d-block c1\"></label>
        </div>
        <div class=\"search-arrival-date p-relative target-data cp\">
            Date d'arrivée
            <label class=\"d-block c1\"></label>
            <div class=\"superpose d-none calendar general-calendar\">{{ calendar | raw }}</div>
        </div>
        <div class=\"search-departure-date p-relative target-data cp\" id=\"search-departure-date\">
            Date de départ
            <label class=\"d-block c1\"></label>
            <div class=\"superpose d-none calendar general-calendar\"></div>
        </div>
        <div class=\"nb-travelers p-relative target-data cp\">
            Qui sont les voyageurs ?
            <label class=\"d-block c1\"></label>
            <ul class=\"superpose d-none travelers\">
                <li>Adulte <input type=\"number\" min=\"1\" max=\"12\" value=\"1\" id=\"traveler-adult\"></li>
                <li>Enfant <input type=\"number\" min=\"0\" max=\"5\" value=\"0\" id=\"traveler-children\"></li>
                <li>Bébé <input type=\"number\" min=\"0\" max=\"5\" value=\"0\" id=\"traveler-baby\"></li>
                <li>Animaux <input type=\"number\" min=\"0\" max=\"3\" value=\"0\" id=\"traveler-animal\"></li>
            </ul>
        </div>
    </div>
    <button class=\"click click-rounded click-success br-50 btn-search fas fa-search size18\">
    </button>
</div>
", "inc/modules/search/search.html.twig", "/Users/nathandfk/Development/Symfony/atypikhouse/templates/inc/modules/search/search.html.twig");
    }
}
