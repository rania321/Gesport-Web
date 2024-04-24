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

/* reservationactivite/show.html.twig */
class __TwigTemplate_b110f5c23c526acb94e323191b442b21 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'carousel' => [$this, 'block_carousel'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationactivite/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationactivite/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservationactivite/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Reservationactivite";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_carousel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        // line 5
        echo "<div class=\"container-fluid bg-breadcrumb\">
            <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
                <h3 class=\"text-white display-3 mb-4\">Réservez maintenant !</h3>
                <ol class=\"breadcrumb justify-content-center mb-0\">
                    <li class=\"breadcrumb-item\"><a href=\"./base\">Accueil</a></li>
                    <li class=\"breadcrumb-item active text-white\">Activite</li>
                </ol>    
            </div>
        </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    

<div class=\"container mt-4\">
    <!-- reservvation Details -->
    <div class=\"row mb-4\">
        <div class=\"col\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h2>Détails de la réservation</h2>
                </div>
                <div class=\"card-body\">
                    <dl class=\"row\">
                        <dt class=\"col-sm-3\">Activité:</dt>
                        <dd class=\"col-sm-9\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservationactivite"]) || array_key_exists("reservationactivite", $context) ? $context["reservationactivite"] : (function () { throw new RuntimeError('Variable "reservationactivite" does not exist.', 29, $this->source); })()), "ida", [], "any", false, false, false, 29), "noma", [], "any", false, false, false, 29), "html", null, true);
        echo "</dd>

                        <dt class=\"col-sm-3\">Date:</dt>
                        <dd class=\"col-sm-9\">";
        // line 32
        ((twig_get_attribute($this->env, $this->source, (isset($context["reservationactivite"]) || array_key_exists("reservationactivite", $context) ? $context["reservationactivite"] : (function () { throw new RuntimeError('Variable "reservationactivite" does not exist.', 32, $this->source); })()), "datedebutr", [], "any", false, false, false, 32)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservationactivite"]) || array_key_exists("reservationactivite", $context) ? $context["reservationactivite"] : (function () { throw new RuntimeError('Variable "reservationactivite" does not exist.', 32, $this->source); })()), "datedebutr", [], "any", false, false, false, 32), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</dd>

                        <dt class=\"col-sm-3\">Heure:</dt>
                        <dd class=\"col-sm-9\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservationactivite"]) || array_key_exists("reservationactivite", $context) ? $context["reservationactivite"] : (function () { throw new RuntimeError('Variable "reservationactivite" does not exist.', 35, $this->source); })()), "heurer", [], "any", false, false, false, 35), "html", null, true);
        echo "</dd>

                        <dt class=\"col-sm-3\">Statut:</dt>
                        <dd class=\"col-sm-9\">
                            ";
        // line 39
        if ((twig_get_attribute($this->env, $this->source, (isset($context["reservationactivite"]) || array_key_exists("reservationactivite", $context) ? $context["reservationactivite"] : (function () { throw new RuntimeError('Variable "reservationactivite" does not exist.', 39, $this->source); })()), "statutr", [], "any", false, false, false, 39) == "confirmée")) {
            // line 40
            echo "                                <span class=\"badge bg-success\">Confirmée</span>
                            ";
        } else {
            // line 42
            echo "                                <span class=\"badge bg-warning\">En cours</span>
                            ";
        }
        // line 44
        echo "                        </dd>
                    </dl>
                    <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservationactivite_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservationactivite_edit", ["idr" => twig_get_attribute($this->env, $this->source, (isset($context["reservationactivite"]) || array_key_exists("reservationactivite", $context) ? $context["reservationactivite"] : (function () { throw new RuntimeError('Variable "reservationactivite" does not exist.', 48, $this->source); })()), "idr", [], "any", false, false, false, 48)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 50
        echo twig_include($this->env, $context, "reservationactivite/_delete_form.html.twig");
        echo "
                </div>
                
            </div>
        </div>
    </div>    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reservationactivite/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  176 => 50,  171 => 48,  166 => 46,  162 => 44,  158 => 42,  154 => 40,  152 => 39,  145 => 35,  139 => 32,  133 => 29,  118 => 16,  108 => 15,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Reservationactivite{% endblock %}
{% block carousel %}
<div class=\"container-fluid bg-breadcrumb\">
            <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
                <h3 class=\"text-white display-3 mb-4\">Réservez maintenant !</h3>
                <ol class=\"breadcrumb justify-content-center mb-0\">
                    <li class=\"breadcrumb-item\"><a href=\"./base\">Accueil</a></li>
                    <li class=\"breadcrumb-item active text-white\">Activite</li>
                </ol>    
            </div>
        </div>
{% endblock %}
{% block content %}
    

<div class=\"container mt-4\">
    <!-- reservvation Details -->
    <div class=\"row mb-4\">
        <div class=\"col\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h2>Détails de la réservation</h2>
                </div>
                <div class=\"card-body\">
                    <dl class=\"row\">
                        <dt class=\"col-sm-3\">Activité:</dt>
                        <dd class=\"col-sm-9\">{{ reservationactivite.ida.noma }}</dd>

                        <dt class=\"col-sm-3\">Date:</dt>
                        <dd class=\"col-sm-9\">{{ reservationactivite.datedebutr ? reservationactivite.datedebutr|date('Y-m-d') : '' }}</dd>

                        <dt class=\"col-sm-3\">Heure:</dt>
                        <dd class=\"col-sm-9\">{{ reservationactivite.heurer }}</dd>

                        <dt class=\"col-sm-3\">Statut:</dt>
                        <dd class=\"col-sm-9\">
                            {% if reservationactivite.statutr == 'confirmée' %}
                                <span class=\"badge bg-success\">Confirmée</span>
                            {% else %}
                                <span class=\"badge bg-warning\">En cours</span>
                            {% endif %}
                        </dd>
                    </dl>
                    <a href=\"{{ path('app_reservationactivite_index') }}\">back to list</a>

    <a href=\"{{ path('app_reservationactivite_edit', {'idr': reservationactivite.idr}) }}\">edit</a>

    {{ include('reservationactivite/_delete_form.html.twig') }}
                </div>
                
            </div>
        </div>
    </div>    
{% endblock %}", "reservationactivite/show.html.twig", "C:\\Users\\Rania\\Desktop\\gesportWeb\\templates\\reservationactivite\\show.html.twig");
    }
}
