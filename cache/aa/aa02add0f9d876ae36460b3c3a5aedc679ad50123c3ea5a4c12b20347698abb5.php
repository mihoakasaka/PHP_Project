<?php

/* register_success.html.twig */
class __TwigTemplate_d8e689d7e3d1ff603e948ff45d7e270b5e1b17cb63c7e7e6a338037012b0f041 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("master.html.twig", "register_success.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Resister success";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<p>You've been registered. You may now <a href='../login'>log in</a></p>
";
    }

    public function getTemplateName()
    {
        return "register_success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  35 => 4,  29 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
{% extends \"master.html.twig\" %}
{% block title %}Resister success{% endblock %}
{% block content %}
<p>You've been registered. You may now <a href='../login'>log in</a></p>
{% endblock %}
", "register_success.html.twig", "C:\\xampp\\htdocs\\phproject\\templates\\register_success.html.twig");
    }
}
