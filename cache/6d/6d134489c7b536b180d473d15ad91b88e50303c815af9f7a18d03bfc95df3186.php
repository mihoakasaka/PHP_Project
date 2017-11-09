<?php

/* index.html.twig */
class __TwigTemplate_e16371dd43bfeac20bdb9bbb398aedf062ceba023825fc407025c14042464ac0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "index.html.twig", 1);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Index";
    }

    // line 4
    public function block_headextra($context, array $blocks = array())
    {
        // line 5
        echo "    <style>
        ul {
  list-style-type: none;
}
li {
  margin: 5px 0;
}
.category {
  width: 200px;
  margin: 10px;
  display: block;
  float: left;
}
.adsList {
  width: 500px;
  margin: auto;
  display: block;
  float: left;
}
.adContainer {
  width: 150px;
  display: block;
  float: left;
}
.imageContainer {
  width: 100px;
  height: 100px;
}
        </style>
";
    }

    // line 35
    public function block_content($context, array $blocks = array())
    {
        // line 36
        echo "

    <a href=\"/ad/add\">Create an ad</a>
    <div id=\"categoryList\">

    </div>
    <div id=\"adsList\">
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adsList"]) ? $context["adsList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 44
            echo "            <div class=\"adContainer\">
                <div class=\"imageContainer\">
                    <img src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "imagePath", array()), "html", null, true);
            echo "\" width=\"100\">
                </div>
                <div class=\"title\">
                    <p>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "title", array()), "html", null, true);
            echo "</p>
                </div>
                <div class=\"price\">
                    <p>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "price", array()), "html", null, true);
            echo "</p>      
                </div>

            </div>                   
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
    </div>
";
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
        return array (  115 => 57,  104 => 52,  98 => 49,  92 => 46,  88 => 44,  84 => 43,  75 => 36,  72 => 35,  39 => 5,  36 => 4,  30 => 3,  11 => 1,);
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
{% block headextra %}
    <style>
        ul {
  list-style-type: none;
}
li {
  margin: 5px 0;
}
.category {
  width: 200px;
  margin: 10px;
  display: block;
  float: left;
}
.adsList {
  width: 500px;
  margin: auto;
  display: block;
  float: left;
}
.adContainer {
  width: 150px;
  display: block;
  float: left;
}
.imageContainer {
  width: 100px;
  height: 100px;
}
        </style>
{% endblock %}
{% block content %}


    <a href=\"/ad/add\">Create an ad</a>
    <div id=\"categoryList\">

    </div>
    <div id=\"adsList\">
        {% for a in adsList %}
            <div class=\"adContainer\">
                <div class=\"imageContainer\">
                    <img src=\"{{a.imagePath}}\" width=\"100\">
                </div>
                <div class=\"title\">
                    <p>{{a.title}}</p>
                </div>
                <div class=\"price\">
                    <p>{{a.price}}</p>      
                </div>

            </div>                   
        {% endfor %}

    </div>
{% endblock %}", "index.html.twig", "C:\\xampp\\htdocs\\PHP_Project\\templates\\index.html.twig");
    }
}
