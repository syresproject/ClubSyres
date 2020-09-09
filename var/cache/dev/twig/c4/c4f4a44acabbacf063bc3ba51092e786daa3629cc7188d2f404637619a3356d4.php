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

/* frontend/Inscription/create.html.twig */
class __TwigTemplate_8d626504fdd9933f297a023bd6b87c205c88760bf56797579ad303520f9e4d10 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "frontend/inscription.layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/Inscription/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/Inscription/create.html.twig"));

        $this->parent = $this->loadTemplate("frontend/inscription.layout.html.twig", "frontend/Inscription/create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap\" rel=\"stylesheet\">
    <style>
        * {
            box-sizing: border-box;
        }

        #regForm {
            margin: 100px auto;
            padding: 40px;
            width: 70%;
            min-width: 300px;
            font-family: 'Montserrat', sans-serif;
        }

        h1 {
            text-align: center;
        }

        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            border: 1px solid #aaaaaa;
            font-family: 'Montserrat', sans-serif;
        }

        /* Mark input boxes that gets an error on validation: */
        input.invalid, select.invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */


        button {
            background-color: #0a6aa1;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 17px;
            cursor: pointer;
            font-family: 'Montserrat', sans-serif;
        }

        button:hover {
            opacity: 0.8;
        }

        #prevBtn {
            background-color: #bbbbbb;
        }

        /* Make circles that indicate the steps of the form: */
        form .step {
            height: 22px;
            width: 22px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
            padding: -13px !important;
            box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);

        }

        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #4CAF50;
        }
        fieldset{
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }


        .styleCard{
            background: white;
            border: 0 none;
            border-radius: 3px;
            box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
            padding: 20px 30px;
            box-sizing: border-box;
            width: 80%;
            margin: 0 10%;
            position: relative;
            margin-top: 0px;
            margin-bottom: 0px;
            background-color: rgba(255,255,255,.75)
        }

        body{
            font-family: 'Montserrat', sans-serif;
        }

        p{
            font-family: 'Montserrat', sans-serif;
        }
        h1{
            font-family: 'Montserrat', sans-serif;
        }
        strong{
            font-family: 'Montserrat', sans-serif;
        }
        div{
            font-family: 'Montserrat', sans-serif;
        }
        a{
            font-family: 'Montserrat', sans-serif;
        }
        span{
            font-family: 'Montserrat', sans-serif;
        }


        form{
            width: 100% !important;
        }


        fieldset{
            border: none!important;
        }



