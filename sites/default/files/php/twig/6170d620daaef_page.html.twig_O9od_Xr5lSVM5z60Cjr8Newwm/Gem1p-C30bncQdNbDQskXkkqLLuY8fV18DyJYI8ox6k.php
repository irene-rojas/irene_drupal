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

/* themes/contrib/uswds_base/templates/layout/page.html.twig */
class __TwigTemplate_7ac63bdaa5208282eddfa670448c691950b79a549c62ade62d9a697c80b776cb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'government_banner' => [$this, 'block_government_banner'],
            'header' => [$this, 'block_header'],
            'hero' => [$this, 'block_hero'],
            'main' => [$this, 'block_main'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        if (($context["government_banner"] ?? null)) {
            // line 52
            echo "  ";
            $this->displayBlock('government_banner', $context, $blocks);
        }
        // line 58
        echo "
<div class=\"usa-overlay\"></div>

";
        // line 61
        $this->displayBlock('header', $context, $blocks);
        // line 118
        echo "
";
        // line 119
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 119)) {
            // line 120
            echo "  ";
            $this->displayBlock('hero', $context, $blocks);
        }
        // line 128
        echo "
";
        // line 129
        $this->displayBlock('main', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 52
    public function block_government_banner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "    <section class=\"usa-banner\">
      ";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["government_banner"] ?? null), 54, $this->source), "html", null, true);
        echo "
    </section>
  ";
    }

    // line 61
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "  <header class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_classes"] ?? null), 62, $this->source), "html", null, true);
        echo "\" id=\"header\" role=\"banner\">

  ";
        // line 64
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top", [], "any", false, false, true, 64)) {
            // line 65
            echo "    <div class=\"usa-banner-inner\">
      ";
            // line 66
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 69
        echo "
  ";
        // line 70
        if (($context["header_basic"] ?? null)) {
            // line 71
            echo "  <div class=\"usa-nav-container\">
    ";
        }
        // line 73
        echo "
    ";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
        echo "

    <nav class=\"usa-nav\" role=\"navigation\">
      ";
        // line 77
        if (($context["header_extended"] ?? null)) {
            // line 78
            echo "      <div class=\"usa-nav__inner\">
        ";
        }
        // line 80
        echo "
        <button class=\"usa-nav__close\">
          <img src=\"";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uswds_images"] ?? null), 82, $this->source), "html", null, true);
        echo "close.svg\" alt=\"close\"/>
        </button>

        ";
        // line 85
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "mobile_menu", [], "any", false, false, true, 85)) {
            // line 86
            echo "          <div class=\"usa-nav-mobile\">
            ";
            // line 87
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "mobile_menu", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 90
        echo "
        ";
        // line 91
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "mobile_menu", [], "any", false, false, true, 91)) {
            // line 92
            echo "        <div class=\"usa-nav-desktop\">
          ";
        }
        // line 94
        echo "
          ";
        // line 95
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 95)) {
            // line 96
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 98
        echo "
          ";
        // line 99
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 99)) {
            // line 100
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 102
        echo "
          ";
        // line 103
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "mobile_menu", [], "any", false, false, true, 103)) {
            // line 104
            echo "        </div>
        ";
        }
        // line 106
        echo "
        ";
        // line 107
        if (($context["header_extended"] ?? null)) {
            // line 108
            echo "      </div>
      ";
        }
        // line 110
        echo "    </nav>

    ";
        // line 112
        if (($context["header_basic"] ?? null)) {
            // line 113
            echo "  </div>
  ";
        }
        // line 115
        echo "
