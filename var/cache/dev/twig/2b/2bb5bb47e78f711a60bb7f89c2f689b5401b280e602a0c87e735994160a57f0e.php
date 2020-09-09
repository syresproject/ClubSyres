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

/* Backend/Configuration/index.html.twig */
class __TwigTemplate_b8dc9ed826dff5e8f31552e8444f5681546e13fd7f9697786241efdbb9c3c0ac extends Template
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
        return "backend/_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/Configuration/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/Configuration/index.html.twig"));

        $this->parent = $this->loadTemplate("backend/_layout.html.twig", "Backend/Configuration/index.html.twig", 1);
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
        echo "    <h3 class=\"page-title\"> Configuration
        <small>édition de la configuration générale du site</small>
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["configuration_form"]) || array_key_exists("configuration_form", $context) ? $context["configuration_form"] : (function () { throw new RuntimeError('Variable "configuration_form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        // line 12
        echo "
        <div class=\"portlet light bordered\">

            ";
        // line 16
        echo "            <div class=\"portlet-title\">
                <div class=\"caption\">
                    <span class=\"caption-subject font-red-sunglo bold uppercase\">Générale</span>
                </div>
            </div>
            <div class=\"portlet-body form\">
                <div class=\"form-body\">
                    <div class=\"form-group\">
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["configuration_form"]) || array_key_exists("configuration_form", $context) ? $context["configuration_form"] : (function () { throw new RuntimeError('Variable "configuration_form" does not exist.', 24, $this->source); })()), "site_name", [], "any", false, false, false, 24), 'label', ["label" => "Nom du site", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["configuration_form"]) || array_key_exists("configuration_form", $context) ? $context["configuration_form"] : (function () { throw new RuntimeError('Variable "configuration_form" does not exist.', 26, $this->source); })()), "site_name", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom du site"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["configuration_form"]) || array_key_exists("configuration_form", $context) ? $context["configuration_form"] : (function () { throw new RuntimeError('Variable "configuration_form" does not exist.', 30, $this->source); })()), "mode_maintenance", [], "any", false, false, false, 30), 'label', ["label" => "Mode maintenance", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            <div class=\"radio-list\">
                                <label class=\"radio-inline\">
                                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["configuration_form"]) || array_key_exists("configuration_form", $context) ? $context["configuration_form"] : (function () { throw new RuntimeError('Variable "configuration_form" does not exist.', 34, $this->source); })()), "mode_maintenance", [], "any", false, false, false, 34), 0, [], "any", false, false, false, 34), 'widget');
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yes", [], "bo_formlabel"), "html", null, true);
        echo " </label>
                                <label class=\"radio-inline\">
                                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["configuration_form"]) || array_key_exists("configuration_form", $context) ? $context["configuration_form"] : (function () { throw new RuntimeError('Variable "configuration_form" does not exist.', 36, $this->source); })()), "mode_maintenance", [], "any", false, false, false, 36), 1, [], "any", false, false, false, 36), 'widget');
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("no", [], "bo_formlabel"), "html", null, true);
        echo " </label>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["configuration_form"]) || array_key_exists("configuration_form", $context) ? $context["configuration_form"] : (function () { throw new RuntimeError('Variable "configuration_form" does not exist.', 41, $this->source); })()), "mode_maintenance_text", [], "any", false, false, false, 41), 'label', ["label" => "Texte de maintenance", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["configuration_form"]) || array_key_exists("configuration_form", $context) ? $context["configuration_form"] : (function () { throw new RuntimeError('Variable "configuration_form" does not exist.', 43, $this->source); })()), "mode_maintenance_text", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Texte de maintenance"]]);
        echo "
                            <p class=\"help-block\">Affiché seulement lorsque le site est en mode maintenance.</p>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 51
        echo "            <div class=\"portlet-title\">
                <div class=\"caption\">
                    <span class=\"caption-subject font-red-sunglo bold uppercase\">Référencement</span>
                </div>
            </div>
            <div class=\"portlet-body form\">
                <div class=\"form-body\">
                    <div class=\"form-group\">
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["configuration_form"]) || array_key_exists("configuration_form", $context) ? $context["configuration_form"] : (function () { throw new RuntimeError('Variable "configuration_form" does not exist.', 59, $this->source); })()), "meta_title", [], "any", false, false, false, 59), 'label', ["label" => "Méta titre", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["configuration_form"]) || array_key_exists("configuration_form", $context) ? $context["configuration_form"] : (function () { throw new RuntimeError('Variable "configuration_form" does not exist.', 61, $this->source); })()), "meta_title", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Méta titre"]]);
        echo "
                            <p class=\"help-block\">Le méta-titre ne doit pas dépasser 55 caractères.</p>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["configuration_form"]) || array_key_exists("configuration_form", $context) ? $context["configuration_form"] : (function () { throw new RuntimeError('Variable "configuration_form" does not exist.', 66, $this->source); })()), "meta_description", [], "any", false, false, false, 66), 'label', ["label" => "Méta description", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["configuration_form"]) || array_key_exists("configuration_form", $context) ? $context["configuration_form"] : (function () { throw new RuntimeError('Variable "configuration_form" does not exist.', 68, $this->source); })()), "meta_description", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Méta description"]]);
        echo "
                            <p class=\"help-block\">La méta-description ne doit pas dépasser 155 caractères.</p>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["configuration_form"]) || array_key_exists("configuration_form", $context) ? $context["configuration_form"] : (function () { throw new RuntimeError('Variable "configuration_form" does not exist.', 73, $this->source); })()), "meta_keywords", [], "any", false, false, false, 73), 'label', ["label" => "Mots-clés", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["configuration_form"]) || array_key_exists("configuration_form", $context) ? $context["configuration_form"] : (function () { throw new RuntimeError('Variable "configuration_form" does not exist.', 75, $this->source); })()), "meta_keywords", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Mots-clés"]]);
        echo "
                            <p class=\"help-block\">Les mots-clés doivent être séparés par des virgules.</p>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 83
        echo "            <div class=\"portlet-title\">
                <div class=\"caption\">
                    <span class=\"caption-subject font-red-sunglo bold uppercase\">Contact</span>
                </div>
            </div>
            <div class=\"portlet-body form\">
                <div class=\"form-body\">
                    <div class=\"form-group\">
                        ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["configuration_form"]) || array_key_exists("configuration_form", $context) ? $context["configuration_form"] : (function () { throw new RuntimeError('Variable "configuration_form" does not exist.', 91, $this->source); })()), "contact_phone", [], "any", false, false, false, 91), 'label', ["label" => "Téléphone", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["configuration_form"]) || array_key_exists("configuration_form", $context) ? $context["configuration_form"] : (function () { throw new RuntimeError('Variable "configuration_form" does not exist.', 93, $this->source); })()), "contact_phone", [], "any", false, false, false, 93), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Téléphone"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["configuration_form"]) || array_key_exists("configuration_form", $context) ? $context["configuration_form"] : (function () { throw new RuntimeError('Variable "configuration_form" does not exist.', 97, $this->source); })()), "contact_fax", [], "any", false, false, false, 97), 'label', ["label" => "Fax", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["configuration_form"]) || array_key_exists("configuration_form", $context) ? $context["configuration_form"] : (function () { throw new RuntimeError('Variable "configuration_form" does not exist.', 99, $this->source); })()), "contact_fax", [], "any", false, false, false, 99), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Fax"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["configuration_form"]) || array_key_exists("configuration_form", $context) ? $context["configuration_form"] : (function () { throw new RuntimeError('Variable "configuration_form" does not exist.', 103, $this->source); })()), "contact_email", [], "any", false, false, false, 103), 'label', ["label" => "Email", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["configuration_form"]) || array_key_exists("configuration_form", $context) ? $context["configuration_form"] : (function () { throw new RuntimeError('Variable "configuration_form" does not exist.', 105, $this->source); })()), "contact_email", [], "any", false, false, false, 105), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Email"]]);
        echo "
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 112
        echo "            <div class=\"portlet-title\">
                <div class=\"caption\">
                    <span class=\"caption-subject font-red-sunglo bold uppercase\">Google</span>
                </div>
            </div>
            <div class=\"portlet-body form\">
                <div class=\"form-body\">
                    <div class=\"form-group\">
                        ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["configuration_form"]) || array_key_exists("configuration_form", $context) ? $context["configuration_form"] : (function () { throw new RuntimeError('Variable "configuration_form" does not exist.', 120, $this->source); })()), "google_analytics", [], "any", false, false, false, 120), 'label', ["label" => "Clé analytics", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["configuration_form"]) || array_key_exists("configuration_form", $context) ? $context["configuration_form"] : (function () { throw new RuntimeError('Variable "configuration_form" does not exist.', 122, $this->source); })()), "google_analytics", [], "any", false, false, false, 122), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Clé analytics"]]);
        echo "
                            <p class=\"help-block\">La clé analytics doit être sous la forme UA-XXXX-X</p>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 130
        echo "            <div class=\"portlet-title\">
                <div class=\"caption\">
                    <span class=\"caption-subject font-red-sunglo bold uppercase\">Social</span>
                </div>
            </div>
            <div class=\"portlet-body form\">
                <div class=\"form-body\">
                    <div class=\"form-group\">
                        ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["configuration_form"]) || array_key_exists("configuration_form", $context) ? $context["configuration_form"] : (function () { throw new RuntimeError('Variable "configuration_form" does not exist.', 138, $this->source); })()), "social_facebook", [], "any", false, false, false, 138), 'label', ["label" => "Page Facebook", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["configuration_form"]) || array_key_exists("configuration_form", $context) ? $context["configuration_form"] : (function () { throw new RuntimeError('Variable "configuration_form" does not exist.', 140, $this->source); })()), "social_facebook", [], "any", false, false, false, 140), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Page Facebook"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["configuration_form"]) || array_key_exists("configuration_form", $context) ? $context["configuration_form"] : (function () { throw new RuntimeError('Variable "configuration_form" does not exist.', 144, $this->source); })()), "social_twitter", [], "any", false, false, false, 144), 'label', ["label" => "Compte Instagram", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["configuration_form"]) || array_key_exists("configuration_form", $context) ? $context["configuration_form"] : (function () { throw new RuntimeError('Variable "configuration_form" does not exist.', 146, $this->source); })()), "social_twitter", [], "any", false, false, false, 146), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Compte Instagram"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["configuration_form"]) || array_key_exists("configuration_form", $context) ? $context["configuration_form"] : (function () { throw new RuntimeError('Variable "configuration_form" does not exist.', 150, $this->source); })()), "website", [], "any", false, false, false, 150), 'label', ["label" => "Site Web", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["configuration_form"]) || array_key_exists("configuration_form", $context) ? $context["configuration_form"] : (function () { throw new RuntimeError('Variable "configuration_form" does not exist.', 152, $this->source); })()), "website", [], "any", false, false, false, 152), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Site Web"]]);
        echo "
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 159
        echo "            <div class=\"form-actions\">
                <div class=\"row\">
                    <div class=\"col-md-offset-3 col-md-4\">
                        <button class=\"btn green\" type=\"submit\">Enregistrer</button>
                        <a class=\"btn default\" href=\"";
        // line 163
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_configuration_index");
        echo "\">Retour</a>
                    </div>
                </div>
            </div>
        </div>
    ";
        // line 168
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["configuration_form"]) || array_key_exists("configuration_form", $context) ? $context["configuration_form"] : (function () { throw new RuntimeError('Variable "configuration_form" does not exist.', 168, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Backend/Configuration/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 168,  339 => 163,  333 => 159,  324 => 152,  319 => 150,  312 => 146,  307 => 144,  300 => 140,  295 => 138,  285 => 130,  275 => 122,  270 => 120,  260 => 112,  251 => 105,  246 => 103,  239 => 99,  234 => 97,  227 => 93,  222 => 91,  212 => 83,  202 => 75,  197 => 73,  189 => 68,  184 => 66,  176 => 61,  171 => 59,  161 => 51,  151 => 43,  146 => 41,  136 => 36,  129 => 34,  122 => 30,  115 => 26,  110 => 24,  100 => 16,  95 => 12,  92 => 10,  82 => 9,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/_layout.html.twig' %}

{% block page_title %}
    <h3 class=\"page-title\"> Configuration
        <small>édition de la configuration générale du site</small>
    </h3>
{% endblock %}

{% block content %}
    {{ form_start(configuration_form, {'attr' : {
        'class' : 'form-horizontal'
    }}) }}
        <div class=\"portlet light bordered\">

            {# GENERALE #}
            <div class=\"portlet-title\">
                <div class=\"caption\">
                    <span class=\"caption-subject font-red-sunglo bold uppercase\">Générale</span>
                </div>
            </div>
            <div class=\"portlet-body form\">
                <div class=\"form-body\">
                    <div class=\"form-group\">
                        {{ form_label(configuration_form.site_name, null, {'label': 'Nom du site', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            {{ form_widget(configuration_form.site_name, {'attr': {'class': 'form-control', 'placeholder' : 'Nom du site'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(configuration_form.mode_maintenance, null, {'label': 'Mode maintenance', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            <div class=\"radio-list\">
                                <label class=\"radio-inline\">
                                    {{ form_widget(configuration_form.mode_maintenance.0) }} {{ 'yes' |trans({}, 'bo_formlabel') }} </label>
                                <label class=\"radio-inline\">
                                    {{ form_widget(configuration_form.mode_maintenance.1) }} {{ 'no' |trans({}, 'bo_formlabel') }} </label>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(configuration_form.mode_maintenance_text, null, {'label': 'Texte de maintenance', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            {{ form_widget(configuration_form.mode_maintenance_text, {'attr': {'class': 'form-control', 'placeholder' : 'Texte de maintenance'}}) }}
                            <p class=\"help-block\">Affiché seulement lorsque le site est en mode maintenance.</p>
                        </div>
                    </div>
                </div>
            </div>

            {# REFERENCEMENT #}
            <div class=\"portlet-title\">
                <div class=\"caption\">
                    <span class=\"caption-subject font-red-sunglo bold uppercase\">Référencement</span>
                </div>
            </div>
            <div class=\"portlet-body form\">
                <div class=\"form-body\">
                    <div class=\"form-group\">
                        {{ form_label(configuration_form.meta_title, null, {'label': 'Méta titre', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            {{ form_widget(configuration_form.meta_title, {'attr': {'class': 'form-control', 'placeholder' : 'Méta titre'}}) }}
                            <p class=\"help-block\">Le méta-titre ne doit pas dépasser 55 caractères.</p>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(configuration_form.meta_description, null, {'label': 'Méta description', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            {{ form_widget(configuration_form.meta_description, {'attr': {'class': 'form-control', 'placeholder' : 'Méta description'}}) }}
                            <p class=\"help-block\">La méta-description ne doit pas dépasser 155 caractères.</p>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(configuration_form.meta_keywords, null, {'label': 'Mots-clés', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            {{ form_widget(configuration_form.meta_keywords, {'attr': {'class': 'form-control', 'placeholder' : 'Mots-clés'}}) }}
                            <p class=\"help-block\">Les mots-clés doivent être séparés par des virgules.</p>
                        </div>
                    </div>
                </div>
            </div>

            {# CONTACT #}
            <div class=\"portlet-title\">
                <div class=\"caption\">
                    <span class=\"caption-subject font-red-sunglo bold uppercase\">Contact</span>
                </div>
            </div>
            <div class=\"portlet-body form\">
                <div class=\"form-body\">
                    <div class=\"form-group\">
                        {{ form_label(configuration_form.contact_phone, null, {'label': 'Téléphone', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            {{ form_widget(configuration_form.contact_phone, {'attr': {'class': 'form-control', 'placeholder' : 'Téléphone'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(configuration_form.contact_fax, null, {'label': 'Fax', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            {{ form_widget(configuration_form.contact_fax, {'attr': {'class': 'form-control', 'placeholder' : 'Fax'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(configuration_form.contact_email, null, {'label': 'Email', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            {{ form_widget(configuration_form.contact_email, {'attr': {'class': 'form-control', 'placeholder' : 'Email'}}) }}
                        </div>
                    </div>
                </div>
            </div>

            {# ANALYTICS #}
            <div class=\"portlet-title\">
                <div class=\"caption\">
                    <span class=\"caption-subject font-red-sunglo bold uppercase\">Google</span>
                </div>
            </div>
            <div class=\"portlet-body form\">
                <div class=\"form-body\">
                    <div class=\"form-group\">
                        {{ form_label(configuration_form.google_analytics, null, {'label': 'Clé analytics', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            {{ form_widget(configuration_form.google_analytics, {'attr': {'class': 'form-control', 'placeholder' : 'Clé analytics'}}) }}
                            <p class=\"help-block\">La clé analytics doit être sous la forme UA-XXXX-X</p>
                        </div>
                    </div>
                </div>
            </div>

            {# SOCIAL #}
            <div class=\"portlet-title\">
                <div class=\"caption\">
                    <span class=\"caption-subject font-red-sunglo bold uppercase\">Social</span>
                </div>
            </div>
            <div class=\"portlet-body form\">
                <div class=\"form-body\">
                    <div class=\"form-group\">
                        {{ form_label(configuration_form.social_facebook, null, {'label': 'Page Facebook', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            {{ form_widget(configuration_form.social_facebook, {'attr': {'class': 'form-control', 'placeholder' : 'Page Facebook'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(configuration_form.social_twitter, null, {'label': 'Compte Instagram', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            {{ form_widget(configuration_form.social_twitter, {'attr': {'class': 'form-control', 'placeholder' : 'Compte Instagram'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(configuration_form.website, null, {'label': 'Site Web', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            {{ form_widget(configuration_form.website, {'attr': {'class': 'form-control', 'placeholder' : 'Site Web'}}) }}
                        </div>
                    </div>
                </div>
            </div>

            {# SAVE #}
            <div class=\"form-actions\">
                <div class=\"row\">
                    <div class=\"col-md-offset-3 col-md-4\">
                        <button class=\"btn green\" type=\"submit\">Enregistrer</button>
                        <a class=\"btn default\" href=\"{{ path('backend_configuration_index') }}\">Retour</a>
                    </div>
                </div>
            </div>
        </div>
    {{ form_end(configuration_form) }}
{% endblock %}
", "Backend/Configuration/index.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/Configuration/index.html.twig");
    }
}
