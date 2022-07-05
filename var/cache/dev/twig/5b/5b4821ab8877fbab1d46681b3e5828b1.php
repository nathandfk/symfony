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
        <a data-checked=\"users\" class=\"click click-c5\">Utilisateurs</a>
        <a data-checked=\"settings\" class=\"click click-c5\">Paramètres</a>
    </div>
    <div data-selected=\"profil\" class=\"form-style\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "            <div class=\"alert alert-success\">
                ";
            // line 13
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start');
        echo "
        <h3>Mes données personnelles</h3>   
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "firstName", [], "any", false, false, false, 20), 'label');
        echo "
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "firstName", [], "any", false, false, false, 21), 'widget', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["userdata"]) || array_key_exists("userdata", $context) ? $context["userdata"] : (function () { throw new RuntimeError('Variable "userdata" does not exist.', 21, $this->source); })()), "first_name", [], "any", false, false, false, 21)]);
        echo "
                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "firstName", [], "any", false, false, false, 22), 'errors');
        echo "
                </div>
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "lastName", [], "any", false, false, false, 25), 'label');
        echo "
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "lastName", [], "any", false, false, false, 26), 'widget', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["userdata"]) || array_key_exists("userdata", $context) ? $context["userdata"] : (function () { throw new RuntimeError('Variable "userdata" does not exist.', 26, $this->source); })()), "last_name", [], "any", false, false, false, 26)]);
        echo "
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "lastName", [], "any", false, false, false, 27), 'errors');
        echo "
                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "society", [], "any", false, false, false, 32), 'label');
        echo "
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "society", [], "any", false, false, false, 33), 'widget', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["userdata"]) || array_key_exists("userdata", $context) ? $context["userdata"] : (function () { throw new RuntimeError('Variable "userdata" does not exist.', 33, $this->source); })()), "society", [], "any", false, false, false, 33)]);
        echo "
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "society", [], "any", false, false, false, 34), 'errors');
        echo "
                </div>
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "birthday", [], "any", false, false, false, 37), 'label');
        echo "
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "birthday", [], "any", false, false, false, 38), 'widget', ["value" => twig_date_format_filter($this->env, "now", "dd-MM-yyyy")]);
        echo "
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "birthday", [], "any", false, false, false, 39), 'errors');
        echo "
                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "email", [], "any", false, false, false, 44), 'label');
        echo "
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "email", [], "any", false, false, false, 45), 'widget', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["userdata"]) || array_key_exists("userdata", $context) ? $context["userdata"] : (function () { throw new RuntimeError('Variable "userdata" does not exist.', 45, $this->source); })()), "email", [], "any", false, false, false, 45), "disabled" => "disabled"]);
        echo "
                </div>
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "phoneNumber", [], "any", false, false, false, 48), 'label');
        echo "
                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "phoneNumber", [], "any", false, false, false, 49), 'widget', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["userdata"]) || array_key_exists("userdata", $context) ? $context["userdata"] : (function () { throw new RuntimeError('Variable "userdata" does not exist.', 49, $this->source); })()), "phone_number", [], "any", false, false, false, 49)]);
        echo "
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "phoneNumber", [], "any", false, false, false, 50), 'errors');
        echo "
                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "address", [], "any", false, false, false, 55), 'label');
        echo "
                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "address", [], "any", false, false, false, 56), 'widget', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["userdata"]) || array_key_exists("userdata", $context) ? $context["userdata"] : (function () { throw new RuntimeError('Variable "userdata" does not exist.', 56, $this->source); })()), "address", [], "any", false, false, false, 56)]);
        echo "
                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "address", [], "any", false, false, false, 57), 'errors');
        echo "
                </div>
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "complAddress", [], "any", false, false, false, 60), 'label');
        echo "
                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "complAddress", [], "any", false, false, false, 61), 'widget', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["userdata"]) || array_key_exists("userdata", $context) ? $context["userdata"] : (function () { throw new RuntimeError('Variable "userdata" does not exist.', 61, $this->source); })()), "compl_address", [], "any", false, false, false, 61)]);
        echo "
                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "complAddress", [], "any", false, false, false, 62), 'errors');
        echo "
                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "city", [], "any", false, false, false, 67), 'label');
        echo "
                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "city", [], "any", false, false, false, 68), 'widget', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["userdata"]) || array_key_exists("userdata", $context) ? $context["userdata"] : (function () { throw new RuntimeError('Variable "userdata" does not exist.', 68, $this->source); })()), "city", [], "any", false, false, false, 68)]);
        echo "
                    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "city", [], "any", false, false, false, 69), 'errors');
        echo "
                </div>
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "country", [], "any", false, false, false, 72), 'label');
        echo "
                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "country", [], "any", false, false, false, 73), 'widget', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["userdata"]) || array_key_exists("userdata", $context) ? $context["userdata"] : (function () { throw new RuntimeError('Variable "userdata" does not exist.', 73, $this->source); })()), "country", [], "any", false, false, false, 73)]);
        echo "
                    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "country", [], "any", false, false, false, 74), 'errors');
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
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "password", [], "any", false, false, false, 84), "first", [], "any", false, false, false, 84), 'label');
        echo "
                    ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "password", [], "any", false, false, false, 85), "first", [], "any", false, false, false, 85), 'widget');
        echo "
                    ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "password", [], "any", false, false, false, 86), "first", [], "any", false, false, false, 86), 'errors');
        echo "
                </div>
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "password", [], "any", false, false, false, 89), "second", [], "any", false, false, false, 89), 'label');
        echo "
                    ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "password", [], "any", false, false, false, 90), "second", [], "any", false, false, false, 90), 'widget');
        echo "
                    ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "password", [], "any", false, false, false, 91), "second", [], "any", false, false, false, 91), 'errors');
        echo "
                </div>
            </div> 
        <div class=\"form-group\">
            <button class=\"click click-brown ml-auto\" name=\"click-update\">Modifier mes données</button>
        </div>  
        ";
        // line 97
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), 'form_end');
        echo "
    </div>
    <div data-selected=\"users\" class=\"d-none\">
        <h3>Utilisateurs du site</h3>
        <input type=\"text\" name=\"\" placeholder=\"Recherche l'utilisateur\">
        <table id=\"historical-table\" class=\"text-center ath-table-form\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Rôles</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>DIAFOUKA</td>
                    <td>Nathan</td>
                    <td>En cours de traitement</td>
                    <td class=\"d-flex gap-1\">
                        <input type=\"submit\" class=\"click click-brown\" value=\"Supprimer\" name=\"btn-valid\">
                        <input type=\"submit\" class=\"click click-success\" value=\"Détails\" name=\"btn-valid\">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div data-selected=\"settings\" class=\"d-none\">
        <h3>Paramètres</h3>
    </div>
