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

/* inc/pages/home/discovery.html.twig */
class __TwigTemplate_b4bcbdb83079c0eda460d3d9cdb0eec9 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/pages/home/discovery.html.twig"));

        // line 1
        echo "<main class=\"atypikhouse-main atypikhouse-container my-6\" id=\"atypikhouse-main\">
    <div class=\"atypikhouse-bloc-title\">
        <h2 class=\"my-1\">DÉCOUVREZ</h2>
        <h2 class=\"c1 my-1\">NOS HABITATIONS INSOLITES</h2>
    </div>

    <div class=\"atypikhouse-main-inner d-grid grid-lg-2\">
        <div class=\"atypikhouse-main-col1 d-flex jc-space-between\">
            <div class=\"main-col1-items d-grid grid-lg-2 grid-sm-2\">
                <article>
                    <h3 class=\"size26 ff-m my-2 c1\">Sécurité</h3>
                    <p>This friendly message is coming from atypikhouse</p>
                </article>
                <article>
                    <h3 class=\"size26 ff-m my-2 c1\">Assurance & Garantie</h3>
                    <p>This friendly message is coming from atypikhouse</p>
                </article>
                <article>
                    <h3 class=\"size26 ff-m my-2 c1\">Conformité</h3>
                    <p>This friendly message is coming from atypikhouse</p>
                </article>
                <article>
                    <h3 class=\"size26 ff-m my-2 c1\">Divertissement</h3>
                    <p>This friendly message is coming from atypikhouse</p>
                </article>
            </div>
            <div class=\"main-col1-btn\">
                <a class=\"click click-brown\">Découvrir</a>
            </div>
        </div>
        <div class=\"atypikhouse-main-col2 atypikhouse-grid-form1 ml-auto\">
            <div class=\"card-picture border-solid-2 c1\"></div>
            <div class=\"card-picture\">
                <img src=\"assets/pictures/pic-ath2.jpg\" alt=\"Image découverte habitations insolites\">
            </div>
        </div>
    </div>
</main>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/pages/home/discovery.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<main class=\"atypikhouse-main atypikhouse-container my-6\" id=\"atypikhouse-main\">
    <div class=\"atypikhouse-bloc-title\">
        <h2 class=\"my-1\">DÉCOUVREZ</h2>
        <h2 class=\"c1 my-1\">NOS HABITATIONS INSOLITES</h2>
    </div>

    <div class=\"atypikhouse-main-inner d-grid grid-lg-2\">
        <div class=\"atypikhouse-main-col1 d-flex jc-space-between\">
            <div class=\"main-col1-items d-grid grid-lg-2 grid-sm-2\">
                <article>
                    <h3 class=\"size26 ff-m my-2 c1\">Sécurité</h3>
                    <p>This friendly message is coming from atypikhouse</p>
                </article>
                <article>
                    <h3 class=\"size26 ff-m my-2 c1\">Assurance & Garantie</h3>
                    <p>This friendly message is coming from atypikhouse</p>
                </article>
                <article>
                    <h3 class=\"size26 ff-m my-2 c1\">Conformité</h3>
                    <p>This friendly message is coming from atypikhouse</p>
                </article>
                <article>
                    <h3 class=\"size26 ff-m my-2 c1\">Divertissement</h3>
                    <p>This friendly message is coming from atypikhouse</p>
                </article>
            </div>
            <div class=\"main-col1-btn\">
                <a class=\"click click-brown\">Découvrir</a>
            </div>
        </div>
        <div class=\"atypikhouse-main-col2 atypikhouse-grid-form1 ml-auto\">
            <div class=\"card-picture border-solid-2 c1\"></div>
            <div class=\"card-picture\">
                <img src=\"assets/pictures/pic-ath2.jpg\" alt=\"Image découverte habitations insolites\">
            </div>
        </div>
    </div>
</main>", "inc/pages/home/discovery.html.twig", "/Users/nathandfk/Development/Symfony/final/dsp-project/templates/inc/pages/home/discovery.html.twig");
    }
}
