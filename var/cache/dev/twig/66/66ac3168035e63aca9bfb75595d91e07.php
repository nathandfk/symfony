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
                            <h2 class=\"size18\">Type: ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dwelling"], 14, [], "array", false, false, false, 45), "html", null, true);
            echo "</h2>
                            <br>
                            <div>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwelling"], 0, [], "array", false, false, false, 47), "city", [], "any", false, false, false, 47), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwelling"], 0, [], "array", false, false, false, 47), "state", [], "any", false, false, false, 47), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dwelling"], 2, [], "array", false, false, false, 47), "html", null, true);
            echo "</div>
                            <div>A partir de <span class=\"c1 ff-m size24\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwelling"], 0, [], "array", false, false, false, 48), "price", [], "any", false, false, false, 48), "html", null, true);
            echo "€</span></div>
                            <p>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwelling"], 0, [], "array", false, false, false, 49), "abstract", [], "any", false, false, false, 49), "html", null, true);
            echo "</p>
                            ";
            // line 50
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50)) {
                // line 51
                echo "                            <p><a class=\"text-link-success cp\" id='add-favorite' data-link=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dwelling_add_favorite");
                echo "\" data-id='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwelling"], 0, [], "array", false, false, false, 51), "id", [], "any", false, false, false, 51), "html", null, true);
                echo "'><i class=\"fas fa-star size18\"></i> Ajouter au favoris</a></p>
                            ";
            }
            // line 53
            echo "                            <div class=\"d-flex gap-1 ai-center my-2\">
                                <span>Partager sur</span><span class=\"fab fa-facebook-f\"></span><span class=\"fab fa-linkedin-in\"></span><span class=\"fab fa-whatsapp\"></span>
                            </div>
                            ";
            // line 57
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57)) {
                // line 58
                echo "                            <div><a class=\"text-link-success cp\" id='add-signal' data-id='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwelling"], 0, [], "array", false, false, false, 58), "id", [], "any", false, false, false, 58), "html", null, true);
                echo "' data-link=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dwelling_add_signal");
                echo "\">Signaler ce logement</a></div>
                            ";
            }
            // line 60
            echo "                        </div>
                        ";
            // line 61
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61)) {
                // line 62
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwelling"], 0, [], "array", false, false, false, 62), "user_id", [], "any", false, false, false, 62) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "id", [], "any", false, false, false, 62))) {
                    // line 63
                    echo "                        <div class=\"product-col-2\">
                            <div class=\"product-form-check\">
                                <div class=\"form-row product-calendar atypikhouse-search-dispo\">
                                    <div class=\"form-group col-lg-6 p-relative search-arrival-date target-data cp\">
                                        Date d'arrivée
                                        <label class=\"form-input cp my-1 c1 single-product-arrival\">_ _ /_ _ /_ _ _ _</label>
                                        <div class=\"superpose d-none calendar general-calendar calendar-reset\">";
                    // line 69
                    echo (isset($context["calendarReset"]) || array_key_exists("calendarReset", $context) ? $context["calendarReset"] : (function () { throw new RuntimeError('Variable "calendarReset" does not exist.', 69, $this->source); })());
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
                    // line 80
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dwelling"], 1, [], "array", false, false, false, 80));
                    foreach ($context['_seq'] as $context["_key"] => $context["limit"]) {
                        // line 81
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["limit"], "field", [], "any", false, false, false, 81) == "_max_people")) {
                            // line 82
                            echo "                                        <div class=\"form-input cp nb-traverlers\" data-adults=\"1\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["limit"], "value", [], "any", false, false, false, 82), "html", null, true);
                            echo " voyageurs maximums</div>
                                        ";
                        }
                        // line 84
                        echo "                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limit'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 85
                    echo "                                        <ul class=\"choice-travelers\">
                                            
                                            ";
                    // line 87
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dwelling"], 1, [], "array", false, false, false, 87));
                    foreach ($context['_seq'] as $context["_key"] => $context["limit"]) {
                        // line 88
                        echo "                                                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["limit"], "field", [], "any", false, false, false, 88) == "_max_people")) {
                            // line 89
                            echo "                                                <input type=\"hidden\" class=\"people-limit\" value=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["limit"], "value", [], "any", false, false, false, 89), "html", null, true);
                            echo "\">
                                                ";
                        }
                        // line 91
                        echo "                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limit'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 92
                    echo "                                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dwelling"], 1, [], "array", false, false, false, 92));
                    foreach ($context['_seq'] as $context["_key"] => $context["limit"]) {
                        // line 93
                        echo "                                                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["limit"], "field", [], "any", false, false, false, 93) == "_minimum_age")) {
                            // line 94
                            echo "                                                ";
                            if ((twig_get_attribute($this->env, $this->source, $context["limit"], "value", [], "any", false, false, false, 94) >= 0)) {
                                echo "<li>Adulte (11 ans et au delà) <input type=\"number\" min=\"1\" value=\"1\" id=\"product-traveler-adult\"></li>";
                            }
                            // line 95
                            echo "                                                ";
                        }
                        // line 96
                        echo "                                                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["limit"], "field", [], "any", false, false, false, 96) == "_minimum_age")) {
                            // line 97
                            echo "                                                ";
                            if ((twig_get_attribute($this->env, $this->source, $context["limit"], "value", [], "any", false, false, false, 97) < 11)) {
                                echo "<li>Enfant (3 ans à 10 ans)  <input type=\"number\" min=\"0\" value=\"0\" id=\"product-traveler-children\"></li>";
                            }
                            // line 98
                            echo "                                                ";
                        }
                        // line 99
                        echo "                                                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["limit"], "field", [], "any", false, false, false, 99) == "_minimum_age")) {
                            // line 100
                            echo "                                                ";
                            if ((twig_get_attribute($this->env, $this->source, $context["limit"], "value", [], "any", false, false, false, 100) < 3)) {
                                echo "<li>Bébé (0 à 2 ans) <input type=\"number\" min=\"0\" value=\"0\" id=\"product-traveler-baby\"></li>";
                            }
                            // line 101
                            echo "                                                ";
                        }
                        // line 102
                        echo "                                                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["limit"], "field", [], "any", false, false, false, 102) == "_animals")) {
                            // line 103
                            echo "                                                ";
                            if ((twig_get_attribute($this->env, $this->source, $context["limit"], "value", [], "any", false, false, false, 103) == "TRUE")) {
                                // line 104
                                echo "                                                <li>Animaux <input type=\"number\" min=\"0\" value=\"0\" id=\"product-traveler-animal\"></li>
                                                ";
                            }
                            // line 106
                            echo "                                                ";
                        }
                        // line 107
                        echo "                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limit'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 108
                    echo "                                        </ul>
                                    </div>
                                </div>
                                <input type=\"submit\" name=\"checking-dispo\" class=\"click click-success w-100\" value=\"Vérifier les disponibilités\">
                            </div>
                            <div class=\"product-form-checkout\"></div>
                        </div>
                        ";
                } else {
                    // line 116
                    echo "                            <div class=\"product-form-check\" data-dwelling=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwelling"], 0, [], "array", false, false, false, 116), "id", [], "any", false, false, false, 116), "html", null, true);
                    echo "\" data-path=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("unavailable");
                    echo "\">
                                <div class=\"form-row product-calendar atypikhouse-search-dispo\">
                                    <div class=\"form-group col-lg-6 p-relative search-arrival-date target-data cp\">
                                        Date d'arrivée
                                        <label class=\"form-input cp my-1 c1 single-product-arrival\">_ _ /_ _ /_ _ _ _</label>
                                        <div class=\"superpose d-none calendar general-calendar calendar-reset\">";
                    // line 121
                    echo (isset($context["calendarReset"]) || array_key_exists("calendarReset", $context) ? $context["calendarReset"] : (function () { throw new RuntimeError('Variable "calendarReset" does not exist.', 121, $this->source); })());
                    echo "</div>
                                    </div>
                                    <div class=\"form-group col-lg-6 p-relative search-departure-date target-data cp\">
                                        Date de départ
                                        <label class=\"form-input cp my-1 c1 single-product-departure\">_ _ /_ _ /_ _ _ _</label>
                                        <div class=\"superpose d-none calendar general-calendar calendar-reset\"></div>
                                    </div>
                                </div>
                                <input type=\"submit\" name=\"note-unavailable\" class=\"click click-success w-100\" value=\"Noter indisponible\">
                            </div>
                        ";
                }
                // line 132
                echo "                        ";
            } else {
                // line 133
                echo "                        <div class=\"product-col-2\">
                            <div class=\"product-form-check\">
                                <div class=\"form-row product-calendar atypikhouse-search-dispo\">
                                    <div class=\"form-group col-lg-6 p-relative search-arrival-date target-data cp\">
                                        Date d'arrivée
                                        <label class=\"form-input cp my-1 c1 single-product-arrival\">_ _ /_ _ /_ _ _ _</label>
                                        <div class=\"superpose d-none calendar general-calendar calendar-reset\">";
                // line 139
                echo (isset($context["calendarReset"]) || array_key_exists("calendarReset", $context) ? $context["calendarReset"] : (function () { throw new RuntimeError('Variable "calendarReset" does not exist.', 139, $this->source); })());
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
                // line 150
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dwelling"], 1, [], "array", false, false, false, 150));
                foreach ($context['_seq'] as $context["_key"] => $context["limit"]) {
                    // line 151
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["limit"], "field", [], "any", false, false, false, 151) == "_max_people")) {
                        // line 152
                        echo "                                        <div class=\"form-input cp nb-traverlers\" data-adults=\"1\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["limit"], "value", [], "any", false, false, false, 152), "html", null, true);
                        echo " voyageurs maximums</div>
                                        ";
                    }
                    // line 154
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limit'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 155
                echo "                                        <ul class=\"choice-travelers\">
                                            
                                            ";
                // line 157
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dwelling"], 1, [], "array", false, false, false, 157));
                foreach ($context['_seq'] as $context["_key"] => $context["limit"]) {
                    // line 158
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["limit"], "field", [], "any", false, false, false, 158) == "_max_people")) {
                        // line 159
                        echo "                                                <input type=\"hidden\" class=\"people-limit\" value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["limit"], "value", [], "any", false, false, false, 159), "html", null, true);
                        echo "\">
                                                ";
                    }
                    // line 161
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limit'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 162
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dwelling"], 1, [], "array", false, false, false, 162));
                foreach ($context['_seq'] as $context["_key"] => $context["limit"]) {
                    // line 163
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["limit"], "field", [], "any", false, false, false, 163) == "_minimum_age")) {
                        // line 164
                        echo "                                                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["limit"], "value", [], "any", false, false, false, 164) >= 0)) {
                            echo "<li>Adulte (11 ans et au delà) <input type=\"number\" min=\"1\" value=\"1\" id=\"product-traveler-adult\"></li>";
                        }
                        // line 165
                        echo "                                                ";
                    }
                    // line 166
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["limit"], "field", [], "any", false, false, false, 166) == "_minimum_age")) {
                        // line 167
                        echo "                                                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["limit"], "value", [], "any", false, false, false, 167) < 11)) {
                            echo "<li>Enfant (3 ans à 10 ans)  <input type=\"number\" min=\"0\" value=\"0\" id=\"product-traveler-children\"></li>";
                        }
                        // line 168
                        echo "                                                ";
                    }
                    // line 169
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["limit"], "field", [], "any", false, false, false, 169) == "_minimum_age")) {
                        // line 170
                        echo "                                                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["limit"], "value", [], "any", false, false, false, 170) < 3)) {
                            echo "<li>Bébé (0 à 2 ans) <input type=\"number\" min=\"0\" value=\"0\" id=\"product-traveler-baby\"></li>";
                        }
                        // line 171
                        echo "                                                ";
                    }
                    // line 172
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["limit"], "field", [], "any", false, false, false, 172) == "_animals")) {
                        // line 173
                        echo "                                                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["limit"], "value", [], "any", false, false, false, 173) == "TRUE")) {
                            // line 174
                            echo "                                                <li>Animaux <input type=\"number\" min=\"0\" value=\"0\" id=\"product-traveler-animal\"></li>
                                                ";
                        }
                        // line 176
                        echo "                                                ";
                    }
                    // line 177
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limit'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 178
                echo "                                        </ul>
                                    </div>
                                </div>
                                <input type=\"submit\" name=\"checking-dispo\" class=\"click click-success w-100\" value=\"Vérifier les disponibilités\">
                            </div>
                            <div class=\"product-form-checkout\"></div>
                        </div>
                        ";
            }
            // line 186
            echo "                    </div>
                    <div class=\"product-page-ndline my-4\">
                        ";
            // line 188
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dwelling"], 1, [], "array", false, false, false, 188));
            foreach ($context['_seq'] as $context["_key"] => $context["limit"]) {
                // line 189
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["limit"], "field", [], "any", false, false, false, 189) == "_animals")) {
                    // line 190
                    echo "                        <div>
                            <i class=\"fas fa-dog size52\"></i>
                            <span>";
                    // line 192
                    if ((twig_get_attribute($this->env, $this->source, $context["limit"], "value", [], "any", false, false, false, 192) == true)) {
                        echo "Animaux acceptés";
                    } else {
                        echo "Animaux non acceptés";
                    }
                    echo "</span>
                        </div>
                        ";
                }
                // line 195
                echo "
                        ";
                // line 196
                if ((twig_get_attribute($this->env, $this->source, $context["limit"], "field", [], "any", false, false, false, 196) == "_breakfast")) {
                    // line 197
                    echo "                        <div>
                            <i class=\"fas fa-cookie-bite size52\"></i>
                            <span>";
                    // line 199
                    if ((twig_get_attribute($this->env, $this->source, $context["limit"], "value", [], "any", false, false, false, 199) == "TRUE")) {
                        echo "Petit déjeuner inclus";
                    } else {
                        echo "Petit déjeuner non inclus";
                    }
                    echo "</span>
                        </div>
                        ";
                }
                // line 202
                echo "

                        ";
                // line 204
                if ((twig_get_attribute($this->env, $this->source, $context["limit"], "field", [], "any", false, false, false, 204) == "_max_people")) {
                    // line 205
                    echo "                        <div>
                            <i class=\"fas fa-user-friends size52\"></i>
                            <span>";
                    // line 207
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["limit"], "value", [], "any", false, false, false, 207), "html", null, true);
                    echo " ";
                    if ((twig_get_attribute($this->env, $this->source, $context["limit"], "value", [], "any", false, false, false, 207) == "1")) {
                        echo "voyageur";
                    } else {
                        echo "voyageurs";
                    }
                    echo " au maximum</span>
                        </div>
                        ";
                }
                // line 210
                echo "
                        ";
                // line 211
                if ((twig_get_attribute($this->env, $this->source, $context["limit"], "field", [], "any", false, false, false, 211) == "_minimum_age")) {
                    // line 212
                    echo "                        <div>
                            <i class=\"fas fa-child size52\"></i>
                            <span>Minimum ";
                    // line 214
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["limit"], "value", [], "any", false, false, false, 214), "html", null, true);
                    echo " ";
                    if ((twig_get_attribute($this->env, $this->source, $context["limit"], "value", [], "any", false, false, false, 214) <= "1")) {
                        echo "an";
                    } else {
                        echo "ans";
                    }
                    echo "</span>
                        </div>
                        ";
                }
                // line 217
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 218
            echo "                    </div>
                    <div class=\"product-page-rdline my-4\">
                        <div class=\"card-details px-2\">
                            <div>
                                <h3>DESCRIPTION DU LOGEMENT</h3>
                            </div>
                            <div>
                                <p>";
            // line 225
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwelling"], 0, [], "array", false, false, false, 225), "description", [], "any", false, false, false, 225), "html", null, true);
            echo "</p>
                            </div>
                        </div>
                        <div class=\"card-details px-2\">
                            <div>
                                <h3>CARACTÉRISTIQUES</h3>
                            </div>
                            <ul class=\"px-0 py-1\">
                                ";
            // line 233
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dwelling"], 1, [], "array", false, false, false, 233));
            foreach ($context['_seq'] as $context["_key"] => $context["features"]) {
                // line 234
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["features"], "field", [], "any", false, false, false, 234) == "_surface")) {
                    // line 235
                    echo "                                        <li>Surface habitable: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["features"], "value", [], "any", false, false, false, 235), "html", null, true);
                    echo " m²</li>
                                    ";
                }
                // line 237
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["features"], "field", [], "any", false, false, false, 237) == "_piece")) {
                    // line 238
                    echo "                                        <li>Nombre de pièces: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["features"], "value", [], "any", false, false, false, 238), "html", null, true);
                    echo "</li>
                                    ";
                }
                // line 240
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["features"], "field", [], "any", false, false, false, 240) == "_water")) {
                    // line 241
                    echo "                                        <li>Eau: ";
                    if ((twig_get_attribute($this->env, $this->source, $context["features"], "value", [], "any", false, false, false, 241) == "TRUE")) {
                        echo "Oui";
                    } else {
                        echo "Non";
                    }
                    echo "</li>
                                    ";
                }
                // line 243
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["features"], "field", [], "any", false, false, false, 243) == "_eletricity")) {
                    // line 244
                    echo "                                        <li>Électricité: ";
                    if ((twig_get_attribute($this->env, $this->source, $context["features"], "value", [], "any", false, false, false, 244) == "TRUE")) {
                        echo "Oui";
                    } else {
                        echo "Non";
                    }
                    echo "</li>
                                    ";
                }
                // line 246
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["features"], "field", [], "any", false, false, false, 246) == "_parking")) {
                    // line 247
                    echo "                                        <li>Parking: ";
                    if ((twig_get_attribute($this->env, $this->source, $context["features"], "value", [], "any", false, false, false, 247) == "TRUE")) {
                        echo "Oui";
                    } else {
                        echo "Non";
                    }
                    echo "</li>
                                    ";
                }
                // line 249
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['features'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 250
            echo "                            </ul>
                        </div>
                        <div class=\"card-details px-2\">
                            <div>
                                <h3>ÉQUIPEMENTS</h3>
                            </div>
                            <ul class=\"px-0 py-1\">
                                ";
            // line 257
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dwelling"], 15, [], "array", false, false, false, 257));
            foreach ($context['_seq'] as $context["_key"] => $context["equipments"]) {
                // line 258
                echo "                                    <li>";
                echo twig_escape_filter($this->env, $context["equipments"], "html", null, true);
                echo " </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipments'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 260
            echo "                            </ul>
                        </div>
                        <div class=\"card-details px-2\">
                            <div>
                                <h3>INFORMATIONS COMPLÉMENTAIRES</h3>
                            </div>
                            <ul class=\"px-0 py-1\">
                                ";
            // line 267
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dwelling"], 1, [], "array", false, false, false, 267));
            foreach ($context['_seq'] as $context["_key"] => $context["informations"]) {
                // line 268
                echo "                                    
                                    ";
                // line 269
                if ((twig_get_attribute($this->env, $this->source, $context["informations"], "field", [], "any", false, false, false, 269) == "_arrival_from")) {
                    // line 270
                    echo "                                        <li>Arrivée: A partir de ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["informations"], "value", [], "any", false, false, false, 270), "html", null, true);
                    echo "
                                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 271
$context["informations"], "field", [], "any", false, false, false, 271) == "_arrival_until")) {
                    // line 272
                    echo "                                        jusqu'à ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["informations"], "value", [], "any", false, false, false, 272), "html", null, true);
                    echo "</li>
                                    ";
                }
                // line 274
                echo "                                    
                                    ";
                // line 275
                if ((twig_get_attribute($this->env, $this->source, $context["informations"], "field", [], "any", false, false, false, 275) == "_departure_before")) {
                    // line 276
                    echo "                                        <li>Départ: Avant ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["informations"], "value", [], "any", false, false, false, 276), "html", null, true);
                    echo "</li>
                                    ";
                }
                // line 278
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['informations'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 279
            echo "                            </ul>
                        </div>
                    </div>



                    ";
            // line 285
            if ((twig_get_attribute($this->env, $this->source, $context["dwelling"], 4, [], "array", false, false, false, 285) || twig_get_attribute($this->env, $this->source, $context["dwelling"], 7, [], "array", false, false, false, 285))) {
                // line 286
                echo "                    <div class=\"product-page-lastline my-4\">
                        <h3>COMMENTAIRES ET NOTES</h3>
                        <br>
                        <div class=\"product-lastline-display\">
                        <div class=\"product-user-likes\">
                            <ul class=\"p-0\">
                                ";
                // line 292
                if (twig_get_attribute($this->env, $this->source, $context["dwelling"], 7, [], "array", false, false, false, 292)) {
                    echo "<li>Propreté ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dwelling"], 7, [], "array", false, false, false, 292), "html", null, true);
                    echo "<span></span></li>";
                }
                // line 293
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, $context["dwelling"], 8, [], "array", false, false, false, 293)) {
                    echo "<li>Précision ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dwelling"], 8, [], "array", false, false, false, 293), "html", null, true);
                    echo "<span></span></li>";
                }
                // line 294
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, $context["dwelling"], 9, [], "array", false, false, false, 294)) {
                    echo "<li>Communication ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dwelling"], 9, [], "array", false, false, false, 294), "html", null, true);
                    echo "<span></span></li>";
                }
                // line 295
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, $context["dwelling"], 10, [], "array", false, false, false, 295)) {
                    echo "<li>Emplacement ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dwelling"], 10, [], "array", false, false, false, 295), "html", null, true);
                    echo "<span></span></li>";
                }
                // line 296
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, $context["dwelling"], 11, [], "array", false, false, false, 296)) {
                    echo "<li>Arrivée ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dwelling"], 11, [], "array", false, false, false, 296), "html", null, true);
                    echo "<span></span></li>";
                }
                // line 297
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, $context["dwelling"], 12, [], "array", false, false, false, 297)) {
                    echo "<li>Rapport qualité prix ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dwelling"], 12, [], "array", false, false, false, 297), "html", null, true);
                    echo "<span></span></li>";
                }
                // line 298
                echo "                            </ul>
                        </div>
                        <div class=\"product-user-comments\">
                            ";
                // line 301
                if (twig_get_attribute($this->env, $this->source, $context["dwelling"], 4, [], "array", false, false, false, 301)) {
                    // line 302
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dwelling"], 4, [], "array", false, false, false, 302));
                    foreach ($context['_seq'] as $context["_key"] => $context["comments"]) {
                        // line 303
                        echo "                                    <h4>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comments"], 1, [], "array", false, false, false, 303), "first_name", [], "any", false, false, false, 303), "html", null, true);
                        echo "</h4>
                                    <p>";
                        // line 304
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comments"], 0, [], "array", false, false, false, 304), "added_at", [], "any", false, false, false, 304), "html", null, true);
                        echo "</p>
                                    <p>";
                        // line 305
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comments"], 0, [], "array", false, false, false, 305), "description", [], "any", false, false, false, 305), "html", null, true);
                        echo "</p>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comments'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 307
                    echo "                            ";
                }
                // line 308
                echo "                        </div>
                        </div>
                    </div>
                    ";
            }
            // line 312
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 312, $this->source); })()), "user", [], "any", false, false, false, 312)) {
                // line 313
                echo "                    ";
                if ((((isset($context["likes"]) || array_key_exists("likes", $context) ? $context["likes"] : (function () { throw new RuntimeError('Variable "likes" does not exist.', 313, $this->source); })()) == true) || ((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 313, $this->source); })()) == true))) {
                    // line 314
                    echo "                    <h3>Vous pouvez laisser un commentaire</h3>
                    <div class=\"d-flex gap-1 w-75 my-2\">
                        ";
                    // line 316
                    if (((isset($context["likes"]) || array_key_exists("likes", $context) ? $context["likes"] : (function () { throw new RuntimeError('Variable "likes" does not exist.', 316, $this->source); })()) == true)) {
                        // line 317
                        echo "                        <form id=\"user-like\" data-dwelling = \"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwelling"], 0, [], "array", false, false, false, 317), "id", [], "any", false, false, false, 317), "html", null, true);
                        echo "\">
                            <div class=\"criteria\">Propreté <span>";
                        // line 318
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            echo "<button class=\"fas fa-star cp criteria-star\" name=\"_cleanliness\" value=\"";
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "\"></button>";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</span></div>
                            <div class=\"criteria\">Précision <span>";
                        // line 319
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            echo "<button class=\"fas fa-star cp criteria-star\" name=\"_precision\" value=\"";
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "\"></button>";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</span></div>
                            <div class=\"criteria\">Communication <span>";
                        // line 320
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            echo "<button class=\"fas fa-star cp criteria-star\" name=\"_communication\" value=\"";
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "\"></button>";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</span></div>
                            <div class=\"criteria\">Emplacement <span>";
                        // line 321
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            echo "<button class=\"fas fa-star cp criteria-star\" name=\"_location\" value=\"";
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "\"></button>";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</span></div>
                            <div class=\"criteria\">Arrivée <span>";
                        // line 322
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            echo "<button class=\"fas fa-star cp criteria-star\" name=\"_arrival\" value=\"";
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "\"></button>";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</span></div>
                            <div class=\"criteria\">Rapport qualité prix <span>";
                        // line 323
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            echo "<button class=\"fas fa-star cp criteria-star\" name=\"_value_for_money\" value=\"";
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "\"></button>";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</span></div>
                            <input type=\"submit\" class=\"click click-success\" name=\"btn_like\" value=\"Envoyer\">
                        </form>
                        ";
                    }
                    // line 327
                    echo "                        ";
                    if (((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 327, $this->source); })()) == true)) {
                        // line 328
                        echo "                        <form id=\"user-comment\" class=\"w-50\">
                            <textarea rows=\"6\" name=\"comments_text\" id=\"comments_text\"></textarea>
                            <input type=\"hidden\" value=\"";
                        // line 330
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwelling"], 0, [], "array", false, false, false, 330), "id", [], "any", false, false, false, 330), "html", null, true);
                        echo "\" name=\"_dwelling\">
                            <input type=\"submit\" class=\"click click-success ml-auto\" name=\"btn_comment\" value=\"Commenter\">
                        </form>
                        ";
                    }
                    // line 334
                    echo "                    </div>
                    ";
                }
                // line 336
                echo "                    ";
            }
            // line 337
            echo "                </div>
                ";
            // line 338
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 338, $this->source); })()), "user", [], "any", false, false, false, 338)) {
                // line 339
                echo "                    ";
                $context["email"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 339, $this->source); })()), "user", [], "any", false, false, false, 339), "email", [], "any", false, false, false, 339);
                // line 340
                echo "                ";
            } else {
                // line 341
                echo "                    ";
                $context["email"] = "";
                // line 342
                echo "                ";
            }
            // line 343
            echo "                <script>
                    arrivalDate = document.querySelector('.single-product-arrival').dataset.period
                    departureDate = document.querySelector('.single-product-departure').dataset.period

                    function dataProduct(\$url = \"";
            // line 347
            echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 347, $this->source); })()), "html", null, true);
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitation", ["slug" => (isset($context["productUrl"]) || array_key_exists("productUrl", $context) ? $context["productUrl"] : (function () { throw new RuntimeError('Variable "productUrl" does not exist.', 347, $this->source); })()), "id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwelling"], 0, [], "array", false, false, false, 347), "id", [], "any", false, false, false, 347)])), "html", null, true);
            echo "\", \$ckeck_url = \"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("single_product_check");
            echo "\", 
                    \$dwelling_id=\"";
            // line 348
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwelling"], 0, [], "array", false, false, false, 348), "id", [], "any", false, false, false, 348), "html", null, true);
            echo "\", \$arrival = arrivalDate, 
                    \$departure = departureDate, \$local = \"";
            // line 349
            echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 349, $this->source); })()), "html", null, true);
            echo "\", 
                    \$auth = \"";
            // line 350
            echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 350, $this->source); })()), "html", null, true);
            echo "\"){
                        return [\$url, \$ckeck_url, \$dwelling_id, \$arrival, \$departure, \$local, \$auth, \"";
            // line 351
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\"]
                    }
                </script>
                <div id=\"map\"></div>
                <script>
                var ville = {
                    \"lat\": \"";
            // line 357
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwelling"], 0, [], "array", false, false, false, 357), "longitude", [], "any", false, false, false, 357), "html", null, true);
            echo "\", \"lon\": \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwelling"], 0, [], "array", false, false, false, 357), "latitude", [], "any", false, false, false, 357), "html", null, true);
            echo "\",
                }
                var map = L.map('map').setView([ville.lon, ville.lat], 13);
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    minZoom: 1,
                    maxZoom: 19,
                    attribution: '© OpenStreetMap | AtypikHouse'
                }).addTo(map);
                var marker = L.marker([ville.lon, ville.lat]).addTo(map);
                ";
            // line 367
            echo "                </script>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dwelling'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 370
        echo "        </div>
    </div>



