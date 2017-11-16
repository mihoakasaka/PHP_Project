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
        echo "    <script>
        var currentPage = ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["currentPage"]) ? $context["currentPage"] : null), "html", null, true);
        echo ";
                function loadPage(page) {
                    \$('#btPage' + currentPage).removeClass(\"currentPageButton\");
                    currentPage = page;
                    \$('#btPage' + currentPage).addClass(\"currentPageButton\");
                    \$('#adsList').load(\"/ajax/ads/\" + page);
                    window.history.pushState(\"\", \"Ads list\", \"/ads/\" + page);
                }
    </script>
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "

    <a href=\"/ad/add\">Create an ad</a>
    <div id=\"categories\">
 ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoryList"]) ? $context["categoryList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 22
            echo "           <p><a href='/category/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "urlSanitizedFullName", array()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "fullName", array()), "html", null, true);
            echo "</a></p>                 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </div>
    <div id=\"adsList\">
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adsList"]) ? $context["adsList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 27
            echo "            <div class=\"adContainer\">
                <div class=\"imageContainer\">
                    <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "imagePath", array()), "html", null, true);
            echo "\" width=\"100\">
                </div>
                <div class=\"title\">
                    <p>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "title", array()), "html", null, true);
            echo "</p>
                </div>
                <div class=\"price\">
                    <p>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "price", array()), "html", null, true);
            echo "</p>      
                </div>

            </div>   
             
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
    </div>
         <div class=\"paginationContainer\">
            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["maxPages"]) ? $context["maxPages"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 45
            echo "                <button class=\"";
            if (($context["page"] == (isset($context["currentPage"]) ? $context["currentPage"] : null))) {
                echo "currentPageButton";
            }
            echo "\"
                        id=\"btPage";
            // line 46
            echo twig_escape_filter($this->env, $context["page"], "html", null, true);
            echo "\" onclick=\"loadPage(";
            echo twig_escape_filter($this->env, $context["page"], "html", null, true);
            echo ");\">";
            echo twig_escape_filter($this->env, $context["page"], "html", null, true);
            echo "</button>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </div>   
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
        return array (  144 => 48,  132 => 46,  125 => 45,  121 => 44,  116 => 41,  104 => 35,  98 => 32,  92 => 29,  88 => 27,  84 => 26,  80 => 24,  69 => 22,  65 => 21,  59 => 17,  56 => 16,  42 => 6,  39 => 5,  36 => 4,  30 => 3,  11 => 1,);
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
    <script>
        var currentPage = {{currentPage}};
                function loadPage(page) {
                    \$('#btPage' + currentPage).removeClass(\"currentPageButton\");
                    currentPage = page;
                    \$('#btPage' + currentPage).addClass(\"currentPageButton\");
                    \$('#adsList').load(\"/ajax/ads/\" + page);
                    window.history.pushState(\"\", \"Ads list\", \"/ads/\" + page);
                }
    </script>
{% endblock %}
{% block content %}


    <a href=\"/ad/add\">Create an ad</a>
    <div id=\"categories\">
 {% for c in categoryList %}
           <p><a href='/category/{{c.urlSanitizedFullName}}'>{{ c.fullName }}</a></p>                 
        {% endfor %}
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
         <div class=\"paginationContainer\">
            {% for page in range(1,maxPages) %}
                <button class=\"{% if page == currentPage %}currentPageButton{% endif %}\"
                        id=\"btPage{{page}}\" onclick=\"loadPage({{page}});\">{{page}}</button>
            {% endfor %}
        </div>   
{% endblock %}", "index.html.twig", "C:\\xampp\\htdocs\\phproject\\templates\\index.html.twig");
    }
}
