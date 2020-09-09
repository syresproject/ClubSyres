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
class __TwigTemplate_583fb2b54ff0add4175ef6f669cd6a621e252bd9adbafa66d1108582b234f9f3 extends Template
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
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 9
    public function block_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "
    ";
    }

    // line 36
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "    ";
    }

    public function getTemplateName()
    {
        return "base.login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  184 => 37,  180 => 36,  175 => 31,  171 => 30,  165 => 24,  161 => 23,  157 => 22,  153 => 21,  149 => 20,  145 => 19,  141 => 18,  137 => 17,  133 => 16,  129 => 15,  125 => 14,  121 => 13,  117 => 12,  113 => 11,  108 => 10,  104 => 9,  98 => 7,  92 => 6,  88 => 26,  85 => 9,  80 => 7,  78 => 6,  75 => 5,  71 => 4,  64 => 38,  62 => 36,  57 => 33,  55 => 30,  50 => 27,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.login.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/base.login.html.twig");
    }
}
