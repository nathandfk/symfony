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
<div class=\"my-2\">
";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'form_start');
        echo "
";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "value", [], "any", false, false, false, 6), 'label');
        echo "
<div class=\"d-flex gap-1 my-2\">
";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "value", [], "any", false, false, false, 8), 'widget', ["value" => (isset($context["iban"]) || array_key_exists("iban", $context) ? $context["iban"] : (function () { throw new RuntimeError('Variable "iban" does not exist.', 8, $this->source); })()), "pattern" => "de"]);
        echo "
";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "value", [], "any", false, false, false, 9), 'errors');
        echo "
<button type=\"submit\" name=\"insert-rib\" class=\"click click-success\">Sauvegarder</button>
</div>
";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_end');
        echo "
</div>

";
        // line 15
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MODERATOR"))) {
            // line 16
            if ((isset($context["historical"]) || array_key_exists("historical", $context) ? $context["historical"] : (function () { throw new RuntimeError('Variable "historical" does not exist.', 16, $this->source); })())) {
                // line 17
                echo "
<table id=\"historical-table\" class=\"text-center ath-table-form\">
    <thead>
        <tr>
            <th colspan=\"3\">Hôte</th>
            <th>Habitation</th>
            <th>IBAN</th>
            <th>Prix total</th>
            <th>Sous total</th>
            <th>Frais de service</th>
            <th>Statut</th>
            <th>Paiement</th>
            ";
                // line 29
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 30
                    echo "            <th>Action</th>
            ";
                }
                // line 32
                echo "        </tr>
    </thead>
    <tbody>
        <tr>
            <td class=\"bg-c5\">Prénom</td>
            <td class=\"bg-c5\">Nom</td>
            <td class=\"bg-c5\">E-mail</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            ";
                // line 44
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 45
                    echo "            <td></td>
            ";
                }
                // line 47
                echo "        </tr>
        ";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["historical"]) || array_key_exists("historical", $context) ? $context["historical"] : (function () { throw new RuntimeError('Variable "historical" does not exist.', 48, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["histo"]) {
                    // line 49
                    echo "        <tr data-id='";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], 8, [], "array", false, false, false, 49), "html", null, true);
                    echo "'>
            <td>";
                    // line 50
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], 19, [], "array", false, false, false, 50), "html", null, true);
                    echo "</td>
            <td>";
                    // line 51
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], 20, [], "array", false, false, false, 51), "html", null, true);
                    echo "</td>
            <td>";
                    // line 52
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], 21, [], "array", false, false, false, 52), "html", null, true);
                    echo "</td>
            ";
                    // line 53
                    $context["productUrl"] = twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["histo"], 4, [], "array", false, false, false, 53), ["%20" => "-", " " => "-", "%c3%a9" => "e", "%27" => "", "á" => "a", "é" => "e", "í" => "i", "ó" => "o", "ú" => "u"]);
                    // line 54
                    echo "            <td><a href=\"";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitation", ["slug" => (isset($context["productUrl"]) || array_key_exists("productUrl", $context) ? $context["productUrl"] : (function () { throw new RuntimeError('Variable "productUrl" does not exist.', 54, $this->source); })()), "id" => twig_get_attribute($this->env, $this->source, $context["histo"], 3, [], "array", false, false, false, 54)])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], 4, [], "array", false, false, false, 54), "html", null, true);
                    echo "</a></td>
            <td>";
                    // line 55
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], 22, [], "array", false, false, false, 55), "html", null, true);
                    echo "</td>
            <td class=\"c1 ff-m\">";
                    // line 56
                    if (twig_get_attribute($this->env, $this->source, $context["histo"], 9, [], "array", false, false, false, 56)) {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], 9, [], "array", false, false, false, 56), "html", null, true);
                        echo " €";
                    }
                    echo "</td>
            <td class=\"c1 ff-m\">";
                    // line 57
                    if (twig_get_attribute($this->env, $this->source, $context["histo"], 10, [], "array", false, false, false, 57)) {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], 10, [], "array", false, false, false, 57), "html", null, true);
                        echo " €";
                    }
                    echo "</td>
            <td class=\"c1 ff-m\">";
                    // line 58
                    if (twig_get_attribute($this->env, $this->source, $context["histo"], 11, [], "array", false, false, false, 58)) {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], 11, [], "array", false, false, false, 58), "html", null, true);
                        echo " €";
                    }
                    echo "</td>
            <td>";
                    // line 59
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], 7, [], "array", false, false, false, 59), "html", null, true);
                    echo "</td>
            <td>";
                    // line 60
                    if ((twig_get_attribute($this->env, $this->source, $context["histo"], 17, [], "array", false, false, false, 60) == "PAYMENT")) {
                        echo "Versement effectué";
                    }
                    echo "</td>
            ";
                    // line 61
                    if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                        // line 62
                        echo "            <td class=\"d-flex gap-1 w-max-content\">
            ";
                        // line 63
                        if ( !twig_get_attribute($this->env, $this->source, $context["histo"], 17, [], "array", false, false, false, 63)) {
                            // line 64
                            echo "            ";
                            if (twig_get_attribute($this->env, $this->source, $context["histo"], 22, [], "array", false, false, false, 64)) {
                                // line 65
                                echo "            <form method=\"POST\">
            <input type=\"submit\" class=\"click click-brown\" value=\"Verser\" name=\"payment_made\">
            <input type=\"hidden\" value=\"";
                                // line 67
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], 8, [], "array", false, false, false, 67), "html", null, true);
                                echo "\" name=\"payment_dwelling_id\">
            </form>
            ";
                            }
                            // line 70
                            echo "            ";
                        }
                        // line 71
                        echo "            ";
                    }
                    // line 72
                    echo "            </td>
        </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['histo'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "    </tbody>
</table>
<div class=\"btn-navigate d-flex jc-center gap-2 my-3\">
";
                // line 78
                echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["historical"]) || array_key_exists("historical", $context) ? $context["historical"] : (function () { throw new RuntimeError('Variable "historical" does not exist.', 78, $this->source); })()));
                echo "
