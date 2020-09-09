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

/* frontend/Inscription/sections/sectionTrois.twig */
class __TwigTemplate_dd1f683c3e716dd2df4fd718751ee18f94dbf4ff23870052ce1b09ec1fd5a229 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/Inscription/sections/sectionTrois.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/Inscription/sections/sectionTrois.twig"));

        // line 1
        echo "
<div class=\"tab classHomme\">
    <hr id=\"rasage\" class=\"classHomme\">
    <div class=\"styleCard\">
        <fieldset>
            <h3 class=\"fs-subtitle\"></h3>
            <div class=\"col classHomme\">
                <table id=\"customers\">
                    <tr>
                        <th>Type de rasoir *</th>
                        <th class=\"textAlignCenter\">Oui</th>
                        <th class=\"textAlignCenter\">Non</th>
                    </tr>
                    <tr>
                        <td>
                            <label for=\"\">Rasoir électrique </label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeRasageRElec_0\"
                                   name=\"App_inscription[typeRasageRElec]\" value=\"1\">
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeRasageRElec_1\"
                                   name=\"App_inscription[typeRasageRElec]\" value=\"3\">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Rasoir mécanique jetable </label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeRasageMeca_0\"
                                   name=\"App_inscription[typeRasageMeca]\" value=\"1\">
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeRasageMeca_1\"
                                   name=\"App_inscription[typeRasageMeca]\" value=\"3\">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Rasoir mécanique rechargeable </label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeRasageMecaR_0\"
                                   name=\"App_inscription[typeRasageMecaR]\" value=\"1\">
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeRasageMecaR_1\"
                                   name=\"App_inscription[typeRasageMecaR]\" value=\"3\">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Tondeuse à barbe </label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeRasageTondeuse_0\"
                                   name=\"App_inscription[typeRasageTondeuse]\" value=\"1\">
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeRasageTondeuse_1\"
                                   name=\"App_inscription[typeRasageTondeuse]\" value=\"3\">
                        </td>
                    </tr>
                </table>

                ";
        // line 75
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 75, $this->source); })()), "typeRasageRElec", [], "any", false, false, false, 75), "setRendered", [], "any", false, false, false, 75);
        // line 76
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 76, $this->source); })()), "typeRasageMeca", [], "any", false, false, false, 76), "setRendered", [], "any", false, false, false, 76);
        // line 77
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 77, $this->source); })()), "typeRasageMecaR", [], "any", false, false, false, 77), "setRendered", [], "any", false, false, false, 77);
        // line 78
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 78, $this->source); })()), "typeRasageTondeuse", [], "any", false, false, false, 78), "setRendered", [], "any", false, false, false, 78);
        // line 79
        echo "
            </div>
            <div class=\"col classHomme classHommes\">
                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 82, $this->source); })()), "frequenceRasage", [], "any", false, false, false, 82), 'row');
        echo "
            </div>
        </fieldset>
    </div>
</div>

<div class=\"tab classHomme\">
    <hr id=\"longB\" class=\"classHomme\">
    <div class=\"styleCard\">
        <fieldset>
            <div class=\"\">
                <fieldset>
                    <div class=\"col classHomme classHommes\">
                        ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 95, $this->source); })()), "longueBarbe", [], "any", false, false, false, 95), 'row');
        echo "
                    </div>
                </fieldset>
            </div>
        </fieldset>
    </div>
</div>

