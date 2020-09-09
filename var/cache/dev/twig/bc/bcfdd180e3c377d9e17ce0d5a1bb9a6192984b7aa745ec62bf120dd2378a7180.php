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

/* frontend/Inscription/sections/sectionQuatres.twig */
class __TwigTemplate_ab823abaf56c917191a0859ca75ac83713ee75426d7e101817a7002f224a71e9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/Inscription/sections/sectionQuatres.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/Inscription/sections/sectionQuatres.twig"));

        // line 1
        echo "<div class=\"tab\">
    <hr id=\"carCorp\">
    <div class=\"styleCard\">
        <fieldset>
            <h3 class=\"fs-subtitle\"></h3>

            ";
        // line 8
        echo "
            <div class=\"col\">
                ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 10, $this->source); })()), "caracteristiqueCorps", [], "any", false, false, false, 10), 'row');
        echo "
                ";
        // line 11
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 11, $this->source); })()), "caracteristiqueCorps", [], "any", false, false, false, 11), "setRendered", [], "any", false, false, false, 11);
        // line 12
        echo "            </div>




            <div class=\"col\" style=\"text-align: -webkit-center\">
                <label>Avez-vous la peau du corps sensible ? *</label><br>
                <span style=\"font-size: 13px; padding: 0px; font-style: italic\">
                        Une peau inconfortable qui, au moindre contact avec des facteurs extérieurs, démange, rougit, chauffe, tiraille.
                </span>
                <div style=\"margin: auto\">
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 23, $this->source); })()), "autreCaracteristiqueCorpsPeau", [], "any", false, false, false, 23), 'row');
        echo "
                </div>
            </div>

            <div class=\"col\">
                <table id=\"customers\">
                    <tr>
                        <th>Autres caractéristiques du corps *</th>
                        <th class=\"textAlignCenter\">Oui</th>
                        <th class=\"textAlignCenter\">Non</th>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Boutons</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_autreCaracteristiqueCorpsBoutton_0\"
                                   name=\"App_inscription[autreCaracteristiqueCorpsBoutton]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_autreCaracteristiqueCorpsBoutton_1\"
                                   name=\"App_inscription[autreCaracteristiqueCorpsBoutton]\"
                                   value=\"3\" required>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <label for=\"\">Jambes lourdes</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_autreCaracteristiqueCorpsJambeL_0\"
                                   name=\"App_inscription[autreCaracteristiqueCorpsJambeL]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_autreCaracteristiqueCorpsJambeL_1\"
                                   name=\"App_inscription[autreCaracteristiqueCorpsJambeL]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Jambes sèches</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_autreCaracteristiqueCorpsJambS_0\"
                                   name=\"App_inscription[autreCaracteristiqueCorpsJambS]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_autreCaracteristiqueCorpsJambS_1\"
                                   name=\"App_inscription[autreCaracteristiqueCorpsJambS]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Odeur corporelle / transpiration</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_autreCaracteristiqueCorpsOdeur_0\"
                                   name=\"App_inscription[autreCaracteristiqueCorpsOdeur]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_autreCaracteristiqueCorpsOdeur_1\"
                                   name=\"App_inscription[autreCaracteristiqueCorpsOdeur]\"
                                   value=\"3\" required>
                        </td>
                    </tr>





                    <tr>
                        <td>
                            <label for=\"\">Relâchement cutané</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_autreCaracteristiqueCorpsRel_0\"
                                   name=\"App_inscription[autreCaracteristiqueCorpsRel]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_autreCaracteristiqueCorpsRel_1\"
                                   name=\"App_inscription[autreCaracteristiqueCorpsRel]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Taches pigmentaires </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueCorpsTache_0\"
                                   name=\"App_inscription[autreCaracteristiqueCorpsTache]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueCorpsTache_1\"
                                   name=\"App_inscription[autreCaracteristiqueCorpsTache]\"
                                   value=\"3\" required>
                        </td>
                    </tr>



                    <tr>
                        <td>
                            <label for=\"\">Varices</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_autreCaracteristiqueCorpsVar_0\"
                                   name=\"App_inscription[autreCaracteristiqueCorpsVar]\"
                                   value=\"1\" required>

                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_autreCaracteristiqueCorpsVar_1\"
                                   name=\"App_inscription[autreCaracteristiqueCorpsVar]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Vergetures</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_autreCaracteristiqueCorpsVer_0\"
                                   name=\"App_inscription[autreCaracteristiqueCorpsVer]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_autreCaracteristiqueCorpsVer_1\"
                                   name=\"App_inscription[autreCaracteristiqueCorpsVer]\"
                                   value=\"3\" required>
                        </td>
                    </tr>
                </table>

                ";
        // line 182
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 182, $this->source); })()), "autreCaracteristiqueCorpsPeau", [], "any", false, false, false, 182), "setRendered", [], "any", false, false, false, 182);
        // line 183
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 183, $this->source); })()), "autreCaracteristiqueCorpsBoutton", [], "any", false, false, false, 183), "setRendered", [], "any", false, false, false, 183);
        // line 184
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 184, $this->source); })()), "autreCaracteristiqueCorpsJambeL", [], "any", false, false, false, 184), "setRendered", [], "any", false, false, false, 184);
        // line 185
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 185, $this->source); })()), "autreCaracteristiqueCorpsJambS", [], "any", false, false, false, 185), "setRendered", [], "any", false, false, false, 185);
        // line 186
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 186, $this->source); })()), "autreCaracteristiqueCorpsOdeur", [], "any", false, false, false, 186), "setRendered", [], "any", false, false, false, 186);
        // line 187
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 187, $this->source); })()), "autreCaracteristiqueCorpsRel", [], "any", false, false, false, 187), "setRendered", [], "any", false, false, false, 187);
        // line 188
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 188, $this->source); })()), "autreCaracteristiqueCorpsTache", [], "any", false, false, false, 188), "setRendered", [], "any", false, false, false, 188);
        // line 189
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 189, $this->source); })()), "autreCaracteristiqueCorpsVar", [], "any", false, false, false, 189), "setRendered", [], "any", false, false, false, 189);
        // line 190
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 190, $this->source); })()), "autreCaracteristiqueCorpsVer", [], "any", false, false, false, 190), "setRendered", [], "any", false, false, false, 190);
        // line 191
        echo "            </div>
        </fieldset>
    </div>
</div>

