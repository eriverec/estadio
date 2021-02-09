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

/* modules/views_aggregator/templates/views-aggregator-results-table.html.twig */
class __TwigTemplate_26f6c28f1bb545a895a2fa8b55733ff079d6841be7ffc8041424b14430fb48d1 extends \Twig\Template
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
        // line 48
        if (($context["responsive"] ?? null)) {
            // line 49
            echo "  <div class=\"table-responsive\">
";
        }
        // line 52
        $context["classes"] = [0 => "table", 1 => ("cols-" . twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(        // line 54
($context["header"] ?? null), 54, $this->source))), 2 => ((        // line 55
($context["bordered"] ?? null)) ? ("table-bordered") : ("")), 3 => ((        // line 56
($context["condensed"] ?? null)) ? ("table-condensed") : ("")), 4 => ((        // line 57
($context["hover"] ?? null)) ? ("table-hover") : ("")), 5 => ((        // line 58
($context["striped"] ?? null)) ? ("table-striped") : ("")), 6 => ((        // line 59
($context["responsive"] ?? null)) ? ("responsive-enabled") : ("")), 7 => ((        // line 60
($context["sticky"] ?? null)) ? ("sticky-enabled") : (""))];
        // line 63
        $context["totals_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
        // line 64
        echo "<table";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 64), 64, $this->source), "html", null, true);
        echo ">
  ";
        // line 65
        if (($context["caption_needed"] ?? null)) {
            // line 66
            echo "    <caption>
    ";
            // line 67
            if (($context["caption"] ?? null)) {
                // line 68
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["caption"] ?? null), 68, $this->source), "html", null, true);
                echo "
    ";
            } else {
                // line 70
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 70, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 72
            echo "    ";
            if (( !twig_test_empty(($context["summary"] ?? null)) ||  !twig_test_empty(($context["description"] ?? null)))) {
                // line 73
                echo "      <details>
        ";
                // line 74
                if ( !twig_test_empty(($context["summary"] ?? null))) {
                    // line 75
                    echo "          <summary>";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["summary"] ?? null), 75, $this->source), "html", null, true);
                    echo "</summary>
        ";
                }
                // line 77
                echo "        ";
                if ( !twig_test_empty(($context["description"] ?? null))) {
                    // line 78
                    echo "          ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 78, $this->source), "html", null, true);
                    echo "
        ";
                }
                // line 80
                echo "      </details>
    ";
            }
            // line 82
            echo "    </caption>
  ";
        }
        // line 84
        echo "  ";
        if (($context["header"] ?? null)) {
            // line 85
            echo "    <thead>
      <tr>
        ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["header"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 88
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["column"], "default_classes", [], "any", false, false, true, 88)) {
                    // line 89
                    echo "            ";
                    // line 90
                    $context["column_classes"] = [0 => "views-field", 1 => ("views-field-" . $this->sandbox->ensureToStringAllowed((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =                     // line 92
($context["fields"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["key"]] ?? null) : null), 92, $this->source))];
                    // line 95
                    echo "          ";
                }
                // line 96
                echo "          <th";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 96), "addClass", [0 => ($context["column_classes"] ?? null)], "method", false, false, true, 96), "setAttribute", [0 => "scope", 1 => "col"], "method", false, false, true, 96), 96, $this->source), "html", null, true);
                echo ">";
                // line 97
                if (twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 97)) {
                    // line 98
                    echo "<";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
                    echo ">";
                    // line 99
                    if (twig_get_attribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 99)) {
                        // line 100
                        echo "<a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
                        echo "\" title=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
                        echo "\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
                        echo "</a>";
                    } else {
                        // line 102
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
                    }
                    // line 104
                    echo "</";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
                    echo ">";
                } else {
                    // line 106
                    if (twig_get_attribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 106)) {
                        // line 107
                        echo "<a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
                        echo "\" title=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
                        echo "\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
                        echo "</a>";
                    } else {
                        // line 109
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
                    }
                }
                // line 112
                echo "</th>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "      </tr>
      ";
            // line 115
            if ((($context["totals"] ?? null) && twig_in_filter(($context["totals_row_position"] ?? null), [0 => 1, 1 => 3]))) {
                // line 116
                echo "        <tr";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["totals_attributes"] ?? null), "addClass", [0 => ($context["totals_row_class"] ?? null)], "method", false, false, true, 116), 116, $this->source), "html", null, true);
                echo ">
          ";
                // line 117
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["header"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                    // line 118
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->source, ($context["totals"] ?? null), $context["key"], [], "any", false, false, true, 118)) {
                        // line 119
                        echo "              ";
                        if (((($context["grouping_field"] ?? null) && ($context["grouping_field_class"] ?? null)) && (($context["grouping_field"] ?? null) == $context["key"]))) {
                            // line 120
                            echo "                <td";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 120), "addClass", [0 => ($context["column_classes"] ?? null)], "method", false, false, true, 120), "addClass", [0 => ($context["grouping_field_class"] ?? null)], "method", false, false, true, 120), 120, $this->source), "html", null, true);
                            echo ">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["totals"] ?? null), $context["key"], [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
                            echo "</td>
              ";
                        } else {
                            // line 122
                            echo "                <td";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 122), "addClass", [0 => ($context["column_classes"] ?? null)], "method", false, false, true, 122), 122, $this->source), "html", null, true);
                            echo ">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["totals"] ?? null), $context["key"], [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
                            echo "</td>
              ";
                        }
                        // line 124
                        echo "            ";
                    } else {
                        // line 125
                        echo "              <td";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 125), "addClass", [0 => ($context["column_classes"] ?? null)], "method", false, false, true, 125), 125, $this->source), "html", null, true);
                        echo "></td>
            ";
                    }
                    // line 127
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 128
                echo "        </tr>
      ";
            }
            // line 130
            echo "    </thead>
  ";
        }
        // line 132
        echo "  <tbody>
    ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 134
            echo "      <tr";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
            echo ">
        ";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "columns", [], "any", false, false, true, 135));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 136
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["column"], "default_classes", [], "any", false, false, true, 136)) {
                    // line 137
                    echo "            ";
                    // line 138
                    $context["column_classes"] = [0 => "views-field"];
                    // line 142
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["column"], "fields", [], "any", false, false, true, 142));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 143
                        echo "              ";
                        $context["column_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["column_classes"] ?? null), 143, $this->source), [0 => ("views-field-" . $this->sandbox->ensureToStringAllowed($context["field"], 143, $this->source))]);
                        // line 144
                        echo "                ";
                        if (((($context["grouping_field"] ?? null) && ($context["grouping_field_class"] ?? null)) && (($context["grouping_field"] ?? null) == $context["key"]))) {
                            // line 145
                            echo "                  ";
                            $context["column_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["column_classes"] ?? null), 145, $this->source), [0 => ($context["grouping_field_class"] ?? null)]);
                            // line 146
                            echo "                ";
                        }
                        // line 147
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 148
                    echo "          ";
                }
                // line 149
                echo "          <td";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 149), "addClass", [0 => ($context["column_classes"] ?? null)], "method", false, false, true, 149), 149, $this->source), "html", null, true);
                echo ">";
                // line 150
                if (twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 150)) {
                    // line 151
                    echo "<";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
                    echo ">
              ";
                    // line 152
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 152));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 153
                        echo "                ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["content"], "separator", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["content"], "field_output", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
                        echo "
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 155
                    echo "              </";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 155), 155, $this->source), "html", null, true);
                    echo ">";
                } else {
                    // line 157
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 157));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 158
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["content"], "separator", [], "any", false, false, true, 158), 158, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["content"], "field_output", [], "any", false, false, true, 158), 158, $this->source), "html", null, true);
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                // line 161
                echo "          </td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "      </tr>
      ";
            // line 164
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 164), twig_get_array_keys_filter(($context["subtotals"] ?? null)))) {
                // line 165
                echo "        ";
                $context["row_number"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 165);
                // line 166
                echo "        <tr";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 166), "addClass", [0 => ($context["grouping_row_class"] ?? null)], "method", false, false, true, 166), 166, $this->source), "html", null, true);
                echo ">
          ";
                // line 167
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["header"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                    // line 168
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["subtotals"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["row_number"] ?? null)] ?? null) : null), $context["key"], [], "any", false, false, true, 168)) {
                        // line 169
                        echo "              ";
                        if (((($context["grouping_field"] ?? null) && ($context["grouping_field_class"] ?? null)) && (($context["grouping_field"] ?? null) == $context["key"]))) {
                            // line 170
                            echo "                <td";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 170), "addClass", [0 => ($context["column_classes"] ?? null)], "method", false, false, true, 170), "addClass", [0 => ($context["grouping_field_class"] ?? null)], "method", false, false, true, 170), 170, $this->source), "html", null, true);
                            echo ">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["subtotals"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["row_number"] ?? null)] ?? null) : null), $context["key"], [], "any", false, false, true, 170), 170, $this->source), "html", null, true);
                            echo "</td>
              ";
                        } else {
                            // line 172
                            echo "                <td";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 172), "addClass", [0 => ($context["column_classes"] ?? null)], "method", false, false, true, 172), 172, $this->source), "html", null, true);
                            echo ">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["subtotals"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["row_number"] ?? null)] ?? null) : null), $context["key"], [], "any", false, false, true, 172), 172, $this->source), "html", null, true);
                            echo "</td>
              ";
                        }
                        // line 174
                        echo "            ";
                    } else {
                        // line 175
                        echo "              <td";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 175), "addClass", [0 => ($context["column_classes"] ?? null)], "method", false, false, true, 175), 175, $this->source), "html", null, true);
                        echo "></td>
            ";
                    }
                    // line 177
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 178
                echo "        </tr>
      ";
            }
            // line 180
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "  </tbody>
";
        // line 182
        if ((($context["totals"] ?? null) && twig_in_filter(($context["totals_row_position"] ?? null), [0 => 2, 1 => 3]))) {
            // line 183
            echo "  <tfoot>
    <tr";
            // line 184
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["totals_attributes"] ?? null), "addClass", [0 => ($context["totals_row_class"] ?? null)], "method", false, false, true, 184), 184, $this->source), "html", null, true);
            echo ">
    ";
            // line 185
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["header"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 186
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, ($context["totals"] ?? null), $context["key"], [], "any", false, false, true, 186)) {
                    // line 187
                    echo "          <td";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 187), "addClass", [0 => ($context["column_classes"] ?? null)], "method", false, false, true, 187), 187, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["totals"] ?? null), $context["key"], [], "any", false, false, true, 187), 187, $this->source), "html", null, true);
                    echo "</td>
        ";
                } else {
                    // line 189
                    echo "          <td";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 189), "addClass", [0 => ($context["column_classes"] ?? null)], "method", false, false, true, 189), 189, $this->source), "html", null, true);
                    echo "></td>
        ";
                }
                // line 191
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 192
            echo "    </tr>
  </tfoot>
