<?php

/* master.html.twig */
class __TwigTemplate_00c8b13873e5ffcab63f19c339c6109e5a631d51d6c5ae928fb64f80e6565d4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'headextra' => array($this, 'block_headextra'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    <head>
        <link href=\"/styles.css\" rel=\"stylesheet\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <meta charset=\"UTF-8\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        $this->displayBlock('headextra', $context, $blocks);
        // line 8
        echo "

</head>
<body>
    <div id=\"header\">
        ";
        // line 13
        if (($context["userSession"] ?? null)) {
            // line 14
            echo "            <p>Hello, ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["userSession"] ?? null), "name", array()), "html", null, true);
            echo "!! /<a href=\"/logout\">Log out</a></p> 
        ";
        } else {
            // line 16
            echo "            <p> Hello, guest. please <a href=\"/login\">log in</a> or <a href=\"/register\">register</a><p>
            ";
        }
        // line 18
        echo "    </div>


    <div id=\"centeredContent\">
    ";
        // line 22
        $this->displayBlock('content', $context, $blocks);
        // line 23
        echo "</div>
<div id=\"footer\">
    footer
</div>
</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Default";
    }

    // line 7
    public function block_headextra($context, array $blocks = array())
    {
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 22,  77 => 7,  71 => 6,  62 => 23,  60 => 22,  54 => 18,  50 => 16,  44 => 14,  42 => 13,  35 => 8,  33 => 7,  29 => 6,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
    <head>
        <link href=\"/styles.css\" rel=\"stylesheet\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Default{% endblock %}</title>
    {% block headextra %}{% endblock %}


</head>
<body>
    <div id=\"header\">
        {% if userSession %}
            <p>Hello, {{userSession.name}}!! /<a href=\"/logout\">Log out</a></p> 
        {% else %}
            <p> Hello, guest. please <a href=\"/login\">log in</a> or <a href=\"/register\">register</a><p>
            {% endif %}
    </div>


    <div id=\"centeredContent\">
    {% block content %}{% endblock %}
</div>
<div id=\"footer\">
    footer
</div>
</body>
</html>", "master.html.twig", "C:\\xampp\\htdocs\\PHP_Project\\templates\\master.html.twig");
    }
}
