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
class __TwigTemplate_28b6abf9e4f99c31002793258452e3cea7bab69aba084731b6b64e16798d4d11 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/Survey/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/Survey/edit.html.twig"));

        $this->parent = $this->loadTemplate("Backend/_layout.html.twig", "Backend/Survey/edit.html.twig", 1);
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
        echo "    <h3 class=\"page-title\"> Enquêtes
        <small>édition d'une enquête</small>
    </h3>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 28, $this->source); })()), "visible", [], "any", false, false, false, 28), 'label', ["label" => "Visible", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            <div class=\"radio-list\">
                                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 31, $this->source); })()), "visible", [], "any", false, false, false, 31));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 40, $this->source); })()), "status", [], "any", false, false, false, 40), 'label', ["label" => "Status", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            <div class=\"radio-list\">
                                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 43, $this->source); })()), "status", [], "any", false, false, false, 43));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 52, $this->source); })()), "idSurvey", [], "any", false, false, false, 52), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("internal_id", [], "bo_formlabel"), "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 54, $this->source); })()), "idSurvey", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ID Interne"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 58, $this->source); })()), "name", [], "any", false, false, false, 58), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("name", [], "bo_formlabel"), "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 60, $this->source); })()), "name", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 64, $this->source); })()), "type", [], "any", false, false, false, 64), 'label', ["label" => "Type", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 66, $this->source); })()), "type", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Type"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 70, $this->source); })()), "category", [], "any", false, false, false, 70), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("category", [], "bo_formlabel"), "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 72, $this->source); })()), "category", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Catégorie"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 76, $this->source); })()), "panelisteGroup", [], "any", false, false, false, 76), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("access_group", [], "bo_formlabel"), "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 78, $this->source); })()), "panelisteGroup", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Groupe d'accès"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 82, $this->source); })()), "imageFile", [], "any", false, false, false, 82), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pdf", [], "bo_formlabel"), "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 84, $this->source); })()), "imageFile", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Pdf"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 88, $this->source); })()), "description", [], "any", false, false, false, 88), 'label', ["label" => "Description", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 90, $this->source); })()), "description", [], "any", false, false, false, 90), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Description"]]);
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
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 103, $this->source); })()), "links", [], "any", false, false, false, 103)), "html", null, true);
        echo "\" data-prototype=\"";
        ob_start();
        echo twig_include($this->env, $context, "Backend/Survey/_prototypes/link.html.twig", ["link" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 103, $this->source); })()), "links", [], "any", false, false, false, 103), "vars", [], "any", false, false, false, 103), "prototype", [], "any", false, false, false, 103)]);
        $___internal_482d18c59c5469b9845e7399aa41b4993e84472107c1ac0d8a9b229f942c724a_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_482d18c59c5469b9845e7399aa41b4993e84472107c1ac0d8a9b229f942c724a_);
        echo "\">
                        ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 104, $this->source); })()), "links", [], "any", false, false, false, 104));
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
        if ((0 === twig_compare((isset($context["surveyType"]) || array_key_exists("surveyType", $context) ? $context["surveyType"] : (function () { throw new RuntimeError('Variable "surveyType" does not exist.', 119, $this->source); })()), 0))) {
            // line 120
            echo "                                <a class=\"btn default\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_survey_enquetes_index");
            echo "\">Retour</a>
                            ";
        } elseif ((0 === twig_compare(        // line 121
(isset($context["surveyType"]) || array_key_exists("surveyType", $context) ? $context["surveyType"] : (function () { throw new RuntimeError('Variable "surveyType" does not exist.', 121, $this->source); })()), 1))) {
            // line 122
            echo "                                <a class=\"btn default\" href=\"";
            echo "\">Retour</a>
                            ";
        } elseif ((0 === twig_compare(        // line 123
(isset($context["surveyType"]) || array_key_exists("surveyType", $context) ? $context["surveyType"] : (function () { throw new RuntimeError('Variable "surveyType" does not exist.', 123, $this->source); })()), 2))) {
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 131, $this->source); })()), 'form_end');
        echo "

    ";
        // line 133
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new RuntimeError('Variable "delete_form" does not exist.', 133, $this->source); })()), 'form', ["attr" => ["id" => "delete-form"]]);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 136
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  377 => 137,  367 => 136,  355 => 133,  350 => 131,  343 => 126,  337 => 124,  335 => 123,  331 => 122,  329 => 121,  324 => 120,  322 => 119,  308 => 107,  291 => 105,  274 => 104,  265 => 103,  249 => 90,  244 => 88,  237 => 84,  232 => 82,  225 => 78,  220 => 76,  213 => 72,  208 => 70,  201 => 66,  196 => 64,  189 => 60,  184 => 58,  177 => 54,  172 => 52,  166 => 48,  155 => 45,  152 => 44,  148 => 43,  142 => 40,  136 => 36,  125 => 33,  122 => 32,  118 => 31,  112 => 28,  105 => 23,  96 => 12,  93 => 10,  83 => 9,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Backend/_layout.html.twig' %}

