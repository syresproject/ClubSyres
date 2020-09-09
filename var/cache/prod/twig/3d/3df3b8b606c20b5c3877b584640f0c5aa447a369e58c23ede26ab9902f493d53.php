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

/* Backend/CategoryHabit/show.html.twig */
class __TwigTemplate_596661520b1e7d281af968a6690fea87c00f062d226812c14a0131d183f3db53 extends Template
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
        $this->parent = $this->loadTemplate("Backend/_layout.html.twig", "Backend/CategoryHabit/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h3 class=\"page-title\"> CategoryHabit
        <small>affichage de CategoryHabit</small>
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
                <span class=\"caption-subject font-red-sunglo bold uppercase\">Informations</span>
            </div>
        </div>
        <div class=\"portlet-body form\">
            <form action=\"#\" class=\"form-horizontal\">
                <div class=\"form-body\">
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\">Name</label>
                        <div class=\"col-md-4\">
                            <p class=\"form-control-static\">
                                ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categoryHabit"] ?? null), "name", [], "any", false, false, false, 23), "html", null, true);
        echo "
                            </p>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\">Sous-catégories de cette catégorie</label>
                        <div class=\"col-md-4\">
                            <p class=\"form-control-static\">
                                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["headerHabits"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["headerHabit"]) {
            // line 32
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["headerHabit"], "name", [], "any", false, false, false, 32), "html", null, true);
            echo "<br/>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['headerHabit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                            </p>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\">Visible</label>
                        <div class=\"col-md-4\">
                            <p class=\"form-control-static\">
                                ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, ($context["categoryHabit"] ?? null), "visible", [], "any", false, false, false, 41)) {
            echo "Yes";
        } else {
            echo "No";
        }
        // line 42
        echo "                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"form-actions\">
                    <div class=\"row\">
                        <div class=\"col-md-offset-3 col-md-9\">
                            <a class=\"btn default\" href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_categoryhabit_index");
        echo "\">Retour</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Backend/CategoryHabit/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 49,  116 => 42,  110 => 41,  101 => 34,  92 => 32,  88 => 31,  77 => 23,  62 => 10,  58 => 9,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Backend/CategoryHabit/show.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/CategoryHabit/show.html.twig");
    }
}
