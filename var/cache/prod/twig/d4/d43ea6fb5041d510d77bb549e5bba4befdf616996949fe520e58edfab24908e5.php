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

/* _widgets/pdf_footer.html.twig */
class __TwigTemplate_1c593adc106ab7a5bae5a608244b1d6bb5774907c571243447592a5f0a7817da extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"container-fullscreen footer footer-light\">
    <p class=\"center-text\">
        <strong class=\"footer-message\"></strong>
    </p>

    <!--<div class=\"decoration\"></div>-->

    <div class=\"footer-socials\" style=\"display: flex\">

        <a href=\"\" target=\"_blank\" class=\"scale-hover facebook-color\"><i class=\"fa fa-facebook\"></i></a>

        ";
        // line 22
        echo "        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_contact_index");
        echo "\" class=\"scale-hover mail-color\"><i class=\"fa fa-envelope-o\"></i></a>

        <a href=\"https://www.instagram.com/syres_fr/?hl=fr\" class=\"scale-hover mail-color\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
        </a>
        <a href=\"\" target=\"_blank\" rel=\"nofollow\" class=\"scale-hover phone-color\"><i class=\"fa fa-globe\"></i></a>

        <a href=\"#\" class=\"scale-hover bg-magenta-dark back-to-top\"><i class=\"fa fa-angle-up\"></i></a>


        <div class=\"clear\"></div>
    </div>

    <!--<div class=\"decoration\"></div>-->


    <p class=\"small-text no-bottom center-text\">&copy;
        Copyright 2020. Tous droits réservés.

    </p>
</div>


<div class=\"icon-bar\">
    <button  type=\"button\" id=\"delete\" style=\"background-color: rgb(255, 255, 255, .75)\">
        <a class=\"fontNavEntete\" href=\"#\">MENU</a>

        ";
        // line 52
        echo "    </button>

</div>

<script
        src=\"https://code.jquery.com/jquery-3.4.1.min.js\"
        integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\"
        crossorigin=\"anonymous\">

</script>

<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

<script>
    \$( \"button\" ).click(function() {
        \$( \"#divHide\" ).toggle(1000);
    });

</script>
<style>
    .fontNavEntete{
        font-weight: 400;
    }
    .fontNav{
        font-weight: 200;
    }
    .hrB{border: 1px solid black}
    .hrBClor{border: 4px solid #2980b9;
    }
    body {margin:0}

    .icon-bar {
        position: fixed;
        right: 0;
        bottom: 10px;
        width: 8em;
        margin-top: -2.5em;
        padding: 5px;

        padding-bottom: 0px;
        background-color: rgb(255, 255, 255, .75);
    }

    .icon-bar a {
        display: block;
        text-align: center;
        padding: 16px;
        transition: all 0.3s ease;
        color: black;
        font-size: 24px;
    }

    .icon-bar a:hover {
        background-color: #2980b9;
        color: white;
    }

    .active {
        background-color: #2980b9;
    }

    .active:hover {
        background-color: rgb(255, 255, 255, .75);
    }
</style>";
    }

    public function getTemplateName()
    {
        return "_widgets/pdf_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 52,  50 => 22,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_widgets/pdf_footer.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/_widgets/pdf_footer.html.twig");
    }
}
