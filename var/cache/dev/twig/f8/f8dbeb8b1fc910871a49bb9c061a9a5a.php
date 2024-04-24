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

/* reservationactivite/edit.html.twig */
class __TwigTemplate_170a4e2aefc2487ffa63ce0cdcadba9b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationactivite/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationactivite/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservationactivite/edit.html.twig", 1);
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

        echo "Edit Reservationactivite";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_carousel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        // line 6
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

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    <h1>Réserver une activité</h1>

    
    <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservationactivite_index");
        echo "\">back to list</a>

    
    <div class=\"container-fluid booking py-5\">
            <div class=\"container py-5\">
                <div class=\"row g-5 align-items-center\">
                    <div class=\"col-lg-6\">
                        <h5 class=\"section-booking-title pe-3\">Réservation</h5>
                        <h1 class=\"text-white mb-4\">Réservation en ligne</h1>
                        <p class=\"text-white mb-4\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur maxime ullam esse fuga blanditiis accusantium pariatur quis sapiente, veniam doloribus praesentium? Repudiandae iste voluptatem fugiat doloribus quasi quo iure officia.
                        </p>
                        <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservationactivite_index");
        echo "\" class=\"btn btn-light text-primary rounded-pill py-3 px-5 mt-2\">Mes Réservations</a>
                    </div>
                    <div class=\"col-lg-6\">
                        <h1 class=\"text-white mb-3\">Réserver une activité</h1>
                        <p class=\"text-white mb-4\">Choisissez <span class=\"text-warning\">l'activité</span> qui vous correspond.</p>
                            ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

                        <form>
                            <div class=\"row g-3\">
                                <div class=\"col-12\">
                                    <div class=\"form-floating\">
                                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "ida", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-select bg-white border-0"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-floating\">
                                        
                                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "datedebutr", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control bg-white border-0"]]);
        echo "
                                        <div class=\"text-danger\">";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "datedebutr", [], "any", false, false, false, 49), 'errors');
        echo "</div>
                                           
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-floating\">
                                        
                                        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "heurer", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-select bg-white border-0"]]);
        echo "
                                        
                                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "heurer", [], "any", false, false, false, 58), 'errors');
        echo "
                                                
                                    </div>
                                </div>
                                
                                
                                <div class=\"col-12\">
                                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "_token", [], "any", false, false, false, 65), 'row');
        echo "
                                    <button class=\"btn btn-primary text-white w-100 py-3\" type=\"submit\">Réserver</button>
                                    ";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), 'form_end');
        echo "
                                </div>
                                
                            </div>
                        </form>
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
        return "reservationactivite/edit.html.twig";
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
        return array (  197 => 67,  192 => 65,  182 => 58,  177 => 56,  167 => 49,  163 => 48,  154 => 42,  145 => 36,  137 => 31,  123 => 20,  118 => 17,  108 => 16,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit Reservationactivite{% endblock %}

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
    <h1>Réserver une activité</h1>

    
    <a href=\"{{ path('app_reservationactivite_index') }}\">back to list</a>

    
    <div class=\"container-fluid booking py-5\">
            <div class=\"container py-5\">
                <div class=\"row g-5 align-items-center\">
                    <div class=\"col-lg-6\">
                        <h5 class=\"section-booking-title pe-3\">Réservation</h5>
                        <h1 class=\"text-white mb-4\">Réservation en ligne</h1>
                        <p class=\"text-white mb-4\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur maxime ullam esse fuga blanditiis accusantium pariatur quis sapiente, veniam doloribus praesentium? Repudiandae iste voluptatem fugiat doloribus quasi quo iure officia.
                        </p>
                        <a href=\"{{ path('app_reservationactivite_index') }}\" class=\"btn btn-light text-primary rounded-pill py-3 px-5 mt-2\">Mes Réservations</a>
                    </div>
                    <div class=\"col-lg-6\">
                        <h1 class=\"text-white mb-3\">Réserver une activité</h1>
                        <p class=\"text-white mb-4\">Choisissez <span class=\"text-warning\">l'activité</span> qui vous correspond.</p>
                            {{ form_start(form,{attr:{novalidate:'novalidate'}}) }}

                        <form>
                            <div class=\"row g-3\">
                                <div class=\"col-12\">
                                    <div class=\"form-floating\">
                                        {{ form_widget(form.ida, {'attr': {'class': 'form-select bg-white border-0'}}) }}
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-floating\">
                                        
                                        {{ form_widget(form.datedebutr, {'attr': {'class': 'form-control bg-white border-0'}}) }}
                                        <div class=\"text-danger\">{{ form_errors(form.datedebutr) }}</div>
                                           
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-floating\">
                                        
                                        {{ form_widget(form.heurer, {'attr': {'class': 'form-select bg-white border-0'}}) }}
                                        
                                                {{ form_errors(form.heurer) }}
                                                
                                    </div>
                                </div>
                                
                                
                                <div class=\"col-12\">
                                {{ form_row(form._token) }}
                                    <button class=\"btn btn-primary text-white w-100 py-3\" type=\"submit\">Réserver</button>
                                    {{ form_end(form) }}
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
{% endblock %}
", "reservationactivite/edit.html.twig", "C:\\Users\\Rania\\Desktop\\gesportWeb\\templates\\reservationactivite\\edit.html.twig");
    }
}