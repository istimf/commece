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

/* /themes/custom/commerce_2_demo/templates/pages/includes/site_footer.html.twig */
class __TwigTemplate_d0ba66f8cf163652a646ba2c1574adff16dd7ff0b2cbe51156268d7115d6deb9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 2, "if" => 19, "trans" => 157];
        $filters = ["t" => 79, "date" => 114];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['t', 'date'],
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
        $context["site_logo_icon_url"] = (($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))) . "/gfx/logo-icon.svg");
        // line 3
        $context["acro_media_logo_url"] = (($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))) . "/gfx/acro-media-logo.svg");
        // line 4
        echo "
<footer class=\"site-footer\">
  <div class=\"container\">
    ";
        // line 8
        echo "    <div class=\"site-footer__top\">
      <div class=\"row\">
        <div class=\"col-xs-12 col-sm-6\">
          ";
        // line 12
        echo "          <div class=\"site-footer__logo\">
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
        echo "\">
              <img src=\"";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo_icon_url"] ?? null)), "html", null, true);
        echo "\" alt=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((($context["site_name"] ?? null)) ? (($context["site_name"] ?? null)) : ("")), "html", null, true);
        echo "\" />
            </a>
          </div>

          ";
        // line 19
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_top", [])) {
            // line 20
            echo "            <div class=\"site-footer__contact\">
              ";
            // line 21
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top", [])), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 24
        echo "        </div>

        <div class=\"col-xs-12 col-sm-6\">
          ";
        // line 28
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "social_nav", [])) {
            // line 29
            echo "            <div class=\"social-media-nav\">
              ";
            // line 30
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "social_nav", [])), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 33
        echo "        </div>
      </div>
    </div>

    ";
        // line 38
        echo "    <div class=\"site-footer__main\">
      <div class=\"row\">
        <div class=\"col-xs-12 col-md-3 col-lg-4\">
          ";
        // line 42
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 43
            echo "            <div class=\"\">
              ";
            // line 44
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 47
        echo "        </div>

        <div class=\"hidden-xs hidden-sm col-md-9 col-lg-8\">
          ";
        // line 50
        if ($this->getAttribute(($context["page"] ?? null), "primary_nav", [])) {
            // line 51
            echo "            ";
            // line 52
            echo "            <div class=\"footer-main-nav\">
              ";
            // line 53
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_nav", [])), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 56
        echo "
          ";
        // line 57
        if ($this->getAttribute(($context["page"] ?? null), "special_nav", [])) {
            // line 58
            echo "            ";
            // line 59
            echo "            <div class=\"footer-main-nav\">
              ";
            // line 60
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "special_nav", [])), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 63
        echo "
          ";
        // line 64
        if ($this->getAttribute(($context["page"] ?? null), "header_nav", [])) {
            // line 65
            echo "            ";
            // line 66
            echo "            <div class=\"footer-main-nav\">
              ";
            // line 67
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_nav", [])), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 70
        echo "        </div>
      </div>
    </div>

    ";
        // line 75
        echo "    <div class=\"site-footer__bottom\">
      <div class=\"row\">
        <div class=\"col-sm-12 col-md-5 site-footer__buttons\">
          ";
        // line 79
        echo "          <button type=\"button\" class=\"btn btn-primary feature-beacon-toggle\" title=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle feature icons"));
        echo "\">
            <i class=\"fa fa-star-o fa-lg\"></i> <span>";
        // line 80
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Hide Beacons"));
        echo "</span>
          </button>

          ";
        // line 84
        echo "          <button type=\"button\" class=\"btn btn-primary help-modal\" data-toggle=\"modal\" data-target=\"#help\" title=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Learn more abou this demo"));
        echo "\">
            <i class=\"fa fa-question-circle fa-lg\"></i> ";
        // line 85
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Help"));
        echo "
          </button>

          ";
        // line 89
        echo "          <div class=\"github\">
            <i class=\"fa fa-github fa-2x\"></i>
            <a href=\"https://github.com/AcroMedia/commerce-demo/blob/master/README.md\" target=\"_blank\" class=\"btn btn-default\">";
        // line 91
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("View source code"));
        echo " <i class=\"fa fa-angle-right\"></i></a>
            <a href=\"https://github.com/AcroMedia/commerce-demo/issues\" target=\"_blank\" class=\"btn btn-default\">";
        // line 92
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Report a bug"));
        echo " <i class=\"fa fa-angle-right\"></i></a>
          </div>
        </div>

        <div class=\"col-xs-12 col-md-7\">
          ";
        // line 98
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_nav", [])) {
            // line 99
            echo "            <div class=\"footer-nav\">
              ";
            // line 100
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_nav", [])), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 103
        echo "
          <div class=\"site-footer__credits\">
            ";
        // line 106
        echo "            <div class=\"site-footer__acro-logo\">
              <a href=\"https://www.acromedia.com\" target=\"_blank\" title=\"";
        // line 107
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Visit acromedia.com"));
        echo "\">
                <img src=\"";
        // line 108
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["acro_media_logo_url"] ?? null)), "html", null, true);
        echo "\" alt=\"Acro Media logo\" />
              </a>
            </div>

            ";
        // line 113
        echo "            <div class=\"site-footer__copyright\">
              ";
        // line 114
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Copyright &copy; @year", ["@year" => twig_date_format_filter($this->env, "now", "Y")]));
        echo "
              <a href=\"https://www.acromedia.com\" target=\"_blank\" title=\"";
        // line 115
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Visit acromedia.com"));
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Acro Media Inc."));
        echo "</a>
              ";
        // line 116
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("All rights reserved."));
        echo "
            </div>

            ";
        // line 120
        echo "            <div class=\"site-footer__credit-links\">
              <span>";
        // line 121
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Website design by"));
        echo " <a href=\"https://www.acromedia.com\" target=\"_blank\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("Acro Media Inc.");
        echo "</a></span>
              <span class=\"hidden-xs\"> &nbsp; | &nbsp; </span>
              <span>";
        // line 123
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Photos available from"));
        echo " <a href=\"https://www.unsplash.com\" target=\"_blank\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("Unsplash.com");
        echo "</a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

