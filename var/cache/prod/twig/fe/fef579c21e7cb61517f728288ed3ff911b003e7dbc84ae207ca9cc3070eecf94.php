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

/* frontend/test_a_venir/deo/deo.html.twig */
class __TwigTemplate_b3b8a465de41f5d7aa68312448b5a17b7120faf9d0767ce6906ad2f8cad87829 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("frontend/_layout.html.twig", "frontend/test_a_venir/deo/deo.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/litera/bootstrap.min.css\">

";
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    <div class=\"jumbotron\">
        <h1 class=\"display-3\">Test Deo</h1>
        <p class=\"lead\">


            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        <div class=\"my-custom-class-for-errors\">
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
        </div>

        <fieldset>
            <div class=\"form-group\">
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "utilisateur_deo", [], "any", false, false, false, 24), 'label', ["label" => "Etes-vous utilisatrice de déodorant ou anti-transpirant"]);
        echo "
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "utilisateur_deo", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>

            <table class=\"table table-hover\">
                <thead>
                <tr>
                    <th scope=\"col\">Pierre d'Alun </th>
                    <th scope=\"col\">Oui</th>
                    <th scope=\"col\">Non</th>
                </tr>
                </thead>
                <tbody>


                <tr class=\"table-active\">
                <div id=\"deo_pierre_alun\">
                    <th scope=\"row\">Votre déodorant contient-il de la pierre d'alun ?</th>
                    <td>
                        <input type=\"radio\" id=\"deo_pierre_alun_0\" name=\"deo[pierre_alun]\" required=\"required\" value=\"Oui\"></td>
                    <td>
                    <input type=\"radio\" id=\"deo_pierre_alun_1\" name=\"deo[pierre_alun]\" required=\"required\" value=\"Non\"></td>
                </div>
                </tr>
                ";
        // line 48
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "pierre_alun", [], "any", false, false, false, 48), "setRendered", [], "any", false, false, false, 48);
        // line 49
        echo "                </tbody>
            </table>

            <table class=\"table table-hover\">
                <thead>
                <tr>
                    <th scope=\"col\">Sels d'aluminium </th>
                    <th scope=\"col\">Oui</th>
                    <th scope=\"col\">Non</th>
                </tr>
                </thead>
                <tbody>
                    <tr class=\"table-active\">
                        <th scope=\"row\">Votre déodorant contient-il des sels d'aluminium ?</th>
                        <div id=\"deo_sels_alu\">
                          <td><input
                                    type=\"radio\" id=\"deo_sels_alu_0\" name=\"deo[sels_alu]\" value=\"Oui\"></td>

                           <td> <input type=\"radio\" id=\"deo_sels_alu_1\" name=\"deo[sels_alu]\"
                                                                           value=\"Non\"></td>
                        </div>
                    </tr>

                ";
        // line 72
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "sels_alu", [], "any", false, false, false, 72), "setRendered", [], "any", false, false, false, 72);
        // line 73
        echo "                </tbody>
            </table>

            <div class=\"form-group\">
                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "forme_deo", [], "any", false, false, false, 77), 'label', ["label" => "Sous quel forme ce trouve votre Deo"]);
        echo "
                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "forme_deo", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>

        </fieldset>
        <button type=\"submit\" class=\"btn btn-secondary\">Envoyer</button>

        ";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "


        </p>

    </div>




";
    }

    // line 95
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 96
        echo "
";
    }

    public function getTemplateName()
    {
        return "frontend/test_a_venir/deo/deo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 96,  185 => 95,  170 => 84,  161 => 78,  157 => 77,  151 => 73,  149 => 72,  124 => 49,  122 => 48,  96 => 25,  92 => 24,  84 => 19,  79 => 17,  72 => 12,  68 => 11,  62 => 7,  58 => 6,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/test_a_venir/deo/deo.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/frontend/test_a_venir/deo/deo.html.twig");
    }
}
