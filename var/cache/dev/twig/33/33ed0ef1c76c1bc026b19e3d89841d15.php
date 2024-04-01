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

/* activite/index.html.twig */
class __TwigTemplate_a5efe53a64e58c33a570817a53fd259c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "activite/index.html.twig", 1);
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
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "<div class=\"container-fluid bg-primary px-5 d-none d-lg-block\">
            <div class=\"row gx-0\">
                <div class=\"col-lg-8 text-center text-lg-start mb-2 mb-lg-0\">
                    <div class=\"d-inline-flex align-items-center\" style=\"height: 45px;\">
                        <a class=\"btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2\" href=\"\"><i class=\"fab fa-twitter fw-normal\"></i></a>
                        <a class=\"btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2\" href=\"\"><i class=\"fab fa-facebook-f fw-normal\"></i></a>
                        <a class=\"btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2\" href=\"\"><i class=\"fab fa-linkedin-in fw-normal\"></i></a>
                        <a class=\"btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2\" href=\"\"><i class=\"fab fa-instagram fw-normal\"></i></a>
                        <a class=\"btn btn-sm btn-outline-light btn-sm-square rounded-circle\" href=\"\"><i class=\"fab fa-youtube fw-normal\"></i></a>
                    </div>
                </div>
                <div class=\"col-lg-4 text-center text-lg-end\">
                    <div class=\"d-inline-flex align-items-center\" style=\"height: 45px;\">
                        <a href=\"#\"><small class=\"me-3 text-light\"><i class=\"fa fa-user me-2\"></i>Register</small></a>
                        <a href=\"#\"><small class=\"me-3 text-light\"><i class=\"fa fa-sign-in-alt me-2\"></i>Login</small></a>
                        <div class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle text-light\" data-bs-toggle=\"dropdown\"><small><i class=\"fa fa-home me-2\"></i> My Dashboard</small></a>
                            <div class=\"dropdown-menu rounded\">
                                <a href=\"#\" class=\"dropdown-item\"><i class=\"fas fa-user-alt me-2\"></i> My Profile</a>
                                <a href=\"#\" class=\"dropdown-item\"><i class=\"fas fa-comment-alt me-2\"></i> Inbox</a>
                                <a href=\"#\" class=\"dropdown-item\"><i class=\"fas fa-bell me-2\"></i> Notifications</a>
                                <a href=\"#\" class=\"dropdown-item\"><i class=\"fas fa-cog me-2\"></i> Account Settings</a>
                                <a href=\"#\" class=\"dropdown-item\"><i class=\"fas fa-power-off me-2\"></i> Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class=\"container-fluid position-relative p-0\">
            <nav class=\"navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0\">
                <a href=\"\" class=\"navbar-brand p-0\">
                    <h1 class=\"m-0\"><i class=\"fa fa-map-marker-alt me-3\"></i>GeSport</h1>
                    <!-- <img src=\"img/logo.png\" alt=\"Logo\"> -->
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                    <span class=\"fa fa-bars\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    <div class=\"navbar-nav ms-auto py-0\">
                        <a href=\"../base\" class=\"nav-item nav-link \">Accueil</a>
                        <a href=\"about.html\" class=\"nav-item nav-link\">Compte</a>
                        <a href=\"activite\" class=\"nav-item nav-link active\">Activité</a>
                        <a href=\"packages.html\" class=\"nav-item nav-link\">Buvette</a>
                        <a href=\"blog.html\" class=\"nav-item nav-link\">Tournoi</a>
                        <div class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pages</a>
                            <div class=\"dropdown-menu m-0\">
                                <a href=\"destination.html\" class=\"dropdown-item\">Destination</a>
                                <a href=\"tour.html\" class=\"dropdown-item\">Explore Tour</a>
                                <a href=\"booking.html\" class=\"dropdown-item\">Travel Booking</a>
                                <a href=\"gallery.html\" class=\"dropdown-item\">Our Gallery</a>
                                <a href=\"guides.html\" class=\"dropdown-item\">Travel Guides</a>
                                <a href=\"testimonial.html\" class=\"dropdown-item\">Testimonial</a>
                                <a href=\"404.html\" class=\"dropdown-item\">404 Page</a>
                            </div>
                        </div>
                        <a href=\"contact.html\" class=\"nav-item nav-link\">Reclamation</a>
                    </div>
                    <a href=\"\" class=\"btn btn-primary rounded-pill py-2 px-4 ms-lg-4\">Book Now</a>
                </div>
            </nav>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 71
    public function block_carousel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        // line 72
        echo "<div class=\"container-fluid bg-breadcrumb\">
            <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
                <h3 class=\"text-white display-3 mb-4\">Nos Activités</h3>
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

    // line 82
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 83
        echo "   <h1>     </h1> 
