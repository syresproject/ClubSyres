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

/* frontend/Survey/test.html.twig */
class __TwigTemplate_0274054e0a7ffca784bfff76a46ccd14bf0a229fbbf951aee44a8af962491755 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/Survey/test.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/Survey/test.html.twig"));

        $this->parent = $this->loadTemplate("frontend/_layout.html.twig", "frontend/Survey/test.html.twig", 1);
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
            <h4 class=\"heading-title inline-header\">
                ";
        // line 14
        echo "MON TEST EN COURS";
        echo "
            ";
        // line 15
        $this->loadTemplate("frontend/header-title.html.twig", "frontend/Survey/test.html.twig", 15)->display($context);
        // line 16
        echo "            </h4>
            <div class=\"inline-button\">
                <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_survey_closed_tests");
        echo "\">
                    ";
        // line 19
        echo "Tests achevés";
        echo "
                </a>
                <a href=\"";
        // line 21
        echo "\">
                    ";
        // line 23
        echo "                </a>
            </div>
            <div style=\"z-index: -1\">
                <i class=\"fa fa-align-left heading-icon\" style=\"z-index: -1\"></i>
            </div>
            <div class=\"line bg-black\"></div>
        </div>

        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["surveysListByCategory"]) || array_key_exists("surveysListByCategory", $context) ? $context["surveysListByCategory"] : (function () { throw new RuntimeError('Variable "surveysListByCategory" does not exist.', 31, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 32
            echo "            <div class=\"container\">
                <h5>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "details", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33), "html", null, true);
            echo "</h5>
                <div class=\"decoration\"></div>

                ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "surveys", [], "any", false, false, false, 36));
            foreach ($context['_seq'] as $context["_key"] => $context["surveys"]) {
                // line 37
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["surveys"]);
                foreach ($context['_seq'] as $context["_key"] => $context["survey"]) {
                    // line 38
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_survey_details", ["id" => twig_get_attribute($this->env, $this->source, $context["survey"], "id", [], "any", false, false, false, 38)]), "html", null, true);
                    echo "\" class=\"user-list-item\">
                            <img src=\"";
                    // line 39
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/tree.svg"), "html", null, true);
                    echo "\" alt=\"img\">
                            <strong>";
                    // line 40
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "name", [], "any", false, false, false, 40), "html", null, true);
                    echo "</strong>
                            <em>
                                ";
                    // line 42
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["survey"], "status", [], "any", false, false, false, 42), 0))) {
                        // line 43
                        echo "                                    ";
                        echo "coming";
                        echo "
                                ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 44
$context["survey"], "status", [], "any", false, false, false, 44), 1))) {
                        // line 45
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inprogress", [], "survey"), "html", null, true);
                        echo "
                                ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 46
$context["survey"], "status", [], "any", false, false, false, 46), 2))) {
                        // line 47
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("focus", [], "survey"), "html", null, true);
                        echo "
                                ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 48
$context["survey"], "status", [], "any", false, false, false, 48), 3))) {
                        // line 49
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("closed", [], "survey"), "html", null, true);
                        echo "
                                ";
                    } else {
                        // line 51
                        echo "                                    ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "name", [], "any", false, false, false, 51), "html", null, true);
                        echo "
                                ";
                    }
                    // line 53
                    echo "                                - #";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "idSurvey", [], "any", false, false, false, 53), "html", null, true);
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
                // line 59
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['surveys'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 62
            echo "            <p class=\"center-text\">
                ";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Aucun test en cours ", []), "html", null, true);
            echo "
            </p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontend/Survey/test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 66,  213 => 63,  210 => 62,  204 => 60,  198 => 59,  185 => 53,  179 => 51,  173 => 49,  171 => 48,  166 => 47,  164 => 46,  159 => 45,  157 => 44,  152 => 43,  150 => 42,  145 => 40,  141 => 39,  136 => 38,  131 => 37,  127 => 36,  121 => 33,  118 => 32,  113 => 31,  103 => 23,  100 => 21,  95 => 19,  91 => 18,  87 => 16,  85 => 15,  81 => 14,  68 => 5,  58 => 4,  35 => 1,);
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
            <h4 class=\"heading-title inline-header\">
                {{ 'MON TEST EN COURS'}}
            {% include 'frontend/header-title.html.twig' %}
            </h4>
            <div class=\"inline-button\">
                <a href=\"{{ path('user_survey_closed_tests') }}\">
                    {{ 'Tests achevés' }}
                </a>
                <a href=\"{#{ path('frontend_gamification_index') }#}\">
                    {#{ 'Mes points') }#}
                </a>
            </div>
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
                                    {{ 'coming' }}
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
                {{ 'Aucun test en cours ' |trans({}) }}
            </p>
        {% endfor %}
    </div>
{% endblock %}
", "frontend/Survey/test.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/Survey/test.html.twig");
    }
}
