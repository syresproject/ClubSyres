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

/* frontend/FocusGroup/reply.html.twig */
class __TwigTemplate_985db123e64f81923636d457f9d19ae95cf4e4376fa6ee2971cbe52245c47b7a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/FocusGroup/reply.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/FocusGroup/reply.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle:Frontend:_layout.html.twig", "frontend/FocusGroup/reply.html.twig", 1);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["focus_message_form"]) || array_key_exists("focus_message_form", $context) ? $context["focus_message_form"] : (function () { throw new RuntimeError('Variable "focus_message_form" does not exist.', 15, $this->source); })()), 'form_start');
        echo "
                <div class=\"blog-post-comment-add\">
                    ";
        // line 17
        if ((isset($context["focusMessage"]) || array_key_exists("focusMessage", $context) ? $context["focusMessage"] : (function () { throw new RuntimeError('Variable "focusMessage" does not exist.', 17, $this->source); })())) {
            // line 18
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["focusMessage"]) || array_key_exists("focusMessage", $context) ? $context["focusMessage"] : (function () { throw new RuntimeError('Variable "focusMessage" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18)) {
                // line 19
                echo "                            <h5>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("reply_to", [], "focusgroup"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["focusMessage"]) || array_key_exists("focusMessage", $context) ? $context["focusMessage"] : (function () { throw new RuntimeError('Variable "focusMessage" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "firstname", [], "any", false, false, false, 19), "html", null, true);
                echo "</h5>
                        ";
            } else {
                // line 21
                echo "                            <h5>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("reply_to_syres", [], "focusgroup"), "html", null, true);
                echo "</h5>
                        ";
            }
            // line 23
            echo "                        <p>
                            ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["focusMessage"]) || array_key_exists("focusMessage", $context) ? $context["focusMessage"] : (function () { throw new RuntimeError('Variable "focusMessage" does not exist.', 24, $this->source); })()), "content", [], "any", false, false, false, 24), "html", null, true);
            echo "
                        </p>
                    ";
        } else {
            // line 27
            echo "                        <h5>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["focusGroup"]) || array_key_exists("focusGroup", $context) ? $context["focusGroup"] : (function () { throw new RuntimeError('Variable "focusGroup" does not exist.', 27, $this->source); })()), "survey", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
            echo "</h5>

                        ";
            // line 29
            echo twig_get_attribute($this->env, $this->source, (isset($context["focusGroup"]) || array_key_exists("focusGroup", $context) ? $context["focusGroup"] : (function () { throw new RuntimeError('Variable "focusGroup" does not exist.', 29, $this->source); })()), "article", [], "any", false, false, false, 29);
            echo "
                    ";
        }
        // line 31
        echo "
                    <strong>";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("my_message", [], "focusgroup"), "html", null, true);
        echo "</strong><em>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("required", [], "focusgroup"), "html", null, true);
        echo "</em>
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["focus_message_form"]) || array_key_exists("focus_message_form", $context) ? $context["focus_message_form"] : (function () { throw new RuntimeError('Variable "focus_message_form" does not exist.', 33, $this->source); })()), "content", [], "any", false, false, false, 33), 'widget');
        echo "
                </div>

                <button type=\"submit\" class=\"button button-green button-right full-top full-bottom hardfix\">";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("send", [], "focusgroup"), "html", null, true);
        echo "</button>
                <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_focusgroup_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["focusGroup"]) || array_key_exists("focusGroup", $context) ? $context["focusGroup"] : (function () { throw new RuntimeError('Variable "focusGroup" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37)]), "html", null, true);
        echo "\" class=\"button button-grey button-right full-top full-bottom\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("back", [], "focusgroup"), "html", null, true);
        echo "</a>
            ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["focus_message_form"]) || array_key_exists("focus_message_form", $context) ? $context["focus_message_form"] : (function () { throw new RuntimeError('Variable "focus_message_form" does not exist.', 38, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontend/FocusGroup/reply.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 38,  143 => 37,  139 => 36,  133 => 33,  127 => 32,  124 => 31,  119 => 29,  113 => 27,  107 => 24,  104 => 23,  98 => 21,  90 => 19,  87 => 18,  85 => 17,  80 => 15,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"AppBundle:Frontend:_layout.html.twig\" %}

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
            {{ form_start(focus_message_form) }}
                <div class=\"blog-post-comment-add\">
                    {% if focusMessage %}
                        {% if focusMessage.user %}
                            <h5>{{ 'reply_to' |trans({}, 'focusgroup') }} {{ focusMessage.user.firstname }}</h5>
                        {% else %}
                            <h5>{{ 'reply_to_syres' |trans({}, 'focusgroup') }}</h5>
                        {% endif %}
                        <p>
                            {{ focusMessage.content }}
                        </p>
                    {% else %}
                        <h5>{{ focusGroup.survey.name }}</h5>

                        {{ focusGroup.article | raw }}
                    {% endif %}

                    <strong>{{ 'my_message' |trans({}, 'focusgroup') }}</strong><em>{{ 'required' |trans({}, 'focusgroup') }}</em>
                    {{ form_widget(focus_message_form.content) }}
                </div>

                <button type=\"submit\" class=\"button button-green button-right full-top full-bottom hardfix\">{{ 'send' |trans({}, 'focusgroup') }}</button>
                <a href=\"{{ path('frontend_focusgroup_show', {'id': focusGroup.id}) }}\" class=\"button button-grey button-right full-top full-bottom\">{{ 'back' |trans({}, 'focusgroup') }}</a>
            {{ form_end(focus_message_form) }}
        </div>
    </div>
{% endblock %}", "frontend/FocusGroup/reply.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/FocusGroup/reply.html.twig");
    }
}
