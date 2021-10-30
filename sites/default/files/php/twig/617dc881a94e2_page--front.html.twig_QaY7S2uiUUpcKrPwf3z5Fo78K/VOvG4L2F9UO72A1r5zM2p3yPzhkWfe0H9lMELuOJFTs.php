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

";
        // line 54
        $this->displayBlock('header', $context, $blocks);
        // line 78
        echo "
";
        // line 80
        $this->displayBlock('main', $context, $blocks);
        // line 105
        echo "
";
        // line 107
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 54
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "  <header class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_classes"] ?? null), 55, $this->source), "html", null, true);
        echo "\" id=\"header\" role=\"banner\">

  ";
        // line 57
        if (($context["header_basic"] ?? null)) {
            // line 58
            echo "  <div class=\"usa-nav-container\">
    ";
        }
        // line 60
        echo "
    ";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
        echo "

    <nav class=\"usa-nav\" role=\"navigation\">
      <div class=\"usa-nav__inner\">
        ";
        // line 65
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 65)) {
            // line 66
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 68
        echo "      </div>
    </nav>

    ";
        // line 71
        if (($context["header_basic"] ?? null)) {
            // line 72
            echo "  </div>
  ";
        }
        // line 74
        echo "
</header>
";
    }

    // line 80
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        echo "  <main class=\"main-content usa-layout-docs usa-section ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_classes"] ?? null), 81, $this->source), "html", null, true);
        echo "\" role=\"main\"
        id=\"main-content\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 84
        echo "
    <div class=\"grid-container\">

      ";
        // line 87
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 87) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 87))) {
            // line 88
            echo "        ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 93
            echo "      ";
        }
        // line 94
        echo "
      ";
        // line 95
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "front", [], "any", false, false, true, 95)) {
            // line 96
            echo "        ";
            // line 97
            echo "        <div class=\"front\" class=\"content\">
          ";
            // line 98
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "front", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 101
        echo "    </div>
  </main>
";
    }

    // line 88
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 89
        echo "          <div class=\"\">
            ";
        // line 90
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 107
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 108
        echo "  <footer class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_classes"] ?? null), 108, $this->source), "html", null, true);
        echo "\" role=\"contentinfo\">
    <div class=\"grid-container usa-footer__return-to-top\">
      <a href=\"#\">";
        // line 110
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Return to top"));
        echo "</a>
    </div>

      ";
        // line 113
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 113)) {
            // line 114
            echo "        <div class=\"grid-container\">
          <div class=\"grid-row grid-gap\">
            <div class=\"grid-col-fill\">
              ";
            // line 117
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        </div>
      ";
        }
        // line 122
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
        return array (  202 => 122,  194 => 117,  189 => 114,  187 => 113,  181 => 110,  175 => 108,  171 => 107,  164 => 90,  161 => 89,  157 => 88,  151 => 101,  145 => 98,  142 => 97,  140 => 96,  138 => 95,  135 => 94,  132 => 93,  129 => 88,  127 => 87,  122 => 84,  116 => 81,  112 => 80,  106 => 74,  102 => 72,  100 => 71,  95 => 68,  89 => 66,  87 => 65,  80 => 61,  77 => 60,  73 => 58,  71 => 57,  65 => 55,  61 => 54,  57 => 107,  54 => 105,  52 => 80,  49 => 78,  47 => 54,  43 => 51,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/uswds_irene/templates/page--front.html.twig", "/Users/irenerojas/Code/irene_drupal/themes/custom/uswds_irene/templates/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 54, "if" => 57);
        static $filters = array("escape" => 55, "t" => 110);
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
