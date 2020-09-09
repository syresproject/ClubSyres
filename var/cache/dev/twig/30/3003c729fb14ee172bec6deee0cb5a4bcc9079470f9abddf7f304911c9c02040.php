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

/* frontend/home/Original/show.html.twig */
class __TwigTemplate_41f7d642fe7d905d6dfa6faf87cef44f8fa3e1fc9a8a6d808d19d1f64f65c635 extends Template
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
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/home/Original/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/home/Original/show.html.twig"));

        $this->parent = $this->loadTemplate("frontend/_layout.html.twig", "frontend/home/Original/show.html.twig", 1);
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
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;1,900&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;1,600;1,900&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;1,600;1,900&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,700;1,600;1,900&display=swap\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    ";
        // line 18
        $this->loadTemplate("frontend/home/styles.home.html.twig", "frontend/home/Original/show.html.twig", 18)->display($context);
        // line 19
        echo "
    <style>
        @media (min-width: 1200px){
            .container, .container-lg, .container-md, .container-sm, .container-xl {
                max-width: 1253px;
            }
        }
    </style>
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["home_pages"]) || array_key_exists("home_pages", $context) ? $context["home_pages"] : (function () { throw new RuntimeError('Variable "home_pages" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["home_page"]) {
            // line 28
            echo "        <div class=\"\" style=\"display: flex; background-color: #ffffff !important\">
            <div id=\"divEntete\" style=\"background-color: #ffffff !important; height: auto !important;\">
                <div class=\"containerBody\" id=\"tWelcom\">

                    ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["surveysListByCategory"]) || array_key_exists("surveysListByCategory", $context) ? $context["surveysListByCategory"] : (function () { throw new RuntimeError('Variable "surveysListByCategory" does not exist.', 32, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 33
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "surveys", [], "any", false, false, false, 33));
                foreach ($context['_seq'] as $context["_key"] => $context["surveys"]) {
                    // line 34
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["surveys"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["survey"]) {
                        // line 35
                        echo "                                <h1 style=\"font-size: 4em; font-weight: 700; color: #03363d\">Hi ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "title", [], "any", false, false, false, 35), "html", null, true);
                        echo ",</h1>
                                <p style=\"\" id=\"pWelcom\">
                                    Welcome to your test dashboard. Use the surveys below to give us your honest feedback on your
                                    <strong style=\"font-weight: bold\">";
                        // line 38
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "name", [], "any", false, false, false, 38), "html", null, true);
                        echo "</strong>
                                    test.
                                </p>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['survey'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 42
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['surveys'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "
                    ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["surveysListByCategoryTest"]) || array_key_exists("surveysListByCategoryTest", $context) ? $context["surveysListByCategoryTest"] : (function () { throw new RuntimeError('Variable "surveysListByCategoryTest" does not exist.', 45, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 46
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "surveys", [], "any", false, false, false, 46));
                foreach ($context['_seq'] as $context["_key"] => $context["surveys"]) {
                    // line 47
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["surveys"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["survey"]) {
                        // line 48
                        echo "                                <h1 style=\"font-size: 50px; font-weight: 700; color: #03363d\">Hi ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48), "title", [], "any", false, false, false, 48), "html", null, true);
                        echo ",</h1>
                                <p id=\"pWelcom\">
                                    Welcome to your test dashboard. Use the surveys below to give us your honest feedback on your
                                    <strong style=\"font-weight: 900; color: #03363d\">";
                        // line 51
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "name", [], "any", false, false, false, 51), "html", null, true);
                        echo "</strong>
                                    test.
                                </p>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['survey'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 55
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['surveys'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                </div>
            </div>
            <div id=\"imgEntete\" style=\"width: 50%\">
                <img  style=\"height: auto; width: 100%\" src=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/home_page/" . twig_get_attribute($this->env, $this->source, $context["home_page"], "imageName", [], "any", false, false, false, 60))), "html", null, true);
            echo "\" alt=\"img-syres\">
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['home_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "

    ";
        // line 76
        echo "

    <div class=\"container-fluid padding_50\" id=\"surveyList\" style=\"box-shadow: 0 2px 120px 30px rgba(0,0,0,.05);
    border: 1px solid #eeeeee;\">
        <div class=\"space-top\"></div>
        <div>
            <div class=\"containerBody textAlignEnqueteAndTest\" id=\"divSurveyName\">
                <div class=\"line bg-black heightEmpty\"></div>
                <div class=\" heading-style-5\" style=\"\">
                    ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["surveysListByCategory"]) || array_key_exists("surveysListByCategory", $context) ? $context["surveysListByCategory"] : (function () { throw new RuntimeError('Variable "surveysListByCategory" does not exist.', 85, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 86
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "surveys", [], "any", false, false, false, 86));
            foreach ($context['_seq'] as $context["_key"] => $context["surveys"]) {
                // line 87
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["surveys"]);
                foreach ($context['_seq'] as $context["_key"] => $context["survey"]) {
                    // line 88
                    echo "                                <h4 class=\"heading-title colorTextBody colorTextH\" id=\"h4SurveyName\">
                                    ";
                    // line 89
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "name", [], "any", false, false, false, 89), "html", null, true);
                    echo "
                                </h4>

                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['survey'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['surveys'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["surveysListByCategoryTest"]) || array_key_exists("surveysListByCategoryTest", $context) ? $context["surveysListByCategoryTest"] : (function () { throw new RuntimeError('Variable "surveysListByCategoryTest" does not exist.', 95, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 96
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "surveys", [], "any", false, false, false, 96));
            foreach ($context['_seq'] as $context["_key"] => $context["surveys"]) {
                // line 97
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["surveys"]);
                foreach ($context['_seq'] as $context["_key"] => $context["survey"]) {
                    // line 98
                    echo "                                <h4 class=\"heading-title colorTextBody colorTextH \" id=\"h4SurveyName\">
                                    ";
                    // line 99
                    echo "SURVEY LIST
                                </h4>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['survey'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 102
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['surveys'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                    <h4 class=\"heading-title inline-header h_flex colorTextH\" style=\"display: none\">
                        <hr class=\"hr\">";
        // line 105
        echo "ENGUÊTE EN COURS";
        echo "<hr class=\"hr\">
                    </h4>
                </div>
                <div style=\"display: none\">
                    ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["surveysListByCategory"]) || array_key_exists("surveysListByCategory", $context) ? $context["surveysListByCategory"] : (function () { throw new RuntimeError('Variable "surveysListByCategory" does not exist.', 109, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 110
            echo "                        <div>
                            <h5 class=\"colorTextH\">";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "details", [], "any", false, false, false, 111), "name", [], "any", false, false, false, 111), "html", null, true);
            echo "</h5>
                            <div class=\"decoration\"></div>
                            ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "surveys", [], "any", false, false, false, 113));
            foreach ($context['_seq'] as $context["_key"] => $context["surveys"]) {
                // line 114
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["surveys"]);
                foreach ($context['_seq'] as $context["_key"] => $context["survey"]) {
                    // line 115
                    echo "
                                    <a href=\"";
                    // line 116
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_paneliste_details", ["id" => twig_get_attribute($this->env, $this->source, $context["survey"], "id", [], "any", false, false, false, 116)]), "html", null, true);
                    echo "\" class=\"user-list-item\">
                                        <img src=\"";
                    // line 117
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/images/tree.svg"), "html", null, true);
                    echo "\" alt=\"img\">
                                        <strong class=\"colorTextH\">";
                    // line 118
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "name", [], "any", false, false, false, 118), "html", null, true);
                    echo "</strong>
                                        <em>
                                            ";
                    // line 120
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["survey"], "status", [], "any", false, false, false, 120), 0))) {
                        // line 121
                        echo "                                                ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("coming", [], "survey"), "html", null, true);
                        echo "
                                            ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 122
$context["survey"], "status", [], "any", false, false, false, 122), 1))) {
                        // line 123
                        echo "                                                ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inprogress", [], "survey"), "html", null, true);
                        echo "
                                            ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 124
