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

/* themes/contrib/uswds_base/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_dcbedea9a4ed1b93b400f1b1104e39524c5dba7e5791495f1782e141ba38bfe2 extends \Twig\Template
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
        // line 17
        echo "<div class=\"usa-logo site-logo\" id=\"logo\">

  <em class=\"usa-logo__text\">
  ";
        // line 20
        if (($context["site_logo"] ?? null)) {
            // line 21
            echo "    <a class=\"logo-img\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            echo "\" accesskey=\"1\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" aria-label=\"Home\">
      <img src=\"";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 22, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" />
    </a>
  ";
        }
        // line 25
        echo "
  ";
        // line 26
        if (($context["site_name"] ?? null)) {
            // line 27
            echo "      <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            echo "\" accesskey=\"1\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" aria-label=\"Home\">
        ";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 28, $this->source), "html", null, true);
            echo "
      </a>
  ";
        }
        // line 31
        echo "
  ";
        // line 32
        if (($context["site_slogan"] ?? null)) {
            // line 33
            echo "    <h2 class=\"usa-font-lead\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 33, $this->source), "html", null, true);
            echo "</h2>
  ";
        }
        // line 35
        echo "  </em>

</div>
<button class=\"usa-menu-btn\">";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Menu"));
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/uswds_base/templates/block/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 38,  90 => 35,  84 => 33,  82 => 32,  79 => 31,  73 => 28,  66 => 27,  64 => 26,  61 => 25,  53 => 22,  46 => 21,  44 => 20,  39 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for a branding block.
 *
 * Each branding element variable (logo, name, slogan) is only available if
 * enabled in the block configuration.
 *
 * Available variables:
 * - site_logo: Logo for site as defined in Appearance or theme settings.
 * - site_name: Name for site as defined in Site information settings.
 * - site_slogan: Slogan for site as defined in Site information settings.
 *
 * @ingroup themeable
 */
#}
<div class=\"usa-logo site-logo\" id=\"logo\">

  <em class=\"usa-logo__text\">
  {% if site_logo %}
    <a class=\"logo-img\" href=\"{{ path('<front>') }}\" accesskey=\"1\" title=\"{{ 'Home'|t }}\" aria-label=\"Home\">
      <img src=\"{{ site_logo }}\" alt=\"{{ 'Home'|t }}\" />
    </a>
  {% endif %}

  {% if site_name %}
      <a href=\"{{ path('<front>') }}\" accesskey=\"1\" title=\"{{ 'Home'|t }}\" aria-label=\"Home\">
        {{ site_name }}
      </a>
  {% endif %}

  {% if site_slogan %}
    <h2 class=\"usa-font-lead\">{{ site_slogan }}</h2>
  {% endif %}
  </em>

</div>
<button class=\"usa-menu-btn\">{{ 'Menu'|t }}</button>
", "themes/contrib/uswds_base/templates/block/block--system-branding-block.html.twig", "/Users/irenerojas/Code/irene_drupal/themes/contrib/uswds_base/templates/block/block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20);
        static $filters = array("t" => 21, "escape" => 22);
        static $functions = array("path" => 21);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
                ['path']
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