<div class=\"tab\">
    <hr id=\"deo-anti\">
    <div class=\"styleCard\">
        <fieldset>
            ";
        // line 201
        echo "            <div class=\"col\">
                ";
        // line 203
        echo "
                ";
        // line 204
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 204, $this->source); })()), "deoBille", [], "any", false, false, false, 204), "setRendered", [], "any", false, false, false, 204);
        // line 205
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 205, $this->source); })()), "deoCreme", [], "any", false, false, false, 205), "setRendered", [], "any", false, false, false, 205);
        // line 206
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 206, $this->source); })()), "deoLingette", [], "any", false, false, false, 206), "setRendered", [], "any", false, false, false, 206);
        // line 207
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 207, $this->source); })()), "deoSpray", [], "any", false, false, false, 207), "setRendered", [], "any", false, false, false, 207);
        // line 208
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 208, $this->source); })()), "deoStick", [], "any", false, false, false, 208), "setRendered", [], "any", false, false, false, 208);
        // line 209
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 209, $this->source); })()), "anti_t_bille", [], "any", false, false, false, 209), "setRendered", [], "any", false, false, false, 209);
        // line 210
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 210, $this->source); })()), "anti_t_creme", [], "any", false, false, false, 210), "setRendered", [], "any", false, false, false, 210);
        // line 211
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 211, $this->source); })()), "anti_t_spray", [], "any", false, false, false, 211), "setRendered", [], "any", false, false, false, 211);
        // line 212
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 212, $this->source); })()), "anti_t_stick", [], "any", false, false, false, 212), "setRendered", [], "any", false, false, false, 212);
        // line 213
        echo "

                <table id=\"customers\">
                    <tr>

                        <th>Déodorant / Anti-transpirant *</th>
                        <th class=\"textAlignCenter\">Oui</th>
                        <th class=\"textAlignCenter\">Non</th>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Déodorant crème ou tube</label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_deoCreme_0\"
                                   name=\"App_inscription[deoCreme]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input
                                    type=\"radio\" id=\"App_inscription_deoCreme_1\"
                                    name=\"App_inscription[deoCreme]\"
                                    value=\"3\" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for=\"\">Déodorant bille, roll-on</label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_deoBille_0\"
                                   name=\"App_inscription[deoBille]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input
                                    type=\"radio\" id=\"App_inscription_deoBille_1\"
                                    name=\"App_inscription[deoBille]\"
                                    value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Pierre d'alun</label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_deoLingette_0\"
                                   name=\"App_inscription[deoLingette]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input
                                    type=\"radio\" id=\"App_inscription_deoLingette_1\"
                                    name=\"App_inscription[deoLingette]\"
                                    value=\"3\" required>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <label for=\"\">Déodorant spray</label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_deoSpray_0\"
                                   name=\"App_inscription[deoSpray]\"
                                   value=\"1\" required>

                        </td>

                        <td>
                            <input
                                    type=\"radio\" id=\"App_inscription_deoSpray_1\"
                                    name=\"App_inscription[deoSpray]\"
                                    value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Déodorant stick</label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_deoStick_0\"
                                   name=\"App_inscription[deoStick]\"
                                   value=\"1\" required>

                        </td>

                        <td>
                            <input
                                    type=\"radio\" id=\"App_inscription_deoStick_1\"
                                    name=\"App_inscription[deoStick]\"
                                    value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Anti-transpirant bille, roll-on</label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_anti_t_bille_0\"
                                   name=\"App_inscription[anti_t_bille]\"
                                   value=\"1\" required>

                        </td>

                        <td>
                            <input
                                    type=\"radio\" id=\"App_inscription_anti_t_bille_1\"
                                    name=\"App_inscription[anti_t_bille]\"  value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Anti-transpirant spray</label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_anti_t_spray_0\"
                                   name=\"App_inscription[anti_t_spray]\"
                                   value=\"1\" required>
                        </td>
                        <td>
                            <input
                                    type=\"radio\" id=\"App_inscription_anti_t_spray_1\"
                                    name=\"App_inscription[anti_t_spray]\" value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Anti-transpirant stick</label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_anti_t_stick_0\"
                                   name=\"App_inscription[anti_t_stick]\"
                                   value=\"1\" required>
                        </td>
                        <td>
                            <input
                                    type=\"radio\" id=\"App_inscription_anti_t_stick_1\"
                                    name=\"App_inscription[anti_t_stick]\"  value=\"3\" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for=\"\">Anti-transpirant crème ou tube</label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_anti_t_creme_0\"
                                   name=\"App_inscription[anti_t_creme]\"
                                   value=\"1\" required>
                        </td>
                        <td>
                            <input
                                    type=\"radio\" id=\"App_inscription_anti_t_creme_1\"
                                    name=\"App_inscription[anti_t_creme]\" value=\"3\" required>
                        </td>
                    </tr>
                </table>
            </div>
        </fieldset>
    </div>
</div>

<div class=\"tab classFemme\">
    <hr id=\"epilation\" class=\"classFemme\">
    <div class=\"styleCard\">
        <fieldset>
            <h3 class=\"fs-subtitle\"></h3>
            ";
        // line 400
        echo "
            <div class=\"col classFemme\">
                <label class=\"labelCheck\" for=\"formInscription.modeEpilation\">Mode d’épilation principal au niveau
                    des jambes : *</label>
                ";
        // line 404
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 404, $this->source); })()), "modeEpilation", [], "any", false, false, false, 404), 'row');
        echo "
            </div>

            <div class=\"col classFemme\">
                <label class=\"labelCheck\" for=\"formInscription.epillationVisage\">Mode d’épilation principal au niveau
                    du visage : *</label>
                ";
        // line 410
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 410, $this->source); })()), "epillationVisage", [], "any", false, false, false, 410), 'row');
        echo "
            </div>
            <div class=\"col  classFemme\">
                <label class=\"labelCheck\" for=\"formInscription.epillationMaillot\">Mode d’épilation principal au niveau
                    du maillot / des aisselles : *</label>
                ";
        // line 415
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 415, $this->source); })()), "epillationMaillot", [], "any", false, false, false, 415), 'row');
        echo "
            </div>

        </fieldset>
    </div>
</div>

