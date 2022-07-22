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

/* inc/pages/users/dashboard.html.twig */
class __TwigTemplate_ac77a54362a23601822af6f0d5c317bb extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/pages/users/dashboard.html.twig"));

        // line 1
        $this->loadTemplate("inc/parts/head.html.twig", "inc/pages/users/dashboard.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("inc/parts/nav.html.twig", "inc/pages/users/dashboard.html.twig", 2)->display($context);
        // line 3
        echo "<div class=\"atypikhouse-container\">
<div class=\"dashboard-wrapper my-4\">
    <div class=\"navigation-link d-flex gap-1\">
        <a data-checked=\"profil\" class=\"click click-success\">Mon profil</a>
        <a data-checked=\"signal\" class=\"click click-c5\">Habitations signalés</a>
        ";
        // line 8
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MODERATOR"))) {
            // line 9
            echo "        <a data-checked=\"users\" class=\"click click-c5\">Utilisateurs</a>
        ";
        }
        // line 11
        echo "        <a data-checked=\"settings\" class=\"click click-c5\">Paramètres</a>
    </div>
    <div data-selected=\"profil\" class=\"form-style\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            echo "            <div class=\"alert alert-success\">
                ";
            // line 16
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start');
        echo "
        <h3>Mes données personnelles</h3>   
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "firstName", [], "any", false, false, false, 23), 'label');
        echo "
                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "firstName", [], "any", false, false, false, 24), 'widget', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["userdata"]) || array_key_exists("userdata", $context) ? $context["userdata"] : (function () { throw new RuntimeError('Variable "userdata" does not exist.', 24, $this->source); })()), "firstName", [], "any", false, false, false, 24)]);
        echo "
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "firstName", [], "any", false, false, false, 25), 'errors');
        echo "
                </div>
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "lastName", [], "any", false, false, false, 28), 'label');
        echo "
                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "lastName", [], "any", false, false, false, 29), 'widget', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["userdata"]) || array_key_exists("userdata", $context) ? $context["userdata"] : (function () { throw new RuntimeError('Variable "userdata" does not exist.', 29, $this->source); })()), "lastName", [], "any", false, false, false, 29)]);
        echo "
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "lastName", [], "any", false, false, false, 30), 'errors');
        echo "
                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "society", [], "any", false, false, false, 35), 'label');
        echo "
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "society", [], "any", false, false, false, 36), 'widget', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["userdata"]) || array_key_exists("userdata", $context) ? $context["userdata"] : (function () { throw new RuntimeError('Variable "userdata" does not exist.', 36, $this->source); })()), "society", [], "any", false, false, false, 36)]);
        echo "
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "society", [], "any", false, false, false, 37), 'errors');
        echo "
                </div>
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "birthday", [], "any", false, false, false, 40), 'label');
        echo "
                    
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "birthday", [], "any", false, false, false, 42), 'widget', ["values" => "2022"]);
        echo "
                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "birthday", [], "any", false, false, false, 43), 'errors');
        echo "
                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "birthday", [], "any", false, false, false, 44), 'help');
        echo "
                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "email", [], "any", false, false, false, 49), 'label');
        echo "
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "email", [], "any", false, false, false, 50), 'widget', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["userdata"]) || array_key_exists("userdata", $context) ? $context["userdata"] : (function () { throw new RuntimeError('Variable "userdata" does not exist.', 50, $this->source); })()), "email", [], "any", false, false, false, 50), "disabled" => "disabled"]);
        echo "
                </div>
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "phoneNumber", [], "any", false, false, false, 53), 'label');
        echo "
                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "phoneNumber", [], "any", false, false, false, 54), 'widget', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["userdata"]) || array_key_exists("userdata", $context) ? $context["userdata"] : (function () { throw new RuntimeError('Variable "userdata" does not exist.', 54, $this->source); })()), "phoneNumber", [], "any", false, false, false, 54)]);
        echo "
                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "phoneNumber", [], "any", false, false, false, 55), 'errors');
        echo "
                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "address", [], "any", false, false, false, 60), 'label');
        echo "
                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "address", [], "any", false, false, false, 61), 'widget', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["userdata"]) || array_key_exists("userdata", $context) ? $context["userdata"] : (function () { throw new RuntimeError('Variable "userdata" does not exist.', 61, $this->source); })()), "address", [], "any", false, false, false, 61)]);
        echo "
                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "address", [], "any", false, false, false, 62), 'errors');
        echo "
                </div>
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "complAddress", [], "any", false, false, false, 65), 'label');
        echo "
                    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "complAddress", [], "any", false, false, false, 66), 'widget', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["userdata"]) || array_key_exists("userdata", $context) ? $context["userdata"] : (function () { throw new RuntimeError('Variable "userdata" does not exist.', 66, $this->source); })()), "complAddress", [], "any", false, false, false, 66)]);
        echo "
                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "complAddress", [], "any", false, false, false, 67), 'errors');
        echo "
                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "city", [], "any", false, false, false, 72), 'label');
        echo "
                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "city", [], "any", false, false, false, 73), 'widget', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["userdata"]) || array_key_exists("userdata", $context) ? $context["userdata"] : (function () { throw new RuntimeError('Variable "userdata" does not exist.', 73, $this->source); })()), "city", [], "any", false, false, false, 73)]);
        echo "
                    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "city", [], "any", false, false, false, 74), 'errors');
        echo "
                </div>
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "country", [], "any", false, false, false, 77), 'label');
        echo "
                    ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "country", [], "any", false, false, false, 78), 'widget', ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userdata"]) || array_key_exists("userdata", $context) ? $context["userdata"] : (function () { throw new RuntimeError('Variable "userdata" does not exist.', 78, $this->source); })()), "country", [], "any", false, false, false, 78), "id", [], "any", false, false, false, 78)]);
        echo "
                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "country", [], "any", false, false, false, 79), 'errors');
        echo "
                </div>
            </div>
        <h3>Mot de passe</h3>

            <div>
                Laissez vide pour conserver l'ancien mot de passe
            </div> 
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "password", [], "any", false, false, false, 89), "first", [], "any", false, false, false, 89), 'label');
        echo "
                    ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "password", [], "any", false, false, false, 90), "first", [], "any", false, false, false, 90), 'widget');
        echo "
                    ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "password", [], "any", false, false, false, 91), "first", [], "any", false, false, false, 91), 'errors');
        echo "
                </div>
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "password", [], "any", false, false, false, 94), "second", [], "any", false, false, false, 94), 'label');
        echo "
                    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "password", [], "any", false, false, false, 95), "second", [], "any", false, false, false, 95), 'widget');
        echo "
                    ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "password", [], "any", false, false, false, 96), "second", [], "any", false, false, false, 96), 'errors');
        echo "
                </div>
            </div> 
        <div class=\"form-group\">
            <button class=\"click click-brown ml-auto\" name=\"click-update\">Modifier mes données</button>
        </div>  
        ";
        // line 102
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), 'form_end');
        echo "
    </div>
    ";
        // line 104
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MODERATOR"))) {
            // line 105
            echo "    <div data-selected=\"users\" class=\"d-none\">
        <h3>Utilisateurs du site</h3>
        <input type=\"text\" id=\"search-users\" data-link=\"";
            // line 107
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_list");
            echo "\" placeholder=\"Recherche l'utilisateur\">
        <div class=\"users-list\"></div>
    </div>
    ";
        }
        // line 111
        echo "    <div data-selected=\"settings\" class=\"d-none\">
        ";
        // line 112
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MODERATOR"))) {
            // line 113
            echo "        <div class=\"my-2\">
            <h3>Recherche</h3>
            <input type=\"text\" id=\"settings-search\" placeholder=\"Rechercher un équipement ou un type\">
            <div class=\"settings-result\"></div>
        </div>
        <div class=\"my-4\">
            <h3>Paramètres</h3>
            <form id=\"settings-wrapper\" method=\"POST\">
                <div class=\"my-1\">
                    <label>Email de l'administration *</label>
                    <input type=\"email\" required placeholder=\"gestion@atypikhouse.com\" name=\"email_admin_setting\" id=\"email_admin_setting\">
                </div>
                <div class=\"my-1\">
                    <label>Message de réservation *</label>
                    <textarea name=\"message_setting\" required id=\"message_setting\"></textarea>
                    <div>Insérer dans votre message</div>
                    <ul>
                        <li>_firstname_ pour le prénom</li>
                        <li>_lastname_ pour le nom</li>
                        <li>_title_ pour le titre</li>
                        <li>_totalprice_ pour le prix total</li>
                        <li>_arrival_ pour la date d'arrivée</li>
                        <li>_departure_ pour la date de départ</li>
                    </ul>
                </div>
                <div>
                    <label>Frais de service (En pourcentage) *</label>
                    <input type=\"number\" min=\"0\" max=\"100\" name=\"tax_setting\" id=\"tax_setting\">
                </div>
                <section class=\"my-3\">
                    <h3>Page d'accueil</h3>
                    <div class=\"form-row\">
                        <div class=\"form-group bloc-lg-6\">
                            <label>Titre de la page d'accueil *</label>
                            <input type=\"text\" required name=\"home_title_setting\" id=\"home_title_setting\">
                        </div>
                        <div class=\"form-group bloc-lg-6\">
                            <label>Image de la page d'accueil</label>
                            <input type=\"file\" name=\"home_picture_setting\" id=\"home_picture_setting\">
                        </div>
                    </div>
                </section>
                <section class=\"my-3\">
                    <h3>Page à propos</h3>
                    <div class=\"form-row\">
                        <div class=\"form-group bloc-lg-6\">
                            <label>Titre</label>
                            <input type=\"text\" name=\"about_title_setting\" name=\"about_title_setting\" id=\"about_title_setting\" class=\"reset-value\" placeholder=\"Pourquoi choisir AtypikHouse ?\">
                        </div>
                        <div class=\"form-group bloc-lg-6\">
                            <label>Résumé</label>
                            <input type=\"text\" name=\"abstract_title_setting\" id=\"abstract_title_setting\" class=\"reset-value\" placeholder=\"Atypikhouse vous aide à...\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label>Desciption</label>
                        <textarea type=\"text\" row=\"10\" name=\"about_description_setting\" id=\"about_description_setting\" class=\"reset-value\" placeholder=\"Des habitats spacieux, répondant à tous vos besoins\"></textarea>
                    </div>
                    <div class=\"form-group\">
                        <label>Image de couverture</label>
                        <input type=\"file\" name=\"about_picture_setting\" id=\"about_picture_setting\" class=\"reset-value\">
                    </div>
                </section>
                <div class=\"form-row\">
                    <div class=\"form-group bloc-lg-6\">
                        <label>Ajouter un type d'habitation</label>
                        <input type=\"text\" name=\"type_setting\" name=\"type_setting\" id=\"type_setting\" class=\"reset-value\" placeholder=\"exp: Yourte, Cabane dans les arbre, Cabane flottante\">
                    </div>
                    <div class=\"form-group bloc-lg-6\">
                        <label>Ajouter un équipement</label>
                        <input type=\"text\" name=\"equipment_setting\" id=\"equipment_setting\" class=\"reset-value\" placeholder=\"exp: Wifi, Eau\">
                    </div>
                </div>


                <button type=\"submit\" class=\"click click-success\">Appliquer</button>

            </form>
        </div>
        ";
        }
        // line 193
        echo "        <div id='delete-account' class=\"my-2\">
            <div class=\"card card-dismiss d-none text-center\">
                <h3>Attention !</h3>
                <p>En supprimant votre compte, vous serez déconnecté du site 
                et ne pourrez pas créer un nouveau compte avec une même adresse email pendant un certain moment.</p>
                <p>Nous retirons immédiatement tout élément reliant à votre compte dès lors où vous acceptez de supprimer votre compte. 
                Vos données seront définitivement supprimé de notre site sous une période de 2 ans.</p>
                <h3>Voulez-vous vraiment supprimer votre compte ?</h3>
                <div class=\"d-flex gap-1 w-max-content m-auto\">
                    <input type=\"submit\" value=\"Non\" id='btn-delete-cancel' class=\"click click-success\">
                    <input type=\"submit\" value=\"Oui\" id='btn-delete-confirm' class=\"click click-brown\">
                </div>
            </div>
            <input type=\"submit\" value=\"Supprimer mon compte\" id='btn-delete-account' class=\"click click-brown\">
        </div>
    </div>

    <div data-selected=\"signal\" class=\"d-none\">
        <div class=\"settings-signal-historical\"></div>
    </div>
