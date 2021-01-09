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

/* themes/contrib/material_base/material_base_mdc/templates/layout/page.html.twig */
class __TwigTemplate_275e9a0d68b1e1afe26e6bfe765583a7e2fac6ff029faac804eccd0cf66978d1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navbar_adjust' => [$this, 'block_navbar_adjust'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("if" => 3, "set" => 4);
        $filters = array("escape" => 12);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
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

    protected function doGetParent(array $context)
    {
        // line 1
        return "@material_base/layout/page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        if ((($context["navbar_style"] ?? null) == "dense")) {
            // line 4
            $context["navbar_style_adjust"] = "mdc-top-app-bar--dense-fixed-adjust";
        } elseif ((        // line 5
($context["navbar_style"] ?? null) == "prominent")) {
            // line 6
            $context["navbar_style_adjust"] = "mdc-top-app-bar--prominent-fixed-adjust";
        } else {
            // line 8
            $context["navbar_style_adjust"] = "mdc-top-app-bar--fixed-adjust";
        }
        // line 1
        $this->parent = $this->loadTemplate("@material_base/layout/page.html.twig", "themes/contrib/material_base/material_base_mdc/templates/layout/page.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_navbar_adjust($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "  <div class=\"page-navbar-adjust";
        ((($context["navbar_style_adjust"] ?? null)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (" " . ($context["navbar_style_adjust"] ?? null)), "html", null, true))) : (print ("")));
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/material_base/material_base_mdc/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 12,  84 => 11,  79 => 1,  76 => 8,  73 => 6,  71 => 5,  69 => 4,  67 => 3,  60 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/material_base/material_base_mdc/templates/layout/page.html.twig", "C:\\wamp64\\www\\drupal-project\\web\\themes\\contrib\\material_base\\material_base_mdc\\templates\\layout\\page.html.twig");
    }
}
