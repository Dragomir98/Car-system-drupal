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

/* themes/contrib/material_base/material_base_mdc/templates/layout/region--navbar.html.twig */
class __TwigTemplate_be6bb87bd7929f86cf2cfa7ac9d238f6f523435c27ba35ad416e20162fe98730 extends \Twig\Template
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
        $tags = array("set" => 15, "if" => 25);
        $filters = array("clean_class" => 17, "escape" => 26);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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
        // line 15
        $context["classes"] = [0 => "region", 1 => ("region-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 17
($context["region"] ?? null), 17, $this->source))), 2 => "page-navbar", 3 => "navbar", 4 => "mdc-top-app-bar", 5 => ((        // line 21
($context["navbar_fixed"] ?? null)) ? ("mdc-top-app-bar--fixed") : ("mdc-top-app-bar--not-fixed")), 6 => ((        // line 22
($context["navbar_style"] ?? null)) ? (("mdc-top-app-bar--" . $this->sandbox->ensureToStringAllowed(($context["navbar_style"] ?? null), 22, $this->source))) : (""))];
        // line 24
        echo "
";
        // line 25
        if (($context["content"] ?? null)) {
            // line 26
            echo "  <header";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 26), "setAttribute", [0 => "data-mdc-auto-init", 1 => "MDCTopAppBar"], "method", false, false, true, 26), 26, $this->source), "html", null, true);
            echo ">
    <div class=\"navbar__container mdc-top-app-bar__row\">
      <section class=\"navbar__section mdc-top-app-bar__section\">
        ";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 29, $this->source), "html", null, true);
            echo "
      </div>
    </section>
  </header>
";
        }
        // line 34
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/material_base/material_base_mdc/templates/layout/region--navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 34,  79 => 29,  72 => 26,  70 => 25,  67 => 24,  65 => 22,  64 => 21,  63 => 17,  62 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/material_base/material_base_mdc/templates/layout/region--navbar.html.twig", "C:\\wamp64\\www\\drupal-project\\web\\themes\\contrib\\material_base\\material_base_mdc\\templates\\layout\\region--navbar.html.twig");
    }
}
