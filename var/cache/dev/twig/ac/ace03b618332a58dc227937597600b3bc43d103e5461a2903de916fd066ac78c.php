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

/* identificationccp_danger/index.html.twig */
class __TwigTemplate_eab2909957fbb1cbae126b1c1aa8f7c79b4ea34271839fde02a2eb782252b80a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "identificationccp_danger/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "identificationccp_danger/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "identificationccp_danger/index.html.twig", 1);
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
        echo " \t\t<form class=\"form-inline ml-3\">
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
        echo "
  <div class=\"row\">
  <div class=\"col-lg-8\">
    <h1>Liste des ccp et danger</h1>
    </div>
     <div class=\"col-lg-3\">
     </div>
      <div class=\"col-lg-1\">
        <a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("identificationccp_danger_new", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 76, $this->source); })())]), "html", null, true);
        echo "\" title=\"Nouveau ccp\" class=\"btn btn-success btn-circle\">
          <i class=\"fas fa-check\"></i>
        </a>
      </div>
    </div>
            <br/><br/>
<div class=\"row\">
\t\t\t<div class=\"col-lg-9\"></div>
\t\t\t<div class=\"col-lg-3\">
\t\t\t\t<div class=\"btn-group pull-right\">
\t\t\t\t\t<button class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t\tExporter les données</button>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" onclick=\"\$('#example1').tableExport({type:'txt',escape:'false'});\"><img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/icons/txt.png"), "html", null, true);
        echo "\" width=\"24\"/>
\t\t\t\t\t\t\t\tTXT</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" onclick=\"\$('#example1').tableExport({type:'excel',escape:'false'});\"><img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/icons/xls.png"), "html", null, true);
        echo "\" width=\"24\"/>
\t\t\t\t\t\t\t\tXLS</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" onclick=\"\$('#example1').tableExport({type:'doc',escape:'false'});\"><img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/icons/word.png"), "html", null, true);
        echo "\" width=\"24\"/>
