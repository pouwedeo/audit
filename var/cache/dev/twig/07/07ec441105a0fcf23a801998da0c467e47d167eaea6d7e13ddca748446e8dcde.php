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

/* matiere_utiliser/new.html.twig */
class __TwigTemplate_aa144fe932431cab52b85464e096c2ecb8d8dad96a00437a911ef0221840218c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'menu' => [$this, 'block_menu'],
            'entete' => [$this, 'block_entete'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matiere_utiliser/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matiere_utiliser/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "matiere_utiliser/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "AgroAL LvT
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "  \t<li class=\"nav-header\">Gestion de l'entreprise</li>

\t\t\t\t<li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnel_index", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 9, $this->source); })())]), "html", null, true);
        echo "\">
          <i class=\"fas fa-fw fa-hands-helping\"></i>
          <p>Personnel</p></a>
      </li>
       <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("equipe_index", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 14, $this->source); })())]), "html", null, true);
        echo "\">
          <i class=\"fas fa-fw fa-people-carry\"></i>
          <p>Equipe</p></a>
      </li>
       <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("travailler_personnel_index", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 19, $this->source); })())]), "html", null, true);
        echo "\">
           <i class=\"fas fa-fw fa-hands-helping\"></i>
          <p>Participation</p></a>
      </li>
      <li class=\"nav-header\">
        Gestion de la production
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produir_index", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 27, $this->source); })())]), "html", null, true);
        echo "\">
          <i class=\"fas fa-fw fa-product-hunt\"></i>
          <p>Production</p></a>
      </li>
      <li class=\"nav-header\">
        Gestion des etapes
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etape_index", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 35, $this->source); })())]), "html", null, true);
        echo "\">
          <i class=\"fas fa-fw fa-step-forward\"></i>
          <p>Etape</p></a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("matiere_utiliser_index", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 40, $this->source); })())]), "html", null, true);
        echo "\">
          <i class=\"fas fa-fw fa-cog\"></i>
          <p> Intrant par etape </p></a>
      </li>
       <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("identificationccp_danger_index", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 45, $this->source); })())]), "html", null, true);
        echo "\">
          <i class=\"fas fa-fw fa-table\"></i>
          <p> Identification des ccp et danger </p></a>
      </li>
       <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("systeme_surveillance_index", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 50, $this->source); })())]), "html", null, true);
        echo "\">
          <i class=\"fas fa-fw fa-hand-paper\"></i>
          <p> Système de surveillance </p></a>
      </li>
     
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_entete($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entete"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entete"));

        // line 57
        echo "\t\t<form class=\"form-inline ml-3\">
      <div class=\"input-group input-group-sm\">
        <input class=\"form-control form-control-navbar\" readonly=\"readonly\" placeholder=\"Entreprise  &nbsp;";
        // line 59
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 59, $this->source); })())), "html", null, true);
        echo "\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t<button class=\"btn btn-success\" type=\"button\">
            <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inter_liste", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 62, $this->source); })())]), "html", null, true);
        echo "\" style=\"color: white;\"><i class=\"fas fa-home fa-sm\"></i></a>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 69
        echo "
\t";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "session", [], "any", false, false, false, 70), "getflashbag", [], "any", false, false, false, 70), "get", [0 => "matiere_utiliser.succes"], "method", false, false, false, 70));
        foreach ($context['_seq'] as $context["_key"] => $context["contenu"]) {
            // line 71
            echo "\t\t<div class=\" text-center alert alert-success\" role=\"alert\">

\t\t\t<div>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;
\t\t\t\t\t</span>
\t\t\t\t</button>
\t\t\t\t<span style=\"font-size:18px\">
\t\t\t\t\t";
            // line 79
            echo twig_escape_filter($this->env, $context["contenu"], "html", null, true);
            echo "
\t\t\t\t</span>
\t\t\t</div>

\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contenu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "session", [], "any", false, false, false, 85), "getflashbag", [], "any", false, false, false, 85), "get", [0 => "matiere_utiliser.erreur"], "method", false, false, false, 85));
        foreach ($context['_seq'] as $context["_key"] => $context["contenu"]) {
            // line 86
            echo "\t\t<div class=\" text-center alert alert-danger\" role=\"alert\">

\t\t\t<div>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;
\t\t\t\t\t</span>
\t\t\t\t</button>
\t\t\t\t<span style=\"font-size:18px\">
\t\t\t\t\t";
            // line 94
            echo twig_escape_filter($this->env, $context["contenu"], "html", null, true);
            echo "
\t\t\t\t</span>
\t\t\t</div>

\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contenu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "session", [], "any", false, false, false, 100), "getflashbag", [], "any", false, false, false, 100), "get", [0 => "utiliser.erreur"], "method", false, false, false, 100));
        foreach ($context['_seq'] as $context["_key"] => $context["contenu"]) {
            // line 101
            echo "\t\t<div class=\" text-center alert alert-danger\" role=\"alert\">

\t\t\t<div>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;
\t\t\t\t\t</span>
\t\t\t\t</button>
\t\t\t\t<span style=\"font-size:18px\">
\t\t\t\t\t";
            // line 109
            echo twig_escape_filter($this->env, $context["contenu"], "html", null, true);
            echo "
\t\t\t\t</span>
\t\t\t</div>

\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contenu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "\t<div class=\"row\">
\t\t<div class=\"col-lg-8\">
\t\t\t<h1>Nouvelle utilisation de matière prémière</h1>
\t\t</div>
\t\t<div class=\"col-lg-3\"></div>
\t\t<div class=\"col-lg-1\">
\t\t\t<a href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("matiere_utiliser_index", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 121, $this->source); })())]), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Liste des matières Premières utilisées\" class=\"btn btn-success btn-circle\">
\t\t\t\t<i class=\"fas fa-clipboard-list\"></i>
\t\t\t</a>
\t\t</div>
\t</div>
\t<br/><br/>
\t 
\t <form name=\"matiere\" action=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("matiere_utiliser_new", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 128, $this->source); })())]), "html", null, true);
        echo "\" method=\"post\">
