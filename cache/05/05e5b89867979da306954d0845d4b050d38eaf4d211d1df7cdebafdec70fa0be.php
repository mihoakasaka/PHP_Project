<?php

/* access_denied.html.twig */
class __TwigTemplate_40d0599bff5490ec2f8896092ddd549389853dd383a27c8b61092670fe0fe096 extends Twig_Template
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
        echo "<p>Access Denied</p>
";
    }

    public function getTemplateName()
    {
        return "access_denied.html.twig";
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
        return new Twig_Source("<p>Access Denied</p>
", "access_denied.html.twig", "C:\\xampp\\htdocs\\phproject\\templates\\access_denied.html.twig");
    }
}
