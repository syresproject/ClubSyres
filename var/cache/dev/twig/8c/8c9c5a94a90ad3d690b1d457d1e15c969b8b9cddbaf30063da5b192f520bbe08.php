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

/* security/login.html.twig */
class __TwigTemplate_8e1d19a7356125b0bd205b464f1d08b723a17c89b7b46d99198a6a1d422814ad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "frontend/login.layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("frontend/login.layout.html.twig", "security/login.html.twig", 1);
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

        echo "Log in!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dateVJ/css/datepicker-bs4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dateVJ/css/datepicker-bulma.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dateVJ/css/datepicker-foundation.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <style>
        .container {
            margin-left: auto;
            margin-right: auto;
            width: 350px;
            padding-top: 20px;
        }

        #div-form {
            width: 60%;
            margin: auto;
            margin-top: 148px;
            text-align: center;
        }


        .inputLoginD{
            width: 100%;
            padding-left: 20px;
            background: #f5f7ff;
            margin-bottom: 4px;
            border: 1px solid #eeeeee;
            line-height: 40px;

        }

        #content {
            background-image: url(\"../frontend/images/Holly_FRK__B.jpg\");
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 850px;
        }

        .margeEntreDiv {
            margin-bottom: 30px;
        }

        #inputEmail {
            margin-bottom: 4px;
            border-bottom: 1px solid #2980b9;
            width: 239px;
        }

        #l_fa {
            font-size: 27px;
            margin-right: 4px;
            color: #2980b9;
        }

        .d_flex {
            display: flex;
        }

        .dateDeNaissanceLogin {
            display: flex;
        }

        .dateDeNaissance {
            border-bottom: 1px solid #2980b9;
            margin: 5px;
            text-align: -webkit-center;
            width: 80px;


        }

        label {
            margin: 0px;
        }

        input {
        }

        .div_login_butn {
            background-color: #2980b9;
            text-align: center;

        }

        .login_butn {
            background-color: #2980b9;
            color: white;
        }
    </style>
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 96
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 97
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "

    <div id=\"div-form\" class=\"text-center\" style=\"\">
        ";
        // line 100
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "user", [], "any", false, false, false, 100) && (0 === twig_compare((isset($context["enabledM"]) || array_key_exists("enabledM", $context) ? $context["enabledM"] : (function () { throw new RuntimeError('Variable "enabledM" does not exist.', 100, $this->source); })()), 0)))) {
            // line 101
            echo "            <a class=\"div_login_butn\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_accueil_index");
            echo "\" style=\"display: flex\">
                <div style=\"width: 40%\">
                    <button class=\"login_butn\" style=\" line-height: 3\">Bonjour ";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103), "title", [], "any", false, false, false, 103), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103), "firstname", [], "any", false, false, false, 103), "html", null, true);
            echo ", voulez-vous retouner à la page d'accueil ?</button>
                </div>
                <div style=\"width: 40%\">
                    <button class=\"login_butn\" type=\"submit\">
                        <i class=\"large material-icons\" style=\"padding-top: 9px\">arrow_forward</i>
                    </button>
                </div>
            </a>
        ";
        }
        // line 112
        echo "    </div>
    <div class=\"container\">
            <form class=\"styleCard\" id=\"login_form\" method=\"post\">
            ";
        // line 115
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 115, $this->source); })())) {
            // line 116
            echo "                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 116, $this->source); })()), "messageKey", [], "any", false, false, false, 116), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 116, $this->source); })()), "messageData", [], "any", false, false, false, 116), "security"), "html", null, true);
            echo "</div>
            ";
        }
        // line 118
        echo "
            ";
        // line 119
        if ((isset($context["enabledM"]) || array_key_exists("enabledM", $context) ? $context["enabledM"] : (function () { throw new RuntimeError('Variable "enabledM" does not exist.', 119, $this->source); })())) {
            // line 120
            echo "                <div class=\"mb-3\">
                    <p>
                        ";
            // line 122
            echo twig_escape_filter($this->env, (isset($context["enabledM"]) || array_key_exists("enabledM", $context) ? $context["enabledM"] : (function () { throw new RuntimeError('Variable "enabledM" does not exist.', 122, $this->source); })()), "html", null, true);
            echo "
                    </p>
                </div>
            ";
        }
        // line 126
        echo "
            <h5 class=\"h3 mb-3 font-weight-normal\" style=\"color: grey; text-align: center\">Merci d’indiquer vos informations !</h5>
            <div class=\"d_flex margeEntreDiv\">
                <input value=\"";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 129, $this->source); })()), "html", null, true);
        echo "\" name=\"idPaneliste\" placeholder=\"Id Paneliste\" id=\"idPaneliste\" class=\"form-control inputLoginD\" required autofocus>
            </div>
            <label for=\"inputPassword\" style=\"\">Merci d’indiquer votre date de naissance</label>
            <div class=\"dateDeNaissanceLogin margeEntreDiv\" style=\"justify-content: space-around\">
               <div>
                    <input name=\"jour\" id=\"jour\" placeholder=\"JJ\" class=\"form-control dateDeNaissance inputLoginD\"
                           required>
                </div>
                <div>
                    <input name=\"mois\" id=\"mois\" placeholder=\"MM\" class=\"form-control dateDeNaissance inputLoginD\"
                           required>
                </div>
                <div>
                    <input name=\"annee\" id=\"annee\" placeholder=\"AAAA\"
                           class=\"form-control dateDeNaissance inputLoginD\" required>
                </div>
            </div>

                ";
        // line 151
        echo "            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">


            ";
        // line 164
        echo "
            <div class=\"div_login_butn\">
                <button class=\"login_butn inputLoginD\" type=\"submit\">Se connecter</button>
            </div>
        </form>
    </div>






