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

/* frontend/Survey/closed_test.html.twig */
class __TwigTemplate_7ec105956d380ef7f5751fa5d77c19a56a7a12e83acd137916751ffe0e27ef48 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "frontend/_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/Survey/closed_test.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/Survey/closed_test.html.twig"));

        $this->parent = $this->loadTemplate("frontend/_layout.html.twig", "frontend/Survey/closed_test.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    <div class=\"header-clear-large\"></div>

    <div class=\"content\">

        <div class=\"container heading-style-5\">
            <h4 class=\"heading-title inline-header\">";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tests_closed", [], "survey"), "html", null, true);
        echo "</h4>
            <div class=\"inline-button\">
                <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_survey_tests");
        echo "\">
                    ";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tests_inprogress", [], "survey"), "html", null, true);
        echo "
                </a>

            </div>
            <i class=\"fa fa-align-left heading-icon\"></i>
            <div class=\"line bg-black\"></div>
        </div>

        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["closedSurveysListByCategory"]) || array_key_exists("closedSurveysListByCategory", $context) ? $context["closedSurveysListByCategory"] : (function () { throw new RuntimeError('Variable "closedSurveysListByCategory" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 23
            echo "            <div class=\"container\">
                <h5>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "details", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
            echo "</h5>
                <div class=\"decoration\"></div>

                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "surveys", [], "any", false, false, false, 27));
            foreach ($context['_seq'] as $context["_key"] => $context["surveys"]) {
                // line 28
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["surveys"]);
                foreach ($context['_seq'] as $context["_key"] => $context["survey"]) {
                    // line 29
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_survey_details", ["id" => twig_get_attribute($this->env, $this->source, $context["survey"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                    echo "\" class=\"user-list-item\">
                            <img src=\"";
                    // line 30
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/tree.svg"), "html", null, true);
                    echo "\" alt=\"img\">
                            <strong>";
                    // line 31
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "name", [], "any", false, false, false, 31), "html", null, true);
                    echo "</strong>
                            <em>
                                ";
                    // line 33
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["survey"], "status", [], "any", false, false, false, 33), 0))) {
                        // line 34
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("coming", [], "survey"), "html", null, true);
                        echo "
                                ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 35
$context["survey"], "status", [], "any", false, false, false, 35), 1))) {
                        // line 36
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inprogress", [], "survey"), "html", null, true);
                        echo "
                                ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 37
$context["survey"], "status", [], "any", false, false, false, 37), 2))) {
                        // line 38
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("focus", [], "survey"), "html", null, true);
                        echo "
                                ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 39
$context["survey"], "status", [], "any", false, false, false, 39), 3))) {
                        // line 40
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("closed", [], "survey"), "html", null, true);
                        echo "
                                ";
                    } else {
                        // line 42
                        echo "                                    ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "name", [], "any", false, false, false, 42), "html", null, true);
                        echo "
                                ";
                    }
                    // line 44
                    echo "                                - #";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "idSurvey", [], "any", false, false, false, 44), "html", null, true);
                    echo "
                            </em>
                            <i class=\"fa fa-chevron-right\"></i>
                        </a>
                        <div class=\"decoration\"></div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['survey'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['surveys'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            echo "            <p class=\"center-text\">
                ";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("no_closed_test", [], "survey"), "html", null, true);
            echo "
            </p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontend/Survey/closed_test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 57,  198 => 54,  195 => 53,  189 => 51,  183 => 50,  170 => 44,  164 => 42,  158 => 40,  156 => 39,  151 => 38,  149 => 37,  144 => 36,  142 => 35,  137 => 34,  135 => 33,  130 => 31,  126 => 30,  121 => 29,  116 => 28,  112 => 27,  106 => 24,  103 => 23,  98 => 22,  87 => 14,  83 => 13,  78 => 11,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"frontend/_layout.html.twig\" %}

{# CONTENT #}
{% block content %}
    {{ parent() }}
    <div class=\"header-clear-large\"></div>

    <div class=\"content\">

        <div class=\"container heading-style-5\">
            <h4 class=\"heading-title inline-header\">{{ 'tests_closed' |trans({}, 'survey') }}</h4>
            <div class=\"inline-button\">
                <a href=\"{{ path('user_survey_tests') }}\">
                    {{ 'tests_inprogress' |trans({}, 'survey') }}
                </a>

            </div>
            <i class=\"fa fa-align-left heading-icon\"></i>
            <div class=\"line bg-black\"></div>
        </div>

        {% for category in closedSurveysListByCategory %}
            <div class=\"container\">
                <h5>{{ category.details.name }}</h5>
                <div class=\"decoration\"></div>

                {% for surveys in category.surveys %}
                    {% for survey in surveys %}
                        <a href=\"{{ path('user_survey_details', {'id' : survey.id}) }}\" class=\"user-list-item\">
                            <img src=\"{{ asset('frontend/images/tree.svg') }}\" alt=\"img\">
                            <strong>{{ survey.name }}</strong>
                            <em>
                                {% if survey.status == 0 %}
                                    {{ 'coming' |trans({}, 'survey') }}
                                {% elseif survey.status == 1 %}
                                    {{ 'inprogress' |trans({}, 'survey') }}
                                {% elseif survey.status == 2 %}
                                    {{ 'focus' |trans({}, 'survey') }}
                                {% elseif survey.status == 3 %}
                                    {{ 'closed' |trans({}, 'survey') }}
                                {% else %}
                                    {{ survey.name }}
                                {% endif %}
                                - #{{ survey.idSurvey }}
                            </em>
                            <i class=\"fa fa-chevron-right\"></i>
                        </a>
                        <div class=\"decoration\"></div>
                    {% endfor %}
                {% endfor %}
            </div>
        {% else %}
            <p class=\"center-text\">
                {{ 'no_closed_test' |trans({}, 'survey') }}
            </p>
        {% endfor %}
    </div>
{% endblock %}", "frontend/Survey/closed_test.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/Survey/closed_test.html.twig");
    }
}
