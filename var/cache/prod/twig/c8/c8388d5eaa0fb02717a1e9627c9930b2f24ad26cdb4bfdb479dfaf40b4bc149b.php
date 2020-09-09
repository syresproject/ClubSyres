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

/* frontend/FocusGroup/_focus_block.html.twig */
class __TwigTemplate_f425dcac6a54282cf7d314961838a319cb8603731a4d398548f07246ce9fbcf5 extends Template
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
        echo "<div class=\"container-fullscreen heading-style-3\">
    <h3 class=\"heading-title\">Focus test</h3>
    <div class=\"overlay bg-gray-dark\"></div>
</div>

<div class=\"decoration\"></div>

<div class=\"container\">
    ";
        // line 10
        echo "    ";
        if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "status", [], "any", false, false, false, 10), 2)) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "status", [], "any", false, false, false, 10), 3)))) {
            // line 11
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "focusGroup", [], "any", false, false, false, 11)) {
                // line 12
                echo "            ";
                if (($context["focusAccess"] ?? null)) {
                    // line 13
                    echo "                <p class=\"center-text\">
                    ";
                    // line 14
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("discuss_with_other_panelists", [], "focusgroup"), "html", null, true);
                    echo " :
                </p>
                <p class=\"center-text\">
                    <a href=\"";
                    // line 17
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_focusgroup_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "focusGroup", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17)]), "html", null, true);
                    echo "\" class=\"button-small button-green\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("access_focus_group", [], "focusgroup"), "html", null, true);
                    echo "</a>
                </p>
            ";
                } else {
                    // line 20
                    echo "                <p class=\"center-text\">
                    ";
                    // line 21
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cannot_access_focus_test", [], "focusgroup"), "html", null, true);
                    echo ".
                </p>
            ";
                }
                // line 24
                echo "        ";
            } else {
                // line 25
                echo "            <p class=\"center-text\">
                ";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("not_yet_accessible_focus_group", [], "focusgroup"), "html", null, true);
                echo "
            </p>
        ";
            }
            // line 29
            echo "    ";
        } else {
            // line 30
            echo "        <p class=\"center-text\">
            ";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("not_yet_accessible_focus_group", [], "focusgroup"), "html", null, true);
            echo "
        </p>
    ";
        }
        // line 34
        echo "</div>

<div class=\"decoration\"></div>";
    }

    public function getTemplateName()
    {
        return "frontend/FocusGroup/_focus_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 34,  100 => 31,  97 => 30,  94 => 29,  88 => 26,  85 => 25,  82 => 24,  76 => 21,  73 => 20,  65 => 17,  59 => 14,  56 => 13,  53 => 12,  50 => 11,  47 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/FocusGroup/_focus_block.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/FocusGroup/_focus_block.html.twig");
    }
}
