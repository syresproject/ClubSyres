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
class __TwigTemplate_61b9b4a0927cbd407e3b629cc99c3e669159a56c6d42fcca7244721be8c6bb2d extends Template
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
        $this->parent = $this->loadTemplate("frontend/_layout_details.html.twig", "frontend/Survey/details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 41
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "type", [], "any", false, false, false, 49), 1))) {
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
($context["survey"] ?? null), "type", [], "any", false, false, false, 55), 2))) {
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "name", [], "any", false, false, false, 74), "html", null, true);
        echo "</h3>
                <em class=\"heading-subtitle\">";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "statusFormatted", [], "any", false, false, false, 75), [], "survey"), "html", null, true);
        echo " - #";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "idSurvey", [], "any", false, false, false, 75), "html", null, true);
        echo "</em>
                <div class=\"overlay bg-gray-dark\"></div>
            </div>

            <div class=\"decoration\"></div>

            <div class=\"container\">
                <p style=\"text-align: center\">";
        // line 82
        echo twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "description", [], "any", false, false, false, 82);
        echo "</p>
                <p style=\"text-align: center\">
                    ";
        // line 84
        if (twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "imageName", [], "any", false, false, false, 84)) {
            // line 85
            echo "                        <a style=\"margin-top: 20px;\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("home_page/" . twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "imageName", [], "any", false, false, false, 85))), "html", null, true);
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
        if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "status", [], "any", false, false, false, 94), 2)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "type", [], "any", false, false, false, 94), 2)))) {
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
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "links", [], "any", false, false, false, 98)), 0))) {
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
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "links", [], "any", false, false, false, 105));
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
                        echo twig_escape_filter($this->env, ($context["userP"] ?? null), "html", null, true);
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
                        echo twig_escape_filter($this->env, ($context["userP"] ?? null), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "links", [], "any", false, false, false, 230));
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
\t\t\t\t\t                            <a href=\"";
                        // line 251
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "link", [], "any", false, false, false, 251), "html", null, true);
                        echo twig_escape_filter($this->env, ($context["userP"] ?? null), "html", null, true);
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
                        echo twig_escape_filter($this->env, ($context["userP"] ?? null), "html", null, true);
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
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "links", [], "any", false, false, false, 299))) {
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
        if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "status", [], "any", false, false, false, 306), 2)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["survey"] ?? null), "type", [], "any", false, false, false, 306), 2)))) {
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
    }

    // line 313
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  512 => 319,  503 => 314,  499 => 313,  493 => 309,  487 => 307,  485 => 306,  482 => 305,  477 => 302,  473 => 300,  471 => 299,  468 => 298,  462 => 297,  457 => 294,  447 => 287,  438 => 282,  430 => 277,  425 => 275,  415 => 268,  409 => 264,  392 => 251,  384 => 246,  379 => 244,  370 => 238,  364 => 234,  362 => 233,  359 => 232,  356 => 231,  352 => 230,  349 => 229,  343 => 228,  338 => 225,  334 => 182,  329 => 171,  318 => 163,  309 => 158,  301 => 153,  296 => 151,  286 => 144,  279 => 139,  263 => 127,  255 => 122,  250 => 120,  241 => 114,  235 => 110,  233 => 109,  229 => 107,  226 => 106,  222 => 105,  214 => 100,  211 => 99,  209 => 98,  206 => 97,  200 => 95,  198 => 94,  191 => 89,  183 => 85,  181 => 84,  176 => 82,  164 => 75,  160 => 74,  153 => 69,  148 => 66,  146 => 65,  142 => 64,  139 => 63,  134 => 60,  132 => 59,  128 => 58,  124 => 56,  122 => 55,  118 => 53,  116 => 52,  112 => 51,  109 => 50,  107 => 49,  96 => 42,  92 => 41,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/Survey/details.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/Survey/details.html.twig");
    }
}
