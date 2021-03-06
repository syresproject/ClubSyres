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

/* frontend/home/Original/styles.home.html.twig */
class __TwigTemplate_d2d7126b2a9355bfe3a685d4fd625288d5c16808baebf644d2412128355062e1 extends Template
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
        echo "<style>

    #content{
        /*max-width: 1080px;*/
    }

    .hrs{

    }
    .fontLink{
        font-size: 100%;
        vertical-align: baseline;
        font-family: 'Montserrat', sans-serif;
    }

    #paddingImgLogo{
        /* padding-left: 22px;*/
    }
    .Navbar {
        background-color: white;
        display: flex;
        padding: 16px;
        padding-top: 0px;
        font-family: 'Montserrat', sans-serif;
        color: white;
        height: 40px;
    }

    .Navbar__Link {
        padding-right: 10px;
        color: #3c5361;
        font-family: 'Montserrat', sans-serif;
        font-size: 20px;
    }

    .colorTextNav{
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
    }
    .Navbar__Link:hover{
        color: #07c3e7 !important;
    }


    .Navbar__Items {
        display: flex;
    }

    .Navbar__Items--right {
        margin-left:auto;
        padding-top: 10px;
    }

    .Navbar__Link-toggle {
        display: none;
    }

    .DivInstruction{
        margin: 30px;
        padding: 50px 100px 50px 100px;
        font-size: 30px;
        color: white;
        border-color: transparent;
        border-style: solid;
        border-radius: 10px;
        vertical-align: baseline;
        font-family: 'Montserrat', sans-serif;

    }


    ";
        // line 73
        echo "
    .mP{
        margin-top: auto
    }
    .divImg{
        display: flex;
        text-align: center;

    }
    .imgN{
        width: 350px;
        height: 280px;
        margin: 12px;

    }

    .tMargin{
        margin-top: 90px;
        margin-bottom: 70px;
    }

    .mTopFooter{
        margin-top: 5px;
        font-size: 46px
    }

    .mB{
        background-color: #3c5361;  width: 1px;
    }

    .tSizeF{
        font-size: 46px;
    }

    .colorTextContenus{
        color: #3c5361;
        font-family: 'Montserrat', sans-serif;
        font-size: 29px;
    }

    .colorTextH{
        color: #3c5361;
        font-family: 'Montserrat', sans-serif;
        font-size: 20px;
    }

    #colorTextHInstruct{
        color: #3c5361;
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        line-height: 1.25em;
        font-size: 3.5em!important;
    }

    body{
        font-family: 'Montserrat', sans-serif;
    }

    .text_alignt{
        text-align: center;
    }



    strong{
        font-weight: 900 !important;
        font-family: 'Montserrat', sans-serif;
    }

    p{
        font-family: 'Montserrat', sans-serif;
        font-size: 22px;
        font-weight: 300 !important;
    }



    .sF{
        font-family: 'Montserrat', sans-serif;
        color: white;
    }

    .btn_desc{
        color: white;
        height: 50px; border-radius: 5px;
        padding-left: 25px;
        padding-right: 25px;
        font: inherit;
        vertical-align: baseline;
        font-family: 'Montserrat', sans-serif;

    }

    .containerBody{
        width: 85%;
        margin: auto;
    }

    #containerBody{
        margin-top: 65px;
    }

    .space-top{
        margin-top: 10px;
    }

    .textAlignEnqueteAndTest{
        /*text-align: center*/
    }
    .h_flex{
        display: flex;
    }
    .hr{
        border: 1px solid #01c3e7;
        width: 30%;
    }
    .alignLeft{
        text-align: end;
    }

    .heightEmpty{
        height: 15px
    }

    .hIntruction{
        font-size: 50px;
        text-align: center;
        color: white;
    }

    .hTestEnc{
        margin-bottom: 4px
    }

    .navM{
        margin-top: 19px;
    }
    #mtextTnscruction{
        margin-top: 70px
    }

    .d_flex{
        display: flex; text-align: center
    }


    body{
        margin: 0px;

    }

