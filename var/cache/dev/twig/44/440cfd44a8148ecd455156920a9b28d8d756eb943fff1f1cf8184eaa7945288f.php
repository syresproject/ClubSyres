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
class __TwigTemplate_ee85c9b1173095657ff5cd348fecac1c60b6367e55ee3b196ef4f59f8dcbdf97 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/home/news/news_p.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/home/news/news_p.html.twig"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  183 => 79,  174 => 76,  159 => 64,  155 => 63,  150 => 61,  141 => 55,  137 => 54,  132 => 52,  123 => 46,  119 => 45,  116 => 44,  110 => 43,  108 => 42,  99 => 36,  95 => 35,  90 => 33,  70 => 15,  64 => 13,  62 => 12,  57 => 9,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container bodyPs\" style=\"margin-bottom: 20px; display: none\">
    <div class=\"cont_flexn row\" style=\" text-align: center;\">
        <div class=\"AvantCar sticky newsletter-ent col-8 col-md-8\" id=\"ent\" style=\"text-align: -webkit-center; padding: 0px\">
            {% for newsletter in newsletter %}
                <div style=\"padding-right: 0px; width: 80%; padding-top: 20px\">
                    <h3 class=\"text_align\" style=\"margin-top: 20px; color: #2980b9; \">NEWSLETTERS</h3>
                    <div class=\"aLaMemeLigne text_align divEnglobEntete\" style=\"padding-right: 0px; text-align: right\">
                        {#  à cacher sur une md ecran #}
                        <div class=\"aCacherMd marginAuto paddingSalutation\">
                        </div>
                        <div class=\"text_align marginAuto\" id=\"imgPEntete\" style=\"text-align: right; align-content: end; padding-right: 0px;\">
                            {% if newsletter.imageName != null %}
                                <img class=\"myImg imgLeft1 imgEntete imgPTail\"   src=\"{{ asset('./images/home_page/' ~ newsletter.imageName|url_encode) }}\" style=\"width:100%\">
                            {% endif %}
                        </div>

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
                        <img class=\"myImg imgLesTrois\" style=\"text-align: center;width: 100%;  \" src=\"{{ asset('images/home_page/' ~ newsletter.imageFileUn|url_encode) }}\">
                        <div class=\"text\">
                            <h3>{{ newsletter.footerTextUn }}</h3>
                            <p>{{ newsletter.footerTextDeux }}</p>
                        </div>
                    </div>

                    <div class=\"mySlides fade\">
                        <div class=\"numbertext\">2 / 3</div>
                        {% if newsletter.imageNameDeux != null %}
                            <img class=\"myImg imgLesTrois\" src=\"{{ asset('./images/home_page/' ~ newsletter.imageNameDeux|url_encode) }}\" style=\"width: 100%; height: 360px; text-align: center; margin: auto\">
                        {% endif %}                        <div class=\"text\">
                            <h3>{{ newsletter.footerTextTrois }}</h3>
                            <p>{{ newsletter.footerTextQuatre }}</p>
                        </div>
                    </div>

                    <div class=\"mySlides fade\">
                        <div class=\"numbertext\">3 / 3</div>
                        <img class=\"myImg imgLesTrois\" style=\"text-align: center;width: 100%;  \" src=\"{{ asset('images/home_page/' ~ newsletter.imageFileTrois|url_encode) }}\">
                        <div class=\"text\">
                            <h3>{{ newsletter.footerTextCinq }}</h3>
                            <p>{{ newsletter.footerTextSix }}</p>
                        </div>
                    </div>

                    <div class=\"mySlides fade\">
                        <div class=\"numbertext\">4 / 3</div>
                        <img class=\"myImg imgLesTrois\" style=\"text-align: center;width: 100%;  \" src=\"{{ asset('images/home_page/' ~ newsletter.imageFileQuatre|url_encode) }}\">
                        <div class=\"text\">
                            <h3>{{ newsletter.footerTextSept }}</h3>
                            <p>{{ newsletter.footerTextHuit }}</p>
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
                    <p class=\"textDesc\">{{ newsletter.textDesc }}</p>
                </div>
            {% endfor %}
            <hr>
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

</div>", "frontend/home/news/news_p.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/home/news/news_p.html.twig");
    }
}
