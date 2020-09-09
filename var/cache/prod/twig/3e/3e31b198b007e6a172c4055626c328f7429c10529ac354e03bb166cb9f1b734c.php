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

/* Backend/CategoryHabit/edit.html.twig */
class __TwigTemplate_a21fd0129df9e2491a55021a7fd7094d88c285c62988035f03e8a90e2476f477 extends Template
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
        return "AppBundle:Backend:_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("AppBundle:Backend:_layout.html.twig", "Backend/CategoryHabit/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h3 class=\"page-title\"> CategoryHabit
        <small>édition de CategoryHabit</small>
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
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_start');
        echo "
                    <button class=\"btn btn-circle btn-icon-only btn-default\" type=\"submit\">
                        <i class=\"icon-trash\"></i>
                    </button>
                ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_end');
        echo "
            </div>
        </div>
        <div class=\"portlet-body form\">
            ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        // line 26
        echo "
                <div class=\"form-body\">
                    <div class=\"form-group\">
                        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "name", [], "any", false, false, false, 29), 'label', ["label" => "Name", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "name", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Name"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "visible", [], "any", false, false, false, 35), 'label', ["label" => "Visible", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "visible", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Visible"]]);
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"form-actions\">
                    <div class=\"row\">
                        <div class=\"col-md-offset-3 col-md-4\">
                            <button class=\"btn green\" type=\"submit\">Enregistrer</button>
                            <a class=\"btn default\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_categoryhabit_index");
        echo "\">Retour</a>
                        </div>
                    </div>
                </div>
            ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_end');
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Backend/CategoryHabit/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 49,  119 => 45,  108 => 37,  103 => 35,  96 => 31,  91 => 29,  86 => 26,  84 => 24,  77 => 20,  70 => 16,  62 => 10,  58 => 9,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Backend/CategoryHabit/edit.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/CategoryHabit/edit.html.twig");
    }
}
