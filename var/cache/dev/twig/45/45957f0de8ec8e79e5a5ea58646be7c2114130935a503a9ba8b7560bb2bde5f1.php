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
class __TwigTemplate_96b503f6e329bf0e807976f4be3685c891050d8c356d471c2ff56f7c1a3619c0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/Survey/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/Survey/index.html.twig"));

        $this->parent = $this->loadTemplate("Backend/_layout.html.twig", "Backend/Survey/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        // line 4
        echo "    ";
        if ((0 === twig_compare((isset($context["surveyType"]) || array_key_exists("surveyType", $context) ? $context["surveyType"] : (function () { throw new RuntimeError('Variable "surveyType" does not exist.', 4, $this->source); })()), 0))) {
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
(isset($context["surveyType"]) || array_key_exists("surveyType", $context) ? $context["surveyType"] : (function () { throw new RuntimeError('Variable "surveyType" does not exist.', 8, $this->source); })()), 1))) {
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
(isset($context["surveyType"]) || array_key_exists("surveyType", $context) ? $context["surveyType"] : (function () { throw new RuntimeError('Variable "surveyType" does not exist.', 12, $this->source); })()), 2))) {
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 20
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/datatables/datatables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

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
        if ((0 === twig_compare((isset($context["surveyType"]) || array_key_exists("surveyType", $context) ? $context["surveyType"] : (function () { throw new RuntimeError('Variable "surveyType" does not exist.', 32, $this->source); })()), 0))) {
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
(isset($context["surveyType"]) || array_key_exists("surveyType", $context) ? $context["surveyType"] : (function () { throw new RuntimeError('Variable "surveyType" does not exist.', 36, $this->source); })()), 1))) {
            // line 37
            echo "                                    <a id=\"sample_editable_1_new\" class=\"btn sbold green\" href=\"";
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("add", [], "bo_survey"), "html", null, true);
            echo "
                                        <i class=\"fa fa-plus\"></i>
                                    </a>
                                ";
        } elseif ((0 === twig_compare(        // line 40
(isset($context["surveyType"]) || array_key_exists("surveyType", $context) ? $context["surveyType"] : (function () { throw new RuntimeError('Variable "surveyType" does not exist.', 40, $this->source); })()), 2))) {
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
        if ((0 === twig_compare((isset($context["surveyType"]) || array_key_exists("surveyType", $context) ? $context["surveyType"] : (function () { throw new RuntimeError('Variable "surveyType" does not exist.', 54, $this->source); })()), 0))) {
            // line 55
            echo "                                    ID ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("survey", [], "bo_survey"), "html", null, true);
            echo "
                                ";
        } elseif ((0 === twig_compare(        // line 56
(isset($context["surveyType"]) || array_key_exists("surveyType", $context) ? $context["surveyType"] : (function () { throw new RuntimeError('Variable "surveyType" does not exist.', 56, $this->source); })()), 1))) {
            // line 57
            echo "                                    ID ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("preselection", [], "bo_survey"), "html", null, true);
            echo "
                                ";
        } elseif ((0 === twig_compare(        // line 58
(isset($context["surveyType"]) || array_key_exists("surveyType", $context) ? $context["surveyType"] : (function () { throw new RuntimeError('Variable "surveyType" does not exist.', 58, $this->source); })()), 2))) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["surveys"]) || array_key_exists("surveys", $context) ? $context["surveys"] : (function () { throw new RuntimeError('Variable "surveys" does not exist.', 70, $this->source); })()));
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
            if ((0 === twig_compare((isset($context["surveyType"]) || array_key_exists("surveyType", $context) ? $context["surveyType"] : (function () { throw new RuntimeError('Variable "surveyType" does not exist.', 81, $this->source); })()), 0))) {
                // line 82
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_survey_enquete_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["survey"], "id", [], "any", false, false, false, 82)]), "html", null, true);
                echo "\" class=\"label label-success\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("edit", [], "bo_survey"), "html", null, true);
                echo "</a>
                                    ";
            } elseif ((0 === twig_compare(            // line 83
(isset($context["surveyType"]) || array_key_exists("surveyType", $context) ? $context["surveyType"] : (function () { throw new RuntimeError('Variable "surveyType" does not exist.', 83, $this->source); })()), 1))) {
                // line 84
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_survey_pre_recrutements_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["survey"], "id", [], "any", false, false, false, 84)]), "html", null, true);
                echo "\" class=\"label label-success\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("edit", [], "bo_survey"), "html", null, true);
                echo "</a>
                                    ";
            } elseif ((0 === twig_compare(            // line 85
(isset($context["surveyType"]) || array_key_exists("surveyType", $context) ? $context["surveyType"] : (function () { throw new RuntimeError('Variable "surveyType" does not exist.', 85, $this->source); })()), 2))) {
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 99
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  379 => 110,  375 => 109,  364 => 101,  359 => 100,  349 => 99,  334 => 92,  326 => 89,  321 => 87,  314 => 86,  312 => 85,  305 => 84,  303 => 83,  296 => 82,  294 => 81,  287 => 79,  282 => 77,  278 => 76,  274 => 75,  270 => 74,  266 => 73,  262 => 72,  259 => 71,  255 => 70,  248 => 66,  244 => 65,  240 => 64,  236 => 63,  232 => 62,  229 => 61,  223 => 59,  221 => 58,  216 => 57,  214 => 56,  209 => 55,  207 => 54,  196 => 45,  186 => 41,  184 => 40,  176 => 37,  174 => 36,  165 => 33,  163 => 32,  154 => 25,  144 => 24,  132 => 21,  127 => 20,  117 => 19,  103 => 14,  98 => 13,  96 => 12,  91 => 10,  86 => 9,  84 => 8,  79 => 6,  74 => 5,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Backend/_layout.html.twig' %}

{% block page_title %}
    {% if surveyType == 0 %}
        <h3 class=\"page-title\">{{ 'survey' |trans({}, 'bo_survey') }}
            <small>{{ 'list_survey' |trans({}, 'bo_survey') }}</small>
        </h3>
    {% elseif surveyType == 1 %}
        <h3 class=\"page-title\">{{ 'preselection' |trans({}, 'bo_survey') }}
            <small>{{ 'list_preselection' |trans({}, 'bo_survey') }}</small>
        </h3>
    {% elseif surveyType == 2 %}
        <h3 class=\"page-title\">{{ 'tests' |trans({}, 'bo_survey') }}
            <small>{{ 'list_tests' |trans({}, 'bo_survey') }}</small>
        </h3>
    {% endif %}
{% endblock %}

{% block stylesheet %}
    <link href=\"{{ asset('backend/assets/global/plugins/datatables/datatables.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('backend/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
{% endblock %}

{% block content %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet-body\">
                <div class=\"table-toolbar\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"btn-group\">
                                {% if surveyType == 0 %}
                                    <a id=\"sample_editable_1_new\" class=\"btn sbold green\" href=\"{{ path('admin_survey_new_enquete') }}\">{{ 'add' |trans({}, 'bo_survey') }}
                                        <i class=\"fa fa-plus\"></i>
                                    </a>
                                {% elseif surveyType == 1 %}
                                    <a id=\"sample_editable_1_new\" class=\"btn sbold green\" href=\"{#{ path('backend_survey_pre-recrutement_new') }#}\">{{ 'add' |trans({}, 'bo_survey') }}
                                        <i class=\"fa fa-plus\"></i>
                                    </a>
                                {% elseif surveyType == 2 %}
                                    <a id=\"sample_editable_1_new\" class=\"btn sbold green\" href=\"{{ path('admin_survey_new_test') }}\">{{ 'add' |trans({}, 'bo_survey') }}
                                        <i class=\"fa fa-plus\"></i>
                                    </a>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
                <table id=\"table\" class=\"table table-striped table-bordered table-hover table-checkable order-column\">
                    <thead>
                        <tr>
                            <th style=\"width:80px;\">Id</th>
                            <th>
                                {% if surveyType == 0 %}
                                    ID {{ 'survey' |trans({}, 'bo_survey') }}
                                {% elseif surveyType == 1 %}
                                    ID {{ 'preselection' |trans({}, 'bo_survey') }}
                                {% elseif surveyType == 2 %}
                                    ID {{ 'test' |trans({}, 'bo_survey') }}
                                {% endif %}
                            </th>
                            <th>{{ 'name' |trans({}, 'bo_survey') }}</th>
                            <th>{{ 'type' |trans({}, 'bo_survey') }}</th>
                            <th>{{ 'category' |trans({}, 'bo_survey') }}</th>
                            <th>{{ 'status' |trans({}, 'bo_survey') }}</th>
                            <th>{{ 'actions' |trans({}, 'bo_survey') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for survey in surveys %}
                            <tr class=\"odd gradeX\">
                                <td>{{ survey.id }}</td>
                                <td>#{{ survey.idSurvey }}</td>
                                <td>{{ survey.name }}</td>
                                <td>{{ survey.typeFormatted }}</td>
                                <td>{{ survey.category }}</td>
                                <td>{{ survey.statusFormatted }}</td>
                                <td>
                                    <a href=\"{{ path('admin_survey_show', { 'id': survey.id }) }}\" class=\"label label-success\">{{ 'show_lowercase' |trans({}, 'bo_survey') }}</a>

                                    {% if surveyType == 0 %}
                                        <a href=\"{{ path('admin_survey_enquete_edit', { 'id': survey.id }) }}\" class=\"label label-success\">{{ 'edit' |trans({}, 'bo_survey') }}</a>
                                    {% elseif surveyType == 1 %}
                                        <a href=\"{{ path('admin_survey_pre_recrutements_edit', { 'id': survey.id }) }}\" class=\"label label-success\">{{ 'edit' |trans({}, 'bo_survey') }}</a>
                                    {% elseif surveyType == 2 %}
                                        <a href=\"{{ path('admin_survey_test_edit', { 'id': survey.id }) }}\" class=\"label label-success\">{{ 'edit' |trans({}, 'bo_survey') }}</a>
                                        <a href=\"{{ path('admin_focus_group_show', { 'id': survey.id }) }}\" class=\"label label-success\">focus group</a>
                                    {% endif %}
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascript %}
    <script src=\"{{ asset('backend/assets/global/plugins/datatables/datatables.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('backend/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}\" type=\"text/javascript\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function() {
            var table = \$('#table').dataTable({
              \"order\": [[ 0, \"desc\" ]],
              \"paginationType\": \"custom_bootstrap_number\",
              \"oLanguage\": {
                \"sSearch\": \"{{ 'search' |trans({}, 'bo_survey') }}\",
                \"sLengthMenu\": \"{{ 'show' |trans({}, 'bo_survey') }} _MENU_ {{ 'items' |trans({}, 'bo_survey') }}\",
              },
            });
        });
    </script>
{% endblock %}
", "Backend/Survey/index.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/Survey/index.html.twig");
    }
}
