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

/* base.login.html.twig */
class __TwigTemplate_0027b7ad0c3e9839312dffd732a3b2b36382abdbec66d96b48d8b24fc71b3b5b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'icons' => [$this, 'block_icons'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 27
        echo "</head>
<body>
<div id=\"content\">
    ";
        // line 30
        $this->displayBlock('content', $context, $blocks);
        // line 33
        echo "</div>
<div id=\"footer\" style=\"background-color: #435462\">

    ";
        // line 36
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "</div>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <title>";
        $this->displayBlock('title', $context, $blocks);
        echo " Syres</title>
        ";
        // line 9
        echo "        ";
        $this->displayBlock('icons', $context, $blocks);
        // line 26
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
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

    // line 9
    public function block_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "icons"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "icons"));

        // line 10
        echo "                <link rel=\"icon\" type=\"image/png\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/android-chrome-192x192_v2.png"), "html", null, true);
        echo "\" sizes=\"192x192\">
                <link rel=\"apple-touch-icon\" sizes=\"196x196\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/apple-touch-icon-196x196_v2.png"), "html", null, true);
        echo "\">
                <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/apple-touch-icon-180x180_v2.png"), "html", null, true);
        echo "\">
                <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/apple-touch-icon-152x152_v2.png"), "html", null, true);
        echo "\">
                <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/apple-touch-icon-144x144_v2.png"), "html", null, true);
        echo "\">
                <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/apple-touch-icon-120x120_v2.png"), "html", null, true);
        echo "\">
                <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/apple-touch-icon-114x114_v2.png"), "html", null, true);
        echo "\">
                <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/apple-touch-icon-76x76_v2.png"), "html", null, true);
        echo "\">
                <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/apple-touch-icon-72x72_v2.png"), "html", null, true);
        echo "\">
                <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/apple-touch-icon-60x60_v2.png"), "html", null, true);
        echo "\">
                <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/apple-touch-icon-57x57_v2.png"), "html", null, true);
        echo "\">
                <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/favicon-96x96_v2.png"), "html", null, true);
        echo "\" sizes=\"96x96\">
                <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/favicon-32x32_v2.png"), "html", null, true);
        echo "\" sizes=\"32x32\">
                <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/favicon-16x16_v2.png"), "html", null, true);
        echo "\" sizes=\"16x16\">
                <link rel=\"shortcut icon\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/favicon_v2.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\" />
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 31
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 37
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  262 => 37,  252 => 36,  241 => 31,  231 => 30,  219 => 24,  215 => 23,  211 => 22,  207 => 21,  203 => 20,  199 => 19,  195 => 18,  191 => 17,  187 => 16,  183 => 15,  179 => 14,  175 => 13,  171 => 12,  167 => 11,  162 => 10,  152 => 9,  134 => 7,  116 => 6,  106 => 26,  103 => 9,  98 => 7,  96 => 6,  93 => 5,  83 => 4,  70 => 38,  68 => 36,  63 => 33,  61 => 30,  56 => 27,  54 => 4,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    {% block head %}
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            {% block stylesheets %}{% endblock %}
        <title>{% block title %}{% endblock %} Syres</title>
        {# ICONS test #}
        {% block icons %}
                <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('frontend/images/splash/android-chrome-192x192_v2.png') }}\" sizes=\"192x192\">
                <link rel=\"apple-touch-icon\" sizes=\"196x196\" href=\"{{ asset('frontend/images/splash/apple-touch-icon-196x196_v2.png') }}\">
                <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ asset('frontend/images/splash/apple-touch-icon-180x180_v2.png') }}\">
                <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"{{ asset('frontend/images/splash/apple-touch-icon-152x152_v2.png') }}\">
                <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"{{ asset('frontend/images/splash/apple-touch-icon-144x144_v2.png') }}\">
                <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"{{ asset('frontend/images/splash/apple-touch-icon-120x120_v2.png') }}\">
                <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"{{ asset('frontend/images/splash/apple-touch-icon-114x114_v2.png') }}\">
                <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ asset('frontend/images/splash/apple-touch-icon-76x76_v2.png') }}\">
                <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"{{ asset('frontend/images/splash/apple-touch-icon-72x72_v2.png') }}\">
                <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"{{ asset('frontend/images/splash/apple-touch-icon-60x60_v2.png') }}\">
                <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"{{ asset('frontend/images/splash/apple-touch-icon-57x57_v2.png') }}\">
                <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('frontend/images/splash/favicon-96x96_v2.png') }}\" sizes=\"96x96\">
                <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('frontend/images/splash/favicon-32x32_v2.png') }}\" sizes=\"32x32\">
                <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('frontend/images/splash/favicon-16x16_v2.png') }}\" sizes=\"16x16\">
                <link rel=\"shortcut icon\" href=\"{{ asset('frontend/images/splash/favicon_v2.ico') }}\" type=\"image/x-icon\" />
        {% endblock %}
    {% endblock %}
</head>
<body>
<div id=\"content\">
    {% block content %}

    {% endblock %}
</div>
<div id=\"footer\" style=\"background-color: #435462\">

    {% block javascripts %}
    {% endblock %}
</div>
</body>
</html>
", "base.login.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/base.login.html.twig");
    }
}
