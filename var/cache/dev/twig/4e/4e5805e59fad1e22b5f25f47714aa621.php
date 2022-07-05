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

/* inc/pages/home/ideas.html.twig */
class __TwigTemplate_d7e23860b15c3565ee6abe20b0a310aa extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/pages/home/ideas.html.twig"));

        // line 1
        echo "<section class=\"atypikhouse-section atypikhouse-container my-6\">
    <div class=\"atypikhouse-section-display picture-radius\">
        <div class=\"section-title\">
            <h2 class=\"c1 my-1\">DES IDÉES POUR VOTRE PROCHAINE RÉSERVATION</h2>
        </div>
        <div class=\"section-display grid-lg-4 grid-md-4 grid-sm-4\">
            <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitations", ["place" => 1, "id" => 10]), "html", null, true);
        echo "\" class=\"section-display-child\">
                <div class=\"section-child-picture img\">
                    <img src=\"assets/pictures/pic-ath1.jpg\" alt=\"AtypikHouse image d'une idée de la prochaine réservation\">
                </div>
                <div class=\"display-child-text\">
                    <h4 class=\"child-text-city size22\">Théoule-sur-Mer</h4>
                    <h5 class=\"child-text-country size22 ff-m c1\">France</h5>
                </div>
            </a>
            
            <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitations");
        echo "\" class=\"section-display-child\">
                <div class=\"section-child-picture img\">
                    <img src=\"assets/pictures/pic-ath2.jpg\" alt=\"AtypikHouse image d'une idée de la prochaine réservation\">
                </div>
                <div class=\"display-child-text\">
                    <h4 class=\"child-text-city size22\">Théoule-sur-Mer</h4>
                    <h5 class=\"child-text-country size22 ff-m c1\">France</h5>
                </div>
            </a>

            <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitations");
        echo "\" class=\"section-display-child\">
                <div class=\"section-child-picture img\">
                    <img src=\"assets/pictures/pic-ath3.jpg\" alt=\"AtypikHouse image d'une idée de la prochaine réservation\">
                </div>
                <div class=\"display-child-text\">
                    <h4 class=\"child-text-city size22\">Théoule-sur-Mer</h4>
                    <h5 class=\"child-text-country size22 ff-m c1\">France</h5>
                </div>
            </a>

            <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitations");
        echo "\" class=\"section-display-child\">
                <div class=\"section-child-picture img\">
                    <img src=\"assets/pictures/pic-ath2.jpg\" alt=\"AtypikHouse image d'une idée de la prochaine réservation\">
                </div>
                <div class=\"display-child-text\">
                    <h4 class=\"child-text-city size22\">Théoule-sur-Mer</h4>
                    <h5 class=\"child-text-country size22 ff-m c1\">France</h5>
                </div>
            </a>
        </div>
    </div>
</section>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/pages/home/ideas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 37,  74 => 27,  61 => 17,  48 => 7,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"atypikhouse-section atypikhouse-container my-6\">
    <div class=\"atypikhouse-section-display picture-radius\">
        <div class=\"section-title\">
            <h2 class=\"c1 my-1\">DES IDÉES POUR VOTRE PROCHAINE RÉSERVATION</h2>
        </div>
        <div class=\"section-display grid-lg-4 grid-md-4 grid-sm-4\">
            <a href=\"{{ path('app_habitations', {'place':1, 'id':10}) }}\" class=\"section-display-child\">
                <div class=\"section-child-picture img\">
                    <img src=\"assets/pictures/pic-ath1.jpg\" alt=\"AtypikHouse image d'une idée de la prochaine réservation\">
                </div>
                <div class=\"display-child-text\">
                    <h4 class=\"child-text-city size22\">Théoule-sur-Mer</h4>
                    <h5 class=\"child-text-country size22 ff-m c1\">France</h5>
                </div>
            </a>
            
            <a href=\"{{ path('app_habitations') }}\" class=\"section-display-child\">
                <div class=\"section-child-picture img\">
                    <img src=\"assets/pictures/pic-ath2.jpg\" alt=\"AtypikHouse image d'une idée de la prochaine réservation\">
                </div>
                <div class=\"display-child-text\">
                    <h4 class=\"child-text-city size22\">Théoule-sur-Mer</h4>
                    <h5 class=\"child-text-country size22 ff-m c1\">France</h5>
                </div>
            </a>

            <a href=\"{{ path('app_habitations') }}\" class=\"section-display-child\">
                <div class=\"section-child-picture img\">
                    <img src=\"assets/pictures/pic-ath3.jpg\" alt=\"AtypikHouse image d'une idée de la prochaine réservation\">
                </div>
                <div class=\"display-child-text\">
                    <h4 class=\"child-text-city size22\">Théoule-sur-Mer</h4>
                    <h5 class=\"child-text-country size22 ff-m c1\">France</h5>
                </div>
            </a>

            <a href=\"{{ path('app_habitations') }}\" class=\"section-display-child\">
                <div class=\"section-child-picture img\">
                    <img src=\"assets/pictures/pic-ath2.jpg\" alt=\"AtypikHouse image d'une idée de la prochaine réservation\">
                </div>
                <div class=\"display-child-text\">
                    <h4 class=\"child-text-city size22\">Théoule-sur-Mer</h4>
                    <h5 class=\"child-text-country size22 ff-m c1\">France</h5>
                </div>
            </a>
        </div>
    </div>
</section>", "inc/pages/home/ideas.html.twig", "/Users/nathandfk/Development/Symfony/atypikhouse/templates/inc/pages/home/ideas.html.twig");
    }
}
