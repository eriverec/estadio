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

/* modules/blazy/templates/blazy.html.twig */
class __TwigTemplate_a7165fcd11419074e96e9c96cc5d5bf4d828d33bb94934bd85e0801939ab1646 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'blazy_player' => [$this, 'block_blazy_player'],
            'blazy_media' => [$this, 'block_blazy_media'],
            'blazy_content' => [$this, 'block_blazy_content'],
            'blazy_caption' => [$this, 'block_blazy_caption'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        $context["classes"] = [0 => ((        // line 54
($context["content"] ?? null)) ? ("media--rendered") : ("")), 1 => ((twig_get_attribute($this->env, $this->source,         // line 55
($context["settings"] ?? null), "bundle", [], "any", false, false, true, 55)) ? (("media--bundle--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "bundle", [], "any", false, false, true, 55), 55, $this->source)))) : ("")), 2 => ((twig_get_attribute($this->env, $this->source,         // line 56
($context["settings"] ?? null), "namespace", [], "any", false, false, true, 56)) ? (("media--" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "namespace", [], "any", false, false, true, 56), 56, $this->source))) : ("")), 3 => (((twig_get_attribute($this->env, $this->source,         // line 57
($context["settings"] ?? null), "lazy", [], "any", false, false, true, 57) && twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "use_loading", [], "any", false, false, true, 57))) ? ("media--loading") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,         // line 58
($context["settings"] ?? null), "media_switch", [], "any", false, false, true, 58)) ? (("media--switch media--switch--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "media_switch", [], "any", false, false, true, 58), 58, $this->source)))) : ("")), 5 => ((twig_get_attribute($this->env, $this->source,         // line 59
($context["settings"] ?? null), "player", [], "any", false, false, true, 59)) ? ("media--player") : ("")), 6 => ((twig_get_attribute($this->env, $this->source,         // line 60
($context["settings"] ?? null), "ratio", [], "any", false, false, true, 60)) ? (("media--ratio media--ratio--" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ratio", [], "any", false, false, true, 60), 60, $this->source))) : ("")), 7 => ((twig_get_attribute($this->env, $this->source,         // line 61
($context["settings"] ?? null), "responsive_image_style_id", [], "any", false, false, true, 61)) ? ("media--responsive") : ("")), 8 => ((twig_get_attribute($this->env, $this->source,         // line 62
($context["settings"] ?? null), "type", [], "any", false, false, true, 62)) ? (("media--" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "type", [], "any", false, false, true, 62), 62, $this->source))) : ("")), 9 => ((twig_get_attribute($this->env, $this->source,         // line 63
($context["settings"] ?? null), "classes", [], "any", false, false, true, 63)) ? (\Drupal\Component\Utility\Html::getClass(twig_join_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "classes", [], "any", false, false, true, 63), 63, $this->source), " "))) : (""))];
        // line 66
        echo "
";
        // line 67
        ob_start(function () { return ''; });
        // line 68
        echo "  ";
        $this->displayBlock('blazy_player', $context, $blocks);
        $context["player"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 77
        echo "
";
        // line 78
        ob_start(function () { return ''; });
        // line 79
        echo "  ";
        $this->displayBlock('blazy_media', $context, $blocks);
        $context["media"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 94
        echo "
";
        // line 95
        ob_start(function () { return ''; });
        // line 96
        echo "  ";
        $this->displayBlock('blazy_content', $context, $blocks);
        // line 113
        echo "
  ";
        // line 114
        if ((($context["captions"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["captions"] ?? null), "inline", [], "any", true, true, true, 114))) {
            // line 115
            echo "    ";
            $this->displayBlock('blazy_caption', $context, $blocks);
            // line 124
            echo "  ";
        }
        // line 125
        echo "
  ";
        // line 126
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["postscript"] ?? null), 126, $this->source), "html", null, true);
        echo "

";
        $context["blazy"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 129
        echo "
";
        // line 130
        if (($context["wrapper_attributes"] ?? null)) {
            // line 131
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_attributes"] ?? null), 131, $this->source), "html", null, true);
            echo ">
    ";
            // line 132
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["blazy"] ?? null), 132, $this->source), "html", null, true);
            echo "
  </div>
";
        } else {
            // line 135
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["blazy"] ?? null), 135, $this->source), "html", null, true);
            echo "