";
        }
        // line 195
        echo "</table>
";
        // line 196
        if (($context["responsive"] ?? null)) {
            // line 197
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/views_aggregator/templates/views-aggregator-results-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  479 => 197,  477 => 196,  474 => 195,  469 => 192,  463 => 191,  457 => 189,  449 => 187,  446 => 186,  442 => 185,  438 => 184,  435 => 183,  433 => 182,  430 => 181,  416 => 180,  412 => 178,  406 => 177,  400 => 175,  397 => 174,  389 => 172,  381 => 170,  378 => 169,  375 => 168,  371 => 167,  366 => 166,  363 => 165,  361 => 164,  358 => 163,  351 => 161,  343 => 158,  339 => 157,  334 => 155,  324 => 153,  320 => 152,  315 => 151,  313 => 150,  309 => 149,  306 => 148,  300 => 147,  297 => 146,  294 => 145,  291 => 144,  288 => 143,  283 => 142,  281 => 138,  279 => 137,  276 => 136,  272 => 135,  267 => 134,  250 => 133,  247 => 132,  243 => 130,  239 => 128,  233 => 127,  227 => 125,  224 => 124,  216 => 122,  208 => 120,  205 => 119,  202 => 118,  198 => 117,  193 => 116,  191 => 115,  188 => 114,  181 => 112,  176 => 109,  166 => 107,  164 => 106,  159 => 104,  155 => 102,  145 => 100,  143 => 99,  139 => 98,  137 => 97,  133 => 96,  130 => 95,  128 => 92,  127 => 90,  125 => 89,  122 => 88,  118 => 87,  114 => 85,  111 => 84,  107 => 82,  103 => 80,  97 => 78,  94 => 77,  88 => 75,  86 => 74,  83 => 73,  80 => 72,  74 => 70,  68 => 68,  66 => 67,  63 => 66,  61 => 65,  56 => 64,  54 => 63,  52 => 60,  51 => 59,  50 => 58,  49 => 57,  48 => 56,  47 => 55,  46 => 54,  45 => 52,  41 => 49,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/views_aggregator/templates/views-aggregator-results-table.html.twig", "C:\\laragon\\www\\drupal\\modules\\views_aggregator\\templates\\views-aggregator-results-table.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 48, "set" => 52, "for" => 87);
        static $filters = array("length" => 54, "escape" => 64, "merge" => 143, "keys" => 164);
        static $functions = array("create_attribute" => 63);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['length', 'escape', 'merge', 'keys'],
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
}
