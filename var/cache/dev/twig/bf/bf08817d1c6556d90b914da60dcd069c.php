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

/* inc/pages/home/why.html.twig */
class __TwigTemplate_019f706b396f45f28adc19251b3a89f0 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/pages/home/why.html.twig"));

        // line 1
        echo "<section class=\"atypikhouse-section atypikhouse-section-why my-6\">
    <div class=\"section-why-form\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 120));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 4
            echo "        <span></span>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </div>
    <div class=\"atypikhouse-container section-why-content d-grid grid-lg-2\">
        <div class=\"section-why-col1 atypikhouse-grid-form1 mr-auto\">
            <div class=\"card-picture border-solid-2 c1\"></div>
            <div class=\"card-picture\">
                <img src=\"assets/pictures/pic-ath2.jpg\" alt=\"Image découverte habitations insolites\">
            </div>
        </div>
        <div class=\"section-why-col2 d-flex jc-space-between gap-3 flex-dir-col\">
            <div class=\"section-title\">
                <h2 class=\"c1 my-1\">POURQUOI CHOISIR AtypikHouse ?</h2>
            </div>
            <div class=\"section-why-text\">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat.</p>
            </div>
            <div class=\"section-why-quality d-grid grid-lg-4\">
                <div class=\"text-center\">
                    <i class=\"fas fa-solid fa-credit-card size24\"></i>
                    <h4>Paiement sécurisé</h4>
                </div>
                <div class=\"text-center\">
                    <i class=\"fas fa-home size24\"></i>
                    <h4>Logement sécurisé</h4>
                </div>
                <div class=\"text-center\">
                    <i class=\"fas fa-solid fa-umbrella size24\"></i>
                    <h4>Assurance</h4>
                </div>
                <div class=\"text-center\">
                    <i class=\"fas fa-solid fa-calendar-day size24\"></i>
                    <h4>Réservation instantanée</h4>
                </div>
            </div>
        </div>
    </div>
</section>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/pages/home/why.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 6,  48 => 4,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"atypikhouse-section atypikhouse-section-why my-6\">
    <div class=\"section-why-form\">
        {% for i in 0..120 %}
        <span></span>
        {% endfor %}
    </div>
    <div class=\"atypikhouse-container section-why-content d-grid grid-lg-2\">
        <div class=\"section-why-col1 atypikhouse-grid-form1 mr-auto\">
            <div class=\"card-picture border-solid-2 c1\"></div>
            <div class=\"card-picture\">
                <img src=\"assets/pictures/pic-ath2.jpg\" alt=\"Image découverte habitations insolites\">
            </div>
        </div>
        <div class=\"section-why-col2 d-flex jc-space-between gap-3 flex-dir-col\">
            <div class=\"section-title\">
                <h2 class=\"c1 my-1\">POURQUOI CHOISIR AtypikHouse ?</h2>
            </div>
            <div class=\"section-why-text\">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat.</p>
            </div>
            <div class=\"section-why-quality d-grid grid-lg-4\">
                <div class=\"text-center\">
                    <i class=\"fas fa-solid fa-credit-card size24\"></i>
                    <h4>Paiement sécurisé</h4>
                </div>
                <div class=\"text-center\">
                    <i class=\"fas fa-home size24\"></i>
                    <h4>Logement sécurisé</h4>
                </div>
                <div class=\"text-center\">
                    <i class=\"fas fa-solid fa-umbrella size24\"></i>
                    <h4>Assurance</h4>
                </div>
                <div class=\"text-center\">
                    <i class=\"fas fa-solid fa-calendar-day size24\"></i>
                    <h4>Réservation instantanée</h4>
                </div>
            </div>
        </div>
    </div>
</section>", "inc/pages/home/why.html.twig", "/Users/nathandfk/Development/Symfony/final/dsp-project/templates/inc/pages/home/why.html.twig");
    }
}
