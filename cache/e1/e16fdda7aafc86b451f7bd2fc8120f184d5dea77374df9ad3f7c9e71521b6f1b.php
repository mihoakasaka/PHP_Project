<?php

/* not_found.html.twig */
class __TwigTemplate_8757500fd6375ca09a6e114f1152edff39aea6295680702ef1634235c3634ed6 extends Twig_Template
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
        echo "<p>Not found</p>";
    }

    public function getTemplateName()
    {
        return "not_found.html.twig";
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
        return new Twig_Source("<p>Not found</p>", "not_found.html.twig", "C:\\xampp\\htdocs\\phproject\\templates\\not_found.html.twig");
    }
}
