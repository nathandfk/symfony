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

/* inc/pages/users/reservation.html.twig */
class __TwigTemplate_df8a06dd722cfad5ce469c76e5e2b53a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/pages/users/reservation.html.twig"));

        // line 1
        $this->loadTemplate("inc/parts/head.html.twig", "inc/pages/users/reservation.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("inc/parts/nav.html.twig", "inc/pages/users/reservation.html.twig", 2)->display($context);
        // line 3
        echo "<div class=\"atypikhouse-container\">
    <div class=\"dashboard-wrapper my-4\">
        <h1 class=\"c1 size24\">HISTORIQUE</h1>
        <div class=\"navigation-link d-flex gap-1\">
            <a data-checked=\"client\" class=\"click click-success\">Client</a>
            ";
        // line 8
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_HOST")) {
            // line 9
            echo "            <a data-checked=\"host\" class=\"click click-c5\">Hôte</a>
            ";
        }
        // line 11
        echo "        </div>
        
        <div data-selected=\"client\">
            <h2 class=\"size18\">Historique de mes réservations</h2>
            <div class=\"table-wrapper historical-client-wrapper historical-wrapper\"></div>
        </div>
        ";
        // line 17
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_HOST")) {
            // line 18
            echo "        <div data-selected=\"host\" class=\"d-none\">
            <h2 class=\"size18\">Historique de réservation de mes clients</h2>
            <div class=\"table-wrapper historical-host-wrapper historical-wrapper\"></div>
        </div>
        ";
        }
        // line 23
        echo "    </div>
</div>

";
        // line 26
        $this->loadTemplate("inc/parts/footer.html.twig", "inc/pages/users/reservation.html.twig", 26)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/pages/users/reservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 26,  74 => 23,  67 => 18,  65 => 17,  57 => 11,  53 => 9,  51 => 8,  44 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'inc/parts/head.html.twig' %}
{% include 'inc/parts/nav.html.twig' %}
<div class=\"atypikhouse-container\">
    <div class=\"dashboard-wrapper my-4\">
        <h1 class=\"c1 size24\">HISTORIQUE</h1>
        <div class=\"navigation-link d-flex gap-1\">
            <a data-checked=\"client\" class=\"click click-success\">Client</a>
            {% if is_granted('ROLE_HOST') %}
            <a data-checked=\"host\" class=\"click click-c5\">Hôte</a>
            {% endif %}
        </div>
        
        <div data-selected=\"client\">
            <h2 class=\"size18\">Historique de mes réservations</h2>
            <div class=\"table-wrapper historical-client-wrapper historical-wrapper\"></div>
        </div>
        {% if is_granted('ROLE_HOST') %}
        <div data-selected=\"host\" class=\"d-none\">
            <h2 class=\"size18\">Historique de réservation de mes clients</h2>
            <div class=\"table-wrapper historical-host-wrapper historical-wrapper\"></div>
        </div>
        {% endif %}
    </div>
</div>

{% include 'inc/parts/footer.html.twig' %}", "inc/pages/users/reservation.html.twig", "/Users/nathandfk/Development/Symfony/final/dsp-project/templates/inc/pages/users/reservation.html.twig");
    }
}
