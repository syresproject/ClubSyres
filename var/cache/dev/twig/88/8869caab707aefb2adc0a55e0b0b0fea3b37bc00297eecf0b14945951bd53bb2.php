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

/* Backend/PanelisteGroup/show.html.twig */
class __TwigTemplate_8c855ca3343fcf507606f4059320ec3d443e76526a0670a9181ea284ece1dc73 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/PanelisteGroup/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/PanelisteGroup/show.html.twig"));

        $this->parent = $this->loadTemplate("Backend/_layout.html.twig", "Backend/PanelisteGroup/show.html.twig", 1);
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
        echo "    <h3 class=\"page-title\"> Groupes
        <small>affichage d'un groupe de panélistes</small>
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
                        <label class=\"col-md-3 control-label\">Name</label>
                        <div class=\"col-md-4\">
                            <p class=\"form-control-static\">
                                ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["panelisteGroup"]) || array_key_exists("panelisteGroup", $context) ? $context["panelisteGroup"] : (function () { throw new RuntimeError('Variable "panelisteGroup" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28), "html", null, true);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_paneliste_groups_index");
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
                <span class=\"caption-subject font-red-sunglo bold uppercase\">Liste des panélistes associés au groupe</span>
            </div>
        </div>
        <div class=\"portlet-body\">
            <table id=\"table\" class=\"table table-striped table-bordered table-hover table-checkable order-column\">
                <thead>
                <tr>
                    <th>ID Panéliste</th>
                    <th>Titre</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Né le</th>
                    <th>Email</th>
                    <th>État</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["panelisteGroup"]) || array_key_exists("panelisteGroup", $context) ? $context["panelisteGroup"] : (function () { throw new RuntimeError('Variable "panelisteGroup" does not exist.', 65, $this->source); })()), "users", [], "any", false, false, false, 65));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 66
            echo "                    <tr class=\"odd gradeX\">
                        <td><a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["entity"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "idPaneliste", [], "any", false, false, false, 67), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "title", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                        <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "lastname", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                        <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "firstname", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
                        <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "birthdate", [], "any", false, false, false, 71), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "email", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>
                        <td>";
            // line 73
            echo ((twig_get_attribute($this->env, $this->source, $context["entity"], "enabled", [], "any", false, false, false, 73)) ? ("Activé") : ("Désactivé"));
            echo "</td>
                        <td>
                            <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["entity"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            echo "\" class=\"label label-success\">afficher</a>
                            <a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["entity"], "id", [], "any", false, false, false, 76)]), "html", null, true);
            echo "\" class=\"label label-success\">éditer</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 86
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 87
        echo "
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function() {
            var table = \$('#table').dataTable({
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
        return "Backend/PanelisteGroup/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 89,  258 => 88,  255 => 87,  245 => 86,  231 => 80,  221 => 76,  217 => 75,  212 => 73,  208 => 72,  204 => 71,  200 => 70,  196 => 69,  192 => 68,  186 => 67,  183 => 66,  179 => 65,  147 => 36,  136 => 28,  121 => 15,  111 => 14,  99 => 11,  94 => 10,  84 => 9,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Backend/_layout.html.twig' %}

{% block page_title %}
    <h3 class=\"page-title\"> Groupes
        <small>affichage d'un groupe de panélistes</small>
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
                        <label class=\"col-md-3 control-label\">Name</label>
                        <div class=\"col-md-4\">
                            <p class=\"form-control-static\">
                                {{ panelisteGroup.name }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"form-actions\">
                    <div class=\"row\">
                        <div class=\"col-md-offset-3 col-md-9\">
                            <a class=\"btn default\" href=\"{{ path('admin_paneliste_groups_index') }}\">Retour</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class=\"portlet light bordered\">
        <div class=\"portlet-title\">
            <div class=\"caption\">
                <span class=\"caption-subject font-red-sunglo bold uppercase\">Liste des panélistes associés au groupe</span>
            </div>
        </div>
        <div class=\"portlet-body\">
            <table id=\"table\" class=\"table table-striped table-bordered table-hover table-checkable order-column\">
                <thead>
                <tr>
                    <th>ID Panéliste</th>
                    <th>Titre</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Né le</th>
                    <th>Email</th>
                    <th>État</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                {% for entity in panelisteGroup.users %}
                    <tr class=\"odd gradeX\">
                        <td><a href=\"{{ path('admin_user_show', { 'id': entity.id }) }}\">{{ entity.idPaneliste }}</a></td>
                        <td>{{ entity.title }}</td>
                        <td>{{ entity.lastname }}</td>
                        <td>{{ entity.firstname }}</td>
                        <td>{{ entity.birthdate | date('d/m/Y') }}</td>
                        <td>{{ entity.email }}</td>
                        <td>{{ entity.enabled ? 'Activé' : 'Désactivé' }}</td>
                        <td>
                            <a href=\"{{ path('admin_user_show', { 'id': entity.id }) }}\" class=\"label label-success\">afficher</a>
                            <a href=\"{{ path('admin_user_edit', { 'id': entity.id }) }}\" class=\"label label-success\">éditer</a>
                        </td>
                    </tr>
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
            var table = \$('#table').dataTable({
                \"order\": [[ 0, \"desc\" ]]
            });
        });
    </script>
{% endblock %}
", "Backend/PanelisteGroup/show.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/PanelisteGroup/show.html.twig");
    }
}
