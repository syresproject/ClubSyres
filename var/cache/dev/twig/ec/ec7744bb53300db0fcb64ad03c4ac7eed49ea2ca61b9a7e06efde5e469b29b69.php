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

/* frontend/Contact/index.html.twig */
class __TwigTemplate_009e7f5884ca0c5072820c317cea47f3858c8fe10ff5d8bde412a9fb8bdf5472 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "frontend/_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/Contact/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/Contact/index.html.twig"));

        $this->parent = $this->loadTemplate("frontend/_layout.html.twig", "frontend/Contact/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        .header{
            text-align: center;
        }
    </style>


    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/styles/style.css"), "html", null, true);
        echo "\"           rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/styles/menu_layout.css"), "html", null, true);
        echo "\"           rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/styles/menus.css"), "html", null, true);
        echo "\"           rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/styles/framework.css"), "html", null, true);
        echo "\"       rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/styles/font-awesome.css"), "html", null, true);
        echo "\"    rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/styles/animate.css"), "html", null, true);
        echo "\"         rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/styles/override.css"), "html", null, true);
        echo "\"        rel=\"stylesheet\" type=\"text/css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 20
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "

    <div class=\"content\">
        <div class=\"container heading-style-5\">
            <h4 class=\"heading-title\" style=\"margin-top: 20px\">";
        // line 24
        echo "contact";
        echo "</h4>
            <i class=\"fa fa-envelope-o heading-icon\"></i>
            <div class=\"line bg-black\"></div>
        </div>

        <div class=\"container no-bottom\">
            <div class=\"contact-form no-bottom\">
                ";
        // line 31
        echo twig_include($this->env, $context, "/_widgets/flash_notifications.html.twig");
        echo "

                ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 33, $this->source); })()), 'form_start', ["attr" => ["class" => "contactForm"]]);
        // line 35
        echo "


                    <fieldset>
                        <div class=\"formFieldWrap\">
                            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 40, $this->source); })()), "idPaneliste", [], "any", false, false, false, 40), 'label', ["label" => "ID panéliste", "label_attr" => ["class" => "field-title contactNameField"]]);
        echo "
                            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 41, $this->source); })()), "idPaneliste", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "contactField", "placeholder" => "Votre ID panéliste"]]);
        echo "
                        </div>
                        <div class=\"formFieldWrap\">
                            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 44, $this->source); })()), "lastname", [], "any", false, false, false, 44), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nom", [], "contact"), "label_attr" => ["class" => "field-title contactNameField"]]);
        echo "
                            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 45, $this->source); })()), "lastname", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "contactField", "placeholder" => "Votre nom"]]);
        echo "
                        </div>
                        <div class=\"formFieldWrap\">
                            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 48, $this->source); })()), "firstname", [], "any", false, false, false, 48), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Prénom", [], "contact"), "label_attr" => ["class" => "field-title contactNameField"]]);
        echo "
                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 49, $this->source); })()), "firstname", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "contactField", "placeholder" => "Votre prénom"]]);
        echo "
                        </div>
                        <div class=\"formFieldWrap\">
                            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 52, $this->source); })()), "email", [], "any", false, false, false, 52), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Votre adresse email", [], "contact"), "label_attr" => ["class" => "field-title contactNameField"]]);
        echo "
                            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 53, $this->source); })()), "email", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "contactField", "placeholder" => "Votre adresse email"]]);
        echo "
                        </div>
                        <div class=\"formFieldWrap\">
                            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 56, $this->source); })()), "subject", [], "any", false, false, false, 56), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subjet", [], "contact"), "label_attr" => ["class" => "field-title contactNameField"]]);
        echo "
                            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 57, $this->source); })()), "subject", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "contactField", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subjet", [], "contact")]]);
        echo "
                        </div>
                        <div class=\"formTextareaWrap\">
                            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 60, $this->source); })()), "content", [], "any", false, false, false, 60), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Message", [], "contact"), "label_attr" => ["class" => "field-title contactNameField"]]);
        echo "
                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 61, $this->source); })()), "content", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "contactTextarea", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Contenu de message", [], "contact")]]);
        echo "
                        </div>
                        <div class=\"formSubmitButtonErrorsWrap contactFormButton\">
                            <button class=\"buttonWrap button button-green contactSubmitButton\" type=\"submit\">";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("send", [], "contact"), "html", null, true);
        echo "</button>
                        </div>
                    </fieldset>
                ";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 67, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>



    </div>









