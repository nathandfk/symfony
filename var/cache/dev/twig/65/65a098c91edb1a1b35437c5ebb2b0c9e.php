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

/* inc/pages/users/reservation.html.twig */
class __TwigTemplate_df8a06dd722cfad5ce469c76e5e2b53a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/pages/users/reservation.html.twig"));

        // line 1
        $this->loadTemplate("inc/parts/head.html.twig", "inc/pages/users/reservation.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("inc/parts/nav.html.twig", "inc/pages/users/reservation.html.twig", 2)->display($context);
        // line 3
        echo "<div class=\"atypikhouse-container\">

<h3>Historique de réservation de mes clients</h3>
<table id=\"historical-table\" class=\"text-center ath-table-form\">
    <thead>
        <tr>
            <th></th>
            <th colspan=\"3\">Client</th>
            <th>Habitation</th>
            <th>Période de la réservation</th>
            <th>Prix</th>
            <th>Statut</th>
            <th>Détails</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td class=\"bg-c5\">Prénom</td>
            <td class=\"bg-c5\">Nom</td>
            <td class=\"bg-c5\">E-mail</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td><input type=\"checkbox\" value=\"1\" class=\"historical-checked\"></td>
            <td>Nathan</td>
            <td>DIAFOUKA</td>
            <td>n@gmail.com</td>
            <td><a href=\"\">Cabane perchée</a></td>
            <td>01 juillet 2022 - 07 juillet 2022</td>
            <td>150 €</td>
            <td>NOT_ACCEPTED</td>
            <td><a href=\"\" class=\"fas fa-eye\"></a></td>
        </tr>
        <tr>
            <td><input type=\"checkbox\" value=\"2\" class=\"historical-checked\"></td>
            <td>Nathan</td>
            <td>DIAFOUKA</td>
            <td>n@gmail.com</td>
            <td><a href=\"\">Cabane perchée</a></td>
            <td>01 juillet 2022 - 07 juillet 2022</td>
            <td>150 €</td>
            <td>NOT_ACCEPTED</td>
            <td><a href=\"\" class=\"fas fa-eye\"></a></td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td><input type=\"checkbox\" class=\"historical-checked-all\"></td>
            <td>Action</td>
            <td></td>
            <td></td>
            <td></td>
            <td class=\"d-flex gap-1 m-auto w-max-content\">
            ";
        // line 62
        echo "            <input type=\"submit\" class=\"click click-grown\" value=\"Refuser\" name=\"btn-refuse\">
            <input type=\"submit\" class=\"click click-success\" value=\"Valider\" name=\"btn-valid\">
            </td>
            <td></td>
        </tr>
    </tfoot>
</table>

<h3>Historique de mes réservations</h3>
<table id=\"historical-table\" class=\"text-center ath-table-form\">
    <thead>
        <tr>
            <th></th>
            <th colspan=\"3\">Client</th>
            <th>Habitation</th>
            <th>Période de la réservation</th>
            <th>Prix</th>
            <th>Statut</th>
            <th>Détails</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td class=\"bg-c5\">Prénom</td>
            <td class=\"bg-c5\">Nom</td>
            <td class=\"bg-c5\">E-mail</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td><input type=\"checkbox\" value=\"1\" class=\"historical-checked\"></td>
            <td>Nathan</td>
            <td>DIAFOUKA</td>
            <td>n@gmail.com</td>
            <td><a href=\"\">Cabane perchée</a></td>
            <td>01 juillet 2022 - 07 juillet 2022</td>
            <td>150 €</td>
            <td>NOT_ACCEPTED</td>
            <td><a href=\"\" class=\"fas fa-eye\"></a></td>
        </tr>
        <tr>
            <td><input type=\"checkbox\" value=\"2\" class=\"historical-checked\"></td>
            <td>Nathan</td>
            <td>DIAFOUKA</td>
            <td>n@gmail.com</td>
            <td><a href=\"\">Cabane perchée</a></td>
            <td>01 juillet 2022 - 07 juillet 2022</td>
            <td>150 €</td>
            <td>NOT_ACCEPTED</td>
            <td><a href=\"\" class=\"fas fa-eye\"></a></td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td><input type=\"checkbox\" class=\"historical-checked-all\"></td>
            <td>Action</td>
            <td></td>
            <td></td>
            <td></td>
            <td class=\"d-flex gap-1 m-auto w-max-content\">
            ";
        // line 127
        echo "            <input type=\"submit\" class=\"click click-grown\" value=\"Refuser\" name=\"btn-refuse\">
            <input type=\"submit\" class=\"click click-success\" value=\"Valider\" name=\"btn-valid\">
            </td>
            <td></td>
        </tr>
    </tfoot>
</table>
</div>
";
        // line 135
        $this->loadTemplate("inc/parts/footer.html.twig", "inc/pages/users/reservation.html.twig", 135)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/pages/users/reservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 135,  170 => 127,  104 => 62,  44 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'inc/parts/head.html.twig' %}
{% include 'inc/parts/nav.html.twig' %}
<div class=\"atypikhouse-container\">

