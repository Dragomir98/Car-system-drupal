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

/* themes/contrib/material_base/material_base_mdc/templates/navigation/menu--navbar.html.twig */
class __TwigTemplate_0ef0e59927ba09bee4c7e5ccfd05dae4d5958b04369f27920fb60a4bdbd96b99 extends \Twig\Template
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
        $tags = array("import" => 21, "macro" => 31, "if" => 33, "for" => 41, "set" => 42, "include" => 56);
        $filters = array("escape" => 35);
        $functions = array("link" => 72);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set', 'include'],
                ['escape'],
                ['link']
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
        // line 21
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 22
        echo "
";
        // line 27
        echo "<div class=\"navbar-menu navbar-menu--dropdown\">
  ";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 28, $context, $this->getSourceContext()));
        echo "
</div>

";
    }

    // line 31
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 32
            echo "  ";
            $macros["menus"] = $this;
            // line 33
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 34
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 35
                    echo "      <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "menu", 1 => ("menu--level-" . $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null), 35, $this->source)), 2 => "mdc-menu-dropdown__group"], "method", false, false, true, 35), 35, $this->source), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 37
                    echo "      <div class=\"mdc-menu-surface--anchor\">
      <div class=\"mdc-menu mdc-menu-surface navbar-menu--level-";
                    // line 38
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null), 38, $this->source), "html", null, true);
                    echo "\" data-mdc-auto-init=\"MDCMenu\">
      <ul class=\"menu menu--level-";
                    // line 39
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null), 39, $this->source), "html", null, true);
                    echo " mdc-list\" role=\"menu\" aria-hidden=\"true\" aria-orientation=\"vertical\" tabindex=\"-1\" data-mdc-auto-init=\"MDCList\">
    ";
                }
                // line 41
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 42
                    echo "      ";
                    $context["classes"] = [0 => "menu-item", 1 => ((twig_get_attribute($this->env, $this->source,                     // line 44
$context["item"], "is_expanded", [], "any", false, false, true, 44)) ? ("menu-item--expanded") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,                     // line 45
$context["item"], "is_collapsed", [], "any", false, false, true, 45)) ? ("menu-item--collapsed") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 46
$context["item"], "in_active_trail", [], "any", false, false, true, 46)) ? ("menu-item--active-trail") : ("")), 4 => (((twig_get_attribute($this->env, $this->source,                     // line 47
$context["item"], "is_expanded", [], "any", false, false, true, 47) && (($context["menu_level"] ?? null) == 0))) ? ("mdc-menu-dropdown") : (""))];
                    // line 49
                    echo "      <li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 49), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 49), 49, $this->source), "html", null, true);
                    echo ">
        ";
                    // line 50
                    ob_start(function () { return ''; });
                    // line 51
                    echo "          ";
                    if ((($context["menu_level"] ?? null) == 1)) {
                        // line 52
                        echo "            <span class=\"mdc-list-item__ripple\"></span>
          ";
                    }
                    // line 54
                    echo "          <span class=\"navbar-menu__item-text ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["menu_level"] ?? null) == 1)) ? (" mdc-list-item__text") : ("")));
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                    echo "</span>
          ";
                    // line 55
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 55) && (($context["menu_level"] ?? null) == 0))) {
                        // line 56
                        echo "            ";
                        $this->loadTemplate("@material_base/components/01_atoms/icon.twig", "themes/contrib/material_base/material_base_mdc/templates/navigation/menu--navbar.html.twig", 56)->display(twig_array_merge($context, ["data" => ["value" => "arrow_drop_down"], "settings" => ["type" => "svg-sprite", "classes" => [0 => "navbar-menu__item-icon"]]]));
                        // line 65
                        echo "          ";
                    }
                    // line 66
                    echo "        ";
                    $context["item_label"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 67
                    echo "        ";
                    $context["item_classes"] = [0 => "navbar-menu__item", 1 => (((twig_get_attribute($this->env, $this->source,                     // line 69
$context["item"], "is_expanded", [], "any", false, false, true, 69) && (($context["menu_level"] ?? null) == 0))) ? ("mdc-menu-dropdown__toggle") : ("")), 2 => (((                    // line 70
($context["menu_level"] ?? null) == 1)) ? ("mdc-list-item") : (""))];
                    // line 72
                    echo "        ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(($context["item_label"] ?? null), 72, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 72), 72, $this->source), ["class" => ($context["item_classes"] ?? null), "data-mdc-auto-init" => "MDCRipple"]), "html", null, true);
                    echo "
        ";
                    // line 73
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 73)) {
                        // line 74
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 74), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 74, $context, $this->getSourceContext()));
                        echo "
        ";
                    }
                    // line 76
                    echo "      </li>
    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                echo "    </ul>
    ";
                // line 79
                if ((($context["menu_level"] ?? null) != 0)) {
                    // line 80
                    echo "      </div>
      </div>
    ";
                }
                // line 83
                echo "  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/material_base/material_base_mdc/templates/navigation/menu--navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 83,  215 => 80,  213 => 79,  210 => 78,  195 => 76,  189 => 74,  187 => 73,  182 => 72,  180 => 70,  179 => 69,  177 => 67,  174 => 66,  171 => 65,  168 => 56,  166 => 55,  159 => 54,  155 => 52,  152 => 51,  150 => 50,  145 => 49,  143 => 47,  142 => 46,  141 => 45,  140 => 44,  138 => 42,  120 => 41,  115 => 39,  111 => 38,  108 => 37,  102 => 35,  99 => 34,  96 => 33,  93 => 32,  78 => 31,  70 => 28,  67 => 27,  64 => 22,  62 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/material_base/material_base_mdc/templates/navigation/menu--navbar.html.twig", "C:\\wamp64\\www\\drupal-project\\web\\themes\\contrib\\material_base\\material_base_mdc\\templates\\navigation\\menu--navbar.html.twig");
    }
}
