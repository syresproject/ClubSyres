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

/* frontend/home/menu/menu_p.html.twig */
class __TwigTemplate_ddffe98fabfcc0aa6b13f96428d2b4f5e515f2a26c310dcdf0f9e86efa86ef7d extends Template
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
        echo "<div class=\"wrap\" id=\"menuPetit\">
    <a class=\"a aTest\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_survey_tests", ["id" => "link.id"]);
        echo "\" title=\"Veuillez cliquer ici\" style=\"padding-bottom: 0px; overflow: visible;background-color: rgba(255,255,255,.75); left: -23px;
\">
        <div class=\"divVosTest\" style=\"padding-top: 15%;\">
            <p class=\"enqueteText pVosTest\" style=\"margin-left: 10%\">
                <strong class=\"strongVosTest\" style=\"font-size: 25px; font-weight: normal\">
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
        echo "\" title=\"Veuillez cliquer ici\"
       style=\"overflow: visible; left: 64.5%; background-color: rgba(255,255,255,.75);\">
        <div style=\"color: #0E1112; font-size: 26px; padding-top: 15%; text-align: end; padding-right: 15%\">
            <strong style=\"font-size: 25px; font-weight: normal\">TESTS </br>
                À </br> VENIR</strong>
        </div>
    </a>
    <a class=\"a aArticle\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_survey_enquete");
        echo "\" title=\"Veuillez cliquer ici\"
       style=\"width: 49.5%;height: 50.5%; left: -23px\">
        <div style=\"padding-top: 50%;
                font-size: 26px;
                color: #0a001f;
                padding-left: 10%;
                overflow: visible;
                background-color: rgba(255,255,255,.75);
            \">
            <strong style=\"font-size: 25px; text-align: center; font-weight: normal\">
                ENQUETES
            </strong>
            ";
        // line 34
        if ((1 === twig_compare((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["surveys_count"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[2] ?? null) : null), 0))) {
            // line 35
            echo "            <i class=\"insight-notification\"
               style=\"position: static; font-size: 19px;  padding: 6px;background: #2980b9; color: white; top: 32px; margin-left: 33%\">
                ";
            // line 37
            echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["surveys_count"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[2] ?? null) : null), "html", null, true);
            echo "
            </i>
            ";
        }
        // line 40
        echo "        </div>
    </a>
    <a class=\"a aEnquete\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_fag");
        echo "\" title=\"Veuillez cliquer ici\" style=\"background-color: rgb(255,255,255,.75);     top: 56.5%;
left: 64.5%;\">
        <div style=\"font-size: 26px; padding-top: 60%; padding-left: 5%\">
            <strong style=\"font-size: 25px; color: black; font-weight: normal\">
            </strong>
            <p style=\"font-size: 40px; color: black\">FAQ</p>

        </div>
    </a>
    <a class=\"a\" href=\"#\" title=\"Veuillez cliquer ici\">
        <div style=\"text-align: center\">
            <div style=\"padding-top: 60%; padding-left: 30%; background-color: rgba(255,255,255,.75)\">
            </div>
        </div>
    </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "frontend/home/menu/menu_p.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 42,  100 => 40,  94 => 37,  90 => 35,  88 => 34,  73 => 22,  63 => 15,  57 => 11,  51 => 9,  49 => 8,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/home/menu/menu_p.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/home/menu/menu_p.html.twig");
    }
}