$context["survey"], "status", [], "any", false, false, false, 124), 2))) {
                        // line 125
                        echo "                                                ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("focus", [], "survey"), "html", null, true);
                        echo "
                                            ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 126
$context["survey"], "status", [], "any", false, false, false, 126), 3))) {
                        // line 127
                        echo "                                                ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("closed", [], "survey"), "html", null, true);
                        echo "
                                            ";
                    } else {
                        // line 129
                        echo "                                                ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "name", [], "any", false, false, false, 129), "html", null, true);
                        echo "
                                            ";
                    }
                    // line 131
                    echo "                                            - #";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "idSurvey", [], "any", false, false, false, 131), "html", null, true);
                    echo "
                                        </em>
                                        <i class=\"fa fa-chevron-right\"></i>
                                    </a>
                                    <div class=\"decoration\"></div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['survey'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 137
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['surveys'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "                        </div>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 140
            echo "                        <p class=\"center-text colorTextBody colorTextH\">
                            ";
            // line 141
            echo "Aucune enquête en cours";
            echo "
                        </p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "                </div>
            </div>

            <div class=\"containerBody\" style=\"width: 94%\">
                ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["surveysListByCategoryTest"]) || array_key_exists("surveysListByCategoryTest", $context) ? $context["surveysListByCategoryTest"] : (function () { throw new RuntimeError('Variable "surveysListByCategoryTest" does not exist.', 148, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 149
            echo "                    <div class=\"textAlignEnqueteAndTest\">
                        <div class=\"decoration\"></div>
                        ";
            // line 151
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "surveys", [], "any", false, false, false, 151));
            foreach ($context['_seq'] as $context["_key"] => $context["surveys"]) {
                // line 152
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["surveys"]);
                foreach ($context['_seq'] as $context["_key"] => $context["survey"]) {
                    // line 153
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_paneliste_details", ["id" => twig_get_attribute($this->env, $this->source, $context["survey"], "id", [], "any", false, false, false, 153)]), "html", null, true);
                    echo "\" class=\"user-list-item\" style=\"display: none\">
                                    <strong class=\"colorTextH\">";
                    // line 154
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "name", [], "any", false, false, false, 154), "html", null, true);
                    echo "</strong>
                                    <em class=\"colorTextH\">
                                        ";
                    // line 156
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["survey"], "status", [], "any", false, false, false, 156), 0))) {
                        // line 157
                        echo "                                            ";
                        echo "coming";
                        echo "
                                        ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 158
$context["survey"], "status", [], "any", false, false, false, 158), 1))) {
                        // line 159
                        echo "                                            ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inprogress", [], "survey"), "html", null, true);
                        echo "
                                        ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 160
