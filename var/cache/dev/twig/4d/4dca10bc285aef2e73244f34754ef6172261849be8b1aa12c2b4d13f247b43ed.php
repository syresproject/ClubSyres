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
class __TwigTemplate_2ec51d28d68577e8d619b0bb5a5a0f8476389cf92b51a430fa8d531527be8f45 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/home/menu/menu_g.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/home/menu/menu_g.html.twig"));

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
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["surveys_count"]) || array_key_exists("surveys_count", $context) ? $context["surveys_count"] : (function () { throw new RuntimeError('Variable "surveys_count" does not exist.', 8, $this->source); })()), 2, [], "array", false, false, false, 8), 0))) {
            // line 9
            echo "                        <i class=\"insight-notification\" style=\" background: #2980b9;color: white; font-size: 19px; padding: 9px 16px; position: inherit\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["surveys_count"]) || array_key_exists("surveys_count", $context) ? $context["surveys_count"] : (function () { throw new RuntimeError('Variable "surveys_count" does not exist.', 9, $this->source); })()), 2, [], "array", false, false, false, 9), "html", null, true);
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
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["surveys_count"]) || array_key_exists("surveys_count", $context) ? $context["surveys_count"] : (function () { throw new RuntimeError('Variable "surveys_count" does not exist.', 37, $this->source); })()), 2, [], "array", false, false, false, 37), 0))) {
            // line 38
            echo "                <i class=\"insight-notification\" style=\"  position: inherit; font-size: 19px;  padding: 9px 16px;background: #2980b9; color: white; top: 32px\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["surveys_count"]) || array_key_exists("surveys_count", $context) ? $context["surveys_count"] : (function () { throw new RuntimeError('Variable "surveys_count" does not exist.', 38, $this->source); })()), 2, [], "array", false, false, false, 38), "html", null, true);
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  109 => 42,  105 => 40,  99 => 38,  97 => 37,  84 => 27,  69 => 15,  63 => 11,  57 => 9,  55 => 8,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"wrap\" id=\"menuGrend\">
    <a class=\"a aTest\" href=\"{{ path('user_survey_tests') }}\" title=\"Veuillez cliquer ici\" style=\"padding-bottom: 0px; overflow: visible; width: 47.5%;
height: 48.5%;\">
        <div class=\"divVosTest\" style=\"padding-right:-8%; background-color: rgba(255,255,255,.75)\">
            <p class=\"enqueteText pVosTest\" style=\"margin-left: 15%; padding-top: 20%\">
                <strong class=\"strongVosTest\" style=\"color: black; font-weight: normal\">
                    MON</br>   TEST
                    {% if surveys_count[2] > 0 %}
                        <i class=\"insight-notification\" style=\" background: #2980b9;color: white; font-size: 19px; padding: 9px 16px; position: inherit\">{{ surveys_count[2] }}</i>
                    {% endif %}
                </strong>
            </p>
        </div>
    </a>
    <a class=\"a aTAVenir\" href=\"{{ path('user_test_a_venirs_index') }}\" title=\"Veuillez cliquer ici\" style=\"overflow: visible; width: 44.5%\">
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
    <a class=\"a aArticle\" href=\"{{ path('user_survey_enquete') }}\" title=\"Veuillez cliquer ici\">
        <div style=\"padding-top: 50%;
                font-size: 26px;
                padding-left: 10%;
                background-color: rgba(255,255,255,.75);;
                overflow: visible
            \">
            <strong style=\"text-align: center; color: black; font-weight: normal; font-size: 30px\">
                ENQUETES
            </strong>
            {% if surveys_count[2] > 0 %}
                <i class=\"insight-notification\" style=\"  position: inherit; font-size: 19px;  padding: 9px 16px;background: #2980b9; color: white; top: 32px\">{{ surveys_count[2] }}</i>
            {% endif %}
        </div>
    </a>
    <a class=\"a aEnquete\" href=\"{{ path('user_fag') }}\" title=\"Veuillez cliquer ici\" style=\"width: 44.5%\">
        <div style=\"padding-top: 60%; padding-left: 30%; background-color: rgba(255,255,255,.75)\">
            <p style=\"font-size: 40px; color: black\">FAQ</p>
        </div>
    </a>
    <a class=\"a\" href=\"#\" title=\"Veuillez cliquer ici\"><div style=\"text-align: center\"></div></a>
</div>", "frontend/home/menu/menu_g.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/home/menu/menu_g.html.twig");
    }
}
