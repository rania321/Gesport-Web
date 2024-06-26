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

/* activite/show.html.twig */
class __TwigTemplate_f3a86db0919ad71910ac133becd0e231 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "activite/show.html.twig", 1);
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

        echo "Activite";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_carousel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        echo " 
        <div class=\"container-fluid bg-breadcrumb\">
            <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
                <h3 class=\"text-white display-3 mb-4\">Our Services</h3>
                <ol class=\"breadcrumb justify-content-center mb-0\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
                    <li class=\"breadcrumb-item active text-white\">Services</li>
                </ol>    
            </div>
        </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "    <h1>Activite</h1>
    <div class=\"col-lg-8 col-xl-9\">
<div class=\"row g-4\">
                            <div class=\"col-lg-6\">
    
           <!-- 
                <th>Ida</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 25, $this->source); })()), "ida", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
             -->
            
               <!-- <th>Imagea</th>  -->
               <div class=\"border rounded\">
                <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 30, $this->source); })()), "imagea", [], "any", false, false, false, 30))), "html", null, true);
        echo "\" class=\"img-fluid rounded\"  alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 30, $this->source); })()), "noma", [], "any", false, false, false, 30), "html", null, true);
        echo "\">
            </div>
            </div>
            <div class=\"col-lg-6\">
            <h4 class=\"fw-bold mb-3\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 34, $this->source); })()), "noma", [], "any", false, false, false, 34), "html", null, true);
        echo "</h4>
            
            <p class=\"mb-3\">Type: ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 36, $this->source); })()), "typea", [], "any", false, false, false, 36), "html", null, true);
        echo "</p>
            
            <h5 class=\"fw-bold mb-3\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 38, $this->source); })()), "dispoa", [], "any", false, false, false, 38), "html", null, true);
        echo "</h5>
                
            <p class=\"mb-4\">";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 40, $this->source); })()), "descria", [], "any", false, false, false, 40), "html", null, true);
        echo "</p>
            

            ";
        // line 43
        if ((isset($context["isFavorite"]) || array_key_exists("isFavorite", $context) ? $context["isFavorite"] : (function () { throw new RuntimeError('Variable "isFavorite" does not exist.', 43, $this->source); })())) {
            // line 44
            echo "                <form id=\"removeLoveForm\" method=\"POST\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimer_love_activite", ["ida" => twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 44, $this->source); })()), "ida", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 46, $this->source); })()), "ida", [], "any", false, false, false, 46))), "html", null, true);
            echo "\">
                    <button type=\"button\" onclick=\"removeLove()\" class=\"btn\"><img src=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/img/love.png"), "html", null, true);
            echo "\" alt=\"Remove Love\" style=\"width: 40px; height: 40px;\"></button>
                </form>
            ";
        } else {
            // line 50
            echo "                <form method=\"POST\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouter_love_activite", ["ida" => twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 50, $this->source); })()), "ida", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\">
                    <button type=\"submit\" class=\"btn \"><img src=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/img/unlove.png"), "html", null, true);
            echo "\" alt=\"Add Love\" style=\"width: 40px; height: 40px;\"></button>
                </form>
            ";
        }
        // line 54
        echo "
            <script>
                function removeLove() {
                if (confirm('Are you sure you want to remove love?')) {
                    fetch(document.getElementById('removeLoveForm').getAttribute('action'), {
                        method: 'DELETE',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest',
                        },
                        body: JSON.stringify({
                            _token: document.querySelector('input[name=\"_token\"]').value
                        }),
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Failed to remove love.');
                        }
                        return response.json();
                    })
                    .then(data => {
                        console.log(data);
                        // Rediriger vers la page de détails de l'activité
                        window.location.href = \"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_show", ["ida" => twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 77, $this->source); })()), "ida", [], "any", false, false, false, 77)]), "html", null, true);
        echo "\";
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        // Gérez l'erreur ici si nécessaire
                    });
                }
                }
            </script>
            </div>
        </div>
</div>

    <a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_index");
        echo "\">back to list</a>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "activite/show.html.twig";
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
        return array (  236 => 90,  220 => 77,  195 => 54,  189 => 51,  184 => 50,  178 => 47,  174 => 46,  168 => 44,  166 => 43,  160 => 40,  155 => 38,  150 => 36,  145 => 34,  136 => 30,  128 => 25,  119 => 18,  109 => 17,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Activite{% endblock %}
{% block carousel %} 
        <div class=\"container-fluid bg-breadcrumb\">
            <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
                <h3 class=\"text-white display-3 mb-4\">Our Services</h3>
                <ol class=\"breadcrumb justify-content-center mb-0\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
                    <li class=\"breadcrumb-item active text-white\">Services</li>
                </ol>    
            </div>
        </div>
{% endblock %}

{% block content %}
    <h1>Activite</h1>
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
            

            {% if isFavorite %}
                <form id=\"removeLoveForm\" method=\"POST\" action=\"{{ path('supprimer_love_activite', {'ida': activite.ida}) }}\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ activite.ida) }}\">
                    <button type=\"button\" onclick=\"removeLove()\" class=\"btn\"><img src=\"{{ asset('FrontOffice/img/love.png') }}\" alt=\"Remove Love\" style=\"width: 40px; height: 40px;\"></button>
                </form>
            {% else %}
                <form method=\"POST\" action=\"{{ path('ajouter_love_activite', {'ida': activite.ida}) }}\">
                    <button type=\"submit\" class=\"btn \"><img src=\"{{ asset('FrontOffice/img/unlove.png') }}\" alt=\"Add Love\" style=\"width: 40px; height: 40px;\"></button>
                </form>
            {% endif %}

            <script>
                function removeLove() {
                if (confirm('Are you sure you want to remove love?')) {
                    fetch(document.getElementById('removeLoveForm').getAttribute('action'), {
                        method: 'DELETE',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest',
                        },
                        body: JSON.stringify({
                            _token: document.querySelector('input[name=\"_token\"]').value
                        }),
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Failed to remove love.');
                        }
                        return response.json();
                    })
                    .then(data => {
                        console.log(data);
                        // Rediriger vers la page de détails de l'activité
                        window.location.href = \"{{ path('app_activite_show', {'ida': activite.ida}) }}\";
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        // Gérez l'erreur ici si nécessaire
                    });
                }
                }
            </script>
            </div>
        </div>
</div>

    <a href=\"{{ path('app_activite_index') }}\">back to list</a>

{% endblock %}
", "activite/show.html.twig", "C:\\Users\\Rania\\Desktop\\gesportWeb\\templates\\activite\\show.html.twig");
    }
}
