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

/* base.html.twig */
class __TwigTemplate_0011a7879310184e41de5fc2a62e9e10ab51fa0cf3387f71088c2d8f481cf242 extends Template
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
        // line 27
        echo "</head>
<body>
<div id=\"content\">
    ";
        // line 30
        $this->displayBlock('content', $context, $blocks);
        // line 38
        echo "</div>
<div id=\"footer\" style=\"background-color: #435462\">
    ";
        // line 40
        $this->displayBlock('footer', $context, $blocks);
        // line 43
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
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
        echo "            <style>
                    #content{
                            padding-top: 80px;
                    }
            </style>

    ";
    }

    // line 40
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "            ";
        $this->loadTemplate("_widgets/footer.html.twig", "base.html.twig", 41)->display($context);
        // line 42
        echo "    ";
    }

    // line 43
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "    ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  203 => 44,  199 => 43,  195 => 42,  192 => 41,  188 => 40,  178 => 31,  174 => 30,  168 => 24,  164 => 23,  160 => 22,  156 => 21,  152 => 20,  148 => 19,  144 => 18,  140 => 17,  136 => 16,  132 => 15,  128 => 14,  124 => 13,  120 => 12,  116 => 11,  111 => 10,  107 => 9,  101 => 7,  95 => 6,  91 => 26,  88 => 9,  83 => 7,  81 => 6,  78 => 5,  74 => 4,  67 => 45,  64 => 43,  62 => 40,  58 => 38,  56 => 30,  51 => 27,  49 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/base.html.twig");
    }
}
