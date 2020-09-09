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

/* frontend/_layout.html.twig */
class __TwigTemplate_bf859474024ea521aa9ab3fd7bebc856f5fd28016c44c03a4e3a0d845c1fb075 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'metas' => [$this, 'block_metas'],
            'icons' => [$this, 'block_icons'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/_layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/_layout.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "frontend/_layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_metas($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metas"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metas"));

        // line 8
        echo "    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\" content=\"user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui\"/>
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\"/>
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "icons"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "icons"));

        // line 16
        echo "    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 22
        echo "
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/styles/style.css"), "html", null, true);
        echo "\"           rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/styles/menu_layout.css"), "html", null, true);
        echo "\"           rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/styles/menus.css"), "html", null, true);
        echo "\"           rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/styles/framework.css"), "html", null, true);
        echo "\"       rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/styles/font-awesome.css"), "html", null, true);
        echo "\"    rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/styles/animate.css"), "html", null, true);
        echo "\"         rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/styles/override.css"), "html", null, true);
        echo "\"        rel=\"stylesheet\" type=\"text/css\">


    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\" integrity=\"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk\" crossorigin=\"anonymous\">

    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/styles/font-awesome.css"), "html", null, true);
        echo "\"    rel=\"stylesheet\" type=\"text/css\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 40
        echo "    ";
        $this->loadTemplate("frontend/home/styles.home.html.twig", "frontend/_layout.html.twig", 40)->display($context);
        // line 41
        echo "
    <style>


        .content{
            min-height: 800px !important;
        }


        .content{
            padding-top: 80px;
        }


        .navSize{
            font-size: 20px;
        }

        .nav-item:hover{
            background-color: #f8f9fa!important;
        }
        .container{
            width: 90% !important;
        }
        @media screen and (max-width: 768px) {
            .nav-item {
                margin: auto;
            }
        }
    </style>

    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\" style=\"position: fixed; width: 100%; z-index: 1; background-color: white\">
        <a class=\"navbar-brand\" href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_accueil_index");
        echo "\"><img  height=\"60px\" src=\"../../frontend/images/logo-syres.png\" alt=\"Syres\"></a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
            <div class=\"container\" style=\"width: 90%;\">
                <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                    <ul class=\"navbar-nav\" style=\"margin-left: auto; width: 100%\">
                        <li class=\"nav-item\" style=\"margin-left: auto\">
                            <a class=\"nav-link\" id=\"navCSurv\" href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_test_a_venirs_index");
        echo "\">";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Test a venir"), "html", null, true);
        echo "</a>
                        </li>
                        <li class=\"nav-item \">
                            <a class=\"nav-link navC\" id=\"navCIns\" href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_survey_tests");
        echo "\">";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Mon test"), "html", null, true);
        echo " <span class=\"sr-only\">(current)</span></a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link navC\" id=\"navCC\" href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_survey_enquete");
        echo "\">";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Enquete"), "html", null, true);
        echo "</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link navC\" id=\"navCL\" href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "se déconnecter"), "html", null, true);
        echo "</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

<div style=\" z-index: -1; display: none\">
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\" style=\"height: 83px; box-shadow: 0 0 20px rgba(0,0,0,.1); background-color: white; padding-bottom: 6px !important; \">
    </nav>
</div>
</div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 130
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 131
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>

    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\" integrity=\"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI\" crossorigin=\"anonymous\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontend/_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 131,  294 => 130,  268 => 91,  260 => 88,  252 => 85,  244 => 82,  232 => 73,  198 => 41,  195 => 40,  185 => 39,  172 => 34,  164 => 29,  160 => 28,  156 => 27,  152 => 26,  148 => 25,  144 => 24,  140 => 23,  137 => 22,  127 => 21,  115 => 16,  105 => 15,  91 => 8,  81 => 7,  63 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{# TITLE #}
{% block title %}{% endblock %}

