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

/* security/login.admin.html.twig */
class __TwigTemplate_f5269757a4ee0b53d7de40fb4ebcec2a05596f82bb5b6830e670bd4f9ba8a2a7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.admin.html.twig"));

        $this->parent = $this->loadTemplate("frontend/login.layout.html.twig", "security/login.admin.html.twig", 1);
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

    <style>

        .container{
            margin-left: auto;
            margin-right: auto;
            width: 100%;
        }

        .widthC {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width:400px;
        }

        @media only screen and (max-width: 768px) {
            .widthC {
                background: none;
                box-shadow: none;
                border-radius: 0;
            }
        }

        #login_form{
            padding: 20% 10%;
            background: #ffffff;
            box-shadow:0 2px 42px rgba(0,0,100,.15);
            border-radius: 10px;
        }

        .text_alignPL {
            text-align: center;
            font-weight:400 !important;
        }

        .inputPassword {
            text-align: center;
            margin:20px 0;
        }

        .lineHInputP{
            height: 60px;
        }
        input {
            color: #222222;
            font-weight: 400;
            font-size: 16px;
            border-width: 1px;
            border-image: none;
            border-radius: 5px;
        }
        .centerBL{
            text-align: center;
        }
        .bL{
            width: 100%;
            border-radius: 10px;
            background-color: #1cd9ff;
            border:none;
            color: white;
            box-shadow: 0 1px 18px rgba(0,0,100,.1);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            cursor: -webkit-grab; cursor: grab;
        }
        p{
            font-family: 'Montserrat', sans-serif;
        }
        input{
            font-family: 'Montserrat', sans-serif;
        }
        div{
            font-family: 'Montserrat', sans-serif;
        }
        img{
            font-family: 'Montserrat', sans-serif;
        }
        button{
            font-family: 'Montserrat', sans-serif;
        }
        #club, #syres {
            font-weight:800 !important;
            font-size:1.5em !important;
            display: inline-block;
            margin-top:0;
        }
        #logo-club {
            text-align: center !important;
            margin: 0 auto;
            padding-bottom: 30px;
        }
        #club {
            color:#1cd9ff;
        }
        #syres {
            color:#03363d;
        }


        #email{
            border: 1px solid #eeeeee;
            width: 100%;
            line-height: 60px;
            padding-left: 20px;
            background:#f5f7ff;
            margin-bottom: 5px;
        }
        #password{
            border: 1px solid #eeeeee;
            width: 100%;
            line-height: 60px;
            padding-left: 20px;
            background:#f5f7ff;
        }

    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 127
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 128
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    ";
        // line 130
        echo "    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;600;800&display=swap\" rel=\"stylesheet\">
    <div class=\"container\" style=\"align-items: center; \">
        <div class=\"widthC\" style=\"top: 60%\">
            ";
        // line 147
        echo "            <form  class=\"\" id=\"login_form\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_login");
        echo "\" method=\"post\">
                ";
        // line 148
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 148, $this->source); })())) {
            // line 149
            echo "                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 149, $this->source); })()), "messageKey", [0 => twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 149, $this->source); })()), "messageData", [], "any", false, false, false, 149), 1 => "security"], "method", false, false, false, 149), "html", null, true);
            echo "</div>
                ";
        }
        // line 151
        echo "


                ";
        // line 162
        echo "

                <div id=\"logo-club\">
                    <p class=\"text_alignPL\" id=\"club\">CLUB</p>
                    <p class=\"text_alignPL\" id=\"syres\" style=\"margin-bottom: 20px\">SYRES</p>
                </div>

                <div class=\"d_flex margeEntreDiv\" style=\" width: 100%; \">
                    <input id=\"email\" type=\"email\" value=\"";
        // line 170
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 170, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" placeholder=\"Your e-mail\"  class=\"form-control lineHInputP\" required autofocus>
                </div>
                <div class=\"d_flex margeEntreDiv\" style=\" width: 100%; \">

                    <input id=\"password\" type=\"password\" name=\"password\" placeholder=\"Votre mot de passe\"  class=\"form-control lineHInputP\" required autofocus>
                </div>

                <style>
                    label{
                        width: 20%;
                        text-align: left;
                    }
                    .divW{
                        width: 100%;
                    }
                </style>

                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

                <input type=\"hidden\" name=\"_target_path\" value=\"/admin/survey/tests\"/>


                ";
        // line 202
        echo "
                <div class=\"centerBL\">
                    <button class=\" lineHInputP bL\" type=\"submit\" style=\"font-size: medium\">Sign in</button>
                </div>
            </form>
        </div>
    </div>










    <style>

        ::placeholder {
            color: #999999 !important;
            margin:none;
            padding:none;
        }

        #content{

            min-height: 100%;
        }


        .margeEntreDiv{
            margin-bottom: 2px;
        }

        .margeEntreDivB{
            margin-bottom: 30px;
        }

        #inputEmail{
            margin-bottom: 4px;
            border-bottom: 10px solid red;
        }
        #l_fa{
            font-size: 27px;
            margin-right: 4px;
            color: #2980b9;
        }
        .d_flex{
            display: flex;
        }
        .dateDeNaissanceLogin{
            display: flex;
        }

        .dateDeNaissance{
            border: 1px solid #eeeeee;
            text-align: -webkit-center;
            margin: 0 auto;
            display: block;
            width: 90%;
            background: #f5f7ff;
        }
        label{
            margin: 0px;
        }

        .div_login_butn{
            background-color: #2980b9;
            text-align: center;
        }

        .login_butn{
            background-color: #2980b9;
            color: white;
        }

        hr{
            border-bottom: 1px solid #2980b9;
            width: 43%;
        }

        #mail{
            width: 100%;
            border-bottom: 1px solid #2980b9;
            margin-bottom: 8px;
        }
        #h5Login{
            color: grey; display: flex;
            margin-bottom: 40px;
        }
    </style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 296
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 297
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 297,  401 => 296,  298 => 202,  290 => 187,  270 => 170,  260 => 162,  255 => 151,  249 => 149,  247 => 148,  242 => 147,  237 => 130,  232 => 128,  222 => 127,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'frontend/login.layout.html.twig' %}

