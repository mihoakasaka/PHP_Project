<?php

/* panelCategoryList.html.twig */
class __TwigTemplate_cd3193700efb9fd7715f5a26bd38b0c83325db33021b0d5401e6e24eff80cddb extends Twig_Template
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
        echo "    <div id=\"categories\">
 ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoryList"]) ? $context["categoryList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 4
            echo "         
              <p><a href='/category/";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "urlSanitizedFullName", array()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "fullName", array()), "html", null, true);
            echo "</a></p>                 
     
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </div>";
    }

    public function getTemplateName()
    {
        return "panelCategoryList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  29 => 5,  26 => 4,  22 => 3,  19 => 2,);
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
    <div id=\"categories\">
 {% for c in categoryList %}
         
              <p><a href='/category/{{c.urlSanitizedFullName}}'>{{ c.fullName }}</a></p>                 
     
        {% endfor %}
    </div>", "panelCategoryList.html.twig", "C:\\xampp\\htdocs\\phproject\\templates\\panelCategoryList.html.twig");
    }
}
