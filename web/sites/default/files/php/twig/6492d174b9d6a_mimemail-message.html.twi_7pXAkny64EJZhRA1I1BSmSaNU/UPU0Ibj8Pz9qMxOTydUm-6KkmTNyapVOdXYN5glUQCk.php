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

/* modules/contrib/mimemail/templates/mimemail-message.html.twig */
class __TwigTemplate_6d3440384ceb9aa1fab7700f342a8c60 extends Template
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
        // line 32
        $context["classes"] = ((($context["module"] ?? null)) ? (((($context["key"] ?? null)) ? ((($this->sandbox->ensureToStringAllowed(($context["module"] ?? null), 32, $this->source) . "-") . $this->sandbox->ensureToStringAllowed(($context["key"] ?? null), 32, $this->source))) : (""))) : (""));
        // line 33
        echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <title>Mime Mail message template</title>
";
        // line 38
        if (($context["css"] ?? null)) {
            // line 39
            echo "    <style type=\"text/css\">
      <!-- ";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["css"] ?? null), 40, $this->source), "html", null, true);
            echo " -->
    </style>
";
        }
        // line 43
        echo "  </head>
  <body id=\"mimemail-body\"";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 44), 44, $this->source), "html", null, true);
        echo ">
    <div id=\"center\">
      <div id=\"main\">
        ";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["body"] ?? null), 47, $this->source));
        echo "
      </div>
    </div>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/mimemail/templates/mimemail-message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 47,  62 => 44,  59 => 43,  53 => 40,  50 => 39,  48 => 38,  41 => 33,  39 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/mimemail/templates/mimemail-message.html.twig", "/var/www/html/web/modules/contrib/mimemail/templates/mimemail-message.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 32, "if" => 38);
        static $filters = array("escape" => 40, "raw" => 47);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'raw'],
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
