<?php

/* register.html.twig */
class __TwigTemplate_bad9f3f9ef7bb6cc18cfd77633e467e37a8c076747f1d37693fa4259450ab0c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "register.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'headextra' => array($this, 'block_headextra'),
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
        echo "Resister";
    }

    // line 3
    public function block_headextra($context, array $blocks = array())
    {
        echo " 
    <script>
        \$(document).ready(function () {
            \$('input[name=email]').bind('propertychange change click keyup input paste', function () {
                // AJAX request
                var email = \$('input[name=email]').val();
                \$('#isTaken').load('/isemailregistered/' + email);
            });
        });
    </script>
";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "        ";
        if ((isset($context["errorList"]) ? $context["errorList"] : null)) {
            // line 17
            echo "        <ul>
            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errorList"]) ? $context["errorList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 19
                echo "                <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        </ul>
        ";
        }
        // line 23
        echo "
            <form method=\"post\">
                Name: <input type=\"text\" name=\"name\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "name", array()), "html", null, true);
        echo "\"><br>
                Email: <input type=\"email\" name=\"email\"  value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "email", array()), "html", null, true);
        echo "\"> <span id=\"isTaken\"></span><br>

                Password: <input type=\"password\" name=\"pass1\"><br>
                Password (repeated): <input type=\"password\" name=\"pass2\"><br>
                <input type=\"submit\" value=\"Register\">
            </form>
    ";
    }

    public function getTemplateName()
    {
        return "register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 40,  93 => 36,  86 => 31,  82 => 29,  73 => 27,  69 => 26,  66 => 25,  63 => 24,  60 => 23,  36 => 3,  30 => 2,  11 => 1,);
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
{% block title %}Resister{% endblock %}
{% block headextra %} 
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

{% block content %}
    {% if errorList %}
        <ul>
            {% for error in errorList %}
                <li>{{error}}</li>
                {% endfor %}
        </ul>
    {% endif %}

    <form method=\"post\" id=\"registerForm\">

        <div class=\"container\">
            <label><b>Username</b></label><span id=\"isTaken\"></span><br>
            <input type=\"text\" placeholder=\"Enter Name\" name=\"name\"  value=\"{{v.name}}\" required>


            <label><b>E-mail</b></label><span id=\"isRegistered\"></span><br>
            <input type=\"text\" placeholder=\"Enter Email\" name=\"email\"  value=\"{{v.email}}\" required>

            <label><b>Password</b></label>
            <input type=\"password\" placeholder=\"Enter Password\" name=\"pass1\" required>

            <label><b>Confirm Password</b></label>
            <input type=\"password\" placeholder=\"Retype Password\" name=\"pass2\" required>
            <button type=\"submit\">Register</button>
        </div>
    </form>

{% endblock %} 
", "register.html.twig", "C:\\xampp\\htdocs\\phpproject\\templates\\register.html.twig");
    }
}
