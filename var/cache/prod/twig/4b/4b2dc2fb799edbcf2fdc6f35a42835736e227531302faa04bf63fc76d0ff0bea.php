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

/* frontend/mypdf/mypdf.html.twig */
class __TwigTemplate_a3964ae355169c925197aed1259f70c057c91fa901306bef3afb19d0f47507cb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "frontend/pdf_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("frontend/pdf_layout.html.twig", "frontend/mypdf/mypdf.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <div class=\"content\">
        <style>
            .content{
                color: 2px solid #0c203a;
                width: 100%;

                border-style: solid double;
                padding: 15px;
                margin-top: 15px;
                background-image: url(\"../../../public/frontend/images/logo-syres.png\");
            }

            .container{
                color: 2px solid #0c203a;
                border-style: solid double;
                width: 100%;

                margin-top: 20px;
                margin: 15px;
            }

            .cont{
                color: 2px solid #0c203a;
                border-style: solid double;
                padding: 20px;
            }
        </style>



        <div class=\"cont\">
            <div class=\"cont\">
                <div class=\"container\">
                    <div class=\"container\">
                       <h1 style=\"text-align: center\">Test </h1>

                    </div>
                </div>
            </div>
        </div>

        <div class=\"container\" style=\"height: 436px; padding: 10px\">
           <p style=\"font-size: 20px\">
               ";
        // line 48
        echo twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "description", [], "any", false, false, false, 48);
        echo "
           </p>
        </div>

        <div class=\"cont\">
            <div class=\"cont\">
                <div class=\"container\">
                    <div class=\"container\" style=\"\">
                        <h1 style=\"text-align: center\">Test </h1>
                    </div>
                </div>
            </div>
        </div>



        ";
        // line 64
        $this->displayBlock('footer', $context, $blocks);
        // line 67
        echo "
        ";
        // line 68
        $this->displayBlock('javascripts', $context, $blocks);
        // line 78
        echo "    </div>
";
    }

    // line 64
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "
        ";
    }

    // line 68
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "
            <script type=\"text/javascript\">
                \$(document).ready(function() {
                    \$('.tasklist-completed').click(function() {
                        return confirm(";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("confirmation", [], "survey"), "html", null, true);
        echo ");
                    });
                });
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "frontend/mypdf/mypdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 73,  141 => 69,  137 => 68,  132 => 65,  128 => 64,  123 => 78,  121 => 68,  118 => 67,  116 => 64,  97 => 48,  52 => 5,  48 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/mypdf/mypdf.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/mypdf/mypdf.html.twig");
    }
}
