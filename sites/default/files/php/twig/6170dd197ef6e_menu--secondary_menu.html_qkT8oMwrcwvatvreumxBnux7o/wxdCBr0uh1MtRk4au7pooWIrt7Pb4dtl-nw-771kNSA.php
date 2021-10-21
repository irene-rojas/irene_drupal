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

/* themes/contrib/uswds_base/templates/navigation/menu--secondary_menu.html.twig */
class __TwigTemplate_a1e8a584747d5217010134c6b81d7e2e4dc67b4677dd409f332a03c6a8b355bb extends \Twig\Template
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
        // line 7
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 8
        echo "
";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), 0, ($context["footer_style"] ?? null), ($context["attributes"] ?? null)], 13, $context, $this->getSourceContext()));
        echo "

";
    }

    // line 15
    public function macro_menu_links($__items__ = null, $__menu_level__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "menu_level" => $__menu_level__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 16
            echo "  ";
            $macros["menus"] = $this;
            // line 17
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 18
                echo "
    <ul class=\"usa-nav__secondary-links\">

      ";
                // line 21
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["search_item"] ?? null), 21, $this->source));
                echo "
      ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 23
                    echo "        ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 23), "getOption", [0 => "attributes"], "method", false, false, true, 23)) {
                        // line 24
                        echo "          ";
                        $context["link_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 24), "getOption", [0 => "attributes"], "method", false, false, true, 24), 24, $this->source));
                        // line 25
                        echo "        ";
                    } else {
                        // line 26
                        echo "          ";
                        $context["link_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
                        // line 27
                        echo "        ";
                    }
                    // line 28
                    echo "
        ";
                    // line 29
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 29)) {
                        // line 30
                        echo "          ";
                        $context["link_attributes"] = twig_get_attribute($this->env, $this->source, ($context["link_attributes"] ?? null), "addClass", [0 => "usa-current"], "method", false, false, true, 30);
                        // line 31
                        echo "        ";
                    }
                    // line 32
                    echo "        <li class=\"usa-nav__secondary-item\">
          <a ";
                    // line 33
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_attributes"] ?? null), 33, $this->source), "html", null, true);
                    echo " href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
                    echo "\">
            ";
                    // line 34
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                    echo "
          </a>
        </li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "
    </ul>
  ";
            }
            // line 41
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/uswds_base/templates/navigation/menu--secondary_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 41,  130 => 38,  120 => 34,  114 => 33,  111 => 32,  108 => 31,  105 => 30,  103 => 29,  100 => 28,  97 => 27,  94 => 26,  91 => 25,  88 => 24,  85 => 23,  81 => 22,  77 => 21,  72 => 18,  69 => 17,  66 => 16,  51 => 15,  44 => 13,  41 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/uswds_base/templates/navigation/menu--secondary_menu.html.twig", "/Users/irenerojas/Code/irene_drupal/themes/contrib/uswds_base/templates/navigation/menu--secondary_menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 7, "macro" => 15, "if" => 17, "for" => 22, "set" => 24);
        static $filters = array("raw" => 21, "escape" => 33);
        static $functions = array("create_attribute" => 24);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['raw', 'escape'],
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
