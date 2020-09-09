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

/* frontend/home/styles.home.html.twig */
class __TwigTemplate_2e32cc19259097ea06d51681fb01aa07974bed4e164d07ddb458f64f2b4ac625 extends Template
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

\t.navbar-expand-lg .navbar-nav .nav-link {
\t\tmargin:0 15px;
\t\tcolor:#03363D;
\t}
\t
\t.row {
  display: flex;
}

/* Create two equal columns that sits next to each other */
.column30 {
  flex: 30%;
  padding: 10px;
}

\t.column70 {
  flex: 70%;
  padding: 10px;
}

\t.numero-questionnaire {}
\t
    #content{
\t\tmargin: auto;
\t\tbox-shadow: none !important
    }
\t
\thtml {
\t\tscroll-behavior: smooth;
\t}
    
\t.hrs{

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
        color: #03363D;
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
        // line 100
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

    .mTopFooter{
        margin-top: 5px;
        font-size: 46px
    }

    .mB{
        background-color: #dddddd;  width: 1px;
    }

    .tSizeF{
        font-size: 46px;
    }

    .colorTextContenus{
        color: #03363D;
        font-size: 1.25em;
\t\tborder-left: 1px solid #dddddd;
\t\tborder-right: 1px solid #dddddd;
\t\tfont-weight: 500 !important;
    }

    .colorTextH{
        color: #03363D;
        font-family: 'Montserrat', sans-serif;
        font-size: 20px;
    }

    #colorTextHInstruct{
        color: #03363D;
        font-weight: 700;
        line-height: 1.25em;
        font-size: 2em!important;
    }

\t.instructions {
\t\tdisplay: flex;
\t}
\t
\t.instructionsdesc {
\t\tdisplay: flex;
\t\twidth: 50%;
\t}
\t
    body{
        font-family: 'Montserrat', sans-serif;
        font-size: 18px;
    }

    .text_alignt{
        text-align: center;
    }

    p{
        font-family: 'Montserrat', sans-serif;
        font-size: 18px;
        font-weight: 300 !important;
    }



    .sF{
        color: #03363D;
\t\tletter-spacing: 2px;
\t\ttext-transform: uppercase;
\t\tfont-weight: 600;
    }

\t.containerBody{
\t\twidth: 85%;
\t\tmargin: auto;
\t\tmax-width:980px;
\t}
\t
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

    /*.heightEmpty{
        height: 15px
    }*/

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

    .container{
        max-width: 90%;
        margin: auto;
\t\twidth:980px;
    }

    h1{
        line-height: 1.3;
\t\tfont-weight: 800;
\t\tcolor: #03363d;
\t\tfont-size: 4em;
    }
    .pSize{
        font-size: xx-large;
    }
    p{margin-bottom: 4px}


    /*//// navBar/////*/
    #navbar{
        display: none;
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
        width: 100%;
        height: 547px;
    }

    #tWelcom{
        padding: 120px 0 30px 0;
\t\ttext-align: center;
    }

    #pWelcom{
        font-size: 1.5em;
        padding-top: 13px;
    }


    .padding_50{
        padding: 60px;
    }

    #surveyList{
        /*background-color: #f9f9f9 !important*/
    }

\t#survey-description {
\t\tfont-size:1.5em;
\t}
\t
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

\t.questionnaires {
\t\tpadding: 50px 0 100px 0;
\t\tmargin: auto;
\t\twidth: inherit;
\t}
\t
\t.button {
\t\ttext-transform: uppercase;
\t\tfont-weight: 600;
\t\tfont-size: 0.75em;
\t\tletter-spacing: 2px;
\t\tpadding: 18px 40px;
\t\tbackground-color: #1CD9FF;
\t\tbox-shadow: 0 2px 13px -1px rgba(0,0,100,.1);
\t}
\t
    #divL{
        display: flex;
        margin: 20px 0;
\t\theight: 100px;
        box-shadow:0 2px 42px rgba(0,0,100,.15);
\t\ttransition:.3s;
\t\tborder-radius: 10px;
\t\ttext-align: center;
    }
\t
\t#divL:hover, #btnInstruction:hover, .label_maill:hover {
        box-shadow:0 2px 12px rgba(0,0,100,.15);
\t}
\t
    #stLN{
        text-shadow: 1px 0px 0.5px rgba(0,0,100,.15);
        color: #03363D !important;
        font-size: 3em !important;
        font-weight: 800 !important;
\t\tline-height: 100px;
    }

    #pLN{
        text-align: left;
\t\tpadding-left: 20px;
    }


    .hideG{
        display: none;
    }
    .hideP{
        display: block;
    }

    #btnL{
        width: 100%;
        cursor: -webkit-grabbing;
        cursor: grabbing;