</div>
";
            }
            // line 81
            echo "
";
            // line 82
            if ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 82, $this->source); })())) {
                // line 83
                echo "<p class=\"size18 ff-m c2 text-center\">";
                echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 83, $this->source); })()), "html", null, true);
                echo "</p>
";
            }
        }
        // line 86
        echo "
</div>
";
        // line 88
        $this->loadTemplate("inc/parts/footer.html.twig", "inc/pages/users/payment.html.twig", 88)->display($context);
        
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
        return array (  246 => 88,  242 => 86,  235 => 83,  233 => 82,  230 => 81,  224 => 78,  219 => 75,  211 => 72,  208 => 71,  205 => 70,  199 => 67,  195 => 65,  192 => 64,  190 => 63,  187 => 62,  185 => 61,  179 => 60,  175 => 59,  168 => 58,  161 => 57,  154 => 56,  150 => 55,  143 => 54,  141 => 53,  137 => 52,  133 => 51,  129 => 50,  124 => 49,  120 => 48,  117 => 47,  113 => 45,  111 => 44,  97 => 32,  93 => 30,  91 => 29,  77 => 17,  75 => 16,  73 => 15,  67 => 12,  61 => 9,  57 => 8,  52 => 6,  48 => 5,  44 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'inc/parts/head.html.twig' %}
{% include 'inc/parts/nav.html.twig' %}
<div class=\"atypikhouse-container\">
<div class=\"my-2\">
{{ form_start(form) }}
{{ form_label(form.value) }}
<div class=\"d-flex gap-1 my-2\">
{{ form_widget(form.value, {'value': iban, 'pattern':'de'}) }}
{{ form_errors(form.value) }}
<button type=\"submit\" name=\"insert-rib\" class=\"click click-success\">Sauvegarder</button>
</div>
{{ form_end(form) }}
</div>

{% if is_granted('ROLE_ADMIN') or is_granted('ROLE_MODERATOR') %}
{% if historical %}

<table id=\"historical-table\" class=\"text-center ath-table-form\">
    <thead>
        <tr>
            <th colspan=\"3\">Hôte</th>
            <th>Habitation</th>
            <th>IBAN</th>
            <th>Prix total</th>
            <th>Sous total</th>
            <th>Frais de service</th>
            <th>Statut</th>
            <th>Paiement</th>
            {% if is_granted('ROLE_ADMIN') %}
            <th>Action</th>
            {% endif %}
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class=\"bg-c5\">Prénom</td>
            <td class=\"bg-c5\">Nom</td>
            <td class=\"bg-c5\">E-mail</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            {% if is_granted('ROLE_ADMIN') %}
            <td></td>
            {% endif %}
        </tr>
        {% for histo in historical %}
        <tr data-id='{{ histo[8] }}'>
            <td>{{ histo[19] }}</td>
            <td>{{ histo[20] }}</td>
            <td>{{ histo[21] }}</td>
            {% set productUrl = histo[4] | replace({'%20':'-', ' ':'-', '%c3%a9':'e', '%27':'', 'á':'a', 'é':'e', 'í':'i', 'ó':'o', 'ú':'u'}) %}
            <td><a href=\"{{ path('app_habitation', {'slug': productUrl, 'id': histo[3] }) | lower }}\">{{ histo[4] }}</a></td>
            <td>{{ histo[22] }}</td>
            <td class=\"c1 ff-m\">{% if histo[9] %}{{ histo[9] }} €{% endif %}</td>
            <td class=\"c1 ff-m\">{% if histo[10] %}{{ histo[10] }} €{% endif %}</td>
            <td class=\"c1 ff-m\">{% if histo[11] %}{{ histo[11] }} €{% endif %}</td>
            <td>{{ histo[7] }}</td>
            <td>{% if histo[17] == 'PAYMENT' %}Versement effectué{% endif %}</td>
            {% if is_granted('ROLE_ADMIN') %}
            <td class=\"d-flex gap-1 w-max-content\">
            {% if not histo[17] %}
            {% if histo[22] %}
            <form method=\"POST\">
            <input type=\"submit\" class=\"click click-brown\" value=\"Verser\" name=\"payment_made\">
            <input type=\"hidden\" value=\"{{ histo[8] }}\" name=\"payment_dwelling_id\">
            </form>
            {% endif %}
            {% endif %}
            {% endif %}
            </td>
        </tr>
        {% endfor %}
    </tbody>
</table>
<div class=\"btn-navigate d-flex jc-center gap-2 my-3\">
{{ knp_pagination_render(historical) }}
</div>
{% endif %}

{% if message %}
<p class=\"size18 ff-m c2 text-center\">{{ message }}</p>
{% endif %}
{% endif %}

</div>
{% include 'inc/parts/footer.html.twig' %}", "inc/pages/users/payment.html.twig", "/Users/nathandfk/Development/Symfony/final/dsp-project/templates/inc/pages/users/payment.html.twig");
    }
}
