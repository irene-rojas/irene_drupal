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

/* themes/contrib/uswds_base/templates/navigation/menu--primary_menu.html.twig */
class __TwigTemplate_c77042ace7946e9580dcd96ed786b08b2d9ba44d4c94de2808fdfe9f7dc01401 extends \Twig\Template
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
        // line 22
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), 0, ($context["megamenu"] ?? null), 0, null, ($context["duplicate_parent"] ?? null), null, ($context["mega_display_second"] ?? null), ($context["attributes"] ?? null)], 27, $context, $this->getSourceContext()));
        echo "

";
    }

    // line 29
    public function macro_menu_links($__items__ = null, $__menu_level__ = null, $__megamenu__ = null, $__button_id__ = null, $__parent__ = null, $__duplicate_parent__ = null, $__region__ = null, $__mega_display_second__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "menu_level" => $__menu_level__,
            "megamenu" => $__megamenu__,
            "button_id" => $__button_id__,
            "parent" => $__parent__,
            "duplicate_parent" => $__duplicate_parent__,
            "region" => $__region__,
            "mega_display_second" => $__mega_display_second__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 30
            echo "  ";
            $macros["menus"] = $this;
            // line 31
            echo "
  ";
            // line 32
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "url", [], "any", false, false, true, 32), "getOption", [0 => "attributes"], "method", false, false, true, 32)) {
                // line 33
                echo "    ";
                $context["link_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "url", [], "any", false, false, true, 33), "getOption", [0 => "attributes"], "method", false, false, true, 33), 33, $this->source));
                // line 34
                echo "  ";
            } else {
                // line 35
                echo "    ";
                $context["link_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
                // line 36
                echo "  ";
            }
            // line 37
            echo "
  ";
            // line 38
            if (($context["items"] ?? null)) {
                // line 39
                echo "
    ";
                // line 40
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 41
                    echo "      <ul class=\"usa-nav__primary usa-accordion\" role=\"navigation\">
    ";
                } elseif ((                // line 42
($context["megamenu"] ?? null) && (($context["menu_level"] ?? null) == 1))) {
                    // line 43
                    echo "      <div id=\"extended-mega-nav-section-";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button_id"] ?? null), 43, $this->source), "html", null, true);
                    echo "\" class=\"usa-nav__submenu usa-megamenu\" hidden=\"\">

      ";
                    // line 45
                    if (($context["duplicate_parent"] ?? null)) {
                        // line 46
                        echo "        <div class=\"grid-row grid-gap-4\">
          <div class=\"desktop:grid-col-3\">
            <div class=\"usa-nav__submenu-item\">
              <a ";
                        // line 49
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_attributes"] ?? null), 49, $this->source), "html", null, true);
                        echo " href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "url", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
                        echo "\">
                <span><h3>";
                        // line 50
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "title", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
                        echo "</h3></span>
              </a>
            </div>
          </div>
        </div>
      ";
                    }
                    // line 56
                    echo "
      <div class=\"grid-row grid-gap-4\">
    ";
                } else {
                    // line 59
                    echo "      <ul id=\"basic-nav-section-";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button_id"] ?? null), 59, $this->source), "html", null, true);
                    echo "\" class=\"usa-nav__submenu";
                    if ((($context["menu_level"] ?? null) > 1)) {
                        echo "-list";
                    }
                    echo "\"";
                    if ((($context["menu_level"] ?? null) == 1)) {
                        echo " hidden=\"\"";
                    }
                    echo ">

      ";
                    // line 61
                    if ((($context["duplicate_parent"] ?? null) && (($context["megamenu"] ?? null) == 0))) {
                        // line 62
                        echo "        <li class=\"usa-nav__submenu-item\">
          ";
                        // line 63
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_attributes"] ?? null), 63, $this->source), "html", null, true);
                        echo "
          <a ";
                        // line 64
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_attributes"] ?? null), 64, $this->source), "html", null, true);
                        echo " href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "url", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
                        echo "\">
            <span><strong>";
                        // line 65
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "title", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
                        echo "</strong></span>
          </a>
        </li>
      ";
                    }
                    // line 69
                    echo "    ";
                }
                // line 70
                echo "
    ";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 72
                    echo "      ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 72), "getOption", [0 => "attributes"], "method", false, false, true, 72)) {
                        // line 73
                        echo "        ";
                        $context["link_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 73), "getOption", [0 => "attributes"], "method", false, false, true, 73), 73, $this->source));
                        // line 74
                        echo "      ";
                    } else {
                        // line 75
                        echo "        ";
                        $context["link_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
                        // line 76
                        echo "      ";
                    }
                    // line 77
                    echo "
      ";
                    // line 78
                    if ((($context["megamenu"] ?? null) && (($context["menu_level"] ?? null) == 1))) {
                        // line 79
                        echo "        <div class=\"desktop:grid-col-3\">

        ";
                        // line 81
                        if ((($context["mega_display_second"] ?? null) && twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 81))) {
                            // line 82
                            echo "          <div class=\"usa-nav__submenu-item\">
            <a ";
                            // line 83
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["link_attributes"] ?? null), "addClass", [0 => "usa-nav__link"], "method", false, false, true, 83), 83, $this->source), "html", null, true);
                            echo " href=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                            echo "\">
              <span><strong>";
                            // line 84
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
                            echo "</strong></span>
            </a>
          </div>
        ";
                        }
                        // line 88
                        echo "      ";
                    } else {
                        // line 89
                        echo "        <li class=\"";
                        if ((($context["menu_level"] ?? null) == 0)) {
                            echo "usa-nav__primary-item";
                        } else {
                            echo "usa-nav__submenu-item";
                        }
                        echo "\">
      ";
                    }
                    // line 91
                    echo "
      ";
                    // line 92
                    if (((($context["menu_level"] ?? null) == 0) && twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 92))) {
                        // line 93
                        echo "        <button class=\"usa-accordion__button usa-nav__link ";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 93)) {
                            echo "usa-current";
                        }
                        echo "\" aria-expanded=\"false\" aria-controls=\"";
                        if (($context["megamenu"] ?? null)) {
                            echo "extended-mega-nav-section-";
                        } else {
                            echo "basic-nav-section-";
                        }
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
                        echo "\">
          <span>";
                        // line 94
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
                        echo "</span>
        </button>
      ";
                    }
                    // line 97
                    echo "
      ";
                    // line 98
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 98) && ((($context["megamenu"] ?? null) && (($context["menu_level"] ?? null) == 1)) || (($context["menu_level"] ?? null) == 0)))) {
                        // line 99
                        echo "        ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 99), (($context["menu_level"] ?? null) + 1), ($context["megamenu"] ?? null), twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 99), $context["item"], ($context["duplicate_parent"] ?? null), null, ($context["mega_display_second"] ?? null), ($context["attributes"] ?? null)], 99, $context, $this->getSourceContext()));
                        echo "
      ";
                    } else {
                        // line 101
                        echo "        ";
                        if ((($context["megamenu"] ?? null) && (($context["menu_level"] ?? null) == 1))) {
                            // line 102
                            echo "          <div class=\"usa-nav__submenu-item\">
        ";
                        }
                        // line 104
                        echo "
        ";
                        // line 106
                        $context["item_classes"] = [0 => "usa-nav__link", 1 => ((twig_get_attribute($this->env, $this->source,                         // line 108
$context["item"], "in_active_trail", [], "any", false, false, true, 108)) ? ("usa-current") : (""))];
                        // line 111
                        echo "
        <a href=\"";
                        // line 112
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
                        echo "\"";
                        if ((($context["menu_level"] ?? null) == 0)) {
                            echo " ";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["link_attributes"] ?? null), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 112), 112, $this->source), "html", null, true);
                            echo " ";
                        } else {
                            echo " ";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_attributes"] ?? null), 112, $this->source), "html", null, true);
                            echo " ";
                        }
                        echo ">
          <span>";
                        // line 113
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
                        echo "</span>
        </a>
        ";
                        // line 115
                        if ((($context["megamenu"] ?? null) && (($context["menu_level"] ?? null) == 1))) {
                            // line 116
                            echo "          </div>
        ";
                        }
                        // line 118
                        echo "      ";
                    }
                    // line 119
                    echo "
      ";
                    // line 120
                    if ((($context["megamenu"] ?? null) && (($context["menu_level"] ?? null) == 1))) {
                        // line 121
                        echo "        </div>
      ";
                    } else {
                        // line 123
                        echo "        </li>
      ";
                    }
                    // line 125
                    echo "
    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 127
                echo "
    ";
                // line 128
                if ((($context["megamenu"] ?? null) && (($context["menu_level"] ?? null) == 1))) {
                    // line 129
                    echo "      </div>
      </div>
    ";
                } else {
                    // line 132
                    echo "      </ul>
    ";
                }
                // line 134
                echo "
  ";
            }
            // line 136
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/uswds_base/templates/navigation/menu--primary_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 136,  373 => 134,  369 => 132,  364 => 129,  362 => 128,  359 => 127,  344 => 125,  340 => 123,  336 => 121,  334 => 120,  331 => 119,  328 => 118,  324 => 116,  322 => 115,  317 => 113,  303 => 112,  300 => 111,  298 => 108,  297 => 106,  294 => 104,  290 => 102,  287 => 101,  281 => 99,  279 => 98,  276 => 97,  270 => 94,  256 => 93,  254 => 92,  251 => 91,  241 => 89,  238 => 88,  231 => 84,  225 => 83,  222 => 82,  220 => 81,  216 => 79,  214 => 78,  211 => 77,  208 => 76,  205 => 75,  202 => 74,  199 => 73,  196 => 72,  179 => 71,  176 => 70,  173 => 69,  166 => 65,  160 => 64,  156 => 63,  153 => 62,  151 => 61,  137 => 59,  132 => 56,  123 => 50,  117 => 49,  112 => 46,  110 => 45,  104 => 43,  102 => 42,  99 => 41,  97 => 40,  94 => 39,  92 => 38,  89 => 37,  86 => 36,  83 => 35,  80 => 34,  77 => 33,  75 => 32,  72 => 31,  69 => 30,  48 => 29,  41 => 27,  39 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Override of system/menu.html.twig for the primary menu.
 *
 * Available variables:
 * - classes: A list of classes to apply to the top level <ul> element.
 * - dropdown_classes: A list of classes to apply to the dropdown <ul> element.
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *
 * @ingroup templates
 *
 * Define a custom macro that will render all menu trees.
 */