</header>
";
    }

    // line 120
    public function block_hero($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 121
        echo "    <section class=\"usa-hero\">
      <div class=\"grid-container\">
        ";
        // line 123
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
        echo "
      </div>
    </section>
  ";
    }

    // line 129
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 130
        echo "  <main class=\"main-content usa-layout-docs usa-section ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_classes"] ?? null), 130, $this->source), "html", null, true);
        echo "\" role=\"main\"
        id=\"main-content\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 133
        echo "
    <div class=\"grid-container\">

      ";
        // line 136
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 136) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 136)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 136))) {
            // line 137
            echo "        ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 142
            echo "
        ";
            // line 143
            $this->displayBlock('highlighted', $context, $blocks);
            // line 148
            echo "
        ";
            // line 150
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 150)) {
                // line 151
                echo "          ";
                $this->displayBlock('help', $context, $blocks);
                // line 156
                echo "        ";
            }
            // line 157
            echo "      ";
        }
        // line 158
        echo "
      <div class=\"grid-row grid-gap\">
        ";
        // line 160
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 160)) {
            // line 161
            echo "          ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 167
            echo "        ";
        }
        // line 168
        echo "
        ";
        // line 169
        $this->displayBlock('content', $context, $blocks);
        // line 174
        echo "
        ";
        // line 175
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 175)) {
            // line 176
            echo "          ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 182
            echo "        ";
        }
        // line 183
        echo "      </div>
    </div>
  </main>