";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 177
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 178
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 181
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 182
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"http://code.jquery.com/jquery-1.9.1.js\"></script>
    <script src=\"http://code.jquery.com/ui/1.11.0/jquery-ui.js\"></script>
    <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dateVJ/js/datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dateVJ/js/datepicker-full.js"), "html", null, true);
        echo "\"></script>

    <script>
        const elem = document.querySelector('input[name=\"dateL\"]');
        const datepicker = new Datepicker(elem, {
            // options here
            //maxDate: null,
            //console.log(maxDate)
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 186,  365 => 185,  358 => 182,  348 => 181,  334 => 178,  324 => 177,  302 => 164,  295 => 151,  274 => 129,  269 => 126,  262 => 122,  258 => 120,  256 => 119,  253 => 118,  247 => 116,  245 => 115,  240 => 112,  226 => 103,  220 => 101,  218 => 100,  211 => 97,  201 => 96,  104 => 8,  100 => 7,  96 => 6,  91 => 5,  81 => 4,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'frontend/login.layout.html.twig' %}

{% block title %}Log in!{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('dateVJ/css/datepicker-bs4.min.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('dateVJ/css/datepicker-bulma.min.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('dateVJ/css/datepicker-foundation.min.css') }}\" rel=\"stylesheet\" />
    <style>
        .container {
            margin-left: auto;
            margin-right: auto;
            width: 350px;
            padding-top: 20px;
        }

        #div-form {
            width: 60%;
            margin: auto;
            margin-top: 148px;
            text-align: center;
        }


        .inputLoginD{
            width: 100%;
            padding-left: 20px;
            background: #f5f7ff;
            margin-bottom: 4px;
            border: 1px solid #eeeeee;
            line-height: 40px;

        }

        #content {
            background-image: url(\"../frontend/images/Holly_FRK__B.jpg\");
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 850px;
        }

        .margeEntreDiv {
            margin-bottom: 30px;
        }

        #inputEmail {
            margin-bottom: 4px;
            border-bottom: 1px solid #2980b9;
            width: 239px;
        }

        #l_fa {
            font-size: 27px;
            margin-right: 4px;
            color: #2980b9;
        }

        .d_flex {
            display: flex;
        }

        .dateDeNaissanceLogin {
            display: flex;
        }

        .dateDeNaissance {
            border-bottom: 1px solid #2980b9;
            margin: 5px;
            text-align: -webkit-center;
            width: 80px;


        }

        label {
            margin: 0px;
        }

        input {
        }

        .div_login_butn {
            background-color: #2980b9;
            text-align: center;

        }

        .login_butn {
            background-color: #2980b9;
            color: white;
        }
    </style>
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
{% endblock %}