<div class=\"\" style=\"text-align: left\">
</div>
<div class=\"tab classHomme\">
    <hr id=\"autreInfo\" class=\"classHomme\">
    <div class=\"styleCard\">
        <fieldset>
            <div class=\"col classHomme\">
                <table id=\"customers\">
                    <tr>

                        <th>Avez-vous des problèmes de peau ? *</th>
                        <th class=\"textAlignCenter\">Oui</th>
                        <th class=\"textAlignCenter\">Non</th>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Poils incarnés </label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_problemePeauPoileInc_0\"
                                   name=\"App_inscription[problemePeauPoileInc]\" value=\"1\">
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_problemePeauPoileInc_1\"
                                   name=\"App_inscription[problemePeauPoileInc]\" value=\"3\">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Barbe dure </label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_problemePeauBarbe_0\"
                                   name=\"App_inscription[problemePeauBarbe]\" value=\"1\">
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_problemePeauBarbe_1\"
                                   name=\"App_inscription[problemePeauBarbe]\" value=\"3\">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Sensible au feu du rasoir </label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_problemePeauSensible_0\"
                                   name=\"App_inscription[problemePeauSensible]\" value=\"1\">
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_problemePeauSensible_1\"
                                   name=\"App_inscription[problemePeauSensible]\" value=\"3\">
                        </td>
                    </tr>
                </table>
                ";
        // line 163
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 163, $this->source); })()), "problemePeauPoileInc", [], "any", false, false, false, 163), "setRendered", [], "any", false, false, false, 163);
        // line 164
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 164, $this->source); })()), "problemePeauBarbe", [], "any", false, false, false, 164), "setRendered", [], "any", false, false, false, 164);
        // line 165
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 165, $this->source); })()), "problemePeauSensible", [], "any", false, false, false, 165), "setRendered", [], "any", false, false, false, 165);
        // line 166
        echo "
            </div>
            <div class=\"col classHomme classHommes\">
                ";
        // line 169
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 169, $this->source); })()), "calvitie", [], "any", false, false, false, 169), 'row');
        echo "
            </div>
        </fieldset>
    </div>
</div>

<div class=\"tab\">
    <hr id=\"infoCapi\" class=\"\">
    <div class=\"styleCard\">
        <fieldset>
            <h3 class=\"fs-subtitle\"></h3>

            ";
        // line 182
        echo "
            <div class=\"col\">
                ";
        // line 184
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 184, $this->source); })()), "typeCheveux", [], "any", false, false, false, 184), 'row');
        echo "
            </div>
            <div class=\"col\">
                ";
        // line 187
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 187, $this->source); })()), "couleurCheveux", [], "any", false, false, false, 187), 'row');
        echo "
            </div>
            ";
        // line 195
        echo "            <div class=\"col\">
                ";
        // line 196
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 196, $this->source); })()), "natureCheveux", [], "any", false, false, false, 196), 'row');
        echo "
            </div>
            <div class=\"col\">
                ";
        // line 199
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 199, $this->source); })()), "alopecie", [], "any", false, false, false, 199), 'row');
        echo "
            </div>

            <div>
                ";
        // line 204
        echo "                <table id=\"customers\">
                    <tr>

                        <th>Autres produits capillaires *</th>
                        <th class=\"textAlignCenter\">Oui</th>
                        <th class=\"textAlignCenter\">Non</th>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Après-shampooing</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_autresProduitsCapillairesApreS_0\"
                                   name=\"App_inscription[autresProduitsCapillairesApreS]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_autresProduitsCapillairesApreS_1\"
                                   name=\"App_inscription[autresProduitsCapillairesApreS]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Baume démêlant</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_autresProduitsCapillairesBaume_0\"
                                   name=\"App_inscription[autresProduitsCapillairesBaume]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_autresProduitsCapillairesBaume_1\"
                                   name=\"App_inscription[autresProduitsCapillairesBaume]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Crème de soin cheveux</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_autresProduitsCapillairesCreme_0\"
                                   name=\"App_inscription[autresProduitsCapillairesCreme]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_autresProduitsCapillairesCreme_1\"
                                   name=\"App_inscription[autresProduitsCapillairesCreme]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Lotion capillaire</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_autresProduitsCapillairesLotion_0\"
                                   name=\"App_inscription[autresProduitsCapillairesLotion]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_autresProduitsCapillairesLotion_1\"
                                   name=\"App_inscription[autresProduitsCapillairesLotion]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Masque de soin cheveux</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_autresProduitsCapillairesMasque_0\"
                                   name=\"App_inscription[autresProduitsCapillairesMasque]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_autresProduitsCapillairesMasque_1\"
                                   name=\"App_inscription[autresProduitsCapillairesMasque]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Mousse sans rinçage</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_autresProduitsCapillairesMousse_0\"
                                   name=\"App_inscription[autresProduitsCapillairesMousse]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_autresProduitsCapillairesMousse_1\"
                                   name=\"App_inscription[autresProduitsCapillairesMousse]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Capsule, masque, huile de soin sans rincage</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_autresProduitsCapillairesCapsule_0\"
                                   name=\"App_inscription[autresProduitsCapillairesCapsule]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_autresProduitsCapillairesCapsule_1\"
                                   name=\"App_inscription[autresProduitsCapillairesCapsule]\"
                                   value=\"3\" required>
                        </td>
                    </tr>
                </table>
                ";
        // line 331
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 331, $this->source); })()), "autresProduitsCapillairesApreS", [], "any", false, false, false, 331), "setRendered", [], "any", false, false, false, 331);
        // line 332
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 332, $this->source); })()), "autresProduitsCapillairesBaume", [], "any", false, false, false, 332), "setRendered", [], "any", false, false, false, 332);
        // line 333
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 333, $this->source); })()), "autresProduitsCapillairesCreme", [], "any", false, false, false, 333), "setRendered", [], "any", false, false, false, 333);
        // line 334
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 334, $this->source); })()), "autresProduitsCapillairesLotion", [], "any", false, false, false, 334), "setRendered", [], "any", false, false, false, 334);
        // line 335
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 335, $this->source); })()), "autresProduitsCapillairesMasque", [], "any", false, false, false, 335), "setRendered", [], "any", false, false, false, 335);
        // line 336
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 336, $this->source); })()), "autresProduitsCapillairesMousse", [], "any", false, false, false, 336), "setRendered", [], "any", false, false, false, 336);
        // line 337
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 337, $this->source); })()), "autresProduitsCapillairesCapsule", [], "any", false, false, false, 337), "setRendered", [], "any", false, false, false, 337);
        // line 338
        echo "            </div>
        </fieldset>
    </div>
