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

/* activite/new.html.twig */
class __TwigTemplate_e21a9d62a27e67b03ac49bf9b853af2d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sidebar' => [$this, 'block_sidebar'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite/new.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "activite/new.html.twig", 1);
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

        echo "New Activite";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "    <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
  <ul class=\"nav\">
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"../baseBack\">
        <i class=\"mdi mdi-grid-large menu-icon\"></i>
        <span class=\"menu-title\">Dashboard</span>
      </a>
    </li>
    
    <li class=\"nav-item active\">
      <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
        <i class=\"menu-icon mdi mdi-floor-plan\"></i>
        <span class=\"menu-title\">Activités</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse\" id=\"ui-basic\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"activite/back\">Activité</a></li>
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../pages/ui-features/dropdowns.html\">Réservations</a></li>
        </ul>
      </div>
    </li>
    
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#form-elements\" aria-expanded=\"false\" aria-controls=\"form-elements\">
        <i class=\"menu-icon mdi mdi-card-text-outline\"></i>
        <span class=\"menu-title\">Buvette</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse\" id=\"form-elements\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"../pages/forms/basic_elements.html\">Produits</a></li>
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../pages/ui-features/dropdowns.html\">Ventes</a></li>
        </ul>
      </div>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#charts\" aria-expanded=\"false\" aria-controls=\"charts\">
        <i class=\"menu-icon mdi mdi-chart-line\"></i>
        <span class=\"menu-title\">Charts</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse\" id=\"charts\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../pages/charts/chartjs.html\">ChartJs</a></li>
        </ul>
      </div>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#tables\" aria-expanded=\"false\" aria-controls=\"tables\">
        <i class=\"menu-icon mdi mdi-table\"></i>
        <span class=\"menu-title\">Tournois</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse\" id=\"tables\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../pages/tables/basic-table.html\">Equipes</a></li>
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../pages/tables/basic-table.html\">Tournois</a></li>
        </ul>
      </div>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#icons\" aria-expanded=\"false\" aria-controls=\"icons\">
        <i class=\"menu-icon mdi mdi-layers-outline\"></i>
        <span class=\"menu-title\">Réclamations</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse\" id=\"icons\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../pages/icons/mdi.html\">Réclamations</a></li>
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../pages/icons/mdi.html\">Réponses</a></li>
        </ul>
      </div>
    </li>
    
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#auth\" aria-expanded=\"false\" aria-controls=\"auth\">
        <i class=\"menu-icon mdi mdi-account-circle-outline\"></i>
        <span class=\"menu-title\">Users</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse\" id=\"auth\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../pages/samples/login.html\"> Liste Users</a></li>
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../pages/samples/login.html\"> Dossiers Médicaux</a></li>
        </ul>
      </div>
    </li>
    
    
  </ul>
</nav>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 99
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 100
        echo "
