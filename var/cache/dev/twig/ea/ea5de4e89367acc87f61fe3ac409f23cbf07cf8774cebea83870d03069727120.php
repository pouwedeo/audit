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

/* connexion.html.twig */
class __TwigTemplate_3d17b50ec412c97ae45fdf9f54474f5b46c1a366e30b83c64542d6a4a6ddcaee extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "connexion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "connexion.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

\t<head>

\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"author\" content=\"\">

\t\t<title>Connexion</title>

\t\t<!-- Custom fonts for this template-->
\t\t<link href=\"vendor/fontawesome-free/css/all.min.css\" rel=\"stylesheet\" type=\"text/css\">
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">

\t\t<!-- Custom styles for this template-->
\t\t<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/css/sb-admin-2.min.css\" rel=\"stylesheet"), "html", null, true);
        echo "\">

\t</head>

\t<body class=\"bg-gradient-primary\">

\t\t<div
\t\t\tclass=\"container\">

\t\t\t<!-- Outer Row -->
\t\t\t<div class=\"row justify-content-center\">

\t\t\t\t<div class=\"col-xl-10 col-lg-12 col-md-9\">

\t\t\t\t\t<div class=\"card o-hidden border-0 shadow-lg my-5\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"card-body p-0\">
\t\t\t\t\t\t\t<!-- Nested Row within Card Body -->
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 d-none d-lg-block bg-login-image\"> <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/img/logo.jpg"), "html", null, true);
        echo "\"></div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t<div class=\"p-5\">
\t\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"h4 text-gray-900 mb-4\">Bienvenue!</h1>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<form method=\"post\" class=\"user\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 47
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 47, $this->source); })())) {
            // line 48
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 48, $this->source); })()), "messageKey", [], "any", false, false, false, 48), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 48, $this->source); })()), "messageData", [], "any", false, false, false, 48), "security"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 50
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50)) {
            // line 51
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
                                             Vous êtes connecté en tant que\t";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "username", [], "any", false, false, false, 52), "html", null, true);
            echo ",
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 56
        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control form-control-user\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "\" name=\"username\" id=\"inputUsername\" required autofocus aria-describedby=\"emailHelp\" placeholder=\"Entrez votre login...\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control form-control-user\" required placeholder=\"Mot de passe\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\t\ttype=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

\t\t\t\t\t\t\t\t\t\t\t";
        // line 75
        echo "
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success  btn-user btn-block\" type=\"submit\">Sign in</button>
\t\t\t\t\t\t\t\t\t\t</form>
                                        <hr>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
";
        // line 81
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
";
        // line 84
        echo "\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>

\t\t</div>
\t\t<!-- Bootstrap core JavaScript-->
\t\t<script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- Core plugin JavaScript-->
\t\t<script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- Custom scripts for all pages-->
\t\t<script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/js/sb-admin-2.min.js"), "html", null, true);
        echo "\"></script>

\t</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 104,  174 => 101,  168 => 98,  164 => 97,  149 => 84,  145 => 81,  138 => 75,  133 => 63,  124 => 57,  121 => 56,  115 => 53,  111 => 52,  108 => 51,  105 => 50,  99 => 48,  97 => 47,  86 => 39,  64 => 20,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

\t<head>

\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"author\" content=\"\">

\t\t<title>Connexion</title>

\t\t<!-- Custom fonts for this template-->
\t\t<link href=\"vendor/fontawesome-free/css/all.min.css\" rel=\"stylesheet\" type=\"text/css\">
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">

\t\t<!-- Custom styles for this template-->
\t\t<link href=\"{{asset('style/css/sb-admin-2.min.css\" rel=\"stylesheet')}}\">

\t</head>

\t<body class=\"bg-gradient-primary\">

\t\t<div
\t\t\tclass=\"container\">

\t\t\t<!-- Outer Row -->
\t\t\t<div class=\"row justify-content-center\">

\t\t\t\t<div class=\"col-xl-10 col-lg-12 col-md-9\">

\t\t\t\t\t<div class=\"card o-hidden border-0 shadow-lg my-5\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"card-body p-0\">
\t\t\t\t\t\t\t<!-- Nested Row within Card Body -->
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 d-none d-lg-block bg-login-image\"> <img src=\"{{asset('style/img/logo.jpg')}}\"></div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t<div class=\"p-5\">
\t\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"h4 text-gray-900 mb-4\">Bienvenue!</h1>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<form method=\"post\" class=\"user\">
\t\t\t\t\t\t\t\t\t\t\t{% if error %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
                                             Vous êtes connecté en tant que\t{{ app.user.username }},
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_logout') }}\">Logout</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control form-control-user\" value=\"{{ last_username }}\" name=\"username\" id=\"inputUsername\" required autofocus aria-describedby=\"emailHelp\" placeholder=\"Entrez votre login...\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control form-control-user\" required placeholder=\"Mot de passe\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\t\ttype=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

\t\t\t\t\t\t\t\t\t\t\t{#
\t\t\t\t\t\t\t\t\t\t\t        Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
\t\t\t\t\t\t\t\t\t\t\t        See https://symfony.com/doc/current/security/remember_me.html
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t        <div class=\"checkbox mb-3\">
\t\t\t\t\t\t\t\t\t\t\t            <label>
\t\t\t\t\t\t\t\t\t\t\t                <input type=\"checkbox\" name=\"_remember_me\"> Remember me
\t\t\t\t\t\t\t\t\t\t\t            </label>
\t\t\t\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t\t\t\t    #}

\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success  btn-user btn-block\" type=\"submit\">Sign in</button>
\t\t\t\t\t\t\t\t\t\t</form>
                                        <hr>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
{# \t\t\t\t\t\t\t\t\t\t\t<a class=\"small\" href=\"forgot-password.html\">Mot de passe oublié ?</a>
 #}\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
{# \t\t\t\t\t\t\t\t\t\t\t<a class=\"small\" href=\"register.html\">Créer un compte</a>
 #}\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>

\t\t</div>
\t\t<!-- Bootstrap core JavaScript-->
\t\t<script src=\"{{asset('style/vendor/jquery/jquery.min.js')}}\"></script>
\t\t<script src=\"{{asset('style/vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>

\t\t<!-- Core plugin JavaScript-->
\t\t<script src=\"{{asset('style/vendor/jquery-easing/jquery.easing.min.js')}}\"></script>

\t\t<!-- Custom scripts for all pages-->
\t\t<script src=\"{{asset('style/js/sb-admin-2.min.js')}}\"></script>

\t</body>

</html>
", "connexion.html.twig", "C:\\wamp64\\www\\audit\\audit\\templates\\connexion.html.twig");
    }
}
