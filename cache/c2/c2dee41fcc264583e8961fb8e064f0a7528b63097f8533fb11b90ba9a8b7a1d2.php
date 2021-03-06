<?php

/* login.html.twig */
class __TwigTemplate_2b6bd024781674d0eae417384823982530542b74717c9f7da33214333198862a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("master.html.twig", "login.html.twig", 2);
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
        echo "Log in";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
    <form method=\"post\" id=\"loginForm\">
        <div class=\"imgcontainer\">
            <img src=\"images/login.png\" class=\"avatar\">
        </div>

        <div class=\"container\">
            ";
        // line 14
        if (($context["error"] ?? null)) {
            // line 15
            echo "                <p id=\"loginError\">Enter valid email and password<p><br>
            ";
        }
        // line 17
        echo "
                    <label><b>E-mail</b></label>
                    <input type=\"text\" placeholder=\"Enter email\" name=\"email\" required>

                    <label><b>Password</b></label>
                    <input type=\"password\" placeholder=\"Enter Password\" name=\"pass\" required>

                    <button type=\"submit\">Login</button>

                    </div>

                    <div class=\"container\" style=\"background-color:#f1f1f1\">
                        <button type=\"button\" class=\"cancelbtn\">Cancel</button>
                        <span class=\"registerNow\">No account?<a href=\"/register\">Register!!</a></span>
                    </div>
                    </form>

                ";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 17,  49 => 15,  47 => 14,  38 => 7,  35 => 6,  29 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"master.html.twig\" %}
{% block title %}Log in{% endblock %}


{% block content %}

    <form method=\"post\" id=\"loginForm\">
        <div class=\"imgcontainer\">
            <img src=\"images/login.png\" class=\"avatar\">
        </div>

        <div class=\"container\">
            {% if error %}
                <p id=\"loginError\">Enter valid email and password<p><br>
            {% endif %}

                    <label><b>E-mail</b></label>
                    <input type=\"text\" placeholder=\"Enter email\" name=\"email\" required>

                    <label><b>Password</b></label>
                    <input type=\"password\" placeholder=\"Enter Password\" name=\"pass\" required>

                    <button type=\"submit\">Login</button>

                    </div>

                    <div class=\"container\" style=\"background-color:#f1f1f1\">
                        <button type=\"button\" class=\"cancelbtn\">Cancel</button>
                        <span class=\"registerNow\">No account?<a href=\"/register\">Register!!</a></span>
                    </div>
                    </form>

                {% endblock %} 
", "login.html.twig", "C:\\xampp\\htdocs\\PHP_Project\\templates\\login.html.twig");
    }
}
