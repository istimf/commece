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

/* themes/custom/commerce_2_demo/templates/commerce/commerce-product.html.twig */
class __TwigTemplate_8220b4555ae69dad353c3e519e92b85582128baab525a7d004f70ae456a506cf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 24, "set" => 27, "for" => 108];
        $filters = ["clean_class" => 30, "t" => 38, "trim" => 42, "render" => 42, "image_style" => 64, "length" => 98];
        $functions = ["attach_library" => 95, "file_url" => 121];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['clean_class', 't', 'trim', 'render', 'image_style', 'length'],
                ['attach_library', 'file_url']
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
        // line 22
        echo "
";
        // line 24
        if ((($context["view_mode"] ?? null) == "teaser")) {
            // line 25
            echo "
  ";
            // line 27
            $context["classesTeaser"] = [0 => "product", 1 => "product--teaser", 2 => ("product--teaser--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(            // line 30
($context["product_entity"] ?? null), "title", []), "value", []))))];
            // line 33
            echo "
  <a href=\"";
            // line 34
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["product_url"] ?? null)), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classesTeaser"] ?? null)], "method")), "html", null, true);
            echo " aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["product_entity"] ?? null), "title", []), "value", [])), "html", null, true);
            echo "\">
    <div class=\"product__thumbnail\">
      ";
            // line 36
            if ($this->getAttribute($this->getAttribute(($context["product"] ?? null), "field_add_on_products", []), "#items", [], "array")) {
                // line 37
                echo "        <div class=\"add-on-item__teaser-flag\">
          ";
                // line 38
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Bundle<br>Available!"));
                echo "
        </div>
      ";
            }
            // line 41
            echo "
      ";
            // line 42
            if ( !twig_test_empty(twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["product"] ?? null), "field_catalog_image", []))))) {
                // line 43
                echo "        ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_catalog_image", [])), "html", null, true);
                echo "
      ";
            } else {
                // line 45
                echo "        <img src=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
                echo "/gfx/logo-icon.svg\" class=\"no-product-thumbnail\" alt=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["product_entity"] ?? null), "title", []), "value", [])), "html", null, true);
                echo "\" />
      ";
            }
            // line 47
            echo "    </div>

    ";
            // line 49
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["product"] ?? null), "variation_field_original_price", []), 0, [], "array"), "#markup", [], "array")) {
                // line 50
                echo "      ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "variation_field_original_price", [])), "html", null, true);
                echo "
    ";
            }
            // line 52
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "variation_list_price", [])), "html", null, true);
            echo "
    ";
            // line 53
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "variation_price", [])), "html", null, true);
            echo "
    ";
            // line 54
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "title", [])), "html", null, true);
            echo "
    ";
            // line 55
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_brand", [])), "html", null, true);
            echo "
    ";
            // line 56
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_artist", [])), "html", null, true);
            echo "
  </a>

";
        } elseif ((        // line 60
($context["view_mode"] ?? null) == "image_for_pos")) {
            // line 61
            echo "
  <div class=\"commerce-pos-autocomplete-results__image\">
    ";
            // line 63
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["product_entity"] ?? null), "field_catalog_image", []), "entity", []), "uri", []), "value", [])) {
                // line 64
                echo "      <img src=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->imageStyle($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["product_entity"] ?? null), "field_catalog_image", []), "entity", []), "uri", []), "value", [])), "thumbnail"), "html", null, true);
                echo "\" alt=\"\" />
    ";
            } else {
                // line 66
                echo "      <img src=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
                echo "/gfx/image-for-pos/image_placeholder.jpg\" alt=\"\" />
    ";
            }
            // line 68
            echo "  </div>

