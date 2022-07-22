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

/* inc/pages/home/additional.html.twig */
class __TwigTemplate_dcfd0ab9f0bb6d3782eca6d51d747fa9 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/pages/home/additional.html.twig"));

        // line 1
        echo "<section class=\"atypikhouse-additional-content my-6\">
    <div class=\"atypikhouse-container additional-content-wrapper grid-lg-2\">
        <div class=\"grid-level-3 additional-questions additional-inner\">
            <div id=\"additional-questions-picture\">
                <img src=\"assets/pictures/pic-ath4.jpg\" alt=\"Avez-vous des questions\" class=\"br-20\" loading=\"lazy\">
            </div>
            <div class=\"additional-cover\"></div>
            <div id=\"additional-questions-content\" class=\"c4 as-center\">
                <h2 class=\"size42 ff-sb ml-4\">Des questions ?</h2>
                <a href=\"\" class=\"click click-light-green ml-4 my-3\">Discuter avec nous</a>
            </div>
        </div>


        <div class=\"grid-level-3 additional-questions additional-inner\">
            <div id=\"additional-questions-picture\">
                <img src=\"assets/pictures/pic-ath5.jpg\" alt=\"Avez-vous des questions\" class=\"br-20\" loading=\"lazy\">
            </div>
            <div class=\"additional-cover\"></div>
            <div id=\"additional-questions-content\" class=\"c4 as-start my-3 px-4\">
                <h2 class=\"size42 ff-sb\">Newsletter</h2>
                <p class=\"size20\">Abonnez-vous pour suivre toute l'Actualité de AtypikHouse</p>
                <form class=\"d-flex px-1 br-5\" id=\"newsletter-form\">
                    <input type=\"email\" class=\"size22 ff-r\" placeholder=\"Entrez votre adresse e-mail\" name=\"newsletter\" required>
                    <button class=\"c1 size22 p-1 ff-sb\">OK</button>
                </form>
            </div>
        </div>
    </div>
</section>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/pages/home/additional.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"atypikhouse-additional-content my-6\">
    <div class=\"atypikhouse-container additional-content-wrapper grid-lg-2\">
        <div class=\"grid-level-3 additional-questions additional-inner\">
            <div id=\"additional-questions-picture\">
                <img src=\"assets/pictures/pic-ath4.jpg\" alt=\"Avez-vous des questions\" class=\"br-20\" loading=\"lazy\">
            </div>
            <div class=\"additional-cover\"></div>
            <div id=\"additional-questions-content\" class=\"c4 as-center\">
                <h2 class=\"size42 ff-sb ml-4\">Des questions ?</h2>
                <a href=\"\" class=\"click click-light-green ml-4 my-3\">Discuter avec nous</a>
            </div>
        </div>


        <div class=\"grid-level-3 additional-questions additional-inner\">
            <div id=\"additional-questions-picture\">
                <img src=\"assets/pictures/pic-ath5.jpg\" alt=\"Avez-vous des questions\" class=\"br-20\" loading=\"lazy\">
            </div>
            <div class=\"additional-cover\"></div>
            <div id=\"additional-questions-content\" class=\"c4 as-start my-3 px-4\">
                <h2 class=\"size42 ff-sb\">Newsletter</h2>
                <p class=\"size20\">Abonnez-vous pour suivre toute l'Actualité de AtypikHouse</p>
                <form class=\"d-flex px-1 br-5\" id=\"newsletter-form\">
                    <input type=\"email\" class=\"size22 ff-r\" placeholder=\"Entrez votre adresse e-mail\" name=\"newsletter\" required>
                    <button class=\"c1 size22 p-1 ff-sb\">OK</button>
                </form>
            </div>
        </div>
    </div>
</section>", "inc/pages/home/additional.html.twig", "/Users/nathandfk/Development/Symfony/final/dsp-project/templates/inc/pages/home/additional.html.twig");
    }
}
