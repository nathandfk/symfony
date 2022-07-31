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

/* inc/parts/footer.html.twig */
class __TwigTemplate_8304b452774a671e89e024f03c5627f6 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/parts/footer.html.twig"));

        // line 1
        echo "    <footer class=\"footer bg-c5 py-3\" id=\"footer\">
        <div class=\"atypikhouse-container\">
            <div class=\"footer-line-1\">
                <div class=\"d-grid grid-lg-4 grid-md-4 grid-sm-4\">
                    <div>
                        <p><i class=\"fas fa-credit-card\"></i> Paiement sécurisé</p>
                        <p><i class=\"fas fa-clock\"></i> Réservation 24H/24 - 7J/7</p>
                        <p><i class=\"fas fa-headset\"></i> Service client</p>
                        <p>Traveller’s Choice 2022</p>
                        <div class=\"w-7r\">
                            <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "/assets/pictures/logo-ath1.png\" alt=\"AtypikHouse Logo\">
                        </div>
                    </div>
                    <div>
                        <h2 class=\"ff-m\">Membres</h2>
                        ";
        // line 16
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16)) {
            // line 17
            echo "                        <p><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">S'inscrire</a></p>
                        <p><a href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">Mode hôte</a></p>
                        ";
        } else {
            // line 20
            echo "                        <p><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("host");
            echo "\">Mode hôte</a></p>
                        ";
        }
        // line 22
        echo "                    </div>
                    <div>
                        <h2 class=\"ff-m\">Assistance</h2>
                        <p><a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a></p>
                        <p><a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historical");
        echo "\">Annuler une réservation</a></p>
                        <p><a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact", ["object" => "problème"]);
        echo "\">Signaler un problème</a></p>
                    </div>
                    <div>
                        <h2 class=\"ff-m\">Autres</h2>
                        <p><a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">A propos</a></p>
                        <p><a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitations");
        echo "\">Réservation</a></p>
                    </div>
                </div>
            </div>
            <div class=\"footer-line-2\">
                <div class=\"d-flex gap-1 m-auto w-max-content\">
                    <i class=\"fab fa-cc-visa size28\"></i>
                    <i class=\"fab fa-cc-amex size28\"></i>
                    <i class=\"fab fa-cc-mastercard size28\"></i>
                </div>
                <hr class=\"my-3\">
                <div class=\"d-flex jc-space-between subfooter\">
                    <div>© 2022 AtypikHouse
                    <div>Projet étudiant fictif pour lequel aucun réel achat</div>
                    <div>ou aucune réservation ne pourrait être effectué.</div>
                    </div>
                    <div class=\"d-flex gap-1\">
                        <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("legalnotice");
        echo "\">Mentions légales</a>
                        <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cgv");
        echo "\">CGV</a>
                        <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cgu");
        echo "\">CGU</a>
                        <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("faq");
        echo "\">FAQ</a>
                    </div>
                    <div class=\"d-flex gap-1\">
                        <a href=\"\"><i class=\"fab fa-facebook-f size22\"></i></a>
                        <a href=\"\"><i class=\"fab fa-tiktok size22\"></i></a>
                        <a href=\"\"><i class=\"fab fa-instagram size22\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class=\"append-script\"></div>

    </body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/parts/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 52,  130 => 51,  126 => 50,  122 => 49,  102 => 32,  98 => 31,  91 => 27,  87 => 26,  83 => 25,  78 => 22,  72 => 20,  67 => 18,  62 => 17,  60 => 16,  52 => 11,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <footer class=\"footer bg-c5 py-3\" id=\"footer\">
        <div class=\"atypikhouse-container\">
            <div class=\"footer-line-1\">
                <div class=\"d-grid grid-lg-4 grid-md-4 grid-sm-4\">
                    <div>
                        <p><i class=\"fas fa-credit-card\"></i> Paiement sécurisé</p>
                        <p><i class=\"fas fa-clock\"></i> Réservation 24H/24 - 7J/7</p>
                        <p><i class=\"fas fa-headset\"></i> Service client</p>
                        <p>Traveller’s Choice 2022</p>
                        <div class=\"w-7r\">
                            <img src=\"{{ ath_link }}/assets/pictures/logo-ath1.png\" alt=\"AtypikHouse Logo\">
                        </div>
                    </div>
                    <div>
                        <h2 class=\"ff-m\">Membres</h2>
                        {% if not app.user %}
                        <p><a href=\"{{ path('register') }}\">S'inscrire</a></p>
                        <p><a href=\"{{ path('register') }}\">Mode hôte</a></p>
                        {% else %}
                        <p><a href=\"{{ path('host') }}\">Mode hôte</a></p>
                        {% endif %}
                    </div>
                    <div>
                        <h2 class=\"ff-m\">Assistance</h2>
                        <p><a href=\"{{ path('contact') }}\">Contact</a></p>
                        <p><a href=\"{{ path('historical') }}\">Annuler une réservation</a></p>
                        <p><a href=\"{{ path('contact', {'object': 'problème'}) }}\">Signaler un problème</a></p>
                    </div>
                    <div>
                        <h2 class=\"ff-m\">Autres</h2>
                        <p><a href=\"{{ path('about') }}\">A propos</a></p>
                        <p><a href=\"{{ path('app_habitations') }}\">Réservation</a></p>
                    </div>
                </div>
            </div>
            <div class=\"footer-line-2\">
                <div class=\"d-flex gap-1 m-auto w-max-content\">
                    <i class=\"fab fa-cc-visa size28\"></i>
                    <i class=\"fab fa-cc-amex size28\"></i>
                    <i class=\"fab fa-cc-mastercard size28\"></i>
                </div>
                <hr class=\"my-3\">
                <div class=\"d-flex jc-space-between subfooter\">
                    <div>© 2022 AtypikHouse
                    <div>Projet étudiant fictif pour lequel aucun réel achat</div>
                    <div>ou aucune réservation ne pourrait être effectué.</div>
                    </div>
                    <div class=\"d-flex gap-1\">
                        <a href=\"{{ path('legalnotice') }}\">Mentions légales</a>
                        <a href=\"{{ path('cgv') }}\">CGV</a>
                        <a href=\"{{ path('cgu') }}\">CGU</a>
                        <a href=\"{{ path('faq') }}\">FAQ</a>
                    </div>
                    <div class=\"d-flex gap-1\">
                        <a href=\"\"><i class=\"fab fa-facebook-f size22\"></i></a>
                        <a href=\"\"><i class=\"fab fa-tiktok size22\"></i></a>
                        <a href=\"\"><i class=\"fab fa-instagram size22\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class=\"append-script\"></div>

    </body>
</html>
", "inc/parts/footer.html.twig", "/Users/nathandfk/Development/Symfony/final/dsp-project/templates/inc/parts/footer.html.twig");
    }
}
