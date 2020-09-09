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

/* Backend/Security/login.html.twig */
class __TwigTemplate_deab98387602154fa56f2aeb754455d9db0ea3adc3978ef41ab7e48684cb774b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/Security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/Security/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]> <html lang=\"fr\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]> <html lang=\"fr\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"fr\">
<!--<![endif]-->
<!-- BEGIN de phpstorm  on est dans phphStorm oui ms ou le bar de phpstorm, j'ai ne comprends pas
si tu veux ouvrir le settings de phpstorm
HEAD -->

<head>
    <meta charset=\"utf-8\" />
    <title>T.Douze CMS - Backoffice</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
    <meta content=\"\" name=\"description\" />
    <meta content=\"\" name=\"author\" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/uniform/css/uniform.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/select2/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/select2/css/select2-bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/css/components.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/css/plugins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/pages/css/login-4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- END THEME LAYOUT STYLES -->
    <link rel=\"shortcut icon\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" /> </head>
<!-- END HEAD -->
";
        // line 48
        echo "<body class=\" login\">
<!-- BEGIN LOGO -->
<div class=\"logo\">
    <a href=\"#\">
        <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/pages/img/logo-big.png"), "html", null, true);
        echo "\" alt=\"\" /> </a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class=\"content\">
    <!-- BEGIN LOGIN FORM  en gros tu a plus qu'un seul truc de login ou alors faut faire deux auth la non ça un c'est plus semple-->
    <form action=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login_admin");
        echo "\" method=\"post\" class=\"login-form\">
        <input type=\"hidden\" name=\"_csrf_token\"
               value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
        >


        <h3 class=\"form-title\">Connexion</h3>

        ";
        // line 66
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 66, $this->source); })())) {
            // line 67
            echo "            <div class=\"alert alert-danger\">
                <button class=\"close\" data-close=\"alert\"></button>
                <span>";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 69, $this->source); })()), "message", [], "any", false, false, false, 69), [], "FOSUserBundle"), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 72
        echo "
        <div class=\"alert alert-danger display-hide\">
            <button class=\"close\" data-close=\"alert\"></button>
            <span>Identifiants requis.</span>
        </div>

        <div class=\"form-group\">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for chromez that-->
            <label class=\"control-label visible-ie8 visible-ie9\">";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.username", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
            <div class=\"input-icon\">
                <i class=\"fa fa-user\"></i>
                <input class=\"form-control placeholder-no-fix\" type=\"text\" id=\"email\" name=\"email\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 83, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Utilisateur\" required=\"required\" />
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"control-label visible-ie8 visible-ie9\">";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.password", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
            <div class=\"input-icon\">
                <i class=\"fa fa-lock\"></i>
                <input class=\"form-control placeholder-no-fix\" type=\"password\" id=\"password\" name=\"password\" placeholder=\"Mot de passe\" required=\"required\" />
            </div>

        </div> ";
        // line 94
        echo "        <div class=\"form-actions\">
            <label class=\"checkbox\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /> ";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.remember_me", [], "FOSUserBundle"), "html", null, true);
        echo " </label>

            <input class=\"btn green pull-right\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\" />
        </div>
    </form>
    <!-- END LOGIN FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class=\"copyright\">
    &copy; Tous droits réservés, Trente-Douze.
</div>
<!-- END COPYRIGHT -->
<!--[if lt IE 9]>
<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/respond.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/excanvas.min.js"), "html", null, true);
        echo "\"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/jquery-validation/js/localization/messages_fr.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/jquery-validation/js/additional-methods.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/select2/js/select2.full.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/backstretch/jquery.backstretch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/scripts/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/pages/scripts/login-4.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Backend/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 133,  277 => 130,  271 => 127,  267 => 126,  263 => 125,  259 => 124,  255 => 123,  249 => 120,  245 => 119,  241 => 118,  237 => 117,  233 => 116,  229 => 115,  225 => 114,  219 => 111,  215 => 110,  200 => 98,  195 => 96,  191 => 94,  182 => 87,  175 => 83,  169 => 80,  159 => 72,  153 => 69,  149 => 67,  147 => 66,  138 => 60,  133 => 58,  124 => 52,  118 => 48,  113 => 39,  106 => 35,  100 => 32,  96 => 31,  90 => 28,  86 => 27,  80 => 24,  76 => 23,  72 => 22,  68 => 21,  64 => 20,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<!--[if IE 8]> <html lang=\"fr\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]> <html lang=\"fr\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"fr\">
<!--<![endif]-->
<!-- BEGIN de phpstorm  on est dans phphStorm oui ms ou le bar de phpstorm, j'ai ne comprends pas
si tu veux ouvrir le settings de phpstorm
HEAD -->

<head>
    <meta charset=\"utf-8\" />
    <title>T.Douze CMS - Backoffice</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
    <meta content=\"\" name=\"description\" />
    <meta content=\"\" name=\"author\" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('backend/assets/global/plugins/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('backend/assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('backend/assets/global/plugins/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('backend/assets/global/plugins/uniform/css/uniform.default.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('backend/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href=\"{{ asset('backend/assets/global/plugins/select2/css/select2.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('backend/assets/global/plugins/select2/css/select2-bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href=\"{{ asset('backend/assets/global/css/components.min.css') }}\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
    <link href=\"{{ asset('backend/assets/global/css/plugins.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href=\"{{ asset('backend/assets/pages/css/login-4.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- END THEME LAYOUT STYLES -->
    <link rel=\"shortcut icon\" href=\"{{ asset('favicon.ico') }}\" /> </head>
<!-- END HEAD -->
{#
tu peux m'expliqué s'il te plait ? expliquer quoi, au lieu de faire composer install tu fais  .phar
alors le fichier par defaut de composer et ,phar si tu veux juste composer il faut executer 'mv composer.phar /usr/local/bin/composer' mv il va de deplacer ? ou ? deplacer globalement et le renommer a compsoer ok . on a
toujours besoin que du composer ? ou  oui ilp oure xifaire le mise a jour de dependencies


#}
<body class=\" login\">
<!-- BEGIN LOGO -->
<div class=\"logo\">
    <a href=\"#\">
        <img src=\"{{ asset('backend/assets/pages/img/logo-big.png') }}\" alt=\"\" /> </a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class=\"content\">
    <!-- BEGIN LOGIN FORM  en gros tu a plus qu'un seul truc de login ou alors faut faire deux auth la non ça un c'est plus semple-->
    <form action=\"{{ path(\"app_login_admin\") }}\" method=\"post\" class=\"login-form\">
        <input type=\"hidden\" name=\"_csrf_token\"
               value=\"{{ csrf_token('authenticate') }}\"
        >


        <h3 class=\"form-title\">Connexion</h3>

        {% if error %}
            <div class=\"alert alert-danger\">
                <button class=\"close\" data-close=\"alert\"></button>
                <span>{{ error.message|trans({}, 'FOSUserBundle') }}</span>
            </div>
        {% endif %}

        <div class=\"alert alert-danger display-hide\">
            <button class=\"close\" data-close=\"alert\"></button>
            <span>Identifiants requis.</span>
        </div>

        <div class=\"form-group\">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for chromez that-->
            <label class=\"control-label visible-ie8 visible-ie9\">{{ 'security.login.username'|trans({}, 'FOSUserBundle') }}</label>
            <div class=\"input-icon\">
                <i class=\"fa fa-user\"></i>
                <input class=\"form-control placeholder-no-fix\" type=\"text\" id=\"email\" name=\"email\" value=\"{{ last_username }}\" placeholder=\"Utilisateur\" required=\"required\" />
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"control-label visible-ie8 visible-ie9\">{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}</label>
            <div class=\"input-icon\">
                <i class=\"fa fa-lock\"></i>
                <input class=\"form-control placeholder-no-fix\" type=\"password\" id=\"password\" name=\"password\" placeholder=\"Mot de passe\" required=\"required\" />
            </div>

        </div> {# Une seconde s'il te plait  ok ou sinon je suis là ok test une seconde s'il te plait #}
        <div class=\"form-actions\">
            <label class=\"checkbox\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /> {{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }} </label>

            <input class=\"btn green pull-right\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}\" />
        </div>
    </form>
    <!-- END LOGIN FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class=\"copyright\">
    &copy; Tous droits réservés, Trente-Douze.
</div>
<!-- END COPYRIGHT -->
<!--[if lt IE 9]>
<script src=\"{{ asset('backend/assets/global/plugins/respond.min.js') }}\"></script>
<script src=\"{{ asset('backend/assets/global/plugins/excanvas.min.js') }}\"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src=\"{{ asset('backend/assets/global/plugins/jquery.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('backend/assets/global/plugins/bootstrap/js/bootstrap.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('backend/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('backend/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('backend/assets/global/plugins/jquery.blockui.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('backend/assets/global/plugins/uniform/jquery.uniform.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('backend/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}\" type=\"text/javascript\"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src=\"{{ asset('backend/assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('backend/assets/global/plugins/jquery-validation/js/localization/messages_fr.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('backend/assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('backend/assets/global/plugins/select2/js/select2.full.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('backend/assets/global/plugins/backstretch/jquery.backstretch.min.js') }}\" type=\"text/javascript\"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src=\"{{ asset('backend/assets/global/scripts/app.min.js') }}\" type=\"text/javascript\"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src=\"{{ asset('backend/assets/pages/scripts/login-4.min.js') }}\" type=\"text/javascript\"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>", "Backend/Security/login.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/Security/login.html.twig");
    }
}
