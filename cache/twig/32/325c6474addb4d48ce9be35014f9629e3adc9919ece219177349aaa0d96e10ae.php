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

/* partials/footer.html.twig */
class __TwigTemplate_794cfd46efa070eaa271a66c7b1adecf7fd65b92b4b623b8ac506bdbb7b99d1d extends \Twig\Template
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
        $context["currentYear"] = twig_date_format_filter($this->env, ($context["now"] ?? null), "Y");
        // line 2
        echo "
<section id=\"footer\" class=\"section bg-gray\">
    <section class=\"container ";
        // line 4
        echo ($context["grid_size"] ?? null);
        echo "\">
        <p>";
        // line 5
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo " &copy; ";
        echo ($context["currentYear"] ?? null);
        echo " - Todos os direitos reservados.</p>
    </section>
</section>

";
        // line 10
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "backtotop", []), "enabled", [])) {
            // line 11
            echo "    ";
            $this->loadTemplate("partials/backtotop.html.twig", "partials/footer.html.twig", 11)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 11,  49 => 10,  40 => 5,  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set currentYear = now|date(\"Y\") %}

<section id=\"footer\" class=\"section bg-gray\">
    <section class=\"container {{ grid_size }}\">
        <p>{{ site.title }} &copy; {{ currentYear }} - Todos os direitos reservados.</p>
    </section>
</section>

{# Render the backtotop link #}
{% if config.plugins.backtotop.enabled %}
    {% include 'partials/backtotop.html.twig' %}
{% endif %}", "partials/footer.html.twig", "C:\\xampp\\htdocs\\inurb\\user\\themes\\quark\\templates\\partials\\footer.html.twig");
    }
}
