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

/* frontend/Inscription/sections/sectionDeux.twig */
class __TwigTemplate_9760ce3454a54da04f8a2ca9f1052bafb8145a828ff5bdf91653b2118a448f6c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/Inscription/sections/sectionDeux.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/Inscription/sections/sectionDeux.twig"));

        // line 1
        echo "<div class=\"tab\" style=\"/*background-image: url(/img_newsletter/langues.jpg); background-size: cover;*/\">
    <hr id=\"langueP\" class=\"\">
    <div class=\"styleCard\">
        <fieldset>
            ";
        // line 5
        echo "<br>
            ";
        // line 6
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 6, $this->source); })()), "langueParle", [], "any", false, false, false, 6), "setRendered", [], "any", false, false, false, 6);
        // line 7
        echo "
            <div id=\"langues\">
                <label>Quelle(s) langue(s) parlez-vous couramment ? </label>
                <div id=\"App_inscription_langueParle\" class=\"langue\" style=\"
    \">
                    <div class=\"d_flex\" id=\"d_flex\">
                        <input type=\"checkbox\" id=\"App_inscription_langueParle_0 alignInputLabel\" name=\"App_inscription[langueParle][]\"
                               value=\"825\">
                        <label for=\"App_inscription_langueParle_0\">Allemand</label>

                    </div>


                    <div class=\"d_flex\" id=\"d_flex\">
                        <input type=\"checkbox\"
                               id=\"App_inscription_langueParle_1\"
                               name=\"App_inscription[langueParle][]\"
                               value=\"823\">
                        <label
                                for=\"App_inscription_langueParle_1\">Anglais</label>

                    </div>

                    <div class=\"d_flex\" id=\"d_flex\">
                        <input type=\"checkbox\"
                               id=\"App_inscription_langueParle_2\"
                               name=\"App_inscription[langueParle][]\"
                               value=\"830\">
                        <label
                                for=\"App_inscription_langueParle_2\">Arabe</label>
                    </div>

                    <div class=\"d_flex\" id=\"d_flex\">
                        <input type=\"checkbox\"
                               id=\"App_inscription_langueParle_3\"
                               name=\"App_inscription[langueParle][]\"
                               value=\"824\"><label
                                for=\"App_inscription_langueParle_3\">Espagnol</label>
                    </div>

                    <div class=\"d_flex\" id=\"d_flex\">

                        <input type=\"checkbox\"
                               id=\"App_inscription_langueParle_4\"
                               name=\"App_inscription[langueParle][]\"
                               value=\"829\"><label
                                for=\"App_inscription_langueParle_4\">Hindi</label>
                    </div>
                    <div class=\"d_flex\" id=\"d_flex\">
                        <input type=\"checkbox\"
                               id=\"App_inscription_langueParle_5\"
                               name=\"App_inscription[langueParle][]\"
                               value=\"827\"><label
                                for=\"App_inscription_langueParle_5\">Italien</label>
                    </div>

                    <div class=\"d_flex\" id=\"d_flex\">
                        <input type=\"checkbox\"
                               id=\"App_inscription_langueParle_6\"
                               name=\"App_inscription[langueParle][]\"
                               value=\"828\"><label
                                for=\"App_inscription_langueParle_6\">Mandarin (chinois)</label>
                    </div>
                    <div class=\"d_flex\" id=\"d_flex\">
                        <input
                                type=\"checkbox\" id=\"App_inscription_langueParle_7\"
                                name=\"App_inscription[langueParle][]\" value=\"826\"><label
                                for=\"App_inscription_langueParle_7\">Portugais</label>
                    </div>
                    <div class=\"d_flex\" id=\"d_flex\">
                        <input type=\"checkbox\"
                               id=\"App_inscription_langueParle_8\"
                               name=\"App_inscription[langueParle][]\"
                               value=\"831\"><label
                                for=\"App_inscription_langueParle_8\">Russe</label>
                    </div>

                    <div class=\"d_flex\" id=\"d_flex\">
                        <input type=\"checkbox\"
                               id=\"App_inscription_langueParle_9\"
                               name=\"App_inscription[langueParle][]\"
                               value=\"Aucune\"><label
                                for=\"App_inscription_langueParle_9\">Aucune des ces langues</label>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</div>

<div class=\"tab\">
    <hr id=\"carnation\" class=\"\">
    <div class=\"styleCard\">
        <fieldset>
            <h3 class=\"fs-subtitle\"></h3>
            <div class=\"col\">
                ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 103, $this->source); })()), "origin", [], "any", false, false, false, 103), 'row');
        echo "
            </div>
            <div class=\"col\">
                ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 106, $this->source); })()), "typePeau", [], "any", false, false, false, 106), 'row');
        echo "
            </div>
            <div class=\"col\">
                ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 109, $this->source); })()), "couleurPeau", [], "any", false, false, false, 109), 'row');
        echo "
            </div>
            <div class=\"col\">
                ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 112, $this->source); })()), "corpAuSoleil", [], "any", false, false, false, 112), 'row');
        echo "
            </div>
        </fieldset>
    </div>
</div>

