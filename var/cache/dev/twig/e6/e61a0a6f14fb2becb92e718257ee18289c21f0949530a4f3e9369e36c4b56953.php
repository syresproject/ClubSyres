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
class __TwigTemplate_25ab402d5b4d2bb2c386caec88e7f8174d2ab14a29d96b42c800d85b1714a79b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_widgets/sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_widgets/sidebar.html.twig"));

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
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10)) {
            // line 11
            echo "            <div class=\"has-submenu\">
                <a class=\"menu-item show-submenu ";
            // line 12
            if ((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "attributes", [], "any", false, false, false, 12), "get", [0 => "_route"], "method", false, false, false, 12)) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "frontend_survey_") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))) {
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
            if ((is_string($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "attributes", [], "any", false, false, false, 17), "get", [0 => "_route"], "method", false, false, false, 17)) && is_string($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = "frontend_survey_enquete") && ('' === $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 || 0 === strpos($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002)))) {
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
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["surveys_count"]) || array_key_exists("surveys_count", $context) ? $context["surveys_count"] : (function () { throw new RuntimeError('Variable "surveys_count" does not exist.', 21, $this->source); })()), 0, [], "array", false, false, false, 21), 0))) {
                // line 22
                echo "                            <i class=\"sidebar-notification\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["surveys_count"]) || array_key_exists("surveys_count", $context) ? $context["surveys_count"] : (function () { throw new RuntimeError('Variable "surveys_count" does not exist.', 22, $this->source); })()), 0, [], "array", false, false, false, 22), "html", null, true);
                echo "</i>
                        ";
            }
            // line 24
            echo "                    </a>
                    <a class=\"submenu-item ";
            // line 25
            if ((is_string($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", [], "any", false, false, false, 25), "attributes", [], "any", false, false, false, 25), "get", [0 => "_route"], "method", false, false, false, 25)) && is_string($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = "frontend_survey_pre-recrutement") && ('' === $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 || 0 === strpos($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4, $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666)))) {
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
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["surveys_count"]) || array_key_exists("surveys_count", $context) ? $context["surveys_count"] : (function () { throw new RuntimeError('Variable "surveys_count" does not exist.', 29, $this->source); })()), 1, [], "array", false, false, false, 29), 0))) {
                // line 30
                echo "                            <i class=\"sidebar-notification\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["surveys_count"]) || array_key_exists("surveys_count", $context) ? $context["surveys_count"] : (function () { throw new RuntimeError('Variable "surveys_count" does not exist.', 30, $this->source); })()), 1, [], "array", false, false, false, 30), "html", null, true);
                echo "</i>
                        ";
            }
            // line 32
            echo "                    </a>
                    <a class=\"submenu-item ";
            // line 33
            if ((is_string($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "request", [], "any", false, false, false, 33), "attributes", [], "any", false, false, false, 33), "get", [0 => "_route"], "method", false, false, false, 33)) && is_string($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = "frontend_survey_test") && ('' === $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 || 0 === strpos($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e, $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52)))) {
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
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["surveys_count"]) || array_key_exists("surveys_count", $context) ? $context["surveys_count"] : (function () { throw new RuntimeError('Variable "surveys_count" does not exist.', 37, $this->source); })()), 2, [], "array", false, false, false, 37), 0))) {
                // line 38
                echo "                            <i class=\"sidebar-notification\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["surveys_count"]) || array_key_exists("surveys_count", $context) ? $context["surveys_count"] : (function () { throw new RuntimeError('Variable "surveys_count" does not exist.', 38, $this->source); })()), 2, [], "array", false, false, false, 38), "html", null, true);
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
            if ((is_string($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", [], "any", false, false, false, 45), "attributes", [], "any", false, false, false, 45), "get", [0 => "_route"], "method", false, false, false, 45)) && is_string($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = "frontend_club_") && ('' === $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 || 0 === strpos($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136, $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386)))) {
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
            if ((is_string($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "request", [], "any", false, false, false, 61), "attributes", [], "any", false, false, false, 61), "get", [0 => "_route"], "method", false, false, false, 61)) && is_string($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = "frontend_gamification_") && ('' === $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae || 0 === strpos($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9, $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae)))) {
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67)) {
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79)) {
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  265 => 92,  258 => 88,  253 => 85,  247 => 82,  241 => 80,  239 => 79,  233 => 76,  228 => 74,  225 => 73,  219 => 70,  213 => 68,  211 => 67,  208 => 66,  202 => 63,  193 => 61,  185 => 56,  180 => 54,  175 => 52,  170 => 50,  164 => 47,  157 => 45,  150 => 40,  144 => 38,  142 => 37,  137 => 35,  128 => 33,  125 => 32,  119 => 30,  117 => 29,  112 => 27,  103 => 25,  100 => 24,  94 => 22,  92 => 21,  87 => 19,  78 => 17,  72 => 14,  65 => 12,  62 => 11,  60 => 10,  54 => 7,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"snap-drawer snap-drawer-left sidebar-light-clean\">
    <p class=\"sidebar-divider\">Navigation</p>

    <div class=\"sidebar-menu\">
        <a class=\"menu-item\" href=\"{{ path('frontend_home_index') }}\">
            <i class=\"fa fa-home bg-night-dark\"></i>
            <em>{{ 'dashboard' }}</em>
        </a>

        {% if app.user %}
            <div class=\"has-submenu\">
                <a class=\"menu-item show-submenu {% if app.request.attributes.get('_route') starts with 'frontend_survey_' %}submenu-active{% endif %}\" href=\"#\">
                    <i class=\"fa fa-user bg-blue-panelist-space\"></i>
                    <em>{{ 'space' |trans({}, 'sidebar') }}</em>
                </a>
                <div class=\"submenu submenu-active\">
                    <a class=\"submenu-item {% if app.request.attributes.get('_route') starts with 'frontend_survey_enquete' %}submenu-item-active{% endif %}\" href=\"{{ path('frontend_survey_enquete') }}\">
                        <i class=\"fa fa-angle-right\"></i>
                        <em>{{ 'surveys' |trans({}, 'sidebar') }}</em>

                        {% if surveys_count[0] > 0 %}
                            <i class=\"sidebar-notification\">{{ surveys_count[0] }}</i>
                        {% endif %}
                    </a>
                    <a class=\"submenu-item {% if app.request.attributes.get('_route') starts with 'frontend_survey_pre-recrutement' %}submenu-item-active{% endif %}\" href=\"{{ path('frontend_survey_pre-recrutement') }}\">
                        <i class=\"fa fa-angle-right\"></i>
                        <em>{{ 'preselections' |trans({}, 'sidebar') }}</em>

                        {% if surveys_count[1] > 0 %}
                            <i class=\"sidebar-notification\">{{ surveys_count[1] }}</i>
                        {% endif %}
                    </a>
                    <a class=\"submenu-item {% if app.request.attributes.get('_route') starts with 'frontend_survey_test' %}submenu-item-active{% endif %}\" href=\"{{ path('frontend_survey_test') }}\">
                        <i class=\"fa fa-angle-right\"></i>
                        <em>{{ 'tests' |trans({}, 'sidebar') }}</em>

                        {% if surveys_count[2] > 0 %}
                            <i class=\"sidebar-notification\">{{ surveys_count[2] }}</i>
                        {% endif %}
                    </a>
                </div>
            </div>

            <div class=\"has-submenu\">
                <a id=\"pasInscription\" class=\"menu-item show-submenu {% if app.request.attributes.get('_route') starts with 'frontend_club_' %}submenu-active{% endif %}\" href=\"#\">
                    <i class=\"fa fa-users bg-orange-club-syres\"></i>
                    <em>{{ 'clubsyres' |trans({}, 'sidebar') }}</em>
                </a>
                <div class=\"submenu submenu-active\">
                    <a class=\"submenu-item\" href=\"{{ path('frontend_club-syres_index') }}\">
                        <i class=\"fa fa-angle-right\"></i>
                        <em>{{ 'articles' |trans({}, 'sidebar') }}</em>
                    </a>
                    <a class=\"submenu-item\" href=\"{{ path('frontend_club-syres_new-article') }}\">
                        <i class=\"fa fa-angle-right\"></i>
                        <em>{{ 'write' |trans({}, 'sidebar') }}</em>
                    </a>
                </div>
            </div>

            <a class=\"menu-item {% if app.request.attributes.get('_route') starts with 'frontend_gamification_' %}submenu-item-active{% endif %}\" href=\"{{ path('frontend_gamification_index') }}\">
                <i class=\"fa fa-star bg-green-my-points\"></i>
                <em>{{ 'points' |trans({}, 'sidebar') }}</em>
            </a>
        {% endif %}

        {% if app.user %}
            <a class=\"menu-item\" href=\"{{ path('frontend_contact_index') }}\">
                <i class=\"fa fa-envelope-o bg-pink-contact-us\"></i>
                <em>{{ 'contact' |trans({}, 'sidebar') }}</em>
            </a>
        {% endif %}

        <a class=\"menu-item\" href=\"{{ path('frontend_static_page_legal_notice') }}\">
            <i class=\"fa fa-align-left bg-gray-dark\"></i>
            <em>{{ 'notices' |trans({}, 'sidebar') }}</em>
        </a>

        {% if app.user %}
            <a class=\"menu-item\" href=\"{{ path('frontend_security_logout') }}\">
                <i class=\"fa fa-sign-out bg-night-dark\"></i>
                <em>{{ 'logoff' |trans({}, 'sidebar') }}</em>
            </a>
        {% endif %}

        <a class=\"menu-item close-sidebar\" href=\"#\">
            <i class=\"fa fa-times bg-red-dark\"></i>
            <em>{{ 'close' |trans({}, 'sidebar') }}</em>
        </a>
    </div>

    <p class=\"sidebar-footer\">Copyright {{ 'now' | date('Y') }}. {{ 'rights' |trans({}, 'sidebar') }}</p>
</div>", "_widgets/sidebar.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/_widgets/sidebar.html.twig");
    }
}
