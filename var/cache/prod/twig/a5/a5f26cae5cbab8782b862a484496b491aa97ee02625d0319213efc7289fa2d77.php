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

/* frontend/header-title.html.twig */
class __TwigTemplate_d51efd414bf444d3d2b069dfc8673988db17bc879d94b58abc6e095417839ec5 extends Template
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
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/syres-victoria4.jpg"), "html", null, true);
        echo "\" style=\"max-height:90px;display:inline-block;margin:0 0 0 25px;vertical-align:middle;border-radius:60px;\">
";
    }

    public function getTemplateName()
    {
        return "frontend/header-title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/header-title.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/header-title.html.twig");
    }
}
