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
class __TwigTemplate_8dde3cdc5641ec560338f099adf3003a3137a389d29459784290cb3d0db020c8 extends Template
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
        $this->parent = $this->loadTemplate("Backend/_layout.html.twig", "Backend/newsletter/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 93
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  240 => 94,  236 => 93,  231 => 91,  229 => 90,  224 => 87,  214 => 83,  210 => 82,  206 => 80,  200 => 78,  198 => 77,  190 => 72,  186 => 71,  182 => 69,  175 => 66,  173 => 65,  164 => 59,  160 => 58,  156 => 56,  150 => 54,  148 => 53,  139 => 47,  135 => 46,  131 => 44,  125 => 42,  123 => 41,  114 => 35,  108 => 32,  104 => 31,  99 => 28,  93 => 26,  91 => 25,  81 => 19,  77 => 18,  73 => 16,  69 => 15,  55 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Backend/newsletter/show.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/newsletter/show.html.twig");
    }
}
