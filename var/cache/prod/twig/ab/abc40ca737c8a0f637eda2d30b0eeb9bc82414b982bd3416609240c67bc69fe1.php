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
class __TwigTemplate_d07014f42a58d313deed164a9e12a445659dec6c95dd61d68df2af1f878b58da extends Template
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
        echo "<div class=\"tab\" style=\"/*background-image: url(/img_newsletter/langues.jpg); background-size: cover;*/\">
    <hr id=\"langueP\" class=\"\">
    <div class=\"styleCard\">
        <fieldset>
            ";
        // line 5
        echo "<br>
            ";
        // line 6
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "langueParle", [], "any", false, false, false, 6), "setRendered", [], "any", false, false, false, 6);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "origin", [], "any", false, false, false, 103), 'row');
        echo "
            </div>
            <div class=\"col\">
                ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "typePeau", [], "any", false, false, false, 106), 'row');
        echo "
            </div>
            <div class=\"col\">
                ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "couleurPeau", [], "any", false, false, false, 109), 'row');
        echo "
            </div>
            <div class=\"col\">
                ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "corpAuSoleil", [], "any", false, false, false, 112), 'row');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "peauVisage", [], "any", false, false, false, 124), 'row');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "peauVisageSinsible", [], "any", false, false, false, 134), 'row');
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
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "visageIntolerante", [], "any", false, false, false, 143), "setRendered", [], "any", false, false, false, 143);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "peauVisageReactive", [], "any", false, false, false, 168), 'row');
        echo "

                ";
        // line 170
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "autreCaracteristiqueVRides", [], "any", false, false, false, 170), "setRendered", [], "any", false, false, false, 170);
        // line 171
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "autreCaracteristiqueVRidules", [], "any", false, false, false, 171), "setRendered", [], "any", false, false, false, 171);
        // line 172
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "autreCaracteristiqueVPerte", [], "any", false, false, false, 172), "setRendered", [], "any", false, false, false, 172);
        // line 173
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "autreCaracteristiqueVTeint", [], "any", false, false, false, 173), "setRendered", [], "any", false, false, false, 173);
        // line 174
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "autreCaracteristiqueVRougeurs", [], "any", false, false, false, 174), "setRendered", [], "any", false, false, false, 174);
        // line 175
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "autreCaracteristiqueVCicatrices", [], "any", false, false, false, 175), "setRendered", [], "any", false, false, false, 175);
        // line 176
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "autreCaracteristiqueVTaches", [], "any", false, false, false, 176), "setRendered", [], "any", false, false, false, 176);
        // line 177
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "autreCaracteristiqueVAcne", [], "any", false, false, false, 177), "setRendered", [], "any", false, false, false, 177);
        // line 178
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "autreCaracteristiqueVPoints", [], "any", false, false, false, 178), "setRendered", [], "any", false, false, false, 178);
        // line 179
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "autreCaracteristiqueVEczema", [], "any", false, false, false, 179), "setRendered", [], "any", false, false, false, 179);
        // line 180
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "autreCaracteristiqueVPeauAbi", [], "any", false, false, false, 180), "setRendered", [], "any", false, false, false, 180);
        // line 181
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "autreCaracteristiqueVPores", [], "any", false, false, false, 181), "setRendered", [], "any", false, false, false, 181);
        // line 182
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "autreCaracteristiqueVImperfections", [], "any", false, false, false, 182), "setRendered", [], "any", false, false, false, 182);
        // line 183
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "autreCaracteristiqueVPeauF", [], "any", false, false, false, 183), "setRendered", [], "any", false, false, false, 183);
        // line 184
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "autreCaracteristiqueVDes", [], "any", false, false, false, 184), "setRendered", [], "any", false, false, false, 184);
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
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "gelNottyant", [], "any", false, false, false, 491), "setRendered", [], "any", false, false, false, 491);
        // line 492
        echo "            ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "gelNottyantSpe", [], "any", false, false, false, 492), "setRendered", [], "any", false, false, false, 492);
        // line 493
        echo "            ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "lotionNettoyant", [], "any", false, false, false, 493), "setRendered", [], "any", false, false, false, 493);
        // line 494
        echo "            ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "gelExfoliant", [], "any", false, false, false, 494), "setRendered", [], "any", false, false, false, 494);
        // line 495
        echo "            ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "savonDerma", [], "any", false, false, false, 495), "setRendered", [], "any", false, false, false, 495);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "ouacheteSoinVisage", [], "any", false, false, false, 605), 'row');
        echo "
            </div>


            <div class=\"col styleCard\" style=\"width: 100% !important; margin: 0px !important; margin-top: 10px !important;\">
                ";
        // line 610
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "caracteristiqueYeuxS", [], "any", false, false, false, 610), "setRendered", [], "any", false, false, false, 610);
        // line 611
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "caracteristiqueYeuxL", [], "any", false, false, false, 611), "setRendered", [], "any", false, false, false, 611);
        // line 612
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "caracteristiqueYeuxC", [], "any", false, false, false, 612), "setRendered", [], "any", false, false, false, 612);
        // line 613
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "caracteristiqueYeuxPoche", [], "any", false, false, false, 613), "setRendered", [], "any", false, false, false, 613);
        // line 614
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "caracteristiqueYeuxPopiere", [], "any", false, false, false, 614), "setRendered", [], "any", false, false, false, 614);
        // line 615
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "caracteristiqueYeuxGonfles", [], "any", false, false, false, 615), "setRendered", [], "any", false, false, false, 615);
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
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "dermatologieEsthtiqueAcideH", [], "any", false, false, false, 860), "setRendered", [], "any", false, false, false, 860);
        // line 861
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "dermatologieEsthtiqueBotox", [], "any", false, false, false, 861), "setRendered", [], "any", false, false, false, 861);
        // line 862
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "dermatologieEsthtiqueLaser", [], "any", false, false, false, 862), "setRendered", [], "any", false, false, false, 862);
        // line 863
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "dermatologieEsthtiqueMesotherapie", [], "any", false, false, false, 863), "setRendered", [], "any", false, false, false, 863);
        // line 864
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "dermatologieEsthtiquePeeling", [], "any", false, false, false, 864), "setRendered", [], "any", false, false, false, 864);
        // line 865
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "dermatologieEsthtiqueAutre", [], "any", false, false, false, 865), "setRendered", [], "any", false, false, false, 865);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "maquillageTeint", [], "any", false, false, false, 878), 'row');
        echo "
                </div>
                <div class=\"col classFemme ouAcheteMaquillage col-right\">
                    ";
        // line 881
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "ouAcheteMaquillage", [], "any", false, false, false, 881), 'row');
        echo "
                </div>
            </div>

            <div class=\"d_flex\">
                <div class=\"col left\">
                    ";
        // line 887
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "maquillageYeux", [], "any", false, false, false, 887), 'row');
        echo "
                </div>
                <div class=\"col classFemme col-right\">
                    ";
        // line 890
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formInscription"] ?? null), "maquillageLevre", [], "any", false, false, false, 890), 'row');
        echo "
                </div>
            </div>
        </fieldset>
    </div>
</div>";
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
        return array (  1041 => 890,  1035 => 887,  1026 => 881,  1020 => 878,  1006 => 866,  1003 => 865,  1000 => 864,  997 => 863,  994 => 862,  991 => 861,  989 => 860,  875 => 748,  742 => 616,  739 => 615,  736 => 614,  733 => 613,  730 => 612,  727 => 611,  725 => 610,  717 => 605,  713 => 603,  605 => 496,  602 => 495,  599 => 494,  596 => 493,  593 => 492,  591 => 491,  588 => 490,  286 => 189,  281 => 185,  278 => 184,  275 => 183,  272 => 182,  269 => 181,  266 => 180,  263 => 179,  260 => 178,  257 => 177,  254 => 176,  251 => 175,  248 => 174,  245 => 173,  242 => 172,  239 => 171,  237 => 170,  232 => 168,  206 => 144,  204 => 143,  192 => 134,  179 => 124,  164 => 112,  158 => 109,  152 => 106,  146 => 103,  48 => 7,  46 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/Inscription/sections/sectionDeux.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/Inscription/sections/sectionDeux.twig");
    }
}
