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

/* inc/pages/simple-pages/legalnotice.html.twig */
class __TwigTemplate_f5afc79602642594ad44a844db2d5c3b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/pages/simple-pages/legalnotice.html.twig"));

        // line 1
        $this->loadTemplate("inc/parts/head.html.twig", "inc/pages/simple-pages/legalnotice.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("inc/parts/nav.html.twig", "inc/pages/simple-pages/legalnotice.html.twig", 2)->display($context);
        // line 3
        echo "
";
        // line 4
        if (((isset($context["carousel"]) || array_key_exists("carousel", $context) ? $context["carousel"] : (function () { throw new RuntimeError('Variable "carousel" does not exist.', 4, $this->source); })()) == true)) {
            // line 5
            $this->loadTemplate("inc/parts/carousel.html.twig", "inc/pages/simple-pages/legalnotice.html.twig", 5)->display($context);
        }
        // line 7
        echo "
<div class=\"atypikhouse-container\">
    <div class=\"page-title my-3\">
        <h1 class=\"text-uppercase c1 size20 ff-r\">";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "</h1>
    </div>
    <div class=\"my-3\">
        <p>Conformément aux dispositions des articles 6-III et 19 de la Loi n°2004-575 du 21 juin 2004 pour la Confiance dans l’économie numérique, dite L.C.E.N. Il est porté à la connaissance des utilisateurs et visiteurs du site AtypikHouse les présentes mentions légales.
Le site AtypikHouse est accessible à l’adresse suivante : <a href=\"https://atypikhouse.com\">https://atypikhouse.com</a> (ci-après « le Site »). L’accès et l’utilisation du Site sont soumis aux présentes Mentions légales détaillées ci-après ainsi qu’aux lois et/ou règlements applicables.
La connexion, l’utilisation et l’accès à ce Site impliquent l’acceptation intégrale et sans réserve de l’internaute de toutes les dispositions des présentes Mentions Légales.</p>

<h3>ARTICLE 1 – INFORMATIONS LÉGALES</h3>
<p>En vertu de l’Article 6 de la Loi n° 2004-575 du 21 juin 2004 pour la confiance dans l’économie numérique, il est précisé dans cet article l’identité des différents intervenants dans le cadre de sa réalisation et de son suivi.</p>

<h4>1. Éditeur du site</h4>
<p>Le site appartient à AtypikHouse ayant son siège social à l’adresse suivante : 11 rue Léon Frot, 75011 Paris, et immatriculée au numéro suivant : RCS Paris B336702163.</p>
    <ul>
        <li>Capital social : 10 000 €</li>
        <li>APE : 6820A</li>
        <li>Numéro de Siret : 33670216349321</li>
        <li>Numéro de Siren : 336702163</li>
        <li>TVA Intra : FR 00 336702163 (TVA Intracommunautaire)</li>
        <li>Adresse électronique : legales@atypikhouse.com</li>
    </ul>
<p>Ci-après “l’Éditeur”</p>

<h4>2. Directeur de publication</h4>
<p>Le Directeur de publication est Henri Richard.</p>
<ul>
    <li>Adresse e-mail de contact : legales@atypikhouse.com</li>
</ul>
<p>Ci-après “le Directeur de publication”</p>

<h4>3. Hébergeur du site</h4>
<p>Le site Atypikhouse est hébergé par : IONOS 1&1, dont le siège est situé à l’adresse suivante : 7 place de la Gare, 57200 Sarreguemines</p>
<p>Ci-après “l’Hébergeur”</p>

<h4>4. Utilisateurs</h4>
<p>Sont considérés comme utilisateurs tous les internautes qui naviguent, lisent, visionnent et utilisent le site AtypikHouse.</p>
<p>Ci-après les “Utilisateurs”</p>


<h3>ARTICLE 2 – CONFIDENTIALITÉ</h3>
<p>L’Editeur du site porte à la connaissance de l’Utilisateur que dans le cadre de sa navigation sur le site, ses données à caractère personnel ne sont ni traitées, ni collectées.</p>
<p>Ainsi, l’Editeur déclare ne collecter ou ne traiter aucune information étant de nature à pouvoir identifier l’Utilisateur.</p>


<h3>ARTICLE 3 – ACCESSIBILITÉ</h3>
<p>Le Site est par principe accessible aux Utilisateurs 24/24h et 7/7j, sauf interruption, programmée ou non, pour des besoins de maintenance ou en cas de force majeure.</p>
<p>En cas d’impossibilité d’accès au Site, celui-ci s’engage à faire son maximum afin d’en rétablir l’accès. Le Site ne saurait être tenu pour responsable de tout dommage, quelle qu’en soit la nature, résultant de son indisponibilité.</p>


<h3>ARTICLE 4 – LOI APPLICABLE ET JURIDICTION</h3>
<p>Les présentes Mentions Légales sont régies par la loi française. En cas de différend et à défaut d’accord amiable, le litige sera porté devant les tribunaux français conformément aux règles de compétence en vigueur.</p>

<h3>ARTICLE 5 – CONTACT</h3>
<p>Pour tout signalement de contenus ou d’activités illicites, l’Utilisateur peut contacter l’Éditeur à l’adresse suivante : legales@atypikhouse.com, ou par courrier recommandé avec accusé de réception adressé à l’Éditeur aux coordonnées précisées dans les présentes mentions légales.</p>


    </div>
</div>


";
        // line 69
        $this->loadTemplate("inc/parts/footer.html.twig", "inc/pages/simple-pages/legalnotice.html.twig", 69)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/pages/simple-pages/legalnotice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 69,  57 => 10,  52 => 7,  49 => 5,  47 => 4,  44 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'inc/parts/head.html.twig' %}
{% include 'inc/parts/nav.html.twig' %}