<div class=\"tab\">
    <hr id=\"conditionG\">
    <div class=\"styleCard\">
        <fieldset>
            ";
        // line 427
        echo "            <div>
                <p>Afin de finaliser votre inscription, merci de bien vouloir confirmer les points suivants :</p>
                <div id=\"lirelasuite\" style=\"padding: 0px\">
                    <p class=\"pjs\">- La vérification, l’identification et l’authentification des données
                        transmises.</p>
                    <br>
                    <p class=\"pjs\">- Le recrutement afin de vous faire participer à différents tests, selon les
                        critères d’inclusion et d’exclusion et les directives du Promoteur du test consommateur </p>
                    <br>
                    <p class=\"pjs\">- La réalisation d’enquêtes et d’études consommateurs.</p>
                    <br>
                    <p class=\"pjs\">- La gestion des demandes de droit d’accès, de rectification et d’opposition.</p>
                    <br>
                    <p class=\"pjs\" >- Avec votre consentement : nous utilisons des informations vous concernant
                        lorsque vous nous avez donné votre accord pour un but spécifique non mentionné ci-dessus</p>
                    <br>
                    <p class=\"pjs\">- Pour protéger nos intérêts commerciaux légitimes et nos droits légaux : lorsque
                        cela est requis par la loi ou lorsque nous pensons qu'il est nécessaire de protéger nos
                        droits légaux, intérêts et intérêts d'autrui, nous utilisons des informations vous
                        concernant dans le cadre de réclamations légales, de conformité, les fonctions d'audit et
                        les informations relatives à l'acquisition, la fusion ou la vente d'une entreprise.</p>
                    <br>
                    <p class=\"pjs\">Les destinataires de vos données à caractère personnel sont les services
                        concernés de la Société SYRES, qui se trouvent en France, et les Promoteurs des études.
                        Certains de nos Promoteurs d’études peuvent se trouver en dehors de l’Union Européenne. Dans
                        ce cas, nous vous informerons de ce point avant de vous recruter pour ces études, afin
                        d’assurer que vous êtes bien d’accord pour que certaines de vos données soient transférées
                        en dehors de l’Union Européenne.</p>

                    <p class=\"pjs\">Vos données personnelles sont conservées pendant une durée qui n’excède pas la
                        durée nécessaire aux finalités pour lesquelles elles ont été collectées.</p>
                    <br>
                    <p class=\"pjs\">Vous bénéficiez d’un droit d’accès, de rectification, d’effacement de vos données
                        personnelles ou de limitation du traitement vous concernant. Vous disposez également du
                        droit de définir des directives relatives au sort de vos données à caractère personnel après
                        votre mort. Vous pouvez également, pour des motifs légitimes, vous opposer au traitement des
                        données vous concernant et disposez du droit de retirer votre consentement à tout moment.
                        Consultez le site <a href=\"#\" onClick=\"window.open('https://www.cnil.fr/', '_blank')\" style=\"padding-left: 2px\">cnil.fr</a>  pour plus d’informations sur vos droits.</p>
                    <br>
                    <p class=\"pjs\">Pour exercer ces droits ou pour toute question sur le traitement de vos données
                        dans ce dispositif, vous pouvez contacter notre délégué à la protection des données à
                        l’adresse suivante <a href=\"\">dpo@syres.fr</a>, ou par courrier postal à l’adresse suivante : 4, rue de
                        Gally 78450 Chavenay.</p>
                    <br>
                    <p class=\"pjs\">Si vous estimez, après nous avoir contactés, que vos droits ne sont pas
                        respectés, vous pouvez adresser une réclamation à la CNIL.</p>

                </div>

                <div id=\"prob\"></div>
                <div class=\"col checkUn d_flex\">
                    <div class=\"d_flex\">
                        <input type=\"checkbox\" name=\"App_inscription[checkboxUN]\" value=\"1\" required>
                        <label class=\"labelCheck\" for=\"formInscription.checkboxUN\">Je déclare avoir pris connaissance
                            et accepter sans réserve la
                            <a href=\"#\"
                               onClick=\"window.open('https://www.syres.fr/pg/politique-de-confidentialite___.html', '_blank')\"
                               style=\"padding-left: 2px\">politique de confidentialité</a> de la société SYRES.</label>
                        ";
        // line 485
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 485, $this->source); })()), "checkboxUN", [], "any", false, false, false, 485), "setRendered", [], "any", false, false, false, 485);
        // line 486
        echo "
                    </div>
                </div>

                <div class=\"col checkD d_flex\">
                    <div class=\"d_flex\">
                        <input type=\"checkbox\" name=\"App_inscription[checkboxDeux]\" value=\"1\" style=\"margin: 0px; margin-top: 5px\" required>
                        <label class=\"labelCheck\" for=\"formInscription.checkboxDeux\">J’autorise la société SYRES à traiter mes données personnelles dans le cadre des finalités énoncées précédemment. J'ai bien noté que je peux être contacté(e) par télephone et/ou par SMS et/ou par mail dans le cadre de l'organisation de tests.
                        </label>
                    </div>
                    ";
        // line 496
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 496, $this->source); })()), "checkboxDeux", [], "any", false, false, false, 496), "setRendered", [], "any", false, false, false, 496);
        // line 497
        echo "                </div>

                <div class=\"col checkD d_flex\">
                    <div>
                        <input type=\"checkbox\" name=\"App_inscription[checkboxTrois]\" value=\"1\" required>
                        <label class=\"labelCheck\" for=\"formInscription.checkboxTrois\">J’autorise la société SYRES à
                            traiter mes données personnelles sensibles, telles que les allergies et l’origine ethnique,
                            dans le cadre des finalités énoncées précédemment. </label>
                    </div>
                    ";
        // line 506
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 506, $this->source); })()), "checkboxTrois", [], "any", false, false, false, 506), "setRendered", [], "any", false, false, false, 506);
        // line 507
        echo "                </div>
                <div class=\"col checkD d_flex\">
                    <div>
                        <input type=\"checkbox\" name=\"App_inscription[checkboxQuatre]\" value=\"1\" required>
                        <label class=\"labelCheck\" for=\"formInscription.checkboxQuatre\">J’ai bien compris que, sauf en
                            cas de déplacement ou de récupération de produit, il n'y a pas de dédommagement pour les
                            tests effectués. </label>
                    </div>
                    ";
        // line 515
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 515, $this->source); })()), "checkboxQuatre", [], "any", false, false, false, 515), "setRendered", [], "any", false, false, false, 515);
        // line 516
        echo "                </div>
                <div class=\"col checkD d_flex\">
                    <div>
                        <input type=\"checkbox\" name=\"App_inscription[checkboxCinq]\" value=\"1\" required>
                        <label class=\"labelCheck\" for=\"formInscription.checkboxCinq\">J’ai bien noté que je recevrai
                            des produits et des informations relatives à des produits développés par différentes
                            sociétés. Je suis parfaitement conscient(e) que les produits et les informations sont
                            strictement confidentiels et je m’engage, en conséquence, à conserver une stricte
                            confidentialité sur lesdites informations, l’existence desdits produits ainsi que leurs
                            caractéristiques. Je m’engage donc à ne divulguer aucune de ces informations et à ne pas
                            mettre ces produits à disposition de toute autre personne. </label>
                    </div>
                    ";
        // line 528
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 528, $this->source); })()), "checkboxCinq", [], "any", false, false, false, 528), "setRendered", [], "any", false, false, false, 528);
        // line 529
        echo "                </div>

                <div style=\"text-align: left; padding-top: 25px\">
                    <p style=\"margin-top: 50px\"><strong>En plus des études consommateurs, j’autorise la société
                            Syres à me contacter afin de me proposer :</strong></p><br>
                </div>
                ";
        // line 542
        echo "                <div class=\"col checkD d_flex\">
                    <div class=\"d_flex\">
                        <input type=\"checkbox\" id=\"App_inscription_checkboxSept\" name=\"App_inscription[checkboxSept]\" class=\"checkboxSept\" value=\"1\">
                        <label class=\"labelCheck\" for=\"formInscription.checkboxSept\"> Des études exploratoires et
                            enquêtes</label>
                    </div>
                    ";
        // line 548
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 548, $this->source); })()), "checkboxSept", [], "any", false, false, false, 548), "setRendered", [], "any", false, false, false, 548);
        // line 549
        echo "                </div>

                <div class=\"col checkD d_flex\">
                    <div class=\"d_flex\">
                        <input type=\"checkbox\" id=\"App_inscription_checkboxHuit\" name=\"App_inscription[checkboxHuit]\" class=\"checkboxHuit\" value=\"1\">
                        <label class=\"labelCheck\" for=\"formInscription.checkboxSix\">Des réunions de consommateurs /
                            focus groupes</label>
                    </div>
                    ";
        // line 557
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 557, $this->source); })()), "checkboxHuit", [], "any", false, false, false, 557), "setRendered", [], "any", false, false, false, 557);
        // line 558
        echo "                </div>

                <div class=\"col checkD d_flex\">
                    <div class=\"d_flex\">
                        ";
        // line 562
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 562, $this->source); })()), "checkboxNeuf", [], "any", false, false, false, 562), 'row');
        echo "

                        ";
        // line 566
        echo "                            <label class=\"labelCheck\" for=\"formInscription.checkboxSix\">Des interviews</label>
                    </div>
                </div>
                ";
        // line 569
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 569, $this->source); })()), "checkboxNeuf", [], "any", false, false, false, 569), "setRendered", [], "any", false, false, false, 569);
        // line 570
        echo "            </div>
        </fieldset>
    </div>
