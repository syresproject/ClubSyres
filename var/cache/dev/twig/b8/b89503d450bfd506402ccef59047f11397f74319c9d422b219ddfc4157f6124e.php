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

/* Backend/User/edit.html.twig */
class __TwigTemplate_9303b444cac6c4679de44433a6a088e215d21ca2c187bca85f464a38f7bd19af extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/User/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/User/edit.html.twig"));

        $this->parent = $this->loadTemplate("Backend/_layout.html.twig", "Backend/User/edit.html.twig", 1);
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
        <small>édition d'un panéliste</small>
    </h3>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 9
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <style>
        #groupUser{
            overflow: scroll;
            height: 250px;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 19
        echo "    <div class=\"portlet light bordered\">
        <div class=\"portlet-title\">
            <div class=\"caption\">
                <span class=\"caption-subject font-red-sunglo bold uppercase\">Edition</span>
            </div>
            <div class=\"actions\">
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new RuntimeError('Variable "delete_form" does not exist.', 25, $this->source); })()), 'form_start');
        echo "
                    <button class=\"btn btn-circle btn-icon-only btn-default\" type=\"submit\">
                        <i class=\"icon-trash\"></i>
                    </button>
                ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new RuntimeError('Variable "delete_form" does not exist.', 29, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
        <div class=\"portlet-body form\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 33, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        // line 35
        echo "
                <div class=\"form-body\">
                    <div class=\"form-group\">
                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 38, $this->source); })()), "idPaneliste", [], "any", false, false, false, 38), 'label', ["label" => "ID Panéliste", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 40, $this->source); })()), "idPaneliste", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ID Panéliste"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 44, $this->source); })()), "title", [], "any", false, false, false, 44), 'label', ["label" => "Titre", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 46, $this->source); })()), "title", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Titre (Monsieur / Madame)"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 50, $this->source); })()), "lastname", [], "any", false, false, false, 50), 'label', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("name", [], "bo_formlabel"), "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 52, $this->source); })()), "lastname", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 56, $this->source); })()), "firstname", [], "any", false, false, false, 56), 'label', ["label" => "Prénom", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 58, $this->source); })()), "firstname", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Prénom"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 62, $this->source); })()), "birthdate", [], "any", false, false, false, 62), 'label', ["label" => "Date de naissance", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 64, $this->source); })()), "birthdate", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Date de naissance (JJ/MM/AAAA)"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 68, $this->source); })()), "email", [], "any", false, false, false, 68), 'label', ["label" => "Adresse email", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 70, $this->source); })()), "email", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Adresse email"]]);
        echo "
                        </div>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 75, $this->source); })()), "phone", [], "any", false, false, false, 75), 'label', ["label" => "Telephone", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 77, $this->source); })()), "phone", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Telephone"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 81, $this->source); })()), "statut", [], "any", false, false, false, 81), 'label', ["label" => "Statut", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 83, $this->source); })()), "statut", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Statut"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 87, $this->source); })()), "enabled", [], "any", false, false, false, 87), 'label', ["label" => "Activé", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            <div class=\"radio-list\">
                                <label class=\"radio-inline\">
                                    ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 91, $this->source); })()), "enabled", [], "any", false, false, false, 91), 0, [], "any", false, false, false, 91), 'widget');
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yes", [], "bo_formlabel"), "html", null, true);
        echo " </label>
                                <label class=\"radio-inline\">
                                    ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 93, $this->source); })()), "enabled", [], "any", false, false, false, 93), 1, [], "any", false, false, false, 93), 'widget');
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("no", [], "bo_formlabel"), "html", null, true);
        echo " </label>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group\" id=\"groupUser\">
                        ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 98, $this->source); })()), "panelisteGroups", [], "any", false, false, false, 98), 'label', ["label" => "Groupes", "label_attr" => ["class" => "col-md-2 control-label"]]);
        echo "
                        <div class=\"col-md-10\">
                            ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 100, $this->source); })()), "panelisteGroups", [], "any", false, false, false, 100));
        foreach ($context['_seq'] as $context["_key"] => $context["panelisteGroup"]) {
            // line 101
            echo "                                <label class=\"radio\">
                                    ";
            // line 102
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["panelisteGroup"], 'widget');
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["panelisteGroup"], "vars", [], "any", false, false, false, 102), "label", [], "any", false, false, false, 102), "html", null, true);
            echo " </label>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panelisteGroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                        </div>
                    </div>


                </div>
                <div class=\"form-actions\">
                    <div class=\"row\">
                        <div class=\"col-md-offset-3 col-md-4\">
                            <button class=\"btn green\" type=\"submit\">Enregistrer</button>
                            <a class=\"btn default\" href=\"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
        echo "\">Retour</a>
                        </div>
                    </div>
                </div>
            ";
        // line 117
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 117, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Backend/User/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 117,  305 => 113,  294 => 104,  284 => 102,  281 => 101,  277 => 100,  272 => 98,  262 => 93,  255 => 91,  248 => 87,  241 => 83,  236 => 81,  229 => 77,  224 => 75,  216 => 70,  211 => 68,  204 => 64,  199 => 62,  192 => 58,  187 => 56,  180 => 52,  175 => 50,  168 => 46,  163 => 44,  156 => 40,  151 => 38,  146 => 35,  144 => 33,  137 => 29,  130 => 25,  122 => 19,  112 => 18,  93 => 9,  83 => 8,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Backend/_layout.html.twig' %}

