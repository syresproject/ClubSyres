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
class __TwigTemplate_b1ec0f1ee794532b2d04536927832da4a9f76708d3a5d204c02d16e24f80a6c1 extends Template
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
        $this->parent = $this->loadTemplate("Backend/_layout.html.twig", "Backend/Survey/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "type", [], "any", false, false, false, 4), 0))) {
            // line 5
            echo "        <h3 class=\"page-title\"> Enquêtes
            <small>affichage d'une enquête</small>
        </h3>
    ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 8
($context["survey"] ?? null), "type", [], "any", false, false, false, 8), 1))) {
            // line 9
            echo "        <h3 class=\"page-title\"> Pré-recrutements
            <small>affichage d'un pré-recrutement</small>
        </h3>
    ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 12
($context["survey"] ?? null), "type", [], "any", false, false, false, 12), 2))) {
            // line 13
            echo "        <h3 class=\"page-title\"> Tests
            <small>affichage d'un test</small>
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "statusFormatted", [], "any", false, false, false, 38), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "idSurvey", [], "any", false, false, false, 46), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "name", [], "any", false, false, false, 54), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "typeFormatted", [], "any", false, false, false, 62), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "category", [], "any", false, false, false, 70), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "description", [], "any", false, false, false, 78), "html", null, true);
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
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "type", [], "any", false, false, false, 86), 0))) {
            // line 87
            echo "                                <a class=\"btn default\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_survey_enquetes_index");
            echo "\">Retour</a>
                            ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 88
($context["survey"] ?? null), "type", [], "any", false, false, false, 88), 1))) {
            // line 89
            echo "                                <a class=\"btn default\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_survey_pre_recrutements_index");
            echo "\">Retour</a>
                            ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 90
($context["survey"] ?? null), "type", [], "any", false, false, false, 90), 2))) {
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "links", [], "any", false, false, false, 118));
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
        if (twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "panelisteGroup", [], "any", false, false, false, 159)) {
            // line 160
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "panelisteGroup", [], "any", false, false, false, 160), "users", [], "any", false, false, false, 160));
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
    }

    // line 181
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  365 => 183,  360 => 182,  356 => 181,  348 => 175,  345 => 174,  335 => 170,  331 => 169,  326 => 167,  322 => 166,  318 => 165,  314 => 164,  310 => 163,  304 => 162,  301 => 161,  296 => 160,  294 => 159,  267 => 134,  259 => 131,  255 => 127,  249 => 124,  242 => 122,  238 => 121,  234 => 120,  231 => 119,  227 => 118,  200 => 93,  194 => 91,  192 => 90,  187 => 89,  185 => 88,  180 => 87,  178 => 86,  167 => 78,  156 => 70,  145 => 62,  134 => 54,  123 => 46,  112 => 38,  97 => 25,  93 => 24,  87 => 21,  82 => 20,  78 => 19,  70 => 13,  68 => 12,  63 => 9,  61 => 8,  56 => 5,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Backend/Survey/show.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/Survey/show.html.twig");
    }
}
