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

/* inc/pages/product/add-product.html.twig */
class __TwigTemplate_821ebf01300377d892e8990bd31bdfec extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/pages/product/add-product.html.twig"));

        // line 1
        $this->loadTemplate("inc/parts/head.html.twig", "inc/pages/product/add-product.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("inc/parts/nav.html.twig", "inc/pages/product/add-product.html.twig", 2)->display($context);
        // line 3
        echo "


<div class=\"atypikhouse-container my-6\">
    <div class=\"page-title\">
        <h1 class=\"text-uppercase c1 size20 ff-r\">";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</h1>
    </div>
    <div class=\"host-wrapper\">
        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
        <div class=\"img-uploaded\"></div>
        <h3>Essentiels</h3>
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), 'label');
        echo "
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "title", [], "any", false, false, false, 17), 'widget');
        echo "
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "title", [], "any", false, false, false, 18), 'errors');
        echo "
                </div>
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "abstract", [], "any", false, false, false, 21), 'label');
        echo "
                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "abstract", [], "any", false, false, false, 22), 'widget');
        echo "
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "abstract", [], "any", false, false, false, 23), 'errors');
        echo "
                </div>
            </div>
            <div>
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27), 'label');
        echo "
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "description", [], "any", false, false, false, 28), 'widget');
        echo "
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29), 'errors');
        echo "
            </div>
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "price", [], "any", false, false, false, 33), 'label');
        echo "
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "price", [], "any", false, false, false, 34), 'widget');
        echo "
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "price", [], "any", false, false, false, 35), 'errors');
        echo "
                </div>
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "pictures", [], "any", false, false, false, 38), 'label');
        echo "
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "pictures", [], "any", false, false, false, 39), 'widget');
        echo "
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "pictures", [], "any", false, false, false, 40), 'errors');
        echo "
                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "address", [], "any", false, false, false, 45), 'label');
        echo "
                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "address", [], "any", false, false, false, 46), 'widget');
        echo "
                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "address", [], "any", false, false, false, 47), 'errors');
        echo "
                </div>
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "complAddress", [], "any", false, false, false, 50), 'label');
        echo "
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "complAddress", [], "any", false, false, false, 51), 'widget');
        echo "
                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "complAddress", [], "any", false, false, false, 52), 'errors');
        echo "
                </div>
            </div>
        <div>
            <label>Emplacement *</label>
            <input type=\"text\" name=\"seach_location\" placeholder=\"Rechercher la ville de votre habitation\" required>
            <ul class=\"list-location\">
                <li></li>
            </ul>
            <input type=\"hidden\" name=\"value_location\">
            <p>Seuls les emplacements que vous trouverez dans votre recherche sont disponibles, 
            nous faisons de notre mieux d'en rajouter d'autres.</p>
        </div>
        <h3>Informations complémentaires</h3>
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    <div class=\"form-row\">
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"animals\">Animaux</label>
                            <div class=\"d-flex gap-1\">
                            <div><input type=\"radio\" id=\"animals_accepted\" class=\"w-max-content\" name=\"animals\" value=\"TRUE\" checked> <label for=\"animals_accepted\">Acceptés</label></div>
                            <div><input type=\"radio\" id=\"animals_not_accepted\" class=\"w-max-content\" name=\"animals\" value=\"FALSE\"> <label for=\"animals_not_accepted\">Pas acceptés</label></div>
                            </div>
                        </div>
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"breakfast\">Petit déjeuner</label>
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
                            <label for=\"water\">Eau</label>
                            <div class=\"d-flex gap-1\">
                            <div><input type=\"radio\" id=\"water_accepted\" class=\"w-max-content\" name=\"water\" value=\"TRUE\" checked> <label for=\"water_accepted\">Compris</label></div>
                            <div><input type=\"radio\" id=\"water_not_accepted\" class=\"w-max-content\" name=\"water\" value=\"FALSE\"> <label for=\"water_not_accepted\">Pas compris</label></div>
                            </div>
                        </div>
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"eletricity\">Électricité</label>
                            <div class=\"d-flex gap-1\">
                            <div><input type=\"radio\" id=\"eletricity_accepted\" class=\"w-max-content\" name=\"eletricity\" value=\"TRUE\" checked> <label for=\"eletricity_accepted\">Compris</label></div>
                            <div><input type=\"radio\" id=\"eletricity_not_accepted\" class=\"w-max-content\" name=\"eletricity\" value=\"FALSE\"> <label for=\"eletricity_not_accepted\">Pas compris</label></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                ";
        // line 109
        echo "            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    <div class=\"form-row\">
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"parking\">Parking</label>
                            <div class=\"d-flex gap-1\">
                            <div><input type=\"radio\" id=\"parking_accepted\" class=\"w-max-content\" name=\"parking\" value=\"TRUE\" checked> <label for=\"parking_accepted\">Compris</label></div>
                            <div><input type=\"radio\" id=\"parking_not_accepted\" class=\"w-max-content\" name=\"parking\" value=\"FALSE\"> <label for=\"parking_not_accepted\">Pas compris</label></div>
                            </div>
                        </div>
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"minimum_age\">Âge minimum</label>
                            <select>
                                <option>0</option>
                                <option>3</option>
                                <option>10</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"form-group bloc-lg-6\">
                    <div class=\"form-row\">
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"surface\">Surface habitable</label>
                            <input type=\"number\" name=\"surface\" id=\"surface\" min=\"10\" required>
                        </div>
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"piece\">Nombre de pièce</label>
                            <input type=\"number\" name=\"piece\" id=\"piece\" min=\"1\" required value=\"1\">
                        </div>
                    </div>
                </div>
            </div>



            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    <div class=\"form-row\">
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"arrival_from\">Arrivée à partir de</label>
                            <select name=\"arrival_from\" id=\"arrival_from\">
                                <option value=\"12h00\">12h00</option>
                                <option value=\"13h00\">13h00</option>
                                <option value=\"14h00\">14h00</option>
                                <option value=\"15h00\">15h00</option>
                                <option value=\"16h00\">16h00</option>
                            </select>
                        </div>
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"arrival_until\">Arrivée jusqu'à</label>
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
                            <label for=\"departure_before\">Départ avant</label>
                            <select class=\"required\" name=\"departure_before\">
                                <option>12h00</option>
                                <option>13h00</option>
                                <option>14h00</option>
                                <option selected>15h00</option>
                                <option>16h00</option>
                            </select>
                        </div>
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"max_people\">Maximum de personnes</label>
                            <input type=\"number\" name=\"max_people\" id=\"max_people\" min=\"1\" required value=\"1\">
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <label for=\"equipments\">Équipements *(Séparez les équipements par une virgule)</label>
                <textarea placeholder=\"Exemple: Lave linge,Parking,Cuisine,Wifi,Détecteur de fumée,Micro-ondes,Shampooing\" name=\"equipments\" id=\"equipments\"></textarea>
            </div>

            <button type=\"submit\" class=\"click click-success\">Ajouter ce logement</button>
        ";
        // line 195
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), 'form_end');
        echo "
    </div>
