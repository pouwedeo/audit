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

/* travailler_personnel/new.html.twig */
class __TwigTemplate_b595dfc0492c82792150577c79916db466ad65bbf05df94590905874f31cfd9c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "travailler_personnel/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "travailler_personnel/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "travailler_personnel/new.html.twig", 1);
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

    // line 6
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 7
        echo "\t<li class=\"nav-header\">Gestion de l'entreprise</li>

\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnel_index", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 10, $this->source); })())]), "html", null, true);
        echo "\">
\t\t\t<i class=\"fas fa-fw fa-hands-helping\"></i>
\t\t\t<p>Personnel</p>
\t\t</a>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("equipe_index", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 16, $this->source); })())]), "html", null, true);
        echo "\">
\t\t\t<i class=\"fas fa-fw fa-people-carry\"></i>
\t\t\t<p>Equipe</p>
\t\t</a>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("travailler_personnel_index", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 22, $this->source); })())]), "html", null, true);
        echo "\">
\t\t\t<i class=\"fas fa-fw fa-hands-helping\"></i>
\t\t\t<p>Participation</p>
\t\t</a>
\t</li>
\t<li class=\"nav-header\">
\t\tGestion de la production
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produir_index", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 31, $this->source); })())]), "html", null, true);
        echo "\">
\t\t\t<i class=\"fas fa-fw fa-product-hunt\"></i>
\t\t\t<p>Production</p>
\t\t</a>
\t</li>
\t<li class=\"nav-header\">
\t\tGestion des etapes
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etape_index", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 40, $this->source); })())]), "html", null, true);
        echo "\">
\t\t\t<i class=\"fas fa-fw fa-step-forward\"></i>
\t\t\t<p>Etape</p>
\t\t</a>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("matiere_utiliser_index", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 46, $this->source); })())]), "html", null, true);
        echo "\">
\t\t\t<i class=\"fas fa-fw fa-cog\"></i>
\t\t\t<p>
\t\t\t\tIntrant par etape
\t\t\t</p>
\t\t</a>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("identificationccp_danger_index", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 54, $this->source); })())]), "html", null, true);
        echo "\">
\t\t\t<i class=\"fas fa-fw fa-table\"></i>
\t\t\t<p>
\t\t\t\tIdentification des ccp et danger
\t\t\t</p>
\t\t</a>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("systeme_surveillance_index", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 62, $this->source); })())]), "html", null, true);
        echo "\">
\t\t\t<i class=\"fas fa-fw fa-hand-paper\"></i>
\t\t\t<p>
\t\t\t\tSystème de surveillance
\t\t\t</p>
\t\t</a>
\t</li>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_entete($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entete"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entete"));

        // line 72
        echo "\t<form class=\"form-inline ml-3\">
\t\t<div class=\"input-group input-group-sm\">
\t\t\t<input class=\"form-control form-control-navbar\" readonly=\"readonly\" placeholder=\"Entreprise  &nbsp;";
        // line 74
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 74, $this->source); })())), "html", null, true);
        echo "\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
\t\t\t<div class=\"input-group-append\">
\t\t\t\t<button class=\"btn btn-success\" type=\"button\">
\t\t\t\t\t<a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inter_liste", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 77, $this->source); })())]), "html", null, true);
        echo "\" style=\"color: white;\">
\t\t\t\t\t\t<i class=\"fas fa-home fa-sm\"></i>
\t\t\t\t\t</a>
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>
\t</form>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 86
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 87
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "session", [], "any", false, false, false, 87), "getflashbag", [], "any", false, false, false, 87), "get", [0 => "travailler_personnel.succes"], "method", false, false, false, 87));
        foreach ($context['_seq'] as $context["_key"] => $context["contenu"]) {
            // line 88
            echo "\t\t<div class=\" text-center alert alert-success\" role=\"alert\">

\t\t\t<div>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;
\t\t\t\t\t</span>
\t\t\t\t</button>
\t\t\t\t<span style=\"font-size:18px\">
\t\t\t\t\t";
            // line 96
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
        // line 102
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "session", [], "any", false, false, false, 102), "getflashbag", [], "any", false, false, false, 102), "get", [0 => "travailler_personnel.erreur"], "method", false, false, false, 102));
        foreach ($context['_seq'] as $context["_key"] => $context["contenu"]) {
            // line 103
            echo "\t\t<div class=\" text-center alert alert-danger\" role=\"alert\">

\t\t\t<div>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;
\t\t\t\t\t</span>
\t\t\t\t</button>
\t\t\t\t<span style=\"font-size:18px\">
\t\t\t\t\t";
            // line 111
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
        // line 117
        echo "
\t";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 118, $this->source); })()), "session", [], "any", false, false, false, 118), "getflashbag", [], "any", false, false, false, 118), "get", [0 => "travail.erreur"], "method", false, false, false, 118));
        foreach ($context['_seq'] as $context["_key"] => $context["contenu"]) {
            // line 119
            echo "\t\t<div class=\" text-center alert alert-danger\" role=\"alert\">

\t\t\t<div>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;
\t\t\t\t\t</span>
\t\t\t\t</button>
\t\t\t\t<span style=\"font-size:18px\">
\t\t\t\t\t";
            // line 127
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
        // line 133
        echo "\t<div class=\"row\">
\t\t<div class=\"col-lg-10\">
\t\t\t<h1>Nouveau groupe de personne par équipe</h1>
\t\t</div>
\t\t<div class=\"col-lg-1\"></div>
\t\t<div class=\"col-lg-1\">
\t\t\t<a href=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("travailler_personnel_index", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 139, $this->source); })())]), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Liste des personnes par équipe\" class=\"btn btn-success btn-circle\">
\t\t\t\t<i class=\"fas fa-clipboard-list\"></i>
\t\t\t</a>
\t\t</div>
\t</div>
\t<br/><br/>
\t<form name=\"travailler\" action=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("travailler_personnel_new", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 145, $this->source); })())]), "html", null, true);
        echo "\" method=\"post\">
