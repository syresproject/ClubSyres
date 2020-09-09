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

/* Backend/Configuration/SocialMedia/new.html.twig */
class __TwigTemplate_9174fac23537c8dd08630890539ffe2c3189d275de7cc9c33a88213551de0f5c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
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
        $this->parent = $this->loadTemplate("Backend/_layout.html.twig", "Backend/Configuration/SocialMedia/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Configuration";
    }

    // line 7
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <style>
        .col-md-10{
            padding-bottom: 10px;
        }
    </style>
";
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    <h1 class=\"center-text\" style=\"text-align: center\">Creer Les Liens social</h1>

    ";
        // line 19
        echo twig_include($this->env, $context, "Backend/Configuration/SocialMedia/_form.html.twig");
        echo "

    ";
    }

    public function getTemplateName()
    {
        return "Backend/Configuration/SocialMedia/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 19,  75 => 16,  71 => 15,  59 => 8,  55 => 7,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Backend/Configuration/SocialMedia/new.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/Configuration/SocialMedia/new.html.twig");
    }
}
