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

/* Backend/_layout.html.twig */
class __TwigTemplate_59dcb850374d976b1c894268722aba1f78da36e93a4985ece6bfc8f72a9dab61 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'page_title' => [$this, 'block_page_title'],
            'content' => [$this, 'block_content'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<!-- Template Version: 4.5.2 -->

<!--[if IE 8]> <html lang=\"fr\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]> <html lang=\"fr\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"fr\">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset=\"utf-8\" />
    <title>Syres</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
    <meta content=\"\" name=\"description\" />
    <meta content=\"\" name=\"author\" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/uniform/css/uniform.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/css/components.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/css/plugins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/layouts/layout/css/layout.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/layouts/layout/css/themes/syres.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\" />
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/layouts/layout/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/layouts/layout/css/override.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END THEME LAYOUT STYLES -->
    <!-- BEGIN CUSTOM STYLESHEETS -->
    ";
        // line 37
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 38
        echo "    <!-- END CUSTOM STYLESHEETS -->

    <link rel=\"shortcut icon\" href=\"\" /> </head>
<!-- END HEAD -->

<body class=\"page-header-fixed page-sidebar-closed-hide-logo page-content-white\">
<!-- BEGIN HEADER -->
<div class=\"page-header navbar navbar-fixed-top\" style=\"height: 59px\">
    <!-- BEGIN HEADER INNER -->
    <div class=\"page-header-inner \">
        <!-- BEGIN LOGO -->
        <div class=\"page-logo\">
                <img src=\"/frontend/images/logo.png\" alt=\"logo\" width=\"40px\" height=\"40px\" class=\"logo-default\" />
            <div class=\"menu-toggler sidebar-toggler\" style=\"margin-top: 20px\"> </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href=\"javascript:;\" class=\"menu-toggler responsive-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"> </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class=\"top-menu\">
            <ul class=\"nav navbar-nav pull-right\">
                <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->


                <li class=\"dropdown dropdown-quick-sidebar-toggler\">
                    <a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_logout");
        echo "\" class=\"dropdown-toggle\">
                        <span class=\"nav-text hidden-xs\" style=\"margin-top: -2px\">Déconnexion</span>
                        <i class=\"icon-logout\"></i>
                    </a>
                </li>
                <!-- END QUICK SIDEBAR TOGGLER -->
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class=\"clearfix\"> </div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class=\"page-container\">
    <!-- BEGIN SIDEBAR -->
    ";
        // line 84
        echo twig_include($this->env, $context, "Backend/_sidebar.html.twig");
        echo "
    <!-- END SIDEBAR -->

    <!-- BEGIN CONTENT -->
    <div class=\"page-content-wrapper\">
        <!-- BEGIN CONTENT BODY -->
        <div class=\"page-content\">
            ";
        // line 91
        $this->displayBlock('page_title', $context, $blocks);
        // line 92
        echo "            ";
        // line 93
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 94
        echo "        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class=\"page-footer\">
    <div class=\"page-footer-inner\">
        &copy; Tous droits réservés. Mentions légales. Création site internet : <a href=\"http://www.syres.fr\" target=\"_blank\">Syres</a>
    </div>
    <div class=\"scroll-to-top\">
        <i class=\"icon-arrow-up\"></i>
    </div>
</div>
<!-- END FOOTER -->
<!--[if lt IE 9]>
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/respond.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/excanvas.min.js"), "html", null, true);
        echo "\"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/js.cookie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/global/scripts/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/layouts/layout/scripts/layout.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/assets/layouts/global/scripts/quick-sidebar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END THEME LAYOUT SCRIPTS -->
<!-- BEGIN CUSTOM SCRIPTS -->
";
        // line 132
        $this->displayBlock('javascript', $context, $blocks);
        // line 188
        echo "<!-- END CUSTOM SCRIPTS -->
</body>

</html>
";
    }

    // line 37
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 91
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 93
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 132
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 133
        echo "    <script type=\"text/javascript\">
    \$(document).ready(function() {
      \$('i.icon-trash').parent().click(function () {
        return confirm('Voulez-vous vraiment supprimer cet élément ? ATTENTION ! Supprimer cet élément supprimera tout ce qui est liée à cet élément !');
      });


      \$('#appbundle_clubarticle_websearch').change(function() {
            if (this.checked) {
                \$('#appbundle_clubarticle_location').val('Recherche Internet').prop('disabled', true);
            }
            else {
                \$('#appbundle_clubarticle_location').val('').prop('disabled', false);
            }
        });

        \$('#appbundle_clubarticle_plane').change(function() {
            if (this.checked) {
                \$('#appbundle_clubarticle_location').val('Avion').prop('disabled', true);
            }
            else {
                \$('#appbundle_clubarticle_location').val('').prop('disabled', false);
            }
        });

        var club_subject = \$('#appbundle_clubarticle_clubSubject');
        var sub_club_subject = \$('.custom-selector select');

        sub_club_subject.hide();
        sub_club_subject.parent().hide();
        \$('#' + club_subject.val()).parent().show();
        \$('#' + club_subject.val()).show();
        \$('#' + club_subject.val()).attr('name', 'chosen');

        \$('#appbundle_clubarticle_clubSubject').each(function() {
            var selectvalue = club_subject.val();
            \$(this).data(\"value\", selectvalue);
        });

        \$('#appbundle_clubarticle_clubSubject').change(function() {
            var prev = \$(this).data(\"value\");

            \$('#' + prev).removeAttr('name');
            sub_club_subject.hide();
            sub_club_subject.parent().hide();
            \$('#' + club_subject.val()).attr('name', 'chosen');
            \$('#' + club_subject.val()).parent().show();
            \$('#' + club_subject.val()).show();

            var selectvalue = club_subject.val();
            \$(this).data(\"value\", selectvalue);
        });
    });
    </script>
";
    }

    public function getTemplateName()
    {
        return "Backend/_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 133,  289 => 132,  283 => 93,  277 => 91,  271 => 37,  263 => 188,  261 => 132,  255 => 129,  251 => 128,  245 => 125,  239 => 122,  235 => 121,  231 => 120,  227 => 119,  223 => 118,  219 => 117,  215 => 116,  211 => 115,  205 => 112,  201 => 111,  182 => 94,  179 => 93,  177 => 92,  175 => 91,  165 => 84,  143 => 65,  114 => 38,  112 => 37,  106 => 34,  102 => 33,  98 => 32,  94 => 31,  88 => 28,  84 => 27,  78 => 24,  74 => 23,  70 => 22,  66 => 21,  62 => 20,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Backend/_layout.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/_layout.html.twig");
    }
}
