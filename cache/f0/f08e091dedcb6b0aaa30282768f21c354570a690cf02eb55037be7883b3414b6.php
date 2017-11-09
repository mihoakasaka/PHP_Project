<?php

/* addEditAd.html.twig */
class __TwigTemplate_cf319c7917621ab2d505d697c19976e4b6e9625d7d94f4ecbd77844369be8f0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstraptransition/master.html.twig", "addEditAd.html.twig", 1);
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
        if ((isset($context["isEditing"]) ? $context["isEditing"] : null)) {
            echo "Edit";
        } else {
            echo "Create New";
        }
        echo " Ad";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <form method=\"post\" enctype=\"multipart/form-data\" id=\"adAddEditForm\">

        <h2>";
        // line 7
        if ((isset($context["isEditing"]) ? $context["isEditing"] : null)) {
            echo "Editing";
        } else {
            echo "Creating New";
        }
        echo " Ad</h2>
        <div class=\"form-group\">
            <label for=\"lstCategory\" class=\"control-label\">Category</label>
            <select class=\"form-control\" name='categoryId' id=\"lstCategory\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["c"]) ? $context["c"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
            // line 12
            echo "                    <option value='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "categoryId", array()), "html", null, true);
            echo "' ";
            if ($this->getAttribute($context["o"], "noPosts", array())) {
                echo "disabled='disabled'";
            }
            echo " ";
            if (($this->getAttribute((isset($context["v"]) ? $context["v"] : null), "categoryId", array()) == $this->getAttribute($context["o"], "categoryId", array()))) {
                echo "selected='selected'";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "categoryDashedName", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['o'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "            </select>
        </div>
        <div class=\"form-group";
        // line 16
        if ($this->getAttribute((isset($context["errorList"]) ? $context["errorList"] : null), "title", array(), "array")) {
            echo " has-error";
        }
        echo "\">
            <label for=\"tbTitle\" class=\"control-label\">Title</label>
            <input type=\"text\" class=\"form-control\" placeholder=\"Ad title\" name=\"title\" id=\"tbTitle\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "title", array()), "html", null, true);
        echo "\">
            ";
        // line 19
        if ($this->getAttribute((isset($context["errorList"]) ? $context["errorList"] : null), "title", array(), "array")) {
            echo "<p class=\"help-block\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["errorList"]) ? $context["errorList"] : null), "title", array(), "array"), "html", null, true);
            echo "</p>";
        }
        // line 20
        echo "        </div>
        <div class=\"form-group";
        // line 21
        if ($this->getAttribute((isset($context["errorList"]) ? $context["errorList"] : null), "body", array(), "array")) {
            echo " has-error";
        }
        echo "\">
            <label for=\"taBody\" class=\"control-label\">Body</label>
            <textarea name=\"body\" class=\"form-control\" placeholder=\"Ad text\" id=\"taBody\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "body", array()), "html", null, true);
        echo "</textarea>
            ";
        // line 24
        if ($this->getAttribute((isset($context["errorList"]) ? $context["errorList"] : null), "body", array(), "array")) {
            echo "<p class=\"help-block\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["errorList"]) ? $context["errorList"] : null), "body", array(), "array"), "html", null, true);
            echo "</p>";
        }
        // line 25
        echo "        </div>
        <div class=\"form-group";
        // line 26
        if ($this->getAttribute((isset($context["errorList"]) ? $context["errorList"] : null), "price", array(), "array")) {
            echo " has-error";
        }
        echo "\">
            <label for=\"tbPrice\" class=\"control-label\">Price</label>
            <input type=\"number\" class=\"form-control\" step=\"0.01\" name=\"price\" id=\"tbPrice\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "price", array()), "html", null, true);
        echo "\">
            ";
        // line 29
        if ($this->getAttribute((isset($context["errorList"]) ? $context["errorList"] : null), "price", array(), "array")) {
            echo "<p class=\"help-block\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["errorList"]) ? $context["errorList"] : null), "price", array(), "array"), "html", null, true);
            echo "</p>";
        }
        // line 30
        echo "        </div>
        <div class=\"form-group";
        // line 31
        if ($this->getAttribute((isset($context["errorList"]) ? $context["errorList"] : null), "adImages", array(), "array")) {
            echo " has-error";
        }
        echo "\">
            <label for=\"fcAdImages\" class=\"control-label\">Pictures</label>
            <p class=\"help-block\">Choose at least 1 picture and up to 3</p>
            <input type=\"file\" class=\"form-control\" name=\"adImages[]\" multiple='multiple'><br>
            ";
        // line 35
        if ($this->getAttribute((isset($context["errorList"]) ? $context["errorList"] : null), "adImages", array(), "array")) {
            echo "<p class=\"help-block\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["errorList"]) ? $context["errorList"] : null), "adImages", array(), "array"), "html", null, true);
            echo "</p>";
        }
        // line 36
        echo "        </div>    
        <button type=\"submit\">";
        // line 37
        if ((isset($context["isEditing"]) ? $context["isEditing"] : null)) {
            echo "Update";
        } else {
            echo "Create";
        }
        echo " Ad</button>
    </form>

";
    }

    public function getTemplateName()
    {
        return "addEditAd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 37,  160 => 36,  154 => 35,  145 => 31,  142 => 30,  136 => 29,  132 => 28,  125 => 26,  122 => 25,  116 => 24,  112 => 23,  105 => 21,  102 => 20,  96 => 19,  92 => 18,  85 => 16,  81 => 14,  62 => 12,  58 => 11,  47 => 7,  43 => 5,  40 => 4,  29 => 2,  11 => 1,);
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
{% block title %}{% if isEditing %}Edit{% else %}Create New{% endif %} Ad{% endblock %}

{% block content %}
    <form method=\"post\" enctype=\"multipart/form-data\" id=\"adAddEditForm\">

        <h2>{% if isEditing %}Editing{% else %}Creating New{% endif %} Ad</h2>
        <div class=\"form-group\">
            <label for=\"lstCategory\" class=\"control-label\">Category</label>
            <select class=\"form-control\" name='categoryId' id=\"lstCategory\">
                {% for o in c %}
                    <option value='{{o.categoryId}}' {% if o.noPosts%}disabled='disabled'{% endif %} {% if v.categoryId == o.categoryId %}selected='selected'{% endif %}>{{ o.categoryDashedName }}</option>
                {% endfor %}
            </select>
        </div>
        <div class=\"form-group{% if errorList['title'] %} has-error{% endif %}\">
            <label for=\"tbTitle\" class=\"control-label\">Title</label>
            <input type=\"text\" class=\"form-control\" placeholder=\"Ad title\" name=\"title\" id=\"tbTitle\" value=\"{{v.title}}\">
            {% if errorList['title'] %}<p class=\"help-block\">{{ errorList['title'] }}</p>{% endif %}
        </div>
        <div class=\"form-group{% if errorList['body'] %} has-error{% endif %}\">
            <label for=\"taBody\" class=\"control-label\">Body</label>
            <textarea name=\"body\" class=\"form-control\" placeholder=\"Ad text\" id=\"taBody\">{{v.body}}</textarea>
            {% if errorList['body'] %}<p class=\"help-block\">{{ errorList['body'] }}</p>{% endif %}
        </div>
        <div class=\"form-group{% if errorList['price'] %} has-error{% endif %}\">
            <label for=\"tbPrice\" class=\"control-label\">Price</label>
            <input type=\"number\" class=\"form-control\" step=\"0.01\" name=\"price\" id=\"tbPrice\" value=\"{{v.price}}\">
            {% if errorList['price'] %}<p class=\"help-block\">{{ errorList['price'] }}</p>{% endif %}
        </div>
        <div class=\"form-group{% if errorList['adImages'] %} has-error{% endif %}\">
            <label for=\"fcAdImages\" class=\"control-label\">Pictures</label>
            <p class=\"help-block\">Choose at least 1 picture and up to 3</p>
            <input type=\"file\" class=\"form-control\" name=\"adImages[]\" multiple='multiple'><br>
            {% if errorList['adImages'] %}<p class=\"help-block\">{{ errorList['adImages'] }}</p>{% endif %}
        </div>    
        <button type=\"submit\">{% if isEditing %}Update{% else %}Create{% endif %} Ad</button>
    </form>

{% endblock %} 
", "addEditAd.html.twig", "C:\\xampp\\htdocs\\phpproject\\templates\\addEditAd.html.twig");
    }
}
