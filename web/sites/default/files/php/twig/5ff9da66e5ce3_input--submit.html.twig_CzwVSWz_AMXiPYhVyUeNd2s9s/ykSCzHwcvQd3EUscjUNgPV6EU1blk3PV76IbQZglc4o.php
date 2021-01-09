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

/* themes/contrib/material_base/material_base_mdc/templates/form/input--submit.html.twig */
class __TwigTemplate_a2316dc14d23fc4898006298b47ee51e79c43a3e314ccb6a3328a562ee12e25c extends \Twig\Template
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
        $tags = array("set" => 14, "if" => 21);
        $filters = array("merge" => 22, "escape" => 31, "render" => 33, "without" => 34);
        $functions = array("create_attribute" => 14);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['merge', 'escape', 'render', 'without'],
                ['create_attribute']
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
        // line 13
        echo "
";
        // line 14
        $context["button_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
        // line 15
        echo "
";
        // line 16
        $context["button_classes"] = [0 => "mdc-button", 1 => "button-submit"];
        // line 20
        echo "
";
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", false, false, true, 21)) {
            // line 22
            echo "  ";
            $context["button_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["button_classes"] ?? null), 22, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", false, false, true, 22), 22, $this->source));
        }
        // line 24
        echo "
";
        // line 25
        $context["button_attributes"] = twig_get_attribute($this->env, $this->source, ($context["button_attributes"] ?? null), "setAttribute", [0 => "data-mdc-auto-init", 1 => "MDCRipple"], "method", false, false, true, 25);
        // line 26
        echo "
";
        // line 27
        if (($context["disabled"] ?? null)) {
            // line 28
            echo "  ";
            $context["button_attributes"] = twig_get_attribute($this->env, $this->source, ($context["button_attributes"] ?? null), "setAttribute", [0 => "disabled", 1 => 1], "method", false, false, true, 28);
        }
        // line 30
        echo "
<button";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["button_attributes"] ?? null), "addClass", [0 => ($context["button_classes"] ?? null)], "method", false, false, true, 31), 31, $this->source), "html", null, true);
        echo ">
  <div class=\"mdc-button__ripple\"></div>
  <span class=\"mdc-button__label\">";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "value", [], "any", false, false, true, 33), 33, $this->source)), "html", null, true);
        echo "</span>
  <input";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 34, $this->source), "class"), "addClass", [0 => "button-submit__input", 1 => "visually-hidden"], "method", false, false, true, 34), 34, $this->source), "html", null, true);
        echo " />
</button>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/material_base/material_base_mdc/templates/form/input--submit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 34,  103 => 33,  98 => 31,  95 => 30,  91 => 28,  89 => 27,  86 => 26,  84 => 25,  81 => 24,  77 => 22,  75 => 21,  72 => 20,  70 => 16,  67 => 15,  65 => 14,  62 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/material_base/material_base_mdc/templates/form/input--submit.html.twig", "C:\\wamp64\\www\\drupal-project\\web\\themes\\contrib\\material_base\\material_base_mdc\\templates\\form\\input--submit.html.twig");
    }
}
