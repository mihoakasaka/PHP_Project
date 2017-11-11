<?php

/* panelSearchResultsUsers.html.twig */
class __TwigTemplate_da119c30f9842399068ac3878a491cc43b15772eaa08910673a15323eec5844e extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["v"]) ? $context["v"] : null), "userResults", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 3
            echo "    <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "name", array()), "html", null, true);
            echo "</p>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 5
            echo "    <p class='text-muted'>No users found matching this search</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "panelSearchResultsUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  24 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# This template is meant to be included with an include into the search results main template and the search results ajax templates #}
{% for u in v.userResults %}
    <p>{{ u.name }}</p>
{% else %}
    <p class='text-muted'>No users found matching this search</p>
{% endfor %}
", "panelSearchResultsUsers.html.twig", "C:\\xampp\\htdocs\\phpproject\\templates\\panelSearchResultsUsers.html.twig");
    }
}
