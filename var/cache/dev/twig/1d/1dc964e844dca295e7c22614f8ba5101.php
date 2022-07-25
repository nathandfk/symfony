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

/* index.html.twig */
class __TwigTemplate_24faef7e152996f55a1dc60438ce7b69 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        // line 1
        $this->loadTemplate("inc/parts/head.html.twig", "index.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("inc/parts/nav.html.twig", "index.html.twig", 2)->display($context);
        // line 3
        echo "
";
        // line 4
        if (((isset($context["homepic"]) || array_key_exists("homepic", $context) ? $context["homepic"] : (function () { throw new RuntimeError('Variable "homepic" does not exist.', 4, $this->source); })()) && (isset($context["hometitle"]) || array_key_exists("hometitle", $context) ? $context["hometitle"] : (function () { throw new RuntimeError('Variable "hometitle" does not exist.', 4, $this->source); })()))) {
            // line 5
            echo "<header class=\"atypikhouse-container\">
    <div class=\"atypikhouse-header-inner grid-level-3\">
        <div class=\"header-background-picture\">
            <img src=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 8, $this->source); })()), "html", null, true);
            echo "/uploads/pages/";
            echo twig_escape_filter($this->env, (isset($context["homepic"]) || array_key_exists("homepic", $context) ? $context["homepic"] : (function () { throw new RuntimeError('Variable "homepic" does not exist.', 8, $this->source); })()), "html", null, true);
            echo "\" alt=\"AtypikHouse image mise en avant, logement insolite\">
        </div>
        <div class=\"header-cover\"></div>
        <div class=\"header-text\">
            <h1 class=\"size38 ff-sb\">";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["hometitle"]) || array_key_exists("hometitle", $context) ? $context["hometitle"] : (function () { throw new RuntimeError('Variable "hometitle" does not exist.', 12, $this->source); })()), "html", null, true);
            echo "</h1>
        </div>
    </div>
</header>
";
        }
        // line 17
        $this->loadTemplate("inc/modules/search/popupsearch.html.twig", "index.html.twig", 17)->display($context);
        // line 18
        echo "
";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            echo "    <div class=\"alert alert-success\">
        ";
            // line 21
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 25
            echo "    <div class=\"alert alert-error\">
        ";
            // line 26
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
";
        // line 30
        $this->loadTemplate("inc/pages/home/discovery.html.twig", "index.html.twig", 30)->display($context);
        // line 31
        if ((isset($context["ideas"]) || array_key_exists("ideas", $context) ? $context["ideas"] : (function () { throw new RuntimeError('Variable "ideas" does not exist.', 31, $this->source); })())) {
            // line 32
            echo "<section class=\"atypikhouse-section atypikhouse-container my-6\">
    <div class=\"atypikhouse-section-display picture-radius\">
        <div class=\"section-title\">
            <h2 class=\"c1 my-1\">DES IDÉES POUR VOTRE PROCHAINE RÉSERVATION</h2>
        </div>
        <div class=\"section-display grid-lg-4 grid-md-4 grid-sm-4\">
            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["ideas"]) || array_key_exists("ideas", $context) ? $context["ideas"] : (function () { throw new RuntimeError('Variable "ideas" does not exist.', 38, $this->source); })()), 0, 4));
            foreach ($context['_seq'] as $context["_key"] => $context["dwellings"]) {
                // line 39
                echo "            ";
                $context["productUrl"] = twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwellings"], 0, [], "array", false, false, false, 39), "title", [], "any", false, false, false, 39), ["%20" => "-", " " => "-", "%c3%a9" => "e", "%27" => "", "á" => "a", "é" => "e", "í" => "i", "ó" => "o", "ú" => "u"]);
                // line 40
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitation", ["slug" => (isset($context["productUrl"]) || array_key_exists("productUrl", $context) ? $context["productUrl"] : (function () { throw new RuntimeError('Variable "productUrl" does not exist.', 40, $this->source); })()), "id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwellings"], 0, [], "array", false, false, false, 40), "id", [], "any", false, false, false, 40)])), "html", null, true);
                echo "\" class=\"section-display-child\">
                <div class=\"section-child-picture img\">
                    ";
                // line 42
                $context["pictures"] = twig_split_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwellings"], 0, [], "array", false, false, false, 42), "pictures", [], "any", false, false, false, 42), ["\"" => "", "[" => "", "]" => ""]), ",");
                // line 43
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 43, $this->source); })()), "html", null, true);
                echo "/uploads/dwellings/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pictures"]) || array_key_exists("pictures", $context) ? $context["pictures"] : (function () { throw new RuntimeError('Variable "pictures" does not exist.', 43, $this->source); })()), 0, [], "array", false, false, false, 43), "html", null, true);
                echo "\" alt=\"AtypikHouse image d'une idée de la prochaine réservation\"/>
                </div>
                <div class=\"display-child-text\">
                    <h4 class=\"child-text-city size22\">";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dwellings"], 0, [], "array", false, false, false, 46), "city", [], "any", false, false, false, 46), "html", null, true);
                echo "</h4>
                    <h5 class=\"child-text-country size22 ff-m c1\">";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dwellings"], 2, [], "array", false, false, false, 47), "html", null, true);
                echo "</h5>
                </div>
            </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dwellings'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "        </div>
    </div>
