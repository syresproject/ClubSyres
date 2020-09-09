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

/* frontend/fag/index.html.twig */
class __TwigTemplate_dcd62c7ad6d9e8579650574cf4d9764d51fa186c485689362d9afc60a3a86166 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "frontend/_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("frontend/_layout.html.twig", "frontend/fag/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        p .i_m{
            font-size: 48px; color: #2980b9
        }
    </style>
";
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "

    <div class=\"container\" style=\"margin-top: 150px\">
        <div class=\"container heading-style-5\">
            <h4 class=\"heading-title\">";
        // line 16
        echo "FAQ";
        echo "</h4>
            <i class=\"fa fa-question heading-icon\"></i>
            <div class=\"line bg-black\"></div>
        </div>


        <div class=\"accordion\" id=\"accordionExample\">
        <div class=\"card\">
            <div class=\"card-header\" id=\"headingOne\">
                <h2 class=\"mb-0\">
                    <button class=\"btn btn-link btn-block text-left\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                        Mon test doit commencer et je n’ai pas encore reçu mon colis. Que faire ?
                    </button>
                </h2>
            </div>

            <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                <div class=\"card-body\">
                    Lorsqu’un test commence le lundi, les colis partent de chez nous le jeudi précédent. Il peut arriver que la livraison des colis prenne un peu de retard. Si vous n’avez toujours pas reçu votre colis le mercredi, merci de nous appeler pour nous prévenir.
                </div>
            </div>
        </div>
        <div class=\"card\">
            <div class=\"card-header\" id=\"headingTwo\">
                <h2 class=\"mb-0\">
                    <button class=\"btn btn-link btn-block text-left collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                        Comment fonctionne le processus de sélection ?
                    </button>
                </h2>
            </div>
            <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionExample\">
                <div class=\"card-body\">
                    Pour chaque test, nous sélectionnons un certain nombre de panélistes en fonction des critères du test et de vos caractéristiques. Une fois cette présélection effectuée, nous vous appelons afin de tout valider et de vous expliquer les caractéristiques du test, si vous répondez à tous les critères définis pour ce dernier.
                    Il peut arriver qu’un filtre à compléter en ligne vous soit envoyé avant de vous appeler.
                    Vous ne pouvez participer qu'à un seul test à la fois.
                </div>
            </div>
        </div>
        <div class=\"card\">
            <div class=\"card-header\" id=\"headingThree\">
                <h2 class=\"mb-0\">
                    <button class=\"btn btn-link btn-block text-left collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                        Les produits testés sont-ils sûrs ?
                    </button>
                </h2>
            </div>
            <div id=\"collapseThree\" class=\"collapse\" aria-labelledby=\"headingThree\" data-parent=\"#accordionExample\">
                <div class=\"card-body\">
                    Tous les produits testés ont subi des tests cliniques et dermatologiques, garantissant que le produit que vous testez est aussi sûr que de l'acheter directement dans le commerce.
                </div>
            </div>
        </div>

        <div class=\"card\">
            <div class=\"card-header\" id=\"headingFour\">
                <h2 class=\"mb-0\">
                    <button class=\"btn btn-link btn-block text-left collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseFour\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                        D'où viennent les produits à tester ?                    </button>
                </h2>
            </div>
            <div id=\"collapseFour\" class=\"collapse\" aria-labelledby=\"headingFour\" data-parent=\"#accordionExample\">
                <div class=\"card-body\">
                    Les produits que nous testons sont fournis par les plus grandes marques mondiales de cosmétiques.                </div>
            </div>
        </div>

        <div class=\"card\">
            <div class=\"card-header\" id=\"headingFive\">
                <h2 class=\"mb-0\">
                    <button class=\"btn btn-link btn-block text-left collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseFive\" aria-expanded=\"false\" aria-controls=\"collapseFive\">
                        Pourquoi dois-je attendre deux mois avant de pouvoir tester à nouveau ?
                    </button>
                </h2>
            </div>
            <div id=\"collapseFive\" class=\"collapse\" aria-labelledby=\"headingFive\" data-parent=\"#accordionExample\">
                <div class=\"card-body\">
                    Notre politique d'interruption de 2 mois vise à garantir que votre peau soit bien reposée et que votre dernier test n'impacte pas l'efficacité du suivant.                </div>
            </div>
        </div>

        <div class=\"card\">
            <div class=\"card-header\" id=\"headingSix\">
                <h2 class=\"mb-0\">
                    <button class=\"btn btn-link btn-block text-left collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseSix\" aria-expanded=\"false\" aria-controls=\"collapseSix\">
                        Que se passe-t-il si j'ai une réaction ?
                    </button>
                </h2>
            </div>
            <div id=\"collapseSix\" class=\"collapse\" aria-labelledby=\"headingSix\" data-parent=\"#accordionExample\">
                <div class=\"card-body\">
                    Si une réaction se produit pendant le test, veuillez-nous en informer avant d'arrêter le test.
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\" style=\"margin: 20px\">
        <div class=\"col-md-12\" style=\" \">  <div class=\"container heading-style-5\">
                <h4 class=\"heading-title\">";
        // line 114
        echo "NOS SITES";
        echo "</h4>
                <i class=\"fa fa-home heading-icon\"></i>
                <div class=\"line bg-black\"></div>
            </div></div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <img class=\"\"   src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./images_c_faq/syreschavenay.jpg"), "html", null, true);
        echo "\" style=\"width:100%; height: 348px; max-width: 500px; margin: auto\">
            <div style=\"text-align: center\">
                <p>
                    <i class=\"fa fa-map-marker heading-icon i_m\"></i>
                    CHAVENAY (30 mn de Paris ouest)
                </p>
                <p>Siège social</p>
                <p>Téléphone : +33 (0)1 30 79 92 50</p>
                <p>4 rue de Gally</p>
                <p>78450 CHAVENAY</p>
            </div>
        </div>

        <div class=\"col-md-6\">
            <img class=\"\"   src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images_c_faq/baratestparis.jpg"), "html", null, true);
        echo "\" style=\"width:100%; height: 348px; max-width: 400px; margin: auto\">
            <div style=\"text-align: center\">
                <p>
                    <i class=\"fa fa-map-marker heading-icon i_m\"></i>
                    BAR À TESTS
                </p>
                <p>1er Bar à Tests cosmétiques à Paris.</p>
                <p>Téléphone : +33 (0)1 43 59 26 75</p>
                <p>88 rue de longchamp </p>
                <p>75016 PARIS</p>
            </div>
        </div>
    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "frontend/fag/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 135,  187 => 121,  177 => 114,  76 => 16,  68 => 12,  64 => 11,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/fag/index.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/fag/index.html.twig");
    }
}