</div>


";
        // line 398
        echo "
";
        // line 399
        $this->loadTemplate("inc/parts/footer.html.twig", "inc/pages/product/show-dwelling.html.twig", 399)->display($context);
        
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
        return array (  1038 => 399,  1035 => 398,  1025 => 370,  1017 => 367,  1003 => 357,  994 => 351,  990 => 350,  986 => 349,  982 => 348,  975 => 347,  969 => 343,  966 => 342,  963 => 341,  960 => 340,  957 => 339,  955 => 338,  952 => 337,  949 => 336,  945 => 334,  938 => 330,  934 => 328,  931 => 327,  915 => 323,  902 => 322,  889 => 321,  876 => 320,  863 => 319,  850 => 318,  845 => 317,  843 => 316,  839 => 314,  836 => 313,  833 => 312,  827 => 308,  824 => 307,  816 => 305,  812 => 304,  807 => 303,  802 => 302,  800 => 301,  795 => 298,  788 => 297,  781 => 296,  774 => 295,  767 => 294,  760 => 293,  754 => 292,  746 => 286,  744 => 285,  736 => 279,  730 => 278,  724 => 276,  722 => 275,  719 => 274,  713 => 272,  711 => 271,  706 => 270,  704 => 269,  701 => 268,  697 => 267,  688 => 260,  679 => 258,  675 => 257,  666 => 250,  660 => 249,  650 => 247,  647 => 246,  637 => 244,  634 => 243,  624 => 241,  621 => 240,  615 => 238,  612 => 237,  606 => 235,  603 => 234,  599 => 233,  588 => 225,  579 => 218,  573 => 217,  561 => 214,  557 => 212,  555 => 211,  552 => 210,  540 => 207,  536 => 205,  534 => 204,  530 => 202,  520 => 199,  516 => 197,  514 => 196,  511 => 195,  501 => 192,  497 => 190,  494 => 189,  490 => 188,  486 => 186,  476 => 178,  470 => 177,  467 => 176,  463 => 174,  460 => 173,  457 => 172,  454 => 171,  449 => 170,  446 => 169,  443 => 168,  438 => 167,  435 => 166,  432 => 165,  427 => 164,  424 => 163,  419 => 162,  413 => 161,  407 => 159,  404 => 158,  400 => 157,  396 => 155,  390 => 154,  384 => 152,  381 => 151,  377 => 150,  363 => 139,  355 => 133,  352 => 132,  338 => 121,  327 => 116,  317 => 108,  311 => 107,  308 => 106,  304 => 104,  301 => 103,  298 => 102,  295 => 101,  290 => 100,  287 => 99,  284 => 98,  279 => 97,  276 => 96,  273 => 95,  268 => 94,  265 => 93,  260 => 92,  254 => 91,  248 => 89,  245 => 88,  241 => 87,  237 => 85,  231 => 84,  225 => 82,  222 => 81,  218 => 80,  204 => 69,  196 => 63,  193 => 62,  191 => 61,  188 => 60,  180 => 58,  177 => 57,  172 => 53,  164 => 51,  162 => 50,  158 => 49,  154 => 48,  146 => 47,  141 => 45,  137 => 44,  128 => 37,  115 => 34,  112 => 33,  108 => 32,  98 => 27,  89 => 23,  81 => 20,  73 => 17,  69 => 15,  67 => 14,  64 => 13,  61 => 12,  57 => 11,  49 => 5,  47 => 4,  44 => 3,  42 => 2,  40 => 1,);
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
                            <h2 class=\"size18\">Type: {{ dwelling[14] }}</h2>
                            <br>
                            <div>{{ dwelling[0].city }}, {{ dwelling[0].state }}, {{ dwelling[2] }}</div>
                            <div>A partir de <span class=\"c1 ff-m size24\">{{ dwelling[0].price }}€</span></div>
                            <p>{{ dwelling[0].abstract }}</p>
                            {% if app.user %}
                            <p><a class=\"text-link-success cp\" id='add-favorite' data-link=\"{{ path('dwelling_add_favorite') }}\" data-id='{{ dwelling[0].id }}'><i class=\"fas fa-star size18\"></i> Ajouter au favoris</a></p>
                            {% endif %}
                            <div class=\"d-flex gap-1 ai-center my-2\">
                                <span>Partager sur</span><span class=\"fab fa-facebook-f\"></span><span class=\"fab fa-linkedin-in\"></span><span class=\"fab fa-whatsapp\"></span>
                            </div>
                            {# <a><i class=\"fas fa-heart size18\"></i> Ajouter une mention j'aime</a> #}
                            {% if app.user %}
                            <div><a class=\"text-link-success cp\" id='add-signal' data-id='{{ dwelling[0].id }}' data-link=\"{{ path('dwelling_add_signal') }}\">Signaler ce logement</a></div>
                            {% endif %}
                        </div>
                        {% if app.user %}
                        {% if dwelling[0].user_id != app.user.id %}
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
                        {% else %}
                            <div class=\"product-form-check\" data-dwelling=\"{{ dwelling[0].id }}\" data-path=\"{{ path('unavailable') }}\">
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
                                <input type=\"submit\" name=\"note-unavailable\" class=\"click click-success w-100\" value=\"Noter indisponible\">
                            </div>
                        {% endif %}
                        {% else %}
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
                        {% endif %}
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
                                {% for equipments in dwelling[15] %}
                                    <li>{{ equipments }} </li>
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
                    {% if app.user %}
                    {% if likes == TRUE or comments == TRUE %}
                    <h3>Vous pouvez laisser un commentaire</h3>
                    <div class=\"d-flex gap-1 w-75 my-2\">
                        {% if likes == TRUE %}
                        <form id=\"user-like\" data-dwelling = \"{{ dwelling[0].id }}\">
                            <div class=\"criteria\">Propreté <span>{% for i in 1..5 %}<button class=\"fas fa-star cp criteria-star\" name=\"_cleanliness\" value=\"{{ i }}\"></button>{% endfor %}</span></div>
                            <div class=\"criteria\">Précision <span>{% for i in 1..5 %}<button class=\"fas fa-star cp criteria-star\" name=\"_precision\" value=\"{{ i }}\"></button>{% endfor %}</span></div>
                            <div class=\"criteria\">Communication <span>{% for i in 1..5 %}<button class=\"fas fa-star cp criteria-star\" name=\"_communication\" value=\"{{ i }}\"></button>{% endfor %}</span></div>
                            <div class=\"criteria\">Emplacement <span>{% for i in 1..5 %}<button class=\"fas fa-star cp criteria-star\" name=\"_location\" value=\"{{ i }}\"></button>{% endfor %}</span></div>
                            <div class=\"criteria\">Arrivée <span>{% for i in 1..5 %}<button class=\"fas fa-star cp criteria-star\" name=\"_arrival\" value=\"{{ i }}\"></button>{% endfor %}</span></div>
                            <div class=\"criteria\">Rapport qualité prix <span>{% for i in 1..5 %}<button class=\"fas fa-star cp criteria-star\" name=\"_value_for_money\" value=\"{{ i }}\"></button>{% endfor %}</span></div>
                            <input type=\"submit\" class=\"click click-success\" name=\"btn_like\" value=\"Envoyer\">
                        </form>
                        {% endif %}
                        {% if comments == TRUE %}
                        <form id=\"user-comment\" class=\"w-50\">
                            <textarea rows=\"6\" name=\"comments_text\" id=\"comments_text\"></textarea>
                            <input type=\"hidden\" value=\"{{ dwelling[0].id }}\" name=\"_dwelling\">
                            <input type=\"submit\" class=\"click click-success ml-auto\" name=\"btn_comment\" value=\"Commenter\">
                        </form>
                        {% endif %}
                    </div>
                    {% endif %}
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
                <div id=\"map\"></div>
                <script>
                var ville = {
                    \"lat\": \"{{ dwelling[0].longitude }}\", \"lon\": \"{{ dwelling[0].latitude }}\",
                }
                var map = L.map('map').setView([ville.lon, ville.lat], 13);
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    minZoom: 1,
                    maxZoom: 19,
                    attribution: '© OpenStreetMap | AtypikHouse'
                }).addTo(map);
                var marker = L.marker([ville.lon, ville.lat]).addTo(map);
                {# var marker = L.marker([48.86, 2.33]).addTo(map); #}
                </script>

                {% endfor %}
        </div>
    </div>



</div>


{# <script>
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
    {# var marker = L.marker([48.86, 2.33]).addTo(map); 
</script>#}

{% include 'inc/parts/footer.html.twig' %}", "inc/pages/product/show-dwelling.html.twig", "/Users/nathandfk/Development/Symfony/final/dsp-project/templates/inc/pages/product/show-dwelling.html.twig");
    }
}
