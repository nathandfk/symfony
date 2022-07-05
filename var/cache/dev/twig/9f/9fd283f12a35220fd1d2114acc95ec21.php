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

/* inc/pages/search/index.html.twig */
class __TwigTemplate_105ebefd573473ab24f2accb4cb59f65 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/pages/search/index.html.twig"));

        // line 1
        $this->loadTemplate("inc/parts/head.html.twig", "inc/pages/search/index.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("inc/parts/nav.html.twig", "inc/pages/search/index.html.twig", 2)->display($context);
        // line 3
        echo "
";
        // line 4
        if (((isset($context["carousel"]) || array_key_exists("carousel", $context) ? $context["carousel"] : (function () { throw new RuntimeError('Variable "carousel" does not exist.', 4, $this->source); })()) == true)) {
            // line 5
            $this->loadTemplate("inc/parts/carousel.html.twig", "inc/pages/search/index.html.twig", 5)->display($context);
        }
        // line 7
        $this->loadTemplate("inc/modules/search/popupsearch.html.twig", "inc/pages/search/index.html.twig", 7)->display($context);
        // line 8
        echo "

<div class=\"atypikhouse-container my-3\">
    <div class=\"main-page\">
        <div class=\"dwelling-wrapper\">
            <div class=\"dwelling-inner-research\">
            ";
        // line 14
        $this->loadTemplate("inc/modules/search/search.html.twig", "inc/pages/search/index.html.twig", 14)->display($context);
        // line 15
        echo "
            </div> 
            <div class=\"page-title my-2\">
                <h1 class=\"text-uppercase c1 size22 ff-r\">";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "</h1>
            </div>
            <div class=\"search-dwelling\">
                <div class=\"search-dwelling-items\">
                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dataDwellings"]) || array_key_exists("dataDwellings", $context) ? $context["dataDwellings"] : (function () { throw new RuntimeError('Variable "dataDwellings" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dwellings"]) {
            // line 23
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitation", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwellings"], 0, [], "array", false, false, false, 23), "title", [], "any", false, false, false, 23), "id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwellings"], 0, [], "array", false, false, false, 23), "id", [], "any", false, false, false, 23)]), ["%20" => "-", "%c3%a9" => "e", "á" => "a", "é" => "e", "í" => "i", "ó" => "o", "ú" => "u"])), "html", null, true);
            echo "\" class=\"search-dwelling-item\">
                            <div class=\"search-dwelling-picture border-radius-form\">
                                ";
            // line 25
            $context["pictures"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwellings"], 0, [], "array", false, false, false, 25), "pictures", [], "any", false, false, false, 25), ",");
            // line 26
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pictures"]) || array_key_exists("pictures", $context) ? $context["pictures"] : (function () { throw new RuntimeError('Variable "pictures" does not exist.', 26, $this->source); })()), 0, [], "array", false, false, false, 26), "html", null, true);
            echo "\"/>
                            </div>
                            
                            <div class=\"dwelling-item-info d-flex flex flex-dir-col jc-space-between gap-1\">
                                <div class=\"my-1 d-flex flex flex-dir-col\">
                                    <span><i class=\"fas fa-star c1 size18\"></i> ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dwellings"], 5, [], "array", false, false, false, 31), "html", null, true);
            echo " ( ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwellings"], 3, [], "array", false, false, false, 31), "count", [], "any", false, false, false, 31), "html", null, true);
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwellings"], 3, [], "array", false, false, false, 31), "count", [], "any", false, false, false, 31) > 1)) {
                echo " Commentaires ";
            } else {
                echo " Commentaire ";
            }
            echo ")</span>
                                    <span>A partir de <span class=\"c1 ff-m size24\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwellings"], 0, [], "array", false, false, false, 32), "price", [], "any", false, false, false, 32), "html", null, true);
            echo "€</span></span>
                                </div>
                                <div class=\"my-1\">
                                    ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dwellings"], 1, [], "array", false, false, false, 35));
            foreach ($context['_seq'] as $context["_key"] => $context["limit"]) {
                // line 36
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["limit"], "field", [], "any", false, false, false, 36) == "_limit_animals")) {
                    // line 37
                    echo "                                    <span>";
                    if ((twig_get_attribute($this->env, $this->source, $context["limit"], "value", [], "any", false, false, false, 37) > 0)) {
                        echo "Animaux acceptés,";
                    } else {
                        echo "Animaux non acceptés,";
                    }
                    echo "</span>
                                    ";
                }
                // line 39
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                                    <span>etc,...</span>

                                </div>
                                <div class=\"my-1 d-flex flex flex-dir-col\">
                                    <span>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwellings"], 0, [], "array", false, false, false, 44), "title", [], "any", false, false, false, 44), "html", null, true);
            echo "</span>
                                    <span>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwellings"], 2, [], "array", false, false, false, 45), "real_name", [], "any", false, false, false, 45), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwellings"], 2, [], "array", false, false, false, 45), "code", [], "any", false, false, false, 45), "html", null, true);
            echo ") - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwellings"], 2, [], "array", false, false, false, 45), "nom", [], "any", false, false, false, 45), "html", null, true);
            echo "</span>
                                    <span>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwellings"], 2, [], "array", false, false, false, 46), "name_fr", [], "any", false, false, false, 46), "html", null, true);
            echo "</span>
                                </div>
                            </div>
                        </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dwellings'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                    <div class=\"btn-navigate d-flex jc-center gap-2 my-3\">
                        <a class=\"navigate-left click click-brown\" href=\"\">Précédent</a>
                        <a class=\"navigate-right click click-success\" href=\"\">Suivant</a>
                    </div>
                </div>
                <div class=\"search-dwelling-gps\">
                </div>
            </div>
        </div>
    </div>
