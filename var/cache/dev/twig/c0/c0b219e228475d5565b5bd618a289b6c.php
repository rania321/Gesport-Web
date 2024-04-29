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

/* reservationactivite/new.html.twig */
class __TwigTemplate_482992ac961e9291823155c35793e03e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationactivite/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationactivite/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservationactivite/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 4
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
                        <a href=\"activite\" class=\"nav-item nav-link\">Activité</a>
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

    // line 70
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "New Reservationactivite";
        
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

    // line 82
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 83
        echo "
    <h1>Réserver une activité</h1>

    <div class=\"col-lg-8 col-xl-9\">
<div class=\"row g-4\">
                            <div class=\"col-lg-6\">
    
           <!-- 
                <th>Ida</th>
                <td>";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 92, $this->source); })()), "ida", [], "any", false, false, false, 92), "html", null, true);
        echo "</td>
             -->
            
               <!-- <th>Imagea</th>  -->
               <div class=\"border rounded\">
                <img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 97, $this->source); })()), "imagea", [], "any", false, false, false, 97))), "html", null, true);
        echo "\" class=\"img-fluid rounded\"  alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 97, $this->source); })()), "noma", [], "any", false, false, false, 97), "html", null, true);
        echo "\">
            </div>
            </div>
            <div class=\"col-lg-6\">
            <h4 class=\"fw-bold mb-3\">";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 101, $this->source); })()), "noma", [], "any", false, false, false, 101), "html", null, true);
        echo "</h4>
            
            <p class=\"mb-3\">Type: ";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 103, $this->source); })()), "typea", [], "any", false, false, false, 103), "html", null, true);
        echo "</p>
            
            <h5 class=\"fw-bold mb-3\">";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 105, $this->source); })()), "dispoa", [], "any", false, false, false, 105), "html", null, true);
        echo "</h5>
                
            <p class=\"mb-4\">";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 107, $this->source); })()), "descria", [], "any", false, false, false, 107), "html", null, true);
        echo "</p>
            
            </div>
            
        </div>
