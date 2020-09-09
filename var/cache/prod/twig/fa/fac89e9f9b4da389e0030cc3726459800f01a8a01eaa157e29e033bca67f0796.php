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

/* p_deux_ins/new.html.twig */
class __TwigTemplate_1c863bd23ae4ce6d65b56cae7dfca5d50db475440270527a31f7b384c0c59a9a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "p_deux_ins/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "New PDeuxIns";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    <h1>Create new PDeuxIns</h1>


    ";
        // line 10
        echo twig_include($this->env, $context, "p_deux_ins/_form.html.twig");
        echo "
    ";
        // line 11
        echo twig_include($this->env, $context, "form_trois/_form.html.twig");
        echo "


    <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("p_deux_ins_index");
        echo "\">back to list</a>
";
    }

    public function getTemplateName()
    {
        return "p_deux_ins/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 14,  70 => 11,  66 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "p_deux_ins/new.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/p_deux_ins/new.html.twig");
    }
}
