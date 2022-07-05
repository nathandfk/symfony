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

/* inc/pages/product/show-dwelling.html.twig */
class __TwigTemplate_4c0e8726edbf0cc078ea999c977af513 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/pages/product/show-dwelling.html.twig"));

        // line 1
        $this->loadTemplate("inc/parts/head.html.twig", "inc/pages/product/show-dwelling.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("inc/parts/nav.html.twig", "inc/pages/product/show-dwelling.html.twig", 2)->display($context);
        // line 3
        echo "
";
        // line 4
        $this->loadTemplate("inc/modules/search/popupsearch.html.twig", "inc/pages/product/show-dwelling.html.twig", 4)->display($context);
        // line 5
        echo "

<div class=\"atypikhouse-container my-6\">
    <div class=\"main-page\">
        <div class=\"dwelling-wrapper\">
            
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dwellings"]) || array_key_exists("dwellings", $context) ? $context["dwellings"] : (function () { throw new RuntimeError('Variable "dwellings" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dwelling"]) {
            // line 12
            echo "                ";
            $context["productUrl"] = twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwelling"], 0, [], "array", false, false, false, 12), "title", [], "any", false, false, false, 12), ["%20" => "-", " " => "-", "%c3%a9" => "e", "á" => "a", "é" => "e", "í" => "i", "ó" => "o", "ú" => "u"]);
            // line 13
            echo "                <header class=\"atypikhouse-products-grid\">
                    ";
            // line 14
            $context["pictures"] = twig_split_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwelling"], 0, [], "array", false, false, false, 14), "pictures", [], "any", false, false, false, 14), ["\"" => "", "[" => "", "]" => ""]), ",");
            // line 15
            echo "                    <div class=\"product-items\">
                        <div class=\"product-grid\">
                            <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 17, $this->source); })()), "html", null, true);
            echo "/uploads/dwellings/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pictures"]) || array_key_exists("pictures", $context) ? $context["pictures"] : (function () { throw new RuntimeError('Variable "pictures" does not exist.', 17, $this->source); })()), 0, [], "array", false, false, false, 17), "html", null, true);
            echo "\" alt=\"AtypikHouse header\">
                        </div>
                        <div class=\"product-grid\">
                            <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 20, $this->source); })()), "html", null, true);
            echo "/uploads/dwellings/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pictures"]) || array_key_exists("pictures", $context) ? $context["pictures"] : (function () { throw new RuntimeError('Variable "pictures" does not exist.', 20, $this->source); })()), 1, [], "array", false, false, false, 20), "html", null, true);
            echo "\" alt=\"AtypikHouse header\">
                        </div>
                        <div class=\"product-grid\">
                            <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 23, $this->source); })()), "html", null, true);
            echo "/uploads/dwellings/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pictures"]) || array_key_exists("pictures", $context) ? $context["pictures"] : (function () { throw new RuntimeError('Variable "pictures" does not exist.', 23, $this->source); })()), 2, [], "array", false, false, false, 23), "html", null, true);
            echo "\" alt=\"AtypikHouse header\">
                        </div>
                        <div class=\"product-grid product-more-picture cp\">
                            <div class=\"more-picture\">Afficher plus d'images</div>
                            <img src=\"";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 27, $this->source); })()), "html", null, true);
            echo "/uploads/dwellings/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pictures"]) || array_key_exists("pictures", $context) ? $context["pictures"] : (function () { throw new RuntimeError('Variable "pictures" does not exist.', 27, $this->source); })()), 3, [], "array", false, false, false, 27), "html", null, true);
            echo "\" alt=\"AtypikHouse header\">
                        </div>
                    </div>
                    <div class=\"product-galery product-galery-dismiss d-none\">
                        <div class=\"product-galery-items\">
                        ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pictures"]) || array_key_exists("pictures", $context) ? $context["pictures"] : (function () { throw new RuntimeError('Variable "pictures" does not exist.', 32, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                // line 33
                echo "                            <div class=\"product-galery-cell\">
                                <img src=\"";
                // line 34
                echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 34, $this->source); })()), "html", null, true);
                echo "/uploads/dwellings/";
                echo twig_escape_filter($this->env, $context["picture"], "html", null, true);
                echo "\" alt=\"AtypikHouse Galerie d'images ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwelling"], 0, [], "array", false, false, false, 34), "title", [], "any", false, false, false, 34), "html", null, true);
                echo "\">
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                        </div>
                        <div class=\"close-product-galery fas fa-times size28\"></div>
                    </div>
                </header>
                <div class=\"main-page my-2\">
                    <div class=\"product-page-stline\">
                        <div class=\"product-col-1\">
                            <h1 class=\"c1 ff-m\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwelling"], 0, [], "array", false, false, false, 44), "title", [], "any", false, false, false, 44), "html", null, true);
            echo "</h1>
                            <div>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwelling"], 2, [], "array", false, false, false, 45), "real_name", [], "any", false, false, false, 45), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwelling"], 2, [], "array", false, false, false, 45), "code", [], "any", false, false, false, 45), "html", null, true);
            echo ") - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwelling"], 2, [], "array", false, false, false, 45), "nom", [], "any", false, false, false, 45), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwelling"], 2, [], "array", false, false, false, 45), "name_fr", [], "any", false, false, false, 45), "html", null, true);
            echo "</div>
                            <div>A partir de <span class=\"c1 ff-m size24\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwelling"], 0, [], "array", false, false, false, 46), "price", [], "any", false, false, false, 46), "html", null, true);
            echo "€</span></div>
                            <p>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwelling"], 0, [], "array", false, false, false, 47), "abstract", [], "any", false, false, false, 47), "html", null, true);
            echo "</p>
                            <p><a><i class=\"fas fa-star size18\"></i> Ajouter au favoris</a></p>
                            <div class=\"d-flex gap-1 ai-center my-2\">
                                <span>Partager sur</span><span class=\"fab fa-facebook-f\"></span><span class=\"fab fa-linkedin-in\"></span><span class=\"fab fa-whatsapp\"></span>
                            </div>
                            <a><i class=\"fas fa-heart size18\"></i> Ajouter une mention j'aime</a>
                            <div><a>Signaler ce logement</a></div>
                        </div>
                        <div class=\"product-col-2\">
                            <div class=\"product-form-check\">
                                <div class=\"form-row product-calendar atypikhouse-search-dispo\">
                                    <div class=\"form-group col-lg-6 p-relative search-arrival-date target-data cp\">
                                        Date d'arrivée
                                        <label class=\"form-input cp my-1 c1 single-product-arrival\">_ _ /_ _ /_ _ _ _</label>
                                        <div class=\"superpose d-none calendar general-calendar calendar-reset\">";
            // line 61
            echo (isset($context["calendarReset"]) || array_key_exists("calendarReset", $context) ? $context["calendarReset"] : (function () { throw new RuntimeError('Variable "calendarReset" does not exist.', 61, $this->source); })());
            echo "</div>
                                    </div>
                                    <div class=\"form-group col-lg-6 p-relative search-departure-date target-data cp\">
                                        Date de départ
                                        <label class=\"form-input cp my-1 c1 single-product-departure\">_ _ /_ _ /_ _ _ _</label>
                                        <div class=\"superpose d-none calendar general-calendar calendar-reset\"></div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label>Qui sont les voyageurs ?</label>
                                    <div class=\"my-1 single-product-travelers\">
                                        ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dwelling"], 1, [], "array", false, false, false, 72));
            foreach ($context['_seq'] as $context["_key"] => $context["limit"]) {
                // line 73
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["limit"], "field", [], "any", false, false, false, 73) == "_max_people")) {
                    // line 74
                    echo "                                        <div class=\"form-input cp nb-traverlers\" data-adults=\"1\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["limit"], "value", [], "any", false, false, false, 74), "html", null, true);
                    echo " voyageurs maximums</div>
                                        ";
                }
                // line 76
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                                        <ul class=\"choice-travelers\">
                                            
                                            ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dwelling"], 1, [], "array", false, false, false, 79));
            foreach ($context['_seq'] as $context["_key"] => $context["limit"]) {
                // line 80
                echo "                                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["limit"], "field", [], "any", false, false, false, 80) == "_max_people")) {
                    // line 81
                    echo "                                                <input type=\"hidden\" class=\"people-limit\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["limit"], "value", [], "any", false, false, false, 81), "html", null, true);
                    echo "\">
                                                ";
                }
                // line 83
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dwelling"], 1, [], "array", false, false, false, 84));
            foreach ($context['_seq'] as $context["_key"] => $context["limit"]) {
                // line 85
                echo "                                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["limit"], "field", [], "any", false, false, false, 85) == "_minimum_age")) {
                    // line 86
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["limit"], "value", [], "any", false, false, false, 86) >= 0)) {
                        echo "<li>Adulte (11 ans et au delà) <input type=\"number\" min=\"1\" value=\"1\" id=\"product-traveler-adult\"></li>";
                    }
                    // line 87
                    echo "                                                ";
                }
                // line 88
                echo "                                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["limit"], "field", [], "any", false, false, false, 88) == "_minimum_age")) {
                    // line 89
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["limit"], "value", [], "any", false, false, false, 89) < 11)) {
                        echo "<li>Enfant (3 ans à 10 ans)  <input type=\"number\" min=\"0\" value=\"0\" id=\"product-traveler-children\"></li>";
                    }
                    // line 90
                    echo "                                                ";
                }
                // line 91
                echo "                                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["limit"], "field", [], "any", false, false, false, 91) == "_minimum_age")) {
                    // line 92
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["limit"], "value", [], "any", false, false, false, 92) < 3)) {
                        echo "<li>Bébé (0 à 2 ans) <input type=\"number\" min=\"0\" value=\"0\" id=\"product-traveler-baby\"></li>";
                    }
                    // line 93
                    echo "                                                ";
                }
                // line 94
                echo "                                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["limit"], "field", [], "any", false, false, false, 94) == "_animals")) {
                    // line 95
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["limit"], "value", [], "any", false, false, false, 95) == "TRUE")) {
                        // line 96
                        echo "                                                <li>Animaux <input type=\"number\" min=\"0\" value=\"0\" id=\"product-traveler-animal\"></li>
                                                ";
                    }
                    // line 98
                    echo "                                                ";
                }
                // line 99
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "                                        </ul>
                                    </div>
                                </div>
                                <input type=\"submit\" name=\"checking-dispo\" class=\"click click-success w-100\" value=\"Vérifier les disponibilités\">
                            </div>
                            <div class=\"product-form-checkout\"></div>
                        </div>
                    </div>
                    <div class=\"product-page-ndline my-4\">
                        ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dwelling"], 1, [], "array", false, false, false, 109));
            foreach ($context['_seq'] as $context["_key"] => $context["limit"]) {
                // line 110
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["limit"], "field", [], "any", false, false, false, 110) == "_animals")) {
                    // line 111
                    echo "                        <div>
                            <i class=\"fas fa-dog size52\"></i>
                            <span>";
                    // line 113
                    if ((twig_get_attribute($this->env, $this->source, $context["limit"], "value", [], "any", false, false, false, 113) == true)) {
                        echo "Animaux acceptés";
                    } else {
                        echo "Animaux non acceptés";
                    }
                    echo "</span>
                        </div>
                        ";
                }
                // line 116
                echo "
                        ";
                // line 117
                if ((twig_get_attribute($this->env, $this->source, $context["limit"], "field", [], "any", false, false, false, 117) == "_breakfast")) {
                    // line 118
                    echo "                        <div>
                            <i class=\"fas fa-cookie-bite size52\"></i>
                            <span>";
                    // line 120
                    if ((twig_get_attribute($this->env, $this->source, $context["limit"], "value", [], "any", false, false, false, 120) == "TRUE")) {
                        echo "Petit déjeuner inclus";
                    } else {
                        echo "Petit déjeuner non inclus";
                    }
                    echo "</span>
                        </div>
                        ";
                }
                // line 123
                echo "

                        ";
                // line 125
                if ((twig_get_attribute($this->env, $this->source, $context["limit"], "field", [], "any", false, false, false, 125) == "_max_people")) {
                    // line 126
                    echo "                        <div>
                            <i class=\"fas fa-user-friends size52\"></i>
                            <span>";
                    // line 128
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["limit"], "value", [], "any", false, false, false, 128), "html", null, true);
                    echo " ";
                    if ((twig_get_attribute($this->env, $this->source, $context["limit"], "value", [], "any", false, false, false, 128) == "1")) {
                        echo "voyageur";
                    } else {
                        echo "voyageurs";
                    }
                    echo " au maximum</span>
                        </div>
                        ";
                }
                // line 131
                echo "
                        ";
                // line 132
                if ((twig_get_attribute($this->env, $this->source, $context["limit"], "field", [], "any", false, false, false, 132) == "_minimum_age")) {
                    // line 133
                    echo "                        <div>
                            <i class=\"fas fa-child size52\"></i>
                            <span>Minimum ";
                    // line 135
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["limit"], "value", [], "any", false, false, false, 135), "html", null, true);
                    echo " ";
                    if ((twig_get_attribute($this->env, $this->source, $context["limit"], "value", [], "any", false, false, false, 135) <= "1")) {
                        echo "an";
                    } else {
                        echo "ans";
                    }
                    echo "</span>
                        </div>
                        ";
                }
                // line 138
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "                    </div>
                    <div class=\"product-page-rdline my-4\">
                        <div class=\"card-details px-2\">
                            <div>
                                <h3>DESCRIPTION DU LOGEMENT</h3>
                            </div>
                            <div>
                                <p>";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwelling"], 0, [], "array", false, false, false, 146), "description", [], "any", false, false, false, 146), "html", null, true);
            echo "</p>
                            </div>
                        </div>
                        <div class=\"card-details px-2\">
                            <div>
                                <h3>CARACTÉRISTIQUES</h3>
                            </div>
                            <ul class=\"px-0 py-1\">
                                ";
            // line 154
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dwelling"], 1, [], "array", false, false, false, 154));
            foreach ($context['_seq'] as $context["_key"] => $context["features"]) {
                // line 155
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["features"], "field", [], "any", false, false, false, 155) == "_surface")) {
                    // line 156
                    echo "                                        <li>Surface habitable: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["features"], "value", [], "any", false, false, false, 156), "html", null, true);
                    echo " m²</li>
                                    ";
                }
                // line 158
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["features"], "field", [], "any", false, false, false, 158) == "_piece")) {
                    // line 159
                    echo "                                        <li>Nombre de pièces: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["features"], "value", [], "any", false, false, false, 159), "html", null, true);
                    echo "</li>
                                    ";
                }
                // line 161
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["features"], "field", [], "any", false, false, false, 161) == "_water")) {
                    // line 162
                    echo "                                        <li>Eau: ";
                    if ((twig_get_attribute($this->env, $this->source, $context["features"], "value", [], "any", false, false, false, 162) == "TRUE")) {
                        echo "Oui";
                    } else {
                        echo "Non";
                    }
                    echo "</li>
                                    ";
                }
                // line 164
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["features"], "field", [], "any", false, false, false, 164) == "_eletricity")) {
                    // line 165
                    echo "                                        <li>Électricité: ";
                    if ((twig_get_attribute($this->env, $this->source, $context["features"], "value", [], "any", false, false, false, 165) == "TRUE")) {
                        echo "Oui";
                    } else {
                        echo "Non";
                    }
                    echo "</li>
                                    ";
                }
                // line 167
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["features"], "field", [], "any", false, false, false, 167) == "_parking")) {
                    // line 168
                    echo "                                        <li>Parking: ";
                    if ((twig_get_attribute($this->env, $this->source, $context["features"], "value", [], "any", false, false, false, 168) == "TRUE")) {
                        echo "Oui";
                    } else {
                        echo "Non";
                    }
                    echo "</li>
                                    ";
                }
                // line 170
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['features'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "                            </ul>
                        </div>
                        <div class=\"card-details px-2\">
                            <div>
                                <h3>ÉQUIPEMENTS</h3>
                            </div>
                            <ul class=\"px-0 py-1\">
                                ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dwelling"], 1, [], "array", false, false, false, 178));
            foreach ($context['_seq'] as $context["_key"] => $context["equipments"]) {
                // line 179
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["equipments"], "field", [], "any", false, false, false, 179) == "_equipments")) {
                    // line 180
                    echo "                                        ";
                    $context["equipment"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipments"], "value", [], "any", false, false, false, 180), ",");
                    // line 181
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["equipment"]) || array_key_exists("equipment", $context) ? $context["equipment"] : (function () { throw new RuntimeError('Variable "equipment" does not exist.', 181, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["oneEquipment"]) {
                        // line 182
                        echo "                                        <li>";
                        echo twig_escape_filter($this->env, $context["oneEquipment"], "html", null, true);
                        echo "</li>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oneEquipment'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 184
                    echo "                                    ";
                }
                // line 185
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipments'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 186
            echo "                            </ul>
                        </div>
                        <div class=\"card-details px-2\">
                            <div>
                                <h3>INFORMATIONS COMPLÉMENTAIRES</h3>
                            </div>
                            <ul class=\"px-0 py-1\">
                                ";
            // line 193
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dwelling"], 1, [], "array", false, false, false, 193));
            foreach ($context['_seq'] as $context["_key"] => $context["informations"]) {
                // line 194
                echo "                                    
                                    ";
                // line 195
                if ((twig_get_attribute($this->env, $this->source, $context["informations"], "field", [], "any", false, false, false, 195) == "_arrival_from")) {
                    // line 196
                    echo "                                        <li>Arrivée: A partir de ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["informations"], "value", [], "any", false, false, false, 196), "html", null, true);
                    echo "
                                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 197
$context["informations"], "field", [], "any", false, false, false, 197) == "_arrival_until")) {
                    // line 198
                    echo "                                        jusqu'à ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["informations"], "value", [], "any", false, false, false, 198), "html", null, true);
                    echo "</li>
                                    ";
                }
                // line 200
                echo "                                    
                                    ";
                // line 201
                if ((twig_get_attribute($this->env, $this->source, $context["informations"], "field", [], "any", false, false, false, 201) == "_departure_before")) {
                    // line 202
                    echo "                                        <li>Départ: Avant ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["informations"], "value", [], "any", false, false, false, 202), "html", null, true);
                    echo "</li>
                                    ";
                }
                // line 204
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['informations'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 205
            echo "                            </ul>
                        </div>
                    </div>



                    ";
            // line 211
            if ((twig_get_attribute($this->env, $this->source, $context["dwelling"], 4, [], "array", false, false, false, 211) || twig_get_attribute($this->env, $this->source, $context["dwelling"], 7, [], "array", false, false, false, 211))) {
                // line 212
                echo "                    <div class=\"product-page-lastline my-4\">
                        <h3>COMMENTAIRES ET NOTES</h3>
                        <br>
                        <div class=\"product-lastline-display\">
                        <div class=\"product-user-likes\">
                            <ul class=\"p-0\">
                                ";
                // line 218
                if (twig_get_attribute($this->env, $this->source, $context["dwelling"], 7, [], "array", false, false, false, 218)) {
                    echo "<li>Propreté ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dwelling"], 7, [], "array", false, false, false, 218), "html", null, true);
                    echo "<span></span></li>";
                }
                // line 219
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, $context["dwelling"], 8, [], "array", false, false, false, 219)) {
                    echo "<li>Précision ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dwelling"], 8, [], "array", false, false, false, 219), "html", null, true);
                    echo "<span></span></li>";
                }
                // line 220
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, $context["dwelling"], 9, [], "array", false, false, false, 220)) {
                    echo "<li>Communication ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dwelling"], 9, [], "array", false, false, false, 220), "html", null, true);
                    echo "<span></span></li>";
                }
                // line 221
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, $context["dwelling"], 10, [], "array", false, false, false, 221)) {
                    echo "<li>Emplacement ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dwelling"], 10, [], "array", false, false, false, 221), "html", null, true);
                    echo "<span></span></li>";
                }
                // line 222
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, $context["dwelling"], 11, [], "array", false, false, false, 222)) {
                    echo "<li>Arrivée ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dwelling"], 11, [], "array", false, false, false, 222), "html", null, true);
                    echo "<span></span></li>";
                }
                // line 223
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, $context["dwelling"], 12, [], "array", false, false, false, 223)) {
                    echo "<li>Rapport qualité prix ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dwelling"], 12, [], "array", false, false, false, 223), "html", null, true);
                    echo "<span></span></li>";
                }
                // line 224
                echo "                            </ul>
                        </div>
                        <div class=\"product-user-comments\">
                            ";
                // line 227
                if (twig_get_attribute($this->env, $this->source, $context["dwelling"], 4, [], "array", false, false, false, 227)) {
                    // line 228
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dwelling"], 4, [], "array", false, false, false, 228));
                    foreach ($context['_seq'] as $context["_key"] => $context["comments"]) {
                        // line 229
                        echo "                                    <h4>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comments"], 1, [], "array", false, false, false, 229), "first_name", [], "any", false, false, false, 229), "html", null, true);
                        echo "</h4>
                                    <p>";
                        // line 230
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comments"], 0, [], "array", false, false, false, 230), "added_at", [], "any", false, false, false, 230), "html", null, true);
                        echo "</p>
                                    <p>";
                        // line 231
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comments"], 0, [], "array", false, false, false, 231), "description", [], "any", false, false, false, 231), "html", null, true);
                        echo "</p>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comments'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 233
                    echo "                            ";
                }
                // line 234
                echo "                        </div>
                        </div>
                    </div>
                    ";
            }
            // line 238
            echo "                </div>
                ";
            // line 239
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 239, $this->source); })()), "user", [], "any", false, false, false, 239)) {
                // line 240
                echo "                    ";
                $context["email"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 240, $this->source); })()), "user", [], "any", false, false, false, 240), "email", [], "any", false, false, false, 240);
                // line 241
                echo "                ";
            } else {
                // line 242
                echo "                    ";
                $context["email"] = "";
                // line 243
                echo "                ";
            }
            // line 244
            echo "                <script>
                    arrivalDate = document.querySelector('.single-product-arrival').dataset.period
                    departureDate = document.querySelector('.single-product-departure').dataset.period

                    function dataProduct(\$url = \"";
            // line 248
            echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 248, $this->source); })()), "html", null, true);
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitation", ["slug" => (isset($context["productUrl"]) || array_key_exists("productUrl", $context) ? $context["productUrl"] : (function () { throw new RuntimeError('Variable "productUrl" does not exist.', 248, $this->source); })()), "id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwelling"], 0, [], "array", false, false, false, 248), "id", [], "any", false, false, false, 248)])), "html", null, true);
            echo "\", \$ckeck_url = \"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("single_product_check");
            echo "\", 
                    \$dwelling_id=\"";
            // line 249
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwelling"], 0, [], "array", false, false, false, 249), "id", [], "any", false, false, false, 249), "html", null, true);
            echo "\", \$arrival = arrivalDate, 
                    \$departure = departureDate, \$local = \"";
            // line 250
            echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 250, $this->source); })()), "html", null, true);
            echo "\", 
                    \$auth = \"";
            // line 251
            echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 251, $this->source); })()), "html", null, true);
            echo "\"){
                        return [\$url, \$ckeck_url, \$dwelling_id, \$arrival, \$departure, \$local, \$auth, \"";
            // line 252
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\"]
                    }
                </script>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dwelling'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 257
        echo "        </div>
    </div>
    <div id=\"map\"></div>
