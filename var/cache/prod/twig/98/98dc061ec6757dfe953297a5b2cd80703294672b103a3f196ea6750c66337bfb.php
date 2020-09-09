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

/* frontend/Inscription/affichage_pre_inscription.html.twig */
class __TwigTemplate_e68387aae9bfaf79c11c7b749f7e1cb7f639e04bbc198b7fb8e84caac0b9eadc extends Template
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
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "AppBundle:Frontend:ins_show_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("AppBundle:Frontend:ins_show_layout.html.twig", "frontend/Inscription/affichage_pre_inscription.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
";
    }

    // line 22
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "<link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

    <div class=\"w3-container\" style=\"margin-top: 150px; width: 60%; left: 20%; right: 20%\">
        <h2 style=\"text-align: right\"> <i class=\"material-icons\" style=\"color: #2980b9; font-size: 76px\">
                check
            </i></h2>
                <div class=\"w3-card-4\" >
                <!-- For IE9 or below. -->
                <div class=\"w3-container w3-center\" style=\"padding-top: 20px\">
                    <p>Merci ! Votre formulaire d'inscription a bien été transmis</p>

                    <div class=\"tab\">
                        <div class=\"styleCard\">
                            <fieldset>
                                ";
        // line 39
        echo "                                <p>Tu peux mettre : \"Nous vous remercions pour le temps que vous nous avez accordé pour compléter ce formulaire. Vous recevrez prochainement un mail de confirmation d’inscription.\"</p>
                            </fieldset>
                        </div>
                    </div>
                </div>
        </div>
    </div>



    </div>

";
    }

    public function getTemplateName()
    {
        return "frontend/Inscription/affichage_pre_inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 39,  76 => 23,  72 => 22,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/Inscription/affichage_pre_inscription.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/Inscription/affichage_pre_inscription.html.twig");
    }
}
