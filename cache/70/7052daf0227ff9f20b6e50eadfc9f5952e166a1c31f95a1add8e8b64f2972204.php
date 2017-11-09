<?php

/* bootstraptransition/master.html.twig */
class __TwigTemplate_b0a0e21b0477985c6f2212430113f15e1b056c2267ae0aee5e63eb673c89ba61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'headextra' => array($this, 'block_headextra'),
            'content' => array($this, 'block_content'),
            'bodyendextra' => array($this, 'block_bodyendextra'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <link rel=\"icon\" href=\"../../favicon.ico\">
        <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo " | Garage Sale</title>
        <!-- Bootstrap core CSS -->
        <link href=\"/css/garagesale.css\" rel=\"stylesheet\">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href=\"/css/ie10-viewport-bug-workaround.css\" rel=\"stylesheet\">

        <script src=\"/js/ie-emulation-modes-warning.js\"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
          <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    ";
        // line 25
        $this->displayBlock('headextra', $context, $blocks);
        // line 26
        echo "</head>
<body>
    <header>
        <nav class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"/\">Garage Sale</a>
                </div>
                <div id=\"navbar\" class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        ";
        // line 42
        if ((isset($context["userSession"]) ? $context["userSession"] : null)) {
            echo "<li><a href=\"/logout\">Log out</a></li> 
                            ";
        } else {
            // line 44
            echo "                            <li><a href=\"/login\">Log in</a></li>
                            <li><a href=\"/register\">Register</a></li>
                            ";
        }
        // line 47
        echo "                    </ul>
                    <form class=\"navbar-form navbar-right\" method=\"post\" action=\"/search\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Search...\" name=\"searchTerm\">
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main>

        <div class=\"container-fluid\">
            <div class=\"row\">

                <div class=\"col-xs-12 main\">";
        // line 61
        $this->displayBlock('content', $context, $blocks);
        echo "</div>

            </div>
        </div>
    </main>

    <footer>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <p class=\"col-xs-12\">Garage Sale is a project of <a href=\"http://ipd10.com\">IPD-10's</a> Miho Akasaka and Miguel Legault</p>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"js/vendor/jquery.min.js\"><\\/script>')</script>
    <script src=\"/js/bootstrap.min.js\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"/js/ie10-viewport-bug-workaround.js\"></script>
";
        // line 82
        $this->displayBlock('bodyendextra', $context, $blocks);
        // line 83
        echo "
</body>
</html>";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
    }

    // line 25
    public function block_headextra($context, array $blocks = array())
    {
    }

    // line 61
    public function block_content($context, array $blocks = array())
    {
    }

    // line 82
    public function block_bodyendextra($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "bootstraptransition/master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 82,  140 => 61,  135 => 25,  130 => 11,  124 => 83,  122 => 82,  98 => 61,  82 => 47,  77 => 44,  72 => 42,  54 => 26,  52 => 25,  35 => 11,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <link rel=\"icon\" href=\"../../favicon.ico\">
        <title>{% block title %}{% endblock %} | Garage Sale</title>
        <!-- Bootstrap core CSS -->
        <link href=\"/css/garagesale.css\" rel=\"stylesheet\">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href=\"/css/ie10-viewport-bug-workaround.css\" rel=\"stylesheet\">

        <script src=\"/js/ie-emulation-modes-warning.js\"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
          <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    {% block headextra %}{% endblock %}
</head>
<body>
    <header>
        <nav class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"/\">Garage Sale</a>
                </div>
                <div id=\"navbar\" class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        {% if userSession %}<li><a href=\"/logout\">Log out</a></li> 
                            {% else %}
                            <li><a href=\"/login\">Log in</a></li>
                            <li><a href=\"/register\">Register</a></li>
                            {% endif %}
                    </ul>
                    <form class=\"navbar-form navbar-right\" method=\"post\" action=\"/search\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Search...\" name=\"searchTerm\">
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main>

        <div class=\"container-fluid\">
            <div class=\"row\">

                <div class=\"col-xs-12 main\">{% block content %}{% endblock %}</div>

            </div>
        </div>
    </main>

    <footer>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <p class=\"col-xs-12\">Garage Sale is a project of <a href=\"http://ipd10.com\">IPD-10's</a> Miho Akasaka and Miguel Legault</p>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"js/vendor/jquery.min.js\"><\\/script>')</script>
    <script src=\"/js/bootstrap.min.js\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"/js/ie10-viewport-bug-workaround.js\"></script>
{% block bodyendextra %}{% endblock %}

</body>
</html>", "bootstraptransition/master.html.twig", "C:\\xampp\\htdocs\\phpproject\\templates\\bootstraptransition\\master.html.twig");
    }
}
