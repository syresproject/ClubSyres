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

/* frontend/StaticPage/legal_notice.html.twig */
class __TwigTemplate_969fbaf7eb0155d85e49c2b75f464e0903251f7e2d48baa5cad277c42a1388c7 extends Template
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
        $this->parent = $this->loadTemplate("frontend/_layout.html.twig", "frontend/StaticPage/legal_notice.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    <div class=\"header-clear-large\"></div>

    <div class=\"container heading-style-5\" style=\"margin-top: 80px\">
        <h4 class=\"heading-title inline-header\">
            ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("notices", [], "sidebar"), "html", null, true);
        echo "
            ";
        // line 10
        $this->loadTemplate("frontend/header-title.html.twig", "frontend/StaticPage/legal_notice.html.twig", 10)->display($context);
        // line 11
        echo "        </h4>
        <i class=\"fa fa-align-left heading-icon\"></i>
        <div class=\"line bg-black\"></div>
    </div>
    <div class=\"content\">
        <div class=\"container\">
            ";
        // line 17
        echo twig_get_attribute($this->env, $this->source, ($context["legal_notice"] ?? null), "content", [], "any", false, false, false, 17);
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "frontend/StaticPage/legal_notice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 17,  65 => 11,  63 => 10,  59 => 9,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/StaticPage/legal_notice.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/StaticPage/legal_notice.html.twig");
    }
}