</div>


";
        // line 64
        $this->loadTemplate("inc/parts/footer.html.twig", "inc/pages/search/index.html.twig", 64)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/pages/search/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 64,  167 => 51,  156 => 46,  148 => 45,  144 => 44,  138 => 40,  132 => 39,  122 => 37,  119 => 36,  115 => 35,  109 => 32,  97 => 31,  88 => 26,  86 => 25,  80 => 23,  76 => 22,  69 => 18,  64 => 15,  62 => 14,  54 => 8,  52 => 7,  49 => 5,  47 => 4,  44 => 3,  42 => 2,  40 => 1,);
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
            <div class=\"search-dwelling\">
                <div class=\"search-dwelling-items\">
                    {% for dwellings in dataDwellings %}
                        <a href=\"{{ path('app_habitation', {'slug': dwellings[0].title, 'id': dwellings[0].id}) | replace({'%20':'-', '%c3%a9':'e', 'á':'a', 'é':'e', 'í':'i', 'ó':'o', 'ú':'u'}) |lower }}\" class=\"search-dwelling-item\">
                            <div class=\"search-dwelling-picture border-radius-form\">
                                {% set pictures = dwellings[0].pictures | split(',') %}
                                <img src=\"{{ pictures[0] }}\"/>
                            </div>
                            
                            <div class=\"dwelling-item-info d-flex flex flex-dir-col jc-space-between gap-1\">
                                <div class=\"my-1 d-flex flex flex-dir-col\">
                                    <span><i class=\"fas fa-star c1 size18\"></i> {{ dwellings[5] }} ( {{ dwellings[3].count }} {% if dwellings[3].count > 1 %} Commentaires {% else %} Commentaire {% endif %})</span>
                                    <span>A partir de <span class=\"c1 ff-m size24\">{{ dwellings[0].price }}€</span></span>
                                </div>
                                <div class=\"my-1\">
                                    {% for limit in dwellings[1] %}
                                    {% if limit.field == \"_limit_animals\" %}
                                    <span>{% if limit.value > 0 %}Animaux acceptés,{% else %}Animaux non acceptés,{% endif %}</span>
                                    {% endif %}
                                    {% endfor %}
                                    <span>etc,...</span>

                                </div>
                                <div class=\"my-1 d-flex flex flex-dir-col\">
                                    <span>{{ dwellings[0].title }}</span>
                                    <span>{{ dwellings[2].real_name }} ({{ dwellings[2].code }}) - {{ dwellings[2].nom }}</span>
                                    <span>{{ dwellings[2].name_fr }}</span>
                                </div>
                            </div>
                        </a>
                    {% endfor %}
                    <div class=\"btn-navigate d-flex jc-center gap-2 my-3\">
                        <a class=\"navigate-left click click-brown\" href=\"\">Précédent</a>
                        <a class=\"navigate-right click click-success\" href=\"\">Suivant</a>
                    </div>
                </div>
                <div class=\"search-dwelling-gps\">
                </div>
            </div>
        </div>
    </div>
</div>


{% include 'inc/parts/footer.html.twig' %}", "inc/pages/search/index.html.twig", "/Users/nathandfk/Development/Symfony/atypikhouse/templates/inc/pages/search/index.html.twig");
    }
}
