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

/* modules/slick/templates/slick-thumbnail.html.twig */
class __TwigTemplate_3e4eb15416584631fd3cc88e1a27cc99a5498eeec3ee118dd5ec2338f094c74b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'slick_thumbnail' => [$this, 'block_slick_thumbnail'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        $context["classes"] = [0 => "slick__slide", 1 => "slide", 2 => ("slide--" . $this->sandbox->ensureToStringAllowed(        // line 19
($context["delta"] ?? null), 19, $this->source))];
        // line 22
        $this->displayBlock('slick_thumbnail', $context, $blocks);
    }

    public function block_slick_thumbnail($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "  <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 23), 23, $this->source), "html", null, true);
        echo ">
    ";
        // line 24
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "slide", [], "any", false, false, true, 24))) {
            // line 25
            echo "      <div class=\"slide__thumbnail\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "slide", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "</div>
    ";
        }
        // line 27
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "caption", [], "any", false, false, true, 27))) {
            // line 28
            echo "      <div class=\"slide__caption\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "caption", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "</div>
    ";
        }
        // line 30
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "modules/slick/templates/slick-thumbnail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 30,  66 => 28,  63 => 27,  57 => 25,  55 => 24,  50 => 23,  43 => 22,  41 => 19,  40 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/slick/templates/slick-thumbnail.html.twig", "C:\\laragon\\www\\drupal\\modules\\slick\\templates\\slick-thumbnail.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "block" => 22, "if" => 24);
        static $filters = array("escape" => 23);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
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
}
