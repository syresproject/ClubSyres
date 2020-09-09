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
class __TwigTemplate_9ca33e84c2bef62b3c9a63179512a675eabff2f6a3fc3a8c52a64386a4f32073 extends Template
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
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, $context["focusMessage"], "visible", [], "any", false, false, false, 2)) {
                // line 3
                echo "        <div class=\"blog-post-comment\" style=\"padding-left: ";
                echo twig_escape_filter($this->env, (($context["depth"] ?? null) * 50), "html", null, true);
                echo "px;\">
            <em>Le ";
                // line 4
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["focusMessage"], "createdAt", [], "any", false, false, false, 4), "d/m/Y"), "html", null, true);
                echo " à ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["focusMessage"], "createdAt", [], "any", false, false, false, 4), "H\\hi"), "html", null, true);
                echo "</em>
            <a href=\"";
                // line 5
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_focusgroup_reply", ["focusGroup" => twig_get_attribute($this->env, $this->source, ($context["focusGroup"] ?? null), "id", [], "any", false, false, false, 5), "focusMessage" => twig_get_attribute($this->env, $this->source, $context["focusMessage"], "id", [], "any", false, false, false, 5)]), "html", null, true);
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
($context["depth"] ?? null) + 1), "focusGroup" =>             // line 22
($context["focusGroup"] ?? null), "focusMessages" => twig_get_attribute($this->env, $this->source,             // line 23
$context["focusMessage"], "children", [], "any", false, false, false, 23)]));
            // line 25
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['focusMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        return array (  97 => 25,  95 => 23,  94 => 22,  93 => 21,  92 => 20,  89 => 19,  80 => 13,  77 => 12,  73 => 10,  68 => 8,  63 => 7,  61 => 6,  55 => 5,  49 => 4,  44 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/FocusGroup/_message_tree.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/FocusGroup/_message_tree.html.twig");
    }
}
