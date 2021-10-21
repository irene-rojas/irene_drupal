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

/* themes/contrib/uswds_base/templates/navigation/menu--sidebar_first.html.twig */
class __TwigTemplate_9a3ade2f9fef9bcd3583c20971e6e81974a5eacd82f6966da1810f9c2136b37d extends \Twig\Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
";
        // line 8
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 9
        echo "
";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), 0, ($context["attributes"] ?? null)], 14, $context, $this->getSourceContext()));
        echo "

";
    }

    // line 16
    public function macro_menu_links($__items__ = null, $__menu_level__ = null, $__parent__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "menu_level" => $__menu_level__,
            "parent" => $__parent__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 17
            echo "  ";
            $macros["menus"] = $this;
            // line 18
            echo "
  ";
            // line 19
            if (($context["items"] ?? null)) {
                // line 20
                echo "    <ul class=\"";
                if ((($context["menu_level"] ?? null) == 0)) {
                    echo "usa-sidenav";
                } else {
                    echo "usa-sidenav__sublist";
                }
                echo "\">
    ";
                // line 21
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
                    // line 22
                    echo "      ";
                    // line 23
                    $context["item_classes"] = [0 => "usa-sidenav__item", 1 => (((twig_get_attribute($this->env, $this->source,                     // line 25
$context["item"], "is_expanded", [], "any", false, false, true, 25) && twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 25))) ? ("expanded dropdown") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,                     // line 26
$context["item"], "in_active_trail", [], "any", false, false, true, 26)) ? ("active active-trail") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 27
$context["loop"], "first", [], "any", false, false, true, 27)) ? ("first") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,                     // line 28
$context["loop"], "last", [], "any", false, false, true, 28)) ? ("last") : (""))];
                    // line 31
                    echo "
      ";
                    // line 32
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 32), "getOption", [0 => "attributes"], "method", false, false, true, 32)) {
                        // line 33
                        echo "        ";
                        $context["link_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 33), "getOption", [0 => "attributes"], "method", false, false, true, 33), 33, $this->source));
                        // line 34
                        echo "      ";
                    } else {
                        // line 35
                        echo "        ";
                        $context["link_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
                        // line 36
                        echo "      ";
                    }
                    // line 37
                    echo "
      ";
                    // line 38
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 38)) {
                        // line 39
                        echo "        ";
                        $context["link_attributes"] = twig_get_attribute($this->env, $this->source, ($context["link_attributes"] ?? null), "addClass", [0 => "usa-current"], "method", false, false, true, 39);
                        // line 40
                        echo "      ";
                    }
                    // line 41
                    echo "
      <li";
                    // line 42
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 42), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 42), 42, $this->source), "html", null, true);
                    echo ">
        <a ";
                    // line 43
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_attributes"] ?? null), 43, $this->source), "html", null, true);
                    echo " href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                    echo "\">
          <span>";
                    // line 44
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                    echo "</span>
        </a>

      </li>
      ";
                    // line 48
                    if (((twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 48) && (($context["menu_level"] ?? null) < 2)) && twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 48))) {
                        // line 49
                        echo "        ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 49), (($context["menu_level"] ?? null) + 1), ($context["megamenu"] ?? null), twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 49), $context["item"], ($context["duplicate_parent"] ?? null), ($context["attributes"] ?? null)], 49, $context, $this->getSourceContext()));
                        echo "
      ";
                    } elseif (((twig_get_attribute($this->env, $this->source,                     // line 50
$context["item"], "is_expanded", [], "any", false, false, true, 50) && (($context["menu_level"] ?? null) == 0)) && twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 50))) {
                        // line 51
                        echo "        ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 51), (($context["menu_level"] ?? null) + 1), ($context["megamenu"] ?? null), twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 51), $context["item"], ($context["duplicate_parent"] ?? null), ($context["attributes"] ?? null)], 51, $context, $this->getSourceContext()));
                        echo "
        ";
                        // line 52
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["_self"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 52), twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 52), (($context["menu_level"] ?? null) + 1), ($context["classes"] ?? null), ($context["dropdown_classes"] ?? null), ($context["attributes"] ?? null)], 52, $context, $this->getSourceContext()));
                        echo "
      ";
                    }
                    // line 54
                    echo "    ";
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
                // line 55
                echo "    </ul>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/uswds_base/templates/navigation/menu--sidebar_first.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 55,  180 => 54,  175 => 52,  170 => 51,  168 => 50,  163 => 49,  161 => 48,  154 => 44,  148 => 43,  144 => 42,  141 => 41,  138 => 40,  135 => 39,  133 => 38,  130 => 37,  127 => 36,  124 => 35,  121 => 34,  118 => 33,  116 => 32,  113 => 31,  111 => 28,  110 => 27,  109 => 26,  108 => 25,  107 => 23,  105 => 22,  88 => 21,  79 => 20,  77 => 19,  74 => 18,  71 => 17,  55 => 16,  48 => 14,  45 => 9,  43 => 8,  40 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/uswds_base/templates/navigation/menu--sidebar_first.html.twig", "/Users/irenerojas/Code/irene_drupal/themes/contrib/uswds_base/templates/navigation/menu--sidebar_first.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 8, "macro" => 16, "if" => 19, "for" => 21, "set" => 23);
        static $filters = array("escape" => 42);
        static $functions = array("create_attribute" => 33);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
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
