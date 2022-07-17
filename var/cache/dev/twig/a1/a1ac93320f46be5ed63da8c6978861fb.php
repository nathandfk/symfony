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

/* inc/modules/messages/selected.html.twig */
class __TwigTemplate_f232efd411443835cc3d35b9184db721 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/modules/messages/selected.html.twig"));

        // line 1
        if ((isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 2, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 3
                echo "    ";
                if ((twig_get_attribute($this->env, $this->source, $context["element"], "sender_id", [], "any", false, false, false, 3) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), "id", [], "any", false, false, false, 3))) {
                    // line 4
                    echo "    ";
                    $context["id"] = twig_get_attribute($this->env, $this->source, $context["element"], "sender_id", [], "any", false, false, false, 4);
                    // line 5
                    echo "    ";
                } else {
                    // line 6
                    echo "    ";
                    $context["id"] = twig_get_attribute($this->env, $this->source, $context["element"], "recipient_id", [], "any", false, false, false, 6);
                    // line 7
                    echo "    ";
                }
                // line 8
                echo "    <div class=\"bg-c5 choice-discussion\" data-id=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 8, $this->source); })()), "html", null, true);
                echo "\">
        ";
                // line 9
                if ((twig_get_attribute($this->env, $this->source, $context["element"], "sender_id", [], "any", false, false, false, 9) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9))) {
                    // line 10
                    echo "        <h4>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "fn2", [], "any", false, false, false, 10), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "ln2", [], "any", false, false, false, 10), "html", null, true);
                    echo "</h4>
        ";
                } else {
                    // line 12
                    echo "        <h4>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "fn1", [], "any", false, false, false, 12), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "ln1", [], "any", false, false, false, 12), "html", null, true);
                    echo "</h4>
        ";
                }
                // line 14
                echo "        <h5>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "added_at", [], "any", false, false, false, 14), "html", null, true);
                echo "</h5>
        <p>";
                // line 15
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "message", [], "any", false, false, false, 15), 0, 150), "html", null, true);
                echo "...</p>
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/modules/messages/selected.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  85 => 14,  77 => 12,  69 => 10,  67 => 9,  62 => 8,  59 => 7,  56 => 6,  53 => 5,  50 => 4,  47 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if selected %}
    {% for element in selected %}
    {% if element.sender_id != app.user.id %}
    {% set id = element.sender_id %}
    {% else %}
    {% set id = element.recipient_id %}
    {% endif %}
    <div class=\"bg-c5 choice-discussion\" data-id=\"{{ id }}\">
        {% if element.sender_id == app.user.id %}
        <h4>{{ element.fn2 }} {{ element.ln2 }}</h4>
        {% else %}
        <h4>{{ element.fn1 }} {{ element.ln1 }}</h4>
        {% endif %}
        <h5>{{ element.added_at }}</h5>
        <p>{{ element.message |slice(0, 150)}}...</p>
    </div>
    {% endfor %}
{% endif %}", "inc/modules/messages/selected.html.twig", "/Users/nathandfk/Development/Symfony/final/dsp-project/templates/inc/modules/messages/selected.html.twig");
    }
}
