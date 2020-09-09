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
class __TwigTemplate_ce232f1d32fa6fe745a010279a608b7e0e26fe13288a5334759067c4886a4c11 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "frontend/_layout.html.twig", 1);
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
        echo "    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

";
    }

    // line 21
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 39
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 130
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 131
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>

    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\" integrity=\"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI\" crossorigin=\"anonymous\"></script>
";
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
        return array (  226 => 131,  222 => 130,  202 => 91,  194 => 88,  186 => 85,  178 => 82,  166 => 73,  132 => 41,  129 => 40,  125 => 39,  118 => 34,  110 => 29,  106 => 28,  102 => 27,  98 => 26,  94 => 25,  90 => 24,  86 => 23,  83 => 22,  79 => 21,  73 => 16,  69 => 15,  61 => 8,  57 => 7,  51 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/_layout.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/_layout.html.twig");
    }
}
