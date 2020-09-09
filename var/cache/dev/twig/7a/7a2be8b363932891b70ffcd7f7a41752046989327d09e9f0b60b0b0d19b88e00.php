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

/* frontend/Inscription/sections/sectionUn.twig */
class __TwigTemplate_ed8c23c4eec1faaef59c98e6bc68e7c28c8092847826c0327eac90985c397ad5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/Inscription/sections/sectionUn.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/Inscription/sections/sectionUn.twig"));

        // line 1
        echo "<div class=\"tab\">
    <div class=\"styleCard\">
        <h3 class=\"fs-subtitle\"></h3>
        <div style=\"display: grid\">
            ";
        // line 10
        echo "            <p>En vous inscrivant sur le panel SYRES, vous recevrez, en avant-première, des produits de marques
                à tester chez vous. Les produits testés sont des produits de consommation et principalement des
                produits cosmétiques : soin, maquillage, capillaire, solaire, hygiène… Ainsi, dès lors que vous
                êtes panéliste, vous donnez votre accord pour que la société SYRES vous contacte afin de vous
                proposer différents tests.</p>
            <p>Tous ces produits ont été préalablement évalués en termes de sécurité (test toxicologique,
                d’innocuité…) et ne comportent aucun risque prévisible sérieux pour un usage en conditions
                normales d’utilisation. Les tests que nous proposons sont sur des produits déjà commercialisés
                et/ou en cours de développement.</p>
            <p>Ils offrent les mêmes garanties que les produits que vous achetez dans le commerce, nous
                souhaitons juste connaître votre avis sur leur efficacité et leur sensorialité ! En testant ces
                produits, vous nous retournerez des questionnaires pour donner vos impressions à différents
                moments du test.</p>
            <p>Les tests que nous vous proposons ne font généralement pas l’objet de rémunération.</p>
            <p>Afin de faire partie de notre panel, merci de bien vouloir remplir ce formulaire d’inscription
                avec le plus grand soin. Certaines questions demandent obligatoirement une réponse de votre part
                afin de pouvoir enregistrer votre demande. L’absence de réponse à un champ obligatoire est
                susceptible de compromettre la prise en compte de votre inscription.</p>
            <p>Nous vous remercions pour le temps que vous accorderez à remplir ce formulaire.</p>
            <div>
                <p style=\"font-size: 20px\">Service Gestion de Panel
                    <br><strong>SYRES</strong>
                </p>
            </div>
        </div>
    </div>
</div>

<div class=\"tab\">
    <hr id=\"ide\">
    <div class=\"styleCard\">
        <fieldset>
            <h3 class=\"fs-subtitle\"></h3>
            <div style=\"text-align: left\">
                <div class=\"col\">
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 45, $this->source); })()), "vousEtes", [], "any", false, false, false, 45), 'row');
        echo "
                </div>
                <div class=\"d_flex\">
                    <div class=\"col-left\">
                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 49, $this->source); })()), "nom", [], "any", false, false, false, 49), 'row');
        echo "
                    </div>
                    <div class=\"col-right\">
                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 52, $this->source); })()), "prenom", [], "any", false, false, false, 52), 'row');
        echo "
                    </div>
                </div>
                <div class=\"col\">
                    ";
        // line 57
        echo "                    <div id=\"output-box\"></div>
                    <div>
                        <label for=\"App_inscription_dateDeNaissance\" class=\"required\">Date de naissance *</label>
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 60, $this->source); })()), "dateDeNaissance", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => ""]]);
        echo "

                        ";
        // line 67
        echo "                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</div>

