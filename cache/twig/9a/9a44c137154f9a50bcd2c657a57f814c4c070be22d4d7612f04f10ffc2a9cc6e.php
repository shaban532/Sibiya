<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_e4d660176c40bc5dfa8042e1c1f518cec58adef08aa35ee5ea1ef776fb7cfeed extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html dir=\"rtl\" lang=\"fa\">
";
        // line 3
        $this->loadTemplate("include/head.html.twig", "base.html.twig", 3)->display($context);
        // line 4
        echo "<body>
<div class=\"main\">
";
        // line 6
        $this->loadTemplate("include/nav.html.twig", "base.html.twig", 6)->display($context);
        // line 7
        echo "<section class=\"section-tertiary key-points align-center\">
<div class=\"container container-small\">
 ";
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('content', $context, $blocks);
        // line 31
        echo "</div>
</section>
</div>
";
        // line 34
        $this->loadTemplate("include/footer.html.twig", "base.html.twig", 34)->display($context);
        // line 35
        $this->displayBlock('bottom', $context, $blocks);
        // line 38
        echo "</body>
</html>";
    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
    }

    // line 35
    public function block_bottom($context, array $blocks = [])
    {
        // line 36
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 36,  72 => 35,  67 => 30,  62 => 38,  60 => 35,  58 => 34,  53 => 31,  51 => 30,  48 => 29,  44 => 7,  42 => 6,  38 => 4,  36 => 3,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html dir=\"rtl\" lang=\"fa\">
{% include 'include/head.html.twig' %}
<body>
<div class=\"main\">
{% include 'include/nav.html.twig' %}
<section class=\"section-tertiary key-points align-center\">
<div class=\"container container-small\">
 {# 
<ul class=\"breadcrumbs breadcrumbs-alt\">  
<li><a href=\"/\">خانه</a></li>
{% if page.parent.parent.parent.parent and  page.parent.parent.parent.parent.title != \"Pages\" %}
<li><a href=\"{{ page.parent.parent.parent.parent.url|e }}\">{{ page.parent.parent.parent.parent.title|e }}</a></li>
{% endif %}
{% if page.parent.parent.parent and  page.parent.parent.parent.title != \"Pages\" %}
<li><a href=\"{{ page.parent.parent.parent.url|e }}\">{{ page.parent.parent.parent.title|e }}</a></li>
{% endif %}
{% if page.parent.parent and  page.parent.parent.title != \"Pages\" %}
<li><a href=\"{{ page.parent.parent.url|e }}\">{{ page.parent.parent.title|e }}</a></li>
{% endif %}
{% if page.parent  and page.parent.title != \"Pages\" %}
<li><a href=\"{{ page.parent.url|e }}\">{{ page.parent.title|e }}</a></li>
{% endif %}
{% if page.title != \"Sibiyā\" %}
<li>{{page.title}}</li>
{% endif %}
</ul>
#}

{% block content %}{% endblock %}
</div>
</section>
</div>
{% include 'include/footer.html.twig' %}
{% block bottom %}
        {{ assets.js('bottom')|raw }}
{% endblock %}
</body>
</html>", "base.html.twig", "/home/minato/domains/sibiya.ir/public_html/user/themes/mustard/templates/base.html.twig");
    }
}
