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

/* _widgets/footer.home.html.twig */
class __TwigTemplate_6694eead1d06d313cdd3bfdf671a61311617a63b2d4ca75d75f756df56fb9609 extends Template
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
        echo "<div class=\"container-fullscreen footer footer-light\">
    <p class=\"center-text\">
        <strong class=\"footer-message\"></strong>
    </p>

    <!--<div class=\"decoration\"></div>-->



     <div id=\"div-mention-legale\" style=\"display: flex\">
         <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_mention_legale_index");
        echo "\" style=\"margin: auto; margin-bottom: 20px; background-color: #435462;color: white\">
             <button id=\"myBtn\" style=\" background-color: #435462;color: white\">MENTIONS LEGALES</button>
         </a>
         ";
        // line 34
        echo "     </div>






    <script
            src=\"https://code.jquery.com/jquery-3.4.1.js\"
            integrity=\"sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=\"
            crossorigin=\"anonymous\"></script>


    <script type=\"text/javascript\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/scripts/fancyBox/jquery.fancybox.min.js"), "html", null, true);
        echo "\"></script>
    <script>

        // Get the modal
        var modal = document.getElementById(\"myModal\");

        // Get the button that opens the modal
        var btn = document.getElementById(\"myBtn\");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName(\"close\")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function() {
            modal.style.display = \"block\";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = \"none\";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = \"none\";
            }
        }
    </script>

    <div class=\"footer-socials\" style=\"display: flex\">
        <a href=\"https://fr-fr.facebook.com/SyresTests\" target=\"_blank\" class=\"scale-hover facebook-color\"><i class=\"fa fa-facebook\"></i></a>

        <script>
            \$('a#op_url_insta').click(function() {
                \$(this).attr('target', '_blank');
            });
        </script>


        ";
        // line 97
        echo "        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_contact_index");
        echo "\" target=\"_blank\" class=\"scale-hover mail-color\"><i class=\"fa fa-envelope-o\"></i></a>

        <a href=\"https://www.instagram.com/syres_fr/?hl=fr\" id=\"op_url_insta\" class=\"scale-hover mail-color\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
        </a>
        <a href=\"https://www.syres.fr/\" target=\"_blank\" rel=\"nofollow\" class=\"scale-hover phone-color\"><i class=\"fa fa-globe\"></i></a>

        <a href=\"#\" class=\"scale-hover bg-magenta-dark back-to-top\"><i class=\"fa fa-angle-up\"></i></a>


        <div class=\"clear\"></div>
    </div>
    <!--<div class=\"decoration\"></div>-->

    <p class=\"small-text no-bottom center-text\">&copy;
        Copyright 2020. Tous droits réservés.
    </p>
</div>


";
    }

    public function getTemplateName()
    {
        return "_widgets/footer.home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 97,  70 => 47,  55 => 34,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_widgets/footer.home.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/_widgets/footer.home.html.twig");
    }
}
