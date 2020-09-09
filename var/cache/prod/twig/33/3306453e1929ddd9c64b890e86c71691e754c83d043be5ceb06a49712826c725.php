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

/* insc/index.html.twig */
class __TwigTemplate_de2cc035620d8d10d1cca735dc327e558b6040ebdc37705ddfb950c8aa1d3d2c extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "./frontend/_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("./frontend/_layout.html.twig", "insc/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Insc index";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "

    <div class=\"container\">
        <h1>Insc index</h1>

        <table class=\"table\">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Prenom</th>
                <th>actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["inscs"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["insc"]) {
            // line 24
            echo "                <tr>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["insc"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["insc"], "name", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["insc"], "prenom", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("insc_show", ["id" => twig_get_attribute($this->env, $this->source, $context["insc"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">show</a>
                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("insc_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["insc"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\">edit</a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "                <tr>
                    <td colspan=\"4\">no records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['insc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "            </tbody>
        </table>

        <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("insc_new");
        echo "\">Create new</a>
    </div>
";
    }

    // line 44
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "insc/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 44,  126 => 41,  121 => 38,  112 => 34,  103 => 30,  99 => 29,  94 => 27,  90 => 26,  86 => 25,  83 => 24,  78 => 23,  59 => 8,  55 => 7,  48 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "insc/index.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/insc/index.html.twig");
    }
}
