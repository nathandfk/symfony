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

/* inc/pages/simple-pages/contact.html.twig */
class __TwigTemplate_4308bc3c5118cca31bfb19ff214928d8 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/pages/simple-pages/contact.html.twig"));

        // line 1
        $this->loadTemplate("inc/parts/head.html.twig", "inc/pages/simple-pages/contact.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("inc/parts/nav.html.twig", "inc/pages/simple-pages/contact.html.twig", 2)->display($context);
        // line 3
        echo "
";
        // line 4
        if (((isset($context["carousel"]) || array_key_exists("carousel", $context) ? $context["carousel"] : (function () { throw new RuntimeError('Variable "carousel" does not exist.', 4, $this->source); })()) == true)) {
            // line 5
            $this->loadTemplate("inc/parts/carousel.html.twig", "inc/pages/simple-pages/contact.html.twig", 5)->display($context);
        }
        // line 7
        echo "

<div class=\"atypikhouse-container\">
    <div class=\"page-title\">
        <h1 class=\"text-uppercase c1 size20 ff-r\">";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "</h1>
    </div>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
    <p>Les champs avec un indice (*) sont à renseigner obligatoirement.</p>
    <div class=\"contact-form grid-lg-2 my-4 border-radius-form box-shadow\">
        <div>
            <img src=\"assets/pictures/pic-ath3.jpg\" alt=\"Image du formulaire de contact\"/>
        </div>
        <form class=\"p-2\">
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    <label>Prénom *</label>
                    <input type=\"text\" placeholder=\"Prénom *\" name=\"first-name\" required>
                </div>
                <div class=\"form-group bloc-lg-6\">
                    <label>Nom *</label>
                    <input type=\"text\" placeholder=\"Nom *\" name=\"last-name\" required>
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    <label>Téléphone</label>
                    <input type=\"text\" placeholder=\"Téléphone\" name=\"first-name\">
                </div>
                <div class=\"form-group bloc-lg-6\">
                    <label>E-mail *</label>
                    <input type=\"text\" placeholder=\"E-mail *\" name=\"last-name\" required>
                </div>
            </div>
            
            <div class=\"form-group\">
                <label>Objet *</label>
                <input type=\"text\" placeholder=\"Objet *\" name=\"object\">
            </div>
            <div class=\"form-group\">
                <label>Message *</label>
                <textarea placeholder=\"Message *\" name=\"message\" required></textarea>
            </div>

            <input type=\"submit\" class=\"ml-auto click click-success\" value=\"Envoyer ma demande\">
        </form>
    </div>
</div>


";
        // line 58
        $this->loadTemplate("inc/parts/footer.html.twig", "inc/pages/simple-pages/contact.html.twig", 58)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/pages/simple-pages/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 58,  58 => 11,  52 => 7,  49 => 5,  47 => 4,  44 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'inc/parts/head.html.twig' %}
{% include 'inc/parts/nav.html.twig' %}

{% if carousel == true %}
{% include 'inc/parts/carousel.html.twig' %}
{% endif %}


<div class=\"atypikhouse-container\">
    <div class=\"page-title\">
        <h1 class=\"text-uppercase c1 size20 ff-r\">{{ title }}</h1>
    </div>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
    <p>Les champs avec un indice (*) sont à renseigner obligatoirement.</p>
    <div class=\"contact-form grid-lg-2 my-4 border-radius-form box-shadow\">
        <div>
            <img src=\"assets/pictures/pic-ath3.jpg\" alt=\"Image du formulaire de contact\"/>
        </div>
        <form class=\"p-2\">
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    <label>Prénom *</label>
                    <input type=\"text\" placeholder=\"Prénom *\" name=\"first-name\" required>
                </div>
                <div class=\"form-group bloc-lg-6\">
                    <label>Nom *</label>
                    <input type=\"text\" placeholder=\"Nom *\" name=\"last-name\" required>
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    <label>Téléphone</label>
                    <input type=\"text\" placeholder=\"Téléphone\" name=\"first-name\">
                </div>
                <div class=\"form-group bloc-lg-6\">
                    <label>E-mail *</label>
                    <input type=\"text\" placeholder=\"E-mail *\" name=\"last-name\" required>
                </div>
            </div>
            
            <div class=\"form-group\">
                <label>Objet *</label>
                <input type=\"text\" placeholder=\"Objet *\" name=\"object\">
            </div>
            <div class=\"form-group\">
                <label>Message *</label>
                <textarea placeholder=\"Message *\" name=\"message\" required></textarea>
            </div>

            <input type=\"submit\" class=\"ml-auto click click-success\" value=\"Envoyer ma demande\">
        </form>
    </div>
</div>


{% include 'inc/parts/footer.html.twig' %}", "inc/pages/simple-pages/contact.html.twig", "/Users/nathandfk/Development/Symfony/final/dsp-project/templates/inc/pages/simple-pages/contact.html.twig");
    }
}
