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

/* personnel/index.html.twig */
class __TwigTemplate_7ddde4a46f44b0f3b346a341407597d1fa67351511eb6ff4df9a0a4346b9dcf2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "personnel/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "personnel/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "personnel/index.html.twig", 1);
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
        <a  href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnel_index", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 9, $this->source); })())]), "html", null, true);
        echo "\" class=\"nav-link\">
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
        echo " \t\t<form class=\"form-inline ml-3\">
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
        echo "  <div class=\"row\">
  <div class=\"col-lg-8\">
    <h1>Liste des personnels </h1>
    </div>
     <div class=\"col-lg-3\">
     </div>
      <div class=\"col-lg-1\">
        <a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnel_new", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 76, $this->source); })())]), "html", null, true);
        echo "\" title=\"Nouveau personnel \" class=\"btn btn-success btn-circle\">
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
\t\t\t\t\t
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
                <th>Nom</th>
                <th>Prenom</th>
                <th>Sexe</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Adresse</th>
                <th>Poste</th>
                <th>Photo</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["personnels"]) || array_key_exists("personnels", $context) ? $context["personnels"] : (function () { throw new RuntimeError('Variable "personnels" does not exist.', 126, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["personnel"]) {
            // line 127
            echo "            <tr>
                <td>";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personnel"], "nom", [], "any", false, false, false, 128), "html", null, true);
            echo "</td>
                <td>";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personnel"], "prenom", [], "any", false, false, false, 129), "html", null, true);
            echo "</td>
                <td>";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personnel"], "sexe", [], "any", false, false, false, 130), "html", null, true);
            echo "</td>
                <td>";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personnel"], "telephone", [], "any", false, false, false, 131), "html", null, true);
            echo "</td>
                <td>";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personnel"], "email", [], "any", false, false, false, 132), "html", null, true);
            echo "</td>
                <td>";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personnel"], "adresse", [], "any", false, false, false, 133), "html", null, true);
            echo "</td>
                <td>";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["personnel"], "poste", [], "any", false, false, false, 134), "nom", [], "any", false, false, false, 134), "html", null, true);
            echo "</td>
                <td><img src=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("style/photo/" . twig_get_attribute($this->env, $this->source, $context["personnel"], "photo", [], "any", false, false, false, 135))), "html", null, true);
            echo "\"  id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personnel"], "id", [], "any", false, false, false, 135), "html", null, true);
            echo "\"   alt=\"photo\"  style=\"opacity: .8;width: 20px;height: 15px;\"/></td>

                <td>
                 <a href=\"";
            // line 138
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnel_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["personnel"], "id", [], "any", false, false, false, 138), "ide" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 138, $this->source); })())]), "html", null, true);
            echo "\" title=\"Modifier\" class=\"btn btn-info btn-circle btn-sm\"><i class=\"fas fa-pencil-alt\"></i> </a>
                 <a href=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnel_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["personnel"], "id", [], "any", false, false, false, 139), "ide" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 139, $this->source); })())]), "html", null, true);
            echo "\" title=\"Supprimer\" class=\"btn btn-danger btn-circle btn-sm\"><i class=\"fas fa-trash\"></i> </a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 143
            echo "            <tr>
                <td colspan=\"3\">Aucune donnée trouvé</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personnel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "         </tbody>
    </table>
 </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 151
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 152
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

\t<script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/tableexport/tableExport.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/tableexport/jquery.base64.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/tableexport/html2canvas.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/tableexport/jspdf/libs/sprintf.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/tableexport/jspdf/jspdf.js"), "html", null, true);
        echo "\"></script>

 <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/plugins/datatables/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 161
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
        return "personnel/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 161,  407 => 160,  402 => 158,  398 => 157,  394 => 156,  390 => 155,  386 => 154,  380 => 152,  370 => 151,  357 => 147,  348 => 143,  339 => 139,  335 => 138,  327 => 135,  323 => 134,  319 => 133,  315 => 132,  311 => 131,  307 => 130,  303 => 129,  299 => 128,  296 => 127,  291 => 126,  263 => 101,  256 => 97,  248 => 92,  229 => 76,  220 => 69,  210 => 68,  194 => 62,  188 => 59,  184 => 57,  174 => 56,  158 => 50,  150 => 45,  142 => 40,  134 => 35,  123 => 27,  112 => 19,  104 => 14,  96 => 9,  91 => 6,  81 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}AgroAL LvT{% endblock %}

{% block menu %}
  \t<li class=\"nav-header\">Gestion de l'entreprise</li>

\t\t\t\t<li class=\"nav-item\">
        <a  href=\"{{path('personnel_index',{'id': id})}}\" class=\"nav-link\">
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
    <h1>Liste des personnels </h1>
    </div>
     <div class=\"col-lg-3\">
     </div>
      <div class=\"col-lg-1\">
        <a href=\"{{ path('personnel_new',{'id': id}) }}\" title=\"Nouveau personnel \" class=\"btn btn-success btn-circle\">
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
\t\t\t\t\t
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
                <th>Nom</th>
                <th>Prenom</th>
                <th>Sexe</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Adresse</th>
                <th>Poste</th>
                <th>Photo</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for personnel in personnels %}
            <tr>
                <td>{{ personnel.nom }}</td>
                <td>{{ personnel.prenom }}</td>
                <td>{{ personnel.sexe }}</td>
                <td>{{ personnel.telephone }}</td>
                <td>{{ personnel.email }}</td>
                <td>{{ personnel.adresse }}</td>
                <td>{{ personnel. poste.nom }}</td>
                <td><img src=\"{{asset('style/photo/'~ personnel.photo )}}\"  id=\"{{personnel.id}}\"   alt=\"photo\"  style=\"opacity: .8;width: 20px;height: 15px;\"/></td>

                <td>
                 <a href=\"{{ path('personnel_edit', {'id': personnel.id,  'ide':id}) }}\" title=\"Modifier\" class=\"btn btn-info btn-circle btn-sm\"><i class=\"fas fa-pencil-alt\"></i> </a>
                 <a href=\"{{ path('personnel_delete', {'id': personnel.id, 'ide':id}) }}\" title=\"Supprimer\" class=\"btn btn-danger btn-circle btn-sm\"><i class=\"fas fa-trash\"></i> </a>
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
", "personnel/index.html.twig", "C:\\wamp64\\www\\audit\\audit\\templates\\personnel\\index.html.twig");
    }
}
