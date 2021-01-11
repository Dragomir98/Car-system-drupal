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

/* modules/contrib/webform/templates/webform-codemirror.html.twig */
class __TwigTemplate_3e53bc8a703ecafbfd83a8f356afb35f174218077251b9f925af869763a21484 extends \Twig\Template
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
        $tags = array("if" => 18);
        $filters = array("escape" => 19);
        $functions = array("attach_library" => 19);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['attach_library']
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
        // line 18
        if ((($context["type"] ?? null) == "html")) {
            // line 19
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("webform/webform.element.codemirror.html"), "html", null, true);
            echo "
";
        } elseif ((        // line 20
($context["type"] ?? null) == "yaml")) {
            // line 21
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("webform/webform.element.codemirror.yaml"), "html", null, true);
            echo "
";
        } else {
            // line 23
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("webform/webform.element.codemirror.text"), "html", null, true);
            echo "
";
        }
        // line 25
        echo "<pre class=\"js-webform-codemirror-runmode webform-codemirror-runmode\" data-webform-codemirror-mode=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mode"] ?? null), 25, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["code"] ?? null), 25, $this->source), "html", null, true);
        echo "</pre>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/webform/templates/webform-codemirror.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 25,  77 => 23,  71 => 21,  69 => 20,  64 => 19,  62 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/webform/templates/webform-codemirror.html.twig", "C:\\wamp64\\www\\drupal-project\\web\\modules\\contrib\\webform\\templates\\webform-codemirror.html.twig");
    }
}
