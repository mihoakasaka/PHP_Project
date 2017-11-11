<?php

/* ajaxusersearchresults.html.twig */
class __TwigTemplate_6f47ec2f5cf3f957e5b4fee993dcc0bc84487fc5857a9170ef801222ae154017 extends Twig_Template
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
        $this->loadTemplate("panelSearchResultsUsers.html.twig", "ajaxusersearchresults.html.twig", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "ajaxusersearchresults.html.twig";
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
        return new Twig_Source("{% include 'panelSearchResultsUsers.html.twig' %}
", "ajaxusersearchresults.html.twig", "C:\\xampp\\htdocs\\phpproject\\templates\\ajaxusersearchresults.html.twig");
    }
}
