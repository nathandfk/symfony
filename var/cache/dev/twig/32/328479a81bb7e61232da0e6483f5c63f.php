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

/* inc/modules/historical/historical-host.html.twig */
class __TwigTemplate_aa6b4c99513189727820be5677dfb805 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/modules/historical/historical-host.html.twig"));

        // line 1
        if ((isset($context["historical"]) || array_key_exists("historical", $context) ? $context["historical"] : (function () { throw new RuntimeError('Variable "historical" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "<p>Veuillez renseigner votre IBAN dans <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payment");
            echo "\" class=\"text-link-success\">la page paiement</a> pour recevoir vos paiement</p>
<p>Une fois votre paiement est effectué par l'administration, une mention \"Versement effectué\" apparaitra sur la colonne paiement de votre historique</p>
<p>Etant hôte vous percevez des sous totaux, le total comprend les frais de service taxé directement aux clients</p>
<p>Une fois le versement effectué, votre argent apparaitra dans votre compte bancaire sous un délai de 10 jours</p>
<table id=\"historical-table\" class=\"text-center ath-table-form\">
    <thead>
        <tr>
            <th colspan=\"3\">Client</th>
            <th>Habitation</th>
            <th>Période de la réservation</th>
            <th>Prix total</th>
            <th>Sous total</th>
            <th>Frais de service</th>
            <th>Statut</th>
            <th>Paiement</th>
            <th>Action</th>
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
            <td></td>
        </tr>
        ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["historical"]) || array_key_exists("historical", $context) ? $context["historical"] : (function () { throw new RuntimeError('Variable "historical" does not exist.', 32, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["histo"]) {
                // line 33
                echo "        <tr data-id='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], 8, [], "array", false, false, false, 33), "html", null, true);
                echo "'>
            <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], 0, [], "array", false, false, false, 34), "html", null, true);
                echo "</td>
            <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], 1, [], "array", false, false, false, 35), "html", null, true);
                echo "</td>
            <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], 2, [], "array", false, false, false, 36), "html", null, true);
                echo "</td>
            ";
                // line 37
                $context["productUrl"] = twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["histo"], 4, [], "array", false, false, false, 37), ["%20" => "-", " " => "-", "%c3%a9" => "e", "%27" => "", "á" => "a", "é" => "e", "í" => "i", "ó" => "o", "ú" => "u"]);
                // line 38
                echo "            <td><a href=\"";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitation", ["slug" => (isset($context["productUrl"]) || array_key_exists("productUrl", $context) ? $context["productUrl"] : (function () { throw new RuntimeError('Variable "productUrl" does not exist.', 38, $this->source); })()), "id" => twig_get_attribute($this->env, $this->source, $context["histo"], 3, [], "array", false, false, false, 38)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], 4, [], "array", false, false, false, 38), "html", null, true);
                echo "</a></td>
            <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], 5, [], "array", false, false, false, 39), "d-m-Y"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], 6, [], "array", false, false, false, 39), "d-m-Y"), "html", null, true);
                echo "</td>
            <td class=\"c1 ff-m\">";
                // line 40
                if (twig_get_attribute($this->env, $this->source, $context["histo"], 9, [], "array", false, false, false, 40)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], 9, [], "array", false, false, false, 40), "html", null, true);
                    echo " €";
                }
                echo "</td>
            <td class=\"c1 ff-m\">";
                // line 41
                if (twig_get_attribute($this->env, $this->source, $context["histo"], 10, [], "array", false, false, false, 41)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], 10, [], "array", false, false, false, 41), "html", null, true);
                    echo " €";
                }
                echo "</td>
            <td class=\"c1 ff-m\">";
                // line 42
                if (twig_get_attribute($this->env, $this->source, $context["histo"], 11, [], "array", false, false, false, 42)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], 11, [], "array", false, false, false, 42), "html", null, true);
                    echo " €";
                }
                echo "</td>
            <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], 7, [], "array", false, false, false, 43), "html", null, true);
                echo "</td>
            <td>";
                // line 44
                if ((twig_get_attribute($this->env, $this->source, $context["histo"], 7, [], "array", false, false, false, 44) == "CONFIRMED")) {
                    if ((twig_get_attribute($this->env, $this->source, $context["histo"], 17, [], "array", false, false, false, 44) == "PAYMENT")) {
                        echo "Versement effectué";
                    }
                }
                echo "</td>
            <td class=\"d-flex gap-1 w-max-content\">
            ";
                // line 46
                if ((((twig_get_attribute($this->env, $this->source, $context["histo"], 7, [], "array", false, false, false, 46) == "RESERVED") || (twig_get_attribute($this->env, $this->source, $context["histo"], 7, [], "array", false, false, false, 46) == "UNAVAILABLE")) && twig_get_attribute($this->env, $this->source, $context["histo"], 15, [], "array", false, false, false, 46))) {
                    // line 47
                    echo "            <input type=\"submit\" class=\"click click-brown\" value=\"Annuler\" name=\"annuled_by_host\">
            ";
                    // line 48
                    if (twig_get_attribute($this->env, $this->source, $context["histo"], 9, [], "array", false, false, false, 48)) {
                        echo "   
            <input type=\"submit\" class=\"click click-success\" value=\"Confirmer\" name=\"confirmed\">
            ";
                    }
                    // line 51
                    echo "            ";
                }
                // line 52
                echo "            </td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['histo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "    </tbody>
