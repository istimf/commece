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

/* /themes/custom/commerce_2_demo/templates/pages/includes/site_header.html.twig */
class __TwigTemplate_1dd2f9c7b762326d8a5b9c77623b2ffe07641d93a8e8c75a37a13228cc90a7db extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 2, "if" => 5];
        $filters = ["t" => 15];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['t'],
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
        // line 2
        $context["site_logo_url"] = (($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))) . "/gfx/logo.svg");
        // line 3
        echo "
";
        // line 5
        if ($this->getAttribute(($context["page"] ?? null), "mobile_nav", [])) {
            // line 6
            echo "  ";
            if ($this->getAttribute(($context["page"] ?? null), "site_search", [])) {
                // line 7
                echo "    <div class=\"mobile-overlay mobile-search-overlay\">
      <div class=\"mobile-search-overlay__content mobile-overlay__content\">
        <a href=\"#\" class=\"mobile-search-overlay__close mobile-overlay__close\">
          <span class=\"fa fa-times\" aria-hidden=\"true\"></span>
        </a>

        <div class=\"mobile-search-form\">
          ";
                // line 14
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "site_search", [])), "html", null, true);
                echo "
          <a class=\"mobile-search-form__submit\" href=\"#\" title=\"";
                // line 15
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Search"));
                echo "\">
            <span class=\"fa fa-search\" aria-hidden=\"true\"></span>
          </a>
        </div>
      </div>
    </div>
  ";
            }
            // line 22
            echo "
  <div class=\"mobile-overlay mobile-nav-overlay\">
    <div class=\"mobile-nav-overlay__content mobile-overlay__content clearfix\">
      <header class=\"mobile-nav-overlay__header clearfix\" role=\"banner\">
        <a href=\"#\" class=\"mobile-nav-overlay__close mobile-overlay__close\">
          <span class=\"fa fa-times\" aria-hidden=\"true\"></span>
        </a>
      </header>

      <div class=\"mobile-nav\">
        ";
            // line 32
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "mobile_nav", [])), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 38
        echo "
<header class=\"site-header\">
  ";
        // line 41
        echo "  <div class=\"site-header__top-bar\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12 col-lg-6 site-header__top-bar--left\">
          ";
        // line 45
        if ($this->getAttribute(($context["page"] ?? null), "header_promo", [])) {
            // line 46
            echo "            ";
            // line 47
            echo "            <div class=\"site-header__promo\">
              ";
            // line 48
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_promo", [])), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 51
        echo "        </div>

        <div class=\"hidden-xs col-md-12 col-lg-6 site-header__top-bar--right\">
          ";
        // line 54
        if ($this->getAttribute(($context["page"] ?? null), "header_nav", [])) {
            // line 55
            echo "            ";
            // line 56
            echo "            <div class=\"site-header-nav\">
              ";
            // line 57
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_nav", [])), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 60
        echo "
          ";
        // line 61
        if ($this->getAttribute(($context["page"] ?? null), "language_select", [])) {
            // line 62
            echo "            ";
            // line 63
            echo "            <div class=\"site-header__language-select\">
              ";
            // line 64
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "language_select", [])), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 67
        echo "        </div>
      </div>
    </div>
  </div>

  ";
        // line 73
        echo "  <div class=\"site-header__top container\">
    <div class=\"row\">
      <div class=\"col-xs-8 col-sm-5 col-md-5\">
        ";
        // line 77
        echo "        <div class=\"site-header__logo\">
          <a href=\"";
        // line 78
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
        echo "\">
            <img src=\"";
        // line 79
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo_url"] ?? null)), "html", null, true);
        echo "\" alt=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((($context["site_name"] ?? null)) ? (($context["site_name"] ?? null)) : ("")), "html", null, true);
        echo "\" />
          </a>
        </div>
      </div>

      <div class=\"col-xs-4 col-sm-7 col-md-7 site-header__main\">
        <div class=\"hidden-xs site-header__main-left\">
          ";
        // line 87
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 88
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
          ";
        }
        // line 90
        echo "        </div>

        <div class=\"hidden-xs site-header__main-right\">
          ";
        // line 94
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "header_right", [])) {
            // line 95
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_right", [])), "html", null, true);
            echo "
          ";
        }
        // line 97
        echo "        </div>

        ";
        // line 100
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "mobile_nav", [])) {
            // line 101
            echo "          <div class=\"mobile-control-nav visible-xs-block\">
            <ul class=\"menu clearfix\">
              <li class=\"menu__item menu__item--search\">
                <a href=\"#\" class=\"menu__link\" title=\"";
            // line 104
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Search"));
            echo "\">
                  <span aria-hidden=\"true\" class=\"fa fa-search\"></span>
                </a>
              </li>
              <li class=\"menu__item menu__item--menu\">
                <a href=\"#\" class=\"menu__link\" title=\"";
            // line 109
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Menu"));
            echo "\">
                  <span aria-hidden=\"true\" class=\"fa fa-bars\"></span>
                </a>
              </li>
            </ul>
          </div>
        ";
        }
        // line 116
        echo "        ";
        // line 117
        echo "
        ";
        // line 119
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "site_search", [])) {
            // line 120
            echo "          <div class=\"hidden-xs site-header__search\">
            ";
            // line 121
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "site_search", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 124
        echo "      </div>
    </div>
  </div>

  ";
        // line 129
        echo "  <div class=\"site-header__bottom\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
        // line 133
        if ($this->getAttribute(($context["page"] ?? null), "primary_nav", [])) {
            // line 134
            echo "           ";
            // line 135
            echo "            <div class=\"primary-nav hidden-xs\">
              ";
            // line 136
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_nav", [])), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 139
        echo "        </div>
      </div>
    </div>
  </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "/themes/custom/commerce_2_demo/templates/pages/includes/site_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 139,  285 => 136,  282 => 135,  280 => 134,  278 => 133,  272 => 129,  266 => 124,  260 => 121,  257 => 120,  254 => 119,  251 => 117,  249 => 116,  239 => 109,  231 => 104,  226 => 101,  223 => 100,  219 => 97,  213 => 95,  210 => 94,  205 => 90,  199 => 88,  196 => 87,  184 => 79,  180 => 78,  177 => 77,  172 => 73,  165 => 67,  159 => 64,  156 => 63,  154 => 62,  152 => 61,  149 => 60,  143 => 57,  140 => 56,  138 => 55,  136 => 54,  131 => 51,  125 => 48,  122 => 47,  120 => 46,  118 => 45,  112 => 41,  108 => 38,  100 => 32,  88 => 22,  78 => 15,  74 => 14,  65 => 7,  62 => 6,  60 => 5,  57 => 3,  55 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/themes/custom/commerce_2_demo/templates/pages/includes/site_header.html.twig", "/var/www/drupalvm/drupal/web/themes/custom/commerce_2_demo/templates/pages/includes/site_header.html.twig");
    }
}
