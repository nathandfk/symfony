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

/* inc/parts/header.html.twig */
class __TwigTemplate_974320187308bb00e650632fd21c35a6 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/parts/header.html.twig"));

        // line 1
        echo "<header class=\"atypikhouse-container\">
    <div class=\"atypikhouse-header-inner grid-level-3\">
        <div class=\"header-background-picture\">
            <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "/assets/pictures/pic-ath3.jpg\" alt=\"AtypikHouse image mise en avant, logement insolite\">
        </div>
        <div class=\"header-cover\"></div>
        <div class=\"header-text\">
            <h1 class=\"size38 ff-sb\">Lorem ipsum atypikhouse aezrete dezdez bonjour</h1>
        </div>
    </div>
</header>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/parts/header.html.twig";
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
    <div class=\"atypikhouse-header-inner grid-level-3\">
        <div class=\"header-background-picture\">
            <img src=\"{{ ath_link }}/assets/pictures/pic-ath3.jpg\" alt=\"AtypikHouse image mise en avant, logement insolite\">
        </div>
        <div class=\"header-cover\"></div>
        <div class=\"header-text\">
            <h1 class=\"size38 ff-sb\">Lorem ipsum atypikhouse aezrete dezdez bonjour</h1>
        </div>
    </div>
</header>", "inc/parts/header.html.twig", "/Users/nathandfk/Development/Symfony/atypikhouse/templates/inc/parts/header.html.twig");
    }
}