<div class=\"content-wrapper\">
<div class=\"col-md-6 grid-margin stretch-card\">
              <div class=\"card\">
                <div class=\"card-body\">
                  <h4 class=\"card-title\">Formulaire d'ajout</h4>
                  <p class=\"card-description\">
                    Ajouter une nouvelle activité
                  </p>
                  
                  ";
        // line 110
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                  <form class=\"forms-sample\">
                    <div class=\"form-group\">
                      <label for=\"exampleInputUsername1\">Nom</label>
                      ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "noma", [], "any", false, false, false, 114), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                      <div class=\"text-danger\">";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "noma", [], "any", false, false, false, 115), 'errors');
        echo "</div>
                    </div>
                    <div class=\"form-group\">
                      <label for=\"exampleInputEmail1\">Type</label>
                      ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "typea", [], "any", false, false, false, 119), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                      <div class=\"text-danger\">";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "typea", [], "any", false, false, false, 120), 'errors');
        echo "</div>
                    </div>
                    <div class=\"form-group\">
                      <label for=\"exampleInputPassword1\">Disponibilité</label>
                      ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "dispoa", [], "any", false, false, false, 124), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                      <div class=\"text-danger\">";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "dispoa", [], "any", false, false, false, 125), 'errors');
        echo "</div>
                    </div>
                    <div class=\"form-group\">
                      <label for=\"exampleInputConfirmPassword1\">Description</label>
                      ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "descria", [], "any", false, false, false, 129), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                      <div class=\"text-danger\">";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "descria", [], "any", false, false, false, 130), 'errors');
        echo "</div>
                    </div>
                    <div class=\"form-group\">
                      <label for=\"exampleInputConfirmPassword1\">Image</label>
                      ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "imagea", [], "any", false, false, false, 134), 'widget', ["attr" => ["class" => "form-control", "accept" => "image/*"]]);
        echo "
                    </div>
                    ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "_token", [], "any", false, false, false, 136), 'row');
        echo "
                    <button type=\"submit\" class=\"btn btn-primary me-2\">Ajouter</button>
                    <a href=\"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_indexBack");
        echo "\" class=\"btn btn-light\">La liste</a>
                    </form>
                    ";
        // line 140
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), 'form_end');
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
        return "activite/new.html.twig";
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
        return array (  279 => 140,  274 => 138,  269 => 136,  264 => 134,  257 => 130,  253 => 129,  246 => 125,  242 => 124,  235 => 120,  231 => 119,  224 => 115,  220 => 114,  213 => 110,  201 => 100,  191 => 99,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}New Activite{% endblock %}
{% block sidebar %}
    <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
  <ul class=\"nav\">
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"../baseBack\">
        <i class=\"mdi mdi-grid-large menu-icon\"></i>
        <span class=\"menu-title\">Dashboard</span>
      </a>
    </li>
    
    <li class=\"nav-item active\">
      <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
        <i class=\"menu-icon mdi mdi-floor-plan\"></i>
        <span class=\"menu-title\">Activités</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse\" id=\"ui-basic\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"activite/back\">Activité</a></li>
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../pages/ui-features/dropdowns.html\">Réservations</a></li>
        </ul>
      </div>
    </li>
    
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#form-elements\" aria-expanded=\"false\" aria-controls=\"form-elements\">
        <i class=\"menu-icon mdi mdi-card-text-outline\"></i>
        <span class=\"menu-title\">Buvette</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse\" id=\"form-elements\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"../pages/forms/basic_elements.html\">Produits</a></li>
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../pages/ui-features/dropdowns.html\">Ventes</a></li>
        </ul>
      </div>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#charts\" aria-expanded=\"false\" aria-controls=\"charts\">
        <i class=\"menu-icon mdi mdi-chart-line\"></i>
        <span class=\"menu-title\">Charts</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse\" id=\"charts\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../pages/charts/chartjs.html\">ChartJs</a></li>
        </ul>
      </div>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#tables\" aria-expanded=\"false\" aria-controls=\"tables\">
        <i class=\"menu-icon mdi mdi-table\"></i>
        <span class=\"menu-title\">Tournois</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse\" id=\"tables\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../pages/tables/basic-table.html\">Equipes</a></li>
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../pages/tables/basic-table.html\">Tournois</a></li>
        </ul>
      </div>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#icons\" aria-expanded=\"false\" aria-controls=\"icons\">
        <i class=\"menu-icon mdi mdi-layers-outline\"></i>
        <span class=\"menu-title\">Réclamations</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse\" id=\"icons\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../pages/icons/mdi.html\">Réclamations</a></li>
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../pages/icons/mdi.html\">Réponses</a></li>
        </ul>
      </div>
    </li>
    
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#auth\" aria-expanded=\"false\" aria-controls=\"auth\">
        <i class=\"menu-icon mdi mdi-account-circle-outline\"></i>
        <span class=\"menu-title\">Users</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse\" id=\"auth\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../pages/samples/login.html\"> Liste Users</a></li>
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../pages/samples/login.html\"> Dossiers Médicaux</a></li>
        </ul>
      </div>
    </li>
    
    
  </ul>
</nav>
{% endblock %}

{% block content %}

<div class=\"content-wrapper\">
<div class=\"col-md-6 grid-margin stretch-card\">
              <div class=\"card\">
                <div class=\"card-body\">
                  <h4 class=\"card-title\">Formulaire d'ajout</h4>
                  <p class=\"card-description\">
                    Ajouter une nouvelle activité
                  </p>
                  
                  {{ form_start(form,{'attr':{'novalidate':'novalidate'}}) }}
                  <form class=\"forms-sample\">
                    <div class=\"form-group\">
                      <label for=\"exampleInputUsername1\">Nom</label>
                      {{ form_widget(form.noma, {'attr': {'class': 'form-control'}}) }}
                      <div class=\"text-danger\">{{ form_errors(form.noma) }}</div>
                    </div>
                    <div class=\"form-group\">
                      <label for=\"exampleInputEmail1\">Type</label>
                      {{ form_widget(form.typea, {'attr': {'class': 'form-control'}}) }}
                      <div class=\"text-danger\">{{ form_errors(form.typea) }}</div>
                    </div>
                    <div class=\"form-group\">
                      <label for=\"exampleInputPassword1\">Disponibilité</label>
                      {{ form_widget(form.dispoa, {'attr': {'class': 'form-control'}}) }}
                      <div class=\"text-danger\">{{ form_errors(form.dispoa) }}</div>
                    </div>
                    <div class=\"form-group\">
                      <label for=\"exampleInputConfirmPassword1\">Description</label>
                      {{ form_widget(form.descria, {'attr': {'class': 'form-control'}}) }}
                      <div class=\"text-danger\">{{ form_errors(form.descria) }}</div>
                    </div>
                    <div class=\"form-group\">
                      <label for=\"exampleInputConfirmPassword1\">Image</label>
                      {{ form_widget(form.imagea, {'attr': {'class': 'form-control','accept':'image/*'}}) }}
                    </div>
                    {{ form_row(form._token) }}
                    <button type=\"submit\" class=\"btn btn-primary me-2\">Ajouter</button>
                    <a href=\"{{ path('app_activite_indexBack') }}\" class=\"btn btn-light\">La liste</a>
                    </form>
                    {{ form_end(form) }}
                  
                </div>
              </div>
            </div>
            </div>
{% endblock %}", "activite/new.html.twig", "C:\\Users\\Rania\\Desktop\\gesportWeb\\templates\\activite\\new.html.twig");
    }
}
