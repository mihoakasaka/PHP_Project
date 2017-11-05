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
        echo "        ";
        if (($context["errorList"] ?? null)) {
            // line 8
            echo "        <ul>
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errorList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 10
                echo "                <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "        </ul>
        ";
        }
        // line 14
        echo "<form method=\"post\" id=\"loginForm\">
  <div class=\"imgcontainer\">
    <img src=\"images/login.png\" class=\"avatar\">
  </div>

  <div class=\"container\">
    <label><b>E-mail</b></label>
    <input type=\"text\" placeholder=\"Enter email\" name=\"email\" required>

    <label><b>Password</b></label>
    <input type=\"password\" placeholder=\"Enter Password\" name=\"pass\" required>
        
    <button type=\"submit\">Login</button>
   
  </div>

  <div class=\"container\" style=\"background-color:#f1f1f1\">
    <button type=\"button\" class=\"cancelbtn\">Cancel</button>
    <span class=\"psw\">Forgot <a href=\"/\">password?</a></span>
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
        return array (  61 => 14,  57 => 12,  48 => 10,  44 => 9,  41 => 8,  38 => 7,  35 => 6,  29 => 3,  11 => 2,);
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
        {% if errorList %}
        <ul>
            {% for error in errorList %}
                <li>{{error}}</li>
                {% endfor %}
        </ul>
        {% endif %}
<form method=\"post\" id=\"loginForm\">
  <div class=\"imgcontainer\">
    <img src=\"images/login.png\" class=\"avatar\">
  </div>

  <div class=\"container\">
    <label><b>E-mail</b></label>
    <input type=\"text\" placeholder=\"Enter email\" name=\"email\" required>

    <label><b>Password</b></label>
    <input type=\"password\" placeholder=\"Enter Password\" name=\"pass\" required>
        
    <button type=\"submit\">Login</button>
   
  </div>

  <div class=\"container\" style=\"background-color:#f1f1f1\">
    <button type=\"button\" class=\"cancelbtn\">Cancel</button>
    <span class=\"psw\">Forgot <a href=\"/\">password?</a></span>
  </div>
</form>
    {% endblock %} 
", "login.html.twig", "C:\\xampp\\htdocs\\PHP_Project\\templates\\login.html.twig");
    }
}
