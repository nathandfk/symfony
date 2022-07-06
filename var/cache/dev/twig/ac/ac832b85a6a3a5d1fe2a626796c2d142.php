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

/* inc/pages/category/index.html.twig */
class __TwigTemplate_c1de67aeb5c2d6e7129280bdd305b6ca extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/pages/category/index.html.twig"));

        // line 1
        $this->loadTemplate("inc/parts/head.html.twig", "inc/pages/category/index.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("inc/parts/nav.html.twig", "inc/pages/category/index.html.twig", 2)->display($context);
        // line 3
        echo "
";
        // line 4
        if (((isset($context["carousel"]) || array_key_exists("carousel", $context) ? $context["carousel"] : (function () { throw new RuntimeError('Variable "carousel" does not exist.', 4, $this->source); })()) == true)) {
            // line 5
            $this->loadTemplate("inc/parts/carousel.html.twig", "inc/pages/category/index.html.twig", 5)->display($context);
        }
        // line 7
        $this->loadTemplate("inc/modules/search/popupsearch.html.twig", "inc/pages/category/index.html.twig", 7)->display($context);
        // line 8
        echo "

<div class=\"atypikhouse-container my-3\">
    <div class=\"main-page\">
        <div class=\"dwelling-wrapper\">
            <div class=\"dwelling-inner-research\">
            ";
        // line 14
        $this->loadTemplate("inc/modules/search/search.html.twig", "inc/pages/category/index.html.twig", 14)->display($context);
        // line 15
        echo "
            </div> 
            <div class=\"page-title my-2\">
                <h1 class=\"text-uppercase c1 size22 ff-r\">";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "</h1>
            </div>
            <div class=\"grid-lg-4 dwelling-items\">
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dataDwellings"]) || array_key_exists("dataDwellings", $context) ? $context["dataDwellings"] : (function () { throw new RuntimeError('Variable "dataDwellings" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dwellings"]) {
            // line 22
            echo "                ";
            $context["productUrl"] = twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwellings"], 0, [], "array", false, false, false, 22), "title", [], "any", false, false, false, 22), ["%20" => "-", " " => "-", "%c3%a9" => "e", "á" => "a", "é" => "e", "í" => "i", "ó" => "o", "ú" => "u"]);
            // line 23
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitation", ["slug" => (isset($context["productUrl"]) || array_key_exists("productUrl", $context) ? $context["productUrl"] : (function () { throw new RuntimeError('Variable "productUrl" does not exist.', 23, $this->source); })()), "id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwellings"], 0, [], "array", false, false, false, 23), "id", [], "any", false, false, false, 23)])), "html", null, true);
            echo "\" class=\"dwelling-item\">
                        <div class=\"dwelling-item-picture border-radius-form\">
                            ";
            // line 25
            $context["pictures"] = twig_split_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwellings"], 0, [], "array", false, false, false, 25), "pictures", [], "any", false, false, false, 25), ["\"" => "", "[" => "", "]" => ""]), ",");
            // line 26
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 26, $this->source); })()), "html", null, true);
            echo "/uploads/dwellings/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pictures"]) || array_key_exists("pictures", $context) ? $context["pictures"] : (function () { throw new RuntimeError('Variable "pictures" does not exist.', 26, $this->source); })()), 0, [], "array", false, false, false, 26), "html", null, true);
            echo "\"/>
                        </div>
                        
                        <div class=\"dwelling-item-info\">
                            <div class=\"my-1\"><i class=\"fas fa-star c1 size18\"></i> ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dwellings"], 5, [], "array", false, false, false, 30), "html", null, true);
            echo " ( ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwellings"], 3, [], "array", false, false, false, 30), "count", [], "any", false, false, false, 30), "html", null, true);
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwellings"], 3, [], "array", false, false, false, 30), "count", [], "any", false, false, false, 30) > 1)) {
                echo " Commentaires ";
            } else {
                echo " Commentaire ";
            }
            echo ")</div>
                            <div>A partir de <span class=\"c1 ff-m size24\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwellings"], 0, [], "array", false, false, false, 31), "price", [], "any", false, false, false, 31), "html", null, true);
            echo "€</span></div>
                            <div>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwellings"], 0, [], "array", false, false, false, 32), "title", [], "any", false, false, false, 32), "html", null, true);
            echo "</div>
                            <div>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwellings"], 0, [], "array", false, false, false, 33), "city", [], "any", false, false, false, 33), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwellings"], 0, [], "array", false, false, false, 33), "state", [], "any", false, false, false, 33), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwellings"], 2, [], "array", false, false, false, 33), "name_fr", [], "any", false, false, false, 33), "html", null, true);
            echo "</div>
                            <div class=\"c1 ff-m size22\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwellings"], 2, [], "array", false, false, false, 34), "name_fr", [], "any", false, false, false, 34), "html", null, true);
            echo "</div>
                        </div>
                    </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dwellings'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "            </div>
            <div class=\"btn-navigate d-flex jc-center gap-2 my-3\">
            ";
        // line 40
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["dataDwellings"]) || array_key_exists("dataDwellings", $context) ? $context["dataDwellings"] : (function () { throw new RuntimeError('Variable "dataDwellings" does not exist.', 40, $this->source); })()));
        echo "
            </div>
        </div>
    </div>
