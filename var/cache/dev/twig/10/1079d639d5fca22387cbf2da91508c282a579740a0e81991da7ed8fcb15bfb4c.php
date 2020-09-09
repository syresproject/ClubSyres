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

/* Backend/Configuration/SocialMedia/_form.html.twig */
class __TwigTemplate_3116c7039768f2321d53168c642c7b1a23b31efc43af3f7341c67ee8101f2d60 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/Configuration/SocialMedia/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/Configuration/SocialMedia/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
    <div class=\"form-group\">
        ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "facebook", [], "any", false, false, false, 3), 'label', ["label" => "Facebook", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
        <div class=\"col-md-10\">
            ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "facebook", [], "any", false, false, false, 5), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Facebook"]]);
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "insta", [], "any", false, false, false, 9), 'label', ["label" => "Instagram", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
        <div class=\"col-md-10\">
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "insta", [], "any", false, false, false, 11), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Instagram"]]);
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "site", [], "any", false, false, false, 15), 'label', ["label" => "Site", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
        <div class=\"col-md-10\">
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "site", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Site"]]);
        echo "
        </div>
    </div>
    <button class=\"btn\">";
        // line 20
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 20, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        echo "</button>
";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Backend/Configuration/SocialMedia/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 21,  83 => 20,  77 => 17,  72 => 15,  65 => 11,  60 => 9,  53 => 5,  48 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
    <div class=\"form-group\">
        {{ form_label(form.facebook, null, {'label': 'Facebook', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
        <div class=\"col-md-10\">
            {{ form_widget(form.facebook, {'attr': {'class': 'form-control', 'placeholder' : 'Facebook'}}) }}
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_label(form.insta, null, {'label': 'Instagram', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
        <div class=\"col-md-10\">
            {{ form_widget(form.insta, {'attr': {'class': 'form-control', 'placeholder' : 'Instagram'}}) }}
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_label(form.site, null, {'label': 'Site', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
        <div class=\"col-md-10\">
            {{ form_widget(form.site, {'attr': {'class': 'form-control', 'placeholder' : 'Site'}}) }}
        </div>
    </div>
    <button class=\"btn\">{{ button_label|default('Enregistrer') }}</button>
{{ form_end(form) }}
", "Backend/Configuration/SocialMedia/_form.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/Configuration/SocialMedia/_form.html.twig");
    }
}
