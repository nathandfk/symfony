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

/* inc/modules/host/list.html.twig */
class __TwigTemplate_1abcf3c076b8d31bacf158f265b812a0 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/modules/host/list.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "user", [], "any", false, false, false, 1)) {
            // line 2
            if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_HOST")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MODERATOR"))) {
                // line 3
                if ((isset($context["datas"]) || array_key_exists("datas", $context) ? $context["datas"] : (function () { throw new RuntimeError('Variable "datas" does not exist.', 3, $this->source); })())) {
                    // line 4
                    echo "<div class=\"my-2\">Les habitats archivés sont définitivements et automatiquements supprimés de notre base de données au bout d'une année</div>
<div class=\"responsive-table\">
<table id=\"historical-table\" class=\"text-center ath-table-form\">
    <thead>
        <tr>
            <th>Image</th>
            <th>Titre</th>
            <th>Prix</th>
            <th>Ville</th>
            <th>Etat</th>
            <th>Statut</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        ";
                    // line 19
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["datas"]) || array_key_exists("datas", $context) ? $context["datas"] : (function () { throw new RuntimeError('Variable "datas" does not exist.', 19, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["dwelling"]) {
                        // line 20
                        echo "        <tr data-id=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dwelling"], "id", [], "any", false, false, false, 20), "html", null, true);
                        echo "\">
            ";
                        // line 21
                        $context["pictures"] = twig_split_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["dwelling"], "pictures", [], "any", false, false, false, 21), ["\"" => "", "[" => "", "]" => ""]), ",");
                        // line 22
                        echo "            <td class=\"w-7r h-7r\"><img src=\"";
                        echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 22, $this->source); })()), "html", null, true);
                        echo "/uploads/dwellings/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pictures"]) || array_key_exists("pictures", $context) ? $context["pictures"] : (function () { throw new RuntimeError('Variable "pictures" does not exist.', 22, $this->source); })()), 0, [], "array", false, false, false, 22), "html", null, true);
                        echo "\"></td>
            <td>";
                        // line 23
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dwelling"], "title", [], "any", false, false, false, 23), "html", null, true);
                        echo "</td>
            <td>";
                        // line 24
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dwelling"], "price", [], "any", false, false, false, 24), "html", null, true);
                        echo "</td>
            <td>";
                        // line 25
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dwelling"], "city", [], "any", false, false, false, 25), "html", null, true);
                        echo "</td>
            <td>";
                        // line 26
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dwelling"], "state", [], "any", false, false, false, 26), "html", null, true);
                        echo "</td>
            ";
                        // line 27
                        if (twig_get_attribute($this->env, $this->source, $context["dwelling"], "deleted_at", [], "any", false, false, false, 27)) {
                            echo "<td class=\"ff-m size16 c2\">Archivé</td>";
                        } else {
                            echo "<td class=\"ff-m size16 c1\">Actif</td>";
                        }
                        // line 28
                        echo "            ";
                        $context["productUrl"] = twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["dwelling"], "title", [], "any", false, false, false, 28), ["%20" => "-", " " => "-", "%c3%a9" => "e", "%27" => "", "á" => "a", "é" => "e", "í" => "i", "ó" => "o", "ú" => "u"]);
                        // line 29
                        echo "            <td class=\"d-flex gap-1 w-max-content m-auto ai-center w-100\">
                ";
                        // line 30
                        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30)) {
                            // line 31
                            echo "                    ";
                            // line 32
                            echo "                    <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_dwelling", ["id" => twig_get_attribute($this->env, $this->source, $context["dwelling"], "id", [], "any", false, false, false, 32)]), "html", null, true);
                            echo "\" class=\"click click-brown\">Modifier</a>
                    ";
                            // line 34
                            echo "                    <a href='";
                            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitation", ["slug" => (isset($context["productUrl"]) || array_key_exists("productUrl", $context) ? $context["productUrl"] : (function () { throw new RuntimeError('Variable "productUrl" does not exist.', 34, $this->source); })()), "id" => twig_get_attribute($this->env, $this->source, $context["dwelling"], "id", [], "any", false, false, false, 34)])), "html", null, true);
                            echo "' class=\"click click-success\">Voir</a>
                    ";
                            // line 35
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35) == twig_get_attribute($this->env, $this->source, $context["dwelling"], "user_id", [], "any", false, false, false, 35))) {
                                // line 36
                                echo "                        ";
                                if ((twig_get_attribute($this->env, $this->source, $context["dwelling"], "deleted_at", [], "any", false, false, false, 36) == null)) {
                                    // line 37
                                    echo "                        <button title=\"Archiver\" id=\"dwelling-delete\" class=\"click click-danger\">Archiver</button>
                        ";
                                } else {
                                    // line 39
                                    echo "                        <button title=\"Restaurer\" id=\"dwelling-delete\" class=\"click click-success\">Restaurer</button>
                        ";
                                }
                                // line 41
                                echo "                    ";
                            }
                            // line 42
                            echo "                    ";
                            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MODERATOR"))) {
                                // line 43
                                echo "                        ";
                                if ((twig_get_attribute($this->env, $this->source, $context["dwelling"], "activate", [], "any", false, false, false, 43) == true)) {
                                    // line 44
                                    echo "                        <button title=\"Bloquer\" id=\"dwelling-activate\" class=\"click click-danger\">Bloquer</button>
                        ";
                                } else {
                                    // line 46
                                    echo "                        <button title=\"Débloquer\" id=\"dwelling-activate\" class=\"click click-success\">Débloquer</button>
                        ";
                                }
                                // line 48
                                echo "                    ";
                            }
                            // line 49
                            echo "                ";
                        }
                        // line 50
                        echo "            </td>
        </tr>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dwelling'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 53
                    echo "    </tbody>