<div class=\"tab\">
    <hr id=\"add\">
    <div class=\"styleCard\">
        <fieldset>
            <div style=\"text-align: left\">
                <div class=\"d_flex\">
                    <div class=\"col-left\">
                        ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 81, $this->source); })()), "nomAddresse", [], "any", false, false, false, 81), 'row');
        echo "
                    </div>

                    <div class=\"col-right\">
                        ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 85, $this->source); })()), "apptEtageCouloir", [], "any", false, false, false, 85), 'row');
        echo "
                    </div>
                </div>

                <div class=\"d_flex\">
                    <div class=\"col-left\">
                        ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 91, $this->source); })()), "addBatiment", [], "any", false, false, false, 91), 'row');
        echo "
                    </div>
                    <div class=\"col-right\">
                        ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 94, $this->source); })()), "lieuDit", [], "any", false, false, false, 94), 'row');
        echo "
                    </div>
                </div>

                <div class=\"d_flex\">
                    <div class=\"col-left\">
                        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 100, $this->source); })()), "villeAddresse", [], "any", false, false, false, 100), 'row');
        echo "
                    </div>
                    <div class=\"col-right\" id=\"output\">

                        <div>
                            <label>Code postal *</label>
                            <input type=\"text\" maxlength=\"5\" pattern=\"[0-9]{5}\" id=\"App_inscription_codePostal\" name=\"App_inscription[codePostal]\" required=\"required\" oninput=\"myFunction()\" placeholder=\"Code postal en cinq chiffres\">
                        </div>
                        ";
        // line 108
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 108, $this->source); })()), "codePostal", [], "any", false, false, false, 108), "setRendered", [], "any", false, false, false, 108);
        // line 109
        echo "                        <script>


                            function myFunction() {
                                const x = document.getElementById(\"App_inscription_codePostal\").value;
                                if(x.length < 5) {
                                    \$(\"#App_inscription_codePostal\").css(\"background-color\",\"#42f5ef\");
                                }
                                if(x.length === 5) {
                                    \$(\"#App_inscription_codePostal\").css(\"background-color\",\"white\");
                                }
                            }

                            function telPFunction() {
                                const telP = document.getElementById(\"App_inscription_numTelephone\").value;
                                if(telP.length < 10) {
                                    \$(\"#App_inscription_numTelephone\").css(\"background-color\",\"#42f5ef\");
                                }
                                if(telP.length === 10) {
                                    \$(\"#App_inscription_numTelephone\").css(\"background-color\",\"white\");
                                }
                            }

                            function telFixFunction() {
                                const telFix = document.getElementById(\"App_inscription_numTelDom\").value;
                                if(telFix.length < 10) {
                                    \$(\"#App_inscription_numTelDom\").css(\"background-color\",\"#42f5ef\");
                                }
                                if(telFix.length === 10) {
                                    \$(\"#App_inscription_numTelDom\").css(\"background-color\",\"white\");
                                }
                            }

                            function telBFunction() {
                                const telB = document.getElementById(\"App_inscription_numBureau\").value;
                                if(telB.length < 10) {
                                    \$(\"#App_inscription_numBureau\").css(\"background-color\",\"#42f5ef\");
                                }
                                if(telB.length === 10) {
                                    \$(\"#App_inscription_numBureau\").css(\"background-color\",\"white\");
                                }
                            }

                        </script>
                    </div>
                </div>

                <div class=\"d_flex\" style=\"margin-top: 25px\">
                    <div class=\"col-left\">
                        <label for=\"App_inscription_numTelephone\" class=\"required\">N° de téléphone portable
                            *</label>
                        <input type=\"text\" maxlength=\"14\" oninput=\"telPFunction()\" id=\"App_inscription_numTelephone\"
                               name=\"App_inscription[numTelephone]\"
                               required=\"required\"
                               placeholder=\"Entrez votre N° Portable en 10 chiffres\"
                               class=\"ajoutText\" pattern=\"[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}\" style=\"margin-bottom: 0px\">
                        <span>Format: 0600000000</span>



                        ";
        // line 169
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 169, $this->source); })()), "numTelephone", [], "any", false, false, false, 169), "setRendered", [], "any", false, false, false, 169);
        // line 170
        echo "                    </div>
                    <div class=\"col-right\">
                        <label for=\"App_inscription_numTelDom\">N° de téléphone fixe </label>
                        <input maxlength=\"14\" oninput=\"telFixFunction()\"
                               type=\"text\" id=\"App_inscription_numTelDom\"
                               name=\"App_inscription[numTelDom]\"
                               placeholder=\"Entrez votre N° Fixe en 10 chiffres\"
                               class=\"ajoutText\" pattern=\"[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}\" style=\"margin-bottom: 0px\">
                        <span>Format: 0100000000</span>

                        ";
        // line 180
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 180, $this->source); })()), "numTelDom", [], "any", false, false, false, 180), "setRendered", [], "any", false, false, false, 180);
        // line 181
        echo "
                    </div>
                </div>
                <div class=\"d_flex\">
                    <div class=\"col-left\">
                        <label for=\"App_inscription_numBureau\">N° de téléphone du
                            bureau </label>
                        <input maxlength=\"14\" oninput=\"telBFunction()\" type=\"text\" id=\"App_inscription_numBureau\"
                               name=\"App_inscription[numBureau]\"
                               placeholder=\"Entrez votre N° du bureau en 10 chiffres\"
                               class=\"ajoutText\" pattern=\"[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}\" style=\"margin-bottom: 0px\">
                        <span>Format: 0100000000</span>
                        ";
        // line 193
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 193, $this->source); })()), "numBureau", [], "any", false, false, false, 193), "setRendered", [], "any", false, false, false, 193);
        // line 194
        echo "
                    </div>
                    <div class=\"col-right\">
                        ";
        // line 197
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 197, $this->source); })()), "mail", [], "any", false, false, false, 197), 'row');
        echo "
                    </div>
                </div>
                <div class=\"d_flex\">
                    <div class=\"col-left\">
                        ";
        // line 202
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 202, $this->source); })()), "typeMobile", [], "any", false, false, false, 202), 'row');
        echo "
                    </div>
                    <div class=\"col-right\">
                        ";
        // line 205
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 205, $this->source); })()), "tablette", [], "any", false, false, false, 205), 'row');
        echo "
                    </div>
                </div>

                <div class=\"\" style=\"margin-top: 25px\">
                    <div class=\"\" style=\"padding-top: 30;\">
                        <p></p>
                        ";
        // line 212
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 212, $this->source); })()), "connecterSurReseauxS", [], "any", false, false, false, 212), 'row');
        echo "
                    </div>
                </div>
                <div class=\"col\">
                    <label class=\"labelCheck\" for=\"formInscription.checkboxUN\">Pour un test, accepteriez-vous de
                        participer à une interview en vidéo conférence sur Skype ? *</label>
                    ";
        // line 218
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 218, $this->source); })()), "etreRappler", [], "any", false, false, false, 218), 'row');
        echo "
                </div>
                ";
        // line 220
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 220, $this->source); })()), "deplacementRegion", [], "any", false, false, false, 220), "setRendered", [], "any", false, false, false, 220);
        // line 221
        echo "                <div class=\"col checkUn deplacement\" id=\"langues\" style=\"\">
                    <div id=\"App_inscription_deplacementRegion\" class=\"deplacement\">
                        <label class=\"\" for=\"formInscription.checkboxUN\">Où pouvez-vous vous déplacer ?</label>
                        <div id=\"d_flex\">
                            <input
                                    type=\"checkbox\" id=\"App_inscription_deplacementRegion_0\"
                                    name=\"App_inscription[deplacementRegion][]\" value=\"869\">

                            <label
                                    for=\"App_inscription_deplacementRegion_0\">Paris 16ème</label>
                        </div>

                        <div id=\"d_flex\">
                            <input
                                    type=\"checkbox\" id=\"App_inscription_deplacementRegion_1\"
                                    name=\"App_inscription[deplacementRegion][]\" value=\"787\">

                            <label
                                    for=\"App_inscription_deplacementRegion_1\">Paris 13ème</label>
                        </div>

                        <div id=\"d_flex\">
                            <input
                                    type=\"checkbox\" id=\"App_inscription_deplacementRegion_2\"
                                    name=\"App_inscription[deplacementRegion][]\" value=\"554\">

                            <label
                                    for=\"App_inscription_deplacementRegion_2\">Pantin</label>

                        </div>

                        <div id=\"d_flex\">
                            <input
                                    type=\"checkbox\" id=\"App_inscription_deplacementRegion_3\"
                                    name=\"App_inscription[deplacementRegion][]\" value=\"774\">

                            <label
                                    for=\"App_inscription_deplacementRegion_3\">Neuilly</label>
                        </div>

                        <div id=\"d_flex\">
                            <input
                                    type=\"checkbox\" id=\"App_inscription_deplacementRegion_4\"
                                    name=\"App_inscription[deplacementRegion][]\" value=\"785\">

                            <label
                                    for=\"App_inscription_deplacementRegion_4\">Chavenay /
                                Saint-Germain-en-Laye</label>
                        </div>
                        <div id=\"d_flex\">
                            <input type=\"checkbox\"
                                   id=\"App_inscription_deplacementRegion_5\"
                                   name=\"App_inscription[deplacementRegion][]\"
                                   value=\"786\">
                            <label
                                    for=\"App_inscription_deplacementRegion_5\">Pas de déplacement possible,
                                trop loin</label>
                        </div>

                        <div id=\"d_flex\">
                            <input type=\"checkbox\" id=\"App_inscription_deplacementRegion_6\"
                                   name=\"App_inscription[deplacementRegion][]\" value=\"870\">
                            <label
                                    for=\"App_inscription_deplacementRegion_6\">Pontoise</label>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</div>

