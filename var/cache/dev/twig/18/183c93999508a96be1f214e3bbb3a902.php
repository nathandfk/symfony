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

/* inc/pages/users/payment.html.twig */
class __TwigTemplate_1c57aed2bf2b8fe619893337471a76f1 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/pages/users/payment.html.twig"));

        // line 1
        $this->loadTemplate("inc/parts/head.html.twig", "inc/pages/users/payment.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("inc/parts/nav.html.twig", "inc/pages/users/payment.html.twig", 2)->display($context);
        // line 3
        echo "<div class=\"atypikhouse-container\">

";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'form_start');
        echo "
";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "value", [], "any", false, false, false, 6), 'label');
        echo "
";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "value", [], "any", false, false, false, 7), 'widget', ["value" => (isset($context["iban"]) || array_key_exists("iban", $context) ? $context["iban"] : (function () { throw new RuntimeError('Variable "iban" does not exist.', 7, $this->source); })()), "pattern" => "de"]);
        echo "
";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "value", [], "any", false, false, false, 8), 'errors');
        echo "
<button type=\"submit\" name=\"insert-rib\" class=\"click click-success\">Sauvegarder</button>
";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_end');
        echo "

<table id=\"historical-table\" class=\"text-center ath-table-form\">
    <thead>
        <tr>
            <th>Ticket</th>
            <th>Montant</th>
            <th>Statut</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>ATH123</td>
            <td>1523€</td>
            <td>En cours de traitement</td>
            <td><input type=\"submit\" class=\"click click-success\" value=\"Être payer\" name=\"btn-valid\"></td>
        </tr>
    </tbody>
</table>
</div>
";
        // line 31
        $this->loadTemplate("inc/parts/footer.html.twig", "inc/pages/users/payment.html.twig", 31)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/pages/users/payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 31,  65 => 10,  60 => 8,  56 => 7,  52 => 6,  48 => 5,  44 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'inc/parts/head.html.twig' %}
{% include 'inc/parts/nav.html.twig' %}
<div class=\"atypikhouse-container\">

{{ form_start(form) }}
{{ form_label(form.value) }}
{{ form_widget(form.value, {'value': iban, 'pattern':'de'}) }}
{{ form_errors(form.value) }}
<button type=\"submit\" name=\"insert-rib\" class=\"click click-success\">Sauvegarder</button>
{{ form_end(form) }}

<table id=\"historical-table\" class=\"text-center ath-table-form\">
    <thead>
        <tr>
            <th>Ticket</th>
            <th>Montant</th>
            <th>Statut</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>ATH123</td>
            <td>1523€</td>
            <td>En cours de traitement</td>
            <td><input type=\"submit\" class=\"click click-success\" value=\"Être payer\" name=\"btn-valid\"></td>
        </tr>
    </tbody>
</table>
</div>
{% include 'inc/parts/footer.html.twig' %}", "inc/pages/users/payment.html.twig", "/Users/nathandfk/Development/Symfony/atypikhouse/templates/inc/pages/users/payment.html.twig");
    }
}
