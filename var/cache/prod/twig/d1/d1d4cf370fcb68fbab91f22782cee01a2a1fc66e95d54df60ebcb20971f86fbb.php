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
class __TwigTemplate_5dc3776c94436b06fce4f79e6ef5ac3b0dca03fc8323ae86161f886c8856f0aa extends Template
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
        $this->parent = $this->loadTemplate("Backend/_layout.html.twig", "Backend/Configuration/legal_notice.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h3 class=\"page-title\"> Mentions légales
        <small>édition des mentions légales</small>
    </h3>
";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["legal_notice_form"] ?? null), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["legal_notice_form"] ?? null), "title", [], "any", false, false, false, 24), 'label', ["label" => "Titre", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                    <div class=\"col-md-10\">
                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["legal_notice_form"] ?? null), "title", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Titre"]]);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["legal_notice_form"] ?? null), "content", [], "any", false, false, false, 30), 'label', ["label" => "Contenu", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                    <div class=\"col-md-10\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["legal_notice_form"] ?? null), "content", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Contenu"]]);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["legal_notice_form"] ?? null), 'form_end');
        echo "

";
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
        return array (  119 => 48,  112 => 43,  106 => 39,  97 => 32,  92 => 30,  85 => 26,  80 => 24,  70 => 16,  65 => 12,  62 => 10,  58 => 9,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Backend/Configuration/legal_notice.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/Configuration/legal_notice.html.twig");
    }
}
