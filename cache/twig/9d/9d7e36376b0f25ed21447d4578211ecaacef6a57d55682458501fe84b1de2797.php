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

/* modular/complex.html.twig */
class __TwigTemplate_8ec0e584ffa3dcafe6ee9824f9efd72a5631e5551132a8b39cd60633ca718b6c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("grid-size");
        // line 2
        $context["columns"] = "col-12 col-md-12 col-sm-12";
        // line 3
        $context["firstImage"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        // line 4
        echo "


<section class=\"section modular-complex ";
        // line 7
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "class", []);
        echo " ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        echo "\">

        <section class=\"container ";
        // line 9
        echo ($context["grid_size"] ?? null);
        echo "\">
            <div class=\"complex-header ";
        // line 10
        echo (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "image_align", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "image_align", []), "align-right")) : ("align-right"));
        echo "\">
               <div class=\"complex-header-content\">
                  <h2>
                     ";
        // line 13
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
        echo "
                  </h2>
                  <div>
                     ";
        // line 16
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, ($context["content"] ?? null));
        echo "
                  </div>
               </div>   
               ";
        // line 19
        if (($context["firstImage"] ?? null)) {
            echo "               
                  <div class=\"complex-header-image \">
                     ";
            // line 21
            echo $this->getAttribute(($context["firstImage"] ?? null), "html", []);
            echo "
                  </div>
               ";
        }
        // line 24
        echo "            </div>

            <div class=\"columns complex-rows\">
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "complex", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 28
            echo "                   <div class=\"row item-row ";
            echo ($context["columns"] ?? null);
            echo " ";
            echo $this->getAttribute($context["item"], "item_class", []);
            echo " ";
            echo (($this->getAttribute($context["item"], "image_align", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "image_align", []), "align-right")) : ("align-right"));
            echo "\">
                        ";
            // line 29
            if ($this->getAttribute($context["item"], "image", [])) {
                // line 30
                echo "                           <div class=\"column col-8 col-md-12\">
                                 <h3 class=\"item-header\">";
                // line 31
                echo $this->getAttribute($context["item"], "header", []);
                echo "</h3>
                                 <div class=\"item-text\">";
                // line 32
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->getAttribute($context["item"], "text", []));
                echo "</div>
                          </div>
                          <div class=\"column col-4 col-md-12 item-image\">
                              <img src=\"";
                // line 35
                echo $this->getAttribute(twig_first($this->env, $this->getAttribute($context["item"], "image", [])), "path", []);
                echo "\" alt=\"";
                echo $this->getAttribute($context["item"], "header", []);
                echo "\" class=\"img-fluid\">
                          </div>
                        ";
            } else {
                // line 38
                echo "                           <div class=\"column col-12\">
                              <h3 class=\"item-header\">";
                // line 39
                echo $this->getAttribute($context["item"], "header", []);
                echo "</h3>
                              <div class=\"item-text\">";
                // line 40
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->getAttribute($context["item"], "text", []));
                echo "</div>
                          </div>
                        ";
            }
            // line 43
            echo "                   </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </div>

        </section>

</section>
";
    }

    public function getTemplateName()
    {
        return "modular/complex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 45,  135 => 43,  129 => 40,  125 => 39,  122 => 38,  114 => 35,  108 => 32,  104 => 31,  101 => 30,  99 => 29,  90 => 28,  86 => 27,  81 => 24,  75 => 21,  70 => 19,  64 => 16,  58 => 13,  52 => 10,  48 => 9,  41 => 7,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set grid_size = theme_var('grid-size') %}
{% set columns = 'col-12 col-md-12 col-sm-12'  %}
{% set firstImage = page.media.images|first %}



<section class=\"section modular-complex {{ page.header.class}} {{ page.header.body_classes}}\">

        <section class=\"container {{ grid_size }}\">
            <div class=\"complex-header {{ page.header.image_align|default('align-right') }}\">
               <div class=\"complex-header-content\">
                  <h2>
                     {{ page.header.title }}
                  </h2>
                  <div>
                     {{ content|markdown }}
                  </div>
               </div>   
               {% if firstImage %}               
                  <div class=\"complex-header-image \">
                     {{ firstImage.html|raw }}
                  </div>
               {% endif %}
            </div>

            <div class=\"columns complex-rows\">
                {% for item in page.header.complex %}
                   <div class=\"row item-row {{ columns }} {{ item.item_class }} {{ item.image_align|default('align-right') }}\">
                        {% if item.image %}
                           <div class=\"column col-8 col-md-12\">
                                 <h3 class=\"item-header\">{{ item.header }}</h3>
                                 <div class=\"item-text\">{{ item.text|markdown }}</div>
                          </div>
                          <div class=\"column col-4 col-md-12 item-image\">
                              <img src=\"{{ item.image|first.path }}\" alt=\"{{ item.header }}\" class=\"img-fluid\">
                          </div>
                        {% else %}
                           <div class=\"column col-12\">
                              <h3 class=\"item-header\">{{ item.header }}</h3>
                              <div class=\"item-text\">{{ item.text|markdown }}</div>
                          </div>
                        {% endif %}
                   </div>
                {% endfor %}
            </div>

        </section>

</section>
", "modular/complex.html.twig", "C:\\xampp\\htdocs\\inurb\\user\\themes\\quark\\templates\\modular\\complex.html.twig");
    }
}
