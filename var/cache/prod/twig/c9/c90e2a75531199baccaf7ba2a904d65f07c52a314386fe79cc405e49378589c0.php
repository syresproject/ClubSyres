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

/* security/login.html.twig */
class __TwigTemplate_8c1a8eac0ec3114e7dff11cce3155ec97feaf2bf8686b8b7290217e948597c41 extends Template
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
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "frontend/login.layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("frontend/login.layout.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Log in!";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dateVJ/css/datepicker-bs4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dateVJ/css/datepicker-bulma.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dateVJ/css/datepicker-foundation.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <style>
        .container {
            margin-left: auto;
            margin-right: auto;
            width: 350px;
            padding-top: 20px;
        }

        #div-form {
            width: 60%;
            margin: auto;
            margin-top: 148px;
            text-align: center;
        }


        .inputLoginD{
            width: 100%;
            padding-left: 20px;
            background: #f5f7ff;
            margin-bottom: 4px;
            border: 1px solid #eeeeee;
            line-height: 40px;

        }

        #content {
            background-image: url(\"../frontend/images/Holly_FRK__B.jpg\");
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 850px;
        }

        .margeEntreDiv {
            margin-bottom: 30px;
        }

        #inputEmail {
            margin-bottom: 4px;
            border-bottom: 1px solid #2980b9;
            width: 239px;
        }

        #l_fa {
            font-size: 27px;
            margin-right: 4px;
            color: #2980b9;
        }

        .d_flex {
            display: flex;
        }

        .dateDeNaissanceLogin {
            display: flex;
        }

        .dateDeNaissance {
            border-bottom: 1px solid #2980b9;
            margin: 5px;
            text-align: -webkit-center;
            width: 80px;


        }

        label {
            margin: 0px;
        }

        input {
        }

        .div_login_butn {
            background-color: #2980b9;
            text-align: center;

        }

        .login_butn {
            background-color: #2980b9;
            color: white;
        }
    </style>
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
";
    }

    // line 96
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "

    <div id=\"div-form\" class=\"text-center\" style=\"\">
        ";
        // line 100
        if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 100) && (0 === twig_compare(($context["enabledM"] ?? null), 0)))) {
            // line 101
            echo "            <a class=\"div_login_butn\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_accueil_index");
            echo "\" style=\"display: flex\">
                <div style=\"width: 40%\">
                    <button class=\"login_butn\" style=\" line-height: 3\">Bonjour ";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 103), "title", [], "any", false, false, false, 103), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 103), "firstname", [], "any", false, false, false, 103), "html", null, true);
            echo ", voulez-vous retouner à la page d'accueil ?</button>
                </div>
                <div style=\"width: 40%\">
                    <button class=\"login_butn\" type=\"submit\">
                        <i class=\"large material-icons\" style=\"padding-top: 9px\">arrow_forward</i>
                    </button>
                </div>
            </a>
        ";
        }
        // line 112
        echo "    </div>
    <div class=\"container\">
            <form class=\"styleCard\" id=\"login_form\" method=\"post\">
            ";
        // line 115
        if (($context["error"] ?? null)) {
            // line 116
            echo "                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 116), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 116), "security"), "html", null, true);
            echo "</div>
            ";
        }
        // line 118
        echo "
            ";
        // line 119
        if (($context["enabledM"] ?? null)) {
            // line 120
            echo "                <div class=\"mb-3\">
                    <p>
                        ";
            // line 122
            echo twig_escape_filter($this->env, ($context["enabledM"] ?? null), "html", null, true);
            echo "
                    </p>
                </div>
            ";
        }
        // line 126
        echo "
            <h5 class=\"h3 mb-3 font-weight-normal\" style=\"color: grey; text-align: center\">Merci d’indiquer vos informations !</h5>
            <div class=\"d_flex margeEntreDiv\">
                <input value=\"";
        // line 129
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"idPaneliste\" placeholder=\"Id Paneliste\" id=\"idPaneliste\" class=\"form-control inputLoginD\" required autofocus>
            </div>
            <label for=\"inputPassword\" style=\"\">Merci d’indiquer votre date de naissance</label>
            <div class=\"dateDeNaissanceLogin margeEntreDiv\" style=\"justify-content: space-around\">
               <div>
                    <input name=\"jour\" id=\"jour\" placeholder=\"JJ\" class=\"form-control dateDeNaissance inputLoginD\"
                           required>
                </div>
                <div>
                    <input name=\"mois\" id=\"mois\" placeholder=\"MM\" class=\"form-control dateDeNaissance inputLoginD\"
                           required>
                </div>
                <div>
                    <input name=\"annee\" id=\"annee\" placeholder=\"AAAA\"
                           class=\"form-control dateDeNaissance inputLoginD\" required>
                </div>
            </div>

                ";
        // line 151
        echo "            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">


            ";
        // line 164
        echo "
            <div class=\"div_login_butn\">
                <button class=\"login_butn inputLoginD\" type=\"submit\">Se connecter</button>
            </div>
        </form>
    </div>






";
    }

    // line 177
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 178
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "

";
    }

    // line 181
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 182
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"http://code.jquery.com/jquery-1.9.1.js\"></script>
    <script src=\"http://code.jquery.com/ui/1.11.0/jquery-ui.js\"></script>
    <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dateVJ/js/datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dateVJ/js/datepicker-full.js"), "html", null, true);
        echo "\"></script>

    <script>
        const elem = document.querySelector('input[name=\"dateL\"]');
        const datepicker = new Datepicker(elem, {
            // options here
            //maxDate: null,
            //console.log(maxDate)
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 186,  299 => 185,  292 => 182,  288 => 181,  280 => 178,  276 => 177,  260 => 164,  253 => 151,  232 => 129,  227 => 126,  220 => 122,  216 => 120,  214 => 119,  211 => 118,  205 => 116,  203 => 115,  198 => 112,  184 => 103,  178 => 101,  176 => 100,  169 => 97,  165 => 96,  74 => 8,  70 => 7,  66 => 6,  61 => 5,  57 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/security/login.html.twig");
    }
}
