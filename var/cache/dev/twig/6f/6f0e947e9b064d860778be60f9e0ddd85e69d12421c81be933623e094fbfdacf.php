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

/* _widgets/footer.html.twig */
class __TwigTemplate_afab2c96d0641bb1a674f25b414f68097a0e0896ee3a718d1a478d7043886006 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_widgets/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_widgets/footer.html.twig"));

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
        <a href=\"https://www.syres.fr/\" target=\"_blank\" rel=\"nofollow\" class=\"scale-hover phone-color\"><i class=\"fa fa-globe\"></i></a>

        <a href=\"#\" class=\"scale-hover bg-magenta-dark back-to-top\"><i class=\"fa fa-angle-up\"></i></a>


        <div class=\"clear\"></div>
    </div>

    <!--<div class=\"decoration\"></div>-->


    <p class=\"small-text no-bottom center-text\">&copy;
        Copyright 2020. Tous droits réservés.

    </p>
</div>


<div class=\"icon-bar\">


    ";
        // line 60
        echo "</div>

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "_widgets/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 60,  56 => 22,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fullscreen footer footer-light\">
    <p class=\"center-text\">
        <strong class=\"footer-message\"></strong>
    </p>

    <!--<div class=\"decoration\"></div>-->

    <div class=\"footer-socials\" style=\"display: flex\">

        <a href=\"\" target=\"_blank\" class=\"scale-hover facebook-color\"><i class=\"fa fa-facebook\"></i></a>

        {#
            {% if 'SOCIAL_TWITTER' | configuration %}
                <a href=\"{{ 'SOCIAL_TWITTER' | configuration }}\" target=\"_blank\" class=\"scale-hover twitter-color\"><i class=\"fa fa-twitter\"></i></a>
            {% endif %}


            {% if 'CONTACT_PHONE' | configuration %}
                <a href=\"tel:{{ 'CONTACT_PHONE' | configuration }}\" class=\"scale-hover phone-color\"><i class=\"fa fa-phone\"></i></a>
            {% endif %}
        #}
        <a href=\"{{ path('user_contact_index') }}\" class=\"scale-hover mail-color\"><i class=\"fa fa-envelope-o\"></i></a>

        <a href=\"https://www.instagram.com/syres_fr/?hl=fr\" class=\"scale-hover mail-color\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
        </a>
        <a href=\"https://www.syres.fr/\" target=\"_blank\" rel=\"nofollow\" class=\"scale-hover phone-color\"><i class=\"fa fa-globe\"></i></a>

        <a href=\"#\" class=\"scale-hover bg-magenta-dark back-to-top\"><i class=\"fa fa-angle-up\"></i></a>


        <div class=\"clear\"></div>
    </div>

    <!--<div class=\"decoration\"></div>-->


    <p class=\"small-text no-bottom center-text\">&copy;
        Copyright 2020. Tous droits réservés.

    </p>
</div>


<div class=\"icon-bar\">


    {#
    <div id=\"divHide\">
        <hr class=\"hrB\">
        <a class=\"fontNav\" href=\"{#{ path('user_accueil_index',{ 'id': user.id }) }# }\" style=\"padding-left: 2px\">ACCUEIL</a>
        <hr class=\"hrB\">
        <a class=\"fontNav\" href=\"{{ path('user_test_a_venirs_index') }}\">TEST A VENIR</a>
        <hr class=\"hrB\">
        <a class=\"fontNav\" href=\"{{ path('user_paneliste_tests') }}\">MON TEST </a>
        <hr class=\"hrB\">
        <a class=\"fontNav\" href=\"{{ path('user_paneliste_enquete') }}\" style=\"padding-left: 2px\">ENQUÊTE</a>
        <hr class=\"hrBClor\">
    </div>
#}
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
</style>", "_widgets/footer.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/_widgets/footer.html.twig");
    }
}
