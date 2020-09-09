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

/* Backend/Contact/index.html.twig */
class __TwigTemplate_6d2da9df6107d905b79e7b441dec5b3ebbe47e44f71108b981d061698c626d21 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'content' => [$this, 'block_content'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Backend/_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Backend/_layout.html.twig", "Backend/Contact/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h3 class=\"page-title\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("received_messages", [], "bo_receivedmessages"), "html", null, true);
        echo "
        <small>";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("from_contact_form", [], "bo_receivedmessages"), "html", null, true);
        echo "</small>
    </h3>
";
    }

    // line 9
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/datatables/datatables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet-body\">
                <table id=\"table\" class=\"table table-striped table-bordered table-hover table-checkable order-column\">
                    <thead>
                        <tr>
                            <th style=\"width:80px;\">Id</th>
                            <th>";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("email", [], "bo_receivedmessages"), "html", null, true);
        echo "</th>
                            <th>";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("object", [], "bo_receivedmessages"), "html", null, true);
        echo "</th>
                            <th>";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sending_date", [], "bo_receivedmessages"), "html", null, true);
        echo "</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entities"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 30
            echo "                        <tr class=\"odd gradeX\">
                            <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contact_index", ["id" => twig_get_attribute($this->env, $this->source, $context["entity"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "email", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "subject", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                            <td>";
            // line 34
            echo "</td>
                            <td>
                                <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contact_show", ["id" => twig_get_attribute($this->env, $this->source, $context["entity"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\" class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("show_lowercase", [], "bo_receivedmessages"), "html", null, true);
            echo "</a>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
    }

    // line 47
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function() {
            var table = \$('#table').dataTable({
                \"order\": [[ 0, \"desc\" ]],
                \"oLanguage\": {
                  \"sSearch\": \"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("search", [], "bo_receivedmessages"), "html", null, true);
        echo "\",
                  \"sLengthMenu\": \"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("show", [], "bo_receivedmessages"), "html", null, true);
        echo " _MENU_ ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("items", [], "bo_receivedmessages"), "html", null, true);
        echo "\",
                  },
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "Backend/Contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 57,  174 => 56,  164 => 49,  159 => 48,  155 => 47,  146 => 40,  134 => 36,  130 => 34,  126 => 33,  122 => 32,  116 => 31,  113 => 30,  109 => 29,  101 => 24,  97 => 23,  93 => 22,  84 => 15,  80 => 14,  74 => 11,  69 => 10,  65 => 9,  58 => 5,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Backend/Contact/index.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/Contact/index.html.twig");
    }
}
