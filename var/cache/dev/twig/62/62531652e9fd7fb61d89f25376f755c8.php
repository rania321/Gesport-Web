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

/* baseBack.html.twig */
class __TwigTemplate_650e6e5aa09ebd8288c19c0a88f5e355 extends Template
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
            'sidebar' => [$this, 'block_sidebar'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\"><head>
  <!-- Required meta tags -->
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <title> ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <!-- plugins:css -->
  ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "</head>

<body class=\"with-welcome-text\">
  <div class=\"container-scroller\">
    <div class=\"row p-0 m-0 proBanner d-flex\" id=\"proBanner\">
      <div class=\"col-md-12 p-0 m-0\">
        
      </div>
    </div>
    <!-- partial:partials/_navbar.html -->
    <nav class=\"navbar default-layout col-lg-12 col-12 p-0 d-flex align-items-top flex-row pt-5 mt-3\">
  <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-start\">
    <div class=\"me-3\">
      <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-bs-toggle=\"minimize\">
        <span class=\"icon-menu\"></span>
      </button>
    </div>
    <div>
      <a class=\"navbar-brand brand-logo\" href=\"../index.html\">
        <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../BackOffice/images/logo.svg"), "html", null, true);
        echo "\" alt=\"logo\">
      </a>
      <a class=\"navbar-brand brand-logo-mini\" href=\"../index.html\">
        <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../BackOffice/images/logo-mini.svg"), "html", null, true);
        echo "\" alt=\"logo\">
      </a>
    </div>
  </div>
  <div class=\"navbar-menu-wrapper d-flex align-items-top\">
    <ul class=\"navbar-nav\">
      <li class=\"nav-item font-weight-semibold d-none d-lg-block ms-0\">
        <h1 class=\"welcome-text\">Good Morning, <span class=\"text-black fw-bold\">John Doe</span></h1>
        <h3 class=\"welcome-sub-text\">Your performance summary this week </h3>
      </li>
    </ul>
    <ul class=\"navbar-nav ms-auto\">
      <li class=\"nav-item dropdown d-none d-lg-block\">
        
        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"messageDropdown\">
          <a class=\"dropdown-item py-3\">
            <p class=\"mb-0 font-weight-medium float-left\">Select category</p>
          </a>
          <div class=\"dropdown-divider\"></div>
          <a class=\"dropdown-item preview-item\">
            <div class=\"preview-item-content flex-grow py-2\">
              <p class=\"preview-subject ellipsis font-weight-medium text-dark\">Bootstrap Bundle </p>
              <p class=\"fw-light small-text mb-0\">This is a Bundle featuring 16 unique dashboards</p>
            </div>
          </a>
          <a class=\"dropdown-item preview-item\">
            <div class=\"preview-item-content flex-grow py-2\">
              <p class=\"preview-subject ellipsis font-weight-medium text-dark\">Angular Bundle</p>
              <p class=\"fw-light small-text mb-0\">Everything you’ll ever need for your Angular projects</p>
            </div>
          </a>
          <a class=\"dropdown-item preview-item\">
            <div class=\"preview-item-content flex-grow py-2\">
              <p class=\"preview-subject ellipsis font-weight-medium text-dark\">VUE Bundle</p>
              <p class=\"fw-light small-text mb-0\">Bundle of 6 Premium Vue Admin Dashboard</p>
            </div>
          </a>
          <a class=\"dropdown-item preview-item\">
            <div class=\"preview-item-content flex-grow py-2\">
              <p class=\"preview-subject ellipsis font-weight-medium text-dark\">React Bundle</p>
              <p class=\"fw-light small-text mb-0\">Bundle of 8 Premium React Admin Dashboard</p>
            </div>
          </a>
        </div>
      </li>
      <li class=\"nav-item d-none d-lg-block\">
        <div id=\"datepicker-popup\" class=\"input-group date datepicker navbar-date-picker\">
          <span class=\"input-group-addon input-group-prepend border-right\">
            <span class=\"icon-calendar input-group-text calendar-icon\"></span>
          </span>
          <input type=\"text\" class=\"form-control\">
        </div>
      </li>
      <li class=\"nav-item\">
        <form class=\"search-form\" action=\"#\">
          <i class=\"icon-search\"></i>
          <input type=\"search\" class=\"form-control\" placeholder=\"Search Here\" title=\"Search here\">
        </form>
      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link count-indicator\" id=\"notificationDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
          <i class=\"icon-bell\"></i>
          <span class=\"count\"></span>
        </a>
        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"notificationDropdown\">
          <a class=\"dropdown-item py-3 border-bottom\">
            <p class=\"mb-0 font-weight-medium float-left\">You have 4 new notifications </p>
            <span class=\"badge badge-pill badge-primary float-right\">View all</span>
          </a>
          <a class=\"dropdown-item preview-item py-3\">
            <div class=\"preview-thumbnail\">
              <i class=\"mdi mdi-alert m-auto text-primary\"></i>
            </div>
            <div class=\"preview-item-content\">
              <h6 class=\"preview-subject fw-normal text-dark mb-1\">Application Error</h6>
              <p class=\"fw-light small-text mb-0\"> Just now </p>
            </div>
          </a>
          <a class=\"dropdown-item preview-item py-3\">
            <div class=\"preview-thumbnail\">
              <i class=\"mdi mdi-settings m-auto text-primary\"></i>
            </div>
            <div class=\"preview-item-content\">
              <h6 class=\"preview-subject fw-normal text-dark mb-1\">Settings</h6>
              <p class=\"fw-light small-text mb-0\"> Private message </p>
            </div>
          </a>
          <a class=\"dropdown-item preview-item py-3\">
            <div class=\"preview-thumbnail\">
              <i class=\"mdi mdi-airballoon m-auto text-primary\"></i>
            </div>
            <div class=\"preview-item-content\">
              <h6 class=\"preview-subject fw-normal text-dark mb-1\">New user registration</h6>
              <p class=\"fw-light small-text mb-0\"> 2 days ago </p>
            </div>
          </a>
        </div>
      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link count-indicator\" id=\"countDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
          <i class=\"icon-mail icon-lg\"></i>
        </a>
        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"countDropdown\">
          <a class=\"dropdown-item py-3\">
            <p class=\"mb-0 font-weight-medium float-left\">You have 7 unread mails </p>
            <span class=\"badge badge-pill badge-primary float-right\">View all</span>
          </a>
          <div class=\"dropdown-divider\"></div>
          <a class=\"dropdown-item preview-item\">
            <div class=\"preview-thumbnail\">
              <img src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../BackOffice/images/faces/face10.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"img-sm profile-pic\">
            </div>
            <div class=\"preview-item-content flex-grow py-2\">
              <p class=\"preview-subject ellipsis font-weight-medium text-dark\">Marian Garner </p>
              <p class=\"fw-light small-text mb-0\"> The meeting is cancelled </p>
            </div>
          </a>
          <a class=\"dropdown-item preview-item\">
            <div class=\"preview-thumbnail\">
              <img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../BackOffice/images/faces/face12.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"img-sm profile-pic\">
            </div>
            <div class=\"preview-item-content flex-grow py-2\">
              <p class=\"preview-subject ellipsis font-weight-medium text-dark\">David Grey </p>
              <p class=\"fw-light small-text mb-0\"> The meeting is cancelled </p>
            </div>
          </a>
          <a class=\"dropdown-item preview-item\">
            <div class=\"preview-thumbnail\">
              <img src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../BackOffice/images/faces/face1.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"img-sm profile-pic\">
            </div>
            <div class=\"preview-item-content flex-grow py-2\">
              <p class=\"preview-subject ellipsis font-weight-medium text-dark\">Travis Jenkins </p>
              <p class=\"fw-light small-text mb-0\"> The meeting is cancelled </p>
            </div>
          </a>
        </div>
      </li>
      <li class=\"nav-item dropdown d-none d-lg-block user-dropdown\">
        <a class=\"nav-link\" id=\"UserDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
          <img class=\"img-xs rounded-circle\" src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../BackOffice/images/faces/face8.jpg"), "html", null, true);
        echo "\" alt=\"Profile image\"> </a>
        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"UserDropdown\">
          <div class=\"dropdown-header text-center\">
            <img class=\"img-md rounded-circle\" src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../BackOffice/images/faces/face8.jpg"), "html", null, true);
        echo "\" alt=\"Profile image\">
            <p class=\"mb-1 mt-3 font-weight-semibold\">Allen Moreno</p>
            <p class=\"fw-light text-muted mb-0\">allenmoreno@gmail.com</p>
          </div>
          <a class=\"dropdown-item\"><i class=\"dropdown-item-icon mdi mdi-account-outline text-primary me-2\"></i> My
            Profile <span class=\"badge badge-pill badge-danger\">1</span></a>
          <a class=\"dropdown-item\"><i class=\"dropdown-item-icon mdi mdi-message-text-outline text-primary me-2\"></i>
            Messages</a>
          <a class=\"dropdown-item\"><i class=\"dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2\"></i>
            Activity</a>
          <a class=\"dropdown-item\"><i class=\"dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2\"></i>
            FAQ</a>
          <a class=\"dropdown-item\"><i class=\"dropdown-item-icon mdi mdi-power text-primary me-2\"></i>Sign Out</a>
        </div>
      </li>
    </ul>
    <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-bs-toggle=\"offcanvas\">
      <span class=\"mdi mdi-menu\"></span>
    </button>
  </div>
