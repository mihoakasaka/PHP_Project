<?php

/* searchresults.html.twig */
class __TwigTemplate_3744c8db58ae6dbeea08c01705e38fec252e6c219615d5385128361541dc0e1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "searchresults.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'bodyendextra' => array($this, 'block_bodyendextra'),
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
    <h2>Search results for <span class=\"quoted\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "searchTerm", array()), "html", null, true);
        echo "</span></h2>
        ";
        // line 11
        if ((isset($context["v"]) ? $context["v"] : null)) {
            // line 12
            echo "        <h3>Categories</h3>
        <div id=\"searchResultsCategories\">
            ";
            // line 14
            $this->loadTemplate("panelSearchResultsCategories.html.twig", "searchresults.html.twig", 14)->display($context);
            // line 15
            echo "        </div>
        <ul id=\"searchResultsPaginationCategories\">
            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "maxCategoryPages", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 18
                echo "                <li id=\"liPageCategory";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "\" ";
                if (($context["page"] == $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "currentCategoryPage", array()))) {
                    echo "class=\"active\"";
                }
                echo ">
                    <a id=\"btPageCategory";
                // line 19
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "\" onclick=\"loadCategoryPanel(";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo ");\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "        </ul>

        <h3>Ads</h3>
        <div id=\"searchResultsAds\"
             ";
            // line 26
            $this->loadTemplate("panelSearchResultsAds.html.twig", "searchresults.html.twig", 26)->display($context);
            // line 27
            echo "    </div>
    <ul id=\"searchResultsPaginationAds\">
        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "maxAdPages", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 30
                echo "            <li id=\"liPageAd";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "\" ";
                if (($context["page"] == $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "currentAdPage", array()))) {
                    echo "class=\"active\"";
                }
                echo ">
                <a id=\"btPageAd";
                // line 31
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "\" onclick=\"loadAdPanel(";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo ");\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "    </ul>


    <h3>Users</h3>
    <div id=\"searchResultsUsers\">
        ";
            // line 39
            $this->loadTemplate("panelSearchResultsUsers.html.twig", "searchresults.html.twig", 39)->display($context);
            // line 40
            echo "    </div>
    <ul id=\"searchResultsPaginationUsers\">
        ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "maxUserPages", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 43
                echo "            <li id=\"liPageUser";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "\" ";
                if (($context["page"] == $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "currentUserPage", array()))) {
                    echo "class=\"active\"";
                }
                echo ">
                <a id=\"btPageUser";
                // line 44
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "\" onclick=\"loadUserPanel(";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo ");\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "    </ul>