<div class=\"tab\">
    <hr id=\"prof\">
    <div class=\"styleCard\">
        <fieldset>
            <div>
                <div>
                    ";
        // line 299
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 299, $this->source); })()), "profession", [], "any", false, false, false, 299), 'row');
        echo "
                </div>
                <div>
                    ";
        // line 302
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 302, $this->source); })()), "domaineMetier", [], "any", false, false, false, 302), 'row');
        echo "
                </div>
            </div>

            <h4 class=\"fs-title\">ALLERGIES</h4>

            <div>
                <div>
                    ";
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 310, $this->source); })()), "etesAlergique", [], "any", false, false, false, 310), 'row');
        echo "
                </div>
                <div class=\"descAllergie\">
                    ";
        // line 313
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 313, $this->source); })()), "descAlergique", [], "any", false, false, false, 313), 'row');
        echo "
                </div>
            </div>

            <h4 class=\"fs-title\">TESTS CONSOMMATEURS</h4>

            <div>
                <div class=\"conditionG\">
                    ";
        // line 321
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 321, $this->source); })()), "connaissezCondition", [], "any", false, false, false, 321), 'row');
        echo "
                </div>
                <div class=\"autreS\">
                    ";
        // line 324
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 324, $this->source); })()), "societeInscrit", [], "any", false, false, false, 324), 'row');
        echo "
                </div>
            </div>
            <h4 class=\"fs-title\">AUTRES INFORMATIONS</h4>
            <div>
                <div class=\"col \">
                    ";
        // line 330
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 330, $this->source); })()), "fumezVous", [], "any", false, false, false, 330), 'row');
        echo "
                </div>
                <div class=\"col \">
                    ";
        // line 333
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 333, $this->source); })()), "vapotezVous", [], "any", false, false, false, 333), 'row');
        echo "
                </div>
                <div class=\"col \">
                    ";
        // line 336
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 336, $this->source); })()), "zonePollue", [], "any", false, false, false, 336), 'row');
        echo "
                </div>
                <div class=\"col \">
                    ";
        // line 339
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 339, $this->source); })()), "utilisezProduitBio", [], "any", false, false, false, 339), 'row');
        echo "
                </div>
            </div>

        </fieldset>
    </div>