<h3>Historique de réservation de mes clients</h3>
<table id=\"historical-table\" class=\"text-center ath-table-form\">
    <thead>
        <tr>
            <th></th>
            <th colspan=\"3\">Client</th>
            <th>Habitation</th>
            <th>Période de la réservation</th>
            <th>Prix</th>
            <th>Statut</th>
            <th>Détails</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td class=\"bg-c5\">Prénom</td>
            <td class=\"bg-c5\">Nom</td>
            <td class=\"bg-c5\">E-mail</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td><input type=\"checkbox\" value=\"1\" class=\"historical-checked\"></td>
            <td>Nathan</td>
            <td>DIAFOUKA</td>
            <td>n@gmail.com</td>
            <td><a href=\"\">Cabane perchée</a></td>
            <td>01 juillet 2022 - 07 juillet 2022</td>
            <td>150 €</td>
            <td>NOT_ACCEPTED</td>
            <td><a href=\"\" class=\"fas fa-eye\"></a></td>
        </tr>
        <tr>
            <td><input type=\"checkbox\" value=\"2\" class=\"historical-checked\"></td>
            <td>Nathan</td>
            <td>DIAFOUKA</td>
            <td>n@gmail.com</td>
            <td><a href=\"\">Cabane perchée</a></td>
            <td>01 juillet 2022 - 07 juillet 2022</td>
            <td>150 €</td>
            <td>NOT_ACCEPTED</td>
            <td><a href=\"\" class=\"fas fa-eye\"></a></td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td><input type=\"checkbox\" class=\"historical-checked-all\"></td>
            <td>Action</td>
            <td></td>
            <td></td>
            <td></td>
            <td class=\"d-flex gap-1 m-auto w-max-content\">
            {# <a href=\"\" class=\"click click-brown\">Détails</a> #}
            <input type=\"submit\" class=\"click click-grown\" value=\"Refuser\" name=\"btn-refuse\">
            <input type=\"submit\" class=\"click click-success\" value=\"Valider\" name=\"btn-valid\">
            </td>
            <td></td>
        </tr>
    </tfoot>
</table>

<h3>Historique de mes réservations</h3>
<table id=\"historical-table\" class=\"text-center ath-table-form\">
    <thead>
        <tr>
            <th></th>
            <th colspan=\"3\">Client</th>
            <th>Habitation</th>
            <th>Période de la réservation</th>
            <th>Prix</th>
            <th>Statut</th>
            <th>Détails</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td class=\"bg-c5\">Prénom</td>
            <td class=\"bg-c5\">Nom</td>
            <td class=\"bg-c5\">E-mail</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td><input type=\"checkbox\" value=\"1\" class=\"historical-checked\"></td>
            <td>Nathan</td>
            <td>DIAFOUKA</td>
            <td>n@gmail.com</td>
            <td><a href=\"\">Cabane perchée</a></td>
            <td>01 juillet 2022 - 07 juillet 2022</td>
            <td>150 €</td>
            <td>NOT_ACCEPTED</td>
            <td><a href=\"\" class=\"fas fa-eye\"></a></td>
        </tr>
        <tr>
            <td><input type=\"checkbox\" value=\"2\" class=\"historical-checked\"></td>
            <td>Nathan</td>
            <td>DIAFOUKA</td>
            <td>n@gmail.com</td>
            <td><a href=\"\">Cabane perchée</a></td>
            <td>01 juillet 2022 - 07 juillet 2022</td>
            <td>150 €</td>
            <td>NOT_ACCEPTED</td>
            <td><a href=\"\" class=\"fas fa-eye\"></a></td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td><input type=\"checkbox\" class=\"historical-checked-all\"></td>
            <td>Action</td>
            <td></td>
            <td></td>
            <td></td>
            <td class=\"d-flex gap-1 m-auto w-max-content\">
            {# <a href=\"\" class=\"click click-brown\">Détails</a> #}
            <input type=\"submit\" class=\"click click-grown\" value=\"Refuser\" name=\"btn-refuse\">
            <input type=\"submit\" class=\"click click-success\" value=\"Valider\" name=\"btn-valid\">
            </td>
            <td></td>
        </tr>
    </tfoot>
</table>
</div>
{% include 'inc/parts/footer.html.twig' %}", "inc/pages/users/reservation.html.twig", "/Users/nathandfk/Development/Symfony/atypikhouse/templates/inc/pages/users/reservation.html.twig");
    }
}
