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

/* inc/pages/users/favorite.html.twig */
class __TwigTemplate_86770764644741057c121e8ed57dc3f2 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/pages/users/favorite.html.twig"));

        // line 1
        $this->loadTemplate("inc/parts/head.html.twig", "inc/pages/users/favorite.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("inc/parts/nav.html.twig", "inc/pages/users/favorite.html.twig", 2)->display($context);
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 4
            echo "    <div class=\"alert alert-success\">
        ";
            // line 5
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            echo "    <div class=\"alert alert-error\">
        ";
            // line 10
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "<div class=\"atypikhouse-container\">
";
        // line 14
        if ((isset($context["datas"]) || array_key_exists("datas", $context) ? $context["datas"] : (function () { throw new RuntimeError('Variable "datas" does not exist.', 14, $this->source); })())) {
            // line 15
            echo "<table id=\"favorite-table\" class=\"text-center ath-table-form\">
    <thead>
        <tr>
            <th>Titre</th>
            <th>Prix</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["datas"]) || array_key_exists("datas", $context) ? $context["datas"] : (function () { throw new RuntimeError('Variable "datas" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["favorite"]) {
                // line 25
                echo "        <tr data-id='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["favorite"], "id", [], "any", false, false, false, 25), "html", null, true);
                echo "'>
            <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["favorite"], "title", [], "any", false, false, false, 26), "html", null, true);
                echo "</td>
            <td class=\"ff-m c1\">";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["favorite"], "price", [], "any", false, false, false, 27), "html", null, true);
                echo " €</td>
            <td>
            <form method=\"POST\">
            <input type=\"submit\" class=\"click click-brown m-auto\" name=\"favorite_delete\" value=\"Supprimer\">
            <input type=\"hidden\" name=\"favorite_id\" value=\"";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["favorite"], "id", [], "any", false, false, false, 31), "html", null, true);
                echo "\">
            </form>
            </td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['favorite'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "    </tbody>
</table>

<div class=\"btn-navigate paginate-datas-client d-flex jc-center gap-2 my-3\">
";
            // line 40
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["datas"]) || array_key_exists("datas", $context) ? $context["datas"] : (function () { throw new RuntimeError('Variable "datas" does not exist.', 40, $this->source); })()));
            echo "
</div>
";
        }
        // line 43
        echo "
";
        // line 44
        if ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 44, $this->source); })())) {
            // line 45
            echo "<p class=\"size18 ff-m c2 text-center\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 45, $this->source); })()), "html", null, true);
            echo "</p>
";
        }
        // line 47
        echo "</div>
";
        // line 48
        $this->loadTemplate("inc/parts/footer.html.twig", "inc/pages/users/favorite.html.twig", 48)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/pages/users/favorite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 48,  146 => 47,  140 => 45,  138 => 44,  135 => 43,  129 => 40,  123 => 36,  112 => 31,  105 => 27,  101 => 26,  96 => 25,  92 => 24,  81 => 15,  79 => 14,  76 => 13,  67 => 10,  64 => 9,  60 => 8,  51 => 5,  48 => 4,  44 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'inc/parts/head.html.twig' %}
{% include 'inc/parts/nav.html.twig' %}
{% for message in app.flashes('success') %}
    <div class=\"alert alert-success\">
        {{ message }}
    </div>
{% endfor %}
{% for message in app.flashes('error') %}
    <div class=\"alert alert-error\">
        {{ message }}
    </div>
{% endfor %}
<div class=\"atypikhouse-container\">
{% if datas %}
<table id=\"favorite-table\" class=\"text-center ath-table-form\">
    <thead>
        <tr>
            <th>Titre</th>
            <th>Prix</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        {% for favorite in datas %}
        <tr data-id='{{ favorite.id }}'>
            <td>{{ favorite.title }}</td>
            <td class=\"ff-m c1\">{{ favorite.price }} €</td>
            <td>
            <form method=\"POST\">
            <input type=\"submit\" class=\"click click-brown m-auto\" name=\"favorite_delete\" value=\"Supprimer\">
            <input type=\"hidden\" name=\"favorite_id\" value=\"{{ favorite.id }}\">
            </form>
            </td>
        </tr>
        {% endfor %}
    </tbody>
</table>

<div class=\"btn-navigate paginate-datas-client d-flex jc-center gap-2 my-3\">
{{ knp_pagination_render(datas) }}
</div>
{% endif %}

{% if message %}
<p class=\"size18 ff-m c2 text-center\">{{ message }}</p>
{% endif %}
</div>
{% include 'inc/parts/footer.html.twig' %}", "inc/pages/users/favorite.html.twig", "/Users/nathandfk/Development/Symfony/final/dsp-project/templates/inc/pages/users/favorite.html.twig");
    }
}
