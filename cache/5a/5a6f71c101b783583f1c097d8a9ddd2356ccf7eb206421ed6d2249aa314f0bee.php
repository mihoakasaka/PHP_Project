<?php

/* login_success.html.twig */
class __TwigTemplate_bfd78309f8b224fde081fba1d62f1b79d544c12ddfce0b4958358a8b0ba82084 extends Twig_Template
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
        echo "
<p>Login successful, ";
        // line 3
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo " <a href=\"/\">click to continue</a>.</p>";
    }

    public function getTemplateName()
    {
        return "login_success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 3,  19 => 2,);
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

<p>Login successful, {{name}} <a href=\"/\">click to continue</a>.</p>", "login_success.html.twig", "C:\\xampp\\htdocs\\PHP_Project\\templates\\login_success.html.twig");
    }
}
