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

/* frontend/home/menu/menu_g.html.twig */
class __TwigTemplate_ddeb456645304078f992d8941136d8e1a48e5364b22866693e21dc0f1dc6c683 extends Template
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
        echo "<div class=\"wrap\" id=\"menuGrend\">
    <a class=\"a aTest\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_survey_tests");
        echo "\" title=\"Veuillez cliquer ici\" style=\"padding-bottom: 0px; overflow: visible; width: 47.5%;
height: 48.5%;\">
        <div class=\"divVosTest\" style=\"padding-right:-8%; background-color: rgba(255,255,255,.75)\">
            <p class=\"enqueteText pVosTest\" style=\"margin-left: 15%; padding-top: 20%\">
                <strong class=\"strongVosTest\" style=\"color: black; font-weight: normal\">
                    MON</br>   TEST
                    ";
        // line 8
        if ((1 === twig_compare((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["surveys_count"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[2] ?? null) : null), 0))) {
            // line 9
            echo "                        <i class=\"insight-notification\" style=\" background: #2980b9;color: white; font-size: 19px; padding: 9px 16px; position: inherit\">";
            echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["surveys_count"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[2] ?? null) : null), "html", null, true);
            echo "</i>
                    ";
        }
        // line 11
        echo "                </strong>
            </p>
        </div>
    </a>
    <a class=\"a aTAVenir\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_test_a_venirs_index");
        echo "\" title=\"Veuillez cliquer ici\" style=\"overflow: visible; width: 44.5%\">
        <div style=\"
                    color: #0E1112;
                    font-size: 26px;
                    padding-top: 15%;
                    text-align: end;
                    padding-right: 25%;
                    background-color: rgba(255,255,255,.75)
            \">
            <strong style=\"font-weight: 500; font-size: 30px; color: black; font-weight: normal\">TESTS </br> À </br> VENIR</strong> <br>
        </div>
    </a>
    <a class=\"a aArticle\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_survey_enquete");
        echo "\" title=\"Veuillez cliquer ici\">
        <div style=\"padding-top: 50%;
                font-size: 26px;
                padding-left: 10%;
                background-color: rgba(255,255,255,.75);;
                overflow: visible
            \">
            <strong style=\"text-align: center; color: black; font-weight: normal; font-size: 30px\">
                ENQUETES
            </strong>
            ";
        // line 37
        if ((1 === twig_compare((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["surveys_count"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[2] ?? null) : null), 0))) {
            // line 38
            echo "                <i class=\"insight-notification\" style=\"  position: inherit; font-size: 19px;  padding: 9px 16px;background: #2980b9; color: white; top: 32px\">";
            echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["surveys_count"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[2] ?? null) : null), "html", null, true);
            echo "</i>
            ";
        }
        // line 40
        echo "        </div>
    </a>
    <a class=\"a aEnquete\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_fag");
        echo "\" title=\"Veuillez cliquer ici\" style=\"width: 44.5%\">
        <div style=\"padding-top: 60%; padding-left: 30%; background-color: rgba(255,255,255,.75)\">
            <p style=\"font-size: 40px; color: black\">FAQ</p>
        </div>
    </a>
    <a class=\"a\" href=\"#\" title=\"Veuillez cliquer ici\"><div style=\"text-align: center\"></div></a>
</div>";
    }

    public function getTemplateName()
    {
        return "frontend/home/menu/menu_g.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 42,  99 => 40,  93 => 38,  91 => 37,  78 => 27,  63 => 15,  57 => 11,  51 => 9,  49 => 8,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/home/menu/menu_g.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/home/menu/menu_g.html.twig");
    }
}