/*
    .container{
        width: 90%;
        margin: auto;
    }

 */
    h1{
        line-height: 1.3;
    }
    .pSize{
        font-size: xx-large;
    }
    p{margin-bottom: 4px}


    /*//// navBar/////*/
    #navbar{
        display: flex;
        background-color: #01c3e7;

    }
    .navDivLeft{
        width: 70%;
    }
    .navDivRigth{
        width: 30%;
        text-align: end;
    }
    .navDivRigth span{
        display: flex;
        color: black;
        margin-left:auto;

    }

    .color_nav{
        color: white;
    }
    .d_flex_{
        display: flex;
    }

    #navbar{
        height: auto;
    }

    .navDivLeft{
        margin-bottom: 4px;
    }

    .pA{
        padding-right: 2px;
    }
    .pA{
        color: white;
    }


    #divEntete{
        width: 50%;
        height: 547px;
    }

    #tWelcom{
        padding-left: 7%;
        margin-top: 200px
    }

    #pWelcom{
        font-size: 24px;
        Roboto,Helvetica;
        color: #3c5361;
    }


    .padding_50{
        padding: 60px;
    }

    #surveyList{
        /*background-color: #f9f9f9 !important*/
    }

    .space-top{
        margin-top: 90px
    }

    #divSurveyName{
        width: 94%
    }

    #h4SurveyName{
        line-height: 2.2;
        border-radius: 5px;
        font-weight: 700;
        color: #ffffff !important;
        font-family: 'Montserrat', sans-serif;
        font-size: 1.25em;
        padding: 15px;
        background:#017991 !important
    }

    #divL{
        display: flex;
        padding-top: 20px;
        margin-bottom: 20px
    }
    #stLN{
        text-shadow: 1px 0px 0.5px rgba(0,0,0,.15);
        color: #3c5361 !important;
        font-size: 3em !important;

        font-weight: 800 !important
    }

    #pLN{
        text-align: center;
        font-size: 22px;
        margin-top: 34px;
    }


    .hideG{
        display: none;
    }
    .hideP{
        display: block;
    }

    #btnL{
        width: 100%;
        margin-top: 7px;
        background-color: white !important;
        box-shadow: 0 2px 13px -1px rgba(0,0,0,.1);
        cursor: -webkit-grabbing;
        cursor: grabbing;
        border-radius: 25px;
        margin-top: 27px !important;
    }

    #invitation_invitaionPar{
        font-family: inherit;
        font-weight: inherit;
        font-size: 1em;
        line-height: 2.4;
        max-width: 100%;
        width: 75%;
        border: 1px solid #e1e1e1;
        border-radius: 4px;
        background-color: #03363d !important;
        color: white;
        margin-bottom: 4px;
        border-radius: 8px;

    }
    #invitation_mail{
        font-family: inherit;
        font-weight: inherit;
        font-size: 1em;
        line-height: 2.4;
        max-width: 100%;
        width: 71%;
        border: 1px solid #e1e1e1;
        border-radius: 4px;
        background-color: #03363d !important;
        color: white;
        margin-bottom: 4px;
        border-radius: 8px;
        margin-left: 15px;

    }
    ::placeholder{
        color: white;
        padding-left: 6px;
    }

    .label_maill{
        font-family: inherit;
        font-weight: inherit;
        padding: 10px;
        padding-left: 20px;
        padding-right: 20px;
        line-height: 2.0;
        width: 76%;
        border: 1px solid #e1e1e1;
        border-radius: 4px;
        background-color: white;
        color: #1e73be;
        font-size: 16px;
        border-radius: 8px;
    }

    .grabbing {cursor: -webkit-grabbing; cursor: grabbing;}


    .butnInvite{
        border-radius: 25px
    }
    #btnInstruction{
        color: white;
        background-color: #03363d;
        border-radius: 25px;

    }
    #imgInvit{
        display: block;
        width: 50%
    }

    #divGInvit{
        background-color: #03363d !important;
        border-radius: 5px;
        width: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #contFInvit{
        display: flex;

        align-items: center
    }

    #h1invit{
        vertical-align: baseline;
        font-family: inherit;
        font-style: inherit;
        font-weight: inherit; color: white; font-size: 50px;
    }
    #souTInvit{
        margin-top: 10px; margin-bottom: 20px; color: white
    }

    #invitation_mail{
        border-radius: 25px;
        line-height: 3.1;
    }

    .MP{
        padding: 0px;
        margin: 0px;
        text-align: left;

        margin-bottom: 4px;
    }
    .contF{
        width: 97%;
    }


    #fInvit{
        padding: 10px
    }

    #h1C{
        text-align: center; margin: 0px; padding: 20px; font-size: 40px; margin-bottom: 50px
    }

    #divGC{
        margin-right: 10px; display: flex; text-align: center
    }

    #divLC{
        width: 50%; text-align: center
    }
    #divRC{
        width: 50%; text-align: center
    }

    #h1mailC{
        font-weight: 700; margin: 0px; margin-top: 4px
    }

    #navCC{
        color: black;
    }
    #navCIns{
        color: black;
    }
    #navCSurv{
        color: black;
    }

    #navCL{
        color: black;
    }

    #flexH{
        display: flex;
    }

    .ficon{
        font-size: 15px;
    }

    .navDivLeft{
        /*padding-left: 2%;*/
    }
    .navDivRigth{
        padding-right: 1%;
    }

    .navbar-nav{

        font-family: 'Montserrat', sans-serif;
        font-size: 14px;
        letter-spacing: 1px;
        color:#03363d

    }

    @media (max-width: 991.98px){
        .pln{
            margin-top: 29px !important;
            padding-left: 31px !important;
        }
        .hideP{
            display: none;
        }
        .navDivLeft{
            width: 100%;
            text-align: center;
        }
        .navDivRigth{
            width: 100%;
            text-align: center;
        }
        #flexH{
            display: block;
        }
        #headerC{
            width: 100%;
        }
        .nav-item{
            margin-bottom: 25px;
        }
        .navbar-nav{
            align-items: center;
            padding-top: 100px;
            margin-bottom: 200px;


        }
        #h1mailC{
            font-size: 28px;
        }
        #divRC{
            margin-top: 35px;
            text-align: center;
        }
        .mB{
            height: 1px;
            width: 100%;
            border-bottom: 1px solid black;
        }
        #divGC{
            display: block;
        }
        #divLC{
            width: 100%;
        }
        .butnInvite{
            width: 100%;
        }
        #invitation_mail{
            width: 91%;
        }
        #fInvit{
            align-items: center;
        }
        #souTInvit{
            text-align: center;
            color: white;
        }
        #h1invit{
            text-align: center;
        }
        #contFInvit{
            padding: 0px;
        }
        #divGInvit{
            width: 100%;
        }
        #imgInvit{
            display: none;
        }
        #btnInstruction{
            height: auto;
            margin-top: 20px;
        }

        .butnInvite{
            height: auto;
        }
        #iconL{
            font-size: 55px
        ;color: black;
        }
        .hideP{
            display: none;
        }
        .hideG{
            display: block;
        }
        #pLN{
            margin-top: 0px;
            font-size: 16px;
        }
        .hideGD{
            color: #0b94ea;
        }

        #stLN {
            font-size: 36px;
        }
        .padding_50{
            padding: 2px;
        }
        #imgEntete{
            display: none;
        }
        #divEntete{
            width: 100%;
            height: 400px
        }

        #tWelcom{
            padding-left: 7%;
            margin-top: 88px
        }

        #pWelcom{
            text-align: left;
            padding: 3px;
        }

    }


    a{
        text-decoration: none;
    }
    @media only screen and (max-width: 768px) {
        #tWelcom{
            padding-left: 7%;
            margin-top: 88px
        }

        .mB{
            display: none;
        }

        p{
            text-align: center;

            font-weight: 600;
            font-family: 'Montserrat', sans-serif;
        }
        h1{
            font-weight: 700;
            font-family: 'Montserrat', sans-serif;
        }
        .tMargin{
            margin-top: 10px;
        }
        #mTextInscruction{
            margin-top: 20px
        }

        .containerBody{
            width: 90%;
            padding: 4px;
        }

        .DivInstruction{
            margin: 4px;
            padding: 4px 20px 4px 10px;

        }

        .d_flex_{
            display: block;
        }

        .d_flex_{
            display: block;
        }

        .d_flex{
            display: block;
        }
        .navDivLeft{
            width: 100%;
        }

        .Navbar__Link {
            color: white;

        }

        .Navbar__Items,
        .Navbar {
            flex-direction: column;
        }

        .Navbar__Items {
            display:none;
        }

        .Navbar__Items--right {
            margin-left:0;
        }

        .Navbar{

            height: 100%;
            margin-bottom: 6px;
            padding-top: 4px;


        }

        .Cbuttn{
            color: black;
        }
        .Navbar__ToggleShow {
            display: flex;
            color: white;

            vertical-align: middle;
            height: 100%;
            width: 82%;
            text-align: center;
            padding: 80px 30px;
            list-style: none;
            margin: 0;

        }
        .Navbar{


        }

        .Navbar__Link-toggle {
            align-self: flex-end;
            display: initial;
            position: absolute;
            cursor: pointer;
        }



        .containerN{
            width: 90%;
        }



        .colorTextBody{
            color: #07c3e7 !important;
        }
    }


    .logout:hover{
        color: #07c3e7 !important;
    }

    .logout{
        text-decoration: none;
        font-size: 26px;
    }

    .btn_desc{
        color: white;  height: 50px; border-radius: 5px;
        padding-left: 25px;
        padding-right: 25px;
        font: inherit;
        vertical-align: baseline;
        font-family: 'Montserrat', sans-serif;
        display: inline-block;
        /* background-color: #2c87f0; */
        color: #fff;
        /* padding: .538em 1.077em; */
        font-family: inherit;
        font-size: .923em;
        font-weight: 400;
        margin: 0;
        border: 0;
        cursor: pointer;
        line-height: 1.65;
        -webkit-appearance: none;
        -webkit-font-smoothing: inherit;
        text-decoration: none !important;
        max-width: 100%;
        transition: 0.15s all ease;
        border-radius: -10px;

        margin-top: 30px;

    }
</style>";
    }

    public function getTemplateName()
    {
        return "frontend/home/Original/styles.home.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  110 => 73,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/home/Original/styles.home.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/home/Original/styles.home.html.twig");
    }
}