</div>
    ";
        // line 113
        if ((twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 113, $this->source); })()), "dispoa", [], "any", false, false, false, 113) == "Disponible")) {
            // line 114
            echo "    <div class=\"container-fluid booking py-5\">
            <div class=\"container py-5\">
                <div class=\"row g-5 align-items-center\">
                    <div class=\"col-lg-6\">
                        <h5 class=\"section-booking-title pe-3\">Réservation</h5>
                        <h1 class=\"text-white mb-4\">Réservation en ligne</h1>
                        <p class=\"text-white mb-4\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur maxime ullam esse fuga blanditiis accusantium pariatur quis sapiente, veniam doloribus praesentium? Repudiandae iste voluptatem fugiat doloribus quasi quo iure officia.
                        </p>
                        <a href=\"";
            // line 122
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservationactivite_index");
            echo "\" class=\"btn btn-light text-primary rounded-pill py-3 px-5 mt-2\">Mes Réservations</a>
                    </div>
                    <div class=\"col-lg-6\">
                        <h1 class=\"text-white mb-3\">Réserver une activité</h1>
                        <p class=\"text-white mb-4\">Choisissez <span class=\"text-warning\">l'activité</span> qui vous correspond.</p>
                            ";
            // line 127
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
            echo "
                            ";
            // line 128
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "ida", [], "any", false, false, false, 128), 'row', ["attr" => ["style" => "display: none;"]]);
            echo "

                        <form>
                            <div class=\"row g-3\">
                                
                                <div class=\"col-md-6\">
                                    <div class=\"form-floating\">
                                        
                                        ";
            // line 136
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "datedebutr", [], "any", false, false, false, 136), 'widget', ["attr" => ["class" => "form-control bg-white border-0"]]);
            echo "
                                        <div class=\"text-danger\">";
            // line 137
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "datedebutr", [], "any", false, false, false, 137), 'errors');
            echo "</div>
                                           
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-floating\">
                                        
                                        ";
            // line 144
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "heurer", [], "any", false, false, false, 144), 'widget', ["attr" => ["class" => "form-select bg-white border-0"]]);
            echo "
                                        <div class=\"text-danger\">";
            // line 145
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "heurer", [], "any", false, false, false, 145), 'errors');
            echo "</div>
                                                
                                    </div>
                                </div>
                                
                                
                                <div class=\"col-12\">
                                ";
            // line 152
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "_token", [], "any", false, false, false, 152), 'row');
            echo "
                                    <button class=\"btn btn-primary text-white w-100 py-3\" type=\"submit\">Réserver</button>
                                    ";
            // line 154
            if (array_key_exists("successMessage", $context)) {
                // line 155
                echo "                                        <script>
                                            function readTextWithResponsiveVoice(text) {
                                                responsiveVoice.speak(text, \"French Female\", { volume: 1 });
                                            }
                                            readTextWithResponsiveVoice('";
                // line 159
                echo twig_escape_filter($this->env, (isset($context["successMessage"]) || array_key_exists("successMessage", $context) ? $context["successMessage"] : (function () { throw new RuntimeError('Variable "successMessage" does not exist.', 159, $this->source); })()), "html", null, true);
                echo "');
                                        </script>
                                        <script src=\"https://code.responsivevoice.org/responsivevoice.js\"></script>
                                    ";
            }
            // line 163
            echo "                                    ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), 'form_end');
            echo "
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        ";
        }
        // line 173
        echo "        

        
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reservationactivite/new.html.twig";
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
        return array (  353 => 173,  339 => 163,  332 => 159,  326 => 155,  324 => 154,  319 => 152,  309 => 145,  305 => 144,  295 => 137,  291 => 136,  280 => 128,  276 => 127,  268 => 122,  258 => 114,  256 => 113,  247 => 107,  242 => 105,  237 => 103,  232 => 101,  223 => 97,  215 => 92,  204 => 83,  194 => 82,  175 => 72,  165 => 71,  146 => 70,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

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
                        <a href=\"activite\" class=\"nav-item nav-link\">Activité</a>
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
{% block title %}New Reservationactivite{% endblock %}
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

    <div class=\"col-lg-8 col-xl-9\">
<div class=\"row g-4\">
                            <div class=\"col-lg-6\">
    
           <!-- 
                <th>Ida</th>
                <td>{{ activite.ida }}</td>
             -->
            
               <!-- <th>Imagea</th>  -->
               <div class=\"border rounded\">
                <img src=\"{{ asset('uploads/' ~ activite.imagea) }}\" class=\"img-fluid rounded\"  alt=\"{{ activite.noma }}\">
            </div>
            </div>
            <div class=\"col-lg-6\">
            <h4 class=\"fw-bold mb-3\">{{ activite.noma }}</h4>
            
            <p class=\"mb-3\">Type: {{ activite.typea }}</p>
            
            <h5 class=\"fw-bold mb-3\">{{ activite.dispoa }}</h5>
                
            <p class=\"mb-4\">{{ activite.descria }}</p>
            
            </div>
            
        </div>
</div>
    {% if activite.dispoa == 'Disponible' %}
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
                            {{ form_row(form.ida, { 'attr': { 'style': 'display: none;' } }) }}

                        <form>
                            <div class=\"row g-3\">
                                
                                <div class=\"col-md-6\">
                                    <div class=\"form-floating\">
                                        
                                        {{ form_widget(form.datedebutr, {'attr': {'class': 'form-control bg-white border-0'}}) }}
                                        <div class=\"text-danger\">{{ form_errors(form.datedebutr) }}</div>
                                           
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-floating\">
                                        
                                        {{ form_widget(form.heurer, {'attr': {'class': 'form-select bg-white border-0'}}) }}
                                        <div class=\"text-danger\">{{ form_errors(form.heurer) }}</div>
                                                
                                    </div>
                                </div>
                                
                                
                                <div class=\"col-12\">
                                {{ form_row(form._token) }}
                                    <button class=\"btn btn-primary text-white w-100 py-3\" type=\"submit\">Réserver</button>
                                    {% if successMessage is defined %}
                                        <script>
                                            function readTextWithResponsiveVoice(text) {
                                                responsiveVoice.speak(text, \"French Female\", { volume: 1 });
                                            }
                                            readTextWithResponsiveVoice('{{ successMessage }}');
                                        </script>
                                        <script src=\"https://code.responsivevoice.org/responsivevoice.js\"></script>
                                    {% endif %}
                                    {{ form_end(form) }}
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {% endif %}
        

        
{% endblock %}
", "reservationactivite/new.html.twig", "C:\\Users\\Rania\\Desktop\\gesportWeb\\templates\\reservationactivite\\new.html.twig");
    }
}
