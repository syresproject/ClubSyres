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

/* Backend/Survey/_prototypes/link.html.twig */
class __TwigTemplate_5b953a35136ff27b4d302a4438effeaad19bdde084a686f501636a3cf4fa0b0a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/Survey/_prototypes/link.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/Survey/_prototypes/link.html.twig"));

        // line 1
        echo "<style>
    .labelDate{
        padding-left: 2px;
        margin-left: inherit;
    }

    .linkDate{
        margin-left: 4px;
        padding: 0px;
        border: none;
    }
    .divColDate{
        padding-left: 52px;
    }
</style>

<div class=\"delete-parent\">
    <div class=\"form-group\">
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 19, $this->source); })()), "numeroLien", [], "any", false, false, false, 19), 'label', ["label" => "Numero", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
        <div class=\"col-md-10\">
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 21, $this->source); })()), "numeroLien", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Numero"]]);
        echo "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 26, $this->source); })()), "type", [], "any", false, false, false, 26), 'label', ["label" => "Type", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
        <div class=\"col-md-10\">
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 28, $this->source); })()), "type", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Lien du questionnaire"]]);
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 32, $this->source); })()), "name", [], "any", false, false, false, 32), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("name", [], "bo_formlabel"), "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
        <div class=\"col-md-10\">
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom du questionnaire"]]);
        echo "

        </div>

    </div>

    <div class=\"form-group col-md-offset-3\">
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 41, $this->source); })()), "dateUn", [], "any", false, false, false, 41), 'label', ["label" => "Date du test", "label_attr" => ["class" => "col-md-2 control-label "]]);
        echo "

        <div class=\"col-md-10 \">
            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 44, $this->source); })()), "dateUn", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom du questionnaire"]]);
        echo "
        </div>
    </div>


    <div class=\"form-group\">
        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 50, $this->source); })()), "link", [], "any", false, false, false, 50), 'label', ["label" => "Url", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
        <div class=\"col-md-10\">
            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 52, $this->source); })()), "link", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Lien du questionnaire"]]);
        echo "
            <div class=\"help-block text-right\"><a href=\"#\" class=\"delete-link\">Retirer le questionnaire</a></div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Backend/Survey/_prototypes/link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 52,  118 => 50,  109 => 44,  103 => 41,  93 => 34,  88 => 32,  81 => 28,  76 => 26,  68 => 21,  63 => 19,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    .labelDate{
        padding-left: 2px;
        margin-left: inherit;
    }

    .linkDate{
        margin-left: 4px;
        padding: 0px;
        border: none;
    }
    .divColDate{
        padding-left: 52px;
    }
</style>

<div class=\"delete-parent\">
    <div class=\"form-group\">
        {{ form_label(link.numeroLien, null, {'label': 'Numero', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
        <div class=\"col-md-10\">
            {{ form_widget(link.numeroLien, {'attr': {'class': 'form-control', 'placeholder' : 'Numero'}}) }}
        </div>
    </div>

    <div class=\"form-group\">
        {{ form_label(link.type, null, {'label': 'Type', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
        <div class=\"col-md-10\">
            {{ form_widget(link.type, {'attr': {'class': 'form-control', 'placeholder' : 'Lien du questionnaire'}}) }}
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_label(link.name, null, {'label': 'name' |trans({}, 'bo_formlabel'), 'label_attr': {'class': 'col-md-2 control-label'}}) }}
        <div class=\"col-md-10\">
            {{ form_widget(link.name, {'attr': {'class': 'form-control', 'placeholder' : 'Nom du questionnaire'}}) }}

        </div>

    </div>

    <div class=\"form-group col-md-offset-3\">
        {{ form_label(link.dateUn, null, {'label': 'Date du test', 'label_attr': {'class': 'col-md-2 control-label '}}) }}

        <div class=\"col-md-10 \">
            {{ form_widget(link.dateUn, {'attr': {'class': 'form-control', 'placeholder' : 'Nom du questionnaire'}}) }}
        </div>
    </div>


    <div class=\"form-group\">
        {{ form_label(link.link, null, {'label': 'Url', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
        <div class=\"col-md-10\">
            {{ form_widget(link.link, {'attr': {'class': 'form-control', 'placeholder' : 'Lien du questionnaire'}}) }}
            <div class=\"help-block text-right\"><a href=\"#\" class=\"delete-link\">Retirer le questionnaire</a></div>
        </div>
    </div>
</div>", "Backend/Survey/_prototypes/link.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/Survey/_prototypes/link.html.twig");
    }
}