{% if carousel == true %}
{% include 'inc/parts/carousel.html.twig' %}
{% endif %}

<div class=\"atypikhouse-container\">
    <div class=\"page-title my-3\">
        <h1 class=\"text-uppercase c1 size20 ff-r\">{{ title }}</h1>
    </div>
    <div class=\"my-3\">
        <p>Conformément aux dispositions des articles 6-III et 19 de la Loi n°2004-575 du 21 juin 2004 pour la Confiance dans l’économie numérique, dite L.C.E.N. Il est porté à la connaissance des utilisateurs et visiteurs du site AtypikHouse les présentes mentions légales.
Le site AtypikHouse est accessible à l’adresse suivante : <a href=\"https://atypikhouse.com\">https://atypikhouse.com</a> (ci-après « le Site »). L’accès et l’utilisation du Site sont soumis aux présentes Mentions légales détaillées ci-après ainsi qu’aux lois et/ou règlements applicables.
La connexion, l’utilisation et l’accès à ce Site impliquent l’acceptation intégrale et sans réserve de l’internaute de toutes les dispositions des présentes Mentions Légales.</p>

<h3>ARTICLE 1 – INFORMATIONS LÉGALES</h3>
<p>En vertu de l’Article 6 de la Loi n° 2004-575 du 21 juin 2004 pour la confiance dans l’économie numérique, il est précisé dans cet article l’identité des différents intervenants dans le cadre de sa réalisation et de son suivi.</p>

<h4>1. Éditeur du site</h4>
<p>Le site appartient à AtypikHouse ayant son siège social à l’adresse suivante : 11 rue Léon Frot, 75011 Paris, et immatriculée au numéro suivant : RCS Paris B336702163.</p>
    <ul>
        <li>Capital social : 10 000 €</li>
        <li>APE : 6820A</li>
        <li>Numéro de Siret : 33670216349321</li>
        <li>Numéro de Siren : 336702163</li>
        <li>TVA Intra : FR 00 336702163 (TVA Intracommunautaire)</li>
        <li>Adresse électronique : legales@atypikhouse.com</li>
    </ul>
<p>Ci-après “l’Éditeur”</p>

<h4>2. Directeur de publication</h4>
<p>Le Directeur de publication est Henri Richard.</p>
<ul>
    <li>Adresse e-mail de contact : legales@atypikhouse.com</li>
</ul>
<p>Ci-après “le Directeur de publication”</p>

<h4>3. Hébergeur du site</h4>
<p>Le site Atypikhouse est hébergé par : IONOS 1&1, dont le siège est situé à l’adresse suivante : 7 place de la Gare, 57200 Sarreguemines</p>
<p>Ci-après “l’Hébergeur”</p>

<h4>4. Utilisateurs</h4>
<p>Sont considérés comme utilisateurs tous les internautes qui naviguent, lisent, visionnent et utilisent le site AtypikHouse.</p>
<p>Ci-après les “Utilisateurs”</p>


<h3>ARTICLE 2 – CONFIDENTIALITÉ</h3>
<p>L’Editeur du site porte à la connaissance de l’Utilisateur que dans le cadre de sa navigation sur le site, ses données à caractère personnel ne sont ni traitées, ni collectées.</p>
<p>Ainsi, l’Editeur déclare ne collecter ou ne traiter aucune information étant de nature à pouvoir identifier l’Utilisateur.</p>


<h3>ARTICLE 3 – ACCESSIBILITÉ</h3>
<p>Le Site est par principe accessible aux Utilisateurs 24/24h et 7/7j, sauf interruption, programmée ou non, pour des besoins de maintenance ou en cas de force majeure.</p>
<p>En cas d’impossibilité d’accès au Site, celui-ci s’engage à faire son maximum afin d’en rétablir l’accès. Le Site ne saurait être tenu pour responsable de tout dommage, quelle qu’en soit la nature, résultant de son indisponibilité.</p>


<h3>ARTICLE 4 – LOI APPLICABLE ET JURIDICTION</h3>
<p>Les présentes Mentions Légales sont régies par la loi française. En cas de différend et à défaut d’accord amiable, le litige sera porté devant les tribunaux français conformément aux règles de compétence en vigueur.</p>

<h3>ARTICLE 5 – CONTACT</h3>
<p>Pour tout signalement de contenus ou d’activités illicites, l’Utilisateur peut contacter l’Éditeur à l’adresse suivante : legales@atypikhouse.com, ou par courrier recommandé avec accusé de réception adressé à l’Éditeur aux coordonnées précisées dans les présentes mentions légales.</p>


    </div>
</div>


{% include 'inc/parts/footer.html.twig' %}", "inc/pages/simple-pages/legalnotice.html.twig", "/Users/nathandfk/Development/Symfony/atypikhouse/templates/inc/pages/simple-pages/legalnotice.html.twig");
    }
}
