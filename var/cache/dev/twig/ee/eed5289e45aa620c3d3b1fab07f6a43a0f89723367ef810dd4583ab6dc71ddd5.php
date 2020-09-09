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

/* Backend/FocusGroup/access_edit.html.twig */
class __TwigTemplate_5832fece666d771f712e39c3b5edaf20d0f954f7aeb602403a43bfb95d629974 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Backend/_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/FocusGroup/access_edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/FocusGroup/access_edit.html.twig"));

        $this->parent = $this->loadTemplate("Backend/_layout.html.twig", "Backend/FocusGroup/access_edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        // line 4
        echo "    <h3 class=\"page-title\"> Focus Group
        <small>édition d'un accès</small>
    </h3>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div class=\"portlet light bordered\">
        <div class=\"portlet-title\">
            <div class=\"caption\">
                <span class=\"caption-subject font-red-sunglo bold uppercase\">Edition</span>
            </div>
        </div>
        <div class=\"portlet-body form\">
            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["access_form"]) || array_key_exists("access_form", $context) ? $context["access_form"] : (function () { throw new RuntimeError('Variable "access_form" does not exist.', 17, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        // line 19
        echo "
            <div class=\"form-body\">
                <div class=\"form-group\">
                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["access_form"]) || array_key_exists("access_form", $context) ? $context["access_form"] : (function () { throw new RuntimeError('Variable "access_form" does not exist.', 22, $this->source); })()), "access", [], "any", false, false, false, 22), 'label', ["label" => "Accès", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                    <div class=\"col-md-10\">
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["access_form"]) || array_key_exists("access_form", $context) ? $context["access_form"] : (function () { throw new RuntimeError('Variable "access_form" does not exist.', 24, $this->source); })()), "access", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Accès"]]);
        echo "
                    </div>
                </div>
            </div>
            <div class=\"form-actions\">
                <div class=\"row\">
                    <div class=\"col-md-offset-3 col-md-4\">
                        <button class=\"btn green\" type=\"submit\">Enregistrer</button>
                        <a class=\"btn default\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_focusgroup_accesses", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)]), "html", null, true);
        echo "\">Retour</a>
                    </div>
                </div>
            </div>
            ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["access_form"]) || array_key_exists("access_form", $context) ? $context["access_form"] : (function () { throw new RuntimeError('Variable "access_form" does not exist.', 36, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Backend/FocusGroup/access_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 36,  124 => 32,  113 => 24,  108 => 22,  103 => 19,  101 => 17,  92 => 10,  82 => 9,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Backend/_layout.html.twig' %}

{% block page_title %}
    <h3 class=\"page-title\"> Focus Group
        <small>édition d'un accès</small>
    </h3>
{% endblock %}

{% block content %}
    <div class=\"portlet light bordered\">
        <div class=\"portlet-title\">
            <div class=\"caption\">
                <span class=\"caption-subject font-red-sunglo bold uppercase\">Edition</span>
            </div>
        </div>
        <div class=\"portlet-body form\">
            {{ form_start(access_form, {'attr' : {
                'class' : 'form-horizontal'
            }}) }}
            <div class=\"form-body\">
                <div class=\"form-group\">
                    {{ form_label(access_form.access, null, {'label': 'Accès', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                    <div class=\"col-md-10\">
                        {{ form_widget(access_form.access, {'attr': {'class': 'form-control', 'placeholder' : 'Accès'}}) }}
                    </div>
                </div>
            </div>
            <div class=\"form-actions\">
                <div class=\"row\">
                    <div class=\"col-md-offset-3 col-md-4\">
                        <button class=\"btn green\" type=\"submit\">Enregistrer</button>
                        <a class=\"btn default\" href=\"{{ path('backend_focusgroup_accesses', {id: survey.id}) }}\">Retour</a>
                    </div>
                </div>
            </div>
            {{ form_end(access_form) }}
        </div>
    </div>
{% endblock %}
", "Backend/FocusGroup/access_edit.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/FocusGroup/access_edit.html.twig");
    }
}
