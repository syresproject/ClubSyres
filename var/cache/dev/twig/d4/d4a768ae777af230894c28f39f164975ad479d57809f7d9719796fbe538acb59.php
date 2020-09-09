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

/* _widgets/flash_notifications_inscription_invalid.html.twig */
class __TwigTemplate_d92ac6172abef63494a1486131846f4cba301c9ea9bcd7846457184825de144e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_widgets/flash_notifications_inscription_invalid.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_widgets/flash_notifications_inscription_invalid.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "session", [], "any", false, false, false, 1), "flashbag", [], "any", false, false, false, 1), "get", [0 => "error"], "method", false, false, false, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 2
            echo "    <div class=\"static-notification bg-green-dark tap-dismiss\" style=\"background-color: white\">
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "session", [], "any", false, false, false, 10), "flashbag", [], "any", false, false, false, 10), "get", [0 => "error"], "method", false, false, false, 10));
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "_widgets/flash_notifications_inscription_invalid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 14,  69 => 11,  65 => 10,  62 => 9,  52 => 5,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for flashMessage in app.session.flashbag.get('error') %}
    <div class=\"static-notification bg-green-dark tap-dismiss\" style=\"background-color: white\">
        <p>
            <i class=\"fa fa-check\"></i>
            {{ flashMessage }}
        </p>
    </div>
{% endfor %}

{% for flashMessage in app.session.flashbag.get('error') %}
    <div class=\"static-notification bg-red-dark tap-dismiss\">
        <p>
            <i class=\"fa fa-times\"></i>
            {{ flashMessage }}
        </p>
    </div>
{% endfor %}
", "_widgets/flash_notifications_inscription_invalid.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/_widgets/flash_notifications_inscription_invalid.html.twig");
    }
}
