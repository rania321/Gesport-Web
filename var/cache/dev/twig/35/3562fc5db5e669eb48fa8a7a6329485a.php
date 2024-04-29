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

/* reservationactivite/indexBack.html.twig */
class __TwigTemplate_a76741dde4ee3c0c0fdf0c0f18d3e655 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationactivite/indexBack.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationactivite/indexBack.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "reservationactivite/indexBack.html.twig", 1);
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

        echo "Reservationactivite index";
        
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
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../activite/back\">Activité</a></li>
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

    // line 101
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 102
        echo "<div class=\"content-wrapper\">
<a href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservationactivite_archive");
        echo "\" class=\"btn btn-primary btn-rounded btn-fw\">Archive</a>
    <div class=\"col-lg-12 grid-margin stretch-card\">
    
        <div class=\"card\">
            <div class=\"card-body\">
                <h4 class=\"card-title\">Reservations</h4>
                <div class=\"table-responsive\">
                    <div class=\"ms-md-auto pe-md-3 d-flex align-items-center\">
                        <div class=\"input-group\">
                            <span class=\"input-group-text text-body\"><i class=\"fas fa-search\" aria-hidden=\"true\"></i></span>
                            <input type=\"text\" class=\"form-control\" id=\"searchInput\" placeholder=\"Type here...\">
                        </div>
                    </div>
                    <div id=\"searchResults\"> <!-- Ajout de la zone de résultats de recherche -->
                    <div id=\"tabv\">
                        <table class=\"table table-striped\">
                            <thead>
                                <tr>
                                    <th>Activité</th>
                                    <th>Prénom User</th>
                                    <th>Date</th>
                                    <th>Heure</th>
                                    <th>Statut</th>
                                    <th>actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservationactivites"]) || array_key_exists("reservationactivites", $context) ? $context["reservationactivites"] : (function () { throw new RuntimeError('Variable "reservationactivites" does not exist.', 130, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["reservationactivite"]) {
            // line 131
            echo "                                    <tr>
                                        <td>";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationactivite"], "ida", [], "any", false, false, false, 132), "noma", [], "any", false, false, false, 132), "html", null, true);
            echo "</td>
                                        <td>";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationactivite"], "idu", [], "any", false, false, false, 133), "prenomu", [], "any", false, false, false, 133), "html", null, true);
            echo "</td>
                                        <td>";
            // line 134
            ((twig_get_attribute($this->env, $this->source, $context["reservationactivite"], "datedebutr", [], "any", false, false, false, 134)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservationactivite"], "datedebutr", [], "any", false, false, false, 134), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                        <td>";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservationactivite"], "heurer", [], "any", false, false, false, 135), "html", null, true);
            echo "</td>
                                        <td>
                                            ";
            // line 137
            if ((twig_get_attribute($this->env, $this->source, $context["reservationactivite"], "statutr", [], "any", false, false, false, 137) == "confirmée")) {
                // line 138
                echo "                                                <span class=\"badge badge-success\">Confirmée</span>
                                            ";
            } else {
                // line 140
                echo "                                                <span class=\"badge badge-warning\">En cours</span>
                                            ";
            }
            // line 142
            echo "                                        </td>
                                        <td>
                                            <div class=\"d-flex\">
                                                <a href=\"";
            // line 145
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservationactivite_showBack", ["idr" => twig_get_attribute($this->env, $this->source, $context["reservationactivite"], "idr", [], "any", false, false, false, 145)]), "html", null, true);
            echo "\" class=\"btn btn-info btn-sm\">show</a>
                                                <a href=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservationactivite_editBack", ["idr" => twig_get_attribute($this->env, $this->source, $context["reservationactivite"], "idr", [], "any", false, false, false, 146)]), "html", null, true);
            echo "\" class=\"btn btn-warning btn-sm\">edit</a>
                                                ";
            // line 147
            echo twig_include($this->env, $context, "reservationactivite/_delete_form1.html.twig");
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
            // line 152
            echo "                                    <tr>
                                        <td colspan=\"5\">no records found</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservationactivite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
</div>
<div class=\"statistics-details d-flex align-items-center justify-content-between\">
<div>
    <p class=\"statistics-title\">Nombre total de réservations :</p>
   <h3 class=\"rate-percentage\">";
        // line 169
        echo twig_escape_filter($this->env, (isset($context["nombreReservations"]) || array_key_exists("nombreReservations", $context) ? $context["nombreReservations"] : (function () { throw new RuntimeError('Variable "nombreReservations" does not exist.', 169, $this->source); })()), "html", null, true);
        echo "</h3>
</div>
<div>
    <p class=\"statistics-title\">L'heure la plus populaire des réservations :</p>
   <h3 class=\"rate-percentage\">";
        // line 173
        echo twig_escape_filter($this->env, (isset($context["mostPopularHour"]) || array_key_exists("mostPopularHour", $context) ? $context["mostPopularHour"] : (function () { throw new RuntimeError('Variable "mostPopularHour" does not exist.', 173, $this->source); })()), "html", null, true);
        echo "</h3>
</div>
<div>
    <p class=\"statistics-title\">Le client fidèle :</p>
    ";
        // line 177
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fideleClients"]) || array_key_exists("fideleClients", $context) ? $context["fideleClients"] : (function () { throw new RuntimeError('Variable "fideleClients" does not exist.', 177, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 178
            echo "            <h3 class=\"rate-percentage\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "user", [], "any", false, false, false, 178), "html", null, true);
            echo " </h3>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "  
</div>
</div>
</div>


<!-- Code de l'histogramme des statistiques -->
<div class=\"content-wrapper\">
            <div class=\"col-lg-6 grid-margin stretch-card\">
              <div class=\"card\">
                <div class=\"card-body\">
                  <h4 class=\"card-title\">Les Statuts</h4>
                  <canvas id=\"statistiquesPieChart\" width=\"432\" height=\"432\" style=\"display: block; box-sizing: border-box; height: 432px; width: 432px;\"></canvas>
                  
                </div>
              </div>
            </div>
          </div>

  <!-- Code du pie chart pour les statistiques -->
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var statistiquesData = ";
        // line 203
        echo json_encode((isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 203, $this->source); })()));
        echo ";
        
        var ctx = document.getElementById('statistiquesPieChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['En cours', 'Confirmées'],
                datasets: [{
                    label: 'Nombre de réservations',
                    data: [statistiquesData.en_cours, statistiquesData.confirmées],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    });
</script>




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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reservationactivite/indexBack.html.twig";
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
        return array (  389 => 203,  364 => 180,  355 => 178,  351 => 177,  344 => 173,  337 => 169,  322 => 156,  313 => 152,  295 => 147,  291 => 146,  287 => 145,  282 => 142,  278 => 140,  274 => 138,  272 => 137,  267 => 135,  263 => 134,  259 => 133,  255 => 132,  252 => 131,  234 => 130,  204 => 103,  201 => 102,  191 => 101,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}Reservationactivite index{% endblock %}
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
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../activite/back\">Activité</a></li>
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
<a href=\"{{ path('app_reservationactivite_archive') }}\" class=\"btn btn-primary btn-rounded btn-fw\">Archive</a>
    <div class=\"col-lg-12 grid-margin stretch-card\">
    
        <div class=\"card\">
            <div class=\"card-body\">
                <h4 class=\"card-title\">Reservations</h4>
                <div class=\"table-responsive\">
                    <div class=\"ms-md-auto pe-md-3 d-flex align-items-center\">
                        <div class=\"input-group\">
                            <span class=\"input-group-text text-body\"><i class=\"fas fa-search\" aria-hidden=\"true\"></i></span>
                            <input type=\"text\" class=\"form-control\" id=\"searchInput\" placeholder=\"Type here...\">
                        </div>
                    </div>
                    <div id=\"searchResults\"> <!-- Ajout de la zone de résultats de recherche -->
                    <div id=\"tabv\">
                        <table class=\"table table-striped\">
                            <thead>
                                <tr>
                                    <th>Activité</th>
                                    <th>Prénom User</th>
                                    <th>Date</th>
                                    <th>Heure</th>
                                    <th>Statut</th>
                                    <th>actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for reservationactivite in reservationactivites %}
                                    <tr>
                                        <td>{{ reservationactivite.ida.noma }}</td>
                                        <td>{{ reservationactivite.idu.prenomu }}</td>
                                        <td>{{ reservationactivite.datedebutr ? reservationactivite.datedebutr|date('Y-m-d') : '' }}</td>
                                        <td>{{ reservationactivite.heurer }}</td>
                                        <td>
                                            {% if reservationactivite.statutr == 'confirmée' %}
                                                <span class=\"badge badge-success\">Confirmée</span>
                                            {% else %}
                                                <span class=\"badge badge-warning\">En cours</span>
                                            {% endif %}
                                        </td>
                                        <td>
                                            <div class=\"d-flex\">
                                                <a href=\"{{ path('app_reservationactivite_showBack', {'idr': reservationactivite.idr}) }}\" class=\"btn btn-info btn-sm\">show</a>
                                                <a href=\"{{ path('app_reservationactivite_editBack', {'idr': reservationactivite.idr}) }}\" class=\"btn btn-warning btn-sm\">edit</a>
                                                {{ include('reservationactivite/_delete_form1.html.twig') }}
                                            </div>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"5\">no records found</td>
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
<div class=\"statistics-details d-flex align-items-center justify-content-between\">
<div>
    <p class=\"statistics-title\">Nombre total de réservations :</p>
   <h3 class=\"rate-percentage\">{{ nombreReservations }}</h3>
