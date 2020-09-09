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
class __TwigTemplate_7414d5fa30c689d1591103bf619b5575229c0481d73181a7636b51559995b88f extends Template
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
        $this->parent = $this->loadTemplate("Backend/_layout.html.twig", "Backend/Link/replies_details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h3 class=\"page-title\"> Historique des réponses
        <small>historique des réponses au questionnaire</small>
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
    <style>
        #d-none{
            display: none;
        }
    </style>
";
    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "name", [], "any", false, false, false, 33), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "link", [], "any", false, false, false, 41), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "link", [], "any", false, false, false, 41), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_survey_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "survey", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49)]), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["linkLogs"] ?? null));
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_link_export-missings", ["link" => twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "id", [], "any", false, false, false, 94)]), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["panelistes"] ?? null));
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
    }

    // line 127
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  267 => 129,  262 => 128,  258 => 127,  250 => 121,  244 => 120,  238 => 117,  234 => 116,  230 => 115,  226 => 114,  222 => 113,  219 => 112,  216 => 111,  212 => 110,  193 => 94,  179 => 82,  170 => 79,  166 => 78,  162 => 77,  158 => 76,  155 => 75,  151 => 74,  123 => 49,  110 => 41,  99 => 33,  84 => 20,  80 => 19,  69 => 11,  64 => 10,  60 => 9,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Backend/Link/replies_details.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/Link/replies_details.html.twig");
    }
}
