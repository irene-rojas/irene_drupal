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
            'government_banner' => [$this, 'block_government_banner'],
            'header' => [$this, 'block_header'],
            'hero' => [$this, 'block_hero'],
            'main' => [$this, 'block_main'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'highlighted' => [$this, 'block_highlighted'],
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
        // line 102
        echo "
          ";
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
        return "themes/custom/uswds_irene/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  737 => 370,  732 => 367,  724 => 362,  719 => 359,  717 => 358,  714 => 357,  709 => 354,  703 => 350,  695 => 347,  692 => 346,  690 => 345,  687 => 344,  679 => 341,  676 => 340,  674 => 339,  670 => 337,  665 => 335,  662 => 334,  659 => 333,  655 => 331,  647 => 326,  644 => 325,  642 => 324,  639 => 323,  631 => 318,  628 => 317,  626 => 316,  623 => 315,  615 => 310,  612 => 309,  610 => 308,  607 => 307,  599 => 302,  596 => 301,  594 => 300,  591 => 299,  583 => 294,  580 => 293,  578 => 292,  575 => 291,  573 => 290,  570 => 289,  568 => 288,  563 => 285,  559 => 283,  557 => 282,  554 => 281,  548 => 278,  544 => 276,  542 => 275,  539 => 274,  533 => 271,  529 => 270,  525 => 268,  523 => 267,  520 => 266,  514 => 264,  512 => 263,  507 => 260,  505 => 259,  500 => 256,  498 => 255,  495 => 254,  489 => 250,  481 => 245,  476 => 242,  474 => 241,  471 => 240,  466 => 237,  464 => 236,  461 => 235,  455 => 231,  446 => 227,  440 => 223,  438 => 222,  435 => 221,  426 => 217,  420 => 213,  418 => 212,  412 => 208,  410 => 207,  407 => 206,  401 => 204,  399 => 203,  396 => 202,  391 => 199,  389 => 198,  384 => 195,  382 => 194,  376 => 191,  370 => 189,  366 => 188,  359 => 179,  355 => 177,  351 => 176,  347 => 173,  343 => 171,  334 => 170,  330 => 169,  323 => 164,  319 => 162,  315 => 161,  308 => 145,  305 => 144,  301 => 143,  294 => 139,  291 => 138,  287 => 137,  280 => 183,  277 => 182,  274 => 176,  272 => 175,  269 => 174,  267 => 169,  264 => 168,  261 => 167,  258 => 161,  256 => 160,  252 => 158,  249 => 157,  247 => 150,  244 => 148,  242 => 143,  239 => 142,  236 => 137,  234 => 136,  229 => 133,  223 => 130,  219 => 129,  211 => 123,  207 => 121,  203 => 120,  197 => 115,  193 => 113,  191 => 112,  187 => 110,  183 => 108,  181 => 107,  178 => 106,  175 => 102,  172 => 98,  166 => 96,  164 => 95,  161 => 94,  157 => 92,  155 => 91,  152 => 90,  146 => 82,  142 => 80,  138 => 78,  136 => 77,  130 => 74,  127 => 73,  123 => 71,  121 => 70,  118 => 69,  112 => 66,  109 => 65,  107 => 64,  101 => 62,  97 => 61,  90 => 54,  87 => 53,  83 => 52,  79 => 188,  76 => 187,  74 => 129,  71 => 128,  67 => 120,  65 => 119,  62 => 118,  60 => 61,  55 => 58,  51 => 52,  49 => 51,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/uswds_irene/templates/page--front.html.twig", "/Users/irenerojas/Code/irene_drupal/themes/custom/uswds_irene/templates/page--front.html.twig");
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
