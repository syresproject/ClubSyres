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
class __TwigTemplate_39dbaf7ac48e70a6932da2a1b35ef71ceaa930d95052a07a1af5e347583fa14c extends Template
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
        $this->parent = $this->loadTemplate("Backend/_layout.html.twig", "Backend/FocusGroup/accesses.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h3 class=\"page-title\"> Focus Group
        <small>gestion des accès au focus group</small>
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "panelisteGroup", [], "any", false, false, false, 32), "users", [], "any", false, false, false, 32));
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
            if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["checkAccesses"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 39)] ?? null) : null)) {
                // line 40
                echo "                                    ";
                if ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["accessesOverrides"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 40)] ?? null) : null)) {
                    // line 41
                    echo "                                        ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["accessesOverrides"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 41)] ?? null) : null), "access", [], "any", false, false, false, 41), 0))) {
                        // line 42
                        echo "                                            <span class=\"font-green-jungle sbold\">Oui</span>
                                        ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 =                     // line 43
($context["accessesOverrides"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 43)] ?? null) : null), "access", [], "any", false, false, false, 43), 1))) {
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
                if ((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["accessesOverrides"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 52)] ?? null) : null)) {
                    // line 53
                    echo "                                        ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["accessesOverrides"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 53)] ?? null) : null), "access", [], "any", false, false, false, 53), 0))) {
                        // line 54
                        echo "                                            <span class=\"font-red-thunderbird sbold\">Non</span>
                                        ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e =                     // line 55
($context["accessesOverrides"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 55)] ?? null) : null), "access", [], "any", false, false, false, 55), 1))) {
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
    }

    // line 80
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  213 => 82,  208 => 81,  204 => 80,  195 => 73,  187 => 70,  183 => 64,  180 => 63,  176 => 61,  173 => 60,  169 => 58,  165 => 56,  163 => 55,  160 => 54,  157 => 53,  154 => 52,  151 => 51,  147 => 49,  144 => 48,  140 => 46,  136 => 44,  134 => 43,  131 => 42,  128 => 41,  125 => 40,  123 => 39,  118 => 37,  114 => 36,  110 => 35,  104 => 34,  101 => 33,  97 => 32,  92 => 29,  79 => 15,  75 => 14,  69 => 11,  64 => 10,  60 => 9,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Backend/FocusGroup/accesses.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/FocusGroup/accesses.html.twig");
    }
}
