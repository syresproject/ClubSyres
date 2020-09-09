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

/* frontend/inscription.layout.html.twig */
class __TwigTemplate_f6a7a9ee2d25dd96c937df99ad8ffdc5e2645f9a49d04e5aeacb79584ff7d5e0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'metas' => [$this, 'block_metas'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "frontend/inscription.layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <div class=\"header\" id=\"head\" style=\" z-index: 1;
position: fixed;
width: 100% !important;
background-color: white;
top: 0px;
height: 130px;
text-align: center;
padding: 0px;
margin: 0px;\">
        <h1>
            <a href=\"https://www.syres.fr/\">
            <img height=\"96px\" id=\"logo_layout\" src=\"../../frontend/images/logo-syres.png\" alt=\"\">
            </a>
        </h1>
        <p class=\"\" style=\"text-align: center; line-height: 2.1\">Sensory & consumer rechearch.</p>
    </div>
    <div id=\"navbar\" style=\"height: 20px; background-color: #2980b9; margin-top: 130px;\">
    </div>
";
    }

    // line 25
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 28
    public function block_metas($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\" content=\"user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui\"/>
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\"/>
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/styles/font-awesome.css"), "html", null, true);
        echo "\"    rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/styles/animate.css"), "html", null, true);
        echo "\"         rel=\"stylesheet\" type=\"text/css\">

    <style>
        #head{
            z-index: 1;
            position: fixed;
            width: 100% !important;
            background-color: white;
            top: 0px;
            height: 100px;
        }
    </style>

";
    }

    // line 55
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "

    ";
        // line 58
        $this->displayBlock('footer', $context, $blocks);
    }

    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "
    ";
    }

    // line 66
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/scripts/jquery.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/scripts/framework-plugins.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/scripts/jqueryui.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 74
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
        return "frontend/inscription.layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 74,  161 => 69,  157 => 68,  152 => 67,  148 => 66,  143 => 59,  136 => 58,  132 => 56,  128 => 55,  110 => 39,  106 => 38,  101 => 37,  97 => 36,  89 => 29,  85 => 28,  79 => 25,  56 => 4,  52 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/inscription.layout.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/inscription.layout.html.twig");
    }
}