";
        } else {
            // line 72
            echo "
  ";
            // line 74
            $context["classesFull"] = [0 => "product", 1 => "product--full", 2 => ("product--full--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(            // line 77
($context["product_entity"] ?? null), "title", []), "value", []))))];
            // line 80
            echo "
  <article";
            // line 81
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classesFull"] ?? null)], "method")), "html", null, true);
            echo ">
    <div class=\"row\">
      <div class=\"col-xs-12 back-and-share\">
        ";
            // line 85
            echo "        <a href=\"/products\" class=\"back-to-products\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Back to Products"));
            echo "</a>

        ";
            // line 88
            echo "        <div class=\"sharethis-inline-share-buttons\"></div>
      </div>
    </div>

    <div class=\"row\">
      ";
            // line 93
            if (($context["product_variation_images"] ?? null)) {
                // line 94
                echo "        ";
                // line 95
                echo "        ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("magnific_popup/magnific_popup"), "html", null, true);
                echo "

        ";
                // line 98
                echo "        ";
                if (((twig_length_filter($this->env, ($context["product_variation_images"] ?? null)) <= 1) || ($this->getAttribute(($context["product_entity"] ?? null), "bundle", []) == "mason_jar"))) {
                    // line 99
                    echo "          ";
                    $context["product_slider_class"] = "product-slider product-slider--no-thumbnails";
                    // line 100
                    echo "        ";
                } else {
                    // line 101
                    echo "          ";
                    $context["product_slider_class"] = "product-slider";
                    // line 102
                    echo "        ";
                }
                // line 103
                echo "
        <div class=\"col-sm-12 col-md-6\">
          ";
                // line 106
                echo "          <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["product_slider_class"] ?? null)), "html", null, true);
                echo "\">
            <div class=\"product-slider__main-slider\">
              ";
                // line 108
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["product_variation_images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product_variation"]) {
                    // line 109
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product_variation"], "images", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_variation_image"]) {
                        // line 110
                        echo "                  ";
                        // line 111
                        echo "                  ";
                        // line 112
                        $context["product_slider_image_thumbnail"] = ["#theme" => "image_style", "#style_name" => "product_large", "#uri" => $this->getAttribute($this->getAttribute($this->getAttribute(                        // line 115
$context["product_variation_image"], "entity", []), "uri", []), "value", []), "#alt" => $this->getAttribute(                        // line 116
$context["product_variation_image"], "alt", [])];
                        // line 119
                        echo "                  <div>
                    <div class=\"product-slider__main-slider__item\">
                      <a href=\"";
                        // line 121
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["product_variation_image"], "entity", []), "uri", []), "value", []))]), "html", null, true);
                        echo "\" class=\"magnific-popup-gallery\">
                        <span>";
                        // line 122
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["product_slider_image_thumbnail"] ?? null)), "html", null, true);
                        echo "</span>
                      </a>
                    </div>
                  </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_variation_image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 127
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_variation'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 128
                echo "            </div>

            ";
                // line 131
                echo "            <div class=\"product-slider__nav-slider\">
              ";
                // line 132
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["product_variation_images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product_variation"]) {
                    // line 133
                    echo "                ";
                    if ($this->getAttribute($context["product_variation"], "variation_id", [])) {
                        // line 134
                        echo "                  ";
                        $context["product_variation_id"] = $this->getAttribute($context["product_variation"], "variation_id", []);
                        // line 135
                        echo "                ";
                    } else {
                        // line 136
                        echo "                  ";
                        $context["product_variation_id"] = "";
                        // line 137
                        echo "                ";
                    }
                    // line 138
                    echo "
                ";
                    // line 139
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product_variation"], "images", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_variation_image"]) {
                        // line 140
                        echo "                  ";
                        // line 141
                        echo "                  ";
                        // line 142
                        $context["product_slider_image_thumbnail"] = ["#theme" => "image_style", "#style_name" => "product_thumb", "#uri" => $this->getAttribute($this->getAttribute($this->getAttribute(                        // line 145
$context["product_variation_image"], "entity", []), "uri", []), "value", []), "#alt" => $this->getAttribute(                        // line 146
$context["product_variation_image"], "alt", [])];
                        // line 149
                        echo "                  <div>
                    <a class=\"product-slider__nav-slider__item\" data-product-variation-id=\"";
                        // line 150
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["product_variation_id"] ?? null)), "html", null, true);
                        echo "\">
                      <span>";
                        // line 151
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["product_slider_image_thumbnail"] ?? null)), "html", null, true);
                        echo "</span>
                    </a>
                  </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_variation_image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 155
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_variation'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 156
                echo "            </div>
          </div>
        </div>
        ";
                // line 160
                echo "        <div class=\"col-sm-12 col-md-6\">
          <div class=\"product__intro\">
      ";
            } else {
                // line 163
                echo "        ";
                // line 164
                echo "        <div class=\"col-sm-12\">
          <div class=\"product__intro product__intro--full-width\">
      ";
            }
            // line 167
            echo "
            ";
            // line 168
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_brand", [])), "html", null, true);
            echo "
            ";
            // line 169
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_artist", [])), "html", null, true);
            echo "
            <h1 class=\"page-title\">";
            // line 170
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["product_entity"] ?? null), "title", []), "value", [])), "html", null, true);
            echo "</h1>
            ";
            // line 171
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "variation_list_price", [])), "html", null, true);
            echo "
            ";
            // line 172
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "variation_price", [])), "html", null, true);
            echo "
            ";
            // line 173
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_short_description", [])), "html", null, true);
            echo "

            ";
            // line 176
            echo "            ";
            if (($this->getAttribute(($context["product_entity"] ?? null), "bundle", []) == "audio_download")) {
                // line 177
                echo "              <strong>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Format:"));
                echo "</strong> ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Digital"));
                echo "
            ";
            }
            // line 179
            echo "
            ";
            // line 180
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "variations", [])), "html", null, true);
            echo "
          </div>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-sm-12\">
        ";
            // line 188
            echo "        <div class=\"additional-details\">
          ";
            // line 190
            echo "          <ul id=\"product-tabs\" class=\"nav nav-tabs\" role=\"tablist\">
            ";
            // line 191
            if (( !twig_test_empty(twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["product"] ?? null), "body", [])))) ||  !twig_test_empty(twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["product"] ?? null), "field_album_samples", [])))))) {
                // line 192
                echo "              <li role=\"presentation\">
                <a href=\"#description\" aria-controls=\"description\" role=\"tab\" data-toggle=\"tab\">
                  ";
                // line 194
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Description"));
                echo "
                </a>
              </li>
            ";
            }
            // line 198
            echo "
            ";
            // line 199
            if ( !twig_test_empty(twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["product"] ?? null), "field_specifications", []))))) {
                // line 200
                echo "              <li role=\"presentation\">
                <a href=\"#specifications\" aria-controls=\"specifications\" role=\"tab\" data-toggle=\"tab\">
                  ";
                // line 202
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Specifications"));
                echo "
                </a>
              </li>
            ";
            }
            // line 206
            echo "
            <li role=\"presentation\">
              <a href=\"#reviews\" aria-controls=\"reviews\" role=\"tab\" data-toggle=\"tab\">
                ";
            // line 209
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Reviews"));
            echo " <span class=\"badge\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["product_reviews_count"] ?? null)), "html", null, true);
            echo "</span>
              </a>
            </li>
          </ul>

          ";
            // line 215
            echo "          <div class=\"tab-content\">
            ";
            // line 216
            if ( !twig_test_empty(twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["product"] ?? null), "body", []))))) {
                // line 217
                echo "              <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"description\">
                ";
                // line 218
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "body", [])), "html", null, true);
                echo "

                ";
                // line 220
                if ( !twig_test_empty(twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["product"] ?? null), "field_album_samples", []))))) {
                    // line 221
                    echo "                  <h2>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Samples"));
                    echo "</h2>

                  ";
                    // line 224
                    echo "                  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["product_entity"] ?? null), "field_album_samples", []), "entity", []), "field_media_audio_file", []));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["media_entity"]) {
                        // line 225
                        echo "                    ";
                        // line 226
                        echo "                    ";
                        $context["media_title"] = (((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["media_entity"], "value", []), "description", []))) > 0)) ? ($this->getAttribute($this->getAttribute($context["media_entity"], "value", []), "description", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute($context["media_entity"], "entity", []), "filename", []), "value", [])));
                        // line 227
                        echo "
                    <div class=\"audio__item\">
                      <div class=\"audio__title\"><div class=\"loop-index\">";
                        // line 229
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["loop"], "index", [])), "html", null, true);
                        echo "</div><span>";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_title"] ?? null)), "html", null, true);
                        echo "</span></div>

                      <div class=\"audio__player\">
                        <audio src=\"";
                        // line 232
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["media_entity"], "entity", []), "fileuri", []))]), "html", null, true);
                        echo "\" preload=\"auto\" controls></audio>
                      </div>
                    </div>
                  ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media_entity'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 236
                    echo "                ";
                }
                // line 237
                echo "              </div>
            ";
            }
            // line 239
            echo "
            ";
            // line 240
            if ( !twig_test_empty(twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["product"] ?? null), "field_specifications", []))))) {
                // line 241
                echo "              <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"specifications\">
                ";
                // line 242
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_specifications", [])), "html", null, true);
                echo "
              </div>
            ";
            }
            // line 245
            echo "
            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"reviews\">
              <input type=\"checkbox\" id=\"submit-review\">
              <label class=\"btn btn-primary btn-sm\" for=\"submit-review\">";
            // line 248
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submit a Review"));
            echo "</label>
              <div class=\"review-rating\">
                <p>";
            // line 250
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Overall Rating"));
            echo "</p>
                <span class=\"";
            // line 251
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["rating_average"] ?? null) >= 1)) ? ("filled") : ("")));
            echo "\"></span>
                <span class=\"half ";
            // line 252
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["rating_average"] ?? null) >= 1.5)) ? ("filled") : ("")));
            echo "\"></span>
                <span class=\"";
            // line 253
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["rating_average"] ?? null) >= 2)) ? ("filled") : ("")));
            echo "\"></span>
                <span class=\"half ";
            // line 254
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["rating_average"] ?? null) >= 2.5)) ? ("filled") : ("")));
            echo "\"></span>
                <span class=\"";
            // line 255
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["rating_average"] ?? null) >= 3)) ? ("filled") : ("")));
            echo "\"></span>
                <span class=\"half ";
            // line 256
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["rating_average"] ?? null) >= 3.5)) ? ("filled") : ("")));
            echo "\"></span>
                <span class=\"";
            // line 257
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["rating_average"] ?? null) >= 4)) ? ("filled") : ("")));
            echo "\"></span>
                <span class=\"half ";
            // line 258
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["rating_average"] ?? null) >= 4.5)) ? ("filled") : ("")));
            echo "\"></span>
                <span class=\"";
            // line 259
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["rating_average"] ?? null) == 5)) ? ("filled") : ("")));
            echo "\"></span>
              </div>
              ";
            // line 261
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_product_reviews", [])), "html", null, true);
            echo "
            </div>
          </div>
        </div>
        ";
            // line 266
            echo "      </div>
    </div>

    ";
            // line 270
            echo "    ";
            if ( !twig_test_empty(twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["product"] ?? null), "field_recommended_products", []))))) {
                // line 271
                echo "      <div class=\"row\">
        <div class=\"col-sm-12\">
          <div class=\"recommended-products\">
            ";
                // line 274
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_recommended_products", [])), "html", null, true);
                echo "
          </div>
        </div>
      </div>
    ";
            }
            // line 279
            echo "  </article>