\t\t<div class=\"input-group mb-3\">
\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t<label class=\"input-group-text\" style=\"width: 170px;\" id=\"basic-addon1\">Etape</label>
\t\t\t</div>
\t\t\t<select class=\"custom-select\" name=\"etape\" id=\"etape\" style=\"left: -16px;\">
\t\t\t\t<option selected>Choisir...</option>
\t\t\t\t";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["etapes"]) || array_key_exists("etapes", $context) ? $context["etapes"] : (function () { throw new RuntimeError('Variable "etapes" does not exist.', 135, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["etape"]) {
            // line 136
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etape"], "id", [], "any", false, false, false, 136), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etape"], "nom", [], "any", false, false, false, 136), "html", null, true);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etape'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "\t\t\t</select>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-lg-2\">

\t\t\t\t\t<label class=\"input-group-text\" id=\"basic-addon1\" style=\"\">Matière première</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-10\" style=\"left: -16px;\">

\t\t\t\t\t<select class=\"form-control select2\" multiple=\"multiple\" name=\"role[]\" id=\"matiere\"  data-placeholder=\"Choisir...\">
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matieres"]) || array_key_exists("matieres", $context) ? $context["matieres"] : (function () { throw new RuntimeError('Variable "matieres" does not exist.', 151, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
            // line 152
            echo "\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["matiere"], "id", [], "any", false, false, false, 152), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["matiere"], "nom", [], "any", false, false, false, 152), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matiere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<br/>

\t\t<div class=\"col-md-4 col-xs-4 col-sm-4\">
\t\t\t<button type=\"submit\" class=\"btn btn-success\">Enrégistrer</button>
\t\t\t<button type=\"reset\" class=\"btn btn-danger\">Annuler</button>
\t\t</div>
\t</form>
";
        // line 166
        echo "\t

</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 168
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 169
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script>
\twindow.setTimeout(function () {
\$(\".alert\").fadeTo(500, 0).slideUp(500, function () {
\$(this).remove();
});
}, 6000);

</script>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "matiere_utiliser/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  412 => 169,  402 => 168,  390 => 166,  377 => 154,  366 => 152,  362 => 151,  347 => 138,  336 => 136,  332 => 135,  322 => 128,  312 => 121,  304 => 115,  292 => 109,  282 => 101,  277 => 100,  265 => 94,  255 => 86,  250 => 85,  238 => 79,  228 => 71,  224 => 70,  221 => 69,  211 => 68,  195 => 62,  189 => 59,  185 => 57,  175 => 56,  159 => 50,  151 => 45,  143 => 40,  135 => 35,  124 => 27,  113 => 19,  105 => 14,  97 => 9,  92 => 6,  82 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}AgroAL LvT
{% endblock %}
{% block menu %}
  \t<li class=\"nav-header\">Gestion de l'entreprise</li>

\t\t\t\t<li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{path('personnel_index',{'id': id})}}\">
          <i class=\"fas fa-fw fa-hands-helping\"></i>
          <p>Personnel</p></a>
      </li>
       <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{path('equipe_index',{'id': id})}}\">
          <i class=\"fas fa-fw fa-people-carry\"></i>
          <p>Equipe</p></a>
      </li>
       <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{path('travailler_personnel_index',{'id': id})}}\">
           <i class=\"fas fa-fw fa-hands-helping\"></i>
          <p>Participation</p></a>
      </li>
      <li class=\"nav-header\">
        Gestion de la production
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{path('produir_index',{'id': id})}}\">
          <i class=\"fas fa-fw fa-product-hunt\"></i>
          <p>Production</p></a>
      </li>
      <li class=\"nav-header\">
        Gestion des etapes
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{path('etape_index',{'id': id})}}\">
          <i class=\"fas fa-fw fa-step-forward\"></i>
          <p>Etape</p></a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{path('matiere_utiliser_index',{'id': id})}}\">
          <i class=\"fas fa-fw fa-cog\"></i>
          <p> Intrant par etape </p></a>
      </li>
       <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{path('identificationccp_danger_index',{'id': id})}}\">
          <i class=\"fas fa-fw fa-table\"></i>
          <p> Identification des ccp et danger </p></a>
      </li>
       <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{path('systeme_surveillance_index',{'id': id})}}\">
          <i class=\"fas fa-fw fa-hand-paper\"></i>
          <p> Système de surveillance </p></a>
      </li>
     
 {% endblock %}
 {% block entete %}