</nav>
    <!-- partial -->
    <div class=\"container-fluid page-body-wrapper pt-0\">
      <!-- partial:partials/_settings-panel.html -->
      <div class=\"theme-setting-wrapper\">
  <div id=\"settings-trigger\"><i class=\"ti-settings\"></i></div>
  <div id=\"theme-settings\" class=\"settings-panel\">
    <i class=\"settings-close ti-close\"></i>
    <p class=\"settings-heading\">SIDEBAR SKINS</p>
    <div class=\"sidebar-bg-options selected\" id=\"sidebar-light-theme\">
      <div class=\"img-ss rounded-circle bg-light border me-3\"></div>Light
    </div>
    <div class=\"sidebar-bg-options\" id=\"sidebar-dark-theme\">
      <div class=\"img-ss rounded-circle bg-dark border me-3\"></div>Dark
    </div>
    <p class=\"settings-heading mt-2\">HEADER SKINS</p>
    <div class=\"color-tiles mx-0 px-4\">
      <div class=\"tiles success\"></div>
      <div class=\"tiles warning\"></div>
      <div class=\"tiles danger\"></div>
      <div class=\"tiles info\"></div>
      <div class=\"tiles dark\"></div>
      <div class=\"tiles default\"></div>
    </div>
  </div>
</div>
<div id=\"right-sidebar\" class=\"settings-panel\">
  <i class=\"settings-close ti-close\"></i>
  <ul class=\"nav nav-tabs border-top\" id=\"setting-panel\" role=\"tablist\">
    <li class=\"nav-item\" role=\"presentation\">
      <a class=\"nav-link active\" id=\"todo-tab\" data-bs-toggle=\"tab\" href=\"#todo-section\" role=\"tab\" aria-controls=\"todo-section\" aria-expanded=\"true\" aria-selected=\"true\">TO DO LIST</a>
    </li>
    <li class=\"nav-item\" role=\"presentation\">
      <a class=\"nav-link\" id=\"chats-tab\" data-bs-toggle=\"tab\" href=\"#chats-section\" role=\"tab\" aria-controls=\"chats-section\" aria-selected=\"false\" tabindex=\"-1\">CHATS</a>
    </li>
  </ul>
  <div class=\"tab-content\" id=\"setting-content\">
    <div class=\"tab-pane fade show active scroll-wrapper ps\" id=\"todo-section\" role=\"tabpanel\" aria-labelledby=\"todo-section\">
      <div class=\"add-items d-flex px-3 mb-0\">
        <form class=\"form w-100\">
          <div class=\"form-group d-flex\">
            <input type=\"text\" class=\"form-control todo-list-input\" placeholder=\"Add To-do\">
            <button type=\"submit\" class=\"add btn btn-primary todo-list-add-btn\" id=\"add-task\">Add</button>
          </div>
        </form>
      </div>
      <div class=\"list-wrapper px-3\">
        <ul class=\"d-flex flex-column-reverse todo-list\">
          <li>
            <div class=\"form-check\">
              <label class=\"form-check-label\">
                <input class=\"checkbox\" type=\"checkbox\">
                Team review meeting at 3.00 PM
              <i class=\"input-helper\"></i></label>
            </div>
            <i class=\"remove ti-close\"></i>
          </li>
          <li>
            <div class=\"form-check\">
              <label class=\"form-check-label\">
                <input class=\"checkbox\" type=\"checkbox\">
                Prepare for presentation
              <i class=\"input-helper\"></i></label>
            </div>
            <i class=\"remove ti-close\"></i>
          </li>
          <li>
            <div class=\"form-check\">
              <label class=\"form-check-label\">
                <input class=\"checkbox\" type=\"checkbox\">
                Resolve all the low priority tickets due today
              <i class=\"input-helper\"></i></label>
            </div>
            <i class=\"remove ti-close\"></i>
          </li>
          <li class=\"completed\">
            <div class=\"form-check\">
              <label class=\"form-check-label\">
                <input class=\"checkbox\" type=\"checkbox\" checked=\"\">
                Schedule meeting for next week
              <i class=\"input-helper\"></i></label>
            </div>
            <i class=\"remove ti-close\"></i>
          </li>
          <li class=\"completed\">
            <div class=\"form-check\">
              <label class=\"form-check-label\">
                <input class=\"checkbox\" type=\"checkbox\" checked=\"\">
                Project review
              <i class=\"input-helper\"></i></label>
            </div>
            <i class=\"remove ti-close\"></i>
          </li>
        </ul>
      </div>
      <h4 class=\"px-3 text-muted mt-5 fw-light mb-0\">Events</h4>
      <div class=\"events pt-4 px-3\">
        <div class=\"wrapper d-flex mb-2\">
          <i class=\"ti-control-record text-primary me-2\"></i>
          <span>Feb 11 2018</span>
        </div>
        <p class=\"mb-0 font-weight-thin text-gray\">Creating component page build a js</p>
        <p class=\"text-gray mb-0\">The total number of sessions</p>
      </div>
      <div class=\"events pt-4 px-3\">
        <div class=\"wrapper d-flex mb-2\">
          <i class=\"ti-control-record text-primary me-2\"></i>
          <span>Feb 7 2018</span>
        </div>
        <p class=\"mb-0 font-weight-thin text-gray\">Meeting with Alisa</p>
        <p class=\"text-gray mb-0 \">Call Sarah Graves</p>
      </div>
    <div class=\"ps__rail-x\" style=\"left: 0px; bottom: 0px;\"><div class=\"ps__thumb-x\" tabindex=\"0\" style=\"left: 0px; width: 0px;\"></div></div><div class=\"ps__rail-y\" style=\"top: 0px; right: 0px;\"><div class=\"ps__thumb-y\" tabindex=\"0\" style=\"top: 0px; height: 0px;\"></div></div></div>
    <!-- To do section tab ends -->
    <div class=\"tab-pane fade\" id=\"chats-section\" role=\"tabpanel\" aria-labelledby=\"chats-section\">
      <div class=\"d-flex align-items-center justify-content-between border-bottom\">
        <p class=\"settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0\">Friends</p>
        <small class=\"settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal\">See All</small>
      </div>
      <ul class=\"chat-list\">
        <li class=\"list active\">
          <div class=\"profile\"><img src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../BackOffice/images/faces/face1.jpg"), "html", null, true);
        echo "\" alt=\"image\"><span class=\"online\"></span>
          </div>
          <div class=\"info\">
            <p>Thomas Douglas</p>
            <p>Available</p>
          </div>
          <small class=\"text-muted my-auto\">19 min</small>
        </li>
        <li class=\"list\">
          <div class=\"profile\"><img src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../BackOffice/images/faces/face2.jpg"), "html", null, true);
        echo "\" alt=\"image\"><span class=\"offline\"></span>
          </div>
          <div class=\"info\">
            <div class=\"wrapper d-flex\">
              <p>Catherine</p>
            </div>
            <p>Away</p>
          </div>
          <div class=\"badge badge-success badge-pill my-auto mx-2\">4</div>
          <small class=\"text-muted my-auto\">23 min</small>
        </li>
        <li class=\"list\">
          <div class=\"profile\"><img src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../BackOffice/images/faces/face3.jpg"), "html", null, true);
        echo "\" alt=\"image\"><span class=\"online\"></span>
          </div>
          <div class=\"info\">
            <p>Daniel Russell</p>
            <p>Available</p>
          </div>
          <small class=\"text-muted my-auto\">14 min</small>
        </li>
        <li class=\"list\">
          <div class=\"profile\"><img src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../BackOffice/images/faces/face4.jpg"), "html", null, true);
        echo "\" alt=\"image\"><span class=\"offline\"></span>
          </div>
          <div class=\"info\">
            <p>James Richardson</p>
            <p>Away</p>
          </div>
          <small class=\"text-muted my-auto\">2 min</small>
        </li>
        <li class=\"list\">
          <div class=\"profile\"><img src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../BackOffice/images/faces/face5.jpg"), "html", null, true);
        echo "\" alt=\"image\"><span class=\"online\"></span>
          </div>
          <div class=\"info\">
            <p>Madeline Kennedy</p>
            <p>Available</p>
          </div>
          <small class=\"text-muted my-auto\">5 min</small>
        </li>
        <li class=\"list\">
          <div class=\"profile\"><img src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../BackOffice/images/faces/face6.jpg"), "html", null, true);
        echo "\" alt=\"image\"><span class=\"online\"></span>
          </div>
          <div class=\"info\">
            <p>Sarah Graves</p>
            <p>Available</p>
          </div>
          <small class=\"text-muted my-auto\">47 min</small>
        </li>
      </ul>
    </div>
    <!-- chat tab ends -->
  </div>
