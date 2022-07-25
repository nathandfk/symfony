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
            ";
        // line 17
        if (((((isset($context["dataDwellings"]) || array_key_exists("dataDwellings", $context) ? $context["dataDwellings"] : (function () { throw new RuntimeError('Variable "dataDwellings" does not exist.', 17, $this->source); })()) && (isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 17, $this->source); })())) && (isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 17, $this->source); })())) && (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 17, $this->source); })()))) {
            // line 18
            echo "            <div class=\"w-10r my-4 filter-wrapper\">
                <div class=\"my-2\">
                    <div class=\"cp\" id=\"open_filter\"><i class=\"fas fa-filter\"></i> Filtre</div>
                    <div class=\"card card-dismiss d-none\" method=\"GET\">
                        <div class=\"d-flex jc-space-between\">
                            <h3>Filtre</h3> <span class=\"fas fa-times size24\" id=\"close_filter\"></span>
                        </div>
                        <div>
                            
                            <div>
                                <label>Ordre</label>
                                <select name=\"order\">
                                    <option value=\"toc\" ";
            // line 30
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "request", [], "any", false, false, false, 30), "query", [], "any", false, false, false, 30), "get", [0 => "type"], "method", false, false, false, 30) == "toc")) {
                echo "selected=\"selected\"";
            }
            echo ">Classé les titres par ordre croissant</option>
                                    <option value=\"tod\" ";
            // line 31
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "request", [], "any", false, false, false, 31), "query", [], "any", false, false, false, 31), "get", [0 => "type"], "method", false, false, false, 31) == "tod")) {
                echo "selected=\"selected\"";
            }
            echo ">Classé les titres par ordre décroissant</option>
                                </select>
                            </div>
                            <div>
                                <label>Type</label>
                                
                                <select name=\"type\">
                                    ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 38, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 39
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 39), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "request", [], "any", false, false, false, 39), "query", [], "any", false, false, false, 39), "get", [0 => "type"], "method", false, false, false, 39) == twig_get_attribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 39))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "description", [], "any", false, false, false, 39), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                                </select>
                            </div>
                        </div>
                        <input type=\"submit\" value=\"Appliquer\" id=\"filter_apply\" class=\"click click-success ml-auto\">
                    </div>
                </div>
                <div class=\"filter_range\">
                    <label>";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 48, $this->source); })()), "html", null, true);
            echo "</label>
                    <input type=\"range\" id=\"price_range\" name=\"price_range\" data-link=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitations");
            echo "\"
                    min=\"";
            // line 50
            echo twig_escape_filter($this->env, (isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 50, $this->source); })()), "html", null, true);
            echo "\" max=\"";
            echo twig_escape_filter($this->env, (isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 50, $this->source); })()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 50, $this->source); })()), "html", null, true);
            echo "\" step=\"10\">
                </div>
            </div>
            ";
        }
        // line 54
        echo "            <div class=\"page-title my-2\">
                <h1 class=\"text-uppercase c1 size22 ff-r\">";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 55, $this->source); })()), "html", null, true);
        echo "</h1>
            </div>
            <div class=\"grid-lg-4 dwelling-items\">
                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dataDwellings"]) || array_key_exists("dataDwellings", $context) ? $context["dataDwellings"] : (function () { throw new RuntimeError('Variable "dataDwellings" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dwellings"]) {
            // line 59
            echo "                ";
            $context["productUrl"] = twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwellings"], 0, [], "array", false, false, false, 59), "title", [], "any", false, false, false, 59), ["%20" => "-", " " => "-", "%c3%a9" => "e", "%27" => "", "á" => "a", "é" => "e", "í" => "i", "ó" => "o", "ú" => "u"]);
            // line 60
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitation", ["slug" => (isset($context["productUrl"]) || array_key_exists("productUrl", $context) ? $context["productUrl"] : (function () { throw new RuntimeError('Variable "productUrl" does not exist.', 60, $this->source); })()), "id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwellings"], 0, [], "array", false, false, false, 60), "id", [], "any", false, false, false, 60)])), "html", null, true);
            echo "\" class=\"dwelling-item\">
                        <div class=\"dwelling-item-picture border-radius-form\">
                            ";
            // line 62
            $context["pictures"] = twig_split_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwellings"], 0, [], "array", false, false, false, 62), "pictures", [], "any", false, false, false, 62), ["\"" => "", "[" => "", "]" => ""]), ",");
            // line 63
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 63, $this->source); })()), "html", null, true);
            echo "/uploads/dwellings/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pictures"]) || array_key_exists("pictures", $context) ? $context["pictures"] : (function () { throw new RuntimeError('Variable "pictures" does not exist.', 63, $this->source); })()), 0, [], "array", false, false, false, 63), "html", null, true);
            echo "\"/>
                        </div>
                        
                        <div class=\"dwelling-item-info\">
                            <div class=\"my-1\"><i class=\"fas fa-star c1 size18\"></i> ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dwellings"], 5, [], "array", false, false, false, 67), "html", null, true);
            echo " ( ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwellings"], 3, [], "array", false, false, false, 67), "count", [], "any", false, false, false, 67), "html", null, true);
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwellings"], 3, [], "array", false, false, false, 67), "count", [], "any", false, false, false, 67) > 1)) {
                echo " Commentaires ";
            } else {
                echo " Commentaire ";
            }
            echo ")</div>
                            <div>A partir de <span class=\"c1 ff-m size24\">";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwellings"], 0, [], "array", false, false, false, 68), "price", [], "any", false, false, false, 68), "html", null, true);
            echo "€</span></div>
                            <div>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwellings"], 0, [], "array", false, false, false, 69), "title", [], "any", false, false, false, 69), "html", null, true);
            echo "</div>
                            <div>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwellings"], 0, [], "array", false, false, false, 70), "city", [], "any", false, false, false, 70), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwellings"], 0, [], "array", false, false, false, 70), "state", [], "any", false, false, false, 70), "html", null, true);
            echo "</div>
                            <div class=\"c1 ff-m size22\">";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dwellings"], 2, [], "array", false, false, false, 71), "html", null, true);
            echo "</div>
                        </div>
                    </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dwellings'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "            </div>
            <div class=\"btn-navigate d-flex jc-center gap-2 my-3\">
            ";
        // line 77
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["dataDwellings"]) || array_key_exists("dataDwellings", $context) ? $context["dataDwellings"] : (function () { throw new RuntimeError('Variable "dataDwellings" does not exist.', 77, $this->source); })()));
        echo "
            </div>
        </div>
    </div>
