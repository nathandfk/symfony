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

/* inc/parts/nav.html.twig */
class __TwigTemplate_135bc80e39eb244706ca067be5d49726 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/parts/nav.html.twig"));

        // line 1
        echo "<nav class=\"navbar\" id=\"navbar\">
    <div class=\"atypikhouse-navbar-wrapper atypikhouse-container\">
        <div class=\"atypikhouse-navbar-display\"> 
            <div class=\"atypikhouse-logo\">
                <a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "/assets/pictures/logo-ath4.png\"></a>
            </div>
            <ul class=\"atypikhouse-menu\">
                <li><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitations");
        echo "\">Habitations</a></li>
                <li><a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("host");
        echo "\">Mode hôte</a></li>
                <li><a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a></li>
                <li><a class=\"fas fa-search size18 popup-open-search\" href=\"javascript:void(0);\"></a></li>
            </ul>
            <div class=\"atypikhouse-account\">
                <ul class=\"atypikhouse-account-menu\" id=\"atypikhouse-account-menu\">
                    ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15)) {
            // line 16
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
            echo "\" class=\"navbar-account\"><div class=\"navbar-user-rounded\"><span class=\"fas fa-user\"></span></div> <span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "firstName", [], "any", false, false, false, 16), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "lastName", [], "any", false, false, false, 16), "html", null, true);
            echo "</span></a>
                    ";
        } else {
            // line 18
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" class=\"navbar-account\"><div class=\"navbar-user-rounded\"><span class=\"fas fa-user\"></span></div> <span>Mon compte</span></a>
                    ";
        }
        // line 20
        echo "                    <ul class=\"atypikhouse-account-submenu\">
                        ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21)) {
            // line 22
            echo "                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
            echo "\">Mon compte</a></li>
                        <li><a href=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dwelling_favorite");
            echo "\">Favoris</a></li>
                        <li><a href=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payment");
            echo "\">Paiement</a></li>
                        <li><a href=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message");
            echo "\">Messages</a></li>
                        <li><a href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historical");
            echo "\">Historique</a></li>
                        <li class=\"click-brown\"><a href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a></li>
                        ";
        } else {
            // line 29
            echo "                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Connexion</a></li>
                        <li><a href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">Inscription</a></li>
                        ";
        }
        // line 32
        echo "                    </ul>
                </ul>
                <div class=\"fas fa-bars size24 click click-c5 open-responsive-menu\"></div>
            </div>
        </div>
    </div>
    <div class=\"responsive-menu-cover close-responsive-menu menu-cover-dismiss d-none\"></div>
    <div class=\"responsive-menu responsive-menu-dismiss\">
        <div class=\"fas fa-times size24 click click-c5 close-responsive-menu btn-close-menu\"></div>
        <ul>
            <li><a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitations");
        echo "\">Habitations</a></li>
            <li><a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("host");
        echo "\">Mode hôte</a></li>
            <li><a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a></li>
            <li><a class=\"fas fa-search size18 popup-open-search\" href=\"javascript:void(0);\"></a></li>
            ";
        // line 46
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46)) {
            // line 47
            echo "            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dwelling_favorite");
            echo "\">Favoris</a></li>
            <li><a href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payment");
            echo "\">Paiement</a></li>
            <li><a href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message");
            echo "\">Messages</a></li>
            <li><a href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historical");
            echo "\">Historique</a></li>
            <li><a href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
            echo "\">Mon compte</a></li>
            <li class=\"click-brown\"><a href=\"";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a></li>
            ";
        } else {
            // line 54
            echo "            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Connexion</a></li>
            <li><a href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">Inscription</a></li>
            ";
        }
        // line 57
        echo "        </ul>
    </div>
