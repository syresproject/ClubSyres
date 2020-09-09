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
class __TwigTemplate_dc576fcafc2808f069f183f0b4d7e1675c0f43af4516489e1f17b72fb41e3f91 extends Template
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
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["focusMessages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["focusMessage"]) {
            // line 2
            echo "    <div class=\"col-xs-12 with-margin-bottom\">
        <div style=\"padding-left: ";
            // line 3
            echo twig_escape_filter($this->env, (($context["depth"] ?? null) * 50), "html", null, true);
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
($context["depth"] ?? null) + 1), "focusMessages" => twig_get_attribute($this->env, $this->source,             // line 24
$context["focusMessage"], "children", [], "any", false, false, false, 24)]));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['focusMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        return array (  114 => 24,  113 => 23,  112 => 22,  91 => 18,  83 => 17,  77 => 16,  74 => 15,  70 => 13,  64 => 10,  56 => 7,  50 => 5,  48 => 4,  44 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Backend/FocusGroup/_message_tree.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/FocusGroup/_message_tree.html.twig");
    }
}
