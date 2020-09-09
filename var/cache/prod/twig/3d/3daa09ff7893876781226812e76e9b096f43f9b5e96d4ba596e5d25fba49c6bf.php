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

/* frontend/home/news/news_p.html.twig */
class __TwigTemplate_3eab778cc792d60e94a2fc95a05a8c326f8996f35b10608515764fd88f071c38 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"container bodyPs\" style=\"margin-bottom: 20px; display: none\">
    <div class=\"cont_flexn row\" style=\" text-align: center;\">
        <div class=\"AvantCar sticky newsletter-ent col-8 col-md-8\" id=\"ent\" style=\"text-align: -webkit-center; padding: 0px\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["newsletter"]);
        foreach ($context['_seq'] as $context["_key"] => $context["newsletter"]) {
            // line 5
            echo "                <div style=\"padding-right: 0px; width: 80%; padding-top: 20px\">
                    <h3 class=\"text_align\" style=\"margin-top: 20px; color: #2980b9; \">NEWSLETTERS</h3>
                    <div class=\"aLaMemeLigne text_align divEnglobEntete\" style=\"padding-right: 0px; text-align: right\">
                        ";
            // line 9
            echo "                        <div class=\"aCacherMd marginAuto paddingSalutation\">
                        </div>
                        <div class=\"text_align marginAuto\" id=\"imgPEntete\" style=\"text-align: right; align-content: end; padding-right: 0px;\">
                            ";
            // line 12
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["newsletter"], "imageName", [], "any", false, false, false, 12), null))) {
                // line 13
                echo "                                <img class=\"myImg imgLeft1 imgEntete imgPTail\"   src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("./images/home_page/" . twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["newsletter"], "imageName", [], "any", false, false, false, 13)))), "html", null, true);
                echo "\" style=\"width:100%\">
                            ";
            }
            // line 15
            echo "                        </div>

                        <div class=\"aCacherMd marginAuto paddingSalutation\">
                            <p class=\"presentation\"></p>
                            <p class=\"textDesc\" ></p>
                        </div>

                        <div class=\"aLaLigne aCacherSml divSalutationSml\" style=\"text-align: right; padding-right: 0px; margin-right: 0px;\">
                            <p class=\"presentation\"></p>
                            <p class=\"textDesc\"><strong></strong></p>
                        </div>
                    </div>
                </div>

                <div class=\"slideshow-container\" style=\"height: 300px; margin-top: 5px\">

                    <div class=\"mySlides fade\">
                        <div class=\"numbertext\">1 / 3</div>
                        <img class=\"myImg imgLesTrois\" style=\"text-align: center;width: 100%;  \" src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/home_page/" . twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["newsletter"], "imageFileUn", [], "any", false, false, false, 33)))), "html", null, true);
            echo "\">
                        <div class=\"text\">
                            <h3>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsletter"], "footerTextUn", [], "any", false, false, false, 35), "html", null, true);
            echo "</h3>
                            <p>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsletter"], "footerTextDeux", [], "any", false, false, false, 36), "html", null, true);
            echo "</p>
                        </div>
                    </div>

                    <div class=\"mySlides fade\">
                        <div class=\"numbertext\">2 / 3</div>
                        ";
            // line 42
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["newsletter"], "imageNameDeux", [], "any", false, false, false, 42), null))) {
                // line 43
                echo "                            <img class=\"myImg imgLesTrois\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("./images/home_page/" . twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["newsletter"], "imageNameDeux", [], "any", false, false, false, 43)))), "html", null, true);
                echo "\" style=\"width: 100%; height: 360px; text-align: center; margin: auto\">
                        ";
            }
            // line 44
            echo "                        <div class=\"text\">
                            <h3>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsletter"], "footerTextTrois", [], "any", false, false, false, 45), "html", null, true);
            echo "</h3>
                            <p>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsletter"], "footerTextQuatre", [], "any", false, false, false, 46), "html", null, true);
            echo "</p>
                        </div>
                    </div>

                    <div class=\"mySlides fade\">
                        <div class=\"numbertext\">3 / 3</div>
                        <img class=\"myImg imgLesTrois\" style=\"text-align: center;width: 100%;  \" src=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/home_page/" . twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["newsletter"], "imageFileTrois", [], "any", false, false, false, 52)))), "html", null, true);
            echo "\">
                        <div class=\"text\">
                            <h3>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsletter"], "footerTextCinq", [], "any", false, false, false, 54), "html", null, true);
            echo "</h3>
                            <p>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsletter"], "footerTextSix", [], "any", false, false, false, 55), "html", null, true);
            echo "</p>
                        </div>
                    </div>

                    <div class=\"mySlides fade\">
                        <div class=\"numbertext\">4 / 3</div>
                        <img class=\"myImg imgLesTrois\" style=\"text-align: center;width: 100%;  \" src=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/home_page/" . twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["newsletter"], "imageFileQuatre", [], "any", false, false, false, 61)))), "html", null, true);
            echo "\">
                        <div class=\"text\">
                            <h3>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsletter"], "footerTextSept", [], "any", false, false, false, 63), "html", null, true);
            echo "</h3>
                            <p>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsletter"], "footerTextHuit", [], "any", false, false, false, 64), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                </div>
                <br>
                <div id=\"divB\" style=\"text-align:center\">
                    <span class=\"dot\"></span>
                    <span class=\"dot\"></span>
                    <span class=\"dot\"></span>
                    <span class=\"dot\"></span>
                </div>
                <div style=\"padding-top: 10px\">
                    <p class=\"textDesc\">";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsletter"], "textDesc", [], "any", false, false, false, 76), "html", null, true);
            echo "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newsletter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "            <hr>
            <div style=\"display: none\">
                <h1 style=\"margin-bottom: 40px;  color: #0a6aa1\">Instagram</h1>
                <ul>
                    <a href=\"https://www.instagram.com/syres_fr/?hl=fr\" id=\"rudr_instafeedP\"></a>
                </ul>
            </div>

        </div>

        <div id=\"face\" class=\"\" style=\"display: contents; margin-bottom: 10px\">
            <div id=\"fb-root\"></div>
            <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v4.0\"></script>
            <div class=\"fb-page\" data-href=\"https://www.facebook.com/SyresTests/\" data-tabs=\"timeline\" data-height=\"450px\" data-small-header=\"false\" data-adapt-container-width=\"true\" data-hide-cover=\"false\" data-show-facepile=\"true\"><blockquote cite=\"https://www.facebook.com/SyresTests/\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/SyresTests/\">Syres France Tests Cosmétiques</a></blockquote></div>
        </div>

    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "frontend/home/news/news_p.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 79,  168 => 76,  153 => 64,  149 => 63,  144 => 61,  135 => 55,  131 => 54,  126 => 52,  117 => 46,  113 => 45,  110 => 44,  104 => 43,  102 => 42,  93 => 36,  89 => 35,  84 => 33,  64 => 15,  58 => 13,  56 => 12,  51 => 9,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/home/news/news_p.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/home/news/news_p.html.twig");
    }
}
