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

/* inc/modules/settings/search.html.twig */
class __TwigTemplate_0cebddaec9aef9aa35fde49dd2a7f013 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/modules/settings/search.html.twig"));

        // line 1
        if ((isset($context["datas"]) || array_key_exists("datas", $context) ? $context["datas"] : (function () { throw new RuntimeError('Variable "datas" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "<table id=\"settings-table\" class=\"text-center ath-table-form\">
    <thead>
        <tr>
            <th>Type</th>
            <th>Donnée</th>
            <th>Supprimé</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["datas"]) || array_key_exists("datas", $context) ? $context["datas"] : (function () { throw new RuntimeError('Variable "datas" does not exist.', 12, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 13
                echo "        <tr data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "id", [], "any", false, false, false, 13), "html", null, true);
                echo "\">
            <td>";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "type", [], "any", false, false, false, 14), "html", null, true);
                echo "</td>
            <td class=\"settings_data_value\">";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "description", [], "any", false, false, false, 15), "html", null, true);
                echo "</td>
            ";
                // line 16
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["data"], "deleted_at", [], "any", false, false, false, 16))) {
                    // line 17
                    echo "            <td>Non</td>
            ";
                } else {
                    // line 19
                    echo "            <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "deleted_at", [], "any", false, false, false, 19), "html", null, true);
                    echo "</td>
            ";
                }
                // line 21
                echo "            <td class=\"d-flex gap-1 w-max-content m-auto\">
                ";
                // line 22
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["data"], "deleted_at", [], "any", false, false, false, 22))) {
                    // line 23
                    echo "                <button name=\"btn-delete-params\" title=\"Supprimer\" class=\"click click-brown m-auto d-flex gap-1 fas fa-times\"></button>
                ";
                } else {
                    // line 25
                    echo "                <button name=\"btn-delete-params\" title=\"Restaurer\" class=\"click click-brown m-auto d-flex gap-1 fas fa-undo\"></button>
                ";
                }
                // line 27
                echo "                <button name=\"btn-update-params\" title=\"Modifier\" class=\"click click-success m-auto d-flex gap-1 fas fa-pen\"></button>
            </td>
        </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "    </tbody>
</table>

";
        }
        // line 35
        if ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 35, $this->source); })())) {
            // line 36
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 36, $this->source); })()), "html", null, true);
            echo "
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/modules/settings/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 36,  111 => 35,  105 => 31,  96 => 27,  92 => 25,  88 => 23,  86 => 22,  83 => 21,  77 => 19,  73 => 17,  71 => 16,  67 => 15,  63 => 14,  58 => 13,  54 => 12,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if datas %}
<table id=\"settings-table\" class=\"text-center ath-table-form\">
    <thead>
        <tr>
            <th>Type</th>
            <th>Donnée</th>
            <th>Supprimé</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    {% for data in datas %}
        <tr data-id=\"{{ data.id }}\">
            <td>{{ data.type }}</td>
            <td class=\"settings_data_value\">{{ data.description }}</td>
            {% if data.deleted_at is empty %}
            <td>Non</td>
            {% else %}
            <td>{{ data.deleted_at }}</td>
            {% endif %}
            <td class=\"d-flex gap-1 w-max-content m-auto\">
                {% if data.deleted_at is empty %}
                <button name=\"btn-delete-params\" title=\"Supprimer\" class=\"click click-brown m-auto d-flex gap-1 fas fa-times\"></button>
                {% else %}
                <button name=\"btn-delete-params\" title=\"Restaurer\" class=\"click click-brown m-auto d-flex gap-1 fas fa-undo\"></button>
                {% endif %}
                <button name=\"btn-update-params\" title=\"Modifier\" class=\"click click-success m-auto d-flex gap-1 fas fa-pen\"></button>
            </td>
        </tr>
    {% endfor %}
    </tbody>
</table>

{% endif %}
{% if message %}
{{ message }}
{% endif %}", "inc/modules/settings/search.html.twig", "/Users/nathandfk/Development/Symfony/final/dsp-project/templates/inc/modules/settings/search.html.twig");
    }
}
