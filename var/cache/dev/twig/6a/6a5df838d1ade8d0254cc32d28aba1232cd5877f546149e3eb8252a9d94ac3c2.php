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

/* Backend/newsletter/show.html.twig */
class __TwigTemplate_e3ca97384f39d355466ed3923081449aba868f36c812f9563e4ea5e82c6ad92e extends Template
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
        return "Backend/_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/newsletter/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backend/newsletter/show.html.twig"));

        $this->parent = $this->loadTemplate("Backend/_layout.html.twig", "Backend/newsletter/show.html.twig", 1);
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
        $this->loadTemplate("styles.home.html.twig", "Backend/newsletter/show.html.twig", 4)->display($context);
        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/styles/inscription.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\" integrity=\"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk\" crossorigin=\"anonymous\">

    <style>
        .m-c-e{
            margin-bottom: 30px !important;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    <div class=\"containers\" style=\"text-align: center\">

        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["newsletter"]);
        foreach ($context['_seq'] as $context["_key"] => $context["newsletter"]) {
            // line 19
            echo "           <p style=\"text-align: end; \"> <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_newsletter_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["newsletter"], "id", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\" style=\"font-size: 26px\">Modifier
                   <i class=\"fa fa-pencil heading-icon\" style=\"font-size: 26px\"></i>
               </a></p>

            <div class=\"row m-c-e\">
                <div class=\"col-md-6\">
                    ";
            // line 25
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["newsletter"], "imageName", [], "any", false, false, false, 25), null))) {
                // line 26
                echo "                        <img   src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("./images/home_page/" . twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["newsletter"], "imageName", [], "any", false, false, false, 26)))), "html", null, true);
                echo "\" style=\"height: 150px\">
                    ";
            }
            // line 28
            echo "                </div>
                <div class=\"col-md-6\">
                    <div class=\"\" style=\"\">
                        <p class=\"textDesc\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsletter"], "salutation", [], "any", false, false, false, 31), "html", null, true);
            echo "</p>
                        <p class=\"presentation\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsletter"], "presentation", [], "any", false, false, false, 32), "html", null, true);
            echo "</p>
                    </div>
                    <div  style=\"\">
                        <p class=\"textDesc\" style=\"margin-right: 2px\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsletter"], "textDesc", [], "any", false, false, false, 35), "html", null, true);
            echo "</p>
                    </div>
                </div>
            </div>
            <div class=\"row m-c-e\">
                <div class=\"col-md-6\">
                    ";
            // line 41
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["newsletter"], "imageNameUn", [], "any", false, false, false, 41), null))) {
                // line 42
                echo "                        <img class=\"\" style=\"text-align: center; height: 150px\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("./images/home_page/" . twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["newsletter"], "imageNameUn", [], "any", false, false, false, 42)))), "html", null, true);
                echo "\">
                    ";
            }
            // line 44
            echo "                </div>
                <div class=\"col-md-6\">
                    <h5>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsletter"], "footerTextUn", [], "any", false, false, false, 46), "html", null, true);
            echo "</h5>
                    <p>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsletter"], "footerTextDeux", [], "any", false, false, false, 47), "html", null, true);
            echo "</p>
                </div>
             </div>

            <div class=\"row m-c-e\">
                <div class=\"col-md-6\">
                    ";
            // line 53
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["newsletter"], "imageNameDeux", [], "any", false, false, false, 53), null))) {
                // line 54
                echo "                        <img class=\"\" style=\"text-align: center; height: 150px\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("./images/home_page/" . twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["newsletter"], "imageNameDeux", [], "any", false, false, false, 54)))), "html", null, true);
                echo "\">
                    ";
            }
            // line 56
            echo "                </div>
                <div class=\"col-md-6\">
                    <h5>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsletter"], "footerTextTrois", [], "any", false, false, false, 58), "html", null, true);
            echo "</h5>
                    <p>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsletter"], "footerTextQuatre", [], "any", false, false, false, 59), "html", null, true);
            echo "</p>
                </div>
            </div>

            <div class=\"row m-c-e\">
                <div class=\"col-md-6\">
                    ";
            // line 65
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["newsletter"], "imageNameTrois", [], "any", false, false, false, 65), null))) {
                // line 66
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("./images/home_page/" . twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["newsletter"], "imageNameTrois", [], "any", false, false, false, 66)))), "html", null, true);
                echo "\" style=\"height: 150px;\">

                    ";
            }
            // line 69
            echo "                </div>
                <div class=\"col-md-6\">
                    <h5>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsletter"], "footerTextCinq", [], "any", false, false, false, 71), "html", null, true);
            echo "</h5>
                    <p>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsletter"], "footerTextSix", [], "any", false, false, false, 72), "html", null, true);
            echo "</p>
                </div>
            </div>
            <div class=\"row m-c-e\">
                <div class=\"col-md-6\">
                    ";
            // line 77
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["newsletter"], "imageNameQuatre", [], "any", false, false, false, 77), null))) {
                // line 78
                echo "                        <img class=\"\" style=\"text-align: center; height: 150px\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("./images/home_page/" . twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["newsletter"], "imageNameQuatre", [], "any", false, false, false, 78)))), "html", null, true);
                echo "\">
                    ";
            }
            // line 80
            echo "                </div>
                <div class=\"col-md-6\">
                    <h5>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsletter"], "footerTextSept", [], "any", false, false, false, 82), "html", null, true);
            echo "</h5>
                    <p>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsletter"], "footerTextHuit", [], "any", false, false, false, 83), "html", null, true);
            echo "</p>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newsletter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "
    </div>

    ";
        // line 90
        $this->loadTemplate("js.html.twig", "Backend/newsletter/show.html.twig", 90)->display($context);
        // line 91
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 93
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 94
        echo "    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\" integrity=\"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI\" crossorigin=\"anonymous\"></script>
    <script type=\"text/javascript\">
        function show(elementId) {
            document.getElementById(\"id1\").style.display=\"none\";
            document.getElementById(elementId).style.display=\"block\";
        }
        function hide(elementId) {
            document.getElementById(\"id1\").style.display=\"block\";
            document.getElementById(elementId).style.display=\"none\";
        }

        var acc = document.getElementsByClassName(\"accordion\");
        var i;
        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener(\"click\", function() {
                this.classList.toggle(\"active\");
                var panel = this.nextElementSibling;
                if (panel.style.display === \"block\") {
                    panel.style.display = \"none\";
                } else {
                    panel.style.display = \"block\";
                }
            });
        }

        var coll = document.getElementsByClassName(\"collapsible_facebook\");
        var ii;
        for (i = 0; ii < coll.length; ii++) {
            coll[ii].addEventListener(\"click\", function() {
                this.classList.toggle(\"active\");
                var content = this.nextElementSibling;
                if (content.style.display === \"block\") {
                    content.style.display = \"none\";
                } else {
                    content.style.display = \"block\";
                }
            });
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Backend/newsletter/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 94,  272 => 93,  261 => 91,  259 => 90,  254 => 87,  244 => 83,  240 => 82,  236 => 80,  230 => 78,  228 => 77,  220 => 72,  216 => 71,  212 => 69,  205 => 66,  203 => 65,  194 => 59,  190 => 58,  186 => 56,  180 => 54,  178 => 53,  169 => 47,  165 => 46,  161 => 44,  155 => 42,  153 => 41,  144 => 35,  138 => 32,  134 => 31,  129 => 28,  123 => 26,  121 => 25,  111 => 19,  107 => 18,  103 => 16,  93 => 15,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Backend/_layout.html.twig' %}

{% block stylesheets %}
    {% include 'styles.home.html.twig' %}
    <link href=\"{{ asset('frontend/styles/inscription.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\" integrity=\"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk\" crossorigin=\"anonymous\">

    <style>
        .m-c-e{
            margin-bottom: 30px !important;
        }
    </style>
{% endblock %}

{% block content %}
    <div class=\"containers\" style=\"text-align: center\">

        {% for newsletter in newsletter %}
           <p style=\"text-align: end; \"> <a href=\"{{ path('admin_newsletter_edit', {'id': newsletter.id}) }}\" style=\"font-size: 26px\">Modifier
                   <i class=\"fa fa-pencil heading-icon\" style=\"font-size: 26px\"></i>
               </a></p>

            <div class=\"row m-c-e\">
                <div class=\"col-md-6\">
                    {% if newsletter.imageName != null %}
                        <img   src=\"{{ asset('./images/home_page/' ~ newsletter.imageName|url_encode) }}\" style=\"height: 150px\">
                    {% endif %}
                </div>
                <div class=\"col-md-6\">
                    <div class=\"\" style=\"\">
                        <p class=\"textDesc\">{{ newsletter.salutation }}</p>
                        <p class=\"presentation\">{{ newsletter.presentation }}</p>
                    </div>
                    <div  style=\"\">
                        <p class=\"textDesc\" style=\"margin-right: 2px\">{{ newsletter.textDesc }}</p>
                    </div>
                </div>
            </div>
            <div class=\"row m-c-e\">
                <div class=\"col-md-6\">
                    {% if newsletter.imageNameUn != null %}
                        <img class=\"\" style=\"text-align: center; height: 150px\" src=\"{{ asset('./images/home_page/' ~ newsletter.imageNameUn|url_encode) }}\">
                    {% endif %}
                </div>
                <div class=\"col-md-6\">
                    <h5>{{ newsletter.footerTextUn }}</h5>
                    <p>{{ newsletter.footerTextDeux }}</p>
                </div>
             </div>

            <div class=\"row m-c-e\">
                <div class=\"col-md-6\">
                    {% if newsletter.imageNameDeux != null %}
                        <img class=\"\" style=\"text-align: center; height: 150px\" src=\"{{ asset('./images/home_page/' ~ newsletter.imageNameDeux|url_encode) }}\">
                    {% endif %}
                </div>
                <div class=\"col-md-6\">
                    <h5>{{ newsletter.footerTextTrois }}</h5>
                    <p>{{ newsletter.footerTextQuatre }}</p>
                </div>
            </div>

            <div class=\"row m-c-e\">
                <div class=\"col-md-6\">
                    {% if newsletter.imageNameTrois != null %}
                        <img src=\"{{ asset('./images/home_page/' ~ newsletter.imageNameTrois|url_encode) }}\" style=\"height: 150px;\">

                    {% endif %}
                </div>
                <div class=\"col-md-6\">
                    <h5>{{ newsletter.footerTextCinq }}</h5>
                    <p>{{ newsletter.footerTextSix }}</p>
                </div>
            </div>
            <div class=\"row m-c-e\">
                <div class=\"col-md-6\">
                    {% if newsletter.imageNameQuatre != null %}
                        <img class=\"\" style=\"text-align: center; height: 150px\" src=\"{{ asset('./images/home_page/' ~ newsletter.imageNameQuatre|url_encode) }}\">
                    {% endif %}
                </div>
                <div class=\"col-md-6\">
                    <h5>{{ newsletter.footerTextSept }}</h5>
                    <p>{{ newsletter.footerTextHuit }}</p>
                </div>
            </div>
        {% endfor %}

    </div>

    {% include 'js.html.twig' %}

{% endblock %}
{% block javascripts %}
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\" integrity=\"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI\" crossorigin=\"anonymous\"></script>
    <script type=\"text/javascript\">
        function show(elementId) {
            document.getElementById(\"id1\").style.display=\"none\";
            document.getElementById(elementId).style.display=\"block\";
        }
        function hide(elementId) {
            document.getElementById(\"id1\").style.display=\"block\";
            document.getElementById(elementId).style.display=\"none\";
        }

        var acc = document.getElementsByClassName(\"accordion\");
        var i;
        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener(\"click\", function() {
                this.classList.toggle(\"active\");
                var panel = this.nextElementSibling;
                if (panel.style.display === \"block\") {
                    panel.style.display = \"none\";
                } else {
                    panel.style.display = \"block\";
                }
            });
        }

        var coll = document.getElementsByClassName(\"collapsible_facebook\");
        var ii;
        for (i = 0; ii < coll.length; ii++) {
            coll[ii].addEventListener(\"click\", function() {
                this.classList.toggle(\"active\");
                var content = this.nextElementSibling;
                if (content.style.display === \"block\") {
                    content.style.display = \"none\";
                } else {
                    content.style.display = \"block\";
                }
            });
        }
    </script>
{% endblock %}
", "Backend/newsletter/show.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/newsletter/show.html.twig");
    }
}
