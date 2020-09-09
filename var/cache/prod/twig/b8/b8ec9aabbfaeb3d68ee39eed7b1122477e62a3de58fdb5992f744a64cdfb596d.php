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

/* Backend/newsletter/index.html.twig */
class __TwigTemplate_4d37d2fee148351dea7a1357c2e8d94ffd652ad64f9f8c0c9f95a9b6bddef605 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "backend/_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("backend/_layout.html.twig", "Backend/newsletter/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <style>
        .input_mail{
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }
        /* formulaire */
        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }
        label{
            margin-left: 0px;
        }
        .hUnAlign{
            text-align: center;
        }
    </style>

    <h1 class=\"hUnAlign\">Modifier les Newsletters</h1>

    ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_start');
        echo "
    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["edit_form"] ?? null), 'widget');
        echo "
    ";
        // line 56
        echo "
    <p style=\"text-align: right; font-size: 26px\">
        <i class=\"fa fa-eye fa-lg\" aria-hidden=\"true\"></i>
        <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend__news_shows", ["id" => twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "id", [], "any", false, false, false, 59)]), "html", null, true);
        echo "\" style=\"text-decoration: none\">Voir le newsletter</a>
    </p>
    ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_end');
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "Backend/newsletter/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 61,  117 => 59,  112 => 56,  108 => 52,  104 => 51,  57 => 6,  53 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Backend/newsletter/index.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/newsletter/index.html.twig");
    }
}
