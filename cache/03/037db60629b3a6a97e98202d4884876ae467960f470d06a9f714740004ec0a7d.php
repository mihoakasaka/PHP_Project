<?php

/* passreset_request.html.twig */
class __TwigTemplate_aedd3a34266cd8b124276b98952c5dcef05ec17de315cb0e77c36728843512d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "passreset_request.html.twig", 1);
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Forgotten password";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <p>Enter Email</p>
    
    ";
        // line 8
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 9
            echo "        ";
        }
        // line 10
        echo "        
        <form method=\"post\">
            Email:<input type=\"email\" name=\"email\">
            <input type=\"submit\" value=\"Request reset password\">
            </form>
";
    }

    public function getTemplateName()
    {
        return "passreset_request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  44 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 2,  11 => 1,);
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
{% block title %}Forgotten password{% endblock %}


{% block content %}
    <p>Enter Email</p>
    
    {% if error %}
        {% endif %}
        
        <form method=\"post\">
            Email:<input type=\"email\" name=\"email\">
            <input type=\"submit\" value=\"Request reset password\">
            </form>
{% endblock %}", "passreset_request.html.twig", "C:\\xampp\\htdocs\\PHP_Project\\templates\\passreset_request.html.twig");
    }
}