#}
{% import _self as menus %}
{#
We call a macro which calls itself to render the full tree.
@see http://twig.sensiolabs.org/doc/tags/macro.html
#}
{{ menus.menu_links(items, 0, megamenu, 0, NULL, duplicate_parent, NULL, mega_display_second, attributes) }}

{% macro menu_links(items, menu_level, megamenu, button_id, parent, duplicate_parent, region, mega_display_second, attributes) %}
  {% import _self as menus %}

  {% if parent.url.getOption('attributes') %}
    {% set link_attributes = create_attribute(parent.url.getOption('attributes')) %}
  {% else %}
    {% set link_attributes = create_attribute() %}
  {% endif %}

  {% if items %}

    {% if menu_level == 0 %}
      <ul class=\"usa-nav__primary usa-accordion\" role=\"navigation\">
    {% elseif megamenu and menu_level == 1 %}
      <div id=\"extended-mega-nav-section-{{ button_id }}\" class=\"usa-nav__submenu usa-megamenu\" hidden=\"\">

      {% if duplicate_parent %}
        <div class=\"grid-row grid-gap-4\">
          <div class=\"desktop:grid-col-3\">
            <div class=\"usa-nav__submenu-item\">
              <a {{ link_attributes }} href=\"{{ parent.url }}\">
                <span><h3>{{ parent.title }}</h3></span>
              </a>
            </div>
          </div>
        </div>
      {% endif %}

      <div class=\"grid-row grid-gap-4\">
    {% else %}
      <ul id=\"basic-nav-section-{{ button_id }}\" class=\"usa-nav__submenu{% if menu_level > 1 %}-list{% endif %}\"{% if menu_level == 1  %} hidden=\"\"{% endif %}>

      {% if duplicate_parent and megamenu == 0 %}
        <li class=\"usa-nav__submenu-item\">
          {{ link_attributes }}
          <a {{ link_attributes }} href=\"{{ parent.url }}\">
            <span><strong>{{ parent.title }}</strong></span>
          </a>
        </li>
      {% endif %}
    {% endif %}

    {% for item in items %}
      {% if item.url.getOption('attributes') %}
        {% set link_attributes = create_attribute(item.url.getOption('attributes')) %}
      {% else %}
        {% set link_attributes = create_attribute() %}
      {% endif %}

      {% if megamenu and menu_level == 1 %}
        <div class=\"desktop:grid-col-3\">

        {% if mega_display_second and item.below  %}
          <div class=\"usa-nav__submenu-item\">
            <a {{ link_attributes.addClass('usa-nav__link') }} href=\"{{ item.url }}\">
              <span><strong>{{ item.title }}</strong></span>
            </a>
          </div>
        {% endif %}
      {% else %}
        <li class=\"{% if menu_level == 0 %}usa-nav__primary-item{% else %}usa-nav__submenu-item{% endif %}\">
      {% endif %}

      {% if menu_level == 0 and item.below %}
        <button class=\"usa-accordion__button usa-nav__link {% if item.in_active_trail %}usa-current{% endif %}\" aria-expanded=\"false\" aria-controls=\"{% if megamenu  %}extended-mega-nav-section-{% else %}basic-nav-section-{% endif %}{{ loop.index }}\">
          <span>{{ item.title }}</span>
        </button>
      {% endif %}

      {% if item.below and ((megamenu and menu_level == 1) or menu_level == 0) %}
        {{ menus.menu_links(item.below, menu_level + 1, megamenu, loop.index, item, duplicate_parent, NULL, mega_display_second, attributes) }}
      {% else %}
        {% if megamenu and menu_level == 1 %}
          <div class=\"usa-nav__submenu-item\">
        {% endif %}

        {%
          set item_classes = [
          'usa-nav__link',
          item.in_active_trail ? 'usa-current'
        ]
        %}

        <a href=\"{{ item.url }}\"{% if menu_level == 0 %} {{ link_attributes.addClass(item_classes)}} {% else %} {{ link_attributes}} {% endif %}>
          <span>{{ item.title }}</span>
        </a>
        {% if megamenu and menu_level == 1 %}
          </div>
        {% endif %}
      {% endif %}

      {% if megamenu and menu_level == 1 %}
        </div>
      {% else %}
        </li>
      {% endif %}

    {% endfor %}

    {% if megamenu and menu_level == 1 %}
      </div>
      </div>
    {% else %}
      </ul>
    {% endif %}

  {% endif %}

{% endmacro %}
", "themes/contrib/uswds_base/templates/navigation/menu--primary_menu.html.twig", "/Users/irenerojas/Code/irene_drupal/themes/contrib/uswds_base/templates/navigation/menu--primary_menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 22, "macro" => 29, "if" => 32, "set" => 33, "for" => 71);
        static $filters = array("escape" => 43);
        static $functions = array("create_attribute" => 33);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'set', 'for'],
                ['escape'],
                ['create_attribute']
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
