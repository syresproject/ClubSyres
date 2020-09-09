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
class __TwigTemplate_4504f884eb9f5ececbf93a62f1dbed675dae47a2d3081760a0eb96beafbd2ff5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/mypdf/mypdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/mypdf/mypdf.html.twig"));

        $this->parent = $this->loadTemplate("frontend/pdf_layout.html.twig", "frontend/mypdf/mypdf.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

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
        echo twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 48, $this->source); })()), "description", [], "any", false, false, false, 48);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 65
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  189 => 73,  183 => 69,  173 => 68,  162 => 65,  152 => 64,  141 => 78,  139 => 68,  136 => 67,  134 => 64,  115 => 48,  70 => 5,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"frontend/pdf_layout.html.twig\" %}

{# CONTENT #}
{% block content %}
    <div class=\"content\">
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
               {{ survey.description | raw }}
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



        {% block footer %}

        {% endblock %}

        {% block javascripts %}

            <script type=\"text/javascript\">
                \$(document).ready(function() {
                    \$('.tasklist-completed').click(function() {
                        return confirm({{ 'confirmation' |trans({}, 'survey') }});
                    });
                });
            </script>
        {% endblock %}
    </div>
{% endblock %}

", "frontend/mypdf/mypdf.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/mypdf/mypdf.html.twig");
    }
}