</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 141
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 142
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" media=\"screen\" href=\"screen.css\" type=\"text/css\" />
    <link rel=\"stylesheet\" media=\"print\" href=\"print.css\" type=\"text/css\" />
    <link href=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/styles/inscription.css"), "html", null, true);
        echo "\"         rel=\"stylesheet\" type=\"text/css\">
    <meta charset=\"UTF-8\" name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 149
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 150
        echo "
    ";
        // line 151
        $this->displayParentBlock("content", $context, $blocks);
        echo "


    <div class=\"container\" style=\"padding: 10px; padding-top: 0 !important; margin: auto; max-width: 992px\">

        ";
        // line 156
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 156, $this->source); })()), 'form_start');
        echo "

        <h2 style=\"text-align: center; color: #0a6aa1; margin-bottom: 20px\">FORMULAIRE D'INSCRIPTION AU PANEL SYRES</h2>

        <div style=\"text-align:center; margin-bottom: 25px\">
            <span class=\"step\">1</span>
            <span class=\"step\">2</span>
            <span class=\"step\">3</span>
            <span class=\"step\">4</span>
            <span class=\"step\">5</span>
            <span class=\"step\">6</span>
            <span class=\"step\">7</span>
            <span class=\"step\">8</span>
            <span class=\"step\">9</span>
            <span class=\"step\">10</span>
            <span class=\"step\">11</span>
            <span class=\"step\">12</span>
            <span class=\"step\">13</span>
            <span class=\"step\">14</span>
            <span class=\"step\">15</span>
            <span class=\"step\">16</span>
            <span class=\"step\">17</span>
            <span class=\"step\">18</span>
            <span class=\"step\">19</span>
            <span class=\"step\">20</span>

        </div>

        ";
        // line 184
        $this->loadTemplate("frontend/Inscription/sections/sectionUn.twig", "frontend/Inscription/create.html.twig", 184)->display($context);
        // line 185
        echo "        ";
        $this->loadTemplate("frontend/Inscription/sections/sectionDeux.twig", "frontend/Inscription/create.html.twig", 185)->display($context);
        // line 186
        echo "        ";
        $this->loadTemplate("frontend/Inscription/sections/sectionTrois.twig", "frontend/Inscription/create.html.twig", 186)->display($context);
        // line 187
        echo "        ";
        $this->loadTemplate("frontend/Inscription/sections/sectionQuatres.twig", "frontend/Inscription/create.html.twig", 187)->display($context);
        // line 188
        echo "

        <style>
            .save{
                display: none;
            }

            #subBtn{
                background-color: #2980b9;
            }
            #nextBtn{
                background-color: #2980b9;
            }
            #subFF{
                display: block !important
            }
        </style>


        <div class=\"styleCard\"  style=\"overflow:auto; padding: 5px; margin-top: 4px;\">
            <div style=\"float:right; margin-top: 5px;\">
                <button type=\"button\" class=\"previous\">Previous</button>
                <button type=\"button\" id=\"nextBtn\" class=\"next\">Next</button>
                <button type=\"button\" id=\"subBtn\" class=\"submit\">Submit</button>
            </div>
        </div>

        ";
        // line 215
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 215, $this->source); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 218
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 219
        echo "    <script src=\"https://code.jquery.com/jquery-3.4.1.js\"></script>
    <link href=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/styles/multiForm/multi-form.css"), "html", null, true);
        echo "\"    rel=\"stylesheet\" type=\"text/css\">
    <script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/scripts/multiForm/multi-form.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 227
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/scripts/multiForm/multi-form.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/scripts/multiForm/jquery.validate.js"), "html", null, true);
        echo "\"></script>


    <div>

        <script>

            //Allergie
            \$(\".descAllergie\").hide();

            \$(document).on(\"change\", \".allergie\", function (e) {
                var allergie = \$(this).val();
                allergieSelectionner(allergie);
            });

            function allergieSelectionner(allergie) {
                if (allergie === \"3\") {
                    \$(\".descAllergie\").hide();
                    \$(\".descAllergie\").attr(\"required\", false);

                }
                if (allergie === \"1\") {
                    \$(\".descAllergie\").show();
                    \$(\".descAllergie\").attr(\"required\", true);

                }
            }

            \$( \"<br><span style='padding-left: 3px; color:black'>Cela nous permet de connaître les produits que vous ne tolérez pas et donc d'éviter de vous proposer ce type de produits à tester\\n</span>\" ).insertBefore( \"#App_inscription_etesAlergique\" );
            \$( \"<br><span style='padding-left: 3px; color:black'>En saisissant ces informations, je consens expressément à ce que la société SYRES traite ces informations uniquement pour me proposer des produits adaptés à ma carnation. </span>\" ).insertBefore( \"#App_inscription_origin\" );


            //Maquillage du teint
            \$(document).on(\"change\", \".maquillageTeint\", function (e) {
                var maquillageTeint = \$(this).val();
                maquillageTeintSelectionner(maquillageTeint);
            });

            function maquillageTeintSelectionner(maquillageTeint) {
                if (maquillageTeint === \"3\") {
                    \$(\".ouAcheteMaquillage\").hide();
                    \$(\".ouAcheteMaquillage\").attr(\"required\", false);

                }
                if (maquillageTeint === \"1\") {
                    \$(\".ouAcheteMaquillage\").show();
                    \$(\".ouAcheteMaquillage\").attr(\"required\", true);

                }
            }

            // En fonction du champs selectionné je montre et caché l'autre
            \$(\".show_quatres\").hide();

            \$(document).on(\"change\", \".enfantMineur\", function (e) {
                var sexChoisiEnfant = \$(this).val();
                toogleSelectionnerEnfant(sexChoisiEnfant);
            });

            \$(document).ready(function () {
                toogleSelectionnerEnfant(\$(\".enfantMineur\").val());
            });

            function toogleSelectionnerEnfant(sexChoisiEnfant) {
                if (sexChoisiEnfant === \"1\") {
                    \$(\".hide_plus_un\").hide();
                    \$(\".show_un\").show();
                }
                if (sexChoisiEnfant === \"2\") {
                    \$(\".hide_plus_deux\").hide();
                    \$(\".show_deux\").show();
                }
                if (sexChoisiEnfant === \"3\") {
                    \$(\".hide_plus_trois\").hide();
                    \$(\".show_trois\").show();
                }
                if (sexChoisiEnfant === \"4\") {
                    \$(\".show_quatres\").show();
                    \$(\".hide_plus_quatres\").hide();
                }
                if (sexChoisiEnfant === \"plus\") {
                    \$(\".show_quatres\").show();
                }
                if (sexChoisiEnfant === \"zero\") {
                    \$(\".hide_0\").hide();
                }
            }

            //Condidtion generale d'une autres societe
            \$(\".autreS\").hide();

            \$(document).on(\"change\", \".conditionG\", function (e) {
                var conditionGenerale = \$(this).val();
                conditionGeneraleSelectionner(conditionGenerale);
            });
            \$(document).ready(function () {
                conditionGeneraleSelectionner(\$(\".conditionG\").val());
            });

            function conditionGeneraleSelectionner(conditionGenerale) {
                if (conditionGenerale === \"2\") {
                    \$(\".autreS\").hide();
                    \$(\".autreS\").attr(\"required\", false);

                }
                if (conditionGenerale === \"1\") {
                    \$(\".autreS\").show();
                    \$(\".autreS\").attr(\"required\", true);

                }
            }
        </script>
    </div>
    <script type=\"text/javascript\">
        \$(document).ready(function(){
            ";
        // line 354
        echo "            \$.validator.addMethod('username', function(value, element, param) {
                var nameRegex = /^[a-zA-Z0-9]+\$/;
                return value.match(nameRegex);
            }, 'Only a-z, A-Z, 0-9 characters are allowed');

            var val\t=\t{
                // Specify validation rules
                rules: {
                    fname: \"required\",
                    email: {
                        required: true,
                        email: true
                    },
                    vousEtes:{
                        required: true,
                    },
                    phone: {
                        required:true,
                        minlength:10,
                        maxlength:10,
                        digits:true
                    },

                    ";
        // line 400
        echo "                    username:{
                        username:true,
                        required:true,
                        minlength:4,
                        maxlength:16,
                    },
                    password:{
                        required:true,
                        minlength:8,
                        maxlength:16,
                    },

                    drone:{
                        required:true,
                    },
                    /*
                    App_inscription:{
                        required:true
                    }*/
                },
                // Specify validation error messages
                messages: {
                    drone:{
                        required: \"drone is required\",
                    },
                    fname: \t\t\"First name is required\",

                    email: {
                        required: \t\"Email is required\",
                        email: \t\t\"Please enter a valid e-mail\",
                    },

                    phone:{
                        required: \t\"Phone number is requied\",
                        minlength: \t\"Please enter 10 digit mobile number\",
                        maxlength: \t\"Please enter 10 digit mobile number\",
                        digits: \t\"Only numbers are allowed in this field\"
                    },
                    ";
        // line 458
        echo "                    username:{
                        required: \t\"Username is required\",
                        minlength: \t\"Username should be minimum 4 characters\",
                        maxlength: \t\"Username should be maximum 16 characters\",
                    },
                    password:{
                        required: \t\"Password is required\",
                        minlength: \t\"Password should be minimum 8 characters\",
                        maxlength: \t\"Password should be maximum 16 characters\",
                    }
                }
            }
            \$(\"form\").multiStepForm(
                {
                    // defaultStep:0,
                    beforeSubmit : function(form, submit){
                        console.log(\"called before submiting the form\");
                        console.log(form);
                        console.log(submit);
                    },
                    validations:val,
                }
            ).navigateTo(0);
        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontend/Inscription/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  563 => 458,  523 => 400,  498 => 354,  380 => 228,  375 => 227,  370 => 221,  366 => 220,  363 => 219,  353 => 218,  340 => 215,  311 => 188,  308 => 187,  305 => 186,  302 => 185,  300 => 184,  269 => 156,  261 => 151,  258 => 150,  248 => 149,  234 => 145,  227 => 142,  217 => 141,  71 => 5,  61 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'frontend/inscription.layout.html.twig' %}


{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap\" rel=\"stylesheet\">
    <style>
        * {
            box-sizing: border-box;
        }

        #regForm {
            margin: 100px auto;
            padding: 40px;
            width: 70%;
            min-width: 300px;
            font-family: 'Montserrat', sans-serif;
        }

        h1 {
            text-align: center;
        }

        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            border: 1px solid #aaaaaa;
            font-family: 'Montserrat', sans-serif;
        }

        /* Mark input boxes that gets an error on validation: */
        input.invalid, select.invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */


        button {
            background-color: #0a6aa1;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 17px;
            cursor: pointer;
            font-family: 'Montserrat', sans-serif;
        }

        button:hover {
            opacity: 0.8;
        }

        #prevBtn {
            background-color: #bbbbbb;
        }

        /* Make circles that indicate the steps of the form: */
        form .step {
            height: 22px;
            width: 22px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
            padding: -13px !important;
            box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);

        }

        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #4CAF50;
        }
        fieldset{
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }


        .styleCard{
            background: white;
            border: 0 none;
            border-radius: 3px;
            box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
            padding: 20px 30px;
            box-sizing: border-box;
            width: 80%;
            margin: 0 10%;
            position: relative;
            margin-top: 0px;
            margin-bottom: 0px;
            background-color: rgba(255,255,255,.75)
        }

        body{
            font-family: 'Montserrat', sans-serif;
        }

        p{
            font-family: 'Montserrat', sans-serif;
        }
        h1{
            font-family: 'Montserrat', sans-serif;
        }
        strong{
            font-family: 'Montserrat', sans-serif;
        }
        div{
            font-family: 'Montserrat', sans-serif;
        }
        a{
            font-family: 'Montserrat', sans-serif;
        }
        span{
            font-family: 'Montserrat', sans-serif;
        }


        form{
            width: 100% !important;
        }


        fieldset{
            border: none!important;
        }



</style>
{% endblock %}

{% block head %}
    {{ parent() }}
    <link rel=\"stylesheet\" media=\"screen\" href=\"screen.css\" type=\"text/css\" />
    <link rel=\"stylesheet\" media=\"print\" href=\"print.css\" type=\"text/css\" />
    <link href=\"{{ asset('frontend/styles/inscription.css') }}\"         rel=\"stylesheet\" type=\"text/css\">
    <meta charset=\"UTF-8\" name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

{% endblock %}
{% block content %}

    {{ parent() }}


    <div class=\"container\" style=\"padding: 10px; padding-top: 0 !important; margin: auto; max-width: 992px\">

        {{ form_start(formInscription) }}

        <h2 style=\"text-align: center; color: #0a6aa1; margin-bottom: 20px\">FORMULAIRE D'INSCRIPTION AU PANEL SYRES</h2>

        <div style=\"text-align:center; margin-bottom: 25px\">
            <span class=\"step\">1</span>
            <span class=\"step\">2</span>
            <span class=\"step\">3</span>
            <span class=\"step\">4</span>
            <span class=\"step\">5</span>
            <span class=\"step\">6</span>
            <span class=\"step\">7</span>
            <span class=\"step\">8</span>
            <span class=\"step\">9</span>
            <span class=\"step\">10</span>
            <span class=\"step\">11</span>
            <span class=\"step\">12</span>
            <span class=\"step\">13</span>
            <span class=\"step\">14</span>
            <span class=\"step\">15</span>
            <span class=\"step\">16</span>
            <span class=\"step\">17</span>
            <span class=\"step\">18</span>
            <span class=\"step\">19</span>
            <span class=\"step\">20</span>

        </div>

        {% include 'frontend/Inscription/sections/sectionUn.twig' %}
        {% include 'frontend/Inscription/sections/sectionDeux.twig' %}
        {% include 'frontend/Inscription/sections/sectionTrois.twig' %}
        {% include 'frontend/Inscription/sections/sectionQuatres.twig' %}


        <style>
            .save{
                display: none;
            }

            #subBtn{
                background-color: #2980b9;
            }
            #nextBtn{
                background-color: #2980b9;
            }
            #subFF{
                display: block !important
            }
        </style>


        <div class=\"styleCard\"  style=\"overflow:auto; padding: 5px; margin-top: 4px;\">
            <div style=\"float:right; margin-top: 5px;\">
                <button type=\"button\" class=\"previous\">Previous</button>
                <button type=\"button\" id=\"nextBtn\" class=\"next\">Next</button>
                <button type=\"button\" id=\"subBtn\" class=\"submit\">Submit</button>
            </div>
        </div>

        {{ form_end(formInscription) }}
    </div>
{% endblock %}
{% block javascripts %}
    <script src=\"https://code.jquery.com/jquery-3.4.1.js\"></script>
    <link href=\"{{ asset('frontend/styles/multiForm/multi-form.css') }}\"    rel=\"stylesheet\" type=\"text/css\">
    <script src=\"{{ asset('frontend/scripts/multiForm/multi-form.js') }}\"></script>

    {#
    <script src=\"https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js\"></script>
    <script type=\"text/javascript\" src=\"http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js\"></script>
    #}
    <script type=\"text/javascript\" src=\"{{ asset('frontend/scripts/multiForm/multi-form.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('frontend/scripts/multiForm/jquery.validate.js') }}\"></script>


    <div>

        <script>

            //Allergie
            \$(\".descAllergie\").hide();

            \$(document).on(\"change\", \".allergie\", function (e) {
                var allergie = \$(this).val();
                allergieSelectionner(allergie);
            });

            function allergieSelectionner(allergie) {
                if (allergie === \"3\") {
                    \$(\".descAllergie\").hide();
                    \$(\".descAllergie\").attr(\"required\", false);

                }
                if (allergie === \"1\") {
                    \$(\".descAllergie\").show();
                    \$(\".descAllergie\").attr(\"required\", true);

                }
            }

            \$( \"<br><span style='padding-left: 3px; color:black'>Cela nous permet de connaître les produits que vous ne tolérez pas et donc d'éviter de vous proposer ce type de produits à tester\\n</span>\" ).insertBefore( \"#App_inscription_etesAlergique\" );
            \$( \"<br><span style='padding-left: 3px; color:black'>En saisissant ces informations, je consens expressément à ce que la société SYRES traite ces informations uniquement pour me proposer des produits adaptés à ma carnation. </span>\" ).insertBefore( \"#App_inscription_origin\" );


            //Maquillage du teint
            \$(document).on(\"change\", \".maquillageTeint\", function (e) {
                var maquillageTeint = \$(this).val();
                maquillageTeintSelectionner(maquillageTeint);
            });

            function maquillageTeintSelectionner(maquillageTeint) {
                if (maquillageTeint === \"3\") {
                    \$(\".ouAcheteMaquillage\").hide();
                    \$(\".ouAcheteMaquillage\").attr(\"required\", false);

                }
                if (maquillageTeint === \"1\") {
                    \$(\".ouAcheteMaquillage\").show();
                    \$(\".ouAcheteMaquillage\").attr(\"required\", true);

                }
            }

            // En fonction du champs selectionné je montre et caché l'autre
            \$(\".show_quatres\").hide();

            \$(document).on(\"change\", \".enfantMineur\", function (e) {
                var sexChoisiEnfant = \$(this).val();
                toogleSelectionnerEnfant(sexChoisiEnfant);
            });

            \$(document).ready(function () {
                toogleSelectionnerEnfant(\$(\".enfantMineur\").val());
            });

            function toogleSelectionnerEnfant(sexChoisiEnfant) {
                if (sexChoisiEnfant === \"1\") {
                    \$(\".hide_plus_un\").hide();
                    \$(\".show_un\").show();
                }
                if (sexChoisiEnfant === \"2\") {
                    \$(\".hide_plus_deux\").hide();
                    \$(\".show_deux\").show();
                }
                if (sexChoisiEnfant === \"3\") {
                    \$(\".hide_plus_trois\").hide();
                    \$(\".show_trois\").show();
                }
                if (sexChoisiEnfant === \"4\") {
                    \$(\".show_quatres\").show();
                    \$(\".hide_plus_quatres\").hide();
                }
                if (sexChoisiEnfant === \"plus\") {
                    \$(\".show_quatres\").show();
                }
                if (sexChoisiEnfant === \"zero\") {
                    \$(\".hide_0\").hide();
                }
            }

            //Condidtion generale d'une autres societe
            \$(\".autreS\").hide();

            \$(document).on(\"change\", \".conditionG\", function (e) {
                var conditionGenerale = \$(this).val();
                conditionGeneraleSelectionner(conditionGenerale);
            });
            \$(document).ready(function () {
                conditionGeneraleSelectionner(\$(\".conditionG\").val());
            });

            function conditionGeneraleSelectionner(conditionGenerale) {
                if (conditionGenerale === \"2\") {
                    \$(\".autreS\").hide();
                    \$(\".autreS\").attr(\"required\", false);

                }
                if (conditionGenerale === \"1\") {
                    \$(\".autreS\").show();
                    \$(\".autreS\").attr(\"required\", true);

                }
            }
        </script>
    </div>
    <script type=\"text/javascript\">
        \$(document).ready(function(){
            {#
            \$.validator.addMethod('date', function(value, element, param) {
                return (value != 0) && (value <= 31) && (value == parseInt(value, 10));
            }, 'Please enter a valid date!');
            \$.validator.addMethod('month', function(value, element, param) {
                return (value != 0) && (value <= 12) && (value == parseInt(value, 10));
            }, 'Please enter a valid month!');
            \$.validator.addMethod('year', function(value, element, param) {
                return (value != 0) && (value >= 1900) && (value == parseInt(value, 10));
            }, 'Please enter a valid year not less than 1900!');
            #}
            \$.validator.addMethod('username', function(value, element, param) {
                var nameRegex = /^[a-zA-Z0-9]+\$/;
                return value.match(nameRegex);
            }, 'Only a-z, A-Z, 0-9 characters are allowed');

            var val\t=\t{
                // Specify validation rules
                rules: {
                    fname: \"required\",
                    email: {
                        required: true,
                        email: true
                    },
                    vousEtes:{
                        required: true,
                    },
                    phone: {
                        required:true,
                        minlength:10,
                        maxlength:10,
                        digits:true
                    },

                    {#
                    date:{
                        date:true,
                        required:true,
                        minlength:2,
                        maxlength:2,
                        digits:true
                    },
                    month:{
                        month:true,
                        required:true,
                        minlength:2,
                        maxlength:2,
                        digits:true
                    },
                    year:{
                        year:true,
                        required:true,
                        minlength:4,
                        maxlength:4,
                        digits:true
                    },
                    #}
                    username:{
                        username:true,
                        required:true,
                        minlength:4,
                        maxlength:16,
                    },
                    password:{
                        required:true,
                        minlength:8,
                        maxlength:16,
                    },

                    drone:{
                        required:true,
                    },
                    /*
                    App_inscription:{
                        required:true
                    }*/
                },
                // Specify validation error messages
                messages: {
                    drone:{
                        required: \"drone is required\",
                    },
                    fname: \t\t\"First name is required\",

                    email: {
                        required: \t\"Email is required\",
                        email: \t\t\"Please enter a valid e-mail\",
                    },

                    phone:{
                        required: \t\"Phone number is requied\",
                        minlength: \t\"Please enter 10 digit mobile number\",
                        maxlength: \t\"Please enter 10 digit mobile number\",
                        digits: \t\"Only numbers are allowed in this field\"
                    },
                    {#
                    date:{
                        required: \t\"Date is required\",
                        minlength: \t\"Date should be a 2 digit number, e.i., 01 or 20\",
                        maxlength: \t\"Date should be a 2 digit number, e.i., 01 or 20\",
                        digits: \t\"Date should be a number\"
                    },
                    month:{
                        required: \t\"Month is required\",
                        minlength: \t\"Month should be a 2 digit number, e.i., 01 or 12\",
                        maxlength: \t\"Month should be a 2 digit number, e.i., 01 or 12\",
                        digits: \t\"Only numbers are allowed in this field\"
                    },
                    year:{
                        required: \t\"Year is required\",
                        minlength: \t\"Year should be a 4 digit number, e.i., 2018 or 1990\",
                        maxlength: \t\"Year should be a 4 digit number, e.i., 2018 or 1990\",
                        digits: \t\"Only numbers are allowed in this field\"
                    },
                    #}
                    username:{
                        required: \t\"Username is required\",
                        minlength: \t\"Username should be minimum 4 characters\",
                        maxlength: \t\"Username should be maximum 16 characters\",
                    },
                    password:{
                        required: \t\"Password is required\",
                        minlength: \t\"Password should be minimum 8 characters\",
                        maxlength: \t\"Password should be maximum 16 characters\",
                    }
                }
            }
            \$(\"form\").multiStepForm(
                {
                    // defaultStep:0,
                    beforeSubmit : function(form, submit){
                        console.log(\"called before submiting the form\");
                        console.log(form);
                        console.log(submit);
                    },
                    validations:val,
                }
            ).navigateTo(0);
        });
    </script>

{% endblock %}

", "frontend/Inscription/create.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/Inscription/create.html.twig");
    }
}