</table>
<div class=\"btn-navigate paginate-historical-host d-flex jc-center gap-2 my-3\">
";
            // line 58
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["historical"]) || array_key_exists("historical", $context) ? $context["historical"] : (function () { throw new RuntimeError('Variable "historical" does not exist.', 58, $this->source); })()));
            echo "
</div>
";
        }
        // line 61
        echo "
";
        // line 62
        if ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 62, $this->source); })())) {
            // line 63
            echo "<p class=\"size18 ff-m c2 text-center\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 63, $this->source); })()), "html", null, true);
            echo "</p>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/modules/historical/historical-host.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 63,  182 => 62,  179 => 61,  173 => 58,  168 => 55,  160 => 52,  157 => 51,  151 => 48,  148 => 47,  146 => 46,  137 => 44,  133 => 43,  126 => 42,  119 => 41,  112 => 40,  106 => 39,  99 => 38,  97 => 37,  93 => 36,  89 => 35,  85 => 34,  80 => 33,  76 => 32,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if historical %}
<p>Veuillez renseigner votre IBAN dans <a href=\"{{ path('payment') }}\" class=\"text-link-success\">la page paiement</a> pour recevoir vos paiement</p>
<p>Une fois votre paiement est effectué par l'administration, une mention \"Versement effectué\" apparaitra sur la colonne paiement de votre historique</p>
<p>Etant hôte vous percevez des sous totaux, le total comprend les frais de service taxé directement aux clients</p>
<p>Une fois le versement effectué, votre argent apparaitra dans votre compte bancaire sous un délai de 10 jours</p>
<table id=\"historical-table\" class=\"text-center ath-table-form\">
    <thead>
        <tr>
            <th colspan=\"3\">Client</th>
            <th>Habitation</th>
            <th>Période de la réservation</th>
            <th>Prix total</th>
            <th>Sous total</th>
            <th>Frais de service</th>
            <th>Statut</th>
            <th>Paiement</th>
            <th>Action</th>
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
            <td></td>
        </tr>
        {% for histo in historical %}
        <tr data-id='{{ histo[8] }}'>
            <td>{{ histo[0] }}</td>
            <td>{{ histo[1] }}</td>
            <td>{{ histo[2] }}</td>
            {% set productUrl = histo[4] | replace({'%20':'-', ' ':'-', '%c3%a9':'e', '%27':'', 'á':'a', 'é':'e', 'í':'i', 'ó':'o', 'ú':'u'}) %}
            <td><a href=\"{{ path('app_habitation', {'slug': productUrl, 'id': histo[3] }) | lower }}\">{{ histo[4] }}</a></td>
            <td>{{ histo[5]|date(\"d-m-Y\") }} - {{ histo[6]|date(\"d-m-Y\") }}</td>
            <td class=\"c1 ff-m\">{% if histo[9] %}{{ histo[9] }} €{% endif %}</td>
            <td class=\"c1 ff-m\">{% if histo[10] %}{{ histo[10] }} €{% endif %}</td>
            <td class=\"c1 ff-m\">{% if histo[11] %}{{ histo[11] }} €{% endif %}</td>
            <td>{{ histo[7] }}</td>
            <td>{% if histo[7] == \"CONFIRMED\" %}{% if histo[17] == 'PAYMENT' %}Versement effectué{% endif %}{% endif %}</td>
            <td class=\"d-flex gap-1 w-max-content\">
            {% if (histo[7] == \"RESERVED\" or histo[7] == \"UNAVAILABLE\") and histo[15] %}
            <input type=\"submit\" class=\"click click-brown\" value=\"Annuler\" name=\"annuled_by_host\">
            {% if histo[9] %}   
            <input type=\"submit\" class=\"click click-success\" value=\"Confirmer\" name=\"confirmed\">
            {% endif %}
            {% endif %}
            </td>
        </tr>
        {% endfor %}
    </tbody>
</table>
<div class=\"btn-navigate paginate-historical-host d-flex jc-center gap-2 my-3\">
{{ knp_pagination_render(historical) }}
</div>
{% endif %}

{% if message %}
<p class=\"size18 ff-m c2 text-center\">{{ message }}</p>
{% endif %}", "inc/modules/historical/historical-host.html.twig", "/Users/nathandfk/Development/Symfony/final/dsp-project/templates/inc/modules/historical/historical-host.html.twig");
    }
}
