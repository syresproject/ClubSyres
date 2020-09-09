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
class __TwigTemplate_725d5bda5790a617874b29c9069ccab80d94dcb6daab0649a3a05f81632a920b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/FocusGroup/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/FocusGroup/show.html.twig"));

        $this->parent = $this->loadTemplate("Backend/_layout.html.twig", "Backend/FocusGroup/show.html.twig", 1);
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
        <small>détails d'un focus group</small>
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
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/layouts/layout/css/override.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["focus_form"]) || array_key_exists("focus_form", $context) ? $context["focus_form"] : (function () { throw new RuntimeError('Variable "focus_form" does not exist.', 23, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        // line 25
        echo "
            <div class=\"form-body\">
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\">Status</label>
                    <div class=\"col-md-10\">
                        <p class=\"form-control-static\">
                            ";
        // line 31
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 31, $this->source); })()), "type", [], "any", false, false, false, 31), 2))) {
            // line 32
            echo "                                Fermé aux panélistes - L'enquête n'est plus de type \"Test\"
                            ";
        } elseif ((-1 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 33
(isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 33, $this->source); })()), "status", [], "any", false, false, false, 33), 2))) {
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_focus_group_accesses", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45)]), "html", null, true);
        echo "\">Gérer les accès</a>
                        </p>
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["focus_form"]) || array_key_exists("focus_form", $context) ? $context["focus_form"] : (function () { throw new RuntimeError('Variable "focus_form" does not exist.', 50, $this->source); })()), "article", [], "any", false, false, false, 50), 'label', ["label" => "Article", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                    <div class=\"col-md-10\">
                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["focus_form"]) || array_key_exists("focus_form", $context) ? $context["focus_form"] : (function () { throw new RuntimeError('Variable "focus_form" does not exist.', 52, $this->source); })()), "article", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Article"]]);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["focus_form"]) || array_key_exists("focus_form", $context) ? $context["focus_form"] : (function () { throw new RuntimeError('Variable "focus_form" does not exist.', 64, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>

    <div class=\"portlet light bordered\">
        <div class=\"portlet-title\">
            <div class=\"row\">
                <div class=\"col-md-offset-8 col-md-4\">
                    ";
        // line 72
        if (twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 72, $this->source); })()), "focusGroup", [], "any", false, false, false, 72)) {
            // line 73
            echo "                        <a class=\"btn green\" target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_focus_group_export_participant", ["focusGroup" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 73, $this->source); })()), "focusGroup", [], "any", false, false, false, 73), "id", [], "any", false, false, false, 73)]), "html", null, true);
            echo "\">Export Participants</a>
                        <a class=\"btn green\" target=\"_blank\" href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_focus_group_export_absents", ["focusGroup" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 74, $this->source); })()), "focusGroup", [], "any", false, false, false, 74), "id", [], "any", false, false, false, 74)]), "html", null, true);
            echo "\">Export Absents</a>
                    ";
        }
        // line 76
        echo "                </div>
            </div>
            <div class=\"caption\">
                <span class=\"caption-subject font-red-sunglo bold uppercase\">Commentaires (";
        // line 79
        ((twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 79, $this->source); })()), "focusGroup", [], "any", false, false, false, 79)) ? (print (twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 79, $this->source); })()), "focusGroup", [], "any", false, false, false, 79), "focusMessages", [], "any", false, false, false, 79)), "html", null, true))) : (print ("0")));
        echo ")</span>
            </div>
        </div>
        <div class=\"portlet-body\">
            <div class=\"row\">
                ";
        // line 84
        $this->loadTemplate("/Backend/FocusGroup/_message_tree.html.twig", "Backend/FocusGroup/show.html.twig", 84)->display(twig_to_array(["depth" => 0, "focusMessages" =>         // line 86
(isset($context["focusMessages"]) || array_key_exists("focusMessages", $context) ? $context["focusMessages"] : (function () { throw new RuntimeError('Variable "focusMessages" does not exist.', 86, $this->source); })())]));
        // line 88
        echo "            </div>
        </div>
    </div>

    <div class=\"hidden\">
        ";
        // line 93
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_message_form"]) || array_key_exists("delete_message_form", $context) ? $context["delete_message_form"] : (function () { throw new RuntimeError('Variable "delete_message_form" does not exist.', 93, $this->source); })()), 'form', ["attr" => ["id" => "delete-form"]]);
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 97
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  273 => 99,  268 => 98,  258 => 97,  245 => 93,  238 => 88,  236 => 86,  235 => 84,  227 => 79,  222 => 76,  217 => 74,  212 => 73,  210 => 72,  199 => 64,  192 => 60,  181 => 52,  176 => 50,  168 => 45,  159 => 38,  155 => 36,  151 => 34,  149 => 33,  146 => 32,  144 => 31,  136 => 25,  134 => 23,  125 => 16,  115 => 15,  103 => 12,  99 => 11,  94 => 10,  84 => 9,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Backend/_layout.html.twig' %}

