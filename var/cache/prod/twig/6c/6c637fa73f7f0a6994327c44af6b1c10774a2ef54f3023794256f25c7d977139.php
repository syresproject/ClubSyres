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

/* Backend/Configuration/export.html.twig */
class __TwigTemplate_355d6afd492e8b927e09bb9652fcf87c4bc9f19d18d64026460452d6b5282a51 extends Template
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
        return "AppBundle:Backend:_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("AppBundle:Backend:_layout.html.twig", "Backend/Configuration/export.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h3 class=\"page-title\"> Exporter
        <small>liste des articles</small>
    </h3>
";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet-body\">
                <div class=\"table-toolbar\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"btn-group\">
                                <a id=\"sample_editable_1_new\" class=\"btn sbold green\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_configuration_download");
        echo "\"> Exporter les articles
                                    ";
        // line 19
        echo "                                </a>
                            </div>
                            <div class=\"btn-group\">
                                <a id=\"sample_editable_1_new\" class=\"btn sbold green\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_configuration_export-points");
        echo "\"> Exporter les points
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
";
    }

    public function getTemplateName()
    {
        return "Backend/Configuration/export.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 22,  75 => 19,  71 => 17,  62 => 10,  58 => 9,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Backend/Configuration/export.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/Configuration/export.html.twig");
    }
}
