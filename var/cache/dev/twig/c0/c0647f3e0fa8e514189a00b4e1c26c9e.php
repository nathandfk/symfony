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

/* inc/modules/settings/signal.html.twig */
class __TwigTemplate_1ffc8b7746458cce071b0ab2a45ea264 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/modules/settings/signal.html.twig"));

        // line 1
        if ((isset($context["datas"]) || array_key_exists("datas", $context) ? $context["datas"] : (function () { throw new RuntimeError('Variable "datas" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "<div class=\"responsive-table\">
<table id=\"historical-table\" class=\"text-center ath-table-form\">
    <thead>
        <tr>
            ";
            // line 6
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MODERATOR"))) {
                // line 7
                echo "            <th colspan=\"3\">Client</th>
            ";
            }
            // line 9
            echo "            <th>Habitation</th>
            <th>Date</th>
            <th>Statut</th>
            ";
            // line 12
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MODERATOR"))) {
                // line 13
                echo "            <th>Action</th>
            ";
            }
            // line 15
            echo "        </tr>
    </thead>
    <tbody>
        ";
            // line 18
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MODERATOR"))) {
                // line 19
                echo "        <tr>
            <td class=\"bg-c5\">Prénom</td>
            <td class=\"bg-c5\">Nom</td>
            <td class=\"bg-c5\">E-mail</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        ";
            }
            // line 29
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["datas"]) || array_key_exists("datas", $context) ? $context["datas"] : (function () { throw new RuntimeError('Variable "datas" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 30
                echo "        <tr data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], 7, [], "array", false, false, false, 30), "html", null, true);
                echo "\">

            ";
                // line 32
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MODERATOR"))) {
                    // line 33
                    echo "            <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], 0, [], "array", false, false, false, 33), "html", null, true);
                    echo "</td>
            <td>";
                    // line 34
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], 1, [], "array", false, false, false, 34), "html", null, true);
                    echo "</td>
            <td>";
                    // line 35
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], 2, [], "array", false, false, false, 35), "html", null, true);
                    echo "</td>
            ";
                }
                // line 37
                echo "            <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], 4, [], "array", false, false, false, 37), "html", null, true);
                echo "</td>
            <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], 5, [], "array", false, false, false, 38), "d-m-Y"), "html", null, true);
                echo "</td>
            <td>";
                // line 39
                if ((twig_get_attribute($this->env, $this->source, $context["data"], 6, [], "array", false, false, false, 39) == "IN_PROGRESS")) {
                    echo "En cours";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["data"], 6, [], "array", false, false, false, 39) == "CLOSED")) {
                    echo "Signalement traité";
                }
                echo "</td>
            ";
                // line 40
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MODERATOR"))) {
                    // line 41
                    echo "            <td>
            ";
                    // line 42
                    if ((twig_get_attribute($this->env, $this->source, $context["data"], 6, [], "array", false, false, false, 42) == "IN_PROGRESS")) {
                        // line 43
                        echo "            <input type=\"submit\" class=\"click click-success m-auto\" id=\"closed_folder\" data-link=\"";
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dwelling_closed_signal");
                        echo "\" value=\"Clore le dossier\">
            ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 44
$context["data"], 6, [], "array", false, false, false, 44) == "CLOSED")) {
                        // line 45
                        echo "            <input type=\"submit\" class=\"click click-brown m-auto\" id=\"closed_folder\" data-link=\"";
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dwelling_closed_signal");
                        echo "\" value=\"Réouvrir\">
            ";
                    }
                    // line 47
                    echo "            </td>
            ";
                }
                // line 49
                echo "        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "    </tbody>
</table>
</div>
<div class=\"btn-navigate paginate-historical-signal d-flex jc-center gap-2 my-3\">
";
            // line 55
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["datas"]) || array_key_exists("datas", $context) ? $context["datas"] : (function () { throw new RuntimeError('Variable "datas" does not exist.', 55, $this->source); })()));
            echo "
</div>
";
        }
        // line 58
        echo "
";
        // line 59
        if ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 59, $this->source); })())) {
            // line 60
            echo "<p class=\"size18 ff-m c2 text-center\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 60, $this->source); })()), "html", null, true);
            echo "</p>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/modules/settings/signal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 60,  174 => 59,  171 => 58,  165 => 55,  159 => 51,  152 => 49,  148 => 47,  142 => 45,  140 => 44,  135 => 43,  133 => 42,  130 => 41,  128 => 40,  120 => 39,  116 => 38,  111 => 37,  106 => 35,  102 => 34,  97 => 33,  95 => 32,  89 => 30,  84 => 29,  72 => 19,  70 => 18,  65 => 15,  61 => 13,  59 => 12,  54 => 9,  50 => 7,  48 => 6,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if datas %}
<div class=\"responsive-table\">
<table id=\"historical-table\" class=\"text-center ath-table-form\">
    <thead>
        <tr>
            {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_MODERATOR') %}
            <th colspan=\"3\">Client</th>
            {% endif %}
            <th>Habitation</th>
            <th>Date</th>
            <th>Statut</th>
            {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_MODERATOR') %}
            <th>Action</th>
            {% endif %}
        </tr>
    </thead>
    <tbody>
        {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_MODERATOR') %}
        <tr>
            <td class=\"bg-c5\">Prénom</td>
            <td class=\"bg-c5\">Nom</td>
            <td class=\"bg-c5\">E-mail</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        {% endif %}
        {% for data in datas %}
        <tr data-id=\"{{ data[7] }}\">

            {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_MODERATOR') %}
            <td>{{ data[0] }}</td>
            <td>{{ data[1] }}</td>
            <td>{{ data[2] }}</td>
            {% endif %}
            <td>{{ data[4] }}</td>
            <td>{{ data[5]|date(\"d-m-Y\") }}</td>
            <td>{% if data[6]==\"IN_PROGRESS\" %}En cours{% elseif data[6]==\"CLOSED\" %}Signalement traité{% endif %}</td>
            {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_MODERATOR') %}
            <td>
            {% if data[6]==\"IN_PROGRESS\" %}
            <input type=\"submit\" class=\"click click-success m-auto\" id=\"closed_folder\" data-link=\"{{ path('dwelling_closed_signal') }}\" value=\"Clore le dossier\">
            {% elseif data[6]==\"CLOSED\" %}
            <input type=\"submit\" class=\"click click-brown m-auto\" id=\"closed_folder\" data-link=\"{{ path('dwelling_closed_signal') }}\" value=\"Réouvrir\">
            {% endif %}
            </td>
            {% endif %}
        </tr>
        {% endfor %}
    </tbody>
</table>
</div>
<div class=\"btn-navigate paginate-historical-signal d-flex jc-center gap-2 my-3\">
{{ knp_pagination_render(datas) }}
</div>
{% endif %}

{% if message %}
<p class=\"size18 ff-m c2 text-center\">{{ message }}</p>
{% endif %}", "inc/modules/settings/signal.html.twig", "/Users/nathandfk/Development/Symfony/final/dsp-project/templates/inc/modules/settings/signal.html.twig");
    }
}
