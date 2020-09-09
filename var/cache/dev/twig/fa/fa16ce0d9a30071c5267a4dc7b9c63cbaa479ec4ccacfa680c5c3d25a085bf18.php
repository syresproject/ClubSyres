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

/* style.home.html.twig */
class __TwigTemplate_84e182ea9be95d7fba18d09b9ce8cd4e2b77cfff791fff22fb71ddb3d4a7ad3d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "style.home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "style.home.html.twig"));

        // line 1
        echo "<style>
    .divNavbarHome{
        margin: auto;
        display: flex
    }
    .h1DivNavbarHome{
        margin: auto;
        text-align: center;
        text-align: -webkit-center;
        width: 90%
    }
    .iconeLoginHome{
        top: 0vmin;
        text-align: end;
        padding-right: 1%;
    }
    .center{
        text-align: center
    }
    .container {
        /* On ajoute une marge sur les cotés de l'écran */
        padding-right: 3px;
        padding-left: 3px;

        /* Et on centre */
        margin-right: auto;
        margin-left: auto;
    }

    .text_align{
        text-align: center;
    }
    .p_align{
        text-align: center;
        padding: 0px;
        margin: 0px;
        color: #0E1112;
        font-size: 16px;
    }
    .text_align{
        text-align: center;
    }

    .paddingSalutation{
        align-content: flex-end;
        text-align: center;
        padding: 0px
    }
    .divEnglobEntete{
        align-content: center
    }

    /**** Grid ****/
    @media screen and (min-width: 768px) {

        .bodyG{
            display: block;
        }

        .bodyP{
            display: none;
        }


    }

    /**** Grid ****/
    @media screen and (min-width: 1400px) {
        #ent {
            margin-top: 48px;
        }

    }
    @media only screen and (min-width: 993px){
        .container_home{
            width: 95%;
            padding-right: 3px;
            padding-left: 3px;

            /* Et on centre */
            margin-right: auto;
            margin-left: auto;
        }

    }

    @media screen and (max-width: 768px){
        .bodyG{
            display: none;
        }
        .bodyP{
            display: block;
        }
        .carousselWid{
            height: unset;
        }
        .container {
            /* On ajoute une marge sur les cotés de l'écran */
            padding-right: 0px;
            padding-left: 0px;

            /* Et on centre */
            margin-right: auto;
            margin-left: auto;
        }

        .div sticky{
            margin-bottom: 0px;
        }
        .newsletter-enbb{
            height: 800px;
            margin-bottom: 10px;
        }
        .newsletter-ent{
            width: 100%;
        }
        .newsletter-enb{
            display: none;
        }
        .aLaLigne{
            display: inline-block;
        }
        .aCacherSml{
            display: none;
        }
        .marginAuto{
            margin: auto;
        }

        .imgLeft{
            text-align: center;
        }
        .imgLeft1{
            text-align: right;
            width: -webkit-fill-available;
        }
        .imgTail{
            width: 250px;
        }

        .imgPTail{
        }
        .imgLesTrois{
            width: 250px;
            text-align: center;
            margin: auto;
        }

        #menuPetit{
            display: block;
        }

        /****** Menu Vos Test *****/

        #menuGrend{
            display: none;
        }

    }
    @media screen and (min-width: 769px){
        #ent{
            margin-top: 70px;
        }
        .carousselWid{
            height: 500px;
        }

        .strongVosTest{
            font-weight: 500; font-size: 36; font-size: 30px;
        }
        .pVosTest{
            margin-left: 10%;
            padding-left: 20px;
            padding-top: 15%
        }

        .divVosTest{
            padding-bottom: 0px; color: #0E1112; font-size: 2px
        }

        .newsletter-enbb{
            display: none;
        }
        .cont_flex{
            display: flex;
        }
        .newsletter-ent{
            width: 70%;
            margin-top: 0px;

        }
        .newsletter-enb{
            width: 30%;

        }
        #menuPetit{
            display: none;
        }

        .aLaMemeLigne{
            display: flex;
        }
        .aCacherMd{
            display: none;
        }
        .imgEntete{
            padding-left: 10px;
            width: 55%
        }

        .imgTail{
            width: 300px;
        }

        .imgTroisieme{
            width: 400px;
            margin: auto;
        }
        .paddingSalutation{
            padding: 0px; padding-top: 65px;
        }

    }
    #imgEntete{
        padding: 5px;
        width: 60%;
        text-align: right;
    }

    #imgPEntete{
        padding: 5px;
        text-align: right;
    }

    .divSalutationSml{
        align-content: flex-end;
        text-align: center;
        padding: 0px;
        padding-top: 18px;
    }
    .img_centre{
        padding-right: 30px;
        padding-left: 30px;

        /* Et on centre */
        margin-right: auto;
        margin-left: auto;
    }
    .salutation{
        padding: 0px;
        margin: 0px;
        margin-bottom: 4px;
        color: black;
    }
    .presentation{
        padding: 0px;
        margin: 0px;
        font-size: 20px;
        color: black;
    }
    .textDesc{
        padding: 0px;
        margin: 0px;
        font-size: 18px;
        color: black;
    }

    .accordion {
        background-color: #eee;
        color: #444;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        text-align: left;
        border: none;
        outline: none;
        font-size: 15px;
        transition: 0.4s;
    }

    .active, .accordion:hover {
        background-color: #ccc;
    }

    .panel {
        padding: 0 18px;
        background-color: white;
        overflow: hidden;
    }

    .p_align {
        margin-bottom: 0px;
    }

    .home-navigation {
        padding-top: 5px;
        max-width: 100%;
        margin: auto;
    }

    .bouttonShowTestEncours{
        position: fixed;
        z-index: 997;
        background-color: #337ab7;
        padding: 3px;
        font-size: 26px;
        border-radius: 3px;
        bottom: 4px;
        right: 0px;
    }
    .divGlob{
        /*background-image: url(../img_newsletter/Holly_FRK.jpg); background-size: cover;box-shadow: inset 0 0 20vmin 0 #585247;*/
    }
    .wrap{
        position:relative;
        width:90vmin; height:90vmin;
        margin:0 auto;
        opacity:0;
        transition:transform .5s, opacity .5s;
        transform:scale(.8) translateZ(0px);
        opacity:1;
    }
    .wrap a, .wrap:hover a{
        transform:scale(1) translatez(0px);
    }


    .a{
        position:absolute;
        left:0; top:0;
        width:47.5%; height:47.5%;
        overflow:hidden;
        transform:scale(.5) translateZ(0px);
        /*background:#585247;*/
    }

    .aTest:hover{
        background:#0b84fe;
        color: white;
    }
    .aTest:hover strong{
        color: white;
    }
    .aEnquete:hover{
        background: #ADD8E6;
    }
    .aEnquete:hover strong{
    }

    .aArticle:hover{
        background:#094fdc;
    }
    .aArticle:hover strong{
        color: white ;
    }

    .aTAVenir:hover{
        background:\t#4682B4
    }
    .aTAVenir:hover strong{
        color: white;
    }

    .a div{
        height:100%;
        background-size:cover;
        /*opacity:.9;*/
        transition:opacity .5s;
        /* desactiver */
        border-radius:inherit;
    }
    .a:nth-child(1){
        border-radius:20vmin 0 0 0;
        transform-origin: 110% 110%;
        transition:transform .4s .15s;
    }
    .a:nth-child(1) div{
        /* background-image:url(../img_newsletter/Holly_FRK_8.jpg); */
    }
    .a:nth-child(2){
        border-radius:0 20vmin 0 0;
        left:55.5%;
        transform-origin: -10% 110%;
        transition:transform .4s .2s;


    }
    ";
        // line 389
        echo "    .a:nth-child(2) div{
        /* background-image:url(../img_newsletter/Holly_FRK_7.jpg); */
    }
    .a:nth-child(3){
        border-radius:0 0 0 20vmin;
        top:53.5%;
        transform-origin: 110% -10%;
        transition:transform .4s .25s;
    }
    ";
        // line 399
        echo "    .a:nth-child(3) div{
        /* background-image:url(../img_newsletter/Holly_FRK_test.jpg); */
    }
    .a:nth-child(4){
        border-radius:0 0 20vmin 0;
        top:52.5%; left:55.5%;
        transform-origin: -10% -10%;
        transition:transform .4s .3s;

    }
    ";
        // line 410
        echo "    .a:nth-child(4) div{
        /* background-image:url(../img_newsletter/Holly_FRK_6.jpg); */
    }
    .a:nth-child(5){
        width:55%;height:55%;
        left:22.5%; top:22.5%;
        border-radius:50vmin;
        box-shadow:0 0 0 5vmin #E3DFD2;
        transform:scale(1);
    }
    ";
        // line 421
        echo "    .a:nth-child(5) div{
        background-image:url('../frontend/images/victoria.jpg');
    }

    .a:nth-child(6){
        width:55%;height:55%;
        left:22.5%; top:22.5%;
        border-radius:50vmin;
        box-shadow:0 0 0 5vmin #E3DFD2;
        transform:scale(1);
    }
    .a:nth-child(6) div{
        /* background-image: url('../img_newsletter/Holly_FRK_5.jpg'); */
    }

    span{
        position:relative;
        display:block;
        margin:0 auto;
        top:45vmin;
        width:10vmin; height:10vmin;
        border-radius:100%;
        background:#585247;
        transform:translateZ(0px);
    }

    span span{
        position:absolute;
        width:60%;height:3px;
        background:#ACA696;
        left:20%; top:50%;
        border-radius:0;
    }
    span span:after, span span:before{
        content:'';
        position:absolute;
        left:0; top:-1.5vmin;
        width:100%; height:100%;
        background:inherit;
    }
    span span:after{
        top:1.5vmin;
    }

    a:hover div{
        opacity:1;
        transform:translatez(0px);
    }



    .accordion {
        background-color: #eee;
        color: #444;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        text-align: left;
        border: none;
        outline: none;
        font-size: 15px;
        transition: 0.4s;
    }

    .bouttonNewTestEncours{
        width: 80px;
        right: 15px;
        position: fixed;
        bottom: 30px;
        z-index: 997;
        background-color: #F44336 !important;
        color: white;
        padding: 3px;
        font-size: 26px;
        border-radius: 3px
    }


    div.sticky {
        position: -webkit-sticky;
        position: sticky;
        bottom: 0;
        background-color: #EFEFEF;
        padding: 50px;
        font-size: 20px;
    }

    * {box-sizing: border-box;}
    .mySlides {display: none;}
    img {vertical-align: middle;}

    /* Slideshow container */
    .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
    }

    /* Caption text */
    .text {
        color: black;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    .active {
        background-color: #717171;
    }

    /* Fading animation */
    .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
    }

    @keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
        .text {font-size: 11px}
    }
    #divB span{
        top: 0px;
    }
    .text{
        background-color: rgba(255,255,255,.75);
        padding: 4px;
    }

    .fb-page span{
        top: 0px;
    }
    #face {
        position: absolute;
        left: 0px;
        top: 1px;
        z-index: -1;
    }

    .carousel-caption{
        bottom: 300px;
        background-color: rgba(255,255,255,.75);
        padding: 4px;
    }

    .carousel-caption h3{
        color: black;
    }

    .carousel-caption p{
        color: black;
    }

    li{
        padding: 10px;
    }

    #rudr_instafeedG{
        list-style:none
    }
    #rudr_instafeedG li{
        float:left;
        width:200px;
        height:200px;
        margin:10px
    }
    #rudr_instafeedG li img{
        max-width:100%;
        max-height:100%;
    }

    /* Rotation et dézoome */
    .imgs img {
        -webkit-transform: rotate(10deg) scale(1.25);
        transform: rotate(10deg) scale(1.25);
        -webkit-transition: .3s ease-in-out;
        transition: .3s ease-in-out;
    }
    .imgs:hover img {
        -webkit-transform: rotate(0) scale(1);
        transform: rotate(0) scale(1);
    }

    div.sticky {
        position: -webkit-sticky;
        position: sticky;
        bottom: 0px;
        background-color: white;
        padding: 0px;
        font-size: 20px;
    }

    body {
        margin: 0;
        font-size: 28px;
        font-family: Arial, Helvetica, sans-serif;
        background-image: url(../img_newsletter/Holly_FRK.jpg);
        background-repeat: no-repeat;
        background-color: rgba(255,255,255,.75);
    }

    body {
        margin: 0;
        font-size: 28px;
        font-family: Arial, Helvetica, sans-serif;
    }

    .header {
        background-color: rgba(255,255,255,.75);
        padding: 1px;
        margin: 0px;
        text-align: center;
    }

    #navbar {
        overflow: hidden;
        background-color: #2980b9;
    }

    #navbar a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    #navbar a:hover {
        background-color: #ddd;
        color: black;
    }

    #navbar a.active {
        background-color: #4CAF50;
        color: white;
    }

    .content {
        padding: 16px;
    }

    .sticky {
        position: fixed;
        top: 0;
        width: 100%;
    }

    .sticky + .content {
        padding-top: 60px;
    }
