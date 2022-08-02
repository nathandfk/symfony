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

/* inc/pages/users/login.html.twig */
class __TwigTemplate_b835485a15dc8aa86d5464cbfe2cc44e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/pages/users/login.html.twig"));

        // line 1
        $this->loadTemplate("inc/parts/head.html.twig", "inc/pages/users/login.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("inc/parts/nav.html.twig", "inc/pages/users/login.html.twig", 2)->display($context);
        // line 3
        echo "
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 5
            echo "    <div class=\"alert alert-success\">
        ";
            // line 6
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "    <div class=\"alert alert-error\">
        ";
            // line 11
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "<div class=\"atypikhouse-container my-6\">
    <div class=\"page-title\">
        <h1 class=\"text-uppercase c1 size20 ff-r\">";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "</h1>
    </div>
    <div class=\"user-wrapper my-3\">
        <div class=\"user-login form-style\">
            <h2>Se connecter</h2>
            <form class=\"user-login-form\" method=\"post\">
                <div class=\"form-group\">
                    <label for=\"username\">E-mail</label>
                    <input type=\"email\" name=\"email\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "\" id=\"username\" placeholder=\"Adresse électronique\" required/>
                </div>
                <div class=\"form-group\">
                    <label for=\"password\">Mot de passe</label>
                    <input type=\"password\" name=\"password\" id=\"password\" placeholder=\"Mot de passe\" required/>
                </div>
                <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forgot");
        echo "\">Mot de passe oublié ?</a>
                ";
        // line 31
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 31, $this->source); })())) {
            // line 32
            echo "                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 32, $this->source); })()), "messageKey", [], "any", false, false, false, 32), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 32, $this->source); })()), "messageData", [], "any", false, false, false, 32), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 34
        echo "
                ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35)) {
            // line 36
            echo "                    <div class=\"mb-3\">
                        You are logged in as ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "userIdentifier", [], "any", false, false, false, 37), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                    </div>
                ";
        }
        // line 40
        echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                <div class=\"form-group\">
                    <button type=\"submit\" name=\"btn-connect\" class=\"click click-success ml-auto\">Je me connecte</button>
                </div>
            </form>
        </div>
    </div>
</div>


";
        // line 50
        $this->loadTemplate("inc/parts/footer.html.twig", "inc/pages/users/login.html.twig", 50)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/pages/users/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 50,  131 => 40,  123 => 37,  120 => 36,  118 => 35,  115 => 34,  109 => 32,  107 => 31,  103 => 30,  94 => 24,  83 => 16,  79 => 14,  70 => 11,  67 => 10,  63 => 9,  54 => 6,  51 => 5,  47 => 4,  44 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'inc/parts/head.html.twig' %}
{% include 'inc/parts/nav.html.twig' %}

{% for message in app.flashes('success') %}
    <div class=\"alert alert-success\">
        {{ message }}
    </div>
{% endfor %}
{% for message in app.flashes('error') %}
    <div class=\"alert alert-error\">
        {{ message }}
    </div>
{% endfor %}
<div class=\"atypikhouse-container my-6\">
    <div class=\"page-title\">
        <h1 class=\"text-uppercase c1 size20 ff-r\">{{ title }}</h1>
    </div>
    <div class=\"user-wrapper my-3\">
        <div class=\"user-login form-style\">
            <h2>Se connecter</h2>
            <form class=\"user-login-form\" method=\"post\">
                <div class=\"form-group\">
                    <label for=\"username\">E-mail</label>
                    <input type=\"email\" name=\"email\" value=\"{{ last_username }}\" id=\"username\" placeholder=\"Adresse électronique\" required/>
                </div>
                <div class=\"form-group\">
                    <label for=\"password\">Mot de passe</label>
                    <input type=\"password\" name=\"password\" id=\"password\" placeholder=\"Mot de passe\" required/>
                </div>
                <a href=\"{{ path('forgot') }}\">Mot de passe oublié ?</a>
                {% if error %}
                    <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}

                {% if app.user %}
                    <div class=\"mb-3\">
                        You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                    </div>
                {% endif %}
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                <div class=\"form-group\">
                    <button type=\"submit\" name=\"btn-connect\" class=\"click click-success ml-auto\">Je me connecte</button>
                </div>
            </form>
        </div>
    </div>
</div>


{% include 'inc/parts/footer.html.twig' %}", "inc/pages/users/login.html.twig", "/Users/nathandfk/Development/Symfony/final/dsp-project/templates/inc/pages/users/login.html.twig");
    }
}
