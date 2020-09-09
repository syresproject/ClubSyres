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

/* Backend/_sidebar.html.twig */
class __TwigTemplate_97d7115775692cffc357653ad7c9743f774964e3cd12bcb732fb508072aeba05 extends Template
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
        echo "<div class=\"page-sidebar-wrapper\">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll=\"false\" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed=\"200\" to adjust the sub menu slide up/down speed -->
    <div class=\"page-sidebar navbar-collapse collapse\">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply \"page-sidebar-menu-light\" class right after \"page-sidebar-menu\" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply \"page-sidebar-menu-hover-submenu\" class right after \"page-sidebar-menu\" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply \"page-sidebar-menu-closed\" class right after \"page-sidebar-menu\" to collapse(\"page-sidebar-closed\" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll=\"false\" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand=\"true\" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed=\"200\" to adjust the sub menu slide up/down speed -->
        <ul class=\"page-sidebar-menu  page-header-fixed \" data-keep-expanded=\"false\" data-auto-scroll=\"true\" data-slide-speed=\"200\" style=\"padding-top: 20px\">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below \"sidebar-toggler-wrapper\" LI element -->
            <li class=\"sidebar-toggler-wrapper hide\">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class=\"sidebar-toggler\"> </div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>

            <li class=\"heading\">
                <h3 class=\"uppercase\">";
        // line 22
        echo "content";
        echo "</h3>
            </li>
            <li class=\"nav-item ";
        // line 24
        if ((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 24), "attributes", [], "any", false, false, false, 24), "get", [0 => "_route"], "method", false, false, false, 24)) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "backend_home_") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))) {
            echo "active";
        }
        echo "\">
                <a href=\"\" class=\"nav-link\">
                    <i class=\"icon-home\"></i>
                    <span class=\"title\">";
        // line 27
        echo "dashboard";
        echo "</span>
                </a>
            </li>

            <li class=\"heading\">
                <h3 class=\"uppercase\">ENQUÊTES</h3>
            </li>

            <li class=\"nav-item ";
        // line 35
        if ((is_string($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 35), "attributes", [], "any", false, false, false, 35), "get", [0 => "_route"], "method", false, false, false, 35)) && is_string($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = "backend_category_") && ('' === $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 || 0 === strpos($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002)))) {
            echo "active";
        }
        echo "\" data-tag-entity=\"category\">
                <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_index");
        echo "\" class=\"nav-link\">
                    <i class=\"icon-folder\"></i>
                    <span class=\"title\">Categorie</span>
                </a>
            </li>

          <li class=\"nav-item ";
        // line 42
        if ((is_string($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 42), "attributes", [], "any", false, false, false, 42), "get", [0 => "_route"], "method", false, false, false, 42)) && is_string($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = "backend_survey_enquete_") && ('' === $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 || 0 === strpos($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4, $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666)))) {
            echo "active";
        }
        echo "\" data-tag-entity=\"survey\">
              <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_survey_enquetes_index");
        echo "\" class=\"nav-link\">
                  <i class=\"icon-folder\"></i>
                  <span class=\"title\">Enquêtes</span>
              </a>
          </li>
            ";
        // line 56
        echo "            <li class=\"nav-item ";
        if ((is_string($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 56), "attributes", [], "any", false, false, false, 56), "get", [0 => "_route"], "method", false, false, false, 56)) && is_string($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = "backend_survey_test_") && ('' === $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 || 0 === strpos($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e, $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52)))) {
            echo "active";
        }
        echo "\" data-tag-entity=\"survey\">
                <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_survey_tests_index");
        echo "\" class=\"nav-link\">
                    <i class=\"icon-folder\"></i>
                    <span class=\"title\">Tests</span>
                </a>
            </li>


            ";
        // line 75
        echo "
            <li class=\"heading\">
                <h3 class=\"uppercase\">Newsletter</h3>
            </li>
            <li class=\"nav-item ";
        // line 79
        if ((is_string($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 79), "attributes", [], "any", false, false, false, 79), "get", [0 => "_route"], "method", false, false, false, 79)) && is_string($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = "admin_newsletter_") && ('' === $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 || 0 === strpos($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136, $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386)))) {
            echo "active";
        }
        echo "\" data-tag-entity=\"survey\">
                <a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_newsletter_show");
        echo "\" class=\"nav-link\">
                    <i class=\"icon-folder\"></i>
                    <span class=\"title\">Newsletter</span>
                </a>
            </li>




            <li class=\"heading\">
                <h3 class=\"uppercase\">UTILISATEURS</h3>
            </li>
            <li class=\"nav-item ";
        // line 92
        if ((is_string($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 92), "attributes", [], "any", false, false, false, 92), "get", [0 => "_route"], "method", false, false, false, 92)) && is_string($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = "admin/panelistegroup_") && ('' === $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae || 0 === strpos($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9, $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae)))) {
            echo "active";
        }
        echo "\" data-tag-entity=\"contact\">
                <a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_paneliste_groups_index");
        echo "\" class=\"nav-link\">
                    <i class=\"icon-users\"></i>
                    <span class=\"title\">Groupes</span>
                </a>
            </li>

            <li class=\"nav-item ";
        // line 99
        if ((is_string($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 99), "attributes", [], "any", false, false, false, 99), "get", [0 => "_route"], "method", false, false, false, 99)) && is_string($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = "admin_user_") && ('' === $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 || 0 === strpos($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f, $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40)))) {
            echo "active";
        }
        echo "\" data-tag-entity=\"newsletter\">
                <a href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
        echo "\" class=\"nav-link\">
                    <i class=\"icon-folder\"></i>
                    <span class=\"title\">Users</span>
                </a>
            </li>

            ";
        // line 107
        echo "
            <li class=\"heading\">
                <h3 class=\"uppercase\">Contact</h3>
            </li>
            <li class=\"nav-item ";
        // line 111
        if ((is_string($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 111), "attributes", [], "any", false, false, false, 111), "get", [0 => "_route"], "method", false, false, false, 111)) && is_string($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = "admin_contact_") && ('' === $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 || 0 === strpos($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f, $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760)))) {
            echo "active";
        }
        echo "\" data-tag-entity=\"contact\">
                <a href=\"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contact_index");
        echo "\" class=\"nav-link\">
                    <i class=\"icon-envelope\"></i>
                    <span class=\"title\">";
        // line 114
        echo "messages";
        echo "</span>
                </a>
            </li>

            <li class=\"heading\">
                <h3 class=\"uppercase\">Configuration</h3>
            </li>

            <li class=\"nav-item ";
        // line 122
        if ((is_string($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 122), "attributes", [], "any", false, false, false, 122), "get", [0 => "_route"], "method", false, false, false, 122)) && is_string($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = "backend_configuration_index") && ('' === $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b || 0 === strpos($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce, $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b)))) {
            echo "active";
        }
        echo "\" data-tag-entity=\"configuration\">
                <a href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_configuration_index");
        echo "\" class=\"nav-link\">
                    <i class=\"icon-settings\"></i>
                    <span class=\"title\">";
        // line 125
        echo "Liens";
        echo "</span>
                </a>
            </li>

            <li class=\"nav-item ";
        // line 129
        if ((is_string($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 129), "attributes", [], "any", false, false, false, 129), "get", [0 => "_route"], "method", false, false, false, 129)) && is_string($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = "backend_configuration_legal_notice") && ('' === $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 || 0 === strpos($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c, $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972)))) {
            echo "active";
        }
        echo "\" data-tag-entity=\"configuration\">
                <a href=\"";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_configuration_mentions_legales");
        echo "\" class=\"nav-link\">
                    <i class=\"icon-info\"></i>
                    <span class=\"title\">";
        // line 132
        echo "legal_notice";
        echo "</span>
                </a>
            </li>
            ";
        // line 143
        echo "
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
";
    }

    public function getTemplateName()
    {
        return "Backend/_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 143,  244 => 132,  239 => 130,  233 => 129,  226 => 125,  221 => 123,  215 => 122,  204 => 114,  199 => 112,  193 => 111,  187 => 107,  178 => 100,  172 => 99,  163 => 93,  157 => 92,  142 => 80,  136 => 79,  130 => 75,  120 => 57,  113 => 56,  105 => 43,  99 => 42,  90 => 36,  84 => 35,  73 => 27,  65 => 24,  60 => 22,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Backend/_sidebar.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/Backend/_sidebar.html.twig");
    }
}
