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

/* modules/eva/templates/eva-display-entity-view.html.twig */
class __TwigTemplate_a002012de6a71a720418845be5e330c90d58eb7c2bab829d000d1c9ed1089229 extends \Twig\Template
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
        // line 40
        $context["classes"] = [0 => "view", 1 => "view-eva", 2 => ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 43
($context["id"] ?? null), 43, $this->source))), 3 => ("view-id-" . $this->sandbox->ensureToStringAllowed(        // line 44
($context["id"] ?? null), 44, $this->source)), 4 => ("view-display-id-" . $this->sandbox->ensureToStringAllowed(        // line 45
($context["display_id"] ?? null), 45, $this->source)), 5 => ((        // line 46
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 46, $this->source))) : (""))];
        // line 49
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 49), 49, $this->source), "html", null, true);
        echo ">
  ";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 50, $this->source), "html", null, true);
        echo "
  ";
        // line 51
        if (($context["title"] ?? null)) {
            // line 52
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 52, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 54
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 54, $this->source), "html", null, true);
        echo "

  ";
        // line 56
        if (($context["header"] ?? null)) {
            // line 57
            echo "    <header>
      ";
            // line 58
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 58, $this->source), "html", null, true);
            echo "
    </header>
  ";
        }
        // line 61
        echo "
  ";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 62, $this->source), "html", null, true);
        echo "

  ";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 64, $this->source), "html", null, true);
        echo "
  ";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 65, $this->source), "html", null, true);
        echo "
  ";
        // line 66
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 66, $this->source), "html", null, true);
        echo "

  ";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 68, $this->source), "html", null, true);
        echo "
  ";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 69, $this->source), "html", null, true);
        echo "

  ";
        // line 71
        if (($context["footer"] ?? null)) {
            // line 72
            echo "    <footer>
      ";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 73, $this->source), "html", null, true);
            echo "
    </footer>
  ";
        }
        // line 76
        echo "
  ";
        // line 77
        if (($context["feed_icons"] ?? null)) {
            // line 78
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 78, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 80
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/eva/templates/eva-display-entity-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 80,  125 => 78,  123 => 77,  120 => 76,  114 => 73,  111 => 72,  109 => 71,  104 => 69,  100 => 68,  95 => 66,  91 => 65,  87 => 64,  82 => 62,  79 => 61,  73 => 58,  70 => 57,  68 => 56,  62 => 54,  56 => 52,  54 => 51,  50 => 50,  45 => 49,  43 => 46,  42 => 45,  41 => 44,  40 => 43,  39 => 40,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/eva/templates/eva-display-entity-view.html.twig", "C:\\laragon\\www\\drupal\\modules\\eva\\templates\\eva-display-entity-view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 40, "if" => 51);
        static $filters = array("clean_class" => 43, "escape" => 49);
        static $functions = array();

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
}