";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/commerce_2_demo/templates/commerce/commerce-product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  630 => 279,  622 => 274,  617 => 271,  614 => 270,  609 => 266,  602 => 261,  597 => 259,  593 => 258,  589 => 257,  585 => 256,  581 => 255,  577 => 254,  573 => 253,  569 => 252,  565 => 251,  561 => 250,  556 => 248,  551 => 245,  545 => 242,  542 => 241,  540 => 240,  537 => 239,  533 => 237,  530 => 236,  512 => 232,  504 => 229,  500 => 227,  497 => 226,  495 => 225,  477 => 224,  471 => 221,  469 => 220,  464 => 218,  461 => 217,  459 => 216,  456 => 215,  446 => 209,  441 => 206,  434 => 202,  430 => 200,  428 => 199,  425 => 198,  418 => 194,  414 => 192,  412 => 191,  409 => 190,  406 => 188,  396 => 180,  393 => 179,  385 => 177,  382 => 176,  377 => 173,  373 => 172,  369 => 171,  365 => 170,  361 => 169,  357 => 168,  354 => 167,  349 => 164,  347 => 163,  342 => 160,  337 => 156,  331 => 155,  321 => 151,  317 => 150,  314 => 149,  312 => 146,  311 => 145,  310 => 142,  308 => 141,  306 => 140,  302 => 139,  299 => 138,  296 => 137,  293 => 136,  290 => 135,  287 => 134,  284 => 133,  280 => 132,  277 => 131,  273 => 128,  267 => 127,  256 => 122,  252 => 121,  248 => 119,  246 => 116,  245 => 115,  244 => 112,  242 => 111,  240 => 110,  235 => 109,  231 => 108,  225 => 106,  221 => 103,  218 => 102,  215 => 101,  212 => 100,  209 => 99,  206 => 98,  200 => 95,  198 => 94,  196 => 93,  189 => 88,  183 => 85,  177 => 81,  174 => 80,  172 => 77,  171 => 74,  168 => 72,  163 => 68,  157 => 66,  151 => 64,  149 => 63,  145 => 61,  143 => 60,  137 => 56,  133 => 55,  129 => 54,  125 => 53,  120 => 52,  114 => 50,  112 => 49,  108 => 47,  100 => 45,  94 => 43,  92 => 42,  89 => 41,  83 => 38,  80 => 37,  78 => 36,  69 => 34,  66 => 33,  64 => 30,  63 => 27,  60 => 25,  58 => 24,  55 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/commerce_2_demo/templates/commerce/commerce-product.html.twig", "/var/www/drupalvm/drupal/web/themes/custom/commerce_2_demo/templates/commerce/commerce-product.html.twig");
    }
}
