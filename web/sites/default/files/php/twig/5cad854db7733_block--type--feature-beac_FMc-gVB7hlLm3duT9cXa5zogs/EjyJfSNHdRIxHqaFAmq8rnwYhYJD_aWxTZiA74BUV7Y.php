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

/* themes/custom/commerce_2_demo/templates/block/block--type--feature-beacon.html.twig */
class __TwigTemplate_53698356a8c43ba0cabd768cc03dec09e6d3869545e86db3f63a4a8cca9e4ad0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["block" => 33, "set" => 36, "if" => 44];
        $filters = ["length" => 44, "t" => 67];
        $functions = ["attach_library" => 30, "create_attribute" => 41];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'set', 'if'],
                ['length', 't'],
                ['attach_library', 'create_attribute']
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
        // line 28
        echo "
";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("commerce_2_demo/uh-feature-beacon"), "html", null, true);
        echo "
";
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
        // line 34
        echo "
  ";
        // line 36
        echo "  ";
        $context["block_entity"] = $this->getAttribute(($context["content"] ?? null), "#block_content", [], "array");
        // line 37
        echo "  ";
        $context["block_id"] = ("feature-beacon--" . $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["block_entity"] ?? null), "id", []), "value", [])));
        // line 38
        echo "  ";
        $context["modal_size"] = $this->getAttribute($this->getAttribute(($context["block_entity"] ?? null), "field_modal_size", []), "value", []);
        // line 39
        echo "
  ";
        // line 41
        echo "  ";
        $context["link_attributes"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute();
        // line 42
        echo "  ";
        $context["modal_attributes"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute();
        // line 43
        echo "
  ";
        // line 44
        if (twig_length_filter($this->env, $this->getAttribute(($context["block_entity"] ?? null), "field_display_label", []))) {
            // line 45
            echo "    ";
            $context["link_attributes"] = $this->getAttribute(($context["link_attributes"] ?? null), "setAttribute", [0 => "title", 1 => $this->getAttribute($this->getAttribute(($context["block_entity"] ?? null), "field_display_label", []), "value", [])], "method");
            // line 46
            echo "    ";
            $context["modal_attributes"] = $this->getAttribute(($context["modal_attributes"] ?? null), "setAttribute", [0 => "aria-label", 1 => $this->getAttribute($this->getAttribute(($context["block_entity"] ?? null), "field_display_label", []), "value", [])], "method");
            // line 47
            echo "  ";
        }
        // line 48
        echo "
  ";
        // line 49
        if (twig_length_filter($this->env, $this->getAttribute(($context["block_entity"] ?? null), "field_page_element", []))) {
            // line 50
            echo "    ";
            $context["link_attributes"] = $this->getAttribute(($context["link_attributes"] ?? null), "setAttribute", [0 => "data-selector", 1 => $this->getAttribute($this->getAttribute(($context["block_entity"] ?? null), "field_page_element", []), "value", [])], "method");
            // line 51
            echo "  ";
        }
        // line 52
        echo "
  ";
        // line 53
        if (twig_length_filter($this->env, $this->getAttribute(($context["block_entity"] ?? null), "field_position_on_element", []))) {
            // line 54
            echo "    ";
            $context["link_attributes"] = $this->getAttribute(($context["link_attributes"] ?? null), "setAttribute", [0 => "class", 1 => ("feature-beacon__marker feature-beacon__marker--" . $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["block_entity"] ?? null), "field_position_on_element", []), "value", [])))], "method");
            // line 55
            echo "  ";
        }
        // line 56
        echo "
  ";
        // line 58
        echo "  <a href=\"#";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_id"] ?? null)), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_attributes"] ?? null)), "html", null, true);
        echo " data-toggle=\"modal\"><i class=\"fa fa-star\"></i></a>

  ";
        // line 61
        echo "  <div class=\"modal fade feature-beacon__modal\" ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["modal_attributes"] ?? null)), "html", null, true);
        echo " id=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_id"] ?? null)), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" >
    <div class=\"modal-dialog ";
        // line 62
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["modal_size"] ?? null)), "html", null, true);
        echo "\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" id=\"headerClose\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
          <h4 class=\"modal-title\"><i class=\"fa fa-star fa-lg\"></i>
            ";
        // line 67
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((($context["label"] ?? null)) ? (($context["label"] ?? null)) : (t("Feature"))), "html", null, true);
        echo "
          </h4>
        </div>
        <div class=\"modal-body\">
          ";
        // line 71
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" id=\"footerClose\" class=\"btn btn-default\" tabindex=\"-1\" data-dismiss=\"modal\">";
        // line 74
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Close"));
        echo "</button>
        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/commerce_2_demo/templates/block/block--type--feature-beacon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 74,  162 => 71,  155 => 67,  147 => 62,  140 => 61,  132 => 58,  129 => 56,  126 => 55,  123 => 54,  121 => 53,  118 => 52,  115 => 51,  112 => 50,  110 => 49,  107 => 48,  104 => 47,  101 => 46,  98 => 45,  96 => 44,  93 => 43,  90 => 42,  87 => 41,  84 => 39,  81 => 38,  78 => 37,  75 => 36,  72 => 34,  66 => 33,  63 => 32,  59 => 30,  56 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/commerce_2_demo/templates/block/block--type--feature-beacon.html.twig", "/var/www/drupalvm/drupal/web/themes/custom/commerce_2_demo/templates/block/block--type--feature-beacon.html.twig");
    }
}
