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

/* equipe/new.html.twig */
class __TwigTemplate_8bf3cd9662c7324c1631ea588e7cff5b95efdbe5f92f4f694809c431446c4c05 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipe/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipe/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "equipe/new.html.twig", 1);
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

        echo "AgroAL LvT";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 5
        echo "  \t<li class=\"nav-header\">Gestion de l'entreprise</li>

\t\t\t\t<li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnel_index", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 8, $this->source); })())]), "html", null, true);
        echo "\">
          <i class=\"fas fa-fw fa-hands-helping\"></i>
          <p>Personnel</p></a>
      </li>
       <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("equipe_index", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 13, $this->source); })())]), "html", null, true);
        echo "\">
          <i class=\"fas fa-fw fa-people-carry\"></i>
          <p>Equipe</p></a>
      </li>
       <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("travailler_personnel_index", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 18, $this->source); })())]), "html", null, true);
        echo "\">
           <i class=\"fas fa-fw fa-hands-helping\"></i>
          <p>Participation</p></a>
      </li>
      <li class=\"nav-header\">
        Gestion de la production
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produir_index", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 26, $this->source); })())]), "html", null, true);
        echo "\">
          <i class=\"fas fa-fw fa-product-hunt\"></i>
          <p>Production</p></a>
      </li>
      <li class=\"nav-header\">
        Gestion des etapes
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etape_index", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 34, $this->source); })())]), "html", null, true);
        echo "\">
          <i class=\"fas fa-fw fa-step-forward\"></i>
          <p>Etape</p></a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("matiere_utiliser_index", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 39, $this->source); })())]), "html", null, true);
        echo "\">
          <i class=\"fas fa-fw fa-cog\"></i>
          <p> Intrant par etape </p></a>
      </li>
       <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("identificationccp_danger_index", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 44, $this->source); })())]), "html", null, true);
        echo "\">
          <i class=\"fas fa-fw fa-table\"></i>
          <p> Identification des ccp et danger </p></a>
      </li>
       <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("systeme_surveillance_index", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 49, $this->source); })())]), "html", null, true);
        echo "\">
          <i class=\"fas fa-fw fa-hand-paper\"></i>
          <p> Système de surveillance </p></a>
      </li>
     
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 55
    public function block_entete($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entete"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entete"));

        // line 56
        echo "\t\t <form class=\"form-inline ml-3\">
      <div class=\"input-group input-group-sm\">
        <input class=\"form-control form-control-navbar\" readonly=\"readonly\" placeholder=\"Entreprise  &nbsp;";
        // line 58
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 58, $this->source); })())), "html", null, true);
        echo "\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t<button class=\"btn btn-success\" type=\"button\">
            <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inter_liste", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 61, $this->source); })())]), "html", null, true);
        echo "\" style=\"color: white;\"><i class=\"fas fa-home fa-sm\"></i></a>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 67
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "session", [], "any", false, false, false, 68), "getflashbag", [], "any", false, false, false, 68), "get", [0 => "equipe.succes"], "method", false, false, false, 68));
        foreach ($context['_seq'] as $context["_key"] => $context["contenu"]) {
            // line 69
            echo "        <div class=\" text-center alert alert-success\" role=\"alert\">

            <div>
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">  <span aria-hidden=\"true\">&times;
            </span>  </button><span style=\"font-size:18px\"> ";
            // line 73
            echo twig_escape_filter($this->env, $context["contenu"], "html", null, true);
            echo " </span></div>

        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contenu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "     ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "session", [], "any", false, false, false, 77), "getflashbag", [], "any", false, false, false, 77), "get", [0 => "equipe.erreur"], "method", false, false, false, 77));
        foreach ($context['_seq'] as $context["_key"] => $context["contenu"]) {
            // line 78
            echo "        <div class=\" text-center alert alert-danger\" role=\"alert\">

            <div>
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">  <span aria-hidden=\"true\">&times;
            </span>  </button><span style=\"font-size:18px\"> ";
            // line 82
            echo twig_escape_filter($this->env, $context["contenu"], "html", null, true);
            echo " </span></div>

        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contenu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "   <div class=\"row\">
  <div class=\"col-lg-8\">
    <h1>Nouvelle équipe</h1>
    </div>
     <div class=\"col-lg-3\">
     </div>
      <div class=\"col-lg-1\">
        <a href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("equipe_index", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 93, $this->source); })())]), "html", null, true);
        echo "\" title=\"Liste des équipes\" data-toggle=\"tooltip\" data-placement=\"top\" class=\"btn btn-success btn-circle\">
          <i class=\"fas fa-clipboard-list\"></i>
        </a>
      </div>
    </div>
            <br/><br/>

    ";
        // line 100
        echo twig_include($this->env, $context, "equipe/_form.html.twig");
        echo "

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 104
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 105
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script>
    window.setTimeout(function() {
                \$(\".alert\").fadeTo(500, 0).slideUp(500, function(){
                    \$(this).remove();
                });
            }, 6000);
</script>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "equipe/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 105,  294 => 104,  280 => 100,  270 => 93,  261 => 86,  251 => 82,  245 => 78,  240 => 77,  230 => 73,  224 => 69,  220 => 68,  210 => 67,  194 => 61,  188 => 58,  184 => 56,  174 => 55,  158 => 49,  150 => 44,  142 => 39,  134 => 34,  123 => 26,  112 => 18,  104 => 13,  96 => 8,  91 => 5,  81 => 4,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}AgroAL LvT{% endblock %}
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
\t\t <form class=\"form-inline ml-3\">
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
{% for contenu in app.session.getflashbag.get('equipe.succes') %}
        <div class=\" text-center alert alert-success\" role=\"alert\">

            <div>
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">  <span aria-hidden=\"true\">&times;
            </span>  </button><span style=\"font-size:18px\"> {{ contenu}} </span></div>

        </div>
    {% endfor %}
     {% for contenu in app.session.getflashbag.get('equipe.erreur') %}
        <div class=\" text-center alert alert-danger\" role=\"alert\">

            <div>
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">  <span aria-hidden=\"true\">&times;
            </span>  </button><span style=\"font-size:18px\"> {{ contenu}} </span></div>

        </div>
    {% endfor %}
   <div class=\"row\">
  <div class=\"col-lg-8\">
    <h1>Nouvelle équipe</h1>
    </div>
     <div class=\"col-lg-3\">
     </div>
      <div class=\"col-lg-1\">
        <a href=\"{{ path('equipe_index',{'id': id}) }}\" title=\"Liste des équipes\" data-toggle=\"tooltip\" data-placement=\"top\" class=\"btn btn-success btn-circle\">
          <i class=\"fas fa-clipboard-list\"></i>
        </a>
      </div>
    </div>
            <br/><br/>

    {{ include('equipe/_form.html.twig') }}

    </div>
{% endblock %}
{% block javascripts %}
  {{parent()}}
<script>
    window.setTimeout(function() {
                \$(\".alert\").fadeTo(500, 0).slideUp(500, function(){
                    \$(this).remove();
                });
            }, 6000);
</script>
 {% endblock %}", "equipe/new.html.twig", "C:\\wamp64\\www\\audit\\audit\\templates\\equipe\\new.html.twig");
    }
}
