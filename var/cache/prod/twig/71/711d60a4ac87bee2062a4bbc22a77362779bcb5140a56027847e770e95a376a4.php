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

/* frontend/home/show.html.twig */
class __TwigTemplate_ce702a246b51d7ff74df60a3f9c0646a591edb7b00a1238c773f05195175f072 extends Template
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
        return "frontend/_layout.home..html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("frontend/_layout.home..html.twig", "frontend/home/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "   ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        #divGlob{
            background-image: url(\"../images/imagesAccueil/Holly_FRK__B.jpg\");
            background-size: cover;
        }

        #cap-img-1{
            bottom: 100px;
        }
        #cap-img-2{
            bottom: 100px;
        }
        #cap-img-3{
            bottom: 100px;
        }
        #cap-img-4{
            bottom: 100px;
        }

        #images-carousel-1{
            text-align: center;width: 100%; height: 600px;
        }
        #images-carousel-2{
            width: 100%; height: 600px; text-align: center; margin: auto
        }

        #images-carousel-3{
            width: 100%; height: 600px; text-align: center; margin: auto
        }

        #images-carousel-4{
            width: 100%; height: 600px; text-align: center; margin: auto
        }

        #loader {
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid blue;
            border-bottom: 16px solid blue;
            width: 120px;
            height: 120px;
            top: 0px;
            margin: auto;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
        }

        @-webkit-keyframes spin {
            0% { -webkit-transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
    ";
        // line 62
        $this->loadTemplate("style.home.html.twig", "frontend/home/show.html.twig", 62)->display($context);
    }

    // line 64
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    ";
        // line 67
        echo "    ";
        // line 70
        echo "    ";
        // line 71
        echo "    <div class=\"divGlob\" id=\"divGlob\" style=\"padding-top: 6px; margin-top: 150px\">
        <span><span></span></span>
        ";
        // line 73
        echo twig_include($this->env, $context, "frontend/home/menu/menu_g.html.twig");
        echo "
        ";
        // line 74
        echo twig_include($this->env, $context, "frontend/home/menu/menu_p.html.twig");
        echo "
    </div>

    ";
        // line 78
        echo "    ";
        echo twig_include($this->env, $context, "frontend/home/news/news_g.html.twig");
        echo "



";
    }

    // line 84
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        echo "
   ";
        // line 86
        $this->loadTemplate("/_widgets/footer.home.html.twig", "frontend/home/show.html.twig", 86)->display($context);
    }

    // line 89
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 90
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    ";
        // line 92
        $this->loadTemplate("js.html.twig", "frontend/home/show.html.twig", 92)->display($context);
        // line 93
        echo "
    <script>

            var slideIndex = 0;
            showSlides();

            function showSlides() {
                var i;
                var slides = document.getElementsByClassName(\"mySlides\");
                var dots = document.getElementsByClassName(\"dot\");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = \"none\";
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(\" active\", \"\");
                }
                slides[slideIndex-1].style.display = \"block\";
                dots[slideIndex-1].className += \" active\";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
            }



            console.log(\"test js \")
            document.onreadystatechange = function() {
                var state = document.readyState;
                if (state === 'complete') {
                    setTimeout(function() {
                        document.getElementById('load');
                        document.getElementById('load').style.visibility = \"hidden\";
                    }, 2500);
                }
            }




            \$(document).ready(function() {
                var token = '13106059145.1677ed0.efb9381bbc574b5993fb92bff844eaaf',
                    num_photos = 10,
                    containerP = document.getElementById( 'rudr_instafeedP' ),
                    scrElement = document.createElement( 'script' );

                window.mishaProcessResultt = function( data ) {
                    for( y in data.data ){
                        containerP.innerHTML += '<li class=\"imgs\"><img src=\"' + data.data[y].images.low_resolution.url + '\"></li>';
                        console.log(y);
                    }
                }

                scrElement.setAttribute( 'src', 'https://api.instagram.com/v1/users/self/media/recent?access_token=' + token + '&count=' + num_photos + '&callback=mishaProcessResultt' );
                document.body.appendChild( scrElement );
            });


        \$(document).ready(function() {
            var token = '13106059145.1677ed0.efb9381bbc574b5993fb92bff844eaaf',
                num_photos = 10,
                container = document.getElementById( 'rudr_instafeedG' ),
                scrElement = document.createElement( 'script' );

            window.mishaProcessResult = function( data ) {
                for( x in data.data ){
                    container.innerHTML += '<li class=\"imgs\"><img src=\"' + data.data[x].images.low_resolution.url + '\"></li>';
                    console.log(x);
                }
            }

            scrElement.setAttribute( 'src', 'https://api.instagram.com/v1/users/self/media/recent?access_token=' + token + '&count=' + num_photos + '&callback=mishaProcessResult' );
            document.body.appendChild( scrElement );
        });


    </script>
";
    }

    public function getTemplateName()
    {
        return "frontend/home/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 93,  178 => 92,  172 => 90,  168 => 89,  164 => 86,  161 => 85,  157 => 84,  147 => 78,  141 => 74,  137 => 73,  133 => 71,  131 => 70,  129 => 67,  124 => 65,  120 => 64,  116 => 62,  53 => 3,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/home/show.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/home/show.html.twig");
    }
}
