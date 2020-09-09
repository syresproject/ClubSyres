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

/* frontend/test_a_venir/test_a_venir.index.html.twig */
class __TwigTemplate_143f2857672a530b9d3768b0fbb63ec2ddebbfa00a2f3086f744b6082244ef58 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("frontend/_layout.html.twig", "frontend/test_a_venir/test_a_venir.index.html.twig", 1);
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
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/styles/test_a_venir.css"), "html", null, true);
        echo "\"           rel=\"stylesheet\" type=\"text/css\">

";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "

   <div class=\"container\" id=\"marge-top\">
       <div class=\"header-clear-large\"></div>
       <div class=\"container heading-style-5\">
           <h4 class=\"heading-title inline-header\">
               ";
        // line 16
        echo "Test A Venir";
        echo "
               ";
        // line 17
        $this->loadTemplate("frontend/header-title.html.twig", "frontend/test_a_venir/test_a_venir.index.html.twig", 17)->display($context);
        // line 18
        echo "           </h4>
            <div style=\"z-index: -1\">
                <i class=\"fa fa-align-left heading-icon\" style=\"z-index: -1\"></i>
            </div>
           <div class=\"line bg-black\"></div>
       </div>


       <div style=\"padding: 0px;\">
           <p class=\"p_align\">Participez à l'un des tests que je vous propose : démaquillant, lotion, soin...
               Il y en a au moins un qui vous correspondra !</p>
           </br>
           <p class=\"p_align\">Je vous rappelle que vous ne pouvez pas faire plusieurs tests en même temps.</p>
           <p class=\"p_align\">Après chaque test, vous devez attendre 2 mois minimum avant de pouvoir à nouveau tester
               un autre produit.</p>
           <p class=\"p_align\">Si vous êtes déjà en test ou si vous avez testé récemment (moins de 2 mois) je ne pourrais
               malheureusement pas vous proposer de test.
           </p>

           <table id=\"customers\">
               <tr>
                   <th class=\"testCenter\">Nom du test</th>
                   <th class=\"testCenter\">Sexe</th>
                   <th class=\"testCenter\">Age</th>
                   <th class=\"testCenter\">Date limite</th>
                   <th class=\"testCenter\" style=\"text-align: center\">Souhaite tester</th>
               </tr>
               <tr style=\"display: none\">
               <td>Deodorant</td>
               <td>Femme</td>
               <td>20 => 50</td>
               <td>14/09</td>
               <td>
                   <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_test_a_venirs_deo_create");
        echo "\">
                       <button class=\"btn btn-primary\">Postuler</button></a>
                   </td>
               </tr>
           </table>
       </div>
   </div>
";
    }

    // line 59
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

";
    }

    public function getTemplateName()
    {
        return "frontend/test_a_venir/test_a_venir.index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 60,  131 => 59,  119 => 51,  84 => 18,  82 => 17,  78 => 16,  68 => 10,  64 => 9,  57 => 4,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/test_a_venir/test_a_venir.index.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/test_a_venir/test_a_venir.index.html.twig");
    }
}