</div>

<div class=\"tab\">
    <hr id=\"shampooing\" class=\"\">
    <div class=\"styleCard\">
        <fieldset>
            <div>

                <table id=\"customers\">
                    <style type=\"text/css\">
                        table td {
                            text-align: start;
                        }

                        table th {
                            border: none;
                            text-align: start;
                        }
                    </style>

                    <tr>

                        <th>Utilisez-vous un de ces shampooings ? *</th>
                        <th class=\"textAlignCenter\">Oui</th>
                        <th class=\"textAlignCenter\">Non</th>
                    </tr>

                    <tr>

                        <td>
                            <label for=\"\">Antichute</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeSAntichute_0\"
                                   name=\"App_inscription[typeSAntichute]\" value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeSAntichute_1\"
                                   name=\"App_inscription[typeSAntichute]\" value=\"3\" required>
                        </td>

                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">
                                Antipelliculaire
                            </label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeSAntipelliculaire_0\"
                                   name=\"App_inscription[typeSAntipelliculaire]\" value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeSAntipelliculaire_1\"
                                   name=\"App_inscription[typeSAntipelliculaire]\" value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">
                                Pour cheveux colorés ou permanentés
                            </label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeSCheveuxColore_0\"
                                   name=\"App_inscription[typeSCheveuxColore]\" value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeSCheveuxColore_1\"
                                   name=\"App_inscription[typeSCheveuxColore]\" value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">
                                Pour cheveux gras
                            </label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeSCheveuxGras_0\"
                                   name=\"App_inscription[typeSCheveuxGras]\" value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeSCheveuxGras_1\"
                                   name=\"App_inscription[typeSCheveuxGras]\" value=\"3\" required>
                        </td>

                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">
                                Huile douche shampooing
                            </label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeSHuile_0\"
                                   name=\"App_inscription[typeSHuile]\" value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeSHuile_1\"
                                   name=\"App_inscription[typeSHuile]\" value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">
                                Shampooing sec
                            </label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeSShampooingSec_0\"
                                   name=\"App_inscription[typeSShampooingSec]\" value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeSShampooingSec_1\"
                                   name=\"App_inscription[typeSShampooingSec]\" value=\"3\" required>
                        </td>

                    </tr>

                </table>
                ";
        // line 473
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 473, $this->source); })()), "typeSAntichute", [], "any", false, false, false, 473), "setRendered", [], "any", false, false, false, 473);
        // line 474
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 474, $this->source); })()), "typeSAntipelliculaire", [], "any", false, false, false, 474), "setRendered", [], "any", false, false, false, 474);
        // line 475
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 475, $this->source); })()), "typeSCheveuxColore", [], "any", false, false, false, 475), "setRendered", [], "any", false, false, false, 475);
        // line 476
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 476, $this->source); })()), "typeSCheveuxGras", [], "any", false, false, false, 476), "setRendered", [], "any", false, false, false, 476);
        // line 477
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 477, $this->source); })()), "typeSHuile", [], "any", false, false, false, 477), "setRendered", [], "any", false, false, false, 477);
        // line 478
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 478, $this->source); })()), "typeSShampooingSec", [], "any", false, false, false, 478), "setRendered", [], "any", false, false, false, 478);
        // line 479
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 479, $this->source); })()), "typeSCheveuxColore", [], "any", false, false, false, 479), "setRendered", [], "any", false, false, false, 479);
        // line 480
        echo "            </div>
        </fieldset>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "frontend/Inscription/sections/sectionTrois.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  587 => 480,  584 => 479,  581 => 478,  578 => 477,  575 => 476,  572 => 475,  569 => 474,  567 => 473,  430 => 338,  427 => 337,  424 => 336,  421 => 335,  418 => 334,  415 => 333,  412 => 332,  410 => 331,  281 => 204,  274 => 199,  268 => 196,  265 => 195,  260 => 187,  254 => 184,  250 => 182,  235 => 169,  230 => 166,  227 => 165,  224 => 164,  222 => 163,  151 => 95,  135 => 82,  130 => 79,  127 => 78,  124 => 77,  121 => 76,  119 => 75,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"tab classHomme\">
    <hr id=\"rasage\" class=\"classHomme\">
    <div class=\"styleCard\">
        <fieldset>
            <h3 class=\"fs-subtitle\"></h3>
            <div class=\"col classHomme\">
                <table id=\"customers\">
                    <tr>
                        <th>Type de rasoir *</th>
                        <th class=\"textAlignCenter\">Oui</th>
                        <th class=\"textAlignCenter\">Non</th>
                    </tr>
                    <tr>
                        <td>
                            <label for=\"\">Rasoir électrique </label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeRasageRElec_0\"
                                   name=\"App_inscription[typeRasageRElec]\" value=\"1\">
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeRasageRElec_1\"
                                   name=\"App_inscription[typeRasageRElec]\" value=\"3\">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Rasoir mécanique jetable </label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeRasageMeca_0\"
                                   name=\"App_inscription[typeRasageMeca]\" value=\"1\">
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeRasageMeca_1\"
                                   name=\"App_inscription[typeRasageMeca]\" value=\"3\">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Rasoir mécanique rechargeable </label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeRasageMecaR_0\"
                                   name=\"App_inscription[typeRasageMecaR]\" value=\"1\">
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeRasageMecaR_1\"
                                   name=\"App_inscription[typeRasageMecaR]\" value=\"3\">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Tondeuse à barbe </label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeRasageTondeuse_0\"
                                   name=\"App_inscription[typeRasageTondeuse]\" value=\"1\">
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeRasageTondeuse_1\"
                                   name=\"App_inscription[typeRasageTondeuse]\" value=\"3\">
                        </td>
                    </tr>
                </table>

                {% do formInscription.typeRasageRElec.setRendered %}
                {% do formInscription.typeRasageMeca.setRendered %}
                {% do formInscription.typeRasageMecaR.setRendered %}
                {% do formInscription.typeRasageTondeuse.setRendered %}

            </div>
            <div class=\"col classHomme classHommes\">
                {{ form_row(formInscription.frequenceRasage) }}
            </div>
        </fieldset>
    </div>
