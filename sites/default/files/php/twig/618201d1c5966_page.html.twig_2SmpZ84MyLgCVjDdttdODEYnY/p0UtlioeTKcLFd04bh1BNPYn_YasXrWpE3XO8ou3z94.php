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

/* themes/custom/eg/templates/page.html.twig */
class __TwigTemplate_daac1b2679c380c8a7c1e96fac1e3f26eaff5e81e052777b8fc4d972af33c196 extends \Twig\Template
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
        // line 45
        echo "<div class=\"layout-container\">

  <header role=\"banner\">
    ";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
        echo "
  </header>

  ";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
        echo "

  ";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
        echo "

  ";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
        echo "

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 59
        echo "
    <div class=\"layout-content\">
      ";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
        echo "
    </div>";
        // line 63
        echo "
    ";
        // line 64
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 64)) {
            // line 65
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 66
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 69
        echo "
    ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 70)) {
            // line 71
            echo "      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        ";
            // line 72
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 75
        echo "
    ";
        // line 76
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "front", [], "any", false, false, true, 76)) {
            // line 77
            echo "    ";
            // line 78
            echo "      <div class=\"front\" class=\"content\">
        ";
            // line 79
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "front", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 82
        echo "
  </main>

  ";
        // line 85
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 85)) {
            // line 86
            echo "    <footer role=\"contentinfo\">
      ";
            // line 87
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
            echo "
    </footer>
  ";
        }
        // line 90
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/eg/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 90,  128 => 87,  125 => 86,  123 => 85,  118 => 82,  112 => 79,  109 => 78,  107 => 77,  105 => 76,  102 => 75,  96 => 72,  93 => 71,  91 => 70,  88 => 69,  82 => 66,  79 => 65,  77 => 64,  74 => 63,  70 => 61,  66 => 59,  60 => 55,  55 => 53,  50 => 51,  44 => 48,  39 => 45,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/eg/templates/page.html.twig", "/Users/irenerojas/Code/irene_drupal/themes/custom/eg/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 64);
        static $filters = array("escape" => 48);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
