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
        // line 93
        echo "
";
        // line 95
        $this->displayBlock('main', $context, $blocks);
        // line 120
        echo "
";
        // line 122
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
      ";
        // line 65
        if (($context["header_extended"] ?? null)) {
            // line 66
            echo "      <div class=\"usa-nav__inner\">
        ";
        }
        // line 68
        echo "
        ";
        // line 72
        echo "
        ";
        // line 73
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "mobile_menu", [], "any", false, false, true, 73)) {
            // line 74
            echo "        <div class=\"usa-nav-desktop\">
          ";
        }
        // line 76
        echo "
          ";
        // line 77
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 77)) {
            // line 78
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 80
        echo "
        ";
        // line 81
        if (($context["header_extended"] ?? null)) {
            // line 82
            echo "      </div>
      ";
        }
        // line 84
        echo "    </nav>

    ";
        // line 86
        if (($context["header_basic"] ?? null)) {
            // line 87
            echo "  </div>
  ";
        }
        // line 89
        echo "
</header>
";
    }

    // line 95
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 96
        echo "  <main class=\"main-content usa-layout-docs usa-section ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_classes"] ?? null), 96, $this->source), "html", null, true);
        echo "\" role=\"main\"
        id=\"main-content\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 99
        echo "
    <div class=\"grid-container\">

      ";
        // line 102
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 102) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 102))) {
            // line 103
            echo "        ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 108
            echo "      ";
        }
        // line 109
        echo "
      ";
        // line 110
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "front", [], "any", false, false, true, 110)) {
            // line 111
            echo "        ";
            // line 112
            echo "        <div class=\"front\" class=\"content\">
          ";
            // line 113
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "front", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 116
        echo "    </div>
  </main>
";
    }

    // line 103
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 104
        echo "          <div class=\"\">
            ";
        // line 105
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 122
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 123
        echo "  <footer class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_classes"] ?? null), 123, $this->source), "html", null, true);
        echo "\" role=\"contentinfo\">
    <div class=\"grid-container usa-footer__return-to-top\">
      <a href=\"#\">";
        // line 125
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Return to top"));
        echo "</a>
    </div>

      ";
        // line 128
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 128)) {
            // line 129
            echo "        <div class=\"grid-container\">
          <div class=\"grid-row grid-gap\">
            <div class=\"grid-col-fill\">
              ";
            // line 132
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        </div>
      ";
        }
        // line 137
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
        return array (  231 => 137,  223 => 132,  218 => 129,  216 => 128,  210 => 125,  204 => 123,  200 => 122,  193 => 105,  190 => 104,  186 => 103,  180 => 116,  174 => 113,  171 => 112,  169 => 111,  167 => 110,  164 => 109,  161 => 108,  158 => 103,  156 => 102,  151 => 99,  145 => 96,  141 => 95,  135 => 89,  131 => 87,  129 => 86,  125 => 84,  121 => 82,  119 => 81,  116 => 80,  110 => 78,  108 => 77,  105 => 76,  101 => 74,  99 => 73,  96 => 72,  93 => 68,  89 => 66,  87 => 65,  81 => 62,  78 => 61,  74 => 59,  72 => 58,  66 => 56,  62 => 55,  58 => 122,  55 => 120,  53 => 95,  50 => 93,  48 => 55,  43 => 51,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/uswds_irene/templates/page--front.html.twig", "/Users/irenerojas/Code/irene_drupal/themes/custom/uswds_irene/templates/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 55, "if" => 58);
        static $filters = array("escape" => 56, "t" => 125);
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
