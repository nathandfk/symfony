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

/* inc/pages/product/add-dwelling.html.twig */
class __TwigTemplate_59d2bf14b2507f2811404ef427fa2275 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/pages/product/add-dwelling.html.twig"));

        // line 1
        $this->loadTemplate("inc/parts/head.html.twig", "inc/pages/product/add-dwelling.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("inc/parts/nav.html.twig", "inc/pages/product/add-dwelling.html.twig", 2)->display($context);
        // line 3
        echo "


<div class=\"atypikhouse-container my-6\">
    <div class=\"page-title\">
        <h1 class=\"text-uppercase c1 size20 ff-r\">";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</h1>
    </div>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "        <div class=\"alert alert-success\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "        <div class=\"alert alert-success\">
            ";
            // line 17
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    <div class=\"navigation-link d-flex gap-1 my-3\">
        <a data-checked=\"add\" class=\"click click-success\">Ajouter une habitation</a>
        <a data-checked=\"delete\" class=\"click click-c5\">Habitations</a>
    </div>
    <div class=\"host-wrapper\" data-selected=\"add\" >
        ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start');
        echo "
        <div class=\"img-uploaded\"></div>
        <h3>Essentiels</h3>
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "title", [], "any", false, false, false, 30), 'label');
        echo "
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "title", [], "any", false, false, false, 31), 'widget');
        echo "
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "title", [], "any", false, false, false, 32), 'errors');
        echo "
                </div>
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "abstract", [], "any", false, false, false, 35), 'label');
        echo "
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "abstract", [], "any", false, false, false, 36), 'widget');
        echo "
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "abstract", [], "any", false, false, false, 37), 'errors');
        echo "
                </div>
            </div>
            <div>
                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "description", [], "any", false, false, false, 41), 'label');
        echo "
                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "description", [], "any", false, false, false, 42), 'widget');
        echo "
                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "description", [], "any", false, false, false, 43), 'errors');
        echo "
            </div>
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "price", [], "any", false, false, false, 47), 'label');
        echo "
                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "price", [], "any", false, false, false, 48), 'widget');
        echo "
                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "price", [], "any", false, false, false, 49), 'errors');
        echo "
                </div>
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "pictures", [], "any", false, false, false, 52), 'label');
        echo "
                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "pictures", [], "any", false, false, false, 53), 'widget');
        echo "
                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "pictures", [], "any", false, false, false, 54), 'errors');
        echo "
                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "address", [], "any", false, false, false, 59), 'label');
        echo "
                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "address", [], "any", false, false, false, 60), 'widget');
        echo "
                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "address", [], "any", false, false, false, 61), 'errors');
        echo "
                </div>
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "complAddress", [], "any", false, false, false, 64), 'label');
        echo "
                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "complAddress", [], "any", false, false, false, 65), 'widget');
        echo "
                    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "complAddress", [], "any", false, false, false, 66), 'errors');
        echo "
                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "country", [], "any", false, false, false, 71), 'label');
        echo "
                    ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "country", [], "any", false, false, false, 72), 'widget');
        echo "
                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "country", [], "any", false, false, false, 73), 'errors');
        echo "
                </div>
                <div class=\"location-inner form-group bloc-lg-6\">
                    <label>Emplacement (Important de sélectionner le pays avant)*</label>
                    <input type=\"text\" data-link=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("location");
        echo "\" class=\"seach-location\" name=\"seach_location\" placeholder=\"Rechercher la ville de votre habitation\" required>
                    <div class=\"location-content search-place\"></div>
                    <input type=\"hidden\" name=\"value_location\">
                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "city", [], "any", false, false, false, 84), 'label');
        echo "
                    ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "city", [], "any", false, false, false, 85), 'widget');
        echo "
                    ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "city", [], "any", false, false, false, 86), 'errors');
        echo "
                </div>
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "state", [], "any", false, false, false, 89), 'label');
        echo "
                    ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "state", [], "any", false, false, false, 90), 'widget');
        echo "
                    ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "state", [], "any", false, false, false, 91), 'errors');
        echo "
                </div>
            </div>
        <h3>Informations complémentaires</h3>
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    <div class=\"form-row\">
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"animals\">Animaux *</label>
                            <div class=\"d-flex gap-1\">
                            <div><input type=\"radio\" id=\"animals_accepted\" class=\"w-max-content\" name=\"animals\" value=\"TRUE\" checked> <label for=\"animals_accepted\">Acceptés</label></div>
                            <div><input type=\"radio\" id=\"animals_not_accepted\" class=\"w-max-content\" name=\"animals\" value=\"FALSE\"> <label for=\"animals_not_accepted\">Pas acceptés</label></div>
                            </div>
                        </div>
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"breakfast\">Petit déjeuner *</label>
                            <div class=\"d-flex gap-1\">
                            <div><input type=\"radio\" id=\"breakfast_accepted\" class=\"w-max-content\" name=\"breakfast\" value=\"TRUE\" checked> <label for=\"breakfast_accepted\">Compris</label></div>
                            <div><input type=\"radio\" id=\"breakfast_not_accepted\" class=\"w-max-content\" name=\"breakfast\" value=\"FALSE\"> <label for=\"breakfast_not_accepted\">Pas compris</label></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"form-group bloc-lg-6\">
                    <div class=\"form-row\">
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"water\">Eau *</label>
                            <div class=\"d-flex gap-1\">
                            <div><input type=\"radio\" id=\"water_accepted\" class=\"w-max-content\" name=\"water\" value=\"TRUE\" checked> <label for=\"water_accepted\">Compris</label></div>
                            <div><input type=\"radio\" id=\"water_not_accepted\" class=\"w-max-content\" name=\"water\" value=\"FALSE\"> <label for=\"water_not_accepted\">Pas compris</label></div>
                            </div>
                        </div>
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"eletricity\">Électricité *</label>
                            <div class=\"d-flex gap-1\">
                            <div><input type=\"radio\" id=\"eletricity_accepted\" class=\"w-max-content\" name=\"eletricity\" value=\"TRUE\" checked> <label for=\"eletricity_accepted\">Compris</label></div>
                            <div><input type=\"radio\" id=\"eletricity_not_accepted\" class=\"w-max-content\" name=\"eletricity\" value=\"FALSE\"> <label for=\"eletricity_not_accepted\">Pas compris</label></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                ";
        // line 138
        echo "            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    <div class=\"form-row\">
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"parking\">Parking *</label>
                            <div class=\"d-flex gap-1\">
                            <div><input type=\"radio\" id=\"parking_accepted\" class=\"w-max-content\" name=\"parking\" value=\"TRUE\" checked> <label for=\"parking_accepted\">Compris</label></div>
                            <div><input type=\"radio\" id=\"parking_not_accepted\" class=\"w-max-content\" name=\"parking\" value=\"FALSE\"> <label for=\"parking_not_accepted\">Pas compris</label></div>
                            </div>
                        </div>
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"minimum_age\">Âge minimum *</label>
                            <select name=\"minimum_age\">
                                <option value=\"0\">0</option>
                                <option value=\"3\">3</option>
                                <option value=\"10\">10</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"form-group bloc-lg-6\">
                    <div class=\"form-row\">
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"surface\">Surface habitable *</label>
                            <input type=\"number\" name=\"surface\" id=\"surface\" min=\"10\" required>
                        </div>
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"piece\">Nombre de pièce *</label>
                            <input type=\"number\" name=\"piece\" id=\"piece\" min=\"1\" required value=\"1\">
                        </div>
                    </div>
                </div>
            </div>



            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    <div class=\"form-row\">
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"arrival_from\">Arrivée à partir de *</label>
                            <select name=\"arrival_from\" id=\"arrival_from\">
                                <option value=\"12h00\">12h00</option>
                                <option value=\"13h00\">13h00</option>
                                <option value=\"14h00\">14h00</option>
                                <option value=\"15h00\">15h00</option>
                                <option value=\"16h00\">16h00</option>
                            </select>
                        </div>
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"arrival_until\">Arrivée jusqu'à *</label>
                            <select name=\"arrival_until\" id=\"arrival_until\">
                                <option value=\"20h00\">20h00</option>
                                <option value=\"21h00\">21h00</option>
                                <option value=\"22h00\">22h00</option>
                                <option value=\"23h00\">23h00</option>
                                <option value=\"23h59\">23h59</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"form-group bloc-lg-6\">
                    <div class=\"form-row\">
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"departure_before\">Départ avant *</label>
                            <select class=\"required\" name=\"departure_before\">
                                <option value=\"12h00\">12h00</option>
                                <option value=\"13h00\">13h00</option>
                                <option value=\"14h00\">14h00</option>
                                <option value=\"15h00\" selected>15h00</option>
                                <option value=\"16h00\">16h00</option>
                            </select>
                        </div>
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"max_people\">Maximum de personnes *</label>
                            <input type=\"number\" name=\"max_people\" id=\"max_people\" min=\"1\" required value=\"1\">
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <label for=\"equipments\">Équipements *(Séparez les équipements par une virgule)</label>
                <textarea placeholder=\"Exemple: Lave linge,Parking,Cuisine,Wifi,Détecteur de fumée,Micro-ondes,Shampooing\" name=\"equipments\" id=\"equipments\"></textarea>
            </div>

            <button type=\"submit\" class=\"click click-success\" name=\"add_dwelling\">Ajouter ce logement</button>
        ";
        // line 224
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 224, $this->source); })()), 'form_end');
        echo "
    </div>
