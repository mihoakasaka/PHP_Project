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

    <a href=\"/ad/add\"><button>Create an ad</button></a>
";
        // line 11
        $this->loadTemplate("panelCategoryList.html.twig", "index.html.twig", 11)->display($context);
        // line 12
        echo "<div id=\"adsListContainer\">
 ";
        // line 13
        $this->loadTemplate("ajaxads.html.twig", "index.html.twig", 13)->display($context);
        // line 14
        echo " </div>
   
              <ul id=\"paginationAds\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["maxPages"]) ? $context["maxPages"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 18
            echo "            <li id=\"liPage";
            echo twig_escape_filter($this->env, $context["page"], "html", null, true);
            echo "\" ";
            if (($context["page"] == (isset($context["currentPage"]) ? $context["currentPage"] : null))) {
                echo "class=\"active\"";
            }
            echo ">
                <a id=\"btPage";
            // line 19
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
        // line 22
        echo "    </ul>
";
    }

    // line 24
    public function block_bodyendextra($context, array $blocks = array())
    {
        // line 25
        echo "    <script>

        var currentPage = ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["currentPage"]) ? $context["currentPage"] : null), "html", null, true);
        echo ";
        function loadAdPanel(page) {
            \$('#liPage' + currentPage).removeClass(\"active\");
            currentPage = page;
            \$('#liPage' + currentPage).addClass(\"active\");
            \$('#adsListContainer').load(\"/ajax/ads/\" + page);
                    window.history.pushState(\"\", \"Ads list\", \"/ads/\" + page);
        }

    </script>
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
        return array (  103 => 27,  99 => 25,  96 => 24,  91 => 22,  78 => 19,  69 => 18,  65 => 17,  60 => 14,  58 => 13,  55 => 12,  53 => 11,  48 => 8,  45 => 7,  40 => 5,  37 => 4,  31 => 3,  11 => 1,);
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


    <a href=\"/ad/add\"><button>Create an ad</button></a>
{% include 'panelCategoryList.html.twig' %}
<div id=\"adsListContainer\">
 {% include 'ajaxads.html.twig' %}
 </div>
   
              <ul id=\"paginationAds\">
        {% for page in range(1,maxPages) %}
            <li id=\"liPage{{page}}\" {% if page == currentPage %}class=\"active\"{% endif %}>
                <a id=\"btPage{{page}}\" onclick=\"loadAdPanel({{page}});\">{{page}}</a>
            </li>
        {% endfor %}
    </ul>
{% endblock %}
{% block bodyendextra %}
    <script>

        var currentPage = {{ currentPage }};
        function loadAdPanel(page) {
            \$('#liPage' + currentPage).removeClass(\"active\");
            currentPage = page;
            \$('#liPage' + currentPage).addClass(\"active\");
            \$('#adsListContainer').load(\"/ajax/ads/\" + page);
                    window.history.pushState(\"\", \"Ads list\", \"/ads/\" + page);
        }

    </script>
{% endblock %}", "index.html.twig", "C:\\xampp\\htdocs\\phproject\\templates\\index.html.twig");
    }
}