</style>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "style.home.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  467 => 421,  455 => 410,  443 => 399,  432 => 389,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    .divNavbarHome{
        margin: auto;
        display: flex
    }
    .h1DivNavbarHome{
        margin: auto;
        text-align: center;
        text-align: -webkit-center;
        width: 90%
    }
    .iconeLoginHome{
        top: 0vmin;
        text-align: end;
        padding-right: 1%;
    }
    .center{
        text-align: center
    }
    .container {
        /* On ajoute une marge sur les cotés de l'écran */
        padding-right: 3px;
        padding-left: 3px;

        /* Et on centre */
        margin-right: auto;
        margin-left: auto;
    }

    .text_align{
        text-align: center;
    }
    .p_align{
        text-align: center;
        padding: 0px;
        margin: 0px;
        color: #0E1112;
        font-size: 16px;
    }
    .text_align{
        text-align: center;
    }

    .paddingSalutation{
        align-content: flex-end;
        text-align: center;
        padding: 0px
    }
    .divEnglobEntete{
        align-content: center
    }

    /**** Grid ****/
    @media screen and (min-width: 768px) {

        .bodyG{
            display: block;
        }

        .bodyP{
            display: none;
        }


    }

    /**** Grid ****/
    @media screen and (min-width: 1400px) {
        #ent {
            margin-top: 48px;
        }

    }
    @media only screen and (min-width: 993px){
        .container_home{
            width: 95%;
            padding-right: 3px;
            padding-left: 3px;

            /* Et on centre */
            margin-right: auto;
            margin-left: auto;
        }

    }

    @media screen and (max-width: 768px){
        .bodyG{
            display: none;
        }
        .bodyP{
            display: block;
        }
        .carousselWid{
            height: unset;
        }
        .container {
            /* On ajoute une marge sur les cotés de l'écran */
            padding-right: 0px;
            padding-left: 0px;

            /* Et on centre */
            margin-right: auto;
            margin-left: auto;
        }

        .div sticky{
            margin-bottom: 0px;
        }
        .newsletter-enbb{
            height: 800px;
            margin-bottom: 10px;
        }
        .newsletter-ent{
            width: 100%;
        }
        .newsletter-enb{
            display: none;
        }
        .aLaLigne{
            display: inline-block;
        }
        .aCacherSml{
            display: none;
        }
        .marginAuto{
            margin: auto;
        }

        .imgLeft{
            text-align: center;
        }
        .imgLeft1{
            text-align: right;
            width: -webkit-fill-available;
        }
        .imgTail{
            width: 250px;
        }

        .imgPTail{
        }
        .imgLesTrois{
            width: 250px;
            text-align: center;
            margin: auto;
        }

        #menuPetit{
            display: block;
        }

        /****** Menu Vos Test *****/

        #menuGrend{
            display: none;
        }

    }
    @media screen and (min-width: 769px){
        #ent{
            margin-top: 70px;
        }
        .carousselWid{
            height: 500px;
        }

        .strongVosTest{
            font-weight: 500; font-size: 36; font-size: 30px;
        }
        .pVosTest{
            margin-left: 10%;
            padding-left: 20px;
            padding-top: 15%
        }

        .divVosTest{
            padding-bottom: 0px; color: #0E1112; font-size: 2px
        }

        .newsletter-enbb{
            display: none;
        }
        .cont_flex{
            display: flex;
        }
        .newsletter-ent{
            width: 70%;
            margin-top: 0px;

        }
        .newsletter-enb{
            width: 30%;

        }
        #menuPetit{
            display: none;
        }

        .aLaMemeLigne{
            display: flex;
        }
        .aCacherMd{
            display: none;
        }
        .imgEntete{
            padding-left: 10px;
            width: 55%
        }

        .imgTail{
            width: 300px;
        }

        .imgTroisieme{
            width: 400px;
            margin: auto;
        }
        .paddingSalutation{
            padding: 0px; padding-top: 65px;
        }

    }
    #imgEntete{
        padding: 5px;
        width: 60%;
        text-align: right;
    }

    #imgPEntete{
        padding: 5px;
        text-align: right;
    }

    .divSalutationSml{
        align-content: flex-end;
        text-align: center;
        padding: 0px;
        padding-top: 18px;
    }
    .img_centre{
        padding-right: 30px;
        padding-left: 30px;

        /* Et on centre */
        margin-right: auto;
        margin-left: auto;
    }
    .salutation{
        padding: 0px;
        margin: 0px;
        margin-bottom: 4px;
        color: black;
    }
    .presentation{
        padding: 0px;
        margin: 0px;
        font-size: 20px;
        color: black;
    }
    .textDesc{
        padding: 0px;
        margin: 0px;
        font-size: 18px;
        color: black;
    }

    .accordion {
        background-color: #eee;
        color: #444;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        text-align: left;
        border: none;
        outline: none;
        font-size: 15px;
        transition: 0.4s;
    }

    .active, .accordion:hover {
        background-color: #ccc;
    }

    .panel {
        padding: 0 18px;
        background-color: white;
        overflow: hidden;
    }

    .p_align {
        margin-bottom: 0px;
    }

    .home-navigation {
        padding-top: 5px;
        max-width: 100%;
        margin: auto;
    }

    .bouttonShowTestEncours{
        position: fixed;
        z-index: 997;
        background-color: #337ab7;
        padding: 3px;
        font-size: 26px;
        border-radius: 3px;
        bottom: 4px;
        right: 0px;
    }
    .divGlob{
        /*background-image: url(../img_newsletter/Holly_FRK.jpg); background-size: cover;box-shadow: inset 0 0 20vmin 0 #585247;*/
    }
    .wrap{
        position:relative;
        width:90vmin; height:90vmin;
        margin:0 auto;
        opacity:0;
        transition:transform .5s, opacity .5s;
        transform:scale(.8) translateZ(0px);
        opacity:1;
    }
    .wrap a, .wrap:hover a{
        transform:scale(1) translatez(0px);
    }


    .a{
        position:absolute;
        left:0; top:0;
        width:47.5%; height:47.5%;
        overflow:hidden;
        transform:scale(.5) translateZ(0px);
        /*background:#585247;*/
    }

    .aTest:hover{
        background:#0b84fe;
        color: white;
    }
    .aTest:hover strong{
        color: white;
    }
    .aEnquete:hover{
        background: #ADD8E6;
    }
    .aEnquete:hover strong{
    }

    .aArticle:hover{
        background:#094fdc;
    }
    .aArticle:hover strong{
        color: white ;
    }

    .aTAVenir:hover{
        background:\t#4682B4
    }
    .aTAVenir:hover strong{
        color: white;
    }

    .a div{
        height:100%;
        background-size:cover;
        /*opacity:.9;*/
        transition:opacity .5s;
        /* desactiver */
        border-radius:inherit;
    }
    .a:nth-child(1){
        border-radius:20vmin 0 0 0;
        transform-origin: 110% 110%;
        transition:transform .4s .15s;
    }
    .a:nth-child(1) div{
        /* background-image:url(../img_newsletter/Holly_FRK_8.jpg); */
    }
    .a:nth-child(2){
        border-radius:0 20vmin 0 0;
        left:55.5%;
        transform-origin: -10% 110%;
        transition:transform .4s .2s;


    }
    {#article#}
    .a:nth-child(2) div{
        /* background-image:url(../img_newsletter/Holly_FRK_7.jpg); */
    }
    .a:nth-child(3){
        border-radius:0 0 0 20vmin;
        top:53.5%;
        transform-origin: 110% -10%;
        transition:transform .4s .25s;
    }
    {#test#}
    .a:nth-child(3) div{
        /* background-image:url(../img_newsletter/Holly_FRK_test.jpg); */
    }
    .a:nth-child(4){
        border-radius:0 0 20vmin 0;
        top:52.5%; left:55.5%;
        transform-origin: -10% -10%;
        transition:transform .4s .3s;

    }
    {#cote droit en bas#}
    .a:nth-child(4) div{
        /* background-image:url(../img_newsletter/Holly_FRK_6.jpg); */
    }
    .a:nth-child(5){
        width:55%;height:55%;
        left:22.5%; top:22.5%;
        border-radius:50vmin;
        box-shadow:0 0 0 5vmin #E3DFD2;
        transform:scale(1);
    }
    {#muluer#}
    .a:nth-child(5) div{
        background-image:url('../frontend/images/victoria.jpg');
    }

    .a:nth-child(6){
        width:55%;height:55%;
        left:22.5%; top:22.5%;
        border-radius:50vmin;
        box-shadow:0 0 0 5vmin #E3DFD2;
        transform:scale(1);
    }
    .a:nth-child(6) div{
        /* background-image: url('../img_newsletter/Holly_FRK_5.jpg'); */
    }

    span{
        position:relative;
        display:block;
        margin:0 auto;
        top:45vmin;
        width:10vmin; height:10vmin;
        border-radius:100%;
        background:#585247;
        transform:translateZ(0px);
    }

    span span{
        position:absolute;
        width:60%;height:3px;
        background:#ACA696;
        left:20%; top:50%;
        border-radius:0;
    }
    span span:after, span span:before{
        content:'';
        position:absolute;
        left:0; top:-1.5vmin;
        width:100%; height:100%;
        background:inherit;
    }
    span span:after{
        top:1.5vmin;
    }

    a:hover div{
        opacity:1;
        transform:translatez(0px);
    }



    .accordion {
        background-color: #eee;
        color: #444;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        text-align: left;
        border: none;
        outline: none;
        font-size: 15px;
        transition: 0.4s;
    }

    .bouttonNewTestEncours{
        width: 80px;
        right: 15px;
        position: fixed;
        bottom: 30px;
        z-index: 997;
        background-color: #F44336 !important;
        color: white;
        padding: 3px;
        font-size: 26px;
        border-radius: 3px
    }


    div.sticky {
        position: -webkit-sticky;
        position: sticky;
        bottom: 0;
        background-color: #EFEFEF;
        padding: 50px;
        font-size: 20px;
    }

    * {box-sizing: border-box;}
    .mySlides {display: none;}
    img {vertical-align: middle;}

    /* Slideshow container */
    .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
    }

    /* Caption text */
    .text {
        color: black;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    .active {
        background-color: #717171;
    }

    /* Fading animation */
    .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
    }

    @keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
        .text {font-size: 11px}
    }
    #divB span{
        top: 0px;
    }
    .text{
        background-color: rgba(255,255,255,.75);
        padding: 4px;
    }

    .fb-page span{
        top: 0px;
    }
    #face {
        position: absolute;
        left: 0px;
        top: 1px;
        z-index: -1;
    }

    .carousel-caption{
        bottom: 300px;
        background-color: rgba(255,255,255,.75);
        padding: 4px;
    }

    .carousel-caption h3{
        color: black;
    }

    .carousel-caption p{
        color: black;
    }

    li{
        padding: 10px;
    }

    #rudr_instafeedG{
        list-style:none
    }
    #rudr_instafeedG li{
        float:left;
        width:200px;
        height:200px;
        margin:10px
    }
    #rudr_instafeedG li img{
        max-width:100%;
        max-height:100%;
    }

    /* Rotation et dézoome */
    .imgs img {
        -webkit-transform: rotate(10deg) scale(1.25);
        transform: rotate(10deg) scale(1.25);
        -webkit-transition: .3s ease-in-out;
        transition: .3s ease-in-out;
    }
    .imgs:hover img {
        -webkit-transform: rotate(0) scale(1);
        transform: rotate(0) scale(1);
    }

    div.sticky {
        position: -webkit-sticky;
        position: sticky;
        bottom: 0px;
        background-color: white;
        padding: 0px;
        font-size: 20px;
    }

    body {
        margin: 0;
        font-size: 28px;
        font-family: Arial, Helvetica, sans-serif;
        background-image: url(../img_newsletter/Holly_FRK.jpg);
        background-repeat: no-repeat;
        background-color: rgba(255,255,255,.75);
    }

    body {
        margin: 0;
        font-size: 28px;
        font-family: Arial, Helvetica, sans-serif;
    }

    .header {
        background-color: rgba(255,255,255,.75);
        padding: 1px;
        margin: 0px;
        text-align: center;
    }

    #navbar {
        overflow: hidden;
        background-color: #2980b9;
    }

    #navbar a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    #navbar a:hover {
        background-color: #ddd;
        color: black;
    }

    #navbar a.active {
        background-color: #4CAF50;
        color: white;
    }

    .content {
        padding: 16px;
    }

    .sticky {
        position: fixed;
        top: 0;
        width: 100%;
    }

    .sticky + .content {
        padding-top: 60px;
    }
</style>

", "style.home.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/style.home.html.twig");
    }
}
