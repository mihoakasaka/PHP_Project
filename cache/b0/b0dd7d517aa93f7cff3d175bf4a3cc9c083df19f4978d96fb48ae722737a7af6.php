<?php

/* existingAdImagesPanel.html.twig */
class __TwigTemplate_b6c07b804fe28db17ed6880f3b5118ce329cbcb765c4b2c27b8094a52df78aa5 extends Twig_Template
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
        echo "<h3>Existing images</h3>
<p class=\"help-block\" id=\"existingImages\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["i"]) ? $context["i"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 4
            echo "    <div class=\"pict-thumb\">
        <img  src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "imagePath", array()), "html", null, true);
            echo "\" />
        ";
            // line 6
            if ((twig_length_filter($this->env, (isset($context["i"]) ? $context["i"] : null)) > 1)) {
                // line 7
                echo "            <a class=\"btn-danger\" href=\"/ajax/ad/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id", array()), "html", null, true);
                echo "/pictures/delete/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "id", array()), "html", null, true);
                echo "\">Delete Me</a> 
            <a class=\"btn-warning\" href=\"/ajax/ad/";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id", array()), "html", null, true);
                echo "/pictures/delete/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "id", array()), "html", null, true);
                echo "\">Make me the main picture</a>
        ";
            }
            // line 10
            echo "    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "existingAdImagesPanel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  50 => 10,  43 => 8,  36 => 7,  34 => 6,  30 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>Existing images</h3>
<p class=\"help-block\" id=\"existingImages\">
    {% for image in i %}
    <div class=\"pict-thumb\">
        <img  src=\"{{ image.imagePath }}\" />
        {% if i|length > 1%}
            <a class=\"btn-danger\" href=\"/ajax/ad/{{v.id}}/pictures/delete/{{image.id}}\">Delete Me</a> 
            <a class=\"btn-warning\" href=\"/ajax/ad/{{v.id}}/pictures/delete/{{image.id}}\">Make me the main picture</a>
        {% endif %}
    </div>
    {% endfor %}
</p>
", "existingAdImagesPanel.html.twig", "C:\\xampp\\htdocs\\phproject\\templates\\existingAdImagesPanel.html.twig");
    }
}