{% block title %}Log in!{% endblock %}
{% block stylesheets %}
    {{ parent() }}

    <style>

        .container{
            margin-left: auto;
            margin-right: auto;
            width: 100%;
        }

        .widthC {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width:400px;
        }

        @media only screen and (max-width: 768px) {
            .widthC {
                background: none;
                box-shadow: none;
                border-radius: 0;
            }
        }

        #login_form{
            padding: 20% 10%;
            background: #ffffff;
            box-shadow:0 2px 42px rgba(0,0,100,.15);
            border-radius: 10px;
        }

        .text_alignPL {
            text-align: center;
            font-weight:400 !important;
        }

        .inputPassword {
            text-align: center;
            margin:20px 0;
        }

        .lineHInputP{
            height: 60px;
        }
        input {
            color: #222222;
            font-weight: 400;
            font-size: 16px;
            border-width: 1px;
            border-image: none;
            border-radius: 5px;
        }
        .centerBL{
            text-align: center;
        }
        .bL{
            width: 100%;
            border-radius: 10px;
            background-color: #1cd9ff;
            border:none;
            color: white;
            box-shadow: 0 1px 18px rgba(0,0,100,.1);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            cursor: -webkit-grab; cursor: grab;
        }
        p{
            font-family: 'Montserrat', sans-serif;
        }
        input{
            font-family: 'Montserrat', sans-serif;
        }
        div{
            font-family: 'Montserrat', sans-serif;
        }
        img{
            font-family: 'Montserrat', sans-serif;
        }
        button{
            font-family: 'Montserrat', sans-serif;
        }
        #club, #syres {
            font-weight:800 !important;
            font-size:1.5em !important;
            display: inline-block;
            margin-top:0;
        }
        #logo-club {
            text-align: center !important;
            margin: 0 auto;
            padding-bottom: 30px;
        }
        #club {
            color:#1cd9ff;
        }
        #syres {
            color:#03363d;
        }


        #email{
            border: 1px solid #eeeeee;
            width: 100%;
            line-height: 60px;
            padding-left: 20px;
            background:#f5f7ff;
            margin-bottom: 5px;
        }
        #password{
            border: 1px solid #eeeeee;
            width: 100%;
            line-height: 60px;
            padding-left: 20px;
            background:#f5f7ff;
        }

    </style>
{% endblock %}

