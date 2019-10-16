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

/* partials/backtotop.html.twig */
class __TwigTemplate_f81910758e8745126b1c3c70224bbd8b9b97789a5a55a71c42be931a30ac010d extends \Twig\Template
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
        echo "<a href=\"javascript:\" id=\"return-to-top\"> <i>&nbsp;&nbsp;&nbsp;&nbsp;</i> </a>
";
    }

    public function getTemplateName()
    {
        return "partials/backtotop.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<a href=\"javascript:\" id=\"return-to-top\"> <i>&nbsp;&nbsp;&nbsp;&nbsp;</i> </a>
", "partials/backtotop.html.twig", "C:\\xampp\\htdocs\\inurb\\user\\plugins\\backtotop\\templates\\partials\\backtotop.html.twig");
    }
}
