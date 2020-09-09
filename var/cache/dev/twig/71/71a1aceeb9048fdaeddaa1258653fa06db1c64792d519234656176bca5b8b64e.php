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

/* frontend/Survey/details.html.twig */
class __TwigTemplate_9628d8910e37b5532e8cd91ab91d5648e9679107def57c4b4e29440c0982283b extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "frontend/_layout_details.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/Survey/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/Survey/details.html.twig"));

        $this->parent = $this->loadTemplate("frontend/_layout_details.html.twig", "frontend/Survey/details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        .survey {
            display: flex;
            margin: 20px 0;
            height: 100px;
            box-shadow:0 2px 36px rgba(0,0,100,.15), 0 0 1px rgba(0,0,100,.15);
            transition:.3s;
            border-radius: 10px;
            text-align: center;
        }

        .pasOuvert{
            box-shadow: 0 1px 1px rgba(0,0,100,.25), 0 0 rgba(0,0,100,.25);
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .pPas{
            font-size: 18px !important;
            margin-top: 13px !important;
            text-align: center;
            color: #03363D;
            letter-spacing: 2px;
            text-transform: uppercase;
        }
        .numberL{
            text-shadow: 1px 0px 0.5px rgba(0,0,100,.15);
            color: #03363D !important;
            font-size: 3em !important;
            /* font-weight: 800 !important; */
            line-height: 64px;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 42
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "

    <div class=\"container\">
        <div class=\"header-clear-large\"></div>

        <div class=\"content\">
            <div class=\"container heading-style-5\">
                ";
        // line 49
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 49, $this->source); })()), "type", [], "any", false, false, false, 49), 1))) {
            // line 50
            echo "                    <div class=\"container heading-style-5\">
                            <h4 class=\"heading-title\">";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("preselections", [], "survey"), "html", null, true);
            echo "
                            ";
            // line 52
            $this->loadTemplate("frontend/header-title.html.twig", "frontend/Survey/details.html.twig", 52)->display($context);
            // line 53
            echo "                        </h4>
                    </div>
                ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 55
(isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 55, $this->source); })()), "type", [], "any", false, false, false, 55), 2))) {
            // line 56
            echo "                    <div class=\"container heading-style-5\">
                        <h4 class=\"heading-title\">
                            ";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("test", [], "survey"), "html", null, true);
            echo "
                            ";
            // line 59
            $this->loadTemplate("frontend/header-title.html.twig", "frontend/Survey/details.html.twig", 59)->display($context);
            // line 60
            echo "                        </h4>
                    </div>
                ";
        } else {
            // line 63
            echo "                    <div class=\"container heading-style-5\">
                        <h4 class=\"heading-title\">";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("survey", [], "survey"), "html", null, true);
            echo "
                            ";
            // line 65
            $this->loadTemplate("frontend/header-title.html.twig", "frontend/Survey/details.html.twig", 65)->display($context);
            // line 66
            echo "                        </h4>
                    </div>
                ";
        }
        // line 69
        echo "                <i class=\"fa fa-align-left heading-icon\"></i>
                <div class=\"line bg-gray-dark\"></div>
            </div>

            <div class=\"container-fullscreen heading-style-3\">
                <h3 class=\"heading-title\">";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 74, $this->source); })()), "name", [], "any", false, false, false, 74), "html", null, true);
        echo "</h3>
                <em class=\"heading-subtitle\">";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 75, $this->source); })()), "statusFormatted", [], "any", false, false, false, 75), [], "survey"), "html", null, true);
        echo " - #";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 75, $this->source); })()), "idSurvey", [], "any", false, false, false, 75), "html", null, true);
        echo "</em>
                <div class=\"overlay bg-gray-dark\"></div>
            </div>

            <div class=\"decoration\"></div>

            <div class=\"container\">
                <p style=\"text-align: center\">";
        // line 82
        echo twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 82, $this->source); })()), "description", [], "any", false, false, false, 82);
        echo "</p>
                <p style=\"text-align: center\">
                    ";
        // line 84
        if (twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 84, $this->source); })()), "imageName", [], "any", false, false, false, 84)) {
            // line 85
            echo "                        <a style=\"margin-top: 20px;\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("home_page/" . twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 85, $this->source); })()), "imageName", [], "any", false, false, false, 85))), "html", null, true);
            echo "\" download onclick=\"window.open(this.href); return false;\">
                            <button class=\"button\" id=\"btnInstruction\">Pdf à telecharger</button>
                        </a>
                    ";
        }
        // line 89
        echo "                </p>
            </div>

            <div class=\"decoration\"></div>

            ";
        // line 94
        if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 94, $this->source); })()), "status", [], "any", false, false, false, 94), 2)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 94, $this->source); })()), "type", [], "any", false, false, false, 94), 2)))) {
            // line 95
            echo "                ";
            echo twig_include($this->env, $context, "Frontend/FocusGroup/_focus_block.html.twig");
            echo "
            ";
        }
        // line 97
        echo "
            ";
        // line 98
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 98, $this->source); })()), "links", [], "any", false, false, false, 98)), 0))) {
            // line 99
            echo "                <div class=\"container-fullscreen heading-style-3\">
                    <h3 class=\"heading-title\">";
            // line 100
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("survey", [], "survey"), "html", null, true);
            echo "s</h3>
                    <div class=\"overlay bg-gray-dark\"></div>
                </div>

                <div class=\"\">
                    ";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 105, $this->source); })()), "links", [], "any", false, false, false, 105));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 106
                echo "                        ";
                if ( !twig_get_attribute($this->env, $this->source, ($context["history"] ?? null), twig_get_attribute($this->env, $this->source, $context["link"], "id", [], "any", false, false, false, 106), [], "array", true, true, false, 106)) {
                    // line 107
                    echo "
                            <div>
                                ";
                    // line 109
                    if ((0 >= twig_compare(twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "dateUn", [], "any", false, false, false, 109)), twig_date_converter($this->env)))) {
                        // line 110
                        echo "                                    <div  style=\"display: flex; height: 63px\" class=\"survey\" id=\"divL idOpacite\">
                                        <div style=\"width: 10%\">
                                            <p class=\"numero-questionnaire\" style=\"margin: 0px\">
                                                <strong class=\"fontLink numberL\">
                                                    ";
                        // line 114
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "numeroLien", [], "any", false, false, false, 114), "html", null, true);
                        echo "
                                                </strong>
                                            </p>
                                        </div>
                                        <div style=\"width: 60%\">
                                            <p class=\"colorTextContenus fontLink changeNom pln pPas\"  id=\"pLN\">
                                                ";
                        // line 120
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 120), "html", null, true);
                        echo "
                                                <span class=\" hideG hideGD\">
                                                        Le ";
                        // line 122
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "dateUn", [], "any", false, false, false, 122), "d/m/Y"), "html", null, true);
                        echo "
                                                </span>
                                            </p>
                                        </div>
                                        <div style=\"width: 30%;  text-align: right;\">
                                            <a href=\"";
                        // line 127
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "link", [], "any", false, false, false, 127), "html", null, true);
                        echo "\" target=\"_blank\" class=\"tasklist-item\">
                                                <span class=\"hideG\"><i class=\"material-icons\" id=\"iconL\">forward</i></span>
                                                <button class=\"hideP fontLink btn_desc hB\" id=\"btnL\">
                                                    <div class=\"sF\">
                                                        Ouvert
                                                    </div>
                                                </button>

                                            </a>
                                        </div>
                                    </div>
                                ";
                    } else {
                        // line 139
                        echo "
                                    <div class=\"pasOuvert\" style=\"display: flex; text-align: center; height: 63px\">
                                        <div style=\"width: 10%\">
                                            <p class=\"numero-questionnaire\" style=\"margin: 0px;\">
                                                <strong class=\"fontLink numberL\">
                                                    ";
                        // line 144
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "numeroLien", [], "any", false, false, false, 144), "html", null, true);
                        echo "
                                                </strong>
                                            </p>
                                        </div>

                                        <div style=\"width: 60%\">
                                            <p class=\"colorTextContenus fontLink changeNom pln pPas\"  id=\"pLN\">
                                                ";
                        // line 151
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 151), "html", null, true);
                        echo "
                                                <span class=\" hideG hideGD\">
                                                        Le ";
                        // line 153
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "dateUn", [], "any", false, false, false, 153), "d/m/Y"), "html", null, true);
                        echo "
                                                </span>
                                            </p>
                                        </div>
                                        <div style=\"width: 30%;  text-align: right;\">
                                            <a href=\"";
                        // line 158
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "link", [], "any", false, false, false, 158), "html", null, true);
                        echo "\" target=\"_blank\" class=\"tasklist-item\">
                                                <span class=\"hideG\"><i class=\"material-icons\" id=\"iconL\">forward</i></span>

                                                <button class=\"hideP fontLink btn_desc hB\" id=\"btnL\">
                                                    <div class=\"sF\">
                                                        Le ";
                        // line 163
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "dateUn", [], "any", false, false, false, 163), "d/m/Y"), "html", null, true);
                        echo "
                                                    </div>
                                                </button>
                                            </a>
                                        </div>
                                    </div>

                                ";
                    }
                    // line 171
                    echo "                           </div>


                            ";
                    // line 182
                    echo "

                            ";
                    // line 225
                    echo "                            <div class=\"decoration\"></div>

                        ";
                }
                // line 228
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 229
            echo "
                    ";
            // line 230
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 230, $this->source); })()), "links", [], "any", false, false, false, 230));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 231
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["history"] ?? null), twig_get_attribute($this->env, $this->source, $context["link"], "id", [], "any", false, false, false, 231), [], "array", true, true, false, 231)) {
                    // line 232
                    echo "                            <div>
                                ";
                    // line 233
                    if ((0 >= twig_compare(twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "dateUn", [], "any", false, false, false, 233)), twig_date_converter($this->env)))) {
                        // line 234
                        echo "                                    <div  style=\"display: flex; height: 63px\" class=\"survey\" id=\"divL idOpacite\">
                                        <div style=\"width: 10%\">
                                            <p class=\"numero-questionnaire\" style=\"margin: 0px\">
                                                <strong class=\"fontLink numberL\">
                                                    ";
                        // line 238
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "numeroLien", [], "any", false, false, false, 238), "html", null, true);
                        echo "
                                                </strong>
                                            </p>
                                        </div>
                                        <div style=\"width: 60%\">
                                            <p class=\"colorTextContenus fontLink changeNom pln pPas\"  id=\"pLN\">
                                                ";
                        // line 244
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 244), "html", null, true);
                        echo "
                                                <span class=\" hideG hideGD\">
                                                        Le ";
                        // line 246
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "dateUn", [], "any", false, false, false, 246), "d/m/Y"), "html", null, true);
                        echo "
                                                </span>
                                            </p>
                                        </div>
                                        <div style=\"width: 30%;  text-align: right;\">
                                            <a href=\"";
                        // line 251
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "link", [], "any", false, false, false, 251), "html", null, true);
                        echo "\" target=\"_blank\" class=\"tasklist-item\">
                                                <span class=\"hideG\"><i class=\"material-icons\" id=\"iconL\">forward</i></span>

                                                <button class=\"hideP fontLink btn_desc hB\" id=\"btnL\">
                                                    <div class=\"sF\">
                                                        Ouvert
                                                    </div>
                                                </button>

                                            </a>
                                        </div>
                                    </div>
                                ";
                    } else {
                        // line 264
                        echo "                                    <div class=\"pasOuvert\" style=\"display: flex; text-align: center; height: 63px\">
                                        <div style=\"width: 10%\">
                                            <p class=\"numero-questionnaire\" style=\"margin: 0px\">
                                                <strong class=\"fontLink numberL\">
                                                    ";
                        // line 268
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "numeroLien", [], "any", false, false, false, 268), "html", null, true);
                        echo "
                                                </strong>
                                            </p>
                                        </div>

                                        <div style=\"width: 60%\">
                                            <p class=\"colorTextContenus fontLink changeNom pln pPas\"  id=\"pLN pPas\">
                                                ";
                        // line 275
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 275), "html", null, true);
                        echo "
                                                <span class=\" hideG hideGD\">
                                                        Le ";
                        // line 277
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "dateUn", [], "any", false, false, false, 277), "d/m/Y"), "html", null, true);
                        echo "
                                                </span>
                                            </p>
                                        </div>
                                        <div style=\"width: 30%;  text-align: right;\">
                                            <a href=\"";
                        // line 282
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "link", [], "any", false, false, false, 282), "html", null, true);
                        echo "\" target=\"_blank\" class=\"tasklist-item\">
                                                <span class=\"hideG\"><i class=\"material-icons\" id=\"iconL\">forward</i></span>

                                                <button class=\"hideP fontLink btn_desc hB\" id=\"btnL\">
                                                    <div class=\"sF\">
                                                        Le ";
                        // line 287
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "dateUn", [], "any", false, false, false, 287), "d/m/Y"), "html", null, true);
                        echo "
                                                    </div>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                ";
                    }
                    // line 294
                    echo "                            </div>
                            <div class=\"decoration\"></div>
                        ";
                }
                // line 297
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 298
            echo "
                    ";
            // line 299
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 299, $this->source); })()), "links", [], "any", false, false, false, 299))) {
                // line 300
                echo "                        <div class=\"decoration\"></div>
                    ";
            }
            // line 302
            echo "                </div>

            ";
        }
        // line 305
        echo "
            ";
        // line 306
        if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 306, $this->source); })()), "status", [], "any", false, false, false, 306), 2)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 306, $this->source); })()), "type", [], "any", false, false, false, 306), 2)))) {
            // line 307
            echo "                ";
            echo twig_include($this->env, $context, "frontend/FocusGroup/_focus_block.html.twig");
            echo "
            ";
        }
        // line 309
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 313
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 314
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(document).ready(function() {
           \$('.tasklist-completed').click(function() {
               return confirm(";
        // line 319
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("confirmation", [], "survey"), "html", null, true);
        echo ");
           });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontend/Survey/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  550 => 319,  541 => 314,  531 => 313,  519 => 309,  513 => 307,  511 => 306,  508 => 305,  503 => 302,  499 => 300,  497 => 299,  494 => 298,  488 => 297,  483 => 294,  473 => 287,  465 => 282,  457 => 277,  452 => 275,  442 => 268,  436 => 264,  420 => 251,  412 => 246,  407 => 244,  398 => 238,  392 => 234,  390 => 233,  387 => 232,  384 => 231,  380 => 230,  377 => 229,  371 => 228,  366 => 225,  362 => 182,  357 => 171,  346 => 163,  338 => 158,  330 => 153,  325 => 151,  315 => 144,  308 => 139,  293 => 127,  285 => 122,  280 => 120,  271 => 114,  265 => 110,  263 => 109,  259 => 107,  256 => 106,  252 => 105,  244 => 100,  241 => 99,  239 => 98,  236 => 97,  230 => 95,  228 => 94,  221 => 89,  213 => 85,  211 => 84,  206 => 82,  194 => 75,  190 => 74,  183 => 69,  178 => 66,  176 => 65,  172 => 64,  169 => 63,  164 => 60,  162 => 59,  158 => 58,  154 => 56,  152 => 55,  148 => 53,  146 => 52,  142 => 51,  139 => 50,  137 => 49,  126 => 42,  116 => 41,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"frontend/_layout_details.html.twig\" %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .survey {
            display: flex;
            margin: 20px 0;
            height: 100px;
            box-shadow:0 2px 36px rgba(0,0,100,.15), 0 0 1px rgba(0,0,100,.15);
            transition:.3s;
            border-radius: 10px;
            text-align: center;
        }

        .pasOuvert{
            box-shadow: 0 1px 1px rgba(0,0,100,.25), 0 0 rgba(0,0,100,.25);
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .pPas{
            font-size: 18px !important;
            margin-top: 13px !important;
            text-align: center;
            color: #03363D;
            letter-spacing: 2px;
            text-transform: uppercase;
        }
        .numberL{
            text-shadow: 1px 0px 0.5px rgba(0,0,100,.15);
            color: #03363D !important;
            font-size: 3em !important;
            /* font-weight: 800 !important; */
            line-height: 64px;
        }
    </style>
{% endblock %}

{# CONTENT #}
{% block content %}
    {{ parent() }}

    <div class=\"container\">
        <div class=\"header-clear-large\"></div>

        <div class=\"content\">
            <div class=\"container heading-style-5\">
                {% if survey.type == 1 %}
                    <div class=\"container heading-style-5\">
                            <h4 class=\"heading-title\">{{ 'preselections' |trans({}, 'survey') }}
                            {% include 'frontend/header-title.html.twig' %}
                        </h4>
                    </div>
                {% elseif survey.type == 2 %}
                    <div class=\"container heading-style-5\">
                        <h4 class=\"heading-title\">
                            {{ 'test' |trans({}, 'survey') }}
                            {% include 'frontend/header-title.html.twig' %}
                        </h4>
                    </div>
                {% else %}
                    <div class=\"container heading-style-5\">
                        <h4 class=\"heading-title\">{{ 'survey' |trans({}, 'survey') }}
                            {% include 'frontend/header-title.html.twig' %}
                        </h4>
                    </div>
                {% endif %}
                <i class=\"fa fa-align-left heading-icon\"></i>
                <div class=\"line bg-gray-dark\"></div>
            </div>

            <div class=\"container-fullscreen heading-style-3\">
                <h3 class=\"heading-title\">{{ survey.name }}</h3>
                <em class=\"heading-subtitle\">{{ survey.statusFormatted |trans({}, 'survey') }} - #{{ survey.idSurvey }}</em>
                <div class=\"overlay bg-gray-dark\"></div>
            </div>

            <div class=\"decoration\"></div>

            <div class=\"container\">
                <p style=\"text-align: center\">{{ survey.description | raw }}</p>
                <p style=\"text-align: center\">
                    {% if survey.imageName %}
                        <a style=\"margin-top: 20px;\" href=\"{{ asset('home_page/' ~ survey.imageName) }}\" download onclick=\"window.open(this.href); return false;\">
                            <button class=\"button\" id=\"btnInstruction\">Pdf à telecharger</button>
                        </a>
                    {% endif %}
                </p>
            </div>

            <div class=\"decoration\"></div>

            {% if survey.status == 2 and survey.type == 2 %}
                {{ include('Frontend/FocusGroup/_focus_block.html.twig') }}
            {% endif %}

            {% if survey.links | length > 0 %}
                <div class=\"container-fullscreen heading-style-3\">
                    <h3 class=\"heading-title\">{{ 'survey' |trans({}, 'survey') }}s</h3>
                    <div class=\"overlay bg-gray-dark\"></div>
                </div>

                <div class=\"\">
                    {% for link in survey.links %}
                        {% if history[link.id] is not defined %}

                            <div>
                                {% if date(link.dateUn) <= date() %}
                                    <div  style=\"display: flex; height: 63px\" class=\"survey\" id=\"divL idOpacite\">
                                        <div style=\"width: 10%\">
                                            <p class=\"numero-questionnaire\" style=\"margin: 0px\">
                                                <strong class=\"fontLink numberL\">
                                                    {{ link.numeroLien }}
                                                </strong>
                                            </p>
                                        </div>
                                        <div style=\"width: 60%\">
                                            <p class=\"colorTextContenus fontLink changeNom pln pPas\"  id=\"pLN\">
                                                {{ link.name }}
                                                <span class=\" hideG hideGD\">
                                                        Le {{ link.dateUn | date(\"d/m/Y\")}}
                                                </span>
                                            </p>
                                        </div>
                                        <div style=\"width: 30%;  text-align: right;\">
                                            <a href=\"{{link.link}}{#{ userP }#}\" target=\"_blank\" class=\"tasklist-item\">
                                                <span class=\"hideG\"><i class=\"material-icons\" id=\"iconL\">forward</i></span>
                                                <button class=\"hideP fontLink btn_desc hB\" id=\"btnL\">
                                                    <div class=\"sF\">
                                                        Ouvert
                                                    </div>
                                                </button>

                                            </a>
                                        </div>
                                    </div>
                                {% else %}

                                    <div class=\"pasOuvert\" style=\"display: flex; text-align: center; height: 63px\">
                                        <div style=\"width: 10%\">
                                            <p class=\"numero-questionnaire\" style=\"margin: 0px;\">
                                                <strong class=\"fontLink numberL\">
                                                    {{ link.numeroLien }}
                                                </strong>
                                            </p>
                                        </div>

                                        <div style=\"width: 60%\">
                                            <p class=\"colorTextContenus fontLink changeNom pln pPas\"  id=\"pLN\">
                                                {{ link.name }}
                                                <span class=\" hideG hideGD\">
                                                        Le {{ link.dateUn | date(\"d/m/Y\")}}
                                                </span>
                                            </p>
                                        </div>
                                        <div style=\"width: 30%;  text-align: right;\">
                                            <a href=\"{{link.link}}{#{ userP }#}\" target=\"_blank\" class=\"tasklist-item\">
                                                <span class=\"hideG\"><i class=\"material-icons\" id=\"iconL\">forward</i></span>

                                                <button class=\"hideP fontLink btn_desc hB\" id=\"btnL\">
                                                    <div class=\"sF\">
                                                        Le {{ link.dateUn | date(\"d/m/Y\")}}
                                                    </div>
                                                </button>
                                            </a>
                                        </div>
                                    </div>

                                {% endif %}
                           </div>


                            {#
                             <a href=\"{{ path('user_link_redirect', {'token' : link.token}) }}\" target=\"_blank\" class=\"tasklist-item\">
                                <h5>{{ link.name }}</h5>
                            </a>
                              <a href=\"{{ link.link}}\" target=\"_blank\" class=\"tasklist-item\">
                                <h5>{{ link.name }}</h5>
                            </a>
                            #}


                            {#
                            <div class=\"\">
                                <div class=\"\"  style=\"display: flex;  margin-bottom: 20px; margin: 20px 0;
    height: 63px;
    box-shadow: 0 2px 36px rgba(0,0,100,.15), 0 0 1px rgba(0,0,100,.15);
    transition: .3s;
    border-radius: 10px;
    text-align: center;\">
                                    <div style=\"width: 10%;\">
                                        <p class=\"fontLink sF\" style=\"font-size: 28px; margin-top: 10px\">{{ link.numeroLien }}</p>
                                    </div>
                                    <div style=\"width: 59%;\">
                                        <p class=\"colorTextContenus sF fontLink\" style=\"font-size: 18px; margin-top: 13px; text-align: center\">{{ link.name }}</p>
                                    </div>
                                    <div style=\"width: 31%; height: 20px\">
                                        <a href=\"{{ link.link }}\" target=\"_blank\" class=\"tasklist-item\" style=\"height: 20px\">
                                            {% if date(link.dateUn) < date() %}
                                                <button class=\"hideP fontLink btn_desc hB\" id=\"\" style=\"width: 100%;
    border-radius: 10px;
    height: 50px;
    background-color: white\">
                                                    <span style=\"color: black\">
                                                          Ouvert
                                                    </span>
                                                </button>
                                            {% else %}
                                                <button class=\"hideP fontLink btn_desc hB\" id=\"\" style=\"width: 100%;
    border-radius: 10px;
    height: 50px; background-color: white\">
                                                    <span style=\"color: black\">
                                                        Le {{ link.dateUn.format('D d M')|capitalize}}
                                                    </span>
                                                </button>
                                            {% endif %}
                                        </a>
                                    </div>
                                </div>
                            </div>


                            #}
                            <div class=\"decoration\"></div>

                        {% endif %}
                    {% endfor %}

                    {% for link in survey.links %}
                        {% if history[link.id] is defined %}
                            <div>
                                {% if date(link.dateUn) <= date() %}
                                    <div  style=\"display: flex; height: 63px\" class=\"survey\" id=\"divL idOpacite\">
                                        <div style=\"width: 10%\">
                                            <p class=\"numero-questionnaire\" style=\"margin: 0px\">
                                                <strong class=\"fontLink numberL\">
                                                    {{ link.numeroLien }}
                                                </strong>
                                            </p>
                                        </div>
                                        <div style=\"width: 60%\">
                                            <p class=\"colorTextContenus fontLink changeNom pln pPas\"  id=\"pLN\">
                                                {{ link.name }}
                                                <span class=\" hideG hideGD\">
                                                        Le {{ link.dateUn | date(\"d/m/Y\")}}
                                                </span>
                                            </p>
                                        </div>
                                        <div style=\"width: 30%;  text-align: right;\">
                                            <a href=\"{{link.link}}{#{ userP }#}\" target=\"_blank\" class=\"tasklist-item\">
                                                <span class=\"hideG\"><i class=\"material-icons\" id=\"iconL\">forward</i></span>

                                                <button class=\"hideP fontLink btn_desc hB\" id=\"btnL\">
                                                    <div class=\"sF\">
                                                        Ouvert
                                                    </div>
                                                </button>

                                            </a>
                                        </div>
                                    </div>
                                {% else %}
                                    <div class=\"pasOuvert\" style=\"display: flex; text-align: center; height: 63px\">
                                        <div style=\"width: 10%\">
                                            <p class=\"numero-questionnaire\" style=\"margin: 0px\">
                                                <strong class=\"fontLink numberL\">
                                                    {{ link.numeroLien }}
                                                </strong>
                                            </p>
                                        </div>

                                        <div style=\"width: 60%\">
                                            <p class=\"colorTextContenus fontLink changeNom pln pPas\"  id=\"pLN pPas\">
                                                {{ link.name }}
                                                <span class=\" hideG hideGD\">
                                                        Le {{ link.dateUn | date(\"d/m/Y\")}}
                                                </span>
                                            </p>
                                        </div>
                                        <div style=\"width: 30%;  text-align: right;\">
                                            <a href=\"{{link.link}}{#{ userP }#}\" target=\"_blank\" class=\"tasklist-item\">
                                                <span class=\"hideG\"><i class=\"material-icons\" id=\"iconL\">forward</i></span>

                                                <button class=\"hideP fontLink btn_desc hB\" id=\"btnL\">
                                                    <div class=\"sF\">
                                                        Le {{ link.dateUn | date(\"d/m/Y\")}}
                                                    </div>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                {% endif %}
                            </div>
                            <div class=\"decoration\"></div>
                        {% endif %}
                    {% endfor %}

                    {% if survey.links is not empty %}
                        <div class=\"decoration\"></div>
                    {% endif %}
                </div>

            {% endif %}

            {% if survey.status != 2 and survey.type == 2 %}
                {{ include('frontend/FocusGroup/_focus_block.html.twig') }}
            {% endif %}
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(document).ready(function() {
           \$('.tasklist-completed').click(function() {
               return confirm({{ 'confirmation' |trans({}, 'survey') }});
           });
        });
    </script>
{% endblock %}", "frontend/Survey/details.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/Survey/details.html.twig");
    }
}
