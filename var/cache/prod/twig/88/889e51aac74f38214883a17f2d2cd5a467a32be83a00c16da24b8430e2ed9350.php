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

/* frontend/home/news/news_g.html.twig */
class __TwigTemplate_8a322209ac9f96c00976549445e0fe8cf215c911d3d1f8a925cdef06595136ec extends Template
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
        echo "<div class=\"bodyGs container_home\" style=\"margin-bottom: 20px\">
    ";
        // line 3
        echo "    <style>
        @media screen and (max-width: 768px){
            .nav-item{
                margin-left: initial;
            }
            .navbar-nav{
                height: 500px;
            }
            .imgs{
                width: 339px !important;
            }
            #logo{
                width: auto;
            }
            #vicEntNews{
                display: none;
            }
            .carousel-indicators{

            }
            #carouselExampleCaptions{
                width: 371px;
                height: 300px;
                margin: 5px;
            }
            .d_none{
                display: block !important;
            }
            .carousel-item {
                width: 360px !important;
                height: 300px !important;
            }
            .slideshow-container{
                width: 360px;
                height: 300px;
            }
        }
        @media screen and (min-width: 769px){
            .d_none{
                display: flex !important;
            }
        }


        #carouselExampleCaptions{
            max-width: 750px;
            margin: auto;
        }
    </style>
    <div class=\"cont_flexn d_none\" style=\" text-align: center;\">
        <div class=\" newsletter-ent col-8 col-md-8\" id=\"ent\" style=\"text-align: -webkit-center; padding: 0px; background-color: rgba(255,255,255,.75); padding: 3px border: 2px solid green; max-width: 750px; margin: auto\">
            ";
        // line 55
        echo "            <h3 class=\"text_align\" style=\"margin-top: 20px; color: #2980b9; \">NEWSLETTERS</h3>
            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["newsletter"]);
        foreach ($context['_seq'] as $context["_key"] => $context["newsletter"]) {
            // line 57
            echo "            <div class=\"styleCard\" style=\"padding-right: 0px;  margin-bottom: 20px\">
                <div class=\"aLaMemeLigne text_align divEnglobEntete\" id=\"vicEntNews\" style=\"padding-right: 0px; text-align: right; justify-content: space-between\">
                    ";
            // line 60
            echo "                    <div class=\"aCacherMd marginAuto paddingSalutation\">
                    </div>

                    <div class=\"text_align marginAuto\" id=\"imgPEntete\" style=\"text-align: left; width: 50%\">
                        ";
            // line 64
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["newsletter"], "imageName", [], "any", false, false, false, 64), null))) {
                // line 65
                echo "                            <img class=\"myImg imgLeft1 imgEntete imgPTail\"   src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("./images/home_page/" . twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["newsletter"], "imageName", [], "any", false, false, false, 65)))), "html", null, true);
                echo "\" style=\"width:50%\">
                        ";
            }
            // line 67
            echo "                    </div>

                    <div style=\"width: 50%\">
                        <div class=\"aLaLigne aCacherSml divSalutationSml\" style=\"padding-right: 0px; margin-right: 0px;\">
                            <p class=\"textDesc\">";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsletter"], "salutation", [], "any", false, false, false, 71), "html", null, true);
            echo "</p>
                            <p class=\"presentation\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsletter"], "presentation", [], "any", false, false, false, 72), "html", null, true);
            echo "</p>
                        </div>
                        <div  style=\"padding-top: 10px\">
                            <p class=\"textDesc\" style=\"margin-right: 2px\">";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsletter"], "textDesc", [], "any", false, false, false, 75), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <style>
                .carousel-item #cap-t{
                    bottom: 100px !important;
                }
            </style>
            <div id=\"carouselExampleCaptions\" class=\"carousel slide\" data-ride=\"carousel\">
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#carouselExampleCaptions\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#carouselExampleCaptions\" data-slide-to=\"1\"></li>
                    <li data-target=\"#carouselExampleCaptions\" data-slide-to=\"2\"></li>
                    <li data-target=\"#carouselExampleCaptions\" data-slide-to=\"3\"></li>
                </ol>
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                        ";
            // line 95
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["newsletter"], "imageNameUn", [], "any", false, false, false, 95), null))) {
                // line 96
                echo "                            <img class=\"myImg imgs\" style=\"text-align: center; height: 360px; \" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("./images/home_page/" . twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["newsletter"], "imageNameUn", [], "any", false, false, false, 96)))), "html", null, true);
                echo "\">
                            <div class=\"carousel-caption d-none d-md-block\" id=\"cap-t\">
                                <h5>";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsletter"], "footerTextUn", [], "any", false, false, false, 98), "html", null, true);
                echo "</h5>
                                <p>";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsletter"], "footerTextDeux", [], "any", false, false, false, 99), "html", null, true);
                echo "</p>
                            </div>
                        ";
            }
            // line 102
            echo "                    </div>
                    <div class=\"carousel-item\">
                        ";
            // line 104
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["newsletter"], "imageNameDeux", [], "any", false, false, false, 104), null))) {
                // line 105
                echo "                            <img class=\"myImg imgs\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("./images/home_page/" . twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["newsletter"], "imageNameDeux", [], "any", false, false, false, 105)))), "html", null, true);
                echo "\" style=\"height: 360px; text-align: center; margin: auto\">
                            <div class=\"carousel-caption d-none d-md-block\" id=\"cap-t\">
                                <h5>";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsletter"], "footerTextTrois", [], "any", false, false, false, 107), "html", null, true);
                echo "</h5>
                                <p>";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsletter"], "footerTextQuatre", [], "any", false, false, false, 108), "html", null, true);
                echo "</p>
                            </div>
                        ";
            }
            // line 111
            echo "                    </div>
                    <div class=\"carousel-item\">
                        ";
            // line 113
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["newsletter"], "imageNameTrois", [], "any", false, false, false, 113), null))) {
                // line 114
                echo "                            <img class=\"myImg imgs\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("./images/home_page/" . twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["newsletter"], "imageNameTrois", [], "any", false, false, false, 114)))), "html", null, true);
                echo "\" style=\"height: 360px; text-align: center; margin: auto\">
                            <div class=\"carousel-caption d-none d-md-block\" id=\"cap-t\">
                                <h5>";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsletter"], "footerTextCinq", [], "any", false, false, false, 116), "html", null, true);
                echo "</h5>
                                <p>";
                // line 117
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsletter"], "footerTextSix", [], "any", false, false, false, 117), "html", null, true);
                echo "</p>
                            </div>
                        ";
            }
            // line 120
            echo "                    </div>

                    <div class=\"carousel-item\">
                        ";
            // line 123
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["newsletter"], "imageNameQuatre", [], "any", false, false, false, 123), null))) {
                // line 124
                echo "                            <img class=\"myImg imgs\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("./images/home_page/" . twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["newsletter"], "imageNameQuatre", [], "any", false, false, false, 124)))), "html", null, true);
                echo "\" style=\"height: 360px; text-align: center; margin: auto\">
                            <div class=\"carousel-caption\" id=\"cap-t\">
                                <h5>";
                // line 126
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsletter"], "footerTextSept", [], "any", false, false, false, 126), "html", null, true);
                echo "</h5>
                                <p style=\"display: none\">";
                // line 127
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsletter"], "footerTextHuit", [], "any", false, false, false, 127), "html", null, true);
                echo "</p>
                            </div>
                        ";
            }
            // line 130
            echo "                    </div>
                </div>
                <a class=\"carousel-control-prev\" href=\"#carouselExampleCaptions\" role=\"button\" data-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"carousel-control-next\" href=\"#carouselExampleCaptions\" role=\"button\" data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newsletter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "            </div>
        </div>

        <div class=\"col-4 col-md-4 styleCard_facebook\" style=\"/*margin-top: 70px; margin-left: 10px;*/ height: 778px\">
            <div id=\"fb-root\"></div>
            <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v4.0\"></script>
            <div class=\"fb-page\" data-href=\"https://www.facebook.com/SyresTests/\" data-tabs=\"timeline\" data-height=\"738px\" style=\"width: 355px\" data-small-header=\"false\" data-adapt-container-width=\"true\" data-hide-cover=\"false\" data-show-facepile=\"true\"><blockquote cite=\"https://www.facebook.com/SyresTests/\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/SyresTests/\">Syres France Tests Cosmétiques</a></blockquote></div>
        </div>
    </div>
    ";
        // line 151
        echo "
    ";
        // line 260
        echo "    <div class=\"styleCard\" style=\"min-height: 620px; display: none\">
        <h1 style=\"text-align: center;  color: #0a6aa1; margin: 0; margin-bottom: 18px;\">Instagram</h1>

        <ul>
            <a href=\"https://www.instagram.com/syres_fr/?hl=fr\" id=\"rudr_instafeedG\"></a>

            <script>
                function fclick(){
                    onClick=\"window.open('https://www.instagram.com/syres_fr/?hl=fr', '_blank')\";
                }
            </script>
        </ul>
    </div>

    <div></div>
    <hr>


</div>";
    }

    public function getTemplateName()
    {
        return "frontend/home/news/news_g.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 260,  269 => 151,  258 => 141,  242 => 130,  236 => 127,  232 => 126,  226 => 124,  224 => 123,  219 => 120,  213 => 117,  209 => 116,  203 => 114,  201 => 113,  197 => 111,  191 => 108,  187 => 107,  181 => 105,  179 => 104,  175 => 102,  169 => 99,  165 => 98,  159 => 96,  157 => 95,  134 => 75,  128 => 72,  124 => 71,  118 => 67,  112 => 65,  110 => 64,  104 => 60,  100 => 57,  96 => 56,  93 => 55,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/home/news/news_g.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/home/news/news_g.html.twig");
    }
}
