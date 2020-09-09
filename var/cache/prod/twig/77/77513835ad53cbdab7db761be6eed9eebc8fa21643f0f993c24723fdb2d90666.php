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

/* Backend/CategoryHabit/index.html.twig */
class __TwigTemplate_e894d9cf862a4d314909795c84e089e92ef9cbd927cadc709553f380b7687edf extends Template
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
        return "backend/_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("backend/_layout.html.twig", "Backend/CategoryHabit/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<h3 class=\"page-title\"> categoryHabit
    <small>liste des categoryHabits</small>
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
                <div class=\"table-toolbar\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"btn-group\">
                                <a id=\"sample_editable_1_new\" class=\"btn sbold green\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_categoryhabit_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("add", [], "bo_category"), "html", null, true);
        echo "
                                    <i class=\"fa fa-plus\"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <table id=\"table\" class=\"table table-striped table-bordered table-hover table-checkable order-column\">
                    <thead>
                        <tr>
                            <th style=\"width:80px;\">Id</th>
                            <th>";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("name", [], "bo_category"), "html", null, true);
        echo "</th>
                            <th>";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sub_categories_number", [], "bo_category"), "html", null, true);
        echo "</th>
                            <th>Visible</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categoryHabits"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categoryHabit"]) {
            // line 41
            echo "                            <tr class=\"odd gradeX\">
                                <td><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_categoryhabit_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["categoryHabit"], "value", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["categoryHabit"], "value", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["categoryHabit"], "value", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoryHabit"], "headerhabit_count", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                                <td>";
            // line 45
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["categoryHabit"], "value", [], "any", false, false, false, 45), "visible", [], "any", false, false, false, 45)) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_categoryhabit_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["categoryHabit"], "value", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\" class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("show_lowercase", [], "bo_category"), "html", null, true);
            echo "</a>
                                    <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_categoryhabit_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["categoryHabit"], "value", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("edit", [], "bo_category"), "html", null, true);
            echo "</a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoryHabit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
    }

    // line 59
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function() {
            var table = \$('#table').dataTable({
              \"order\": [[ 0, \"desc\" ]],
              \"paginationType\": \"custom_bootstrap_number\",
              \"oLanguage\": {
                \"sSearch\": \"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("search", [], "bo_category"), "html", null, true);
        echo "\",
                \"sLengthMenu\": \"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("show", [], "bo_category"), "html", null, true);
        echo " _MENU_ ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("items", [], "bo_category"), "html", null, true);
        echo "\",
              },
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "Backend/CategoryHabit/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 70,  194 => 69,  183 => 61,  178 => 60,  174 => 59,  165 => 52,  153 => 48,  147 => 47,  138 => 45,  134 => 44,  130 => 43,  124 => 42,  121 => 41,  117 => 40,  108 => 34,  104 => 33,  88 => 22,  79 => 15,  75 => 14,  69 => 11,  64 => 10,  60 => 9,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Backend/CategoryHabit/index.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/CategoryHabit/index.html.twig");
    }
}