{% block page_title %}
    <h3 class=\"page-title\"> Enquêtes
        <small>édition d'une enquête</small>
    </h3>
{% endblock %}

{% block content %}
    {{ form_start(edit_form, {'attr' : {
        'class' : 'form-horizontal'
    }}) }}
        <div class=\"portlet light bordered\">
            <div class=\"portlet-title\">
                <div class=\"caption\">
                    <span class=\"caption-subject font-red-sunglo bold uppercase\">Edition</span>
                </div>
                <div class=\"actions\">
                 {#   <button class=\"btn btn-circle btn-icon-only btn-default\" id=\"delete-form-button\">
                        <i class=\"icon-trash\"></i>
                    </button>
                    #}
                </div>
            </div>
            <div class=\"portlet-body form\">
                <div class=\"form-body\">
                    <div class=\"form-group\">
                        {{ form_label(edit_form.visible, null, {'label': 'Visible', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            <div class=\"radio-list\">
                                {% for visible in edit_form.visible %}
                                    <label class=\"radio-inline\">
                                        {{ form_widget(visible) }} {{ visible.vars.label | trans({}, 'bo_formlabel') }}
                                    </label>
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(edit_form.status, null, {'label': 'Status', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            <div class=\"radio-list\">
                                {% for status in edit_form.status %}
                                    <label class=\"radio-inline\">
                                        {{ form_widget(status) }} {{ status.vars.label | trans({}, 'bo_formlabel')}}
                                    </label>
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(edit_form.idSurvey, null, {'label': 'internal_id' |trans({}, 'bo_formlabel'), 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            {{ form_widget(edit_form.idSurvey, {'attr': {'class': 'form-control', 'placeholder' : 'ID Interne'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(edit_form.name, null, {'label': 'name' |trans({}, 'bo_formlabel'), 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            {{ form_widget(edit_form.name, {'attr': {'class': 'form-control', 'placeholder' : 'Nom'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(edit_form.type, null, {'label': 'Type', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            {{ form_widget(edit_form.type, {'attr': {'class': 'form-control', 'placeholder' : 'Type'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(edit_form.category, null, {'label': 'category' |trans({}, 'bo_formlabel'), 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            {{ form_widget(edit_form.category, {'attr': {'class': 'form-control', 'placeholder' : 'Catégorie'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(edit_form.panelisteGroup, null, {'label': 'access_group' |trans({}, 'bo_formlabel'), 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            {{ form_widget(edit_form.panelisteGroup, {'attr': {'class': 'form-control', 'placeholder' : 'Groupe d\\'accès'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(edit_form.imageFile, null, {'label': 'Pdf' |trans({}, 'bo_formlabel'), 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            {{ form_widget(edit_form.imageFile, {'attr': {'class': 'form-control', 'placeholder' : 'Pdf'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(edit_form.description, null, {'label': 'Description', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            {{ form_widget(edit_form.description, {'attr': {'class': 'form-control', 'placeholder' : 'Description'}}) }}
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
                    <div id=\"links-list\" data-length=\"{{ edit_form.links | length }}\" data-prototype=\"{% apply escape %}{{ include('Backend/Survey/_prototypes/link.html.twig', { 'link': edit_form.links.vars.prototype }) }}{% endapply %}\">
                        {% for link in edit_form.links %}
                            {{ include('Backend/Survey/_prototypes/link.html.twig', { 'link': link }) }}
                        {% endfor %}

                    </div>

                    <div class=\"col-md-offset-2\">
                        <button id=\"add-link\" class=\"btn btn-default\">Ajouter un questionnaire</button>
                    </div>
                </div>
                <div class=\"form-actions\">
                    <div class=\"row\">
                        <div class=\"col-md-offset-3 col-md-4\">
                            <button class=\"btn green\" type=\"submit\">Enregistrer</button>

                            {% if surveyType == 0 %}
                                <a class=\"btn default\" href=\"{{ path('admin_survey_enquetes_index') }}\">Retour</a>
                            {% elseif surveyType == 1 %}
                                <a class=\"btn default\" href=\"{#{ path('admin__survey_pre_recrutements_index') }#}\">Retour</a>
                            {% elseif surveyType == 2 %}
                                <a class=\"btn default\" href=\"{{ path('admin_survey_tests_index') }}\">Retour</a>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{ form_end(edit_form) }}

    {{ form(delete_form, {'attr': {'id': 'delete-form'}}) }}
{% endblock %}

{% block javascript %}
    <script type=\"text/javascript\">
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
{% endblock %}



", "Backend/Survey/edit.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/Survey/edit.html.twig");
    }
}
