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

/* activite/emailPerso.html.twig */
class __TwigTemplate_7a5bc1ecba3b1755922c780c4d8d56c8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite/emailPerso.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite/emailPerso.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Confirmation de réservation</title>
    <style>
        /* Ajoutez vos styles CSS personnalisés ici */
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border: 3px solid #17447a;
        }
        .logo {
            float: left;
            margin-right: 20px;
        }
        .icons {
            float: right;
        }
        h1 {
            color: #17447a; /* Couleur bleue pour les titres */
            text-align: center;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <h1>Confirmation de réservation</h1>
        <p>Cher(e) ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 32, $this->source); })()), "idu", [], "any", false, false, false, 32), "prenomu", [], "any", false, false, false, 32), "html", null, true);
        echo ",</p>
        <p>Votre réservation a été confirmée avec succès. Voici les détails de votre réservation :</p>
        <ul>
            <li>Activité : ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 35, $this->source); })()), "ida", [], "any", false, false, false, 35), "noma", [], "any", false, false, false, 35), "html", null, true);
        echo "</li>
            <li>Date : ";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 36, $this->source); })()), "datedebutr", [], "any", false, false, false, 36), "d/m/Y"), "html", null, true);
        echo "</li>
            <li>Heure : ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 37, $this->source); })()), "heurer", [], "any", false, false, false, 37), "html", null, true);
        echo "</li>
            <li>Statut : ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 38, $this->source); })()), "statutr", [], "any", false, false, false, 38), "html", null, true);
        echo "</li>
        </ul>
        <p>Merci d'avoir choisi notre service. Nous sommes impatients de vous accueillir !</p>
        <div class=\"icons\">
            <!-- Ajoutez vos icônes ici -->
        </div>
    </div>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "activite/emailPerso.html.twig";
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
        return array (  94 => 38,  90 => 37,  86 => 36,  82 => 35,  76 => 32,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Confirmation de réservation</title>
    <style>
        /* Ajoutez vos styles CSS personnalisés ici */
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border: 3px solid #17447a;
        }
        .logo {
            float: left;
            margin-right: 20px;
        }
        .icons {
            float: right;
        }
        h1 {
            color: #17447a; /* Couleur bleue pour les titres */
            text-align: center;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <h1>Confirmation de réservation</h1>
        <p>Cher(e) {{ reservation.idu.prenomu }},</p>
        <p>Votre réservation a été confirmée avec succès. Voici les détails de votre réservation :</p>
        <ul>
            <li>Activité : {{ reservation.ida.noma }}</li>
            <li>Date : {{ reservation.datedebutr|date('d/m/Y') }}</li>
            <li>Heure : {{ reservation.heurer }}</li>
            <li>Statut : {{ reservation.statutr }}</li>
        </ul>
        <p>Merci d'avoir choisi notre service. Nous sommes impatients de vous accueillir !</p>
        <div class=\"icons\">
            <!-- Ajoutez vos icônes ici -->
        </div>
    </div>
</body>
</html>
", "activite/emailPerso.html.twig", "C:\\Users\\Rania\\Desktop\\gesportWeb\\templates\\activite\\emailPerso.html.twig");
    }
}