</div>

<div class=\"tab\">
    <div class=\"styleCard\">
        <fieldset>
            ";
        // line 580
        echo "
            <p>
                Les informations recueillies sur ce formulaire sont enregistrées dans un fichier informatisé par la Société SYRES (4, rue de Gally 78450 Chavenay – 01.30.79.92.50) et font l’objet d’un traitement conformément aux directives de la loi \"Informatique et liberté\" n°78-17 du 6 janvier 1978 modifiée et au Règlement Général sur la Protection des Données du 27 avril 2016 (RGPD – n°2016/679/UE).<br>
                <span style=\"background-color: #0a6aa1; border-radius: 15px 50px; \">
                                <a href=\"#nogo\" onclick=\"document.getElementById('lirelasuite').style.display ='block'; this.style.display = 'none'\" style=\"color: white; padding: 7px\">Lire la suite...</a>
                </span>
            </p>
            <style>
                ul li {
                    color: black;
                }
            </style>

            <div id=\"lirelasuite\">
                <p> Avec votre consentement préalable, vos données personnelles sont traitées par la Société SYRES pour les finalités suivantes :</p>
                <div style=\"padding-left: 15px\">
                    <p>
                        - La vérification, l’identification et l’authentification des données transmises 
                    </p>
                    <br>
                    <p>
                        - Le recrutement afin de vous faire participer à différents tests, selon les critères d’inclusion et d’exclusion et les directives du Promoteur du test consommateur
                    </p>
                    <br>
                    <p>
                        - La réalisation d’enquêtes et d’études consommateurs
                    </p>
                    <br>
                    <p>
                        - La gestion des demandes de droit d’accès, de rectification et d’opposition 
                    </p>
                    <br>
                    <p>
                        - Avec votre consentement : nous utilisons des informations vous concernant lorsque vous nous avez donné votre accord pour un but spécifique non mentionné ci-dessus
                    </p>
                    <br>
                    <p>
                        - Pour protéger nos intérêts commerciaux légitimes et nos droits légaux : lorsque cela est requis par la loi ou lorsque nous pensons qu'il est nécessaire de protéger nos droits légaux, intérêts et intérêts d'autrui, nous utilisons des informations vous concernant dans le cadre de réclamations légales, de conformité, les fonctions d'audit et les informations relatives à l'acquisition, la fusion ou la vente d'une entreprise.
                    </p>
                </div>

                <p>
                    Les destinataires de vos données à caractère personnel sont les services concernés de la Société SYRES, qui se trouvent en France, et les Promoteurs des études. Certains de nos Promoteurs d’études peuvent se trouver en dehors de l’Union Européenne. Dans ce cas, nous vous informerons de ce point avant de vous recruter pour ces études, afin d’assurer que vous êtes bien d’accord pour que certaines de vos données soient transférées en dehors de l’Union Européenne.
                </p>
                <br>
                <p>
                    Vos données personnelles sont conservées pendant une durée qui n’excède pas la durée nécessaire aux finalités pour lesquelles elles ont été collectées.
                </p>
                <br>

                <p>
                    Vous bénéficiez d’un droit d’accès, de rectification, d’effacement de vos données personnelles ou de limitation du traitement vous concernant. Vous disposez également du droit de définir des directives relatives au sort de vos données à caractère personnel après votre mort. Vous pouvez également, pour des motifs légitimes, vous opposer au traitement des données vous concernant et disposez du droit de retirer votre consentement à tout moment. Consultez le site <a href=\"#\" onClick=\"window.open('https://www.cnil.fr/', '_blank')\" style=\"padding-left: 2px\">cnil.fr</a> pour plus d’informations sur vos droits.
                </p>
                <br>
                <p>
                    Pour exercer ces droits ou pour toute question sur le traitement de vos données dans ce dispositif, vous pouvez contacter notre délégué à la protection des données à l’adresse suivante <a href=\"mailto:dpo@syres.fr\">dpo@syres.fr</a>, ou par courrier postal à l’adresse suivante : 4, rue de Gally 78450 Chavenay.
                </p>
                <br>
                <p>
                    Si vous estimez, après nous avoir contactés, que vos droits ne sont pas respectés, vous pouvez adresser une réclamation à la CNIL.
                </p>
            </div>
        </fieldset>
    </div>