\t\tbackground:transparent;
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
        font-weight: 300;
        font-size: 1em;
        line-height: 2.4;
        width: 100%;
        border: 1px solid #f2f2f2;
        color: #f2f2f2;
        margin-bottom: 10px;
        border-radius: 10px;
\t\tbackground: #0B97B3;
\t\tbox-shadow: 0 2px 13px -1px rgba(0,0,100,.1);
    }
\t
    ::placeholder{
        color: white;
        padding-left: 6px;
    }

\tinput#invitation_mail {
\t\tpadding-left:20px;
\t}
\t
    .label_maill{
\t\tfont-size:.75em !important;
        line-height: 2.0;
\t\tletter-spacing: 2px;
        font-weight: 600;
        padding: 10px;
\t\twidth:100% !important;
\t\tbox-shadow: 0 2px 19px -1px rgba(0,0,100,.2);
        border-radius: 10px;
        background-color: #ffffff;
        color: #0B97B3;
\t\tborder:none !important;
\t\ttransition:.3s;
    }
\t
    .label_maill:focus {
\t\tborder:none !important;
\t}
\t
    .grabbing {cursor: -webkit-grabbing; cursor: grabbing;}

    #btnInstruction{
        color: #03363d;
        background-color: #ffffff;
        border-radius: 10px;
\t\tbox-shadow: 0 2px 19px -1px rgba(0,0,100,.2);
\t\tborder:none !important;
\t\tmargin-top: 30px;
\t\ttransition:.3s;
\t\tpadding: 18px 40px;
    }
\t
    #imgInvit{
        display: block;
        width: 50%
    }

\t.img {
\t\t  height: 100%;
  width: 100%;
  object-fit:cover;
\t}
\t
    #divGInvit{
        background-color: #0a96b3 !important;
        border-radius: 5px;
        width: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #contFInvit{
        display: flex;
        align-items: initial;
\t\tmargin-top:100px;
\t\tbackground-color: #017991 !important; 
\t\tpadding-right: 0px; 
\t\tpadding-left: 0px;
\t\tposition: relative;
\t\tflex-wrap: wrap;
    }

    #h1invit{
        line-height: 1.3;
\t\tfont-weight: 800 !important;
\t\tcolor: #ffffff;
\t\tfont-size: 3em;
    }
\t
    #souTInvit{
        margin-top: 15px; 
\t\tmargin-bottom: 30px; 
\t\tcolor: white
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

    #contact{
\t\ttext-align: center; 
\t\tmargin: 130px 0 80px 0; 
\t\tfont-size: 3.5em; 
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

\t.contact-info {
\t\tcolor: #03363d;
\t\tfont-size: 2em;
\t\tfont-weight: 700 !important;
\t\tmargin: 0px;
\t\tmargin-top: 4px
\t}
\t
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

\t.tMargin {
\t\tmargin-bottom: 180px;
\t}
\t
    @media (max-width: 991.98px){
        .pln{
            margin-top: 29px !important;
            padding-left: 31px !important;
        }
\t\t.numero-questionnaire {
\t\t\ttext-align: center;
\t\t}

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
            border-bottom: 1px solid #dddddd;
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
            width: 100%;
        }
        #fInvit{
            align-items: left;
        }
        #souTInvit{
            text-align: left;
            color: white;
        }
        #h1invit{
            text-align: left;
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
            display: none !important;
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

        #divEntete2{
            width: 100%;
            height: 400px
        }
    }


    a{
        text-decoration: none;
    }
    @media only screen and (max-width: 768px) {

\t\t.numero-questionnaire {
\t\t\ttext-align: center;
\t\t}

        .mB{
            display: none;
        }

        p{
            text-align: left;
            font-weight: 400;
            font-family: 'Montserrat', sans-serif;
        }
        h1{
            font-weight: 700;
\t\t\ttext-align: left;
\t\t}
        .tMargin{
            margin-top: 10px;
        }
        #mTextInscruction{
            margin-top: 20px
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
        color: white;  
\t\tdisplay: inline-block;
        margin: 0;
        border: 0;
        cursor: pointer;
        -webkit-appearance: none;
        -webkit-font-smoothing: inherit;
        text-decoration: none !important;
        max-width: 100%;
        transition: 0.15s all ease;
    }



     #btn-mention-legale{
         text-align: center; width: 20%;
         margin-bottom: 10px;
     }
    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 30px;
        width: 80%; /* Full width */
        max-height: 85%; /* Full height */
        overflow: auto; /* Enable scroll if needed */


    }

    /* Modal Content */
    .modal-content {
        margin: auto;
        color: black;
        border: none;
    }

    /* The Close Button */
    .close {
        color: black;
        float: right;
        font-size: 28px;
        font-weight: bold;
        text-align: end;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
</style>
";
    }

    public function getTemplateName()
    {
        return "frontend/home/styles.home.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  137 => 100,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/home/styles.home.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/home/styles.home.html.twig");
    }
}
