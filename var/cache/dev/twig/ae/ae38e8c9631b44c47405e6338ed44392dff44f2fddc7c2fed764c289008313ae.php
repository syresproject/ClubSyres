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

/* Backend/FocusGroup/_message_tree.html.twig */
class __TwigTemplate_9ff30d009bb6da2955a59a728a21f3ca5f089c676ff370f251f9c16c1e417d6a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/FocusGroup/_message_tree.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/FocusGroup/_message_tree.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["focusMessages"]) || array_key_exists("focusMessages", $context) ? $context["focusMessages"] : (function () { throw new RuntimeError('Variable "focusMessages" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["focusMessage"]) {
            // line 2
            echo "    <div class=\"col-xs-12 with-margin-bottom\">
        <div style=\"padding-left: ";
            // line 3
            echo twig_escape_filter($this->env, ((isset($context["depth"]) || array_key_exists("depth", $context) ? $context["depth"] : (function () { throw new RuntimeError('Variable "depth" does not exist.', 3, $this->source); })()) * 50), "html", null, true);
            echo "px;\" >
            ";
            // line 4
            if (twig_get_attribute($this->env, $this->source, $context["focusMessage"], "user", [], "any", false, false, false, 4)) {
                // line 5
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["focusMessage"], "user", [], "any", false, false, false, 5), "id", [], "any", false, false, false, 5)]), "html", null, true);
                echo "\">
                    <span class=\"bold\">
                        ";
                // line 7
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["focusMessage"], "user", [], "any", false, false, false, 7), "firstname", [], "any", false, false, false, 7), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["focusMessage"], "user", [], "any", false, false, false, 7), "lastname", [], "any", false, false, false, 7), "html", null, true);
                echo "
                    </span>

                    #";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["focusMessage"], "user", [], "any", false, false, false, 10), "idPaneliste", [], "any", false, false, false, 10), "html", null, true);
                echo "
                </a>
            ";
            } else {
                // line 13
                echo "                <span class=\"font-red-intense font-lg sbold\">Syres</span>
            ";
            }
            // line 15
            echo "
            <em>Le ";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["focusMessage"], "createdAt", [], "any", false, false, false, 16), "d/m/Y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["focusMessage"], "createdAt", [], "any", false, false, false, 16), "H\\hi"), "html", null, true);
            echo "</em>
            <div ";
            // line 17
            if ( !twig_get_attribute($this->env, $this->source, $context["focusMessage"], "visible", [], "any", false, false, false, 17)) {
                echo "class=\"invalid-focus-message\"";
            }
            echo " >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["focusMessage"], "content", [], "any", false, false, false, 17), "html", null, true);
            echo "</div>
            <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_focusgroup_reply-message", ["id" => twig_get_attribute($this->env, $this->source, $context["focusMessage"], "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\">Répondre</a> - <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_focusgroup_edit-message", ["id" => twig_get_attribute($this->env, $this->source, $context["focusMessage"], "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\">Editer</a> - <a href=\"#\" class=\"delete-item\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["focusMessage"], "id", [], "any", false, false, false, 18), "html", null, true);
            echo "\">Supprimer</a> - <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_focusgroup_validate-message", ["id" => twig_get_attribute($this->env, $this->source, $context["focusMessage"], "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\" class=\"validate-item\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["focusMessage"], "id", [], "any", false, false, false, 18), "html", null, true);
            echo "\">";
            if (twig_get_attribute($this->env, $this->source, $context["focusMessage"], "visible", [], "any", false, false, false, 18)) {
                echo "Cacher";
            } else {
                echo "Valider";
            }
            echo "</a>
        </div>
    </div>

    ";
            // line 22
            $this->loadTemplate("@App/Backend/FocusGroup/_message_tree.html.twig", "Backend/FocusGroup/_message_tree.html.twig", 22)->display(twig_to_array(["depth" => (            // line 23
(isset($context["depth"]) || array_key_exists("depth", $context) ? $context["depth"] : (function () { throw new RuntimeError('Variable "depth" does not exist.', 23, $this->source); })()) + 1), "focusMessages" => twig_get_attribute($this->env, $this->source,             // line 24
$context["focusMessage"], "children", [], "any", false, false, false, 24)]));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['focusMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Backend/FocusGroup/_message_tree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 24,  119 => 23,  118 => 22,  97 => 18,  89 => 17,  83 => 16,  80 => 15,  76 => 13,  70 => 10,  62 => 7,  56 => 5,  54 => 4,  50 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for focusMessage in focusMessages %}
    <div class=\"col-xs-12 with-margin-bottom\">
        <div style=\"padding-left: {{ depth * 50}}px;\" >
            {% if focusMessage.user %}
                <a href=\"{{ path('backend_user_show', {'id':focusMessage.user.id}) }}\">
                    <span class=\"bold\">
                        {{ focusMessage.user.firstname }} {{ focusMessage.user.lastname }}
                    </span>

                    #{{ focusMessage.user.idPaneliste }}
                </a>
            {% else %}
                <span class=\"font-red-intense font-lg sbold\">Syres</span>
            {% endif %}

            <em>Le {{ focusMessage.createdAt | date('d/m/Y') }} à {{ focusMessage.createdAt | date('H\\\\hi') }}</em>
            <div {% if not focusMessage.visible %}class=\"invalid-focus-message\"{% endif %} >{{ focusMessage.content }}</div>
            <a href=\"{{ path('backend_focusgroup_reply-message', {id: focusMessage.id}) }}\">Répondre</a> - <a href=\"{{ path('backend_focusgroup_edit-message', {id: focusMessage.id}) }}\">Editer</a> - <a href=\"#\" class=\"delete-item\" data-id=\"{{ focusMessage.id }}\">Supprimer</a> - <a href=\"{{ path('backend_focusgroup_validate-message', {id: focusMessage.id}) }}\" class=\"validate-item\" data-id=\"{{ focusMessage.id }}\">{% if focusMessage.visible %}Cacher{% else %}Valider{% endif %}</a>
        </div>
    </div>

    {% include \"@App/Backend/FocusGroup/_message_tree.html.twig\" with {
        'depth': depth + 1,
        'focusMessages': focusMessage.children
    } only %}
{% endfor %}", "Backend/FocusGroup/_message_tree.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/FocusGroup/_message_tree.html.twig");
    }
}