{% block page_title %}
    <h3 class=\"page-title\"> Panélistes
        <small>édition d'un panéliste</small>
    </h3>
{% endblock %}
{% block stylesheet %}
    {{ parent() }}
    <style>
        #groupUser{
            overflow: scroll;
            height: 250px;
        }
    </style>
{% endblock %}

{% block content %}
    <div class=\"portlet light bordered\">
        <div class=\"portlet-title\">
            <div class=\"caption\">
                <span class=\"caption-subject font-red-sunglo bold uppercase\">Edition</span>
            </div>
            <div class=\"actions\">
                {{ form_start(delete_form) }}
                    <button class=\"btn btn-circle btn-icon-only btn-default\" type=\"submit\">
                        <i class=\"icon-trash\"></i>
                    </button>
                {{ form_end(delete_form) }}
            </div>
        </div>
        <div class=\"portlet-body form\">
            {{ form_start(edit_form, {'attr' : {
                'class' : 'form-horizontal'
            }}) }}
                <div class=\"form-body\">
                    <div class=\"form-group\">
                        {{ form_label(edit_form.idPaneliste, null, {'label': 'ID Panéliste', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            {{ form_widget(edit_form.idPaneliste, {'attr': {'class': 'form-control', 'placeholder' : 'ID Panéliste'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(edit_form.title, null, {'label': 'Titre', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            {{ form_widget(edit_form.title, {'attr': {'class': 'form-control', 'placeholder' : 'Titre (Monsieur / Madame)'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(edit_form.lastname, null, {'label': 'name' |trans({}, 'bo_formlabel'), 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            {{ form_widget(edit_form.lastname, {'attr': {'class': 'form-control', 'placeholder' : 'Nom'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(edit_form.firstname, null, {'label': 'Prénom', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            {{ form_widget(edit_form.firstname, {'attr': {'class': 'form-control', 'placeholder' : 'Prénom'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(edit_form.birthdate, null, {'label': 'Date de naissance', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            {{ form_widget(edit_form.birthdate, {'attr': {'class': 'form-control', 'placeholder' : 'Date de naissance (JJ/MM/AAAA)'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(edit_form.email, null, {'label': 'Adresse email', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            {{ form_widget(edit_form.email, {'attr': {'class': 'form-control', 'placeholder' : 'Adresse email'}}) }}
                        </div>
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(edit_form.phone, null, {'label': 'Telephone', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            {{ form_widget(edit_form.phone, {'attr': {'class': 'form-control', 'placeholder' : 'Telephone'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(edit_form.statut, null, {'label': 'Statut', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            {{ form_widget(edit_form.statut, {'attr': {'class': 'form-control', 'placeholder' : 'Statut'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(edit_form.enabled, null, {'label': 'Activé', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            <div class=\"radio-list\">
                                <label class=\"radio-inline\">
                                    {{ form_widget(edit_form.enabled.0) }} {{ 'yes' |trans({}, 'bo_formlabel') }} </label>
                                <label class=\"radio-inline\">
                                    {{ form_widget(edit_form.enabled.1) }} {{ 'no' |trans({}, 'bo_formlabel') }} </label>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group\" id=\"groupUser\">
                        {{ form_label(edit_form.panelisteGroups, null, {'label': 'Groupes', 'label_attr': {'class': 'col-md-2 control-label'}}) }}
                        <div class=\"col-md-10\">
                            {% for panelisteGroup in edit_form.panelisteGroups %}
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
            {{ form_end(edit_form) }}
        </div>
    </div>
{% endblock %}
", "Backend/User/edit.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/User/edit.html.twig");
    }
}
