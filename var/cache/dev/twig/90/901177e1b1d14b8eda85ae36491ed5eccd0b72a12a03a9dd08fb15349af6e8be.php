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
class __TwigTemplate_1592aaa0351674f138f52418a1f2599cdd60f9bada0d154be165ba27317d4abb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/Survey/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/Survey/new.html.twig"));

        $this->parent = $this->loadTemplate("Backend/_layout.html.twig", "Backend/Survey/new.html.twig", 1);
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
        <small>ajout d'un enquête</small>
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "visible", [], "any", false, false, false, 22), 'label', ["label" => "Visible", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                    <div class=\"col-md-10\">
                        <div class=\"radio-list\">
                            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "visible", [], "any", false, false, false, 25));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "status", [], "any", false, false, false, 34), 'label', ["label" => "Status", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                    <div class=\"col-md-10\">
                        <div class=\"radio-list\">
                            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "status", [], "any", false, false, false, 37));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "idSurvey", [], "any", false, false, false, 46), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("internal_id", [], "bo_formlabel"), "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                    <div class=\"col-md-10\">
                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "idSurvey", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("internal_id", [], "bo_formlabel")]]);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "name", [], "any", false, false, false, 52), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("name", [], "bo_formlabel"), "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                    <div class=\"col-md-10\">
                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "name", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("name", [], "bo_formlabel")]]);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "type", [], "any", false, false, false, 58), 'label', ["label" => "Type", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                    <div class=\"col-md-10\">
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "type", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Type"]]);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "category", [], "any", false, false, false, 64), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("category", [], "bo_formlabel"), "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                    <div class=\"col-md-10\">
                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "category", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Catégorie"]]);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "panelisteGroup", [], "any", false, false, false, 70), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("access_group", [], "bo_formlabel"), "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                    <div class=\"col-md-10\">
                        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "panelisteGroup", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Groupe d'accès"]]);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "imageFile", [], "any", false, false, false, 76), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf", [], "bo_formlabel"), "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                    <div class=\"col-md-10\">
                        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "imageFile", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Pdf"]]);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "description", [], "any", false, false, false, 82), 'label', ["label" => "Description", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                    <div class=\"col-md-10\">
                        ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "description", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Description"]]);
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
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "links", [], "any", false, false, false, 100)), "html", null, true);
        echo "\" data-prototype=\"";
        ob_start();
        echo twig_include($this->env, $context, "/Backend/Survey/_prototypes/link.html.twig", ["link" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "links", [], "any", false, false, false, 100), "vars", [], "any", false, false, false, 100), "prototype", [], "any", false, false, false, 100)]);
        $___internal_99092c176b68a177be3070acce17a9e1265dd84890caa155b560af6bd9e1693e_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_99092c176b68a177be3070acce17a9e1265dd84890caa155b560af6bd9e1693e_);
        echo "\">
                    ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "links", [], "any", false, false, false, 101), 'widget');
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
        if ((0 === twig_compare((isset($context["surveyType"]) || array_key_exists("surveyType", $context) ? $context["surveyType"] : (function () { throw new RuntimeError('Variable "surveyType" does not exist.', 113, $this->source); })()), 0))) {
            // line 114
            echo "                            <a class=\"btn default\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_survey_enquetes_index");
            echo "\">Retour</a>
                        ";
        } elseif ((0 === twig_compare(        // line 115
(isset($context["surveyType"]) || array_key_exists("surveyType", $context) ? $context["surveyType"] : (function () { throw new RuntimeError('Variable "surveyType" does not exist.', 115, $this->source); })()), 1))) {
            // line 116
            echo "                            <a class=\"btn default\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_survey_pre_recrutements_index");
            echo "\">Retour</a>
                        ";
        } elseif ((0 === twig_compare(        // line 117
(isset($context["surveyType"]) || array_key_exists("surveyType", $context) ? $context["surveyType"] : (function () { throw new RuntimeError('Variable "surveyType" does not exist.', 117, $this->source); })()), 2))) {
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 128
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  339 => 129,  329 => 128,  317 => 125,  310 => 120,  304 => 118,  302 => 117,  297 => 116,  295 => 115,  290 => 114,  288 => 113,  273 => 101,  264 => 100,  245 => 84,  240 => 82,  233 => 78,  228 => 76,  221 => 72,  216 => 70,  209 => 66,  204 => 64,  197 => 60,  192 => 58,  185 => 54,  180 => 52,  173 => 48,  168 => 46,  162 => 42,  151 => 39,  148 => 38,  144 => 37,  138 => 34,  132 => 30,  121 => 27,  118 => 26,  114 => 25,  108 => 22,  96 => 12,  93 => 10,  83 => 9,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Backend/_layout.html.twig' %}

{% block page_title %}
    <h3 class=\"page-title\"> Enquêtes
        <small>ajout d'un enquête</small>
    </h3>
{% endblock %}

{% block content %}
    {{ form_start(form, {'attr' : {
        'class' : 'form-horizontal'
    }}) }}
    <div class=\"portlet light bordered\">
        <div class=\"portlet-title\">
            <div class=\"caption\">
                <span class=\"caption-subject font-red-sunglo bold uppercase\">Ajout</span>
            </div>
        </div>
        <div class=\"portlet-body form\">
            <div class=\"form-body\">
                <div class=\"form-group\">
                    {{ form_label(form.visible, null, {'label': 'Visible', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                    <div class=\"col-md-10\">
                        <div class=\"radio-list\">
                            {% for visible in form.visible %}
                                <label class=\"radio-inline\">
                                    {{ form_widget(visible) }} {{ visible.vars.label | trans({}, 'bo_formlabel') }}
                                </label>
                            {% endfor %}
                        </div>
                    </div>
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.status, null, {'label': 'Status', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                    <div class=\"col-md-10\">
                        <div class=\"radio-list\">
                            {% for status in form.status %}
                                <label class=\"radio-inline\">
                                    {{ form_widget(status) }} {{ status.vars.label | trans({}, 'bo_formlabel')}}
                                </label>
                            {% endfor %}
                        </div>
                    </div>
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.idSurvey, null, {'label': 'internal_id' |trans({}, 'bo_formlabel'), 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                    <div class=\"col-md-10\">
                        {{ form_widget(form.idSurvey, {'attr': {'class': 'form-control', 'placeholder' : 'internal_id' |trans({}, 'bo_formlabel')}}) }}
                    </div>
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.name, null, {'label': 'name' |trans({}, 'bo_formlabel'), 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                    <div class=\"col-md-10\">
                        {{ form_widget(form.name, {'attr': {'class': 'form-control', 'placeholder' : 'name' |trans({}, 'bo_formlabel')}}) }}
                    </div>
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.type, null, {'label': 'Type', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                    <div class=\"col-md-10\">
                        {{ form_widget(form.type, {'attr': {'class': 'form-control', 'placeholder' : 'Type'}}) }}
                    </div>
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.category, null, {'label': 'category' |trans({}, 'bo_formlabel'), 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                    <div class=\"col-md-10\">
                        {{ form_widget(form.category, {'attr': {'class': 'form-control', 'placeholder' : 'Catégorie'}}) }}
                    </div>
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.panelisteGroup, null, {'label': 'access_group' |trans({}, 'bo_formlabel'), 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                    <div class=\"col-md-10\">
                        {{ form_widget(form.panelisteGroup, {'attr': {'class': 'form-control', 'placeholder' : 'Groupe d\\'accès'}}) }}
                    </div>
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.imageFile, null, {'label': 'pdf' |trans({}, 'bo_formlabel'), 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                    <div class=\"col-md-10\">
                        {{ form_widget(form.imageFile, {'attr': {'class': 'form-control', 'placeholder' : 'Pdf'}}) }}
                    </div>
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.description, null, {'label': 'Description', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                    <div class=\"col-md-10\">
                        {{ form_widget(form.description, {'attr': {'class': 'form-control', 'placeholder' : 'Description'}}) }}
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
                <div id=\"links-list\" data-length=\"{{ form.links | length }}\" data-prototype=\"{% apply escape %}{{ include('/Backend/Survey/_prototypes/link.html.twig', { 'link': form.links.vars.prototype }) }}{% endapply %}\">
                    {{ form_widget(form.links) }}
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
                            <a class=\"btn default\" href=\"{{ path('admin_survey_pre_recrutements_index') }}\">Retour</a>
                        {% elseif surveyType == 2 %}
                            <a class=\"btn default\" href=\"{{ path('admin_survey_tests_index') }}\">Retour</a>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{ form_end(form) }}
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
    });
</script>
{% endblock %}", "Backend/Survey/new.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/Survey/new.html.twig");
    }
}
