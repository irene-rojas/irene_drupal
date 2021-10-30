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
class __TwigTemplate_329ed2fbad4ab928eee81443370ed336995399ab9e76a4502035bf8eb5ca9540 extends \Twig\Template
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
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "
<div class=\"usa-overlay\"></div>

";
        // line 55
        $this->displayBlock('header', $context, $blocks);
        // line 79
        echo "
";
        // line 81
        $this->displayBlock('main', $context, $blocks);
        // line 106
        echo "
";
        // line 108
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 55
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "  <header class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_classes"] ?? null), 56, $this->source), "html", null, true);
        echo "\" id=\"header\" role=\"banner\">

  ";
        // line 58
        if (($context["header_basic"] ?? null)) {
            // line 59
            echo "  <div class=\"usa-nav-container\">
    ";
        }
        // line 61
        echo "
    ";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "

    <nav class=\"usa-nav\" role=\"navigation\">
      <div class=\"usa-nav__inner\">
        ";
        // line 66
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 66)) {
            // line 67
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 69
        echo "      </div>
    </nav>

    ";
        // line 72
        if (($context["header_basic"] ?? null)) {
            // line 73
            echo "  </div>
  ";
        }
        // line 75
        echo "
</header>
";
    }

    // line 81
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        echo "  <main class=\"main-content usa-layout-docs usa-section ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_classes"] ?? null), 82, $this->source), "html", null, true);
        echo "\" role=\"main\"
        id=\"main-content\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 85
        echo "
    <div class=\"grid-container\">

      ";
        // line 88
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 88) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 88))) {
            // line 89
            echo "        ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 94
            echo "      ";
        }
        // line 95
        echo "
      ";
        // line 96
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "front", [], "any", false, false, true, 96)) {
            // line 97
            echo "        ";
            // line 98
            echo "        <div class=\"front\" class=\"content\">
          ";
            // line 99
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "front", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 102
        echo "    </div>
  </main>
";
    }

    // line 89
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 90
        echo "          <div class=\"\">
            ";
        // line 91
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 108
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        echo "  <footer class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_classes"] ?? null), 109, $this->source), "html", null, true);
        echo "\" role=\"contentinfo\">
    <div class=\"grid-container usa-footer__return-to-top\">
      <a href=\"#\">";
        // line 111
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Return to top"));
        echo "</a>
    </div>

      ";
        // line 114
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 114)) {
            // line 115
            echo "        <div class=\"grid-container\">
          <div class=\"grid-row grid-gap\">
            <div class=\"grid-col-fill\">
              ";
            // line 118
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        </div>
      ";
        }
        // line 123
        echo "
  </footer>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/uswds_irene/templates/page--front.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  203 => 123,  195 => 118,  190 => 115,  188 => 114,  182 => 111,  176 => 109,  172 => 108,  165 => 91,  162 => 90,  158 => 89,  152 => 102,  146 => 99,  143 => 98,  141 => 97,  139 => 96,  136 => 95,  133 => 94,  130 => 89,  128 => 88,  123 => 85,  117 => 82,  113 => 81,  107 => 75,  103 => 73,  101 => 72,  96 => 69,  90 => 67,  88 => 66,  81 => 62,  78 => 61,  74 => 59,  72 => 58,  66 => 56,  62 => 55,  58 => 108,  55 => 106,  53 => 81,  50 => 79,  48 => 55,  43 => 51,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/uswds_irene/templates/page--front.html.twig", "/Users/irenerojas/Code/irene_drupal/themes/custom/uswds_irene/templates/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 55, "if" => 58);
        static $filters = array("escape" => 56, "t" => 111);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['escape', 't'],
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
