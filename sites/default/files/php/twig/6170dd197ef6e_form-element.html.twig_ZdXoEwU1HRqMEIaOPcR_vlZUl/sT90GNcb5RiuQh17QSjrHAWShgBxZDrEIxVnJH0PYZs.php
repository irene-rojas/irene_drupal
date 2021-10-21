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

/* themes/contrib/uswds_base/templates/form/form-element.html.twig */
class __TwigTemplate_2f3435b2c65cd37a759526cfbaa67c795465562a91860996922ad7572c201cfc extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        $context["classes"] = [0 => "form-item", 1 => "usa-label", 2 => "js-form-item", 3 => ("form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 55
($context["type"] ?? null), 55, $this->source))), 4 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 56
($context["type"] ?? null), 56, $this->source))), 5 => ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 57
($context["name"] ?? null), 57, $this->source))), 6 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 58
($context["name"] ?? null), 58, $this->source))), 7 => ((!twig_in_filter(        // line 59
($context["title_display"] ?? null), [0 => "after", 1 => "before"])) ? ("form-no-label") : ("")), 8 => (((        // line 60
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), 9 => ((        // line 61
($context["is_form_group"] ?? null)) ? ("form-group") : ("")), 10 => (((        // line 62
($context["type"] ?? null) == "radio")) ? ("radio") : ("")), 11 => (((        // line 63
($context["type"] ?? null) == "checkbox")) ? ("checkbox") : ("")), 12 => (((        // line 64
($context["type"] ?? null) == "autocomplete")) ? ("form-autocomplete") : ("")), 13 => ((        // line 65
($context["has_error"] ?? null)) ? ("error has-error usa-label--error") : (""))];
        // line 69
        $context["description_classes"] = [0 => "description", 1 => "help-block", 2 => (((        // line 72
($context["description_display"] ?? null) == "invisible")) ? ("usa-sr-only") : (""))];
        // line 75
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 75), 75, $this->source), "html", null, true);
        echo ">
  ";
        // line 76
        if (twig_in_filter(($context["label_display"] ?? null), [0 => "before", 1 => "invisible"])) {
            // line 77
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 77, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 79
        echo "
  ";
        // line 80
        if (((($context["description_display"] ?? null) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 80))) {
            // line 81
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 81), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 81), 81, $this->source), "html", null, true);
            echo ">
      ";
            // line 82
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 85
        echo "
  ";
        // line 86
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 86, $this->source), "html", null, true);
        echo "

  ";
        // line 88
        if ((($context["label_display"] ?? null) == "after")) {
            // line 89
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 89, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 91
        echo "
  ";
        // line 92
        if (($context["errors"] ?? null)) {
            // line 93
            echo "    <div class=\"usa-error-message\" role=\"alert\">
      ";
            // line 94
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 94, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 97
        echo "
  ";
        // line 98
        if ((twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 98))) {
            // line 99
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 99), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 99), 99, $this->source), "html", null, true);
            echo ">
      ";
            // line 100
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 103
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/uswds_base/templates/form/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 103,  124 => 100,  119 => 99,  117 => 98,  114 => 97,  108 => 94,  105 => 93,  103 => 92,  100 => 91,  94 => 89,  92 => 88,  87 => 86,  84 => 85,  78 => 82,  73 => 81,  71 => 80,  68 => 79,  62 => 77,  60 => 76,  55 => 75,  53 => 72,  52 => 69,  50 => 65,  49 => 64,  48 => 63,  47 => 62,  46 => 61,  45 => 60,  44 => 59,  43 => 58,  42 => 57,  41 => 56,  40 => 55,  39 => 51,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/uswds_base/templates/form/form-element.html.twig", "/Users/irenerojas/Code/irene_drupal/themes/contrib/uswds_base/templates/form/form-element.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 51, "if" => 76);
        static $filters = array("clean_class" => 55, "escape" => 75);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
