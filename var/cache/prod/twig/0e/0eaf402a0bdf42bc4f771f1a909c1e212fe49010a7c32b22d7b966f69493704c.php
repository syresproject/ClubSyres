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

/* Backend/newsletter/new.html.twig */
class __TwigTemplate_60be80aba271597c21a314a53127c195e8b5e81feb00fad91dd417ac2d260638 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
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
        $this->parent = $this->loadTemplate("backend/_layout.html.twig", "Backend/newsletter/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

    <style>
        .container {
            /* On ajoute une marge sur les cotés de l'écran */
            padding-right: 15px;
            padding-left: 15px;

            /* Et on centre */
            margin-right: auto;
            margin-left: auto;
        }

        /* Sur les grands écrans, on limite la largeur du contenu */
        @media (min-width: 1200px){
            .container {
                width: 1170px;
            }
        }
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

      .class_img{
          margin-bottom: 10px;
      }
    </style>
";
    }

    // line 66
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "    <h1 style=\"margin-bottom: 20px\">Newsletter creation</h1>

    ";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
       ";
        // line 75
        echo "
    ";
        // line 92
        echo "    <p> <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend__news_shows");
        echo "\"><i class=\"fas fa-eye\">Back to the list</i></a></p>
    ";
        // line 93
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

    ";
        // line 107
        echo "    ";
        // line 108
        echo "
";
    }

    public function getTemplateName()
    {
        return "Backend/newsletter/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 108,  145 => 107,  140 => 93,  135 => 92,  132 => 75,  128 => 70,  124 => 69,  120 => 67,  116 => 66,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Backend/newsletter/new.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/newsletter/new.html.twig");
    }
}
