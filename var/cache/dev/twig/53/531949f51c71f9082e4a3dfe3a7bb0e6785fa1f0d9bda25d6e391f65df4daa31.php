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

/* frontend/FocusGroup/_message_tree.html.twig */
class __TwigTemplate_825d3b0cebbfcfbadec138d3ed9eeb86280cd068a3df425a93bc2991c1f4fc6b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/FocusGroup/_message_tree.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/FocusGroup/_message_tree.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["focusMessages"]) || array_key_exists("focusMessages", $context) ? $context["focusMessages"] : (function () { throw new RuntimeError('Variable "focusMessages" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["focusMessage"]) {
            // line 2
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, $context["focusMessage"], "visible", [], "any", false, false, false, 2)) {
                // line 3
                echo "        <div class=\"blog-post-comment\" style=\"padding-left: ";
                echo twig_escape_filter($this->env, ((isset($context["depth"]) || array_key_exists("depth", $context) ? $context["depth"] : (function () { throw new RuntimeError('Variable "depth" does not exist.', 3, $this->source); })()) * 50), "html", null, true);
                echo "px;\">
            <em>Le ";
                // line 4
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["focusMessage"], "createdAt", [], "any", false, false, false, 4), "d/m/Y"), "html", null, true);
                echo " à ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["focusMessage"], "createdAt", [], "any", false, false, false, 4), "H\\hi"), "html", null, true);
                echo "</em>
            <a href=\"";
                // line 5
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_focusgroup_reply", ["focusGroup" => twig_get_attribute($this->env, $this->source, (isset($context["focusGroup"]) || array_key_exists("focusGroup", $context) ? $context["focusGroup"] : (function () { throw new RuntimeError('Variable "focusGroup" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5), "focusMessage" => twig_get_attribute($this->env, $this->source, $context["focusMessage"], "id", [], "any", false, false, false, 5)]), "html", null, true);
                echo "\" class=\"blog-post-comment-reply\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("answer", [], "focusgroup"), "html", null, true);
                echo "</a>
            ";
                // line 6
                if (twig_get_attribute($this->env, $this->source, $context["focusMessage"], "user", [], "any", false, false, false, 6)) {
                    // line 7
                    echo "                <span class=\"user-message\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["focusMessage"], "user", [], "any", false, false, false, 7), "firstname", [], "any", false, false, false, 7), "html", null, true);
                    echo "</span>
                <span class=\"user-id\">#";
                    // line 8
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["focusMessage"], "user", [], "any", false, false, false, 8), "id", [], "any", false, false, false, 8), "html", null, true);
                    echo "</span>
            ";
                } else {
                    // line 10
                    echo "                <span class=\"syres-message\">Syres</span>
            ";
                }
                // line 12
                echo "            <p>
                ";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["focusMessage"], "content", [], "any", false, false, false, 13), "html", null, true);
                echo "
            </p>
        </div>

        <div class=\"decoration\"></div>
    ";
            }
            // line 19
            echo "    
    ";
            // line 20
            $this->loadTemplate("AppBundle:Frontend/FocusGroup:_message_tree.html.twig", "frontend/FocusGroup/_message_tree.html.twig", 20)->display(twig_to_array(["depth" => (            // line 21
(isset($context["depth"]) || array_key_exists("depth", $context) ? $context["depth"] : (function () { throw new RuntimeError('Variable "depth" does not exist.', 21, $this->source); })()) + 1), "focusGroup" =>             // line 22
(isset($context["focusGroup"]) || array_key_exists("focusGroup", $context) ? $context["focusGroup"] : (function () { throw new RuntimeError('Variable "focusGroup" does not exist.', 22, $this->source); })()), "focusMessages" => twig_get_attribute($this->env, $this->source,             // line 23
$context["focusMessage"], "children", [], "any", false, false, false, 23)]));
            // line 25
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['focusMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "frontend/FocusGroup/_message_tree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 25,  101 => 23,  100 => 22,  99 => 21,  98 => 20,  95 => 19,  86 => 13,  83 => 12,  79 => 10,  74 => 8,  69 => 7,  67 => 6,  61 => 5,  55 => 4,  50 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for focusMessage in focusMessages %}
    {% if focusMessage.visible %}
        <div class=\"blog-post-comment\" style=\"padding-left: {{ depth * 50}}px;\">
            <em>Le {{ focusMessage.createdAt | date('d/m/Y') }} à {{ focusMessage.createdAt | date('H\\\\hi') }}</em>
            <a href=\"{{ path('frontend_focusgroup_reply', {'focusGroup': focusGroup.id, 'focusMessage': focusMessage.id}) }}\" class=\"blog-post-comment-reply\">{{ 'answer' |trans({}, 'focusgroup') }}</a>
            {% if focusMessage.user %}
                <span class=\"user-message\">{{ focusMessage.user.firstname }}</span>
                <span class=\"user-id\">#{{ focusMessage.user.id }}</span>
            {% else %}
                <span class=\"syres-message\">Syres</span>
            {% endif %}
            <p>
                {{ focusMessage.content }}
            </p>
        </div>

        <div class=\"decoration\"></div>
    {% endif %}
    
    {% include \"AppBundle:Frontend/FocusGroup:_message_tree.html.twig\" with {
        'depth': depth + 1,
        'focusGroup':focusGroup,
        'focusMessages':focusMessage.children
    } only %}

{% endfor %}", "frontend/FocusGroup/_message_tree.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/FocusGroup/_message_tree.html.twig");
    }
}
