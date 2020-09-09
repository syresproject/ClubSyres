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

/* Backend/User/index.html.twig */
class __TwigTemplate_60221d177cc6b6efa4783aba188e5cedcb59d0f12ff535ea98a04a759e8ada95 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/User/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/User/index.html.twig"));

        $this->parent = $this->loadTemplate("Backend/_layout.html.twig", "Backend/User/index.html.twig", 1);
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
        echo "    <h3 class=\"page-title\"> Panélistes
        <small>liste des panélistes</small>
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
        echo "\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css"), "html", null, true);
        echo "\"
          rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/layouts/layout/css/override.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 19
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet-body\">
                <div class=\"table-toolbar\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">

                            <div class=\"btn-group\">
                                <a id=\"sample_editable_1_new\" class=\"btn sbold green\"
                                   href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_new");
        echo "\">";
        echo "add";
        echo "
                                    <i class=\"fa fa-plus\"></i>
                                </a>
                            </div>
                            <div class=\"btn-group\">
                                <a id=\"sample_editable_1_new\" class=\"btn sbold green\"
                                   href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_import");
        echo "\">
                                    import
                                    <i class=\"fa fa-file\"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
               ";
        // line 43
        echo "
                <table id=\"table\"
                       class=\"table table-striped table-bordered table-hover table-checkable order-column loading_table\">
                    <thead>
                    <tr>
                        <th>";
        // line 48
        echo "Id Panéliste";
        echo "</th>
                        <th>";
        // line 49
        echo "title";
        echo "</th>
                        <th>";
        // line 50
        echo "firstname";
        echo "</th>
                        <th>";
        // line 51
        echo "lastName";
        echo "</th>
                        <th>";
        // line 52
        echo "birthdate";
        echo "</th>
                        <th>";
        // line 53
        echo "statut";
        echo "</th>
                        <th>";
        // line 54
        echo "email";
        echo "</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody  ";
        // line 58
        echo " >
                        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["users"]);
        foreach ($context['_seq'] as $context["_key"] => $context["users"]) {
            // line 60
            echo "                            <tr class=\"odd gradeX list-group\" id=\"myList\">
                                <td style=\"display: none\"><a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index", ["id" => twig_get_attribute($this->env, $this->source, $context["users"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "id", [], "any", false, false, false, 61), "html", null, true);
            echo "</a></td>
                                <td class=\"list-group-item\">";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "idPaneliste", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                                <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "title", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                                <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "firstname", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                                <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "lastName", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                                <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "birthdate", [], "any", false, false, false, 66), "m/d/Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "statut", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                                <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "email", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["users"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            echo "\" class=\"label label-success\">afficher</a>
                                    <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["users"], "id", [], "any", false, false, false, 71)]), "html", null, true);
            echo "\" class=\"label label-success\">éditer</a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['users'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                    </tbody>
                    <div class=\"navigation\" style=\"bottom: 0px\">
                        ";
        // line 77
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 77, $this->source); })()));
        echo "
                    </div>

                </table>
            </div>
        </div>
    </div>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 93
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 94
        echo "<script src = \"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>


<script >
\$(document).ready(function() {
    \$('#table').DataTable();
} );
</script>

   <script type=\"text/javascript\">
        \$(document).ready(function() {
            var table = \$('#table').dataTable({
              \"order\": [[ 0, \"desc\" ]],
              \"paginationType\": \"custom_bootstrap_number\",
              \"oLanguage\": {
                \"sSearch\": \"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("search", [], "bo_panelistegroup"), "html", null, true);
        echo "\",
                \"sLengthMenu\": \"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("show", [], "bo_panelistegroup"), "html", null, true);
        echo " _MENU_ ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("items", [], "bo_survey"), "html", null, true);
        echo "\",
              },
            });
        });




            \$(document).ready(function() {
                var table = \$('#table').dataTable({
                  \"order\": [[ 0, \"desc\" ]],
                  \"paginationType\": \"custom_bootstrap_number\",
                  \"oLanguage\": {
                    \"sSearch\": \"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("search", [], "bo_panelistegroup"), "html", null, true);
        echo "\",
                    \"sLengthMenu\": \"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("show", [], "bo_panelistegroup"), "html", null, true);
        echo " _MENU_ ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("items", [], "bo_survey"), "html", null, true);
        echo "\",
                  },
                });
            });
        </script>




";
        // line 194
        echo "





