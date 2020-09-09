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

/* @KnpPaginator/Pagination/semantic_ui_sortable_link.html.twig */
class __TwigTemplate_61f423436bdc3bb218260b72b1680f4ec95e7fdb45290c8f813b7d83b9e46d4b extends Template
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
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
    <span class=\"right floated\">
        ";
        // line 3
        if (($context["sorted"] ?? null)) {
            // line 4
            echo "            ";
            if ((0 === twig_compare(($context["direction"] ?? null), "desc"))) {
                // line 5
                echo "                <i class=\"sort down icon\"></i>
            ";
            } else {
                // line 7
                echo "                <i class=\"sort up icon\"></i>
            ";
            }
            // line 9
            echo "        ";
        } else {
            // line 10
            echo "            <i class=\"sort icon\"></i>
        ";
        }
        // line 12
        echo "    </span>
    ";
        // line 13
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "
</a>
";
    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/semantic_ui_sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 13,  74 => 12,  70 => 10,  67 => 9,  63 => 7,  59 => 5,  56 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/semantic_ui_sortable_link.html.twig", "/home/ygxopek/www/dd.club.syres.fr/vendor/knplabs/knp-paginator-bundle/templates/Pagination/semantic_ui_sortable_link.html.twig");
    }
}
