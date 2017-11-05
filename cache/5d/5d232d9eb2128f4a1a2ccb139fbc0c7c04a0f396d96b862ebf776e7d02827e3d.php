<?php

/* index.html.twig */
class __TwigTemplate_b1d9f4be629dbc67fbada3827432ce4c43329a984ff316c15ec432d75abb77e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "index.html.twig", 1);
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
        echo "Index";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        if (($context["userSession"] ?? null)) {
            // line 7
            echo "<p>Hello, ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["userSession"] ?? null), "name", array()), "html", null, true);
            echo "!! /<a href=\"/logout\">Log out</a></p> 
";
        } else {
            // line 9
            echo "   <p> Hello, guest. please <a href=\"/login\">log in</a> or <a href=\"/register\">register</a><p>
";
        }
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  40 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"master.html.twig\" %}

{% block title %}Index{% endblock %}

{% block content %}
{% if userSession %}
<p>Hello, {{userSession.name}}!! /<a href=\"/logout\">Log out</a></p> 
{% else %}
   <p> Hello, guest. please <a href=\"/login\">log in</a> or <a href=\"/register\">register</a><p>
{% endif %}
{% endblock %}", "index.html.twig", "C:\\xampp\\htdocs\\PHP_Project\\templates\\index.html.twig");
    }
}
