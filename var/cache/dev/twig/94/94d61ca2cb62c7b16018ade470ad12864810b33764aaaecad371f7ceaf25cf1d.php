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
class __TwigTemplate_0c938131b16d5997eb400bdf3a071c03ce7d309a4f4a8e95dee137b1eb3b5f8e extends Template
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
            'entete' => [$this, 'block_entete'],
            'menu' => [$this, 'block_menu'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t</title>

\t\t";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "
\t</head>
\t<body id=\"page-top\" class=\"hold-transition sidebar-mini\">
\t\t<div class=\"wrapper\">
\t\t\t<nav class=\"main-header navbar navbar-expand bg-white navbar-light border-bottom\">
\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t";
        // line 44
        $this->displayBlock('entete', $context, $blocks);
        // line 45
        echo "\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"modal\" data-target=\"#logoutModal\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<i class=\"fa fa-sign-out-alt\"></i>
\t\t\t\t\t\t\t<span>Déconnexion</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t\t<aside class=\"main-sidebar sidebar-dark-primary elevation-4\" style=\"background-color: #114e06;\">
\t\t\t\t<a href=\"#\" class=\"brand-link\">
\t\t\t\t\t<img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/img/logo.JPEG"), "html", null, true);
        echo "\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
\t\t\t\t\t<span class=\"brand-text font-weight-light\">AgroAL LVT</span>
\t\t\t\t</a>
\t\t\t\t<div class=\"sidebar\">
\t\t\t\t\t<nav class=\"mt-2\">
\t\t\t\t\t\t<ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">

\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_liste");
        echo "\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fa fa-th\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tAccueil
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        // line 71
        $this->displayBlock('menu', $context, $blocks);
        // line 131
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</aside>

\t\t\t<div class=\"content-wrapper\">
\t\t\t\t<section class=\"content-header\"></section>
\t\t\t\t<section class=\"content\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t<div class=\"card card-default\" style=\"box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15)!important;\">
\t\t\t\t\t\t\t<div class=\"card-body\"> ";
        // line 141
        $this->displayBlock('body', $context, $blocks);
        // line 142
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<a class=\"scroll-to-top rounded\" href=\"#page-top\" style=\"display: none;border-radius: .35rem!important;    position: absolute;right: 1rem;bottom: 0px; width: 2.75rem;height: 2.75rem;text-align: center;color: #fff;background: rgba(90,92,105,.5);line-height: 46px;\">
\t\t\t\t\t\t<i class=\"fas fa-angle-up\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Se déconnecter</h5>
\t\t\t\t\t\t\t<button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">×</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body\">Voulez-vous sortir de l'application ?</div>
\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t<button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Annuler</button>

\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
        // line 165
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Déconnexion</a>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 171
        $this->displayBlock('javascripts', $context, $blocks);
        // line 218
        echo "\t\t</body>
\t</html>
</body></html></body></html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "AgroAL LvT
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "\t\t\t<link rel=\"icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/img/logo.JPEG"), "html", null, true);
        echo "\" type=\"image/x-icon\"/>
\t\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
\t\t\t<link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/plugins/iCheck/all.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/plugins/datatables/dataTables.bootstrap4.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/plugins/select2/select2.min.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/dist/css/adminlte.min.css"), "html", null, true);
        echo "\">
\t\t\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t\t\t<link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
\t\t\t<style>
\t\t\t\t.btn-circle {
\t\t\t\t\tborder-radius: 100%;
\t\t\t\t}

\t\t\t\ttd img:hover {
\t\t\t\t\twidth: 300px;
\t\t\t\t\theight: 400px;
\t\t\t\t}
\t\t\t</style>

\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_entete($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entete"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entete"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 72
        echo "\t\t\t\t\t\t\t\t<li class=\"nav-header\">Gestion de l'entreprise</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entreprise_index");
        echo "\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-hands-helping\"></i>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tEntreprise
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("poste_index");
        echo "\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-people-carry\"></i>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tPoste
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-header\">Gestion de la production</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_index");
        echo "\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-print\"></i>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tProduit
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("matiere_premiere_index");
        echo "\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-cog\"></i>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tIntrant
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("critere_surveille_index");
        echo "\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-hand-paper\"></i>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tCritère à surveiller
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("type_probleme_index");
        echo "\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-table\"></i>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tType de problème
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-table\"></i>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tEnrégistrement
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 141
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 171
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 172
        echo "\t\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/js/sb-admin-2.min.js"), "html", null, true);
        echo "\"></script>

