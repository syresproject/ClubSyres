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

/* frontend/Survey/enquete.html.twig */
class __TwigTemplate_d8c4b0e6e99634d3dbc2cc32bd673551b459a114751beca3e820937f4beaa6eb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "frontend/_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("frontend/_layout.html.twig", "frontend/Survey/enquete.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    <div class=\"header-clear-large\"></div>

    <div class=\"content\">
        <div class=\"container heading-style-5\">
            <h4 class=\"heading-title\">";
        // line 10
        echo "MES ENQUÊTES EN COURS ";
        echo "
                ";
        // line 11
        $this->loadTemplate("frontend/header-title.html.twig", "frontend/Survey/enquete.html.twig", 11)->display($context);
        // line 12
        echo "            </h4>
            <div style=\"z-index: -1\">
                <i class=\"fa fa-align-left heading-icon\" style=\"z-index: -1\"></i>
            </div>
            <div class=\"line bg-black\"></div>
        </div>

        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["surveysListByCategory"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 20
            echo "            <div class=\"container\">
                <h5>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "details", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21), "html", null, true);
            echo "</h5>
                <div class=\"decoration\"></div>

                ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "surveys", [], "any", false, false, false, 24));
            foreach ($context['_seq'] as $context["_key"] => $context["surveys"]) {
                // line 25
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["surveys"]);
                foreach ($context['_seq'] as $context["_key"] => $context["survey"]) {
                    // line 26
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_survey_details", ["id" => twig_get_attribute($this->env, $this->source, $context["survey"], "id", [], "any", false, false, false, 26)]), "html", null, true);
                    echo "\" class=\"user-list-item\">
                            <img src=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/tree.svg"), "html", null, true);
                    echo "\" alt=\"img\">
                            <strong>";
                    // line 28
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "name", [], "any", false, false, false, 28), "html", null, true);
                    echo "</strong>
                            <em>
                                ";
                    // line 30
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["survey"], "status", [], "any", false, false, false, 30), 0))) {
                        // line 31
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("coming", [], "survey"), "html", null, true);
                        echo "
                                ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 32
$context["survey"], "status", [], "any", false, false, false, 32), 1))) {
                        // line 33
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inprogress", [], "survey"), "html", null, true);
                        echo "
                                ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 34
$context["survey"], "status", [], "any", false, false, false, 34), 2))) {
                        // line 35
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("focus", [], "survey"), "html", null, true);
                        echo "
                                ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 36
$context["survey"], "status", [], "any", false, false, false, 36), 3))) {
                        // line 37
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("closed", [], "survey"), "html", null, true);
                        echo "
                                ";
                    } else {
                        // line 39
                        echo "                                    ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "name", [], "any", false, false, false, 39), "html", null, true);
                        echo "
                                ";
                    }
                    // line 41
                    echo "                                - #";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "idSurvey", [], "any", false, false, false, 41), "html", null, true);
                    echo "
                            </em>
                            <i class=\"fa fa-chevron-right\"></i>
                        </a>
                        <div class=\"decoration\"></div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['survey'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['surveys'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 50
            echo "            <p class=\"center-text\">
                ";
            // line 51
            echo "Aucune enquête en cours";
            echo "
            </p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "frontend/Survey/enquete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 54,  174 => 51,  171 => 50,  165 => 48,  159 => 47,  146 => 41,  140 => 39,  134 => 37,  132 => 36,  127 => 35,  125 => 34,  120 => 33,  118 => 32,  113 => 31,  111 => 30,  106 => 28,  102 => 27,  97 => 26,  92 => 25,  88 => 24,  82 => 21,  79 => 20,  74 => 19,  65 => 12,  63 => 11,  59 => 10,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/Survey/enquete.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/Survey/enquete.html.twig");
    }
}
