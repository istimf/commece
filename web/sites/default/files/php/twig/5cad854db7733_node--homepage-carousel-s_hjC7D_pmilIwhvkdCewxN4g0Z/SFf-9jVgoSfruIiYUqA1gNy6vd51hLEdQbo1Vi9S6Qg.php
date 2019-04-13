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

/* themes/custom/commerce_2_demo/templates/nodes/node--homepage-carousel-slide.html.twig */
class __TwigTemplate_232fecd210fc5d458f08c7ffce7fb171dd0c76c962cca0248ef87c5c408fbae6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 15, "set" => 16];
        $filters = ["replace" => 16];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['replace'],
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
        // line 15
        if (($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_boolean", []), "value", []) == "1")) {
            // line 16
            echo "  ";
            $context["slide_link_url"] = twig_replace_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_carousel_slide_link", []), "uri", [])), ["internal:" => ""]);
        } else {
            // line 18
            echo "  ";
            $context["slide_link_url"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_carousel_slide_link", []), 0, []), "#url", [], "array");
        }
        // line 20
        echo "
<div class=\"homepage-carousel-slide\">
  ";
        // line 22
        if ((($context["slide_link_url"] ?? null) &&  !$this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_carousel_slide_link", []), "title", []))) {
            // line 23
            echo "    <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slide_link_url"] ?? null)), "html", null, true);
            echo "\" class=\"homepage-carousel-slide__link-wrapper\">
  ";
        }
        // line 25
        echo "
  ";
        // line 26
        if (($context["slide_image_url"] ?? null)) {
            // line 27
            echo "    <div class=\"homepage-carousel-slide__image hidden-xs\">
      <img src=\"";
            // line 28
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slide_image_url"] ?? null)), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_carousel_image", []), "alt", []), "value", [])), "html", null, true);
            echo "\">
    </div>
  ";
        }
        // line 31
        echo "
  <div class=\"homepage-carousel-slide__mobile-image visible-xs-block\">
    ";
        // line 33
        if (($context["slide_mobile_image_url"] ?? null)) {
            // line 34
            echo "      <img src=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slide_mobile_image_url"] ?? null)), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_carousel_mobile_image", []), "alt", []), "value", [])), "html", null, true);
            echo "\">
    ";
        } elseif (        // line 35
($context["slide_image_url"] ?? null)) {
            // line 36
            echo "      <img src=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slide_image_url"] ?? null)), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_carousel_image", []), "alt", []), "value", [])), "html", null, true);
            echo "\">
    ";
        }
        // line 38
        echo "  </div>

  ";
        // line 40
        if ((($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_carousel_slide_title", []), "value", []) || $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_carousel_slide_body", []), "value", [])) || $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_carousel_slide_link", []), "title", []))) {
            // line 41
            echo "    <div class=\"homepage-carousel-slide__content-wrapper\">
      <div class=\"homepage-carousel-slide__content\">
        ";
            // line 43
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_carousel_slide_title", []), "value", [])) {
                // line 44
                echo "          <div class=\"homepage-carousel-slide__title\">
            <span>";
                // line 45
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_carousel_slide_title", []), "value", [])), "html", null, true);
                echo "</span>
          </div>
        ";
            }
            // line 48
            echo "
        ";
            // line 49
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_carousel_slide_body", []), "value", [])) {
                // line 50
                echo "          <div class=\"homepage-carousel-slide__body\">
            ";
                // line 51
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_carousel_slide_body", []), "value", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 54
            echo "
        ";
            // line 55
            if ((($context["slide_link_url"] ?? null) && $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_carousel_slide_link", []), "title", []))) {
                // line 56
                echo "          <div class=\"homepage-carousel-slide__link\">
            <a href=\"";
                // line 57
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slide_link_url"] ?? null)), "html", null, true);
                echo "\" class=\"btn btn-secondary\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_carousel_slide_link", []), "title", [])), "html", null, true);
                echo "</a>
          </div>
        ";
            }
            // line 60
            echo "      </div>
    </div>
  ";
        }
        // line 63
        echo "
  ";
        // line 64
        if ((($context["slide_link_url"] ?? null) &&  !$this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_carousel_slide_link", []), "title", []))) {
            // line 65
            echo "    </a>
  ";
        }
        // line 67
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/commerce_2_demo/templates/nodes/node--homepage-carousel-slide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 67,  177 => 65,  175 => 64,  172 => 63,  167 => 60,  159 => 57,  156 => 56,  154 => 55,  151 => 54,  145 => 51,  142 => 50,  140 => 49,  137 => 48,  131 => 45,  128 => 44,  126 => 43,  122 => 41,  120 => 40,  116 => 38,  108 => 36,  106 => 35,  99 => 34,  97 => 33,  93 => 31,  85 => 28,  82 => 27,  80 => 26,  77 => 25,  71 => 23,  69 => 22,  65 => 20,  61 => 18,  57 => 16,  55 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/commerce_2_demo/templates/nodes/node--homepage-carousel-slide.html.twig", "/var/www/drupalvm/drupal/web/themes/custom/commerce_2_demo/templates/nodes/node--homepage-carousel-slide.html.twig");
    }
}