</div>


";
        // line 47
        $this->loadTemplate("inc/parts/footer.html.twig", "inc/pages/category/index.html.twig", 47)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/pages/category/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 47,  142 => 40,  138 => 38,  128 => 34,  120 => 33,  116 => 32,  112 => 31,  100 => 30,  90 => 26,  88 => 25,  82 => 23,  79 => 22,  75 => 21,  69 => 18,  64 => 15,  62 => 14,  54 => 8,  52 => 7,  49 => 5,  47 => 4,  44 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'inc/parts/head.html.twig' %}
{% include 'inc/parts/nav.html.twig' %}

{% if carousel == true %}
{% include 'inc/parts/carousel.html.twig' %}
{% endif %}
{% include 'inc/modules/search/popupsearch.html.twig' %}


<div class=\"atypikhouse-container my-3\">
    <div class=\"main-page\">
        <div class=\"dwelling-wrapper\">
            <div class=\"dwelling-inner-research\">
            {% include 'inc/modules/search/search.html.twig' %}

            </div> 
            <div class=\"page-title my-2\">
                <h1 class=\"text-uppercase c1 size22 ff-r\">{{ title }}</h1>
            </div>
            <div class=\"grid-lg-4 dwelling-items\">
                {% for dwellings in dataDwellings %}
                {% set productUrl = dwellings[0].title | replace({'%20':'-', ' ':'-', '%c3%a9':'e', 'á':'a', 'é':'e', 'í':'i', 'ó':'o', 'ú':'u'}) %}
                    <a href=\"{{ path('app_habitation', {'slug': productUrl, 'id': dwellings[0].id}) | lower }}\" class=\"dwelling-item\">
                        <div class=\"dwelling-item-picture border-radius-form\">
                            {% set pictures = dwellings[0].pictures|replace({'\"':'', '[':'', ']':''})|split(',') %}
                            <img src=\"{{ ath_link }}/uploads/dwellings/{{ pictures[0] }}\"/>
                        </div>
                        
                        <div class=\"dwelling-item-info\">
                            <div class=\"my-1\"><i class=\"fas fa-star c1 size18\"></i> {{ dwellings[5] }} ( {{ dwellings[3].count }} {% if dwellings[3].count > 1 %} Commentaires {% else %} Commentaire {% endif %})</div>
                            <div>A partir de <span class=\"c1 ff-m size24\">{{ dwellings[0].price }}€</span></div>
                            <div>{{ dwellings[0].title }}</div>
                            <div>{{ dwellings[0].city }}, {{ dwellings[0].state }} - {{ dwellings[2].name_fr }}</div>
                            <div class=\"c1 ff-m size22\">{{ dwellings[2].name_fr }}</div>
                        </div>
                    </a>
                {% endfor %}
            </div>
            <div class=\"btn-navigate d-flex jc-center gap-2 my-3\">
            {{ knp_pagination_render(dataDwellings) }}
            </div>
        </div>
    </div>
</div>


{% include 'inc/parts/footer.html.twig' %}", "inc/pages/category/index.html.twig", "/Users/nathandfk/Development/Symfony/final/dsp-project/templates/inc/pages/category/index.html.twig");
    }
}
