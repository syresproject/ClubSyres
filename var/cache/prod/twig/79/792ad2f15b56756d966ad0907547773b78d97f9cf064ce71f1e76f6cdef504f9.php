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

/* frontend/Survey/closed_test.html.twig */
class __TwigTemplate_002c6a2036ddc0308236f2ac3da19a3c07ba69c20c7f06a9d19efb1e29c8aae7 extends Template
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
        $this->parent = $this->loadTemplate("frontend/_layout.html.twig", "frontend/Survey/closed_test.html.twig", 1);
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
            <h4 class=\"heading-title inline-header\">";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tests_closed", [], "survey"), "html", null, true);
        echo "</h4>
            <div class=\"inline-button\">
                <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_survey_tests");
        echo "\">
                    ";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tests_inprogress", [], "survey"), "html", null, true);
        echo "
                </a>

            </div>
            <i class=\"fa fa-align-left heading-icon\"></i>
            <div class=\"line bg-black\"></div>
        </div>

        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["closedSurveysListByCategory"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 23
            echo "            <div class=\"container\">
                <h5>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "details", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
            echo "</h5>
                <div class=\"decoration\"></div>

                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "surveys", [], "any", false, false, false, 27));
            foreach ($context['_seq'] as $context["_key"] => $context["surveys"]) {
                // line 28
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["surveys"]);
                foreach ($context['_seq'] as $context["_key"] => $context["survey"]) {
                    // line 29
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_survey_details", ["id" => twig_get_attribute($this->env, $this->source, $context["survey"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                    echo "\" class=\"user-list-item\">
                            <img src=\"";
                    // line 30
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/tree.svg"), "html", null, true);
                    echo "\" alt=\"img\">
                            <strong>";
                    // line 31
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "name", [], "any", false, false, false, 31), "html", null, true);
                    echo "</strong>
                            <em>
                                ";
                    // line 33
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["survey"], "status", [], "any", false, false, false, 33), 0))) {
                        // line 34
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("coming", [], "survey"), "html", null, true);
                        echo "
                                ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 35
$context["survey"], "status", [], "any", false, false, false, 35), 1))) {
                        // line 36
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inprogress", [], "survey"), "html", null, true);
                        echo "
                                ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 37
$context["survey"], "status", [], "any", false, false, false, 37), 2))) {
                        // line 38
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("focus", [], "survey"), "html", null, true);
                        echo "
                                ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 39
$context["survey"], "status", [], "any", false, false, false, 39), 3))) {
                        // line 40
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("closed", [], "survey"), "html", null, true);
                        echo "
                                ";
                    } else {
                        // line 42
                        echo "                                    ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "name", [], "any", false, false, false, 42), "html", null, true);
                        echo "
                                ";
                    }
                    // line 44
                    echo "                                - #";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "idSurvey", [], "any", false, false, false, 44), "html", null, true);
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
                // line 50
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['surveys'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            echo "            <p class=\"center-text\">
                ";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("no_closed_test", [], "survey"), "html", null, true);
            echo "
            </p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "frontend/Survey/closed_test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 57,  180 => 54,  177 => 53,  171 => 51,  165 => 50,  152 => 44,  146 => 42,  140 => 40,  138 => 39,  133 => 38,  131 => 37,  126 => 36,  124 => 35,  119 => 34,  117 => 33,  112 => 31,  108 => 30,  103 => 29,  98 => 28,  94 => 27,  88 => 24,  85 => 23,  80 => 22,  69 => 14,  65 => 13,  60 => 11,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/Survey/closed_test.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/Survey/closed_test.html.twig");
    }
}
