<?php

/* ajaxadsearchresults.html.twig */
class __TwigTemplate_678993e822a7b925a0e7742ad14e830e478d0cc57f3ddef2255a70f2a5d94d42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->loadTemplate("panelSearchResultsAds.html.twig", "ajaxadsearchresults.html.twig", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "ajaxadsearchresults.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include 'panelSearchResultsAds.html.twig' %}
", "ajaxadsearchresults.html.twig", "C:\\xampp\\htdocs\\phpproject\\templates\\ajaxadsearchresults.html.twig");
    }
}
