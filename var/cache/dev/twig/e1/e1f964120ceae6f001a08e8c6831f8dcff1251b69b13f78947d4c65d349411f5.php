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

/* frontend/_layout_details.html.twig */
class __TwigTemplate_191449d20fcee73857a7da50d50e7134a5b9267e6b4d44c9717974d5cda6aef8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/_layout_details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/_layout_details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "frontend/_layout_details.html.twig", 1);
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
        echo "    <link rel=\"icon\" type=\"image/png\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/android-chrome-192x192_v2.png"), "html", null, true);
        echo "\" sizes=\"192x192\">
    <link rel=\"apple-touch-icon\" sizes=\"196x196\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/apple-touch-icon-196x196_v2.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/apple-touch-icon-180x180_v2.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/apple-touch-icon-152x152_v2.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/apple-touch-icon-144x144_v2.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/apple-touch-icon-120x120_v2.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/apple-touch-icon-114x114_v2.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/apple-touch-icon-76x76_v2.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/apple-touch-icon-72x72_v2.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/apple-touch-icon-60x60_v2.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/apple-touch-icon-57x57_v2.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/favicon-96x96_v2.png"), "html", null, true);
        echo "\" sizes=\"96x96\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/favicon-32x32_v2.png"), "html", null, true);
        echo "\" sizes=\"32x32\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/favicon-16x16_v2.png"), "html", null, true);
        echo "\" sizes=\"16x16\">
    <link rel=\"shortcut icon\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/favicon_v2.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\" />
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 37
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/styles/style.css"), "html", null, true);
        echo "\"           rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/styles/menus.css"), "html", null, true);
        echo "\"           rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/styles/framework.css"), "html", null, true);
        echo "\"       rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/styles/font-awesome.css"), "html", null, true);
        echo "\"    rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/styles/animate.css"), "html", null, true);
        echo "\"         rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/styles/override.css"), "html", null, true);
        echo "\"        rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/styles/menu_layout.css"), "html", null, true);
        echo "\"           rel=\"stylesheet\" type=\"text/css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 48
        echo "
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\"
          integrity=\"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk\" crossorigin=\"anonymous\">
    ";
        // line 51
        $this->loadTemplate("frontend/home/styles.home.html.twig", "frontend/_layout_details.html.twig", 51)->display($context);
        // line 52
        echo "
    <style>
        .container {
            width: 90% !important;
        }
    </style>

    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\" style=\"box-shadow: 0 0 20px rgba(0,0,0,.1); background-color: white; padding-bottom: 6px !important;\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_accueil_index");
        echo "\"><img  height=\"60px\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/logo/logo-syres.png"), "html", null, true);
        echo "\" alt=\"Syres\"></a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\" style=\"margin-left: auto\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                <ul class=\"navbar-nav\" style=\"margin-left: auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" id=\"navCSurv\" href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_test_a_venirs_index");
        echo "\">";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Test a venir"), "html", null, true);
        echo "</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link navC\" id=\"navCIns\" href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_survey_tests");
        echo "\">";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Mon test"), "html", null, true);
        echo " <span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link navC\" id=\"navCC\" href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_survey_enquete");
        echo "\">";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Enquete"), "html", null, true);
        echo "</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link navC\" id=\"navCL\" href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "se déconnecter"), "html", null, true);
        echo "</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div id=\"\" style=\"height: 20px; background-color: #2980b9\">
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontend/_layout_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 91,  320 => 90,  297 => 77,  289 => 74,  281 => 71,  273 => 68,  261 => 61,  250 => 52,  248 => 51,  243 => 48,  233 => 47,  221 => 43,  217 => 42,  213 => 41,  209 => 40,  205 => 39,  201 => 38,  196 => 37,  186 => 36,  172 => 30,  168 => 29,  164 => 28,  160 => 27,  156 => 26,  152 => 25,  148 => 24,  144 => 23,  140 => 22,  136 => 21,  132 => 20,  128 => 19,  124 => 18,  120 => 17,  115 => 16,  105 => 15,  91 => 8,  81 => 7,  63 => 4,  40 => 1,);
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
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

{% endblock %}

{# CSS #}
{% block stylesheets %}
    <link href=\"{{ asset('frontend/styles/style.css') }}\"           rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('frontend/styles/menus.css') }}\"           rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('frontend/styles/framework.css') }}\"       rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('frontend/styles/font-awesome.css') }}\"    rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('frontend/styles/animate.css') }}\"         rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('frontend/styles/override.css') }}\"        rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('frontend/styles/menu_layout.css') }}\"           rel=\"stylesheet\" type=\"text/css\">
{% endblock %}

{# BODY #}
{% block content %}

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\"
          integrity=\"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk\" crossorigin=\"anonymous\">
    {% include 'frontend/home/styles.home.html.twig' %}

    <style>
        .container {
            width: 90% !important;
        }
    </style>

    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\" style=\"box-shadow: 0 0 20px rgba(0,0,0,.1); background-color: white; padding-bottom: 6px !important;\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"{{ path('user_accueil_index') }}\"><img  height=\"60px\" src=\"{{ asset('frontend/logo/logo-syres.png') }}\" alt=\"Syres\"></a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\" style=\"margin-left: auto\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                <ul class=\"navbar-nav\" style=\"margin-left: auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" id=\"navCSurv\" href=\"{{ path('user_test_a_venirs_index') }}\">{{ 'Test a venir' | upper }}</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link navC\" id=\"navCIns\" href=\"{{ path('user_survey_tests') }}\">{{'Mon test' | upper}} <span class=\"sr-only\">(current)</span></a>
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
    </nav>
    <div id=\"\" style=\"height: 20px; background-color: #2980b9\">
    </div>

{% endblock %}

{# JAVASCRIPTS #}
{% block javascripts %}
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js\"></script>
{% endblock %}
", "frontend/_layout_details.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/_layout_details.html.twig");
    }
}
