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

/* frontend/pdf_layout.html.twig */
class __TwigTemplate_bab8c46e2cc72748ed8bbe6063b42e99046811a43a606daf16635f12c79d669a extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "frontend/pdf_layout.html.twig", 1);
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
        echo "
";
    }

    // line 20
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/styles/font-awesome.css"), "html", null, true);
        echo "\"    rel=\"stylesheet\" type=\"text/css\">

";
    }

    // line 26
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "
    <style>

        body{
            margin: 0px;

        }


        .container{
            width: 90%;
            margin: auto;
        }
        h1{
            line-height: 1.3;
        }
        .pSize{
            font-size: xx-large;
        }
        p{margin-bottom: 4px}


        /*//// navBar/////*/
        #navbar{
            display: flex;
            background-color: #01c3e7;

        }
        .navDivLeft{
            width: 50%;
        }
        .navDivRigth{
            width: 50%;
            text-align: end;
        }
        .navDivRigth span{
            display: flex;
            color: black;
            margin-left:auto;

        }

        .color_nav{
            color: white;
        }
        .d_flex_{
            display: flex;
        }

        #navbar{
            height: 43px;
        }

        .navDivLeft{
            margin-bottom: 4px;
        }

        .pA{
            padding-right: 2px;
        }
        .pA{
            color: white;
        }

    </style>


    <div id=\"navbar\">
        <div class=\"container\">
            <div class=\"d_flex_\">
                <div class=\"navDivLeft\">
                    <span class=\"color_nav colorTextNav\">CONTACT US AT +65 6701 8074 OR TEAM@SYRES.SG</span>
                </div>
                <div class=\"navDivRigth\">
                    <a  href=\"\" target=\"_blank\" class=\"scale-hover colorTextNav pA\"><i class=\"fa fa-facebook\"></i></i>
                    </a>

                    <a href=\"\" target=\"_blank\" class=\"scale-hover pA\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a>
                    <a href=\"\" target=\"_blank\" class=\"scale-hover pA\"><i class=\"fa fa-envelope-o\"></i></a>
                </div>
            </div>
        </div>
    </div>

";
    }

    // line 113
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 114
        echo "
";
    }

    // line 117
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 118
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "frontend/pdf_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 118,  192 => 117,  187 => 114,  183 => 113,  95 => 27,  91 => 26,  83 => 21,  79 => 20,  74 => 16,  70 => 15,  62 => 8,  58 => 7,  52 => 4,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/pdf_layout.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/pdf_layout.html.twig");
    }
}
