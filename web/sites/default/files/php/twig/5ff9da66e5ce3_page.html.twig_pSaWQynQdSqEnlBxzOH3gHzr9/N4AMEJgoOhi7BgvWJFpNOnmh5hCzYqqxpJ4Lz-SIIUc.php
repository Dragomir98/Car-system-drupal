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

/* @material_base/layout/page.html.twig */
class __TwigTemplate_3ef79c51f911682e594cbc2a77c3914ae8790bc9ae49b05b2a277e6f452c46ed extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navbar_adjust' => [$this, 'block_navbar_adjust'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("if" => 57, "block" => 67);
        $filters = array("escape" => 58);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "
<div class=\"page\">
  <div class=\"page-container layout-container";
        // line 54
        echo ((($context["page_layout"] ?? null)) ? (" layout-container--node") : (" layout-container--page"));
        echo "\">
    <div class=\"page-container__overlay\"></div>

    ";
        // line 57
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar", [], "any", false, false, true, 57)) {
            // line 58
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 60
        echo "
    ";
        // line 61
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "drawer", [], "any", false, false, true, 61)) {
            // line 62
            echo "      <div class=\"page-drawer\">
        ";
            // line 63
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "drawer", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 66
        echo "
    ";
        // line 67
        $this->displayBlock('navbar_adjust', $context, $blocks);
        // line 69
        echo "  

      ";
        // line 71
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 71)) {
            // line 72
            echo "        <header class=\"page-header\" role=\"banner\">
          <div class=\"page-header__bg\">
            <div class=\"page-header__container\">
              <div class=\"page-header__content\">
                ";
            // line 76
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </header>
      ";
        }
        // line 82
        echo "
      ";
        // line 83
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "actions", [], "any", false, false, true, 83)) {
            // line 84
            echo "        <div class=\"page-actions\">
          <div class=\"page-actions__container\">
            ";
            // line 86
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "actions", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 90
        echo "
      <main class=\"page-main\" role=\"main\">

        ";
        // line 93
        if (($context["page_layout"] ?? null)) {
            // line 94
            echo "
          ";
            // line 96
            echo "          <a id=\"main-content\" tabindex=\"-1\"></a>";
            // line 97
            echo "          ";
            $this->displayBlock('content', $context, $blocks);
            // line 99
            echo "  

        ";
        } else {
            // line 102
            echo "
          ";
            // line 104
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_top", [], "any", false, false, true, 104)) {
                // line 105
                echo "            <div class=\"main-top\">
              ";
                // line 106
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_top", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 109
            echo "
          <div class=\"main-content\">
            <div class=\"main-content__container\">

              ";
            // line 113
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_above", [], "any", false, false, true, 113)) {
                // line 114
                echo "                <div class=\"page-content-above\">
                  ";
                // line 115
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_above", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
                echo "
                </div>
              ";
            }
            // line 118
            echo "
              <a id=\"main-content\" tabindex=\"-1\"></a>";
            // line 120
            echo "              <div class=\"main-content__content\">

                <div class=\"page-content__wrapper\">
                  <div class=\"page-content-primary\">
                    ";
            // line 124
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
            echo "
                    ";
            // line 125
            if ( !($context["messages_fixed"] ?? null)) {
                // line 126
                echo "                      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "messages", [], "any", false, false, true, 126), 126, $this->source), "html", null, true);
                echo "
                    ";
            }
            // line 128
            echo "                    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
            echo "
                    ";
            // line 129
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
            echo "

                    <div class=\"page-content layout-content\">
                      ";
            // line 132
            $this->displayBlock("content", $context, $blocks);
            echo "
                    </div>
                  </div>

                  ";
            // line 136
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_secondary", [], "any", false, false, true, 136)) {
                // line 137
                echo "                    <div class=\"page-content-secondary\">
                      ";
                // line 138
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_secondary", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
                echo "
                    </div>
                  ";
            }
            // line 141
            echo "                </div>

                ";
            // line 143
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 143)) {
                // line 144
                echo "                  <aside class=\"page-sidebar page-sidebar--first layout-sidebar-first\" role=\"complementary\">
                    ";
                // line 145
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 145), 145, $this->source), "html", null, true);
                echo "
                  </aside>
                ";
            }
            // line 148
            echo "
                ";
            // line 149
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 149)) {
                // line 150
                echo "                  <aside class=\"page-sidebar page-sidebar--second layout-sidebar-second\" role=\"complementary\">
                    ";
                // line 151
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
                echo "
                  </aside>
                ";
            }
            // line 154
            echo "              </div>

              ";
            // line 156
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_below", [], "any", false, false, true, 156)) {
                // line 157
                echo "                <div class=\"page-content-below\">
                  ";
                // line 158
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_below", [], "any", false, false, true, 158), 158, $this->source), "html", null, true);
                echo "
                </div>
              ";
            }
            // line 161
            echo "
            </div>
          </div>

          ";
            // line 165
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_bottom", [], "any", false, false, true, 165)) {
                // line 166
                echo "            <div class=\"main-bottom\">
              ";
                // line 167
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_bottom", [], "any", false, false, true, 167), 167, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 170
            echo "
        ";
        }
        // line 172
        echo "      </main>

      ";
        // line 174
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 174)) {
            // line 175
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 175), 175, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 177
        echo "
    </div>
  </div>

  ";
        // line 181
        if (($context["messages_fixed"] ?? null)) {
            // line 182
            echo "    <div class=\"messages__wrapper messages__wrapper--fixed\">
      <div class=\"messages__container\">
        ";
            // line 184
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "messages", [], "any", false, false, true, 184), 184, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 188
        echo "  
  ";
        // line 189
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "overlay", [], "any", false, false, true, 189)) {
            // line 190
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "overlay", [], "any", false, false, true, 190), 190, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 192
        echo "</div>