</div>
<div>
    <p class=\"statistics-title\">L'heure la plus populaire des réservations :</p>
   <h3 class=\"rate-percentage\">{{ mostPopularHour }}</h3>
</div>
<div>
    <p class=\"statistics-title\">Le client fidèle :</p>
    {% for client in fideleClients %}
            <h3 class=\"rate-percentage\">{{ client.user }} </h3>
        {% endfor %}
  
</div>
</div>
</div>


<!-- Code de l'histogramme des statistiques -->
<div class=\"content-wrapper\">
            <div class=\"col-lg-6 grid-margin stretch-card\">
              <div class=\"card\">
                <div class=\"card-body\">
                  <h4 class=\"card-title\">Les Statuts</h4>
                  <canvas id=\"statistiquesPieChart\" width=\"432\" height=\"432\" style=\"display: block; box-sizing: border-box; height: 432px; width: 432px;\"></canvas>
                  
                </div>
              </div>
            </div>
          </div>

  <!-- Code du pie chart pour les statistiques -->
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var statistiquesData = {{ statistiques|json_encode|raw }};
        
        var ctx = document.getElementById('statistiquesPieChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['En cours', 'Confirmées'],
                datasets: [{
                    label: 'Nombre de réservations',
                    data: [statistiquesData.en_cours, statistiquesData.confirmées],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    });
</script>




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
{% endblock %}", "reservationactivite/indexBack.html.twig", "C:\\Users\\Rania\\Desktop\\gesportWeb\\templates\\reservationactivite\\indexBack.html.twig");
    }
}