\t\t\t\t<script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/plugins/select2/select2.full.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/plugins/input-mask/jquery.inputmask.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/plugins/input-mask/jquery.inputmask.date.extensions.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/plugins/input-mask/jquery.inputmask.extensions.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js')}}\"></script>
\t\t\t\t<script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/plugins/fastclick/fastclick.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/dist/js/adminlte.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/dist/js/demo.js"), "html", null, true);
        echo "\"></script>

\t\t\t\t<script>
\t\t\t\t\t\$('.custom-file-input').on('change', function (event) {
var inputFile = event.currentTarget;
\$(inputFile).parent().find('.custom-file-label').html(inputFile.files[0].name);
});
\t\t\t\t</script>
\t\t\t\t<script>
\t\t\t\t\t\$(function () {
\$('.select2').select2()
\$('#equipe_datecreation').inputmask('dd/mm/yyyy', {'placeholder': 'dd/mm/yyyy'})

})
\t\t\t\t</script>
\t\t\t\t<script>
\t\t\t\t\t\$(document).ready(function () {
\$(function () {
\$('nav a[href^=\"/' + location.pathname.split(\"/\")[1] + '\"]').addClass('active');
});
});
\t\t\t\t</script>
\t\t\t\t<script>
\t\t\t\t\t\$(document).ready(function () {
if (\$(document).height() > \$(window).height() + 1) {

\$('.scroll-to-top').show();

}
});
\t\t\t\t</script>

\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  448 => 185,  444 => 184,  440 => 183,  436 => 182,  432 => 181,  427 => 179,  423 => 178,  419 => 177,  415 => 176,  411 => 175,  407 => 174,  401 => 172,  391 => 171,  373 => 141,  355 => 123,  344 => 115,  333 => 107,  322 => 99,  311 => 91,  299 => 82,  288 => 74,  284 => 72,  274 => 71,  256 => 44,  232 => 18,  228 => 17,  224 => 16,  220 => 15,  216 => 14,  209 => 11,  199 => 10,  179 => 6,  166 => 218,  164 => 171,  155 => 165,  130 => 142,  128 => 141,  116 => 131,  114 => 71,  104 => 64,  93 => 56,  80 => 45,  78 => 44,  64 => 32,  62 => 10,  58 => 8,  56 => 6,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t{% block title %}AgroAL LvT
\t\t\t{% endblock %}
\t\t</title>

\t\t{% block stylesheets %}
\t\t\t<link rel=\"icon\" href=\"{{asset('style/img/logo.JPEG')}}\" type=\"image/x-icon\"/>
\t\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
\t\t\t<link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('style/plugins/iCheck/all.css')}}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('style/plugins/datatables/dataTables.bootstrap4.css')}}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('style/plugins/select2/select2.min.css')}}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('style/dist/css/adminlte.min.css')}}\">
\t\t\t<link href=\"{{asset('style/vendor/fontawesome-free/css/all.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
\t\t\t<link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
\t\t\t<style>
\t\t\t\t.btn-circle {
\t\t\t\t\tborder-radius: 100%;
\t\t\t\t}

\t\t\t\ttd img:hover {
\t\t\t\t\twidth: 300px;
\t\t\t\t\theight: 400px;
\t\t\t\t}
\t\t\t</style>

\t\t{% endblock %}

\t</head>
\t<body id=\"page-top\" class=\"hold-transition sidebar-mini\">
\t\t<div class=\"wrapper\">
\t\t\t<nav class=\"main-header navbar navbar-expand bg-white navbar-light border-bottom\">
\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t{% block entete %}{% endblock %}
\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"modal\" data-target=\"#logoutModal\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<i class=\"fa fa-sign-out-alt\"></i>
\t\t\t\t\t\t\t<span>Déconnexion</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t\t<aside class=\"main-sidebar sidebar-dark-primary elevation-4\" style=\"background-color: #114e06;\">
\t\t\t\t<a href=\"#\" class=\"brand-link\">
\t\t\t\t\t<img src=\"{{asset('style/img/logo.JPEG')}}\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
\t\t\t\t\t<span class=\"brand-text font-weight-light\">AgroAL LVT</span>
\t\t\t\t</a>
\t\t\t\t<div class=\"sidebar\">
\t\t\t\t\t<nav class=\"mt-2\">
\t\t\t\t\t\t<ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">

