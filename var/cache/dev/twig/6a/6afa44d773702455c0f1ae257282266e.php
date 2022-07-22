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

/* inc/modules/historical/historical-client.html.twig */
class __TwigTemplate_16dc571c8881c878804297ab68a13dd5 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/modules/historical/historical-client.html.twig"));

        // line 1
        if ((isset($context["historical"]) || array_key_exists("historical", $context) ? $context["historical"] : (function () { throw new RuntimeError('Variable "historical" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "<table id=\"historical-table\" class=\"text-center ath-table-form\">
    <thead>
        <tr>
            <th>Habitation</th>
            <th>Période de la réservation</th>
            <th>Prix</th>
            <th>Statut</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["historical"]) || array_key_exists("historical", $context) ? $context["historical"] : (function () { throw new RuntimeError('Variable "historical" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["histo"]) {
                // line 14
                echo "        <tr data-id='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], 8, [], "array", false, false, false, 14), "html", null, true);
                echo "'>
            ";
                // line 15
                $context["productUrl"] = twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["histo"], 4, [], "array", false, false, false, 15), ["%20" => "-", " " => "-", "%c3%a9" => "e", "%27" => "", "á" => "a", "é" => "e", "í" => "i", "ó" => "o", "ú" => "u"]);
                // line 16
                echo "            <td><a href=\"";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitation", ["slug" => (isset($context["productUrl"]) || array_key_exists("productUrl", $context) ? $context["productUrl"] : (function () { throw new RuntimeError('Variable "productUrl" does not exist.', 16, $this->source); })()), "id" => twig_get_attribute($this->env, $this->source, $context["histo"], 3, [], "array", false, false, false, 16)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], 4, [], "array", false, false, false, 16), "html", null, true);
                echo "</a></td>
            <td>";
                // line 17
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], 5, [], "array", false, false, false, 17), "d-m-Y"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], 6, [], "array", false, false, false, 17), "d-m-Y"), "html", null, true);
                echo "</td>
            <td class=\"c1 ff-m\">";
                // line 18
                if (twig_get_attribute($this->env, $this->source, $context["histo"], 9, [], "array", false, false, false, 18)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], 9, [], "array", false, false, false, 18), "html", null, true);
                    echo " €";
                }
                echo "</td>
            <td>";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], 7, [], "array", false, false, false, 19), "html", null, true);
                echo "</td>
            <td>
            ";
                // line 21
                if ((((twig_get_attribute($this->env, $this->source, $context["histo"], 7, [], "array", false, false, false, 21) == "RESERVED") || (twig_get_attribute($this->env, $this->source, $context["histo"], 7, [], "array", false, false, false, 21) == "CONFIRMED")) && twig_get_attribute($this->env, $this->source, $context["histo"], 15, [], "array", false, false, false, 21))) {
                    // line 22
                    echo "            <input type=\"submit\" class=\"click click-brown\" value=\"Annuler\" name=\"annuled\">
            ";
                }
                // line 24
                echo "            </td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['histo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "    </tbody>
</table>

<div class=\"btn-navigate paginate-historical-client d-flex jc-center gap-2 my-3\">
";
            // line 31
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["historical"]) || array_key_exists("historical", $context) ? $context["historical"] : (function () { throw new RuntimeError('Variable "historical" does not exist.', 31, $this->source); })()));
            echo "
</div>
";
        }
        // line 34
        echo "
";
        // line 35
        if ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 35, $this->source); })())) {
            // line 36
            echo "<p class=\"size18 ff-m c2 text-center\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 36, $this->source); })()), "html", null, true);
            echo "</p>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/modules/historical/historical-client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 36,  120 => 35,  117 => 34,  111 => 31,  105 => 27,  97 => 24,  93 => 22,  91 => 21,  86 => 19,  79 => 18,  73 => 17,  66 => 16,  64 => 15,  59 => 14,  55 => 13,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if historical %}
<table id=\"historical-table\" class=\"text-center ath-table-form\">
    <thead>
        <tr>
            <th>Habitation</th>
            <th>Période de la réservation</th>
            <th>Prix</th>
            <th>Statut</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        {% for histo in historical %}
        <tr data-id='{{ histo[8] }}'>
            {% set productUrl = histo[4] | replace({'%20':'-', ' ':'-', '%c3%a9':'e', '%27':'', 'á':'a', 'é':'e', 'í':'i', 'ó':'o', 'ú':'u'}) %}
            <td><a href=\"{{ path('app_habitation', {'slug': productUrl, 'id': histo[3] }) | lower }}\">{{ histo[4] }}</a></td>
            <td>{{ histo[5]|date(\"d-m-Y\") }} - {{ histo[6]|date(\"d-m-Y\") }}</td>
            <td class=\"c1 ff-m\">{% if histo[9] %}{{ histo[9] }} €{% endif %}</td>
            <td>{{ histo[7] }}</td>
            <td>
            {% if (histo[7] == \"RESERVED\" or histo[7] == \"CONFIRMED\") and histo[15] %}
            <input type=\"submit\" class=\"click click-brown\" value=\"Annuler\" name=\"annuled\">
            {% endif %}
            </td>
        </tr>
        {% endfor %}
    </tbody>
</table>

<div class=\"btn-navigate paginate-historical-client d-flex jc-center gap-2 my-3\">
{{ knp_pagination_render(historical) }}
</div>
{% endif %}

{% if message %}
<p class=\"size18 ff-m c2 text-center\">{{ message }}</p>
{% endif %}", "inc/modules/historical/historical-client.html.twig", "/Users/nathandfk/Development/Symfony/final/dsp-project/templates/inc/modules/historical/historical-client.html.twig");
    }
}
