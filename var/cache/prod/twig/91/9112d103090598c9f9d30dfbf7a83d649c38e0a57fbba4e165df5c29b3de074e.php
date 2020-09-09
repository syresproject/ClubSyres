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

/* frontend/layout.html.twig */
class __TwigTemplate_d4875b7c4c61b32a80f23425004092ebb18365eb02d979cfd82ffad3137f5916 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "frontend/layout.html.twig", 1);
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
";
    }

    // line 34
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/styles/style.css"), "html", null, true);
        echo "\"           rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/styles/menu_layout.css"), "html", null, true);
        echo "\"           rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/styles/menus.css"), "html", null, true);
        echo "\"           rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/styles/framework.css"), "html", null, true);
        echo "\"       rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/styles/font-awesome.css"), "html", null, true);
        echo "\"    rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/styles/animate.css"), "html", null, true);
        echo "\"         rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/styles/override.css"), "html", null, true);
        echo "\"        rel=\"stylesheet\" type=\"text/css\">

";
    }

    // line 46
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "    <div class=\"header\">
        <div class=\"divNavbarHome\">
            <h1 class=\"h1DivNavbarHome\" style=\"\">
                <img  height=\"150px\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/logo-syres.png"), "html", null, true);
        echo "\" alt=\"Syres\">
                <p class=\"text_align pSize\">Sensory & consumer rechearch.</p>


            </h1>
            <p class=\"iconeLoginHome\">
                <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
                    <img  height=\"40px\" width=\"40px\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/icon_logout.png"), "html", null, true);
        echo "\">
                </a>
            </p>

        </div>
    </div>
    <style>
        .pSize{
            font-size: xx-large;
            font-weight: normal;
            margin-top: 8px;
        }
        p{margin-bottom: 4px
        }
    </style>
    <div id=\"navbar\" style=\"height: 20px\">
        ";
        // line 78
        echo "    </div>


";
    }

    // line 84
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/scripts/jquery.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/scripts/framework-plugins.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/scripts/jqueryui.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 92
        echo "    <script>
        window.onscroll = function() {myFunction()};

        var navbar = document.getElementById(\"navbar\");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add(\"sticky\")
            } else {
                navbar.classList.remove(\"sticky\");
            }
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "frontend/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 92,  233 => 87,  229 => 86,  224 => 85,  220 => 84,  213 => 78,  194 => 57,  190 => 56,  181 => 50,  176 => 47,  172 => 46,  165 => 41,  161 => 40,  157 => 39,  153 => 38,  149 => 37,  145 => 36,  140 => 35,  136 => 34,  130 => 30,  126 => 29,  122 => 28,  118 => 27,  114 => 26,  110 => 25,  106 => 24,  102 => 23,  98 => 22,  94 => 21,  90 => 20,  86 => 19,  82 => 18,  78 => 17,  73 => 16,  69 => 15,  61 => 8,  57 => 7,  51 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/layout.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/layout.html.twig");
    }
}