\t\t<form class=\"form-inline ml-3\">
      <div class=\"input-group input-group-sm\">
        <input class=\"form-control form-control-navbar\" readonly=\"readonly\" placeholder=\"Entreprise  &nbsp;{{entreprise|upper}}\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t<button class=\"btn btn-success\" type=\"button\">
            <a href=\"{{path('inter_liste', {'id':id })}}\" style=\"color: white;\"><i class=\"fas fa-home fa-sm\"></i></a>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
{% endblock %}
{% block body %}

\t{% for contenu in app.session.getflashbag.get('matiere_utiliser.succes') %}
\t\t<div class=\" text-center alert alert-success\" role=\"alert\">

\t\t\t<div>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;
\t\t\t\t\t</span>
\t\t\t\t</button>
\t\t\t\t<span style=\"font-size:18px\">
\t\t\t\t\t{{ contenu}}
\t\t\t\t</span>
\t\t\t</div>

\t\t</div>
\t{% endfor %}
\t{% for contenu in app.session.getflashbag.get('matiere_utiliser.erreur') %}
\t\t<div class=\" text-center alert alert-danger\" role=\"alert\">

\t\t\t<div>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;
\t\t\t\t\t</span>
\t\t\t\t</button>
\t\t\t\t<span style=\"font-size:18px\">
\t\t\t\t\t{{ contenu}}
\t\t\t\t</span>
\t\t\t</div>

\t\t</div>
\t{% endfor %}
\t\t{% for contenu in app.session.getflashbag.get('utiliser.erreur') %}
\t\t<div class=\" text-center alert alert-danger\" role=\"alert\">

\t\t\t<div>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;
\t\t\t\t\t</span>
\t\t\t\t</button>
\t\t\t\t<span style=\"font-size:18px\">
\t\t\t\t\t{{ contenu}}
\t\t\t\t</span>
\t\t\t</div>

\t\t</div>
\t{% endfor %}
\t<div class=\"row\">
\t\t<div class=\"col-lg-8\">
\t\t\t<h1>Nouvelle utilisation de matière prémière</h1>
\t\t</div>
\t\t<div class=\"col-lg-3\"></div>
\t\t<div class=\"col-lg-1\">
\t\t\t<a href=\"{{ path('matiere_utiliser_index',{'id': id}) }}\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Liste des matières Premières utilisées\" class=\"btn btn-success btn-circle\">
\t\t\t\t<i class=\"fas fa-clipboard-list\"></i>
\t\t\t</a>
\t\t</div>
\t</div>
\t<br/><br/>
\t 
\t <form name=\"matiere\" action=\"{{ path('matiere_utiliser_new',{'id':id }) }}\" method=\"post\">
\t\t<div class=\"input-group mb-3\">
\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t<label class=\"input-group-text\" style=\"width: 170px;\" id=\"basic-addon1\">Etape</label>
\t\t\t</div>
\t\t\t<select class=\"custom-select\" name=\"etape\" id=\"etape\" style=\"left: -16px;\">
\t\t\t\t<option selected>Choisir...</option>
\t\t\t\t{% for etape in etapes %}
\t\t\t\t\t<option value=\"{{etape.id}}\">{{etape.nom}}</option>
\t\t\t\t{% endfor %}
\t\t\t</select>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-lg-2\">

\t\t\t\t\t<label class=\"input-group-text\" id=\"basic-addon1\" style=\"\">Matière première</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-10\" style=\"left: -16px;\">

\t\t\t\t\t<select class=\"form-control select2\" multiple=\"multiple\" name=\"role[]\" id=\"matiere\"  data-placeholder=\"Choisir...\">
\t\t\t\t\t\t
\t\t\t\t\t\t{% for matiere in matieres %}
\t\t\t\t\t\t\t<option value=\"{{matiere.id}}\">{{matiere.nom}}</option>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<br/>

\t\t<div class=\"col-md-4 col-xs-4 col-sm-4\">
\t\t\t<button type=\"submit\" class=\"btn btn-success\">Enrégistrer</button>
\t\t\t<button type=\"reset\" class=\"btn btn-danger\">Annuler</button>
\t\t</div>
\t</form>
{# \t    {{ include('matiere_utiliser/_form.html.twig') }} 
 #}\t

</div>{% endblock %}{% block javascripts %}
{{parent()}}
<script>
\twindow.setTimeout(function () {
\$(\".alert\").fadeTo(500, 0).slideUp(500, function () {
\$(this).remove();
});
}, 6000);

</script>{% endblock %}
", "matiere_utiliser/new.html.twig", "C:\\wamp64\\www\\audit\\audit\\templates\\matiere_utiliser\\new.html.twig");
    }
}
