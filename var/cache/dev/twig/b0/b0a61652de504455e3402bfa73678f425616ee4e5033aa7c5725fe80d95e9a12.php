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

/* equipe/show.html.twig */
class __TwigTemplate_ac5bcbe28a90f780cde2c600015d2eec3624808e0675d49abb86fd3025b0b4e2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipe/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipe/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "equipe/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "AgroAL LvT";
        
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
        echo "      \t<li class=\"nav-header\">Gestion de l'entreprise</li>

      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnel_index", ["id" => (isset($context["ide"]) || array_key_exists("ide", $context) ? $context["ide"] : (function () { throw new RuntimeError('Variable "ide" does not exist.', 9, $this->source); })())]), "html", null, true);
        echo "\">
          <i class=\"fas fa-fw fa-hands-helping\"></i>
          <p>Personnel</p></a>
      </li>
       <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("equipe_index", ["id" => (isset($context["ide"]) || array_key_exists("ide", $context) ? $context["ide"] : (function () { throw new RuntimeError('Variable "ide" does not exist.', 14, $this->source); })())]), "html", null, true);
        echo "\">
          <i class=\"fas fa-fw fa-people-carry\"></i>
          <p>Equipe</p></a>
      </li>
       <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("travailler_personnel_index", ["id" => (isset($context["ide"]) || array_key_exists("ide", $context) ? $context["ide"] : (function () { throw new RuntimeError('Variable "ide" does not exist.', 19, $this->source); })())]), "html", null, true);
        echo "\">
           <i class=\"fas fa-fw fa-hands-helping\"></i>
          <p>Participation</p></a>
      </li>

      <li class=\"nav-header\">
        Gestion de la production
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produir_index", ["id" => (isset($context["ide"]) || array_key_exists("ide", $context) ? $context["ide"] : (function () { throw new RuntimeError('Variable "ide" does not exist.', 28, $this->source); })())]), "html", null, true);
        echo "\">
          <i class=\"fas fa-fw fa-product-hunt\"></i>
          <p>Production</p></a>
      </li>
      <li class=\"nav-header\">
        Gestion des etapes
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etape_index", ["id" => (isset($context["ide"]) || array_key_exists("ide", $context) ? $context["ide"] : (function () { throw new RuntimeError('Variable "ide" does not exist.', 36, $this->source); })())]), "html", null, true);
        echo "\">
          <i class=\"fas fa-fw fa-step-forward\"></i>
          <p>Etape</p></a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("matiere_utiliser_index", ["id" => (isset($context["ide"]) || array_key_exists("ide", $context) ? $context["ide"] : (function () { throw new RuntimeError('Variable "ide" does not exist.', 41, $this->source); })())]), "html", null, true);
        echo "\">
          <i class=\"fas fa-fw fa-cog\"></i>
          <p> Intrant par etape </p></a>
      </li>
       <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("identificationccp_danger_index", ["id" => (isset($context["ide"]) || array_key_exists("ide", $context) ? $context["ide"] : (function () { throw new RuntimeError('Variable "ide" does not exist.', 46, $this->source); })())]), "html", null, true);
        echo "\">
          <i class=\"fas fa-fw fa-table\"></i>
          <p> Identification des ccp et danger </p></a>
      </li>
       <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("systeme_surveillance_index", ["id" => (isset($context["ide"]) || array_key_exists("ide", $context) ? $context["ide"] : (function () { throw new RuntimeError('Variable "ide" does not exist.', 51, $this->source); })())]), "html", null, true);
        echo "\">
          <i class=\"fas fa-fw fa-hand-paper\"></i>
          <p> Système de surveillance </p></a>
      </li>
    
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_entete($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entete"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entete"));

        // line 58
        echo "  <form class=\"form-inline ml-3\">
      <div class=\"input-group input-group-sm\">
        <input class=\"form-control form-control-navbar\" readonly=\"readonly\" placeholder=\"Entreprise  &nbsp;";
        // line 60
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 60, $this->source); })())), "html", null, true);
        echo "\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t<button class=\"btn btn-success\" type=\"button\">
            <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inter_liste", ["id" => (isset($context["ide"]) || array_key_exists("ide", $context) ? $context["ide"] : (function () { throw new RuntimeError('Variable "ide" does not exist.', 63, $this->source); })())]), "html", null, true);
        echo "\" style=\"color: white;\"><i class=\"fas fa-home fa-sm\"></i></a>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>\t
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 70
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 71
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "session", [], "any", false, false, false, 71), "getflashbag", [], "any", false, false, false, 71), "get", [0 => "equipe.suppression"], "method", false, false, false, 71));
        foreach ($context['_seq'] as $context["_key"] => $context["contenu"]) {
            // line 72
            echo "        <div class=\" text-center alert alert-danger\" role=\"alert\">

            <div>
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">  <span aria-hidden=\"true\">&times;
            </span>  </button><span style=\"font-size:18px\"> ";
            // line 76
            echo twig_escape_filter($this->env, $context["contenu"], "html", null, true);
            echo " </span></div>

        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contenu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "   <div class=\"row\">
  <div class=\"col-lg-8\">
    <h1>suppression de l'équipe</h1>
    </div>
     <div class=\"col-lg-3\">
     </div>
      <div class=\"col-lg-1\">
        <a href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("equipe_index", ["id" => (isset($context["ide"]) || array_key_exists("ide", $context) ? $context["ide"] : (function () { throw new RuntimeError('Variable "ide" does not exist.', 87, $this->source); })())]), "html", null, true);
        echo "\" title=\"Liste des équipes\" data-toggle=\"tooltip\" data-placement=\"top\" class=\"btn btn-success btn-circle\">
          <i class=\"fas fa-clipboard-list\"></i>
        </a>
      </div>
    </div>
            <br/><br/>
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["equipe"]) || array_key_exists("equipe", $context) ? $context["equipe"] : (function () { throw new RuntimeError('Variable "equipe" does not exist.', 97, $this->source); })()), "id", [], "any", false, false, false, 97), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["equipe"]) || array_key_exists("equipe", $context) ? $context["equipe"] : (function () { throw new RuntimeError('Variable "equipe" does not exist.', 101, $this->source); })()), "nom", [], "any", false, false, false, 101), "html", null, true);
        echo "</td>
            </tr>
             <tr>
                <th>Entreprise</th>
                <td>";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["equipe"]) || array_key_exists("equipe", $context) ? $context["equipe"] : (function () { throw new RuntimeError('Variable "equipe" does not exist.', 105, $this->source); })()), "entreprise", [], "any", false, false, false, 105), "nom", [], "any", false, false, false, 105), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>Datecreation</th>
                <td>";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["equipe"]) || array_key_exists("equipe", $context) ? $context["equipe"] : (function () { throw new RuntimeError('Variable "equipe" does not exist.', 110, $this->source); })()), "datecreation", [], "any", false, false, false, 110), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Responsable</th>
                <td>";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["equipe"]) || array_key_exists("equipe", $context) ? $context["equipe"] : (function () { throw new RuntimeError('Variable "equipe" does not exist.', 114, $this->source); })()), "personnel", [], "any", false, false, false, 114), "conteneure", [], "any", false, false, false, 114), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Objectif</th>
                <td>";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["equipe"]) || array_key_exists("equipe", $context) ? $context["equipe"] : (function () { throw new RuntimeError('Variable "equipe" does not exist.', 118, $this->source); })()), "objectif", [], "any", false, false, false, 118), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    ";
        // line 122
        echo twig_include($this->env, $context, "equipe/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "equipe/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 122,  299 => 118,  292 => 114,  285 => 110,  277 => 105,  270 => 101,  263 => 97,  250 => 87,  241 => 80,  231 => 76,  225 => 72,  220 => 71,  210 => 70,  194 => 63,  188 => 60,  184 => 58,  174 => 57,  158 => 51,  150 => 46,  142 => 41,  134 => 36,  123 => 28,  111 => 19,  103 => 14,  95 => 9,  90 => 6,  80 => 5,  61 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}AgroAL LvT{% endblock %}
{% block menu %}
      \t<li class=\"nav-header\">Gestion de l'entreprise</li>

      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{path('personnel_index',{'id': ide})}}\">
          <i class=\"fas fa-fw fa-hands-helping\"></i>
          <p>Personnel</p></a>
      </li>
       <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{path('equipe_index',{'id': ide})}}\">
          <i class=\"fas fa-fw fa-people-carry\"></i>
          <p>Equipe</p></a>
      </li>
       <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{path('travailler_personnel_index',{'id': ide})}}\">
           <i class=\"fas fa-fw fa-hands-helping\"></i>
          <p>Participation</p></a>
      </li>

      <li class=\"nav-header\">
        Gestion de la production
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{path('produir_index',{'id': ide})}}\">
          <i class=\"fas fa-fw fa-product-hunt\"></i>
          <p>Production</p></a>
      </li>
      <li class=\"nav-header\">
        Gestion des etapes
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{path('etape_index',{'id': ide})}}\">
          <i class=\"fas fa-fw fa-step-forward\"></i>
          <p>Etape</p></a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{path('matiere_utiliser_index',{'id': ide})}}\">
          <i class=\"fas fa-fw fa-cog\"></i>
          <p> Intrant par etape </p></a>
      </li>
       <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{path('identificationccp_danger_index',{'id': ide})}}\">
          <i class=\"fas fa-fw fa-table\"></i>
          <p> Identification des ccp et danger </p></a>
      </li>
       <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{path('systeme_surveillance_index',{'id': ide})}}\">
          <i class=\"fas fa-fw fa-hand-paper\"></i>
          <p> Système de surveillance </p></a>
      </li>
    
 {% endblock %}
  {% block entete %}
  <form class=\"form-inline ml-3\">
      <div class=\"input-group input-group-sm\">
        <input class=\"form-control form-control-navbar\" readonly=\"readonly\" placeholder=\"Entreprise  &nbsp;{{entreprise|upper}}\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t<button class=\"btn btn-success\" type=\"button\">
            <a href=\"{{path('inter_liste', {'id':ide })}}\" style=\"color: white;\"><i class=\"fas fa-home fa-sm\"></i></a>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>\t
{% endblock %}