</div>

<div class=\"tab classHomme\">
    <hr id=\"longB\" class=\"classHomme\">
    <div class=\"styleCard\">
        <fieldset>
            <div class=\"\">
                <fieldset>
                    <div class=\"col classHomme classHommes\">
                        {{ form_row(formInscription.longueBarbe) }}
                    </div>
                </fieldset>
            </div>
        </fieldset>
    </div>
</div>

<div class=\"\" style=\"text-align: left\">
</div>
<div class=\"tab classHomme\">
    <hr id=\"autreInfo\" class=\"classHomme\">
    <div class=\"styleCard\">
        <fieldset>
            <div class=\"col classHomme\">
                <table id=\"customers\">
                    <tr>

                        <th>Avez-vous des problèmes de peau ? *</th>
                        <th class=\"textAlignCenter\">Oui</th>
                        <th class=\"textAlignCenter\">Non</th>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Poils incarnés </label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_problemePeauPoileInc_0\"
                                   name=\"App_inscription[problemePeauPoileInc]\" value=\"1\">
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_problemePeauPoileInc_1\"
                                   name=\"App_inscription[problemePeauPoileInc]\" value=\"3\">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Barbe dure </label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_problemePeauBarbe_0\"
                                   name=\"App_inscription[problemePeauBarbe]\" value=\"1\">
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_problemePeauBarbe_1\"
                                   name=\"App_inscription[problemePeauBarbe]\" value=\"3\">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Sensible au feu du rasoir </label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_problemePeauSensible_0\"
                                   name=\"App_inscription[problemePeauSensible]\" value=\"1\">
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_problemePeauSensible_1\"
                                   name=\"App_inscription[problemePeauSensible]\" value=\"3\">
                        </td>
                    </tr>
                </table>
                {% do formInscription.problemePeauPoileInc.setRendered %}
                {% do formInscription.problemePeauBarbe.setRendered %}
                {% do formInscription.problemePeauSensible.setRendered %}

            </div>
            <div class=\"col classHomme classHommes\">
                {{ form_row(formInscription.calvitie) }}
            </div>
        </fieldset>
    </div>
