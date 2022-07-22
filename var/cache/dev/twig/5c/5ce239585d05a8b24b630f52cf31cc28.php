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
                <div class=\"message-selected\"></div>
            </div>
        </div>
        <div class=\"message-col2\">
            <div class=\"message-details\"></div> 
        </div>
    </div>
</div>


";
        // line 26
        $this->loadTemplate("inc/parts/footer.html.twig", "inc/pages/users/message.html.twig", 26)->display($context);
        
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
        return array (  72 => 26,  51 => 8,  44 => 3,  42 => 2,  40 => 1,);
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
                <div class=\"message-selected\"></div>
            </div>
        </div>
        <div class=\"message-col2\">
            <div class=\"message-details\"></div> 
        </div>
    </div>
</div>


{% include 'inc/parts/footer.html.twig' %}", "inc/pages/users/message.html.twig", "/Users/nathandfk/Development/Symfony/final/dsp-project/templates/inc/pages/users/message.html.twig");
    }
}