</div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      ";
        // line 393
        $this->displayBlock('sidebar', $context, $blocks);
        // line 487
        $this->displayBlock('content', $context, $blocks);
        // line 747
        echo "    <!-- page-body-wrapper ends -->
  </div>
";
        // line 749
        $this->displayBlock('js', $context, $blocks);
        // line 773
        echo "
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "GeSport Admin ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/vendors/feather/feather.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/vendors/mdi/css/materialdesignicons.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/vendors/ti-icons/css/themify-icons.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/vendors/typicons/typicons.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/vendors/simple-line-icons/css/simple-line-icons.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/vendors/css/vendor.bundle.base.css"), "html", null, true);
        echo "\">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/vendors/datatables.net-bs4/dataTables.bootstrap4.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice//js/select.dataTables.min.css"), "html", null, true);
        echo "\">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/css/vertical-layout-light/style.css"), "html", null, true);
        echo "\">
  <!-- endinject -->
  <link rel=\"shortcut icon\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/images/favicon.png"), "html", null, true);
        echo "\">
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 393
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 394
        echo "      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
  <ul class=\"nav\">
    <li class=\"nav-item active\">
      <a class=\"nav-link\" href=\"../index.html\">
        <i class=\"mdi mdi-grid-large menu-icon\"></i>
        <span class=\"menu-title\">Dashboard</span>
      </a>
    </li>
    
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
        <i class=\"menu-icon mdi mdi-floor-plan\"></i>
        <span class=\"menu-title\">Activités</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse\" id=\"ui-basic\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"activite/back\">Activité</a></li>
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"reservationactivite/back\">Réservations</a></li>
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

    // line 487
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 488
        echo "      <!-- partial -->
      <div class=\"main-panel\">
        <div class=\"content-wrapper\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"home-tab\">
                <div class=\"d-sm-flex align-items-center justify-content-between border-bottom\">
                  <ul class=\"nav nav-tabs\" role=\"tablist\">
                    <li class=\"nav-item\" role=\"presentation\">
                      <a class=\"nav-link ps-0 active\" id=\"home-tab\" data-bs-toggle=\"tab\" href=\"#overview\" role=\"tab\" aria-controls=\"overview\" aria-selected=\"true\">Overview</a>
                    </li>
                    
                    
                    
                  </ul>
                  <div>
                    <div class=\"btn-wrapper\">
                      
                      
                      <a href=\"#\" class=\"btn btn-primary text-white me-0\"><i class=\"icon-download\"></i> Export</a>
                    </div>
                  </div>
                </div>
                <div class=\"tab-content tab-content-basic\">
                  <div class=\"tab-pane fade active show\" id=\"overview\" role=\"tabpanel\" aria-labelledby=\"overview\">
                    <div class=\"row\">
                      <div class=\"col-sm-12\">
                        <div class=\"statistics-details d-flex align-items-center justify-content-between\">
                          <div>
                            <p class=\"statistics-title\">Bounce Rate</p>
                            <h3 class=\"rate-percentage\">32.53%</h3>
                            
                          </div>
                          <div>
                            <p class=\"statistics-title\">Page Views</p>
                            <h3 class=\"rate-percentage\">7,682</h3>
                            
                          </div>
                          <div>
                            <p class=\"statistics-title\">New Sessions</p>
                            <h3 class=\"rate-percentage\">68.8</h3>
                            
                          </div>
                          <div class=\"d-none d-md-block\">
                            <p class=\"statistics-title\">Avg. Time on Site</p>
                            <h3 class=\"rate-percentage\">2m:35s</h3>
                            
                          </div>
                          <div class=\"d-none d-md-block\">
                            <p class=\"statistics-title\">New Sessions</p>
                            <h3 class=\"rate-percentage\">68.8</h3>
                            
                          </div>
                          <div class=\"d-none d-md-block\">
                            <p class=\"statistics-title\">Avg. Time on Site</p>
                            <h3 class=\"rate-percentage\">2m:35s</h3>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class=\"row\">
                      <div class=\"col-lg-8 d-flex flex-column\">
                        <div class=\"row flex-grow\">
                          <div class=\"col-12 grid-margin stretch-card\">
                            <div class=\"card card-rounded\">
                              <div class=\"card-body\">
                                <div class=\"d-sm-flex justify-content-between align-items-start\">
                                  <div>
                                    <h4 class=\"card-title card-title-dash\">Market Overview</h4>
                                    
                                  </div>
                                  <div>
                                    <div class=\"dropdown\">
                                      <button class=\"btn btn-light dropdown-toggle toggle-dark btn-lg mb-0 me-0\" type=\"button\" id=\"dropdownMenuButton2\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> This month </button>
                                      <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton2\">
                                        <h6 class=\"dropdown-header\">Settings</h6>
                                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\" href=\"#\">Separated link</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class=\"d-sm-flex align-items-center mt-1 justify-content-between\">
                                  <div class=\"d-sm-flex align-items-center mt-4 justify-content-between\">
                                    <h2 class=\"me-2 fw-bold\">\$36,2531.00</h2>
                                    <h4 class=\"me-2\">USD</h4>
                                    <h4 class=\"text-success\">(+1.37%)</h4>
                                  </div>
                                  <div class=\"me-3\">
                                    <div id=\"marketingOverview-legend\"><ul>
                  <li>
                    <span style=\"background-color: #52CDFF\"></span>
                    Last week
                  </li>
                
                  <li>
                    <span style=\"background-color: #1F3BB3\"></span>
                    This week
                  </li>
                </ul><ul>
                  <li>
                    <span style=\"background-color: #52CDFF\"></span>
                    Last week
                  </li>
                
                  <li>
                    <span style=\"background-color: #1F3BB3\"></span>
                    This week
                  </li>
                </ul><ul>
                  <li>
                    <span style=\"background-color: #52CDFF\"></span>
                    Last week
                  </li>
                
                  <li>
                    <span style=\"background-color: #1F3BB3\"></span>
                    This week
                  </li>
                </ul><ul>
                  <li>
                    <span style=\"background-color: #52CDFF\"></span>
                    Last week
                  </li>
                
                  <li>
                    <span style=\"background-color: #1F3BB3\"></span>
                    This week
                  </li>
                </ul><ul>
                  <li>
                    <span style=\"background-color: #52CDFF\"></span>
                    Last week
                  </li>
                
                  <li>
                    <span style=\"background-color: #1F3BB3\"></span>
                    This week
                  </li>
                </ul><ul>
                  <li>
                    <span style=\"background-color: #52CDFF\"></span>
                    Last week
                  </li>
                
                  <li>
                    <span style=\"background-color: #1F3BB3\"></span>
                    This week
                  </li>
                </ul></div>
                                  </div>
                                </div>
                                <div class=\"chartjs-bar-wrapper mt-3\">
                                  <canvas id=\"marketingOverview\" width=\"602\" height=\"150\" style=\"display: block; box-sizing: border-box; height: 150px; width: 602px;\"></canvas>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        
                      </div>
                      <div class=\"col-lg-4 d-flex flex-column\">
                        <div class=\"row flex-grow\">
                          <div class=\"col-12 grid-margin stretch-card\">
                            <div class=\"card card-rounded\">
                              <div class=\"card-body\">
                                <div class=\"row\">
                                  <div class=\"col-lg-12\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                      <h4 class=\"card-title card-title-dash\">Todo list</h4>
                                      <div class=\"add-items d-flex mb-0\">
                                        <!-- <input type=\"text\" class=\"form-control todo-list-input\" placeholder=\"What do you need to do today?\"> -->
                                        <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p\"><i class=\"mdi mdi-plus\"></i></button>
                                      </div>
                                    </div>
                                    <div class=\"list-wrapper\">
                                      <ul class=\"todo-list todo-list-rounded\">
                                        <li class=\"d-block\">
                                          <div class=\"form-check w-100\">
                                            <label class=\"form-check-label\">
                                              <input class=\"checkbox\" type=\"checkbox\"> Lorem Ipsum is simply dummy text
                                              of the printing <i class=\"input-helper rounded\"></i>
                                            <i class=\"input-helper\"></i></label>
                                            <div class=\"d-flex mt-2\">
                                              <div class=\"ps-4 text-small me-3\">24 June 2020</div>
                                              <div class=\"badge badge-opacity-warning me-3\">Due tomorrow</div>
                                              <i class=\"mdi mdi-flag ms-2 flag-color\"></i>
                                            </div>
                                          </div>
                                        </li>
                                        <li class=\"d-block\">
                                          <div class=\"form-check w-100\">
                                            <label class=\"form-check-label\">
                                              <input class=\"checkbox\" type=\"checkbox\"> Lorem Ipsum is simply dummy text
                                              of the printing <i class=\"input-helper rounded\"></i>
                                            <i class=\"input-helper\"></i></label>
                                            <div class=\"d-flex mt-2\">
                                              <div class=\"ps-4 text-small me-3\">23 June 2020</div>
                                              <div class=\"badge badge-opacity-success me-3\">Done</div>
                                            </div>
                                          </div>
                                        </li>
                                        <li>
                                          <div class=\"form-check w-100\">
                                            <label class=\"form-check-label\">
                                              <input class=\"checkbox\" type=\"checkbox\"> Lorem Ipsum is simply dummy text
                                              of the printing <i class=\"input-helper rounded\"></i>
                                            <i class=\"input-helper\"></i></label>
                                            <div class=\"d-flex mt-2\">
                                              <div class=\"ps-4 text-small me-3\">24 June 2020</div>
                                              <div class=\"badge badge-opacity-success me-3\">Done</div>
                                            </div>
                                          </div>
                                        </li>
                                        <li class=\"border-bottom-0\">
                                          <div class=\"form-check w-100\">
                                            <label class=\"form-check-label\">
                                              <input class=\"checkbox\" type=\"checkbox\"> Lorem Ipsum is simply dummy text
                                              of the printing <i class=\"input-helper rounded\"></i>
                                            <i class=\"input-helper\"></i></label>
                                            <div class=\"d-flex mt-2\">
                                              <div class=\"ps-4 text-small me-3\">24 June 2020</div>
                                              <div class=\"badge badge-opacity-danger me-3\">Expired</div>
                                            </div>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 749
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 750
        echo "  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src=\"";
        // line 752
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/vendors/js/vendor.bundle.base.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 753
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src=\"";
        // line 756
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/vendors/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 757
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/vendors/progressbar.js/progressbar.min.js"), "html", null, true);
        echo "\"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src=\"";
        // line 760
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/js/off-canvas.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 761
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/js/hoverable-collapse.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 762
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/js/template.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 763
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/js/settings.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 764
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/js/todolist.js"), "html", null, true);
        echo "\"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src=\"";
        // line 767
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/js/jquery.cookie.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
  <script src=\"";
        // line 768
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/js/dashboard.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 769
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/js/proBanner.js"), "html", null, true);
        echo "\"></script>
  <!-- <script src=\"";
        // line 770
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../../BackOffice/js/Chart.roundedBarCharts.js"), "html", null, true);
        echo "\"></script> -->
  <!-- End custom js for this page-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "baseBack.html.twig";
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
        return array (  1034 => 770,  1030 => 769,  1026 => 768,  1022 => 767,  1016 => 764,  1012 => 763,  1008 => 762,  1004 => 761,  1000 => 760,  994 => 757,  990 => 756,  984 => 753,  980 => 752,  976 => 750,  966 => 749,  698 => 488,  688 => 487,  586 => 394,  576 => 393,  564 => 23,  559 => 21,  553 => 18,  549 => 17,  543 => 14,  539 => 13,  535 => 12,  531 => 11,  527 => 10,  522 => 9,  512 => 8,  493 => 6,  481 => 773,  479 => 749,  475 => 747,  473 => 487,  471 => 393,  453 => 378,  441 => 369,  429 => 360,  417 => 351,  402 => 339,  390 => 330,  246 => 189,  240 => 186,  226 => 175,  214 => 166,  202 => 157,  89 => 47,  83 => 44,  62 => 25,  60 => 8,  55 => 6,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\"><head>
  <!-- Required meta tags -->
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <title> {% block title %}GeSport Admin {% endblock %}</title>
  <!-- plugins:css -->
  {% block stylesheets %}
  <link rel=\"stylesheet\" href=\"{{ asset('BackOffice/vendors/feather/feather.css')}}\">
  <link rel=\"stylesheet\" href=\"{{ asset('BackOffice/vendors/mdi/css/materialdesignicons.min.css')}}\">
  <link rel=\"stylesheet\" href=\"{{ asset('BackOffice/vendors/ti-icons/css/themify-icons.css')}}\">
  <link rel=\"stylesheet\" href=\"{{ asset('BackOffice/vendors/typicons/typicons.css')}}\">
  <link rel=\"stylesheet\" href=\"{{ asset('BackOffice/vendors/simple-line-icons/css/simple-line-icons.css')}}\">
  <link rel=\"stylesheet\" href=\"{{ asset('BackOffice/vendors/css/vendor.bundle.base.css')}}\">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel=\"stylesheet\" href=\"{{ asset('BackOffice/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('BackOffice//js/select.dataTables.min.css')}}\">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel=\"stylesheet\" href=\"{{ asset('BackOffice/css/vertical-layout-light/style.css')}}\">
  <!-- endinject -->
  <link rel=\"shortcut icon\" href=\"{{ asset('BackOffice/images/favicon.png')}}\">
  {% endblock %}
</head>

<body class=\"with-welcome-text\">
  <div class=\"container-scroller\">
    <div class=\"row p-0 m-0 proBanner d-flex\" id=\"proBanner\">
      <div class=\"col-md-12 p-0 m-0\">
        
      </div>
    </div>
    <!-- partial:partials/_navbar.html -->
    <nav class=\"navbar default-layout col-lg-12 col-12 p-0 d-flex align-items-top flex-row pt-5 mt-3\">
  <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-start\">
    <div class=\"me-3\">
      <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-bs-toggle=\"minimize\">
        <span class=\"icon-menu\"></span>
      </button>
    </div>
    <div>
      <a class=\"navbar-brand brand-logo\" href=\"../index.html\">
        <img src=\"{{ asset('../BackOffice/images/logo.svg')}}\" alt=\"logo\">
      </a>
      <a class=\"navbar-brand brand-logo-mini\" href=\"../index.html\">
        <img src=\"{{ asset('../BackOffice/images/logo-mini.svg')}}\" alt=\"logo\">
      </a>
    </div>
  </div>
  <div class=\"navbar-menu-wrapper d-flex align-items-top\">
    <ul class=\"navbar-nav\">
      <li class=\"nav-item font-weight-semibold d-none d-lg-block ms-0\">
        <h1 class=\"welcome-text\">Good Morning, <span class=\"text-black fw-bold\">John Doe</span></h1>
        <h3 class=\"welcome-sub-text\">Your performance summary this week </h3>
      </li>
    </ul>
    <ul class=\"navbar-nav ms-auto\">
      <li class=\"nav-item dropdown d-none d-lg-block\">
        
        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"messageDropdown\">
          <a class=\"dropdown-item py-3\">
            <p class=\"mb-0 font-weight-medium float-left\">Select category</p>
          </a>
          <div class=\"dropdown-divider\"></div>
          <a class=\"dropdown-item preview-item\">
            <div class=\"preview-item-content flex-grow py-2\">
              <p class=\"preview-subject ellipsis font-weight-medium text-dark\">Bootstrap Bundle </p>
              <p class=\"fw-light small-text mb-0\">This is a Bundle featuring 16 unique dashboards</p>
            </div>
          </a>
          <a class=\"dropdown-item preview-item\">
            <div class=\"preview-item-content flex-grow py-2\">
              <p class=\"preview-subject ellipsis font-weight-medium text-dark\">Angular Bundle</p>
              <p class=\"fw-light small-text mb-0\">Everything you’ll ever need for your Angular projects</p>
            </div>
          </a>
          <a class=\"dropdown-item preview-item\">
            <div class=\"preview-item-content flex-grow py-2\">
              <p class=\"preview-subject ellipsis font-weight-medium text-dark\">VUE Bundle</p>
              <p class=\"fw-light small-text mb-0\">Bundle of 6 Premium Vue Admin Dashboard</p>
            </div>
          </a>
          <a class=\"dropdown-item preview-item\">
            <div class=\"preview-item-content flex-grow py-2\">
              <p class=\"preview-subject ellipsis font-weight-medium text-dark\">React Bundle</p>
              <p class=\"fw-light small-text mb-0\">Bundle of 8 Premium React Admin Dashboard</p>
            </div>
          </a>
        </div>
      </li>
      <li class=\"nav-item d-none d-lg-block\">
        <div id=\"datepicker-popup\" class=\"input-group date datepicker navbar-date-picker\">
          <span class=\"input-group-addon input-group-prepend border-right\">
            <span class=\"icon-calendar input-group-text calendar-icon\"></span>
          </span>
          <input type=\"text\" class=\"form-control\">
        </div>
      </li>
      <li class=\"nav-item\">
        <form class=\"search-form\" action=\"#\">
          <i class=\"icon-search\"></i>
          <input type=\"search\" class=\"form-control\" placeholder=\"Search Here\" title=\"Search here\">
        </form>
      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link count-indicator\" id=\"notificationDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
          <i class=\"icon-bell\"></i>
          <span class=\"count\"></span>
        </a>
        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"notificationDropdown\">
          <a class=\"dropdown-item py-3 border-bottom\">
            <p class=\"mb-0 font-weight-medium float-left\">You have 4 new notifications </p>
            <span class=\"badge badge-pill badge-primary float-right\">View all</span>
          </a>
          <a class=\"dropdown-item preview-item py-3\">
            <div class=\"preview-thumbnail\">
              <i class=\"mdi mdi-alert m-auto text-primary\"></i>
            </div>
            <div class=\"preview-item-content\">
              <h6 class=\"preview-subject fw-normal text-dark mb-1\">Application Error</h6>
              <p class=\"fw-light small-text mb-0\"> Just now </p>
            </div>
          </a>
          <a class=\"dropdown-item preview-item py-3\">
            <div class=\"preview-thumbnail\">
              <i class=\"mdi mdi-settings m-auto text-primary\"></i>
            </div>
            <div class=\"preview-item-content\">
              <h6 class=\"preview-subject fw-normal text-dark mb-1\">Settings</h6>
              <p class=\"fw-light small-text mb-0\"> Private message </p>
            </div>
          </a>
          <a class=\"dropdown-item preview-item py-3\">
            <div class=\"preview-thumbnail\">
              <i class=\"mdi mdi-airballoon m-auto text-primary\"></i>
            </div>
            <div class=\"preview-item-content\">
              <h6 class=\"preview-subject fw-normal text-dark mb-1\">New user registration</h6>
              <p class=\"fw-light small-text mb-0\"> 2 days ago </p>
            </div>
          </a>
        </div>
      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link count-indicator\" id=\"countDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
          <i class=\"icon-mail icon-lg\"></i>
        </a>
        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"countDropdown\">
          <a class=\"dropdown-item py-3\">
            <p class=\"mb-0 font-weight-medium float-left\">You have 7 unread mails </p>
            <span class=\"badge badge-pill badge-primary float-right\">View all</span>
          </a>
          <div class=\"dropdown-divider\"></div>
          <a class=\"dropdown-item preview-item\">
            <div class=\"preview-thumbnail\">
              <img src=\"{{ asset('../BackOffice/images/faces/face10.jpg')}}\" alt=\"image\" class=\"img-sm profile-pic\">
            </div>
            <div class=\"preview-item-content flex-grow py-2\">
              <p class=\"preview-subject ellipsis font-weight-medium text-dark\">Marian Garner </p>
              <p class=\"fw-light small-text mb-0\"> The meeting is cancelled </p>
            </div>
          </a>
          <a class=\"dropdown-item preview-item\">
            <div class=\"preview-thumbnail\">
              <img src=\"{{ asset('../BackOffice/images/faces/face12.jpg')}}\" alt=\"image\" class=\"img-sm profile-pic\">
            </div>
            <div class=\"preview-item-content flex-grow py-2\">
              <p class=\"preview-subject ellipsis font-weight-medium text-dark\">David Grey </p>
              <p class=\"fw-light small-text mb-0\"> The meeting is cancelled </p>
            </div>
          </a>
          <a class=\"dropdown-item preview-item\">
            <div class=\"preview-thumbnail\">
              <img src=\"{{ asset('../BackOffice/images/faces/face1.jpg')}}\" alt=\"image\" class=\"img-sm profile-pic\">
            </div>
            <div class=\"preview-item-content flex-grow py-2\">
              <p class=\"preview-subject ellipsis font-weight-medium text-dark\">Travis Jenkins </p>
              <p class=\"fw-light small-text mb-0\"> The meeting is cancelled </p>
            </div>
          </a>
        </div>
      </li>
      <li class=\"nav-item dropdown d-none d-lg-block user-dropdown\">
        <a class=\"nav-link\" id=\"UserDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
          <img class=\"img-xs rounded-circle\" src=\"{{ asset('../BackOffice/images/faces/face8.jpg')}}\" alt=\"Profile image\"> </a>
        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"UserDropdown\">
          <div class=\"dropdown-header text-center\">
            <img class=\"img-md rounded-circle\" src=\"{{ asset('../BackOffice/images/faces/face8.jpg')}}\" alt=\"Profile image\">
            <p class=\"mb-1 mt-3 font-weight-semibold\">Allen Moreno</p>
            <p class=\"fw-light text-muted mb-0\">allenmoreno@gmail.com</p>
          </div>
          <a class=\"dropdown-item\"><i class=\"dropdown-item-icon mdi mdi-account-outline text-primary me-2\"></i> My
            Profile <span class=\"badge badge-pill badge-danger\">1</span></a>
          <a class=\"dropdown-item\"><i class=\"dropdown-item-icon mdi mdi-message-text-outline text-primary me-2\"></i>
            Messages</a>
          <a class=\"dropdown-item\"><i class=\"dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2\"></i>
            Activity</a>
          <a class=\"dropdown-item\"><i class=\"dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2\"></i>
            FAQ</a>
          <a class=\"dropdown-item\"><i class=\"dropdown-item-icon mdi mdi-power text-primary me-2\"></i>Sign Out</a>
        </div>
      </li>
    </ul>
    <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-bs-toggle=\"offcanvas\">
      <span class=\"mdi mdi-menu\"></span>
    </button>
  </div>
</nav>
    <!-- partial -->
    <div class=\"container-fluid page-body-wrapper pt-0\">
      <!-- partial:partials/_settings-panel.html -->
      <div class=\"theme-setting-wrapper\">
  <div id=\"settings-trigger\"><i class=\"ti-settings\"></i></div>
  <div id=\"theme-settings\" class=\"settings-panel\">
    <i class=\"settings-close ti-close\"></i>
    <p class=\"settings-heading\">SIDEBAR SKINS</p>
    <div class=\"sidebar-bg-options selected\" id=\"sidebar-light-theme\">
      <div class=\"img-ss rounded-circle bg-light border me-3\"></div>Light
    </div>
    <div class=\"sidebar-bg-options\" id=\"sidebar-dark-theme\">
      <div class=\"img-ss rounded-circle bg-dark border me-3\"></div>Dark
    </div>
    <p class=\"settings-heading mt-2\">HEADER SKINS</p>
    <div class=\"color-tiles mx-0 px-4\">
      <div class=\"tiles success\"></div>
      <div class=\"tiles warning\"></div>
      <div class=\"tiles danger\"></div>
      <div class=\"tiles info\"></div>
      <div class=\"tiles dark\"></div>
      <div class=\"tiles default\"></div>
    </div>
  </div>
</div>
<div id=\"right-sidebar\" class=\"settings-panel\">
  <i class=\"settings-close ti-close\"></i>
  <ul class=\"nav nav-tabs border-top\" id=\"setting-panel\" role=\"tablist\">
    <li class=\"nav-item\" role=\"presentation\">
      <a class=\"nav-link active\" id=\"todo-tab\" data-bs-toggle=\"tab\" href=\"#todo-section\" role=\"tab\" aria-controls=\"todo-section\" aria-expanded=\"true\" aria-selected=\"true\">TO DO LIST</a>
    </li>
    <li class=\"nav-item\" role=\"presentation\">
      <a class=\"nav-link\" id=\"chats-tab\" data-bs-toggle=\"tab\" href=\"#chats-section\" role=\"tab\" aria-controls=\"chats-section\" aria-selected=\"false\" tabindex=\"-1\">CHATS</a>
    </li>
  </ul>
  <div class=\"tab-content\" id=\"setting-content\">
    <div class=\"tab-pane fade show active scroll-wrapper ps\" id=\"todo-section\" role=\"tabpanel\" aria-labelledby=\"todo-section\">
      <div class=\"add-items d-flex px-3 mb-0\">
        <form class=\"form w-100\">
          <div class=\"form-group d-flex\">
            <input type=\"text\" class=\"form-control todo-list-input\" placeholder=\"Add To-do\">
            <button type=\"submit\" class=\"add btn btn-primary todo-list-add-btn\" id=\"add-task\">Add</button>
          </div>
        </form>
      </div>
      <div class=\"list-wrapper px-3\">
        <ul class=\"d-flex flex-column-reverse todo-list\">
          <li>
            <div class=\"form-check\">
              <label class=\"form-check-label\">
                <input class=\"checkbox\" type=\"checkbox\">
                Team review meeting at 3.00 PM
              <i class=\"input-helper\"></i></label>
            </div>
            <i class=\"remove ti-close\"></i>
          </li>
          <li>
            <div class=\"form-check\">
              <label class=\"form-check-label\">
                <input class=\"checkbox\" type=\"checkbox\">
                Prepare for presentation
              <i class=\"input-helper\"></i></label>
            </div>
            <i class=\"remove ti-close\"></i>
          </li>
          <li>
            <div class=\"form-check\">
              <label class=\"form-check-label\">
                <input class=\"checkbox\" type=\"checkbox\">
                Resolve all the low priority tickets due today
              <i class=\"input-helper\"></i></label>
            </div>
            <i class=\"remove ti-close\"></i>
          </li>
          <li class=\"completed\">
            <div class=\"form-check\">
              <label class=\"form-check-label\">
                <input class=\"checkbox\" type=\"checkbox\" checked=\"\">
                Schedule meeting for next week
              <i class=\"input-helper\"></i></label>
            </div>
            <i class=\"remove ti-close\"></i>
          </li>
          <li class=\"completed\">
            <div class=\"form-check\">
              <label class=\"form-check-label\">
                <input class=\"checkbox\" type=\"checkbox\" checked=\"\">
                Project review
              <i class=\"input-helper\"></i></label>
            </div>
            <i class=\"remove ti-close\"></i>
          </li>
        </ul>
      </div>
      <h4 class=\"px-3 text-muted mt-5 fw-light mb-0\">Events</h4>
      <div class=\"events pt-4 px-3\">
        <div class=\"wrapper d-flex mb-2\">
          <i class=\"ti-control-record text-primary me-2\"></i>
          <span>Feb 11 2018</span>
        </div>
        <p class=\"mb-0 font-weight-thin text-gray\">Creating component page build a js</p>
        <p class=\"text-gray mb-0\">The total number of sessions</p>
      </div>
      <div class=\"events pt-4 px-3\">
        <div class=\"wrapper d-flex mb-2\">
          <i class=\"ti-control-record text-primary me-2\"></i>
          <span>Feb 7 2018</span>
        </div>
        <p class=\"mb-0 font-weight-thin text-gray\">Meeting with Alisa</p>
        <p class=\"text-gray mb-0 \">Call Sarah Graves</p>
      </div>
    <div class=\"ps__rail-x\" style=\"left: 0px; bottom: 0px;\"><div class=\"ps__thumb-x\" tabindex=\"0\" style=\"left: 0px; width: 0px;\"></div></div><div class=\"ps__rail-y\" style=\"top: 0px; right: 0px;\"><div class=\"ps__thumb-y\" tabindex=\"0\" style=\"top: 0px; height: 0px;\"></div></div></div>
    <!-- To do section tab ends -->
    <div class=\"tab-pane fade\" id=\"chats-section\" role=\"tabpanel\" aria-labelledby=\"chats-section\">
      <div class=\"d-flex align-items-center justify-content-between border-bottom\">
        <p class=\"settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0\">Friends</p>
        <small class=\"settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal\">See All</small>
      </div>
      <ul class=\"chat-list\">
        <li class=\"list active\">
          <div class=\"profile\"><img src=\"{{ asset('../BackOffice/images/faces/face1.jpg')}}\" alt=\"image\"><span class=\"online\"></span>
          </div>
          <div class=\"info\">
            <p>Thomas Douglas</p>
            <p>Available</p>
          </div>
          <small class=\"text-muted my-auto\">19 min</small>
        </li>
        <li class=\"list\">
          <div class=\"profile\"><img src=\"{{ asset('../BackOffice/images/faces/face2.jpg')}}\" alt=\"image\"><span class=\"offline\"></span>
          </div>
          <div class=\"info\">
            <div class=\"wrapper d-flex\">
              <p>Catherine</p>
            </div>
            <p>Away</p>
          </div>
          <div class=\"badge badge-success badge-pill my-auto mx-2\">4</div>
          <small class=\"text-muted my-auto\">23 min</small>
        </li>
        <li class=\"list\">
          <div class=\"profile\"><img src=\"{{ asset('../BackOffice/images/faces/face3.jpg')}}\" alt=\"image\"><span class=\"online\"></span>
          </div>
          <div class=\"info\">
            <p>Daniel Russell</p>
            <p>Available</p>
          </div>
          <small class=\"text-muted my-auto\">14 min</small>
        </li>
        <li class=\"list\">
          <div class=\"profile\"><img src=\"{{ asset('../BackOffice/images/faces/face4.jpg')}}\" alt=\"image\"><span class=\"offline\"></span>
          </div>
          <div class=\"info\">
            <p>James Richardson</p>
            <p>Away</p>
          </div>
          <small class=\"text-muted my-auto\">2 min</small>
        </li>
        <li class=\"list\">
          <div class=\"profile\"><img src=\"{{ asset('../BackOffice/images/faces/face5.jpg')}}\" alt=\"image\"><span class=\"online\"></span>
          </div>
          <div class=\"info\">
            <p>Madeline Kennedy</p>
            <p>Available</p>
          </div>
          <small class=\"text-muted my-auto\">5 min</small>
        </li>
        <li class=\"list\">
          <div class=\"profile\"><img src=\"{{ asset('../BackOffice/images/faces/face6.jpg')}}\" alt=\"image\"><span class=\"online\"></span>
          </div>
          <div class=\"info\">
            <p>Sarah Graves</p>
            <p>Available</p>
          </div>
          <small class=\"text-muted my-auto\">47 min</small>
        </li>
      </ul>
    </div>
    <!-- chat tab ends -->
  </div>
</div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      {% block sidebar %}
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
  <ul class=\"nav\">
    <li class=\"nav-item active\">
      <a class=\"nav-link\" href=\"../index.html\">
        <i class=\"mdi mdi-grid-large menu-icon\"></i>
        <span class=\"menu-title\">Dashboard</span>
      </a>
    </li>
    
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
        <i class=\"menu-icon mdi mdi-floor-plan\"></i>
        <span class=\"menu-title\">Activités</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse\" id=\"ui-basic\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"activite/back\">Activité</a></li>
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"reservationactivite/back\">Réservations</a></li>
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
      <!-- partial -->
      <div class=\"main-panel\">
        <div class=\"content-wrapper\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"home-tab\">
                <div class=\"d-sm-flex align-items-center justify-content-between border-bottom\">
                  <ul class=\"nav nav-tabs\" role=\"tablist\">
                    <li class=\"nav-item\" role=\"presentation\">
                      <a class=\"nav-link ps-0 active\" id=\"home-tab\" data-bs-toggle=\"tab\" href=\"#overview\" role=\"tab\" aria-controls=\"overview\" aria-selected=\"true\">Overview</a>
                    </li>
                    
                    
                    
                  </ul>
                  <div>
                    <div class=\"btn-wrapper\">
                      
                      
                      <a href=\"#\" class=\"btn btn-primary text-white me-0\"><i class=\"icon-download\"></i> Export</a>
                    </div>
                  </div>
                </div>
                <div class=\"tab-content tab-content-basic\">
                  <div class=\"tab-pane fade active show\" id=\"overview\" role=\"tabpanel\" aria-labelledby=\"overview\">
                    <div class=\"row\">
                      <div class=\"col-sm-12\">
                        <div class=\"statistics-details d-flex align-items-center justify-content-between\">
                          <div>
                            <p class=\"statistics-title\">Bounce Rate</p>
                            <h3 class=\"rate-percentage\">32.53%</h3>
                            
                          </div>
                          <div>
                            <p class=\"statistics-title\">Page Views</p>
                            <h3 class=\"rate-percentage\">7,682</h3>
                            
                          </div>
                          <div>
                            <p class=\"statistics-title\">New Sessions</p>
                            <h3 class=\"rate-percentage\">68.8</h3>
                            
                          </div>
                          <div class=\"d-none d-md-block\">
                            <p class=\"statistics-title\">Avg. Time on Site</p>
                            <h3 class=\"rate-percentage\">2m:35s</h3>
                            
                          </div>
                          <div class=\"d-none d-md-block\">
                            <p class=\"statistics-title\">New Sessions</p>
                            <h3 class=\"rate-percentage\">68.8</h3>
                            
                          </div>
                          <div class=\"d-none d-md-block\">
                            <p class=\"statistics-title\">Avg. Time on Site</p>
                            <h3 class=\"rate-percentage\">2m:35s</h3>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class=\"row\">
                      <div class=\"col-lg-8 d-flex flex-column\">
                        <div class=\"row flex-grow\">
                          <div class=\"col-12 grid-margin stretch-card\">
                            <div class=\"card card-rounded\">
                              <div class=\"card-body\">
                                <div class=\"d-sm-flex justify-content-between align-items-start\">
                                  <div>
                                    <h4 class=\"card-title card-title-dash\">Market Overview</h4>
                                    
                                  </div>
                                  <div>
                                    <div class=\"dropdown\">
                                      <button class=\"btn btn-light dropdown-toggle toggle-dark btn-lg mb-0 me-0\" type=\"button\" id=\"dropdownMenuButton2\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> This month </button>
                                      <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton2\">
                                        <h6 class=\"dropdown-header\">Settings</h6>
                                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\" href=\"#\">Separated link</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class=\"d-sm-flex align-items-center mt-1 justify-content-between\">
                                  <div class=\"d-sm-flex align-items-center mt-4 justify-content-between\">
                                    <h2 class=\"me-2 fw-bold\">\$36,2531.00</h2>
                                    <h4 class=\"me-2\">USD</h4>
                                    <h4 class=\"text-success\">(+1.37%)</h4>
                                  </div>
                                  <div class=\"me-3\">
                                    <div id=\"marketingOverview-legend\"><ul>
                  <li>
                    <span style=\"background-color: #52CDFF\"></span>
                    Last week
                  </li>
                
                  <li>
                    <span style=\"background-color: #1F3BB3\"></span>
                    This week
                  </li>
                </ul><ul>
                  <li>
                    <span style=\"background-color: #52CDFF\"></span>
                    Last week
                  </li>
                
                  <li>
                    <span style=\"background-color: #1F3BB3\"></span>
                    This week
                  </li>
                </ul><ul>
                  <li>
                    <span style=\"background-color: #52CDFF\"></span>
                    Last week
                  </li>
                
                  <li>
                    <span style=\"background-color: #1F3BB3\"></span>
                    This week
                  </li>
                </ul><ul>
                  <li>
                    <span style=\"background-color: #52CDFF\"></span>
                    Last week
                  </li>
                
                  <li>
                    <span style=\"background-color: #1F3BB3\"></span>
                    This week
                  </li>
                </ul><ul>
                  <li>
                    <span style=\"background-color: #52CDFF\"></span>
                    Last week
                  </li>
                
                  <li>
                    <span style=\"background-color: #1F3BB3\"></span>
                    This week
                  </li>
                </ul><ul>
                  <li>
                    <span style=\"background-color: #52CDFF\"></span>
                    Last week
                  </li>
                
                  <li>
                    <span style=\"background-color: #1F3BB3\"></span>
                    This week
                  </li>
                </ul></div>
                                  </div>
                                </div>
                                <div class=\"chartjs-bar-wrapper mt-3\">
                                  <canvas id=\"marketingOverview\" width=\"602\" height=\"150\" style=\"display: block; box-sizing: border-box; height: 150px; width: 602px;\"></canvas>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        
                      </div>
                      <div class=\"col-lg-4 d-flex flex-column\">
                        <div class=\"row flex-grow\">
                          <div class=\"col-12 grid-margin stretch-card\">
                            <div class=\"card card-rounded\">
                              <div class=\"card-body\">
                                <div class=\"row\">
                                  <div class=\"col-lg-12\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                      <h4 class=\"card-title card-title-dash\">Todo list</h4>
                                      <div class=\"add-items d-flex mb-0\">
                                        <!-- <input type=\"text\" class=\"form-control todo-list-input\" placeholder=\"What do you need to do today?\"> -->
                                        <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p\"><i class=\"mdi mdi-plus\"></i></button>
                                      </div>
                                    </div>
                                    <div class=\"list-wrapper\">
                                      <ul class=\"todo-list todo-list-rounded\">
                                        <li class=\"d-block\">
                                          <div class=\"form-check w-100\">
                                            <label class=\"form-check-label\">
                                              <input class=\"checkbox\" type=\"checkbox\"> Lorem Ipsum is simply dummy text
                                              of the printing <i class=\"input-helper rounded\"></i>
                                            <i class=\"input-helper\"></i></label>
                                            <div class=\"d-flex mt-2\">
                                              <div class=\"ps-4 text-small me-3\">24 June 2020</div>
                                              <div class=\"badge badge-opacity-warning me-3\">Due tomorrow</div>
                                              <i class=\"mdi mdi-flag ms-2 flag-color\"></i>
                                            </div>
                                          </div>
                                        </li>
                                        <li class=\"d-block\">
                                          <div class=\"form-check w-100\">
                                            <label class=\"form-check-label\">
                                              <input class=\"checkbox\" type=\"checkbox\"> Lorem Ipsum is simply dummy text
                                              of the printing <i class=\"input-helper rounded\"></i>
                                            <i class=\"input-helper\"></i></label>
                                            <div class=\"d-flex mt-2\">
                                              <div class=\"ps-4 text-small me-3\">23 June 2020</div>
                                              <div class=\"badge badge-opacity-success me-3\">Done</div>
                                            </div>
                                          </div>
                                        </li>
                                        <li>
                                          <div class=\"form-check w-100\">
                                            <label class=\"form-check-label\">
                                              <input class=\"checkbox\" type=\"checkbox\"> Lorem Ipsum is simply dummy text
                                              of the printing <i class=\"input-helper rounded\"></i>
                                            <i class=\"input-helper\"></i></label>
                                            <div class=\"d-flex mt-2\">
                                              <div class=\"ps-4 text-small me-3\">24 June 2020</div>
                                              <div class=\"badge badge-opacity-success me-3\">Done</div>
                                            </div>
                                          </div>
                                        </li>
                                        <li class=\"border-bottom-0\">
                                          <div class=\"form-check w-100\">
                                            <label class=\"form-check-label\">
                                              <input class=\"checkbox\" type=\"checkbox\"> Lorem Ipsum is simply dummy text
                                              of the printing <i class=\"input-helper rounded\"></i>
                                            <i class=\"input-helper\"></i></label>
                                            <div class=\"d-flex mt-2\">
                                              <div class=\"ps-4 text-small me-3\">24 June 2020</div>
                                              <div class=\"badge badge-opacity-danger me-3\">Expired</div>
                                            </div>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
{% endblock %}
    <!-- page-body-wrapper ends -->
  </div>
{% block js %}
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src=\"{{ asset('BackOffice/vendors/js/vendor.bundle.base.js')}}\"></script>
  <script src=\"{{ asset('BackOffice/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}\"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src=\"{{ asset('BackOffice/vendors/chart.js/Chart.min.js')}}\"></script>
  <script src=\"{{ asset('BackOffice/vendors/progressbar.js/progressbar.min.js')}}\"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src=\"{{ asset('BackOffice/js/off-canvas.js')}}\"></script>
  <script src=\"{{ asset('BackOffice/js/hoverable-collapse.js')}}\"></script>
  <script src=\"{{ asset('BackOffice/js/template.js')}}\"></script>
  <script src=\"{{ asset('BackOffice/js/settings.js')}}\"></script>
  <script src=\"{{ asset('BackOffice/js/todolist.js')}}\"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src=\"{{ asset('BackOffice/js/jquery.cookie.js')}}\" type=\"text/javascript\"></script>
  <script src=\"{{ asset('BackOffice/js/dashboard.js')}}\"></script>
  <script src=\"{{ asset('BackOffice/js/proBanner.js')}}\"></script>
  <!-- <script src=\"{{ asset('../../BackOffice/js/Chart.roundedBarCharts.js')}}\"></script> -->
  <!-- End custom js for this page-->
{% endblock %}

</body>
</html>", "baseBack.html.twig", "C:\\Users\\Rania\\Desktop\\gesportWeb\\templates\\baseBack.html.twig");
    }
}
