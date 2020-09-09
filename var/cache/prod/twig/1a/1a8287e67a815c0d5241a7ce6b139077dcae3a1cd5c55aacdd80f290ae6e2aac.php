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
class __TwigTemplate_849a28c8051e082ca99ac4c93c1432d5dae76630adc2deeb84d71354016d8e60 extends Template
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
        $this->parent = $this->loadTemplate("frontend/_layout.html.twig", "frontend/Contact/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["contact_form"] ?? null), 'form_start', ["attr" => ["class" => "contactForm"]]);
        // line 35
        echo "


                    <fieldset>
                        <div class=\"formFieldWrap\">
                            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_form"] ?? null), "idPaneliste", [], "any", false, false, false, 40), 'label', ["label" => "ID panéliste", "label_attr" => ["class" => "field-title contactNameField"]]);
        echo "
                            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_form"] ?? null), "idPaneliste", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "contactField", "placeholder" => "Votre ID panéliste"]]);
        echo "
                        </div>
                        <div class=\"formFieldWrap\">
                            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_form"] ?? null), "lastname", [], "any", false, false, false, 44), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nom", [], "contact"), "label_attr" => ["class" => "field-title contactNameField"]]);
        echo "
                            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_form"] ?? null), "lastname", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "contactField", "placeholder" => "Votre nom"]]);
        echo "
                        </div>
                        <div class=\"formFieldWrap\">
                            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_form"] ?? null), "firstname", [], "any", false, false, false, 48), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Prénom", [], "contact"), "label_attr" => ["class" => "field-title contactNameField"]]);
        echo "
                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_form"] ?? null), "firstname", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "contactField", "placeholder" => "Votre prénom"]]);
        echo "
                        </div>
                        <div class=\"formFieldWrap\">
                            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_form"] ?? null), "email", [], "any", false, false, false, 52), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Votre adresse email", [], "contact"), "label_attr" => ["class" => "field-title contactNameField"]]);
        echo "
                            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_form"] ?? null), "email", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "contactField", "placeholder" => "Votre adresse email"]]);
        echo "
                        </div>
                        <div class=\"formFieldWrap\">
                            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_form"] ?? null), "subject", [], "any", false, false, false, 56), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subjet", [], "contact"), "label_attr" => ["class" => "field-title contactNameField"]]);
        echo "
                            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_form"] ?? null), "subject", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "contactField", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subjet", [], "contact")]]);
        echo "
                        </div>
                        <div class=\"formTextareaWrap\">
                            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_form"] ?? null), "content", [], "any", false, false, false, 60), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Message", [], "contact"), "label_attr" => ["class" => "field-title contactNameField"]]);
        echo "
                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_form"] ?? null), "content", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "contactTextarea", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Contenu de message", [], "contact")]]);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["contact_form"] ?? null), 'form_end');
        echo "
            </div>
        </div>



    </div>









";
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
        return array (  195 => 67,  189 => 64,  183 => 61,  179 => 60,  173 => 57,  169 => 56,  163 => 53,  159 => 52,  153 => 49,  149 => 48,  143 => 45,  139 => 44,  133 => 41,  129 => 40,  122 => 35,  120 => 33,  115 => 31,  105 => 24,  97 => 20,  93 => 19,  87 => 17,  83 => 16,  79 => 15,  75 => 14,  71 => 13,  67 => 12,  63 => 11,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/Contact/index.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/Contact/index.html.twig");
    }
}