";
        }
    }

    // line 53
    public function block_bodyendextra($context, array $blocks = array())
    {
        // line 54
        echo "    <script>

        var currentAdPage = ";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "currentAdPage", array()), "html", null, true);
        echo ";
        function loadAdPanel(page) {
            \$('#liPageAd' + currentAdPage).removeClass(\"active\");
            currentAdPage = page;
            \$('#liPageAd' + currentAdPage).addClass(\"active\");
            \$('#searchResultsAds').load(\"/ajax/adsearchresults/\" + page, {'searchTerm': \"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "searchTerm", array()), "html", null, true);
        echo "\"});
        }

        var currentCategoryPage = ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "currentCategoryPage", array()), "html", null, true);
        echo ";
        function loadCategoryPanel(page) {
            \$('#liPageCategory' + currentCategoryPage).removeClass(\"active\");
            currentCategoryPage = page;
            \$('#liPageCategory' + currentCategoryPage).addClass(\"active\");
            \$('#searchResultsCategories').load(\"/ajax/categorysearchresults/\" + page, {'searchTerm': \"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "searchTerm", array()), "html", null, true);
        echo "\"});
        }

        var currentUserPage = ";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "currentUserPage", array()), "html", null, true);
        echo ";
        function loadUserPanel(page) {
            \$('#liPageUser' + currentUserPage).removeClass(\"active\");
            currentUserPage = page;
            \$('#liPageUser' + currentUserPage).addClass(\"active\");
            \$('#searchResultsUsers').load(\"/ajax/usersearchresults/\" + page, {'searchTerm': \"";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "searchTerm", array()), "html", null, true);
        echo "\"});
        }



    </script>
";
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
        return array (  219 => 77,  211 => 72,  205 => 69,  197 => 64,  191 => 61,  183 => 56,  179 => 54,  176 => 53,  168 => 47,  155 => 44,  146 => 43,  142 => 42,  138 => 40,  136 => 39,  129 => 34,  116 => 31,  107 => 30,  103 => 29,  99 => 27,  97 => 26,  91 => 22,  78 => 19,  69 => 18,  65 => 17,  61 => 15,  59 => 14,  55 => 12,  53 => 11,  49 => 10,  43 => 7,  39 => 5,  36 => 4,  30 => 2,  11 => 1,);
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
{% block title %}Search{% endblock %}

{% block content %}

    <form method=\"post\">
        <input type='text' name='searchTerm' value='{{v.searchTerm}}'/>
        <input type='submit' value='Search' />
    </form>
    <h2>Search results for <span class=\"quoted\">{{v.searchTerm}}</span></h2>
        {% if v %}
        <h3>Categories</h3>
        <div id=\"searchResultsCategories\">
            {% include 'panelSearchResultsCategories.html.twig' %}
        </div>
        <ul id=\"searchResultsPaginationCategories\">
            {% for page in range(1,v.maxCategoryPages) %}
                <li id=\"liPageCategory{{page}}\" {% if page == v.currentCategoryPage %}class=\"active\"{% endif %}>
                    <a id=\"btPageCategory{{page}}\" onclick=\"loadCategoryPanel({{page}});\">{{page}}</a>
                </li>
            {% endfor %}
        </ul>

        <h3>Ads</h3>
        <div id=\"searchResultsAds\"
             {% include 'panelSearchResultsAds.html.twig' %}
    </div>
    <ul id=\"searchResultsPaginationAds\">
        {% for page in range(1,v.maxAdPages) %}
            <li id=\"liPageAd{{page}}\" {% if page == v.currentAdPage %}class=\"active\"{% endif %}>
                <a id=\"btPageAd{{page}}\" onclick=\"loadAdPanel({{page}});\">{{page}}</a>
            </li>
        {% endfor %}
    </ul>


    <h3>Users</h3>
    <div id=\"searchResultsUsers\">
        {% include 'panelSearchResultsUsers.html.twig' %}
    </div>
    <ul id=\"searchResultsPaginationUsers\">
        {% for page in range(1,v.maxUserPages) %}
            <li id=\"liPageUser{{page}}\" {% if page == v.currentUserPage %}class=\"active\"{% endif %}>
                <a id=\"btPageUser{{page}}\" onclick=\"loadUserPanel({{page}});\">{{page}}</a>
            </li>
        {% endfor %}
    </ul>


{% endif %}
{% endblock %} 

{% block bodyendextra %}
    <script>

        var currentAdPage = {{ v.currentAdPage }};
        function loadAdPanel(page) {
            \$('#liPageAd' + currentAdPage).removeClass(\"active\");
            currentAdPage = page;
            \$('#liPageAd' + currentAdPage).addClass(\"active\");
            \$('#searchResultsAds').load(\"/ajax/adsearchresults/\" + page, {'searchTerm': \"{{v.searchTerm}}\"});
        }

        var currentCategoryPage = {{ v.currentCategoryPage }};
        function loadCategoryPanel(page) {
            \$('#liPageCategory' + currentCategoryPage).removeClass(\"active\");
            currentCategoryPage = page;
            \$('#liPageCategory' + currentCategoryPage).addClass(\"active\");
            \$('#searchResultsCategories').load(\"/ajax/categorysearchresults/\" + page, {'searchTerm': \"{{v.searchTerm}}\"});
        }

        var currentUserPage = {{ v.currentUserPage }};
        function loadUserPanel(page) {
            \$('#liPageUser' + currentUserPage).removeClass(\"active\");
            currentUserPage = page;
            \$('#liPageUser' + currentUserPage).addClass(\"active\");
            \$('#searchResultsUsers').load(\"/ajax/usersearchresults/\" + page, {'searchTerm': \"{{v.searchTerm}}\"});
        }



    </script>
{% endblock %}
", "searchresults.html.twig", "C:\\xampp\\htdocs\\phpproject\\templates\\searchresults.html.twig");
    }
}
