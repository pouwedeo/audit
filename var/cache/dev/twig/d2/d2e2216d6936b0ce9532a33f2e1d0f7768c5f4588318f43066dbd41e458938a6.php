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

/* travailler_personnel/_form.html.twig */
class __TwigTemplate_03f43670e1ca6a07c032b95fe764451b88b50c24c1faec29a5150ee1fb328369 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "travailler_personnel/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "travailler_personnel/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
<div class=\"input-group mb-3\">
\t<div class=\"input-group-prepend\">
\t\t<span class=\"input-group-text\" style=\"width: 160px;\" id=\"basic-addon1\">Equipe</span>
\t</div>
\t";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "equipe", [], "any", false, false, false, 6), 'widget', ["attr" => ["class" => "form-control input-mask", "style" => "margin-right: 16px;"]]);
        echo "
\t";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "equipe", [], "any", false, false, false, 7), 'errors');
        echo "
</div>

<div class=\"input-group mb-3\">
\t<div class=\"input-group-prepend\">
\t\t<span class=\"input-group-text\" style=\"width: 160px;\" id=\"basic-addon1\">Personnel</span>
\t</div>
\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "personnel", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control input-mask", "style" => "margin-right: 16px;"]]);
        echo "
\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "personnel", [], "any", false, false, false, 15), 'errors');
        echo "
</div>

<div class=\"col-md-4 col-xs-4 col-sm-4\">
\t<button type=\"submit\" class=\"btn btn-success\">Enrégistrer</button>
\t<button type=\"reset\" class=\"btn btn-danger\">Annuler</button>
</div>
";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "travailler_personnel/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 22,  69 => 15,  65 => 14,  55 => 7,  51 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
<div class=\"input-group mb-3\">
\t<div class=\"input-group-prepend\">
\t\t<span class=\"input-group-text\" style=\"width: 160px;\" id=\"basic-addon1\">Equipe</span>
\t</div>
\t{{ form_widget(form.equipe,{'attr': {'class':'form-control input-mask','style':'margin-right: 16px;'}}) }}
\t{{ form_errors(form.equipe) }}
</div>

<div class=\"input-group mb-3\">
\t<div class=\"input-group-prepend\">
\t\t<span class=\"input-group-text\" style=\"width: 160px;\" id=\"basic-addon1\">Personnel</span>
\t</div>
\t{{ form_widget(form.personnel,{'attr': {'class':'form-control input-mask','style':'margin-right: 16px;'}}) }}
\t{{ form_errors(form.personnel) }}
</div>

<div class=\"col-md-4 col-xs-4 col-sm-4\">
\t<button type=\"submit\" class=\"btn btn-success\">Enrégistrer</button>
\t<button type=\"reset\" class=\"btn btn-danger\">Annuler</button>
</div>
{{ form_end(form) }}
", "travailler_personnel/_form.html.twig", "C:\\wamp64\\www\\audit\\audit\\templates\\travailler_personnel\\_form.html.twig");
    }
}
