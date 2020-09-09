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

/* frontend/Survey/pre_recrutement.html.twig */
class __TwigTemplate_f218721b73b7f3c16d7d44b51b28cd622a0f6af02cb0a14bdbc0618bdf82192a extends Template
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
        return "AppBundle:Frontend:_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/Survey/pre_recrutement.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/Survey/pre_recrutement.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle:Frontend:_layout.html.twig", "frontend/Survey/pre_recrutement.html.twig", 1);
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
        echo "    <div class=\"header-clear-large\"></div>

    <div class=\"content\">
        <div class=\"container heading-style-5\">
            <h4 class=\"heading-title\">";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("preselections_inprogress", [], "survey"), "html", null, true);
        echo "</h4>
            <i class=\"fa fa-align-left heading-icon\"></i>
            <div class=\"line bg-black\"></div>
        </div>

        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["surveysListByCategory"]) || array_key_exists("surveysListByCategory", $context) ? $context["surveysListByCategory"] : (function () { throw new RuntimeError('Variable "surveysListByCategory" does not exist.', 14, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 15
            echo "            <div class=\"container\">
                <h5>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "details", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16), "html", null, true);
            echo "</h5>
                <div class=\"decoration\"></div>

                ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "surveys", [], "any", false, false, false, 19));
            foreach ($context['_seq'] as $context["_key"] => $context["surveys"]) {
                // line 20
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["surveys"]);
                foreach ($context['_seq'] as $context["_key"] => $context["survey"]) {
                    // line 21
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_survey_details", ["id" => twig_get_attribute($this->env, $this->source, $context["survey"], "id", [], "any", false, false, false, 21)]), "html", null, true);
                    echo "\" class=\"user-list-item\">
                            <img src=\"";
                    // line 22
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/tree.svg"), "html", null, true);
                    echo "\" alt=\"img\">
                            <strong>";
                    // line 23
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "name", [], "any", false, false, false, 23), "html", null, true);
                    echo "</strong>
                            <em>
                                ";
                    // line 25
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["survey"], "status", [], "any", false, false, false, 25), 0))) {
                        // line 26
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("coming", [], "survey"), "html", null, true);
                        echo "
                                ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 27
$context["survey"], "status", [], "any", false, false, false, 27), 1))) {
                        // line 28
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inprogress", [], "survey"), "html", null, true);
                        echo "
                                ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 29
$context["survey"], "status", [], "any", false, false, false, 29), 2))) {
                        // line 30
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("focus", [], "survey"), "html", null, true);
                        echo "
                                ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 31
$context["survey"], "status", [], "any", false, false, false, 31), 3))) {
                        // line 32
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("closed", [], "survey"), "html", null, true);
                        echo "
                                ";
                    } else {
                        // line 34
                        echo "                                    ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "name", [], "any", false, false, false, 34), "html", null, true);
                        echo "
                                ";
                    }
                    // line 36
                    echo "                                - #";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "idSurvey", [], "any", false, false, false, 36), "html", null, true);
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
                // line 42
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['surveys'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            echo "            <p class=\"center-text\">
                ";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("no_preselections", [], "survey"), "html", null, true);
            echo "
            </p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontend/Survey/pre_recrutement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 49,  182 => 46,  179 => 45,  173 => 43,  167 => 42,  154 => 36,  148 => 34,  142 => 32,  140 => 31,  135 => 30,  133 => 29,  128 => 28,  126 => 27,  121 => 26,  119 => 25,  114 => 23,  110 => 22,  105 => 21,  100 => 20,  96 => 19,  90 => 16,  87 => 15,  82 => 14,  74 => 9,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"AppBundle:Frontend:_layout.html.twig\" %}

{# CONTENT #}
{% block content %}
    <div class=\"header-clear-large\"></div>

    <div class=\"content\">
        <div class=\"container heading-style-5\">
            <h4 class=\"heading-title\">{{ 'preselections_inprogress' |trans({}, 'survey') }}</h4>
            <i class=\"fa fa-align-left heading-icon\"></i>
            <div class=\"line bg-black\"></div>
        </div>

        {% for category in surveysListByCategory %}
            <div class=\"container\">
                <h5>{{ category.details.name }}</h5>
                <div class=\"decoration\"></div>

                {% for surveys in category.surveys %}
                    {% for survey in surveys %}
                        <a href=\"{{ path('frontend_survey_details', {'id' : survey.id}) }}\" class=\"user-list-item\">
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
                {{ 'no_preselections' |trans({}, 'survey') }}
            </p>
        {% endfor %}
    </div>
{% endblock %}", "frontend/Survey/pre_recrutement.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/Survey/pre_recrutement.html.twig");
    }
}
