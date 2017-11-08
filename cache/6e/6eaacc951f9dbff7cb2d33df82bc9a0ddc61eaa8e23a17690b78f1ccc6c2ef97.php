<?php

/* account/logout.html.twig */
class __TwigTemplate_e991fc0e21454475ce8bc77073dc8c39859fa507487fe66e2e2d2437d2433e82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("master.html.twig", "account/logout.html.twig", 2);
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Log out";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
<p>You've logged out.  <a href=\"/login\">Log in</a></p> 

";
    }

    public function getTemplateName()
    {
        return "account/logout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  35 => 6,  29 => 4,  11 => 2,);
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

{% block title %}Log out{% endblock %}

{% block content %}

<p>You've logged out.  <a href=\"/login\">Log in</a></p> 

{% endblock %}", "account/logout.html.twig", "C:\\xampp\\htdocs\\phproject\\templates\\account\\logout.html.twig");
    }
}
