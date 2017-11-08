<?php

/* account/register.html.twig */
class __TwigTemplate_ff293466af8894c9d01678a9a8effdd1e95560874730b14996b7add9b00f74cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstraptransition/master.html.twig", "account/register.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'bodyendextra' => array($this, 'block_bodyendextra'),
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
        echo "Register";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        if ((isset($context["errorList"]) ? $context["errorList"] : null)) {
            // line 6
            echo "        <ul>
            ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errorList"]) ? $context["errorList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 8
                echo "                <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "        </ul>
    ";
        }
        // line 12
        echo "
    <form class=\"form-register\" method=\"post\" id=\"registerForm\">

            <label><b>Username</b></label><span id=\"isTaken\"></span><br>
            <input type=\"text\" placeholder=\"Enter Name\" name=\"name\"  value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "name", array()), "html", null, true);
        echo "\" required>


            <label><b>E-mail</b></label><span id=\"isRegistered\"></span><br>
            <input type=\"text\" placeholder=\"Enter Email\" name=\"email\"  value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "email", array()), "html", null, true);
        echo "\" required>

            <label><b>Password</b></label>
            <input type=\"password\" placeholder=\"Enter Password\" name=\"pass1\" required>

            <label><b>Confirm Password</b></label>
            <input type=\"password\" placeholder=\"Retype Password\" name=\"pass2\" required>
            <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Register</button>
    </form>

";
    }

    // line 32
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
        return array (  90 => 32,  75 => 20,  68 => 16,  62 => 12,  58 => 10,  49 => 8,  45 => 7,  42 => 6,  39 => 5,  36 => 4,  30 => 2,  11 => 1,);
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
{% block title %}Register{% endblock %}

{% block content %}
    {% if errorList %}
        <ul>
            {% for error in errorList %}
                <li>{{error}}</li>
                {% endfor %}
        </ul>
    {% endif %}

    <form class=\"form-register\" method=\"post\" id=\"registerForm\">

            <label><b>Username</b></label><span id=\"isTaken\"></span><br>
            <input type=\"text\" placeholder=\"Enter Name\" name=\"name\"  value=\"{{v.name}}\" required>


            <label><b>E-mail</b></label><span id=\"isRegistered\"></span><br>
            <input type=\"text\" placeholder=\"Enter Email\" name=\"email\"  value=\"{{v.email}}\" required>

            <label><b>Password</b></label>
            <input type=\"password\" placeholder=\"Enter Password\" name=\"pass1\" required>

            <label><b>Confirm Password</b></label>
            <input type=\"password\" placeholder=\"Retype Password\" name=\"pass2\" required>
            <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Register</button>
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
", "account/register.html.twig", "C:\\xampp\\htdocs\\phproject\\templates\\account\\register.html.twig");
    }
}
