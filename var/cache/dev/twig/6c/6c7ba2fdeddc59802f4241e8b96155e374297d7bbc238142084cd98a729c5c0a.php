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

/* frontend/FocusGroup/_focus_block.html.twig */
class __TwigTemplate_4750b05c4c1bdb042d5023fb2437f27d6b2d56be558dd2e2cdd4f37e4dae0ac4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/FocusGroup/_focus_block.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/FocusGroup/_focus_block.html.twig"));

        // line 1
        echo "<div class=\"container-fullscreen heading-style-3\">
    <h3 class=\"heading-title\">Focus test</h3>
    <div class=\"overlay bg-gray-dark\"></div>
</div>

<div class=\"decoration\"></div>

<div class=\"container\">
    ";
        // line 10
        echo "    ";
        if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 10, $this->source); })()), "status", [], "any", false, false, false, 10), 2)) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 10, $this->source); })()), "status", [], "any", false, false, false, 10), 3)))) {
            // line 11
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 11, $this->source); })()), "focusGroup", [], "any", false, false, false, 11)) {
                // line 12
                echo "            ";
                if ((isset($context["focusAccess"]) || array_key_exists("focusAccess", $context) ? $context["focusAccess"] : (function () { throw new RuntimeError('Variable "focusAccess" does not exist.', 12, $this->source); })())) {
                    // line 13
                    echo "                <p class=\"center-text\">
                    ";
                    // line 14
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("discuss_with_other_panelists", [], "focusgroup"), "html", null, true);
                    echo " :
                </p>
                <p class=\"center-text\">
                    <a href=\"";
                    // line 17
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_focusgroup_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 17, $this->source); })()), "focusGroup", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17)]), "html", null, true);
                    echo "\" class=\"button-small button-green\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("access_focus_group", [], "focusgroup"), "html", null, true);
                    echo "</a>
                </p>
            ";
                } else {
                    // line 20
                    echo "                <p class=\"center-text\">
                    ";
                    // line 21
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cannot_access_focus_test", [], "focusgroup"), "html", null, true);
                    echo ".
                </p>
            ";
                }
                // line 24
                echo "        ";
            } else {
                // line 25
                echo "            <p class=\"center-text\">
                ";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("not_yet_accessible_focus_group", [], "focusgroup"), "html", null, true);
                echo "
            </p>
        ";
            }
            // line 29
            echo "    ";
        } else {
            // line 30
            echo "        <p class=\"center-text\">
            ";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("not_yet_accessible_focus_group", [], "focusgroup"), "html", null, true);
            echo "
        </p>
    ";
        }
        // line 34
        echo "</div>

<div class=\"decoration\"></div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "frontend/FocusGroup/_focus_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 34,  106 => 31,  103 => 30,  100 => 29,  94 => 26,  91 => 25,  88 => 24,  82 => 21,  79 => 20,  71 => 17,  65 => 14,  62 => 13,  59 => 12,  56 => 11,  53 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fullscreen heading-style-3\">
    <h3 class=\"heading-title\">Focus test</h3>
    <div class=\"overlay bg-gray-dark\"></div>
</div>

<div class=\"decoration\"></div>

<div class=\"container\">
    {# IF STATUS ID : FOCUS_GROUP OR CLOSED #}
    {% if survey.status == 2 or survey.status == 3 %}
        {% if survey.focusGroup %}
            {% if focusAccess %}
                <p class=\"center-text\">
                    {{ 'discuss_with_other_panelists' |trans({}, 'focusgroup') }} :
                </p>
                <p class=\"center-text\">
                    <a href=\"{{ path('frontend_focusgroup_show', {'id': survey.focusGroup.id}) }}\" class=\"button-small button-green\">{{ 'access_focus_group' |trans({}, 'focusgroup') }}</a>
                </p>
            {% else %}
                <p class=\"center-text\">
                    {{ 'cannot_access_focus_test' |trans({}, 'focusgroup') }}.
                </p>
            {% endif %}
        {% else %}
            <p class=\"center-text\">
                {{ 'not_yet_accessible_focus_group' |trans({}, 'focusgroup') }}
            </p>
        {% endif %}
    {% else %}
        <p class=\"center-text\">
            {{ 'not_yet_accessible_focus_group' |trans({}, 'focusgroup') }}
        </p>
    {% endif %}
</div>

<div class=\"decoration\"></div>", "frontend/FocusGroup/_focus_block.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/FocusGroup/_focus_block.html.twig");
    }
}