</div>


";
        // line 84
        $this->loadTemplate("inc/parts/footer.html.twig", "inc/pages/category/index.html.twig", 84)->display($context);
        
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
        return array (  233 => 84,  223 => 77,  219 => 75,  209 => 71,  203 => 70,  199 => 69,  195 => 68,  183 => 67,  173 => 63,  171 => 62,  165 => 60,  162 => 59,  158 => 58,  152 => 55,  149 => 54,  138 => 50,  134 => 49,  130 => 48,  121 => 41,  106 => 39,  102 => 38,  90 => 31,  84 => 30,  70 => 18,  68 => 17,  64 => 15,  62 => 14,  54 => 8,  52 => 7,  49 => 5,  47 => 4,  44 => 3,  42 => 2,  40 => 1,);
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
            {% if (dataDwellings and min and max and value) %}
            <div class=\"w-10r my-4 filter-wrapper\">
                <div class=\"my-2\">
                    <div class=\"cp\" id=\"open_filter\"><i class=\"fas fa-filter\"></i> Filtre</div>
                    <div class=\"card card-dismiss d-none\" method=\"GET\">
                        <div class=\"d-flex jc-space-between\">
                            <h3>Filtre</h3> <span class=\"fas fa-times size24\" id=\"close_filter\"></span>
                        </div>
                        <div>
                            
                            <div>
                                <label>Ordre</label>
                                <select name=\"order\">
                                    <option value=\"toc\" {% if app.request.query.get(\"type\") == 'toc' %}selected=\"selected\"{% endif %}>Classé les titres par ordre croissant</option>
                                    <option value=\"tod\" {% if app.request.query.get(\"type\") == 'tod' %}selected=\"selected\"{% endif %}>Classé les titres par ordre décroissant</option>
                                </select>
                            </div>
                            <div>
                                <label>Type</label>
                                
                                <select name=\"type\">
                                    {% for type in types %}
                                    <option value=\"{{ type.id }}\" {% if app.request.query.get(\"type\") == type.id %}selected=\"selected\"{% endif %}>{{ type.description }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                        <input type=\"submit\" value=\"Appliquer\" id=\"filter_apply\" class=\"click click-success ml-auto\">
                    </div>
                </div>
                <div class=\"filter_range\">
                    <label>{{ value }}</label>
                    <input type=\"range\" id=\"price_range\" name=\"price_range\" data-link=\"{{ path('app_habitations') }}\"
                    min=\"{{ min }}\" max=\"{{ max }}\" value=\"{{ value }}\" step=\"10\">
                </div>
            </div>
            {% endif %}
            <div class=\"page-title my-2\">
                <h1 class=\"text-uppercase c1 size22 ff-r\">{{ title }}</h1>
            </div>
            <div class=\"grid-lg-4 dwelling-items\">
                {% for dwellings in dataDwellings %}
                {% set productUrl = dwellings[0].title | replace({'%20':'-', ' ':'-', '%c3%a9':'e', '%27':'', 'á':'a', 'é':'e', 'í':'i', 'ó':'o', 'ú':'u'}) %}
                    <a href=\"{{ path('app_habitation', {'slug': productUrl, 'id': dwellings[0].id}) | lower }}\" class=\"dwelling-item\">
                        <div class=\"dwelling-item-picture border-radius-form\">
                            {% set pictures = dwellings[0].pictures|replace({'\"':'', '[':'', ']':''})|split(',') %}
                            <img src=\"{{ ath_link }}/uploads/dwellings/{{ pictures[0] }}\"/>
                        </div>
                        
                        <div class=\"dwelling-item-info\">
                            <div class=\"my-1\"><i class=\"fas fa-star c1 size18\"></i> {{ dwellings[5] }} ( {{ dwellings[3].count }} {% if dwellings[3].count > 1 %} Commentaires {% else %} Commentaire {% endif %})</div>
                            <div>A partir de <span class=\"c1 ff-m size24\">{{ dwellings[0].price }}€</span></div>
                            <div>{{ dwellings[0].title }}</div>
                            <div>{{ dwellings[0].city }}, {{ dwellings[0].state }}</div>
                            <div class=\"c1 ff-m size22\">{{ dwellings[2] }}</div>
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
