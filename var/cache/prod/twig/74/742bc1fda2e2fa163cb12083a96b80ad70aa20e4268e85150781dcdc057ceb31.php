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

/* _widgets/sidebar.html.twig */
class __TwigTemplate_08fee6dfd4211459e1d25c7bebd0c1260e6d9fff7b48cd8b60f38459d80f043c extends Template
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
        echo "<div class=\"snap-drawer snap-drawer-left sidebar-light-clean\">
    <p class=\"sidebar-divider\">Navigation</p>

    <div class=\"sidebar-menu\">
        <a class=\"menu-item\" href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_home_index");
        echo "\">
            <i class=\"fa fa-home bg-night-dark\"></i>
            <em>";
        // line 7
        echo "dashboard";
        echo "</em>
        </a>

        ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 10)) {
            // line 11
            echo "            <div class=\"has-submenu\">
                <a class=\"menu-item show-submenu ";
            // line 12
            if ((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 12), "attributes", [], "any", false, false, false, 12), "get", [0 => "_route"], "method", false, false, false, 12)) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "frontend_survey_") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))) {
                echo "submenu-active";
            }
            echo "\" href=\"#\">
                    <i class=\"fa fa-user bg-blue-panelist-space\"></i>
                    <em>";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("space", [], "sidebar"), "html", null, true);
            echo "</em>
                </a>
                <div class=\"submenu submenu-active\">
                    <a class=\"submenu-item ";
            // line 17
            if ((is_string($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 17), "attributes", [], "any", false, false, false, 17), "get", [0 => "_route"], "method", false, false, false, 17)) && is_string($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = "frontend_survey_enquete") && ('' === $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 || 0 === strpos($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002)))) {
                echo "submenu-item-active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_survey_enquete");
            echo "\">
                        <i class=\"fa fa-angle-right\"></i>
                        <em>";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("surveys", [], "sidebar"), "html", null, true);
            echo "</em>

                        ";
            // line 21
            if ((1 === twig_compare((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["surveys_count"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[0] ?? null) : null), 0))) {
                // line 22
                echo "                            <i class=\"sidebar-notification\">";
                echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["surveys_count"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[0] ?? null) : null), "html", null, true);
                echo "</i>
                        ";
            }
            // line 24
            echo "                    </a>
                    <a class=\"submenu-item ";
            // line 25
            if ((is_string($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 25), "attributes", [], "any", false, false, false, 25), "get", [0 => "_route"], "method", false, false, false, 25)) && is_string($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = "frontend_survey_pre-recrutement") && ('' === $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 || 0 === strpos($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e, $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52)))) {
                echo "submenu-item-active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_survey_pre-recrutement");
            echo "\">
                        <i class=\"fa fa-angle-right\"></i>
                        <em>";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("preselections", [], "sidebar"), "html", null, true);
            echo "</em>

                        ";
            // line 29
            if ((1 === twig_compare((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["surveys_count"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[1] ?? null) : null), 0))) {
                // line 30
                echo "                            <i class=\"sidebar-notification\">";
                echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["surveys_count"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[1] ?? null) : null), "html", null, true);
                echo "</i>
                        ";
            }
            // line 32
            echo "                    </a>
                    <a class=\"submenu-item ";
            // line 33
            if ((is_string($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 33), "attributes", [], "any", false, false, false, 33), "get", [0 => "_route"], "method", false, false, false, 33)) && is_string($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = "frontend_survey_test") && ('' === $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae || 0 === strpos($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9, $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae)))) {
                echo "submenu-item-active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_survey_test");
            echo "\">
                        <i class=\"fa fa-angle-right\"></i>
                        <em>";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tests", [], "sidebar"), "html", null, true);
            echo "</em>

                        ";
            // line 37
            if ((1 === twig_compare((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["surveys_count"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[2] ?? null) : null), 0))) {
                // line 38
                echo "                            <i class=\"sidebar-notification\">";
                echo twig_escape_filter($this->env, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["surveys_count"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[2] ?? null) : null), "html", null, true);
                echo "</i>
                        ";
            }
            // line 40
            echo "                    </a>
                </div>
            </div>

            <div class=\"has-submenu\">
                <a id=\"pasInscription\" class=\"menu-item show-submenu ";
            // line 45
            if ((is_string($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 45), "attributes", [], "any", false, false, false, 45), "get", [0 => "_route"], "method", false, false, false, 45)) && is_string($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = "frontend_club_") && ('' === $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 || 0 === strpos($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f, $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760)))) {
                echo "submenu-active";
            }
            echo "\" href=\"#\">
                    <i class=\"fa fa-users bg-orange-club-syres\"></i>
                    <em>";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("clubsyres", [], "sidebar"), "html", null, true);
            echo "</em>
                </a>
                <div class=\"submenu submenu-active\">
                    <a class=\"submenu-item\" href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_club-syres_index");
            echo "\">
                        <i class=\"fa fa-angle-right\"></i>
                        <em>";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("articles", [], "sidebar"), "html", null, true);
            echo "</em>
                    </a>
                    <a class=\"submenu-item\" href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_club-syres_new-article");
            echo "\">
                        <i class=\"fa fa-angle-right\"></i>
                        <em>";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("write", [], "sidebar"), "html", null, true);
            echo "</em>
                    </a>
                </div>
            </div>

            <a class=\"menu-item ";
            // line 61
            if ((is_string($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 61), "attributes", [], "any", false, false, false, 61), "get", [0 => "_route"], "method", false, false, false, 61)) && is_string($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = "frontend_gamification_") && ('' === $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b || 0 === strpos($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce, $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b)))) {
                echo "submenu-item-active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_gamification_index");
            echo "\">
                <i class=\"fa fa-star bg-green-my-points\"></i>
                <em>";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("points", [], "sidebar"), "html", null, true);
            echo "</em>
            </a>
        ";
        }
        // line 66
        echo "
        ";
        // line 67
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 67)) {
            // line 68
            echo "            <a class=\"menu-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_contact_index");
            echo "\">
                <i class=\"fa fa-envelope-o bg-pink-contact-us\"></i>
                <em>";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("contact", [], "sidebar"), "html", null, true);
            echo "</em>
            </a>
        ";
        }
        // line 73
        echo "
        <a class=\"menu-item\" href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_static_page_legal_notice");
        echo "\">
            <i class=\"fa fa-align-left bg-gray-dark\"></i>
            <em>";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("notices", [], "sidebar"), "html", null, true);
        echo "</em>
        </a>

        ";
        // line 79
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 79)) {
            // line 80
            echo "            <a class=\"menu-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_security_logout");
            echo "\">
                <i class=\"fa fa-sign-out bg-night-dark\"></i>
                <em>";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("logoff", [], "sidebar"), "html", null, true);
            echo "</em>
            </a>
        ";
        }
        // line 85
        echo "
        <a class=\"menu-item close-sidebar\" href=\"#\">
            <i class=\"fa fa-times bg-red-dark\"></i>
            <em>";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("close", [], "sidebar"), "html", null, true);
        echo "</em>
        </a>
    </div>

    <p class=\"sidebar-footer\">Copyright ";
        // line 92
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("rights", [], "sidebar"), "html", null, true);
        echo "</p>
</div>";
    }

    public function getTemplateName()
    {
        return "_widgets/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 92,  252 => 88,  247 => 85,  241 => 82,  235 => 80,  233 => 79,  227 => 76,  222 => 74,  219 => 73,  213 => 70,  207 => 68,  205 => 67,  202 => 66,  196 => 63,  187 => 61,  179 => 56,  174 => 54,  169 => 52,  164 => 50,  158 => 47,  151 => 45,  144 => 40,  138 => 38,  136 => 37,  131 => 35,  122 => 33,  119 => 32,  113 => 30,  111 => 29,  106 => 27,  97 => 25,  94 => 24,  88 => 22,  86 => 21,  81 => 19,  72 => 17,  66 => 14,  59 => 12,  56 => 11,  54 => 10,  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_widgets/sidebar.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/_widgets/sidebar.html.twig");
    }
}
