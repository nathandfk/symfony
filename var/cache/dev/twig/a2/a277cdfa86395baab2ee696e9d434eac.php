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

/* inc/pages/admin/users-list.html.twig */
class __TwigTemplate_8bba5fda603451be005351b380d5d48c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/pages/admin/users-list.html.twig"));

        // line 1
        if ((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "<table id=\"users-table\" class=\"text-center ath-table-form\">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Roles</th>
            <th>Hôte</th>
            <th>Détails</th>
        </tr>
    </thead>
    <tbody>
    ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 14, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 15
                echo "        <tr data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 15), "html", null, true);
                echo "\">
            <td>";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "last_name", [], "any", false, false, false, 16), "html", null, true);
                echo "</td>
            <td>";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "first_name", [], "any", false, false, false, 17), "html", null, true);
                echo "</td>
            <td>";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 18), "html", null, true);
                echo "</td>
            ";
                // line 19
                $context["role"] = twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 19), ["[" => "", "]" => "", "\"" => ""]);
                // line 20
                echo "            <td>";
                echo twig_escape_filter($this->env, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 20, $this->source); })()), "html", null, true);
                echo "</td>
            <td>";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "host", [], "any", false, false, false, 21), "html", null, true);
                echo "</td>
            <td class=\"d-flex gap-1\">
                <button name=\"btn-see-user\" data-id=\"";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 23), "html", null, true);
                echo "\" data-link=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_view");
                echo "\" class=\"click click-success m-auto d-flex gap-1\">Voir <i class=\"fas fa-eye\"></i></button>
            </td>
        </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "    </tbody>
</table>

";
        }
        // line 31
        if ((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 31, $this->source); })())) {
            // line 32
            echo twig_escape_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 32, $this->source); })()), "html", null, true);
            echo "
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/pages/admin/users-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 32,  107 => 31,  101 => 27,  89 => 23,  84 => 21,  79 => 20,  77 => 19,  73 => 18,  69 => 17,  65 => 16,  60 => 15,  56 => 14,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if users %}
<table id=\"users-table\" class=\"text-center ath-table-form\">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Roles</th>
            <th>Hôte</th>
            <th>Détails</th>
        </tr>
    </thead>
    <tbody>
    {% for user in users %}
        <tr data-id=\"{{ user.id }}\">
            <td>{{ user.last_name }}</td>
            <td>{{ user.first_name }}</td>
            <td>{{ user.email }}</td>
            {% set role = user.roles | replace({'[':'', ']':'', '\"':''}) %}
            <td>{{ role }}</td>
            <td>{{ user.host }}</td>
            <td class=\"d-flex gap-1\">
                <button name=\"btn-see-user\" data-id=\"{{ user.id }}\" data-link=\"{{ path('admin_user_view') }}\" class=\"click click-success m-auto d-flex gap-1\">Voir <i class=\"fas fa-eye\"></i></button>
            </td>
        </tr>
    {% endfor %}
    </tbody>
</table>

{% endif %}
{% if errors %}
{{ errors }}
{% endif %}", "inc/pages/admin/users-list.html.twig", "/Users/nathandfk/Development/Symfony/final/dsp-project/templates/inc/pages/admin/users-list.html.twig");
    }
}
