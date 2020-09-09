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

/* insc/new.html.twig */
class __TwigTemplate_43f8254308d1f350bf834c86a9b653756f31679bbcc6bbaf3d162ed63d0701f7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "./frontend/_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("./frontend/_layout.html.twig", "insc/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "New Insc";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    <div class=\"container\">
        <h1>Create new Insc</h1>

        ";
        // line 16
        echo "
        <link href=\"https://fonts.googleapis.com/css?family=Raleway\" rel=\"stylesheet\">
        <style>
            * {
                box-sizing: border-box;
            }

            body {
                background-color: #f1f1f1;
            }

            #regForm {
                background-color: #ffffff;
                margin: 100px auto;
                font-family: Raleway;
                padding: 40px;
                width: 70%;
                min-width: 300px;
            }

            h1 {
                text-align: center;
            }

            input {
                padding: 10px;
                width: 100%;
                font-size: 17px;
                font-family: Raleway;
                border: 1px solid #aaaaaa;
            }

            /* Mark input boxes that gets an error on validation: */
            input.invalid {
                background-color: #ffdddd;
            }

            /* Hide all steps by default: */
            .tab {
                display: none;
            }

            button {
                background-color: #4CAF50;
                color: #ffffff;
                border: none;
                padding: 10px 20px;
                font-size: 17px;
                font-family: Raleway;
                cursor: pointer;
            }

            button:hover {
                opacity: 0.8;
            }

            #prevBtn {
                background-color: #bbbbbb;
            }

            /* Make circles that indicate the steps of the form: */
            .step {
                height: 15px;
                width: 15px;
                margin: 0 2px;
                background-color: #bbbbbb;
                border: none;
                border-radius: 50%;
                display: inline-block;
                opacity: 0.5;
            }

            .step.active {
                opacity: 1;
            }

            /* Mark the steps that are finished and valid: */
            .step.finish {
                background-color: #4CAF50;
            }
        </style>
        <body>

        <form id=\"regForm\" action=\"/action_page.php\">
            <h1>Register:</h1>
            <!-- One \"tab\" for each step in the form: -->
            <div class=\"tab\">Name:
                <p><input placeholder=\"First name...\" oninput=\"this.className = ''\" name=\"fname\"></p>
                <p><input placeholder=\"Last name...\" oninput=\"this.className = ''\" name=\"lname\"></p>
            </div>
            <div class=\"tab\">Contact Info:
                <p><input placeholder=\"E-mail...\" oninput=\"this.className = ''\" name=\"email\"></p>
                <p><input placeholder=\"Phone...\" oninput=\"this.className = ''\" name=\"phone\"></p>
            </div>
            <div class=\"tab\">Birthday:
                <p><input placeholder=\"dd\" oninput=\"this.className = ''\" name=\"dd\"></p>
                <p><input placeholder=\"mm\" oninput=\"this.className = ''\" name=\"nn\"></p>
                <p><input placeholder=\"yyyy\" oninput=\"this.className = ''\" name=\"yyyy\"></p>
            </div>
            <div class=\"tab\">Login Info:
                <p><input placeholder=\"Username...\" oninput=\"this.className = ''\" name=\"uname\"></p>
                <p><input placeholder=\"Password...\" oninput=\"this.className = ''\" name=\"pword\" type=\"password\"></p>
            </div>
            <div style=\"overflow:auto;\">
                <div style=\"float:right;\">
                    <button type=\"button\" id=\"prevBtn\" onclick=\"nextPrev(-1)\">Previous</button>
                    <button type=\"button\" id=\"nextBtn\" onclick=\"nextPrev(1)\">Next</button>
                </div>
            </div>
            <!-- Circles which indicates the steps of the form: -->
            <div style=\"text-align:center;margin-top:40px;\">
                <span class=\"step\"></span>
                <span class=\"step\"></span>
                <span class=\"step\"></span>
                <span class=\"step\"></span>
            </div>
        </form>

        <script>
            var currentTab = 0; // Current tab is set to be the first tab (0)
            showTab(currentTab); // Display the current tab

            function showTab(n) {
                // This function will display the specified tab of the form...
                var x = document.getElementsByClassName(\"tab\");
                x[n].style.display = \"block\";
                //... and fix the Previous/Next buttons:
                if (n == 0) {
                    document.getElementById(\"prevBtn\").style.display = \"none\";
                } else {
                    document.getElementById(\"prevBtn\").style.display = \"inline\";
                }
                if (n == (x.length - 1)) {
                    document.getElementById(\"nextBtn\").innerHTML = \"Submit\";
                } else {
                    document.getElementById(\"nextBtn\").innerHTML = \"Next\";
                }
                //... and run a function that will display the correct step indicator:
                fixStepIndicator(n)
            }

            function nextPrev(n) {
                // This function will figure out which tab to display
                var x = document.getElementsByClassName(\"tab\");
                // Exit the function if any field in the current tab is invalid:
                if (n == 1 && !validateForm()) return false;
                // Hide the current tab:
                x[currentTab].style.display = \"none\";
                // Increase or decrease the current tab by 1:
                currentTab = currentTab + n;
                // if you have reached the end of the form...
                if (currentTab >= x.length) {
                    // ... the form gets submitted:
                    document.getElementById(\"regForm\").submit();
                    return false;
                }
                // Otherwise, display the correct tab:
                showTab(currentTab);
            }

            function validateForm() {
                // This function deals with validation of the form fields
                var x, y, i, valid = true;
                x = document.getElementsByClassName(\"tab\");
                y = x[currentTab].getElementsByTagName(\"input\");
                // A loop that checks every input field in the current tab:
                for (i = 0; i < y.length; i++) {
                    // If a field is empty...
                    if (y[i].value == \"\") {
                        // add an \"invalid\" class to the field:
                        y[i].className += \" invalid\";
                        // and set the current valid status to false
                        valid = false;
                    }
                }
                // If the valid status is true, mark the step as finished and valid:
                if (valid) {
                    document.getElementsByClassName(\"step\")[currentTab].className += \" finish\";
                }
                return valid; // return the valid status
            }

            function fixStepIndicator(n) {
                // This function removes the \"active\" class of all steps...
                var i, x = document.getElementsByClassName(\"step\");
                for (i = 0; i < x.length; i++) {
                    x[i].className = x[i].className.replace(\" active\", \"\");
                }
                //... and adds the \"active\" class on the current step:
                x[n].className += \" active\";
            }
        </script>
        <a href=\"";
        // line 208
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("insc_index");
        echo "\">back to list</a>
    </div>
";
    }

    // line 212
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 213
        echo "    ";
    }

    public function getTemplateName()
    {
        return "insc/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 213,  268 => 212,  261 => 208,  67 => 16,  59 => 9,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "insc/new.html.twig", "/home/ygxopek/www/dd.club.syres.fr/templates/insc/new.html.twig");
    }
}
