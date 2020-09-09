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

/* base.home.html.twig */
class __TwigTemplate_e5e9d52c2c311806006a344cdb0c41e0b57c43cbcb0b494fe553601cc32b127b extends Template
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
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 29
        echo "</head>
<body>
<div id=\"content\">
    ";
        // line 32
        $this->displayBlock('content', $context, $blocks);
        // line 40
        echo "</div>
<div id=\"footer\" style=\"background-color: #435462\">
    ";
        // line 42
        $this->displayBlock('footer', $context, $blocks);
        // line 45
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "</div>
</body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

            ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <title>";
        $this->displayBlock('title', $context, $blocks);
        echo " Syres</title>
        ";
        // line 11
        echo "        ";
        $this->displayBlock('icons', $context, $blocks);
        // line 28
        echo "    ";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "        ";
    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 11
    public function block_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "                <link rel=\"icon\" type=\"image/png\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/android-chrome-192x192_v2.png"), "html", null, true);
        echo "\" sizes=\"192x192\">
                <link rel=\"apple-touch-icon\" sizes=\"196x196\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/apple-touch-icon-196x196_v2.png"), "html", null, true);
        echo "\">
                <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/apple-touch-icon-180x180_v2.png"), "html", null, true);
        echo "\">
                <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/apple-touch-icon-152x152_v2.png"), "html", null, true);
        echo "\">
                <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/apple-touch-icon-144x144_v2.png"), "html", null, true);
        echo "\">
                <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/apple-touch-icon-120x120_v2.png"), "html", null, true);
        echo "\">
                <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/apple-touch-icon-114x114_v2.png"), "html", null, true);
        echo "\">
                <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/apple-touch-icon-76x76_v2.png"), "html", null, true);
        echo "\">
                <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/apple-touch-icon-72x72_v2.png"), "html", null, true);
        echo "\">
                <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/apple-touch-icon-60x60_v2.png"), "html", null, true);
        echo "\">
                <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/apple-touch-icon-57x57_v2.png"), "html", null, true);
        echo "\">
                <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/favicon-96x96_v2.png"), "html", null, true);
        echo "\" sizes=\"96x96\">
                <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/favicon-32x32_v2.png"), "html", null, true);
        echo "\" sizes=\"32x32\">
                <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/favicon-16x16_v2.png"), "html", null, true);
        echo "\" sizes=\"16x16\">
                <link rel=\"shortcut icon\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/splash/favicon_v2.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\" />
        ";
    }

    // line 32
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "            <style>
                    #content{
                            padding-top: 80px;
                    }
            </style>

    ";
    }

    // line 42
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "            ";
        $this->loadTemplate("_widgets/footer.home.html.twig", "base.home.html.twig", 43)->display($context);
        // line 44
        echo "    ";
    }

    // line 45
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "    ";
    }

    public function getTemplateName()
    {
        return "base.home.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  206 => 46,  202 => 45,  198 => 44,  195 => 43,  191 => 42,  181 => 33,  177 => 32,  171 => 26,  167 => 25,  163 => 24,  159 => 23,  155 => 22,  151 => 21,  147 => 20,  143 => 19,  139 => 18,  135 => 17,  131 => 16,  127 => 15,  123 => 14,  119 => 13,  114 => 12,  110 => 11,  104 => 9,  100 => 8,  96 => 7,  92 => 28,  89 => 11,  84 => 9,  82 => 7,  78 => 5,  74 => 4,  67 => 47,  64 => 45,  62 => 42,  58 => 40,  56 => 32,  51 => 29,  49 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.home.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/base.home.html.twig");
    }
}
