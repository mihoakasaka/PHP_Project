<?php

/* /temporarytemplates/addAd.html.twig */
class __TwigTemplate_83b5d64b43d65a21b6a1e90809ad340ea29bfb5b2e66e194581c3f55301b2f7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

<h2>";
        // line 3
        if ((isset($context["isEditing"]) ? $context["isEditing"] : null)) {
            echo "Editing";
        } else {
            echo "Creating";
        }
        echo " Ad</h2>

<form method=\"post\" enctype=\"multipart/form-data\">
    Category: <select name='categoryId'>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["c"]) ? $context["c"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
            // line 8
            echo "            <option value='";
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
        // line 10
        echo "    </select>
    Title: <input type=\"text\" name=\"title\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "title", array()), "html", null, true);
        echo "\"><br>
    ";
        // line 12
        if ($this->getAttribute((isset($context["errorList"]) ? $context["errorList"] : null), "title", array(), "array")) {
            echo "<p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["errorList"]) ? $context["errorList"] : null), "title", array(), "array"), "html", null, true);
            echo "</p>";
        }
        // line 13
        echo "    Body: <textarea name=\"body\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "body", array()), "html", null, true);
        echo "</textarea><br>
    ";
        // line 14
        if ($this->getAttribute((isset($context["errorList"]) ? $context["errorList"] : null), "body", array(), "array")) {
            echo "<p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["errorList"]) ? $context["errorList"] : null), "body", array(), "array"), "html", null, true);
            echo "</p>";
        }
        // line 15
        echo "    Price: <input type=\"number\" step=\"0.01\" name=\"price\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "price", array()), "html", null, true);
        echo "\"><br>
    ";
        // line 16
        if ($this->getAttribute((isset($context["errorList"]) ? $context["errorList"] : null), "price", array(), "array")) {
            echo "<p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["errorList"]) ? $context["errorList"] : null), "price", array(), "array"), "html", null, true);
            echo "</p>";
        }
        // line 17
        echo "    Add Pictures (at least 1, up to 3)<input type=\"file\" name=\"adImages[]\" multiple='multiple'><br>
    ";
        // line 18
        if ($this->getAttribute((isset($context["errorList"]) ? $context["errorList"] : null), "adImages", array(), "array")) {
            echo "<p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["errorList"]) ? $context["errorList"] : null), "adImages", array(), "array"), "html", null, true);
            echo "</p>";
        }
        // line 19
        echo "    <input type=\"submit\" value=\"";
        if ((isset($context["isEditing"]) ? $context["isEditing"] : null)) {
            echo "Update";
        } else {
            echo "Create";
        }
        echo " Ad\">
</form>

";
    }

    public function getTemplateName()
    {
        return "/temporarytemplates/addAd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 19,  95 => 18,  92 => 17,  86 => 16,  81 => 15,  75 => 14,  70 => 13,  64 => 12,  60 => 11,  57 => 10,  38 => 8,  34 => 7,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

<h2>{% if isEditing %}Editing{% else %}Creating{% endif %} Ad</h2>

<form method=\"post\" enctype=\"multipart/form-data\">
    Category: <select name='categoryId'>
        {% for o in c %}
            <option value='{{o.categoryId}}' {% if o.noPosts%}disabled='disabled'{% endif %} {% if v.categoryId == o.categoryId %}selected='selected'{% endif %}>{{ o.categoryDashedName }}</option>
        {% endfor %}
    </select>
    Title: <input type=\"text\" name=\"title\" value=\"{{v.title}}\"><br>
    {% if errorList['title'] %}<p>{{ errorList['title'] }}</p>{% endif %}
    Body: <textarea name=\"body\">{{v.body}}</textarea><br>
    {% if errorList['body'] %}<p>{{ errorList['body'] }}</p>{% endif %}
    Price: <input type=\"number\" step=\"0.01\" name=\"price\" value=\"{{v.price}}\"><br>
    {% if errorList['price'] %}<p>{{ errorList['price'] }}</p>{% endif %}
    Add Pictures (at least 1, up to 3)<input type=\"file\" name=\"adImages[]\" multiple='multiple'><br>
    {% if errorList['adImages'] %}<p>{{ errorList['adImages'] }}</p>{% endif %}
    <input type=\"submit\" value=\"{% if isEditing %}Update{% else %}Create{% endif %} Ad\">
</form>

", "/temporarytemplates/addAd.html.twig", "C:\\xampp\\htdocs\\phpproject\\templates\\temporarytemplates\\addAd.html.twig");
    }
}
