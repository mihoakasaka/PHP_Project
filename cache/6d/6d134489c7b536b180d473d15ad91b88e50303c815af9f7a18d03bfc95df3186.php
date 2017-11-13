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
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "

    <a href=\"/ad/add\">Create an ad</a>
    <div id=\"categoryList\">

    </div>
    <div id=\"adsList\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adsList"]) ? $context["adsList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 16
            echo "            <div class=\"adContainer\">
                <div class=\"imageContainer\">
                    <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "imagePath", array()), "html", null, true);
            echo "\" width=\"100\">
                </div>
                <div class=\"title\">
                    <p>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "title", array()), "html", null, true);
            echo "</p>
                </div>
                <div class=\"price\">
                    <p>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "price", array()), "html", null, true);
            echo "</p>      
                </div>

            </div>                   
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
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
        return array (  87 => 29,  76 => 24,  70 => 21,  64 => 18,  60 => 16,  56 => 15,  47 => 8,  44 => 7,  39 => 5,  36 => 4,  30 => 3,  11 => 1,);
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
{% endblock %}", "index.html.twig", "C:\\xampp\\htdocs\\phproject\\templates\\index.html.twig");
    }
}
