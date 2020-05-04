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

/* accueil/page_entreprise.html.twig */
class __TwigTemplate_9a91cc08377131f5cdc2f154d9f9e75bd0937c7ad5d917b4c44e3bb133e6ff7d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/page_entreprise.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/page_entreprise.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/page_entreprise.html.twig", 1);
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
        echo "\t      \t<li class=\"nav-header\">Gestion de l'entreprise</li>

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
\t <li class=\"nav-header\">
        Gestion de la production
      </li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produir_index", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 31, $this->source); })())]), "html", null, true);
        echo "\">
\t\t\t<i class=\"fas fa-fw fa-product-hunt\"></i>
\t\t\t<p>Production</p>
\t\t</a>
\t</li>
\t <li class=\"nav-header\">
        Gestion des etapes
      </li>
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
\t
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 72
    public function block_entete($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entete"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entete"));

        // line 73
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entreprisepages"]) || array_key_exists("entreprisepages", $context) ? $context["entreprisepages"] : (function () { throw new RuntimeError('Variable "entreprisepages" does not exist.', 73, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entreprisepage"]) {
            // line 74
            echo "\t\t<form class=\"form-inline ml-3\">
      <div class=\"input-group input-group-sm\">
        <input class=\"form-control form-control-navbar\" readonly=\"readonly\" placeholder=\"Entreprise  &nbsp;";
            // line 76
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entreprisepage"], "nom", [], "any", false, false, false, 76)), "html", null, true);
            echo "\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t<button class=\"btn btn-success\" type=\"button\">
\t\t\t\t\t\t<i class=\"fas fa-home fa-sm\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entreprisepage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 88
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 89
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entreprisepages"]) || array_key_exists("entreprisepages", $context) ? $context["entreprisepages"] : (function () { throw new RuntimeError('Variable "entreprisepages" does not exist.', 89, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entreprisepage"]) {
            // line 90
            echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-8\"></div>
\t\t\t<div class=\"col-lg-3\"></div>
\t\t\t<div class=\"col-lg-1\">
\t\t\t\t<a href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entreprise_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["entreprisepage"], "id", [], "any", false, false, false, 94)]), "html", null, true);
            echo "\" title=\"Modifier\" class=\"btn btn-info btn-circle btn-sm\">
\t\t\t\t\t<i class=\"fas fa-pencil-alt\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<br/><br/>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-3\">Nom:  &nbsp;";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entreprisepage"], "nom", [], "any", false, false, false, 102), "html", null, true);
            echo "
\t\t\t</div>
\t\t\t<div class=\"col-lg-3\">Téléphone: &nbsp;";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entreprisepage"], "telephone", [], "any", false, false, false, 104), "html", null, true);
            echo "
\t\t\t</div>
\t\t\t<div class=\"col-lg-3\">Adresse: &nbsp;";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entreprisepage"], "adress", [], "any", false, false, false, 106), "html", null, true);
            echo "
\t\t\t</div>
\t\t\t<div class=\"col-lg-3\">Email: &nbsp;";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entreprisepage"], "email", [], "any", false, false, false, 108), "html", null, true);
            echo "
\t\t\t</div>
\t\t</div>
\t\t<br/><br/>
\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-bordered\">
\t\t\t\t<tr>
\t\t\t\t\t<th>Objectif</th>
\t\t\t\t\t<td>";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entreprisepage"], "objectif", [], "any", false, false, false, 116), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Politique</th>
\t\t\t\t\t<td>";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entreprisepage"], "politique", [], "any", false, false, false, 120), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Engagement</th>
\t\t\t\t\t<td>";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entreprisepage"], "engagement", [], "any", false, false, false, 124), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-3\">
\t\t\t\t<p style=\"color: red;font-style: italic;font-size:15px;\">Nombre du personnel:  &nbsp;";
            // line 130
            echo twig_escape_filter($this->env, (isset($context["nombrepersonnel"]) || array_key_exists("nombrepersonnel", $context) ? $context["nombrepersonnel"] : (function () { throw new RuntimeError('Variable "nombrepersonnel" does not exist.', 130, $this->source); })()), "html", null, true);
            echo "</p>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3\">
