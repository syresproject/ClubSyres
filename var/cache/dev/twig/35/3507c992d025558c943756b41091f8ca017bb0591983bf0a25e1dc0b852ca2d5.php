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

/* Backend/Configuration/legal_notice.html.twig */
class __TwigTemplate_4edf44f1079ab13932c1196c8c2ca4ed16394fdafa5c803d0be895262e477950 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/Configuration/legal_notice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/Configuration/legal_notice.html.twig"));

        $this->parent = $this->loadTemplate("Backend/_layout.html.twig", "Backend/Configuration/legal_notice.html.twig", 1);
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
        echo "    <h3 class=\"page-title\"> Mentions légales
        <small>édition des mentions légales</small>
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
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["legal_notice_form"]) || array_key_exists("legal_notice_form", $context) ? $context["legal_notice_form"] : (function () { throw new RuntimeError('Variable "legal_notice_form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        // line 12
        echo "
    <div class=\"portlet light bordered\">

        ";
        // line 16
        echo "        <div class=\"portlet-title\">
            <div class=\"caption\">
                <span class=\"caption-subject font-red-sunglo bold uppercase\">Mentions légales</span>
            </div>
        </div>
        <div class=\"portlet-body form\">
            <div class=\"form-body\">
                <div class=\"form-group\">
                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["legal_notice_form"]) || array_key_exists("legal_notice_form", $context) ? $context["legal_notice_form"] : (function () { throw new RuntimeError('Variable "legal_notice_form" does not exist.', 24, $this->source); })()), "title", [], "any", false, false, false, 24), 'label', ["label" => "Titre", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                    <div class=\"col-md-10\">
                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["legal_notice_form"]) || array_key_exists("legal_notice_form", $context) ? $context["legal_notice_form"] : (function () { throw new RuntimeError('Variable "legal_notice_form" does not exist.', 26, $this->source); })()), "title", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Titre"]]);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["legal_notice_form"]) || array_key_exists("legal_notice_form", $context) ? $context["legal_notice_form"] : (function () { throw new RuntimeError('Variable "legal_notice_form" does not exist.', 30, $this->source); })()), "content", [], "any", false, false, false, 30), 'label', ["label" => "Contenu", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                    <div class=\"col-md-10\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["legal_notice_form"]) || array_key_exists("legal_notice_form", $context) ? $context["legal_notice_form"] : (function () { throw new RuntimeError('Variable "legal_notice_form" does not exist.', 32, $this->source); })()), "content", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Contenu"]]);
        echo "
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 39
        echo "        <div class=\"form-actions\">
            <div class=\"row\">
                <div class=\"col-md-offset-3 col-md-4\">
                    <button class=\"btn green\" type=\"submit\">Enregistrer</button>
                    <a class=\"btn default\" href=\"";
        // line 43
        echo "\">Retour</a>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["legal_notice_form"]) || array_key_exists("legal_notice_form", $context) ? $context["legal_notice_form"] : (function () { throw new RuntimeError('Variable "legal_notice_form" does not exist.', 48, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Backend/Configuration/legal_notice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 48,  142 => 43,  136 => 39,  127 => 32,  122 => 30,  115 => 26,  110 => 24,  100 => 16,  95 => 12,  92 => 10,  82 => 9,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Backend/_layout.html.twig' %}

{% block page_title %}
    <h3 class=\"page-title\"> Mentions légales
        <small>édition des mentions légales</small>
    </h3>
{% endblock %}

{% block content %}
    {{ form_start(legal_notice_form, {'attr' : {
        'class' : 'form-horizontal'
    }}) }}
    <div class=\"portlet light bordered\">

        {# GENERALE #}
        <div class=\"portlet-title\">
            <div class=\"caption\">
                <span class=\"caption-subject font-red-sunglo bold uppercase\">Mentions légales</span>
            </div>
        </div>
        <div class=\"portlet-body form\">
            <div class=\"form-body\">
                <div class=\"form-group\">
                    {{ form_label(legal_notice_form.title, null, {'label': 'Titre', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                    <div class=\"col-md-10\">
                        {{ form_widget(legal_notice_form.title, {'attr': {'class': 'form-control', 'placeholder' : 'Titre'}}) }}
                    </div>
                </div>
                <div class=\"form-group\">
                    {{ form_label(legal_notice_form.content, null, {'label': 'Contenu', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                    <div class=\"col-md-10\">
                        {{ form_widget(legal_notice_form.content, {'attr': {'class': 'form-control', 'placeholder' : 'Contenu'}}) }}
                    </div>
                </div>
            </div>
        </div>

        {# SAVE #}
        <div class=\"form-actions\">
            <div class=\"row\">
                <div class=\"col-md-offset-3 col-md-4\">
                    <button class=\"btn green\" type=\"submit\">Enregistrer</button>
                    <a class=\"btn default\" href=\"{#{ path('backend_configuration_legal_notice') }#}\">Retour</a>
                </div>
            </div>
        </div>
    </div>
    {{ form_end(legal_notice_form) }}

{% endblock %}


", "Backend/Configuration/legal_notice.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/Configuration/legal_notice.html.twig");
    }
}