";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontend/Contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 67,  219 => 64,  213 => 61,  209 => 60,  203 => 57,  199 => 56,  193 => 53,  189 => 52,  183 => 49,  179 => 48,  173 => 45,  169 => 44,  163 => 41,  159 => 40,  152 => 35,  150 => 33,  145 => 31,  135 => 24,  127 => 20,  117 => 19,  105 => 17,  101 => 16,  97 => 15,  93 => 14,  89 => 13,  85 => 12,  81 => 11,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"frontend/_layout.html.twig\" %}
{% block stylesheets %}
    {{ parent() }}
    <style>
        .header{
            text-align: center;
        }
    </style>


    <link href=\"{{ asset('frontend/styles/style.css') }}\"           rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('frontend/styles/menu_layout.css') }}\"           rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('frontend/styles/menus.css') }}\"           rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('frontend/styles/framework.css') }}\"       rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('frontend/styles/font-awesome.css') }}\"    rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('frontend/styles/animate.css') }}\"         rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('frontend/styles/override.css') }}\"        rel=\"stylesheet\" type=\"text/css\">
{% endblock %}
{% block content %}
    {{ parent() }}

    <div class=\"content\">
        <div class=\"container heading-style-5\">
            <h4 class=\"heading-title\" style=\"margin-top: 20px\">{{ 'contact' }}</h4>
            <i class=\"fa fa-envelope-o heading-icon\"></i>
            <div class=\"line bg-black\"></div>
        </div>

        <div class=\"container no-bottom\">
            <div class=\"contact-form no-bottom\">
                {{ include('/_widgets/flash_notifications.html.twig') }}

                {{ form_start(contact_form, {'attr' : {
                    'class' : 'contactForm'
                }}) }}


                    <fieldset>
                        <div class=\"formFieldWrap\">
                            {{ form_label(contact_form.idPaneliste, null, {'label': 'ID panéliste', 'label_attr': {'class': 'field-title contactNameField'}}) }}
                            {{ form_widget(contact_form.idPaneliste, {'attr': {'class': 'contactField', 'placeholder' : 'Votre ID panéliste'}}) }}
                        </div>
                        <div class=\"formFieldWrap\">
                            {{ form_label(contact_form.lastname, null, {'label': 'Nom' |trans({}, 'contact'), 'label_attr': {'class': 'field-title contactNameField'}}) }}
                            {{ form_widget(contact_form.lastname, {'attr': {'class': 'contactField', 'placeholder' : 'Votre nom'}}) }}
                        </div>
                        <div class=\"formFieldWrap\">
                            {{ form_label(contact_form.firstname, null, {'label': 'Prénom' |trans({}, 'contact'), 'label_attr': {'class': 'field-title contactNameField'}}) }}
                            {{ form_widget(contact_form.firstname, {'attr': {'class': 'contactField', 'placeholder' : 'Votre prénom'}}) }}
                        </div>
                        <div class=\"formFieldWrap\">
                            {{ form_label(contact_form.email, null, {'label': 'Votre adresse email' |trans({}, 'contact'), 'label_attr': {'class': 'field-title contactNameField'}}) }}
                            {{ form_widget(contact_form.email, {'attr': {'class': 'contactField', 'placeholder' : 'Votre adresse email'}}) }}
                        </div>
                        <div class=\"formFieldWrap\">
                            {{ form_label(contact_form.subject, null, {'label': 'Subjet' |trans({}, 'contact'), 'label_attr': {'class': 'field-title contactNameField'}}) }}
                            {{ form_widget(contact_form.subject, {'attr': {'class': 'contactField', 'placeholder' : 'Subjet' |trans({}, 'contact')}}) }}
                        </div>
                        <div class=\"formTextareaWrap\">
                            {{ form_label(contact_form.content, null, {'label': 'Message' |trans({}, 'contact'), 'label_attr': {'class': 'field-title contactNameField'}}) }}
                            {{ form_widget(contact_form.content, {'attr': {'class': 'contactTextarea', 'placeholder' : 'Contenu de message' |trans({}, 'contact')}}) }}
                        </div>
                        <div class=\"formSubmitButtonErrorsWrap contactFormButton\">
                            <button class=\"buttonWrap button button-green contactSubmitButton\" type=\"submit\">{{ 'send' |trans({}, 'contact') }}</button>
                        </div>
                    </fieldset>
                {{ form_end(contact_form) }}
            </div>
        </div>



    </div>









{% endblock %}", "frontend/Contact/index.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/Contact/index.html.twig");
    }
}
