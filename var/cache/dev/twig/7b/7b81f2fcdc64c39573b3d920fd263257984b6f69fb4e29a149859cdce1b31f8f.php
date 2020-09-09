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

/* frontend/FocusGroup/show.html.twig */
class __TwigTemplate_a66c7b9e8897fa5e23bce06440161a340a2f5c4c1492757700efa0e1212694fa extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/FocusGroup/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/FocusGroup/show.html.twig"));

        $this->parent = $this->loadTemplate("frontend/_layout.html.twig", "frontend/FocusGroup/show.html.twig", 1);
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
            <h4 class=\"heading-title\">Focus group</h4>
            <i class=\"fa fa-align-left heading-icon\"></i>
            <div class=\"line bg-black\"></div>
        </div>

        <div class=\"blog-post-comments full-bottom\">
            ";
        // line 15
        echo twig_include($this->env, $context, "frontend/_widgets/flash_notifications.html.twig");
        echo "

            <div class=\"container-fullscreen heading-style-3\">
                <h3 class=\"heading-title\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["focusGroup"]) || array_key_exists("focusGroup", $context) ? $context["focusGroup"] : (function () { throw new RuntimeError('Variable "focusGroup" does not exist.', 18, $this->source); })()), "survey", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "</h3>
                <em class=\"heading-subtitle\">Focus group</em>
                <div class=\"overlay bg-black\"></div>
            </div>

            <div class=\"decoration\"></div>

            ";
        // line 25
        echo twig_get_attribute($this->env, $this->source, (isset($context["focusGroup"]) || array_key_exists("focusGroup", $context) ? $context["focusGroup"] : (function () { throw new RuntimeError('Variable "focusGroup" does not exist.', 25, $this->source); })()), "article", [], "any", false, false, false, 25);
        echo "

            <div class=\"decoration\"></div>

            <div class=\"container\">
                <p class=\"center-text\">
                    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_survey_details", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["focusGroup"]) || array_key_exists("focusGroup", $context) ? $context["focusGroup"] : (function () { throw new RuntimeError('Variable "focusGroup" does not exist.', 31, $this->source); })()), "survey", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31)]), "html", null, true);
        echo "\" class=\"button-small button-grey\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("back", [], "focusgroup"), "html", null, true);
        echo "</a>
                    <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_focusgroup_reply", ["focusGroup" => twig_get_attribute($this->env, $this->source, (isset($context["focusGroup"]) || array_key_exists("focusGroup", $context) ? $context["focusGroup"] : (function () { throw new RuntimeError('Variable "focusGroup" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)]), "html", null, true);
        echo "\" class=\"button-small button-green\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("comment", [], "focusgroup"), "html", null, true);
        echo "</a>
                </p>
            </div>

            <div class=\"decoration\"></div>

            <div class=\"container-fullscreen heading-style-3\">
                <h3 class=\"heading-title\">";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("comments", [], "focusgroup"), "html", null, true);
        echo "</h3>
                <div class=\"overlay bg-black\"></div>
            </div>

            <div class=\"decoration\"></div>

            ";
        // line 45
        $this->loadTemplate("AppBundle:Frontend/FocusGroup:_message_tree.html.twig", "frontend/FocusGroup/show.html.twig", 45)->display(twig_to_array(["depth" => 0, "focusGroup" =>         // line 47
(isset($context["focusGroup"]) || array_key_exists("focusGroup", $context) ? $context["focusGroup"] : (function () { throw new RuntimeError('Variable "focusGroup" does not exist.', 47, $this->source); })()), "focusMessages" =>         // line 48
(isset($context["focusMessages"]) || array_key_exists("focusMessages", $context) ? $context["focusMessages"] : (function () { throw new RuntimeError('Variable "focusMessages" does not exist.', 48, $this->source); })())]));
        // line 50
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontend/FocusGroup/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 50,  134 => 48,  133 => 47,  132 => 45,  123 => 39,  111 => 32,  105 => 31,  96 => 25,  86 => 18,  80 => 15,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"frontend/_layout.html.twig\" %}

{# CONTENT #}
{% block content %}
    <div class=\"header-clear-large\"></div>

    <div class=\"content\">
        <div class=\"container heading-style-5\">
            <h4 class=\"heading-title\">Focus group</h4>
            <i class=\"fa fa-align-left heading-icon\"></i>
            <div class=\"line bg-black\"></div>
        </div>

        <div class=\"blog-post-comments full-bottom\">
            {{ include('frontend/_widgets/flash_notifications.html.twig') }}

            <div class=\"container-fullscreen heading-style-3\">
                <h3 class=\"heading-title\">{{ focusGroup.survey.name }}</h3>
                <em class=\"heading-subtitle\">Focus group</em>
                <div class=\"overlay bg-black\"></div>
            </div>

            <div class=\"decoration\"></div>

            {{ focusGroup.article | raw }}

            <div class=\"decoration\"></div>

            <div class=\"container\">
                <p class=\"center-text\">
                    <a href=\"{{ path('frontend_survey_details', {'id': focusGroup.survey.id}) }}\" class=\"button-small button-grey\">{{ 'back' |trans({}, 'focusgroup') }}</a>
                    <a href=\"{{ path('frontend_focusgroup_reply', {'focusGroup': focusGroup.id}) }}\" class=\"button-small button-green\">{{ 'comment' |trans({}, 'focusgroup') }}</a>
                </p>
            </div>

            <div class=\"decoration\"></div>

            <div class=\"container-fullscreen heading-style-3\">
                <h3 class=\"heading-title\">{{ 'comments' |trans({}, 'focusgroup') }}</h3>
                <div class=\"overlay bg-black\"></div>
            </div>

            <div class=\"decoration\"></div>

            {% include \"AppBundle:Frontend/FocusGroup:_message_tree.html.twig\" with {
                'depth': 0,
                'focusGroup': focusGroup,
                'focusMessages': focusMessages
            } only %}
        </div>
    </div>
{% endblock %}", "frontend/FocusGroup/show.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/FocusGroup/show.html.twig");
    }
}