{# METADATA #}
{% block metas %}
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\" content=\"user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui\"/>
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\"/>
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
{% endblock %}

{# ICONS #}
{% block icons %}
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

{% endblock %}

{# CSS #}
{% block stylesheets %}

    <link href=\"{{ asset('frontend/styles/style.css') }}\"           rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('frontend/styles/menu_layout.css') }}\"           rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('frontend/styles/menus.css') }}\"           rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('frontend/styles/framework.css') }}\"       rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('frontend/styles/font-awesome.css') }}\"    rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('frontend/styles/animate.css') }}\"         rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('frontend/styles/override.css') }}\"        rel=\"stylesheet\" type=\"text/css\">


    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\" integrity=\"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk\" crossorigin=\"anonymous\">

    <link href=\"{{ asset('frontend/styles/font-awesome.css') }}\"    rel=\"stylesheet\" type=\"text/css\">

{% endblock %}

{# BODY #}
{% block content %}
    {% include 'frontend/home/styles.home.html.twig' %}

    <style>


        .content{
            min-height: 800px !important;
        }


        .content{
            padding-top: 80px;
        }


        .navSize{
            font-size: 20px;
        }

        .nav-item:hover{
            background-color: #f8f9fa!important;
        }
        .container{
            width: 90% !important;
        }
        @media screen and (max-width: 768px) {
            .nav-item {
                margin: auto;
            }
        }
    </style>

    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\" style=\"position: fixed; width: 100%; z-index: 1; background-color: white\">
        <a class=\"navbar-brand\" href=\"{{ path('user_accueil_index') }}\"><img  height=\"60px\" src=\"../../frontend/images/logo-syres.png\" alt=\"Syres\"></a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
            <div class=\"container\" style=\"width: 90%;\">
                <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                    <ul class=\"navbar-nav\" style=\"margin-left: auto; width: 100%\">
                        <li class=\"nav-item\" style=\"margin-left: auto\">
                            <a class=\"nav-link\" id=\"navCSurv\" href=\"{{ path('user_test_a_venirs_index') }}\">{{ 'Test a venir' | upper }}</a>
                        </li>
                        <li class=\"nav-item \">
                            <a class=\"nav-link navC\" id=\"navCIns\" href=\"{{ path('user_survey_tests') }}\">{{ 'Mon test' | upper }} <span class=\"sr-only\">(current)</span></a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link navC\" id=\"navCC\" href=\"{{ path('user_survey_enquete') }}\">{{ 'Enquete' | upper }}</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link navC\" id=\"navCL\" href=\"{{ path('app_logout') }}\">{{ 'se déconnecter' | upper }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

<div style=\" z-index: -1; display: none\">
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\" style=\"height: 83px; box-shadow: 0 0 20px rgba(0,0,0,.1); background-color: white; padding-bottom: 6px !important; \">
    </nav>
</div>
</div>
        {#
    <div class=\"Navbar navM\">
            <div class=\"container Navbar\">
                <div class=\"Navbar__Link Navbar__Link-brand\" id=\"paddingImgLogo\">

                    <img  height=\"60px\" src=\"../../frontend/images/logo-syres.png\" alt=\"Syres\">

               </div>
                <div class=\"Navbar__Link Navbar__Link-toggle\">
                    <i class=\"fas fa-bars Cbuttn\"></i>
                </div>
                <nav class=\"Navbar__Items Navbar__Items--right\">
                    <div class=\"Navbar__Link\">
                        <a class=\"Navbar__Link logout navSize\" href=\"#surveyList\" style=\"font-size: 16px\">Survey list</a>
                        <a class=\"Navbar__Link logout navSize\" href=\"#inst\" style=\"font-size: 16px\">Instructions</a>
                        <a class=\"Navbar__Link logout navSize\" href=\"{{ path('user_contact_index') }}\" style=\"font-size: 16px\">Contact us</a>
                        <a class=\"Navbar__Link logout navSize\" href=\"{{ path('app_logout') }}\" style=\"font-size: 16px\">Logout</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    #}
{% endblock %}

{# JAVASCRIPTS #}
{% block javascripts %}
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>

    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\" integrity=\"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI\" crossorigin=\"anonymous\"></script>
{% endblock %}
", "frontend/_layout.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/_layout.html.twig");
    }
}
