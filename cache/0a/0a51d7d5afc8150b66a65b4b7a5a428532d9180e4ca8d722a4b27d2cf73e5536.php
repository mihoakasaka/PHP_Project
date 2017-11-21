<?php

/* ajaxads.html.twig */
class __TwigTemplate_7b6711b05d807a09282bd385ce2a573499b7d278b36f07af47230c0ca78f4724 extends Twig_Template
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
        // line 2
        echo "<div >
 
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adsList"]) ? $context["adsList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 5
            echo "            <div class=\"adContainer\">
                <div class=\"imageContainer\">
                 <a href=\"/ad/";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
            echo "\">   <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "imagePath", array()), "html", null, true);
            echo "\" width=\"100\"></a>
                </div>
                <div class=\"title\">
                    <p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "title", array()), "html", null, true);
            echo "</p>
                </div>
                <div class=\"price\">
                    <p>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "price", array()), "html", null, true);
            echo "</p>      
                </div>

            </div>                   
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
    </div>";
    }

    public function getTemplateName()
    {
        return "ajaxads.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 18,  45 => 13,  39 => 10,  31 => 7,  27 => 5,  23 => 4,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
<div >
 
        {% for a in adsList %}
            <div class=\"adContainer\">
                <div class=\"imageContainer\">
                 <a href=\"/ad/{{a.id}}\">   <img src=\"{{a.imagePath}}\" width=\"100\"></a>
                </div>
                <div class=\"title\">
                    <p>{{a.title}}</p>
                </div>
                <div class=\"price\">
                    <p>{{a.price}}</p>      
                </div>

            </div>                   
        {% endfor %}

    </div>", "ajaxads.html.twig", "C:\\xampp\\htdocs\\phproject\\templates\\ajaxads.html.twig");
    }
}
