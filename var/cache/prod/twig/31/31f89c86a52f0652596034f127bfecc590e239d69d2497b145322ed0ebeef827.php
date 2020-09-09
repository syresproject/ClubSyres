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

/* Backend/User/index.html.twig */
class __TwigTemplate_1fea3264f4165eaf571351054952774525263ff64bdf65061fb61c4e4ff2cd1e extends Template
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
        $this->parent = $this->loadTemplate("Backend/_layout.html.twig", "Backend/User/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h3 class=\"page-title\"> Panélistes
        <small>liste des panélistes</small>
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
        echo "\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css"), "html", null, true);
        echo "\"
          rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/layouts/layout/css/override.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>

";
    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet-body\">
                <div class=\"table-toolbar\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">

                            <div class=\"btn-group\">
                                <a id=\"sample_editable_1_new\" class=\"btn sbold green\"
                                   href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_new");
        echo "\">";
        echo "add";
        echo "
                                    <i class=\"fa fa-plus\"></i>
                                </a>
                            </div>
                            <div class=\"btn-group\">
                                <a id=\"sample_editable_1_new\" class=\"btn sbold green\"
                                   href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_import");
        echo "\">
                                    import
                                    <i class=\"fa fa-file\"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
               ";
        // line 43
        echo "
                <table id=\"table\"
                       class=\"table table-striped table-bordered table-hover table-checkable order-column loading_table\">
                    <thead>
                    <tr>
                        <th>";
        // line 48
        echo "Id Panéliste";
        echo "</th>
                        <th>";
        // line 49
        echo "title";
        echo "</th>
                        <th>";
        // line 50
        echo "firstname";
        echo "</th>
                        <th>";
        // line 51
        echo "lastName";
        echo "</th>
                        <th>";
        // line 52
        echo "birthdate";
        echo "</th>
                        <th>";
        // line 53
        echo "statut";
        echo "</th>
                        <th>";
        // line 54
        echo "email";
        echo "</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody  ";
        // line 58
        echo " >
                        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["users"]);
        foreach ($context['_seq'] as $context["_key"] => $context["users"]) {
            // line 60
            echo "                            <tr class=\"odd gradeX list-group\" id=\"myList\">
                                <td style=\"display: none\"><a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index", ["id" => twig_get_attribute($this->env, $this->source, $context["users"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "id", [], "any", false, false, false, 61), "html", null, true);
            echo "</a></td>
                                <td class=\"list-group-item\">";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "idPaneliste", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                                <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "title", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                                <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "firstname", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                                <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "lastName", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                                <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "birthdate", [], "any", false, false, false, 66), "m/d/Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "statut", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                                <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "email", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["users"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            echo "\" class=\"label label-success\">afficher</a>
                                    <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["users"], "id", [], "any", false, false, false, 71)]), "html", null, true);
            echo "\" class=\"label label-success\">éditer</a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['users'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                    </tbody>
                    <div class=\"navigation\" style=\"bottom: 0px\">
                        ";
        // line 77
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["users"] ?? null));
        echo "
                    </div>

                </table>
            </div>
        </div>
    </div>

    ";
    }

    // line 93
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 94
        echo "<script src = \"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>


<script >
\$(document).ready(function() {
    \$('#table').DataTable();
} );
</script>

   <script type=\"text/javascript\">
        \$(document).ready(function() {
            var table = \$('#table').dataTable({
              \"order\": [[ 0, \"desc\" ]],
              \"paginationType\": \"custom_bootstrap_number\",
              \"oLanguage\": {
                \"sSearch\": \"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("search", [], "bo_panelistegroup"), "html", null, true);
        echo "\",
                \"sLengthMenu\": \"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("show", [], "bo_panelistegroup"), "html", null, true);
        echo " _MENU_ ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("items", [], "bo_survey"), "html", null, true);
        echo "\",
              },
            });
        });




            \$(document).ready(function() {
                var table = \$('#table').dataTable({
                  \"order\": [[ 0, \"desc\" ]],
                  \"paginationType\": \"custom_bootstrap_number\",
                  \"oLanguage\": {
                    \"sSearch\": \"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("search", [], "bo_panelistegroup"), "html", null, true);
        echo "\",
                    \"sLengthMenu\": \"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("show", [], "bo_panelistegroup"), "html", null, true);
        echo " _MENU_ ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("items", [], "bo_survey"), "html", null, true);
        echo "\",
                  },
                });
            });
        </script>




";
        // line 194
        echo "





";
    }

    public function getTemplateName()
    {
        return "Backend/User/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 194,  286 => 125,  282 => 124,  264 => 111,  260 => 110,  242 => 95,  237 => 94,  233 => 93,  220 => 77,  216 => 75,  206 => 71,  202 => 70,  197 => 68,  193 => 67,  189 => 66,  185 => 65,  181 => 64,  177 => 63,  173 => 62,  167 => 61,  164 => 60,  160 => 59,  157 => 58,  150 => 54,  146 => 53,  142 => 52,  138 => 51,  134 => 50,  130 => 49,  126 => 48,  119 => 43,  108 => 34,  97 => 28,  86 => 19,  82 => 18,  75 => 14,  70 => 12,  64 => 10,  60 => 9,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Backend/User/index.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/User/index.html.twig");
    }
}
