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

/* type_probleme/new.html.twig */
class __TwigTemplate_6c0cf0e9bd8512ca593e06c4c85e7c04bc6d41a99adfd0c3021b8b3b2b489ec3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "type_probleme/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "type_probleme/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "type_probleme/new.html.twig", 1);
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
        echo "   ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "session", [], "any", false, false, false, 6), "getflashbag", [], "any", false, false, false, 6), "get", [0 => "type_probleme.succes"], "method", false, false, false, 6));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "session", [], "any", false, false, false, 15), "getflashbag", [], "any", false, false, false, 15), "get", [0 => "type_probleme.erreur"], "method", false, false, false, 15));
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
        echo "    <div class=\"row\">
  <div class=\"col-lg-8\">
    <h1>Nouveau type de problème</h1>
    </div>
     <div class=\"col-lg-3\">
     </div>
      <div class=\"col-lg-1\">
        <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("type_probleme_index");
        echo "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Liste des types de problèmes\"  class=\"btn btn-success btn-circle\">
          <i class=\"fas fa-clipboard-list\"></i>
        </a>
      </div>
    </div>
            <br/><br/>

    ";
        // line 38
        echo twig_include($this->env, $context, "type_probleme/_form.html.twig");
        echo "

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
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
        return "type_probleme/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 43,  164 => 42,  150 => 38,  140 => 31,  131 => 24,  121 => 20,  115 => 16,  110 => 15,  100 => 11,  94 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}AgroAL LvT{% endblock %}

{% block body %}
   {% for contenu in app.session.getflashbag.get('type_probleme.succes') %}
        <div class=\" text-center alert alert-success\" role=\"alert\">

            <div>
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">  <span aria-hidden=\"true\">&times;
            </span>  </button><span style=\"font-size:18px\"> {{ contenu}} </span></div>

        </div>
    {% endfor %}
     {% for contenu in app.session.getflashbag.get('type_probleme.erreur') %}
        <div class=\" text-center alert alert-danger\" role=\"alert\">

            <div>
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">  <span aria-hidden=\"true\">&times;
            </span>  </button><span style=\"font-size:18px\"> {{ contenu}} </span></div>

        </div>
    {% endfor %}
    <div class=\"row\">
  <div class=\"col-lg-8\">
    <h1>Nouveau type de problème</h1>
    </div>
     <div class=\"col-lg-3\">
     </div>
      <div class=\"col-lg-1\">
        <a href=\"{{ path('type_probleme_index') }}\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Liste des types de problèmes\"  class=\"btn btn-success btn-circle\">
          <i class=\"fas fa-clipboard-list\"></i>
        </a>
      </div>
    </div>
            <br/><br/>

    {{ include('type_probleme/_form.html.twig') }}

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
 {% endblock %}", "type_probleme/new.html.twig", "C:\\wamp64\\www\\audit\\audit\\templates\\type_probleme\\new.html.twig");
    }
}
