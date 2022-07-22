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
            echo "        <div class=\"alert alert-error\">
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
        echo "<div class=\"dashboard-wrapper\">
    <div class=\"navigation-link d-flex gap-1 my-2\">
        <a data-checked=\"add\" class=\"click click-success\">Ajouter une habitation</a>
        ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23)) {
            // line 24
            echo "        ";
            if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_HOST") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MODERATOR")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                // line 25
                echo "        <a data-checked=\"show\" class=\"click click-c5\">Habitations</a>
        ";
            }
            // line 27
            echo "        ";
        }
        // line 28
        echo "    </div>
    <div class=\"host-wrapper\" data-selected=\"add\" >
        ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_start');
        echo "
        <div class=\"img-uploaded\"></div>
        <h3>Essentiels</h3>
            <div class=\"form-group\">
                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "type", [], "any", false, false, false, 34), 'label');
        echo "
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "type", [], "any", false, false, false, 35), 'widget');
        echo "
                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "type", [], "any", false, false, false, 36), 'errors');
        echo "
            </div>
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "title", [], "any", false, false, false, 40), 'label');
        echo "
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "title", [], "any", false, false, false, 41), 'widget');
        echo "
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "title", [], "any", false, false, false, 42), 'errors');
        echo "
                </div>
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "abstract", [], "any", false, false, false, 45), 'label');
        echo "
                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "abstract", [], "any", false, false, false, 46), 'widget');
        echo "
                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "abstract", [], "any", false, false, false, 47), 'errors');
        echo "
                </div>
            </div>
            <div>
                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "description", [], "any", false, false, false, 51), 'label');
        echo "
                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "description", [], "any", false, false, false, 52), 'widget');
        echo "
                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "description", [], "any", false, false, false, 53), 'errors');
        echo "
            </div>
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "price", [], "any", false, false, false, 57), 'label');
        echo "
                    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "price", [], "any", false, false, false, 58), 'widget');
        echo "
                    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "price", [], "any", false, false, false, 59), 'errors');
        echo "
                </div>
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "pictures", [], "any", false, false, false, 62), 'label');
        echo "
                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "pictures", [], "any", false, false, false, 63), 'widget');
        echo "
                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "pictures", [], "any", false, false, false, 64), 'errors');
        echo "
                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "address", [], "any", false, false, false, 69), 'label');
        echo "
                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "address", [], "any", false, false, false, 70), 'widget');
        echo "
                    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "address", [], "any", false, false, false, 71), 'errors');
        echo "
                </div>
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "complAddress", [], "any", false, false, false, 74), 'label');
        echo "
                    ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "complAddress", [], "any", false, false, false, 75), 'widget');
        echo "
                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "complAddress", [], "any", false, false, false, 76), 'errors');
        echo "
                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "country", [], "any", false, false, false, 81), 'label');
        echo "
                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "country", [], "any", false, false, false, 82), 'widget');
        echo "
                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "country", [], "any", false, false, false, 83), 'errors');
        echo "
                </div>
                <div class=\"location-inner form-group bloc-lg-6\">
                    <label>Emplacement (Important de sélectionner le pays avant)*</label>
                    <input type=\"text\" data-link=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("location");
        echo "\" class=\"seach-location\" autocomplete=\"off\" name=\"seach_location\" placeholder=\"Rechercher la ville de votre habitation\" required>
                    <div class=\"location-content search-place\"></div>
                    <input type=\"hidden\" name=\"value_location\">
                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "city", [], "any", false, false, false, 94), 'label');
        echo "
                    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "city", [], "any", false, false, false, 95), 'widget');
        echo "
                    ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "city", [], "any", false, false, false, 96), 'errors');
        echo "
                </div>
                <div class=\"form-group bloc-lg-6\">
                    ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "state", [], "any", false, false, false, 99), 'label');
        echo "
                    ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "state", [], "any", false, false, false, 100), 'widget');
        echo "
                    ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "state", [], "any", false, false, false, 101), 'errors');
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "equipments", [], "any", false, false, false, 105), 'label');
        echo "
                ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "equipments", [], "any", false, false, false, 106), 'widget');
        echo "
                ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "equipments", [], "any", false, false, false, 107), 'errors');
        echo "
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
        // line 153
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

            <button type=\"submit\" class=\"click click-success ml-auto\" name=\"add_dwelling\">Ajouter ce logement</button>
        ";
        // line 235
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 235, $this->source); })()), 'form_end');
        echo "
    </div>
    ";
        // line 237
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 237, $this->source); })()), "user", [], "any", false, false, false, 237)) {
            // line 238
            echo "    ";
            if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_HOST")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MODERATOR"))) {
                // line 239
                echo "    <div class=\"host-wrapper d-none\" data-selected=\"show\" >
        ";
                // line 240
                $this->loadTemplate("inc/pages/product/list-dwelling.html.twig", "inc/pages/product/add-dwelling.html.twig", 240)->display($context);
                // line 241
                echo "    </div>
    ";
            }
            // line 243
            echo "    ";
        }
        // line 244
        echo "</div>