</div>
</div>
";
        // line 215
        $this->loadTemplate("inc/parts/footer.html.twig", "inc/pages/users/dashboard.html.twig", 215)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/pages/users/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 215,  378 => 193,  296 => 113,  294 => 112,  291 => 111,  284 => 107,  280 => 105,  278 => 104,  273 => 102,  264 => 96,  260 => 95,  256 => 94,  250 => 91,  246 => 90,  242 => 89,  229 => 79,  225 => 78,  221 => 77,  215 => 74,  211 => 73,  207 => 72,  199 => 67,  195 => 66,  191 => 65,  185 => 62,  181 => 61,  177 => 60,  169 => 55,  165 => 54,  161 => 53,  155 => 50,  151 => 49,  143 => 44,  139 => 43,  135 => 42,  130 => 40,  124 => 37,  120 => 36,  116 => 35,  108 => 30,  104 => 29,  100 => 28,  94 => 25,  90 => 24,  86 => 23,  78 => 19,  69 => 16,  66 => 15,  62 => 14,  57 => 11,  53 => 9,  51 => 8,  44 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'inc/parts/head.html.twig' %}
{% include 'inc/parts/nav.html.twig' %}
<div class=\"atypikhouse-container\">
<div class=\"dashboard-wrapper my-4\">
    <div class=\"navigation-link d-flex gap-1\">
        <a data-checked=\"profil\" class=\"click click-success\">Mon profil</a>
        <a data-checked=\"signal\" class=\"click click-c5\">Habitations signalés</a>
        {% if (is_granted('ROLE_ADMIN') or is_granted('ROLE_MODERATOR')) %}
        <a data-checked=\"users\" class=\"click click-c5\">Utilisateurs</a>
        {% endif %}
        <a data-checked=\"settings\" class=\"click click-c5\">Paramètres</a>
    </div>
    <div data-selected=\"profil\" class=\"form-style\">
        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
        {% endfor %}
        {{ form_start(form) }}
        <h3>Mes données personnelles</h3>   
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    {{ form_label(form.firstName) }}
                    {{ form_widget(form.firstName, {'value': userdata.firstName}) }}
                    {{ form_errors(form.firstName) }}
                </div>
                <div class=\"form-group bloc-lg-6\">
                    {{ form_label(form.lastName) }}
                    {{ form_widget(form.lastName, {'value': userdata.lastName}) }}
                    {{ form_errors(form.lastName) }}
                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    {{ form_label(form.society) }}
                    {{ form_widget(form.society, {'value': userdata.society}) }}
                    {{ form_errors(form.society) }}
                </div>
                <div class=\"form-group bloc-lg-6\">
                    {{ form_label(form.birthday) }}
                    
                    {{ form_widget(form.birthday, {values: '2022'}) }}
                    {{ form_errors(form.birthday) }}
                    {{ form_help(form.birthday) }}
                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    {{ form_label(form.email) }}
                    {{ form_widget(form.email, {'value': userdata.email, disabled: 'disabled'}) }}
                </div>
                <div class=\"form-group bloc-lg-6\">
                    {{ form_label(form.phoneNumber) }}
                    {{ form_widget(form.phoneNumber, {'value': userdata.phoneNumber}) }}
                    {{ form_errors(form.phoneNumber) }}
                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    {{ form_label(form.address) }}
                    {{ form_widget(form.address, {'value': userdata.address}) }}
                    {{ form_errors(form.address) }}
                </div>
                <div class=\"form-group bloc-lg-6\">
                    {{ form_label(form.complAddress) }}
                    {{ form_widget(form.complAddress, {'value': userdata.complAddress}) }}
                    {{ form_errors(form.complAddress) }}
                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    {{ form_label(form.city) }}
                    {{ form_widget(form.city, {'value': userdata.city}) }}
                    {{ form_errors(form.city) }}
                </div>
                <div class=\"form-group bloc-lg-6\">
                    {{ form_label(form.country) }}
                    {{ form_widget(form.country, {'value': userdata.country.id}) }}
                    {{ form_errors(form.country) }}
                </div>
            </div>
        <h3>Mot de passe</h3>

            <div>
                Laissez vide pour conserver l'ancien mot de passe
            </div> 
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    {{ form_label(form.password.first) }}
                    {{ form_widget(form.password.first) }}
                    {{ form_errors(form.password.first) }}
                </div>
                <div class=\"form-group bloc-lg-6\">
                    {{ form_label(form.password.second) }}
                    {{ form_widget(form.password.second) }}
                    {{ form_errors(form.password.second) }}
                </div>
            </div> 
        <div class=\"form-group\">
            <button class=\"click click-brown ml-auto\" name=\"click-update\">Modifier mes données</button>
        </div>  
        {{ form_end(form) }}
    </div>
    {% if (is_granted('ROLE_ADMIN') or is_granted('ROLE_MODERATOR')) %}
    <div data-selected=\"users\" class=\"d-none\">
        <h3>Utilisateurs du site</h3>
        <input type=\"text\" id=\"search-users\" data-link=\"{{ path('admin_users_list') }}\" placeholder=\"Recherche l'utilisateur\">
        <div class=\"users-list\"></div>
    </div>
    {% endif %}
    <div data-selected=\"settings\" class=\"d-none\">
        {% if (is_granted('ROLE_ADMIN') or is_granted('ROLE_MODERATOR')) %}
        <div class=\"my-2\">
            <h3>Recherche</h3>
            <input type=\"text\" id=\"settings-search\" placeholder=\"Rechercher un équipement ou un type\">
            <div class=\"settings-result\"></div>
        </div>
        <div class=\"my-4\">
            <h3>Paramètres</h3>
            <form id=\"settings-wrapper\" method=\"POST\">
                <div class=\"my-1\">
                    <label>Email de l'administration *</label>
                    <input type=\"email\" required placeholder=\"gestion@atypikhouse.com\" name=\"email_admin_setting\" id=\"email_admin_setting\">
                </div>
                <div class=\"my-1\">
                    <label>Message de réservation *</label>
                    <textarea name=\"message_setting\" required id=\"message_setting\"></textarea>
                    <div>Insérer dans votre message</div>
                    <ul>
                        <li>_firstname_ pour le prénom</li>
                        <li>_lastname_ pour le nom</li>
                        <li>_title_ pour le titre</li>
                        <li>_totalprice_ pour le prix total</li>
                        <li>_arrival_ pour la date d'arrivée</li>
                        <li>_departure_ pour la date de départ</li>
                    </ul>
                </div>
                <div>
                    <label>Frais de service (En pourcentage) *</label>
                    <input type=\"number\" min=\"0\" max=\"100\" name=\"tax_setting\" id=\"tax_setting\">
                </div>
                <section class=\"my-3\">
                    <h3>Page d'accueil</h3>
                    <div class=\"form-row\">
                        <div class=\"form-group bloc-lg-6\">
                            <label>Titre de la page d'accueil *</label>
                            <input type=\"text\" required name=\"home_title_setting\" id=\"home_title_setting\">
                        </div>
                        <div class=\"form-group bloc-lg-6\">
                            <label>Image de la page d'accueil</label>
                            <input type=\"file\" name=\"home_picture_setting\" id=\"home_picture_setting\">
                        </div>
                    </div>
                </section>
                <section class=\"my-3\">
                    <h3>Page à propos</h3>
                    <div class=\"form-row\">
                        <div class=\"form-group bloc-lg-6\">
                            <label>Titre</label>
                            <input type=\"text\" name=\"about_title_setting\" name=\"about_title_setting\" id=\"about_title_setting\" class=\"reset-value\" placeholder=\"Pourquoi choisir AtypikHouse ?\">
                        </div>
                        <div class=\"form-group bloc-lg-6\">
                            <label>Résumé</label>
                            <input type=\"text\" name=\"abstract_title_setting\" id=\"abstract_title_setting\" class=\"reset-value\" placeholder=\"Atypikhouse vous aide à...\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label>Desciption</label>
                        <textarea type=\"text\" row=\"10\" name=\"about_description_setting\" id=\"about_description_setting\" class=\"reset-value\" placeholder=\"Des habitats spacieux, répondant à tous vos besoins\"></textarea>
                    </div>
                    <div class=\"form-group\">
                        <label>Image de couverture</label>
                        <input type=\"file\" name=\"about_picture_setting\" id=\"about_picture_setting\" class=\"reset-value\">
                    </div>
                </section>
                <div class=\"form-row\">
                    <div class=\"form-group bloc-lg-6\">
                        <label>Ajouter un type d'habitation</label>
                        <input type=\"text\" name=\"type_setting\" name=\"type_setting\" id=\"type_setting\" class=\"reset-value\" placeholder=\"exp: Yourte, Cabane dans les arbre, Cabane flottante\">
                    </div>
                    <div class=\"form-group bloc-lg-6\">
                        <label>Ajouter un équipement</label>
                        <input type=\"text\" name=\"equipment_setting\" id=\"equipment_setting\" class=\"reset-value\" placeholder=\"exp: Wifi, Eau\">
                    </div>
                </div>


                <button type=\"submit\" class=\"click click-success\">Appliquer</button>

            </form>
        </div>
        {% endif %}
        <div id='delete-account' class=\"my-2\">
            <div class=\"card card-dismiss d-none text-center\">
                <h3>Attention !</h3>
                <p>En supprimant votre compte, vous serez déconnecté du site 
                et ne pourrez pas créer un nouveau compte avec une même adresse email pendant un certain moment.</p>
                <p>Nous retirons immédiatement tout élément reliant à votre compte dès lors où vous acceptez de supprimer votre compte. 
                Vos données seront définitivement supprimé de notre site sous une période de 2 ans.</p>
                <h3>Voulez-vous vraiment supprimer votre compte ?</h3>
                <div class=\"d-flex gap-1 w-max-content m-auto\">
                    <input type=\"submit\" value=\"Non\" id='btn-delete-cancel' class=\"click click-success\">
                    <input type=\"submit\" value=\"Oui\" id='btn-delete-confirm' class=\"click click-brown\">
                </div>
            </div>
            <input type=\"submit\" value=\"Supprimer mon compte\" id='btn-delete-account' class=\"click click-brown\">
        </div>
    </div>

    <div data-selected=\"signal\" class=\"d-none\">
        <div class=\"settings-signal-historical\"></div>
    </div>
</div>
</div>
{% include 'inc/parts/footer.html.twig' %}", "inc/pages/users/dashboard.html.twig", "/Users/nathandfk/Development/Symfony/final/dsp-project/templates/inc/pages/users/dashboard.html.twig");
    }
}