";
        }
    }

    // line 68
    public function block_blazy_player($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "player", [], "any", false, false, true, 69)) {
            // line 70
            echo "      <span class=\"media__icon media__icon--close\"></span>
      <span class=\"media__icon media__icon--play\" data-url=\"";
            // line 71
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "embed_url", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
            echo "\"></span>
    ";
        } else {
            // line 73
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["iframe"] ?? null), 73, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 75
        echo "  ";
    }

    // line 79
    public function block_blazy_media($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 80
        echo "    <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 80), 80, $this->source), "html", null, true);
        echo ">
      ";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["preface"] ?? null), 81, $this->source), "html", null, true);
        echo "
      ";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["noscript"] ?? null), 82, $this->source), "html", null, true);
        echo "
      ";
        // line 83
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 83, $this->source), "html", null, true);
        echo "
      ";
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image"] ?? null), 84, $this->source), "html", null, true);
        echo "
      ";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["overlay"] ?? null), 85, $this->source), "html", null, true);
        echo "
      ";
        // line 86
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["player"] ?? null), 86, $this->source), "html", null, true);
        echo "

      ";
        // line 89
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "icon", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
        echo "
      ";
        // line 90
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 90, $this->source), "html", null, true);
        echo "
    </div>
  ";
    }

    // line 96
    public function block_blazy_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        echo "    ";
        if (($context["media_attributes"] ?? null)) {
            echo "<div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_attributes"] ?? null), 97, $this->source), "html", null, true);
            echo ">";
        }
        // line 98
        echo "      ";
        if ((($context["url"] ?? null) &&  !twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "player", [], "any", false, false, true, 98))) {
            // line 99
            echo "        <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 99, $this->source), "html", null, true);
            echo "\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url_attributes"] ?? null), 99, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media"] ?? null), 99, $this->source), "html", null, true);
            echo "</a>

        ";
            // line 102
            echo "        ";
            if ((($context["captions"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["captions"] ?? null), "lightbox", [], "any", false, false, true, 102)))) {
                // line 103
                echo "          <div class=\"litebox-caption visually-hidden\">";
                // line 104
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["captions"] ?? null), "lightbox", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
                // line 105
                echo "</div>
        ";
            }
            // line 107
            echo "
      ";
        } else {
            // line 109
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media"] ?? null), 109, $this->source), "html", null, true);
        }
        // line 111
        echo "    ";
        if (($context["media_attributes"] ?? null)) {
            echo "</div>";
        }
        // line 112
        echo "  ";
    }

    // line 115
    public function block_blazy_caption($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 116
        echo "      <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["caption_attributes"] ?? null), 116, $this->source), "html", null, true);
        echo ">
        ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["captions"] ?? null), "inline", [], "any", false, false, true, 117));
        foreach ($context['_seq'] as $context["_key"] => $context["caption"]) {
            // line 118
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, $context["caption"], "content", [], "any", false, false, true, 118)) {
                // line 119
                echo "            <";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["caption"], "tag", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["caption"], "attributes", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["caption"], "content", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
                echo "</";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["caption"], "tag", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
                echo ">
          ";
            }
            // line 121
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "      </div>
    ";
    }

    public function getTemplateName()
    {
        return "modules/blazy/templates/blazy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 122,  275 => 121,  263 => 119,  260 => 118,  256 => 117,  251 => 116,  247 => 115,  243 => 112,  238 => 111,  235 => 109,  231 => 107,  227 => 105,  225 => 104,  223 => 103,  220 => 102,  210 => 99,  207 => 98,  200 => 97,  196 => 96,  189 => 90,  184 => 89,  179 => 86,  175 => 85,  171 => 84,  167 => 83,  163 => 82,  159 => 81,  154 => 80,  150 => 79,  146 => 75,  140 => 73,  135 => 71,  132 => 70,  129 => 69,  125 => 68,  117 => 135,  111 => 132,  106 => 131,  104 => 130,  101 => 129,  95 => 126,  92 => 125,  89 => 124,  86 => 115,  84 => 114,  81 => 113,  78 => 96,  76 => 95,  73 => 94,  69 => 79,  67 => 78,  64 => 77,  60 => 68,  58 => 67,  55 => 66,  53 => 63,  52 => 62,  51 => 61,  50 => 60,  49 => 59,  48 => 58,  47 => 57,  46 => 56,  45 => 55,  44 => 54,  43 => 53,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/blazy/templates/blazy.html.twig", "C:\\laragon\\www\\drupal\\modules\\blazy\\templates\\blazy.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 53, "block" => 68, "if" => 114, "for" => 117);
        static $filters = array("clean_class" => 55, "join" => 63, "escape" => 126);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'for'],
                ['clean_class', 'join', 'escape'],
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
