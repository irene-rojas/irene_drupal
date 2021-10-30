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

/* themes/contrib/uswds_base/templates/input/input--checkbox.html.twig */
class __TwigTemplate_215dca930727a577d393913373caf316b9140e1c2a7a8158e9e8eda355fefe4f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'input' => [$this, 'block_input'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        ob_start(function () { return ''; });
        // line 14
        echo "    ";
        if (($context["input_group"] ?? null)) {
            // line 15
            echo "        <div class=\"input-group usa-form-group\">
    ";
        }
        // line 17
        echo "
    ";
        // line 18
        if (($context["prefix"] ?? null)) {
            // line 19
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 19, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 21
        echo "
    ";
        // line 22
        $this->displayBlock('input', $context, $blocks);
        // line 25
        echo "
    ";
        // line 26
        if (($context["suffix"] ?? null)) {
            // line 27
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 27, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 29
        echo "
    ";
        // line 30
        if (($context["input_group"] ?? null)) {
            // line 31
            echo "        </div>
    ";
        }
        // line 33
        echo "
    ";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 34, $this->source), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 22
    public function block_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "        <input";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "usa-checkbox__input"], "method", false, false, true, 23), 23, $this->source), "html", null, true);
        echo " />
    ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/uswds_base/templates/input/input--checkbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 23,  95 => 22,  88 => 34,  85 => 33,  81 => 31,  79 => 30,  76 => 29,  70 => 27,  68 => 26,  65 => 25,  63 => 22,  60 => 21,  54 => 19,  52 => 18,  49 => 17,  45 => 15,  42 => 14,  40 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/uswds_base/templates/input/input--checkbox.html.twig", "/Users/irenerojas/Code/irene_drupal/themes/contrib/uswds_base/templates/input/input--checkbox.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("spaceless" => 13, "if" => 14, "block" => 22);
        static $filters = array("escape" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['spaceless', 'if', 'block'],
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
