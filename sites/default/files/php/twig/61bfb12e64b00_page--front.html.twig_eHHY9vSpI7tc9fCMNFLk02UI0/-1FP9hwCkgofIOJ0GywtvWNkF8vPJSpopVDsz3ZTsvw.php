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

/* themes/custom/uswds_irene/templates/page--front.html.twig */
class __TwigTemplate_93d3486d6949474ffd22a64fc786a46dd2d0956795ecd7430d732e6f74920b67 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'main' => [$this, 'block_main'],
            'highlighted' => [$this, 'block_highlighted'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "
";
        // line 53
        $this->displayBlock('header', $context, $blocks);
        // line 77
        echo "
";
        // line 79
        $this->displayBlock('main', $context, $blocks);
        // line 104
        echo "
";
    }

    // line 53
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "  <header class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_classes"] ?? null), 54, $this->source), "html", null, true);
        echo "\" id=\"header\" role=\"banner\">

  ";
        // line 56
        if (($context["header_basic"] ?? null)) {
            // line 57
            echo "  <div class=\"usa-nav-container\">
    ";
        }
        // line 59
        echo "
    ";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "

    <nav class=\"usa-nav\" role=\"navigation\">
      <div class=\"usa-nav__inner\">
        ";
        // line 64
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 64)) {
            // line 65
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 67
        echo "      </div>
    </nav>

    ";
        // line 70
        if (($context["header_basic"] ?? null)) {
            // line 71
            echo "  </div>
  ";
        }
        // line 73
        echo "
</header>
";
    }

    // line 79
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 80
        echo "  <main class=\"main-content usa-layout-docs usa-section ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_classes"] ?? null), 80, $this->source), "html", null, true);
        echo "\" role=\"main\"
        id=\"main-content\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 83
        echo "
    <div class=\"grid-container\">

      ";
        // line 86
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 86) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 86))) {
            // line 87
            echo "        ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 92
            echo "      ";
        }
        // line 93
        echo "
      ";
        // line 94
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "front", [], "any", false, false, true, 94)) {
            // line 95
            echo "        ";
            // line 96
            echo "        <div class=\"front\" class=\"content\">
          ";
            // line 97
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "front", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 100
        echo "    </div>
  </main>
";
    }

    // line 87
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "          <div class=\"\">
            ";
        // line 89
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
        echo "
          </div>
        ";
    }

    public function getTemplateName()
    {
        return "themes/custom/uswds_irene/templates/page--front.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  160 => 89,  157 => 88,  153 => 87,  147 => 100,  141 => 97,  138 => 96,  136 => 95,  134 => 94,  131 => 93,  128 => 92,  125 => 87,  123 => 86,  118 => 83,  112 => 80,  108 => 79,  102 => 73,  98 => 71,  96 => 70,  91 => 67,  85 => 65,  83 => 64,  76 => 60,  73 => 59,  69 => 57,  67 => 56,  61 => 54,  57 => 53,  52 => 104,  50 => 79,  47 => 77,  45 => 53,  42 => 51,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.government_banner: USWDS Display Government site banner
 * - page.header_top: Items for above the header region.
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.breadcrumb: Items for the breadcrumb region.
 * - page.hero: USWDS Hero Banner
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer_menu: Items for the footer menu region.
 * - page.footer: Items for the footer region.
 * - page.footer_secondary: Items for below the footer secondary region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}

{# start header #}
{% block header %}
  <header class=\"{{ header_classes }}\" id=\"header\" role=\"banner\">

  {% if header_basic %}
  <div class=\"usa-nav-container\">
    {% endif %}

    {{ page.header }}

    <nav class=\"usa-nav\" role=\"navigation\">
      <div class=\"usa-nav__inner\">
        {% if page.primary_menu %}
          {{ page.primary_menu }}
        {% endif %}
      </div>
    </nav>

    {% if header_basic %}
  </div>
  {% endif %}

</header>
{% endblock %}
{# end header #}

{# start main #}
{% block main %}
  <main class=\"main-content usa-layout-docs usa-section {{ main_classes }}\" role=\"main\"
        id=\"main-content\">
    <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}

    <div class=\"grid-container\">

      {% if page.breadcrumb or page.highlighted %}
        {% block highlighted %}
          <div class=\"\">
            {{ page.highlighted }}
          </div>
        {% endblock %}
      {% endif %}

      {% if page.front %}
        {# {% xxx } is a condition #}
        <div class=\"front\" class=\"content\">
          {{ page.front }}
        </div>
      {% endif %}
    </div>
  </main>
{% endblock %}
{# end main #}

", "themes/custom/uswds_irene/templates/page--front.html.twig", "/Users/irenerojas/Code/irene_drupal/themes/custom/uswds_irene/templates/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 53, "if" => 56);
        static $filters = array("escape" => 54);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
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