\t\t<div class=\"input-group mb-3\">
\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t<label class=\"input-group-text\" style=\"width: 170px;\" id=\"basic-addon1\">Equipe</label>
\t\t\t</div>
\t\t\t<select class=\"custom-select\" name=\"equipe\" id=\"equipe\" style=\"left: -16px;\">
\t\t\t\t<option selected>Choisir...</option>
\t\t\t\t";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipes"]) || array_key_exists("equipes", $context) ? $context["equipes"] : (function () { throw new RuntimeError('Variable "equipes" does not exist.', 152, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["equipe"]) {
            // line 153
            echo "\t\t\t\t\t<option  value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipe"], "id", [], "any", false, false, false, 153), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipe"], "nom", [], "any", false, false, false, 153), "html", null, true);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "\t\t\t</select>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-lg-2\">

\t\t\t\t\t<label class=\"input-group-text\" id=\"basic-addon1\" style=\"\">Personnel</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-10\" style=\"left: -16px;\">

\t\t\t\t\t<select class=\"form-control select2\" multiple=\"multiple\" name=\"role[]\" id=\"personnel\"  data-placeholder=\"Choisir...\">
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["personnels"]) || array_key_exists("personnels", $context) ? $context["personnels"] : (function () { throw new RuntimeError('Variable "personnels" does not exist.', 168, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["personnel"]) {
            // line 169
            echo "\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personnel"], "id", [], "any", false, false, false, 169), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personnel"], "conteneure", [], "any", false, false, false, 169), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personnel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
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
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 185
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 186
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script>
\t\twindow.setTimeout(function () {
\$(\".alert\").fadeTo(500, 0).slideUp(500, function () {
\$(this).remove();
});
}, 6000);
\t</script>
\t<script>
\t\t{
# \$('#personnel').change(function (e) {

var valeur = \$('#personnel').val();

\$('#input').append('<div><input name=\"' + valeur + '\" readonly=\"readonly\" placeholder=\"' + valeur + '\"/><span class=\"remove_field\">&times;</span></div>');
\$('#input').show();
});
\$('.remove_field').click(function () {
\$(this).parent('div').remove();
})#
}
\t</script>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "travailler_personnel/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  424 => 186,  414 => 185,  393 => 171,  382 => 169,  378 => 168,  363 => 155,  352 => 153,  348 => 152,  338 => 145,  329 => 139,  321 => 133,  309 => 127,  299 => 119,  295 => 118,  292 => 117,  280 => 111,  270 => 103,  265 => 102,  253 => 96,  243 => 88,  238 => 87,  228 => 86,  209 => 77,  203 => 74,  199 => 72,  189 => 71,  170 => 62,  159 => 54,  148 => 46,  139 => 40,  127 => 31,  115 => 22,  106 => 16,  97 => 10,  92 => 7,  82 => 6,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}AgroAL LvT
{% endblock %}

{% block menu %}
\t<li class=\"nav-header\">Gestion de l'entreprise</li>

\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"{{path('personnel_index',{'id': id})}}\">
\t\t\t<i class=\"fas fa-fw fa-hands-helping\"></i>
\t\t\t<p>Personnel</p>
\t\t</a>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"{{path('equipe_index',{'id': id})}}\">
\t\t\t<i class=\"fas fa-fw fa-people-carry\"></i>
\t\t\t<p>Equipe</p>
\t\t</a>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"{{path('travailler_personnel_index',{'id': id})}}\">
\t\t\t<i class=\"fas fa-fw fa-hands-helping\"></i>
\t\t\t<p>Participation</p>
\t\t</a>
\t</li>
\t<li class=\"nav-header\">
\t\tGestion de la production
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"{{path('produir_index',{'id': id})}}\">
\t\t\t<i class=\"fas fa-fw fa-product-hunt\"></i>
\t\t\t<p>Production</p>
\t\t</a>
\t</li>
\t<li class=\"nav-header\">
\t\tGestion des etapes
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"{{path('etape_index',{'id': id})}}\">
\t\t\t<i class=\"fas fa-fw fa-step-forward\"></i>
\t\t\t<p>Etape</p>
\t\t</a>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"{{path('matiere_utiliser_index',{'id': id})}}\">
\t\t\t<i class=\"fas fa-fw fa-cog\"></i>
\t\t\t<p>
\t\t\t\tIntrant par etape
\t\t\t</p>
\t\t</a>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"{{path('identificationccp_danger_index',{'id': id})}}\">
\t\t\t<i class=\"fas fa-fw fa-table\"></i>
\t\t\t<p>
\t\t\t\tIdentification des ccp et danger
\t\t\t</p>
\t\t</a>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"{{path('systeme_surveillance_index',{'id': id})}}\">
\t\t\t<i class=\"fas fa-fw fa-hand-paper\"></i>
\t\t\t<p>
\t\t\t\tSystème de surveillance
\t\t\t</p>
\t\t</a>
\t</li>

