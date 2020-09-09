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

/* Backend/FocusGroup/show.html.twig */
class __TwigTemplate_87169a9f05fd039e3d7373a18302f8929f8b12d67eea8ceeb6ec1388298699c1 extends Template
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
        $this->parent = $this->loadTemplate("Backend/_layout.html.twig", "Backend/FocusGroup/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h3 class=\"page-title\"> Focus Group
        <small>détails d'un focus group</small>
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
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/layouts/layout/css/override.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    <div class=\"portlet light bordered\">
        <div class=\"portlet-title\">
            <div class=\"caption\">
                <span class=\"caption-subject font-red-sunglo bold uppercase\">Focus Group</span>
            </div>
        </div>
        <div class=\"portlet-body form\">
            ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["focus_form"] ?? null), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        // line 25
        echo "
            <div class=\"form-body\">
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\">Status</label>
                    <div class=\"col-md-10\">
                        <p class=\"form-control-static\">
                            ";
        // line 31
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "type", [], "any", false, false, false, 31), 2))) {
            // line 32
            echo "                                Fermé aux panélistes - L'enquête n'est plus de type \"Test\"
                            ";
        } elseif ((-1 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 33
($context["survey"] ?? null), "status", [], "any", false, false, false, 33), 2))) {
            // line 34
            echo "                                Fermé aux panélistes - L'enquête n'est pas encore cloturé
                            ";
        } else {
            // line 36
            echo "                                Ouvert aux panélistes
                            ";
        }
        // line 38
        echo "                        </p>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\">Accès</label>
                    <div class=\"col-md-10\">
                        <p class=\"form-control-static\">
                           <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_focus_group_accesses", ["id" => twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "id", [], "any", false, false, false, 45)]), "html", null, true);
        echo "\">Gérer les accès</a>
                        </p>
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["focus_form"] ?? null), "article", [], "any", false, false, false, 50), 'label', ["label" => "Article", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                    <div class=\"col-md-10\">
                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["focus_form"] ?? null), "article", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Article"]]);
        echo "
                    </div>
                </div>
            </div>
            <div class=\"form-actions\">
                <div class=\"row\">
                    <div class=\"col-md-offset-3 col-md-4\">
                        <button class=\"btn green\" type=\"submit\">Enregistrer</button>
                        <a class=\"btn default\" href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_survey_tests_index");
        echo "\">Retour</a>
                    </div>
                </div>
            </div>
            ";
        // line 64
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["focus_form"] ?? null), 'form_end');
        echo "
        </div>
    </div>

    <div class=\"portlet light bordered\">
        <div class=\"portlet-title\">
            <div class=\"row\">
                <div class=\"col-md-offset-8 col-md-4\">
                    ";
        // line 72
        if (twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "focusGroup", [], "any", false, false, false, 72)) {
            // line 73
            echo "                        <a class=\"btn green\" target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_focus_group_export_participant", ["focusGroup" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "focusGroup", [], "any", false, false, false, 73), "id", [], "any", false, false, false, 73)]), "html", null, true);
            echo "\">Export Participants</a>
                        <a class=\"btn green\" target=\"_blank\" href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_focus_group_export_absents", ["focusGroup" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "focusGroup", [], "any", false, false, false, 74), "id", [], "any", false, false, false, 74)]), "html", null, true);
            echo "\">Export Absents</a>
                    ";
        }
        // line 76
        echo "                </div>
            </div>
            <div class=\"caption\">
                <span class=\"caption-subject font-red-sunglo bold uppercase\">Commentaires (";
        // line 79
        ((twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "focusGroup", [], "any", false, false, false, 79)) ? (print (twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "focusGroup", [], "any", false, false, false, 79), "focusMessages", [], "any", false, false, false, 79)), "html", null, true))) : (print ("0")));
        echo ")</span>
            </div>
        </div>
        <div class=\"portlet-body\">
            <div class=\"row\">
                ";
        // line 84
        $this->loadTemplate("/Backend/FocusGroup/_message_tree.html.twig", "Backend/FocusGroup/show.html.twig", 84)->display(twig_to_array(["depth" => 0, "focusMessages" =>         // line 86
($context["focusMessages"] ?? null)]));
        // line 88
        echo "            </div>
        </div>
    </div>

    <div class=\"hidden\">
        ";
        // line 93
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_message_form"] ?? null), 'form', ["attr" => ["id" => "delete-form"]]);
        echo "
    </div>
";
    }

    // line 97
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$('.delete-item').click(function() {
                if (confirm('Etes-vous certain de vouloir supprimer ce message ?')) {
                    \$('#appbundle_delete_id').val(\$(this).data('id'));
                    \$('#delete-form').submit();
                }

                return false;
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "Backend/FocusGroup/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 99,  214 => 98,  210 => 97,  203 => 93,  196 => 88,  194 => 86,  193 => 84,  185 => 79,  180 => 76,  175 => 74,  170 => 73,  168 => 72,  157 => 64,  150 => 60,  139 => 52,  134 => 50,  126 => 45,  117 => 38,  113 => 36,  109 => 34,  107 => 33,  104 => 32,  102 => 31,  94 => 25,  92 => 23,  83 => 16,  79 => 15,  73 => 12,  69 => 11,  64 => 10,  60 => 9,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Backend/FocusGroup/show.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/FocusGroup/show.html.twig");
    }
}
