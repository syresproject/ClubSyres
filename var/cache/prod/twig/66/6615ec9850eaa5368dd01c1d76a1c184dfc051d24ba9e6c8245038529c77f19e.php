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
class __TwigTemplate_4082db31c9eba1c357047d9e415f9689fc09a86c89b416e2a22991612a715ca7 extends Template
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
        $this->parent = $this->loadTemplate("backend/_layout.html.twig", "Backend/Configuration/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h3 class=\"page-title\"> Configuration
        <small>édition de la configuration générale du site</small>
    </h3>
";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["configuration_form"] ?? null), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["configuration_form"] ?? null), "site_name", [], "any", false, false, false, 24), 'label', ["label" => "Nom du site", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["configuration_form"] ?? null), "site_name", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom du site"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["configuration_form"] ?? null), "mode_maintenance", [], "any", false, false, false, 30), 'label', ["label" => "Mode maintenance", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            <div class=\"radio-list\">
                                <label class=\"radio-inline\">
                                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration_form"] ?? null), "mode_maintenance", [], "any", false, false, false, 34), 0, [], "any", false, false, false, 34), 'widget');
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yes", [], "bo_formlabel"), "html", null, true);
        echo " </label>
                                <label class=\"radio-inline\">
                                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration_form"] ?? null), "mode_maintenance", [], "any", false, false, false, 36), 1, [], "any", false, false, false, 36), 'widget');
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("no", [], "bo_formlabel"), "html", null, true);
        echo " </label>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["configuration_form"] ?? null), "mode_maintenance_text", [], "any", false, false, false, 41), 'label', ["label" => "Texte de maintenance", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["configuration_form"] ?? null), "mode_maintenance_text", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Texte de maintenance"]]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["configuration_form"] ?? null), "meta_title", [], "any", false, false, false, 59), 'label', ["label" => "Méta titre", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["configuration_form"] ?? null), "meta_title", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Méta titre"]]);
        echo "
                            <p class=\"help-block\">Le méta-titre ne doit pas dépasser 55 caractères.</p>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["configuration_form"] ?? null), "meta_description", [], "any", false, false, false, 66), 'label', ["label" => "Méta description", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["configuration_form"] ?? null), "meta_description", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Méta description"]]);
        echo "
                            <p class=\"help-block\">La méta-description ne doit pas dépasser 155 caractères.</p>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["configuration_form"] ?? null), "meta_keywords", [], "any", false, false, false, 73), 'label', ["label" => "Mots-clés", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["configuration_form"] ?? null), "meta_keywords", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Mots-clés"]]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["configuration_form"] ?? null), "contact_phone", [], "any", false, false, false, 91), 'label', ["label" => "Téléphone", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["configuration_form"] ?? null), "contact_phone", [], "any", false, false, false, 93), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Téléphone"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["configuration_form"] ?? null), "contact_fax", [], "any", false, false, false, 97), 'label', ["label" => "Fax", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["configuration_form"] ?? null), "contact_fax", [], "any", false, false, false, 99), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Fax"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["configuration_form"] ?? null), "contact_email", [], "any", false, false, false, 103), 'label', ["label" => "Email", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["configuration_form"] ?? null), "contact_email", [], "any", false, false, false, 105), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Email"]]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["configuration_form"] ?? null), "google_analytics", [], "any", false, false, false, 120), 'label', ["label" => "Clé analytics", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["configuration_form"] ?? null), "google_analytics", [], "any", false, false, false, 122), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Clé analytics"]]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["configuration_form"] ?? null), "social_facebook", [], "any", false, false, false, 138), 'label', ["label" => "Page Facebook", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["configuration_form"] ?? null), "social_facebook", [], "any", false, false, false, 140), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Page Facebook"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["configuration_form"] ?? null), "social_twitter", [], "any", false, false, false, 144), 'label', ["label" => "Compte Instagram", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["configuration_form"] ?? null), "social_twitter", [], "any", false, false, false, 146), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Compte Instagram"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["configuration_form"] ?? null), "website", [], "any", false, false, false, 150), 'label', ["label" => "Site Web", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["configuration_form"] ?? null), "website", [], "any", false, false, false, 152), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Site Web"]]);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["configuration_form"] ?? null), 'form_end');
        echo "
";
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
        return array (  317 => 168,  309 => 163,  303 => 159,  294 => 152,  289 => 150,  282 => 146,  277 => 144,  270 => 140,  265 => 138,  255 => 130,  245 => 122,  240 => 120,  230 => 112,  221 => 105,  216 => 103,  209 => 99,  204 => 97,  197 => 93,  192 => 91,  182 => 83,  172 => 75,  167 => 73,  159 => 68,  154 => 66,  146 => 61,  141 => 59,  131 => 51,  121 => 43,  116 => 41,  106 => 36,  99 => 34,  92 => 30,  85 => 26,  80 => 24,  70 => 16,  65 => 12,  62 => 10,  58 => 9,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Backend/Configuration/index.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/Configuration/index.html.twig");
    }
}
