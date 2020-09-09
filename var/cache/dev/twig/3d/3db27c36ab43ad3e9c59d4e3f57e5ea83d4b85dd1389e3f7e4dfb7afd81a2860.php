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

/* Backend/Link/replies_details.html.twig */
class __TwigTemplate_e3f66a86d76210bc7597ea35c46f6720094b69bebba79bce50a525dd279c91fa extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/Link/replies_details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/Link/replies_details.html.twig"));

        $this->parent = $this->loadTemplate("Backend/_layout.html.twig", "Backend/Link/replies_details.html.twig", 1);
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
        echo "    <h3 class=\"page-title\"> Historique des réponses
        <small>historique des réponses au questionnaire</small>
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
    <style>
        #d-none{
            display: none;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 20
        echo "    <div class=\"portlet light bordered\">
        <div class=\"portlet-title\">
            <div class=\"caption\">
                <span class=\"caption-subject font-red-sunglo bold uppercase\">Questionnaire</span>
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
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33), "html", null, true);
        echo "
                            </p>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\">Url</label>
                        <div class=\"col-md-4\">
                            <p class=\"form-control-static\">
                                <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 41, $this->source); })()), "link", [], "any", false, false, false, 41), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 41, $this->source); })()), "link", [], "any", false, false, false, 41), "html", null, true);
        echo "</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"form-actions\">
                    <div class=\"row\">
                        <div class=\"col-md-offset-3 col-md-9\">
                            <a class=\"btn default\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_survey_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 49, $this->source); })()), "survey", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49)]), "html", null, true);
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
                <span class=\"caption-subject font-red-sunglo bold uppercase\">Détails des réponses</span>
            </div>
        </div>
        <div class=\"portlet-body\">
            <table id=\"table_access\" class=\"table table-striped table-bordered table-hover table-checkable order-column\">
                <thead>
                <tr>
                    <th>ID Panéliste</th>
                    <th>Titre</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["linkLogs"]) || array_key_exists("linkLogs", $context) ? $context["linkLogs"] : (function () { throw new RuntimeError('Variable "linkLogs" does not exist.', 74, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["linkLog"]) {
            // line 75
            echo "                    <tr class=\"odd gradeX\">
                        <td>#";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["linkLog"], "user", [], "any", false, false, false, 76), "idPaneliste", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
                        <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["linkLog"], "user", [], "any", false, false, false, 77), "title", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
                        <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["linkLog"], "user", [], "any", false, false, false, 78), "lastname", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>
                        <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["linkLog"], "user", [], "any", false, false, false, 79), "firstname", [], "any", false, false, false, 79), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['linkLog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                </tbody>
            </table>
        </div>
    </div>

    <div class=\"portlet light bordered\">
        <div class=\"portlet-title\">
            <div class=\"caption\">
                <span class=\"caption-subject font-red-sunglo bold uppercase\">En attente</span>
            </div>
            <div class=\"actions\" id=\"d-none\">
                <div class=\"btn-group btn-group-devided\">
                    <a href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_link_export-missings", ["link" => twig_get_attribute($this->env, $this->source, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 94, $this->source); })()), "id", [], "any", false, false, false, 94)]), "html", null, true);
        echo "\" class=\"btn red-pink btn-sm active\" target=\"_blank\">Exporter</a>
                </div>
            </div>
        </div>
        <div class=\"portlet-body\">
            <table id=\"table_waiting\" class=\"table table-striped table-bordered table-hover table-checkable order-column\">
                <thead>
                <tr>
                    <th style=\"width:80px;\">Id</th>
                    <th>ID Panéliste</th>
                    <th>Titre</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["panelistes"]) || array_key_exists("panelistes", $context) ? $context["panelistes"] : (function () { throw new RuntimeError('Variable "panelistes" does not exist.', 110, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["paneliste"]) {
            // line 111
            echo "                    ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["history"] ?? null), twig_get_attribute($this->env, $this->source, $context["paneliste"], "id", [], "any", false, false, false, 111), [], "array", true, true, false, 111)) {
                // line 112
                echo "                        <tr class=\"odd gradeX\">
                            <td>";
                // line 113
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paneliste"], "id", [], "any", false, false, false, 113), "html", null, true);
                echo "</td>
                            <td>#";
                // line 114
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paneliste"], "idPaneliste", [], "any", false, false, false, 114), "html", null, true);
                echo "</td>
                            <td>";
                // line 115
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paneliste"], "title", [], "any", false, false, false, 115), "html", null, true);
                echo "</td>
                            <td>";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paneliste"], "lastname", [], "any", false, false, false, 116), "html", null, true);
                echo "</td>
                            <td>";
                // line 117
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paneliste"], "firstname", [], "any", false, false, false, 117), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            // line 120
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paneliste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 127
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 128
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$('#table_access').dataTable({
                \"order\": [[ 0, \"desc\" ]]
            });

            \$('#table_waiting').dataTable({
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
        return "Backend/Link/replies_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 129,  316 => 128,  306 => 127,  292 => 121,  286 => 120,  280 => 117,  276 => 116,  272 => 115,  268 => 114,  264 => 113,  261 => 112,  258 => 111,  254 => 110,  235 => 94,  221 => 82,  212 => 79,  208 => 78,  204 => 77,  200 => 76,  197 => 75,  193 => 74,  165 => 49,  152 => 41,  141 => 33,  126 => 20,  116 => 19,  99 => 11,  94 => 10,  84 => 9,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Backend/_layout.html.twig' %}

{% block page_title %}
    <h3 class=\"page-title\"> Historique des réponses
        <small>historique des réponses au questionnaire</small>
    </h3>
{% endblock %}

{% block stylesheet %}
    <link href=\"{{ asset('backend/assets/global/plugins/datatables/datatables.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('backend/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <style>
        #d-none{
            display: none;
        }
    </style>
{% endblock %}

{% block content %}
    <div class=\"portlet light bordered\">
        <div class=\"portlet-title\">
            <div class=\"caption\">
                <span class=\"caption-subject font-red-sunglo bold uppercase\">Questionnaire</span>
            </div>
        </div>
        <div class=\"portlet-body form\">
            <form action=\"#\" class=\"form-horizontal\">
                <div class=\"form-body\">
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\">Nom</label>
                        <div class=\"col-md-4\">
                            <p class=\"form-control-static\">
                                {{ link.name }}
                            </p>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\">Url</label>
                        <div class=\"col-md-4\">
                            <p class=\"form-control-static\">
                                <a href=\"{{ link.link }}\" target=\"_blank\">{{ link.link }}</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"form-actions\">
                    <div class=\"row\">
                        <div class=\"col-md-offset-3 col-md-9\">
                            <a class=\"btn default\" href=\"{{ path('admin_survey_show', {'id':link.survey.id}) }}\">Retour</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class=\"portlet light bordered\">
        <div class=\"portlet-title\">
            <div class=\"caption\">
                <span class=\"caption-subject font-red-sunglo bold uppercase\">Détails des réponses</span>
            </div>
        </div>
        <div class=\"portlet-body\">
            <table id=\"table_access\" class=\"table table-striped table-bordered table-hover table-checkable order-column\">
                <thead>
                <tr>
                    <th>ID Panéliste</th>
                    <th>Titre</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                </tr>
                </thead>
                <tbody>
                {% for linkLog in linkLogs %}
                    <tr class=\"odd gradeX\">
                        <td>#{{ linkLog.user.idPaneliste }}</td>
                        <td>{{ linkLog.user.title }}</td>
                        <td>{{ linkLog.user.lastname }}</td>
                        <td>{{ linkLog.user.firstname }}</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>

    <div class=\"portlet light bordered\">
        <div class=\"portlet-title\">
            <div class=\"caption\">
                <span class=\"caption-subject font-red-sunglo bold uppercase\">En attente</span>
            </div>
            <div class=\"actions\" id=\"d-none\">
                <div class=\"btn-group btn-group-devided\">
                    <a href=\"{{ path('admin_link_export-missings', {'link' : link.id}) }}\" class=\"btn red-pink btn-sm active\" target=\"_blank\">Exporter</a>
                </div>
            </div>
        </div>
        <div class=\"portlet-body\">
            <table id=\"table_waiting\" class=\"table table-striped table-bordered table-hover table-checkable order-column\">
                <thead>
                <tr>
                    <th style=\"width:80px;\">Id</th>
                    <th>ID Panéliste</th>
                    <th>Titre</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                </tr>
                </thead>
                <tbody>
                {% for paneliste in panelistes %}
                    {% if history[paneliste.id] is not defined %}
                        <tr class=\"odd gradeX\">
                            <td>{{ paneliste.id }}</td>
                            <td>#{{ paneliste.idPaneliste }}</td>
                            <td>{{ paneliste.title }}</td>
                            <td>{{ paneliste.lastname }}</td>
                            <td>{{ paneliste.firstname }}</td>
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
            \$('#table_access').dataTable({
                \"order\": [[ 0, \"desc\" ]]
            });

            \$('#table_waiting').dataTable({
                \"order\": [[ 0, \"desc\" ]]
            });
        });
    </script>
{% endblock %}
", "Backend/Link/replies_details.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/Link/replies_details.html.twig");
    }
}
