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
<div class=\"ms-md-auto pe-md-3 d-flex align-items-center\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" id=\"searchInput\" placeholder=\"Type here...\">
                        </div>
                    </div>
 <div class=\"tri-dropdown\" >
    <select onchange=\"handleChange(this)\" class=\"btn btn-primary dropdown-toggle\">
        <option value=\"\">Trier par...</option>
        <option value=\"noma_asc\">Nom Ascendant</option>
        <option value=\"noma_desc\">Nom Descendant</option>
        <option value=\"dispoa_asc\">Disponibilté Ascendant</option>
        <option value=\"dispoa_desc\">Disponibilité Descendant</option>
        <option value=\"descria_asc\">Description Ascendant</option>
        <option value=\"descria_desc\">Description Descendant</option>
    </select>
</div>

                    <div id=\"searchResults\"> 
<div id=\"tabv\">
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
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activites"]) || array_key_exists("activites", $context) ? $context["activites"] : (function () { throw new RuntimeError('Variable "activites" does not exist.', 139, $this->source); })()));
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
            // line 140
            echo "            <tr>
                <td>";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "noma", [], "any", false, false, false, 141), "html", null, true);
            echo "</td>
                <td>";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "typea", [], "any", false, false, false, 142), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 144
            if ((twig_get_attribute($this->env, $this->source, $context["activite"], "dispoa", [], "any", false, false, false, 144) == "Disponible")) {
                // line 145
                echo "                            <span class=\"badge badge-success\">Disponible</span>
                     ";
            } else {
                // line 147
                echo "                            <span class=\"badge badge-danger\">Non disponible</span>
                     ";
            }
            // line 149
            echo "                </td>
                
                <td>";
            // line 151
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "descria", [], "any", false, false, false, 151), "html", null, true);
            echo "</td>
                <td><img src=\"";
            // line 152
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["activite"], "imagea", [], "any", false, false, false, 152))), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "noma", [], "any", false, false, false, 152), "html", null, true);
            echo "\"></td>
                <td>
                <div class=\"d-flex\">
                    <a href=\"";
            // line 155
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_edit", ["ida" => twig_get_attribute($this->env, $this->source, $context["activite"], "ida", [], "any", false, false, false, 155)]), "html", null, true);
            echo "\" class=\"btn btn-warning btn-sm\">Modifier</a>
                    ";
            // line 156
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
            // line 161
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "        </tbody>
    </table>

</div>
</div>
</div>
</div>
</div>
</div>
</div>

<script>
document.addEventListener(\"DOMContentLoaded\", function() {
    var searchInput = document.getElementById('searchInput');
    var tabv = document.getElementById('tabv');
    var searchResults = document.getElementById('searchResults');
    var tableHead = tabv.querySelector('thead').outerHTML;

    searchInput.addEventListener('input', function() {
        var searchTerm = searchInput.value.trim().toLowerCase();
        var matchedReserv = [];

        // Sélectionnez toutes les lignes du tableau
        var rows = tabv.querySelectorAll('tbody tr');

        rows.forEach(function(row) {
            var activityName = row.querySelector('td:first-child').textContent.toLowerCase();
            var userName = row.querySelector('td:nth-child(2)').textContent.toLowerCase();

            if (activityName.includes(searchTerm) || userName.includes(searchTerm)) {
                matchedReserv.push(row.outerHTML);
            }
        });

        // Affichez les résultats de la recherche avec la classe de table appropriée
        if (matchedReserv.length > 0) {
            searchResults.innerHTML = '<table class=\"table table-striped\">' + tableHead + '<tbody>' + matchedReserv.join('') + '</tbody></table>';
        } else {
            // Supprimez le contenu de la zone d'affichage des résultats s'il n'y a aucun résultat trouvé
            searchResults.innerHTML = '';
        }
    });
});

</script>

