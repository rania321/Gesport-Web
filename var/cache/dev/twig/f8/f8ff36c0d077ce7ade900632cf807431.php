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

/* reservationactivite/editBack.html.twig */
class __TwigTemplate_3ea86d8f46d6f7e551fdfc5c25b54cb4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationactivite/editBack.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationactivite/editBack.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "reservationactivite/editBack.html.twig", 1);
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

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "<div class=\"content-wrapper\">
<div class=\"col-md-6 grid-margin stretch-card\">
              <div class=\"card\">
                <div class=\"card-body\">
                  <h4 class=\"card-title\">Formulaire de modification</h4>
                  <p class=\"card-description\">
                    Modifier cette réservation
                  </p>
                  ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                  <form class=\"forms-sample\">
                    <div class=\"form-group\">
                      <label for=\"exampleInputUsername1\">Activite</label>
                      ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "ida", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                      <dd class=\"col-sm-9\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservationactivite"]) || array_key_exists("reservationactivite", $context) ? $context["reservationactivite"] : (function () { throw new RuntimeError('Variable "reservationactivite" does not exist.', 20, $this->source); })()), "ida", [], "any", false, false, false, 20), "noma", [], "any", false, false, false, 20), "html", null, true);
        echo "</dd>
                    </div>
                     <div class=\"form-group\">
                      <label for=\"exampleInputEmail1\">User</label>
                      <dd class=\"col-sm-9\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservationactivite"]) || array_key_exists("reservationactivite", $context) ? $context["reservationactivite"] : (function () { throw new RuntimeError('Variable "reservationactivite" does not exist.', 24, $this->source); })()), "idu", [], "any", false, false, false, 24), "prenomu", [], "any", false, false, false, 24), "html", null, true);
        echo "</dd>
                    </div> 
                    <div class=\"form-group\">
                      <label for=\"exampleInputPassword1\">Date</label>
                      ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "datedebutr", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                      <div class=\"text-danger\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "datedebutr", [], "any", false, false, false, 29), 'errors');
        echo "</div>
                      
                    </div>
                    <div class=\"form-group\">
                      <label>Heure</label>
                      ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "heurer", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                      <div class=\"text-danger\">";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "heurer", [], "any", false, false, false, 35), 'errors');
        echo "</div>
                      
                    </div>
                    <div class=\"form-group\">
                      <label for=\"exampleInputConfirmPassword1\">Statut</label>
                      ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "statutr", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                      <div class=\"text-danger\">";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "statutr", [], "any", false, false, false, 41), 'errors');
        echo "</div>
                      
                    </div>
                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "_token", [], "any", false, false, false, 44), 'row');
        echo "
                    <button type=\"submit\" class=\"btn btn-primary me-2\">Modifier</button>
                    
                    <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservationactivite_indexBack");
        echo "\" class=\"btn btn-light\">La liste</a>
                    ";
        // line 48
        echo twig_include($this->env, $context, "reservationactivite/_delete_form.html.twig");
        echo "
                  </form>
                  ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'form_end');
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
        return "reservationactivite/editBack.html.twig";
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
        return array (  172 => 50,  167 => 48,  163 => 47,  157 => 44,  151 => 41,  147 => 40,  139 => 35,  135 => 34,  127 => 29,  123 => 28,  116 => 24,  109 => 20,  105 => 19,  98 => 15,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}Edit Reservationactivite{% endblock %}


{% block content %}
<div class=\"content-wrapper\">
<div class=\"col-md-6 grid-margin stretch-card\">
              <div class=\"card\">
                <div class=\"card-body\">
                  <h4 class=\"card-title\">Formulaire de modification</h4>
                  <p class=\"card-description\">
                    Modifier cette réservation
                  </p>
                  {{ form_start(form,{attr:{novalidate:'novalidate'}}) }}
                  <form class=\"forms-sample\">
                    <div class=\"form-group\">
                      <label for=\"exampleInputUsername1\">Activite</label>
                      {{ form_widget(form.ida, {'attr': {'class': 'form-control'}}) }}
                      <dd class=\"col-sm-9\">{{ reservationactivite.ida.noma }}</dd>
                    </div>
                     <div class=\"form-group\">
                      <label for=\"exampleInputEmail1\">User</label>
                      <dd class=\"col-sm-9\">{{ reservationactivite.idu.prenomu }}</dd>
                    </div> 
                    <div class=\"form-group\">
                      <label for=\"exampleInputPassword1\">Date</label>
                      {{ form_widget(form.datedebutr, {'attr': {'class': 'form-control'}}) }}
                      <div class=\"text-danger\">{{ form_errors(form.datedebutr) }}</div>
                      
                    </div>
                    <div class=\"form-group\">
                      <label>Heure</label>
                      {{ form_widget(form.heurer, {'attr': {'class': 'form-control'}}) }}
                      <div class=\"text-danger\">{{ form_errors(form.heurer) }}</div>
                      
                    </div>
                    <div class=\"form-group\">
                      <label for=\"exampleInputConfirmPassword1\">Statut</label>
                      {{ form_widget(form.statutr, {'attr': {'class': 'form-control'}}) }}
                      <div class=\"text-danger\">{{ form_errors(form.statutr) }}</div>
                      
                    </div>
                    {{ form_row(form._token) }}
                    <button type=\"submit\" class=\"btn btn-primary me-2\">Modifier</button>
                    
                    <a href=\"{{ path('app_reservationactivite_indexBack') }}\" class=\"btn btn-light\">La liste</a>
                    {{ include('reservationactivite/_delete_form.html.twig') }}
                  </form>
                  {{ form_end(form) }}
                </div>
              </div>
            </div>
            </div>


    
{% endblock %}", "reservationactivite/editBack.html.twig", "C:\\Users\\Rania\\Desktop\\gesportWeb\\templates\\reservationactivite\\editBack.html.twig");
    }
}
