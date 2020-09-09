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

/* frontend/FocusGroup/reply.html.twig */
class __TwigTemplate_f3765ddda4512cf142dad158bfb604013ff82fdbcb6fd1e3f4abb59b461fca5e extends Template
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
        return "AppBundle:Frontend:_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("AppBundle:Frontend:_layout.html.twig", "frontend/FocusGroup/reply.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <div class=\"header-clear-large\"></div>

    <div class=\"content\">
        <div class=\"container heading-style-5\">
            <h4 class=\"heading-title\">Focus group</h4>
            <i class=\"fa fa-align-left heading-icon\"></i>
            <div class=\"line bg-black\"></div>
        </div>

        <div class=\"blog-post-comments full-bottom\">
            ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["focus_message_form"] ?? null), 'form_start');
        echo "
                <div class=\"blog-post-comment-add\">
                    ";
        // line 17
        if (($context["focusMessage"] ?? null)) {
            // line 18
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, ($context["focusMessage"] ?? null), "user", [], "any", false, false, false, 18)) {
                // line 19
                echo "                            <h5>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("reply_to", [], "focusgroup"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["focusMessage"] ?? null), "user", [], "any", false, false, false, 19), "firstname", [], "any", false, false, false, 19), "html", null, true);
                echo "</h5>
                        ";
            } else {
                // line 21
                echo "                            <h5>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("reply_to_syres", [], "focusgroup"), "html", null, true);
                echo "</h5>
                        ";
            }
            // line 23
            echo "                        <p>
                            ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["focusMessage"] ?? null), "content", [], "any", false, false, false, 24), "html", null, true);
            echo "
                        </p>
                    ";
        } else {
            // line 27
            echo "                        <h5>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["focusGroup"] ?? null), "survey", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
            echo "</h5>

                        ";
            // line 29
            echo twig_get_attribute($this->env, $this->source, ($context["focusGroup"] ?? null), "article", [], "any", false, false, false, 29);
            echo "
                    ";
        }
        // line 31
        echo "
                    <strong>";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("my_message", [], "focusgroup"), "html", null, true);
        echo "</strong><em>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("required", [], "focusgroup"), "html", null, true);
        echo "</em>
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["focus_message_form"] ?? null), "content", [], "any", false, false, false, 33), 'widget');
        echo "
                </div>

                <button type=\"submit\" class=\"button button-green button-right full-top full-bottom hardfix\">";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("send", [], "focusgroup"), "html", null, true);
        echo "</button>
                <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_focusgroup_show", ["id" => twig_get_attribute($this->env, $this->source, ($context["focusGroup"] ?? null), "id", [], "any", false, false, false, 37)]), "html", null, true);
        echo "\" class=\"button button-grey button-right full-top full-bottom\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("back", [], "focusgroup"), "html", null, true);
        echo "</a>
            ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["focus_message_form"] ?? null), 'form_end');
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "frontend/FocusGroup/reply.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 38,  125 => 37,  121 => 36,  115 => 33,  109 => 32,  106 => 31,  101 => 29,  95 => 27,  89 => 24,  86 => 23,  80 => 21,  72 => 19,  69 => 18,  67 => 17,  62 => 15,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/FocusGroup/reply.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/FocusGroup/reply.html.twig");
    }
}
