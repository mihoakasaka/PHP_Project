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
            'loginstatus' => array($this, 'block_loginstatus'),
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
    <link href=\"css/garagesale.css\" rel=\"stylesheet\">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href=\"css/ie10-viewport-bug-workaround.css\" rel=\"stylesheet\">

    <script src=\"js/ie-emulation-modes-warning.js\"></script>

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
          <a class=\"navbar-brand\" href=\"#\">Project name</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav navbar-right\">
            <li><a href=\"#\">Dashboard</a></li>
            <li><a href=\"#\">Settings</a></li>
            <li><a href=\"#\">Profile</a></li>
            <li><a href=\"#\">Help</a></li>
          </ul>
          <form class=\"navbar-form navbar-right\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
          </form>
        </div>
      </div>
    </nav>
    <div id=\"header\">
        ";
        // line 54
        $this->displayBlock('loginstatus', $context, $blocks);
        // line 66
        echo "    </div>
    </header>

        <div class=\"container-fluid\">
      <div class=\"row\">
        <div class=\"col-sm-3 col-md-2 sidebar\">

    <div id=\"centeredContent\">
    ";
        // line 74
        $this->displayBlock('content', $context, $blocks);
        // line 75
        echo "</div>
      </div>
      </div>
      </div>
<div id=\"footer\">
    footer
</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"js/vendor/jquery.min.js\"><\\/script>')</script>
    <script src=\"js/bootstrap.min.js\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"js/ie10-viewport-bug-workaround.js\"></script>
    ";
        // line 90
        $this->displayBlock('bodyendextra', $context, $blocks);
        // line 91
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

    // line 54
    public function block_loginstatus($context, array $blocks = array())
    {
        // line 55
        echo "            ";
        if ((isset($context["userSession"]) ? $context["userSession"] : null)) {
            // line 56
            echo "                <p class='login-status'>Hello, ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userSession"]) ? $context["userSession"] : null), "name", array()), "html", null, true);
            echo "!! /<a href=\"/logout\">Log out</a></p> 
            ";
        } else {
            // line 58
            echo "                <p class='login-status'> Hello, guest. please <a href=\"/login\">log in</a> or <a href=\"/register\">register</a><p>
                ";
        }
        // line 60
        echo "        <form method=\"post\" action='/search'>
        <input type='text' name='searchTerm' value='";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "searchTerm", array()), "html", null, true);
        echo "'/>
        <input type='submit' value='Search' />
    </form>

        ";
    }

    // line 74
    public function block_content($context, array $blocks = array())
    {
    }

    // line 90
    public function block_bodyendextra($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "bootstraptransition/master.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  167 => 90,  162 => 74,  153 => 61,  150 => 60,  146 => 58,  140 => 56,  137 => 55,  134 => 54,  129 => 25,  124 => 11,  118 => 91,  116 => 90,  99 => 75,  97 => 74,  87 => 66,  85 => 54,  55 => 26,  53 => 25,  36 => 11,  24 => 1,);
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
    <link href=\"css/garagesale.css\" rel=\"stylesheet\">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href=\"css/ie10-viewport-bug-workaround.css\" rel=\"stylesheet\">

    <script src=\"js/ie-emulation-modes-warning.js\"></script>

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
          <a class=\"navbar-brand\" href=\"#\">Project name</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav navbar-right\">
            <li><a href=\"#\">Dashboard</a></li>
            <li><a href=\"#\">Settings</a></li>
            <li><a href=\"#\">Profile</a></li>
            <li><a href=\"#\">Help</a></li>
          </ul>
          <form class=\"navbar-form navbar-right\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
          </form>
        </div>
      </div>
    </nav>
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
    </header>

        <div class=\"container-fluid\">
      <div class=\"row\">
        <div class=\"col-sm-3 col-md-2 sidebar\">

    <div id=\"centeredContent\">
    {% block content %}{% endblock %}
</div>
      </div>
      </div>
      </div>
<div id=\"footer\">
    footer
</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"js/vendor/jquery.min.js\"><\\/script>')</script>
    <script src=\"js/bootstrap.min.js\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"js/ie10-viewport-bug-workaround.js\"></script>
    {% block bodyendextra %}{% endblock %}

</body>
</html>", "bootstraptransition/master.html.twig", "C:\\xampp\\htdocs\\phproject\\templates\\bootstraptransition\\master.html.twig");
    }
}
