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
class __TwigTemplate_3fde1b23ab53728342dee7ace5908b9a63830a333a98d0e94a8ad6d27aa0b5b9 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "frontend/_layout_details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 7
    public function block_metas($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\" content=\"user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui\"/>
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\"/>
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
";
    }

    // line 15
    public function block_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 36
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 47
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 90
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js\"></script>
";
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
        return array (  252 => 91,  248 => 90,  231 => 77,  223 => 74,  215 => 71,  207 => 68,  195 => 61,  184 => 52,  182 => 51,  177 => 48,  173 => 47,  167 => 43,  163 => 42,  159 => 41,  155 => 40,  151 => 39,  147 => 38,  142 => 37,  138 => 36,  130 => 30,  126 => 29,  122 => 28,  118 => 27,  114 => 26,  110 => 25,  106 => 24,  102 => 23,  98 => 22,  94 => 21,  90 => 20,  86 => 19,  82 => 18,  78 => 17,  73 => 16,  69 => 15,  61 => 8,  57 => 7,  51 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/_layout_details.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/_layout_details.html.twig");
    }
}
