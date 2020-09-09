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
class __TwigTemplate_52156c80fd2c71e22da086c6fc5bfe127fdee86321def80aa7c2eadf768991d4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/home/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/home/show.html.twig"));

        $this->parent = $this->loadTemplate("frontend/_layout.home..html.twig", "frontend/home/show.html.twig", 1);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 84
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 85
        echo "
   ";
        // line 86
        $this->loadTemplate("/_widgets/footer.home.html.twig", "frontend/home/show.html.twig", 86)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  234 => 93,  232 => 92,  226 => 90,  216 => 89,  206 => 86,  203 => 85,  193 => 84,  177 => 78,  171 => 74,  167 => 73,  163 => 71,  161 => 70,  159 => 67,  154 => 65,  144 => 64,  134 => 62,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"frontend/_layout.home..html.twig\" %}
{% block stylesheets %}
   {{ parent() }}

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
    {% include 'style.home.html.twig' %}
{% endblock %}
{% block content %}
    {{ parent() }}
    {#*****************************#}
    {#
    <div id=\"loader\" style=\"display: flex\"></div>
    #}
    {#*************** MENU*******************#}
    <div class=\"divGlob\" id=\"divGlob\" style=\"padding-top: 6px; margin-top: 150px\">
        <span><span></span></span>
        {{ include('frontend/home/menu/menu_g.html.twig') }}
        {{ include('frontend/home/menu/menu_p.html.twig') }}
    </div>

    {#*************** NEWS *******************#}
    {{ include('frontend/home/news/news_g.html.twig') }}



{% endblock %}

{% block footer %}

   {% include '/_widgets/footer.home.html.twig' %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    {% include 'js.html.twig' %}

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
{% endblock %}
", "frontend/home/show.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/home/show.html.twig");
    }
}