</div>


<script>
    var villes = {
        \"Paris\": {\"lat\": 48.852969, \"lon\":2.349903},
        \"Brest\": {\"lat\": 48.383, \"lon\": -4.500},
        \"Quimper\": {\"lat\": 48.000, \"lon\": -4.100 },
        \"Bayonne\": {\"lat\": 43.500, \"lon\": -1.467},
    }
    var map = L.map('map').setView([48.852969, 2.349903], 13);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        minZoom: 1,
        maxZoom: 19,
        attribution: '© OpenStreetMap | AtypikHouse'
    }).addTo(map);
    for(ville in villes){
        var marqueur = L.marker([villes[ville].lat, villes[ville].lon])
        .addTo(map);
        marqueur.bindPopup(\"<p>Paris</p>\")
    }
    ";
        // line 282
        echo "</script>

";
        // line 284
        $this->loadTemplate("inc/parts/footer.html.twig", "inc/pages/product/show-dwelling.html.twig", 284)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/pages/product/show-dwelling.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  742 => 284,  738 => 282,  712 => 257,  701 => 252,  697 => 251,  693 => 250,  689 => 249,  682 => 248,  676 => 244,  673 => 243,  670 => 242,  667 => 241,  664 => 240,  662 => 239,  659 => 238,  653 => 234,  650 => 233,  642 => 231,  638 => 230,  633 => 229,  628 => 228,  626 => 227,  621 => 224,  614 => 223,  607 => 222,  600 => 221,  593 => 220,  586 => 219,  580 => 218,  572 => 212,  570 => 211,  562 => 205,  556 => 204,  550 => 202,  548 => 201,  545 => 200,  539 => 198,  537 => 197,  532 => 196,  530 => 195,  527 => 194,  523 => 193,  514 => 186,  508 => 185,  505 => 184,  496 => 182,  491 => 181,  488 => 180,  485 => 179,  481 => 178,  472 => 171,  466 => 170,  456 => 168,  453 => 167,  443 => 165,  440 => 164,  430 => 162,  427 => 161,  421 => 159,  418 => 158,  412 => 156,  409 => 155,  405 => 154,  394 => 146,  385 => 139,  379 => 138,  367 => 135,  363 => 133,  361 => 132,  358 => 131,  346 => 128,  342 => 126,  340 => 125,  336 => 123,  326 => 120,  322 => 118,  320 => 117,  317 => 116,  307 => 113,  303 => 111,  300 => 110,  296 => 109,  285 => 100,  279 => 99,  276 => 98,  272 => 96,  269 => 95,  266 => 94,  263 => 93,  258 => 92,  255 => 91,  252 => 90,  247 => 89,  244 => 88,  241 => 87,  236 => 86,  233 => 85,  228 => 84,  222 => 83,  216 => 81,  213 => 80,  209 => 79,  205 => 77,  199 => 76,  193 => 74,  190 => 73,  186 => 72,  172 => 61,  155 => 47,  151 => 46,  141 => 45,  137 => 44,  128 => 37,  115 => 34,  112 => 33,  108 => 32,  98 => 27,  89 => 23,  81 => 20,  73 => 17,  69 => 15,  67 => 14,  64 => 13,  61 => 12,  57 => 11,  49 => 5,  47 => 4,  44 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'inc/parts/head.html.twig' %}
{% include 'inc/parts/nav.html.twig' %}