\t\t\t\t<p style=\"color: red;font-style: italic;font-size:15px;\">nombre d'équipe: &nbsp;";
            // line 133
            echo twig_escape_filter($this->env, (isset($context["nombreequipe"]) || array_key_exists("nombreequipe", $context) ? $context["nombreequipe"] : (function () { throw new RuntimeError('Variable "nombreequipe" does not exist.', 133, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t</p>
\t\t\t</div>

\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entreprisepage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/page_entreprise.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 133,  312 => 130,  303 => 124,  296 => 120,  289 => 116,  278 => 108,  273 => 106,  268 => 104,  263 => 102,  252 => 94,  246 => 90,  241 => 89,  231 => 88,  207 => 76,  203 => 74,  198 => 73,  188 => 72,  169 => 62,  158 => 54,  147 => 46,  138 => 40,  126 => 31,  114 => 22,  105 => 16,  96 => 10,  91 => 7,  81 => 6,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}AgroAL LvT
{% endblock %}

{% block menu %}
\t      \t<li class=\"nav-header\">Gestion de l'entreprise</li>

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
\t <li class=\"nav-header\">
        Gestion de la production
      </li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"{{path('produir_index',{'id': id})}}\">
\t\t\t<i class=\"fas fa-fw fa-product-hunt\"></i>
\t\t\t<p>Production</p>
\t\t</a>
\t</li>
\t <li class=\"nav-header\">
        Gestion des etapes
      </li>
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
\t
{% endblock %}

{% block entete %}
\t{% for entreprisepage in entreprisepages %}
\t\t<form class=\"form-inline ml-3\">
      <div class=\"input-group input-group-sm\">
        <input class=\"form-control form-control-navbar\" readonly=\"readonly\" placeholder=\"Entreprise  &nbsp;{{entreprisepage.nom|upper}}\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t<button class=\"btn btn-success\" type=\"button\">
\t\t\t\t\t\t<i class=\"fas fa-home fa-sm\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>

\t{% endfor %}
{% endblock %}

{% block body %}
\t{% for entreprisepage in entreprisepages %}
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-8\"></div>
\t\t\t<div class=\"col-lg-3\"></div>
\t\t\t<div class=\"col-lg-1\">
\t\t\t\t<a href=\"{{ path('entreprise_edit', {'id': entreprisepage.id })}}\" title=\"Modifier\" class=\"btn btn-info btn-circle btn-sm\">
\t\t\t\t\t<i class=\"fas fa-pencil-alt\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<br/><br/>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-3\">Nom:  &nbsp;{{entreprisepage.nom}}
\t\t\t</div>
\t\t\t<div class=\"col-lg-3\">Téléphone: &nbsp;{{entreprisepage.telephone}}
\t\t\t</div>
\t\t\t<div class=\"col-lg-3\">Adresse: &nbsp;{{entreprisepage.adress}}
\t\t\t</div>
\t\t\t<div class=\"col-lg-3\">Email: &nbsp;{{entreprisepage.email}}
\t\t\t</div>
\t\t</div>
\t\t<br/><br/>
\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-bordered\">
\t\t\t\t<tr>
\t\t\t\t\t<th>Objectif</th>
\t\t\t\t\t<td>{{entreprisepage.objectif}}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Politique</th>
\t\t\t\t\t<td>{{entreprisepage.politique}}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Engagement</th>
\t\t\t\t\t<td>{{entreprisepage.engagement}}</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-3\">
\t\t\t\t<p style=\"color: red;font-style: italic;font-size:15px;\">Nombre du personnel:  &nbsp;{{nombrepersonnel}}</p>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3\">
\t\t\t\t<p style=\"color: red;font-style: italic;font-size:15px;\">nombre d'équipe: &nbsp;{{nombreequipe}}
\t\t\t\t</p>
\t\t\t</div>

\t\t</div>
\t{% endfor %}
{% endblock %}
", "accueil/page_entreprise.html.twig", "C:\\wamp64\\www\\audit\\audit\\templates\\accueil\\page_entreprise.html.twig");
    }
}
