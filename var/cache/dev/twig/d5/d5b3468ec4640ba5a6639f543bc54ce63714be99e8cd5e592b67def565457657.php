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

/* Backend/FocusGroup/accesses.html.twig */
class __TwigTemplate_c3baa34822a985db779b9814c428157e2cb70a644d23fdfbd2b70338471bed8c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/FocusGroup/accesses.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/FocusGroup/accesses.html.twig"));

        $this->parent = $this->loadTemplate("Backend/_layout.html.twig", "Backend/FocusGroup/accesses.html.twig", 1);
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
        echo "    <h3 class=\"page-title\"> Focus Group
        <small>gestion des accès au focus group</small>
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
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet-body\">
                <table id=\"table\" class=\"table table-striped table-bordered table-hover table-checkable order-column\">
                    <thead>
                    <tr>
                        <th style=\"width:80px;\">Id</th>
                        <th>Titre</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Eligible</th>
                        ";
        // line 29
        echo "                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 32, $this->source); })()), "panelisteGroup", [], "any", false, false, false, 32), "users", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 33
            echo "                        <tr class=\"odd gradeX\">
                            <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "title", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                            <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 39
            if (twig_get_attribute($this->env, $this->source, (isset($context["checkAccesses"]) || array_key_exists("checkAccesses", $context) ? $context["checkAccesses"] : (function () { throw new RuntimeError('Variable "checkAccesses" does not exist.', 39, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 39), [], "array", false, false, false, 39)) {
                // line 40
                echo "                                    ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["accessesOverrides"]) || array_key_exists("accessesOverrides", $context) ? $context["accessesOverrides"] : (function () { throw new RuntimeError('Variable "accessesOverrides" does not exist.', 40, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 40), [], "array", false, false, false, 40)) {
                    // line 41
                    echo "                                        ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["accessesOverrides"]) || array_key_exists("accessesOverrides", $context) ? $context["accessesOverrides"] : (function () { throw new RuntimeError('Variable "accessesOverrides" does not exist.', 41, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 41), [], "array", false, false, false, 41), "access", [], "any", false, false, false, 41), 0))) {
                        // line 42
                        echo "                                            <span class=\"font-green-jungle sbold\">Oui</span>
                                        ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 43
(isset($context["accessesOverrides"]) || array_key_exists("accessesOverrides", $context) ? $context["accessesOverrides"] : (function () { throw new RuntimeError('Variable "accessesOverrides" does not exist.', 43, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 43), [], "array", false, false, false, 43), "access", [], "any", false, false, false, 43), 1))) {
                        // line 44
                        echo "                                            <span class=\"font-green-jungle sbold\">Oui (forcé oui)</span>
                                        ";
                    } else {
                        // line 46
                        echo "                                            <span class=\"font-red-thunderbird sbold\">Non (forcé non)</span>
                                        ";
                    }
                    // line 48
                    echo "                                    ";
                } else {
                    // line 49
                    echo "                                        <span class=\"font-green-jungle sbold\">Oui</span>
                                    ";
                }
                // line 51
                echo "                                ";
            } else {
                // line 52
                echo "                                    ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["accessesOverrides"]) || array_key_exists("accessesOverrides", $context) ? $context["accessesOverrides"] : (function () { throw new RuntimeError('Variable "accessesOverrides" does not exist.', 52, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 52), [], "array", false, false, false, 52)) {
                    // line 53
                    echo "                                        ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["accessesOverrides"]) || array_key_exists("accessesOverrides", $context) ? $context["accessesOverrides"] : (function () { throw new RuntimeError('Variable "accessesOverrides" does not exist.', 53, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 53), [], "array", false, false, false, 53), "access", [], "any", false, false, false, 53), 0))) {
                        // line 54
                        echo "                                            <span class=\"font-red-thunderbird sbold\">Non</span>
                                        ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 55
(isset($context["accessesOverrides"]) || array_key_exists("accessesOverrides", $context) ? $context["accessesOverrides"] : (function () { throw new RuntimeError('Variable "accessesOverrides" does not exist.', 55, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 55), [], "array", false, false, false, 55), "access", [], "any", false, false, false, 55), 1))) {
                        // line 56
                        echo "                                            <span class=\"font-green-jungle sbold\">Oui (forcé oui)</span>
                                        ";
                    } else {
                        // line 58
                        echo "                                            <span class=\"font-red-thunderbird sbold\">Non (forcé non)</span>
                                        ";
                    }
                    // line 60
                    echo "                                    ";
                } else {
                    // line 61
                    echo "                                        <span class=\"font-red-thunderbird sbold\">Non</span>
                                    ";
                }
                // line 63
                echo "                                ";
            }
            // line 64
            echo "                            </td>
                            <td>
                                ";
            // line 70
            echo "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 81
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 82
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
        return "Backend/FocusGroup/accesses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 82,  262 => 81,  252 => 80,  237 => 73,  229 => 70,  225 => 64,  222 => 63,  218 => 61,  215 => 60,  211 => 58,  207 => 56,  205 => 55,  202 => 54,  199 => 53,  196 => 52,  193 => 51,  189 => 49,  186 => 48,  182 => 46,  178 => 44,  176 => 43,  173 => 42,  170 => 41,  167 => 40,  165 => 39,  160 => 37,  156 => 36,  152 => 35,  146 => 34,  143 => 33,  139 => 32,  134 => 29,  121 => 15,  111 => 14,  99 => 11,  94 => 10,  84 => 9,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Backend/_layout.html.twig' %}