{% block page_title %}
    <h3 class=\"page-title\"> Focus Group
        <small>détails d'un focus group</small>
    </h3>
{% endblock %}

{% block stylesheet %}
    <link href=\"{{ asset('backend/assets/global/plugins/datatables/datatables.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('backend/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('backend/assets/layouts/layout/css/override.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
{% endblock %}

{% block content %}
    <div class=\"portlet light bordered\">
        <div class=\"portlet-title\">
            <div class=\"caption\">
                <span class=\"caption-subject font-red-sunglo bold uppercase\">Focus Group</span>
            </div>
        </div>
        <div class=\"portlet-body form\">
            {{ form_start(focus_form, {'attr' : {
                'class' : 'form-horizontal'
            }}) }}
            <div class=\"form-body\">
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\">Status</label>
                    <div class=\"col-md-10\">
                        <p class=\"form-control-static\">
                            {% if survey.type != 2 %}
                                Fermé aux panélistes - L'enquête n'est plus de type \"Test\"
                            {% elseif survey.status < 2 %}
                                Fermé aux panélistes - L'enquête n'est pas encore cloturé
                            {% else %}
                                Ouvert aux panélistes
                            {% endif %}
                        </p>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\">Accès</label>
                    <div class=\"col-md-10\">
                        <p class=\"form-control-static\">
                           <a href=\"{{ path('admin_focus_group_accesses', {id: survey.id}) }}\">Gérer les accès</a>
                        </p>
                    </div>
                </div>
                <div class=\"form-group\">
                    {{ form_label(focus_form.article, null, {'label': 'Article', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                    <div class=\"col-md-10\">
                        {{ form_widget(focus_form.article, {'attr': {'class': 'form-control', 'placeholder' : 'Article'}}) }}
                    </div>
                </div>
            </div>
            <div class=\"form-actions\">
                <div class=\"row\">
                    <div class=\"col-md-offset-3 col-md-4\">
                        <button class=\"btn green\" type=\"submit\">Enregistrer</button>
                        <a class=\"btn default\" href=\"{{ path('admin_survey_tests_index') }}\">Retour</a>
                    </div>
                </div>
            </div>
            {{ form_end(focus_form) }}
        </div>
    </div>

    <div class=\"portlet light bordered\">
        <div class=\"portlet-title\">
            <div class=\"row\">
                <div class=\"col-md-offset-8 col-md-4\">
                    {% if survey.focusGroup %}
                        <a class=\"btn green\" target=\"_blank\" href=\"{{ path('admin_focus_group_export_participant', {'focusGroup': survey.focusGroup.id }) }}\">Export Participants</a>
                        <a class=\"btn green\" target=\"_blank\" href=\"{{ path('admin_focus_group_export_absents', {'focusGroup': survey.focusGroup.id }) }}\">Export Absents</a>
                    {% endif %}
                </div>
            </div>
            <div class=\"caption\">
                <span class=\"caption-subject font-red-sunglo bold uppercase\">Commentaires ({{ survey.focusGroup ? survey.focusGroup.focusMessages | length : '0' }})</span>
            </div>
        </div>
        <div class=\"portlet-body\">
            <div class=\"row\">
                {% include \"/Backend/FocusGroup/_message_tree.html.twig\" with {
                    'depth': 0,
                    'focusMessages': focusMessages
                } only %}
            </div>
        </div>
    </div>

    <div class=\"hidden\">
        {{ form(delete_message_form, {'attr':{'id':'delete-form'}}) }}
    </div>
{% endblock %}

{% block javascript %}
    <script src=\"{{ asset('backend/assets/global/plugins/datatables/datatables.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('backend/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}\" type=\"text/javascript\"></script>

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
{% endblock %}
", "Backend/FocusGroup/show.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/FocusGroup/show.html.twig");
    }
}
