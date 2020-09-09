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

/* Backend/User/import.html.twig */
class __TwigTemplate_f7c98a3891885a5aec1645be466a7c25a9e08b31967950cdb9a3994430559596 extends Template
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
        $this->parent = $this->loadTemplate("Backend/_layout.html.twig", "Backend/User/import.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h3 class=\"page-title\"> Import
        <small>import de panélistes</small>
    </h3>
";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
    <div class=\"portlet light bordered\">
        <div class=\"portlet-title\">
            <div class=\"caption\">
                <span class=\"caption-subject font-red-sunglo bold uppercase\">Import</span>
            </div>
            
        </div>

        <div class=\"center\">
            ";
        // line 20
        echo twig_include($this->env, $context, "/_widgets/flash_notifications.html.twig");
        echo "

            ";
        // line 22
        if ((isset($context["arrayProblem"]) || array_key_exists("arrayProblem", $context))) {
            // line 23
            echo "                <p>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["arrayProblem"] ?? null)), "html", null, true);
            echo " lignes trouvées</p>
            ";
        }
        // line 25
        echo "        </div>

        <div class=\"portlet-body form\">
            ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        // line 30
        echo "
            <div class=\"form-body\">
                <div class=\"form-group\">
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 33), 'label', ["label" => "Fichier", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                    <div class=\"col-md-10\">
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "", "placeholder" => "Fichier"]]);
        echo "
                    </div>
                </div>
            </div>
            <div class=\"alert-danger\">Fichier en CSV uniquement (colonnes séparés par des ;)</div>

            <div class=\"form-actions\">
                <div class=\"row\">
                    <div class=\"col-md-offset-3 col-md-4\">
                        <button class=\"btn green\" type=\"submit\">Importer</button>
                        <a class=\"btn default\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
        echo "\">Return</a>
                    </div>
                </div>
            </div>
            ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Backend/User/import.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 49,  117 => 45,  104 => 35,  99 => 33,  94 => 30,  92 => 28,  87 => 25,  81 => 23,  79 => 22,  74 => 20,  62 => 10,  58 => 9,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Backend/User/import.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/User/import.html.twig");
    }
}
