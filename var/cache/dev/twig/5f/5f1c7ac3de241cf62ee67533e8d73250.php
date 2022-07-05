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

/* inc/pages/simple-pages/cgu.html.twig */
class __TwigTemplate_d5a6a061c0c2b783044aec174082d9c5 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/pages/simple-pages/cgu.html.twig"));

        // line 1
        $this->loadTemplate("inc/parts/head.html.twig", "inc/pages/simple-pages/cgu.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("inc/parts/nav.html.twig", "inc/pages/simple-pages/cgu.html.twig", 2)->display($context);
        // line 3
        echo "
";
        // line 4
        if (((isset($context["carousel"]) || array_key_exists("carousel", $context) ? $context["carousel"] : (function () { throw new RuntimeError('Variable "carousel" does not exist.', 4, $this->source); })()) == true)) {
            // line 5
            $this->loadTemplate("inc/parts/carousel.html.twig", "inc/pages/simple-pages/cgu.html.twig", 5)->display($context);
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
Préambule
Le présent contrat concerne les conditions générales d’utilisation du Site Internet suivant : https://atypikhouse.com. Ce site internet est conforme aux réglementations applicables concernant le droit d’auteur, les noms de domaines mais aussi tout autre droit de propriété intellectuelle et des données personnelles comprises dans ledit Site Internet. 
Ces conditions générales d’utilisation du Site Internet sont entrées en vigueur au 1er avril 2022. 

Article 1 – Mentions légales
Le Site Internet, qui concerne le présent contrat, a été créé par la société Snick Agency, d’un capital de 1 000 €, enregistré au RCS de Creteil B 419 045 182 au numéro 419045182, représenté par Monsieur Nathan DIAFOUKA. 
La personne en charge de la direction du site internet est Henri Richard. 
Ledit Site internet se nomme AtypikHouse et a le lien URL suivant https://atypikhouse.com. 

Article 2 – Objet du contrat
Le présent contrat prévoit les conditions générales d’utilisation du Site Internet AtypikHouse. 
Les conditions générales d’utilisation, lorsqu’elles sont acceptées par l’Utilisateur constituent un contrat entre ce dernier et le Site Internet AtypikHouse. 
Le présent contrat est conclu pour la durée suivante : 2 ans.

Article 3 – Définitions

Les différents termes indiqués ci-dessous devront être interprétés de la manière suivante : 
« Utilisateur » : désigne la personne qui utilise et accède à la page web qui compose ce Site. 
« Site Internet » : Le Site Internet désigne le Site nommé AtypikHouse dont le lien est le suivant : https://atypikhouse.com. 
« Contenu » : désigne tous les éléments qui composent le site, le logo, le nom de domaine.
« Compte Utilisateur/Abonné » : désigne les comptes crées par l’Utilisateur lorsqu’il souhaite utiliser toutes les fonctionnalités du Site Internet. Il est accessible par la création d’un identifiant et d’un mot de passe. 

Article 4 – Description des services
Le Site Internet permet aux différents Utilisateurs d’avoir accès aux services suivants : 
Demande d’abonnement, Connexion au compte, Achat en ligne, Prise de contact avec la direction.

Article 5 – Accès au Site
L’accès au Site Internet prévu au présent contrat peut être fait par tout Utilisateur, de manière gratuite et illimitée sur tous les supports permettant son accès.
L’Utilisateur devra créer un Compte Utilisateur lorsqu’il souhaite utiliser tous les services proposés par le Site Internet. Les modalités de création de compte sont prévues à l’article 6 ci-dessous. 

Article 6 – Création compte Utilisateur
La création d’un Compte Utilisateur est possible lorsque celui-ci en fait la démarche en demandant à souscrire à notre mutuelle ou en demandant à être partenaire pour les professionnels de santé. 
Ledit Compte Utilisateur pourra être désactivé par l’Utilisateur de deux manières différentes : 
●\tAu sein de son espace personnel ;
●\tPar mail à l’adresse suivante legales@atypikhouse.com.
Lorsque l’Utilisateur supprime son Compte Utilisateur, cela doit s’accompagner de la suppression de toutes les informations personnelles détenues par le Site Internet. 
L’Utilisateur s’engage à informer le Site Internet en cas de vol ou perte de ses identifiants ou mots de passe dans les meilleurs délais. 

Article 7 – Acceptation des conditions générales d’utilisation
L’acceptation des CGU par l’Utilisateur est nécessaire à l’application de celles-ci aux parties. Cette acceptation se caractérise de la manière suivante : en cochant cette case, je déclare avoir pris connaissance des conditions générales d’utilisation du site internet et les accepte. 

Article 8 – Obligations des parties
L’Utilisateur s’engage à une utilisation conforme aux dispositions prévues par le Site Internet et s’empêche l’utilisation à destination commerciale de son contenu. Il s’engage à utiliser le Site à usage strictement privé.
L’Utilisateur s’engage à avoir connaissance et à accepter les présentes conditions générales d’utilisation du Site atypikhouse.com.
Le Site Internet s’engage à permettre au mieux son accès et son utilisation par les Utilisateurs et à faire tous les efforts possibles pour son bon fonctionnement. 

Article 9 – Données personnelles
Les données personnelles des Utilisateurs pourront être collectées et traitées par le Site Internet dans le respect de leur vie privée. Ces données sont collectées via le Site Internet, et le sont pour le traitement de leurs demandes. 
Conformément au droit en vigueur, l’Utilisateur a un droit d’accès, de rectification, suppression et opposition à ses données personnelles. Ce droit pourra s’exercer par mail à l’adresse : legales@atypikhouse.com mais aussi par voie postale à l’adresse : 11 Rue Léon Frot, 75011 Paris. 

Article 10 – Propriété intellectuelle
Tous les éléments de propriété intellectuelle qui sont inclus au sein du Site Internet font l’objet d’une protection au titre du droit de la propriété intellectuelle. 
La propriété intellectuelle du Site comprend ses marques, logos, nom de domaine, signes etc. Ils restent l’entière propriété du Site Internet et leur contenu ne pourrait être reproduit, publié ou copié sans l’accord express et préalable dudit Site.

Article 11 – Responsabilité des parties et force majeure
Le Site s’engage à mettre tout en œuvre afin que les informations qu’il collecte soient sécurisées et restent confidentielles. Les sources des informations du Site sont réputées fiables, le Site ne peut être tenu responsable de tout défaut, erreur ou omission les concernant.
Le Site Internet ne peut être tenu responsable de l’utilisation et des interprétations des informations de son Contenu. 
Le Site Internet ne peut être tenu responsable de tout événement de force majeure, extérieur, irrésistible et imprévisible à sa volonté. 
L’Utilisateur s’engage à garder le mot de passe de son Compte Utilisateur secret. Il sera seul responsable de l’utilisation qu’il fait de son mot de passe et identifiant. 

Article 12 – Liens hypertextes
Le Site Internet pourra utiliser des liens hypertextes dans le Contenu du Site Internet. Ces liens permettant à l’Utilisateur, qui en a connaissance, de sortir du Site atypikhouse.com. 
Le Site Internet n’est en aucun cas tenu responsable des contenus de ces Sites externes auxquels les liens hypertextes font référence. 

Article 13 – Cookies
L’Utilisateur est informé et accepte les conditions d’utilisation du site, qui peuvent nécessiter une installation automatique sur son logiciel de navigation internet de cookies. 
Les cookies sont des suites d’informations classifiées, récupérées par le Site Internet pouvant être transmises au logiciel de navigation utilisé. Ces données seront gardées pendant une certaine durée. 
Il sera possible pour l’Utilisateur de bloquer l’utilisation de ces cookies par le Site Internet en les refusant ou en modifiant les paramètres du logiciel de navigation.

Article 14 – Droit applicable et juridiction compétente
La loi applicable au présent contrat est le droit français. 
En cas d’absence d’une résolution amiable d’un litige concernant le contrat, les parties déclarent compétents les tribunaux français pour connaître de tout litige.

  </div>
</div>


";
        // line 90
        $this->loadTemplate("inc/parts/footer.html.twig", "inc/pages/simple-pages/cgu.html.twig", 90)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/pages/simple-pages/cgu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 90,  57 => 10,  52 => 7,  49 => 5,  47 => 4,  44 => 3,  42 => 2,  40 => 1,);
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
Préambule
Le présent contrat concerne les conditions générales d’utilisation du Site Internet suivant : https://atypikhouse.com. Ce site internet est conforme aux réglementations applicables concernant le droit d’auteur, les noms de domaines mais aussi tout autre droit de propriété intellectuelle et des données personnelles comprises dans ledit Site Internet. 
Ces conditions générales d’utilisation du Site Internet sont entrées en vigueur au 1er avril 2022. 

Article 1 – Mentions légales
Le Site Internet, qui concerne le présent contrat, a été créé par la société Snick Agency, d’un capital de 1 000 €, enregistré au RCS de Creteil B 419 045 182 au numéro 419045182, représenté par Monsieur Nathan DIAFOUKA. 
La personne en charge de la direction du site internet est Henri Richard. 
Ledit Site internet se nomme AtypikHouse et a le lien URL suivant https://atypikhouse.com. 

Article 2 – Objet du contrat
Le présent contrat prévoit les conditions générales d’utilisation du Site Internet AtypikHouse. 
Les conditions générales d’utilisation, lorsqu’elles sont acceptées par l’Utilisateur constituent un contrat entre ce dernier et le Site Internet AtypikHouse. 
Le présent contrat est conclu pour la durée suivante : 2 ans.

Article 3 – Définitions

Les différents termes indiqués ci-dessous devront être interprétés de la manière suivante : 
« Utilisateur » : désigne la personne qui utilise et accède à la page web qui compose ce Site. 
« Site Internet » : Le Site Internet désigne le Site nommé AtypikHouse dont le lien est le suivant : https://atypikhouse.com. 
« Contenu » : désigne tous les éléments qui composent le site, le logo, le nom de domaine.
« Compte Utilisateur/Abonné » : désigne les comptes crées par l’Utilisateur lorsqu’il souhaite utiliser toutes les fonctionnalités du Site Internet. Il est accessible par la création d’un identifiant et d’un mot de passe. 

Article 4 – Description des services
Le Site Internet permet aux différents Utilisateurs d’avoir accès aux services suivants : 
Demande d’abonnement, Connexion au compte, Achat en ligne, Prise de contact avec la direction.

Article 5 – Accès au Site
L’accès au Site Internet prévu au présent contrat peut être fait par tout Utilisateur, de manière gratuite et illimitée sur tous les supports permettant son accès.
L’Utilisateur devra créer un Compte Utilisateur lorsqu’il souhaite utiliser tous les services proposés par le Site Internet. Les modalités de création de compte sont prévues à l’article 6 ci-dessous. 

Article 6 – Création compte Utilisateur
La création d’un Compte Utilisateur est possible lorsque celui-ci en fait la démarche en demandant à souscrire à notre mutuelle ou en demandant à être partenaire pour les professionnels de santé. 
Ledit Compte Utilisateur pourra être désactivé par l’Utilisateur de deux manières différentes : 
●\tAu sein de son espace personnel ;
●\tPar mail à l’adresse suivante legales@atypikhouse.com.
Lorsque l’Utilisateur supprime son Compte Utilisateur, cela doit s’accompagner de la suppression de toutes les informations personnelles détenues par le Site Internet. 
L’Utilisateur s’engage à informer le Site Internet en cas de vol ou perte de ses identifiants ou mots de passe dans les meilleurs délais. 

Article 7 – Acceptation des conditions générales d’utilisation
L’acceptation des CGU par l’Utilisateur est nécessaire à l’application de celles-ci aux parties. Cette acceptation se caractérise de la manière suivante : en cochant cette case, je déclare avoir pris connaissance des conditions générales d’utilisation du site internet et les accepte. 

Article 8 – Obligations des parties
L’Utilisateur s’engage à une utilisation conforme aux dispositions prévues par le Site Internet et s’empêche l’utilisation à destination commerciale de son contenu. Il s’engage à utiliser le Site à usage strictement privé.
L’Utilisateur s’engage à avoir connaissance et à accepter les présentes conditions générales d’utilisation du Site atypikhouse.com.
Le Site Internet s’engage à permettre au mieux son accès et son utilisation par les Utilisateurs et à faire tous les efforts possibles pour son bon fonctionnement. 

Article 9 – Données personnelles
Les données personnelles des Utilisateurs pourront être collectées et traitées par le Site Internet dans le respect de leur vie privée. Ces données sont collectées via le Site Internet, et le sont pour le traitement de leurs demandes. 
Conformément au droit en vigueur, l’Utilisateur a un droit d’accès, de rectification, suppression et opposition à ses données personnelles. Ce droit pourra s’exercer par mail à l’adresse : legales@atypikhouse.com mais aussi par voie postale à l’adresse : 11 Rue Léon Frot, 75011 Paris. 

Article 10 – Propriété intellectuelle
Tous les éléments de propriété intellectuelle qui sont inclus au sein du Site Internet font l’objet d’une protection au titre du droit de la propriété intellectuelle. 
La propriété intellectuelle du Site comprend ses marques, logos, nom de domaine, signes etc. Ils restent l’entière propriété du Site Internet et leur contenu ne pourrait être reproduit, publié ou copié sans l’accord express et préalable dudit Site.

Article 11 – Responsabilité des parties et force majeure
Le Site s’engage à mettre tout en œuvre afin que les informations qu’il collecte soient sécurisées et restent confidentielles. Les sources des informations du Site sont réputées fiables, le Site ne peut être tenu responsable de tout défaut, erreur ou omission les concernant.
Le Site Internet ne peut être tenu responsable de l’utilisation et des interprétations des informations de son Contenu. 
Le Site Internet ne peut être tenu responsable de tout événement de force majeure, extérieur, irrésistible et imprévisible à sa volonté. 
L’Utilisateur s’engage à garder le mot de passe de son Compte Utilisateur secret. Il sera seul responsable de l’utilisation qu’il fait de son mot de passe et identifiant. 

Article 12 – Liens hypertextes
Le Site Internet pourra utiliser des liens hypertextes dans le Contenu du Site Internet. Ces liens permettant à l’Utilisateur, qui en a connaissance, de sortir du Site atypikhouse.com. 
Le Site Internet n’est en aucun cas tenu responsable des contenus de ces Sites externes auxquels les liens hypertextes font référence. 

Article 13 – Cookies
L’Utilisateur est informé et accepte les conditions d’utilisation du site, qui peuvent nécessiter une installation automatique sur son logiciel de navigation internet de cookies. 
Les cookies sont des suites d’informations classifiées, récupérées par le Site Internet pouvant être transmises au logiciel de navigation utilisé. Ces données seront gardées pendant une certaine durée. 
Il sera possible pour l’Utilisateur de bloquer l’utilisation de ces cookies par le Site Internet en les refusant ou en modifiant les paramètres du logiciel de navigation.

Article 14 – Droit applicable et juridiction compétente
La loi applicable au présent contrat est le droit français. 
En cas d’absence d’une résolution amiable d’un litige concernant le contrat, les parties déclarent compétents les tribunaux français pour connaître de tout litige.

  </div>
</div>


{% include 'inc/parts/footer.html.twig' %}", "inc/pages/simple-pages/cgu.html.twig", "/Users/nathandfk/Development/Symfony/atypikhouse/templates/inc/pages/simple-pages/cgu.html.twig");
    }
}
