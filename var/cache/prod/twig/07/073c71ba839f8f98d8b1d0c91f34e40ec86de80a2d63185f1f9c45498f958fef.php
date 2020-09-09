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
class __TwigTemplate_ea7db829bece101fd5a5a8d93ed821f9e8a5f00e14e44b5c2bfc3e2b856a63ae extends Template
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
        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
    <div class=\"form-group\">
        ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "facebook", [], "any", false, false, false, 3), 'label', ["label" => "Facebook", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
        <div class=\"col-md-10\">
            ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "facebook", [], "any", false, false, false, 5), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Facebook"]]);
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "insta", [], "any", false, false, false, 9), 'label', ["label" => "Instagram", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
        <div class=\"col-md-10\">
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "insta", [], "any", false, false, false, 11), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Instagram"]]);
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "site", [], "any", false, false, false, 15), 'label', ["label" => "Site", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
        <div class=\"col-md-10\">
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "site", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Site"]]);
        echo "
        </div>
    </div>
    <button class=\"btn\">";
        // line 20
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter(($context["button_label"] ?? null), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        echo "</button>
";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
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
        return array (  81 => 21,  77 => 20,  71 => 17,  66 => 15,  59 => 11,  54 => 9,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Backend/Configuration/SocialMedia/_form.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/Configuration/SocialMedia/_form.html.twig");
    }
}