{% endblock %}
{% block entete %}
\t<form class=\"form-inline ml-3\">
\t\t<div class=\"input-group input-group-sm\">
\t\t\t<input class=\"form-control form-control-navbar\" readonly=\"readonly\" placeholder=\"Entreprise  &nbsp;{{entreprise|upper}}\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
\t\t\t<div class=\"input-group-append\">
\t\t\t\t<button class=\"btn btn-success\" type=\"button\">
\t\t\t\t\t<a href=\"{{path('inter_liste', {'id':id })}}\" style=\"color: white;\">
\t\t\t\t\t\t<i class=\"fas fa-home fa-sm\"></i>
\t\t\t\t\t</a>
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>
\t</form>

{% endblock %}
{% block body %}
\t{% for contenu in app.session.getflashbag.get('travailler_personnel.succes') %}
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
\t{% for contenu in app.session.getflashbag.get('travailler_personnel.erreur') %}
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

\t{% for contenu in app.session.getflashbag.get('travail.erreur') %}
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
\t\t<div class=\"col-lg-10\">
\t\t\t<h1>Nouveau groupe de personne par équipe</h1>
\t\t</div>
\t\t<div class=\"col-lg-1\"></div>
\t\t<div class=\"col-lg-1\">
\t\t\t<a href=\"{{ path('travailler_personnel_index',{'id':id }) }}\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Liste des personnes par équipe\" class=\"btn btn-success btn-circle\">
\t\t\t\t<i class=\"fas fa-clipboard-list\"></i>
\t\t\t</a>
\t\t</div>
\t</div>
\t<br/><br/>
\t<form name=\"travailler\" action=\"{{ path('travailler_personnel_new',{'id':id }) }}\" method=\"post\">
\t\t<div class=\"input-group mb-3\">
\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t<label class=\"input-group-text\" style=\"width: 170px;\" id=\"basic-addon1\">Equipe</label>
\t\t\t</div>
\t\t\t<select class=\"custom-select\" name=\"equipe\" id=\"equipe\" style=\"left: -16px;\">
\t\t\t\t<option selected>Choisir...</option>
\t\t\t\t{% for equipe in equipes %}
\t\t\t\t\t<option  value=\"{{equipe.id}}\">{{equipe.nom}}</option>
\t\t\t\t{% endfor %}
\t\t\t</select>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-lg-2\">

\t\t\t\t\t<label class=\"input-group-text\" id=\"basic-addon1\" style=\"\">Personnel</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-10\" style=\"left: -16px;\">

\t\t\t\t\t<select class=\"form-control select2\" multiple=\"multiple\" name=\"role[]\" id=\"personnel\"  data-placeholder=\"Choisir...\">
\t\t\t\t\t\t
\t\t\t\t\t\t{% for personnel in personnels %}
\t\t\t\t\t\t\t<option value=\"{{personnel.id}}\">{{personnel.conteneure}}</option>
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
\t{# \t  {{ include('travailler_personnel/_form.html.twig') }}  \t
\t\t #}
{% endblock %}
{% block javascripts %}
\t{{parent()}}
\t<script>
\t\twindow.setTimeout(function () {
\$(\".alert\").fadeTo(500, 0).slideUp(500, function () {
\$(this).remove();
});
}, 6000);
\t</script>
\t<script>
\t\t{
# \$('#personnel').change(function (e) {

var valeur = \$('#personnel').val();

\$('#input').append('<div><input name=\"' + valeur + '\" readonly=\"readonly\" placeholder=\"' + valeur + '\"/><span class=\"remove_field\">&times;</span></div>');
\$('#input').show();
});
\$('.remove_field').click(function () {
\$(this).parent('div').remove();
})#
}
\t</script>
\t{# var input=\"<input type='hidden' />\";
\t\t\tvar valeur=\$('#personnel').val();
\t\t\tinput.name(valeur);
\t\t\tinput.id('personnel'+valeur);
\t\t\t\$('#input').append(input) #}
{% endblock %}
", "travailler_personnel/new.html.twig", "C:\\wamp64\\www\\audit\\audit\\templates\\travailler_personnel\\new.html.twig");
    }
}