\t\t\t\t\t\t\t\tWord</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</br>
     <div class=\"table-responsive\">
     <table class=\"table table-bordered\" id=\"example1\" width=\"100%\" cellspacing=\"0\">
        <thead>
            <tr>
                 <th>Etape</th>
                <th>Description_danger</th>
                <th>Cause_danger</th>
                <th>Mesure_preventive</th>
                <th>Frequence</th>
                <th>Gravite</th>
                <th>Detection</th>
                <th>Risque</th>
                <th>Ccp</th>
                <th>ParametreMaitriser</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["identificationccp_dangers"]) || array_key_exists("identificationccp_dangers", $context) ? $context["identificationccp_dangers"] : (function () { throw new RuntimeError('Variable "identificationccp_dangers" does not exist.', 128, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["identificationccp_danger"]) {
            // line 129
            echo "            <tr> 
                <td>";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["identificationccp_danger"], "etape", [], "any", false, false, false, 130), "nom", [], "any", false, false, false, 130), "html", null, true);
            echo "</td>
                <td>";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["identificationccp_danger"], "descriptionDanger", [], "any", false, false, false, 131), "html", null, true);
            echo "</td>
                <td>";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["identificationccp_danger"], "causeDanger", [], "any", false, false, false, 132), "html", null, true);
            echo "</td>
                <td>";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["identificationccp_danger"], "mesurePreventive", [], "any", false, false, false, 133), "html", null, true);
            echo "</td>
                <td>";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["identificationccp_danger"], "frequence", [], "any", false, false, false, 134), "html", null, true);
            echo "</td>
                <td>";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["identificationccp_danger"], "gravite", [], "any", false, false, false, 135), "html", null, true);
            echo "</td>
                <td>";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["identificationccp_danger"], "detection", [], "any", false, false, false, 136), "html", null, true);
            echo "</td>
                <td>";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["identificationccp_danger"], "risque", [], "any", false, false, false, 137), "html", null, true);
            echo "</td>
                <td>";
            // line 138
            echo ((twig_get_attribute($this->env, $this->source, $context["identificationccp_danger"], "ccp", [], "any", false, false, false, 138)) ? ("vrai") : ("faux"));
            echo "</td>
                <td>";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["identificationccp_danger"], "parametreMaitriser", [], "any", false, false, false, 139), "html", null, true);
            echo "</td>
                <td>
                 <a href=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("identificationccp_danger_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["identificationccp_danger"], "id", [], "any", false, false, false, 141), "ide" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 141, $this->source); })())]), "html", null, true);
            echo "\" title=\"Modifier\" class=\"btn btn-info btn-circle btn-sm\"><i class=\"fas fa-pencil-alt\"></i> </a>
                 <a href=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("identificationccp_danger_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["identificationccp_danger"], "id", [], "any", false, false, false, 142), "ide" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 142, $this->source); })())]), "html", null, true);
            echo "\" title=\"Supprimer\" class=\"btn btn-danger btn-circle btn-sm\"><i class=\"fas fa-trash\"></i> </a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 146
            echo "            <tr>
                <td colspan=\"3\">Aucune donnée trouvé</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['identificationccp_danger'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "         </tbody>
    </table>
 </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 154
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 155
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

\t<script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/tableexport/tableExport.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/tableexport/jquery.base64.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/tableexport/html2canvas.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/tableexport/jspdf/libs/sprintf.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/tableexport/jspdf/jspdf.js"), "html", null, true);
        echo "\"></script>

 <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/plugins/datatables/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/plugins/datatables/dataTables.bootstrap4.js"), "html", null, true);
        echo "\"></script>

\t
\t<script>
 \t\t\$(document).ready(function () {
\$('#example1').DataTable({
\t\"paging\": true,
      \"lengthChange\": true,
      \"searching\": true,
      \"ordering\": true,
      \"info\": true,
      \"autoWidth\": true,
\"language\": {
\"sProcessing\": \"Traitement en cours ...\",
\"sLengthMenu\": \"Afficher _MENU_ lignes\",
\"sZeroRecords\": \"Aucun résultat trouvé\",
\"sEmptyTable\": \"Aucune donnée disponible\",
\"sInfo\": \"Lignes _START_ à _END_ sur _TOTAL_\",
\"sInfoEmpty\": \"Aucune ligne affichée\",
\"sInfoFiltered\": \"(Filtrer un maximum de_MAX_)\",
\"sInfoPostFix\": \"\",
\"sSearch\": \"Chercher:\",
\"sUrl\": \"\",
\"sInfoThousands\": \",\",
\"sLoadingRecords\": \"Chargement...\",
\"oPaginate\": {
\"sFirst\": \"Premier\",
\"sLast\": \"Dernier\",
\"sNext\": \"Suivant\",
\"sPrevious\": \"Précédent\"
},
\"oAria\": {
\"sSortAscending\": \": Trier par ordre croissant\",
\"sSortDescending\": \": Trier par ordre décroissant\"
}
}
});
});

</script>
\t
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "identificationccp_danger/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 164,  415 => 163,  410 => 161,  406 => 160,  402 => 159,  398 => 158,  394 => 157,  388 => 155,  378 => 154,  365 => 150,  356 => 146,  347 => 142,  343 => 141,  338 => 139,  334 => 138,  330 => 137,  326 => 136,  322 => 135,  318 => 134,  314 => 133,  310 => 132,  306 => 131,  302 => 130,  299 => 129,  294 => 128,  264 => 101,  257 => 97,  249 => 92,  230 => 76,  220 => 68,  210 => 67,  194 => 61,  188 => 58,  184 => 56,  174 => 55,  158 => 49,  150 => 44,  142 => 39,  134 => 34,  123 => 26,  112 => 18,  104 => 13,  96 => 8,  91 => 5,  81 => 4,  62 => 3,  39 => 1,);
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

  <div class=\"row\">
  <div class=\"col-lg-8\">
    <h1>Liste des ccp et danger</h1>
    </div>
     <div class=\"col-lg-3\">
     </div>
      <div class=\"col-lg-1\">
        <a href=\"{{ path('identificationccp_danger_new',{'id': id}) }}\" title=\"Nouveau ccp\" class=\"btn btn-success btn-circle\">
          <i class=\"fas fa-check\"></i>
        </a>
      </div>
    </div>
            <br/><br/>
<div class=\"row\">
\t\t\t<div class=\"col-lg-9\"></div>
\t\t\t<div class=\"col-lg-3\">
\t\t\t\t<div class=\"btn-group pull-right\">
\t\t\t\t\t<button class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t\tExporter les données</button>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" onclick=\"\$('#example1').tableExport({type:'txt',escape:'false'});\"><img src=\"{{asset('style/icons/txt.png')}}\" width=\"24\"/>
\t\t\t\t\t\t\t\tTXT</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" onclick=\"\$('#example1').tableExport({type:'excel',escape:'false'});\"><img src=\"{{asset('style/icons/xls.png')}}\" width=\"24\"/>
\t\t\t\t\t\t\t\tXLS</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" onclick=\"\$('#example1').tableExport({type:'doc',escape:'false'});\"><img src=\"{{asset('style/icons/word.png')}}\" width=\"24\"/>
\t\t\t\t\t\t\t\tWord</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</br>
     <div class=\"table-responsive\">
     <table class=\"table table-bordered\" id=\"example1\" width=\"100%\" cellspacing=\"0\">
        <thead>
            <tr>
                 <th>Etape</th>
                <th>Description_danger</th>
                <th>Cause_danger</th>
                <th>Mesure_preventive</th>
                <th>Frequence</th>
                <th>Gravite</th>
                <th>Detection</th>
                <th>Risque</th>
                <th>Ccp</th>
                <th>ParametreMaitriser</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for identificationccp_danger in identificationccp_dangers %}
            <tr> 
                <td>{{ identificationccp_danger.etape.nom }}</td>
                <td>{{ identificationccp_danger.descriptionDanger }}</td>
                <td>{{ identificationccp_danger.causeDanger }}</td>
                <td>{{ identificationccp_danger.mesurePreventive }}</td>
                <td>{{ identificationccp_danger.frequence }}</td>
                <td>{{ identificationccp_danger.gravite }}</td>
                <td>{{ identificationccp_danger.detection }}</td>
                <td>{{ identificationccp_danger.risque }}</td>
                <td>{{ identificationccp_danger.ccp ? 'vrai' : 'faux' }}</td>
                <td>{{ identificationccp_danger.parametreMaitriser }}</td>
                <td>
                 <a href=\"{{ path('identificationccp_danger_edit', {'id': identificationccp_danger.id, 'ide':id}) }}\" title=\"Modifier\" class=\"btn btn-info btn-circle btn-sm\"><i class=\"fas fa-pencil-alt\"></i> </a>
                 <a href=\"{{ path('identificationccp_danger_delete', {'id': identificationccp_danger.id, 'ide':id}) }}\" title=\"Supprimer\" class=\"btn btn-danger btn-circle btn-sm\"><i class=\"fas fa-trash\"></i> </a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"3\">Aucune donnée trouvé</td>
            </tr>
        {% endfor %}
         </tbody>
    </table>
 </div>
{% endblock %}
{% block javascripts %}
\t{{parent()}}

\t<script src=\"{{asset('style/tableexport/tableExport.js')}}\"></script>
\t<script src=\"{{asset('style/tableexport/jquery.base64.js')}}\"></script>
\t<script src=\"{{asset('style/tableexport/html2canvas.js')}}\"></script>
\t<script src=\"{{asset('style/tableexport/jspdf/libs/sprintf.js')}}\"></script>
\t<script src=\"{{asset('style/tableexport/jspdf/jspdf.js')}}\"></script>

 <script src=\"{{asset('style/plugins/datatables/jquery.dataTables.js')}}\"></script>
<script src=\"{{asset('style/plugins/datatables/dataTables.bootstrap4.js')}}\"></script>

\t
\t<script>
 \t\t\$(document).ready(function () {
\$('#example1').DataTable({
\t\"paging\": true,
      \"lengthChange\": true,
      \"searching\": true,
      \"ordering\": true,
      \"info\": true,
      \"autoWidth\": true,
\"language\": {
\"sProcessing\": \"Traitement en cours ...\",
\"sLengthMenu\": \"Afficher _MENU_ lignes\",
\"sZeroRecords\": \"Aucun résultat trouvé\",
\"sEmptyTable\": \"Aucune donnée disponible\",
\"sInfo\": \"Lignes _START_ à _END_ sur _TOTAL_\",
\"sInfoEmpty\": \"Aucune ligne affichée\",
\"sInfoFiltered\": \"(Filtrer un maximum de_MAX_)\",
\"sInfoPostFix\": \"\",
\"sSearch\": \"Chercher:\",
\"sUrl\": \"\",
\"sInfoThousands\": \",\",
\"sLoadingRecords\": \"Chargement...\",
\"oPaginate\": {
\"sFirst\": \"Premier\",
\"sLast\": \"Dernier\",
\"sNext\": \"Suivant\",
\"sPrevious\": \"Précédent\"
},
\"oAria\": {
\"sSortAscending\": \": Trier par ordre croissant\",
\"sSortDescending\": \": Trier par ordre décroissant\"
}
}
});
});

</script>
\t
\t{% endblock %}
", "identificationccp_danger/index.html.twig", "C:\\wamp64\\www\\audit\\audit\\templates\\identificationccp_danger\\index.html.twig");
    }
}