{% block page_title %}
    <h3 class=\"page-title\"> Focus Group
        <small>gestion des accès au focus group</small>
    </h3>
{% endblock %}

{% block stylesheet %}
    <link href=\"{{ asset('backend/assets/global/plugins/datatables/datatables.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('backend/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
{% endblock %}

{% block content %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet-body\">
                <table id=\"table\" class=\"table table-striped table-bordered table-hover table-checkable order-column\">
                    <thead>
                    <tr>
                        <th style=\"width:80px;\">Id</th>
                        <th>Titre</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Eligible</th>
                        {#
                        <th>Action</th>
                        #}
                    </tr>
                    </thead>
                    <tbody>
                    {% for user in survey.panelisteGroup.users %}
                        <tr class=\"odd gradeX\">
                            <td><a href=\"{{ path('admin_user_show', { 'id': user.id }) }}\">{{ user.id }}</a></td>
                            <td>{{ user.title }}</td>
                            <td>{{ user.lastname }}</td>
                            <td>{{ user.firstname }}</td>
                            <td>
                                {% if checkAccesses[user.id] %}
                                    {% if accessesOverrides[user.id] %}
                                        {% if accessesOverrides[user.id].access == 0 %}
                                            <span class=\"font-green-jungle sbold\">Oui</span>
                                        {% elseif accessesOverrides[user.id].access == 1 %}
                                            <span class=\"font-green-jungle sbold\">Oui (forcé oui)</span>
                                        {% else %}
                                            <span class=\"font-red-thunderbird sbold\">Non (forcé non)</span>
                                        {% endif %}
                                    {% else %}
                                        <span class=\"font-green-jungle sbold\">Oui</span>
                                    {% endif %}
                                {% else %}
                                    {% if accessesOverrides[user.id] %}
                                        {% if accessesOverrides[user.id].access == 0 %}
                                            <span class=\"font-red-thunderbird sbold\">Non</span>
                                        {% elseif accessesOverrides[user.id].access == 1 %}
                                            <span class=\"font-green-jungle sbold\">Oui (forcé oui)</span>
                                        {% else %}
                                            <span class=\"font-red-thunderbird sbold\">Non (forcé non)</span>
                                        {% endif %}
                                    {% else %}
                                        <span class=\"font-red-thunderbird sbold\">Non</span>
                                    {% endif %}
                                {% endif %}
                            </td>
                            <td>
                                {#
                                                                <a href=\"{{ path('admin_focus_group_access_edit', { 'survey': survey.id, 'user': user.id }) }}\" class=\"label label-success\">éditer</a>

                                #}
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
                \"order\": [[ 0, \"desc\" ]]
            });
        });
    </script>
{% endblock %}
", "Backend/FocusGroup/accesses.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/FocusGroup/accesses.html.twig");
    }
}
