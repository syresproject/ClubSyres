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

/* frontend/Survey/enquete.html.twig */
class __TwigTemplate_b3f9f3ef5824067de948251b6457658b14956ba7200984ff17020f3c6cff6f7c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/Survey/enquete.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/Survey/enquete.html.twig"));

        $this->parent = $this->loadTemplate("frontend/_layout.html.twig", "frontend/Survey/enquete.html.twig", 1);
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
            <h4 class=\"heading-title\">";
        // line 10
        echo "MES ENQUÊTES EN COURS ";
        echo "
                ";
        // line 11
        $this->loadTemplate("frontend/header-title.html.twig", "frontend/Survey/enquete.html.twig", 11)->display($context);
        // line 12
        echo "            </h4>
            <div style=\"z-index: -1\">
                <i class=\"fa fa-align-left heading-icon\" style=\"z-index: -1\"></i>
            </div>
            <div class=\"line bg-black\"></div>
        </div>

        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["surveysListByCategory"]) || array_key_exists("surveysListByCategory", $context) ? $context["surveysListByCategory"] : (function () { throw new RuntimeError('Variable "surveysListByCategory" does not exist.', 19, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 20
            echo "            <div class=\"container\">
                <h5>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "details", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21), "html", null, true);
            echo "</h5>
                <div class=\"decoration\"></div>

                ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "surveys", [], "any", false, false, false, 24));
            foreach ($context['_seq'] as $context["_key"] => $context["surveys"]) {
                // line 25
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["surveys"]);
                foreach ($context['_seq'] as $context["_key"] => $context["survey"]) {
                    // line 26
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_survey_details", ["id" => twig_get_attribute($this->env, $this->source, $context["survey"], "id", [], "any", false, false, false, 26)]), "html", null, true);
                    echo "\" class=\"user-list-item\">
                            <img src=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/tree.svg"), "html", null, true);
                    echo "\" alt=\"img\">
                            <strong>";
                    // line 28
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "name", [], "any", false, false, false, 28), "html", null, true);
                    echo "</strong>
                            <em>
                                ";
                    // line 30
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["survey"], "status", [], "any", false, false, false, 30), 0))) {
                        // line 31
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("coming", [], "survey"), "html", null, true);
                        echo "
                                ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 32
$context["survey"], "status", [], "any", false, false, false, 32), 1))) {
                        // line 33
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inprogress", [], "survey"), "html", null, true);
                        echo "
                                ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 34
$context["survey"], "status", [], "any", false, false, false, 34), 2))) {
                        // line 35
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("focus", [], "survey"), "html", null, true);
                        echo "
                                ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 36
$context["survey"], "status", [], "any", false, false, false, 36), 3))) {
                        // line 37
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("closed", [], "survey"), "html", null, true);
                        echo "
                                ";
                    } else {
                        // line 39
                        echo "                                    ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "name", [], "any", false, false, false, 39), "html", null, true);
                        echo "
                                ";
                    }
                    // line 41
                    echo "                                - #";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "idSurvey", [], "any", false, false, false, 41), "html", null, true);
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
                // line 47
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['surveys'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 50
            echo "            <p class=\"center-text\">
                ";
            // line 51
            echo "Aucune enquête en cours";
            echo "
            </p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontend/Survey/enquete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 54,  192 => 51,  189 => 50,  183 => 48,  177 => 47,  164 => 41,  158 => 39,  152 => 37,  150 => 36,  145 => 35,  143 => 34,  138 => 33,  136 => 32,  131 => 31,  129 => 30,  124 => 28,  120 => 27,  115 => 26,  110 => 25,  106 => 24,  100 => 21,  97 => 20,  92 => 19,  83 => 12,  81 => 11,  77 => 10,  68 => 5,  58 => 4,  35 => 1,);
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
            <h4 class=\"heading-title\">{{ 'MES ENQUÊTES EN COURS ' }}
                {% include 'frontend/header-title.html.twig' %}
            </h4>
            <div style=\"z-index: -1\">
                <i class=\"fa fa-align-left heading-icon\" style=\"z-index: -1\"></i>
            </div>
            <div class=\"line bg-black\"></div>
        </div>

        {% for category in surveysListByCategory %}
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
                {{ 'Aucune enquête en cours' }}
            </p>
        {% endfor %}
    </div>
{% endblock %}", "frontend/Survey/enquete.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/Survey/enquete.html.twig");
    }
}
