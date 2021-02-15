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

/* __string_template__4a178c8cae021ce354f13dd7deba63c82dc9a3f8c10474efebad4bfe68e812a8 */
class __TwigTemplate_27cd11814f4a4b91a503000a9efa99d73aff4eab9c72bf586d3b74f5ea80418c extends \Twig\Template
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
        // line 1
        echo "<div class=\"partido\">
  <div class=\"contenido\">

    <div class=\"equipo_a\">
      <div class=\"logo_equipo_a\">";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_logo"] ?? null), 5, $this->source), "html", null, true);
        echo "</div>
      <div class=\"nombre_a\">";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_equipo_local"] ?? null), 6, $this->source), "html", null, true);
        echo "</div>
    </div>

    <div class=\"resultados\">
      <div class=\"resultado_a\">";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_resultado_local"] ?? null), 10, $this->source), "html", null, true);
        echo " - </div>
      <div class=\"resultado_b\">";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_resultado_visitante"] ?? null), 11, $this->source), "html", null, true);
        echo "</div>
    </div>

    <div class=\"equipo_b\">
      <div class=\"logo_equipo_b\">";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_logo_1"] ?? null), 15, $this->source), "html", null, true);
        echo "</div>
      <div class=\"nombre_b\">";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_equipo_visitante"] ?? null), 16, $this->source), "html", null, true);
        echo "</div>
    </div>

  </div>

  <div class=\"fecha_estado\">
    <div class=\"fecha\">";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_fecha_partido"] ?? null), 22, $this->source), "html", null, true);
        echo "</div>
    <div class=\"estado\">";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_estado_partido"] ?? null), 23, $this->source), "html", null, true);
        echo "</div>
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__4a178c8cae021ce354f13dd7deba63c82dc9a3f8c10474efebad4bfe68e812a8";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 23,  80 => 22,  71 => 16,  67 => 15,  60 => 11,  56 => 10,  49 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__4a178c8cae021ce354f13dd7deba63c82dc9a3f8c10474efebad4bfe68e812a8", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
