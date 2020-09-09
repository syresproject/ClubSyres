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

/* Backend/Survey/show.html.twig */
class __TwigTemplate_63e0637b3bff653a5edd644e3180a105b9b4d2fc929d50e0e7f2273204b29a31 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/Survey/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/Survey/show.html.twig"));

        $this->parent = $this->loadTemplate("Backend/_layout.html.twig", "Backend/Survey/show.html.twig", 1);
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
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 4, $this->source); })()), "type", [], "any", false, false, false, 4), 0))) {
            // line 5
            echo "        <h3 class=\"page-title\"> Enquêtes
            <small>affichage d'une enquête</small>
        </h3>
    ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 8
(isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 8, $this->source); })()), "type", [], "any", false, false, false, 8), 1))) {
            // line 9
            echo "        <h3 class=\"page-title\"> Pré-recrutements
            <small>affichage d'un pré-recrutement</small>
        </h3>
    ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 12, $this->source); })()), "type", [], "any", false, false, false, 12), 2))) {
            // line 13
            echo "        <h3 class=\"page-title\"> Tests
            <small>affichage d'un test</small>
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
                        <label class=\"col-md-3 control-label\">Status</label>
                        <div class=\"col-md-4\">
                            <p class=\"form-control-static\">
                                ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 38, $this->source); })()), "statusFormatted", [], "any", false, false, false, 38), "html", null, true);
        echo "
                            </p>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\">ID Interne</label>
                        <div class=\"col-md-4\">
                            <p class=\"form-control-static\">
                                ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 46, $this->source); })()), "idSurvey", [], "any", false, false, false, 46), "html", null, true);
        echo "
                            </p>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\">Nom</label>
                        <div class=\"col-md-4\">
                            <p class=\"form-control-static\">
                                ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 54, $this->source); })()), "name", [], "any", false, false, false, 54), "html", null, true);
        echo "
                            </p>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\">Type</label>
                        <div class=\"col-md-4\">
                            <p class=\"form-control-static\">
                                ";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 62, $this->source); })()), "typeFormatted", [], "any", false, false, false, 62), "html", null, true);
        echo "
                            </p>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\">Catégorie</label>
                        <div class=\"col-md-4\">
                            <p class=\"form-control-static\">
                                ";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 70, $this->source); })()), "category", [], "any", false, false, false, 70), "html", null, true);
        echo "
                            </p>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\">Description</label>
                        <div class=\"col-md-4\">
                            <p class=\"form-control-static\">
                                ";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 78, $this->source); })()), "description", [], "any", false, false, false, 78), "html", null, true);
        echo "
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"form-actions\">
                    <div class=\"row\">
                        <div class=\"col-md-offset-3 col-md-9\">
                            ";
        // line 86
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 86, $this->source); })()), "type", [], "any", false, false, false, 86), 0))) {
            // line 87
            echo "                                <a class=\"btn default\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_survey_enquetes_index");
            echo "\">Retour</a>
                            ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 88
(isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 88, $this->source); })()), "type", [], "any", false, false, false, 88), 1))) {
            // line 89
            echo "                                <a class=\"btn default\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_survey_pre_recrutements_index");
            echo "\">Retour</a>
                            ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 90
(isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 90, $this->source); })()), "type", [], "any", false, false, false, 90), 2))) {
            // line 91
            echo "                                <a class=\"btn default\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_survey_tests_index");
            echo "\">Retour</a>
                            ";
        }
        // line 93
        echo "                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class=\"portlet light bordered\">
        <div class=\"portlet-title\">
            <div class=\"caption\">
                <span class=\"caption-subject font-red-sunglo bold uppercase\">Questionnaires</span>
            </div>
        </div>
        <div class=\"portlet-body\">
            <table id=\"table_links\" class=\"table table-striped table-bordered table-hover table-checkable order-column\">
                <thead>
                <tr>
                    <th style=\"width:80px;\">Id</th>
                    <th>Nom</th>
                    <th>Url</th>
                    <th>Accès</th>
                    <th>Réponses</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 118, $this->source); })()), "links", [], "any", false, false, false, 118));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 119
            echo "                    <tr class=\"odd gradeX\">
                        <td>";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "id", [], "any", false, false, false, 120), "html", null, true);
            echo "</td>
                        <td>";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 121), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "link", [], "any", false, false, false, 122), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "link", [], "any", false, false, false, 122), "html", null, true);
            echo "</a></td>
                        <td>
                            <a href=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_link_access_details", ["link" => twig_get_attribute($this->env, $this->source, $context["link"], "id", [], "any", false, false, false, 124)]), "html", null, true);
            echo "\" class=\"label label-success\">historique des accès</a>
                        </td>
                        <td>
                            <a href=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_link_replies_details", ["link" => twig_get_attribute($this->env, $this->source, $context["link"], "id", [], "any", false, false, false, 127)]), "html", null, true);
            echo "\" class=\"label label-success\">détails des réponses</a>
                          ";
            // line 131
            echo "                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "                </tbody>
            </table>
        </div>
    </div>

    <div class=\"portlet light bordered\">
        <div class=\"portlet-title\">
            <div class=\"caption\">
                <span class=\"caption-subject font-red-sunglo bold uppercase\">Panélistes</span>
            </div>
        </div>
        <div class=\"portlet-body\">
            <table id=\"table_users\" class=\"table table-striped table-bordered table-hover table-checkable order-column\">
                <thead>
                <tr>
                    <th>ID Panéliste</th>
                    <th>Titre</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Né le</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 159
        if (twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 159, $this->source); })()), "panelisteGroup", [], "any", false, false, false, 159)) {
            // line 160
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 160, $this->source); })()), "panelisteGroup", [], "any", false, false, false, 160), "users", [], "any", false, false, false, 160));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 161
                echo "                        <tr class=\"odd gradeX\">
                            <td><a href=\"";
                // line 162
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["entity"], "id", [], "any", false, false, false, 162)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "idPaneliste", [], "any", false, false, false, 162), "html", null, true);
                echo "</a></td>
                            <td>";
                // line 163
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "title", [], "any", false, false, false, 163), "html", null, true);
                echo "</td>
                            <td>";
                // line 164
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "lastname", [], "any", false, false, false, 164), "html", null, true);
                echo "</td>
                            <td>";
                // line 165
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "firstname", [], "any", false, false, false, 165), "html", null, true);
                echo "</td>
                            <td>";
                // line 166
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "birthdate", [], "any", false, false, false, 166), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 167
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "email", [], "any", false, false, false, 167), "html", null, true);
                echo "</td>
                            <td>
                                <a href=\"";
                // line 169
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["entity"], "id", [], "any", false, false, false, 169)]), "html", null, true);
                echo "\" class=\"label label-success\">afficher</a>
                                <a href=\"";
                // line 170
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["entity"], "id", [], "any", false, false, false, 170)]), "html", null, true);
                echo "\" class=\"label label-success\">éditer</a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "                ";
        }
        // line 175
        echo "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 181
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 182
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$('#table_links').dataTable({
                \"order\": [[ 0, \"desc\" ]]
            });

            \$('#table_users').dataTable({
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
        return "Backend/Survey/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 183,  414 => 182,  404 => 181,  390 => 175,  387 => 174,  377 => 170,  373 => 169,  368 => 167,  364 => 166,  360 => 165,  356 => 164,  352 => 163,  346 => 162,  343 => 161,  338 => 160,  336 => 159,  309 => 134,  301 => 131,  297 => 127,  291 => 124,  284 => 122,  280 => 121,  276 => 120,  273 => 119,  269 => 118,  242 => 93,  236 => 91,  234 => 90,  229 => 89,  227 => 88,  222 => 87,  220 => 86,  209 => 78,  198 => 70,  187 => 62,  176 => 54,  165 => 46,  154 => 38,  139 => 25,  129 => 24,  117 => 21,  112 => 20,  102 => 19,  88 => 13,  86 => 12,  81 => 9,  79 => 8,  74 => 5,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Backend/_layout.html.twig' %}

{% block page_title %}
    {% if survey.type == 0 %}
        <h3 class=\"page-title\"> Enquêtes
            <small>affichage d'une enquête</small>
        </h3>
    {% elseif survey.type == 1 %}
        <h3 class=\"page-title\"> Pré-recrutements
            <small>affichage d'un pré-recrutement</small>
        </h3>
    {% elseif survey.type == 2 %}
        <h3 class=\"page-title\"> Tests
            <small>affichage d'un test</small>
        </h3>
    {% endif %}
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
                        <label class=\"col-md-3 control-label\">Status</label>
                        <div class=\"col-md-4\">
                            <p class=\"form-control-static\">
                                {{ survey.statusFormatted }}
                            </p>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\">ID Interne</label>
                        <div class=\"col-md-4\">
                            <p class=\"form-control-static\">
                                {{ survey.idSurvey }}
                            </p>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\">Nom</label>
                        <div class=\"col-md-4\">
                            <p class=\"form-control-static\">
                                {{ survey.name }}
                            </p>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\">Type</label>
                        <div class=\"col-md-4\">
                            <p class=\"form-control-static\">
                                {{ survey.typeFormatted }}
                            </p>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\">Catégorie</label>
                        <div class=\"col-md-4\">
                            <p class=\"form-control-static\">
                                {{ survey.category }}
                            </p>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\">Description</label>
                        <div class=\"col-md-4\">
                            <p class=\"form-control-static\">
                                {{ survey.description }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"form-actions\">
                    <div class=\"row\">
                        <div class=\"col-md-offset-3 col-md-9\">
                            {% if survey.type == 0 %}
                                <a class=\"btn default\" href=\"{{ path('admin_survey_enquetes_index') }}\">Retour</a>
                            {% elseif survey.type == 1 %}
                                <a class=\"btn default\" href=\"{{ path('admin_survey_pre_recrutements_index') }}\">Retour</a>
                            {% elseif survey.type == 2 %}
                                <a class=\"btn default\" href=\"{{ path('admin_survey_tests_index') }}\">Retour</a>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class=\"portlet light bordered\">
        <div class=\"portlet-title\">
            <div class=\"caption\">
                <span class=\"caption-subject font-red-sunglo bold uppercase\">Questionnaires</span>
            </div>
        </div>
        <div class=\"portlet-body\">
            <table id=\"table_links\" class=\"table table-striped table-bordered table-hover table-checkable order-column\">
                <thead>
                <tr>
                    <th style=\"width:80px;\">Id</th>
                    <th>Nom</th>
                    <th>Url</th>
                    <th>Accès</th>
                    <th>Réponses</th>
                </tr>
                </thead>
                <tbody>
                {% for link in survey.links %}
                    <tr class=\"odd gradeX\">
                        <td>{{ link.id }}</td>
                        <td>{{ link.name }}</td>
                        <td><a href=\"{{ link.link }}\" target=\"_blank\">{{ link.link }}</a></td>
                        <td>
                            <a href=\"{{ path('admin_link_access_details', {'link' : link.id}) }}\" class=\"label label-success\">historique des accès</a>
                        </td>
                        <td>
                            <a href=\"{{ path('admin_link_replies_details', {'link' : link.id}) }}\" class=\"label label-success\">détails des réponses</a>
                          {# <a href=\"{{ path('admin_link_sync_replies', {'link' : link.id}) }}\" class=\"label label-success\">sync. des réponses</a>
                            <span class=\"alert-danger\">Fichier excel uniquement</span>
                            #}
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>

    <div class=\"portlet light bordered\">
        <div class=\"portlet-title\">
            <div class=\"caption\">
                <span class=\"caption-subject font-red-sunglo bold uppercase\">Panélistes</span>
            </div>
        </div>
        <div class=\"portlet-body\">
            <table id=\"table_users\" class=\"table table-striped table-bordered table-hover table-checkable order-column\">
                <thead>
                <tr>
                    <th>ID Panéliste</th>
                    <th>Titre</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Né le</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                {% if survey.panelisteGroup %}
                    {% for entity in survey.panelisteGroup.users %}
                        <tr class=\"odd gradeX\">
                            <td><a href=\"{{ path('admin_user_show', { 'id': entity.id }) }}\">{{ entity.idPaneliste }}</a></td>
                            <td>{{ entity.title }}</td>
                            <td>{{ entity.lastname }}</td>
                            <td>{{ entity.firstname }}</td>
                            <td>{{ entity.birthdate | date('d/m/Y') }}</td>
                            <td>{{ entity.email }}</td>
                            <td>
                                <a href=\"{{ path('admin_user_show', { 'id': entity.id }) }}\" class=\"label label-success\">afficher</a>
                                <a href=\"{{ path('admin_user_edit', { 'id': entity.id }) }}\" class=\"label label-success\">éditer</a>
                            </td>
                        </tr>
                    {% endfor %}
                {% endif %}
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
            \$('#table_links').dataTable({
                \"order\": [[ 0, \"desc\" ]]
            });

            \$('#table_users').dataTable({
                \"order\": [[ 0, \"desc\" ]]
            });
        });
    </script>
{% endblock %}
", "Backend/Survey/show.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/Survey/show.html.twig");
    }
}
