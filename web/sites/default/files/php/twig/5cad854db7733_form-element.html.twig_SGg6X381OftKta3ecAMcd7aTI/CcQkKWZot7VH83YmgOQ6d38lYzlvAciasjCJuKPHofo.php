<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/commerce_2_demo/templates/input/form-element.html.twig */
class __TwigTemplate_90618b8cb908a6a4a0eb554d850fc03a8a7b95eef23d7eb4003912621fa42e1e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 49, "if" => 73];
        $filters = ["clean_class" => 52];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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
        // line 49
        $context["classes"] = [0 => "form-item", 1 => "js-form-item", 2 => ("form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 52
($context["type"] ?? null)))), 3 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 53
($context["type"] ?? null)))), 4 => ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 54
($context["name"] ?? null)))), 5 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 55
($context["name"] ?? null)))), 6 => ((!twig_in_filter(        // line 56
($context["title_display"] ?? null), [0 => "after", 1 => "before"])) ? ("form-no-label") : ("")), 7 => (((        // line 57
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), 8 => ((        // line 58
($context["is_form_group"] ?? null)) ? ("form-group") : ("")), 9 => ((        // line 59
($context["is_radio"] ?? null)) ? ("radio") : ("")), 10 => ((        // line 60
($context["is_checkbox"] ?? null)) ? ("checkbox") : ("")), 11 => ((        // line 61
($context["is_autocomplete"] ?? null)) ? ("form-autocomplete") : ("")), 12 => ((        // line 62
($context["errors"] ?? null)) ? ("error has-error") : (""))];
        // line 65
        $context["description_classes"] = [0 => "description", 1 => "help-block", 2 => (((        // line 68
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 71
        echo "
";
        // line 73
        if ((\Drupal\Component\Utility\Html::getClass(($context["name"] ?? null)) != "field-review-rating")) {
            // line 74
            echo "<div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
            echo ">
  ";
        }
        // line 76
        echo "
  ";
        // line 77
        if (twig_in_filter(($context["label_display"] ?? null), [0 => "before", 1 => "invisible"])) {
            // line 78
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 80
        echo "
  ";
        // line 81
        if ( !twig_test_empty(($context["prefix"] ?? null))) {
            // line 82
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 84
        echo "
  ";
        // line 85
        if (((($context["description_display"] ?? null) == "before") && $this->getAttribute(($context["description"] ?? null), "content", []))) {
            // line 86
            echo "    <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["description"] ?? null), "attributes", [])), "html", null, true);
            echo ">
      ";
            // line 87
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["description"] ?? null), "content", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 90
        echo "
  ";
        // line 91
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true);
        echo "

  ";
        // line 93
        if ( !twig_test_empty(($context["suffix"] ?? null))) {
            // line 94
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 96
        echo "
  ";
        // line 97
        if ((($context["label_display"] ?? null) == "after")) {
            // line 98
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 100
        echo "
  ";
        // line 101
        if ((twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"]) && $this->getAttribute(($context["description"] ?? null), "content", []))) {
            // line 102
            echo "    <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", []), "addClass", [0 => ($context["description_classes"] ?? null)], "method")), "html", null, true);
            echo ">
      ";
            // line 103
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["description"] ?? null), "content", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 106
        echo "
  ";
        // line 107
        if ((\Drupal\Component\Utility\Html::getClass(($context["name"] ?? null)) != "field-review-rating")) {
            // line 108
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/commerce_2_demo/templates/input/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 108,  166 => 107,  163 => 106,  157 => 103,  152 => 102,  150 => 101,  147 => 100,  141 => 98,  139 => 97,  136 => 96,  130 => 94,  128 => 93,  123 => 91,  120 => 90,  114 => 87,  109 => 86,  107 => 85,  104 => 84,  98 => 82,  96 => 81,  93 => 80,  87 => 78,  85 => 77,  82 => 76,  76 => 74,  74 => 73,  71 => 71,  69 => 68,  68 => 65,  66 => 62,  65 => 61,  64 => 60,  63 => 59,  62 => 58,  61 => 57,  60 => 56,  59 => 55,  58 => 54,  57 => 53,  56 => 52,  55 => 49,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/commerce_2_demo/templates/input/form-element.html.twig", "/var/www/drupalvm/drupal/web/themes/custom/commerce_2_demo/templates/input/form-element.html.twig");
    }
}
