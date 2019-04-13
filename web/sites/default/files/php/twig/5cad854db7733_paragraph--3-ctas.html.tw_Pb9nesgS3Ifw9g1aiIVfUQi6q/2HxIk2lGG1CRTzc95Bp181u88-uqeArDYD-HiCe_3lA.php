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

/* themes/custom/commerce_2_demo/templates/paragraphs/paragraph--3-ctas.html.twig */
class __TwigTemplate_e318e60310af8a193175cc57d17b0bdd4690bcdc59d463cb8c78d8d123dcd488 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 41, "set" => 42, "block" => 54];
        $filters = ["length" => 41, "striptags" => 42, "clean_class" => 49, "trim" => 58, "render" => 58, "replace" => 60];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'block'],
                ['length', 'striptags', 'clean_class', 'trim', 'render', 'replace'],
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
        // line 41
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_unique_class", []), "value", []))) {
            // line 42
            echo "  ";
            $context["unique_class"] = strip_tags($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_unique_class", []), "value", [])));
        }
        // line 44
        echo "
";
        // line 46
        $context["classes"] = [0 => "paragraph", 1 => "paragraph--type--3-ctas", 2 => ((        // line 49
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : ("")), 3 => (( !$this->getAttribute(        // line 50
($context["paragraph"] ?? null), "isPublished", [], "method")) ? ("paragraph--unpublished") : ("")), 4 => ((        // line 51
($context["unique_class"] ?? null)) ? (($context["unique_class"] ?? null)) : (""))];
        // line 54
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 55
        echo "  <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
    ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 79
        echo "  </div>
";
    }

    // line 56
    public function block_content($context, array $blocks = [])
    {
        // line 57
        echo "      ";
        // line 58
        echo "      ";
        if ( !twig_test_empty(twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_link_cta_link", []))))) {
            // line 59
            echo "        ";
            if (($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_boolean", []), "value", []) == "1")) {
                // line 60
                echo "          ";
                $context["link_url"] = twig_replace_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_link_cta_link", []), "uri", [])), ["internal:" => ""]);
                // line 61
                echo "        ";
            } else {
                // line 62
                echo "          ";
                $context["link_url"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link_cta_link", []), 0, []), "#url", [], "array");
                // line 63
                echo "        ";
            }
            // line 64
            echo "
        <a href=\"";
            // line 65
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_url"] ?? null)), "html", null, true);
            echo "\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link_cta_link", []), 0, [], "array"), "#title", [], "array")), "html", null, true);
            echo "\">
          ";
            // line 67
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_cta_image_small", [])), "html", null, true);
            echo "
          <div class=\"field-item__title btn btn-secondary\">";
            // line 68
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link_cta_link", []), 0, [], "array"), "#title", [], "array")), "html", null, true);
            echo "</div>
        </a>

      ";
            // line 72
            echo "      ";
        } else {
            // line 73
            echo "        <div class=\"no-link\">
          ";
            // line 75
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_cta_image_small", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 78
        echo "    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/commerce_2_demo/templates/paragraphs/paragraph--3-ctas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 78,  138 => 75,  135 => 73,  132 => 72,  126 => 68,  121 => 67,  115 => 65,  112 => 64,  109 => 63,  106 => 62,  103 => 61,  100 => 60,  97 => 59,  94 => 58,  92 => 57,  89 => 56,  84 => 79,  82 => 56,  77 => 55,  71 => 54,  69 => 51,  68 => 50,  67 => 49,  66 => 46,  63 => 44,  59 => 42,  57 => 41,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/commerce_2_demo/templates/paragraphs/paragraph--3-ctas.html.twig", "/var/www/drupalvm/drupal/web/themes/custom/commerce_2_demo/templates/paragraphs/paragraph--3-ctas.html.twig");
    }
}
