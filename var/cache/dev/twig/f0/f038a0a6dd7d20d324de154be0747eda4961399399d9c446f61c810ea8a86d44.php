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
class __TwigTemplate_b722e00d2cdf40d0b101d60a4490df9a22ad306f6bfaef0ab3998109762b10c3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/home/news/news_g.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/home/news/news_g.html.twig"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  278 => 260,  275 => 151,  264 => 141,  248 => 130,  242 => 127,  238 => 126,  232 => 124,  230 => 123,  225 => 120,  219 => 117,  215 => 116,  209 => 114,  207 => 113,  203 => 111,  197 => 108,  193 => 107,  187 => 105,  185 => 104,  181 => 102,  175 => 99,  171 => 98,  165 => 96,  163 => 95,  140 => 75,  134 => 72,  130 => 71,  124 => 67,  118 => 65,  116 => 64,  110 => 60,  106 => 57,  102 => 56,  99 => 55,  46 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"bodyGs container_home\" style=\"margin-bottom: 20px\">
    {#/////////#}
    <style>
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
            {# ************************* B caroussel ************************#}
            <h3 class=\"text_align\" style=\"margin-top: 20px; color: #2980b9; \">NEWSLETTERS</h3>
            {% for newsletter in newsletter %}
            <div class=\"styleCard\" style=\"padding-right: 0px;  margin-bottom: 20px\">
                <div class=\"aLaMemeLigne text_align divEnglobEntete\" id=\"vicEntNews\" style=\"padding-right: 0px; text-align: right; justify-content: space-between\">
                    {#  à cacher sur une md ecran #}
                    <div class=\"aCacherMd marginAuto paddingSalutation\">
                    </div>

                    <div class=\"text_align marginAuto\" id=\"imgPEntete\" style=\"text-align: left; width: 50%\">
                        {% if newsletter.imageName != null %}
                            <img class=\"myImg imgLeft1 imgEntete imgPTail\"   src=\"{{ asset('./images/home_page/' ~ newsletter.imageName|url_encode) }}\" style=\"width:50%\">
                        {% endif %}
                    </div>

                    <div style=\"width: 50%\">
                        <div class=\"aLaLigne aCacherSml divSalutationSml\" style=\"padding-right: 0px; margin-right: 0px;\">
                            <p class=\"textDesc\">{{ newsletter.salutation }}</p>
                            <p class=\"presentation\">{{ newsletter.presentation }}</p>
                        </div>
                        <div  style=\"padding-top: 10px\">
                            <p class=\"textDesc\" style=\"margin-right: 2px\">{{ newsletter.textDesc }}</p>
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
                        {% if newsletter.imageNameUn != null %}
                            <img class=\"myImg imgs\" style=\"text-align: center; height: 360px; \" src=\"{{ asset('./images/home_page/' ~ newsletter.imageNameUn|url_encode) }}\">
                            <div class=\"carousel-caption d-none d-md-block\" id=\"cap-t\">
                                <h5>{{ newsletter.footerTextUn }}</h5>
                                <p>{{ newsletter.footerTextDeux }}</p>
                            </div>
                        {% endif %}
                    </div>
                    <div class=\"carousel-item\">
                        {% if newsletter.imageNameDeux != null %}
                            <img class=\"myImg imgs\" src=\"{{ asset('./images/home_page/' ~ newsletter.imageNameDeux|url_encode) }}\" style=\"height: 360px; text-align: center; margin: auto\">
                            <div class=\"carousel-caption d-none d-md-block\" id=\"cap-t\">
                                <h5>{{ newsletter.footerTextTrois }}</h5>
                                <p>{{ newsletter.footerTextQuatre }}</p>
                            </div>
                        {% endif %}
                    </div>
                    <div class=\"carousel-item\">
                        {% if newsletter.imageNameTrois != null %}
                            <img class=\"myImg imgs\" src=\"{{ asset('./images/home_page/' ~ newsletter.imageNameTrois|url_encode) }}\" style=\"height: 360px; text-align: center; margin: auto\">
                            <div class=\"carousel-caption d-none d-md-block\" id=\"cap-t\">
                                <h5>{{ newsletter.footerTextCinq }}</h5>
                                <p>{{ newsletter.footerTextSix }}</p>
                            </div>
                        {% endif %}
                    </div>

                    <div class=\"carousel-item\">
                        {% if newsletter.imageNameQuatre != null %}
                            <img class=\"myImg imgs\" src=\"{{ asset('./images/home_page/' ~ newsletter.imageNameQuatre|url_encode) }}\" style=\"height: 360px; text-align: center; margin: auto\">
                            <div class=\"carousel-caption\" id=\"cap-t\">
                                <h5>{{ newsletter.footerTextSept }}</h5>
                                <p style=\"display: none\">{{ newsletter.footerTextHuit }}</p>
                            </div>
                        {% endif %}
                    </div>
                </div>
                <a class=\"carousel-control-prev\" href=\"#carouselExampleCaptions\" role=\"button\" data-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"carousel-control-next\" href=\"#carouselExampleCaptions\" role=\"button\" data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
                {% endfor %}
            </div>
        </div>

        <div class=\"col-4 col-md-4 styleCard_facebook\" style=\"/*margin-top: 70px; margin-left: 10px;*/ height: 778px\">
            <div id=\"fb-root\"></div>
            <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v4.0\"></script>
            <div class=\"fb-page\" data-href=\"https://www.facebook.com/SyresTests/\" data-tabs=\"timeline\" data-height=\"738px\" style=\"width: 355px\" data-small-header=\"false\" data-adapt-container-width=\"true\" data-hide-cover=\"false\" data-show-facepile=\"true\"><blockquote cite=\"https://www.facebook.com/SyresTests/\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/SyresTests/\">Syres France Tests Cosmétiques</a></blockquote></div>
        </div>
    </div>
    {#*******************************#}

    {#/////////
    <div class=\" cont_flexn row\" style=\" text-align: center; display: flex\">
        <div class=\" newsletter-ent col-8 col-md-8\" id=\"ent\" style=\"text-align: -webkit-center; padding: 0px; background-color: rgba(255,255,255,.75); padding: 3px border: 2px solid green\">
            {% for newsletter in newsletter %}
            <h3 class=\"text_align\" style=\"margin-top: 20px; color: #2980b9; \">NEWSLETTERS</h3>

            <div class=\"styleCard\" style=\"padding-right: 0px;  margin-bottom: 20px\">
                <div class=\"aLaMemeLigne text_align divEnglobEntete\" style=\"padding-right: 0px; text-align: right; justify-content: space-between\">
                    {#  à cacher sur une md ecran # }
                    <div class=\"aCacherMd marginAuto paddingSalutation\">
                    </div>

                    <div class=\"text_align marginAuto\" id=\"imgPEntete\" style=\"text-align: left; width: 60%\">
                        {% if newsletter.imageName != null %}
                            <img class=\"myImg imgLeft1 imgEntete imgPTail\" src=\"{{ asset('./images/home_page/' ~ newsletter.imageName|url_encode) }}\">
                        {% endif %}
                    </div>

                    <div style=\"width: 40%\">
                        <div class=\"aLaLigne aCacherSml divSalutationSml\" style=\"padding-right: 0px; margin-right: 0px;\">
                            <p class=\"textDesc\">{{ newsletter.salutation }}</p>
                            <p class=\"presentation\">{{ newsletter.presentation }}</p>
                        </div>
                        <div  style=\"padding-top: 10px\">
                            <p class=\"textDesc\" style=\"margin-right: 2px\">{{ newsletter.textDesc }}</p>
                        </div>
                    </div>
                </div>

            </div>
            <hr>
            {# ************* Le caroussel *******************# }
            <div class=\"styleCard\">
            <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\" style=\"padding-right: 10px; height: 600px\">
                <!-- Indicators -->
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
                    <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
                </ol>


                <!-- Wrapper for slides -->
                <div class=\"carousel-inner\">
                    <div class=\"item active\">
                        {% if newsletter.imageNameUn != null %}
                            <img class=\"myImg imgLesTrois\" id=\"images-carousel-1\" style=\"\" src=\"{{ asset('./images/home_page/' ~ newsletter.imageNameUn|url_encode) }}\">
                        {% endif %}
                        <div class=\"carousel-caption\" id=\"cap-img-1\">
                            <h3>{{ newsletter.footerTextUn }}</h3>
                            <p>{{ newsletter.footerTextDeux }}</p>
                        </div>
                    </div>

                    <div class=\"item\">
                        {% if newsletter.imageNameDeux != null %}
                            <img class=\"myImg imgLesTrois\" id=\"images-carousel-2\" src=\"{{ asset('./images/home_page/' ~ newsletter.imageNameDeux|url_encode) }}\">
                        {% endif %}
                        <div class=\"carousel-caption\" id=\"cap-img-2\">
                            <h3>{{ newsletter.footerTextTrois }}</h3>
                            <p>{{ newsletter.footerTextQuatre }}</p>
                        </div>
                    </div>

                    <div class=\"item\">
                        {% if newsletter.imageNameTrois != null %}
                            <img class=\"myImg imgLesTrois\" id=\"images-carousel-3\" src=\"{{ asset('./images/home_page/' ~ newsletter.imageNameTrois|url_encode) }}\">
                        {% endif %}

                        <div class=\"carousel-caption\" id=\"cap-img-3\">
                            <h3>{{ newsletter.footerTextCinq }}</h3>
                            <p>{{ newsletter.footerTextSix }}</p>
                        </div>
                    </div>
                    <div class=\"item\" style=\"background-color: black\">
                        {% if newsletter.imageNameQuatre != null %}
                             <img class=\"myImg imgLesTrois\" id=\"images-carousel-4\" src=\"{{ asset('./images/home_page/' ~ newsletter.imageNameQuatre|url_encode) }}\">
                        {% endif %}

                        <div class=\"carousel-caption\" id=\"cap-img-4\">
                            <h3>{{ newsletter.footerTextSept }}</h3>
                            <p>{{ newsletter.footerTextHuit }}</p>
                        </div>
                    </div>
                </div>
                <!-- Left and right controls -->
                <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>
            </div>
        </div>

        <div class=\"col-4 col-md-4 styleCard_facebook\" style=\"/*margin-top: 70px; margin-left: 10px;*/ height: 778px\">
            <div id=\"fb-root\"></div>
            <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v4.0\"></script>
            <div class=\"fb-page\" data-href=\"https://www.facebook.com/SyresTests/\" data-tabs=\"timeline\" data-height=\"838px\" data-small-header=\"false\" data-adapt-container-width=\"true\" data-hide-cover=\"false\" data-show-facepile=\"true\"><blockquote cite=\"https://www.facebook.com/SyresTests/\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/SyresTests/\">Syres France Tests Cosmétiques</a></blockquote></div>
        </div>
    </div>

{% endfor %}
    <hr>
    {# ************* Le caroussel *******************#}
    <div class=\"styleCard\" style=\"min-height: 620px; display: none\">
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


</div>", "frontend/home/news/news_g.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/home/news/news_g.html.twig");
    }
}