</div>


";
        // line 248
        $this->loadTemplate("inc/parts/footer.html.twig", "inc/pages/product/add-dwelling.html.twig", 248)->display($context);
        
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
        return array (  454 => 248,  448 => 244,  445 => 243,  441 => 241,  439 => 240,  436 => 239,  433 => 238,  431 => 237,  426 => 235,  342 => 153,  298 => 107,  294 => 106,  290 => 105,  283 => 101,  279 => 100,  275 => 99,  269 => 96,  265 => 95,  261 => 94,  251 => 87,  244 => 83,  240 => 82,  236 => 81,  228 => 76,  224 => 75,  220 => 74,  214 => 71,  210 => 70,  206 => 69,  198 => 64,  194 => 63,  190 => 62,  184 => 59,  180 => 58,  176 => 57,  169 => 53,  165 => 52,  161 => 51,  154 => 47,  150 => 46,  146 => 45,  140 => 42,  136 => 41,  132 => 40,  125 => 36,  121 => 35,  117 => 34,  110 => 30,  106 => 28,  103 => 27,  99 => 25,  96 => 24,  94 => 23,  89 => 20,  80 => 17,  77 => 16,  72 => 15,  63 => 12,  60 => 11,  56 => 10,  51 => 8,  44 => 3,  42 => 2,  40 => 1,);
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
        <div class=\"alert alert-error\">
            {{ message }}
        </div>
    {% endfor %}
<div class=\"dashboard-wrapper\">
    <div class=\"navigation-link d-flex gap-1 my-2\">
        <a data-checked=\"add\" class=\"click click-success\">Ajouter une habitation</a>
        {% if app.user %}
        {% if (is_granted(\"ROLE_HOST\") or is_granted(\"ROLE_MODERATOR\") or is_granted(\"ROLE_ADMIN\")) %}
        <a data-checked=\"show\" class=\"click click-c5\">Habitations</a>
        {% endif %}
        {% endif %}
    </div>
    <div class=\"host-wrapper\" data-selected=\"add\" >
        {{ form_start(form) }}
        <div class=\"img-uploaded\"></div>
        <h3>Essentiels</h3>
            <div class=\"form-group\">
                {{ form_label(form.type) }}
                {{ form_widget(form.type) }}
                {{ form_errors(form.type) }}
            </div>
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
                    <input type=\"text\" data-link=\"{{ path('location') }}\" class=\"seach-location\" autocomplete=\"off\" name=\"seach_location\" placeholder=\"Rechercher la ville de votre habitation\" required>
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
            <div class=\"form-group\">
                {{ form_label(form.equipments) }}
                {{ form_widget(form.equipments) }}
                {{ form_errors(form.equipments) }}
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

            <button type=\"submit\" class=\"click click-success ml-auto\" name=\"add_dwelling\">Ajouter ce logement</button>
        {{ form_end(form) }}
    </div>
    {% if app.user %}
    {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_HOST') or is_granted('ROLE_MODERATOR') %}
    <div class=\"host-wrapper d-none\" data-selected=\"show\" >
        {% include 'inc/pages/product/list-dwelling.html.twig' %}
    </div>
    {% endif %}
    {% endif %}
</div>
</div>


{% include 'inc/parts/footer.html.twig' %}", "inc/pages/product/add-dwelling.html.twig", "/Users/nathandfk/Development/Symfony/final/dsp-project/templates/inc/pages/product/add-dwelling.html.twig");
    }
}
