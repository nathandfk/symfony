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

/* inc/pages/users/register.html.twig */
class __TwigTemplate_83c8d9c6b1448c932502f09c24827bc6 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/pages/users/register.html.twig"));

        // line 1
        $this->loadTemplate("inc/parts/head.html.twig", "inc/pages/users/register.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("inc/parts/nav.html.twig", "inc/pages/users/register.html.twig", 2)->display($context);
        // line 3
        echo "
";
        // line 4
        if (((isset($context["carousel"]) || array_key_exists("carousel", $context) ? $context["carousel"] : (function () { throw new RuntimeError('Variable "carousel" does not exist.', 4, $this->source); })()) == true)) {
            // line 5
            $this->loadTemplate("inc/parts/carousel.html.twig", "inc/pages/users/register.html.twig", 5)->display($context);
        }
        // line 7
        echo "
<div class=\"atypikhouse-container my-6\">
    <div class=\"page-title\">
        <h1 class=\"text-uppercase c1 size20 ff-r\">";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "</h1>
    </div>
    <div class=\"user-wrapper my-3\">
        <div class=\"user-register form-style\">
            <h2>S'inscrire</h2>
            ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start');
        echo "
                <div class=\"form-row\">
                    <div class=\"form-group bloc-lg-6\">
                        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "firstName", [], "any", false, false, false, 18), 'label');
        echo "
                        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "firstName", [], "any", false, false, false, 19), 'widget');
        echo "
                        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "firstName", [], "any", false, false, false, 20), 'errors');
        echo "
                    </div>
                    <div class=\"form-group bloc-lg-6\">
                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "lastName", [], "any", false, false, false, 23), 'label');
        echo "
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "lastName", [], "any", false, false, false, 24), 'widget');
        echo "
                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "lastName", [], "any", false, false, false, 25), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"form-row\">
                    <div class=\"form-group bloc-lg-6\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "society", [], "any", false, false, false, 30), 'label');
        echo "
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "society", [], "any", false, false, false, 31), 'widget');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "society", [], "any", false, false, false, 32), 'errors');
        echo "
                    </div>
                    <div class=\"form-group bloc-lg-6\">
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "birthday", [], "any", false, false, false, 35), 'label');
        echo "
                        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "birthday", [], "any", false, false, false, 36), 'widget');
        echo "
                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "birthday", [], "any", false, false, false, 37), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"form-row\">
                    <div class=\"form-group bloc-lg-6\">
                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "email", [], "any", false, false, false, 42), 'label');
        echo "
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "email", [], "any", false, false, false, 43), 'widget');
        echo "
                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "email", [], "any", false, false, false, 44), 'errors');
        echo "
                    </div>
                    <div class=\"form-group bloc-lg-6\">
                        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "phoneNumber", [], "any", false, false, false, 47), 'label');
        echo "
                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "phoneNumber", [], "any", false, false, false, 48), 'widget');
        echo "
                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "phoneNumber", [], "any", false, false, false, 49), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"form-row\">
                    <div class=\"form-group bloc-lg-6\">
                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "address", [], "any", false, false, false, 54), 'label');
        echo "
                        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "address", [], "any", false, false, false, 55), 'widget');
        echo "
                        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "address", [], "any", false, false, false, 56), 'errors');
        echo "
                    </div>
                    <div class=\"form-group bloc-lg-6\">
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "complAddress", [], "any", false, false, false, 59), 'label');
        echo "
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "complAddress", [], "any", false, false, false, 60), 'widget');
        echo "
                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "complAddress", [], "any", false, false, false, 61), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"form-row\">
                    <div class=\"form-group bloc-lg-6\">
                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "city", [], "any", false, false, false, 66), 'label');
        echo "
                        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "city", [], "any", false, false, false, 67), 'widget');
        echo "
                        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "city", [], "any", false, false, false, 68), 'errors');
        echo "
                    </div>
                    <div class=\"form-group bloc-lg-6\">
                        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "country", [], "any", false, false, false, 71), 'label');
        echo "
                        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "country", [], "any", false, false, false, 72), 'widget');
        echo "
                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "country", [], "any", false, false, false, 73), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"form-row\">
                    <div class=\"form-group bloc-lg-6\">
                        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "password", [], "any", false, false, false, 78), "first", [], "any", false, false, false, 78), 'label');
        echo "
                        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "password", [], "any", false, false, false, 79), "first", [], "any", false, false, false, 79), 'widget', ["attr" => ["required" => "required"]]);
        echo "
                        ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "password", [], "any", false, false, false, 80), "first", [], "any", false, false, false, 80), 'errors');
        echo "
                    </div>
                    <div class=\"form-group bloc-lg-6\">
                        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "password", [], "any", false, false, false, 83), "second", [], "any", false, false, false, 83), 'label');
        echo "
                        ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "password", [], "any", false, false, false, 84), "second", [], "any", false, false, false, 84), 'widget', ["attr" => ["required" => "required"]]);
        echo "
                        ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "password", [], "any", false, false, false, 85), "second", [], "any", false, false, false, 85), 'errors');
        echo "
                    </div>
                </div>
                <div>
                    <input type=\"checkbox\" class=\"w-max-content\" name=\"register-opt-in\" id=\"register-opt-in\" required>
                    <label for=\"register-opt-in\">Je reconnais avoir lu <a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cgu");
        echo "\" class=\"c1\">les conditions générales</a> de AtypikHouse</label>
                </div>
                <div class=\"form-group\">
                    <button class=\"click click-brown ml-auto\" name=\"click-register\">Je m'inscris</button>
                </div>
            ";
        // line 95
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
</div>


