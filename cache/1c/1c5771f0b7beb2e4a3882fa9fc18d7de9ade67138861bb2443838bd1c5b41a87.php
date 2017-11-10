<?php

/* addEditAd_success.html.twig */
class __TwigTemplate_a4d291dfccbdff3a92946773f4a0a17f6b94a256c7b3c80b9f76ee7919476851 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "addEditAd_success.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Create Ad success";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<p>You've succesfully ";
        if ((isset($context["isEditing"]) ? $context["isEditing"] : null)) {
            echo "updated";
        } else {
            echo "created";
        }
        echo " your ad. Congratulations !</p>
";
    }

    public function getTemplateName()
    {
        return "addEditAd_success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
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
{% block title %}Create Ad success{% endblock %}
{% block content %}
<p>You've succesfully {% if isEditing %}updated{% else %}created{% endif %} your ad. Congratulations !</p>
{% endblock %}
", "addEditAd_success.html.twig", "C:\\xampp\\htdocs\\phproject\\templates\\addEditAd_success.html.twig");
    }
}