";
    }

    // line 137
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        echo "          <div class=\"grid-row\">
            ";
        // line 139
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 139), 139, $this->source), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 143
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 144
        echo "          <div class=\"\">
            ";
        // line 145
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 145), 145, $this->source), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 151
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 152
        echo "            <div class=\"grid-row \">
              ";
        // line 153
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
        echo "
            </div>
          ";
    }

    // line 161
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 162
        echo "            <div
              class=\"usa-layout-docs__sidenav desktop:grid-col-3 layout-sidebar-first\">
              ";
        // line 164
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 164), 164, $this->source), "html", null, true);
        echo "
            </div>
          ";
    }

    // line 169
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 170
        echo "          <div class=\"usa-layout-docs__main desktop:grid-col-";
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 170) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 170))) {
            echo "9";
        } else {
            echo "fill";
        }
        echo "\">
            ";
        // line 171
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 171), 171, $this->source), "html", null, true);
        echo "
          </div>";
        // line 173
        echo "        ";
    }

    // line 176
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 177
        echo "            <div
              class=\"usa-layout-docs__sidenav desktop:grid-col-3 layout-sidebar-second\">
              ";
        // line 179
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 179), 179, $this->source), "html", null, true);
        echo "
            </div>
            ";
    }

    // line 188
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 189
        echo "  <footer class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_classes"] ?? null), 189, $this->source), "html", null, true);
        echo "\" role=\"contentinfo\">
    <div class=\"grid-container usa-footer__return-to-top\">
      <a href=\"#\">";
        // line 191
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Return to top"));
        echo "</a>
    </div>

    ";
        // line 194
        if (($context["display_footer_primary"] ?? null)) {
            // line 195
            echo "      <div class=\"usa-footer__primary-section\">

        <div class=\"usa-footer__primary-content\">
          ";
            // line 198
            if ((($context["footer_style"] ?? null) != "medium")) {
                // line 199
                echo "          <div class=\"grid-container\">
            <div class=\"grid-row grid-gap\">
              ";
            }
            // line 202
            echo "
              ";
            // line 203
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 203)) {
                // line 204
                echo "                ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 204), 204, $this->source), "html", null, true);
                echo "
              ";
            }
            // line 206
            echo "
              ";
            // line 207
            if ((($context["footer_slim"] ?? null) && (($context["footer_phone"] ?? null) || ($context["footer_email"] ?? null)))) {
                // line 208
                echo "                <div class=\"mobile-lg:grid-col-4\">
                  <address class=\"usa-footer__address\">
                    <div class=\"grid-row grid-gap mobile-lg:grid-gap-0\">

                      ";
                // line 212
                if (($context["footer_phone"] ?? null)) {
                    // line 213
                    echo "                        <div
                          class=\"grid-col-auto mobile-lg:grid-col-12 desktop:grid-col-auto\">
                          <div class=\"usa-footer-contact_info\">
                            <a
                              href=\"tel:";
                    // line 217
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_phone"] ?? null), 217, $this->source), "html", null, true);
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_phone"] ?? null), 217, $this->source), "html", null, true);
                    echo "</a>
                          </div>
                        </div>
                      ";
                }
                // line 221
                echo "
                      ";
                // line 222
                if (($context["footer_email"] ?? null)) {
                    // line 223
                    echo "                        <div
                          class=\"grid-col-auto mobile-lg:grid-col-12 desktop:grid-col-auto\">
                          <div class=\"usa-footer-contact_info\">
                            <a
                              href=\"mailto:";
                    // line 227
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_email"] ?? null), 227, $this->source), "html", null, true);
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_email"] ?? null), 227, $this->source), "html", null, true);
                    echo "</a>
                          </div>
                        </div>
                      ";
                }
                // line 231
                echo "                    </div>
                  </address>
                </div>
              ";
            }
            // line 235
            echo "
              ";
            // line 236
            if ((($context["footer_style"] ?? null) != "medium")) {
                // line 237
                echo "            </div>
          </div>
          ";
            }
            // line 240
            echo "
          ";
            // line 241
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 241)) {
                // line 242
                echo "            <div class=\"grid-container\">
              <div class=\"grid-row grid-gap\">
                <div class=\"grid-col-fill\">
                  ";
                // line 245
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 245), 245, $this->source), "html", null, true);
                echo "
                </div>
              </div>
            </div>
          ";
            }
            // line 250
            echo "        </div>

      </div>
    ";
        }
        // line 254
        echo "
    ";
        // line 255
        if (($context["display_footer_secondary"] ?? null)) {
            // line 256
            echo "      <div class=\"usa-footer__secondary-section\">
        <div class=\"grid-container\">
          <div class=\"grid-row grid-gap\">
            ";
            // line 259
            if (($context["display_footer_agency"] ?? null)) {
                // line 260
                echo "            <div
              class=\"usa-footer__logo grid-row mobile-lg:grid-col-6 mobile-lg:grid-gap-2\">

              ";
                // line 263
                if (($context["footer_agency_url"] ?? null)) {
                    // line 264
                    echo "              <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_agency_url"] ?? null), 264, $this->source), "html", null, true);
                    echo "\">
              ";
                }
                // line 266
                echo "
                ";
                // line 267
                if (($context["footer_agency_logo"] ?? null)) {
                    // line 268
                    echo "                  <div class=\"mobile-lg:grid-col-auto\">
                    <img class=\"usa-footer__logo-img\"
                         src=\"";
                    // line 270
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_agency_logo"] ?? null), 270, $this->source), "html", null, true);
                    echo "\"
                         alt=\"";
                    // line 271
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Agency logo"));
                    echo "\">
                  </div>
                ";
                }
                // line 274
                echo "
                ";
                // line 275
                if (($context["footer_agency_name"] ?? null)) {
                    // line 276
                    echo "                  <div class=\"mobile-lg:grid-col-auto\">
                    <h3
                      class=\"usa-footer__logo-heading\">";
                    // line 278
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_agency_name"] ?? null), 278, $this->source), "html", null, true);
                    echo "</h3>
                  </div>
                ";
                }
                // line 281
                echo "
              ";
                // line 282
                if (($context["footer_agency_url"] ?? null)) {
                    // line 283
                    echo "              </a>
              ";
                }
                // line 285
                echo "
            </div>

            ";
                // line 288
                if ( !($context["footer_slim"] ?? null)) {
                    // line 289
                    echo "              <div class=\"usa-footer__contact-links desktop:grid-col-6\">
                ";
                    // line 290
                    if ((((($context["facebook"] ?? null) || ($context["twitter"] ?? null)) || ($context["youtube"] ?? null)) || ($context["rss"] ?? null))) {
                        // line 291
                        echo "                <div class=\"usa-footer__social-links grid-row grid-gap-1\">
                ";
                        // line 292
                        if (($context["facebook"] ?? null)) {
                            // line 293
                            echo "                  <div class=\"grid-col-auto\">
                  <a class=\"usa-social-link usa-social-link--facebook\" href=\"";
                            // line 294
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 294, $this->source), "html", null, true);
                            echo "\">
                    <span>Facebook</span>
                  </a>
                  </div>
                ";
                        }
                        // line 299
                        echo "
                ";
                        // line 300
                        if (($context["twitter"] ?? null)) {
                            // line 301
                            echo "                  <div class=\"grid-col-auto\">
                  <a class=\"usa-social-link usa-social-link--twitter\" href=\"";
                            // line 302
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 302, $this->source), "html", null, true);
                            echo "\">
                    <span>Twitter</span>
                  </a>
                  </div>
                ";
                        }
                        // line 307
                        echo "
                ";
                        // line 308
                        if (($context["youtube"] ?? null)) {
                            // line 309
                            echo "                    <div class=\"grid-col-auto\">
                  <a class=\"usa-social-link usa-social-link--youtube\" href=\"";
                            // line 310
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube"] ?? null), 310, $this->source), "html", null, true);
                            echo "\">
                    <span>YouTube</span>
                  </a>
                    </div>
                ";
                        }
                        // line 315
                        echo "
                ";
                        // line 316
                        if (($context["instagram"] ?? null)) {
                            // line 317
                            echo "                    <div class=\"grid-col-auto\">
                  <a class=\"usa-social-link usa-social-link--instagram\" href=\"";
                            // line 318
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram"] ?? null), 318, $this->source), "html", null, true);
                            echo "\">
                    <span>Instagram</span>
                  </a>
                    </div>
                ";
                        }
                        // line 323
                        echo "
                ";
                        // line 324
                        if (($context["rss"] ?? null)) {
                            // line 325
                            echo "                  <div class=\"grid-col-auto\">
                  <a class=\"usa-social-link usa-social-link--rss\" href=\"";
                            // line 326
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss"] ?? null), 326, $this->source), "html", null, true);
                            echo "\">
                    <span>RSS</span>
                  </a>
                  </div>
                ";
                        }
                        // line 331
                        echo "                </div>
                ";
                    }
                    // line 333
                    echo "                ";
                    if (($context["contact_center"] ?? null)) {
                        // line 334
                        echo "                  <h3
                    class=\"usa-footer__contact-heading\">";
                        // line 335
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contact_center"] ?? null), 335, $this->source), "html", null, true);
                        echo "</h3>
                ";
                    }
                    // line 337
                    echo "                <address class=\"usa-footer__address\">
                  <div class=\"usa-footer__contact-info grid-row grid-gap\">
                    ";
                    // line 339
                    if (($context["phone"] ?? null)) {
                        // line 340
                        echo "                      <div class=\"grid-col-auto\">
                        <a href=\"tel:";
                        // line 341
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone"] ?? null), 341, $this->source), "html", null, true);
                        echo "\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone"] ?? null), 341, $this->source), "html", null, true);
                        echo "</a>
                      </div>
                    ";
                    }
                    // line 344
                    echo "
                    ";
                    // line 345
                    if (($context["email"] ?? null)) {
                        // line 346
                        echo "                      <div class=\"grid-col-auto\">
                        <a href=\"mailto:";
                        // line 347
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 347, $this->source), "html", null, true);
                        echo "\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 347, $this->source), "html", null, true);
                        echo "</a>
                      </div>
                    ";
                    }
                    // line 350
                    echo "                  </div>
                </address>
              </div>
            ";
                }
                // line 354
                echo "
          </div>
          ";
            }
            // line 357
            echo "
          ";
            // line 358
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_secondary", [], "any", false, false, true, 358)) {
                // line 359
                echo "            <div class=\"grid-container\">
              <div class=\"grid-row grid-gap\">
                <div class=\"grid-col-fill\">
                  ";
                // line 362
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_secondary", [], "any", false, false, true, 362), 362, $this->source), "html", null, true);
                echo "
                </div>
              </div>
            </div>
          ";
            }
            // line 367
            echo "        </div>
      </div>
    ";
        }
        // line 370
        echo "
  </footer>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/uswds_base/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  784 => 370,  779 => 367,  771 => 362,  766 => 359,  764 => 358,  761 => 357,  756 => 354,  750 => 350,  742 => 347,  739 => 346,  737 => 345,  734 => 344,  726 => 341,  723 => 340,  721 => 339,  717 => 337,  712 => 335,  709 => 334,  706 => 333,  702 => 331,  694 => 326,  691 => 325,  689 => 324,  686 => 323,  678 => 318,  675 => 317,  673 => 316,  670 => 315,  662 => 310,  659 => 309,  657 => 308,  654 => 307,  646 => 302,  643 => 301,  641 => 300,  638 => 299,  630 => 294,  627 => 293,  625 => 292,  622 => 291,  620 => 290,  617 => 289,  615 => 288,  610 => 285,  606 => 283,  604 => 282,  601 => 281,  595 => 278,  591 => 276,  589 => 275,  586 => 274,  580 => 271,  576 => 270,  572 => 268,  570 => 267,  567 => 266,  561 => 264,  559 => 263,  554 => 260,  552 => 259,  547 => 256,  545 => 255,  542 => 254,  536 => 250,  528 => 245,  523 => 242,  521 => 241,  518 => 240,  513 => 237,  511 => 236,  508 => 235,  502 => 231,  493 => 227,  487 => 223,  485 => 222,  482 => 221,  473 => 217,  467 => 213,  465 => 212,  459 => 208,  457 => 207,  454 => 206,  448 => 204,  446 => 203,  443 => 202,  438 => 199,  436 => 198,  431 => 195,  429 => 194,  423 => 191,  417 => 189,  413 => 188,  406 => 179,  402 => 177,  398 => 176,  394 => 173,  390 => 171,  381 => 170,  377 => 169,  370 => 164,  366 => 162,  362 => 161,  355 => 153,  352 => 152,  348 => 151,  341 => 145,  338 => 144,  334 => 143,  327 => 139,  324 => 138,  320 => 137,  313 => 183,  310 => 182,  307 => 176,  305 => 175,  302 => 174,  300 => 169,  297 => 168,  294 => 167,  291 => 161,  289 => 160,  285 => 158,  282 => 157,  279 => 156,  276 => 151,  273 => 150,  270 => 148,  268 => 143,  265 => 142,  262 => 137,  260 => 136,  255 => 133,  249 => 130,  245 => 129,  237 => 123,  233 => 121,  229 => 120,  223 => 115,  219 => 113,  217 => 112,  213 => 110,  209 => 108,  207 => 107,  204 => 106,  200 => 104,  198 => 103,  195 => 102,  189 => 100,  187 => 99,  184 => 98,  178 => 96,  176 => 95,  173 => 94,  169 => 92,  167 => 91,  164 => 90,  158 => 87,  155 => 86,  153 => 85,  147 => 82,  143 => 80,  139 => 78,  137 => 77,  131 => 74,  128 => 73,  124 => 71,  122 => 70,  119 => 69,  113 => 66,  110 => 65,  108 => 64,  102 => 62,  98 => 61,  91 => 54,  88 => 53,  84 => 52,  80 => 188,  77 => 187,  75 => 129,  72 => 128,  68 => 120,  66 => 119,  63 => 118,  61 => 61,  56 => 58,  52 => 52,  50 => 51,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/uswds_base/templates/layout/page.html.twig", "/Users/irenerojas/Code/irene_drupal/themes/contrib/uswds_base/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 51, "block" => 52);
        static $filters = array("escape" => 54, "t" => 191);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
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