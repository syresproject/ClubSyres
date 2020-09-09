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

/* frontend/Inscription/An_create.html.twig */
class __TwigTemplate_0c2e743da68e2f1538d873918aad7cbba5d9111dd1a17361fda144c7aca1164a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "/frontend/inscription.layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("/frontend/inscription.layout.html.twig", "frontend/Inscription/An_create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "

    <link href=\"https://fonts.googleapis.com/css?family=Raleway\" rel=\"stylesheet\">




    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css\">

    <link rel=\"stylesheet\" media=\"screen\" href=\"screen.css\" type=\"text/css\"/>
    <link rel=\"stylesheet\" media=\"print\" href=\"print.css\" type=\"text/css\"/>
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap\" rel=\"stylesheet\">

";
    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    <style>
        body{
            font-family: 'Montserrat', sans-serif;
        }
        p{
            font-family: 'Montserrat', sans-serif;
        }
        h2{
            font-family: 'Montserrat', sans-serif;
        }
        h1{
            font-family: 'Montserrat', sans-serif;
        }
        a{
            font-family: 'Montserrat', sans-serif;
        }
        * {
            box-sizing: border-box;
        }

        body {
            background-color: #f1f1f1;
        }

        form {
            background-color: #ffffff;
            margin: 100px auto;
            font-family: 'Montserrat', sans-serif;
            padding: 40px;
            width: 70%;
            min-width: 300px;
        }

        h1 {
            text-align: center;
        }

        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            font-family: 'Montserrat', sans-serif;
            border: 1px solid #aaaaaa;
        }

        /* Mark input boxes that gets an error on validation: */
        .inputV .invalid {
            background-color: red;
        }




        input[type=\"radio\"] .invalid{
            background-color: #ffdddd;

        }
        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        button {
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 17px;
            font-family: 'Montserrat', sans-serif;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.8;
        }

        #prevBtn {
            background-color: #bbbbbb;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #4CAF50;
        }





       div input[type=\"checkbox\"] {
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: black;
        }


        div input[type=\"radio\"] {
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: black;
        }

        .appbundle {
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: #eee;
        }
    </style>
    ";
        // line 153
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formInscription"] ?? null), 'form_start');
        echo "
    <h2 style=\"text-align: center; color: #0a6aa1;\">FORMULAIRE D'INSCRIPTION AU PANEL SYRES</h2>
        <!-- One \"tab\" for each step in the form: -->


    <div class=\"tab\">
        <div class=\"styleCard\">
            <fieldset>
                <h3 class=\"fs-subtitle\"></h3>
                <div style=\"display: grid\">
                        <span>
                            ";
        // line 167
        echo "                        </span>
                    <p>En vous inscrivant sur le panel SYRES, vous recevrez, en avant-première, des produits de
                        marques
                        à tester chez vous. Les produits testés sont des produits de consommation et principalement
                        des
                        produits cosmétiques : soin, maquillage, capillaire, solaire, hygiène… Ainsi, dès lors que
                        vous
                        êtes panéliste, vous donnez votre accord pour que la société SYRES vous contacte afin de
                        vous
                        proposer différents tests.</p>
                    <p>Tous ces produits ont été préalablement évalués en termes de sécurité (test toxicologique,
                        d’innocuité…) et ne comportent aucun risque prévisible sérieux pour un usage en conditions
                        normales d’utilisation. Les tests que nous proposons sont sur des produits déjà
                        commercialisés
                        et/ou en cours de développement.</p>
                    <p>Ils offrent les mêmes garanties que les produits que vous achetez dans le commerce, nous
                        souhaitons juste connaître votre avis sur leur efficacité et leur sensorialité ! En testant
                        ces
                        produits, vous nous retournerez des questionnaires pour donner vos impressions à différents
                        moments du test.</p>
                    <p>Les tests que nous vous proposons ne font généralement pas l’objet de rémunération.</p>
                    <p>Afin de faire partie de notre panel, merci de bien vouloir remplir ce formulaire
                        d’inscription
                        avec le plus grand soin. Certaines questions demandent obligatoirement une réponse de votre
                        part
                        afin de pouvoir enregistrer votre demande. L’absence de réponse à un champ obligatoire est
                        susceptible de compromettre la prise en compte de votre inscription.</p>
                    <p>Nous vous remercions pour le temps que vous accorderez à remplir ce formulaire.</p>
                    <div>
                        <p style=\"font-size: 20px\">Service Gestion de Panel
                            <br><strong>SYRES</strong>
                        </p>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>



        <div class=\"tab\">
            <div class=\"styleCard\">
                <fieldset>
                    <h3 class=\"fs-subtitle\"></h3>
                    <div style=\"text-align: left\">
                        <div class=\"col\">
                            ";
        // line 213
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "vousEtes", [], "any", false, false, false, 213), 'row');
        echo "
                        </div>
                        <div class=\"d_flex\">
                            <div class=\"col-left\">
                                <label for=\"appbundle_preinscription_nom\" class=\"required\">Votre nom *</label>
                                <input type=\"text\" id=\"appbundle_preinscription_nom\"
                                       name=\"appbundle_preinscription[nom]\" required=\"required\" placeholder=\"Votre nom\"
                                       class=\"class_nom form__field inputv\"/>
                                ";
        // line 221
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "nom", [], "any", false, false, false, 221), "setRendered", [], "any", false, false, false, 221);
        // line 222
        echo "                            </div>
                            <div class=\"col-right\">
                                ";
        // line 224
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "prenom", [], "any", false, false, false, 224), 'row');
        echo "
                            </div>
                        </div>

                            ";
        // line 228
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "dateDeNaissance", [], "any", false, false, false, 228), "setRendered", [], "any", false, false, false, 228);
        // line 229
        echo "                            <div id=\"output-box\"></div>

                            <div class=\"\">
                                <label for=\"appbundle_preinscription_dateDeNaissance\" class=\"required\">
                                    Date de naissance *
                                </label>
                                <input class=\"form__field\" id=\"prenomd\" type=\"date\"
                                       id=\"appbundle_preinscription_dateDeNaissance\"
                                       name=\"appbundle_preinscription[dateDeNaissance]\"
                                       max=\"2002-12-31\" required>
                            </div>
                        
                    </div>
                </fieldset>
            </div>

        </div>


    ";
        // line 251
        echo "    <div class=\"tab styleCard\">
        <fieldset>
            <div style=\"text-align: left\">
                <div class=\"d_flex\">
                    <div class=\"col-left\">
                        ";
        // line 256
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "nomAddresse", [], "any", false, false, false, 256), 'row');
        echo "
                    </div>

                    <div class=\"col-right\">
                        ";
        // line 260
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "apptEtageCouloir", [], "any", false, false, false, 260), 'row');
        echo "
                    </div>
                </div>

                <div class=\"d_flex\">
                    <div class=\"col-left\">
                        ";
        // line 266
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "addBatiment", [], "any", false, false, false, 266), 'row');
        echo "
                    </div>
                    <div class=\"col-right\">
                        ";
        // line 269
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "lieuDit", [], "any", false, false, false, 269), 'row');
        echo "
                    </div>
                </div>

                <div class=\"d_flex\">
                    <div class=\"col-left\">
                        ";
        // line 275
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "villeAddresse", [], "any", false, false, false, 275), 'row');
        echo "
                    </div>
                    <div class=\"col-right\" id=\"output\">

                        <div>
                            <label>Code postal *</label>
                            <input class=\"inputv\" type=\"text\" maxlength=\"5\" pattern=\"[0-9]{5}\"
                                   id=\"appbundle_preinscription_codePostal\"
                                   name=\"appbundle_preinscription[codePostal]\" required=\"required\"
                                   oninput=\"myFunction()\" placeholder=\"Code postal en cinq chiffres\">
                        </div>

                        <script>


                            function myFunction() {
                                const x = document.getElementById(\"appbundle_preinscription_codePostal\").value;
                                if (x.length < 5) {
                                    \$(\"#appbundle_preinscription_codePostal\").css(\"background-color\", \"#42f5ef\");
                                }
                                if (x.length === 5) {
                                    \$(\"#appbundle_preinscription_codePostal\").css(\"background-color\", \"white\");
                                }
                            }

                            function telPFunction() {
                                const telP = document.getElementById(\"appbundle_preinscription_numTelephone\").value;
                                if (telP.length < 10) {
                                    \$(\"#appbundle_preinscription_numTelephone\").css(\"background-color\", \"#42f5ef\");
                                }
                                if (telP.length === 10) {
                                    \$(\"#appbundle_preinscription_numTelephone\").css(\"background-color\", \"white\");
                                }
                            }

                            function telFixFunction() {
                                const telFix = document.getElementById(\"appbundle_preinscription_numTelDom\").value;
                                if (telFix.length < 10) {
                                    \$(\"#appbundle_preinscription_numTelDom\").css(\"background-color\", \"#42f5ef\");
                                }
                                if (telFix.length === 10) {
                                    \$(\"#appbundle_preinscription_numTelDom\").css(\"background-color\", \"white\");
                                }
                            }

                            function telBFunction() {
                                const telB = document.getElementById(\"appbundle_preinscription_numBureau\").value;
                                if (telB.length < 10) {
                                    \$(\"#appbundle_preinscription_numBureau\").css(\"background-color\", \"#42f5ef\");
                                }
                                if (telB.length === 10) {
                                    \$(\"#appbundle_preinscription_numBureau\").css(\"background-color\", \"white\");
                                }
                            }

                        </script>
                        ";
        // line 331
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "codePostal", [], "any", false, false, false, 331), "setRendered", [], "any", false, false, false, 331);
        // line 332
        echo "
                    </div>
                </div>

                <div class=\"d_flex\" style=\"margin-top: 25px\">
                    <div class=\"col-left\">
                        <label for=\"appbundle_preinscription_numTelephone\" class=\"required\">N° de téléphone
                            portable
                            *</label>
                        <input type=\"text\" maxlength=\"14\" oninput=\"telPFunction()\"
                               id=\"appbundle_preinscription_numTelephone\"
                               name=\"appbundle_preinscription[numTelephone]\"
                               required=\"required\"
                               placeholder=\"Entrez votre N° Portable en 10 chiffres\"
                               class=\"ajoutText\" pattern=\"[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}\"
                               style=\"margin-bottom: 0px\">
                        <span>Format: 0600000000</span>


                        ";
        // line 351
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "numTelephone", [], "any", false, false, false, 351), "setRendered", [], "any", false, false, false, 351);
        // line 352
        echo "
                    </div>
                    <div class=\"col-right\">
                        <label for=\"appbundle_preinscription_numTelDom\">N° de téléphone fixe </label>
                        <input maxlength=\"14\" oninput=\"telFixFunction()\"
                               type=\"text\" id=\"appbundle_preinscription_numTelDom\"
                               name=\"appbundle_preinscription[numTelDom]\"
                               placeholder=\"Entrez votre N° Fixe en 10 chiffres\"
                               class=\"ajoutText\" pattern=\"[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}\"
                               style=\"margin-bottom: 0px\">
                        <span>Format: 0100000000</span>

                        ";
        // line 364
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "numTelDom", [], "any", false, false, false, 364), "setRendered", [], "any", false, false, false, 364);
        // line 365
        echo "
                    </div>
                </div>
                <div class=\"d_flex\">
                    <div class=\"col-left\">
                        <label for=\"appbundle_preinscription_numBureau\">N° de téléphone du
                            bureau </label>
                        <input maxlength=\"14\" oninput=\"telBFunction()\" type=\"text\"
                               id=\"appbundle_preinscription_numBureau\"
                               name=\"appbundle_preinscription[numBureau]\"
                               placeholder=\"Entrez votre N° du bureau en 10 chiffres\"
                               class=\"ajoutText\" pattern=\"[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}\"
                               style=\"margin-bottom: 0px\">
                        <span>Format: 0100000000</span>
                        ";
        // line 379
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "numBureau", [], "any", false, false, false, 379), "setRendered", [], "any", false, false, false, 379);
        // line 380
        echo "
                    </div>
                    <div class=\"col-right\">
                        ";
        // line 383
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "mail", [], "any", false, false, false, 383), 'row');
        echo "
                    </div>
                </div>
                <div class=\"d_flex\">
                    <div class=\"col-left\">
                        ";
        // line 388
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "typeMobile", [], "any", false, false, false, 388), 'row');
        echo "
                    </div>
                    <div class=\"col-right\">
                        ";
        // line 391
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "tablette", [], "any", false, false, false, 391), 'row');
        echo "
                    </div>
                </div>

                <div class=\"\" style=\"margin-top: 25px\">

                    <div class=\"\" style=\"padding-top: 30;\">
                        <p></p>
                        ";
        // line 399
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "connecterSurReseauxS", [], "any", false, false, false, 399), 'row');
        echo "
                    </div>
                </div>

                <div class=\"col\">
                    <label class=\"labelCheck\" for=\"formInscription.checkboxUN\">Pour un test, accepteriez-vous
                        de
                        participer à une interview en vidéo conférence sur Skype ? *</label>
                    ";
        // line 407
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "etreRappler", [], "any", false, false, false, 407), 'row');
        echo "
                </div>

                ";
        // line 410
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "deplacementRegion", [], "any", false, false, false, 410), "setRendered", [], "any", false, false, false, 410);
        // line 411
        echo "

                <div class=\"col checkUn deplacement\" id=\"langues\" style=\"\">
                    <div id=\"appbundle_preinscription_deplacementRegion\" class=\"deplacement\">
                        <label class=\"\" for=\"formInscription.checkboxUN\">Où pouvez-vous vous déplacer
                            ?</label>
                        <div id=\"d_flex\">
                            <input
                                    type=\"checkbox\" id=\"appbundle_preinscription_deplacementRegion_0\"
                                    name=\"appbundle_preinscription[deplacementRegion][]\" value=\"869\">

                            <label
                                    for=\"appbundle_preinscription_deplacementRegion_0\">Paris 16ème</label>
                        </div>

                        <div id=\"d_flex\">
                            <input
                                    type=\"checkbox\" id=\"appbundle_preinscription_deplacementRegion_1\"
                                    name=\"appbundle_preinscription[deplacementRegion][]\" value=\"787\">

                            <label
                                    for=\"appbundle_preinscription_deplacementRegion_1\">Paris 13ème</label>
                        </div>

                        <div id=\"d_flex\">
                            <input
                                    type=\"checkbox\" id=\"appbundle_preinscription_deplacementRegion_2\"
                                    name=\"appbundle_preinscription[deplacementRegion][]\" value=\"554\">

                            <label
                                    for=\"appbundle_preinscription_deplacementRegion_2\">Pantin</label>

                        </div>

                        <div id=\"d_flex\">
                            <input
                                    type=\"checkbox\" id=\"appbundle_preinscription_deplacementRegion_3\"
                                    name=\"appbundle_preinscription[deplacementRegion][]\" value=\"774\">

                            <label
                                    for=\"appbundle_preinscription_deplacementRegion_3\">Neuilly</label>
                        </div>

                        <div id=\"d_flex\">
                            <input
                                    type=\"checkbox\" id=\"appbundle_preinscription_deplacementRegion_4\"
                                    name=\"appbundle_preinscription[deplacementRegion][]\" value=\"785\">

                            <label
                                    for=\"appbundle_preinscription_deplacementRegion_4\">Chavenay /
                                Saint-Germain-en-Laye</label>
                        </div>
                        <div id=\"d_flex\">
                            <input type=\"checkbox\"
                                   id=\"appbundle_preinscription_deplacementRegion_5\"
                                   name=\"appbundle_preinscription[deplacementRegion][]\"
                                   value=\"786\">
                            <label
                                    for=\"appbundle_preinscription_deplacementRegion_5\">Pas de déplacement
                                possible
                                trop loin</label>
                        </div>

                        <div id=\"d_flex\">
                            <input type=\"checkbox\" id=\"appbundle_preinscription_deplacementRegion_6\"
                                   name=\"appbundle_preinscription[deplacementRegion][]\" value=\"870\">
                            <label
                                    for=\"appbundle_preinscription_deplacementRegion_6\">Pontoise</label>
                        </div>
                    </div>
                </div>

            </div>
        </fieldset>
    </div>
    
    
    
    
    
    
    
    
    
    
    

        <div class=\"tab\">Name:
            <p><input placeholder=\"First name...\" oninput=\"this.className = ''\" name=\"fname\"></p>
            <p><input placeholder=\"Last name...\" oninput=\"this.className = ''\" name=\"lname\"></p>

                <input  type=\"radio\" id=\"appbundle_preinscription_visageIntolerante_0\"
                                    name=\"appbundle_preinscription[visageIntolerante]\" value=\"1\" required>
                            <label
                                    for=\"appbundle_preinscription_visageIntolerante_0\">Oui</label>
                            <input type=\"radio\"
                                   id=\"appbundle_preinscription_visageIntolerante_1\"
                                   name=\"appbundle_preinscription[visageIntolerante]\"
                                   value=\"3\" required>
                            <label
                                    for=\"appbundle_preinscription_visageIntolerante_1\">Non</label>


            ";
        // line 520
        echo "            <div class=\"col checkUn deplacement\" id=\"langues\" style=\"\">
                <div id=\"appbundle_preinscription_deplacementRegion\" class=\"deplacement\">
                    <label class=\"\" for=\"formInscription.checkboxUN\">Où pouvez-vous vous déplacer
                        ?</label>
                    <div id=\"d_flex\">
                        <input
                                type=\"checkbox\" class=\"appbundle\"
                                name=\"appbundle_preinscription[deplacementRegion][]\" value=\"869\">

                        <label
                                for=\"appbundle_preinscription_deplacementRegion_0\">Paris 16ème</label>
                    </div>

                    <div id=\"d_flex\">
                        <input
                                type=\"checkbox\" class=\"appbundle\"
                                name=\"appbundle_preinscription[deplacementRegion][]\" value=\"787\">

                        <label
                                for=\"appbundle_preinscription_deplacementRegion_1\">Paris 13ème</label>
                    </div>

                    <div id=\"d_flex\">
                        <input
                                type=\"checkbox\" class=\"appbundle\"
                                name=\"appbundle_preinscription[deplacementRegion][]\" value=\"554\">

                        <label
                                for=\"appbundle_preinscription_deplacementRegion_2\">Pantin</label>

                    </div>

                    <div id=\"d_flex\">
                        <input
                                type=\"checkbox\" class=\"appbundle\"
                                name=\"appbundle_preinscription[deplacementRegion][]\" value=\"774\">

                        <label
                                for=\"appbundle_preinscription_deplacementRegion_3\">Neuilly</label>
                    </div>

                    <div id=\"d_flex\">
                        ";
        // line 571
        echo "                        <input
                                type=\"checkbox\" class=\"appbundle\"
                                name=\"appbundle_preinscription[deplacementRegion][]\" value=\"785\">

                        <label
                                for=\"appbundle_preinscription_deplacementRegion_4\">Chavenay /
                            Saint-Germain-en-Laye</label>
                    </div>
                </div>
            </div>




            ";
        // line 591
        echo "        </div>
        <div class=\"tab\">Contact Info:
            <p><input placeholder=\"E-mail...\" oninput=\"this.className = ''\" name=\"email\"></p>
            <p><input placeholder=\"Phone...\" oninput=\"this.className = ''\" name=\"phone\"></p>
                <input  type=\"radio\" id=\"appbundle_preinscription_visageIntolerante_00\"
                                    name=\"appbundle_preinscription0[visageIntolerante]\" value=\"1\" required>
                            <label
                                    for=\"appbundle_preinscription_visageIntolerante_00\">Oui</label>
                            <input type=\"radio\"
                                   id=\"appbundle_preinscription_visageIntolerante_11\"
                                   name=\"appbundle_preinscription1[visageIntolerante]\"
                                   value=\"3\" required>
                            <label
                                    for=\"appbundle_preinscription_visageIntolerante_11\">Non</label>
        </div>
        <div class=\"tab\">Birthday:
            <p><input placeholder=\"dd\" oninput=\"this.className = ''\" name=\"dd\"></p>
            <p><input placeholder=\"mm\" oninput=\"this.className = ''\" name=\"mm\"></p>
            <p><input placeholder=\"yyyy\" oninput=\"this.className = ''\" name=\"yyyy\"></p>
        </div>
        <div class=\"tab\">Login Info:
            <p><input placeholder=\"Username...\" oninput=\"this.className = ''\" name=\"uname\"></p>
            <p><input placeholder=\"Password...\" oninput=\"this.className = ''\" name=\"password\" type=\"password\"></p>
        </div>
        <div style=\"overflow:auto;\">
            <div style=\"float:right;\">
                <button type=\"button\" id=\"prevBtn\" onclick=\"nextPrev(-1)\">Previous</button>
                <button type=\"button\" id=\"nextBtn\" onclick=\"nextPrev(1)\">Next</button>
            </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style=\"text-align:center;margin-top:40px;\">
            <span class=\"step\"></span>
            <span class=\"step\"></span>
            <span class=\"step\"></span>
            <span class=\"step\"></span>
            <span class=\"step\"></span>
        </div>
    ";
        // line 629
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formInscription"] ?? null), 'form_end');
        echo "







