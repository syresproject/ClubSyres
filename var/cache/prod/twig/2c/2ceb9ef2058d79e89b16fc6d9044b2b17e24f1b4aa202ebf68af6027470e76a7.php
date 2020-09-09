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

/* Backend/Category/edit.html.twig */
class __TwigTemplate_b66c38757716c42e6076a4729fe380e00f1773d77fe3757755d63e498930c988 extends Template
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
        $this->parent = $this->loadTemplate("Backend/_layout.html.twig", "Backend/Category/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h3 class=\"page-title\"> Catégories
        <small>édition d'une catégorie</small>
    </h3>
";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <div class=\"portlet light bordered\">

        <div class=\"portlet-title\">
            <div class=\"caption\">
                <span class=\"caption-subject font-red-sunglo bold uppercase\">Edition</span>
            </div>
            <div class=\"actions\">
                ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_start');
        echo "
                    <button class=\"btn btn-circle btn-icon-only btn-default\" type=\"submit\">
                        <i class=\"icon-trash\"></i>
                    </button>
                ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_end');
        echo "
            </div>
        </div>
        <div class=\"portlet-body form\">
            ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        // line 27
        echo "
                <div class=\"form-body\">
                    <div class=\"form-group\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "name", [], "any", false, false, false, 30), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("name", [], "bo_formlabel"), "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "name", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom"]]);
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"form-actions\">
                    <div class=\"row\">
                        <div class=\"col-md-offset-3 col-md-4\">
                            <button class=\"btn green\" type=\"submit\">Enregistrer</button>
                            <a class=\"btn default\" href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_index");
        echo "\">Retour</a>
                        </div>
                    </div>
                </div>
            ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_end');
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Backend/Category/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 44,  108 => 40,  97 => 32,  92 => 30,  87 => 27,  85 => 25,  78 => 21,  71 => 17,  62 => 10,  58 => 9,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Backend/Category/edit.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/Category/edit.html.twig");
    }
}
