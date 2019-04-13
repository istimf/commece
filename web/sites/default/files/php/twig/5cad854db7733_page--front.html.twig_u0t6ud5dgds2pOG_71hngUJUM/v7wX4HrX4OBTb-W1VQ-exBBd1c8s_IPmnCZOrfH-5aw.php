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

/* themes/custom/commerce_2_demo/templates/pages/page--front.html.twig */
class __TwigTemplate_12883393e03d878ac00ce2c58ac816e8a888f5ad3dc71b543822920fe61d895a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 13, "if" => 16];
        $filters = ["without" => 36];
        $functions = ["attach_library" => 18];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['without'],
                ['attach_library']
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
        // line 13
        $this->loadTemplate(((($context["base_path"] ?? null) . ($context["directory"] ?? null)) . "/templates/pages/includes/site_header.html.twig"), "themes/custom/commerce_2_demo/templates/pages/page--front.html.twig", 13)->display($context);
        // line 15
        echo "
";
        // line 16
        if (($context["homepage_carousel_view"] ?? null)) {
            // line 17
            echo "  ";
            // line 18
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("commerce_2_demo/slider"), "html", null, true);
            echo "
  ";
            // line 19
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["homepage_carousel_view"] ?? null)), "html", null, true);
            echo "
";
        }
        // line 21
        echo "
";
        // line 23
        echo "<div class=\"site-content\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <main class=\"content__main-content clearfix\" role=\"main\">
          <div class=\"visually-hidden\"><a id=\"main-content\" tabindex=\"-1\"></a></div>
          ";
        // line 29
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 30
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
          ";
        }
        // line 32
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "above_content", [])) {
            // line 33
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "above_content", [])), "html", null, true);
            echo "
          ";
        }
        // line 35
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 36
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "system_main"), "html", null, true);
            echo "
          ";
        }
        // line 38
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "below_content", [])) {
            // line 39
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "below_content", [])), "html", null, true);
            echo "
          ";
        }
        // line 41
        echo "        </main>
      </div>
    </div>
  </div>
</div>
";
        // line 47
        echo "
";
        // line 49
        $this->loadTemplate(((($context["base_path"] ?? null) . ($context["directory"] ?? null)) . "/templates/pages/includes/site_footer.html.twig"), "themes/custom/commerce_2_demo/templates/pages/page--front.html.twig", 49)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/commerce_2_demo/templates/pages/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 49,  127 => 47,  120 => 41,  114 => 39,  111 => 38,  105 => 36,  102 => 35,  96 => 33,  93 => 32,  87 => 30,  85 => 29,  77 => 23,  74 => 21,  69 => 19,  64 => 18,  62 => 17,  60 => 16,  57 => 15,  55 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/commerce_2_demo/templates/pages/page--front.html.twig", "/var/www/drupalvm/drupal/web/themes/custom/commerce_2_demo/templates/pages/page--front.html.twig");
    }
}