</table>
</div>
<div class=\"btn-navigate paginate-dwelling-list d-flex jc-center gap-2 my-3\">
";
                    // line 57
                    echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["datas"]) || array_key_exists("datas", $context) ? $context["datas"] : (function () { throw new RuntimeError('Variable "datas" does not exist.', 57, $this->source); })()));
                    echo "
</div>
";
                }
                // line 60
                echo "
";
                // line 61
                if ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 61, $this->source); })())) {
                    // line 62
                    echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 62, $this->source); })()), "html", null, true);
                    echo "
";
                }
            }
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/modules/host/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 62,  182 => 61,  179 => 60,  173 => 57,  167 => 53,  159 => 50,  156 => 49,  153 => 48,  149 => 46,  145 => 44,  142 => 43,  139 => 42,  136 => 41,  132 => 39,  128 => 37,  125 => 36,  123 => 35,  118 => 34,  113 => 32,  111 => 31,  109 => 30,  106 => 29,  103 => 28,  97 => 27,  93 => 26,  89 => 25,  85 => 24,  81 => 23,  74 => 22,  72 => 21,  67 => 20,  63 => 19,  46 => 4,  44 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if app.user %}
{% if is_granted('ROLE_ADMIN') or is_granted('ROLE_HOST') or is_granted('ROLE_MODERATOR') %}
{% if datas %}
<div class=\"my-2\">Les habitats archivés sont définitivements et automatiquements supprimés de notre base de données au bout d'une année</div>
<div class=\"responsive-table\">
<table id=\"historical-table\" class=\"text-center ath-table-form\">
    <thead>
        <tr>
            <th>Image</th>
            <th>Titre</th>
            <th>Prix</th>
            <th>Ville</th>
            <th>Etat</th>
            <th>Statut</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        {% for dwelling in datas %}
        <tr data-id=\"{{ dwelling.id }}\">
            {% set pictures = dwelling.pictures|replace({'\"':'', '[':'', ']':''})|split(',') %}
            <td class=\"w-7r h-7r\"><img src=\"{{ ath_link }}/uploads/dwellings/{{ pictures[0] }}\"></td>
            <td>{{ dwelling.title }}</td>
            <td>{{ dwelling.price }}</td>
            <td>{{ dwelling.city }}</td>
            <td>{{ dwelling.state }}</td>
            {% if dwelling.deleted_at %}<td class=\"ff-m size16 c2\">Archivé</td>{% else %}<td class=\"ff-m size16 c1\">Actif</td>{% endif %}
            {% set productUrl = dwelling.title | replace({'%20':'-', ' ':'-', '%c3%a9':'e', '%27':'', 'á':'a', 'é':'e', 'í':'i', 'ó':'o', 'ú':'u'}) %}
            <td class=\"d-flex gap-1 w-max-content m-auto ai-center w-100\">
                {% if app.user %}
                    {# {% if app.user.id == dwelling.user_id %} #}
                    <a href=\"{{ path('edit_dwelling', {id: dwelling.id}) }}\" class=\"click click-brown\">Modifier</a>
                    {# {% endif %} #}
                    <a href='{{ path('app_habitation', {'slug': productUrl, 'id': dwelling.id}) | lower }}' class=\"click click-success\">Voir</a>
                    {% if app.user.id == dwelling.user_id %}
                        {% if dwelling.deleted_at == null %}
                        <button title=\"Archiver\" id=\"dwelling-delete\" class=\"click click-danger\">Archiver</button>
                        {% else %}
                        <button title=\"Restaurer\" id=\"dwelling-delete\" class=\"click click-success\">Restaurer</button>
                        {% endif %}
                    {% endif %}
                    {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_MODERATOR') %}
                        {% if dwelling.activate == true %}
                        <button title=\"Bloquer\" id=\"dwelling-activate\" class=\"click click-danger\">Bloquer</button>
                        {% else %}
                        <button title=\"Débloquer\" id=\"dwelling-activate\" class=\"click click-success\">Débloquer</button>
                        {% endif %}
                    {% endif %}
                {% endif %}
            </td>
        </tr>
        {% endfor %}
    </tbody>
</table>
</div>
<div class=\"btn-navigate paginate-dwelling-list d-flex jc-center gap-2 my-3\">
{{ knp_pagination_render(datas) }}
</div>
{% endif %}

{% if message %}
{{ message }}
{% endif %}
{% endif %}
{% endif %}", "inc/modules/host/list.html.twig", "/Users/nathandfk/Development/Symfony/final/dsp-project/templates/inc/modules/host/list.html.twig");
    }
}