</section>
";
        }
        // line 55
        if ((((isset($context["abouttitle"]) || array_key_exists("abouttitle", $context) ? $context["abouttitle"] : (function () { throw new RuntimeError('Variable "abouttitle" does not exist.', 55, $this->source); })()) && (isset($context["aboutabstract"]) || array_key_exists("aboutabstract", $context) ? $context["aboutabstract"] : (function () { throw new RuntimeError('Variable "aboutabstract" does not exist.', 55, $this->source); })())) && (isset($context["aboutpic"]) || array_key_exists("aboutpic", $context) ? $context["aboutpic"] : (function () { throw new RuntimeError('Variable "aboutpic" does not exist.', 55, $this->source); })()))) {
            // line 56
            echo "<section class=\"atypikhouse-section atypikhouse-section-why my-6\">
    <div class=\"section-why-form\">
        ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 120));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 59
                echo "        <span></span>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "    </div>
    <div class=\"atypikhouse-container section-why-content d-grid grid-lg-2\">
        <div class=\"section-why-col1 atypikhouse-grid-form1 mr-auto\">
            <div class=\"card-picture border-solid-2 c1\"></div>
            <div class=\"card-picture\">
                <img src=\"";
            // line 66
            echo twig_escape_filter($this->env, (isset($context["ath_link"]) || array_key_exists("ath_link", $context) ? $context["ath_link"] : (function () { throw new RuntimeError('Variable "ath_link" does not exist.', 66, $this->source); })()), "html", null, true);
            echo "/uploads/pages/";
            echo twig_escape_filter($this->env, (isset($context["aboutpic"]) || array_key_exists("aboutpic", $context) ? $context["aboutpic"] : (function () { throw new RuntimeError('Variable "aboutpic" does not exist.', 66, $this->source); })()), "html", null, true);
            echo "\" alt=\"Image découverte habitations insolites\">
            </div>
        </div>
        <div class=\"section-why-col2 d-flex jc-space-between gap-3 flex-dir-col\">
            <div class=\"section-title\">
                <h2 class=\"c1 my-1\">";
            // line 71
            echo twig_escape_filter($this->env, (isset($context["abouttitle"]) || array_key_exists("abouttitle", $context) ? $context["abouttitle"] : (function () { throw new RuntimeError('Variable "abouttitle" does not exist.', 71, $this->source); })()), "html", null, true);
            echo "</h2>
            </div>
            <div class=\"section-why-text\">
                <p>";
            // line 74
            echo twig_escape_filter($this->env, (isset($context["aboutabstract"]) || array_key_exists("aboutabstract", $context) ? $context["aboutabstract"] : (function () { throw new RuntimeError('Variable "aboutabstract" does not exist.', 74, $this->source); })()), "html", null, true);
            echo "</p>
            </div>
            <div class=\"section-why-quality d-grid grid-lg-4\">
                <div class=\"text-center\">
                    <i class=\"fas fa-solid fa-credit-card size24\"></i>
                    <h4>Paiement sécurisé</h4>
                </div>
                <div class=\"text-center\">
                    <i class=\"fas fa-home size24\"></i>
                    <h4>Logement sécurisé</h4>
                </div>
                <div class=\"text-center\">
                    <i class=\"fas fa-solid fa-umbrella size24\"></i>
                    <h4>Assurance</h4>
                </div>
                <div class=\"text-center\">
                    <i class=\"fas fa-solid fa-calendar-day size24\"></i>
                    <h4>Réservation instantanée</h4>
                </div>
            </div>
        </div>
    </div>
</section>
";
        }
        // line 98
        $this->loadTemplate("inc/pages/home/additional.html.twig", "index.html.twig", 98)->display($context);
        // line 99
        echo "

";
        // line 101
        $this->loadTemplate("inc/parts/footer.html.twig", "index.html.twig", 101)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 101,  236 => 99,  234 => 98,  207 => 74,  201 => 71,  191 => 66,  184 => 61,  177 => 59,  173 => 58,  169 => 56,  167 => 55,  161 => 51,  151 => 47,  147 => 46,  138 => 43,  136 => 42,  130 => 40,  127 => 39,  123 => 38,  115 => 32,  113 => 31,  111 => 30,  108 => 29,  99 => 26,  96 => 25,  92 => 24,  83 => 21,  80 => 20,  76 => 19,  73 => 18,  71 => 17,  63 => 12,  54 => 8,  49 => 5,  47 => 4,  44 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'inc/parts/head.html.twig' %}
{% include 'inc/parts/nav.html.twig' %}

