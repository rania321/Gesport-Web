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

/* reservationactivite/index.html.twig */
class __TwigTemplate_1a66b27b4367f6ec14c24954c82ff71f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationactivite/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationactivite/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservationactivite/index.html.twig", 1);
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
    public function block_carousel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        // line 5
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservationactivites"]) || array_key_exists("reservationactivites", $context) ? $context["reservationactivites"] : (function () { throw new RuntimeError('Variable "reservationactivites" does not exist.', 17, $this->source); })()));
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
            // line 18
            echo "<div class=\"container mt-4\">
<div class=\"row mb-4\">
        <div class=\"col\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h2>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationactivite"], "ida", [], "any", false, false, false, 23), "noma", [], "any", false, false, false, 23), "html", null, true);
            echo "</h2>
                </div>
                <div class=\"card-body\">
                    <dl class=\"row\">
                        <dt class=\"col-sm-3\">Activité:</dt>
                        <dd class=\"col-sm-9\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationactivite"], "ida", [], "any", false, false, false, 28), "noma", [], "any", false, false, false, 28), "html", null, true);
            echo "</dd>

                        <dt class=\"col-sm-3\">Date:</dt>
                        <dd class=\"col-sm-9\">";
            // line 31
            ((twig_get_attribute($this->env, $this->source, $context["reservationactivite"], "datedebutr", [], "any", false, false, false, 31)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservationactivite"], "datedebutr", [], "any", false, false, false, 31), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</dd>

                        <dt class=\"col-sm-3\">Heure:</dt>
                        <dd class=\"col-sm-9\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservationactivite"], "heurer", [], "any", false, false, false, 34), "html", null, true);
            echo "</dd>

                        <dt class=\"col-sm-3\">Statut:</dt>
                        <dd class=\"col-sm-9\">
                            ";
            // line 38
            if ((twig_get_attribute($this->env, $this->source, $context["reservationactivite"], "statutr", [], "any", false, false, false, 38) == "confirmée")) {
                // line 39
                echo "                                <span class=\"badge bg-success\">Confirmée</span>
                            ";
            } else {
                // line 41
                echo "                                <span class=\"badge bg-warning\">En cours</span>
                            ";
            }
            // line 43
            echo "                        </dd>
                    </dl>
                    <a href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservationactivite_index");
            echo "\">back to list</a>

    <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservationactivite_edit", ["idr" => twig_get_attribute($this->env, $this->source, $context["reservationactivite"], "idr", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\">edit</a>

    ";
            // line 49
            echo twig_include($this->env, $context, "reservationactivite/_delete_form.html.twig");
            echo "
                </div>
                
            </div>
        </div>
    </div>  
</div>    
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservationactivite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "

    <h1>Reservationactivite index</h1>
    <div class=\"container-fluid py-5\">
            <div class=\"container py-5\">
