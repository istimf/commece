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

/* themes/custom/commerce_2_demo/templates/pages/html.html.twig */
class __TwigTemplate_d8e22c1fcdcc56d4be7c3a0a06c01d8c563679f4a14b3f2734f9f34caab909cb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 27];
        $filters = ["clean_class" => 28, "raw" => 48, "safe_join" => 49, "t" => 71];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'raw', 'safe_join', 't'],
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
        // line 27
        $context["html_classes"] = [0 => (( !        // line 28
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null)))))), 1 => ((        // line 29
($context["current_path"] ?? null)) ? (("path" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["current_path"] ?? null))))) : (""))];
        // line 33
        $context["body_classes"] = [0 => ((        // line 34
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 35
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null)))))), 2 => ((        // line 36
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null))))) : ("")), 3 => ((        // line 37
($context["db_offline"] ?? null)) ? ("db-offline") : ("")), 4 => ((        // line 38
($context["page_title"] ?? null)) ? (("page-title-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["page_title"] ?? null))))) : ("")), 5 => ((        // line 39
($context["current_path"] ?? null)) ? (("path" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["current_path"] ?? null))))) : ("")), 6 => ((        // line 40
($context["term_vocabulary"] ?? null)) ? (("term-vocab-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["term_vocabulary"] ?? null))))) : ("")), 7 => ((        // line 41
($context["term_name"] ?? null)) ? (("term-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["term_name"] ?? null))))) : ("")), 8 => ((        // line 42
($context["commerce_product_type"] ?? null)) ? (("page-product-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["commerce_product_type"] ?? null))))) : (""))];
        // line 45
        echo "<!DOCTYPE html>
<html";
        // line 46
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["html_attributes"] ?? null), "addClass", [0 => ($context["html_classes"] ?? null)], "method")), "html", null, true);
        echo ">
  <head>
    <head-placeholder token=\"";
        // line 48
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
    <title>";
        // line 49
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null)), " | "));
        echo "</title>
    <css-placeholder token=\"";
        // line 50
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
    <js-placeholder token=\"";
        // line 51
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
    ";
        // line 53
        echo "    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i|Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto+Slab:700|Playfair+Display:400,700|Love+Ya+Like+A+Sister\" rel=\"stylesheet\">
    ";
        // line 55
        echo "    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/apple-touch-icon.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"/favicon-32x32.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"/favicon-16x16.png\">
    <link rel=\"manifest\" href=\"/manifest.json\">
    <link rel=\"mask-icon\" href=\"/safari-pinned-tab.svg\" color=\"#5bbad5\">
    <meta name=\"theme-color\" content=\"#ffffff\">
    ";
        // line 62
        echo "    <meta name=\"robots\" content=\"noindex, nofollow, noarchive, noimageindex\">
    <meta name=\"googlebot\" content=\"noindex, nofollow, noarchive, nosnippet, noimageindex\">
    ";
        // line 65
        echo "    <script type=\"text/javascript\" src=\"//platform-api.sharethis.com/js/sharethis.js#property=591c6fb6c3c43c0017f5dfe0&product=inline-share-buttons\"></script>
  </head>

  <body";
        // line 68
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method")), "html", null, true);
        echo ">
    <div id=\"mobile-overlay\"></div>
    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 71
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 74
        echo "    <button type=\"button\" class=\"btn btn-primary fixed-button help-modal\" data-toggle=\"modal\" data-target=\"#help\" title=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Learn more about this demo"));
        echo "\">
      <i class=\"fa fa-question-circle fa-lg\"></i>
    </button>
    ";
        // line 78
        echo "    <button type=\"button\" class=\"btn btn-primary fixed-button feature-beacon-toggle\" title=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle feature icons"));
        echo "\">
      <i class=\"fa fa-star-o fa-lg\"></i>
    </button>
    ";
        // line 81
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null)), "html", null, true);
        echo "
    ";
        // line 82
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null)), "html", null, true);
        echo "
    ";
        // line 83
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null)), "html", null, true);
        echo "
    <js-bottom-placeholder token=\"";
        // line 84
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/commerce_2_demo/templates/pages/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 84,  147 => 83,  143 => 82,  139 => 81,  132 => 78,  125 => 74,  120 => 71,  114 => 68,  109 => 65,  105 => 62,  97 => 55,  94 => 53,  90 => 51,  86 => 50,  82 => 49,  78 => 48,  73 => 46,  70 => 45,  68 => 42,  67 => 41,  66 => 40,  65 => 39,  64 => 38,  63 => 37,  62 => 36,  61 => 35,  60 => 34,  59 => 33,  57 => 29,  56 => 28,  55 => 27,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/commerce_2_demo/templates/pages/html.html.twig", "/var/www/drupalvm/drupal/web/themes/custom/commerce_2_demo/templates/pages/html.html.twig");
    }
}
