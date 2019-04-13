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

/* themes/custom/commerce_2_demo/templates/pages/page.html.twig */
class __TwigTemplate_dd7aca5c7e242f8d0c0df2c31ba2474d068c09b409d7de5cd54e467c0fa46775 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 48, "include" => 57, "if" => 64];
        $filters = ["render" => 48, "trim" => 49, "striptags" => 49, "without" => 82];
        $functions = ["drupal_field" => 98];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include', 'if'],
                ['render', 'trim', 'striptags', 'without'],
                ['drupal_field']
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
        // line 48
        $context["page_sidebar_rendered"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_sidebar", [])));
        // line 49
        $context["page_sidebar_exists"] = ((twig_trim_filter(strip_tags($this->sandbox->ensureToStringAllowed(($context["page_sidebar_rendered"] ?? null)), "<a><img>"))) ? (true) : (false));
        // line 50
        echo "
";
        // line 52
        $context["row_class"] = ((($context["page_sidebar_exists"] ?? null)) ? ("row-sidebar row-eq-height") : (""));
        // line 53
        $context["col_class"] = ((($context["page_sidebar_exists"] ?? null)) ? ("col-sm-8 col-md-9") : ("col-sm-12"));
        // line 54
        $context["content_class"] = ((($context["page_sidebar_exists"] ?? null)) ? ("content__main-content--with-sidebar") : (""));
        // line 55
        echo "
";
        // line 57
        $this->loadTemplate(((($context["base_path"] ?? null) . ($context["directory"] ?? null)) . "/templates/pages/includes/site_header.html.twig"), "themes/custom/commerce_2_demo/templates/pages/page.html.twig", 57)->display($context);
        // line 59
        echo "
";
        // line 61
        echo "<div class=\"site-content\">
  <div class=\"container\">
    <div class=\"row ";
        // line 63
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["row_class"] ?? null)), "html", null, true);
        echo "\">
      ";
        // line 64
        if (($context["page_sidebar_exists"] ?? null)) {
            // line 65
            echo "        <div class=\"col-sm-4 col-md-3 hidden-xs\">
          <aside class=\"site-sidebar\" role=\"complementary\">
            ";
            // line 67
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_sidebar", [])), "html", null, true);
            echo "
          </aside>
        </div>
      ";
        }
        // line 71
        echo "
      <div class=\"";
        // line 72
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["col_class"] ?? null)), "html", null, true);
        echo "\">
        <main class=\"content__main-content ";
        // line 73
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_class"] ?? null)), "html", null, true);
        echo " clearfix\" role=\"main\">
          <div class=\"visually-hidden\"><a id=\"main-content\" tabindex=\"-1\"></a></div>
          ";
        // line 75
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 76
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
          ";
        }
        // line 78
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "above_content", [])) {
            // line 79
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "above_content", [])), "html", null, true);
            echo "
          ";
        }
        // line 81
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 82
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "field_paragraphs_reference_2"), "html", null, true);
            echo "
          ";
        }
        // line 84
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "below_content", [])) {
            // line 85
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "below_content", [])), "html", null, true);
            echo "
          ";
        }
        // line 87
        echo "        </main>
      </div>
    </div>
  </div>

  ";
        // line 93
        echo "  ";
        if ((($context["node"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_paragraphs_reference_2", []), 0, []), "target_id", []))) {
            // line 94
            echo "    <div class=\"container-fluid\">
      <div class=\"row\">
        <div class=\"col-sm-12 page-footer-components\">
          <main class=\"content__main-content clearfix\" role=\"complementary\">
            ";
            // line 98
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalField("field_paragraphs_reference_2", "node", $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "id", [])), "default"), "html", null, true);
            echo "
          </main>
        </div>
      </div>
    </div>
  ";
        }
        // line 104
        echo "  ";
        // line 105
        echo "
</div>
";
        // line 108
        echo "
";
        // line 110
        $this->loadTemplate(((($context["base_path"] ?? null) . ($context["directory"] ?? null)) . "/templates/pages/includes/site_footer.html.twig"), "themes/custom/commerce_2_demo/templates/pages/page.html.twig", 110)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/commerce_2_demo/templates/pages/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 110,  175 => 108,  171 => 105,  169 => 104,  160 => 98,  154 => 94,  151 => 93,  144 => 87,  138 => 85,  135 => 84,  129 => 82,  126 => 81,  120 => 79,  117 => 78,  111 => 76,  109 => 75,  104 => 73,  100 => 72,  97 => 71,  90 => 67,  86 => 65,  84 => 64,  80 => 63,  76 => 61,  73 => 59,  71 => 57,  68 => 55,  66 => 54,  64 => 53,  62 => 52,  59 => 50,  57 => 49,  55 => 48,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/commerce_2_demo/templates/pages/page.html.twig", "/var/www/drupalvm/drupal/web/themes/custom/commerce_2_demo/templates/pages/page.html.twig");
    }
}
