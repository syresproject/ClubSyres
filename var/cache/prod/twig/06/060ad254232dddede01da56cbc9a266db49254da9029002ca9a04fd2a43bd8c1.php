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

/* _widgets/flash_notifications.html.twig */
class __TwigTemplate_4583e870624ef873188f41de15529d1fdb1f56860129c0961bcb485d42d8dd9f extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 1), "flashbag", [], "any", false, false, false, 1), "get", [0 => "success"], "method", false, false, false, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 2
            echo "    <div class=\"static-notification bg-green-dark tap-dismiss\">
        <p>
            <i class=\"fa fa-check\"></i>
            ";
            // line 5
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </p>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 10), "flashbag", [], "any", false, false, false, 10), "get", [0 => "error"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "    <div class=\"static-notification bg-red-dark tap-dismiss\">
        <p>
            <i class=\"fa fa-times\"></i>
            ";
            // line 14
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </p>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "_widgets/flash_notifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 14,  63 => 11,  59 => 10,  56 => 9,  46 => 5,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_widgets/flash_notifications.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/_widgets/flash_notifications.html.twig");
    }
}