";
    }

    // line 67
    public function block_navbar_adjust($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "      <div class=\"page-navbar-adjust";
        ((($context["navbar_style"] ?? null)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (" page-navbar-adjust--" . ($context["navbar_style"] ?? null)), "html", null, true))) : (print ("")));
        echo ((($context["navbar_fixed"] ?? null)) ? (" page-navbar-adjust--fixed") : (""));
        echo "\">
    ";
    }

    // line 97
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
        echo "
          ";
    }

    public function getTemplateName()
    {
        return "@material_base/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 98,  364 => 97,  356 => 68,  352 => 67,  347 => 192,  341 => 190,  339 => 189,  336 => 188,  329 => 184,  325 => 182,  323 => 181,  317 => 177,  311 => 175,  309 => 174,  305 => 172,  301 => 170,  295 => 167,  292 => 166,  290 => 165,  284 => 161,  278 => 158,  275 => 157,  273 => 156,  269 => 154,  263 => 151,  260 => 150,  258 => 149,  255 => 148,  249 => 145,  246 => 144,  244 => 143,  240 => 141,  234 => 138,  231 => 137,  229 => 136,  222 => 132,  216 => 129,  211 => 128,  205 => 126,  203 => 125,  199 => 124,  193 => 120,  190 => 118,  184 => 115,  181 => 114,  179 => 113,  173 => 109,  167 => 106,  164 => 105,  161 => 104,  158 => 102,  153 => 99,  150 => 97,  148 => 96,  145 => 94,  143 => 93,  138 => 90,  131 => 86,  127 => 84,  125 => 83,  122 => 82,  113 => 76,  107 => 72,  105 => 71,  101 => 69,  99 => 67,  96 => 66,  90 => 63,  87 => 62,  85 => 61,  82 => 60,  76 => 58,  74 => 57,  68 => 54,  64 => 52,);
    }

    public function getSourceContext()
    {
        return new Source("", "@material_base/layout/page.html.twig", "C:\\wamp64\\www\\drupal-project\\web\\themes\\contrib\\material_base\\templates\\layout\\page.html.twig");
    }
}