</div>


";
        // line 229
        $this->loadTemplate("inc/parts/footer.html.twig", "inc/pages/product/add-dwelling.html.twig", 229)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/pages/product/add-dwelling.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  396 => 229,  388 => 224,  300 => 138,  255 => 91,  251 => 90,  247 => 89,  241 => 86,  237 => 85,  233 => 84,  223 => 77,  216 => 73,  212 => 72,  208 => 71,  200 => 66,  196 => 65,  192 => 64,  186 => 61,  182 => 60,  178 => 59,  170 => 54,  166 => 53,  162 => 52,  156 => 49,  152 => 48,  148 => 47,  141 => 43,  137 => 42,  133 => 41,  126 => 37,  122 => 36,  118 => 35,  112 => 32,  108 => 31,  104 => 30,  96 => 25,  89 => 20,  80 => 17,  77 => 16,  72 => 15,  63 => 12,  60 => 11,  56 => 10,  51 => 8,  44 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'inc/parts/head.html.twig' %}
{% include 'inc/parts/nav.html.twig' %}



<div class=\"atypikhouse-container my-6\">
    <div class=\"page-title\">
        <h1 class=\"text-uppercase c1 size20 ff-r\">{{ title }}</h1>
    </div>
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\">
            {{ message }}
        </div>
    {% endfor %}
    {% for message in app.flashes('error') %}
        <div class=\"alert alert-success\">
            {{ message }}
        </div>
    {% endfor %}
    <div class=\"navigation-link d-flex gap-1 my-3\">
        <a data-checked=\"add\" class=\"click click-success\">Ajouter une habitation</a>
        <a data-checked=\"delete\" class=\"click click-c5\">Habitations</a>
    </div>
    <div class=\"host-wrapper\" data-selected=\"add\" >
        {{ form_start(form) }}
        <div class=\"img-uploaded\"></div>
        <h3>Essentiels</h3>
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    {{ form_label(form.title) }}
                    {{ form_widget(form.title) }}
                    {{ form_errors(form.title) }}
                </div>
                <div class=\"form-group bloc-lg-6\">
                    {{ form_label(form.abstract) }}
                    {{ form_widget(form.abstract) }}
                    {{ form_errors(form.abstract) }}
                </div>
            </div>
            <div>
                {{ form_label(form.description) }}
                {{ form_widget(form.description) }}
                {{ form_errors(form.description) }}
            </div>
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    {{ form_label(form.price) }}
                    {{ form_widget(form.price) }}
                    {{ form_errors(form.price) }}
                </div>
                <div class=\"form-group bloc-lg-6\">
                    {{ form_label(form.pictures) }}
                    {{ form_widget(form.pictures) }}
                    {{ form_errors(form.pictures) }}
                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    {{ form_label(form.address) }}
                    {{ form_widget(form.address) }}
                    {{ form_errors(form.address) }}
                </div>
                <div class=\"form-group bloc-lg-6\">
                    {{ form_label(form.complAddress) }}
                    {{ form_widget(form.complAddress) }}
                    {{ form_errors(form.complAddress) }}
                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    {{ form_label(form.country) }}
                    {{ form_widget(form.country) }}
                    {{ form_errors(form.country) }}
                </div>
                <div class=\"location-inner form-group bloc-lg-6\">
                    <label>Emplacement (Important de sélectionner le pays avant)*</label>
                    <input type=\"text\" data-link=\"{{ path('location') }}\" class=\"seach-location\" name=\"seach_location\" placeholder=\"Rechercher la ville de votre habitation\" required>
                    <div class=\"location-content search-place\"></div>
                    <input type=\"hidden\" name=\"value_location\">
                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    {{ form_label(form.city) }}
                    {{ form_widget(form.city) }}
                    {{ form_errors(form.city) }}
                </div>
                <div class=\"form-group bloc-lg-6\">
                    {{ form_label(form.state) }}
                    {{ form_widget(form.state) }}
                    {{ form_errors(form.state) }}
                </div>
            </div>
        <h3>Informations complémentaires</h3>
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    <div class=\"form-row\">
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"animals\">Animaux *</label>
                            <div class=\"d-flex gap-1\">
                            <div><input type=\"radio\" id=\"animals_accepted\" class=\"w-max-content\" name=\"animals\" value=\"TRUE\" checked> <label for=\"animals_accepted\">Acceptés</label></div>
                            <div><input type=\"radio\" id=\"animals_not_accepted\" class=\"w-max-content\" name=\"animals\" value=\"FALSE\"> <label for=\"animals_not_accepted\">Pas acceptés</label></div>
                            </div>
                        </div>
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"breakfast\">Petit déjeuner *</label>
                            <div class=\"d-flex gap-1\">
                            <div><input type=\"radio\" id=\"breakfast_accepted\" class=\"w-max-content\" name=\"breakfast\" value=\"TRUE\" checked> <label for=\"breakfast_accepted\">Compris</label></div>
                            <div><input type=\"radio\" id=\"breakfast_not_accepted\" class=\"w-max-content\" name=\"breakfast\" value=\"FALSE\"> <label for=\"breakfast_not_accepted\">Pas compris</label></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"form-group bloc-lg-6\">
                    <div class=\"form-row\">
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"water\">Eau *</label>
                            <div class=\"d-flex gap-1\">
                            <div><input type=\"radio\" id=\"water_accepted\" class=\"w-max-content\" name=\"water\" value=\"TRUE\" checked> <label for=\"water_accepted\">Compris</label></div>
                            <div><input type=\"radio\" id=\"water_not_accepted\" class=\"w-max-content\" name=\"water\" value=\"FALSE\"> <label for=\"water_not_accepted\">Pas compris</label></div>
                            </div>
                        </div>
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"eletricity\">Électricité *</label>
                            <div class=\"d-flex gap-1\">
                            <div><input type=\"radio\" id=\"eletricity_accepted\" class=\"w-max-content\" name=\"eletricity\" value=\"TRUE\" checked> <label for=\"eletricity_accepted\">Compris</label></div>
                            <div><input type=\"radio\" id=\"eletricity_not_accepted\" class=\"w-max-content\" name=\"eletricity\" value=\"FALSE\"> <label for=\"eletricity_not_accepted\">Pas compris</label></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                {# <div class=\"form-group bloc-lg-6\">
                    {{ form_label(form.value) }}
                    {{ form_widget(form.value) }}
                    {{ form_errors(form.value) }}
                </div> #}
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    <div class=\"form-row\">
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"parking\">Parking *</label>
                            <div class=\"d-flex gap-1\">
                            <div><input type=\"radio\" id=\"parking_accepted\" class=\"w-max-content\" name=\"parking\" value=\"TRUE\" checked> <label for=\"parking_accepted\">Compris</label></div>
                            <div><input type=\"radio\" id=\"parking_not_accepted\" class=\"w-max-content\" name=\"parking\" value=\"FALSE\"> <label for=\"parking_not_accepted\">Pas compris</label></div>
                            </div>
                        </div>
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"minimum_age\">Âge minimum *</label>
                            <select name=\"minimum_age\">
                                <option value=\"0\">0</option>
                                <option value=\"3\">3</option>
                                <option value=\"10\">10</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"form-group bloc-lg-6\">
                    <div class=\"form-row\">
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"surface\">Surface habitable *</label>
                            <input type=\"number\" name=\"surface\" id=\"surface\" min=\"10\" required>
                        </div>
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"piece\">Nombre de pièce *</label>
                            <input type=\"number\" name=\"piece\" id=\"piece\" min=\"1\" required value=\"1\">
                        </div>
                    </div>
                </div>
            </div>



            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    <div class=\"form-row\">
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"arrival_from\">Arrivée à partir de *</label>
                            <select name=\"arrival_from\" id=\"arrival_from\">
                                <option value=\"12h00\">12h00</option>
                                <option value=\"13h00\">13h00</option>
                                <option value=\"14h00\">14h00</option>
                                <option value=\"15h00\">15h00</option>
                                <option value=\"16h00\">16h00</option>
                            </select>
                        </div>
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"arrival_until\">Arrivée jusqu'à *</label>
                            <select name=\"arrival_until\" id=\"arrival_until\">
                                <option value=\"20h00\">20h00</option>
                                <option value=\"21h00\">21h00</option>
                                <option value=\"22h00\">22h00</option>
                                <option value=\"23h00\">23h00</option>
                                <option value=\"23h59\">23h59</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"form-group bloc-lg-6\">
                    <div class=\"form-row\">
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"departure_before\">Départ avant *</label>
                            <select class=\"required\" name=\"departure_before\">
                                <option value=\"12h00\">12h00</option>
                                <option value=\"13h00\">13h00</option>
                                <option value=\"14h00\">14h00</option>
                                <option value=\"15h00\" selected>15h00</option>
                                <option value=\"16h00\">16h00</option>
                            </select>
                        </div>
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"max_people\">Maximum de personnes *</label>
                            <input type=\"number\" name=\"max_people\" id=\"max_people\" min=\"1\" required value=\"1\">
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <label for=\"equipments\">Équipements *(Séparez les équipements par une virgule)</label>
                <textarea placeholder=\"Exemple: Lave linge,Parking,Cuisine,Wifi,Détecteur de fumée,Micro-ondes,Shampooing\" name=\"equipments\" id=\"equipments\"></textarea>
            </div>

            <button type=\"submit\" class=\"click click-success\" name=\"add_dwelling\">Ajouter ce logement</button>
        {{ form_end(form) }}
    </div>
</div>


{% include 'inc/parts/footer.html.twig' %}", "inc/pages/product/add-dwelling.html.twig", "/Users/nathandfk/Development/Symfony/atypikhouse/templates/inc/pages/product/add-dwelling.html.twig");
    }
}