<a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservationactivite_new");
        echo "\" class=\"btn btn-primary rounded-pill py-2 px-4\">Réserver</a>
    <div class=\"row\">
        ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activites"]) || array_key_exists("activites", $context) ? $context["activites"] : (function () { throw new RuntimeError('Variable "activites" does not exist.', 86, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
            // line 87
            echo "            <div class=\"col-md-4\">
                <div class=\"card mb-4\">
                    <div class=\"blog-item\">
                     <div class=\"blog-img\">
                        <div class=\"blog-img-inner\">     
                            <img src=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["activite"], "imagea", [], "any", false, false, false, 92))), "html", null, true);
            echo "\" class=\"img-fluid w-100 rounded-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "noma", [], "any", false, false, false, 92), "html", null, true);
            echo "\">
                            <div class=\"blog-icon\">
                                        <a href=\"#\" class=\"my-auto\"><i class=\"fas fa-link fa-2x text-white\"></i></a>
                            </div>
                         </div>
                    </div>   
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "noma", [], "any", false, false, false, 99), "html", null, true);
            echo "</h5>
                        <p class=\"card-text\">";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "descria", [], "any", false, false, false, 100), "html", null, true);
            echo "</p>
                        <a href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_show", ["ida" => twig_get_attribute($this->env, $this->source, $context["activite"], "ida", [], "any", false, false, false, 101)]), "html", null, true);
            echo "\" class=\"btn btn-primary rounded-pill py-2 px-4\">Voir</a>
                    <!--    <a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservationactivite_new", ["ida" => twig_get_attribute($this->env, $this->source, $context["activite"], "ida", [], "any", false, false, false, 102)]), "html", null, true);
            echo "\" class=\"btn btn-primary rounded-pill py-2 px-4\">Réserver</a>  -->
                    </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 108
            echo "            <div class=\"col\">
                <p>No records found</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "activite/index.html.twig";
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
        return array (  268 => 112,  259 => 108,  248 => 102,  244 => 101,  240 => 100,  236 => 99,  224 => 92,  217 => 87,  212 => 86,  207 => 84,  204 => 83,  194 => 82,  175 => 72,  165 => 71,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Activite index{% endblock %}
{% block header %}
<div class=\"container-fluid bg-primary px-5 d-none d-lg-block\">
            <div class=\"row gx-0\">
                <div class=\"col-lg-8 text-center text-lg-start mb-2 mb-lg-0\">
                    <div class=\"d-inline-flex align-items-center\" style=\"height: 45px;\">
                        <a class=\"btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2\" href=\"\"><i class=\"fab fa-twitter fw-normal\"></i></a>
                        <a class=\"btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2\" href=\"\"><i class=\"fab fa-facebook-f fw-normal\"></i></a>
                        <a class=\"btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2\" href=\"\"><i class=\"fab fa-linkedin-in fw-normal\"></i></a>
                        <a class=\"btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2\" href=\"\"><i class=\"fab fa-instagram fw-normal\"></i></a>
                        <a class=\"btn btn-sm btn-outline-light btn-sm-square rounded-circle\" href=\"\"><i class=\"fab fa-youtube fw-normal\"></i></a>
                    </div>
                </div>
                <div class=\"col-lg-4 text-center text-lg-end\">
                    <div class=\"d-inline-flex align-items-center\" style=\"height: 45px;\">
                        <a href=\"#\"><small class=\"me-3 text-light\"><i class=\"fa fa-user me-2\"></i>Register</small></a>
                        <a href=\"#\"><small class=\"me-3 text-light\"><i class=\"fa fa-sign-in-alt me-2\"></i>Login</small></a>
                        <div class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle text-light\" data-bs-toggle=\"dropdown\"><small><i class=\"fa fa-home me-2\"></i> My Dashboard</small></a>
                            <div class=\"dropdown-menu rounded\">
                                <a href=\"#\" class=\"dropdown-item\"><i class=\"fas fa-user-alt me-2\"></i> My Profile</a>
                                <a href=\"#\" class=\"dropdown-item\"><i class=\"fas fa-comment-alt me-2\"></i> Inbox</a>
                                <a href=\"#\" class=\"dropdown-item\"><i class=\"fas fa-bell me-2\"></i> Notifications</a>
                                <a href=\"#\" class=\"dropdown-item\"><i class=\"fas fa-cog me-2\"></i> Account Settings</a>
                                <a href=\"#\" class=\"dropdown-item\"><i class=\"fas fa-power-off me-2\"></i> Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class=\"container-fluid position-relative p-0\">
            <nav class=\"navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0\">
                <a href=\"\" class=\"navbar-brand p-0\">
                    <h1 class=\"m-0\"><i class=\"fa fa-map-marker-alt me-3\"></i>GeSport</h1>
                    <!-- <img src=\"img/logo.png\" alt=\"Logo\"> -->
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                    <span class=\"fa fa-bars\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    <div class=\"navbar-nav ms-auto py-0\">
                        <a href=\"../base\" class=\"nav-item nav-link \">Accueil</a>
                        <a href=\"about.html\" class=\"nav-item nav-link\">Compte</a>
                        <a href=\"activite\" class=\"nav-item nav-link active\">Activité</a>
                        <a href=\"packages.html\" class=\"nav-item nav-link\">Buvette</a>
                        <a href=\"blog.html\" class=\"nav-item nav-link\">Tournoi</a>
                        <div class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pages</a>
                            <div class=\"dropdown-menu m-0\">
                                <a href=\"destination.html\" class=\"dropdown-item\">Destination</a>
                                <a href=\"tour.html\" class=\"dropdown-item\">Explore Tour</a>
                                <a href=\"booking.html\" class=\"dropdown-item\">Travel Booking</a>
                                <a href=\"gallery.html\" class=\"dropdown-item\">Our Gallery</a>
                                <a href=\"guides.html\" class=\"dropdown-item\">Travel Guides</a>
                                <a href=\"testimonial.html\" class=\"dropdown-item\">Testimonial</a>
                                <a href=\"404.html\" class=\"dropdown-item\">404 Page</a>
                            </div>
                        </div>
                        <a href=\"contact.html\" class=\"nav-item nav-link\">Reclamation</a>
                    </div>
                    <a href=\"\" class=\"btn btn-primary rounded-pill py-2 px-4 ms-lg-4\">Book Now</a>
                </div>
            </nav>
{% endblock %}
{% block carousel %}
<div class=\"container-fluid bg-breadcrumb\">
            <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
                <h3 class=\"text-white display-3 mb-4\">Nos Activités</h3>
                <ol class=\"breadcrumb justify-content-center mb-0\">
                    <li class=\"breadcrumb-item\"><a href=\"./base\">Accueil</a></li>
                    <li class=\"breadcrumb-item active text-white\">Activite</li>
                </ol>    
            </div>
        </div>
{% endblock %}
{% block content %}
   <h1>     </h1> 
<a href=\"{{ path('app_reservationactivite_new')}}\" class=\"btn btn-primary rounded-pill py-2 px-4\">Réserver</a>
    <div class=\"row\">
        {% for activite in activites %}
            <div class=\"col-md-4\">
                <div class=\"card mb-4\">
                    <div class=\"blog-item\">
                     <div class=\"blog-img\">
                        <div class=\"blog-img-inner\">     
                            <img src=\"{{ asset('uploads/' ~ activite.imagea) }}\" class=\"img-fluid w-100 rounded-top\" alt=\"{{ activite.noma }}\">
                            <div class=\"blog-icon\">
                                        <a href=\"#\" class=\"my-auto\"><i class=\"fas fa-link fa-2x text-white\"></i></a>
                            </div>
                         </div>
                    </div>   
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ activite.noma }}</h5>
                        <p class=\"card-text\">{{ activite.descria }}</p>
                        <a href=\"{{ path('app_activite_show', {'ida': activite.ida}) }}\" class=\"btn btn-primary rounded-pill py-2 px-4\">Voir</a>
                    <!--    <a href=\"{{ path('app_reservationactivite_new', {'ida': activite.ida}) }}\" class=\"btn btn-primary rounded-pill py-2 px-4\">Réserver</a>  -->
                    </div>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col\">
                <p>No records found</p>
            </div>
        {% endfor %}
    </div>
{% endblock %}

", "activite/index.html.twig", "C:\\Users\\Rania\\Desktop\\gesportWeb\\templates\\activite\\index.html.twig");
    }
}
