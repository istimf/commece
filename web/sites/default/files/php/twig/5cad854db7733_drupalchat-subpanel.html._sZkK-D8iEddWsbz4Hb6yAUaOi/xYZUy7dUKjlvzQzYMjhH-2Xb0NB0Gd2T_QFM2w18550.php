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

/* modules/contrib/drupalchat/templates/drupalchat-subpanel.html.twig */
class __TwigTemplate_39c28a7ea8203dc757e5935150f43b7400ff0316ad5059019819db9c5458ab8d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 3];
        $filters = ["raw" => 7];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['raw'],
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
        // line 1
        echo "<a href=\"#\" class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["subpanel"] ?? null), "name", [])), "html", null, true);
        echo " subpanel_toggle\">
  <span class=\"subpanel_title_text\">
      ";
        // line 3
        if ($this->getAttribute(($context["subpanel"] ?? null), "icon", [], "any", true, true)) {
            // line 4
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["subpanel"] ?? null), "icon", [])), "html", null, true);
            echo "
      ";
        }
        // line 6
        echo "      ";
        if ($this->getAttribute(($context["subpanel"] ?? null), "text", [], "any", true, true)) {
            // line 7
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["subpanel"] ?? null), "text", [])));
            echo "
      ";
        }
        // line 9
        echo "  </span>
</a>
<div class=\"subpanel\">
    ";
        // line 12
        if ($this->getAttribute(($context["subpanel"] ?? null), "header", [], "any", true, true)) {
            // line 13
            echo "        <div class=\"subpanel_title\">
            ";
            // line 14
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["subpanel"] ?? null), "header", [])), "html", null, true);
            echo "
            <span class=\"options\"></span>
            <span class=\"min\">_</span>
        </div>
    ";
        }
        // line 19
        echo "    ";
        if ($this->getAttribute(($context["subpanel"] ?? null), "contents", [], "any", true, true)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["subpanel"] ?? null), "contents", [])));
            echo "
    ";
            // line 21
            if ($this->getAttribute(($context["subpanel"] ?? null), "footer", [], "any", true, true)) {
                // line 22
                echo "        ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["subpanel"] ?? null), "footer", [])));
                echo "
    ";
            }
            // line 24
            echo "    ";
        }
        // line 25
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "modules/contrib/drupalchat/templates/drupalchat-subpanel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 25,  112 => 24,  106 => 22,  104 => 21,  99 => 20,  96 => 19,  88 => 14,  85 => 13,  83 => 12,  78 => 9,  72 => 7,  69 => 6,  63 => 4,  61 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/drupalchat/templates/drupalchat-subpanel.html.twig", "/var/www/drupalvm/drupal/web/modules/contrib/drupalchat/templates/drupalchat-subpanel.html.twig");
    }
}
