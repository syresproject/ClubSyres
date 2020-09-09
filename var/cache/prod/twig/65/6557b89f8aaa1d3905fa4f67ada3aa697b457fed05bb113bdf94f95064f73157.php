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
class __TwigTemplate_3845b78942a082ba5d34c3569ac43b616b56858379cd55406db1f5f39654734d extends Template
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "numeroLien", [], "any", false, false, false, 19), 'label', ["label" => "Numero", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
        <div class=\"col-md-10\">
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "numeroLien", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Numero"]]);
        echo "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "type", [], "any", false, false, false, 26), 'label', ["label" => "Type", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
        <div class=\"col-md-10\">
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "type", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Lien du questionnaire"]]);
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "name", [], "any", false, false, false, 32), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("name", [], "bo_formlabel"), "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
        <div class=\"col-md-10\">
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "name", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom du questionnaire"]]);
        echo "

        </div>

    </div>

    <div class=\"form-group col-md-offset-3\">
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "dateUn", [], "any", false, false, false, 41), 'label', ["label" => "Date du test", "label_attr" => ["class" => "col-md-2 control-label "]]);
        echo "

        <div class=\"col-md-10 \">
            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "dateUn", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom du questionnaire"]]);
        echo "
        </div>
    </div>


    <div class=\"form-group\">
        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "link", [], "any", false, false, false, 50), 'label', ["label" => "Url", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
        <div class=\"col-md-10\">
            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "link", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Lien du questionnaire"]]);
        echo "
            <div class=\"help-block text-right\"><a href=\"#\" class=\"delete-link\">Retirer le questionnaire</a></div>
        </div>
    </div>
</div>";
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
        return array (  117 => 52,  112 => 50,  103 => 44,  97 => 41,  87 => 34,  82 => 32,  75 => 28,  70 => 26,  62 => 21,  57 => 19,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Backend/Survey/_prototypes/link.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/Survey/_prototypes/link.html.twig");
    }
}
