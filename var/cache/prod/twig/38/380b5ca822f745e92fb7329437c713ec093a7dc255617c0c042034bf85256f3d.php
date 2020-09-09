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

/* Backend/Survey/edit.html.twig */
class __TwigTemplate_8c0d00a67d8d519a5698fe9c7a8cd6cdfac5ec954a80bcd367c1d5e8381b1689 extends Template
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
        $this->parent = $this->loadTemplate("Backend/_layout.html.twig", "Backend/Survey/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h3 class=\"page-title\"> Enquêtes
        <small>édition d'une enquête</small>
    </h3>
";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        // line 12
        echo "
        <div class=\"portlet light bordered\">
            <div class=\"portlet-title\">
                <div class=\"caption\">
                    <span class=\"caption-subject font-red-sunglo bold uppercase\">Edition</span>
                </div>
                <div class=\"actions\">
                 ";
        // line 23
        echo "                </div>
            </div>
            <div class=\"portlet-body form\">
                <div class=\"form-body\">
                    <div class=\"form-group\">
                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "visible", [], "any", false, false, false, 28), 'label', ["label" => "Visible", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            <div class=\"radio-list\">
                                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "visible", [], "any", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["visible"]) {
            // line 32
            echo "                                    <label class=\"radio-inline\">
                                        ";
            // line 33
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["visible"], 'widget');
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["visible"], "vars", [], "any", false, false, false, 33), "label", [], "any", false, false, false, 33), [], "bo_formlabel"), "html", null, true);
            echo "
                                    </label>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visible'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                            </div>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "status", [], "any", false, false, false, 40), 'label', ["label" => "Status", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            <div class=\"radio-list\">
                                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "status", [], "any", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 44
            echo "                                    <label class=\"radio-inline\">
                                        ";
            // line 45
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["status"], 'widget');
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["status"], "vars", [], "any", false, false, false, 45), "label", [], "any", false, false, false, 45), [], "bo_formlabel"), "html", null, true);
            echo "
                                    </label>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                            </div>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "idSurvey", [], "any", false, false, false, 52), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("internal_id", [], "bo_formlabel"), "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "idSurvey", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ID Interne"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "name", [], "any", false, false, false, 58), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("name", [], "bo_formlabel"), "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "name", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "type", [], "any", false, false, false, 64), 'label', ["label" => "Type", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "type", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Type"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "category", [], "any", false, false, false, 70), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("category", [], "bo_formlabel"), "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "category", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Catégorie"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "panelisteGroup", [], "any", false, false, false, 76), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("access_group", [], "bo_formlabel"), "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "panelisteGroup", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Groupe d'accès"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "imageFile", [], "any", false, false, false, 82), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pdf", [], "bo_formlabel"), "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "imageFile", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Pdf"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "description", [], "any", false, false, false, 88), 'label', ["label" => "Description", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "description", [], "any", false, false, false, 90), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Description"]]);
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
        // line 103
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "links", [], "any", false, false, false, 103)), "html", null, true);
        echo "\" data-prototype=\"";
        ob_start(function () { return ''; });
        echo twig_include($this->env, $context, "Backend/Survey/_prototypes/link.html.twig", ["link" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "links", [], "any", false, false, false, 103), "vars", [], "any", false, false, false, 103), "prototype", [], "any", false, false, false, 103)]);
        $___internal_482d18c59c5469b9845e7399aa41b4993e84472107c1ac0d8a9b229f942c724a_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_482d18c59c5469b9845e7399aa41b4993e84472107c1ac0d8a9b229f942c724a_);
        echo "\">
                        ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "links", [], "any", false, false, false, 104));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 105
            echo "                            ";
            echo twig_include($this->env, $context, "Backend/Survey/_prototypes/link.html.twig", ["link" => $context["link"]]);
            echo "
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
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
        // line 119
        if ((0 === twig_compare(($context["surveyType"] ?? null), 0))) {
            // line 120
            echo "                                <a class=\"btn default\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_survey_enquetes_index");
            echo "\">Retour</a>
                            ";
        } elseif ((0 === twig_compare(        // line 121
($context["surveyType"] ?? null), 1))) {
            // line 122
            echo "                                <a class=\"btn default\" href=\"";
            echo "\">Retour</a>
                            ";
        } elseif ((0 === twig_compare(        // line 123
($context["surveyType"] ?? null), 2))) {
            // line 124
            echo "                                <a class=\"btn default\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_survey_tests_index");
            echo "\">Retour</a>
                            ";
        }
        // line 126
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        // line 131
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_end');
        echo "

    ";
        // line 133
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? null), 'form', ["attr" => ["id" => "delete-form"]]);
        echo "
";
    }

    // line 136
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 137
        echo "    <script type=\"text/javascript\">
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

            \$('#delete-form-button').click(function() {
                \$('#delete-form').submit();
                return false;
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "Backend/Survey/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 137,  331 => 136,  325 => 133,  320 => 131,  313 => 126,  307 => 124,  305 => 123,  301 => 122,  299 => 121,  294 => 120,  292 => 119,  278 => 107,  261 => 105,  244 => 104,  235 => 103,  219 => 90,  214 => 88,  207 => 84,  202 => 82,  195 => 78,  190 => 76,  183 => 72,  178 => 70,  171 => 66,  166 => 64,  159 => 60,  154 => 58,  147 => 54,  142 => 52,  136 => 48,  125 => 45,  122 => 44,  118 => 43,  112 => 40,  106 => 36,  95 => 33,  92 => 32,  88 => 31,  82 => 28,  75 => 23,  66 => 12,  63 => 10,  59 => 9,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Backend/Survey/edit.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/Survey/edit.html.twig");
    }
}