";
        // line 133
        echo "<div class=\"modal fade\" id=\"videoModal\" tabindex=\"-1\" role=\"dialog\" aria-label=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Watch this video"));
        echo "\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" id=\"headerClose\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
      </div>
      <div class=\"modal-body\"></div>
      <div class=\"modal-footer\">
        <button type=\"button\" id=\"footerClose\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 141
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Close"));
        echo "</button>
      </div>
    </div>
  </div>
</div>

";
        // line 148
        echo "<div class=\"modal fade\" id=\"help\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"helpLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" id=\"headerClose\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"helpLabel\"><i class=\"fa fa-question-circle fa-lg\"></i> ";
        // line 153
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Help"));
        echo "</h4>
      </div>
      <div class=\"modal-body\">
        <div class=\"help-form text-left\">
          ";
        // line 157
        echo t("<h3>Want to learn more?</h3>
          If you like what you’re seeing and want to learn more about leveraging Drupal and Drupal Commerce for your commerce solution, reach out to one of our business developers for more information.<br><br>", array());
        // line 161
        echo "
          <!--[if lte IE 8]>
          <script charset=\"utf-8\" type=\"text/javascript\" src=\"//js.hsforms.net/forms/v2-legacy.js\"></script>
          <![endif]-->
          <script charset=\"utf-8\" type=\"text/javascript\" src=\"//js.hsforms.net/forms/v2.js\"></script>
          <script>
            hbspt.forms.create({
              css: '',
              portalId: '1659229',
              formId: '4c37690f-26db-47d5-8e95-d9561e6f9594'
            });
          </script>

          <hr>

          ";
        // line 176
        echo t("<h3>Developer help</h3>
            Looking for community help with your Drupal Commerce project?<br><br>
            <ul>
              <li>Visit Acro Media's <a href=\"https://www.youtube.com/user/acromediainc\" target=\"_blank\">YouTube channel</a></li>
              <li>View this demo's <a href=\"https://github.com/AcroMedia/commerce-demo/blob/master/README.md\" target=\"_blank\">source code</a></li>
              <li>See the official <a href=\"https://docs.drupalcommerce.org/commerce2/getting-started/getting-help\" target=\"_blank\">Drupal Commerce help resources</a></li>
            </ul>", array());
        // line 185
        echo "        </div>
      </div>
      <div class=\"modal-footer\">
        <div class=\"modal-credits\">
          ";
        // line 189
        echo t("Drupal Commerce demo site by <a href=\"https://www.acromedia.com\" target=\"_blank\" title=\"Visit Acro Media's website\">Acro Media Inc.</a>", array());
        // line 192
        echo "        </div>

        <button type=\"button\" id=\"footerClose\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 194
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Close"));
        echo "</button>
      </div>
    </div>
  </div>
</div>

";
        // line 201
        if ($this->getAttribute(($context["page"] ?? null), "feature_beacon", [])) {
            // line 202
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "feature_beacon", [])), "html", null, true);
            echo "
";
        }
        // line 205
        echo "
";
        // line 206
        if ($this->getAttribute(($context["page"] ?? null), "access_gate", [])) {
            // line 208
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "access_gate", [])), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/themes/custom/commerce_2_demo/templates/pages/includes/site_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 208,  404 => 206,  401 => 205,  395 => 202,  393 => 201,  384 => 194,  380 => 192,  378 => 189,  372 => 185,  364 => 176,  347 => 161,  344 => 157,  337 => 153,  330 => 148,  321 => 141,  309 => 133,  295 => 123,  288 => 121,  285 => 120,  279 => 116,  273 => 115,  269 => 114,  266 => 113,  259 => 108,  255 => 107,  252 => 106,  248 => 103,  242 => 100,  239 => 99,  236 => 98,  228 => 92,  224 => 91,  220 => 89,  214 => 85,  209 => 84,  203 => 80,  198 => 79,  193 => 75,  187 => 70,  181 => 67,  178 => 66,  176 => 65,  174 => 64,  171 => 63,  165 => 60,  162 => 59,  160 => 58,  158 => 57,  155 => 56,  149 => 53,  146 => 52,  144 => 51,  142 => 50,  137 => 47,  131 => 44,  128 => 43,  125 => 42,  120 => 38,  114 => 33,  108 => 30,  105 => 29,  102 => 28,  97 => 24,  91 => 21,  88 => 20,  85 => 19,  76 => 14,  72 => 13,  69 => 12,  64 => 8,  59 => 4,  57 => 3,  55 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/themes/custom/commerce_2_demo/templates/pages/includes/site_footer.html.twig", "/var/www/drupalvm/drupal/web/themes/custom/commerce_2_demo/templates/pages/includes/site_footer.html.twig");
    }
}
