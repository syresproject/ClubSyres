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

/* frontend/StaticPage/legal_notice.html.twig */
class __TwigTemplate_662f4d05195ff202a403845560f69fb36f2fe0e2a81170bd3272a947131ac0ed extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/StaticPage/legal_notice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/StaticPage/legal_notice.html.twig"));

        $this->parent = $this->loadTemplate("frontend/_layout.html.twig", "frontend/StaticPage/legal_notice.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    <div class=\"header-clear-large\"></div>

    <div class=\"container heading-style-5\" style=\"margin-top: 80px\">
        <h4 class=\"heading-title inline-header\">
            ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("notices", [], "sidebar"), "html", null, true);
        echo "
            ";
        // line 10
        $this->loadTemplate("frontend/header-title.html.twig", "frontend/StaticPage/legal_notice.html.twig", 10)->display($context);
        // line 11
        echo "        </h4>
        <i class=\"fa fa-align-left heading-icon\"></i>
        <div class=\"line bg-black\"></div>
    </div>
    <div class=\"content\">
        <div class=\"container\">
            ";
        // line 17
        echo twig_get_attribute($this->env, $this->source, (isset($context["legal_notice"]) || array_key_exists("legal_notice", $context) ? $context["legal_notice"] : (function () { throw new RuntimeError('Variable "legal_notice" does not exist.', 17, $this->source); })()), "content", [], "any", false, false, false, 17);
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontend/StaticPage/legal_notice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 17,  83 => 11,  81 => 10,  77 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"frontend/_layout.html.twig\" %}

{% block content %}
    {{ parent() }}
    <div class=\"header-clear-large\"></div>

    <div class=\"container heading-style-5\" style=\"margin-top: 80px\">
        <h4 class=\"heading-title inline-header\">
            {{ 'notices' |trans({}, 'sidebar') }}
            {% include 'frontend/header-title.html.twig' %}
        </h4>
        <i class=\"fa fa-align-left heading-icon\"></i>
        <div class=\"line bg-black\"></div>
    </div>
    <div class=\"content\">
        <div class=\"container\">
            {{ legal_notice.content | raw }}
        </div>
    </div>
{% endblock %}", "frontend/StaticPage/legal_notice.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/StaticPage/legal_notice.html.twig");
    }
}
