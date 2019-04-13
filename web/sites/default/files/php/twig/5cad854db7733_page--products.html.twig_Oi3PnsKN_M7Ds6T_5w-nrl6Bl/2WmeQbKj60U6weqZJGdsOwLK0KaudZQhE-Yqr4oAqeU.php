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

/* themes/custom/commerce_2_demo/templates/pages/page--products.html.twig */
class __TwigTemplate_5e651361fa4aaa560f5caf6d85a6bab6eac1160e8dedd117e6727a3725a1c25b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 53, "include" => 59, "if" => 63];
        $filters = ["t" => 68];
        $functions = ["render_var" => 53];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include', 'if'],
                ['t'],
                ['render_var']
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
        // line 53
        $context["page_sidebar_rendered"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_sidebar", [])));
        // line 55
        $context["row_class"] = ((($context["page_sidebar_rendered"] ?? null)) ? ("row-sidebar row-eq-height") : (""));
        // line 56
        $context["col_class"] = ((($context["page_sidebar_rendered"] ?? null)) ? ("col-sm-9 col-md-10") : ("col-sm-12"));
        // line 57
        echo "
";
        // line 59
        $this->loadTemplate(((($context["base_path"] ?? null) . ($context["directory"] ?? null)) . "/templates/pages/includes/site_header.html.twig"), "themes/custom/commerce_2_demo/templates/pages/page--products.html.twig", 59)->display($context);
        // line 61
        echo "
";
        // line 63
        if (($context["page_sidebar_rendered"] ?? null)) {
            // line 64
            echo "  <div class=\"visible-xs\">
    <aside class=\"site-sidebar site-sidebar--mobile\" role=\"complementary\">
      <div id=\"mobile-sidebar__toggle-open\">
        <a href=\"#\" class=\"btn btn-default\">
          ";
            // line 68
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Products Filters"));
            echo " &nbsp; <i class=\"fa fa-get-pocket fa-lg\"></i>
        </a>
      </div>

      <div id=\"mobile-sidebar__product-filters\">
        ";
            // line 73
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_sidebar", [])), "html", null, true);
            echo "

        <div id=\"mobile-sidebar__toggle-close\">
          <a href=\"#\" class=\"btn btn-default\">
            ";
            // line 77
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Close"));
            echo " <i class=\"fa fa-close fa-lg\"></i>
          </a>
        </div>
      </div>
    </aside>
  </div>
";
        }
        // line 84
        echo "
";
        // line 86
        echo "<div class=\"site-content\">
  <div class=\"container\">
    <div class=\"row ";
        // line 88
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["row_class"] ?? null)), "html", null, true);
        echo "\">
      ";
        // line 89
        if (($context["page_sidebar_rendered"] ?? null)) {
            // line 90
            echo "        <div class=\"col-sm-3 col-md-2 hidden-xs\">
          <aside class=\"site-sidebar site-sidebar--desktop site-sidebar--products\" role=\"complementary\">
            ";
            // line 92
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_sidebar", [])), "html", null, true);
            echo "
          </aside>
        </div>
      ";
        }
        // line 96
        echo "
      <div class=\"";
        // line 97
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["col_class"] ?? null)), "html", null, true);
        echo "\">
        <main class=\"content__main-content clearfix\" role=\"main\">
          ";
        // line 100
        echo "          <div class=\"visually-hidden\"><a id=\"main-content\" tabindex=\"-1\"></a></div>
          ";
        // line 101
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 102
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
          ";
        }
        // line 104
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "above_content", [])) {
            // line 105
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "above_content", [])), "html", null, true);
            echo "
          ";
        }
        // line 107
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 108
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
          ";
        }
        // line 110
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "below_content", [])) {
            // line 111
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "below_content", [])), "html", null, true);
            echo "
          ";
        }
        // line 113
        echo "        </main>
      </div>
    </div>
  </div>
</div>
";
        // line 119
        echo "
";
        // line 121
        $this->loadTemplate(((($context["base_path"] ?? null) . ($context["directory"] ?? null)) . "/templates/pages/includes/site_footer.html.twig"), "themes/custom/commerce_2_demo/templates/pages/page--products.html.twig", 121)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/commerce_2_demo/templates/pages/page--products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 121,  179 => 119,  172 => 113,  166 => 111,  163 => 110,  157 => 108,  154 => 107,  148 => 105,  145 => 104,  139 => 102,  137 => 101,  134 => 100,  129 => 97,  126 => 96,  119 => 92,  115 => 90,  113 => 89,  109 => 88,  105 => 86,  102 => 84,  92 => 77,  85 => 73,  77 => 68,  71 => 64,  69 => 63,  66 => 61,  64 => 59,  61 => 57,  59 => 56,  57 => 55,  55 => 53,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/commerce_2_demo/templates/pages/page--products.html.twig", "/var/www/drupalvm/drupal/web/themes/custom/commerce_2_demo/templates/pages/page--products.html.twig");
    }
}
