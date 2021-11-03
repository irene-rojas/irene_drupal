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
        // line 106
        $this->displayBlock('footer', $context, $blocks);
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

    // line 106
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 107
        echo "  <footer class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_classes"] ?? null), 107, $this->source), "html", null, true);
        echo "\" role=\"contentinfo\">
    <div class=\"grid-container usa-footer__return-to-top\">
      <a href=\"#\">";
        // line 109
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Return to top"));
        echo "</a>
    </div>

      ";
        // line 112
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 112)) {
            // line 113
            echo "        <div class=\"grid-container\">
          <div class=\"grid-row grid-gap\">
            <div class=\"grid-col-fill\">
              ";
            // line 116
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        </div>
      ";
        }
        // line 121
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
        return array (  201 => 121,  193 => 116,  188 => 113,  186 => 112,  180 => 109,  174 => 107,  170 => 106,  163 => 89,  160 => 88,  156 => 87,  150 => 100,  144 => 97,  141 => 96,  139 => 95,  137 => 94,  134 => 93,  131 => 92,  128 => 87,  126 => 86,  121 => 83,  115 => 80,  111 => 79,  105 => 73,  101 => 71,  99 => 70,  94 => 67,  88 => 65,  86 => 64,  79 => 60,  76 => 59,  72 => 57,  70 => 56,  64 => 54,  60 => 53,  56 => 106,  53 => 104,  51 => 79,  48 => 77,  46 => 53,  43 => 51,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/uswds_irene/templates/page--front.html.twig", "/Users/irenerojas/Code/irene_drupal/themes/custom/uswds_irene/templates/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 53, "if" => 56);
        static $filters = array("escape" => 54, "t" => 109);
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
