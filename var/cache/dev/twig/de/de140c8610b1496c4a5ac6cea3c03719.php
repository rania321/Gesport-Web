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

/* reservationactivite/pdf.html.twig */
class __TwigTemplate_fda7528bf383a66fcbd006206b16a9b0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationactivite/pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationactivite/pdf.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"UTF-8\">
  <title>Confirmation de réservation</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      width: 800px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
    }

    .header {
      text-align: center;
      margin-bottom: 20px;
    }

    .header h1 {
      font-size: 24px;
      margin: 0;
    }

    .info {
      border: 1px solid #ccc;
      padding: 10px;
    }

    .info p {
      margin: 0;
    }

    .info label {
      display: inline-block;
      width: 120px;
      font-weight: bold;
    }

    .info span {
      display: inline-block;
      margin-left: 20px;
    }

    .qr-code {
      text-align: center;
      margin-top: 20px;
    }

    .qr-code img {
      width: 100px;
      height: 100px;
    }

    .footer {
      text-align: center;
      margin-top: 20px;
    }

    .footer p {
      margin: 0;
    }
  </style>
</head>
<body>
  <div class=\"container\">
    <div class=\"header\">
      <h1>Confirmation de réservation</h1>
    </div>

    <div class=\"info\">
      <p>
        <label>ID de réservation:</label>
        <span>";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservationactivite"]) || array_key_exists("reservationactivite", $context) ? $context["reservationactivite"] : (function () { throw new RuntimeError('Variable "reservationactivite" does not exist.', 79, $this->source); })()), 0, [], "array", false, false, false, 79), "idr", [], "any", false, false, false, 79), "html", null, true);
        echo "</span>
      </p>
      <p>
        <label>Cher(e):</label>
        <span>";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservationactivite"]) || array_key_exists("reservationactivite", $context) ? $context["reservationactivite"] : (function () { throw new RuntimeError('Variable "reservationactivite" does not exist.', 83, $this->source); })()), 0, [], "array", false, false, false, 83), "idu", [], "any", false, false, false, 83), "prenomu", [], "any", false, false, false, 83), "html", null, true);
        echo "</span>
      </p>
      <p>
        <label>Activité:</label>
        <span>";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservationactivite"]) || array_key_exists("reservationactivite", $context) ? $context["reservationactivite"] : (function () { throw new RuntimeError('Variable "reservationactivite" does not exist.', 87, $this->source); })()), 0, [], "array", false, false, false, 87), "ida", [], "any", false, false, false, 87), "noma", [], "any", false, false, false, 87), "html", null, true);
        echo "</span>
      </p>
      <p>
        <label>Date:</label>
        <span>";
        // line 91
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservationactivite"]) || array_key_exists("reservationactivite", $context) ? $context["reservationactivite"] : (function () { throw new RuntimeError('Variable "reservationactivite" does not exist.', 91, $this->source); })()), 0, [], "array", false, false, false, 91), "datedebutr", [], "any", false, false, false, 91), "d/m/Y"), "html", null, true);
        echo "</span>
      </p>
      <p>
        <label>Heure:</label>
        <span>";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservationactivite"]) || array_key_exists("reservationactivite", $context) ? $context["reservationactivite"] : (function () { throw new RuntimeError('Variable "reservationactivite" does not exist.', 95, $this->source); })()), 0, [], "array", false, false, false, 95), "heurer", [], "any", false, false, false, 95), "html", null, true);
        echo "</span>
      </p>
      <p>
        <label>Statut:</label>
        <span>";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservationactivite"]) || array_key_exists("reservationactivite", $context) ? $context["reservationactivite"] : (function () { throw new RuntimeError('Variable "reservationactivite" does not exist.', 99, $this->source); })()), 0, [], "array", false, false, false, 99), "statutr", [], "any", false, false, false, 99), "html", null, true);
        echo "</span>
      </p>
    </div>


    <div class=\"footer\">
      <p>Merci d'avoir choisi notre service. Nous sommes impatients de vous accueillir!</p>
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
        return "reservationactivite/pdf.html.twig";
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
        return array (  158 => 99,  151 => 95,  144 => 91,  137 => 87,  130 => 83,  123 => 79,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
  <meta charset=\"UTF-8\">
  <title>Confirmation de réservation</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      width: 800px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
    }

    .header {
      text-align: center;
      margin-bottom: 20px;
    }

    .header h1 {
      font-size: 24px;
      margin: 0;
    }

    .info {
      border: 1px solid #ccc;
      padding: 10px;
    }

    .info p {
      margin: 0;
    }

    .info label {
      display: inline-block;
      width: 120px;
      font-weight: bold;
    }

    .info span {
      display: inline-block;
      margin-left: 20px;
    }

    .qr-code {
      text-align: center;
      margin-top: 20px;
    }

    .qr-code img {
      width: 100px;
      height: 100px;
    }

    .footer {
      text-align: center;
      margin-top: 20px;
    }

    .footer p {
      margin: 0;
    }
  </style>
</head>
<body>
  <div class=\"container\">
    <div class=\"header\">
      <h1>Confirmation de réservation</h1>
    </div>

    <div class=\"info\">
      <p>
        <label>ID de réservation:</label>
        <span>{{ reservationactivite[0].idr }}</span>
      </p>
      <p>
        <label>Cher(e):</label>
        <span>{{ reservationactivite[0].idu.prenomu }}</span>
      </p>
      <p>
        <label>Activité:</label>
        <span>{{ reservationactivite[0].ida.noma }}</span>
      </p>
      <p>
        <label>Date:</label>
        <span>{{ reservationactivite[0].datedebutr | date(\"d/m/Y\") }}</span>
      </p>
      <p>
        <label>Heure:</label>
        <span>{{ reservationactivite[0].heurer }}</span>
      </p>
      <p>
        <label>Statut:</label>
        <span>{{ reservationactivite[0].statutr }}</span>
      </p>
    </div>


    <div class=\"footer\">
      <p>Merci d'avoir choisi notre service. Nous sommes impatients de vous accueillir!</p>
    </div>
  </div>
</body>
</html>
", "reservationactivite/pdf.html.twig", "C:\\Users\\Rania\\Desktop\\gesportWeb\\templates\\reservationactivite\\pdf.html.twig");
    }
}
