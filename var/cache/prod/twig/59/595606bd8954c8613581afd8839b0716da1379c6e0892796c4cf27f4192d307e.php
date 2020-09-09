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

/* Backend/Category/index.html.twig */
class __TwigTemplate_7e17e87d55eee63daadbc7415c97ab3a912721f6e17bee4e089f190a303031d9 extends Template
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
        $this->parent = $this->loadTemplate("Backend/_layout.html.twig", "Backend/Category/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<h3 class=\"page-title\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("category", [], "bo_surveycategory"), "html", null, true);
        echo "
    <small>";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list", [], "bo_surveycategory"), "html", null, true);
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
      ";
        // line 19
        echo "
        <div class=\"col-md-12\">
            <div class=\"portlet-body\">
                <div class=\"table-toolbar\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"btn-group\">
                                <a id=\"sample_editable_1_new\" class=\"btn sbold green\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("add", [], "bo_surveycategory"), "html", null, true);
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
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("name", [], "bo_surveycategory"), "html", null, true);
        echo "</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 43
            echo "                            <tr class=\"odd gradeX\">
                                <td><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_show", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 44), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_show", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\" class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("show_lowercase", [], "bo_surveycategory"), "html", null, true);
            echo "</a>
                                    <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("edit", [], "bo_surveycategory"), "html", null, true);
            echo "</a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("search", [], "bo_surveycategory"), "html", null, true);
        echo "\",
                \"sLengthMenu\": \"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("show", [], "bo_surveycategory"), "html", null, true);
        echo " _MENU_ ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("items", [], "bo_surveycategory"), "html", null, true);
        echo "\",
              },
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "Backend/Category/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 70,  185 => 69,  174 => 61,  169 => 60,  165 => 59,  156 => 52,  144 => 48,  138 => 47,  133 => 45,  127 => 44,  124 => 43,  120 => 42,  112 => 37,  96 => 26,  87 => 19,  84 => 15,  80 => 14,  74 => 11,  69 => 10,  65 => 9,  58 => 5,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Backend/Category/index.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/Category/index.html.twig");
    }
}
