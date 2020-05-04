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

/* personnel/_form.html.twig */
class __TwigTemplate_87a3da03e1b9c47e7a1289a8dec25c074f023a724248a2814ca4ee2033476b65 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "personnel/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "personnel/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
  <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 160px;\" id=\"basic-addon1\">Nom</span>
  </div>
       ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), 'widget', ["attr" => ["class" => "form-control input-mask"]]);
        echo "
       ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "nom", [], "any", false, false, false, 7), 'errors');
        echo "
  </div>
  <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 160px;\" id=\"basic-addon1\">Prénom</span>
  </div>
       ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "prenom", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control input-mask"]]);
        echo "
       ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "prenom", [], "any", false, false, false, 14), 'errors');
        echo "
  </div>
  <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 160px;\" id=\"basic-addon1\">Sexe</span>
  </div>
       ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "sexe", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control select-mask"]]);
        echo "
       ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "sexe", [], "any", false, false, false, 21), 'errors');
        echo "
  </div>
  <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 160px;\" id=\"basic-addon1\">Téléphone</span>
  </div>
       ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "telephone", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control input-mask"]]);
        echo "
       ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "telephone", [], "any", false, false, false, 28), 'errors');
        echo "
  </div>
  <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 160px;\" id=\"basic-addon1\">Email</span>
  </div>
       ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control input-mask"]]);
        echo "
       ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "email", [], "any", false, false, false, 35), 'errors');
        echo "
  </div>
  <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 160px;\" id=\"basic-addon1\">Adresse</span>
  </div>
       ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "adresse", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control input-mask"]]);
        echo "
       ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "adresse", [], "any", false, false, false, 42), 'errors');
        echo "
  </div>
  <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 160px;\" id=\"basic-addon1\">Photo</span>
  </div>
  <div class=\"custom-file\">
       ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "photo", [], "any", false, false, false, 49), 'widget', ["attr" => ["placeholder" => "Select an article image"]]);
        echo "
       ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "photo", [], "any", false, false, false, 50), 'errors');
        echo "
    <label class=\"custom-file-label\" for=\"personnel_photo\">Choisir une photo</label>
 
  </div>
  </div>
  <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 160px;\" id=\"basic-addon1\">Poste</span>
  </div>
       ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "poste", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control input-mask"]]);
        echo "
       ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "poste", [], "any", false, false, false, 60), 'errors');
        echo "
  </div>
  ";
        // line 69
        echo "   <div class=\"col-md-4 col-xs-4 col-sm-4\">
       <button type=\"submit\" class=\"btn btn-success\">Enrégistrer</button>
      <button type=\"reset\" class=\"btn btn-danger\">Annuler</button>
    </div>
";
        // line 73
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "personnel/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 73,  155 => 69,  150 => 60,  146 => 59,  134 => 50,  130 => 49,  120 => 42,  116 => 41,  107 => 35,  103 => 34,  94 => 28,  90 => 27,  81 => 21,  77 => 20,  68 => 14,  64 => 13,  55 => 7,  51 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
  <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 160px;\" id=\"basic-addon1\">Nom</span>
  </div>
       {{ form_widget(form.nom,{'attr': {'class':'form-control input-mask'}}) }}
       {{ form_errors(form.nom) }}
  </div>
  <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 160px;\" id=\"basic-addon1\">Prénom</span>
  </div>
       {{ form_widget(form.prenom,{'attr': {'class':'form-control input-mask'}}) }}
       {{ form_errors(form.prenom) }}
  </div>
  <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 160px;\" id=\"basic-addon1\">Sexe</span>
  </div>
       {{ form_widget(form.sexe,{'attr': {'class':'form-control select-mask'}}) }}
       {{ form_errors(form.sexe) }}
  </div>
  <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 160px;\" id=\"basic-addon1\">Téléphone</span>
  </div>
       {{ form_widget(form.telephone,{'attr': {'class':'form-control input-mask'}}) }}
       {{ form_errors(form.telephone) }}
  </div>
  <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 160px;\" id=\"basic-addon1\">Email</span>
  </div>
       {{ form_widget(form.email,{'attr': {'class':'form-control input-mask'}}) }}
       {{ form_errors(form.email) }}
  </div>
  <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 160px;\" id=\"basic-addon1\">Adresse</span>
  </div>
       {{ form_widget(form.adresse,{'attr': {'class':'form-control input-mask'}}) }}
       {{ form_errors(form.adresse) }}
  </div>
  <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 160px;\" id=\"basic-addon1\">Photo</span>
  </div>
  <div class=\"custom-file\">
       {{ form_widget(form.photo,{'attr': {'placeholder': 'Select an article image'}}) }}
       {{ form_errors(form.photo) }}
    <label class=\"custom-file-label\" for=\"personnel_photo\">Choisir une photo</label>
 
  </div>
  </div>
  <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 160px;\" id=\"basic-addon1\">Poste</span>
  </div>
       {{ form_widget(form.poste,{'attr': {'class':'form-control input-mask'}}) }}
       {{ form_errors(form.poste) }}
  </div>
  {# <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 160px;\" id=\"basic-addon1\">Entreprise</span>
  </div>
       {{ form_widget(form.entreprise,{'attr': {'class':'form-control input-mask'}}) }}
       {{ form_errors(form.entreprise) }}
  </div> #}
   <div class=\"col-md-4 col-xs-4 col-sm-4\">
       <button type=\"submit\" class=\"btn btn-success\">Enrégistrer</button>
      <button type=\"reset\" class=\"btn btn-danger\">Annuler</button>
    </div>
{{ form_end(form) }}
", "personnel/_form.html.twig", "C:\\wamp64\\www\\audit\\audit\\templates\\personnel\\_form.html.twig");
    }
}
