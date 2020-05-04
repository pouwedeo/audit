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

/* produit/_form.html.twig */
class __TwigTemplate_fc5d6d1c596c259103552ef8b8cf9593a114d7271acaf027c0389cdfc1d1d90b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
     <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 165px;\" id=\"basic-addon1\">Nom</span>
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
    <span class=\"input-group-text\" style=\"width: 165px;\" id=\"basic-addon1\">Aspect final</span>
  </div>
       ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "aspectfinal", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control input-mask"]]);
        echo "
       ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "aspectfinal", [], "any", false, false, false, 14), 'errors');
        echo "
  </div>
  <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 165px;\">Caractéristique</span>
  </div>
       ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "caracteristique", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
       ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "caracteristique", [], "any", false, false, false, 21), 'errors');
        echo "
  </div>
  <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 165px;\">Utilisation prévue</span>
  </div>
       ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "utilisationprevue", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
       ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "utilisationprevue", [], "any", false, false, false, 28), 'errors');
        echo "
  </div>
  <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 167px;\" id=\"basic-addon1\">Duré de conservation</span>
  </div>
       ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "dureconservation", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control input-mask"]]);
        echo "
       ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "dureconservation", [], "any", false, false, false, 35), 'errors');
        echo "
  </div>
  <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 165px;\" id=\"inputGroupFile01\">Image du produit</span>
  </div>
  <div class=\"custom-file\">
       ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "imageproduit", [], "any", false, false, false, 42), 'widget', ["attr" => ["placeholder" => "Select an article image"]]);
        echo "
       ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "imageproduit", [], "any", false, false, false, 43), 'errors');
        echo "
     <label class=\"custom-file-label\" for=\"inputGroupFile01\">Choisir un fichier</label>

  </div>
  </div>
  <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 165px;\">Emballage</span>
  </div>
  <div class=\"custom-file\">
       ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "emballage", [], "any", false, false, false, 53), 'widget', ["attr" => ["placeholder" => "Select an article image"]]);
        echo "
       ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "emballage", [], "any", false, false, false, 54), 'errors');
        echo "
      <label class=\"custom-file-label\">Choisir un fichier</label>

  </div>
   </div>
   <div class=\"col-md-4 col-xs-4 col-sm-4\">
       <button type=\"submit\" class=\"btn btn-success\">Enrégistrer</button>
      <button type=\"reset\" class=\"btn btn-danger\">Annuler</button>
    </div>
";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "produit/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 63,  138 => 54,  134 => 53,  121 => 43,  117 => 42,  107 => 35,  103 => 34,  94 => 28,  90 => 27,  81 => 21,  77 => 20,  68 => 14,  64 => 13,  55 => 7,  51 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
     <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 165px;\" id=\"basic-addon1\">Nom</span>
  </div>
       {{ form_widget(form.nom,{'attr': {'class':'form-control input-mask'}}) }}
       {{ form_errors(form.nom) }}
  </div>
  <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 165px;\" id=\"basic-addon1\">Aspect final</span>
  </div>
       {{ form_widget(form.aspectfinal,{'attr': {'class':'form-control input-mask'}}) }}
       {{ form_errors(form.aspectfinal) }}
  </div>
  <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 165px;\">Caractéristique</span>
  </div>
       {{ form_widget(form.caracteristique,{'attr': {'class':'form-control'}}) }}
       {{ form_errors(form.caracteristique) }}
  </div>
  <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 165px;\">Utilisation prévue</span>
  </div>
       {{ form_widget(form.utilisationprevue,{'attr': {'class':'form-control'}}) }}
       {{ form_errors(form.utilisationprevue) }}
  </div>
  <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 167px;\" id=\"basic-addon1\">Duré de conservation</span>
  </div>
       {{ form_widget(form.dureconservation,{'attr': {'class':'form-control input-mask'}}) }}
       {{ form_errors(form.dureconservation) }}
  </div>
  <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 165px;\" id=\"inputGroupFile01\">Image du produit</span>
  </div>
  <div class=\"custom-file\">
       {{ form_widget(form.imageproduit,{'attr':  {'placeholder': 'Select an article image'}}) }}
       {{ form_errors(form.imageproduit) }}
     <label class=\"custom-file-label\" for=\"inputGroupFile01\">Choisir un fichier</label>

  </div>
  </div>
  <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 165px;\">Emballage</span>
  </div>
  <div class=\"custom-file\">
       {{ form_widget(form.emballage,{'attr':  {'placeholder': 'Select an article image'}}) }}
       {{ form_errors(form.emballage) }}
      <label class=\"custom-file-label\">Choisir un fichier</label>

  </div>
   </div>
   <div class=\"col-md-4 col-xs-4 col-sm-4\">
       <button type=\"submit\" class=\"btn btn-success\">Enrégistrer</button>
      <button type=\"reset\" class=\"btn btn-danger\">Annuler</button>
    </div>
{{ form_end(form) }}
", "produit/_form.html.twig", "C:\\wamp64\\www\\audit\\audit\\templates\\produit\\_form.html.twig");
    }
}