<div class=\"tab\">
    <hr id=\"carVisageMauillage\" class=\"\">
    <div class=\"styleCard\">
        <fieldset>
            <h3 class=\"fs-subtitle\"></h3>
            <div class=\"col\">
                ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 124, $this->source); })()), "peauVisage", [], "any", false, false, false, 124), 'row');
        echo "
            </div>

            <div class=\"col\" style=\"text-align: -webkit-center\">
                <label>Avez-vous la peau du visage sensible ? *</label>
                </br>Avez-vous la peau du visage réactive ? *

                <span style=\"font-size: 13px; padding: 0px; font-style: italic\">
                        Une peau inconfortable qui, au moindre contact avec des facteurs extérieurs, démange, rougit, chauffe, tiraille.
                    </span>
                ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 134, $this->source); })()), "peauVisageSinsible", [], "any", false, false, false, 134), 'row');
        echo "
            </div>

            <div class=\"col\" style=\"text-align: -webkit-center\">
                <label>Avez-vous la peau du visage intolérante ? *</label>
                </br>
                <span style=\"font-size: 13px; padding: 0px; font-style: italic\">
                        Peau vulnérable aux agressions extérieures caractérisée par un inconfort quotidien et une très forte irritabilité. Elle présente des rougeurs, picotements. Elle tire, chauffe ou démange et peut également procurer des sensations de brûlure.
                    </span>
                ";
        // line 143
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 143, $this->source); })()), "visageIntolerante", [], "any", false, false, false, 143), "setRendered", [], "any", false, false, false, 143);
        // line 144
        echo "
                <div id=\"App_inscription_visageIntolerante\" class=\"deo\" style=\"text-align: -webkit-center\">

                    <input
                            type=\"radio\" id=\"App_inscription_visageIntolerante_0\"
                            name=\"App_inscription[visageIntolerante]\" value=\"1\" required><label
                            for=\"App_inscription_visageIntolerante_0\">Oui</label>
                    <input type=\"radio\"
                           id=\"App_inscription_visageIntolerante_1\"
                           name=\"App_inscription[visageIntolerante]\"
                           value=\"3\" required>
                    <label
                            for=\"App_inscription_visageIntolerante_1\">Non</label>
                </div>
            </div>

            <div class=\"col\" style=\"text-align: -webkit-center; margin-bottom: 10px\">
                <label>Avez-vous la peau du visage réactive ? *</label>
                </br>
                <span style=\"font-size: 13px; padding: 0px; font-style: italic\">
                            Peau ultrasensible, irritable, intolérante à presque tous les produits cosmétiques et même à
                            l’eau. Elle est vulnérable aux facteurs internes et/ou externes, aux fortes émotions et aux
                            hormones. Elle peut devenir insupportable.
                        </span>
                ";
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 168, $this->source); })()), "peauVisageReactive", [], "any", false, false, false, 168), 'row');
        echo "

                ";
        // line 170
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 170, $this->source); })()), "autreCaracteristiqueVRides", [], "any", false, false, false, 170), "setRendered", [], "any", false, false, false, 170);
        // line 171
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 171, $this->source); })()), "autreCaracteristiqueVRidules", [], "any", false, false, false, 171), "setRendered", [], "any", false, false, false, 171);
        // line 172
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 172, $this->source); })()), "autreCaracteristiqueVPerte", [], "any", false, false, false, 172), "setRendered", [], "any", false, false, false, 172);
        // line 173
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 173, $this->source); })()), "autreCaracteristiqueVTeint", [], "any", false, false, false, 173), "setRendered", [], "any", false, false, false, 173);
        // line 174
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 174, $this->source); })()), "autreCaracteristiqueVRougeurs", [], "any", false, false, false, 174), "setRendered", [], "any", false, false, false, 174);
        // line 175
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 175, $this->source); })()), "autreCaracteristiqueVCicatrices", [], "any", false, false, false, 175), "setRendered", [], "any", false, false, false, 175);
        // line 176
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 176, $this->source); })()), "autreCaracteristiqueVTaches", [], "any", false, false, false, 176), "setRendered", [], "any", false, false, false, 176);
        // line 177
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 177, $this->source); })()), "autreCaracteristiqueVAcne", [], "any", false, false, false, 177), "setRendered", [], "any", false, false, false, 177);
        // line 178
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 178, $this->source); })()), "autreCaracteristiqueVPoints", [], "any", false, false, false, 178), "setRendered", [], "any", false, false, false, 178);
        // line 179
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 179, $this->source); })()), "autreCaracteristiqueVEczema", [], "any", false, false, false, 179), "setRendered", [], "any", false, false, false, 179);
        // line 180
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 180, $this->source); })()), "autreCaracteristiqueVPeauAbi", [], "any", false, false, false, 180), "setRendered", [], "any", false, false, false, 180);
        // line 181
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 181, $this->source); })()), "autreCaracteristiqueVPores", [], "any", false, false, false, 181), "setRendered", [], "any", false, false, false, 181);
        // line 182
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 182, $this->source); })()), "autreCaracteristiqueVImperfections", [], "any", false, false, false, 182), "setRendered", [], "any", false, false, false, 182);
        // line 183
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 183, $this->source); })()), "autreCaracteristiqueVPeauF", [], "any", false, false, false, 183), "setRendered", [], "any", false, false, false, 183);
        // line 184
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 184, $this->source); })()), "autreCaracteristiqueVDes", [], "any", false, false, false, 184), "setRendered", [], "any", false, false, false, 184);
        // line 185
        echo "
            </div>

            ";
        // line 189
        echo "
            <div class=\"styleCard\" style=\"width: 100% !important; margin: 0px !important\">
                <table id=\"customers\">
                    <tr>

                        <th>Autres caractéristiques du visage *</th>
                        <th class=\"textAlignCenter\">Oui</th>
                        <th class=\"textAlignCenter\">Non</th>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Rides </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVRides_0\"
                                   name=\"App_inscription[autreCaracteristiqueVRides]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVRides_1\"
                                   name=\"App_inscription[autreCaracteristiqueVRides]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Ridules </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVRidules_0\"
                                   name=\"App_inscription[autreCaracteristiqueVRidules]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVRidules_1\"
                                   name=\"App_inscription[autreCaracteristiqueVRidules]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Perte de fermeté </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVPerte_0\"
                                   name=\"App_inscription[autreCaracteristiqueVPerte]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVPerte_1\"
                                   name=\"App_inscription[autreCaracteristiqueVPerte]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Teint terne </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVTeint_0\"
                                   name=\"App_inscription[autreCaracteristiqueVTeint]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVTeint_1\"
                                   name=\"App_inscription[autreCaracteristiqueVTeint]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Rougeurs </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVRougeurs_0\"
                                   name=\"App_inscription[autreCaracteristiqueVRougeurs]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVRougeurs_1\"
                                   name=\"App_inscription[autreCaracteristiqueVRougeurs]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Cicatrices </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVCicatrices_0\"
                                   name=\"App_inscription[autreCaracteristiqueVCicatrices]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVCicatrices_1\"
                                   name=\"App_inscription[autreCaracteristiqueVCicatrices]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Taches pigmentaires </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVTaches_0\"
                                   name=\"App_inscription[autreCaracteristiqueVTaches]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVTaches_1\"
                                   name=\"App_inscription[autreCaracteristiqueVTaches]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Acné </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVAcne_0\"
                                   name=\"App_inscription[autreCaracteristiqueVAcne]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input
                                    type=\"radio\" id=\"App_inscription_autreCaracteristiqueVAcne_1\"
                                    name=\"App_inscription[autreCaracteristiqueVAcne]\"
                                    value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Points noirs </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVPoints_0\"
                                   name=\"App_inscription[autreCaracteristiqueVPoints]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVPoints_1\"
                                   name=\"App_inscription[autreCaracteristiqueVPoints]\"
                                   value=\"3\" required>

                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Eczéma </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVEczema_0\"
                                   name=\"App_inscription[autreCaracteristiqueVEczema]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVEczema_1\"
                                   name=\"App_inscription[autreCaracteristiqueVEczema]\"
                                   value=\"3\" required>

                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Peau abîmée </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVPeauAbi_0\"
                                   name=\"App_inscription[autreCaracteristiqueVPeauAbi]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVPeauAbi_1\"
                                   name=\"App_inscription[autreCaracteristiqueVPeauAbi]\"
                                   value=\"3\" required>

                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Pores dilatés </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVPores_0\"
                                   name=\"App_inscription[autreCaracteristiqueVPores]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVPores_1\"
                                   name=\"App_inscription[autreCaracteristiqueVPores]\"
                                   value=\"3\" required>

                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Imperfections (boutons) </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVImperfections_0\"
                                   name=\"App_inscription[autreCaracteristiqueVImperfections]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVImperfections_1\"
                                   name=\"App_inscription[autreCaracteristiqueVImperfections]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Peau fatiguée </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVPeauF_0\"
                                   name=\"App_inscription[autreCaracteristiqueVPeauF]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVPeauF_1\"
                                   name=\"App_inscription[autreCaracteristiqueVPeauF]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Peau déshydratée </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVDes_0\"
                                   name=\"App_inscription[autreCaracteristiqueVDes]\"
                                   value=\"1\" required>
                        </td>
                        <td>
                            <input
                                    type=\"radio\" id=\"App_inscription_autreCaracteristiqueVDes_1\"
                                    name=\"App_inscription[autreCaracteristiqueVDes]\"
                                    value=\"3\" required>
                        </td>
                    </tr>
                </table>
            </div>

            ";
        // line 490
        echo "
            ";
        // line 491
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 491, $this->source); })()), "gelNottyant", [], "any", false, false, false, 491), "setRendered", [], "any", false, false, false, 491);
        // line 492
        echo "            ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 492, $this->source); })()), "gelNottyantSpe", [], "any", false, false, false, 492), "setRendered", [], "any", false, false, false, 492);
        // line 493
        echo "            ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 493, $this->source); })()), "lotionNettoyant", [], "any", false, false, false, 493), "setRendered", [], "any", false, false, false, 493);
        // line 494
        echo "            ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 494, $this->source); })()), "gelExfoliant", [], "any", false, false, false, 494), "setRendered", [], "any", false, false, false, 494);
        // line 495
        echo "            ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 495, $this->source); })()), "savonDerma", [], "any", false, false, false, 495), "setRendered", [], "any", false, false, false, 495);
        // line 496
        echo "            <div style=\"margin-top: 10px\">
                <table id=\"customers\">
                    <tr>

                        <th>Type de nettoyant visage utilisé *</th>
                        <th class=\"textAlignCenter\">Oui</th>
                        <th class=\"textAlignCenter\">Non</th>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Gel nettoyant </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_gelNottyant_0\"
                                   name=\"App_inscription[gelNottyant]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_gelNottyant_1\"
                                   name=\"App_inscription[gelNottyant]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Gel nettoyant spécifique imperfections </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_gelNottyantSpe_0\"
                                   name=\"App_inscription[gelNottyantSpe]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input
                                    type=\"radio\" id=\"App_inscription_gelNottyantSpe_1\"
                                    name=\"App_inscription[gelNottyantSpe]\"
                                    value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Lotion nettoyante </label>
                        </td>
                        <td>
                            <input
                                    type=\"radio\" id=\"App_inscription_lotionNettoyant_0\"
                                    name=\"App_inscription[lotionNettoyant]\"
                                    value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_lotionNettoyant_1\"
                                   name=\"App_inscription[lotionNettoyant]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Gel exfoliant doux nettoyant </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_gelExfoliant_0\"
                                   name=\"App_inscription[gelExfoliant]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_gelExfoliant_1\"
                                   name=\"App_inscription[gelExfoliant]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Savon, pain dermatologique </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_savonDerma_0\"
                                   name=\"App_inscription[savonDerma]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_savonDerma_1\"
                                   name=\"App_inscription[savonDerma]\"
                                   value=\"3\" required>
                        </td>
                    </tr>
                </table>

            </div>
            ";
        // line 603
        echo "
            <div class=\"col\" style=\"margin-top: 10px\">
                ";
        // line 605
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 605, $this->source); })()), "ouacheteSoinVisage", [], "any", false, false, false, 605), 'row');
        echo "
            </div>


            <div class=\"col styleCard\" style=\"width: 100% !important; margin: 0px !important; margin-top: 10px !important;\">
                ";
        // line 610
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 610, $this->source); })()), "caracteristiqueYeuxS", [], "any", false, false, false, 610), "setRendered", [], "any", false, false, false, 610);
        // line 611
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 611, $this->source); })()), "caracteristiqueYeuxL", [], "any", false, false, false, 611), "setRendered", [], "any", false, false, false, 611);
        // line 612
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 612, $this->source); })()), "caracteristiqueYeuxC", [], "any", false, false, false, 612), "setRendered", [], "any", false, false, false, 612);
        // line 613
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 613, $this->source); })()), "caracteristiqueYeuxPoche", [], "any", false, false, false, 613), "setRendered", [], "any", false, false, false, 613);
        // line 614
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 614, $this->source); })()), "caracteristiqueYeuxPopiere", [], "any", false, false, false, 614), "setRendered", [], "any", false, false, false, 614);
        // line 615
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 615, $this->source); })()), "caracteristiqueYeuxGonfles", [], "any", false, false, false, 615), "setRendered", [], "any", false, false, false, 615);
        // line 616
        echo "
                <table id=\"customers\">
                    <tr>
                        <th>Caractéristiques des yeux *</th>
                        <th class=\"textAlignCenter\">Oui</th>
                        <th class=\"textAlignCenter\">Non</th>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Yeux sensibles </label>
                        </td>
                        <td>
                            <input
                                    type=\"radio\" id=\"App_inscription_caracteristiqueYeuxS_0\"
                                    name=\"App_inscription[caracteristiqueYeuxS]\"
                                    value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_caracteristiqueYeuxS_1\"
                                   name=\"App_inscription[caracteristiqueYeuxS]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Lentilles </label>
                        </td>
                        <td>
                            <input
                                    type=\"radio\" id=\"App_inscription_caracteristiqueYeuxL_0\"
                                    name=\"App_inscription[caracteristiqueYeuxL]\"
                                    value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_caracteristiqueYeuxL_1\"
                                   name=\"App_inscription[caracteristiqueYeuxL]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Cernes </label>
                        </td>
                        <td>
                            <input
                                    type=\"radio\" id=\"App_inscription_caracteristiqueYeuxC_0\"
                                    name=\"App_inscription[caracteristiqueYeuxC]\"
                                    value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_caracteristiqueYeuxC_1\"
                                   name=\"App_inscription[caracteristiqueYeuxC]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Poches </label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_caracteristiqueYeuxPoche_0\"
                                   name=\"App_inscription[caracteristiqueYeuxPoche]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_caracteristiqueYeuxPoche_1\"
                                   name=\"App_inscription[caracteristiqueYeuxPoche]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Paupières relâchées </label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_caracteristiqueYeuxPopiere_0\"
                                   name=\"App_inscription[caracteristiqueYeuxPopiere]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_caracteristiqueYeuxPopiere_1\"
                                   name=\"App_inscription[caracteristiqueYeuxPopiere]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Yeux gonflés </label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_caracteristiqueYeuxGonfles_0\"
                                   name=\"App_inscription[caracteristiqueYeuxGonfles]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_caracteristiqueYeuxGonfles_1\"
                                   name=\"App_inscription[caracteristiqueYeuxGonfles]\"
                                   value=\"3\" required>
                        </td>
                    </tr>
                </table>
            </div>

        </fieldset>
    </div>
