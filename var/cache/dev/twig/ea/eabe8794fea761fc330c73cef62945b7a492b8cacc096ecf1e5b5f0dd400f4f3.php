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
class __TwigTemplate_6b60693e86e311524d94b8776fc19da7bf97c22cb58431fb6dd556e81696df8f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/Category/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/Category/show.html.twig"));

        $this->parent = $this->loadTemplate("Backend/_layout.html.twig", "Backend/Category/show.html.twig", 1);
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
        echo "    <h3 class=\"page-title\"> Catégories
        <small>affichage d'une catégorie</small>
    </h3>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 10
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/datatables/datatables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 64, $this->source); })()), "surveys", [], "any", false, false, false, 64));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 148, $this->source); })()), "surveys", [], "any", false, false, false, 148));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 170
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  341 => 172,  336 => 171,  326 => 170,  312 => 164,  306 => 163,  299 => 159,  295 => 158,  290 => 156,  286 => 155,  282 => 154,  278 => 153,  274 => 152,  270 => 151,  267 => 150,  264 => 149,  260 => 148,  237 => 127,  230 => 80,  224 => 79,  217 => 75,  213 => 74,  208 => 72,  204 => 71,  200 => 70,  196 => 69,  192 => 68,  188 => 67,  185 => 66,  182 => 65,  178 => 64,  147 => 36,  136 => 28,  121 => 15,  111 => 14,  99 => 11,  94 => 10,  84 => 9,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Backend/_layout.html.twig' %}

{% block page_title %}
    <h3 class=\"page-title\"> Catégories
        <small>affichage d'une catégorie</small>
    </h3>
{% endblock %}

{% block stylesheet %}
    <link href=\"{{ asset('backend/assets/global/plugins/datatables/datatables.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('backend/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
{% endblock %}

{% block content %}
    <div class=\"portlet light bordered\">
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
                                {{ category.name }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"form-actions\">
                    <div class=\"row\">
                        <div class=\"col-md-offset-3 col-md-9\">
                            <a class=\"btn default\" href=\"{{ path('admin_category_index') }}\">Retour</a>
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
                {% for survey in category.surveys %}
                    {% if survey.type == 0 %}
                        <tr class=\"odd gradeX\">
                            <td>{{ survey.id }}</td>
                            <td>#{{ survey.idSurvey }}</td>
                            <td>{{ survey.name }}</td>
                            <td>{{ survey.typeFormatted }}</td>
                            <td>{{ survey.category }}</td>
                            <td>{{ survey.statusFormatted }}</td>
                            <td>
                                <a href=\"{{ path('admin_survey_show', { 'id': survey.id }) }}\" class=\"label label-success\">afficher</a>
                                <a href=\"{{ path('admin_survey_enquete_edit', { 'id': survey.id }) }}\" class=\"label label-success\">éditer</a>
                            </td>
                        </tr>
                    {% endif %}
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>

    {#
    <div class=\"portlet light bordered\">
        <div class=\"portlet-title\">
            <div class=\"caption\">
                <span class=\"caption-subject font-red-sunglo bold uppercase\">Liste des pré-recrutements de la catégorie</span>
            </div>
        </div>
        <div class=\"portlet-body\">
            <table id=\"table_pre-recrutements\" class=\"table table-striped table-bordered table-hover table-checkable order-column\">
                <thead>
                <tr>
                    <th style=\"width:80px;\">Id</th>
                    <th>ID Pré-recrutement</th>
                    <th>Nom</th>
                    <th>Type</th>
                    <th>Catégorie</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                {% for survey in category.surveys %}
                    {% if survey.type == 1 %}
                        <tr class=\"odd gradeX\">
                            <td>{{ survey.id }}</td>
                            <td>#{{ survey.idSurvey }}</td>
                            <td>{{ survey.name }}</td>
                            <td>{{ survey.typeFormatted }}</td>
                            <td>{{ survey.category }}</td>
                            <td>{{ survey.statusFormatted }}</td>
                            <td>
                                <a href=\"{{ path('admin_survey_show', { 'id': survey.id }) }}\" class=\"label label-success\">afficher</a>
                                <a href=\"{{ path('admin_survey_pre_recrutement_edit', { 'id': survey.id }) }}\" class=\"label label-success\">éditer</a>
                            </td>
                        </tr>
                    {% endif %}
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
    #}

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
                {% for survey in category.surveys %}
                    {% if survey.type == 2 %}
                        <tr class=\"odd gradeX\">
                            <td>{{ survey.id }}</td>
                            <td>#{{ survey.idSurvey }}</td>
                            <td>{{ survey.name }}</td>
                            <td>{{ survey.typeFormatted }}</td>
                            <td>{{ survey.category }}</td>
                            <td>{{ survey.statusFormatted }}</td>
                            <td>
                                <a href=\"{{ path('admin_survey_show', { 'id': survey.id }) }}\" class=\"label label-success\">afficher</a>
                                <a href=\"{{ path('admin_survey_test_edit', { 'id': survey.id }) }}\" class=\"label label-success\">éditer</a>
                            </td>
                        </tr>
                    {% endif %}
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}

{% block javascript %}
    <script src=\"{{ asset('backend/assets/global/plugins/datatables/datatables.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('backend/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}\" type=\"text/javascript\"></script>

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
{% endblock %}
", "Backend/Category/show.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/Category/show.html.twig");
    }
}
