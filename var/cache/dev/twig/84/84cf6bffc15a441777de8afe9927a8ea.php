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

/* inc/pages/simple-pages/cgv.html.twig */
class __TwigTemplate_60e5b70b55a31014b7966ecb13d3c174 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/pages/simple-pages/cgv.html.twig"));

        // line 1
        $this->loadTemplate("inc/parts/head.html.twig", "inc/pages/simple-pages/cgv.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("inc/parts/nav.html.twig", "inc/pages/simple-pages/cgv.html.twig", 2)->display($context);
        // line 3
        echo "
";
        // line 4
        if (((isset($context["carousel"]) || array_key_exists("carousel", $context) ? $context["carousel"] : (function () { throw new RuntimeError('Variable "carousel" does not exist.', 4, $this->source); })()) == true)) {
            // line 5
            $this->loadTemplate("inc/parts/carousel.html.twig", "inc/pages/simple-pages/cgv.html.twig", 5)->display($context);
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
<h3>Conditions générales de vente</h3>
<p>La société AtypikHouse SARL, au capital de 10 000 euros, dont le siège social est à PARIS (750011) 11 rue Léon Frot, immatriculée au registre du commerce et des sociétés de PARIS sous le numéro 336 702 163 (ci-après la « Société”).</p>
<p>La société propose le service suivant :</p>
<ul>
<li>Location d’habitations insolites</li>
</ul>

<h3>PRÉAMBULE</h3>
<p>La société invite ses utilisateurs à lire attentivement les présentes Conditions Générales de Vente et d’Utilisation (ci-après les CGV/CGU). Les CGV/CGU s’appliquent à tous les services fournis par la société à ses clients d’une même catégorie, quelles que soient les clauses pouvant être inscrites sur les documents du client et notamment ses conditions générales d’achat.</p>
<p>Les CGV/CGU sont systématiquement communiquées au client qui en fait la demande.</p>
<p>Le client est tenu de prendre connaissance des CGU/CGV avant toute passation de commande.</p>
<p>En cas de modification ultérieure des CGV/CGU, le client est soumis à la version en vigueur lors de sa commande.</p>
<p>Les données enregistrées dans le système informatique de la société constituent la preuve des transactions conclues avec le client.</p>

<h3>DÉFINITIONS</h3>
<p><span>« Client »</span> désigne toute personne physique ou morale qui passe une commande sur le présent site internet.</p>
<p><span>« Commande »</span> désigne toute commande passée par l’utilisateur inscrit sur le présent site, en vue de bénéficier des services de la société.</p>
<p><span>« Conditions Générales de Vente et d’Utilisation »</span> ou « CGV/CGU » désignent les présentes conditions générales de vente et d’utilisation en ligne.</p>
<p><span>« Consommateur »</span> désigne l’acheteur, personne physique qui n’agit pas pour des besoins professionnels et/ou hors de son activité professionnelle.</p>
<p><span>« Professionnel »</span> désigne l’acheteur personne morale ou physique qui agit dans le cadre de son activité professionnelle.</p>
<p><span>« Services »</span> désigne toutes les prestations de service proposées aux Utilisateurs par la société à travers le présent site.</p>
<p><span>« Site »</span> désigne le présent site, c’est-à-dire <a href=\"https://atypikhouse.com\">https://atypikhouse.com</a>.</p>
<p><span>« Société »</span> désigne la société AtypikHouse, plus amplement désignée à l’article I des présentes.</p>
<p><span>« Utilisateur »</span> désigne toute personne qui fait utilisation du site.</p>

<h3>INSCRIPTION</h3>
    <div>
        <p>L’inscription au site est ouverte à toutes les personnes morales ou physiques majeures et jouissant de leurs pleines personnalités et capacités juridiques.</p>
        <p>L’utilisation des services proposés sur le site est conditionnée à l’inscription de l’utilisateur sur le site. L’inscription est gratuite.</p>
        <p>Pour procéder à l’inscription, l’utilisateur doit remplir tous les champs obligatoires, sans lesquels le service ne peut être délivré. A défaut l’inscription ne pourra être complétée.</p>
        <p>Les utilisateurs garantissent et déclarent sur l’honneur que toutes les informations communiquées sur le site, notamment lors de leur inscription, sont exactes et conformes à la réalité. Ils s’engagent à mettre à jour leurs informations personnelles à partir de la page dédiée à ces dernières et disponible dans leur compte.</p>
        <p>Tout utilisateur enregistré dispose d’un identifiant et d’un mot de passe. Ces derniers sont strictement personnels et confidentiels et ne devront en aucun cas faire l’objet d’une communication à des tiers sous peine de suppression du compte de l’Utilisateur enregistré contrevenant. Chaque utilisateur inscrit est personnellement responsable du maintien de la confidentialité de son identifiant et de son mot de passe.</p>
        <p>La société ne sera en aucun cas tenue pour responsable de l’usurpation d’identité d’un Utilisateur. Si un utilisateur suspecte une fraude à n’importe quel moment, il devra contacter la société dans les plus brefs délais afin que cette dernière puisse prendre les mesures nécessaires et régulariser la situation.</p>
        <p>Chaque Utilisateur, qu’il soit une personne morale ou physique, ne peut être titulaire que d’un compte sur le Site.</p>
        <p>En cas de non-respect des CGV/CGU, notamment la création de plusieurs comptes pour une seule personne ou encore la fourniture de fausses informations, la société se réserve le droit de procéder à la suppression temporaire ou définitive de tous les comptes crées par l’Utilisateur enregistré contrevenant.</p>
        <p>La suppression du compte entraîne la perte définitive de tous les avantages et services acquis sur le Site. Cependant, toute Commande réalisée et facturée par le Site avant la suppression du compte sera exécutée dans les conditions normales.</p>
        <p>En cas de suppression d’un compte par la société pour manquement aux devoirs et obligations énoncées dans les CGV/CGU, il est formellement interdit à l’Utilisateur contrevenant de se réinscrire sur le Site directement, par le biais d’une autre adresse électronique ou par personne interposée sans l’autorisation expresse de la société.</p>
    </div>

<h3>PRESTATIONS DE SERVICES ET PRIX</h3>
Les Services faisant l’objet des CGV/CGU sont ceux qui figurent sur le Site et qui sont proposés directement par la société ou ses prestataires partenaires.
Les services sont décrits sur la page correspondante au sein du Site et mention est faite de toutes leurs caractéristiques essentielles. La société ne peut être tenue responsable de l’impossibilité de réaliser ladite prestation lorsque l’Utilisateur n’est pas éligible.
Lorsqu’un Utilisateur enregistré souhaite obtenir une prestation de service vendue par la société à travers le Site, le prix indiqué sur la page de la prestation correspond au prix en euros hors taxes (HT) et tient compte des réductions applicables et en vigueur le jour de la Commande. Le prix indiqué n’inclut pas les frais accessoires qui seront indiqués le cas échéant dans le récapitulatif avant de passer commande.
La société se réserve la possibilité de modifier à tout moment ses tarifs. Elle s’engage à facturer les prestations au tarif applicable au moment de leur Commande. Pour les prestations dont le prix ne peut être connu a priori ni indiqué avec certitude, un devis détaillé sera transmis au client.
En aucun cas un Utilisateur ne pourra exiger l’application de réductions n’étant plus en vigueur le jour de la Commande.

<h3>COMMANDES</h3>
<p>Toute Commande ne peut être réalisée que lorsque l’Utilisateur s’est inscrit sur le Site. L’Utilisateur, lorsqu’il est connecté sur son compte, peut ajouter des Services à son panier virtuel. Il peut accéder au récapitulatif de son panier virtuel afin de confirmer les Services qu’il souhaite commander et effectuer sa Commande en appuyant sur le bouton “Commander ».</p>
<p>Il devra ensuite renseigner son adresse, le mode de livraison ainsi qu’un mode de paiement valable afin de finaliser la commande et de former efficacement le contrat de vente entre lui et la société.</p>
<p>L’enregistrement d’une Commande sur le Site est réalisé lorsque le client accepte les CGV/CGU en cochant la case prévue à cet effet et valide sa Commande. Cette validation constitue une preuve du contrat de vente. La finalisation de la Commande implique l’acceptation des prix et des modalités de réalisations des prestations telles qu’indiquées sur le Site.</p>
<p>Une fois sa Commande passée, le client en recevra confirmation par courrier électronique. Cette confirmation fera le récapitulatif de la Commande et des informations relatives à la réalisation de la ou des prestations.</p>
<p>En cas de défaut de paiement, d’adresse erronée du Client ou autre problème sur le compte du client, la société se réserve le droit de bloquer la commande du client jusqu’à ce que le problème soit résolu. En cas d’impossibilité de réaliser la prestation, le client en sera informé par courrier électronique à l’adresse qu’il aura fournie à la société. L’annulation de la commande de cette prestation et son remboursement seront dans ce cas effectués, le reste de la commande demeurant ferme et définitif.</p>
<p>En cas d’annulation d’une Commande acceptée par la société moins de 2 jours avant la date prévue de fourniture du Service pour des raisons autres qu’un cas de force majeure, la société se réserve le droit de conserver 10% du montant HT de la Commande au titre des dommages et intérêts en réparation du préjudice subi.</p>
<p>La société pourra faire bénéficier le client de réduction de prix, remises et rabais en fonction du nombre des Services commandés ou en fonction de la régularité des Commandes, selon les conditions fixées par la société.</p>

<h3>DÉLAIS ET MODALITÉS DE PAIEMENT</h3>
<p>Sauf dispositions contraires, toutes les ventes sont payées comptant au moment de la passation de la Commande.</p>
<p>En fonction de la nature ou du montant de la commande, la société reste libre d’exiger un acompte ou le paiement de l’intégralité du prix lors de la passation de la commande ou lors de la réception de la facture.</p>
<p>Le paiement peut être réalisé par :</p>
Carte bancaire.
En cas de défaut de paiement total ou partiel des prestations à la date convenue sur la facture, le client Professionnel devra verser à la société une pénalité de retard dont le taux est égal au taux pratiqué par la Banque Centrale Européenne pour son opération de refinancement majoré de 10 points de pourcentage. L’opération de financement retenue est la plus récente à la date de la commande des prestations de Service.
En sus des indemnités de retard, toute somme, y compris l’acompte, non payée à sa date d'exigibilité, produira de plein droit le paiement d’une indemnité forfaitaire de 40 euros due au titre des frais de recouvrement.
En cas de défaut de paiement total ou partiel des prestations à la date convenue sur la facture, le client consommateur devra verser à la société une pénalité de retard dont le taux est égal au taux d’intérêt légal.
Aucune compensation ne pourra être effectuée par le client entre des pénalités de retard dans la fourniture des prestations commandées et des sommes dues par le client à la société au titre de l’achat de Services proposés sur le Site.
La pénalité due par le client, Professionnel ou consommateur, est calculée sur le montant toutes taxes comprises de la somme restante due, et court à compter de la date d’échéance du prix sans qu’aucune mise en demeure préalable ne soit nécessaire.
En cas de non-respect des conditions de paiement décrites ci-dessus, la société se réserve la possibilité d’annuler ou de suspendre la vente.

RÉALISATIONS DES PRESTATIONS
La prestation de services commandée sur le Site sera assurée par AtypikHouse et aussi les sociétés partenaires.
Les sociétés s’engagent à mettre en œuvre tous les moyens humains et matériels pour réaliser la prestation dans les délais annoncés lors de la passation de la Commande. Cependant, elle ne peut en aucun cas être tenue responsable pour les retards de réalisation de prestation occasionnés en raison de fautes qui ne lui sont imputables.
Si les prestations n’ont pas été effectuées dans le délai prévu, la résolution de la vente pourra être demandée par le client dans les conditions prévues aux articles L216-2 et L216-3 du Code de la consommation. Les sommes versées par le client lui seront restituées au plus tard dans les quatorze jours qui suivent la date de dénonciation du contrat.
Cette disposition ne s’applique pas quand le retard de la société est dû à une faute du client ou à un cas de force majeure, c’est à dire à la survenance d’un évènement imprévisible, irrésistible et indépendant de la volonté de la société.
Dans le cas où l’exécution d’une prestation physique n’aurait pas pu être effectuée ou aurait été reportée du fait d’une erreur sur l’adresse indiquée par le client, les frais de déplacement du prestataire mandaté par la société pour réaliser la prestation infructueuse seront à la charge du client.

RÉCLAMATIONS
Pour toutes les commandes réalisées sur le présent site, le client dispose d’un droit de réclamation de 20 à compter de la fourniture du service.
Pour exercer ce droit de réclamation, le client doit faire parvenir à la société, à l’adresse legales@atypikhouse.com, une déclaration dans laquelle il exprime ses réserves et réclamations, assorties des justificatifs y afférents.
Une réclamation ne respectant pas les conditions décrites ci-dessus ne pourra être acceptée.
Après examen de la réclamation, le site pourra le cas échéant remplacer ou rembourser la prestation de Services dans les plus brefs délais et à ses frais.

DROIT DE RÉTRACTATION DU CONSOMMATEUR
Le consommateur dispose d’un droit de rétractation de 14 à compter de la passation de la commande, sauf pour les produits mentionnés à l’article L221-28 du Code de la consommation tel que reproduit ci-dessous :
« Le droit de rétractation ne peut être exercé pour les contrats :
1° De fourniture de services pleinement exécutés avant la fin du délai de rétractation et dont l’exécution a commencé après accord préalable exprès du consommateur et renoncement exprès à son droit de rétractation ;
2° De fourniture de biens ou de services dont le prix dépend de fluctuations sur le marché financier échappant au contrôle du professionnel et susceptibles de se produire pendant le délai de rétractation ;
3° De fourniture de biens confectionnés selon les spécifications du consommateur ou nettement personnalisés ;
4° De fourniture de biens susceptibles de se détériorer ou de se périmer rapidement ;
5° De fourniture de biens qui ont été descellés par le consommateur après la livraison et qui ne peuvent être renvoyés pour des raisons d’hygiène ou de protection de la santé ;
6° De fourniture de biens qui, après avoir été livrés et de par leur nature, sont mélangés de manière indissociable avec d’autres articles ;
7° De fourniture de boissons alcoolisées dont la livraison est différée au-delà de trente jours et dont la valeur convenue à la conclusion du contrat dépend de fluctuations sur le marché échappant au contrôle du professionnel ;
8° De travaux d’entretien ou de réparation à réaliser en urgence au domicile du consommateur et expressément sollicités par lui, dans la limite des pièces de rechange et travaux strictement nécessaires pour répondre à l’urgence ;
9° De fourniture d’enregistrements audio ou vidéo ou de logiciels informatiques lorsqu’ils ont été descellés par le consommateur après la livraison ;
10° De fourniture d’un journal, d’un périodique ou d’un magazine, sauf pour les contrats d’abonnement à ces publications ;
11° Conclus lors d’une enchère publique ;
12° De prestations de services d’hébergement, autres que d’hébergement résidentiel, de services de transport de biens, de locations de voitures, de restauration ou d’activités de loisirs qui doivent être fournis à une date ou à une période déterminée ;
13° De fourniture d’un contenu numérique non fourni sur un support matériel dont l’exécution a commencé après accord préalable exprès du consommateur et renoncement exprès à son droit de rétractation. »
Pour exercer ce droit de rétractation, le consommateur envoie une déclaration à l’adresse : legales@atypikhouse.com.
Il sera remboursé de la totalité des frais versés pour la prestation de services dans les 14 jours suivant la prise de connaissance par la société de sa déclaration de rétractation. Le remboursement sera fait par le même moyen de paiement que celui utilisé à l’achat.
Cependant, si la prestation de services est déjà entamée à la date de la prise de connaissance de la rétractation par la société, la valeur correspondant à la prestation de service déjà effectuée sera déduite du remboursement. Ce dernier sera opéré par le même moyen de paiement que pour l’achat.

TRAITEMENTS DES DONNÉES PERSONNELLES
L’enregistrement sur le site entraîne le traitement des données à caractère personnel du client. Si le client refuse le traitement de ses données, il lui est demandé de s’abstenir d’utiliser le Site.
Ce traitement des données à caractère personnel se fait dans le respect du Règlement Général sur la Protection des Données 2016/679 du 27 avril 2016.
Par ailleurs, conformément à la loi Informatique et Libertés du 6 janvier 1978, le client dispose, à tout moment, d’un droit d’interrogation, d’accès, de rectification, de modification et d’opposition à l’ensemble de ses données personnelles en écrivant, par courrier et en justifiant de son identité, à l’adresse suivante : legales@atypikhouse.com.
Ces données personnelles sont nécessaires au traitement de sa Commande et à l’établissement de ses factures le cas échéant, ainsi qu’à l’amélioration des fonctionnalités du Site.

PARTAGE DES DONNÉES COLLECTÉES
Le site peut avoir recours à des sociétés tierces pour effectuer certaines opérations. En naviguant sur le site, le client accepte que des sociétés tierces puissent avoir accès à ses données pour permettre le bon fonctionnement du Site.
Ces sociétés tierces n’ont accès aux données collectées que dans la cadre de la réalisation d’une tâche précise.
Le site reste responsable du traitement de ces données.
Par ailleurs, l’utilisateur peut donc être amené à recevoir des informations ou des offres commerciales de la part de la société ou de ses partenaires.
L’utilisateur peut à tout moment s’opposer à la réception de ces offres commerciales, en écrivant à l’adresse de la société indiquée ci-dessus, ou en cliquant sur le lien prévu à cet effet au sein des courriers électroniques reçus.
Par ailleurs, les informations des clients pourront être transmises à des tiers sans leur accord express préalable afin d’atteindre les buts suivants :
●\tRespecter la loi.
●\tProtéger toute personne contre des dommages corporels graves, voire la mort.
●\tLutter contre la fraude ou les atteintes portées à la société ou à ses utilisateurs.
●\tProtéger les droits de propriété de la société.


PROTECTION DES DONNÉES
La société assure un niveau de sécurité approprié et proportionnel aux risques encourus ainsi qu’à leur probabilité, conformément au Règlement Général sur la Protection des Données 2016/679 du 27 avril 2016.
Toutefois, ces mesures ne constituent en aucun cas une garantie et n’engagent pas la société à une obligation de résultat concernant la sécurité des données.

COOKIES
Pour permettre à ses utilisateurs de bénéficier d’une navigation optimale sur le site et d’un meilleur fonctionnement des différentes interfaces et applications, la société est susceptible d’implanter un cookie sur l’ordinateur de l’utilisateur. Ce cookie permet de stocker des informations relatives à la navigation sur le site, ainsi qu’aux éventuelles données saisies par les utilisateurs (notamment recherches, login, email, mot de passe).
L’utilisateur autorise expressément la société à déposer sur le disque dur de l’utilisateur un fichier dit« cookie ».
L’utilisateur dispose de la possibilité de bloquer, modifier la durée de conservation, ou supprimer ce cookie via l’interface de son navigateur. Si la désactivation systématique des cookies sur le navigateur de l’Utilisateur l’empêche d’utiliser certains services ou fonctionnalités du site, ce dysfonctionnement ne saurait en aucun cas constituer un dommage pour le membre qui ne pourra prétendre à aucune indemnité de ce fait.

MODIFICATIONS
La société se réserve le droit de modifier le site, les services qui y sont proposés, les CGV/CGU ainsi que toute procédure de livraison ou autre élément constitutif des prestations réalisées par la Société par le biais du site.
Lorsqu’il passe une commande, l’utilisateur est soumis aux stipulations énoncées par les CGV/CGU en vigueur lors de la passation de la commande.

RESPONSABILITÉ
La société ne peut en aucun cas être tenue responsable pour l’indisponibilité, qu’elle soit temporaire ou permanente du Site Internet et, bien qu’elle mette en œuvre tous les moyens afin d’assurer en permanence le service, il se peut que celui-ci soit interrompu à tout moment. En outre, la société se réserve le droit, par un acte volontaire, de rendre le Site indisponible afin de réaliser toute opération de mise à jour, d’amélioration ou de maintenance.
Tel que mentionné auparavant dans les présentes, la société ne peut en aucun cas être tenue responsable des retards de réalisation d’une prestation de service pour des motifs qui échappent à son contrôle, indépendants de sa volonté, imprévisibles et irrésistibles ou dont la faute ne peut lui être imputable.

PROPRIETÉ INTELLECTUELLE
La marque, le logo, et la charte graphique du présent site sont des marques déposées auprès de l’INPI et des œuvres protégées au titre de la propriété intellectuelle, dont la propriété revient exclusivement à la société. Toute diffusion, exploitation, représentation, reproduction, qu’elle soit partielle ou intégrale sans l’autorisation expresse de ladite société exposera le contrevenant à des poursuites civiles et pénales.

CLAUSE ATTRIBUTIVE DE COMPÉTENCE
Le droit régissant les CGV/CGU est le droit français. Tout litige pouvant survenir entre la société et un utilisateur lors de l’exécution des présentes fera l’objet d’une tentative de résolution à l’amiable. A défaut, les litiges seront portés à la connaissance des tribunaux compétents de droit commun.
Le client est informé qu’il peut recourir à une médiation conventionnelle, auprès de la Commission de la médiation de la consommation prévue à l’article L534-7 du Code de la consommation ou auprès des instances de médiation sectorielles existantes. Il peut également recourir à tout mode alternatif de règlement des différends en cas de litige.

INFORMATION PRÉCONTRACTUELLE
Préalablement à sa commande, le client reconnait avoir eu communication, de façon lisible et compréhensible, des CGV/CGU et des informations et renseignements prévus aux articles L111-1 à L111-7 du Code de la consommation, et notamment :
●\tLes caractéristiques essentielles des services.
●\tLe prix des services.
●\tLa date ou le délai auquel la société s’engage à fournir le service.
●\tLes informations relatives à l’identité de la société (coordonnées postales, téléphoniques, électroniques).
●\tLes informations relatives aux garanties légales et contractuelles et à leurs modalités de mise en œuvre.
●\tLa possibilité de recourir à une médiation conventionnelle en cas de litige.
●\tLes informations relatives au droit de rétractation (délai, modalités d’exercice).
La passation d’une commande sur le site emporte adhésion et acceptation des CGV/CGU. Le client ne pourra se prévaloir d’un document contradictoire.
*DM : dispositifs médicaux, * DMS : dispositifs médicaux stériles, *CGV : Conditions Générale de Vente


    </div>
</div>


";
        // line 173
        $this->loadTemplate("inc/parts/footer.html.twig", "inc/pages/simple-pages/cgv.html.twig", 173)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/pages/simple-pages/cgv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 173,  57 => 10,  52 => 7,  49 => 5,  47 => 4,  44 => 3,  42 => 2,  40 => 1,);
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
<h3>Conditions générales de vente</h3>
<p>La société AtypikHouse SARL, au capital de 10 000 euros, dont le siège social est à PARIS (750011) 11 rue Léon Frot, immatriculée au registre du commerce et des sociétés de PARIS sous le numéro 336 702 163 (ci-après la « Société”).</p>
<p>La société propose le service suivant :</p>
<ul>
<li>Location d’habitations insolites</li>
</ul>

<h3>PRÉAMBULE</h3>
<p>La société invite ses utilisateurs à lire attentivement les présentes Conditions Générales de Vente et d’Utilisation (ci-après les CGV/CGU). Les CGV/CGU s’appliquent à tous les services fournis par la société à ses clients d’une même catégorie, quelles que soient les clauses pouvant être inscrites sur les documents du client et notamment ses conditions générales d’achat.</p>
<p>Les CGV/CGU sont systématiquement communiquées au client qui en fait la demande.</p>
<p>Le client est tenu de prendre connaissance des CGU/CGV avant toute passation de commande.</p>
<p>En cas de modification ultérieure des CGV/CGU, le client est soumis à la version en vigueur lors de sa commande.</p>
<p>Les données enregistrées dans le système informatique de la société constituent la preuve des transactions conclues avec le client.</p>

<h3>DÉFINITIONS</h3>
<p><span>« Client »</span> désigne toute personne physique ou morale qui passe une commande sur le présent site internet.</p>
<p><span>« Commande »</span> désigne toute commande passée par l’utilisateur inscrit sur le présent site, en vue de bénéficier des services de la société.</p>
<p><span>« Conditions Générales de Vente et d’Utilisation »</span> ou « CGV/CGU » désignent les présentes conditions générales de vente et d’utilisation en ligne.</p>
<p><span>« Consommateur »</span> désigne l’acheteur, personne physique qui n’agit pas pour des besoins professionnels et/ou hors de son activité professionnelle.</p>
<p><span>« Professionnel »</span> désigne l’acheteur personne morale ou physique qui agit dans le cadre de son activité professionnelle.</p>
<p><span>« Services »</span> désigne toutes les prestations de service proposées aux Utilisateurs par la société à travers le présent site.</p>
<p><span>« Site »</span> désigne le présent site, c’est-à-dire <a href=\"https://atypikhouse.com\">https://atypikhouse.com</a>.</p>
<p><span>« Société »</span> désigne la société AtypikHouse, plus amplement désignée à l’article I des présentes.</p>
<p><span>« Utilisateur »</span> désigne toute personne qui fait utilisation du site.</p>

<h3>INSCRIPTION</h3>
    <div>
        <p>L’inscription au site est ouverte à toutes les personnes morales ou physiques majeures et jouissant de leurs pleines personnalités et capacités juridiques.</p>
        <p>L’utilisation des services proposés sur le site est conditionnée à l’inscription de l’utilisateur sur le site. L’inscription est gratuite.</p>
        <p>Pour procéder à l’inscription, l’utilisateur doit remplir tous les champs obligatoires, sans lesquels le service ne peut être délivré. A défaut l’inscription ne pourra être complétée.</p>
        <p>Les utilisateurs garantissent et déclarent sur l’honneur que toutes les informations communiquées sur le site, notamment lors de leur inscription, sont exactes et conformes à la réalité. Ils s’engagent à mettre à jour leurs informations personnelles à partir de la page dédiée à ces dernières et disponible dans leur compte.</p>
        <p>Tout utilisateur enregistré dispose d’un identifiant et d’un mot de passe. Ces derniers sont strictement personnels et confidentiels et ne devront en aucun cas faire l’objet d’une communication à des tiers sous peine de suppression du compte de l’Utilisateur enregistré contrevenant. Chaque utilisateur inscrit est personnellement responsable du maintien de la confidentialité de son identifiant et de son mot de passe.</p>
        <p>La société ne sera en aucun cas tenue pour responsable de l’usurpation d’identité d’un Utilisateur. Si un utilisateur suspecte une fraude à n’importe quel moment, il devra contacter la société dans les plus brefs délais afin que cette dernière puisse prendre les mesures nécessaires et régulariser la situation.</p>
        <p>Chaque Utilisateur, qu’il soit une personne morale ou physique, ne peut être titulaire que d’un compte sur le Site.</p>
        <p>En cas de non-respect des CGV/CGU, notamment la création de plusieurs comptes pour une seule personne ou encore la fourniture de fausses informations, la société se réserve le droit de procéder à la suppression temporaire ou définitive de tous les comptes crées par l’Utilisateur enregistré contrevenant.</p>
        <p>La suppression du compte entraîne la perte définitive de tous les avantages et services acquis sur le Site. Cependant, toute Commande réalisée et facturée par le Site avant la suppression du compte sera exécutée dans les conditions normales.</p>
        <p>En cas de suppression d’un compte par la société pour manquement aux devoirs et obligations énoncées dans les CGV/CGU, il est formellement interdit à l’Utilisateur contrevenant de se réinscrire sur le Site directement, par le biais d’une autre adresse électronique ou par personne interposée sans l’autorisation expresse de la société.</p>
    </div>

<h3>PRESTATIONS DE SERVICES ET PRIX</h3>
Les Services faisant l’objet des CGV/CGU sont ceux qui figurent sur le Site et qui sont proposés directement par la société ou ses prestataires partenaires.
Les services sont décrits sur la page correspondante au sein du Site et mention est faite de toutes leurs caractéristiques essentielles. La société ne peut être tenue responsable de l’impossibilité de réaliser ladite prestation lorsque l’Utilisateur n’est pas éligible.
Lorsqu’un Utilisateur enregistré souhaite obtenir une prestation de service vendue par la société à travers le Site, le prix indiqué sur la page de la prestation correspond au prix en euros hors taxes (HT) et tient compte des réductions applicables et en vigueur le jour de la Commande. Le prix indiqué n’inclut pas les frais accessoires qui seront indiqués le cas échéant dans le récapitulatif avant de passer commande.
La société se réserve la possibilité de modifier à tout moment ses tarifs. Elle s’engage à facturer les prestations au tarif applicable au moment de leur Commande. Pour les prestations dont le prix ne peut être connu a priori ni indiqué avec certitude, un devis détaillé sera transmis au client.
En aucun cas un Utilisateur ne pourra exiger l’application de réductions n’étant plus en vigueur le jour de la Commande.

<h3>COMMANDES</h3>
<p>Toute Commande ne peut être réalisée que lorsque l’Utilisateur s’est inscrit sur le Site. L’Utilisateur, lorsqu’il est connecté sur son compte, peut ajouter des Services à son panier virtuel. Il peut accéder au récapitulatif de son panier virtuel afin de confirmer les Services qu’il souhaite commander et effectuer sa Commande en appuyant sur le bouton “Commander ».</p>
<p>Il devra ensuite renseigner son adresse, le mode de livraison ainsi qu’un mode de paiement valable afin de finaliser la commande et de former efficacement le contrat de vente entre lui et la société.</p>
<p>L’enregistrement d’une Commande sur le Site est réalisé lorsque le client accepte les CGV/CGU en cochant la case prévue à cet effet et valide sa Commande. Cette validation constitue une preuve du contrat de vente. La finalisation de la Commande implique l’acceptation des prix et des modalités de réalisations des prestations telles qu’indiquées sur le Site.</p>
<p>Une fois sa Commande passée, le client en recevra confirmation par courrier électronique. Cette confirmation fera le récapitulatif de la Commande et des informations relatives à la réalisation de la ou des prestations.</p>
<p>En cas de défaut de paiement, d’adresse erronée du Client ou autre problème sur le compte du client, la société se réserve le droit de bloquer la commande du client jusqu’à ce que le problème soit résolu. En cas d’impossibilité de réaliser la prestation, le client en sera informé par courrier électronique à l’adresse qu’il aura fournie à la société. L’annulation de la commande de cette prestation et son remboursement seront dans ce cas effectués, le reste de la commande demeurant ferme et définitif.</p>
<p>En cas d’annulation d’une Commande acceptée par la société moins de 2 jours avant la date prévue de fourniture du Service pour des raisons autres qu’un cas de force majeure, la société se réserve le droit de conserver 10% du montant HT de la Commande au titre des dommages et intérêts en réparation du préjudice subi.</p>
<p>La société pourra faire bénéficier le client de réduction de prix, remises et rabais en fonction du nombre des Services commandés ou en fonction de la régularité des Commandes, selon les conditions fixées par la société.</p>

<h3>DÉLAIS ET MODALITÉS DE PAIEMENT</h3>
<p>Sauf dispositions contraires, toutes les ventes sont payées comptant au moment de la passation de la Commande.</p>
<p>En fonction de la nature ou du montant de la commande, la société reste libre d’exiger un acompte ou le paiement de l’intégralité du prix lors de la passation de la commande ou lors de la réception de la facture.</p>
<p>Le paiement peut être réalisé par :</p>
Carte bancaire.
En cas de défaut de paiement total ou partiel des prestations à la date convenue sur la facture, le client Professionnel devra verser à la société une pénalité de retard dont le taux est égal au taux pratiqué par la Banque Centrale Européenne pour son opération de refinancement majoré de 10 points de pourcentage. L’opération de financement retenue est la plus récente à la date de la commande des prestations de Service.
En sus des indemnités de retard, toute somme, y compris l’acompte, non payée à sa date d'exigibilité, produira de plein droit le paiement d’une indemnité forfaitaire de 40 euros due au titre des frais de recouvrement.
En cas de défaut de paiement total ou partiel des prestations à la date convenue sur la facture, le client consommateur devra verser à la société une pénalité de retard dont le taux est égal au taux d’intérêt légal.
Aucune compensation ne pourra être effectuée par le client entre des pénalités de retard dans la fourniture des prestations commandées et des sommes dues par le client à la société au titre de l’achat de Services proposés sur le Site.
La pénalité due par le client, Professionnel ou consommateur, est calculée sur le montant toutes taxes comprises de la somme restante due, et court à compter de la date d’échéance du prix sans qu’aucune mise en demeure préalable ne soit nécessaire.
En cas de non-respect des conditions de paiement décrites ci-dessus, la société se réserve la possibilité d’annuler ou de suspendre la vente.

RÉALISATIONS DES PRESTATIONS
La prestation de services commandée sur le Site sera assurée par AtypikHouse et aussi les sociétés partenaires.
Les sociétés s’engagent à mettre en œuvre tous les moyens humains et matériels pour réaliser la prestation dans les délais annoncés lors de la passation de la Commande. Cependant, elle ne peut en aucun cas être tenue responsable pour les retards de réalisation de prestation occasionnés en raison de fautes qui ne lui sont imputables.
Si les prestations n’ont pas été effectuées dans le délai prévu, la résolution de la vente pourra être demandée par le client dans les conditions prévues aux articles L216-2 et L216-3 du Code de la consommation. Les sommes versées par le client lui seront restituées au plus tard dans les quatorze jours qui suivent la date de dénonciation du contrat.
Cette disposition ne s’applique pas quand le retard de la société est dû à une faute du client ou à un cas de force majeure, c’est à dire à la survenance d’un évènement imprévisible, irrésistible et indépendant de la volonté de la société.
Dans le cas où l’exécution d’une prestation physique n’aurait pas pu être effectuée ou aurait été reportée du fait d’une erreur sur l’adresse indiquée par le client, les frais de déplacement du prestataire mandaté par la société pour réaliser la prestation infructueuse seront à la charge du client.

RÉCLAMATIONS
Pour toutes les commandes réalisées sur le présent site, le client dispose d’un droit de réclamation de 20 à compter de la fourniture du service.
Pour exercer ce droit de réclamation, le client doit faire parvenir à la société, à l’adresse legales@atypikhouse.com, une déclaration dans laquelle il exprime ses réserves et réclamations, assorties des justificatifs y afférents.
Une réclamation ne respectant pas les conditions décrites ci-dessus ne pourra être acceptée.
Après examen de la réclamation, le site pourra le cas échéant remplacer ou rembourser la prestation de Services dans les plus brefs délais et à ses frais.

DROIT DE RÉTRACTATION DU CONSOMMATEUR
Le consommateur dispose d’un droit de rétractation de 14 à compter de la passation de la commande, sauf pour les produits mentionnés à l’article L221-28 du Code de la consommation tel que reproduit ci-dessous :
« Le droit de rétractation ne peut être exercé pour les contrats :
1° De fourniture de services pleinement exécutés avant la fin du délai de rétractation et dont l’exécution a commencé après accord préalable exprès du consommateur et renoncement exprès à son droit de rétractation ;
2° De fourniture de biens ou de services dont le prix dépend de fluctuations sur le marché financier échappant au contrôle du professionnel et susceptibles de se produire pendant le délai de rétractation ;
3° De fourniture de biens confectionnés selon les spécifications du consommateur ou nettement personnalisés ;
4° De fourniture de biens susceptibles de se détériorer ou de se périmer rapidement ;
5° De fourniture de biens qui ont été descellés par le consommateur après la livraison et qui ne peuvent être renvoyés pour des raisons d’hygiène ou de protection de la santé ;
6° De fourniture de biens qui, après avoir été livrés et de par leur nature, sont mélangés de manière indissociable avec d’autres articles ;
7° De fourniture de boissons alcoolisées dont la livraison est différée au-delà de trente jours et dont la valeur convenue à la conclusion du contrat dépend de fluctuations sur le marché échappant au contrôle du professionnel ;
8° De travaux d’entretien ou de réparation à réaliser en urgence au domicile du consommateur et expressément sollicités par lui, dans la limite des pièces de rechange et travaux strictement nécessaires pour répondre à l’urgence ;
9° De fourniture d’enregistrements audio ou vidéo ou de logiciels informatiques lorsqu’ils ont été descellés par le consommateur après la livraison ;
10° De fourniture d’un journal, d’un périodique ou d’un magazine, sauf pour les contrats d’abonnement à ces publications ;
11° Conclus lors d’une enchère publique ;
12° De prestations de services d’hébergement, autres que d’hébergement résidentiel, de services de transport de biens, de locations de voitures, de restauration ou d’activités de loisirs qui doivent être fournis à une date ou à une période déterminée ;
13° De fourniture d’un contenu numérique non fourni sur un support matériel dont l’exécution a commencé après accord préalable exprès du consommateur et renoncement exprès à son droit de rétractation. »
Pour exercer ce droit de rétractation, le consommateur envoie une déclaration à l’adresse : legales@atypikhouse.com.
Il sera remboursé de la totalité des frais versés pour la prestation de services dans les 14 jours suivant la prise de connaissance par la société de sa déclaration de rétractation. Le remboursement sera fait par le même moyen de paiement que celui utilisé à l’achat.
Cependant, si la prestation de services est déjà entamée à la date de la prise de connaissance de la rétractation par la société, la valeur correspondant à la prestation de service déjà effectuée sera déduite du remboursement. Ce dernier sera opéré par le même moyen de paiement que pour l’achat.

TRAITEMENTS DES DONNÉES PERSONNELLES
L’enregistrement sur le site entraîne le traitement des données à caractère personnel du client. Si le client refuse le traitement de ses données, il lui est demandé de s’abstenir d’utiliser le Site.
Ce traitement des données à caractère personnel se fait dans le respect du Règlement Général sur la Protection des Données 2016/679 du 27 avril 2016.
Par ailleurs, conformément à la loi Informatique et Libertés du 6 janvier 1978, le client dispose, à tout moment, d’un droit d’interrogation, d’accès, de rectification, de modification et d’opposition à l’ensemble de ses données personnelles en écrivant, par courrier et en justifiant de son identité, à l’adresse suivante : legales@atypikhouse.com.
Ces données personnelles sont nécessaires au traitement de sa Commande et à l’établissement de ses factures le cas échéant, ainsi qu’à l’amélioration des fonctionnalités du Site.

PARTAGE DES DONNÉES COLLECTÉES
Le site peut avoir recours à des sociétés tierces pour effectuer certaines opérations. En naviguant sur le site, le client accepte que des sociétés tierces puissent avoir accès à ses données pour permettre le bon fonctionnement du Site.
Ces sociétés tierces n’ont accès aux données collectées que dans la cadre de la réalisation d’une tâche précise.
Le site reste responsable du traitement de ces données.
Par ailleurs, l’utilisateur peut donc être amené à recevoir des informations ou des offres commerciales de la part de la société ou de ses partenaires.
L’utilisateur peut à tout moment s’opposer à la réception de ces offres commerciales, en écrivant à l’adresse de la société indiquée ci-dessus, ou en cliquant sur le lien prévu à cet effet au sein des courriers électroniques reçus.
Par ailleurs, les informations des clients pourront être transmises à des tiers sans leur accord express préalable afin d’atteindre les buts suivants :
●\tRespecter la loi.
●\tProtéger toute personne contre des dommages corporels graves, voire la mort.
●\tLutter contre la fraude ou les atteintes portées à la société ou à ses utilisateurs.
●\tProtéger les droits de propriété de la société.


PROTECTION DES DONNÉES
La société assure un niveau de sécurité approprié et proportionnel aux risques encourus ainsi qu’à leur probabilité, conformément au Règlement Général sur la Protection des Données 2016/679 du 27 avril 2016.
Toutefois, ces mesures ne constituent en aucun cas une garantie et n’engagent pas la société à une obligation de résultat concernant la sécurité des données.

COOKIES
Pour permettre à ses utilisateurs de bénéficier d’une navigation optimale sur le site et d’un meilleur fonctionnement des différentes interfaces et applications, la société est susceptible d’implanter un cookie sur l’ordinateur de l’utilisateur. Ce cookie permet de stocker des informations relatives à la navigation sur le site, ainsi qu’aux éventuelles données saisies par les utilisateurs (notamment recherches, login, email, mot de passe).
L’utilisateur autorise expressément la société à déposer sur le disque dur de l’utilisateur un fichier dit« cookie ».
L’utilisateur dispose de la possibilité de bloquer, modifier la durée de conservation, ou supprimer ce cookie via l’interface de son navigateur. Si la désactivation systématique des cookies sur le navigateur de l’Utilisateur l’empêche d’utiliser certains services ou fonctionnalités du site, ce dysfonctionnement ne saurait en aucun cas constituer un dommage pour le membre qui ne pourra prétendre à aucune indemnité de ce fait.

MODIFICATIONS
La société se réserve le droit de modifier le site, les services qui y sont proposés, les CGV/CGU ainsi que toute procédure de livraison ou autre élément constitutif des prestations réalisées par la Société par le biais du site.
Lorsqu’il passe une commande, l’utilisateur est soumis aux stipulations énoncées par les CGV/CGU en vigueur lors de la passation de la commande.

RESPONSABILITÉ
La société ne peut en aucun cas être tenue responsable pour l’indisponibilité, qu’elle soit temporaire ou permanente du Site Internet et, bien qu’elle mette en œuvre tous les moyens afin d’assurer en permanence le service, il se peut que celui-ci soit interrompu à tout moment. En outre, la société se réserve le droit, par un acte volontaire, de rendre le Site indisponible afin de réaliser toute opération de mise à jour, d’amélioration ou de maintenance.
Tel que mentionné auparavant dans les présentes, la société ne peut en aucun cas être tenue responsable des retards de réalisation d’une prestation de service pour des motifs qui échappent à son contrôle, indépendants de sa volonté, imprévisibles et irrésistibles ou dont la faute ne peut lui être imputable.

PROPRIETÉ INTELLECTUELLE
La marque, le logo, et la charte graphique du présent site sont des marques déposées auprès de l’INPI et des œuvres protégées au titre de la propriété intellectuelle, dont la propriété revient exclusivement à la société. Toute diffusion, exploitation, représentation, reproduction, qu’elle soit partielle ou intégrale sans l’autorisation expresse de ladite société exposera le contrevenant à des poursuites civiles et pénales.

CLAUSE ATTRIBUTIVE DE COMPÉTENCE
Le droit régissant les CGV/CGU est le droit français. Tout litige pouvant survenir entre la société et un utilisateur lors de l’exécution des présentes fera l’objet d’une tentative de résolution à l’amiable. A défaut, les litiges seront portés à la connaissance des tribunaux compétents de droit commun.
Le client est informé qu’il peut recourir à une médiation conventionnelle, auprès de la Commission de la médiation de la consommation prévue à l’article L534-7 du Code de la consommation ou auprès des instances de médiation sectorielles existantes. Il peut également recourir à tout mode alternatif de règlement des différends en cas de litige.

INFORMATION PRÉCONTRACTUELLE
Préalablement à sa commande, le client reconnait avoir eu communication, de façon lisible et compréhensible, des CGV/CGU et des informations et renseignements prévus aux articles L111-1 à L111-7 du Code de la consommation, et notamment :
●\tLes caractéristiques essentielles des services.
●\tLe prix des services.
●\tLa date ou le délai auquel la société s’engage à fournir le service.
●\tLes informations relatives à l’identité de la société (coordonnées postales, téléphoniques, électroniques).
●\tLes informations relatives aux garanties légales et contractuelles et à leurs modalités de mise en œuvre.
●\tLa possibilité de recourir à une médiation conventionnelle en cas de litige.
●\tLes informations relatives au droit de rétractation (délai, modalités d’exercice).
La passation d’une commande sur le site emporte adhésion et acceptation des CGV/CGU. Le client ne pourra se prévaloir d’un document contradictoire.
*DM : dispositifs médicaux, * DMS : dispositifs médicaux stériles, *CGV : Conditions Générale de Vente


    </div>
</div>


{% include 'inc/parts/footer.html.twig' %}", "inc/pages/simple-pages/cgv.html.twig", "/Users/nathandfk/Development/Symfony/atypikhouse/templates/inc/pages/simple-pages/cgv.html.twig");
    }
}
