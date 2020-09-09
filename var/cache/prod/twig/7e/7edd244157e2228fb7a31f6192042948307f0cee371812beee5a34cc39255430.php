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

/* frontend/Inscription/confirme_inscription.html.twig */
class __TwigTemplate_a92a9b6f5d953730c98436f00eb4c006c9a4323c1632ccddb89eab5d1c2260eb extends Template
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
        return "frontend/inscription.layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("frontend/inscription.layout.html.twig", "frontend/Inscription/confirme_inscription.html.twig", 1);
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
        p{
            line-height: 2.1;
        }
    </style>
";
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "<link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

    <div class=\"w3-container\" style=\"margin-top: 150px; width: 60%; margin: auto\">
        <h2 style=\"text-align: right\"> <i class=\"material-icons\" style=\"color: #2980b9; font-size: 76px\">
                check
            </i></h2>
                <div class=\"w3-card-4\" >
                <!-- For IE9 or below. -->
                <div class=\"w3-container w3-center\" style=\"padding-top: 20px\">
                    <p>Merci ! Votre formulaire d'inscription a bien été transmis</p>

                    <div class=\"tab\" style=\"margin: auto\">
                        <div class=\"styleCard\">
                            <fieldset>
                                ";
        // line 42
        echo "                                <p>Nous vous remercions pour le temps que vous nous avez accordé pour compléter ce formulaire. Vous recevrez prochainement un mail de confirmation d’inscription.</p>
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
        return "frontend/Inscription/confirme_inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 42,  79 => 26,  75 => 25,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/Inscription/confirme_inscription.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/Inscription/confirme_inscription.html.twig");
    }
}
