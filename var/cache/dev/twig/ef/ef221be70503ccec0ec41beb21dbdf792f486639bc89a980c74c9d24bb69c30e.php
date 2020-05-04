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

/* etape/_form.html.twig */
class __TwigTemplate_e3aeb92aee3c42163133226ee9dd0a5a859c1bd8a4a145c057b9c8ea21cfaf1f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etape/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etape/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
      <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 200px;\" id=\"basic-addon1\">Nom</span>
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
    <span class=\"input-group-text\" style=\"width: 200px;\" >Niveau</span>
  </div>
       ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "niveau", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
       ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "niveau", [], "any", false, false, false, 14), 'errors');
        echo "
  </div>
   <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 200px;\" id=\"basic-addon1\">Description</span>
  </div>
       ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
       ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21), 'errors');
        echo "
  </div>
  
   <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 200px;\" id=\"basic-addon1\">Produit</span>
  </div>
       ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "produit", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control input-mask"]]);
        echo "
       ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "produit", [], "any", false, false, false, 29), 'errors');
        echo "
  </div>
 
   <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 200px;\" id=\"basic-addon1\">élément de sortie</span>
  </div>
       ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "elementsortie", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control input-mask"]]);
        echo "
       ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "elementsortie", [], "any", false, false, false, 37), 'errors');
        echo "
  </div>
    <div class=\"input-group mb-3\">
   <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 200px;\" id=\"basic-addon1\">Image du produit obtenu</span>
  </div>
  <div class=\"custom-file\">
       ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "imageproduitobtenu", [], "any", false, false, false, 44), 'widget', ["attr" => ["placeholder" => "Select an article image"]]);
        echo "
       ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "imageproduitobtenu", [], "any", false, false, false, 45), 'errors');
        echo "
      <label class=\"custom-file-label\" for=\"personnel_photo\">Choisir une photo</label>
  </div>

  </div>
   <div class=\"col-md-4 col-xs-4 col-sm-4\">
       <button type=\"submit\" class=\"btn btn-success\">Enrégistrer</button>
      <button type=\"reset\" class=\"btn btn-danger\">Annuler</button>
    </div>
";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "etape/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 54,  123 => 45,  119 => 44,  109 => 37,  105 => 36,  95 => 29,  91 => 28,  81 => 21,  77 => 20,  68 => 14,  64 => 13,  55 => 7,  51 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
      <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 200px;\" id=\"basic-addon1\">Nom</span>
  </div>
       {{ form_widget(form.nom,{'attr': {'class':'form-control input-mask'}}) }}
       {{ form_errors(form.nom) }}
  </div>
   <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 200px;\" >Niveau</span>
  </div>
       {{ form_widget(form.niveau,{'attr': {'class':'form-control'}}) }}
       {{ form_errors(form.niveau) }}
  </div>
   <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 200px;\" id=\"basic-addon1\">Description</span>
  </div>
       {{ form_widget(form.description,{'attr': {'class':'form-control'}}) }}
       {{ form_errors(form.description) }}
  </div>
  
   <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 200px;\" id=\"basic-addon1\">Produit</span>
  </div>
       {{ form_widget(form.produit,{'attr': {'class':'form-control input-mask'}}) }}
       {{ form_errors(form.produit) }}
  </div>
 
   <div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 200px;\" id=\"basic-addon1\">élément de sortie</span>
  </div>
       {{ form_widget(form.elementsortie,{'attr': {'class':'form-control input-mask'}}) }}
       {{ form_errors(form.elementsortie) }}
  </div>
    <div class=\"input-group mb-3\">
   <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" style=\"width: 200px;\" id=\"basic-addon1\">Image du produit obtenu</span>
  </div>
  <div class=\"custom-file\">
       {{ form_widget(form.imageproduitobtenu,{'attr': {'placeholder': 'Select an article image'}}) }}
       {{ form_errors(form.imageproduitobtenu) }}
      <label class=\"custom-file-label\" for=\"personnel_photo\">Choisir une photo</label>
  </div>

  </div>
   <div class=\"col-md-4 col-xs-4 col-sm-4\">
       <button type=\"submit\" class=\"btn btn-success\">Enrégistrer</button>
      <button type=\"reset\" class=\"btn btn-danger\">Annuler</button>
    </div>
{{ form_end(form) }}
", "etape/_form.html.twig", "C:\\wamp64\\www\\audit\\audit\\templates\\etape\\_form.html.twig");
    }
}