</div>

<div class=\"tab\">
    <hr id=\"infoCapi\" class=\"\">
    <div class=\"styleCard\">
        <fieldset>
            <h3 class=\"fs-subtitle\"></h3>

            {#***********************#}

            <div class=\"col\">
                {{ form_row(formInscription.typeCheveux) }}
            </div>
            <div class=\"col\">
                {{ form_row(formInscription.couleurCheveux) }}
            </div>
            {#
              <div class=\"col\">
                  {{ form_row(formInscription.longueurCheveux) }}
              </div>

              #}
            <div class=\"col\">
                {{ form_row(formInscription.natureCheveux) }}
            </div>
            <div class=\"col\">
                {{ form_row(formInscription.alopecie) }}
            </div>

            <div>
                {# ///*****************************#}
                <table id=\"customers\">
                    <tr>

                        <th>Autres produits capillaires *</th>
                        <th class=\"textAlignCenter\">Oui</th>
                        <th class=\"textAlignCenter\">Non</th>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Après-shampooing</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_autresProduitsCapillairesApreS_0\"
                                   name=\"App_inscription[autresProduitsCapillairesApreS]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_autresProduitsCapillairesApreS_1\"
                                   name=\"App_inscription[autresProduitsCapillairesApreS]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Baume démêlant</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_autresProduitsCapillairesBaume_0\"
                                   name=\"App_inscription[autresProduitsCapillairesBaume]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_autresProduitsCapillairesBaume_1\"
                                   name=\"App_inscription[autresProduitsCapillairesBaume]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Crème de soin cheveux</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_autresProduitsCapillairesCreme_0\"
                                   name=\"App_inscription[autresProduitsCapillairesCreme]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_autresProduitsCapillairesCreme_1\"
                                   name=\"App_inscription[autresProduitsCapillairesCreme]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Lotion capillaire</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_autresProduitsCapillairesLotion_0\"
                                   name=\"App_inscription[autresProduitsCapillairesLotion]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_autresProduitsCapillairesLotion_1\"
                                   name=\"App_inscription[autresProduitsCapillairesLotion]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Masque de soin cheveux</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_autresProduitsCapillairesMasque_0\"
                                   name=\"App_inscription[autresProduitsCapillairesMasque]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_autresProduitsCapillairesMasque_1\"
                                   name=\"App_inscription[autresProduitsCapillairesMasque]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Mousse sans rinçage</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_autresProduitsCapillairesMousse_0\"
                                   name=\"App_inscription[autresProduitsCapillairesMousse]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_autresProduitsCapillairesMousse_1\"
                                   name=\"App_inscription[autresProduitsCapillairesMousse]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Capsule, masque, huile de soin sans rincage</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_autresProduitsCapillairesCapsule_0\"
                                   name=\"App_inscription[autresProduitsCapillairesCapsule]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_autresProduitsCapillairesCapsule_1\"
                                   name=\"App_inscription[autresProduitsCapillairesCapsule]\"
                                   value=\"3\" required>
                        </td>
                    </tr>
                </table>
                {% do formInscription.autresProduitsCapillairesApreS.setRendered %}
                {% do formInscription.autresProduitsCapillairesBaume.setRendered %}
                {% do formInscription.autresProduitsCapillairesCreme.setRendered %}
                {% do formInscription.autresProduitsCapillairesLotion.setRendered %}
                {% do formInscription.autresProduitsCapillairesMasque.setRendered %}
                {% do formInscription.autresProduitsCapillairesMousse.setRendered %}
                {% do formInscription.autresProduitsCapillairesCapsule.setRendered %}
            </div>
        </fieldset>
    </div>
</div>

<div class=\"tab\">
    <hr id=\"shampooing\" class=\"\">
    <div class=\"styleCard\">
        <fieldset>
            <div>

                <table id=\"customers\">
                    <style type=\"text/css\">
                        table td {
                            text-align: start;
                        }

                        table th {
                            border: none;
                            text-align: start;
                        }
                    </style>

                    <tr>

                        <th>Utilisez-vous un de ces shampooings ? *</th>
                        <th class=\"textAlignCenter\">Oui</th>
                        <th class=\"textAlignCenter\">Non</th>
                    </tr>

                    <tr>

                        <td>
                            <label for=\"\">Antichute</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeSAntichute_0\"
                                   name=\"App_inscription[typeSAntichute]\" value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeSAntichute_1\"
                                   name=\"App_inscription[typeSAntichute]\" value=\"3\" required>
                        </td>

                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">
                                Antipelliculaire
                            </label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeSAntipelliculaire_0\"
                                   name=\"App_inscription[typeSAntipelliculaire]\" value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeSAntipelliculaire_1\"
                                   name=\"App_inscription[typeSAntipelliculaire]\" value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">
                                Pour cheveux colorés ou permanentés
                            </label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeSCheveuxColore_0\"
                                   name=\"App_inscription[typeSCheveuxColore]\" value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeSCheveuxColore_1\"
                                   name=\"App_inscription[typeSCheveuxColore]\" value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">
                                Pour cheveux gras
                            </label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeSCheveuxGras_0\"
                                   name=\"App_inscription[typeSCheveuxGras]\" value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeSCheveuxGras_1\"
                                   name=\"App_inscription[typeSCheveuxGras]\" value=\"3\" required>
                        </td>

                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">
                                Huile douche shampooing
                            </label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeSHuile_0\"
                                   name=\"App_inscription[typeSHuile]\" value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeSHuile_1\"
                                   name=\"App_inscription[typeSHuile]\" value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">
                                Shampooing sec
                            </label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeSShampooingSec_0\"
                                   name=\"App_inscription[typeSShampooingSec]\" value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_typeSShampooingSec_1\"
                                   name=\"App_inscription[typeSShampooingSec]\" value=\"3\" required>
                        </td>

                    </tr>

                </table>
                {% do formInscription.typeSAntichute.setRendered %}
                {% do formInscription.typeSAntipelliculaire.setRendered %}
                {% do formInscription.typeSCheveuxColore.setRendered %}
                {% do formInscription.typeSCheveuxGras.setRendered %}
                {% do formInscription.typeSHuile.setRendered %}
                {% do formInscription.typeSShampooingSec.setRendered %}
                {% do formInscription.typeSCheveuxColore.setRendered %}
            </div>
        </fieldset>
    </div>
</div>", "frontend/Inscription/sections/sectionTrois.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/Inscription/sections/sectionTrois.twig");
    }
}