";
        // line 101
        $this->loadTemplate("inc/parts/footer.html.twig", "inc/pages/users/register.html.twig", 101)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/pages/users/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 101,  259 => 95,  251 => 90,  243 => 85,  239 => 84,  235 => 83,  229 => 80,  225 => 79,  221 => 78,  213 => 73,  209 => 72,  205 => 71,  199 => 68,  195 => 67,  191 => 66,  183 => 61,  179 => 60,  175 => 59,  169 => 56,  165 => 55,  161 => 54,  153 => 49,  149 => 48,  145 => 47,  139 => 44,  135 => 43,  131 => 42,  123 => 37,  119 => 36,  115 => 35,  109 => 32,  105 => 31,  101 => 30,  93 => 25,  89 => 24,  85 => 23,  79 => 20,  75 => 19,  71 => 18,  65 => 15,  57 => 10,  52 => 7,  49 => 5,  47 => 4,  44 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'inc/parts/head.html.twig' %}
{% include 'inc/parts/nav.html.twig' %}

{% if carousel == true %}
{% include 'inc/parts/carousel.html.twig' %}
{% endif %}

<div class=\"atypikhouse-container my-6\">
    <div class=\"page-title\">
        <h1 class=\"text-uppercase c1 size20 ff-r\">{{ title }}</h1>
    </div>
    <div class=\"user-wrapper my-3\">
        <div class=\"user-register form-style\">
            <h2>S'inscrire</h2>
            {{ form_start(form) }}
                <div class=\"form-row\">
                    <div class=\"form-group bloc-lg-6\">
                        {{ form_label(form.firstName) }}
                        {{ form_widget(form.firstName) }}
                        {{ form_errors(form.firstName) }}
                    </div>
                    <div class=\"form-group bloc-lg-6\">
                        {{ form_label(form.lastName) }}
                        {{ form_widget(form.lastName) }}
                        {{ form_errors(form.lastName) }}
                    </div>
                </div>
                <div class=\"form-row\">
                    <div class=\"form-group bloc-lg-6\">
                        {{ form_label(form.society) }}
                        {{ form_widget(form.society) }}
                        {{ form_errors(form.society) }}
                    </div>
                    <div class=\"form-group bloc-lg-6\">
                        {{ form_label(form.birthday) }}
                        {{ form_widget(form.birthday) }}
                        {{ form_errors(form.birthday) }}
                    </div>
                </div>
                <div class=\"form-row\">
                    <div class=\"form-group bloc-lg-6\">
                        {{ form_label(form.email) }}
                        {{ form_widget(form.email) }}
                        {{ form_errors(form.email) }}
                    </div>
                    <div class=\"form-group bloc-lg-6\">
                        {{ form_label(form.phoneNumber) }}
                        {{ form_widget(form.phoneNumber) }}
                        {{ form_errors(form.phoneNumber) }}
                    </div>
                </div>
                <div class=\"form-row\">
                    <div class=\"form-group bloc-lg-6\">
                        {{ form_label(form.address) }}
                        {{ form_widget(form.address) }}
                        {{ form_errors(form.address) }}
                    </div>
                    <div class=\"form-group bloc-lg-6\">
                        {{ form_label(form.complAddress) }}
                        {{ form_widget(form.complAddress) }}
                        {{ form_errors(form.complAddress) }}
                    </div>
                </div>
                <div class=\"form-row\">
                    <div class=\"form-group bloc-lg-6\">
                        {{ form_label(form.city) }}
                        {{ form_widget(form.city) }}
                        {{ form_errors(form.city) }}
                    </div>
                    <div class=\"form-group bloc-lg-6\">
                        {{ form_label(form.country) }}
                        {{ form_widget(form.country) }}
                        {{ form_errors(form.country) }}
                    </div>
                </div>
                <div class=\"form-row\">
                    <div class=\"form-group bloc-lg-6\">
                        {{ form_label(form.password.first) }}
                        {{ form_widget(form.password.first, {'attr': {required: 'required'}}) }}
                        {{ form_errors(form.password.first) }}
                    </div>
                    <div class=\"form-group bloc-lg-6\">
                        {{ form_label(form.password.second) }}
                        {{ form_widget(form.password.second, {'attr': {required: 'required'}}) }}
                        {{ form_errors(form.password.second) }}
                    </div>
                </div>
                <div>
                    <input type=\"checkbox\" class=\"w-max-content\" name=\"register-opt-in\" id=\"register-opt-in\" required>
                    <label for=\"register-opt-in\">Je reconnais avoir lu <a href=\"{{ path('cgu') }}\" class=\"c1\">les conditions générales</a> de AtypikHouse</label>
                </div>
                <div class=\"form-group\">
                    <button class=\"click click-brown ml-auto\" name=\"click-register\">Je m'inscris</button>
                </div>
            {{ form_end(form) }}
        </div>
    </div>
</div>


{% include 'inc/parts/footer.html.twig' %}", "inc/pages/users/register.html.twig", "/Users/nathandfk/Development/Symfony/atypikhouse/templates/inc/pages/users/register.html.twig");
    }
}