<script>
function handleChange(select) {
    var selectedOption = select.value;
    if (selectedOption !== \"\") {
        var tri = \"\";
        var order = \"\";

        switch (selectedOption) {
            case \"noma_asc\":
                tri = \"noma\";
                order = \"asc\";
                break;
            case \"noma_desc\":
                tri = \"noma\";
                order = \"desc\";
                break;
            case \"dispoa_asc\":
                tri = \"dispoa\";
                order = \"asc\";
                break;
            case \"dispoa_desc\":
                tri = \"dispoa\";
                order = \"desc\";
                break;
            case \"descria_asc\":
                tri = \"descria\";
                order = \"asc\";
                break;
            case \"descria_desc\":
                tri = \"descria\";
                order = \"desc\";
                break;
            default:
                break;
        }

        // Redirection vers la route avec les paramètres de tri
        window.location.href = \"";
        // line 248
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_indexBack");
        echo "\" + \"?tri=\" + tri + \"&order=\" + order;
    }
}
</script>

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
        return array (  417 => 248,  332 => 165,  323 => 161,  305 => 156,  301 => 155,  293 => 152,  289 => 151,  285 => 149,  281 => 147,  277 => 145,  275 => 144,  270 => 142,  266 => 141,  263 => 140,  245 => 139,  208 => 105,  201 => 100,  191 => 99,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
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
<div class=\"ms-md-auto pe-md-3 d-flex align-items-center\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" id=\"searchInput\" placeholder=\"Type here...\">
                        </div>
                    </div>
 <div class=\"tri-dropdown\" >
    <select onchange=\"handleChange(this)\" class=\"btn btn-primary dropdown-toggle\">
        <option value=\"\">Trier par...</option>
        <option value=\"noma_asc\">Nom Ascendant</option>
        <option value=\"noma_desc\">Nom Descendant</option>
        <option value=\"dispoa_asc\">Disponibilté Ascendant</option>
        <option value=\"dispoa_desc\">Disponibilité Descendant</option>
        <option value=\"descria_asc\">Description Ascendant</option>
        <option value=\"descria_desc\">Description Descendant</option>
    </select>
</div>

                    <div id=\"searchResults\"> 
<div id=\"tabv\">
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
</div>
</div>

<script>
document.addEventListener(\"DOMContentLoaded\", function() {
    var searchInput = document.getElementById('searchInput');
    var tabv = document.getElementById('tabv');
    var searchResults = document.getElementById('searchResults');
    var tableHead = tabv.querySelector('thead').outerHTML;

    searchInput.addEventListener('input', function() {
        var searchTerm = searchInput.value.trim().toLowerCase();
        var matchedReserv = [];

        // Sélectionnez toutes les lignes du tableau
        var rows = tabv.querySelectorAll('tbody tr');

        rows.forEach(function(row) {
            var activityName = row.querySelector('td:first-child').textContent.toLowerCase();
            var userName = row.querySelector('td:nth-child(2)').textContent.toLowerCase();

            if (activityName.includes(searchTerm) || userName.includes(searchTerm)) {
                matchedReserv.push(row.outerHTML);
            }
        });

        // Affichez les résultats de la recherche avec la classe de table appropriée
        if (matchedReserv.length > 0) {
            searchResults.innerHTML = '<table class=\"table table-striped\">' + tableHead + '<tbody>' + matchedReserv.join('') + '</tbody></table>';
        } else {
            // Supprimez le contenu de la zone d'affichage des résultats s'il n'y a aucun résultat trouvé
            searchResults.innerHTML = '';
        }
    });
});

</script>

<script>
function handleChange(select) {
    var selectedOption = select.value;
    if (selectedOption !== \"\") {
        var tri = \"\";
        var order = \"\";

        switch (selectedOption) {
            case \"noma_asc\":
                tri = \"noma\";
                order = \"asc\";
                break;
            case \"noma_desc\":
                tri = \"noma\";
                order = \"desc\";
                break;
            case \"dispoa_asc\":
                tri = \"dispoa\";
                order = \"asc\";
                break;
            case \"dispoa_desc\":
                tri = \"dispoa\";
                order = \"desc\";
                break;
            case \"descria_asc\":
                tri = \"descria\";
                order = \"asc\";
                break;
            case \"descria_desc\":
                tri = \"descria\";
                order = \"desc\";
                break;
            default:
                break;
        }

        // Redirection vers la route avec les paramètres de tri
        window.location.href = \"{{ path('app_activite_indexBack') }}\" + \"?tri=\" + tri + \"&order=\" + order;
    }
}
</script>

{% endblock %}", "activite/indexBack.html.twig", "C:\\Users\\Rania\\Desktop\\gesportWeb\\templates\\activite\\indexBack.html.twig");
    }
}
