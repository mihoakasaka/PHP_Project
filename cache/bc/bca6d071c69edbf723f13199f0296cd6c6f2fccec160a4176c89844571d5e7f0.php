<?php

/* account/login.html.twig */
class __TwigTemplate_4b6c7fc23a60cefe61d2591d35cbd194f2fc800b5fcd16f9d4f4d0495e6652f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstraptransition/master.html.twig", "account/login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bootstraptransition/master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Login";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
    <form method=\"post\" id=\"loginForm\" ";
        // line 6
        if ((isset($context["error"]) ? $context["error"] : null)) {
            echo "class=\"has-error\"";
        }
        echo ">
        <h2>Please Login</h2>
        <div class=\"imgcontainer\">
            <img src=\"images/login.png\" class=\"avatar\">
        </div>

        <div class=\"form-group\">
            ";
        // line 13
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 14
            echo "                <p class=\"help-block\" id=\"loginError\">Enter valid email and password<p>
                ";
        }
        // line 16
        echo "                <label for=\"tbEmail\" class=\"control-label\">Email</label><span class=\"help-block\" id=\"isTaken\"></span>
                <input type=\"text\" class=\"form-control\" placeholder=\"Enter email\" name=\"email\" id=\"tbEmail\" required>
        <div class=\"form-group\">
        </div>
                <label for=\"tbPassword\" class=\"control-label\">Password</label><span class=\"help-block\" id=\"isTaken\"></span>
                <input type=\"password\" class=\"form-control\" placeholder=\"Enter Password\" name=\"pass\" id=\"tbPassword\" required>
        </div>
        <input type=\"submit\" value=\"Log in\">
        <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["loginUrl"]) ? $context["loginUrl"] : null), "html", null, true);
        echo "\"><img src=\"images/fblogin.png\" width=\"200\"></a>
        
        <p class=\"help-block\">No account?<a href=\"/register\">Register!!</a></p>
        <p class=\"help-block\">Forget password?<a href=\"/register\">Reset password</a></p>
    </form>

";
    }

    public function getTemplateName()
    {
        return "account/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 24,  59 => 16,  55 => 14,  53 => 13,  41 => 6,  38 => 5,  35 => 4,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"bootstraptransition/master.html.twig\" %}
{% block title %}Login{% endblock %}

{% block content %}

    <form method=\"post\" id=\"loginForm\" {% if error %}class=\"has-error\"{% endif %}>
        <h2>Please Login</h2>
        <div class=\"imgcontainer\">
            <img src=\"images/login.png\" class=\"avatar\">
        </div>

        <div class=\"form-group\">
            {% if error %}
                <p class=\"help-block\" id=\"loginError\">Enter valid email and password<p>
                {% endif %}
                <label for=\"tbEmail\" class=\"control-label\">Email</label><span class=\"help-block\" id=\"isTaken\"></span>
                <input type=\"text\" class=\"form-control\" placeholder=\"Enter email\" name=\"email\" id=\"tbEmail\" required>
        <div class=\"form-group\">
        </div>
                <label for=\"tbPassword\" class=\"control-label\">Password</label><span class=\"help-block\" id=\"isTaken\"></span>
                <input type=\"password\" class=\"form-control\" placeholder=\"Enter Password\" name=\"pass\" id=\"tbPassword\" required>
        </div>
        <input type=\"submit\" value=\"Log in\">
        <a href=\"{{loginUrl}}\"><img src=\"images/fblogin.png\" width=\"200\"></a>
        
        <p class=\"help-block\">No account?<a href=\"/register\">Register!!</a></p>
        <p class=\"help-block\">Forget password?<a href=\"/register\">Reset password</a></p>
    </form>

{% endblock %} 
", "account/login.html.twig", "C:\\xampp\\htdocs\\phproject\\templates\\account\\login.html.twig");
    }
}