{% include 'inc/modules/search/popupsearch.html.twig' %}


<div class=\"atypikhouse-container my-6\">
    <div class=\"main-page\">
        <div class=\"dwelling-wrapper\">
            
                {% for dwelling in dwellings %}
                {% set productUrl = dwelling[0].title | replace({'%20':'-', ' ':'-', '%c3%a9':'e', 'á':'a', 'é':'e', 'í':'i', 'ó':'o', 'ú':'u'}) %}
                <header class=\"atypikhouse-products-grid\">
                    {% set pictures = dwelling[0].pictures|replace({'\"':'', '[':'', ']':''})|split(',') %}
                    <div class=\"product-items\">
                        <div class=\"product-grid\">
                            <img src=\"{{ ath_link }}/uploads/dwellings/{{ pictures[0] }}\" alt=\"AtypikHouse header\">
                        </div>
                        <div class=\"product-grid\">
                            <img src=\"{{ ath_link }}/uploads/dwellings/{{ pictures[1] }}\" alt=\"AtypikHouse header\">
                        </div>
                        <div class=\"product-grid\">
                            <img src=\"{{ ath_link }}/uploads/dwellings/{{ pictures[2] }}\" alt=\"AtypikHouse header\">
                        </div>
                        <div class=\"product-grid product-more-picture cp\">
                            <div class=\"more-picture\">Afficher plus d'images</div>
                            <img src=\"{{ ath_link }}/uploads/dwellings/{{ pictures[3] }}\" alt=\"AtypikHouse header\">
                        </div>
                    </div>
                    <div class=\"product-galery product-galery-dismiss d-none\">
                        <div class=\"product-galery-items\">
                        {% for picture in pictures %}
                            <div class=\"product-galery-cell\">
                                <img src=\"{{ ath_link }}/uploads/dwellings/{{ picture }}\" alt=\"AtypikHouse Galerie d'images {{ dwelling[0].title }}\">
                            </div>
                        {% endfor %}
                        </div>
                        <div class=\"close-product-galery fas fa-times size28\"></div>
                    </div>
                </header>
                <div class=\"main-page my-2\">
                    <div class=\"product-page-stline\">
                        <div class=\"product-col-1\">
                            <h1 class=\"c1 ff-m\">{{ dwelling[0].title }}</h1>
                            <div>{{ dwelling[2].real_name }} ({{ dwelling[2].code }}) - {{ dwelling[2].nom }}, {{ dwelling[2].name_fr }}</div>
                            <div>A partir de <span class=\"c1 ff-m size24\">{{ dwelling[0].price }}€</span></div>
                            <p>{{ dwelling[0].abstract }}</p>
                            <p><a><i class=\"fas fa-star size18\"></i> Ajouter au favoris</a></p>
                            <div class=\"d-flex gap-1 ai-center my-2\">
                                <span>Partager sur</span><span class=\"fab fa-facebook-f\"></span><span class=\"fab fa-linkedin-in\"></span><span class=\"fab fa-whatsapp\"></span>
                            </div>
                            <a><i class=\"fas fa-heart size18\"></i> Ajouter une mention j'aime</a>
                            <div><a>Signaler ce logement</a></div>
                        </div>
                        <div class=\"product-col-2\">
                            <div class=\"product-form-check\">
                                <div class=\"form-row product-calendar atypikhouse-search-dispo\">
                                    <div class=\"form-group col-lg-6 p-relative search-arrival-date target-data cp\">
                                        Date d'arrivée
                                        <label class=\"form-input cp my-1 c1 single-product-arrival\">_ _ /_ _ /_ _ _ _</label>
                                        <div class=\"superpose d-none calendar general-calendar calendar-reset\">{{ calendarReset | raw }}</div>
                                    </div>
                                    <div class=\"form-group col-lg-6 p-relative search-departure-date target-data cp\">
                                        Date de départ
                                        <label class=\"form-input cp my-1 c1 single-product-departure\">_ _ /_ _ /_ _ _ _</label>
                                        <div class=\"superpose d-none calendar general-calendar calendar-reset\"></div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label>Qui sont les voyageurs ?</label>
                                    <div class=\"my-1 single-product-travelers\">
                                        {% for limit in dwelling[1] %}
                                        {% if limit.field == \"_max_people\" %}
                                        <div class=\"form-input cp nb-traverlers\" data-adults=\"1\">{{ limit.value }} voyageurs maximums</div>
                                        {% endif %}
                                        {% endfor %}
                                        <ul class=\"choice-travelers\">
                                            
                                            {% for limit in dwelling[1] %}
                                                {% if limit.field == \"_max_people\" %}
                                                <input type=\"hidden\" class=\"people-limit\" value=\"{{ limit.value }}\">
                                                {% endif %}
                                            {% endfor %}
                                            {% for limit in dwelling[1] %}
                                                {% if limit.field == \"_minimum_age\" %}
                                                {% if limit.value >= 0 %}<li>Adulte (11 ans et au delà) <input type=\"number\" min=\"1\" value=\"1\" id=\"product-traveler-adult\"></li>{% endif %}
                                                {% endif %}
                                                {% if limit.field == \"_minimum_age\" %}
                                                {% if limit.value < 11 %}<li>Enfant (3 ans à 10 ans)  <input type=\"number\" min=\"0\" value=\"0\" id=\"product-traveler-children\"></li>{% endif %}
                                                {% endif %}
                                                {% if limit.field == \"_minimum_age\" %}
                                                {% if limit.value < 3 %}<li>Bébé (0 à 2 ans) <input type=\"number\" min=\"0\" value=\"0\" id=\"product-traveler-baby\"></li>{% endif %}
                                                {% endif %}
                                                {% if limit.field == \"_animals\" %}
                                                {% if limit.value == \"TRUE\" %}
                                                <li>Animaux <input type=\"number\" min=\"0\" value=\"0\" id=\"product-traveler-animal\"></li>
                                                {% endif %}
                                                {% endif %}
                                            {% endfor %}
                                        </ul>
                                    </div>
                                </div>
                                <input type=\"submit\" name=\"checking-dispo\" class=\"click click-success w-100\" value=\"Vérifier les disponibilités\">
                            </div>
                            <div class=\"product-form-checkout\"></div>
                        </div>
                    </div>
                    <div class=\"product-page-ndline my-4\">
                        {% for limit in dwelling[1] %}
                        {% if limit.field == \"_animals\" %}
                        <div>
                            <i class=\"fas fa-dog size52\"></i>
                            <span>{% if limit.value == TRUE %}Animaux acceptés{% else %}Animaux non acceptés{% endif %}</span>
                        </div>
                        {% endif %}

                        {% if limit.field == \"_breakfast\" %}
                        <div>
                            <i class=\"fas fa-cookie-bite size52\"></i>
                            <span>{% if limit.value ==\"TRUE\" %}Petit déjeuner inclus{% else %}Petit déjeuner non inclus{% endif %}</span>
                        </div>
                        {% endif %}


                        {% if limit.field == \"_max_people\" %}
                        <div>
                            <i class=\"fas fa-user-friends size52\"></i>
                            <span>{{ limit.value }} {% if limit.value ==\"1\" %}voyageur{% else %}voyageurs{% endif %} au maximum</span>
                        </div>
                        {% endif %}

                        {% if limit.field == \"_minimum_age\" %}
                        <div>
                            <i class=\"fas fa-child size52\"></i>
                            <span>Minimum {{ limit.value }} {% if limit.value <= \"1\" %}an{% else %}ans{% endif %}</span>
                        </div>
                        {% endif %}
                        {% endfor %}
                    </div>
                    <div class=\"product-page-rdline my-4\">
                        <div class=\"card-details px-2\">
                            <div>
                                <h3>DESCRIPTION DU LOGEMENT</h3>
                            </div>
                            <div>
                                <p>{{ dwelling[0].description }}</p>
                            </div>
                        </div>
                        <div class=\"card-details px-2\">
                            <div>
                                <h3>CARACTÉRISTIQUES</h3>
                            </div>
                            <ul class=\"px-0 py-1\">
                                {% for features in dwelling[1] %}
                                    {% if features.field == \"_surface\" %}
                                        <li>Surface habitable: {{ features.value }} m²</li>
                                    {% endif %}
                                    {% if features.field == \"_piece\" %}
                                        <li>Nombre de pièces: {{ features.value }}</li>
                                    {% endif %}
                                    {% if features.field == \"_water\" %}
                                        <li>Eau: {% if features.value == \"TRUE\" %}Oui{% else %}Non{% endif %}</li>
                                    {% endif %}
                                    {% if features.field == \"_eletricity\" %}
                                        <li>Électricité: {% if features.value == \"TRUE\" %}Oui{% else %}Non{% endif %}</li>
                                    {% endif %}
                                    {% if features.field == \"_parking\" %}
                                        <li>Parking: {% if features.value == \"TRUE\" %}Oui{% else %}Non{% endif %}</li>
                                    {% endif %}
                                {% endfor %}
                            </ul>
                        </div>
                        <div class=\"card-details px-2\">
                            <div>
                                <h3>ÉQUIPEMENTS</h3>
                            </div>
                            <ul class=\"px-0 py-1\">
                                {% for equipments in dwelling[1] %}
                                    {% if equipments.field == \"_equipments\" %}
                                        {% set equipment = equipments.value | split(',') %}
                                        {% for oneEquipment in equipment %}
                                        <li>{{ oneEquipment }}</li>
                                        {% endfor %}
                                    {% endif %}
                                {% endfor %}
                            </ul>
                        </div>
                        <div class=\"card-details px-2\">
                            <div>
                                <h3>INFORMATIONS COMPLÉMENTAIRES</h3>
                            </div>
                            <ul class=\"px-0 py-1\">
                                {% for informations in dwelling[1] %}
                                    
                                    {% if informations.field == \"_arrival_from\" %}
                                        <li>Arrivée: A partir de {{ informations.value }}
                                    {% elseif informations.field == \"_arrival_until\" %}
                                        jusqu'à {{ informations.value }}</li>
                                    {% endif %}
                                    
                                    {% if informations.field == \"_departure_before\" %}
                                        <li>Départ: Avant {{ informations.value }}</li>
                                    {% endif %}
                                {% endfor %}
                            </ul>
                        </div>
                    </div>



                    {% if dwelling[4] or dwelling[7] %}
                    <div class=\"product-page-lastline my-4\">
                        <h3>COMMENTAIRES ET NOTES</h3>
                        <br>
                        <div class=\"product-lastline-display\">
                        <div class=\"product-user-likes\">
                            <ul class=\"p-0\">
                                {% if dwelling[7] %}<li>Propreté {{ dwelling[7] }}<span></span></li>{% endif %}
                                {% if dwelling[8] %}<li>Précision {{ dwelling[8] }}<span></span></li>{% endif %}
                                {% if dwelling[9] %}<li>Communication {{ dwelling[9] }}<span></span></li>{% endif %}
                                {% if dwelling[10] %}<li>Emplacement {{ dwelling[10] }}<span></span></li>{% endif %}
                                {% if dwelling[11] %}<li>Arrivée {{ dwelling[11] }}<span></span></li>{% endif %}
                                {% if dwelling[12] %}<li>Rapport qualité prix {{ dwelling[12] }}<span></span></li>{% endif %}
                            </ul>
                        </div>
                        <div class=\"product-user-comments\">
                            {% if dwelling[4] %}
                                {% for comments in dwelling[4] %}
                                    <h4>{{ comments[1].first_name }}</h4>
                                    <p>{{ comments[0].added_at }}</p>
                                    <p>{{ comments[0].description }}</p>
                                {% endfor %}
                            {% endif %}
                        </div>
                        </div>
                    </div>
                    {% endif %}
                </div>
                {% if app.user %}
                    {% set email = app.user.email %}
                {% else %}
                    {% set email = '' %}
                {% endif %}
                <script>
                    arrivalDate = document.querySelector('.single-product-arrival').dataset.period
                    departureDate = document.querySelector('.single-product-departure').dataset.period

                    function dataProduct(\$url = \"{{ ath_link }}{{ path('app_habitation', {'slug': productUrl, 'id': dwelling[0].id}) | lower }}\", \$ckeck_url = \"{{ path('single_product_check') }}\", 
                    \$dwelling_id=\"{{ dwelling[0].id }}\", \$arrival = arrivalDate, 
                    \$departure = departureDate, \$local = \"{{ ath_link }}\", 
                    \$auth = \"{{ email }}\"){
                        return [\$url, \$ckeck_url, \$dwelling_id, \$arrival, \$departure, \$local, \$auth, \"{{ path('login') }}\"]
                    }
                </script>

                {% endfor %}
        </div>
    </div>
    <div id=\"map\"></div>
</div>


<script>
    var villes = {
        \"Paris\": {\"lat\": 48.852969, \"lon\":2.349903},
        \"Brest\": {\"lat\": 48.383, \"lon\": -4.500},
        \"Quimper\": {\"lat\": 48.000, \"lon\": -4.100 },
        \"Bayonne\": {\"lat\": 43.500, \"lon\": -1.467},
    }
    var map = L.map('map').setView([48.852969, 2.349903], 13);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        minZoom: 1,
        maxZoom: 19,
        attribution: '© OpenStreetMap | AtypikHouse'
    }).addTo(map);
    for(ville in villes){
        var marqueur = L.marker([villes[ville].lat, villes[ville].lon])
        .addTo(map);
        marqueur.bindPopup(\"<p>Paris</p>\")
    }
    {# var marker = L.marker([48.86, 2.33]).addTo(map); #}
</script>

{% include 'inc/parts/footer.html.twig' %}", "inc/pages/product/show-dwelling.html.twig", "/Users/nathandfk/Development/Symfony/atypikhouse/templates/inc/pages/product/show-dwelling.html.twig");
    }
}
