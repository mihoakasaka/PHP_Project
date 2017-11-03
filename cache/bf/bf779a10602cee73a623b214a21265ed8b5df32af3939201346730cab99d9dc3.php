<?php

/* master.html.twig */
class __TwigTemplate_87a86df006dd2202e643b264156f3e573238b8b43873d898258852522591c01a extends Twig_Template
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

    <div id=\"centeredContent\">
            ";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 15
        echo "    </div>
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

    // line 14
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "master.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  62 => 14,  57 => 7,  51 => 6,  45 => 15,  43 => 14,  35 => 8,  33 => 7,  29 => 6,  22 => 1,);
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

    <div id=\"centeredContent\">
            {% block content %}{% endblock %}
    </div>
</body>
</html>", "master.html.twig", "C:\\xampp\\htdocs\\PHP_Project\\templates\\master.html.twig");
    }
}
