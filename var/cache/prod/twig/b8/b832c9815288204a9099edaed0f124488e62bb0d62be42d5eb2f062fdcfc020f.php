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

/* Backend/Category/show.html.twig */
class __TwigTemplate_03756896d89d1d7d81acc55101c7f516d03b678de01e4e55e8586817f8bf06b0 extends Template
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
        $this->parent = $this->loadTemplate("Backend/_layout.html.twig", "Backend/Category/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h3 class=\"page-title\"> Catégories
        <small>affichage d'une catégorie</small>
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
        echo "    <div class=\"portlet light bordered\">
        <div class=\"portlet-title\">
            <div class=\"caption\">
                <span class=\"caption-subject font-red-sunglo bold uppercase\">Informations</span>
            </div>
        </div>
        <div class=\"portlet-body form\">
            <form action=\"#\" class=\"form-horizontal\">
                <div class=\"form-body\">
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\">Nom</label>
                        <div class=\"col-md-4\">
                            <p class=\"form-control-static\">
                                ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 28), "html", null, true);
        echo "
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"form-actions\">
                    <div class=\"row\">
                        <div class=\"col-md-offset-3 col-md-9\">
                            <a class=\"btn default\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_index");
        echo "\">Retour</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class=\"portlet light bordered\">
        <div class=\"portlet-title\">
            <div class=\"caption\">
                <span class=\"caption-subject font-red-sunglo bold uppercase\">Liste des enquêtes de la catégorie</span>
            </div>
        </div>
        <div class=\"portlet-body\">
            <table id=\"table_enquetes\" class=\"table table-striped table-bordered table-hover table-checkable order-column\">
                <thead>
                <tr>
                    <th style=\"width:80px;\">Id</th>
                    <th>ID Enquête</th>
                    <th>Nom</th>
                    <th>Type</th>
                    <th>Catégorie</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "surveys", [], "any", false, false, false, 64));
        foreach ($context['_seq'] as $context["_key"] => $context["survey"]) {
            // line 65
            echo "                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["survey"], "type", [], "any", false, false, false, 65), 0))) {
                // line 66
                echo "                        <tr class=\"odd gradeX\">
                            <td>";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "id", [], "any", false, false, false, 67), "html", null, true);
                echo "</td>
                            <td>#";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "idSurvey", [], "any", false, false, false, 68), "html", null, true);
                echo "</td>
                            <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "name", [], "any", false, false, false, 69), "html", null, true);
                echo "</td>
                            <td>";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "typeFormatted", [], "any", false, false, false, 70), "html", null, true);
                echo "</td>
                            <td>";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "category", [], "any", false, false, false, 71), "html", null, true);
                echo "</td>
                            <td>";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "statusFormatted", [], "any", false, false, false, 72), "html", null, true);
                echo "</td>
                            <td>
                                <a href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_survey_show", ["id" => twig_get_attribute($this->env, $this->source, $context["survey"], "id", [], "any", false, false, false, 74)]), "html", null, true);
                echo "\" class=\"label label-success\">afficher</a>
                                <a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_survey_enquete_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["survey"], "id", [], "any", false, false, false, 75)]), "html", null, true);
                echo "\" class=\"label label-success\">éditer</a>
                            </td>
                        </tr>
                    ";
            }
            // line 79
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['survey'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                </tbody>
            </table>
        </div>
    </div>

    ";
        // line 127
        echo "
    <div class=\"portlet light bordered\">
        <div class=\"portlet-title\">
            <div class=\"caption\">
                <span class=\"caption-subject font-red-sunglo bold uppercase\">Liste des tests de la catégorie</span>
            </div>
        </div>
        <div class=\"portlet-body\">
            <table id=\"table_tests\" class=\"table table-striped table-bordered table-hover table-checkable order-column\">
                <thead>
                <tr>
                    <th style=\"width:80px;\">Id</th>
                    <th>ID Test</th>
                    <th>Nom</th>
                    <th>Type</th>
                    <th>Catégorie</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "surveys", [], "any", false, false, false, 148));
        foreach ($context['_seq'] as $context["_key"] => $context["survey"]) {
            // line 149
            echo "                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["survey"], "type", [], "any", false, false, false, 149), 2))) {
                // line 150
                echo "                        <tr class=\"odd gradeX\">
                            <td>";
                // line 151
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "id", [], "any", false, false, false, 151), "html", null, true);
                echo "</td>
                            <td>#";
                // line 152
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "idSurvey", [], "any", false, false, false, 152), "html", null, true);
                echo "</td>
                            <td>";
                // line 153
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "name", [], "any", false, false, false, 153), "html", null, true);
                echo "</td>
                            <td>";
                // line 154
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "typeFormatted", [], "any", false, false, false, 154), "html", null, true);
                echo "</td>
                            <td>";
                // line 155
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "category", [], "any", false, false, false, 155), "html", null, true);
                echo "</td>
                            <td>";
                // line 156
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "statusFormatted", [], "any", false, false, false, 156), "html", null, true);
                echo "</td>
                            <td>
                                <a href=\"";
                // line 158
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_survey_show", ["id" => twig_get_attribute($this->env, $this->source, $context["survey"], "id", [], "any", false, false, false, 158)]), "html", null, true);
                echo "\" class=\"label label-success\">afficher</a>
                                <a href=\"";
                // line 159
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_survey_test_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["survey"], "id", [], "any", false, false, false, 159)]), "html", null, true);
                echo "\" class=\"label label-success\">éditer</a>
                            </td>
                        </tr>
                    ";
            }
            // line 163
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['survey'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "                </tbody>
            </table>
        </div>
    </div>
";
    }

    // line 170
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 171
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$('#table_enquetes').dataTable({
                \"order\": [[ 0, \"desc\" ]]
            });

            \$('#table_pre-recrutements').dataTable({
                \"order\": [[ 0, \"desc\" ]]
            });

            \$('#table_tests').dataTable({
                \"order\": [[ 0, \"desc\" ]]
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "Backend/Category/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 172,  282 => 171,  278 => 170,  270 => 164,  264 => 163,  257 => 159,  253 => 158,  248 => 156,  244 => 155,  240 => 154,  236 => 153,  232 => 152,  228 => 151,  225 => 150,  222 => 149,  218 => 148,  195 => 127,  188 => 80,  182 => 79,  175 => 75,  171 => 74,  166 => 72,  162 => 71,  158 => 70,  154 => 69,  150 => 68,  146 => 67,  143 => 66,  140 => 65,  136 => 64,  105 => 36,  94 => 28,  79 => 15,  75 => 14,  69 => 11,  64 => 10,  60 => 9,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Backend/Category/show.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/Category/show.html.twig");
    }
}