</nav>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/parts/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 57,  187 => 55,  182 => 54,  177 => 52,  173 => 51,  169 => 50,  165 => 49,  161 => 48,  156 => 47,  154 => 46,  149 => 44,  145 => 43,  141 => 42,  129 => 32,  124 => 30,  119 => 29,  114 => 27,  110 => 26,  106 => 25,  102 => 24,  98 => 23,  93 => 22,  91 => 21,  88 => 20,  82 => 18,  72 => 16,  70 => 15,  62 => 10,  58 => 9,  54 => 8,  46 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar\" id=\"navbar\">
    <div class=\"atypikhouse-navbar-wrapper atypikhouse-container\">
        <div class=\"atypikhouse-navbar-display\"> 
            <div class=\"atypikhouse-logo\">
                <a href=\"{{ path('app_index') }}\"><img src=\"{{ ath_link }}/assets/pictures/logo-ath4.png\"></a>
            </div>
            <ul class=\"atypikhouse-menu\">
                <li><a href=\"{{ path('app_habitations') }}\">Habitations</a></li>
                <li><a href=\"{{ path('host') }}\">Mode hôte</a></li>
                <li><a href=\"{{ path('contact') }}\">Contact</a></li>
                <li><a class=\"fas fa-search size18 popup-open-search\" href=\"javascript:void(0);\"></a></li>
            </ul>
            <div class=\"atypikhouse-account\">
                <ul class=\"atypikhouse-account-menu\" id=\"atypikhouse-account-menu\">
                    {% if app.user %}
                    <a href=\"{{ path('dashboard') }}\" class=\"navbar-account\"><div class=\"navbar-user-rounded\"><span class=\"fas fa-user\"></span></div> <span>{{ app.user.firstName }} {{ app.user.lastName }}</span></a>
                    {% else %}
                    <a href=\"{{ path('login') }}\" class=\"navbar-account\"><div class=\"navbar-user-rounded\"><span class=\"fas fa-user\"></span></div> <span>Mon compte</span></a>
                    {% endif %}
                    <ul class=\"atypikhouse-account-submenu\">
                        {% if app.user %}
                        <li><a href=\"{{ path('dashboard') }}\">Mon compte</a></li>
                        <li><a href=\"{{ path('dwelling_favorite') }}\">Favoris</a></li>
                        <li><a href=\"{{ path('payment') }}\">Paiement</a></li>
                        <li><a href=\"{{ path('message') }}\">Messages</a></li>
                        <li><a href=\"{{ path('historical') }}\">Historique</a></li>
                        <li class=\"click-brown\"><a href=\"{{ path('app_logout') }}\">Déconnexion</a></li>
                        {% else %}
                        <li><a href=\"{{ path('login') }}\">Connexion</a></li>
                        <li><a href=\"{{ path('register') }}\">Inscription</a></li>
                        {% endif %}
                    </ul>
                </ul>
                <div class=\"fas fa-bars size24 click click-c5 open-responsive-menu\"></div>
            </div>
        </div>
    </div>
    <div class=\"responsive-menu-cover close-responsive-menu menu-cover-dismiss d-none\"></div>
    <div class=\"responsive-menu responsive-menu-dismiss\">
        <div class=\"fas fa-times size24 click click-c5 close-responsive-menu btn-close-menu\"></div>
        <ul>
            <li><a href=\"{{ path('app_habitations') }}\">Habitations</a></li>
            <li><a href=\"{{ path('host') }}\">Mode hôte</a></li>
            <li><a href=\"{{ path('contact') }}\">Contact</a></li>
            <li><a class=\"fas fa-search size18 popup-open-search\" href=\"javascript:void(0);\"></a></li>
            {% if app.user %}
            <li><a href=\"{{ path('dwelling_favorite') }}\">Favoris</a></li>
            <li><a href=\"{{ path('payment') }}\">Paiement</a></li>
            <li><a href=\"{{ path('message') }}\">Messages</a></li>
            <li><a href=\"{{ path('historical') }}\">Historique</a></li>
            <li><a href=\"{{ path('dashboard') }}\">Mon compte</a></li>
            <li class=\"click-brown\"><a href=\"{{ path('app_logout') }}\">Déconnexion</a></li>
            {% else %}
            <li><a href=\"{{ path('login') }}\">Connexion</a></li>
            <li><a href=\"{{ path('register') }}\">Inscription</a></li>
            {% endif %}
        </ul>
    </div>
</nav>", "inc/parts/nav.html.twig", "/Users/nathandfk/Development/Symfony/final/dsp-project/templates/inc/parts/nav.html.twig");
    }
}
