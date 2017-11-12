<?php

/* ajaxcategorysearchresults.html.twig */
class __TwigTemplate_290ebba5368c70e2cc0435a5e2d6d34eb8369f0ee97c7999d4a7642130df382e extends Twig_Template
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
        $this->loadTemplate("panelSearchResultsCategories.html.twig", "ajaxcategorysearchresults.html.twig", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "ajaxcategorysearchresults.html.twig";
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
        return new Twig_Source("{% include 'panelSearchResultsCategories.html.twig' %}
", "ajaxcategorysearchresults.html.twig", "C:\\xampp\\htdocs\\phpproject\\templates\\ajaxcategorysearchresults.html.twig");
    }
}
