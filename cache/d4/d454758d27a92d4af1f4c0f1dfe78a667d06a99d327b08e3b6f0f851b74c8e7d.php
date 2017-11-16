<?php

/* account/admanagementmodalpanel.html.twig */
class __TwigTemplate_0dbd29453dfb9864e8f171f60c307025569e83cdb3f4d72d8695bf2b2454f154 extends Twig_Template
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
        echo "<form method=\"post\" id=\"adManagementModalForm\" class=\"form-access\">
    <h2>Extend Your Ad</h2>
    <div class=\"form-group\">
        <p class=\"help-block\" id=\"loginError\">Pay 55\$ and extend your ad by 5 days -- to November 21, 2017<p>
    </div>
    <div class=\"\">
        <input id=\"adManagementModalPay\" type=\"submit\" value=\"Pay\">
        <input id=\"adManagementModalCancel\" type='reset' value='Cancel'>
    </div>
</form>                
";
    }

    public function getTemplateName()
    {
        return "account/admanagementmodalpanel.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form method=\"post\" id=\"adManagementModalForm\" class=\"form-access\">
    <h2>Extend Your Ad</h2>
    <div class=\"form-group\">
        <p class=\"help-block\" id=\"loginError\">Pay 55\$ and extend your ad by 5 days -- to November 21, 2017<p>
    </div>
    <div class=\"\">
        <input id=\"adManagementModalPay\" type=\"submit\" value=\"Pay\">
        <input id=\"adManagementModalCancel\" type='reset' value='Cancel'>
    </div>
</form>                
", "account/admanagementmodalpanel.html.twig", "C:\\xampp\\htdocs\\phproject\\templates\\account\\admanagementmodalpanel.html.twig");
    }
}