{% block body %}
 {% for contenu in app.session.getflashbag.get('equipe.suppression') %}
        <div class=\" text-center alert alert-danger\" role=\"alert\">

            <div>
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">  <span aria-hidden=\"true\">&times;
            </span>  </button><span style=\"font-size:18px\"> {{ contenu}} </span></div>

        </div>
    {% endfor %}
   <div class=\"row\">
  <div class=\"col-lg-8\">
    <h1>suppression de l'équipe</h1>
    </div>
     <div class=\"col-lg-3\">
     </div>
      <div class=\"col-lg-1\">
        <a href=\"{{ path('equipe_index',{'id': ide}) }}\" title=\"Liste des équipes\" data-toggle=\"tooltip\" data-placement=\"top\" class=\"btn btn-success btn-circle\">
          <i class=\"fas fa-clipboard-list\"></i>
        </a>
      </div>
    </div>
            <br/><br/>
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ equipe.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ equipe.nom }}</td>
            </tr>
             <tr>
                <th>Entreprise</th>
                <td>{{  equipe.entreprise.nom }}</td>
            </tr>

            <tr>
                <th>Datecreation</th>
                <td>{{ equipe.datecreation }}</td>
            </tr>
            <tr>
                <th>Responsable</th>
                <td>{{ equipe.personnel.conteneure }}</td>
            </tr>
            <tr>
                <th>Objectif</th>
                <td>{{ equipe.objectif }}</td>
            </tr>
        </tbody>
    </table>
    {{ include('equipe/_delete_form.html.twig') }}
{% endblock %}
", "equipe/show.html.twig", "C:\\wamp64\\www\\audit\\audit\\templates\\equipe\\show.html.twig");
    }
}
