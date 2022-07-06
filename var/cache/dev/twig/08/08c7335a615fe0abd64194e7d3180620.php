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

/* inc/parts/carousel.html.twig */
class __TwigTemplate_c433a39edee46786176ec3f9d0a9adb7 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/parts/carousel.html.twig"));

        // line 1
        echo "<header class=\"atypikhouse-container\">
    <div class=\"atypikhouse-carousel\">
        <div class=\"carousel-item\">
            <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "/assets/pictures/carousel-ath1.jpeg\" alt=\"AtypikHouse image mise en avant, logement insolite\">
        </div>
    </div>
</header>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/parts/carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"atypikhouse-container\">
    <div class=\"atypikhouse-carousel\">
        <div class=\"carousel-item\">
            <img src=\"{{ ath_link }}/assets/pictures/carousel-ath1.jpeg\" alt=\"AtypikHouse image mise en avant, logement insolite\">
        </div>
    </div>
</header>", "inc/parts/carousel.html.twig", "/Users/nathandfk/Development/Symfony/final/dsp-project/templates/inc/parts/carousel.html.twig");
    }
}
