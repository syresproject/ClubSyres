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
class __TwigTemplate_29c3cef47998f5f0d3ed7df1344e228c56e596df25257ba8170cc4837b231ee0 extends Template
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
        $this->parent = $this->loadTemplate("Backend/_layout.html.twig", "Backend/User/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h3 class=\"page-title\"> Panélistes
        <small>ajout d'un panéliste</small>
    </h3>
";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        // line 21
        echo "

                <div class=\"form-body\">
                    <div class=\"form-group\">
                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "idPaneliste", [], "any", false, false, false, 25), 'label', ["label" => "ID Panéliste", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "idPaneliste", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ID Panéliste"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, false, 31), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title", [], "bo_formlabel"), "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control", "placeholder" => ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title", [], "bo_formlabel") . " (Monsieur / Madame)")]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "lastname", [], "any", false, false, false, 37), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("name", [], "bo_formlabel"), "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "lastname", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("name", [], "bo_formlabel")]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "firstname", [], "any", false, false, false, 43), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("firstname", [], "bo_formlabel"), "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "firstname", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("firstname", [], "bo_formlabel")]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "birthdate", [], "any", false, false, false, 49), 'label', ["label" => "Date de naissance", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "birthdate", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control", "placeholder" => ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("birthdate", [], "bo_formlabel") . " (JJ/MM/AAAA)")]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 55), 'label', ["label" => "Numero telephone", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Numero telephone"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 61), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("email", [], "bo_formlabel"), "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("email", [], "bo_formlabel")]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "enabled", [], "any", false, false, false, 67), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("enabled", [], "bo_formlabel"), "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            <div class=\"radio-list\">
                                <label class=\"radio-inline\">
                                    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "enabled", [], "any", false, false, false, 71), 0, [], "any", false, false, false, 71), 'widget');
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yes", [], "bo_formlabel"), "html", null, true);
        echo " </label>
                                <label class=\"radio-inline\">
                                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "enabled", [], "any", false, false, false, 73), 1, [], "any", false, false, false, 73), 'widget');
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("no", [], "bo_formlabel"), "html", null, true);
        echo " </label>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "statut", [], "any", false, false, false, 79), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Statut", [], "bo_formlabel"), "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "statut", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Statut"]]);
        echo "
                        </div>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "panelisteGroups", [], "any", false, false, false, 86), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("groups", [], "bo_formlabel"), "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "panelisteGroups", [], "any", false, false, false, 88));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
        </div>
    </div>
";
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
        return array (  244 => 103,  237 => 99,  228 => 92,  218 => 90,  215 => 89,  211 => 88,  206 => 86,  198 => 81,  193 => 79,  182 => 73,  175 => 71,  168 => 67,  161 => 63,  156 => 61,  149 => 57,  144 => 55,  137 => 51,  132 => 49,  125 => 45,  120 => 43,  113 => 39,  108 => 37,  101 => 33,  96 => 31,  89 => 27,  84 => 25,  78 => 21,  76 => 19,  71 => 17,  62 => 10,  58 => 9,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Backend/User/new.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/User/new.html.twig");
    }
}