</div>

<div class=\"tab\">
    <hr id=\"derEsthetique\" class=\"\">
    <div class=\"styleCard\">
        <fieldset>
            <h3 class=\"fs-subtitle\"></h3>

            ";
        // line 748
        echo "
            <div class=\"col\">
                <table id=\"customers\">
                    <tr>

                        <th>Avez-vous déja eu recours à la dermatologie esthétique ? *</th>
                        <th class=\"textAlignCenter\">Oui</th>
                        <th class=\"textAlignCenter\">Non</th>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Acide Hyaluronique</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_dermatologieEsthtiqueAcideH_0\"
                                   name=\"App_inscription[dermatologieEsthtiqueAcideH]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_dermatologieEsthtiqueAcideH_1\"
                                   name=\"App_inscription[dermatologieEsthtiqueAcideH]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Botox</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_dermatologieEsthtiqueBotox_0\"
                                   name=\"App_inscription[dermatologieEsthtiqueBotox]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_dermatologieEsthtiqueBotox_1\"
                                   name=\"App_inscription[dermatologieEsthtiqueBotox]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Laser</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_dermatologieEsthtiqueLaser_0\"
                                   name=\"App_inscription[dermatologieEsthtiqueLaser]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_dermatologieEsthtiqueLaser_1\"
                                   name=\"App_inscription[dermatologieEsthtiqueLaser]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Mésothérapie</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_dermatologieEsthtiqueMesotherapie_0\"
                                   name=\"App_inscription[dermatologieEsthtiqueMesotherapie]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_dermatologieEsthtiqueMesotherapie_1\"
                                   name=\"App_inscription[dermatologieEsthtiqueMesotherapie]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Peeling</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_dermatologieEsthtiquePeeling_0\"
                                   name=\"App_inscription[dermatologieEsthtiquePeeling]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_dermatologieEsthtiquePeeling_1\"
                                   name=\"App_inscription[dermatologieEsthtiquePeeling]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Autre</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_dermatologieEsthtiqueAutre_0\"
                                   name=\"App_inscription[dermatologieEsthtiqueAutre]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_dermatologieEsthtiqueAutre_1\"
                                   name=\"App_inscription[dermatologieEsthtiqueAutre]\"
                                   value=\"3\" required>
                        </td>
                    </tr>
                </table>
                ";
        // line 860
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 860, $this->source); })()), "dermatologieEsthtiqueAcideH", [], "any", false, false, false, 860), "setRendered", [], "any", false, false, false, 860);
        // line 861
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 861, $this->source); })()), "dermatologieEsthtiqueBotox", [], "any", false, false, false, 861), "setRendered", [], "any", false, false, false, 861);
        // line 862
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 862, $this->source); })()), "dermatologieEsthtiqueLaser", [], "any", false, false, false, 862), "setRendered", [], "any", false, false, false, 862);
        // line 863
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 863, $this->source); })()), "dermatologieEsthtiqueMesotherapie", [], "any", false, false, false, 863), "setRendered", [], "any", false, false, false, 863);
        // line 864
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 864, $this->source); })()), "dermatologieEsthtiquePeeling", [], "any", false, false, false, 864), "setRendered", [], "any", false, false, false, 864);
        // line 865
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 865, $this->source); })()), "dermatologieEsthtiqueAutre", [], "any", false, false, false, 865), "setRendered", [], "any", false, false, false, 865);
        // line 866
        echo "            </div>

        </fieldset>
    </div>
