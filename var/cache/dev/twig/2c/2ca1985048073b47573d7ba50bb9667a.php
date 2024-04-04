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

/* activite/indexBack.html.twig */
class __TwigTemplate_1436a77965574ae1a72f0b9fbfc48976 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite/indexBack.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite/indexBack.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "activite/indexBack.html.twig", 1);
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

        echo "Activite index";
        
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
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../reservationactivite/back\">Réservations</a></li>
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
        echo "<div class=\"content-wrapper\">
<div class=\"col-lg-12 grid-margin stretch-card\">
<div class=\"card\">
<div class=\"card-body\">
    <h4 class=\"card-title\">Activités</h4>
    <a href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_new");
        echo "\" class=\"btn btn-primary btn-rounded btn-fw\">Ajouter Activité</a>
<div class=\"table-responsive\">
    <table class=\"table table-striped\">
        <thead>
            <tr>
                
                <th>Nom</th>
                <th>Type</th>
                <th>Disponibilité</th>
                <th>Description</th>
                <th>Image</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activites"]) || array_key_exists("activites", $context) ? $context["activites"] : (function () { throw new RuntimeError('Variable "activites" does not exist.', 120, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
            // line 121
            echo "            <tr>
                
                <td>";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "noma", [], "any", false, false, false, 123), "html", null, true);
            echo "</td>
                <td>";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "typea", [], "any", false, false, false, 124), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 126
            if ((twig_get_attribute($this->env, $this->source, $context["activite"], "dispoa", [], "any", false, false, false, 126) == "Disponible")) {
                // line 127
                echo "                            <span class=\"badge badge-success\">Disponible</span>
                     ";
            } else {
                // line 129
                echo "                            <span class=\"badge badge-danger\">Non disponible</span>
                     ";
            }
            // line 131
            echo "                </td>
                
                <td>";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "descria", [], "any", false, false, false, 133), "html", null, true);
            echo "</td>
                <td><img src=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["activite"], "imagea", [], "any", false, false, false, 134))), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "noma", [], "any", false, false, false, 134), "html", null, true);
            echo "\"></td>
                <td>
                <div class=\"d-flex\">
                    <a href=\"";
            // line 137
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_edit", ["ida" => twig_get_attribute($this->env, $this->source, $context["activite"], "ida", [], "any", false, false, false, 137)]), "html", null, true);
            echo "\" class=\"btn btn-warning btn-sm\">Modifier</a>
                    ";
            // line 138
            echo twig_include($this->env, $context, "activite/_delete_form.html.twig");
            echo "
                </div>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 143
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "        </tbody>
    </table>

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
        return "activite/indexBack.html.twig";
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
        return array (  314 => 147,  305 => 143,  287 => 138,  283 => 137,  275 => 134,  271 => 133,  267 => 131,  263 => 129,  259 => 127,  257 => 126,  252 => 124,  248 => 123,  244 => 121,  226 => 120,  208 => 105,  201 => 100,  191 => 99,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}Activite index{% endblock %}
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
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../reservationactivite/back\">Réservations</a></li>
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
<div class=\"col-lg-12 grid-margin stretch-card\">
<div class=\"card\">
<div class=\"card-body\">
    <h4 class=\"card-title\">Activités</h4>
    <a href=\"{{ path('app_activite_new') }}\" class=\"btn btn-primary btn-rounded btn-fw\">Ajouter Activité</a>
<div class=\"table-responsive\">
    <table class=\"table table-striped\">
        <thead>
            <tr>
                
                <th>Nom</th>
                <th>Type</th>
                <th>Disponibilité</th>
                <th>Description</th>
                <th>Image</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for activite in activites %}
            <tr>
                
                <td>{{ activite.noma }}</td>
                <td>{{ activite.typea }}</td>
                <td>
                    {% if activite.dispoa == 'Disponible' %}
                            <span class=\"badge badge-success\">Disponible</span>
                     {% else %}
                            <span class=\"badge badge-danger\">Non disponible</span>
                     {% endif %}
                </td>
                
                <td>{{ activite.descria }}</td>
                <td><img src=\"{{ asset('uploads/' ~ activite.imagea) }}\" class=\"card-img-top\" alt=\"{{ activite.noma }}\"></td>
                <td>
                <div class=\"d-flex\">
                    <a href=\"{{ path('app_activite_edit', {'ida': activite.ida}) }}\" class=\"btn btn-warning btn-sm\">Modifier</a>
                    {{ include('activite/_delete_form.html.twig') }}
                </div>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

</div>
</div>
</div>
</div>
</div>
{% endblock %}", "activite/indexBack.html.twig", "C:\\Users\\Rania\\Desktop\\gesportWeb\\templates\\activite\\indexBack.html.twig");
    }
}
