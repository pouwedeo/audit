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

/* matiere_premiere/edit.html.twig */
class __TwigTemplate_0a7e9db35c8f028e2defb4f2c2eeb6cc11930de90143dde147419694b63ee0ff extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matiere_premiere/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matiere_premiere/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "matiere_premiere/edit.html.twig", 1);
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

        echo "AgroAL LvT ";
        
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "session", [], "any", false, false, false, 6), "getflashbag", [], "any", false, false, false, 6), "get", [0 => "matiere_premiere.succes"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["contenu"]) {
            // line 7
            echo "        <div class=\" text-center alert alert-success\" role=\"alert\">

            <div>
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">  <span aria-hidden=\"true\">&times;
            </span>  </button><span style=\"font-size:18px\"> ";
            // line 11
            echo twig_escape_filter($this->env, $context["contenu"], "html", null, true);
            echo " </span></div>

        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contenu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "     ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "session", [], "any", false, false, false, 15), "getflashbag", [], "any", false, false, false, 15), "get", [0 => "matiere_premiere.erreur"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["contenu"]) {
            // line 16
            echo "        <div class=\" text-center alert alert-danger\" role=\"alert\">

            <div>
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">  <span aria-hidden=\"true\">&times;
            </span>  </button><span style=\"font-size:18px\"> ";
            // line 20
            echo twig_escape_filter($this->env, $context["contenu"], "html", null, true);
            echo " </span></div>

        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contenu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
 <div class=\"row\">
  <div class=\"col-lg-8\">
    <h1>Modification de la matière prémière</h1>
    </div>
     <div class=\"col-lg-3\">
     </div>
      <div class=\"col-lg-1\">
        <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("matiere_premiere_index");
        echo "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Liste des matières prémières\"  class=\"btn btn-success btn-circle\">
          <i class=\"fas fa-clipboard-list\"></i>
        </a>
      </div>
    </div>
            <br/><br/>

    ";
        // line 39
        echo twig_include($this->env, $context, "matiere_premiere/_form.html.twig", ["button_label" => "Update"]);
        echo "

    </div>
   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script>
    window.setTimeout(function() {
                \$(\".alert\").fadeTo(500, 0).slideUp(500, function(){
                    \$(this).remove();
                });
            }, 6000);
        } );

</script>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "matiere_premiere/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 45,  165 => 44,  150 => 39,  140 => 32,  130 => 24,  120 => 20,  114 => 16,  109 => 15,  99 => 11,  93 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}AgroAL LvT {% endblock %}

{% block body %}
{% for contenu in app.session.getflashbag.get('matiere_premiere.succes') %}
        <div class=\" text-center alert alert-success\" role=\"alert\">

            <div>
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">  <span aria-hidden=\"true\">&times;
            </span>  </button><span style=\"font-size:18px\"> {{ contenu}} </span></div>

        </div>
    {% endfor %}
     {% for contenu in app.session.getflashbag.get('matiere_premiere.erreur') %}
        <div class=\" text-center alert alert-danger\" role=\"alert\">

            <div>
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">  <span aria-hidden=\"true\">&times;
            </span>  </button><span style=\"font-size:18px\"> {{ contenu}} </span></div>

        </div>
    {% endfor %}

 <div class=\"row\">
  <div class=\"col-lg-8\">
    <h1>Modification de la matière prémière</h1>
    </div>
     <div class=\"col-lg-3\">
     </div>
      <div class=\"col-lg-1\">
        <a href=\"{{ path('matiere_premiere_index') }}\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Liste des matières prémières\"  class=\"btn btn-success btn-circle\">
          <i class=\"fas fa-clipboard-list\"></i>
        </a>
      </div>
    </div>
            <br/><br/>

    {{ include('matiere_premiere/_form.html.twig', {'button_label': 'Update'}) }}

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
        } );

</script>
 {% endblock %}", "matiere_premiere/edit.html.twig", "C:\\wamp64\\www\\audit\\audit\\templates\\matiere_premiere\\edit.html.twig");
    }
}
