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

/* Backend/User/new.html.twig */
class __TwigTemplate_3fd07dc31fed15e640345a7a9f5a72c91a91f981af2363a60f563bf1312e03a8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/User/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/User/new.html.twig"));

        $this->parent = $this->loadTemplate("Backend/_layout.html.twig", "Backend/User/new.html.twig", 1);
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
        <small>ajout d'un panéliste</small>
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
        echo "    <div class=\"portlet light bordered\">
        <div class=\"portlet-title\">
            <div class=\"caption\">
                <span class=\"caption-subject font-red-sunglo bold uppercase\">Ajout</span>
            </div>
        </div>
        <div class=\"portlet-body form\">
           <div style=\"text-align: center\"> ";
        // line 17
        echo twig_include($this->env, $context, "/_widgets/flash_notifications.html.twig");
        echo "</div>

            ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        // line 21
        echo "

                <div class=\"form-body\">
                    <div class=\"form-group\">
                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "idPaneliste", [], "any", false, false, false, 25), 'label', ["label" => "ID Panéliste", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "idPaneliste", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ID Panéliste"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "title", [], "any", false, false, false, 31), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title", [], "bo_formlabel"), "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "title", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control", "placeholder" => ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title", [], "bo_formlabel") . " (Monsieur / Madame)")]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "lastname", [], "any", false, false, false, 37), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("name", [], "bo_formlabel"), "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "lastname", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("name", [], "bo_formlabel")]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "firstname", [], "any", false, false, false, 43), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("firstname", [], "bo_formlabel"), "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "firstname", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("firstname", [], "bo_formlabel")]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "birthdate", [], "any", false, false, false, 49), 'label', ["label" => "Date de naissance", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "birthdate", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control", "placeholder" => ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("birthdate", [], "bo_formlabel") . " (JJ/MM/AAAA)")]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "phone", [], "any", false, false, false, 55), 'label', ["label" => "Numero telephone", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "phone", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Numero telephone"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "email", [], "any", false, false, false, 61), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("email", [], "bo_formlabel"), "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "email", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("email", [], "bo_formlabel")]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "enabled", [], "any", false, false, false, 67), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("enabled", [], "bo_formlabel"), "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            <div class=\"radio-list\">
                                <label class=\"radio-inline\">
                                    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "enabled", [], "any", false, false, false, 71), 0, [], "any", false, false, false, 71), 'widget');
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yes", [], "bo_formlabel"), "html", null, true);
        echo " </label>
                                <label class=\"radio-inline\">
                                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "enabled", [], "any", false, false, false, 73), 1, [], "any", false, false, false, 73), 'widget');
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("no", [], "bo_formlabel"), "html", null, true);
        echo " </label>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "statut", [], "any", false, false, false, 79), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Statut", [], "bo_formlabel"), "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "statut", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Statut"]]);
        echo "
                        </div>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "panelisteGroups", [], "any", false, false, false, 86), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("groups", [], "bo_formlabel"), "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "panelisteGroups", [], "any", false, false, false, 88));
        foreach ($context['_seq'] as $context["_key"] => $context["panelisteGroup"]) {
            // line 89
            echo "                                <label class=\"radio\">
                                    ";
            // line 90
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["panelisteGroup"], 'widget');
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["panelisteGroup"], "vars", [], "any", false, false, false, 90), "label", [], "any", false, false, false, 90), "html", null, true);
            echo " </label>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panelisteGroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                        </div>
                    </div>
                </div>
                <div class=\"form-actions\">
                    <div class=\"row\">
                        <div class=\"col-md-offset-3 col-md-4\">
                            <button class=\"btn green\" type=\"submit\">Enregistrer</button>
                            <a class=\"btn default\" href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
        echo "\">Retour</a>
                        </div>
                    </div>
                </div>
            ";
        // line 103
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Backend/User/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 103,  267 => 99,  258 => 92,  248 => 90,  245 => 89,  241 => 88,  236 => 86,  228 => 81,  223 => 79,  212 => 73,  205 => 71,  198 => 67,  191 => 63,  186 => 61,  179 => 57,  174 => 55,  167 => 51,  162 => 49,  155 => 45,  150 => 43,  143 => 39,  138 => 37,  131 => 33,  126 => 31,  119 => 27,  114 => 25,  108 => 21,  106 => 19,  101 => 17,  92 => 10,  82 => 9,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Backend/_layout.html.twig' %}

