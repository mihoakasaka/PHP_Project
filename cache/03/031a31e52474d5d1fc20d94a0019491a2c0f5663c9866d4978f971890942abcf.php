<?php

/* account/dashboard.html.twig */
class __TwigTemplate_519aed8f9497ef15a91529755aebac5ae3164b2e0494002a063e2481b751acd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "account/dashboard.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'headextra' => array($this, 'block_headextra'),
            'content' => array($this, 'block_content'),
            'bodyendextra' => array($this, 'block_bodyendextra'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Seller Dashboard";
    }

    // line 4
    public function block_headextra($context, array $blocks = array())
    {
        // line 5
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <div id=\"adManagementModal\"> 
        <form method=\"post\" id=\"adManagementModalForm\" class=\"form-access\">
            <h2 id=\"modalHeading\">Extend Your Ad</h2>
            <div class=\"form-group\">
                <p class=\"help-block\" id=\"modalMessage\">Pay 5\$ and extend your ad by 5 days -- to November 21, 2017<p>
            </div>
            <div class=\"\">
                <input id=\"adManagementModalSubmit\" type=\"submit\" value=\"Pay\">
                <input id=\"adManagementModalCancel\" type='reset' value='Cancel'>
            </div>
        </form>                
    </div>



    <p><a href=\"/ad/add\">Create an ad</a></p>
    <h1>Your Ads</h1>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adsList"]) ? $context["adsList"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 35
            echo "                <tr>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "title", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "status", array()), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 39
            if (($this->getAttribute($context["a"], "status", array()) == "created")) {
                echo "<button class='btn btn-primary btn-sm modalaction' data-message=\"Pay 5 dollars and activate your ad for 5 days\" data-action-url=\"/action/dashboard/activate/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
                echo "\" data-heading=\"Activate Ad\" data-action-label=\"Pay to activate\">Activate</button>";
            }
            // line 40
            echo "                        ";
            if (($this->getAttribute($context["a"], "status", array()) == "active")) {
                echo "<button class='btn btn-primary btn-sm modalaction' data-message=\"Pay 5 dollars and extend your ad for 10 days\" data-action-url=\"/action/dashboard/extend/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
                echo "\" data-heading=\"Extend Ad\" data-action-label=\"Pay to extend\">Extend</button>";
            }
            // line 41
            echo "                        ";
            if (($this->getAttribute($context["a"], "status", array()) == "expired")) {
                echo "<button class='btn btn-primary btn-sm modalaction' data-message=\"Pay 5 dollars and re-activate your ad for 7 days\" data-action-url=\"/action/dashboard/reactivate/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
                echo "\" data-heading=\"Re-Activate Ad\" data-action-label=\"Pay to re-activate\">Re-Activate</button>";
            }
            // line 42
            echo "                        ";
            if (($this->getAttribute($context["a"], "status", array()) == "active")) {
                // line 43
                echo "                            ";
                if (($this->getAttribute($context["a"], "isToBeDisplayed", array()) == 0)) {
                    echo "<button class='btn btn-primary btn-sm'>Display</button>";
                } else {
                    echo "<button class='btn btn-sm'>Hide</button>";
                }
                // line 44
                echo "                        ";
            }
            // line 45
            echo "                        <button class='btn btn-sm'><a href=\"/ad/edit/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
            echo "\"><span class=\"fa fa-pencil-square-o\" aria-hidden=\"true\" /> Edit</a></button>
                        <button class='btn btn-sm btn-danger'><span class=\"fa fa-trash\" aria-hidden=\"true\" /> Delete</button>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 50
            echo "                <tr colspan=\"3\"><td>You don't have any ads yet. <a href='/ad/add'>Create one now</a></td></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </tbody>
    </table>


";
    }

    // line 58
    public function block_bodyendextra($context, array $blocks = array())
    {
        // line 59
        echo "        <script>
            \$(document).ready(function () {

                // bind event handlers
                \$(\"#adManagementModalCancel\").click(function () {
                    \$(\"#adManagementModal\").removeClass(\"modal-show\");
                });
                
                // Modal action: a button is generating an action
                \$(\".modalaction\").click(function (ev) {
                    // Get data from target button using data attributes
                    var \$actionButton = ev.target;
                    var message = \$actionButton.getAttribute('data-message');
                    var heading = \$actionButton.getAttribute('data-heading');
                    var actionUrl = \$actionButton.getAttribute('data-action-url');
                    var actionLabel = \$actionButton.getAttribute('data-action-label');
                    \$(\"#modalHeading\").text(heading);
                    \$(\"#modalMessage\").text(message);
                    \$(\"#adManagementModalForm\").attr('action', actionUrl);
                    \$(\"#adManagementModalSubmit\").val(actionLabel);
                    \$(\"#adManagementModal\").addClass(\"modal-show\");
                });
            });

        </script>

";
    }

    public function getTemplateName()
    {
        return "account/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 59,  152 => 58,  144 => 52,  137 => 50,  126 => 45,  123 => 44,  116 => 43,  113 => 42,  106 => 41,  99 => 40,  93 => 39,  88 => 37,  84 => 36,  81 => 35,  76 => 34,  48 => 8,  45 => 7,  40 => 5,  37 => 4,  31 => 3,  11 => 1,);
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

{% block title %}Seller Dashboard{% endblock %}
{% block headextra %}

{% endblock %}
{% block content %}
    <div id=\"adManagementModal\"> 
        <form method=\"post\" id=\"adManagementModalForm\" class=\"form-access\">
            <h2 id=\"modalHeading\">Extend Your Ad</h2>
            <div class=\"form-group\">
                <p class=\"help-block\" id=\"modalMessage\">Pay 5\$ and extend your ad by 5 days -- to November 21, 2017<p>
            </div>
            <div class=\"\">
                <input id=\"adManagementModalSubmit\" type=\"submit\" value=\"Pay\">
                <input id=\"adManagementModalCancel\" type='reset' value='Cancel'>
            </div>
        </form>                
    </div>



    <p><a href=\"/ad/add\">Create an ad</a></p>
    <h1>Your Ads</h1>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for a in adsList %}
                <tr>
                    <td>{{a.title}}</td>
                    <td>{{a.status}}</td>
                    <td>
                        {% if a.status == 'created' %}<button class='btn btn-primary btn-sm modalaction' data-message=\"Pay 5 dollars and activate your ad for 5 days\" data-action-url=\"/action/dashboard/activate/{{a.id}}\" data-heading=\"Activate Ad\" data-action-label=\"Pay to activate\">Activate</button>{% endif %}
                        {% if a.status == 'active' %}<button class='btn btn-primary btn-sm modalaction' data-message=\"Pay 5 dollars and extend your ad for 10 days\" data-action-url=\"/action/dashboard/extend/{{a.id}}\" data-heading=\"Extend Ad\" data-action-label=\"Pay to extend\">Extend</button>{% endif %}
                        {% if a.status == 'expired' %}<button class='btn btn-primary btn-sm modalaction' data-message=\"Pay 5 dollars and re-activate your ad for 7 days\" data-action-url=\"/action/dashboard/reactivate/{{a.id}}\" data-heading=\"Re-Activate Ad\" data-action-label=\"Pay to re-activate\">Re-Activate</button>{% endif %}
                        {% if a.status == 'active' %}
                            {% if a.isToBeDisplayed == 0 %}<button class='btn btn-primary btn-sm'>Display</button>{% else %}<button class='btn btn-sm'>Hide</button>{% endif %}
                        {% endif %}
                        <button class='btn btn-sm'><a href=\"/ad/edit/{{a.id}}\"><span class=\"fa fa-pencil-square-o\" aria-hidden=\"true\" /> Edit</a></button>
                        <button class='btn btn-sm btn-danger'><span class=\"fa fa-trash\" aria-hidden=\"true\" /> Delete</button>
                    </td>
                </tr>
            {% else %}
                <tr colspan=\"3\"><td>You don't have any ads yet. <a href='/ad/add'>Create one now</a></td></tr>
            {% endfor %}
        </tbody>
    </table>


{% endblock %}

{% block bodyendextra %}
        <script>
            \$(document).ready(function () {

                // bind event handlers
                \$(\"#adManagementModalCancel\").click(function () {
                    \$(\"#adManagementModal\").removeClass(\"modal-show\");
                });
                
                // Modal action: a button is generating an action
                \$(\".modalaction\").click(function (ev) {
                    // Get data from target button using data attributes
                    var \$actionButton = ev.target;
                    var message = \$actionButton.getAttribute('data-message');
                    var heading = \$actionButton.getAttribute('data-heading');
                    var actionUrl = \$actionButton.getAttribute('data-action-url');
                    var actionLabel = \$actionButton.getAttribute('data-action-label');
                    \$(\"#modalHeading\").text(heading);
                    \$(\"#modalMessage\").text(message);
                    \$(\"#adManagementModalForm\").attr('action', actionUrl);
                    \$(\"#adManagementModalSubmit\").val(actionLabel);
                    \$(\"#adManagementModal\").addClass(\"modal-show\");
                });
            });

        </script>

{% endblock %}
", "account/dashboard.html.twig", "C:\\xampp\\htdocs\\phproject\\templates\\account\\dashboard.html.twig");
    }
}
