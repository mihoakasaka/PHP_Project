<?php

/* account/dashboard.html.twig */
class __TwigTemplate_519aed8f9497ef15a91529755aebac5ae3164b2e0494002a063e2481b751acd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "account/dashboard.html.twig", 1);
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

    <p><a href=\"/ad/add\">Create an ad</a></p>
    <h1>Your Ads</h1>
        <table>
            <thead>
                <tr>
                    <th>Ad Title</th>
                    <th>Ad Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adsList"]) ? $context["adsList"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 22
            echo "                    <tr>
                        <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "title", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "status", array()), "html", null, true);
            echo "</td>
                        <td>Renew Delete</td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 28
            echo "                    <tr colspan=\"3\"><td>You don't have any ads yet. <a href='/ad/add'>Create one now</a></td></tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </tbody>
        </table>

";
    }

    public function getTemplateName()
    {
        return "account/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 30,  83 => 28,  74 => 24,  70 => 23,  67 => 22,  62 => 21,  47 => 8,  44 => 7,  39 => 5,  36 => 4,  30 => 3,  11 => 1,);
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


    <p><a href=\"/ad/add\">Create an ad</a></p>
    <h1>Your Ads</h1>
        <table>
            <thead>
                <tr>
                    <th>Ad Title</th>
                    <th>Ad Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for a in adsList %}
                    <tr>
                        <td>{{a.title}}</td>
                        <td>{{a.status}}</td>
                        <td>Renew Delete</td>
                    </tr>
                {% else %}
                    <tr colspan=\"3\"><td>You don't have any ads yet. <a href='/ad/add'>Create one now</a></td></tr>
                {% endfor %}
            </tbody>
        </table>

{% endblock %}{# empty Twig template #}
", "account/dashboard.html.twig", "C:\\xampp\\htdocs\\phproject\\templates\\account\\dashboard.html.twig");
    }
}