{% block page_title %}
    <h3 class=\"page-title\"> Panélistes
        <small>ajout d'un panéliste</small>
    </h3>
{% endblock %}

{% block content %}
    <div class=\"portlet light bordered\">
        <div class=\"portlet-title\">
            <div class=\"caption\">
                <span class=\"caption-subject font-red-sunglo bold uppercase\">Ajout</span>
            </div>
        </div>
        <div class=\"portlet-body form\">
           <div style=\"text-align: center\"> {{ include('/_widgets/flash_notifications.html.twig') }}</div>

            {{ form_start(form, {'attr' : {
                'class' : 'form-horizontal'
            }}) }}

                <div class=\"form-body\">
                    <div class=\"form-group\">
                        {{ form_label(form.idPaneliste, null, {'label': 'ID Panéliste', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            {{ form_widget(form.idPaneliste, {'attr': {'class': 'form-control', 'placeholder' : 'ID Panéliste'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(form.title, null, {'label': 'title' | trans({}, 'bo_formlabel'), 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            {{ form_widget(form.title, {'attr': {'class': 'form-control', 'placeholder' : 'title' | trans({}, 'bo_formlabel') ~ ' (Monsieur / Madame)'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(form.lastname, null, {'label': 'name' |trans({}, 'bo_formlabel'), 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            {{ form_widget(form.lastname, {'attr': {'class': 'form-control', 'placeholder' : 'name' | trans({}, 'bo_formlabel')}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(form.firstname, null, {'label': 'firstname' | trans({}, 'bo_formlabel'), 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            {{ form_widget(form.firstname, {'attr': {'class': 'form-control', 'placeholder' : 'firstname' | trans({}, 'bo_formlabel')}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(form.birthdate, null, {'label': 'Date de naissance', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            {{ form_widget(form.birthdate, {'attr': {'class': 'form-control', 'placeholder' : 'birthdate' | trans({}, 'bo_formlabel') ~ ' (JJ/MM/AAAA)'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(form.phone, null, {'label': 'Numero telephone', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            {{ form_widget(form.phone, {'attr': {'class': 'form-control', 'placeholder' : 'Numero telephone' }}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(form.email, null, {'label': 'email' | trans({}, 'bo_formlabel'), 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            {{ form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder' : 'email' | trans({}, 'bo_formlabel')}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(form.enabled, null, {'label': 'enabled' | trans({}, 'bo_formlabel'), 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            <div class=\"radio-list\">
                                <label class=\"radio-inline\">
                                    {{ form_widget(form.enabled.0) }} {{ 'yes' |trans({}, 'bo_formlabel') }} </label>
                                <label class=\"radio-inline\">
                                    {{ form_widget(form.enabled.1) }} {{ 'no' |trans({}, 'bo_formlabel') }} </label>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.statut, null, {'label': 'Statut' | trans({}, 'bo_formlabel'), 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            {{ form_widget(form.statut, {'attr': {'class': 'form-control', 'placeholder' : 'Statut'}}) }}
                        </div>
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.panelisteGroups, null, {'label': 'groups' | trans({}, 'bo_formlabel'), 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            {% for panelisteGroup in form.panelisteGroups %}
                                <label class=\"radio\">
                                    {{ form_widget(panelisteGroup) }} {{ panelisteGroup.vars.label }} </label>
                            {% endfor %}
                        </div>
                    </div>
                </div>
                <div class=\"form-actions\">
                    <div class=\"row\">
                        <div class=\"col-md-offset-3 col-md-4\">
                            <button class=\"btn green\" type=\"submit\">Enregistrer</button>
                            <a class=\"btn default\" href=\"{{ path('admin_user_index') }}\">Retour</a>
                        </div>
                    </div>
                </div>
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}
", "Backend/User/new.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/User/new.html.twig");
    }
}