{% if homepic and hometitle %}
<header class=\"atypikhouse-container\">
    <div class=\"atypikhouse-header-inner grid-level-3\">
        <div class=\"header-background-picture\">
            <img src=\"{{ ath_link }}/uploads/pages/{{ homepic }}\" alt=\"AtypikHouse image mise en avant, logement insolite\">
        </div>
        <div class=\"header-cover\"></div>
        <div class=\"header-text\">
            <h1 class=\"size38 ff-sb\">{{ hometitle }}</h1>
        </div>
    </div>
</header>
{% endif %}
{% include 'inc/modules/search/popupsearch.html.twig' %}

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

{% include 'inc/pages/home/discovery.html.twig' %}
{% if ideas %}
<section class=\"atypikhouse-section atypikhouse-container my-6\">
    <div class=\"atypikhouse-section-display picture-radius\">
        <div class=\"section-title\">
            <h2 class=\"c1 my-1\">DES IDÉES POUR VOTRE PROCHAINE RÉSERVATION</h2>
        </div>
        <div class=\"section-display grid-lg-4 grid-md-4 grid-sm-4\">
            {% for dwellings in ideas |slice(0, 4) %}
            {% set productUrl = dwellings[0].title | replace({'%20':'-', ' ':'-', '%c3%a9':'e', '%27':'', 'á':'a', 'é':'e', 'í':'i', 'ó':'o', 'ú':'u'}) %}
            <a href=\"{{ path('app_habitation', {'slug': productUrl, 'id': dwellings[0].id}) | lower }}\" class=\"section-display-child\">
                <div class=\"section-child-picture img\">
                    {% set pictures = dwellings[0].pictures|replace({'\"':'', '[':'', ']':''})|split(',') %}
                    <img src=\"{{ ath_link }}/uploads/dwellings/{{ pictures[0] }}\" alt=\"AtypikHouse image d'une idée de la prochaine réservation\"/>
                </div>
                <div class=\"display-child-text\">
                    <h4 class=\"child-text-city size22\">{{ dwellings[0].city }}</h4>
                    <h5 class=\"child-text-country size22 ff-m c1\">{{ dwellings[2] }}</h5>
                </div>
            </a>
            {% endfor %}
        </div>
    </div>
</section>
{% endif %}
{% if abouttitle and aboutabstract and aboutpic %}
<section class=\"atypikhouse-section atypikhouse-section-why my-6\">
    <div class=\"section-why-form\">
        {% for i in 0..120 %}
        <span></span>
        {% endfor %}
    </div>
    <div class=\"atypikhouse-container section-why-content d-grid grid-lg-2\">
        <div class=\"section-why-col1 atypikhouse-grid-form1 mr-auto\">
            <div class=\"card-picture border-solid-2 c1\"></div>
            <div class=\"card-picture\">
                <img src=\"{{ ath_link }}/uploads/pages/{{ aboutpic }}\" alt=\"Image découverte habitations insolites\">
            </div>
        </div>
        <div class=\"section-why-col2 d-flex jc-space-between gap-3 flex-dir-col\">
            <div class=\"section-title\">
                <h2 class=\"c1 my-1\">{{ abouttitle }}</h2>
            </div>
            <div class=\"section-why-text\">
                <p>{{ aboutabstract }}</p>
            </div>
            <div class=\"section-why-quality d-grid grid-lg-4\">
                <div class=\"text-center\">
                    <i class=\"fas fa-solid fa-credit-card size24\"></i>
                    <h4>Paiement sécurisé</h4>
                </div>
                <div class=\"text-center\">
                    <i class=\"fas fa-home size24\"></i>
                    <h4>Logement sécurisé</h4>
                </div>
                <div class=\"text-center\">
                    <i class=\"fas fa-solid fa-umbrella size24\"></i>
                    <h4>Assurance</h4>
                </div>
                <div class=\"text-center\">
                    <i class=\"fas fa-solid fa-calendar-day size24\"></i>
                    <h4>Réservation instantanée</h4>
                </div>
            </div>
        </div>
    </div>
</section>
{% endif %}
{% include 'inc/pages/home/additional.html.twig' %}


{% include 'inc/parts/footer.html.twig' %}", "index.html.twig", "/Users/nathandfk/Development/Symfony/final/dsp-project/templates/index.html.twig");
    }
}