";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Backend/User/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 194,  340 => 125,  336 => 124,  318 => 111,  314 => 110,  296 => 95,  291 => 94,  281 => 93,  262 => 77,  258 => 75,  248 => 71,  244 => 70,  239 => 68,  235 => 67,  231 => 66,  227 => 65,  223 => 64,  219 => 63,  215 => 62,  209 => 61,  206 => 60,  202 => 59,  199 => 58,  192 => 54,  188 => 53,  184 => 52,  180 => 51,  176 => 50,  172 => 49,  168 => 48,  161 => 43,  150 => 34,  139 => 28,  128 => 19,  118 => 18,  105 => 14,  100 => 12,  94 => 10,  84 => 9,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Backend/_layout.html.twig' %}

{% block page_title %}
    <h3 class=\"page-title\"> Panélistes
        <small>liste des panélistes</small>
    </h3>
{% endblock %}

{% block stylesheet %}
    <link href=\"{{ asset('backend/assets/global/plugins/datatables/datatables.css') }}\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <link href=\"{{ asset('backend/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}\"
          rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('backend/assets/layouts/layout/css/override.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>

{% endblock %}

{% block content %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet-body\">
                <div class=\"table-toolbar\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">

                            <div class=\"btn-group\">
                                <a id=\"sample_editable_1_new\" class=\"btn sbold green\"
                                   href=\"{{ path('admin_user_new') }}\">{{ 'add' }}
                                    <i class=\"fa fa-plus\"></i>
                                </a>
                            </div>
                            <div class=\"btn-group\">
                                <a id=\"sample_editable_1_new\" class=\"btn sbold green\"
                                   href=\"{{ path('admin_user_import') }}\">
                                    import
                                    <i class=\"fa fa-file\"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
               {# <input class=\"form-control\" id=\"myInput\" type=\"text\" placeholder=\"Search..\">#}

                <table id=\"table\"
                       class=\"table table-striped table-bordered table-hover table-checkable order-column loading_table\">
                    <thead>
                    <tr>
                        <th>{{ 'Id Panéliste' }}</th>
                        <th>{{ 'title' }}</th>
                        <th>{{ 'firstname' }}</th>
                        <th>{{ 'lastName' }}</th>
                        <th>{{ 'birthdate' }}</th>
                        <th>{{ 'statut' }}</th>
                        <th>{{ 'email' }}</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody  {# id=\"users\" #} >
                        {% for users in users %}
                            <tr class=\"odd gradeX list-group\" id=\"myList\">
                                <td style=\"display: none\"><a href=\"{{ path('admin_user_index', { 'id': users.id }) }}\">{{ users.id }}</a></td>
                                <td class=\"list-group-item\">{{ users.idPaneliste }}</td>
                                <td>{{ users.title }}</td>
                                <td>{{ users.firstname }}</td>
                                <td>{{ users.lastName }}</td>
                                <td>{{ users.birthdate |date(\"m/d/Y\")}}</td>
                                <td>{{ users.statut }}</td>
                                <td>{{ users.email }}</td>
                                <td>
                                    <a href=\"{{ path('admin_user_show', { 'id': users.id }) }}\" class=\"label label-success\">afficher</a>
                                    <a href=\"{{ path('admin_user_edit', { 'id': users.id }) }}\" class=\"label label-success\">éditer</a>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                    <div class=\"navigation\" style=\"bottom: 0px\">
                        {{ knp_pagination_render(users) }}
                    </div>

                </table>
            </div>
        </div>
    </div>

    {#
    <script
    src=\"https://code.jquery.com/jquery-3.5.0.js\"
    integrity=\"sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=\"
    crossorigin=\"anonymous\"></script>
    #}
{% endblock %}

{% block javascript %}
<script src = \"{{ asset('backend/assets/global/plugins/datatables/datatables.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('backend/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}\" type=\"text/javascript\"></script>


<script >
\$(document).ready(function() {
    \$('#table').DataTable();
} );
</script>

   <script type=\"text/javascript\">
        \$(document).ready(function() {
            var table = \$('#table').dataTable({
              \"order\": [[ 0, \"desc\" ]],
              \"paginationType\": \"custom_bootstrap_number\",
              \"oLanguage\": {
                \"sSearch\": \"{{ 'search' |trans({}, 'bo_panelistegroup') }}\",
                \"sLengthMenu\": \"{{ 'show' |trans({}, 'bo_panelistegroup') }} _MENU_ {{ 'items' |trans({}, 'bo_survey') }}\",
              },
            });
        });




            \$(document).ready(function() {
                var table = \$('#table').dataTable({
                  \"order\": [[ 0, \"desc\" ]],
                  \"paginationType\": \"custom_bootstrap_number\",
                  \"oLanguage\": {
                    \"sSearch\": \"{{ 'search' |trans({}, 'bo_panelistegroup') }}\",
                    \"sLengthMenu\": \"{{ 'show' |trans({}, 'bo_panelistegroup') }} _MENU_ {{ 'items' |trans({}, 'bo_survey') }}\",
                  },
                });
            });
        </script>




{#
<script type=\"text/javascript\">
        var custom_path_show = \"{{ path('admin_user_show', { 'id': 0 }) }}\"
        var custom_path_edit = \"{{ path('admin_user_edit', { 'id': 0 }) }}\"

        \$(document).ready(function(){
        // \$(\"#loadstudent\").(\"click\", function(event){
        \$.ajax({
        url: '/admin/user/index',
        type: 'POST',
        dataType: 'json',
        async: true,

        success: function(data, status) {
        var e = \$('');
        \$('#users').html('');
        \$('#users').append(e);

        for(i = 0; i < data.length; i++) {
        let student = data[i];
        console.log(student);
        let e = \$('<tr>' +
        '<td id=\"idPaneliste\"></td>' +

        '<td id=\"title\"></td>' +

        '<td id=\"firstname\"></td>' +

        '<td id=\"lastname\"></td>' +

       /* '<td id=\"birthdate\"></td>' +*/

        '<td id=\"email\"></td>' +

        '<td id=\"state\"></td>' +
        '</tr>'


        );

        \$('#idPaneliste', e).html(student['idPaneliste']);
        \$('#title', e).html(student['title']);
        \$('#firstname', e).html(student['firstname']);
        \$('#lastname', e).html(student['lastname']);
       /* \$('#birthdate', e).html(student['birthdate']);*/
        \$('#email', e).html(student['email']);
        \$('#state', e).html(student['state']);
        \$('#users').append(e);
        //console.log(student);
        }
        },
        error : function(xhr, textStatus, errorThrown) {
        console.log('Ajax request failed.');
        }
        });
        // });
    });
</script>

#}






{#
 <script type=\"text/javascript\">

\$(document).ready(function() {
var table = \$('#table')
.on('preXhr.dt', function ( e, settings, data ) {
\$('# table').addClass(\"loading_table\");
})
.dataTable({
\"order\": [[ 0, \"desc\" ]],
\"ajax\": \"{{ path('admin_user_index', {'draw': 0, 'start': 0}) }}\",
\"columns\": [
{ \"data\": \"id_paneliste\" },
{ \"data\": \"title\" },
{ \"data\": \"firstname\" },
{ \"data\": \"lastname\" },
{ \"data\": \"birthdate\" },
{ \"data\": \"email\" },
{ \"data\": \"enabled\" }
],
\"columnDefs\": [
{
\"targets\": 0,
\"width\": \"10%\"
},
{
\"targets\": 7,
\"render\": function ( data, type, full, meta ) {
var display = \"<a href='\" + custom_path_show.replace(\"0\", full.id) + \"' class=\\\"label label-success\\\">{{ 'show_lowercase' |trans({}, 'bo_user') }}</a> \";
var edit = \"<a href='\" + custom_path_edit.replace(\"0\", full.id) + \"' class=\\\"label label-success\\\">{{ 'edit' |trans({}, 'bo_user') }}</a>\";

return display + edit;
}
},
{
\"targets\": 5,
\"render\": function ( data, type, full, meta ) {
return (typeof full.email === 'undefined' ? \"\" : full.email);
}
},
{
\"targets\": 4,
\"render\": function ( data, type, full, meta ) {
var date = new Date(full.birthdate);
return date.getDate() + \"/\" + (date.getMonth() + 1) + \"/\" + date.getFullYear();
}
}],
\"processing\": true,
\"serverSide\": true,
\"fnInitComplete\" : function() {
\$('#table').removeClass(\"loading_table\");
},
\"fnDrawCallback\": function () {
\$('#table').removeClass(\"loading_table\");
},
\"paginationType\": \"custom_bootstrap_number\",
\"oLanguage\": {
\"sSearch\": \"{{ 'search' |trans({}, 'bo_user') }}\",
\"sLengthMenu\": \"{{ 'show' |trans({}, 'bo_user') }} MENU {{ 'items' |trans({}, 'bo_user') }}\",
},
});
});


</script>
#}
{% endblock %}", "Backend/User/index.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/User/index.html.twig");
    }
}
