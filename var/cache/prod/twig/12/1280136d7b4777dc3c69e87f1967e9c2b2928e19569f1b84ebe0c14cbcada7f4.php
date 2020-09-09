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

/* Backend/Configuration/SocialMedia/edit.html.twig */
class __TwigTemplate_2b37ffdf1388890a5182a3572332fcf372ff4ce894e53e16e1189f414266a102 extends Template
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
        $this->parent = $this->loadTemplate("Backend/_layout.html.twig", "Backend/Configuration/SocialMedia/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Edit Configuration";
    }

    // line 6
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <style>
        .form-group{
            margin-bottom: 10px;
        }
    </style>
";
    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "

    <h1>Edit Configuration</h1>

    ";
        // line 19
        echo twig_include($this->env, $context, "Backend/Configuration/SocialMedia/_form.html.twig", ["button_label" => "Update"]);
        echo "

    <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_configuration_index");
        echo "\">Retour</a>

    ";
        // line 23
        echo twig_include($this->env, $context, "Backend/Configuration/SocialMedia/_delete_form.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "Backend/Configuration/SocialMedia/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 23,  88 => 21,  83 => 19,  75 => 15,  71 => 14,  59 => 7,  55 => 6,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Backend/Configuration/SocialMedia/edit.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/Configuration/SocialMedia/edit.html.twig");
    }
}
