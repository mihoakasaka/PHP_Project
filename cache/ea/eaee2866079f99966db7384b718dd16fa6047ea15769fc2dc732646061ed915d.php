<?php

/* searchresults.html.twig */
class __TwigTemplate_3744c8db58ae6dbeea08c01705e38fec252e6c219615d5385128361541dc0e1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstraptransition/master.html.twig", "searchresults.html.twig", 1);
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
        echo "Search";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
    <form method=\"post\">
        <input type='text' name='searchTerm' value='";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "searchTerm", array()), "html", null, true);
        echo "'/>
        <input type='submit' value='Search' />
    </form>
";
        // line 10
        if ((isset($context["v"]) ? $context["v"] : null)) {
            // line 11
            echo "    <h2>Search results for <span class=\"quoted\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "searchTerm", array()), "html", null, true);
            echo "</span></h2>
        <h3>Ads</h3>
        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["v"]) ? $context["v"] : null), "adResults", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 14
                echo "            <p><a href='/add/details/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "title", array()), "html", null, true);
                echo "</a></p>
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 16
                echo "            <p class='text-muted'>No ads found matching this search</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "        
        <h3>Categories</h3>
                ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["v"]) ? $context["v"] : null), "categoryResults", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 21
                echo "                    <p><a href='/category/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "urlSanitizedFullName", array()), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "fullName", array()), "html", null, true);
                echo "</a></p>
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 23
                echo "            <p class='text-muted'>No categories found matching this search</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "
        <h3>Users</h3>
                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["v"]) ? $context["v"] : null), "userResults", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 28
                echo "            <p>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "name", array()), "html", null, true);
                echo "</p>
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 30
                echo "            <p class='text-muted'>No users found matching this search</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "
        ";
        }
    }

    public function getTemplateName()
    {
        return "searchresults.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 32,  121 => 30,  113 => 28,  108 => 27,  104 => 25,  97 => 23,  87 => 21,  82 => 20,  78 => 18,  71 => 16,  61 => 14,  56 => 13,  50 => 11,  48 => 10,  42 => 7,  38 => 5,  35 => 4,  29 => 2,  11 => 1,);
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
{% block title %}Search{% endblock %}

{% block content %}

    <form method=\"post\">
        <input type='text' name='searchTerm' value='{{v.searchTerm}}'/>
        <input type='submit' value='Search' />
    </form>
{% if v %}
    <h2>Search results for <span class=\"quoted\">{{v.searchTerm}}</span></h2>
        <h3>Ads</h3>
        {% for a in v.adResults %}
            <p><a href='/add/details/{{a.id}}'>{{ a.title }}</a></p>
        {% else %}
            <p class='text-muted'>No ads found matching this search</p>
        {% endfor %}
        
        <h3>Categories</h3>
                {% for c in v.categoryResults %}
                    <p><a href='/category/{{c.urlSanitizedFullName}}'>{{ c.fullName }}</a></p>
        {% else %}
            <p class='text-muted'>No categories found matching this search</p>
        {% endfor %}

        <h3>Users</h3>
                {% for u in v.userResults %}
            <p>{{ u.name }}</p>
        {% else %}
            <p class='text-muted'>No users found matching this search</p>
        {% endfor %}

        {% endif %}
{% endblock %} 
", "searchresults.html.twig", "C:\\xampp\\htdocs\\phpproject\\templates\\searchresults.html.twig");
    }
}
