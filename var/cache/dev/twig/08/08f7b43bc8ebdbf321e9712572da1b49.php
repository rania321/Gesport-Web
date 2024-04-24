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

/* base.html.twig */
class __TwigTemplate_e1648882a0723ba0742fbc24e51aeba0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'carousel' => [$this, 'block_carousel'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\"><head>
        <meta charset=\"utf-8\">
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
        <meta content=\"\" name=\"keywords\">
        <meta content=\"\" name=\"description\">

        <!-- Google Web Fonts -->
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin=\"\">
        <link href=\"https://fonts.googleapis.com/css2?family=Jost:wght@500;600&amp;family=Roboto&amp;display=swap\" rel=\"stylesheet\"> 

        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "    </head>

    <body>

        <!-- Spinner Start -->
        <div id=\"spinner\" class=\"bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
            <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
                <span class=\"sr-only\">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        ";
        // line 44
        $this->displayBlock('header', $context, $blocks);
        // line 111
        echo "            <!-- Carousel Start -->
            ";
        // line 112
        $this->displayBlock('carousel', $context, $blocks);
        // line 178
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 300
        echo "        <!-- Footer Start -->
        <div class=\"container-fluid footer py-5\">
            <div class=\"container py-5\">
                <div class=\"row g-5\">
                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                        <div class=\"footer-item d-flex flex-column\">
                            <h4 class=\"mb-4 text-white\">Get In Touch</h4>
                            <a href=\"\"><i class=\"fas fa-home me-2\"></i> ESPRIT, Ariana, Tunisie</a>
                            <a href=\"\"><i class=\"fas fa-envelope me-2\"></i> gesport@gmail.com</a>
                            <a href=\"\"><i class=\"fas fa-phone me-2\"></i> +012 345 67890</a>
                            <a href=\"\" class=\"mb-3\"><i class=\"fas fa-print me-2\"></i> +012 345 67890</a>
                            <div class=\"d-flex align-items-center\">
                                <i class=\"fas fa-share fa-2x text-white me-2\"></i>
                                <a class=\"btn-square btn btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn-square btn btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn-square btn btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                <a class=\"btn-square btn btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                        <div class=\"footer-item d-flex flex-column\">
                            <h4 class=\"mb-4 text-white\">Company</h4>
                            <a href=\"\"><i class=\"fas fa-angle-right me-2\"></i> A propos</a>
                            <a href=\"\"><i class=\"fas fa-angle-right me-2\"></i> Carière</a>
                            <a href=\"\"><i class=\"fas fa-angle-right me-2\"></i> Blog</a>
                            <a href=\"\"><i class=\"fas fa-angle-right me-2\"></i> Press</a>
                            <a href=\"\"><i class=\"fas fa-angle-right me-2\"></i> Cartes Cadeau</a>
                            <a href=\"\"><i class=\"fas fa-angle-right me-2\"></i> Magazine</a>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                        <div class=\"footer-item d-flex flex-column\">
                            <h4 class=\"mb-4 text-white\">Support</h4>
                            <a href=\"\"><i class=\"fas fa-angle-right me-2\"></i> Contact</a>
                            <a href=\"\"><i class=\"fas fa-angle-right me-2\"></i> Legal Notice</a>
                            <a href=\"\"><i class=\"fas fa-angle-right me-2\"></i> Privacy Policy</a>
                            <a href=\"\"><i class=\"fas fa-angle-right me-2\"></i> Terms and Conditions</a>
                            <a href=\"\"><i class=\"fas fa-angle-right me-2\"></i> Sitemap</a>
                            <a href=\"\"><i class=\"fas fa-angle-right me-2\"></i> Cookie policy</a>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                        <div class=\"footer-item\">
                            <div class=\"row gy-3 gx-2 mb-4\">
                                <div class=\"col-xl-6\">
                                    <form>
                                        <div class=\"form-floating\">
                                            <select class=\"form-select bg-dark border\" id=\"select1\">
                                                <option value=\"1\">Arabic</option>
                                                <option value=\"2\">German</option>
                                                <option value=\"3\">Greek</option>
                                                <option value=\"3\">New York</option>
                                            </select>
                                            <label for=\"select1\">Choix</label>
                                        </div>
                                    </form>
                                </div>
                                <div class=\"col-xl-6\">
                                    <form>
                                        <div class=\"form-floating\">
                                            <select class=\"form-select bg-dark border\" id=\"select1\">
                                                <option value=\"1\">USD</option>
                                                <option value=\"2\">EUR</option>
                                                <option value=\"3\">INR</option>
                                                <option value=\"3\">GBP</option>
                                            </select>
                                            <label for=\"select1\">\$</label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <h4 class=\"text-white mb-3\">Paiement</h4>
                            <div class=\"footer-bank-card\">
                                <a href=\"#\" class=\"text-white me-2\"><i class=\"fab fa-cc-amex fa-2x\"></i></a>
                                <a href=\"#\" class=\"text-white me-2\"><i class=\"fab fa-cc-visa fa-2x\"></i></a>
                                <a href=\"#\" class=\"text-white me-2\"><i class=\"fas fa-credit-card fa-2x\"></i></a>
                                <a href=\"#\" class=\"text-white me-2\"><i class=\"fab fa-cc-mastercard fa-2x\"></i></a>
                                <a href=\"#\" class=\"text-white me-2\"><i class=\"fab fa-cc-paypal fa-2x\"></i></a>
                                <a href=\"#\" class=\"text-white\"><i class=\"fab fa-cc-discover fa-2x\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        
        
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href=\"#\" class=\"btn btn-primary btn-primary-outline-0 btn-md-square back-to-top\" style=\"display: none;\"><i class=\"fa fa-arrow-up\"></i></a>   

        ";
        // line 396
        $this->displayBlock('js', $context, $blocks);
        // line 409
        echo "
<div id=\"lightboxOverlay\" tabindex=\"-1\" class=\"lightboxOverlay\" style=\"display: none;\"></div><div id=\"lightbox\" tabindex=\"-1\" class=\"lightbox\" style=\"display: none;\"><div class=\"lb-outerContainer\"><div class=\"lb-container\"><img class=\"lb-image\" src=\"data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==\" alt=\"\"><div class=\"lb-nav\"><a class=\"lb-prev\" role=\"button\" tabindex=\"0\" aria-label=\"Previous image\" href=\"\"></a><a class=\"lb-next\" role=\"button\" tabindex=\"0\" aria-label=\"Next image\" href=\"\"></a></div><div class=\"lb-loader\"><a class=\"lb-cancel\" role=\"button\" tabindex=\"0\"></a></div></div></div><div class=\"lb-dataContainer\"><div class=\"lb-data\"><div class=\"lb-details\"><span class=\"lb-caption\"></span><span class=\"lb-number\"></span></div><div class=\"lb-closeContainer\"><a class=\"lb-close\" role=\"button\" tabindex=\"0\"></a></div></div></div></div></body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "GeSport - Centre Sportif";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "        <!-- Icon Font Stylesheet -->
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.4/css/all.css\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

        <!-- Libraries Stylesheet -->
        
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/lib/lightbox/css/lightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


        <!-- Customized Bootstrap Stylesheet -->
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Template Stylesheet -->
        <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 44
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 45
        echo "        <div class=\"container-fluid bg-primary px-5 d-none d-lg-block\">
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
                        <a href=\"index.html\" class=\"nav-item nav-link active\">Accueil</a>
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
                    <a href=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservationactivite_new");
        echo "\" class=\"btn btn-primary rounded-pill py-2 px-4 ms-lg-4\">Book Now</a>
                </div>
            </nav>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 112
    public function block_carousel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        // line 113
        echo "            <div class=\"carousel-header\">
                <div id=\"carouselId\" class=\"carousel slide\" data-bs-ride=\"carousel\">
                    <ol class=\"carousel-indicators\">
                        <li data-bs-target=\"#carouselId\" data-bs-slide-to=\"0\" class=\"\"></li>
                        <li data-bs-target=\"#carouselId\" data-bs-slide-to=\"1\" class=\"\"></li>
                        <li data-bs-target=\"#carouselId\" data-bs-slide-to=\"2\" class=\"active\" aria-current=\"true\"></li>
                    </ol>
                    <div class=\"carousel-inner\" role=\"listbox\">
                        <div class=\"carousel-item\">
                            <img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/img/sportbackground.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Image\">
                            <div class=\"carousel-caption\">
                                <div class=\"p-3\" style=\"max-width: 900px;\">
                                    <h4 class=\"text-white text-uppercase fw-bold mb-4\" style=\"letter-spacing: 3px;\">Un jour ou jour 1 ?</h4>
                                    <h1 class=\"display-2 text-capitalize text-white mb-4\">Get Fit Get Stronger.</h1>
                                    <p class=\"mb-5 fs-5\">Vous pouvez consultez nos activités, nos tournois mais aussi notre buvette. Si vous avez une réclamation, n'hésitez pas à nous contacter!
                                    </p>
                                    <div class=\"d-flex align-items-center justify-content-center\">
                                        <a class=\"btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5\" href=\"#\">En Savoir Plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"carousel-item\">
                            <img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/img/carousel2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Image\">
                            <div class=\"carousel-caption\">
                                <div class=\"p-3\" style=\"max-width: 900px;\">
                                    <h4 class=\"text-white text-uppercase fw-bold mb-4\" style=\"letter-spacing: 3px;\">Un jour ou jour 1 ?</h4>
                                    <h1 class=\"display-2 text-capitalize text-white mb-4\">Get Fit Get Stronger.</h1>
                                    <p class=\"mb-5 fs-5\">Vous pouvez consultez nos activités, nos tournois mais aussi notre buvette. Si vous avez une réclamation, n'hésitez pas à nous contacter!
                                    </p>
                                    <div class=\"d-flex align-items-center justify-content-center\">
                                        <a class=\"btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5\" href=\"#\">En Savoir Plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"carousel-item active\">
                            <img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/img/carousel1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Image\">
                            <div class=\"carousel-caption\">
                                <div class=\"p-3\" style=\"max-width: 900px;\">
                                    <h4 class=\"text-white text-uppercase fw-bold mb-4\" style=\"letter-spacing: 3px;\">Un jour ou jour 1 ?</h4>
                                    <h1 class=\"display-2 text-capitalize text-white mb-4\">Get Fit Get Stronger.</h1>
                                    <p class=\"mb-5 fs-5\">Vous pouvez consulter nos activités, nos tournois mais aussi notre buvette. Si vous avez une réclamation, n'hésitez pas à nous contacter! 
                                    </p>
                                    <div class=\"d-flex align-items-center justify-content-center\">
                                        <a class=\"btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5\" href=\"#\">En Savoir Plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselId\" data-bs-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon btn bg-primary\" aria-hidden=\"false\"></span>
                        <span class=\"visually-hidden\">Previous</span>
                    </button>
                    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselId\" data-bs-slide=\"next\">
                        <span class=\"carousel-control-next-icon btn bg-primary\" aria-hidden=\"false\"></span>
                        <span class=\"visually-hidden\">Next</span>
                    </button>
                </div>
            </div>
            
            <!-- Carousel End -->
        </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 178
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 179
        echo "        <div class=\"container-fluid search-bar position-relative\" style=\"top: -50%; transform: translateY(-50%);\">
            <div class=\"container\">
                
            </div>
        </div>
        <div class=\"container-fluid guide py-5\">
            <div class=\"container py-5\">
                <div class=\"mx-auto text-center mb-5\" style=\"max-width: 900px;\">
                    <h5 class=\"section-title px-3\">Guide de Sport</h5>
                    <h1 class=\"mb-0\">Voici notre Guide</h1>
                </div>
                <div class=\"row g-4\">
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"guide-item\">
                            <div class=\"guide-img\">
                                <div class=\"guide-img-efects\">
                                    <img src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/img/guide-1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid w-100 rounded-top\" alt=\"Image\">
                                </div>
                                <div class=\"guide-icon rounded-pill p-2\">
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                                </div>
                            </div>
                            <div class=\"guide-title text-center rounded-bottom p-4\">
                                <div class=\"guide-title-inner\">
                                    <h4 class=\"mt-3\">Salma Yacoub</h4>
                                    <p class=\"mb-0\">Chef Département Tournoi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"guide-item\">
                            <div class=\"guide-img\">
                                <div class=\"guide-img-efects\">
                                    <img src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/img/guide-2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid w-100 rounded-top\" alt=\"Image\">
                                </div>
                                <div class=\"guide-icon rounded-pill p-2\">
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                                </div>
                            </div>
                            <div class=\"guide-title text-center rounded-bottom p-4\">
                                <div class=\"guide-title-inner\">
                                    <h4 class=\"mt-3\">Rania Guelmami</h4>
                                    <p class=\"mb-0\">Chef Département Activité</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"guide-item\">
                            <div class=\"guide-img\">
                                <div class=\"guide-img-efects\">
                                    <img src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/img/guide-3.jpg"), "html", null, true);
        echo "\" class=\"img-fluid w-100 rounded-top\" alt=\"Image\">
                                </div>
                                <div class=\"guide-icon rounded-pill p-2\">
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                                </div>
                            </div>
                            <div class=\"guide-title text-center rounded-bottom p-4\">
                                <div class=\"guide-title-inner\">
                                    <h4 class=\"mt-3\">Dawser Ghzel</h4>
                                    <p class=\"mb-0\">Chef Département User</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"guide-item\">
                            <div class=\"guide-img\">
                                <div class=\"guide-img-efects\">
                                    <img src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/img/guide-4.jpg"), "html", null, true);
        echo "\" class=\"img-fluid w-100 rounded-top\" alt=\"Image\">
                                </div>
                                <div class=\"guide-icon rounded-pill p-2\">
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                                </div>
                            </div>
                            <div class=\"guide-title text-center rounded-bottom p-4\">
                                <div class=\"guide-title-inner\">
                                    <h4 class=\"mt-3\">Khedija Benouda</h4>
                                    <p class=\"mb-0\">Chef Département Buvette</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"guide-item\">
                            <div class=\"guide-img\">
                                <div class=\"guide-img-efects\">
                                    <img src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/img/guide-3.jpg"), "html", null, true);
        echo "\" class=\"img-fluid w-100 rounded-top\" alt=\"Image\">
                                </div>
                                <div class=\"guide-icon rounded-pill p-2\">
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                                </div>
                            </div>
                            <div class=\"guide-title text-center rounded-bottom p-4\">
                                <div class=\"guide-title-inner\">
                                    <h4 class=\"mt-3\">Youssef Oueslati</h4>
                                    <p class=\"mb-0\">Chef Département Réclamation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 396
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 397
        echo "        <!-- JavaScript Libraries -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
        <script src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/lib/waypoints/waypoints.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/lib/lightbox/js/lightbox.min.js"), "html", null, true);
        echo "\"></script>
        

        <!-- Template Javascript -->
        <script src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  642 => 407,  635 => 403,  631 => 402,  627 => 401,  623 => 400,  618 => 397,  608 => 396,  577 => 279,  553 => 258,  529 => 237,  505 => 216,  481 => 195,  463 => 179,  453 => 178,  415 => 150,  398 => 136,  381 => 122,  370 => 113,  360 => 112,  346 => 107,  282 => 45,  272 => 44,  260 => 29,  254 => 26,  247 => 22,  243 => 21,  235 => 15,  225 => 14,  206 => 4,  194 => 409,  192 => 396,  94 => 300,  91 => 178,  89 => 112,  86 => 111,  84 => 44,  69 => 31,  67 => 14,  54 => 4,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\"><head>
        <meta charset=\"utf-8\">
        <title>{% block title %}GeSport - Centre Sportif{% endblock %}</title>
        <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
        <meta content=\"\" name=\"keywords\">
        <meta content=\"\" name=\"description\">

        <!-- Google Web Fonts -->
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin=\"\">
        <link href=\"https://fonts.googleapis.com/css2?family=Jost:wght@500;600&amp;family=Roboto&amp;display=swap\" rel=\"stylesheet\"> 

        {% block stylesheets %}
        <!-- Icon Font Stylesheet -->
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.4/css/all.css\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

        <!-- Libraries Stylesheet -->
        
        <link href=\"{{ asset('./FrontOffice/lib/owlcarousel/assets/owl.carousel.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('./FrontOffice/lib/lightbox/css/lightbox.min.css') }}\" rel=\"stylesheet\">


        <!-- Customized Bootstrap Stylesheet -->
        <link href=\"{{ asset('./FrontOffice/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

        <!-- Template Stylesheet -->
        <link href=\"{{ asset('./FrontOffice/css/style.css')}}\" rel=\"stylesheet\">
        {% endblock %}
    </head>

    <body>

        <!-- Spinner Start -->
        <div id=\"spinner\" class=\"bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
            <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
                <span class=\"sr-only\">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
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
                        <a href=\"index.html\" class=\"nav-item nav-link active\">Accueil</a>
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
                    <a href=\"{{ path('app_reservationactivite_new')}}\" class=\"btn btn-primary rounded-pill py-2 px-4 ms-lg-4\">Book Now</a>
                </div>
            </nav>
            {% endblock %}
            <!-- Carousel Start -->
            {% block carousel %}
            <div class=\"carousel-header\">
                <div id=\"carouselId\" class=\"carousel slide\" data-bs-ride=\"carousel\">
                    <ol class=\"carousel-indicators\">
                        <li data-bs-target=\"#carouselId\" data-bs-slide-to=\"0\" class=\"\"></li>
                        <li data-bs-target=\"#carouselId\" data-bs-slide-to=\"1\" class=\"\"></li>
                        <li data-bs-target=\"#carouselId\" data-bs-slide-to=\"2\" class=\"active\" aria-current=\"true\"></li>
                    </ol>
                    <div class=\"carousel-inner\" role=\"listbox\">
                        <div class=\"carousel-item\">
                            <img src=\"{{ asset('./FrontOffice/img/sportbackground.jpg')}}\" class=\"img-fluid\" alt=\"Image\">
                            <div class=\"carousel-caption\">
                                <div class=\"p-3\" style=\"max-width: 900px;\">
                                    <h4 class=\"text-white text-uppercase fw-bold mb-4\" style=\"letter-spacing: 3px;\">Un jour ou jour 1 ?</h4>
                                    <h1 class=\"display-2 text-capitalize text-white mb-4\">Get Fit Get Stronger.</h1>
                                    <p class=\"mb-5 fs-5\">Vous pouvez consultez nos activités, nos tournois mais aussi notre buvette. Si vous avez une réclamation, n'hésitez pas à nous contacter!
                                    </p>
                                    <div class=\"d-flex align-items-center justify-content-center\">
                                        <a class=\"btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5\" href=\"#\">En Savoir Plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"carousel-item\">
                            <img src=\"{{asset('./FrontOffice/img/carousel2.jpg')}}\" class=\"img-fluid\" alt=\"Image\">
                            <div class=\"carousel-caption\">
                                <div class=\"p-3\" style=\"max-width: 900px;\">
                                    <h4 class=\"text-white text-uppercase fw-bold mb-4\" style=\"letter-spacing: 3px;\">Un jour ou jour 1 ?</h4>
                                    <h1 class=\"display-2 text-capitalize text-white mb-4\">Get Fit Get Stronger.</h1>
                                    <p class=\"mb-5 fs-5\">Vous pouvez consultez nos activités, nos tournois mais aussi notre buvette. Si vous avez une réclamation, n'hésitez pas à nous contacter!
                                    </p>
                                    <div class=\"d-flex align-items-center justify-content-center\">
                                        <a class=\"btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5\" href=\"#\">En Savoir Plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"carousel-item active\">
                            <img src=\"{{ asset('./FrontOffice/img/carousel1.jpg')}}\" class=\"img-fluid\" alt=\"Image\">
                            <div class=\"carousel-caption\">
                                <div class=\"p-3\" style=\"max-width: 900px;\">
                                    <h4 class=\"text-white text-uppercase fw-bold mb-4\" style=\"letter-spacing: 3px;\">Un jour ou jour 1 ?</h4>
                                    <h1 class=\"display-2 text-capitalize text-white mb-4\">Get Fit Get Stronger.</h1>
                                    <p class=\"mb-5 fs-5\">Vous pouvez consulter nos activités, nos tournois mais aussi notre buvette. Si vous avez une réclamation, n'hésitez pas à nous contacter! 
                                    </p>
                                    <div class=\"d-flex align-items-center justify-content-center\">
                                        <a class=\"btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5\" href=\"#\">En Savoir Plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselId\" data-bs-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon btn bg-primary\" aria-hidden=\"false\"></span>
                        <span class=\"visually-hidden\">Previous</span>
                    </button>
                    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselId\" data-bs-slide=\"next\">
                        <span class=\"carousel-control-next-icon btn bg-primary\" aria-hidden=\"false\"></span>
                        <span class=\"visually-hidden\">Next</span>
                    </button>
                </div>
            </div>
            
            <!-- Carousel End -->
        </div>
        {% endblock %}
        {% block content %}
        <div class=\"container-fluid search-bar position-relative\" style=\"top: -50%; transform: translateY(-50%);\">
            <div class=\"container\">
                
            </div>
        </div>
        <div class=\"container-fluid guide py-5\">
            <div class=\"container py-5\">
                <div class=\"mx-auto text-center mb-5\" style=\"max-width: 900px;\">
                    <h5 class=\"section-title px-3\">Guide de Sport</h5>
                    <h1 class=\"mb-0\">Voici notre Guide</h1>
                </div>
                <div class=\"row g-4\">
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"guide-item\">
                            <div class=\"guide-img\">
                                <div class=\"guide-img-efects\">
                                    <img src=\"{{ asset('./FrontOffice/img/guide-1.jpg')}}\" class=\"img-fluid w-100 rounded-top\" alt=\"Image\">
                                </div>
                                <div class=\"guide-icon rounded-pill p-2\">
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                                </div>
                            </div>
                            <div class=\"guide-title text-center rounded-bottom p-4\">
                                <div class=\"guide-title-inner\">
                                    <h4 class=\"mt-3\">Salma Yacoub</h4>
                                    <p class=\"mb-0\">Chef Département Tournoi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"guide-item\">
                            <div class=\"guide-img\">
                                <div class=\"guide-img-efects\">
                                    <img src=\"{{ asset('./FrontOffice/img/guide-2.jpg')}}\" class=\"img-fluid w-100 rounded-top\" alt=\"Image\">
                                </div>
                                <div class=\"guide-icon rounded-pill p-2\">
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                                </div>
                            </div>
                            <div class=\"guide-title text-center rounded-bottom p-4\">
                                <div class=\"guide-title-inner\">
                                    <h4 class=\"mt-3\">Rania Guelmami</h4>
                                    <p class=\"mb-0\">Chef Département Activité</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"guide-item\">
                            <div class=\"guide-img\">
                                <div class=\"guide-img-efects\">
                                    <img src=\"{{ asset('./FrontOffice/img/guide-3.jpg')}}\" class=\"img-fluid w-100 rounded-top\" alt=\"Image\">
                                </div>
                                <div class=\"guide-icon rounded-pill p-2\">
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                                </div>
                            </div>
                            <div class=\"guide-title text-center rounded-bottom p-4\">
                                <div class=\"guide-title-inner\">
                                    <h4 class=\"mt-3\">Dawser Ghzel</h4>
                                    <p class=\"mb-0\">Chef Département User</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"guide-item\">
                            <div class=\"guide-img\">
                                <div class=\"guide-img-efects\">
                                    <img src=\"{{ asset('./FrontOffice/img/guide-4.jpg')}}\" class=\"img-fluid w-100 rounded-top\" alt=\"Image\">
                                </div>
                                <div class=\"guide-icon rounded-pill p-2\">
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                                </div>
                            </div>
                            <div class=\"guide-title text-center rounded-bottom p-4\">
                                <div class=\"guide-title-inner\">
                                    <h4 class=\"mt-3\">Khedija Benouda</h4>
                                    <p class=\"mb-0\">Chef Département Buvette</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"guide-item\">
                            <div class=\"guide-img\">
                                <div class=\"guide-img-efects\">
                                    <img src=\"{{ asset('./FrontOffice/img/guide-3.jpg')}}\" class=\"img-fluid w-100 rounded-top\" alt=\"Image\">
                                </div>
                                <div class=\"guide-icon rounded-pill p-2\">
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                    <a class=\"btn btn-square btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                                </div>
                            </div>
                            <div class=\"guide-title text-center rounded-bottom p-4\">
                                <div class=\"guide-title-inner\">
                                    <h4 class=\"mt-3\">Youssef Oueslati</h4>
                                    <p class=\"mb-0\">Chef Département Réclamation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {% endblock %}
        <!-- Footer Start -->
        <div class=\"container-fluid footer py-5\">
            <div class=\"container py-5\">
                <div class=\"row g-5\">
                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                        <div class=\"footer-item d-flex flex-column\">
                            <h4 class=\"mb-4 text-white\">Get In Touch</h4>
                            <a href=\"\"><i class=\"fas fa-home me-2\"></i> ESPRIT, Ariana, Tunisie</a>
                            <a href=\"\"><i class=\"fas fa-envelope me-2\"></i> gesport@gmail.com</a>
                            <a href=\"\"><i class=\"fas fa-phone me-2\"></i> +012 345 67890</a>
                            <a href=\"\" class=\"mb-3\"><i class=\"fas fa-print me-2\"></i> +012 345 67890</a>
                            <div class=\"d-flex align-items-center\">
                                <i class=\"fas fa-share fa-2x text-white me-2\"></i>
                                <a class=\"btn-square btn btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn-square btn btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn-square btn btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                <a class=\"btn-square btn btn-primary rounded-circle mx-1\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                        <div class=\"footer-item d-flex flex-column\">
                            <h4 class=\"mb-4 text-white\">Company</h4>
                            <a href=\"\"><i class=\"fas fa-angle-right me-2\"></i> A propos</a>
                            <a href=\"\"><i class=\"fas fa-angle-right me-2\"></i> Carière</a>
                            <a href=\"\"><i class=\"fas fa-angle-right me-2\"></i> Blog</a>
                            <a href=\"\"><i class=\"fas fa-angle-right me-2\"></i> Press</a>
                            <a href=\"\"><i class=\"fas fa-angle-right me-2\"></i> Cartes Cadeau</a>
                            <a href=\"\"><i class=\"fas fa-angle-right me-2\"></i> Magazine</a>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                        <div class=\"footer-item d-flex flex-column\">
                            <h4 class=\"mb-4 text-white\">Support</h4>
                            <a href=\"\"><i class=\"fas fa-angle-right me-2\"></i> Contact</a>
                            <a href=\"\"><i class=\"fas fa-angle-right me-2\"></i> Legal Notice</a>
                            <a href=\"\"><i class=\"fas fa-angle-right me-2\"></i> Privacy Policy</a>
                            <a href=\"\"><i class=\"fas fa-angle-right me-2\"></i> Terms and Conditions</a>
                            <a href=\"\"><i class=\"fas fa-angle-right me-2\"></i> Sitemap</a>
                            <a href=\"\"><i class=\"fas fa-angle-right me-2\"></i> Cookie policy</a>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                        <div class=\"footer-item\">
                            <div class=\"row gy-3 gx-2 mb-4\">
                                <div class=\"col-xl-6\">
                                    <form>
                                        <div class=\"form-floating\">
                                            <select class=\"form-select bg-dark border\" id=\"select1\">
                                                <option value=\"1\">Arabic</option>
                                                <option value=\"2\">German</option>
                                                <option value=\"3\">Greek</option>
                                                <option value=\"3\">New York</option>
                                            </select>
                                            <label for=\"select1\">Choix</label>
                                        </div>
                                    </form>
                                </div>
                                <div class=\"col-xl-6\">
                                    <form>
                                        <div class=\"form-floating\">
                                            <select class=\"form-select bg-dark border\" id=\"select1\">
                                                <option value=\"1\">USD</option>
                                                <option value=\"2\">EUR</option>
                                                <option value=\"3\">INR</option>
                                                <option value=\"3\">GBP</option>
                                            </select>
                                            <label for=\"select1\">\$</label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <h4 class=\"text-white mb-3\">Paiement</h4>
                            <div class=\"footer-bank-card\">
                                <a href=\"#\" class=\"text-white me-2\"><i class=\"fab fa-cc-amex fa-2x\"></i></a>
                                <a href=\"#\" class=\"text-white me-2\"><i class=\"fab fa-cc-visa fa-2x\"></i></a>
                                <a href=\"#\" class=\"text-white me-2\"><i class=\"fas fa-credit-card fa-2x\"></i></a>
                                <a href=\"#\" class=\"text-white me-2\"><i class=\"fab fa-cc-mastercard fa-2x\"></i></a>
                                <a href=\"#\" class=\"text-white me-2\"><i class=\"fab fa-cc-paypal fa-2x\"></i></a>
                                <a href=\"#\" class=\"text-white\"><i class=\"fab fa-cc-discover fa-2x\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        
        
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href=\"#\" class=\"btn btn-primary btn-primary-outline-0 btn-md-square back-to-top\" style=\"display: none;\"><i class=\"fa fa-arrow-up\"></i></a>   

        {% block js%}
        <!-- JavaScript Libraries -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
        <script src=\"{{ asset('./FrontOffice/lib/easing/easing.min.js')}}\"></script>
        <script src=\"{{ asset('./FrontOffice/lib/waypoints/waypoints.min.js')}}\"></script>
        <script src=\"{{ asset('./FrontOffice/lib/owlcarousel/owl.carousel.min.js')}}\"></script>
        <script src=\"{{ asset('./FrontOffice/lib/lightbox/js/lightbox.min.js')}}\"></script>
        

        <!-- Template Javascript -->
        <script src=\"{{ asset('./FrontOffice/js/main.js')}}\"></script>
        {% endblock %}

<div id=\"lightboxOverlay\" tabindex=\"-1\" class=\"lightboxOverlay\" style=\"display: none;\"></div><div id=\"lightbox\" tabindex=\"-1\" class=\"lightbox\" style=\"display: none;\"><div class=\"lb-outerContainer\"><div class=\"lb-container\"><img class=\"lb-image\" src=\"data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==\" alt=\"\"><div class=\"lb-nav\"><a class=\"lb-prev\" role=\"button\" tabindex=\"0\" aria-label=\"Previous image\" href=\"\"></a><a class=\"lb-next\" role=\"button\" tabindex=\"0\" aria-label=\"Next image\" href=\"\"></a></div><div class=\"lb-loader\"><a class=\"lb-cancel\" role=\"button\" tabindex=\"0\"></a></div></div></div><div class=\"lb-dataContainer\"><div class=\"lb-data\"><div class=\"lb-details\"><span class=\"lb-caption\"></span><span class=\"lb-number\"></span></div><div class=\"lb-closeContainer\"><a class=\"lb-close\" role=\"button\" tabindex=\"0\"></a></div></div></div></div></body>
</html>", "base.html.twig", "C:\\Users\\Rania\\Desktop\\gesportWeb\\templates\\base.html.twig");
    }
}