<div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
            <tr>
              <!--  <th>Idr</th> -->
                <th>Activité</th>
                <th>Nom</th>
                <th>Date</th>
                <th>Heure</th>
                <th>Statut</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservationactivites"]) || array_key_exists("reservationactivites", $context) ? $context["reservationactivites"] : (function () { throw new RuntimeError('Variable "reservationactivites" does not exist.', 76, $this->source); })()));
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
            // line 77
            echo "            <tr>
              <!--  <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservationactivite"], "idr", [], "any", false, false, false, 78), "html", null, true);
            echo "</td> -->
                <td><img src=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationactivite"], "ida", [], "any", false, false, false, 79), "imagea", [], "any", false, false, false, 79))), "html", null, true);
            echo "\" class=\"img-fluid me-5 rounded-circle\" style=\"width: 80px; height: 80px;\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationactivite"], "ida", [], "any", false, false, false, 79), "noma", [], "any", false, false, false, 79), "html", null, true);
            echo "\"></td>
                <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationactivite"], "ida", [], "any", false, false, false, 80), "noma", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>
                <td>";
            // line 81
            ((twig_get_attribute($this->env, $this->source, $context["reservationactivite"], "datedebutr", [], "any", false, false, false, 81)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservationactivite"], "datedebutr", [], "any", false, false, false, 81), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservationactivite"], "heurer", [], "any", false, false, false, 82), "html", null, true);
            echo "</td>
                <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservationactivite"], "statutr", [], "any", false, false, false, 83), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservationactivite_show", ["idr" => twig_get_attribute($this->env, $this->source, $context["reservationactivite"], "idr", [], "any", false, false, false, 85)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservationactivite_edit", ["idr" => twig_get_attribute($this->env, $this->source, $context["reservationactivite"], "idr", [], "any", false, false, false, 86)]), "html", null, true);
            echo "\">edit</a>
                    ";
            // line 87
            echo twig_include($this->env, $context, "reservationactivite/_delete_form.html.twig");
            echo "
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
            // line 91
            echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservationactivite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "        </tbody>
    </table>
</div>
</div>
</div>

    <a href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservationactivite_new");
        echo "\">Create new</a>
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reservationactivite/index.html.twig";
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
        return array (  326 => 101,  318 => 95,  309 => 91,  292 => 87,  288 => 86,  284 => 85,  279 => 83,  275 => 82,  271 => 81,  267 => 80,  261 => 79,  257 => 78,  254 => 77,  236 => 76,  215 => 57,  193 => 49,  188 => 47,  183 => 45,  179 => 43,  175 => 41,  171 => 39,  169 => 38,  162 => 34,  156 => 31,  150 => 28,  142 => 23,  135 => 18,  118 => 17,  108 => 16,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Reservationactivite index{% endblock %}
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
{% for reservationactivite in reservationactivites %}
<div class=\"container mt-4\">
<div class=\"row mb-4\">
        <div class=\"col\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h2>{{ reservationactivite.ida.noma }}</h2>
                </div>
                <div class=\"card-body\">
                    <dl class=\"row\">
                        <dt class=\"col-sm-3\">Activité:</dt>
                        <dd class=\"col-sm-9\">{{ reservationactivite.ida.noma }}</dd>

                        <dt class=\"col-sm-3\">Date:</dt>
                        <dd class=\"col-sm-9\">{{ reservationactivite.datedebutr ? reservationactivite.datedebutr|date('Y-m-d') : '' }}</dd>

                        <dt class=\"col-sm-3\">Heure:</dt>
                        <dd class=\"col-sm-9\">{{ reservationactivite.heurer }}</dd>

                        <dt class=\"col-sm-3\">Statut:</dt>
                        <dd class=\"col-sm-9\">
                            {% if reservationactivite.statutr == 'confirmée' %}
                                <span class=\"badge bg-success\">Confirmée</span>
                            {% else %}
                                <span class=\"badge bg-warning\">En cours</span>
                            {% endif %}
                        </dd>
                    </dl>
                    <a href=\"{{ path('app_reservationactivite_index') }}\">back to list</a>

    <a href=\"{{ path('app_reservationactivite_edit', {'idr': reservationactivite.idr}) }}\">edit</a>

    {{ include('reservationactivite/_delete_form.html.twig') }}
                </div>
                
            </div>
        </div>
    </div>  
</div>    
{% endfor %}


    <h1>Reservationactivite index</h1>
    <div class=\"container-fluid py-5\">
            <div class=\"container py-5\">
<div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
            <tr>
              <!--  <th>Idr</th> -->
                <th>Activité</th>
                <th>Nom</th>
                <th>Date</th>
                <th>Heure</th>
                <th>Statut</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for reservationactivite in reservationactivites %}
            <tr>
              <!--  <td>{{ reservationactivite.idr }}</td> -->
                <td><img src=\"{{ asset('uploads/' ~ reservationactivite.ida.imagea) }}\" class=\"img-fluid me-5 rounded-circle\" style=\"width: 80px; height: 80px;\" alt=\"{{ reservationactivite.ida.noma }}\"></td>
                <td>{{ reservationactivite.ida.noma }}</td>
                <td>{{ reservationactivite.datedebutr ? reservationactivite.datedebutr|date('Y-m-d') : '' }}</td>
                <td>{{ reservationactivite.heurer }}</td>
                <td>{{ reservationactivite.statutr }}</td>
                <td>
                    <a href=\"{{ path('app_reservationactivite_show', {'idr': reservationactivite.idr}) }}\">show</a>
                    <a href=\"{{ path('app_reservationactivite_edit', {'idr': reservationactivite.idr}) }}\">edit</a>
                    {{ include('reservationactivite/_delete_form.html.twig') }}
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

    <a href=\"{{ path('app_reservationactivite_new') }}\">Create new</a>
    
{% endblock %}
", "reservationactivite/index.html.twig", "C:\\Users\\Rania\\Desktop\\gesportWeb\\templates\\reservationactivite\\index.html.twig");
    }
}
