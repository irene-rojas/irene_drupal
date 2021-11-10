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

/* themes/contrib/uswds_base/templates/form/form-element-label.html.twig */
class __TwigTemplate_4b873455377c7d8d5832d763bd5a280268d4ab641c99f3b2cef408fa7373b5ec extends \Twig\Template
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
        // line 16
        $context["classes"] = [0 => (( !(        // line 17
($context["is_checkbox"] ?? null) || ($context["is_radio"] ?? null))) ? ("usa-label") : ("")), 1 => ((        // line 18
($context["is_checkbox"] ?? null)) ? ("usa-checkbox__label") : ("")), 2 => ((        // line 19
($context["is_radio"] ?? null)) ? ("usa-radio__label") : ("")), 3 => "control-label", 4 => (((        // line 21
($context["title_display"] ?? null) == "after")) ? ("option") : ("")), 5 => ((((        // line 22
($context["title_display"] ?? null) == "invisible") &&  !(($context["is_checkbox"] ?? null) || ($context["is_radio"] ?? null)))) ? ("usa-sr-only") : ("")), 6 => ((        // line 23
($context["required"] ?? null)) ? ("js-form-required") : ("")), 7 => ((        // line 24
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 27
        if ((( !twig_test_empty(($context["title"] ?? null)) && (($context["title_display"] ?? null) == "invisible")) && (($context["is_checkbox"] ?? null) || ($context["is_radio"] ?? null)))) {
            // line 32
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", [0 => "title", 1 => ($context["title"] ?? null)], "method", false, false, true, 32);
            // line 33
            $context["title"] = null;
        }
        // line 39
        if ((( !twig_test_empty(($context["title"] ?? null)) || ($context["is_checkbox"] ?? null)) || ($context["is_radio"] ?? null))) {
            // line 40
            echo "<label";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 40), 40, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["element"] ?? null), 40, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 40, $this->source), "html", null, true);
            // line 41
            if (($context["description"] ?? null)) {
                // line 42
                echo "<p class=\"help-block\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 42, $this->source), "html", null, true);
                echo "</p>";
            }
            // line 44
            echo "</label>";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/uswds_base/templates/form/form-element-label.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 44,  65 => 42,  63 => 41,  57 => 40,  55 => 39,  52 => 33,  50 => 32,  48 => 27,  46 => 24,  45 => 23,  44 => 22,  43 => 21,  42 => 19,  41 => 18,  40 => 17,  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a form element label.
 *
 * Available variables:
 * - title: The label's text.
 * - title_display: Elements title_display setting.
 * - required: An indicator for whether the associated form element is required.
 * - attributes: A list of HTML attributes for the label.
 *
 * @see template_preprocess_form_element_label()
 */
#}
{%-
  set classes = [
  not (is_checkbox or is_radio) ? 'usa-label',
  is_checkbox ? 'usa-checkbox__label',
  is_radio ? 'usa-radio__label',
  'control-label',
  title_display == 'after' ? 'option',
  title_display == 'invisible' and not (is_checkbox or is_radio) ? 'usa-sr-only',
  required ? 'js-form-required',
  required ? 'form-required',
]
-%}
{% if title is not empty and title_display == 'invisible' and (is_checkbox or is_radio) -%}
  {#
  Clear but preserve label text as attribute (e.g. for screen readers) for
  checkboxes/radio buttons when it actually should be invisible.
  #}
  {%- set attributes = attributes.setAttribute('title', title) -%}
  {%- set title = null -%}
{%- endif -%}
{#
Labels for single checkboxes/radios contain the element itself and thus have
always to be rendered regardless of whether they have a title or not.
#}
{%- if title is not empty or is_checkbox or is_radio -%}
  <label{{ attributes.addClass(classes) }}>{{ element }}{{ title }}
    {%- if description -%}
      <p class=\"help-block\">{{ description }}</p>
    {%- endif -%}
  </label>
{%- endif -%}", "themes/contrib/uswds_base/templates/form/form-element-label.html.twig", "/Users/irenerojas/Code/irene_drupal/themes/contrib/uswds_base/templates/form/form-element-label.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "if" => 27);
        static $filters = array("escape" => 40);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
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
