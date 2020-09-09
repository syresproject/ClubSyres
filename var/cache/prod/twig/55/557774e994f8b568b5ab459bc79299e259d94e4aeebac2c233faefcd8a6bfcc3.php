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

/* Backend/Survey/index.html.twig */
class __TwigTemplate_bc6d7cb269655af0f0b297462b59aae46602b159d33706035937a0c65ffaf88c extends Template
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
        $this->parent = $this->loadTemplate("Backend/_layout.html.twig", "Backend/Survey/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        if ((0 === twig_compare(($context["surveyType"] ?? null), 0))) {
            // line 5
            echo "        <h3 class=\"page-title\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("survey", [], "bo_survey"), "html", null, true);
            echo "
            <small>";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list_survey", [], "bo_survey"), "html", null, true);
            echo "</small>
        </h3>
    ";
        } elseif ((0 === twig_compare(        // line 8
($context["surveyType"] ?? null), 1))) {
            // line 9
            echo "        <h3 class=\"page-title\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("preselection", [], "bo_survey"), "html", null, true);
            echo "
            <small>";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list_preselection", [], "bo_survey"), "html", null, true);
            echo "</small>
        </h3>
    ";
        } elseif ((0 === twig_compare(        // line 12
($context["surveyType"] ?? null), 2))) {
            // line 13
            echo "        <h3 class=\"page-title\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tests", [], "bo_survey"), "html", null, true);
            echo "
            <small>";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list_tests", [], "bo_survey"), "html", null, true);
            echo "</small>
        </h3>
    ";
        }
    }

    // line 19
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/datatables/datatables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
    }

    // line 24
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet-body\">
                <div class=\"table-toolbar\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"btn-group\">
                                ";
        // line 32
        if ((0 === twig_compare(($context["surveyType"] ?? null), 0))) {
            // line 33
            echo "                                    <a id=\"sample_editable_1_new\" class=\"btn sbold green\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_survey_new_enquete");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("add", [], "bo_survey"), "html", null, true);
            echo "
                                        <i class=\"fa fa-plus\"></i>
                                    </a>
                                ";
        } elseif ((0 === twig_compare(        // line 36
($context["surveyType"] ?? null), 1))) {
            // line 37
            echo "                                    <a id=\"sample_editable_1_new\" class=\"btn sbold green\" href=\"";
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("add", [], "bo_survey"), "html", null, true);
            echo "
                                        <i class=\"fa fa-plus\"></i>
                                    </a>
                                ";
        } elseif ((0 === twig_compare(        // line 40
($context["surveyType"] ?? null), 2))) {
            // line 41
            echo "                                    <a id=\"sample_editable_1_new\" class=\"btn sbold green\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_survey_new_test");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("add", [], "bo_survey"), "html", null, true);
            echo "
                                        <i class=\"fa fa-plus\"></i>
                                    </a>
                                ";
        }
        // line 45
        echo "                            </div>
                        </div>
                    </div>
                </div>
                <table id=\"table\" class=\"table table-striped table-bordered table-hover table-checkable order-column\">
                    <thead>
                        <tr>
                            <th style=\"width:80px;\">Id</th>
                            <th>
                                ";
        // line 54
        if ((0 === twig_compare(($context["surveyType"] ?? null), 0))) {
            // line 55
            echo "                                    ID ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("survey", [], "bo_survey"), "html", null, true);
            echo "
                                ";
        } elseif ((0 === twig_compare(        // line 56
($context["surveyType"] ?? null), 1))) {
            // line 57
            echo "                                    ID ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("preselection", [], "bo_survey"), "html", null, true);
            echo "
                                ";
        } elseif ((0 === twig_compare(        // line 58
($context["surveyType"] ?? null), 2))) {
            // line 59
            echo "                                    ID ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("test", [], "bo_survey"), "html", null, true);
            echo "
                                ";
        }
        // line 61
        echo "                            </th>
                            <th>";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("name", [], "bo_survey"), "html", null, true);
        echo "</th>
                            <th>";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("type", [], "bo_survey"), "html", null, true);
        echo "</th>
                            <th>";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("category", [], "bo_survey"), "html", null, true);
        echo "</th>
                            <th>";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("status", [], "bo_survey"), "html", null, true);
        echo "</th>
                            <th>";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("actions", [], "bo_survey"), "html", null, true);
        echo "</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["surveys"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["survey"]) {
            // line 71
            echo "                            <tr class=\"odd gradeX\">
                                <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "id", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>
                                <td>#";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "idSurvey", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
                                <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "name", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
                                <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "typeFormatted", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
                                <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "category", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
                                <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "statusFormatted", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_survey_show", ["id" => twig_get_attribute($this->env, $this->source, $context["survey"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            echo "\" class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("show_lowercase", [], "bo_survey"), "html", null, true);
            echo "</a>

                                    ";
            // line 81
            if ((0 === twig_compare(($context["surveyType"] ?? null), 0))) {
                // line 82
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_survey_enquete_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["survey"], "id", [], "any", false, false, false, 82)]), "html", null, true);
                echo "\" class=\"label label-success\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("edit", [], "bo_survey"), "html", null, true);
                echo "</a>
                                    ";
            } elseif ((0 === twig_compare(            // line 83
($context["surveyType"] ?? null), 1))) {
                // line 84
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_survey_pre_recrutements_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["survey"], "id", [], "any", false, false, false, 84)]), "html", null, true);
                echo "\" class=\"label label-success\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("edit", [], "bo_survey"), "html", null, true);
                echo "</a>
                                    ";
            } elseif ((0 === twig_compare(            // line 85
($context["surveyType"] ?? null), 2))) {
                // line 86
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_survey_test_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["survey"], "id", [], "any", false, false, false, 86)]), "html", null, true);
                echo "\" class=\"label label-success\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("edit", [], "bo_survey"), "html", null, true);
                echo "</a>
                                        <a href=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_focus_group_show", ["id" => twig_get_attribute($this->env, $this->source, $context["survey"], "id", [], "any", false, false, false, 87)]), "html", null, true);
                echo "\" class=\"label label-success\">focus group</a>
                                    ";
            }
            // line 89
            echo "                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['survey'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
    }

    // line 99
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function() {
            var table = \$('#table').dataTable({
              \"order\": [[ 0, \"desc\" ]],
              \"paginationType\": \"custom_bootstrap_number\",
              \"oLanguage\": {
                \"sSearch\": \"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("search", [], "bo_survey"), "html", null, true);
        echo "\",
                \"sLengthMenu\": \"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("show", [], "bo_survey"), "html", null, true);
        echo " _MENU_ ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("items", [], "bo_survey"), "html", null, true);
        echo "\",
              },
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "Backend/Survey/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 110,  321 => 109,  310 => 101,  305 => 100,  301 => 99,  292 => 92,  284 => 89,  279 => 87,  272 => 86,  270 => 85,  263 => 84,  261 => 83,  254 => 82,  252 => 81,  245 => 79,  240 => 77,  236 => 76,  232 => 75,  228 => 74,  224 => 73,  220 => 72,  217 => 71,  213 => 70,  206 => 66,  202 => 65,  198 => 64,  194 => 63,  190 => 62,  187 => 61,  181 => 59,  179 => 58,  174 => 57,  172 => 56,  167 => 55,  165 => 54,  154 => 45,  144 => 41,  142 => 40,  134 => 37,  132 => 36,  123 => 33,  121 => 32,  112 => 25,  108 => 24,  102 => 21,  97 => 20,  93 => 19,  85 => 14,  80 => 13,  78 => 12,  73 => 10,  68 => 9,  66 => 8,  61 => 6,  56 => 5,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Backend/Survey/index.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/Survey/index.html.twig");
    }
}
