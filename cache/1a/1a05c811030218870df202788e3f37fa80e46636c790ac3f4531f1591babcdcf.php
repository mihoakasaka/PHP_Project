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
            'loginstatus' => array($this, 'block_loginstatus'),
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
        echo " | Garage Sale</title>
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
        $this->displayBlock('loginstatus', $context, $blocks);
        // line 25
        echo "    </div>


    <div id=\"centeredContent\">
    ";
        // line 29
        $this->displayBlock('content', $context, $blocks);
        // line 30
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
    }

    // line 7
    public function block_headextra($context, array $blocks = array())
    {
    }

    // line 13
    public function block_loginstatus($context, array $blocks = array())
    {
        // line 14
        echo "            ";
        if (($context["userSession"] ?? null)) {
            // line 15
            echo "                <p class='login-status'>Hello, ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["userSession"] ?? null), "name", array()), "html", null, true);
            echo "!! /<a href=\"/logout\">Log out</a></p> 
            ";
        } else {
            // line 17
            echo "                <p class='login-status'> Hello, guest. please <a href=\"/login\">log in</a> or <a href=\"/register\">register</a><p>
                ";
        }
        // line 19
        echo "        <form method=\"post\" action='/search'>
        <input type='text' name='searchTerm' value='";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? null), "searchTerm", array()), "html", null, true);
        echo "'/>
        <input type='submit' value='Search' />
    </form>

        ";
    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "master.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  100 => 29,  91 => 20,  88 => 19,  84 => 17,  78 => 15,  75 => 14,  72 => 13,  67 => 7,  62 => 6,  53 => 30,  51 => 29,  45 => 25,  43 => 13,  36 => 8,  34 => 7,  30 => 6,  23 => 1,);
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
        <title>{% block title %}{% endblock %} | Garage Sale</title>
    {% block headextra %}{% endblock %}


</head>
<body>
    <div id=\"header\">
        {% block loginstatus %}
            {% if userSession %}
                <p class='login-status'>Hello, {{userSession.name}}!! /<a href=\"/logout\">Log out</a></p> 
            {% else %}
                <p class='login-status'> Hello, guest. please <a href=\"/login\">log in</a> or <a href=\"/register\">register</a><p>
                {% endif %}
        <form method=\"post\" action='/search'>
        <input type='text' name='searchTerm' value='{{v.searchTerm}}'/>
        <input type='submit' value='Search' />
    </form>

        {% endblock %}
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
