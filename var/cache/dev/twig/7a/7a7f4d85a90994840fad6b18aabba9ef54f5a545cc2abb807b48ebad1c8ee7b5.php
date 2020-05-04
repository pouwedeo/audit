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

/* critere_surveille/index.html.twig */
class __TwigTemplate_ad958cc7fd3f34f1d8c6d70eddde681d5703499bca2698d4a20606756641671c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "critere_surveille/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "critere_surveille/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "critere_surveille/index.html.twig", 1);
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
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"row\">
  <div class=\"col-lg-8\">
    <h1>Liste des critères de surveillances</h1>
    </div>
     <div class=\"col-lg-3\">
     </div>
      <div class=\"col-lg-1\">
        <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("critere_surveille_new");
        echo "\" title=\"Nouveau critère de surveillance\" class=\"btn btn-success btn-circle\">
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
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/icons/txt.png"), "html", null, true);
        echo "\" width=\"24\"/>
\t\t\t\t\t\t\t\tTXT</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" onclick=\"\$('#example1').tableExport({type:'excel',escape:'false'});\"><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/icons/xls.png"), "html", null, true);
        echo "\" width=\"24\"/>
\t\t\t\t\t\t\t\tXLS</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" onclick=\"\$('#example1').tableExport({type:'doc',escape:'false'});\"><img src=\"";
        // line 38
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
                <th>Critere</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["critere_surveilles"]) || array_key_exists("critere_surveilles", $context) ? $context["critere_surveilles"] : (function () { throw new RuntimeError('Variable "critere_surveilles" does not exist.', 56, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["critere_surveille"]) {
            // line 57
            echo "            <tr>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["critere_surveille"], "critere", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                <td>
                
                 <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("critere_surveille_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["critere_surveille"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\" title=\"Modifier\" class=\"btn btn-info btn-circle btn-sm\"><i class=\"fas fa-pencil-alt\"></i> </a>
                  <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("critere_surveille_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["critere_surveille"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\" title=\"Supprimer\" class=\"btn btn-danger btn-circle btn-sm\"><i class=\"fas fa-trash\"></i> </a>
\t\t\t\t
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 67
            echo "            <tr>
                <td colspan=\"3\">Aucune donnée trouvé</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['critere_surveille'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "         </tbody>
    </table>
 </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

\t<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/tableexport/tableExport.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/tableexport/jquery.base64.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/tableexport/html2canvas.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/tableexport/jspdf/libs/sprintf.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/tableexport/jspdf/jspdf.js"), "html", null, true);
        echo "\"></script>

 <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/plugins/datatables/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 86
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
        return "critere_surveille/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 86,  241 => 85,  236 => 83,  232 => 82,  228 => 81,  224 => 80,  220 => 79,  214 => 77,  204 => 76,  190 => 71,  181 => 67,  171 => 62,  167 => 61,  161 => 58,  158 => 57,  153 => 56,  132 => 38,  125 => 34,  117 => 29,  98 => 13,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}AgroAL LvT{% endblock %}

{% block body %}
    <div class=\"row\">
  <div class=\"col-lg-8\">
    <h1>Liste des critères de surveillances</h1>
    </div>
     <div class=\"col-lg-3\">
     </div>
      <div class=\"col-lg-1\">
        <a href=\"{{ path('critere_surveille_new') }}\" title=\"Nouveau critère de surveillance\" class=\"btn btn-success btn-circle\">
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
                <th>Critere</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for critere_surveille in critere_surveilles %}
            <tr>
                <td>{{ critere_surveille.critere }}</td>
                <td>
                
                 <a href=\"{{ path('critere_surveille_edit', {'id': critere_surveille.id}) }}\" title=\"Modifier\" class=\"btn btn-info btn-circle btn-sm\"><i class=\"fas fa-pencil-alt\"></i> </a>
                  <a href=\"{{ path('critere_surveille_delete', {'id': critere_surveille.id}) }}\" title=\"Supprimer\" class=\"btn btn-danger btn-circle btn-sm\"><i class=\"fas fa-trash\"></i> </a>
\t\t\t\t
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
", "critere_surveille/index.html.twig", "C:\\wamp64\\www\\audit\\audit\\templates\\critere_surveille\\index.html.twig");
    }
}