</div>

<div class=\"tab\">
    <hr id=\"enfant\">
    <div class=\"styleCard\">
        <fieldset>
            <h3 class=\"fs-subtitle\"></h3>
            <div style=\"margin: 0px\">
                <div class=\"divformatageTextJs\">
                    <p style=\"font-style: italic\">Dans le cadre de nos études familiales, nous pouvons vous proposer de faire participer vos enfants. Si vous êtes d'accord, merci de renseigner les informations ci-dessous. Sinon, veuillez passer à la question suivante.
                        Si vous avez des enfants de 18 ans ou plus, ils peuvent s'inscrire directement dans notre panel. </p>

                </div>

                <div class=\"col\">
                    ";
        // line 360
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 360, $this->source); })()), "enfantsMineur", [], "any", false, false, false, 360), 'row');
        echo "
                </div>
                <div class=\"d_flex\">
                    <div class=\"col-left enfantACacher hide_0 show_un show_deux show_trois show_quatres\">
                        ";
        // line 364
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 364, $this->source); })()), "enfantUnSex", [], "any", false, false, false, 364), 'row');
        echo "
                    </div>

                    <div class=\"col-right enfantACacher hide_0 show_un show_deux show_trois show_quatres\">

                        ";
        // line 369
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 369, $this->source); })()), "enfantUnAge", [], "any", false, false, false, 369), 'row');
        echo "
                    </div>
                </div>

                <div class=\"d_flex\">
                    <div class=\"col-left enfantACacher hide_0 hide_plus_un show_deux show_trois show_quatres\">
                        ";
        // line 375
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 375, $this->source); })()), "enfantDeuxSex", [], "any", false, false, false, 375), 'row');
        echo "
                    </div>
                    <div class=\"col-right enfantACacher hide_0 hide_plus_un show_deux show_trois show_quatres\">
                        ";
        // line 378
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 378, $this->source); })()), "enfantDeuxAge", [], "any", false, false, false, 378), 'row');
        echo "
                    </div>
                </div>

                <div class=\"d_flex\">
                    <div class=\"col-left hide_0 hide_plus_un hide_plus_deux show_trois show_quatres\">
                        ";
        // line 384
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 384, $this->source); })()), "enfantTroisSex", [], "any", false, false, false, 384), 'row');
        echo "
                    </div>
                    <div class=\"col-right hide_0 hide_plus_un hide_plus_deux show_trois show_quatres\">
                        ";
        // line 387
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 387, $this->source); })()), "enfantTroisAge", [], "any", false, false, false, 387), 'row');
        echo "
                    </div>
                </div>

                <div class=\"d_flex\">
                    <div class=\"col-left hide_0 hide_plus_un hide_plus_deux hide_plus_trois show_quatres\">
                        ";
        // line 393
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 393, $this->source); })()), "enfantQuatreSex", [], "any", false, false, false, 393), 'row');
        echo "
                    </div>
                    <div class=\"col-right hide_0 hide_plus_un hide_plus_deux hide_plus_trois show_quatres\">
                        ";
        // line 396
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 396, $this->source); })()), "enfantQuatreAge", [], "any", false, false, false, 396), 'row');
        echo "
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "frontend/Inscription/sections/sectionUn.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  546 => 396,  540 => 393,  531 => 387,  525 => 384,  516 => 378,  510 => 375,  501 => 369,  493 => 364,  486 => 360,  462 => 339,  456 => 336,  450 => 333,  444 => 330,  435 => 324,  429 => 321,  418 => 313,  412 => 310,  401 => 302,  395 => 299,  315 => 221,  313 => 220,  308 => 218,  299 => 212,  289 => 205,  283 => 202,  275 => 197,  270 => 194,  268 => 193,  254 => 181,  252 => 180,  240 => 170,  238 => 169,  176 => 109,  174 => 108,  163 => 100,  154 => 94,  148 => 91,  139 => 85,  132 => 81,  116 => 67,  111 => 60,  106 => 57,  99 => 52,  93 => 49,  86 => 45,  49 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"tab\">
    <div class=\"styleCard\">
        <h3 class=\"fs-subtitle\"></h3>
        <div style=\"display: grid\">
            {#
                    <span>
                        {{ include('@App/Frontend/_widgets/flash_notifications_inscription.html.twig') }}
                    </span>
                    #}
            <p>En vous inscrivant sur le panel SYRES, vous recevrez, en avant-première, des produits de marques
                à tester chez vous. Les produits testés sont des produits de consommation et principalement des
                produits cosmétiques : soin, maquillage, capillaire, solaire, hygiène… Ainsi, dès lors que vous
                êtes panéliste, vous donnez votre accord pour que la société SYRES vous contacte afin de vous
                proposer différents tests.</p>
            <p>Tous ces produits ont été préalablement évalués en termes de sécurité (test toxicologique,
                d’innocuité…) et ne comportent aucun risque prévisible sérieux pour un usage en conditions
                normales d’utilisation. Les tests que nous proposons sont sur des produits déjà commercialisés
                et/ou en cours de développement.</p>
            <p>Ils offrent les mêmes garanties que les produits que vous achetez dans le commerce, nous
                souhaitons juste connaître votre avis sur leur efficacité et leur sensorialité ! En testant ces
                produits, vous nous retournerez des questionnaires pour donner vos impressions à différents
                moments du test.</p>
            <p>Les tests que nous vous proposons ne font généralement pas l’objet de rémunération.</p>
            <p>Afin de faire partie de notre panel, merci de bien vouloir remplir ce formulaire d’inscription
                avec le plus grand soin. Certaines questions demandent obligatoirement une réponse de votre part
                afin de pouvoir enregistrer votre demande. L’absence de réponse à un champ obligatoire est
                susceptible de compromettre la prise en compte de votre inscription.</p>
            <p>Nous vous remercions pour le temps que vous accorderez à remplir ce formulaire.</p>
            <div>
                <p style=\"font-size: 20px\">Service Gestion de Panel
                    <br><strong>SYRES</strong>
                </p>
            </div>
        </div>
    </div>
</div>

<div class=\"tab\">
    <hr id=\"ide\">
    <div class=\"styleCard\">
        <fieldset>
            <h3 class=\"fs-subtitle\"></h3>
            <div style=\"text-align: left\">
                <div class=\"col\">
                    {{ form_row(formInscription.vousEtes) }}
                </div>
                <div class=\"d_flex\">
                    <div class=\"col-left\">
                        {{ form_row(formInscription.nom) }}
                    </div>
                    <div class=\"col-right\">
                        {{ form_row(formInscription.prenom) }}
                    </div>
                </div>
                <div class=\"col\">
                    {#% do formInscription.dateDeNaissance.setRendered %#}
                    <div id=\"output-box\"></div>
                    <div>
                        <label for=\"App_inscription_dateDeNaissance\" class=\"required\">Date de naissance *</label>
                        {{ form_widget(formInscription.dateDeNaissance, { 'attr': {'class': ''} }) }}

                        {#
                        <input class=\"form__field\" id=\"prenomd\" type=\"date\" id=\"App_inscription_dateDeNaissance\"
                               name=\"App_inscription[dateDeNaissance]\" max=\"2002-12-31\" required
                        >
                        #}
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</div>

<div class=\"tab\">
    <hr id=\"add\">
    <div class=\"styleCard\">
        <fieldset>
            <div style=\"text-align: left\">
                <div class=\"d_flex\">
                    <div class=\"col-left\">
                        {{ form_row(formInscription.nomAddresse) }}
                    </div>

                    <div class=\"col-right\">
                        {{ form_row(formInscription.apptEtageCouloir) }}
                    </div>
                </div>

                <div class=\"d_flex\">
                    <div class=\"col-left\">
                        {{ form_row(formInscription.addBatiment) }}
                    </div>
                    <div class=\"col-right\">
                        {{ form_row(formInscription.lieuDit) }}
                    </div>
                </div>

                <div class=\"d_flex\">
                    <div class=\"col-left\">
                        {{ form_row(formInscription.villeAddresse) }}
                    </div>
                    <div class=\"col-right\" id=\"output\">

                        <div>
                            <label>Code postal *</label>
                            <input type=\"text\" maxlength=\"5\" pattern=\"[0-9]{5}\" id=\"App_inscription_codePostal\" name=\"App_inscription[codePostal]\" required=\"required\" oninput=\"myFunction()\" placeholder=\"Code postal en cinq chiffres\">
                        </div>
                        {% do formInscription.codePostal.setRendered %}
                        <script>


                            function myFunction() {
                                const x = document.getElementById(\"App_inscription_codePostal\").value;
                                if(x.length < 5) {
                                    \$(\"#App_inscription_codePostal\").css(\"background-color\",\"#42f5ef\");
                                }
                                if(x.length === 5) {
                                    \$(\"#App_inscription_codePostal\").css(\"background-color\",\"white\");
                                }
                            }

                            function telPFunction() {
                                const telP = document.getElementById(\"App_inscription_numTelephone\").value;
                                if(telP.length < 10) {
                                    \$(\"#App_inscription_numTelephone\").css(\"background-color\",\"#42f5ef\");
                                }
                                if(telP.length === 10) {
                                    \$(\"#App_inscription_numTelephone\").css(\"background-color\",\"white\");
                                }
                            }

                            function telFixFunction() {
                                const telFix = document.getElementById(\"App_inscription_numTelDom\").value;
                                if(telFix.length < 10) {
                                    \$(\"#App_inscription_numTelDom\").css(\"background-color\",\"#42f5ef\");
                                }
                                if(telFix.length === 10) {
                                    \$(\"#App_inscription_numTelDom\").css(\"background-color\",\"white\");
                                }
                            }

                            function telBFunction() {
                                const telB = document.getElementById(\"App_inscription_numBureau\").value;
                                if(telB.length < 10) {
                                    \$(\"#App_inscription_numBureau\").css(\"background-color\",\"#42f5ef\");
                                }
                                if(telB.length === 10) {
                                    \$(\"#App_inscription_numBureau\").css(\"background-color\",\"white\");
                                }
                            }

                        </script>
                    </div>
                </div>

                <div class=\"d_flex\" style=\"margin-top: 25px\">
                    <div class=\"col-left\">
                        <label for=\"App_inscription_numTelephone\" class=\"required\">N° de téléphone portable
                            *</label>
                        <input type=\"text\" maxlength=\"14\" oninput=\"telPFunction()\" id=\"App_inscription_numTelephone\"
                               name=\"App_inscription[numTelephone]\"
                               required=\"required\"
                               placeholder=\"Entrez votre N° Portable en 10 chiffres\"
                               class=\"ajoutText\" pattern=\"[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}\" style=\"margin-bottom: 0px\">
                        <span>Format: 0600000000</span>



                        {% do formInscription.numTelephone.setRendered %}
                    </div>
                    <div class=\"col-right\">
                        <label for=\"App_inscription_numTelDom\">N° de téléphone fixe </label>
                        <input maxlength=\"14\" oninput=\"telFixFunction()\"
                               type=\"text\" id=\"App_inscription_numTelDom\"
                               name=\"App_inscription[numTelDom]\"
                               placeholder=\"Entrez votre N° Fixe en 10 chiffres\"
                               class=\"ajoutText\" pattern=\"[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}\" style=\"margin-bottom: 0px\">
                        <span>Format: 0100000000</span>

                        {% do formInscription.numTelDom.setRendered %}

                    </div>
                </div>
                <div class=\"d_flex\">
                    <div class=\"col-left\">
                        <label for=\"App_inscription_numBureau\">N° de téléphone du
                            bureau </label>
                        <input maxlength=\"14\" oninput=\"telBFunction()\" type=\"text\" id=\"App_inscription_numBureau\"
                               name=\"App_inscription[numBureau]\"
                               placeholder=\"Entrez votre N° du bureau en 10 chiffres\"
                               class=\"ajoutText\" pattern=\"[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}\" style=\"margin-bottom: 0px\">
                        <span>Format: 0100000000</span>
                        {% do formInscription.numBureau.setRendered %}

                    </div>
                    <div class=\"col-right\">
                        {{ form_row(formInscription.mail) }}
                    </div>
                </div>
                <div class=\"d_flex\">
                    <div class=\"col-left\">
                        {{ form_row(formInscription.typeMobile) }}
                    </div>
                    <div class=\"col-right\">
                        {{ form_row(formInscription.tablette) }}
                    </div>
                </div>

                <div class=\"\" style=\"margin-top: 25px\">
                    <div class=\"\" style=\"padding-top: 30;\">
                        <p></p>
                        {{ form_row(formInscription.connecterSurReseauxS) }}
                    </div>
                </div>
                <div class=\"col\">
                    <label class=\"labelCheck\" for=\"formInscription.checkboxUN\">Pour un test, accepteriez-vous de
                        participer à une interview en vidéo conférence sur Skype ? *</label>
                    {{ form_row(formInscription.etreRappler) }}
                </div>
                {% do formInscription.deplacementRegion.setRendered %}
                <div class=\"col checkUn deplacement\" id=\"langues\" style=\"\">
                    <div id=\"App_inscription_deplacementRegion\" class=\"deplacement\">
                        <label class=\"\" for=\"formInscription.checkboxUN\">Où pouvez-vous vous déplacer ?</label>
                        <div id=\"d_flex\">
                            <input
                                    type=\"checkbox\" id=\"App_inscription_deplacementRegion_0\"
                                    name=\"App_inscription[deplacementRegion][]\" value=\"869\">

                            <label
                                    for=\"App_inscription_deplacementRegion_0\">Paris 16ème</label>
                        </div>

                        <div id=\"d_flex\">
                            <input
                                    type=\"checkbox\" id=\"App_inscription_deplacementRegion_1\"
                                    name=\"App_inscription[deplacementRegion][]\" value=\"787\">

                            <label
                                    for=\"App_inscription_deplacementRegion_1\">Paris 13ème</label>
                        </div>

                        <div id=\"d_flex\">
                            <input
                                    type=\"checkbox\" id=\"App_inscription_deplacementRegion_2\"
                                    name=\"App_inscription[deplacementRegion][]\" value=\"554\">

                            <label
                                    for=\"App_inscription_deplacementRegion_2\">Pantin</label>

                        </div>

                        <div id=\"d_flex\">
                            <input
                                    type=\"checkbox\" id=\"App_inscription_deplacementRegion_3\"
                                    name=\"App_inscription[deplacementRegion][]\" value=\"774\">

                            <label
                                    for=\"App_inscription_deplacementRegion_3\">Neuilly</label>
                        </div>

                        <div id=\"d_flex\">
                            <input
                                    type=\"checkbox\" id=\"App_inscription_deplacementRegion_4\"
                                    name=\"App_inscription[deplacementRegion][]\" value=\"785\">

                            <label
                                    for=\"App_inscription_deplacementRegion_4\">Chavenay /
                                Saint-Germain-en-Laye</label>
                        </div>
                        <div id=\"d_flex\">
                            <input type=\"checkbox\"
                                   id=\"App_inscription_deplacementRegion_5\"
                                   name=\"App_inscription[deplacementRegion][]\"
                                   value=\"786\">
                            <label
                                    for=\"App_inscription_deplacementRegion_5\">Pas de déplacement possible,
                                trop loin</label>
                        </div>

                        <div id=\"d_flex\">
                            <input type=\"checkbox\" id=\"App_inscription_deplacementRegion_6\"
                                   name=\"App_inscription[deplacementRegion][]\" value=\"870\">
                            <label
                                    for=\"App_inscription_deplacementRegion_6\">Pontoise</label>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</div>

<div class=\"tab\">
    <hr id=\"prof\">
    <div class=\"styleCard\">
        <fieldset>
            <div>
                <div>
                    {{ form_row(formInscription.profession) }}
                </div>
                <div>
                    {{ form_row(formInscription.domaineMetier) }}
                </div>
            </div>

            <h4 class=\"fs-title\">ALLERGIES</h4>

            <div>
                <div>
                    {{ form_row(formInscription.etesAlergique) }}
                </div>
                <div class=\"descAllergie\">
                    {{ form_row(formInscription.descAlergique) }}
                </div>
            </div>

            <h4 class=\"fs-title\">TESTS CONSOMMATEURS</h4>

            <div>
                <div class=\"conditionG\">
                    {{ form_row(formInscription.connaissezCondition) }}
                </div>
                <div class=\"autreS\">
                    {{ form_row(formInscription.societeInscrit) }}
                </div>
            </div>
            <h4 class=\"fs-title\">AUTRES INFORMATIONS</h4>
            <div>
                <div class=\"col \">
                    {{ form_row(formInscription.fumezVous) }}
                </div>
                <div class=\"col \">
                    {{ form_row(formInscription.vapotezVous) }}
                </div>
                <div class=\"col \">
                    {{ form_row(formInscription.zonePollue) }}
                </div>
                <div class=\"col \">
                    {{ form_row(formInscription.utilisezProduitBio) }}
                </div>
            </div>

        </fieldset>
    </div>
</div>

<div class=\"tab\">
    <hr id=\"enfant\">
    <div class=\"styleCard\">
        <fieldset>
            <h3 class=\"fs-subtitle\"></h3>
            <div style=\"margin: 0px\">
                <div class=\"divformatageTextJs\">
                    <p style=\"font-style: italic\">Dans le cadre de nos études familiales, nous pouvons vous proposer de faire participer vos enfants. Si vous êtes d'accord, merci de renseigner les informations ci-dessous. Sinon, veuillez passer à la question suivante.
                        Si vous avez des enfants de 18 ans ou plus, ils peuvent s'inscrire directement dans notre panel. </p>

                </div>

                <div class=\"col\">
                    {{ form_row(formInscription.enfantsMineur) }}
                </div>
                <div class=\"d_flex\">
                    <div class=\"col-left enfantACacher hide_0 show_un show_deux show_trois show_quatres\">
                        {{ form_row(formInscription.enfantUnSex) }}
                    </div>

                    <div class=\"col-right enfantACacher hide_0 show_un show_deux show_trois show_quatres\">

                        {{ form_row(formInscription.enfantUnAge) }}
                    </div>
                </div>

                <div class=\"d_flex\">
                    <div class=\"col-left enfantACacher hide_0 hide_plus_un show_deux show_trois show_quatres\">
                        {{ form_row(formInscription.enfantDeuxSex) }}
                    </div>
                    <div class=\"col-right enfantACacher hide_0 hide_plus_un show_deux show_trois show_quatres\">
                        {{ form_row(formInscription.enfantDeuxAge) }}
                    </div>
                </div>

                <div class=\"d_flex\">
                    <div class=\"col-left hide_0 hide_plus_un hide_plus_deux show_trois show_quatres\">
                        {{ form_row(formInscription.enfantTroisSex) }}
                    </div>
                    <div class=\"col-right hide_0 hide_plus_un hide_plus_deux show_trois show_quatres\">
                        {{ form_row(formInscription.enfantTroisAge) }}
                    </div>
                </div>

                <div class=\"d_flex\">
                    <div class=\"col-left hide_0 hide_plus_un hide_plus_deux hide_plus_trois show_quatres\">
                        {{ form_row(formInscription.enfantQuatreSex) }}
                    </div>
                    <div class=\"col-right hide_0 hide_plus_un hide_plus_deux hide_plus_trois show_quatres\">
                        {{ form_row(formInscription.enfantQuatreAge) }}
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</div>", "frontend/Inscription/sections/sectionUn.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/Inscription/sections/sectionUn.twig");
    }
}