{% block content %}
    {{ parent() }}

    <div id=\"div-form\" class=\"text-center\" style=\"\">
        {% if app.user and enabledM == 0 %}
            <a class=\"div_login_butn\" href=\"{{ path('user_accueil_index') }}\" style=\"display: flex\">
                <div style=\"width: 40%\">
                    <button class=\"login_butn\" style=\" line-height: 3\">Bonjour {{ app.user.title }} {{ app.user.firstname }}, voulez-vous retouner à la page d'accueil ?</button>
                </div>
                <div style=\"width: 40%\">
                    <button class=\"login_butn\" type=\"submit\">
                        <i class=\"large material-icons\" style=\"padding-top: 9px\">arrow_forward</i>
                    </button>
                </div>
            </a>
        {% endif %}
    </div>
    <div class=\"container\">
            <form class=\"styleCard\" id=\"login_form\" method=\"post\">
            {% if error %}
                <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
            {% endif %}

            {% if enabledM %}
                <div class=\"mb-3\">
                    <p>
                        {{ enabledM }}
                    </p>
                </div>
            {% endif %}

            <h5 class=\"h3 mb-3 font-weight-normal\" style=\"color: grey; text-align: center\">Merci d’indiquer vos informations !</h5>
            <div class=\"d_flex margeEntreDiv\">
                <input value=\"{{ last_username }}\" name=\"idPaneliste\" placeholder=\"Id Paneliste\" id=\"idPaneliste\" class=\"form-control inputLoginD\" required autofocus>
            </div>
            <label for=\"inputPassword\" style=\"\">Merci d’indiquer votre date de naissance</label>
            <div class=\"dateDeNaissanceLogin margeEntreDiv\" style=\"justify-content: space-around\">
               <div>
                    <input name=\"jour\" id=\"jour\" placeholder=\"JJ\" class=\"form-control dateDeNaissance inputLoginD\"
                           required>
                </div>
                <div>
                    <input name=\"mois\" id=\"mois\" placeholder=\"MM\" class=\"form-control dateDeNaissance inputLoginD\"
                           required>
                </div>
                <div>
                    <input name=\"annee\" id=\"annee\" placeholder=\"AAAA\"
                           class=\"form-control dateDeNaissance inputLoginD\" required>
                </div>
            </div>

                {#
                <div id=\"inline\" data-date=\"01/01/2007\"></div>
                <input type=\"text\" placeholder=\"Format : mm/dd/yyy\" name=\"dateL\" class=\"inputLoginD\">
                #}
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">


            {# je laisse continuer mais je pense que c'est l'enverse l'inverse de quoi sinon je rien dis chrome
                Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
                See https://symfony.com/doc/current/security/remember_me.html

                <div class=\"checkbox mb-3\">
                    <label>
                        <input type=\"checkbox\" name=\"_remember_me\"> Remember me
                    </label>
                </div>
            #}

            <div class=\"div_login_butn\">
                <button class=\"login_butn inputLoginD\" type=\"submit\">Se connecter</button>
            </div>
        </form>
    </div>






{% endblock %}
{% block footer %}
    {{ parent() }}

{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"http://code.jquery.com/jquery-1.9.1.js\"></script>
    <script src=\"http://code.jquery.com/ui/1.11.0/jquery-ui.js\"></script>
    <script src=\"{{ asset('dateVJ/js/datepicker.min.js') }}\"></script>
    <script src=\"{{ asset('dateVJ/js/datepicker-full.js') }}\"></script>

    <script>
        const elem = document.querySelector('input[name=\"dateL\"]');
        const datepicker = new Datepicker(elem, {
            // options here
            //maxDate: null,
            //console.log(maxDate)
        });
    </script>
{% endblock %}
", "security/login.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/security/login.html.twig");
    }
}
