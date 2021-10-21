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

/* themes/contrib/uswds_base/templates/uswds/government-banner.html.twig */
class __TwigTemplate_b790b5a1edb8075cdb476a70e35f505be83af2767bb1d63032cad55c6fb1daa6 extends \Twig\Template
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
        // line 1
        echo "<div class=\"usa-banner\">
  <div class=\"usa-accordion\">
    <header class=\"usa-banner__header\">
      <div class=\"usa-banner__inner\">
        <div class=\"grid-col-auto\">
          <img class=\"usa-banner__header-flag\" src=\"";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uswds_images"] ?? null), 6, $this->source), "html", null, true);
        echo "us_flag_small.png\" alt=\"U.S. flag\">
        </div>
        <div class=\"grid-col-fill tablet:grid-col-auto\">
          <p class=\"usa-banner__header-text\">";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("An official website of the United States government"));
        echo "</p>
          <p class=\"usa-banner__header-action\" aria-hidden=\"true\">";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Here's how you know"));
        echo "</p>
        </div>
        <button class=\"usa-accordion__button usa-banner__button\" aria-expanded=\"false\" aria-controls=\"gov-banner\">
          <span class=\"usa-banner__button-text\">";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Here's how you know"));
        echo "</span>
        </button>
      </div>
    </header>
    <div class=\"usa-banner__content usa-accordion__content\" id=\"gov-banner\" hidden=\"\">
      <div class=\"grid-row grid-gap-lg\">
        <div class=\"usa-banner__guidance tablet:grid-col-6\">
          <img class=\"usa-banner__icon usa-media-block__img\" src=\"";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uswds_images"] ?? null), 20, $this->source), "html", null, true);
        echo "icon-dot-gov.svg\" alt=\"Dot gov\">
          <div class=\"usa-media-block__body\">
            <p>
              <strong>";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("The .gov means it’s official."));
        echo "</strong>
              <br>
              ";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Federal government websites often end in .gov or .mil. Before sharing sensitive information, make sure you’re on a federal government site."));
        echo "
            </p>
          </div>
        </div>
        <div class=\"usa-banner__guidance tablet:grid-col-6\">
          <img class=\"usa-banner__icon usa-media-block__img\" src=\"";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uswds_images"] ?? null), 30, $this->source), "html", null, true);
        echo "icon-https.svg\" alt=\"Https\">
          <div class=\"usa-media-block__body\">
            <p>
              <strong>";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("The site is secure."));
        echo "</strong>
              <br>
              ";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("The <strong>https://</strong> ensures that you are connecting to the official website and that any information you provide is encrypted and transmitted securely."));
        echo "
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/uswds_base/templates/uswds/government-banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 35,  97 => 33,  91 => 30,  83 => 25,  78 => 23,  72 => 20,  62 => 13,  56 => 10,  52 => 9,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/uswds_base/templates/uswds/government-banner.html.twig", "/Users/irenerojas/Code/irene_drupal/themes/contrib/uswds_base/templates/uswds/government-banner.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 6, "t" => 9);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
