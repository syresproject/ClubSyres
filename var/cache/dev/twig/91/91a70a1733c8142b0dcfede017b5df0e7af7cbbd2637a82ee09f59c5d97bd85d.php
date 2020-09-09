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

/* frontend/test_a_venir/test_a_venir.index.html.twig */
class __TwigTemplate_a33ea26181c309c1835952e0cbc6514090feddefffceaba5f6f6f1dad889703f extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "frontend/_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/test_a_venir/test_a_venir.index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/test_a_venir/test_a_venir.index.html.twig"));

        $this->parent = $this->loadTemplate("frontend/_layout.html.twig", "frontend/test_a_venir/test_a_venir.index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/styles/test_a_venir.css"), "html", null, true);
        echo "\"           rel=\"stylesheet\" type=\"text/css\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "

   <div class=\"container\" id=\"marge-top\">
       <div class=\"header-clear-large\"></div>
       <div class=\"container heading-style-5\">
           <h4 class=\"heading-title inline-header\">
               ";
        // line 16
        echo "Test A Venir";
        echo "
               ";
        // line 17
        $this->loadTemplate("frontend/header-title.html.twig", "frontend/test_a_venir/test_a_venir.index.html.twig", 17)->display($context);
        // line 18
        echo "           </h4>
            <div style=\"z-index: -1\">
                <i class=\"fa fa-align-left heading-icon\" style=\"z-index: -1\"></i>
            </div>
           <div class=\"line bg-black\"></div>
       </div>


       <div style=\"padding: 0px;\">
           <p class=\"p_align\">Participez à l'un des tests que je vous propose : démaquillant, lotion, soin...
               Il y en a au moins un qui vous correspondra !</p>
           </br>
           <p class=\"p_align\">Je vous rappelle que vous ne pouvez pas faire plusieurs tests en même temps.</p>
           <p class=\"p_align\">Après chaque test, vous devez attendre 2 mois minimum avant de pouvoir à nouveau tester
               un autre produit.</p>
           <p class=\"p_align\">Si vous êtes déjà en test ou si vous avez testé récemment (moins de 2 mois) je ne pourrais
               malheureusement pas vous proposer de test.
           </p>

           <table id=\"customers\">
               <tr>
                   <th class=\"testCenter\">Nom du test</th>
                   <th class=\"testCenter\">Sexe</th>
                   <th class=\"testCenter\">Age</th>
                   <th class=\"testCenter\">Date limite</th>
                   <th class=\"testCenter\" style=\"text-align: center\">Souhaite tester</th>
               </tr>
           </table>
       </div>
   </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontend/test_a_venir/test_a_venir.index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 50,  154 => 49,  114 => 18,  112 => 17,  108 => 16,  98 => 10,  88 => 9,  75 => 4,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"frontend/_layout.html.twig\" %}
{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('frontend/styles/test_a_venir.css') }}\"           rel=\"stylesheet\" type=\"text/css\">

{% endblock %}

{# CONTENT #}
{% block content %}
    {{ parent() }}

   <div class=\"container\" id=\"marge-top\">
       <div class=\"header-clear-large\"></div>
       <div class=\"container heading-style-5\">
           <h4 class=\"heading-title inline-header\">
               {{ 'Test A Venir'}}
               {% include 'frontend/header-title.html.twig' %}
           </h4>
            <div style=\"z-index: -1\">
                <i class=\"fa fa-align-left heading-icon\" style=\"z-index: -1\"></i>
            </div>
           <div class=\"line bg-black\"></div>
       </div>


       <div style=\"padding: 0px;\">
           <p class=\"p_align\">Participez à l'un des tests que je vous propose : démaquillant, lotion, soin...
               Il y en a au moins un qui vous correspondra !</p>
           </br>
           <p class=\"p_align\">Je vous rappelle que vous ne pouvez pas faire plusieurs tests en même temps.</p>
           <p class=\"p_align\">Après chaque test, vous devez attendre 2 mois minimum avant de pouvoir à nouveau tester
               un autre produit.</p>
           <p class=\"p_align\">Si vous êtes déjà en test ou si vous avez testé récemment (moins de 2 mois) je ne pourrais
               malheureusement pas vous proposer de test.
           </p>

           <table id=\"customers\">
               <tr>
                   <th class=\"testCenter\">Nom du test</th>
                   <th class=\"testCenter\">Sexe</th>
                   <th class=\"testCenter\">Age</th>
                   <th class=\"testCenter\">Date limite</th>
                   <th class=\"testCenter\" style=\"text-align: center\">Souhaite tester</th>
               </tr>
           </table>
       </div>
   </div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}

{% endblock %}", "frontend/test_a_venir/test_a_venir.index.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/test_a_venir/test_a_venir.index.html.twig");
    }
}