</div>
</div>
";
        // line 129
        $this->loadTemplate("inc/parts/footer.html.twig", "inc/pages/users/dashboard.html.twig", 129)->display($context);
        
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
        return array (  295 => 129,  260 => 97,  251 => 91,  247 => 90,  243 => 89,  237 => 86,  233 => 85,  229 => 84,  216 => 74,  212 => 73,  208 => 72,  202 => 69,  198 => 68,  194 => 67,  186 => 62,  182 => 61,  178 => 60,  172 => 57,  168 => 56,  164 => 55,  156 => 50,  152 => 49,  148 => 48,  142 => 45,  138 => 44,  130 => 39,  126 => 38,  122 => 37,  116 => 34,  112 => 33,  108 => 32,  100 => 27,  96 => 26,  92 => 25,  86 => 22,  82 => 21,  78 => 20,  70 => 16,  61 => 13,  58 => 12,  54 => 11,  44 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'inc/parts/head.html.twig' %}
{% include 'inc/parts/nav.html.twig' %}
<div class=\"atypikhouse-container\">
<div class=\"dashboard-wrapper my-4\">
    <div class=\"navigation-link d-flex gap-1\">
        <a data-checked=\"profil\" class=\"click click-success\">Mon profil</a>
        <a data-checked=\"users\" class=\"click click-c5\">Utilisateurs</a>
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
                    {{ form_widget(form.firstName, {'value': userdata.first_name}) }}
                    {{ form_errors(form.firstName) }}
                </div>
                <div class=\"form-group bloc-lg-6\">
                    {{ form_label(form.lastName) }}
                    {{ form_widget(form.lastName, {'value': userdata.last_name}) }}
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
                    {{ form_widget(form.birthday, {value: \"now\"|date(\"dd-MM-yyyy\")}) }}
                    {{ form_errors(form.birthday) }}
                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    {{ form_label(form.email) }}
                    {{ form_widget(form.email, {'value': userdata.email, disabled: 'disabled'}) }}
                </div>
                <div class=\"form-group bloc-lg-6\">
                    {{ form_label(form.phoneNumber) }}
                    {{ form_widget(form.phoneNumber, {'value': userdata.phone_number}) }}
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
                    {{ form_widget(form.complAddress, {'value': userdata.compl_address}) }}
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
                    {{ form_widget(form.country, {'value': userdata.country}) }}
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
    <div data-selected=\"users\" class=\"d-none\">
        <h3>Utilisateurs du site</h3>
        <input type=\"text\" name=\"\" placeholder=\"Recherche l'utilisateur\">
        <table id=\"historical-table\" class=\"text-center ath-table-form\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Rôles</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>DIAFOUKA</td>
                    <td>Nathan</td>
                    <td>En cours de traitement</td>
                    <td class=\"d-flex gap-1\">
                        <input type=\"submit\" class=\"click click-brown\" value=\"Supprimer\" name=\"btn-valid\">
                        <input type=\"submit\" class=\"click click-success\" value=\"Détails\" name=\"btn-valid\">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div data-selected=\"settings\" class=\"d-none\">
        <h3>Paramètres</h3>
    </div>
</div>
</div>
{% include 'inc/parts/footer.html.twig' %}", "inc/pages/users/dashboard.html.twig", "/Users/nathandfk/Development/Symfony/atypikhouse/templates/inc/pages/users/dashboard.html.twig");
    }
}
