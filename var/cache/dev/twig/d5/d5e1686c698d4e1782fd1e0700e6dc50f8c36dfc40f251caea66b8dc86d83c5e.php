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

/* systeme_surveillance/show.html.twig */
class __TwigTemplate_081eedbb4a7532eb2584bb06dc61f0362a9ab9ad23d3ac3582638ded2c81d452 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "systeme_surveillance/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "systeme_surveillance/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "systeme_surveillance/show.html.twig", 1);
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
        echo "      \t<li class=\"nav-header\">Gestion de l'entreprise</li>

      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnel_index", ["id" => (isset($context["ide"]) || array_key_exists("ide", $context) ? $context["ide"] : (function () { throw new RuntimeError('Variable "ide" does not exist.', 8, $this->source); })())]), "html", null, true);
        echo "\">
          <i class=\"fas fa-fw fa-hands-helping\"></i>
          <p>Personnel</p></a>
      </li>
       <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("equipe_index", ["id" => (isset($context["ide"]) || array_key_exists("ide", $context) ? $context["ide"] : (function () { throw new RuntimeError('Variable "ide" does not exist.', 13, $this->source); })())]), "html", null, true);
        echo "\">
          <i class=\"fas fa-fw fa-people-carry\"></i>
          <p>Equipe</p></a>
      </li>
       <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("travailler_personnel_index", ["id" => (isset($context["ide"]) || array_key_exists("ide", $context) ? $context["ide"] : (function () { throw new RuntimeError('Variable "ide" does not exist.', 18, $this->source); })())]), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produir_index", ["id" => (isset($context["ide"]) || array_key_exists("ide", $context) ? $context["ide"] : (function () { throw new RuntimeError('Variable "ide" does not exist.', 27, $this->source); })())]), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etape_index", ["id" => (isset($context["ide"]) || array_key_exists("ide", $context) ? $context["ide"] : (function () { throw new RuntimeError('Variable "ide" does not exist.', 35, $this->source); })())]), "html", null, true);
        echo "\">
          <i class=\"fas fa-fw fa-step-forward\"></i>
          <p>Etape</p></a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("matiere_utiliser_index", ["id" => (isset($context["ide"]) || array_key_exists("ide", $context) ? $context["ide"] : (function () { throw new RuntimeError('Variable "ide" does not exist.', 40, $this->source); })())]), "html", null, true);
        echo "\">
          <i class=\"fas fa-fw fa-cog\"></i>
          <p> Intrant par etape </p></a>
      </li>
       <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("identificationccp_danger_index", ["id" => (isset($context["ide"]) || array_key_exists("ide", $context) ? $context["ide"] : (function () { throw new RuntimeError('Variable "ide" does not exist.', 45, $this->source); })())]), "html", null, true);
        echo "\">
          <i class=\"fas fa-fw fa-table\"></i>
          <p> Identification des ccp et danger </p></a>
      </li>
       <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("systeme_surveillance_index", ["id" => (isset($context["ide"]) || array_key_exists("ide", $context) ? $context["ide"] : (function () { throw new RuntimeError('Variable "ide" does not exist.', 50, $this->source); })())]), "html", null, true);
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
        echo "  <form class=\"form-inline ml-3\">
      <div class=\"input-group input-group-sm\">
        <input class=\"form-control form-control-navbar\" readonly=\"readonly\" placeholder=\"Entreprise  &nbsp;";
        // line 59
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 59, $this->source); })())), "html", null, true);
        echo "\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t<button class=\"btn btn-success\" type=\"button\">
            <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inter_liste", ["id" => (isset($context["ide"]) || array_key_exists("ide", $context) ? $context["ide"] : (function () { throw new RuntimeError('Variable "ide" does not exist.', 62, $this->source); })())]), "html", null, true);
        echo "\" style=\"color: white;\"><i class=\"fas fa-home fa-sm\"></i></a>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>\t
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 69
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 70
        echo "   <div class=\"row\">
  <div class=\"col-lg-8\">
    <h1>suppression du système de surveillance</h1>
    </div>
     <div class=\"col-lg-3\">
     </div>
      <div class=\"col-lg-1\">
        <a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("systeme_surveillance_index", ["id" => (isset($context["ide"]) || array_key_exists("ide", $context) ? $context["ide"] : (function () { throw new RuntimeError('Variable "ide" does not exist.', 77, $this->source); })())]), "html", null, true);
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
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["systeme_surveillance"]) || array_key_exists("systeme_surveillance", $context) ? $context["systeme_surveillance"] : (function () { throw new RuntimeError('Variable "systeme_surveillance" does not exist.', 88, $this->source); })()), "id", [], "any", false, false, false, 88), "html", null, true);
        echo "</td>
            </tr>
             <tr>
                <th>Critere</th>
                <td>";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["systeme_surveillance"]) || array_key_exists("systeme_surveillance", $context) ? $context["systeme_surveillance"] : (function () { throw new RuntimeError('Variable "systeme_surveillance" does not exist.', 92, $this->source); })()), "critere_surveille", [], "any", false, false, false, 92), "critere", [], "any", false, false, false, 92), "html", null, true);
        echo "</td>
            </tr>
             <tr>
                <th>Type de probleme</th>
                <td>";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["systeme_surveillance"]) || array_key_exists("systeme_surveillance", $context) ? $context["systeme_surveillance"] : (function () { throw new RuntimeError('Variable "systeme_surveillance" does not exist.', 96, $this->source); })()), "type_probleme", [], "any", false, false, false, 96), "probleme", [], "any", false, false, false, 96), "html", null, true);
        echo "</td>
            </tr>
             <tr>
                <th>Etape</th>
                <td>";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["systeme_surveillance"]) || array_key_exists("systeme_surveillance", $context) ? $context["systeme_surveillance"] : (function () { throw new RuntimeError('Variable "systeme_surveillance" does not exist.', 100, $this->source); })()), "etape", [], "any", false, false, false, 100), "nom", [], "any", false, false, false, 100), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Limite_critique</th>
                <td>";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["systeme_surveillance"]) || array_key_exists("systeme_surveillance", $context) ? $context["systeme_surveillance"] : (function () { throw new RuntimeError('Variable "systeme_surveillance" does not exist.', 104, $this->source); })()), "limiteCritique", [], "any", false, false, false, 104), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Enregistrement</th>
                <td>";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["systeme_surveillance"]) || array_key_exists("systeme_surveillance", $context) ? $context["systeme_surveillance"] : (function () { throw new RuntimeError('Variable "systeme_surveillance" does not exist.', 108, $this->source); })()), "enregistrement", [], "any", false, false, false, 108), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Action_corrective</th>
                <td>";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["systeme_surveillance"]) || array_key_exists("systeme_surveillance", $context) ? $context["systeme_surveillance"] : (function () { throw new RuntimeError('Variable "systeme_surveillance" does not exist.', 112, $this->source); })()), "actionCorrective", [], "any", false, false, false, 112), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Frequence_controle</th>
                <td>";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["systeme_surveillance"]) || array_key_exists("systeme_surveillance", $context) ? $context["systeme_surveillance"] : (function () { throw new RuntimeError('Variable "systeme_surveillance" does not exist.', 116, $this->source); })()), "frequenceControle", [], "any", false, false, false, 116), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Responsable</th>
                <td>";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["systeme_surveillance"]) || array_key_exists("systeme_surveillance", $context) ? $context["systeme_surveillance"] : (function () { throw new RuntimeError('Variable "systeme_surveillance" does not exist.', 120, $this->source); })()), "personnel", [], "any", false, false, false, 120), "conteneure", [], "any", false, false, false, 120), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Verification</th>
                <td>";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["systeme_surveillance"]) || array_key_exists("systeme_surveillance", $context) ? $context["systeme_surveillance"] : (function () { throw new RuntimeError('Variable "systeme_surveillance" does not exist.', 124, $this->source); })()), "verification", [], "any", false, false, false, 124), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Resultat</th>
                <td>";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["systeme_surveillance"]) || array_key_exists("systeme_surveillance", $context) ? $context["systeme_surveillance"] : (function () { throw new RuntimeError('Variable "systeme_surveillance" does not exist.', 128, $this->source); })()), "resultat", [], "any", false, false, false, 128), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    ";
        // line 133
        echo twig_include($this->env, $context, "systeme_surveillance/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "systeme_surveillance/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 133,  313 => 128,  306 => 124,  299 => 120,  292 => 116,  285 => 112,  278 => 108,  271 => 104,  264 => 100,  257 => 96,  250 => 92,  243 => 88,  229 => 77,  220 => 70,  210 => 69,  194 => 62,  188 => 59,  184 => 57,  174 => 56,  158 => 50,  150 => 45,  142 => 40,  134 => 35,  123 => 27,  111 => 18,  103 => 13,  95 => 8,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
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
   <div class=\"row\">
  <div class=\"col-lg-8\">
    <h1>suppression du système de surveillance</h1>
    </div>
     <div class=\"col-lg-3\">
     </div>
      <div class=\"col-lg-1\">
        <a href=\"{{ path('systeme_surveillance_index',{'id': ide}) }}\" title=\"Liste des équipes\" data-toggle=\"tooltip\" data-placement=\"top\" class=\"btn btn-success btn-circle\">
          <i class=\"fas fa-clipboard-list\"></i>
        </a>
      </div>
    </div>
            <br/><br/>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ systeme_surveillance.id }}</td>
            </tr>
             <tr>
                <th>Critere</th>
                <td>{{ systeme_surveillance.critere_surveille.critere }}</td>
            </tr>
             <tr>
                <th>Type de probleme</th>
                <td>{{ systeme_surveillance.type_probleme.probleme }}</td>
            </tr>
             <tr>
                <th>Etape</th>
                <td>{{ systeme_surveillance.etape.nom }}</td>
            </tr>
            <tr>
                <th>Limite_critique</th>
                <td>{{ systeme_surveillance.limiteCritique }}</td>
            </tr>
            <tr>
                <th>Enregistrement</th>
                <td>{{ systeme_surveillance.enregistrement }}</td>
            </tr>
            <tr>
                <th>Action_corrective</th>
                <td>{{ systeme_surveillance.actionCorrective }}</td>
            </tr>
            <tr>
                <th>Frequence_controle</th>
                <td>{{ systeme_surveillance.frequenceControle }}</td>
            </tr>
            <tr>
                <th>Responsable</th>
                <td>{{ systeme_surveillance.personnel.conteneure }}</td>
            </tr>
            <tr>
                <th>Verification</th>
                <td>{{ systeme_surveillance.verification }}</td>
            </tr>
            <tr>
                <th>Resultat</th>
                <td>{{ systeme_surveillance.resultat }}</td>
            </tr>
        </tbody>
    </table>

    {{ include('systeme_surveillance/_delete_form.html.twig') }}
{% endblock %}
", "systeme_surveillance/show.html.twig", "C:\\wamp64\\www\\audit\\audit\\templates\\systeme_surveillance\\show.html.twig");
    }
}