";
    }

    // line 639
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 640
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
            let currentTab = 0; // Current tab is set to be the first tab (0)
            showTab(currentTab); // Display the current tab

            function showTab(n) {
                // This function will display the specified tab of the form...
                var x = document.getElementsByClassName(\"tab\");
                x[n].style.display = \"block\";
                //... and fix the Previous/Next buttons:
                if (n === 0) {
                    document.getElementById(\"prevBtn\").style.display = \"none\";
                } else {
                    document.getElementById(\"prevBtn\").style.display = \"inline\";
                }
                if (n === (x.length - 1)) {
                    document.getElementById(\"nextBtn\").innerHTML = \"Submit\";
                } else {
                    document.getElementById(\"nextBtn\").innerHTML = \"Next\";
                }
                //... and run a function that will display the correct step indicator:
                fixStepIndicator(n)
            }

            function nextPrev(n) {
                // This function will figure out which tab to display
                var x = document.getElementsByClassName(\"tab\");
                // Exit the function if any field in the current tab is invalid:
                if (n == 1 && !validateForm()) return false;
                // Hide the current tab:
                x[currentTab].style.display = \"none\";
                // Increase or decrease the current tab by 1:
                currentTab = currentTab + n;
                // if you have reached the end of the form...
                console.log('Currentabe', currentTab);
                console.log('La tail du x.length', x.length);
                if (currentTab >= x.length) {
                    // ... the form gets submitted:
                    \$('#nextBtn').addClass(\"submitMultiForm\");
                    //document.getElementById(\"regForm\").submit();
                    return false;
                }
                // Otherwise, display the correct tab:
                showTab(currentTab);
            }


            function validateForm() {
                // This function deals with validation of the form fields
                var x, y, i, valid = true;
                x = document.getElementsByClassName(\"tab\");
                //C'est ici, j'ai pense que le selecter à un probleme . quand j'applique du css ça ne marche pas.
                //ou est le css pour le chnager red


                y = x[currentTab].getElementsByClassName(\"inputv\");
                console.log('y',y);
                // A loop that checks every input field in the current tab:
                //              console.log('y',y);test ça existe pas ça  ByTagName(\"inputv\"); .
                for (i = 0; i < y.length; i++) {
                    // If a field is empty...
                    //console.log('yi',y[i]);
                    //ici si inpuut est vide il doit bloqué et mettre de border red
                    //mais, ce ne pas ce qui ce passe.
                    if (y[i].value == \"\" && y[i].type =='text' ||y[i].value == \"\" && y[i].type =='date' ) {
                        // add an \"invalid\" class to the field:

                        //c'est ici bloqué inputV exist dans tous les inputs? oui si il est visible
                        // ou est-il dans html?arrete
                        y[i].className += \" invalid\";
                        valid = false;

                        if (currentTab === 2) {
                            //ici ici pour debloquer //non pour changé le css
                            \$(\".inputv\").css({\"border\": \"2px solid red\", \"color\": \"black\"});
                        }

                        // and set the current valid status to false
                        //je pense parce que tu as en condition type text
                        //quelle est le type de select?
                        //Non c'est un input . inoutV est correct Mais le css ne s'applique pas.
                    }


                }


                function verifSex() {
                    if( !\$('#App_preinscription_vousEtes').val() ) {

                        \$(\"#App_preinscription_vousEtes\").css({ \"border\": \"2px solid red\", \"color\": \"black\" });

                        console.log(\"sex\");
                        valid= false;

                    }
                }


                //const expr = 'Papayas';
                /*
                switch (currentTab) {
                    case currentTab === 1:
                        verifSex();

                        break;
                    case currentTab === 2:
                        verifCheckbox();
                        break;
                    default:
                        currentTab
                }

                */

                if (currentTab === 1){
                    verifSex();

                } else if (currentTab === 2){
                    verifCheckbox();
                }






               function verifRadio() {

                   if(valid){
                       let isChecked= false;
                       /**etpourquoi :visible? car on a 4 tab si on click next le current tab est transform invisible
                        * et le next tab = visible on valid just les inputs de tab qui est visible pour le moment  d'accord.
                        **/
                       \$('.tab:visible > input:radio').each(function () {
                           console.log(\$(this));
                           if(isChecked){
                               return true;
                           }
                           if (\$(this).is(':checked')) {
                               isChecked=true;
                           }
                       });
                       valid = isChecked;
                   }
                   console.log('cccc');
               }

                function verifCheckbox() {
                    if(valid){
                        if(\$('.appbundle:checkbox:checked').length == 0){
                            valid= false;
                            \$(\".appbundle\").css({ \"border\": \"2px solid red\", \"color\": \"black\" });

                        }
                    }
                }


                ";
        // line 823
        echo "                //si j'ai mets un checkbox ça ne doit pas bloqué . si tu as plus de 2 checkbox il est mieux d'utiliser select regarde
                // If the valid status is true, mark the step as finished and valid:
                if (valid) {
                    document.getElementsByClassName(\"step\")[currentTab].className += \" finish\";
                }
                console.log('valid',valid);
                return valid; // return the valid status
            }

            function fixStepIndicator(n) {
                // This function removes the \"active\" class of all steps...
                var i, x = document.getElementsByClassName(\"step\");
                for (i = 0; i < x.length; i++) {
                    x[i].className = x[i].className.replace(\" active\", \"\");
                }
                //... and adds the \"active\" class on the current step:
                x[n].className += \" active\";
            }

        </script>

";
    }

    public function getTemplateName()
    {
        return "frontend/Inscription/An_create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  911 => 823,  747 => 640,  743 => 639,  730 => 629,  690 => 591,  674 => 571,  630 => 520,  525 => 411,  523 => 410,  517 => 407,  506 => 399,  495 => 391,  489 => 388,  481 => 383,  476 => 380,  474 => 379,  458 => 365,  456 => 364,  442 => 352,  440 => 351,  419 => 332,  417 => 331,  358 => 275,  349 => 269,  343 => 266,  334 => 260,  327 => 256,  320 => 251,  299 => 229,  297 => 228,  290 => 224,  286 => 222,  284 => 221,  273 => 213,  225 => 167,  210 => 153,  75 => 19,  71 => 18,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/Inscription/An_create.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/Inscription/An_create.html.twig");
    }
}
