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

/* frontend/Survey/test.html.twig */
class __TwigTemplate_016ca2bf8044e1d50e8c15ef1d067c41d8dc786b86ed651519b0a9834a7d5d1e extends Template
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
        $this->parent = $this->loadTemplate("frontend/_layout.html.twig", "frontend/Survey/test.html.twig", 1);
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
            <h4 class=\"heading-title inline-header\">
                ";
        // line 14
        echo "MON TEST EN COURS";
        echo "
            ";
        // line 15
        $this->loadTemplate("frontend/header-title.html.twig", "frontend/Survey/test.html.twig", 15)->display($context);
        // line 16
        echo "            </h4>
            <div class=\"inline-button\">
                <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_survey_closed_tests");
        echo "\">
                    ";
        // line 19
        echo "Tests achevés";
        echo "
                </a>
                <a href=\"";
        // line 21
        echo "\">
                    ";
        // line 23
        echo "                </a>
            </div>
            <div style=\"z-index: -1\">
                <i class=\"fa fa-align-left heading-icon\" style=\"z-index: -1\"></i>
            </div>
            <div class=\"line bg-black\"></div>
        </div>

        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["surveysListByCategory"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 32
            echo "            <div class=\"container\">
                <h5>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "details", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33), "html", null, true);
            echo "</h5>
                <div class=\"decoration\"></div>

                ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "surveys", [], "any", false, false, false, 36));
            foreach ($context['_seq'] as $context["_key"] => $context["surveys"]) {
                // line 37
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["surveys"]);
                foreach ($context['_seq'] as $context["_key"] => $context["survey"]) {
                    // line 38
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_survey_details", ["id" => twig_get_attribute($this->env, $this->source, $context["survey"], "id", [], "any", false, false, false, 38)]), "html", null, true);
                    echo "\" class=\"user-list-item\">
                            <img src=\"";
                    // line 39
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/tree.svg"), "html", null, true);
                    echo "\" alt=\"img\">
                            <strong>";
                    // line 40
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "name", [], "any", false, false, false, 40), "html", null, true);
                    echo "</strong>
                            <em>
                                ";
                    // line 42
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["survey"], "status", [], "any", false, false, false, 42), 0))) {
                        // line 43
                        echo "                                    ";
                        echo "coming";
                        echo "
                                ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 44
$context["survey"], "status", [], "any", false, false, false, 44), 1))) {
                        // line 45
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inprogress", [], "survey"), "html", null, true);
                        echo "
                                ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 46
$context["survey"], "status", [], "any", false, false, false, 46), 2))) {
                        // line 47
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("focus", [], "survey"), "html", null, true);
                        echo "
                                ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 48
$context["survey"], "status", [], "any", false, false, false, 48), 3))) {
                        // line 49
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("closed", [], "survey"), "html", null, true);
                        echo "
                                ";
                    } else {
                        // line 51
                        echo "                                    ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "name", [], "any", false, false, false, 51), "html", null, true);
                        echo "
                                ";
                    }
                    // line 53
                    echo "                                - #";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "idSurvey", [], "any", false, false, false, 53), "html", null, true);
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
                // line 59
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['surveys'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 62
            echo "            <p class=\"center-text\">
                ";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Aucun test en cours ", []), "html", null, true);
            echo "
            </p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "frontend/Survey/test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 66,  195 => 63,  192 => 62,  186 => 60,  180 => 59,  167 => 53,  161 => 51,  155 => 49,  153 => 48,  148 => 47,  146 => 46,  141 => 45,  139 => 44,  134 => 43,  132 => 42,  127 => 40,  123 => 39,  118 => 38,  113 => 37,  109 => 36,  103 => 33,  100 => 32,  95 => 31,  85 => 23,  82 => 21,  77 => 19,  73 => 18,  69 => 16,  67 => 15,  63 => 14,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/Survey/test.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/Survey/test.html.twig");
    }
}