\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"{{path('accueil_liste')}}\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fa fa-th\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tAccueil
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% block menu %}
\t\t\t\t\t\t\t\t<li class=\"nav-header\">Gestion de l'entreprise</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"{{path('entreprise_index')}}\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-hands-helping\"></i>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tEntreprise
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"{{path('poste_index')}}\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-people-carry\"></i>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tPoste
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-header\">Gestion de la production</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"{{path('produit_index')}}\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-print\"></i>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tProduit
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"{{path('matiere_premiere_index')}}\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-cog\"></i>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tIntrant
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"{{path('critere_surveille_index')}}\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-hand-paper\"></i>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tCritère à surveiller
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"{{path('type_probleme_index')}}\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-table\"></i>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tType de problème
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"{{path('app_register')}}\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-table\"></i>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tEnrégistrement
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</aside>

\t\t\t<div class=\"content-wrapper\">
\t\t\t\t<section class=\"content-header\"></section>
\t\t\t\t<section class=\"content\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t<div class=\"card card-default\" style=\"box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15)!important;\">
\t\t\t\t\t\t\t<div class=\"card-body\"> {% block body %}{% endblock %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<a class=\"scroll-to-top rounded\" href=\"#page-top\" style=\"display: none;border-radius: .35rem!important;    position: absolute;right: 1rem;bottom: 0px; width: 2.75rem;height: 2.75rem;text-align: center;color: #fff;background: rgba(90,92,105,.5);line-height: 46px;\">
\t\t\t\t\t\t<i class=\"fas fa-angle-up\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Se déconnecter</h5>
\t\t\t\t\t\t\t<button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">×</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body\">Voulez-vous sortir de l'application ?</div>
\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t<button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Annuler</button>

\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('app_logout') }}\">Déconnexion</a>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% block javascripts %}
\t\t\t\t<script src=\"{{asset('style/js/sb-admin-2.min.js')}}\"></script>

\t\t\t\t<script src=\"{{asset('style/plugins/jquery/jquery.min.js')}}\"></script>
\t\t\t\t<script src=\"{{asset('style/plugins/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
\t\t\t\t<script src=\"{{asset('style/plugins/select2/select2.full.min.js')}}\"></script>
\t\t\t\t<script src=\"{{asset('style/plugins/input-mask/jquery.inputmask.js')}}\"></script>
\t\t\t\t<script src=\"{{asset('style/plugins/input-mask/jquery.inputmask.date.extensions.js')}}\"></script>
\t\t\t\t<script src=\"{{asset('style/plugins/input-mask/jquery.inputmask.extensions.js')}}\"></script>
\t\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js')}}\"></script>
\t\t\t\t<script src=\"{{asset('style/plugins/slimScroll/jquery.slimscroll.min.js')}}\"></script>
\t\t\t\t<script src=\"{{asset('style/plugins/iCheck/icheck.min.js')}}\"></script>
\t\t\t\t<script src=\"{{asset('style/plugins/fastclick/fastclick.js')}}\"></script>
\t\t\t\t<script src=\"{{asset('style/dist/js/adminlte.min.js')}}\"></script>
\t\t\t\t<script src=\"{{asset('style/dist/js/demo.js')}}\"></script>

\t\t\t\t<script>
\t\t\t\t\t\$('.custom-file-input').on('change', function (event) {
var inputFile = event.currentTarget;
\$(inputFile).parent().find('.custom-file-label').html(inputFile.files[0].name);
});
\t\t\t\t</script>
\t\t\t\t<script>
\t\t\t\t\t\$(function () {
\$('.select2').select2()
\$('#equipe_datecreation').inputmask('dd/mm/yyyy', {'placeholder': 'dd/mm/yyyy'})

})
\t\t\t\t</script>
\t\t\t\t<script>
\t\t\t\t\t\$(document).ready(function () {
\$(function () {
\$('nav a[href^=\"/' + location.pathname.split(\"/\")[1] + '\"]').addClass('active');
});
});
\t\t\t\t</script>
\t\t\t\t<script>
\t\t\t\t\t\$(document).ready(function () {
if (\$(document).height() > \$(window).height() + 1) {

\$('.scroll-to-top').show();

}
});
\t\t\t\t</script>

\t\t\t{% endblock %}
\t\t</body>
\t</html>
</body></html></body></html>
", "base.html.twig", "C:\\wamp64\\www\\audit\\audit\\templates\\base.html.twig");
    }
}
