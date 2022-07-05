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

/* inc/pages/users/message.html.twig */
class __TwigTemplate_b27321728f9bea33635864b456d5c7b0 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/pages/users/message.html.twig"));

        // line 1
        $this->loadTemplate("inc/parts/head.html.twig", "inc/pages/users/message.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("inc/parts/nav.html.twig", "inc/pages/users/message.html.twig", 2)->display($context);
        // line 3
        echo "


<div class=\"atypikhouse-container my-6\">
    <div class=\"page-title\">
        <h1 class=\"text-uppercase c1 size20 ff-r\">";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</h1>
    </div>
    <div class=\"message-wrapper\">
        <div class=\"message-col1\">
            <div class=\"message-col1-header message-header\">
                <h4>Messages</h4>
            </div>
            <div class=\"message-col1-body message-body\">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 17
            echo "                <div class=\"bg-c5 choice-discussion\">
                    <h4>Nathan DIAFOUKA</h4>
                    <h5>23/01/2022 12h04</h5>
                    <p>Votre demande de réservation a été accepté, merci de trouver ci-dessous l'adresse complète et les indications</p>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "            </div>
        </div>
        <div class=\"message-col2\">
            <div class=\"message-col2-header message-header\">
                <h4>Nathan DIAFOUKA</h4>
            </div>
            <div class=\"message-col2-body message-body\">
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 31
            echo "                <div class=\"content-message message-received bg-c1 c4\">
                    <h4>Nathan DIAFOUKA</h4>
                    <h5>23/01/2022 12h04</h5>
                    <p>Votre demande de réservation a été accepté, merci de trouver ci-dessous l'adresse complète et les indications</p>
                </div>
                <div class=\"content-message message-send bg-c2 c4\">
                    <h4>Nathan DIAFOUKA</h4>
                    <h5>23/01/2022 12h04</h5>
                    <p>Votre demande de réservation a été accepté, merci de trouver ci-dessous l'adresse complète et les indications</p>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </div>
            <div class=\"message-col2-footer\">
                <textarea></textarea>
            </div>
        </div>
    </div>
</div>


";
        // line 51
        $this->loadTemplate("inc/parts/footer.html.twig", "inc/pages/users/message.html.twig", 51)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/pages/users/message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 51,  106 => 42,  90 => 31,  86 => 30,  77 => 23,  66 => 17,  62 => 16,  51 => 8,  44 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'inc/parts/head.html.twig' %}
{% include 'inc/parts/nav.html.twig' %}



<div class=\"atypikhouse-container my-6\">
    <div class=\"page-title\">
        <h1 class=\"text-uppercase c1 size20 ff-r\">{{ title }}</h1>
    </div>
    <div class=\"message-wrapper\">
        <div class=\"message-col1\">
            <div class=\"message-col1-header message-header\">
                <h4>Messages</h4>
            </div>
            <div class=\"message-col1-body message-body\">
                {% for i in 0..9 %}
                <div class=\"bg-c5 choice-discussion\">
                    <h4>Nathan DIAFOUKA</h4>
                    <h5>23/01/2022 12h04</h5>
                    <p>Votre demande de réservation a été accepté, merci de trouver ci-dessous l'adresse complète et les indications</p>
                </div>
                {% endfor %}
            </div>
        </div>
        <div class=\"message-col2\">
            <div class=\"message-col2-header message-header\">
                <h4>Nathan DIAFOUKA</h4>
            </div>
            <div class=\"message-col2-body message-body\">
                {% for i in 0..4 %}
                <div class=\"content-message message-received bg-c1 c4\">
                    <h4>Nathan DIAFOUKA</h4>
                    <h5>23/01/2022 12h04</h5>
                    <p>Votre demande de réservation a été accepté, merci de trouver ci-dessous l'adresse complète et les indications</p>
                </div>
                <div class=\"content-message message-send bg-c2 c4\">
                    <h4>Nathan DIAFOUKA</h4>
                    <h5>23/01/2022 12h04</h5>
                    <p>Votre demande de réservation a été accepté, merci de trouver ci-dessous l'adresse complète et les indications</p>
                </div>
                {% endfor %}
            </div>
            <div class=\"message-col2-footer\">
                <textarea></textarea>
            </div>
        </div>
    </div>
</div>


{% include 'inc/parts/footer.html.twig' %}", "inc/pages/users/message.html.twig", "/Users/nathandfk/Development/Symfony/atypikhouse/templates/inc/pages/users/message.html.twig");
    }
}