</div>


";
        // line 200
        $this->loadTemplate("inc/parts/footer.html.twig", "inc/pages/product/add-product.html.twig", 200)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/pages/product/add-product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 200,  304 => 195,  216 => 109,  161 => 52,  157 => 51,  153 => 50,  147 => 47,  143 => 46,  139 => 45,  131 => 40,  127 => 39,  123 => 38,  117 => 35,  113 => 34,  109 => 33,  102 => 29,  98 => 28,  94 => 27,  87 => 23,  83 => 22,  79 => 21,  73 => 18,  69 => 17,  65 => 16,  57 => 11,  51 => 8,  44 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'inc/parts/head.html.twig' %}
{% include 'inc/parts/nav.html.twig' %}



<div class=\"atypikhouse-container my-6\">
    <div class=\"page-title\">
        <h1 class=\"text-uppercase c1 size20 ff-r\">{{ title }}</h1>
    </div>
    <div class=\"host-wrapper\">
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
        <div>
            <label>Emplacement *</label>
            <input type=\"text\" name=\"seach_location\" placeholder=\"Rechercher la ville de votre habitation\" required>
            <ul class=\"list-location\">
                <li></li>
            </ul>
            <input type=\"hidden\" name=\"value_location\">
            <p>Seuls les emplacements que vous trouverez dans votre recherche sont disponibles, 
            nous faisons de notre mieux d'en rajouter d'autres.</p>
        </div>
        <h3>Informations complémentaires</h3>
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    <div class=\"form-row\">
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"animals\">Animaux</label>
                            <div class=\"d-flex gap-1\">
                            <div><input type=\"radio\" id=\"animals_accepted\" class=\"w-max-content\" name=\"animals\" value=\"TRUE\" checked> <label for=\"animals_accepted\">Acceptés</label></div>
                            <div><input type=\"radio\" id=\"animals_not_accepted\" class=\"w-max-content\" name=\"animals\" value=\"FALSE\"> <label for=\"animals_not_accepted\">Pas acceptés</label></div>
                            </div>
                        </div>
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"breakfast\">Petit déjeuner</label>
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
                            <label for=\"water\">Eau</label>
                            <div class=\"d-flex gap-1\">
                            <div><input type=\"radio\" id=\"water_accepted\" class=\"w-max-content\" name=\"water\" value=\"TRUE\" checked> <label for=\"water_accepted\">Compris</label></div>
                            <div><input type=\"radio\" id=\"water_not_accepted\" class=\"w-max-content\" name=\"water\" value=\"FALSE\"> <label for=\"water_not_accepted\">Pas compris</label></div>
                            </div>
                        </div>
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"eletricity\">Électricité</label>
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
                            <label for=\"parking\">Parking</label>
                            <div class=\"d-flex gap-1\">
                            <div><input type=\"radio\" id=\"parking_accepted\" class=\"w-max-content\" name=\"parking\" value=\"TRUE\" checked> <label for=\"parking_accepted\">Compris</label></div>
                            <div><input type=\"radio\" id=\"parking_not_accepted\" class=\"w-max-content\" name=\"parking\" value=\"FALSE\"> <label for=\"parking_not_accepted\">Pas compris</label></div>
                            </div>
                        </div>
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"minimum_age\">Âge minimum</label>
                            <select>
                                <option>0</option>
                                <option>3</option>
                                <option>10</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"form-group bloc-lg-6\">
                    <div class=\"form-row\">
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"surface\">Surface habitable</label>
                            <input type=\"number\" name=\"surface\" id=\"surface\" min=\"10\" required>
                        </div>
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"piece\">Nombre de pièce</label>
                            <input type=\"number\" name=\"piece\" id=\"piece\" min=\"1\" required value=\"1\">
                        </div>
                    </div>
                </div>
            </div>



            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    <div class=\"form-row\">
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"arrival_from\">Arrivée à partir de</label>
                            <select name=\"arrival_from\" id=\"arrival_from\">
                                <option value=\"12h00\">12h00</option>
                                <option value=\"13h00\">13h00</option>
                                <option value=\"14h00\">14h00</option>
                                <option value=\"15h00\">15h00</option>
                                <option value=\"16h00\">16h00</option>
                            </select>
                        </div>
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"arrival_until\">Arrivée jusqu'à</label>
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
                            <label for=\"departure_before\">Départ avant</label>
                            <select class=\"required\" name=\"departure_before\">
                                <option>12h00</option>
                                <option>13h00</option>
                                <option>14h00</option>
                                <option selected>15h00</option>
                                <option>16h00</option>
                            </select>
                        </div>
                        <div class=\"form-group bloc-lg-6\">
                            <label for=\"max_people\">Maximum de personnes</label>
                            <input type=\"number\" name=\"max_people\" id=\"max_people\" min=\"1\" required value=\"1\">
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <label for=\"equipments\">Équipements *(Séparez les équipements par une virgule)</label>
                <textarea placeholder=\"Exemple: Lave linge,Parking,Cuisine,Wifi,Détecteur de fumée,Micro-ondes,Shampooing\" name=\"equipments\" id=\"equipments\"></textarea>
            </div>

            <button type=\"submit\" class=\"click click-success\">Ajouter ce logement</button>
        {{ form_end(form) }}
    </div>
</div>


{% include 'inc/parts/footer.html.twig' %}", "inc/pages/product/add-product.html.twig", "/Users/nathandfk/Development/Symfony/atypikhouse/templates/inc/pages/product/add-product.html.twig");
    }
}
