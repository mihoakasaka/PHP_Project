<?php

/* account/register.html.twig */
class __TwigTemplate_ff293466af8894c9d01678a9a8effdd1e95560874730b14996b7add9b00f74cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "account/register.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'bodyendextra' => array($this, 'block_bodyendextra'),
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
        echo "Register";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <form method=\"post\" id=\"registerForm\" ";
        if ((isset($context["errorList"]) ? $context["errorList"] : null)) {
            echo "class=\"has-error\"";
        }
        echo ">
        <h2>Please register</h2>
            ";
        // line 7
        if ((isset($context["errorList"]) ? $context["errorList"] : null)) {
            // line 8
            echo "                <div class=\"help-block\">
                <p>Please check your registration information</p>
        <ul>
            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errorList"]) ? $context["errorList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 12
                echo "                <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ul>
                </div>
    ";
        }
        // line 17
        echo "
        <div class=\"form-group\">
            <label for=\"tbName\" class=\"control-label\">Username</label><span class=\"help-block\" id=\"isTaken\"></span>
            <input type=\"text\" class=\"form-control\" placeholder=\"Enter Name\" name=\"name\" id=\"tbName\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "name", array()), "html", null, true);
        echo "\" required>
        </div>
        <div class=\"form-group\">
            <label for=\"tbEmail\" class=\"control-label\">E-mail</label><span class=\"help-block\" id=\"isRegistered\"></span>
            <input type=\"text\" class=\"form-control\" placeholder=\"Enter Email\" name=\"email\" id=\"tbEmail\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "email", array()), "html", null, true);
        echo "\" required>
        </div>
        <div class=\"form-group\">
            <label for=\"tbPassword\" class=\"control-label\">Password</label>
            <input type=\"password\" class=\"form-control\" placeholder=\"Enter Password\" id=\"tbPassword\" name=\"pass1\" required>
        </div>
        <div class=\"form-group\">
            <label for=\"tbPasswordRetype\" class=\"control-label\">Confirm Password</label>
            <input type=\"password\" class=\"form-control\" placeholder=\"Retype Password\" id=\"tbPasswordRetyp\" name=\"pass2\" required>
        </div>
          <button type=\"submit\">Register</button>
    </form>

";
    }

    // line 39
    public function block_bodyendextra($context, array $blocks = array())
    {
        echo " 
    <script>
        \$(document).ready(function () {
            \$('input[name=email]').bind('propertychange change click keyup input paste', function () {
                // AJAX request
                var email = \$('input[name=email]').val();
                \$('#isRegistered').load('/isemailregistered/' + email);
            });
        });
         \$(document).ready(function () {
            \$('input[name=name]').bind('propertychange change click keyup input paste', function () {
                // AJAX request
                var name = \$('input[name=name]').val();
                \$('#isTaken').load('/isusernametaken/' + name);
            });
        });
       
    </script>
";
    }

    public function getTemplateName()
    {
        return "account/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 39,  84 => 24,  77 => 20,  72 => 17,  67 => 14,  58 => 12,  54 => 11,  49 => 8,  47 => 7,  39 => 5,  36 => 4,  30 => 2,  11 => 1,);
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
{% block title %}Register{% endblock %}

{% block content %}
    <form method=\"post\" id=\"registerForm\" {% if errorList %}class=\"has-error\"{% endif %}>
        <h2>Please register</h2>
            {% if errorList %}
                <div class=\"help-block\">
                <p>Please check your registration information</p>
        <ul>
            {% for error in errorList %}
                <li>{{error}}</li>
                {% endfor %}
        </ul>
                </div>
    {% endif %}

        <div class=\"form-group\">
            <label for=\"tbName\" class=\"control-label\">Username</label><span class=\"help-block\" id=\"isTaken\"></span>
            <input type=\"text\" class=\"form-control\" placeholder=\"Enter Name\" name=\"name\" id=\"tbName\" value=\"{{v.name}}\" required>
        </div>
        <div class=\"form-group\">
            <label for=\"tbEmail\" class=\"control-label\">E-mail</label><span class=\"help-block\" id=\"isRegistered\"></span>
            <input type=\"text\" class=\"form-control\" placeholder=\"Enter Email\" name=\"email\" id=\"tbEmail\" value=\"{{v.email}}\" required>
        </div>
        <div class=\"form-group\">
            <label for=\"tbPassword\" class=\"control-label\">Password</label>
            <input type=\"password\" class=\"form-control\" placeholder=\"Enter Password\" id=\"tbPassword\" name=\"pass1\" required>
        </div>
        <div class=\"form-group\">
            <label for=\"tbPasswordRetype\" class=\"control-label\">Confirm Password</label>
            <input type=\"password\" class=\"form-control\" placeholder=\"Retype Password\" id=\"tbPasswordRetyp\" name=\"pass2\" required>
        </div>
          <button type=\"submit\">Register</button>
    </form>

{% endblock %} 

{% block bodyendextra %} 
    <script>
        \$(document).ready(function () {
            \$('input[name=email]').bind('propertychange change click keyup input paste', function () {
                // AJAX request
                var email = \$('input[name=email]').val();
                \$('#isRegistered').load('/isemailregistered/' + email);
            });
        });
         \$(document).ready(function () {
            \$('input[name=name]').bind('propertychange change click keyup input paste', function () {
                // AJAX request
                var name = \$('input[name=name]').val();
                \$('#isTaken').load('/isusernametaken/' + name);
            });
        });
       
    </script>
{% endblock %}
", "account/register.html.twig", "C:\\xampp\\htdocs\\phpproject\\templates\\account\\register.html.twig");
    }
}
