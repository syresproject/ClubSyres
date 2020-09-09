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

/* Backend/Survey/new.html.twig */
class __TwigTemplate_ca8001ea35cb2560aab1bc595f2c8b948e2965c18a96e169976c022ccfcf089f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
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
        $this->parent = $this->loadTemplate("Backend/_layout.html.twig", "Backend/Survey/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h3 class=\"page-title\"> Enquêtes
        <small>ajout d'un enquête</small>
    </h3>
";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        // line 12
        echo "
    <div class=\"portlet light bordered\">
        <div class=\"portlet-title\">
            <div class=\"caption\">
                <span class=\"caption-subject font-red-sunglo bold uppercase\">Ajout</span>
            </div>
        </div>
        <div class=\"portlet-body form\">
            <div class=\"form-body\">
                <div class=\"form-group\">
                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "visible", [], "any", false, false, false, 22), 'label', ["label" => "Visible", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                    <div class=\"col-md-10\">
                        <div class=\"radio-list\">
                            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "visible", [], "any", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["visible"]) {
            // line 26
            echo "                                <label class=\"radio-inline\">
                                    ";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["visible"], 'widget');
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["visible"], "vars", [], "any", false, false, false, 27), "label", [], "any", false, false, false, 27), [], "bo_formlabel"), "html", null, true);
            echo "
                                </label>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visible'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                        </div>
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "status", [], "any", false, false, false, 34), 'label', ["label" => "Status", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                    <div class=\"col-md-10\">
                        <div class=\"radio-list\">
                            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "status", [], "any", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 38
            echo "                                <label class=\"radio-inline\">
                                    ";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["status"], 'widget');
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["status"], "vars", [], "any", false, false, false, 39), "label", [], "any", false, false, false, 39), [], "bo_formlabel"), "html", null, true);
            echo "
                                </label>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                        </div>
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "idSurvey", [], "any", false, false, false, 46), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("internal_id", [], "bo_formlabel"), "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                    <div class=\"col-md-10\">
                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "idSurvey", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("internal_id", [], "bo_formlabel")]]);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 52), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("name", [], "bo_formlabel"), "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                    <div class=\"col-md-10\">
                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("name", [], "bo_formlabel")]]);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 58), 'label', ["label" => "Type", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                    <div class=\"col-md-10\">
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Type"]]);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "category", [], "any", false, false, false, 64), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("category", [], "bo_formlabel"), "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                    <div class=\"col-md-10\">
                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "category", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Catégorie"]]);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "panelisteGroup", [], "any", false, false, false, 70), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("access_group", [], "bo_formlabel"), "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                    <div class=\"col-md-10\">
                        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "panelisteGroup", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Groupe d'accès"]]);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "imageFile", [], "any", false, false, false, 76), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf", [], "bo_formlabel"), "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                    <div class=\"col-md-10\">
                        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "imageFile", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Pdf"]]);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 82), 'label', ["label" => "Description", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                    <div class=\"col-md-10\">
                        ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Description"]]);
        echo "
                    </div>
                </div>



            </div>
        </div>

        <div class=\"portlet-title\">
            <div class=\"caption\">
                <span class=\"caption-subject font-red-sunglo bold uppercase\">Questionnaires</span>
            </div>
        </div>
        <div class=\"portlet-body form\">
            <div class=\"form-body\">
                <div id=\"links-list\" data-length=\"";
        // line 100
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "links", [], "any", false, false, false, 100)), "html", null, true);
        echo "\" data-prototype=\"";
        ob_start(function () { return ''; });
        echo twig_include($this->env, $context, "/Backend/Survey/_prototypes/link.html.twig", ["link" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "links", [], "any", false, false, false, 100), "vars", [], "any", false, false, false, 100), "prototype", [], "any", false, false, false, 100)]);
        $___internal_99092c176b68a177be3070acce17a9e1265dd84890caa155b560af6bd9e1693e_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_99092c176b68a177be3070acce17a9e1265dd84890caa155b560af6bd9e1693e_);
        echo "\">
                    ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "links", [], "any", false, false, false, 101), 'widget');
        echo "
                </div>

                <div class=\"col-md-offset-2\">
                    <button id=\"add-link\" class=\"btn btn-default\">Ajouter un questionnaire</button>
                </div>
            </div>
            <div class=\"form-actions\">
                <div class=\"row\">
                    <div class=\"col-md-offset-3 col-md-4\">
                        <button class=\"btn green\" type=\"submit\">Enregistrer</button>

                        ";
        // line 113
        if ((0 === twig_compare(($context["surveyType"] ?? null), 0))) {
            // line 114
            echo "                            <a class=\"btn default\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_survey_enquetes_index");
            echo "\">Retour</a>
                        ";
        } elseif ((0 === twig_compare(        // line 115
($context["surveyType"] ?? null), 1))) {
            // line 116
            echo "                            <a class=\"btn default\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_survey_pre_recrutements_index");
            echo "\">Retour</a>
                        ";
        } elseif ((0 === twig_compare(        // line 117
($context["surveyType"] ?? null), 2))) {
            // line 118
            echo "                            <a class=\"btn default\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_survey_tests_index");
            echo "\">Retour</a>
                        ";
        }
        // line 120
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 125
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    // line 128
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 129
        echo "<script type=\"text/javascript\">
    \$(document).ready(function() {
        var linksList = \$('#links-list');
        var linksLength = linksList.data('length');

        function updateDeleteButtons() {
            \$(\".delete-link\").click(function() {
                \$(this).parentsUntil('.delete-parent').parent().remove();
                return false;
            });
        } updateDeleteButtons();

        \$('#add-link').click(function() {
            var html = linksList.data('prototype').replace(/__name__/g, linksLength);
            linksList.append(html);

            updateDeleteButtons();
            linksLength++;

            return false;
        });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "Backend/Survey/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 129,  293 => 128,  287 => 125,  280 => 120,  274 => 118,  272 => 117,  267 => 116,  265 => 115,  260 => 114,  258 => 113,  243 => 101,  234 => 100,  215 => 84,  210 => 82,  203 => 78,  198 => 76,  191 => 72,  186 => 70,  179 => 66,  174 => 64,  167 => 60,  162 => 58,  155 => 54,  150 => 52,  143 => 48,  138 => 46,  132 => 42,  121 => 39,  118 => 38,  114 => 37,  108 => 34,  102 => 30,  91 => 27,  88 => 26,  84 => 25,  78 => 22,  66 => 12,  63 => 10,  59 => 9,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Backend/Survey/new.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/Survey/new.html.twig");
    }
}
