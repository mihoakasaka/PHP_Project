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
        echo "<div id=\"existingImages\">
    <h3>Existing images</h3>
    <p>
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["i"]) ? $context["i"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 5
            echo "        <div class=\"pict-thumb\">
            <img  src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "imagePath", array()), "html", null, true);
            echo "\" />
            ";
            // line 7
            if ((twig_length_filter($this->env, (isset($context["i"]) ? $context["i"] : null)) > 1)) {
                // line 8
                echo "                <button class=\"btn-danger\" onclick=\"deleteAndReload('/ajax/ad/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id", array()), "html", null, true);
                echo "/pictures/delete/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "id", array()), "html", null, true);
                echo "');return false;\"><span class=\"fa fa-asterisk\" aria-hidden=\"true\"></i>Delete Me</button> 
                <button class=\"btn-warning\" href=\"/ajax/ad/";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id", array()), "html", null, true);
                echo "/pictures/promote/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "id", array()), "html", null, true);
                echo "\">Make me the main picture</button>
            ";
            }
            // line 11
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</p>
</div>";
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
        return array (  58 => 13,  51 => 11,  44 => 9,  37 => 8,  35 => 7,  31 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"existingImages\">
    <h3>Existing images</h3>
    <p>
        {% for image in i %}
        <div class=\"pict-thumb\">
            <img  src=\"{{ image.imagePath }}\" />
            {% if i|length > 1%}
                <button class=\"btn-danger\" onclick=\"deleteAndReload('/ajax/ad/{{v.id}}/pictures/delete/{{image.id}}');return false;\"><span class=\"fa fa-asterisk\" aria-hidden=\"true\"></i>Delete Me</button> 
                <button class=\"btn-warning\" href=\"/ajax/ad/{{v.id}}/pictures/promote/{{image.id}}\">Make me the main picture</button>
            {% endif %}
        </div>
    {% endfor %}
</p>
</div>", "existingAdImagesPanel.html.twig", "C:\\xampp\\htdocs\\phpproject\\templates\\existingAdImagesPanel.html.twig");
    }
}
