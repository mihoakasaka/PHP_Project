<?php

/* panelSearchResultsCategories.html.twig */
class __TwigTemplate_0552019c312c6c22490bab3efbaf5edc82b8a145e3818da12ab64af3b86f1e4a extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["v"]) ? $context["v"] : null), "categoryResults", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 2
            echo "    <p><a href='/category/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "urlSanitizedFullName", array()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "fullName", array()), "html", null, true);
            echo "</a></p>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 4
            echo "    <p class='text-muted'>No categories found matching this search</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "panelSearchResultsCategories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for c in v.categoryResults %}
    <p><a href='/category/{{c.urlSanitizedFullName}}'>{{ c.fullName }}</a></p>
    {% else %}
    <p class='text-muted'>No categories found matching this search</p>
{% endfor %}
", "panelSearchResultsCategories.html.twig", "C:\\xampp\\htdocs\\phpproject\\templates\\panelSearchResultsCategories.html.twig");
    }
}
