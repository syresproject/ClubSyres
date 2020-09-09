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

/* Backend/Link/access_details.html.twig */
class __TwigTemplate_c7d8fd7ff4a84c930d528ac98c92d381aede7000cc1ad0dc119461d4df346f5d extends Template
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
        $this->parent = $this->loadTemplate("Backend/_layout.html.twig", "Backend/Link/access_details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h3 class=\"page-title\"> Historique questionnaire
        <small>historique des accès au questionnaire</small>
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
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "name", [], "any", false, false, false, 28), "html", null, true);
        echo "
                            </p>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\">Url</label>
                        <div class=\"col-md-4\">
                            <p class=\"form-control-static\">
                                <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "link", [], "any", false, false, false, 36), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "link", [], "any", false, false, false, 36), "html", null, true);
        echo "</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"form-actions\">
                    <div class=\"row\">
                        <div class=\"col-md-offset-3 col-md-9\">
                            <a class=\"btn default\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_survey_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "survey", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44)]), "html", null, true);
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
                <span class=\"caption-subject font-red-sunglo bold uppercase\">Détails des accès</span>
            </div>
        </div>
        <div class=\"portlet-body\">
            <table id=\"table_access\" class=\"table table-striped table-bordered table-hover table-checkable order-column\">
                <thead>
                <tr>
                    <th style=\"width:80px;\">Id</th>
                    <th>Titre</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date d'accès au questionnaire</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["linkLogs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["linkLog"]) {
            // line 71
            echo "                    <tr class=\"odd gradeX\">
                        <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["linkLog"], "user", [], "any", false, false, false, 72), "id", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>
                        <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["linkLog"], "user", [], "any", false, false, false, 73), "title", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
                        <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["linkLog"], "user", [], "any", false, false, false, 74), "lastname", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
                        <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["linkLog"], "user", [], "any", false, false, false, 75), "firstname", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
                        <td>Le ";
            // line 76
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["linkLog"], "createdAt", [], "any", false, false, false, 76), "d/m/Y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["linkLog"], "createdAt", [], "any", false, false, false, 76), "H\\hi"), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['linkLog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                </tbody>
            </table>
        </div>
    </div>

    <div class=\"portlet light bordered\">
        <div class=\"portlet-title\">
            <div class=\"caption\">
                <span class=\"caption-subject font-red-sunglo bold uppercase\">En attente</span>
            </div>
        </div>
        <div class=\"portlet-body\">
            <table id=\"table_waiting\" class=\"table table-striped table-bordered table-hover table-checkable order-column\">
                <thead>
                <tr>
                    <th style=\"width:80px;\">Id</th>
                    <th>Titre</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date d'accès au questionnaire</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["panelistes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["paneliste"]) {
            // line 103
            echo "                    ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["history"] ?? null), twig_get_attribute($this->env, $this->source, $context["paneliste"], "id", [], "any", false, false, false, 103), [], "array", true, true, false, 103)) {
                // line 104
                echo "                        <tr class=\"odd gradeX\">
                            <td>";
                // line 105
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paneliste"], "id", [], "any", false, false, false, 105), "html", null, true);
                echo "</td>
                            <td>";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paneliste"], "title", [], "any", false, false, false, 106), "html", null, true);
                echo "</td>
                            <td>";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paneliste"], "lastname", [], "any", false, false, false, 107), "html", null, true);
                echo "</td>
                            <td>";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paneliste"], "firstname", [], "any", false, false, false, 108), "html", null, true);
                echo "</td>
                            <td>-</td>
                        </tr>
                    ";
            }
            // line 112
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paneliste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "                </tbody>
            </table>
        </div>
    </div>
";
    }

    // line 119
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 120
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 121
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
    }

    public function getTemplateName()
    {
        return "Backend/Link/access_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 121,  253 => 120,  249 => 119,  241 => 113,  235 => 112,  228 => 108,  224 => 107,  220 => 106,  216 => 105,  213 => 104,  210 => 103,  206 => 102,  181 => 79,  170 => 76,  166 => 75,  162 => 74,  158 => 73,  154 => 72,  151 => 71,  147 => 70,  118 => 44,  105 => 36,  94 => 28,  79 => 15,  75 => 14,  69 => 11,  64 => 10,  60 => 9,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Backend/Link/access_details.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/Link/access_details.html.twig");
    }
}
