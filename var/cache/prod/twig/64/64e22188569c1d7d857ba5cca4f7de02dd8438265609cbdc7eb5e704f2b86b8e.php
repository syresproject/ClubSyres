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

/* frontend/FocusGroup/show.html.twig */
class __TwigTemplate_c80352ca9df11bbd32d33ba18f2084293dcf8fb85b7a96be5c97bc3dfd4b929d extends Template
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
        $this->parent = $this->loadTemplate("frontend/_layout.html.twig", "frontend/FocusGroup/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <div class=\"header-clear-large\"></div>

    <div class=\"content\">
        <div class=\"container heading-style-5\">
            <h4 class=\"heading-title\">Focus group</h4>
            <i class=\"fa fa-align-left heading-icon\"></i>
            <div class=\"line bg-black\"></div>
        </div>

        <div class=\"blog-post-comments full-bottom\">
            ";
        // line 15
        echo twig_include($this->env, $context, "frontend/_widgets/flash_notifications.html.twig");
        echo "

            <div class=\"container-fullscreen heading-style-3\">
                <h3 class=\"heading-title\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["focusGroup"] ?? null), "survey", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "</h3>
                <em class=\"heading-subtitle\">Focus group</em>
                <div class=\"overlay bg-black\"></div>
            </div>

            <div class=\"decoration\"></div>

            ";
        // line 25
        echo twig_get_attribute($this->env, $this->source, ($context["focusGroup"] ?? null), "article", [], "any", false, false, false, 25);
        echo "

            <div class=\"decoration\"></div>

            <div class=\"container\">
                <p class=\"center-text\">
                    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_survey_details", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["focusGroup"] ?? null), "survey", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31)]), "html", null, true);
        echo "\" class=\"button-small button-grey\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("back", [], "focusgroup"), "html", null, true);
        echo "</a>
                    <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_focusgroup_reply", ["focusGroup" => twig_get_attribute($this->env, $this->source, ($context["focusGroup"] ?? null), "id", [], "any", false, false, false, 32)]), "html", null, true);
        echo "\" class=\"button-small button-green\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("comment", [], "focusgroup"), "html", null, true);
        echo "</a>
                </p>
            </div>

            <div class=\"decoration\"></div>

            <div class=\"container-fullscreen heading-style-3\">
                <h3 class=\"heading-title\">";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("comments", [], "focusgroup"), "html", null, true);
        echo "</h3>
                <div class=\"overlay bg-black\"></div>
            </div>

            <div class=\"decoration\"></div>

            ";
        // line 45
        $this->loadTemplate("AppBundle:Frontend/FocusGroup:_message_tree.html.twig", "frontend/FocusGroup/show.html.twig", 45)->display(twig_to_array(["depth" => 0, "focusGroup" =>         // line 47
($context["focusGroup"] ?? null), "focusMessages" =>         // line 48
($context["focusMessages"] ?? null)]));
        // line 50
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "frontend/FocusGroup/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 50,  116 => 48,  115 => 47,  114 => 45,  105 => 39,  93 => 32,  87 => 31,  78 => 25,  68 => 18,  62 => 15,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/FocusGroup/show.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/FocusGroup/show.html.twig");
    }
}
