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

/* Backend/PanelisteGroup/import.html.twig */
class __TwigTemplate_1618709c4cd22e4ab4867f945920fc18f0e6ad59b837e11d05d702d4ea8db688 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascript' => [$this, 'block_javascript'],
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
        $this->parent = $this->loadTemplate("Backend/_layout.html.twig", "Backend/PanelisteGroup/import.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h3 class=\"page-title\"> Groupes
        <small>import d'un groupe de panélistes</small>
    </h3>

";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        #content{
            min-height: 800px;
        }
    </style>
";
    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "


    <div class=\"portlet light bordered\">
        <div class=\"portlet-title\">
            <div class=\"caption\">
                <span class=\"caption-subject font-red-sunglo bold uppercase\">Association panéliste / groupe</span>
            </div>
        </div>
        <div class=\"center\">
            ";
        // line 29
        echo twig_include($this->env, $context, "/_widgets/flash_notifications.html.twig");
        echo "
        </div>
        <div class=\"portlet-body form\">
            ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        // line 34
        echo "
            <div class=\"form-body\">
                <div class=\"form-group\">
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "group", [], "any", false, false, false, 37), 'label', ["label" => "Groupe", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                    <div class=\"col-md-10\">
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "group", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Groupe"]]);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 43), 'label', ["label" => "Fichier", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                    <div class=\"col-md-10\">
                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "", "placeholder" => "Fichier"]]);
        echo "
                    </div>
                </div>
            </div>
            <div class=\"form-actions\">
                <div class=\"row\">
                    <div class=\"col-md-offset-3 col-md-4\">
                        <button class=\"btn green\" type=\"submit\">Associer</button>
                        <a class=\"btn default\" href=\"";
        // line 53
        echo "\">Retour</a>
                    </div>
                </div>
            </div>
            ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
        </div>
    </div>

    <script
            src=\"https://code.jquery.com/jquery-3.5.1.min.js\"
            integrity=\"sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=\"
            crossorigin=\"anonymous\"></script>
";
    }

    // line 66
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "
        ";
        // line 91
        echo "
     ";
    }

    public function getTemplateName()
    {
        return "Backend/PanelisteGroup/import.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 91,  159 => 67,  155 => 66,  142 => 57,  136 => 53,  125 => 45,  120 => 43,  113 => 39,  108 => 37,  103 => 34,  101 => 32,  95 => 29,  81 => 19,  77 => 18,  65 => 11,  61 => 10,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Backend/PanelisteGroup/import.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/PanelisteGroup/import.html.twig");
    }
}