{% block content%}
    {{ parent() }}
    {#{ dump(app) }#}
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;600;800&display=swap\" rel=\"stylesheet\">
    <div class=\"container\" style=\"align-items: center; \">
        <div class=\"widthC\" style=\"top: 60%\">
            {#
            {% if app.user %}
                <a class=\"div_login_butn\" href=\"{{ path('admin_survey_tests') }}\" style=\"display: flex\">
                    <div style=\"width: 40%\">
                        <button class=\"login_butn\" style=\" line-height: 3\">Retouner sur les tests</button>
                    </div>
                    <div style=\"width: 40%\">
                        <button class=\"login_butn\" type=\"submit\">
                            >
                        </button>
                    </div>
                </a>
            {% endif %}
            #}
            <form  class=\"\" id=\"login_form\" action=\"{{ path(\"app_admin_login\") }}\" method=\"post\">
                {% if error %}
                    <div class=\"alert alert-danger\">{{ error.messageKey(error.messageData, 'security') }}</div>
                {% endif %}



                {#

                 {% if app.user %}
                     <div class=\"mb-3\">
                         You are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                     </div>
                 {% endif %}
                 #}


                <div id=\"logo-club\">
                    <p class=\"text_alignPL\" id=\"club\">CLUB</p>
                    <p class=\"text_alignPL\" id=\"syres\" style=\"margin-bottom: 20px\">SYRES</p>
                </div>

                <div class=\"d_flex margeEntreDiv\" style=\" width: 100%; \">
                    <input id=\"email\" type=\"email\" value=\"{{ last_username }}\" name=\"email\" placeholder=\"Your e-mail\"  class=\"form-control lineHInputP\" required autofocus>
                </div>
                <div class=\"d_flex margeEntreDiv\" style=\" width: 100%; \">

                    <input id=\"password\" type=\"password\" name=\"password\" placeholder=\"Votre mot de passe\"  class=\"form-control lineHInputP\" required autofocus>
                </div>

                <style>
                    label{
                        width: 20%;
                        text-align: left;
                    }
                    .divW{
                        width: 100%;
                    }
                </style>

                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                <input type=\"hidden\" name=\"_target_path\" value=\"/admin/survey/tests\"/>


                {# je laisse continuer mais je pense que c'est l'enverse l'inverse de quoi sinon je rien dis chrome
                    Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
                    See https://symfony.com/doc/current/security/remember_me.html

                    <div class=\"checkbox mb-3\">
                        <label>
                            <input type=\"checkbox\" name=\"_remember_me\"> Remember me
                        </label>
                    </div>
                #}

                <div class=\"centerBL\">
                    <button class=\" lineHInputP bL\" type=\"submit\" style=\"font-size: medium\">Sign in</button>
                </div>
            </form>
        </div>
    </div>










    <style>

        ::placeholder {
            color: #999999 !important;
            margin:none;
            padding:none;
        }

        #content{

            min-height: 100%;
        }


        .margeEntreDiv{
            margin-bottom: 2px;
        }

        .margeEntreDivB{
            margin-bottom: 30px;
        }

        #inputEmail{
            margin-bottom: 4px;
            border-bottom: 10px solid red;
        }
        #l_fa{
            font-size: 27px;
            margin-right: 4px;
            color: #2980b9;
        }
        .d_flex{
            display: flex;
        }
        .dateDeNaissanceLogin{
            display: flex;
        }

        .dateDeNaissance{
            border: 1px solid #eeeeee;
            text-align: -webkit-center;
            margin: 0 auto;
            display: block;
            width: 90%;
            background: #f5f7ff;
        }
        label{
            margin: 0px;
        }

        .div_login_butn{
            background-color: #2980b9;
            text-align: center;
        }

        .login_butn{
            background-color: #2980b9;
            color: white;
        }

        hr{
            border-bottom: 1px solid #2980b9;
            width: 43%;
        }

        #mail{
            width: 100%;
            border-bottom: 1px solid #2980b9;
            margin-bottom: 8px;
        }
        #h5Login{
            color: grey; display: flex;
            margin-bottom: 40px;
        }
    </style>

{% endblock %}
{% block footer %}

{% endblock %}
", "security/login.admin.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/security/login.admin.html.twig");
    }
}