</div>

<div class=\"tab\">
    <hr id=\"maquillage\">
    <div class=\"styleCard\">
        <fieldset>
            <div class=\"d_flex\">
                <div class=\"col col-left\">
                    ";
        // line 878
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 878, $this->source); })()), "maquillageTeint", [], "any", false, false, false, 878), 'row');
        echo "
                </div>
                <div class=\"col classFemme ouAcheteMaquillage col-right\">
                    ";
        // line 881
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 881, $this->source); })()), "ouAcheteMaquillage", [], "any", false, false, false, 881), 'row');
        echo "
                </div>
            </div>

            <div class=\"d_flex\">
                <div class=\"col left\">
                    ";
        // line 887
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 887, $this->source); })()), "maquillageYeux", [], "any", false, false, false, 887), 'row');
        echo "
                </div>
                <div class=\"col classFemme col-right\">
                    ";
        // line 890
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 890, $this->source); })()), "maquillageLevre", [], "any", false, false, false, 890), 'row');
        echo "
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
        return "frontend/Inscription/sections/sectionDeux.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1047 => 890,  1041 => 887,  1032 => 881,  1026 => 878,  1012 => 866,  1009 => 865,  1006 => 864,  1003 => 863,  1000 => 862,  997 => 861,  995 => 860,  881 => 748,  748 => 616,  745 => 615,  742 => 614,  739 => 613,  736 => 612,  733 => 611,  731 => 610,  723 => 605,  719 => 603,  611 => 496,  608 => 495,  605 => 494,  602 => 493,  599 => 492,  597 => 491,  594 => 490,  292 => 189,  287 => 185,  284 => 184,  281 => 183,  278 => 182,  275 => 181,  272 => 180,  269 => 179,  266 => 178,  263 => 177,  260 => 176,  257 => 175,  254 => 174,  251 => 173,  248 => 172,  245 => 171,  243 => 170,  238 => 168,  212 => 144,  210 => 143,  198 => 134,  185 => 124,  170 => 112,  164 => 109,  158 => 106,  152 => 103,  54 => 7,  52 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"tab\" style=\"/*background-image: url(/img_newsletter/langues.jpg); background-size: cover;*/\">
    <hr id=\"langueP\" class=\"\">
    <div class=\"styleCard\">
        <fieldset>
            {#{ form_row(formInscription.langueParle) }#}<br>
            {% do formInscription.langueParle.setRendered %}

            <div id=\"langues\">
                <label>Quelle(s) langue(s) parlez-vous couramment ? </label>
                <div id=\"App_inscription_langueParle\" class=\"langue\" style=\"
    \">
                    <div class=\"d_flex\" id=\"d_flex\">
                        <input type=\"checkbox\" id=\"App_inscription_langueParle_0 alignInputLabel\" name=\"App_inscription[langueParle][]\"
                               value=\"825\">
                        <label for=\"App_inscription_langueParle_0\">Allemand</label>

                    </div>


                    <div class=\"d_flex\" id=\"d_flex\">
                        <input type=\"checkbox\"
                               id=\"App_inscription_langueParle_1\"
                               name=\"App_inscription[langueParle][]\"
                               value=\"823\">
                        <label
                                for=\"App_inscription_langueParle_1\">Anglais</label>

                    </div>

                    <div class=\"d_flex\" id=\"d_flex\">
                        <input type=\"checkbox\"
                               id=\"App_inscription_langueParle_2\"
                               name=\"App_inscription[langueParle][]\"
                               value=\"830\">
                        <label
                                for=\"App_inscription_langueParle_2\">Arabe</label>
                    </div>

                    <div class=\"d_flex\" id=\"d_flex\">
                        <input type=\"checkbox\"
                               id=\"App_inscription_langueParle_3\"
                               name=\"App_inscription[langueParle][]\"
                               value=\"824\"><label
                                for=\"App_inscription_langueParle_3\">Espagnol</label>
                    </div>

                    <div class=\"d_flex\" id=\"d_flex\">

                        <input type=\"checkbox\"
                               id=\"App_inscription_langueParle_4\"
                               name=\"App_inscription[langueParle][]\"
                               value=\"829\"><label
                                for=\"App_inscription_langueParle_4\">Hindi</label>
                    </div>
                    <div class=\"d_flex\" id=\"d_flex\">
                        <input type=\"checkbox\"
                               id=\"App_inscription_langueParle_5\"
                               name=\"App_inscription[langueParle][]\"
                               value=\"827\"><label
                                for=\"App_inscription_langueParle_5\">Italien</label>
                    </div>

                    <div class=\"d_flex\" id=\"d_flex\">
                        <input type=\"checkbox\"
                               id=\"App_inscription_langueParle_6\"
                               name=\"App_inscription[langueParle][]\"
                               value=\"828\"><label
                                for=\"App_inscription_langueParle_6\">Mandarin (chinois)</label>
                    </div>
                    <div class=\"d_flex\" id=\"d_flex\">
                        <input
                                type=\"checkbox\" id=\"App_inscription_langueParle_7\"
                                name=\"App_inscription[langueParle][]\" value=\"826\"><label
                                for=\"App_inscription_langueParle_7\">Portugais</label>
                    </div>
                    <div class=\"d_flex\" id=\"d_flex\">
                        <input type=\"checkbox\"
                               id=\"App_inscription_langueParle_8\"
                               name=\"App_inscription[langueParle][]\"
                               value=\"831\"><label
                                for=\"App_inscription_langueParle_8\">Russe</label>
                    </div>

                    <div class=\"d_flex\" id=\"d_flex\">
                        <input type=\"checkbox\"
                               id=\"App_inscription_langueParle_9\"
                               name=\"App_inscription[langueParle][]\"
                               value=\"Aucune\"><label
                                for=\"App_inscription_langueParle_9\">Aucune des ces langues</label>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</div>

<div class=\"tab\">
    <hr id=\"carnation\" class=\"\">
    <div class=\"styleCard\">
        <fieldset>
            <h3 class=\"fs-subtitle\"></h3>
            <div class=\"col\">
                {{ form_row(formInscription.origin) }}
            </div>
            <div class=\"col\">
                {{ form_row(formInscription.typePeau) }}
            </div>
            <div class=\"col\">
                {{ form_row(formInscription.couleurPeau) }}
            </div>
            <div class=\"col\">
                {{ form_row(formInscription.corpAuSoleil) }}
            </div>
        </fieldset>
    </div>
</div>

<div class=\"tab\">
    <hr id=\"carVisageMauillage\" class=\"\">
    <div class=\"styleCard\">
        <fieldset>
            <h3 class=\"fs-subtitle\"></h3>
            <div class=\"col\">
                {{ form_row(formInscription.peauVisage) }}
            </div>

            <div class=\"col\" style=\"text-align: -webkit-center\">
                <label>Avez-vous la peau du visage sensible ? *</label>
                </br>Avez-vous la peau du visage réactive ? *

                <span style=\"font-size: 13px; padding: 0px; font-style: italic\">
                        Une peau inconfortable qui, au moindre contact avec des facteurs extérieurs, démange, rougit, chauffe, tiraille.
                    </span>
                {{ form_row(formInscription.peauVisageSinsible) }}
            </div>

            <div class=\"col\" style=\"text-align: -webkit-center\">
                <label>Avez-vous la peau du visage intolérante ? *</label>
                </br>
                <span style=\"font-size: 13px; padding: 0px; font-style: italic\">
                        Peau vulnérable aux agressions extérieures caractérisée par un inconfort quotidien et une très forte irritabilité. Elle présente des rougeurs, picotements. Elle tire, chauffe ou démange et peut également procurer des sensations de brûlure.
                    </span>
                {% do formInscription.visageIntolerante.setRendered %}

                <div id=\"App_inscription_visageIntolerante\" class=\"deo\" style=\"text-align: -webkit-center\">

                    <input
                            type=\"radio\" id=\"App_inscription_visageIntolerante_0\"
                            name=\"App_inscription[visageIntolerante]\" value=\"1\" required><label
                            for=\"App_inscription_visageIntolerante_0\">Oui</label>
                    <input type=\"radio\"
                           id=\"App_inscription_visageIntolerante_1\"
                           name=\"App_inscription[visageIntolerante]\"
                           value=\"3\" required>
                    <label
                            for=\"App_inscription_visageIntolerante_1\">Non</label>
                </div>
            </div>

            <div class=\"col\" style=\"text-align: -webkit-center; margin-bottom: 10px\">
                <label>Avez-vous la peau du visage réactive ? *</label>
                </br>
                <span style=\"font-size: 13px; padding: 0px; font-style: italic\">
                            Peau ultrasensible, irritable, intolérante à presque tous les produits cosmétiques et même à
                            l’eau. Elle est vulnérable aux facteurs internes et/ou externes, aux fortes émotions et aux
                            hormones. Elle peut devenir insupportable.
                        </span>
                {{ form_row(formInscription.peauVisageReactive) }}

                {% do formInscription.autreCaracteristiqueVRides.setRendered %}
                {% do formInscription.autreCaracteristiqueVRidules.setRendered %}
                {% do formInscription.autreCaracteristiqueVPerte.setRendered %}
                {% do formInscription.autreCaracteristiqueVTeint.setRendered %}
                {% do formInscription.autreCaracteristiqueVRougeurs.setRendered %}
                {% do formInscription.autreCaracteristiqueVCicatrices.setRendered %}
                {% do formInscription.autreCaracteristiqueVTaches.setRendered %}
                {% do formInscription.autreCaracteristiqueVAcne.setRendered %}
                {% do formInscription.autreCaracteristiqueVPoints.setRendered %}
                {% do formInscription.autreCaracteristiqueVEczema.setRendered %}
                {% do formInscription.autreCaracteristiqueVPeauAbi.setRendered %}
                {% do formInscription.autreCaracteristiqueVPores.setRendered %}
                {% do formInscription.autreCaracteristiqueVImperfections.setRendered %}
                {% do formInscription.autreCaracteristiqueVPeauF.setRendered %}
                {% do formInscription.autreCaracteristiqueVDes.setRendered %}

            </div>

            {#************Autre caracteristique du visave*************#}

            <div class=\"styleCard\" style=\"width: 100% !important; margin: 0px !important\">
                <table id=\"customers\">
                    <tr>

                        <th>Autres caractéristiques du visage *</th>
                        <th class=\"textAlignCenter\">Oui</th>
                        <th class=\"textAlignCenter\">Non</th>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Rides </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVRides_0\"
                                   name=\"App_inscription[autreCaracteristiqueVRides]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVRides_1\"
                                   name=\"App_inscription[autreCaracteristiqueVRides]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Ridules </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVRidules_0\"
                                   name=\"App_inscription[autreCaracteristiqueVRidules]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVRidules_1\"
                                   name=\"App_inscription[autreCaracteristiqueVRidules]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Perte de fermeté </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVPerte_0\"
                                   name=\"App_inscription[autreCaracteristiqueVPerte]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVPerte_1\"
                                   name=\"App_inscription[autreCaracteristiqueVPerte]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Teint terne </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVTeint_0\"
                                   name=\"App_inscription[autreCaracteristiqueVTeint]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVTeint_1\"
                                   name=\"App_inscription[autreCaracteristiqueVTeint]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Rougeurs </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVRougeurs_0\"
                                   name=\"App_inscription[autreCaracteristiqueVRougeurs]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVRougeurs_1\"
                                   name=\"App_inscription[autreCaracteristiqueVRougeurs]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Cicatrices </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVCicatrices_0\"
                                   name=\"App_inscription[autreCaracteristiqueVCicatrices]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVCicatrices_1\"
                                   name=\"App_inscription[autreCaracteristiqueVCicatrices]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Taches pigmentaires </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVTaches_0\"
                                   name=\"App_inscription[autreCaracteristiqueVTaches]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVTaches_1\"
                                   name=\"App_inscription[autreCaracteristiqueVTaches]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Acné </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVAcne_0\"
                                   name=\"App_inscription[autreCaracteristiqueVAcne]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input
                                    type=\"radio\" id=\"App_inscription_autreCaracteristiqueVAcne_1\"
                                    name=\"App_inscription[autreCaracteristiqueVAcne]\"
                                    value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Points noirs </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVPoints_0\"
                                   name=\"App_inscription[autreCaracteristiqueVPoints]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVPoints_1\"
                                   name=\"App_inscription[autreCaracteristiqueVPoints]\"
                                   value=\"3\" required>

                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Eczéma </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVEczema_0\"
                                   name=\"App_inscription[autreCaracteristiqueVEczema]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVEczema_1\"
                                   name=\"App_inscription[autreCaracteristiqueVEczema]\"
                                   value=\"3\" required>

                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Peau abîmée </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVPeauAbi_0\"
                                   name=\"App_inscription[autreCaracteristiqueVPeauAbi]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVPeauAbi_1\"
                                   name=\"App_inscription[autreCaracteristiqueVPeauAbi]\"
                                   value=\"3\" required>

                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Pores dilatés </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVPores_0\"
                                   name=\"App_inscription[autreCaracteristiqueVPores]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVPores_1\"
                                   name=\"App_inscription[autreCaracteristiqueVPores]\"
                                   value=\"3\" required>

                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Imperfections (boutons) </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVImperfections_0\"
                                   name=\"App_inscription[autreCaracteristiqueVImperfections]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVImperfections_1\"
                                   name=\"App_inscription[autreCaracteristiqueVImperfections]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Peau fatiguée </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVPeauF_0\"
                                   name=\"App_inscription[autreCaracteristiqueVPeauF]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVPeauF_1\"
                                   name=\"App_inscription[autreCaracteristiqueVPeauF]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Peau déshydratée </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueVDes_0\"
                                   name=\"App_inscription[autreCaracteristiqueVDes]\"
                                   value=\"1\" required>
                        </td>
                        <td>
                            <input
                                    type=\"radio\" id=\"App_inscription_autreCaracteristiqueVDes_1\"
                                    name=\"App_inscription[autreCaracteristiqueVDes]\"
                                    value=\"3\" required>
                        </td>
                    </tr>
                </table>
            </div>

            {#************Nettoyage du visage****************#}

            {% do formInscription.gelNottyant.setRendered %}
            {% do formInscription.gelNottyantSpe.setRendered %}
            {% do formInscription.lotionNettoyant.setRendered %}
            {% do formInscription.gelExfoliant.setRendered %}
            {% do formInscription.savonDerma.setRendered %}
            <div style=\"margin-top: 10px\">
                <table id=\"customers\">
                    <tr>

                        <th>Type de nettoyant visage utilisé *</th>
                        <th class=\"textAlignCenter\">Oui</th>
                        <th class=\"textAlignCenter\">Non</th>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Gel nettoyant </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_gelNottyant_0\"
                                   name=\"App_inscription[gelNottyant]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_gelNottyant_1\"
                                   name=\"App_inscription[gelNottyant]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Gel nettoyant spécifique imperfections </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_gelNottyantSpe_0\"
                                   name=\"App_inscription[gelNottyantSpe]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input
                                    type=\"radio\" id=\"App_inscription_gelNottyantSpe_1\"
                                    name=\"App_inscription[gelNottyantSpe]\"
                                    value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Lotion nettoyante </label>
                        </td>
                        <td>
                            <input
                                    type=\"radio\" id=\"App_inscription_lotionNettoyant_0\"
                                    name=\"App_inscription[lotionNettoyant]\"
                                    value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_lotionNettoyant_1\"
                                   name=\"App_inscription[lotionNettoyant]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Gel exfoliant doux nettoyant </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_gelExfoliant_0\"
                                   name=\"App_inscription[gelExfoliant]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_gelExfoliant_1\"
                                   name=\"App_inscription[gelExfoliant]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Savon, pain dermatologique </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_savonDerma_0\"
                                   name=\"App_inscription[savonDerma]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_savonDerma_1\"
                                   name=\"App_inscription[savonDerma]\"
                                   value=\"3\" required>
                        </td>
                    </tr>
                </table>

            </div>
            {#****************************#}

            <div class=\"col\" style=\"margin-top: 10px\">
                {{ form_row(formInscription.ouacheteSoinVisage) }}
            </div>


            <div class=\"col styleCard\" style=\"width: 100% !important; margin: 0px !important; margin-top: 10px !important;\">
                {% do formInscription.caracteristiqueYeuxS.setRendered %}
                {% do formInscription.caracteristiqueYeuxL.setRendered %}
                {% do formInscription.caracteristiqueYeuxC.setRendered %}
                {% do formInscription.caracteristiqueYeuxPoche.setRendered %}
                {% do formInscription.caracteristiqueYeuxPopiere.setRendered %}
                {% do formInscription.caracteristiqueYeuxGonfles.setRendered %}

                <table id=\"customers\">
                    <tr>
                        <th>Caractéristiques des yeux *</th>
                        <th class=\"textAlignCenter\">Oui</th>
                        <th class=\"textAlignCenter\">Non</th>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Yeux sensibles </label>
                        </td>
                        <td>
                            <input
                                    type=\"radio\" id=\"App_inscription_caracteristiqueYeuxS_0\"
                                    name=\"App_inscription[caracteristiqueYeuxS]\"
                                    value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_caracteristiqueYeuxS_1\"
                                   name=\"App_inscription[caracteristiqueYeuxS]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Lentilles </label>
                        </td>
                        <td>
                            <input
                                    type=\"radio\" id=\"App_inscription_caracteristiqueYeuxL_0\"
                                    name=\"App_inscription[caracteristiqueYeuxL]\"
                                    value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_caracteristiqueYeuxL_1\"
                                   name=\"App_inscription[caracteristiqueYeuxL]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Cernes </label>
                        </td>
                        <td>
                            <input
                                    type=\"radio\" id=\"App_inscription_caracteristiqueYeuxC_0\"
                                    name=\"App_inscription[caracteristiqueYeuxC]\"
                                    value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_caracteristiqueYeuxC_1\"
                                   name=\"App_inscription[caracteristiqueYeuxC]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Poches </label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_caracteristiqueYeuxPoche_0\"
                                   name=\"App_inscription[caracteristiqueYeuxPoche]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_caracteristiqueYeuxPoche_1\"
                                   name=\"App_inscription[caracteristiqueYeuxPoche]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Paupières relâchées </label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_caracteristiqueYeuxPopiere_0\"
                                   name=\"App_inscription[caracteristiqueYeuxPopiere]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_caracteristiqueYeuxPopiere_1\"
                                   name=\"App_inscription[caracteristiqueYeuxPopiere]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Yeux gonflés </label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_caracteristiqueYeuxGonfles_0\"
                                   name=\"App_inscription[caracteristiqueYeuxGonfles]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_caracteristiqueYeuxGonfles_1\"
                                   name=\"App_inscription[caracteristiqueYeuxGonfles]\"
                                   value=\"3\" required>
                        </td>
                    </tr>
                </table>
            </div>

        </fieldset>
    </div>
</div>

<div class=\"tab\">
    <hr id=\"derEsthetique\" class=\"\">
    <div class=\"styleCard\">
        <fieldset>
            <h3 class=\"fs-subtitle\"></h3>

            {#***********************#}

            <div class=\"col\">
                <table id=\"customers\">
                    <tr>

                        <th>Avez-vous déja eu recours à la dermatologie esthétique ? *</th>
                        <th class=\"textAlignCenter\">Oui</th>
                        <th class=\"textAlignCenter\">Non</th>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Acide Hyaluronique</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_dermatologieEsthtiqueAcideH_0\"
                                   name=\"App_inscription[dermatologieEsthtiqueAcideH]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_dermatologieEsthtiqueAcideH_1\"
                                   name=\"App_inscription[dermatologieEsthtiqueAcideH]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Botox</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_dermatologieEsthtiqueBotox_0\"
                                   name=\"App_inscription[dermatologieEsthtiqueBotox]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_dermatologieEsthtiqueBotox_1\"
                                   name=\"App_inscription[dermatologieEsthtiqueBotox]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Laser</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_dermatologieEsthtiqueLaser_0\"
                                   name=\"App_inscription[dermatologieEsthtiqueLaser]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_dermatologieEsthtiqueLaser_1\"
                                   name=\"App_inscription[dermatologieEsthtiqueLaser]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Mésothérapie</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_dermatologieEsthtiqueMesotherapie_0\"
                                   name=\"App_inscription[dermatologieEsthtiqueMesotherapie]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_dermatologieEsthtiqueMesotherapie_1\"
                                   name=\"App_inscription[dermatologieEsthtiqueMesotherapie]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Peeling</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_dermatologieEsthtiquePeeling_0\"
                                   name=\"App_inscription[dermatologieEsthtiquePeeling]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_dermatologieEsthtiquePeeling_1\"
                                   name=\"App_inscription[dermatologieEsthtiquePeeling]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Autre</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_dermatologieEsthtiqueAutre_0\"
                                   name=\"App_inscription[dermatologieEsthtiqueAutre]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_dermatologieEsthtiqueAutre_1\"
                                   name=\"App_inscription[dermatologieEsthtiqueAutre]\"
                                   value=\"3\" required>
                        </td>
                    </tr>
                </table>
                {% do formInscription.dermatologieEsthtiqueAcideH.setRendered %}
                {% do formInscription.dermatologieEsthtiqueBotox.setRendered %}
                {% do formInscription.dermatologieEsthtiqueLaser.setRendered %}
                {% do formInscription.dermatologieEsthtiqueMesotherapie.setRendered %}
                {% do formInscription.dermatologieEsthtiquePeeling.setRendered %}
                {% do formInscription.dermatologieEsthtiqueAutre.setRendered %}
            </div>

        </fieldset>
    </div>
</div>

<div class=\"tab\">
    <hr id=\"maquillage\">
    <div class=\"styleCard\">
        <fieldset>
            <div class=\"d_flex\">
                <div class=\"col col-left\">
                    {{ form_row(formInscription.maquillageTeint) }}
                </div>
                <div class=\"col classFemme ouAcheteMaquillage col-right\">
                    {{ form_row(formInscription.ouAcheteMaquillage) }}
                </div>
            </div>

            <div class=\"d_flex\">
                <div class=\"col left\">
                    {{ form_row(formInscription.maquillageYeux) }}
                </div>
                <div class=\"col classFemme col-right\">
                    {{ form_row(formInscription.maquillageLevre) }}
                </div>
            </div>
        </fieldset>
    </div>
</div>", "frontend/Inscription/sections/sectionDeux.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/Inscription/sections/sectionDeux.twig");
    }
}
