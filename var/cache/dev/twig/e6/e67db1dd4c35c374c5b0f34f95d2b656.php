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

/* reservationactivite/showBack.html.twig */
class __TwigTemplate_a6ba696d80fdbfa120988434df7aa1f1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationactivite/showBack.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationactivite/showBack.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "reservationactivite/showBack.html.twig", 1);
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

        echo "Reservation";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<div class=\"content-wrapper\">
    <div class=\"row\">
        <div class=\"col-lg-12 grid-margin stretch-card\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Reservation Detail</h4>
                    <div class=\"table-responsive\">
                        <table class=\"table\">
                            <tbody>
                                <tr>
                                    <th>Activite</th>
                                    <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservationactivite"]) || array_key_exists("reservationactivite", $context) ? $context["reservationactivite"] : (function () { throw new RuntimeError('Variable "reservationactivite" does not exist.', 17, $this->source); })()), "ida", [], "any", false, false, false, 17), "noma", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Client</th>
                                    <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservationactivite"]) || array_key_exists("reservationactivite", $context) ? $context["reservationactivite"] : (function () { throw new RuntimeError('Variable "reservationactivite" does not exist.', 21, $this->source); })()), "idu", [], "any", false, false, false, 21), "prenomu", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Date</th>
                                    <td>";
        // line 25
        ((twig_get_attribute($this->env, $this->source, (isset($context["reservationactivite"]) || array_key_exists("reservationactivite", $context) ? $context["reservationactivite"] : (function () { throw new RuntimeError('Variable "reservationactivite" does not exist.', 25, $this->source); })()), "datedebutr", [], "any", false, false, false, 25)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservationactivite"]) || array_key_exists("reservationactivite", $context) ? $context["reservationactivite"] : (function () { throw new RuntimeError('Variable "reservationactivite" does not exist.', 25, $this->source); })()), "datedebutr", [], "any", false, false, false, 25), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Heure</th>
                                    <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservationactivite"]) || array_key_exists("reservationactivite", $context) ? $context["reservationactivite"] : (function () { throw new RuntimeError('Variable "reservationactivite" does not exist.', 29, $this->source); })()), "heurer", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Statut</th>
                                    <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservationactivite"]) || array_key_exists("reservationactivite", $context) ? $context["reservationactivite"] : (function () { throw new RuntimeError('Variable "reservationactivite" does not exist.', 33, $this->source); })()), "statutr", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservationactivite_indexBack");
        echo "\" class=\"btn btn-light\">Back to list</a>
                    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservationactivite_editBack", ["idr" => twig_get_attribute($this->env, $this->source, (isset($context["reservationactivite"]) || array_key_exists("reservationactivite", $context) ? $context["reservationactivite"] : (function () { throw new RuntimeError('Variable "reservationactivite" does not exist.', 39, $this->source); })()), "idr", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\" class=\"btn btn-warning\">Edit</a>
                    ";
        // line 40
        echo twig_include($this->env, $context, "reservationactivite/_delete_form1.html.twig");
        echo "
                </div>
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
        return "reservationactivite/showBack.html.twig";
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
        return array (  145 => 40,  141 => 39,  137 => 38,  129 => 33,  122 => 29,  115 => 25,  108 => 21,  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}Reservation{% endblock %}

{% block content %}
<div class=\"content-wrapper\">
    <div class=\"row\">
        <div class=\"col-lg-12 grid-margin stretch-card\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Reservation Detail</h4>
                    <div class=\"table-responsive\">
                        <table class=\"table\">
                            <tbody>
                                <tr>
                                    <th>Activite</th>
                                    <td>{{ reservationactivite.ida.noma }}</td>
                                </tr>
                                <tr>
                                    <th>Client</th>
                                    <td>{{ reservationactivite.idu.prenomu }}</td>
                                </tr>
                                <tr>
                                    <th>Date</th>
                                    <td>{{ reservationactivite.datedebutr ? reservationactivite.datedebutr|date('Y-m-d') : '' }}</td>
                                </tr>
                                <tr>
                                    <th>Heure</th>
                                    <td>{{ reservationactivite.heurer }}</td>
                                </tr>
                                <tr>
                                    <th>Statut</th>
                                    <td>{{ reservationactivite.statutr }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href=\"{{ path('app_reservationactivite_indexBack') }}\" class=\"btn btn-light\">Back to list</a>
                    <a href=\"{{ path('app_reservationactivite_editBack', {'idr': reservationactivite.idr}) }}\" class=\"btn btn-warning\">Edit</a>
                    {{ include('reservationactivite/_delete_form1.html.twig') }}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "reservationactivite/showBack.html.twig", "C:\\Users\\Rania\\Desktop\\gesportWeb\\templates\\reservationactivite\\showBack.html.twig");
    }
}