$context["survey"], "status", [], "any", false, false, false, 160), 2))) {
                        // line 161
                        echo "                                            ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("focus", [], "survey"), "html", null, true);
                        echo "
                                        ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 162
$context["survey"], "status", [], "any", false, false, false, 162), 3))) {
                        // line 163
                        echo "                                            ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("closed", [], "survey"), "html", null, true);
                        echo "
                                        ";
                    } else {
                        // line 165
                        echo "                                            ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "name", [], "any", false, false, false, 165), "html", null, true);
                        echo "
                                        ";
                    }
                    // line 167
                    echo "                                        - #";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "idSurvey", [], "any", false, false, false, 167), "html", null, true);
                    echo "
                                    </em>
                                    <i class=\"fa fa-chevron-right\"></i>
                                </a>
                                <div class=\"decoration\"></div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['survey'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 173
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['surveys'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "                    </div>

                    <div class=\"content\">
                        <div class=\"container-fullscreen heading-style-3\" style=\"display: none\">
                            <h3 class=\"heading-title\">";
            // line 178
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 178, $this->source); })()), "name", [], "any", false, false, false, 178), "html", null, true);
            echo "</h3>
                            <em class=\"heading-subtitle\">";
            // line 179
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 179, $this->source); })()), "statusFormatted", [], "any", false, false, false, 179), [], "survey"), "html", null, true);
            echo " - #";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 179, $this->source); })()), "idSurvey", [], "any", false, false, false, 179), "html", null, true);
            echo "</em>
                            <div class=\"overlay bg-gray-dark\"></div>
                        </div>
                        <div class=\"decoration\"></div>
                        <div class=\"\" style=\"display: none\">
                            ";
            // line 184
            echo twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 184, $this->source); })()), "description", [], "any", false, false, false, 184);
            echo "
                        </div>
                        <div class=\"decoration\"></div>
                        ";
            // line 187
            if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 187, $this->source); })()), "status", [], "any", false, false, false, 187), 2)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 187, $this->source); })()), "type", [], "any", false, false, false, 187), 2)))) {
                // line 188
                echo "                            ";
                echo twig_include($this->env, $context, "frontend/FocusGroup/_focus_block.html.twig");
                echo "
                        ";
            }
            // line 190
            echo "
                        ";
            // line 191
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 191, $this->source); })()), "links", [], "any", false, false, false, 191)), 0))) {
                // line 192
                echo "
                            <div class=\"decoration\"></div>
                            <div class=\"\" style=\"\">
                                ";
                // line 195
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 195, $this->source); })()), "links", [], "any", false, false, false, 195));
                foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                    // line 196
                    echo "
                                    ";
                    // line 197
                    if ( !twig_get_attribute($this->env, $this->source, ($context["history"] ?? null), twig_get_attribute($this->env, $this->source, $context["link"], "id", [], "any", false, false, false, 197), [], "array", true, true, false, 197)) {
                        // line 198
                        echo "                                        <div class=\"\">
                                            <div  style=\"\" id=\"divL\">
                                                <div style=\"width: 10%\">
                                                    <p class=\"\" style=\"margin: 0px\">
                                                        <strong class=\"fontLink\" id=\"stLN\">
                                                            0";
                        // line 203
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "numeroLien", [], "any", false, false, false, 203), "html", null, true);
                        echo "
                                                        </strong>
                                                    </p>
                                                </div>
                                                <div style=\"width: 61%\">
                                                    <p class=\"colorTextContenus fontLink changeNom pln\"  id=\"pLN\">
                                                        ";
                        // line 209
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 209), "html", null, true);
                        echo "
                                                        <span class=\" hideG hideGD\">
                                                                        DUE ";
                        // line 211
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "dateUn", [], "any", false, false, false, 211), "m d"), "html", null, true);
                        echo "
                                                                </span>
                                                    </p>
                                                </div>
                                                <div style=\"width: 28%;  text-align: right; \">
                                                    <a href=\"";
                        // line 216
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_link_redirect", ["token" => twig_get_attribute($this->env, $this->source, $context["link"], "token", [], "any", false, false, false, 216)]), "html", null, true);
                        echo "\" target=\"_blank\" class=\"tasklist-item\">
                                                        <span class=\"hideG\"><i class=\"material-icons\" id=\"iconL\">forward</i></span>

                                                        <button class=\"hideP fontLink btn_desc hB\" id=\"btnL\" style=\"font-family: Montserrat;
                                                        font-size: 14px;
                                                        letter-spacing: 1px;
                                                        color:#03363d\">

                                                            <strong  class=\"sF\" style=\"color: black\">
                                                                DUE ";
                        // line 225
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "dateUn", [], "any", false, false, false, 225), "m d"), "html", null, true);
                        echo "


                                                                ";
                        // line 236
                        echo "                                                            </strong>
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                            <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\"></script>
                                        </div>


                                    ";
                        // line 245
                        if (twig_get_attribute($this->env, $this->source, $context["link"], "dateUn", [], "any", true, true, false, 245)) {
                            // line 246
                            echo "                                        <script>
                                            let date = '";
                            // line 247
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["link"], "dateUn", [], "any", false, false, false, 247), "timestamp", [], "any", false, false, false, 247), "html", null, true);
                            echo "';
                                            console.log(date);
                                            jQuery(function(\$){
                                                const launch = new Date(date * 1000);
                                                const days = \$('.days');

                                                var hours = \$('.hours');
                                                var minutes = \$('.minutes');
                                                var seconds = \$('.seconds');

                                                //var show_message = false;
                                                setDate();
                                                function setDate(){
                                                    var now = new Date();
                                                    var s = ((launch.getTime() - now.getTime())/1000);


                                                    var diff = s;
                                                    if(s < 0 ) {
                                                        s = 0;
                                                        if(diff > -10)
                                                        {
                                                            \$(\".hB\").css( \"background-color\", \"#03363d\");
                                                            \$(\".sf\").css(\"color\", \"white\");
                                                            \$(\".icof\").text(\"display\", \"block\");
                                                        }
                                                        /*
                                                    else
                                                        \$(\"#compteurfinis\").hide();
                                                         */
                                                    }
                                                    var d = Math.floor(s/86400);
                                                    days.html('<strong>'+d+'</strong>'+(d>1?'s':''));
                                                    s -= d*86400;
                                                    var h = Math.floor(s/3600);
                                                    hours.html('<strong> '+h+'</strong>'+(h>1?'s':''));
                                                    s -= h*3600;
                                                    var m = Math.floor(s/60);
                                                    minutes.html('<strong> :'+m+'</strong>'+(m>1?'s':''));
                                                    s -= m*60;
                                                    s = Math.floor(s);
                                                    seconds.html('<strong> :'+s+'</strong>'+(s>1?'s':''));
                                                    var compteur = setTimeout(setDate,1000);
                                                }
                                            });
                                        </script>

                                    ";
                        }
                        // line 295
                        echo "                                    ";
                    }
                    // line 296
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 297
                echo "
                                ";
                // line 298
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 298, $this->source); })()), "links", [], "any", false, false, false, 298));
                foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                    // line 299
                    echo "                                    ";
                    if (twig_get_attribute($this->env, $this->source, ($context["history"] ?? null), twig_get_attribute($this->env, $this->source, $context["link"], "id", [], "any", false, false, false, 299), [], "array", true, true, false, 299)) {
                        // line 300
                        echo "
                                        <div class=\"\">
                                            <div style=\"\" id=\"divL\">
                                                <div style=\"width: 10%\">
                                                    <p class=\"\" style=\"margin: 0px\">
                                                        <strong class=\"fontLink\" id=\"stLN\">
                                                            0";
                        // line 306
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "numeroLien", [], "any", false, false, false, 306), "html", null, true);
                        echo "

                                                        </strong>
                                                    </p>
                                                </div>

                                                <div style=\"width: 61%\">
                                                    <p class=\"colorTextContenus fontLink changeNom\" id=\"pLN\">
                                                        ";
                        // line 314
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 314), "html", null, true);
                        echo "
                                                        <span class=\" hideG hideGD\">
                                                            DUE ";
                        // line 316
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["link"], "dateUn", [], "any", false, false, false, 316), "format", [0 => "D d M"], "method", false, false, false, 316)), "html", null, true);
                        echo "
                                                        </span>
                                                    </p>
                                                </div>
                                                <div style=\"width: 28%;  text-align: right; \">
                                                    <a href=\"";
                        // line 321
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_link_redirect", ["token" => twig_get_attribute($this->env, $this->source, $context["link"], "token", [], "any", false, false, false, 321)]), "html", null, true);
                        echo "\"
                                                       target=\"_blank\" class=\"tasklist-item\">
                                                        <span class=\"hideG\"><i class=\"material-icons\" id=\"iconL\">forward</i></span>
                                                        <button class=\"hideP fontLink btn_desc hB\" id=\"btnL\" style=\"font-family: Montserrat;
                                                        font-size: 14px;
                                                        letter-spacing: 1px;
                                                        color:#03363d\">
                                                            <strong class=\"sF\" style=\"color: black\">
                                                                DUE ";
                        // line 329
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["link"], "dateUn", [], "any", false, false, false, 329), "format", [0 => "D d M"], "method", false, false, false, 329)), "html", null, true);
                        echo "

                                                                ";
                        // line 339
                        echo "                                                            </strong>
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                            <script type=\"text/javascript\"
                                                    src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\"></script>
                                        </div>
                                    ";
                    }
                    // line 348
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 349
                echo "
                                ";
                // line 350
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 350, $this->source); })()), "links", [], "any", false, false, false, 350))) {
                    // line 351
                    echo "                                    <div class=\"decoration\"></div>
                                ";
                }
                // line 353
                echo "                            </div>

                            <div class=\"decoration\"></div>
                        ";
            }
            // line 357
            echo "
                        ";
            // line 363
            echo "                    </div>

                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 366
            echo "                    <p class=\"center-text textAlignEnqueteAndTest colorTextH mP\">
                        ";
            // line 367
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Aucun test en cours ", []), "html", null, true);
            echo "
                    </p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 370
        echo "
                <div class=\" textAlignEnqueteAndTest heading-style-5\">
                    <div class=\"inline-button alignLeft\">
                        ";
        // line 377
        echo "
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div id=\"inst\" class=\"container-fluid\" style=\"background-color: white !important; padding-bottom: 100px; \">
        <div  class=\"containerBody colorTextH\">
            <div>
                <div style=\"padding: 100px; padding-bottom: 20px\">
                    ";
        // line 389
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["surveysListByCategoryTest"]) || array_key_exists("surveysListByCategoryTest", $context) ? $context["surveysListByCategoryTest"] : (function () { throw new RuntimeError('Variable "surveysListByCategoryTest" does not exist.', 389, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 390
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "surveys", [], "any", false, false, false, 390));
            foreach ($context['_seq'] as $context["_key"] => $context["surveys"]) {
                // line 391
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["surveys"]);
                foreach ($context['_seq'] as $context["_key"] => $context["survey"]) {
                    // line 392
                    echo "                                <h1 class=\"colorTextH \" id=\"colorTextHInstruct\" style=\" color: #03363d; font-size: 2.1em; margin-bottom: 10px\">
                                    Test instructions
                                </h1>
                                <p>
                                    ";
                    // line 396
                    echo twig_get_attribute($this->env, $this->source, $context["survey"], "description", [], "any", false, false, false, 396);
                    echo "
                                </p>
                                <p style=\"\">

                                    <a href=\"";
                    // line 400
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/home_page/" . twig_get_attribute($this->env, $this->source, $context["survey"], "imageName", [], "any", false, false, false, 400))), "html", null, true);
                    echo "\" download onclick=\"window.open(this.href); return false;\">
                                        <button class=\"btn_desc\" id=\"btnInstruction\" style=\"text-transform: uppercase;
                                            text-transform: uppercase;
                                            font-weight: 600;
                                            font-size: 0.75em;
                                            letter-spacing: 2px;
                                            padding: 10px 40px;
                                            background-color: #1CD9FF;
                                            box-shadow: 0 2px 13px -1px rgba(0,0,0,.1);
                                        }
                                    \"
                                        >Download as pdf</button>
                                    </a>
                                    ";
                    // line 418
                    echo "
                                </p>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['survey'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 421
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['surveys'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 422
            echo "                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 423
            echo "                        ";
            if ((-1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["survey"]) || array_key_exists("survey", $context) ? $context["survey"] : (function () { throw new RuntimeError('Variable "survey" does not exist.', 423, $this->source); })()), "links", [], "any", false, false, false, 423)), 1))) {
                // line 424
                echo "                            <p class=\"center-text textAlignEnqueteAndTest colorTextH mP\"> </p>
                        ";
            }
            // line 426
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 427
        echo "                </div>
            </div>
        </div>
    </div>


    ";
        // line 453
        echo "
    <div class=\"container-fluid\" id=\"contFInvit\" style=\"align-items: initial; background-color: #017991 !important; padding-right: 0px; padding-left: 0px\">
        <div class=\"\" id=\"imgInvit\">
            ";
        // line 456
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["home_pages"]) || array_key_exists("home_pages", $context) ? $context["home_pages"] : (function () { throw new RuntimeError('Variable "home_pages" does not exist.', 456, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["home_page"]) {
            // line 457
            echo "                <img  class=\"\" style=\"width: 100%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/home_page/" . twig_get_attribute($this->env, $this->source, $context["home_page"], "imageNameUn", [], "any", false, false, false, 457))), "html", null, true);
            echo "\" alt=\"img\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['home_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 459
        echo "        </div>

        <div class=\"\" id=\"divGInvit\" style=\"background-color: #017991 !important\">
            <div style=\"padding-left: 5%\">
                <h1 id=\"h1invit\"><strong style=\"color: white\">Invite your friends</strong> </h1>
                <p id=\"souTInvit\">Invite your friends to join the SYRES community and test exclusive cosmetics together. It’s free!</p>
                ";
        // line 465
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["invitationForm"]) || array_key_exists("invitationForm", $context) ? $context["invitationForm"] : (function () { throw new RuntimeError('Variable "invitationForm" does not exist.', 465, $this->source); })()), 'form_start');
        echo "
                <div class=\"my-custom-class-for-errors\">
                    ";
        // line 467
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["invitationForm"]) || array_key_exists("invitationForm", $context) ? $context["invitationForm"] : (function () { throw new RuntimeError('Variable "invitationForm" does not exist.', 467, $this->source); })()), 'errors');
        echo "
                </div>

                <style>
                    #invitation_mail{
                    background-color: #017991 !important;;
                    }
                </style>
                <div id=\"fInvit\">
                    <div class=\"row\">
                    </div>
                    <div>
                        <div class=\"row\" style=\"margin-bottom: 20px\">
                            ";
        // line 480
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["invitationForm"]) || array_key_exists("invitationForm", $context) ? $context["invitationForm"] : (function () { throw new RuntimeError('Variable "invitationForm" does not exist.', 480, $this->source); })()), "mail", [], "any", false, false, false, 480), 'widget', ["attr" => ["class" => "cMail", "placeholder" => "Your friend’s e-mail address"]]);
        echo "
                        </div>
                        <button type=\"submit\" class=\"label_maill butnInvite\" style=\"font-weight: 700; color: #212529\">
                            SEND THE INVITE
                        </button>
                    </div>
                </div>
                ";
        // line 487
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["invitationForm"]) || array_key_exists("invitationForm", $context) ? $context["invitationForm"] : (function () { throw new RuntimeError('Variable "invitationForm" does not exist.', 487, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>

    <div class=\"container tMargin\" style=\"background-color: white;\">
        <h1 id=\"h1C\" style=\"padding-top: 70px; font-weight: 700; font-size: 3.5em!important; color: #03363d !important;\">Contact us</h1>
        <div class=\"container d_flex\" id=\"foot\">
            <div class=\"containerBody contF MP\" id=\"divGC\">
                <div style=\"\" id=\"divLC\">
                    <p style=\"font-style: inherit;font-weight: inherit; margin: 0px\">WhatsApp & Mobile</p>
                    <h1 style=\"color: #03363d !important; font-weight: 700; margin: 0px; margin-top: 4px\"> 9677 6179</h1>
                </div>

                <div class=\"mB\" ></div>
                <div id=\"divRC\">
                    <p class=\"\" style=\"margin: 0px;\">
                        E-Mail
                    </p>
                    <h1 class=\" text_alignt\" id=\"h1mailC\" style=\"color: #03363d !important;\">team@syres.sg</h1>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 536
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 539
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 540
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 543
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 544
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script
            src=\"https://code.jquery.com/jquery-3.5.0.js\"
            integrity=\"sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=\"
            crossorigin=\"anonymous\"></script>
    <script>
        function classToggle() {
            const navs = document.querySelectorAll('.Navbar__Items')

            navs.forEach(nav => nav.classList.toggle('Navbar__ToggleShow'));

            \$(\"#containerBody\").css({\"margin-top\":\"-39px\"});
            \$(\".Navbar\").css({\"background-color\":\"#01c3e7\"});

        }
        document.querySelector('.Navbar__Link-toggle')
            .addEventListener('click', classToggle);
    </script>

    <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontend/home/Original/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1068 => 544,  1058 => 543,  1048 => 540,  1038 => 539,  1027 => 536,  999 => 487,  989 => 480,  973 => 467,  968 => 465,  960 => 459,  951 => 457,  947 => 456,  942 => 453,  934 => 427,  928 => 426,  924 => 424,  921 => 423,  916 => 422,  910 => 421,  902 => 418,  886 => 400,  879 => 396,  873 => 392,  868 => 391,  863 => 390,  858 => 389,  844 => 377,  839 => 370,  830 => 367,  827 => 366,  812 => 363,  809 => 357,  803 => 353,  799 => 351,  797 => 350,  794 => 349,  788 => 348,  777 => 339,  772 => 329,  761 => 321,  753 => 316,  748 => 314,  737 => 306,  729 => 300,  726 => 299,  722 => 298,  719 => 297,  713 => 296,  710 => 295,  659 => 247,  656 => 246,  654 => 245,  643 => 236,  637 => 225,  625 => 216,  617 => 211,  612 => 209,  603 => 203,  596 => 198,  594 => 197,  591 => 196,  587 => 195,  582 => 192,  580 => 191,  577 => 190,  571 => 188,  569 => 187,  563 => 184,  553 => 179,  549 => 178,  543 => 174,  537 => 173,  524 => 167,  518 => 165,  512 => 163,  510 => 162,  505 => 161,  503 => 160,  498 => 159,  496 => 158,  491 => 157,  489 => 156,  484 => 154,  479 => 153,  474 => 152,  470 => 151,  466 => 149,  448 => 148,  442 => 144,  433 => 141,  430 => 140,  424 => 138,  418 => 137,  405 => 131,  399 => 129,  393 => 127,  391 => 126,  386 => 125,  384 => 124,  379 => 123,  377 => 122,  372 => 121,  370 => 120,  365 => 118,  361 => 117,  357 => 116,  354 => 115,  349 => 114,  345 => 113,  340 => 111,  337 => 110,  332 => 109,  325 => 105,  322 => 104,  316 => 103,  310 => 102,  302 => 99,  299 => 98,  294 => 97,  289 => 96,  284 => 95,  278 => 94,  272 => 93,  262 => 89,  259 => 88,  254 => 87,  249 => 86,  245 => 85,  234 => 76,  230 => 64,  220 => 60,  215 => 57,  209 => 56,  203 => 55,  193 => 51,  186 => 48,  181 => 47,  176 => 46,  172 => 45,  169 => 44,  163 => 43,  157 => 42,  147 => 38,  140 => 35,  135 => 34,  130 => 33,  126 => 32,  120 => 28,  116 => 27,  106 => 19,  104 => 18,  99 => 17,  89 => 16,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"frontend/_layout.html.twig\" %}
{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;1,900&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;1,600;1,900&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;1,600;1,900&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,700;1,600;1,900&display=swap\" rel=\"stylesheet\">
{% endblock %}

{#
ici preprod

#}
{# CONTENT #}
{% block content %}
    {{ parent() }}
    {% include 'frontend/home/styles.home.html.twig' %}

    <style>
        @media (min-width: 1200px){
            .container, .container-lg, .container-md, .container-sm, .container-xl {
                max-width: 1253px;
            }
        }
    </style>
    {% for home_page in home_pages %}
        <div class=\"\" style=\"display: flex; background-color: #ffffff !important\">
            <div id=\"divEntete\" style=\"background-color: #ffffff !important; height: auto !important;\">
                <div class=\"containerBody\" id=\"tWelcom\">

                    {% for category in surveysListByCategory %}
                        {% for surveys in category.surveys %}
                            {% for survey in surveys %}
                                <h1 style=\"font-size: 4em; font-weight: 700; color: #03363d\">Hi {{ app.user.title }},</h1>
                                <p style=\"\" id=\"pWelcom\">
                                    Welcome to your test dashboard. Use the surveys below to give us your honest feedback on your
                                    <strong style=\"font-weight: bold\">{{ survey.name }}</strong>
                                    test.
                                </p>
                            {% endfor %}
                        {% endfor %}
                    {% endfor %}

                    {% for category in surveysListByCategoryTest %}
                        {% for surveys in category.surveys %}
                            {% for survey in surveys %}
                                <h1 style=\"font-size: 50px; font-weight: 700; color: #03363d\">Hi {{ app.user.title }},</h1>
                                <p id=\"pWelcom\">
                                    Welcome to your test dashboard. Use the surveys below to give us your honest feedback on your
                                    <strong style=\"font-weight: 900; color: #03363d\">{{ survey.name }}</strong>
                                    test.
                                </p>
                            {% endfor %}
                        {% endfor %}
                    {% endfor %}
                </div>
            </div>
            <div id=\"imgEntete\" style=\"width: 50%\">
                <img  style=\"height: auto; width: 100%\" src=\"{{ asset('images/home_page/' ~ home_page.imageName) }}\" alt=\"img-syres\">
            </div>
        </div>
    {% endfor %}


    {#


    {% if idSurveyZero is null %}
        <h1>{# text user Zero # } </h1>
   {% else %}
    {% endif %}


#}


    <div class=\"container-fluid padding_50\" id=\"surveyList\" style=\"box-shadow: 0 2px 120px 30px rgba(0,0,0,.05);
    border: 1px solid #eeeeee;\">
        <div class=\"space-top\"></div>
        <div>
            <div class=\"containerBody textAlignEnqueteAndTest\" id=\"divSurveyName\">
                <div class=\"line bg-black heightEmpty\"></div>
                <div class=\" heading-style-5\" style=\"\">
                    {% for category in surveysListByCategory %}
                        {% for surveys in category.surveys %}
                            {% for survey in surveys %}
                                <h4 class=\"heading-title colorTextBody colorTextH\" id=\"h4SurveyName\">
                                    {{ survey.name }}
                                </h4>

                            {% endfor %}
                        {% endfor %}
                    {% endfor %}
                    {% for category in surveysListByCategoryTest %}
                        {% for surveys in category.surveys %}
                            {% for survey in surveys %}
                                <h4 class=\"heading-title colorTextBody colorTextH \" id=\"h4SurveyName\">
                                    {#{ survey.name }#}SURVEY LIST
                                </h4>
                            {% endfor %}
                        {% endfor %}
                    {% endfor %}
                    <h4 class=\"heading-title inline-header h_flex colorTextH\" style=\"display: none\">
                        <hr class=\"hr\">{{ 'ENGUÊTE EN COURS'}}<hr class=\"hr\">
                    </h4>
                </div>
                <div style=\"display: none\">
                    {% for category in surveysListByCategory %}
                        <div>
                            <h5 class=\"colorTextH\">{{ category.details.name }}</h5>
                            <div class=\"decoration\"></div>
                            {% for surveys in category.surveys %}
                                {% for survey in surveys %}

                                    <a href=\"{{ path('user_paneliste_details', {'id' : survey.id}) }}\" class=\"user-list-item\">
                                        <img src=\"{{ asset('frontend/images/tree.svg') }}\" alt=\"img\">
                                        <strong class=\"colorTextH\">{{ survey.name }}</strong>
                                        <em>
                                            {% if survey.status == 0 %}
                                                {{ 'coming' |trans({}, 'survey') }}
                                            {% elseif survey.status == 1 %}
                                                {{ 'inprogress' |trans({}, 'survey') }}
                                            {% elseif survey.status == 2 %}
                                                {{ 'focus' |trans({}, 'survey') }}
                                            {% elseif survey.status == 3 %}
                                                {{ 'closed' |trans({}, 'survey') }}
                                            {% else %}
                                                {{ survey.name }}
                                            {% endif %}
                                            - #{{ survey.idSurvey }}
                                        </em>
                                        <i class=\"fa fa-chevron-right\"></i>
                                    </a>
                                    <div class=\"decoration\"></div>
                                {% endfor %}
                            {% endfor %}
                        </div>
                    {% else %}
                        <p class=\"center-text colorTextBody colorTextH\">
                            {{ 'Aucune enquête en cours' }}
                        </p>
                    {% endfor %}
                </div>
            </div>

            <div class=\"containerBody\" style=\"width: 94%\">
                {% for category in surveysListByCategoryTest %}
                    <div class=\"textAlignEnqueteAndTest\">
                        <div class=\"decoration\"></div>
                        {% for surveys in category.surveys %}
                            {% for survey in surveys %}
                                <a href=\"{{ path('user_paneliste_details', {'id' : survey.id}) }}\" class=\"user-list-item\" style=\"display: none\">
                                    <strong class=\"colorTextH\">{{ survey.name }}</strong>
                                    <em class=\"colorTextH\">
                                        {% if survey.status == 0 %}
                                            {{ 'coming' }}
                                        {% elseif survey.status == 1 %}
                                            {{ 'inprogress' |trans({}, 'survey') }}
                                        {% elseif survey.status == 2 %}
                                            {{ 'focus' |trans({}, 'survey') }}
                                        {% elseif survey.status == 3 %}
                                            {{ 'closed' |trans({}, 'survey') }}
                                        {% else %}
                                            {{ survey.name }}
                                        {% endif %}
                                        - #{{ survey.idSurvey }}
                                    </em>
                                    <i class=\"fa fa-chevron-right\"></i>
                                </a>
                                <div class=\"decoration\"></div>
                            {% endfor %}
                        {% endfor %}
                    </div>

                    <div class=\"content\">
                        <div class=\"container-fullscreen heading-style-3\" style=\"display: none\">
                            <h3 class=\"heading-title\">{{ survey.name }}</h3>
                            <em class=\"heading-subtitle\">{{ survey.statusFormatted |trans({}, 'survey') }} - #{{ survey.idSurvey }}</em>
                            <div class=\"overlay bg-gray-dark\"></div>
                        </div>
                        <div class=\"decoration\"></div>
                        <div class=\"\" style=\"display: none\">
                            {{ survey.description | raw }}
                        </div>
                        <div class=\"decoration\"></div>
                        {% if survey.status == 2 and survey.type == 2 %}
                            {{ include('frontend/FocusGroup/_focus_block.html.twig') }}
                        {% endif %}

                        {% if survey.links | length > 0 %}

                            <div class=\"decoration\"></div>
                            <div class=\"\" style=\"\">
                                {% for link in survey.links %}

                                    {% if history[link.id] is not defined %}
                                        <div class=\"\">
                                            <div  style=\"\" id=\"divL\">
                                                <div style=\"width: 10%\">
                                                    <p class=\"\" style=\"margin: 0px\">
                                                        <strong class=\"fontLink\" id=\"stLN\">
                                                            0{{ link.numeroLien }}
                                                        </strong>
                                                    </p>
                                                </div>
                                                <div style=\"width: 61%\">
                                                    <p class=\"colorTextContenus fontLink changeNom pln\"  id=\"pLN\">
                                                        {{ link.name }}
                                                        <span class=\" hideG hideGD\">
                                                                        DUE {{ link.dateUn | date(\"m d\")}}
                                                                </span>
                                                    </p>
                                                </div>
                                                <div style=\"width: 28%;  text-align: right; \">
                                                    <a href=\"{{ path('user_link_redirect', {'token' : link.token}) }}\" target=\"_blank\" class=\"tasklist-item\">
                                                        <span class=\"hideG\"><i class=\"material-icons\" id=\"iconL\">forward</i></span>

                                                        <button class=\"hideP fontLink btn_desc hB\" id=\"btnL\" style=\"font-family: Montserrat;
                                                        font-size: 14px;
                                                        letter-spacing: 1px;
                                                        color:#03363d\">

                                                            <strong  class=\"sF\" style=\"color: black\">
                                                                DUE {{ link.dateUn | date(\"m d\")}}


                                                                {#
                                                                <span class=\"days\">
                                                                </span>
                                                                <span class=\"minutes\">
                                                                </span>
                                                                <span class=\"seconds\">
                                                                </span>
                                                                #}
                                                            </strong>
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                            <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\"></script>
                                        </div>


                                    {% if link.dateUn is defined %}
                                        <script>
                                            let date = '{{ link.dateUn.timestamp }}';
                                            console.log(date);
                                            jQuery(function(\$){
                                                const launch = new Date(date * 1000);
                                                const days = \$('.days');

                                                var hours = \$('.hours');
                                                var minutes = \$('.minutes');
                                                var seconds = \$('.seconds');

                                                //var show_message = false;
                                                setDate();
                                                function setDate(){
                                                    var now = new Date();
                                                    var s = ((launch.getTime() - now.getTime())/1000);


                                                    var diff = s;
                                                    if(s < 0 ) {
                                                        s = 0;
                                                        if(diff > -10)
                                                        {
                                                            \$(\".hB\").css( \"background-color\", \"#03363d\");
                                                            \$(\".sf\").css(\"color\", \"white\");
                                                            \$(\".icof\").text(\"display\", \"block\");
                                                        }
                                                        /*
                                                    else
                                                        \$(\"#compteurfinis\").hide();
                                                         */
                                                    }
                                                    var d = Math.floor(s/86400);
                                                    days.html('<strong>'+d+'</strong>'+(d>1?'s':''));
                                                    s -= d*86400;
                                                    var h = Math.floor(s/3600);
                                                    hours.html('<strong> '+h+'</strong>'+(h>1?'s':''));
                                                    s -= h*3600;
                                                    var m = Math.floor(s/60);
                                                    minutes.html('<strong> :'+m+'</strong>'+(m>1?'s':''));
                                                    s -= m*60;
                                                    s = Math.floor(s);
                                                    seconds.html('<strong> :'+s+'</strong>'+(s>1?'s':''));
                                                    var compteur = setTimeout(setDate,1000);
                                                }
                                            });
                                        </script>

                                    {% endif %}
                                    {% endif %}
                                {% endfor %}

                                {% for link in survey.links %}
                                    {% if history[link.id] is defined %}

                                        <div class=\"\">
                                            <div style=\"\" id=\"divL\">
                                                <div style=\"width: 10%\">
                                                    <p class=\"\" style=\"margin: 0px\">
                                                        <strong class=\"fontLink\" id=\"stLN\">
                                                            0{{ link.numeroLien }}

                                                        </strong>
                                                    </p>
                                                </div>

                                                <div style=\"width: 61%\">
                                                    <p class=\"colorTextContenus fontLink changeNom\" id=\"pLN\">
                                                        {{ link.name }}
                                                        <span class=\" hideG hideGD\">
                                                            DUE {{ link.dateUn.format('D d M')|capitalize}}
                                                        </span>
                                                    </p>
                                                </div>
                                                <div style=\"width: 28%;  text-align: right; \">
                                                    <a href=\"{{ path('user_link_redirect', {'token' : link.token}) }}\"
                                                       target=\"_blank\" class=\"tasklist-item\">
                                                        <span class=\"hideG\"><i class=\"material-icons\" id=\"iconL\">forward</i></span>
                                                        <button class=\"hideP fontLink btn_desc hB\" id=\"btnL\" style=\"font-family: Montserrat;
                                                        font-size: 14px;
                                                        letter-spacing: 1px;
                                                        color:#03363d\">
                                                            <strong class=\"sF\" style=\"color: black\">
                                                                DUE {{ link.dateUn.format('D d M')|capitalize}}

                                                                {#
                                                                <span class=\"days\">
                                                                </span>
                                                                <span class=\"minutes\">
                                                                </span>
                                                                <span class=\"seconds\">
                                                                </span>
                                                                #}
                                                            </strong>
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                            <script type=\"text/javascript\"
                                                    src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\"></script>
                                        </div>
                                    {% endif %}
                                {% endfor %}

                                {% if survey.links is not empty %}
                                    <div class=\"decoration\"></div>
                                {% endif %}
                            </div>

                            <div class=\"decoration\"></div>
                        {% endif %}

                        {#
                        {% if survey.status != 2 and survey.type == 2 %}
                            {{ include('Frontend/FocusGroup/_focus_block.html.twig') }}
                        {% endif %}
                        #}
                    </div>

                {% else %}
                    <p class=\"center-text textAlignEnqueteAndTest colorTextH mP\">
                        {{ 'Aucun test en cours ' |trans({}) }}
                    </p>
                {% endfor %}

                <div class=\" textAlignEnqueteAndTest heading-style-5\">
                    <div class=\"inline-button alignLeft\">
                        {# <a class=\"colorTextH\" href=\"{{ path('frontend_survey_closed_test') }}\" style=\"padding-right: 35px\">
                             {{ 'tests_closed' }}
                         </a>
                         #}

                    </div>
                </div>
            </div>
        </div>

    </div>

    <div id=\"inst\" class=\"container-fluid\" style=\"background-color: white !important; padding-bottom: 100px; \">
        <div  class=\"containerBody colorTextH\">
            <div>
                <div style=\"padding: 100px; padding-bottom: 20px\">
                    {% for category in surveysListByCategoryTest %}
                        {% for surveys in category.surveys %}
                            {% for survey in surveys %}
                                <h1 class=\"colorTextH \" id=\"colorTextHInstruct\" style=\" color: #03363d; font-size: 2.1em; margin-bottom: 10px\">
                                    Test instructions
                                </h1>
                                <p>
                                    {{ survey.description|raw }}
                                </p>
                                <p style=\"\">

                                    <a href=\"{{ asset('images/home_page/' ~ survey.imageName) }}\" download onclick=\"window.open(this.href); return false;\">
                                        <button class=\"btn_desc\" id=\"btnInstruction\" style=\"text-transform: uppercase;
                                            text-transform: uppercase;
                                            font-weight: 600;
                                            font-size: 0.75em;
                                            letter-spacing: 2px;
                                            padding: 10px 40px;
                                            background-color: #1CD9FF;
                                            box-shadow: 0 2px 13px -1px rgba(0,0,0,.1);
                                        }
                                    \"
                                        >Download as pdf</button>
                                    </a>
                                    {#
                                    <a href=\"{{ path('pdf', {'id' : survey.id}) }}\" onclick=\"window.open(this.href); return false;\">
                                        <button class=\"btn_desc\" id=\"btnInstruction\">Download the Test Guidelines</button>
                                    </a>
                                    #}

                                </p>
                            {% endfor %}
                        {% endfor %}
                    {% else %}
                        {% if survey.links | length < 1 %}
                            <p class=\"center-text textAlignEnqueteAndTest colorTextH mP\"> </p>
                        {% endif %}
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>


    {#
     <style>
         .divInvit{
             background-color: #03363d !important;
             border-radius: 5px;

             --parentHeight: 440px;
             --parentWidth: 100px;
             height: var(--parentHeight);
             width: var(--parentHeight);
         }


         #divImgInvit{
             height: calc(var(--parentHeight));
             width: calc(var(--parentWidth));
             border: 5px solid red;
         }
     </style>
     #}

    <div class=\"container-fluid\" id=\"contFInvit\" style=\"align-items: initial; background-color: #017991 !important; padding-right: 0px; padding-left: 0px\">
        <div class=\"\" id=\"imgInvit\">
            {% for home_page in home_pages %}
                <img  class=\"\" style=\"width: 100%\" src=\"{{ asset('images/home_page/' ~ home_page.imageNameUn) }}\" alt=\"img\">
            {% endfor %}
        </div>

        <div class=\"\" id=\"divGInvit\" style=\"background-color: #017991 !important\">
            <div style=\"padding-left: 5%\">
                <h1 id=\"h1invit\"><strong style=\"color: white\">Invite your friends</strong> </h1>
                <p id=\"souTInvit\">Invite your friends to join the SYRES community and test exclusive cosmetics together. It’s free!</p>
                {{ form_start(invitationForm) }}
                <div class=\"my-custom-class-for-errors\">
                    {{ form_errors(invitationForm) }}
                </div>

                <style>
                    #invitation_mail{
                    background-color: #017991 !important;;
                    }
                </style>
                <div id=\"fInvit\">
                    <div class=\"row\">
                    </div>
                    <div>
                        <div class=\"row\" style=\"margin-bottom: 20px\">
                            {{ form_widget(invitationForm.mail, {'attr': {'class': 'cMail', 'placeholder': 'Your friend’s e-mail address'}}) }}
                        </div>
                        <button type=\"submit\" class=\"label_maill butnInvite\" style=\"font-weight: 700; color: #212529\">
                            SEND THE INVITE
                        </button>
                    </div>
                </div>
                {{ form_end(invitationForm) }}
            </div>
        </div>
    </div>

    <div class=\"container tMargin\" style=\"background-color: white;\">
        <h1 id=\"h1C\" style=\"padding-top: 70px; font-weight: 700; font-size: 3.5em!important; color: #03363d !important;\">Contact us</h1>
        <div class=\"container d_flex\" id=\"foot\">
            <div class=\"containerBody contF MP\" id=\"divGC\">
                <div style=\"\" id=\"divLC\">
                    <p style=\"font-style: inherit;font-weight: inherit; margin: 0px\">WhatsApp & Mobile</p>
                    <h1 style=\"color: #03363d !important; font-weight: 700; margin: 0px; margin-top: 4px\"> 9677 6179</h1>
                </div>

                <div class=\"mB\" ></div>
                <div id=\"divRC\">
                    <p class=\"\" style=\"margin: 0px;\">
                        E-Mail
                    </p>
                    <h1 class=\" text_alignt\" id=\"h1mailC\" style=\"color: #03363d !important;\">team@syres.sg</h1>
                </div>
            </div>
        </div>
    </div>

    {#
         <a href=\"#\" class=\"float\">
        <i class=\"fa fa-plus my-float\"></i>
    </a>

    <style>
        .float{
            position:fixed;
            width:60px;
            height:60px;
            bottom:40px;
            right:40px;
            background-color:#47c6e0 !important;
            color:#FFF;
            border-radius:50px;
            text-align:center;
            box-shadow: 2px 2px 3px #999;
        }

        .my-float{
            margin-top:22px;
        }
    </style>
    #}

{% endblock %}

{% block footer %}
    {#   {% include '/_widgets/footer.home.html.twig' %} #}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script
            src=\"https://code.jquery.com/jquery-3.5.0.js\"
            integrity=\"sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=\"
            crossorigin=\"anonymous\"></script>
    <script>
        function classToggle() {
            const navs = document.querySelectorAll('.Navbar__Items')

            navs.forEach(nav => nav.classList.toggle('Navbar__ToggleShow'));

            \$(\"#containerBody\").css({\"margin-top\":\"-39px\"});
            \$(\".Navbar\").css({\"background-color\":\"#01c3e7\"});

        }
        document.querySelector('.Navbar__Link-toggle')
            .addEventListener('click', classToggle);
    </script>

    <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\"></script>
{% endblock %}
", "frontend/home/Original/show.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/home/Original/show.html.twig");
    }
}
