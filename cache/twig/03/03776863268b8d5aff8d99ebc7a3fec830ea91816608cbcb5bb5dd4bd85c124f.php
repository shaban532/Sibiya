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

/* books.html.twig */
class __TwigTemplate_9eaf7a7ef1ca266db6988c2d2513894a982b1d9f53cc293349d6a8fc785d3fe9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("base.html.twig", "books.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        // line 3
        echo "
<h2 class=\"alert alert-danger\" style=\"color:black;\"> ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
        echo " </h2>
</br>

";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "collection", []), "order", [0 => "order", 1 => "date", 2 => "desc"], "method"), "slice", [0 => 0, 1 => 5000], "method")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 8
            echo "
<a style=\"color:black;\" href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", []), "html", null, true);
            echo "\">
 <p class=\"alert alert-info\"> ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", []), "html", null, true);
            echo " </p></a>
 <div style=\" text-align: justify; text-justify: inter-word;\">
    ";
            // line 12
            echo $this->getAttribute($context["post"], "content", []);
            echo "
</div>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "books.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 12,  62 => 10,  58 => 9,  55 => 8,  51 => 7,  45 => 4,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block content %}

<h2 class=\"alert alert-danger\" style=\"color:black;\"> {{ page.title }} </h2>
</br>

{% for post in page.collection.order('order', 'date', 'desc').slice(0, 5000)|reverse %}

<a style=\"color:black;\" href=\"{{ post.url }}\">
 <p class=\"alert alert-info\"> {{ post.title }} </p></a>
 <div style=\" text-align: justify; text-justify: inter-word;\">
    {{ post.content|raw }}
</div>


{% endfor %}
{% endblock %}", "books.html.twig", "/home/minato/domains/newdomainak.ir/public_html/user/themes/mustard/templates/books.html.twig");
    }
}