</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "frontend/Inscription/sections/sectionQuatres.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  705 => 580,  695 => 570,  693 => 569,  688 => 566,  683 => 562,  677 => 558,  675 => 557,  665 => 549,  663 => 548,  655 => 542,  647 => 529,  645 => 528,  631 => 516,  629 => 515,  619 => 507,  617 => 506,  606 => 497,  604 => 496,  592 => 486,  590 => 485,  530 => 427,  516 => 415,  508 => 410,  499 => 404,  493 => 400,  305 => 213,  302 => 212,  299 => 211,  296 => 210,  293 => 209,  290 => 208,  287 => 207,  284 => 206,  281 => 205,  279 => 204,  276 => 203,  273 => 201,  262 => 191,  259 => 190,  256 => 189,  253 => 188,  250 => 187,  247 => 186,  244 => 185,  241 => 184,  238 => 183,  236 => 182,  74 => 23,  61 => 12,  59 => 11,  55 => 10,  51 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"tab\">
    <hr id=\"carCorp\">
    <div class=\"styleCard\">
        <fieldset>
            <h3 class=\"fs-subtitle\"></h3>

            {#***********************#}

            <div class=\"col\">
                {{ form_row(formInscription.caracteristiqueCorps) }}
                {% do formInscription.caracteristiqueCorps.setRendered %}
            </div>




            <div class=\"col\" style=\"text-align: -webkit-center\">
                <label>Avez-vous la peau du corps sensible ? *</label><br>
                <span style=\"font-size: 13px; padding: 0px; font-style: italic\">
                        Une peau inconfortable qui, au moindre contact avec des facteurs extérieurs, démange, rougit, chauffe, tiraille.
                </span>
                <div style=\"margin: auto\">
                    {{ form_row(formInscription.autreCaracteristiqueCorpsPeau) }}
                </div>
            </div>

            <div class=\"col\">
                <table id=\"customers\">
                    <tr>
                        <th>Autres caractéristiques du corps *</th>
                        <th class=\"textAlignCenter\">Oui</th>
                        <th class=\"textAlignCenter\">Non</th>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Boutons</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_autreCaracteristiqueCorpsBoutton_0\"
                                   name=\"App_inscription[autreCaracteristiqueCorpsBoutton]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_autreCaracteristiqueCorpsBoutton_1\"
                                   name=\"App_inscription[autreCaracteristiqueCorpsBoutton]\"
                                   value=\"3\" required>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <label for=\"\">Jambes lourdes</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_autreCaracteristiqueCorpsJambeL_0\"
                                   name=\"App_inscription[autreCaracteristiqueCorpsJambeL]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_autreCaracteristiqueCorpsJambeL_1\"
                                   name=\"App_inscription[autreCaracteristiqueCorpsJambeL]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Jambes sèches</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_autreCaracteristiqueCorpsJambS_0\"
                                   name=\"App_inscription[autreCaracteristiqueCorpsJambS]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_autreCaracteristiqueCorpsJambS_1\"
                                   name=\"App_inscription[autreCaracteristiqueCorpsJambS]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Odeur corporelle / transpiration</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_autreCaracteristiqueCorpsOdeur_0\"
                                   name=\"App_inscription[autreCaracteristiqueCorpsOdeur]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_autreCaracteristiqueCorpsOdeur_1\"
                                   name=\"App_inscription[autreCaracteristiqueCorpsOdeur]\"
                                   value=\"3\" required>
                        </td>
                    </tr>





                    <tr>
                        <td>
                            <label for=\"\">Relâchement cutané</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_autreCaracteristiqueCorpsRel_0\"
                                   name=\"App_inscription[autreCaracteristiqueCorpsRel]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_autreCaracteristiqueCorpsRel_1\"
                                   name=\"App_inscription[autreCaracteristiqueCorpsRel]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Taches pigmentaires </label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueCorpsTache_0\"
                                   name=\"App_inscription[autreCaracteristiqueCorpsTache]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_autreCaracteristiqueCorpsTache_1\"
                                   name=\"App_inscription[autreCaracteristiqueCorpsTache]\"
                                   value=\"3\" required>
                        </td>
                    </tr>



                    <tr>
                        <td>
                            <label for=\"\">Varices</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_autreCaracteristiqueCorpsVar_0\"
                                   name=\"App_inscription[autreCaracteristiqueCorpsVar]\"
                                   value=\"1\" required>

                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_autreCaracteristiqueCorpsVar_1\"
                                   name=\"App_inscription[autreCaracteristiqueCorpsVar]\"
                                   value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Vergetures</label>
                        </td>
                        <td>
                            <input type=\"radio\" id=\"App_inscription_autreCaracteristiqueCorpsVer_0\"
                                   name=\"App_inscription[autreCaracteristiqueCorpsVer]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input type=\"radio\" id=\"App_inscription_autreCaracteristiqueCorpsVer_1\"
                                   name=\"App_inscription[autreCaracteristiqueCorpsVer]\"
                                   value=\"3\" required>
                        </td>
                    </tr>
                </table>

                {% do formInscription.autreCaracteristiqueCorpsPeau.setRendered %}
                {% do formInscription.autreCaracteristiqueCorpsBoutton.setRendered %}
                {% do formInscription.autreCaracteristiqueCorpsJambeL.setRendered %}
                {% do formInscription.autreCaracteristiqueCorpsJambS.setRendered %}
                {% do formInscription.autreCaracteristiqueCorpsOdeur.setRendered %}
                {% do formInscription.autreCaracteristiqueCorpsRel.setRendered %}
                {% do formInscription.autreCaracteristiqueCorpsTache.setRendered %}
                {% do formInscription.autreCaracteristiqueCorpsVar.setRendered %}
                {% do formInscription.autreCaracteristiqueCorpsVer.setRendered %}
            </div>
        </fieldset>
    </div>
</div>

<div class=\"tab\">
    <hr id=\"deo-anti\">
    <div class=\"styleCard\">
        <fieldset>
            {#***********************#}
            <div class=\"col\">
                {#{ form_row(formInscription.deo) }#}

                {% do formInscription.deoBille.setRendered %}
                {% do formInscription.deoCreme.setRendered %}
                {% do formInscription.deoLingette.setRendered %}
                {% do formInscription.deoSpray.setRendered %}
                {% do formInscription.deoStick.setRendered %}
                {% do formInscription.anti_t_bille.setRendered %}
                {% do formInscription.anti_t_creme.setRendered %}
                {% do formInscription.anti_t_spray.setRendered %}
                {% do formInscription.anti_t_stick.setRendered %}


                <table id=\"customers\">
                    <tr>

                        <th>Déodorant / Anti-transpirant *</th>
                        <th class=\"textAlignCenter\">Oui</th>
                        <th class=\"textAlignCenter\">Non</th>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Déodorant crème ou tube</label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_deoCreme_0\"
                                   name=\"App_inscription[deoCreme]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input
                                    type=\"radio\" id=\"App_inscription_deoCreme_1\"
                                    name=\"App_inscription[deoCreme]\"
                                    value=\"3\" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for=\"\">Déodorant bille, roll-on</label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_deoBille_0\"
                                   name=\"App_inscription[deoBille]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input
                                    type=\"radio\" id=\"App_inscription_deoBille_1\"
                                    name=\"App_inscription[deoBille]\"
                                    value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Pierre d'alun</label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_deoLingette_0\"
                                   name=\"App_inscription[deoLingette]\"
                                   value=\"1\" required>
                        </td>

                        <td>
                            <input
                                    type=\"radio\" id=\"App_inscription_deoLingette_1\"
                                    name=\"App_inscription[deoLingette]\"
                                    value=\"3\" required>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <label for=\"\">Déodorant spray</label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_deoSpray_0\"
                                   name=\"App_inscription[deoSpray]\"
                                   value=\"1\" required>

                        </td>

                        <td>
                            <input
                                    type=\"radio\" id=\"App_inscription_deoSpray_1\"
                                    name=\"App_inscription[deoSpray]\"
                                    value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Déodorant stick</label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_deoStick_0\"
                                   name=\"App_inscription[deoStick]\"
                                   value=\"1\" required>

                        </td>

                        <td>
                            <input
                                    type=\"radio\" id=\"App_inscription_deoStick_1\"
                                    name=\"App_inscription[deoStick]\"
                                    value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Anti-transpirant bille, roll-on</label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_anti_t_bille_0\"
                                   name=\"App_inscription[anti_t_bille]\"
                                   value=\"1\" required>

                        </td>

                        <td>
                            <input
                                    type=\"radio\" id=\"App_inscription_anti_t_bille_1\"
                                    name=\"App_inscription[anti_t_bille]\"  value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Anti-transpirant spray</label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_anti_t_spray_0\"
                                   name=\"App_inscription[anti_t_spray]\"
                                   value=\"1\" required>
                        </td>
                        <td>
                            <input
                                    type=\"radio\" id=\"App_inscription_anti_t_spray_1\"
                                    name=\"App_inscription[anti_t_spray]\" value=\"3\" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for=\"\">Anti-transpirant stick</label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_anti_t_stick_0\"
                                   name=\"App_inscription[anti_t_stick]\"
                                   value=\"1\" required>
                        </td>
                        <td>
                            <input
                                    type=\"radio\" id=\"App_inscription_anti_t_stick_1\"
                                    name=\"App_inscription[anti_t_stick]\"  value=\"3\" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for=\"\">Anti-transpirant crème ou tube</label>
                        </td>
                        <td>
                            <input type=\"radio\"
                                   id=\"App_inscription_anti_t_creme_0\"
                                   name=\"App_inscription[anti_t_creme]\"
                                   value=\"1\" required>
                        </td>
                        <td>
                            <input
                                    type=\"radio\" id=\"App_inscription_anti_t_creme_1\"
                                    name=\"App_inscription[anti_t_creme]\" value=\"3\" required>
                        </td>
                    </tr>
                </table>
            </div>
        </fieldset>
    </div>
</div>

<div class=\"tab classFemme\">
    <hr id=\"epilation\" class=\"classFemme\">
    <div class=\"styleCard\">
        <fieldset>
            <h3 class=\"fs-subtitle\"></h3>
            {#***********************#}

            <div class=\"col classFemme\">
                <label class=\"labelCheck\" for=\"formInscription.modeEpilation\">Mode d’épilation principal au niveau
                    des jambes : *</label>
                {{ form_row(formInscription.modeEpilation) }}
            </div>

            <div class=\"col classFemme\">
                <label class=\"labelCheck\" for=\"formInscription.epillationVisage\">Mode d’épilation principal au niveau
                    du visage : *</label>
                {{ form_row(formInscription.epillationVisage) }}
            </div>
            <div class=\"col  classFemme\">
                <label class=\"labelCheck\" for=\"formInscription.epillationMaillot\">Mode d’épilation principal au niveau
                    du maillot / des aisselles : *</label>
                {{ form_row(formInscription.epillationMaillot) }}
            </div>

        </fieldset>
    </div>
</div>

<div class=\"tab\">
    <hr id=\"conditionG\">
    <div class=\"styleCard\">
        <fieldset>
            {#***********************#}
            <div>
                <p>Afin de finaliser votre inscription, merci de bien vouloir confirmer les points suivants :</p>
                <div id=\"lirelasuite\" style=\"padding: 0px\">
                    <p class=\"pjs\">- La vérification, l’identification et l’authentification des données
                        transmises.</p>
                    <br>
                    <p class=\"pjs\">- Le recrutement afin de vous faire participer à différents tests, selon les
                        critères d’inclusion et d’exclusion et les directives du Promoteur du test consommateur </p>
                    <br>
                    <p class=\"pjs\">- La réalisation d’enquêtes et d’études consommateurs.</p>
                    <br>
                    <p class=\"pjs\">- La gestion des demandes de droit d’accès, de rectification et d’opposition.</p>
                    <br>
                    <p class=\"pjs\" >- Avec votre consentement : nous utilisons des informations vous concernant
                        lorsque vous nous avez donné votre accord pour un but spécifique non mentionné ci-dessus</p>
                    <br>
                    <p class=\"pjs\">- Pour protéger nos intérêts commerciaux légitimes et nos droits légaux : lorsque
                        cela est requis par la loi ou lorsque nous pensons qu'il est nécessaire de protéger nos
                        droits légaux, intérêts et intérêts d'autrui, nous utilisons des informations vous
                        concernant dans le cadre de réclamations légales, de conformité, les fonctions d'audit et
                        les informations relatives à l'acquisition, la fusion ou la vente d'une entreprise.</p>
                    <br>
                    <p class=\"pjs\">Les destinataires de vos données à caractère personnel sont les services
                        concernés de la Société SYRES, qui se trouvent en France, et les Promoteurs des études.
                        Certains de nos Promoteurs d’études peuvent se trouver en dehors de l’Union Européenne. Dans
                        ce cas, nous vous informerons de ce point avant de vous recruter pour ces études, afin
                        d’assurer que vous êtes bien d’accord pour que certaines de vos données soient transférées
                        en dehors de l’Union Européenne.</p>

                    <p class=\"pjs\">Vos données personnelles sont conservées pendant une durée qui n’excède pas la
                        durée nécessaire aux finalités pour lesquelles elles ont été collectées.</p>
                    <br>
                    <p class=\"pjs\">Vous bénéficiez d’un droit d’accès, de rectification, d’effacement de vos données
                        personnelles ou de limitation du traitement vous concernant. Vous disposez également du
                        droit de définir des directives relatives au sort de vos données à caractère personnel après
                        votre mort. Vous pouvez également, pour des motifs légitimes, vous opposer au traitement des
                        données vous concernant et disposez du droit de retirer votre consentement à tout moment.
                        Consultez le site <a href=\"#\" onClick=\"window.open('https://www.cnil.fr/', '_blank')\" style=\"padding-left: 2px\">cnil.fr</a>  pour plus d’informations sur vos droits.</p>
                    <br>
                    <p class=\"pjs\">Pour exercer ces droits ou pour toute question sur le traitement de vos données
                        dans ce dispositif, vous pouvez contacter notre délégué à la protection des données à
                        l’adresse suivante <a href=\"\">dpo@syres.fr</a>, ou par courrier postal à l’adresse suivante : 4, rue de
                        Gally 78450 Chavenay.</p>
                    <br>
                    <p class=\"pjs\">Si vous estimez, après nous avoir contactés, que vos droits ne sont pas
                        respectés, vous pouvez adresser une réclamation à la CNIL.</p>

                </div>

                <div id=\"prob\"></div>
                <div class=\"col checkUn d_flex\">
                    <div class=\"d_flex\">
                        <input type=\"checkbox\" name=\"App_inscription[checkboxUN]\" value=\"1\" required>
                        <label class=\"labelCheck\" for=\"formInscription.checkboxUN\">Je déclare avoir pris connaissance
                            et accepter sans réserve la
                            <a href=\"#\"
                               onClick=\"window.open('https://www.syres.fr/pg/politique-de-confidentialite___.html', '_blank')\"
                               style=\"padding-left: 2px\">politique de confidentialité</a> de la société SYRES.</label>
                        {% do formInscription.checkboxUN.setRendered %}

                    </div>
                </div>

                <div class=\"col checkD d_flex\">
                    <div class=\"d_flex\">
                        <input type=\"checkbox\" name=\"App_inscription[checkboxDeux]\" value=\"1\" style=\"margin: 0px; margin-top: 5px\" required>
                        <label class=\"labelCheck\" for=\"formInscription.checkboxDeux\">J’autorise la société SYRES à traiter mes données personnelles dans le cadre des finalités énoncées précédemment. J'ai bien noté que je peux être contacté(e) par télephone et/ou par SMS et/ou par mail dans le cadre de l'organisation de tests.
                        </label>
                    </div>
                    {% do formInscription.checkboxDeux.setRendered %}
                </div>

                <div class=\"col checkD d_flex\">
                    <div>
                        <input type=\"checkbox\" name=\"App_inscription[checkboxTrois]\" value=\"1\" required>
                        <label class=\"labelCheck\" for=\"formInscription.checkboxTrois\">J’autorise la société SYRES à
                            traiter mes données personnelles sensibles, telles que les allergies et l’origine ethnique,
                            dans le cadre des finalités énoncées précédemment. </label>
                    </div>
                    {% do formInscription.checkboxTrois.setRendered %}
                </div>
                <div class=\"col checkD d_flex\">
                    <div>
                        <input type=\"checkbox\" name=\"App_inscription[checkboxQuatre]\" value=\"1\" required>
                        <label class=\"labelCheck\" for=\"formInscription.checkboxQuatre\">J’ai bien compris que, sauf en
                            cas de déplacement ou de récupération de produit, il n'y a pas de dédommagement pour les
                            tests effectués. </label>
                    </div>
                    {% do formInscription.checkboxQuatre.setRendered %}
                </div>
                <div class=\"col checkD d_flex\">
                    <div>
                        <input type=\"checkbox\" name=\"App_inscription[checkboxCinq]\" value=\"1\" required>
                        <label class=\"labelCheck\" for=\"formInscription.checkboxCinq\">J’ai bien noté que je recevrai
                            des produits et des informations relatives à des produits développés par différentes
                            sociétés. Je suis parfaitement conscient(e) que les produits et les informations sont
                            strictement confidentiels et je m’engage, en conséquence, à conserver une stricte
                            confidentialité sur lesdites informations, l’existence desdits produits ainsi que leurs
                            caractéristiques. Je m’engage donc à ne divulguer aucune de ces informations et à ne pas
                            mettre ces produits à disposition de toute autre personne. </label>
                    </div>
                    {% do formInscription.checkboxCinq.setRendered %}
                </div>

                <div style=\"text-align: left; padding-top: 25px\">
                    <p style=\"margin-top: 50px\"><strong>En plus des études consommateurs, j’autorise la société
                            Syres à me contacter afin de me proposer :</strong></p><br>
                </div>
                {#
                <div class=\"col checkD d_flex\">
                    {{ form_row(formInscription.checkboxSix) }}
                    <label class=\"labelCheck\" for=\"formInscription.checkboxSix\"> Des études consommateurs</label>
                </div>

                #}
                <div class=\"col checkD d_flex\">
                    <div class=\"d_flex\">
                        <input type=\"checkbox\" id=\"App_inscription_checkboxSept\" name=\"App_inscription[checkboxSept]\" class=\"checkboxSept\" value=\"1\">
                        <label class=\"labelCheck\" for=\"formInscription.checkboxSept\"> Des études exploratoires et
                            enquêtes</label>
                    </div>
                    {% do formInscription.checkboxSept.setRendered %}
                </div>

                <div class=\"col checkD d_flex\">
                    <div class=\"d_flex\">
                        <input type=\"checkbox\" id=\"App_inscription_checkboxHuit\" name=\"App_inscription[checkboxHuit]\" class=\"checkboxHuit\" value=\"1\">
                        <label class=\"labelCheck\" for=\"formInscription.checkboxSix\">Des réunions de consommateurs /
                            focus groupes</label>
                    </div>
                    {% do formInscription.checkboxHuit.setRendered %}
                </div>

                <div class=\"col checkD d_flex\">
                    <div class=\"d_flex\">
                        {{ form_row(formInscription.checkboxNeuf) }}

                        {#
                                                    <input type=\"checkbox\" id=\"App_inscription_checkboxNeuf\" name=\"App_inscription[checkboxNeuf]\" class=\"checkboxNeuf\" value=\"1\">
                        #}                            <label class=\"labelCheck\" for=\"formInscription.checkboxSix\">Des interviews</label>
                    </div>
                </div>
                {% do formInscription.checkboxNeuf.setRendered %}
            </div>
        </fieldset>
    </div>
</div>

<div class=\"tab\">
    <div class=\"styleCard\">
        <fieldset>
            {#
            color: white; border: 2px solid black; padding: 3px; background-color: rgb(41, 128, 185); border-radius: 9px; display: none;#}

            <p>
                Les informations recueillies sur ce formulaire sont enregistrées dans un fichier informatisé par la Société SYRES (4, rue de Gally 78450 Chavenay – 01.30.79.92.50) et font l’objet d’un traitement conformément aux directives de la loi \"Informatique et liberté\" n°78-17 du 6 janvier 1978 modifiée et au Règlement Général sur la Protection des Données du 27 avril 2016 (RGPD – n°2016/679/UE).<br>
                <span style=\"background-color: #0a6aa1; border-radius: 15px 50px; \">
                                <a href=\"#nogo\" onclick=\"document.getElementById('lirelasuite').style.display ='block'; this.style.display = 'none'\" style=\"color: white; padding: 7px\">Lire la suite...</a>
                </span>
            </p>
            <style>
                ul li {
                    color: black;
                }
            </style>

            <div id=\"lirelasuite\">
                <p> Avec votre consentement préalable, vos données personnelles sont traitées par la Société SYRES pour les finalités suivantes :</p>
                <div style=\"padding-left: 15px\">
                    <p>
                        - La vérification, l’identification et l’authentification des données transmises 
                    </p>
                    <br>
                    <p>
                        - Le recrutement afin de vous faire participer à différents tests, selon les critères d’inclusion et d’exclusion et les directives du Promoteur du test consommateur
                    </p>
                    <br>
                    <p>
                        - La réalisation d’enquêtes et d’études consommateurs
                    </p>
                    <br>
                    <p>
                        - La gestion des demandes de droit d’accès, de rectification et d’opposition 
                    </p>
                    <br>
                    <p>
                        - Avec votre consentement : nous utilisons des informations vous concernant lorsque vous nous avez donné votre accord pour un but spécifique non mentionné ci-dessus
                    </p>
                    <br>
                    <p>
                        - Pour protéger nos intérêts commerciaux légitimes et nos droits légaux : lorsque cela est requis par la loi ou lorsque nous pensons qu'il est nécessaire de protéger nos droits légaux, intérêts et intérêts d'autrui, nous utilisons des informations vous concernant dans le cadre de réclamations légales, de conformité, les fonctions d'audit et les informations relatives à l'acquisition, la fusion ou la vente d'une entreprise.
                    </p>
                </div>

                <p>
                    Les destinataires de vos données à caractère personnel sont les services concernés de la Société SYRES, qui se trouvent en France, et les Promoteurs des études. Certains de nos Promoteurs d’études peuvent se trouver en dehors de l’Union Européenne. Dans ce cas, nous vous informerons de ce point avant de vous recruter pour ces études, afin d’assurer que vous êtes bien d’accord pour que certaines de vos données soient transférées en dehors de l’Union Européenne.
                </p>
                <br>
                <p>
                    Vos données personnelles sont conservées pendant une durée qui n’excède pas la durée nécessaire aux finalités pour lesquelles elles ont été collectées.
                </p>
                <br>

                <p>
                    Vous bénéficiez d’un droit d’accès, de rectification, d’effacement de vos données personnelles ou de limitation du traitement vous concernant. Vous disposez également du droit de définir des directives relatives au sort de vos données à caractère personnel après votre mort. Vous pouvez également, pour des motifs légitimes, vous opposer au traitement des données vous concernant et disposez du droit de retirer votre consentement à tout moment. Consultez le site <a href=\"#\" onClick=\"window.open('https://www.cnil.fr/', '_blank')\" style=\"padding-left: 2px\">cnil.fr</a> pour plus d’informations sur vos droits.
                </p>
                <br>
                <p>
                    Pour exercer ces droits ou pour toute question sur le traitement de vos données dans ce dispositif, vous pouvez contacter notre délégué à la protection des données à l’adresse suivante <a href=\"mailto:dpo@syres.fr\">dpo@syres.fr</a>, ou par courrier postal à l’adresse suivante : 4, rue de Gally 78450 Chavenay.
                </p>
                <br>
                <p>
                    Si vous estimez, après nous avoir contactés, que vos droits ne sont pas respectés, vous pouvez adresser une réclamation à la CNIL.
                </p>
            </div>
        </fieldset>
    </div>
</div>

", "frontend/Inscription/sections/sectionQuatres.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/Inscription/sections/sectionQuatres.twig");
    }
}
