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

/* list.html.twig */
class __TwigTemplate_9efc14d291db35360b98f5e03a4ca4bccc38709f4c7c2543a755558704ed8b30 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        // line 3
        echo " <h1 class=\"alert alert-title\" style=\"color:black;\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "fa_title", []), "html");
        echo " </h1>
";
        // line 32
        echo "


<div class=\"row\" >
";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "collection", []), "order", [0 => "order", 1 => "date", 2 => "desc"], "method"), "slice", [0 => 0, 1 => 5000], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 37
            echo "<div class=\"col col-md-6\">
<div class=\"panel\" >
  <div class=\"panel-head align-right\">
  <h2 class=\"alert alert-title\" style=\"color:black;\"> ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", []), "html", null, true);
            echo " </h2>
  <p class=\"panel-title\">
  <div class=\"row\" >
  <div class=\"col col-md-12\">
  ";
            // line 44
            if ($this->getAttribute($this->getAttribute($context["post"], "header", []), "author", [])) {
                // line 45
                echo "  نویسنده: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "header", []), "author", []));
                echo "
         ";
            } else {
                // line 47
                echo "      نویسنده: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "name", []));
                echo "
       ";
            }
            // line 49
            echo "          </div>
  <div class=\"col col-md-12\">
تاریخ انتشار:     ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "header", []), "pdate", []));
            echo "
           </div>
</div>
    </p>
    </div>
<div class=\"panel-body\" style=\" text-align: justify; text-justify: inter-word;\">
";
            // line 57
            echo $this->getAttribute($context["post"], "summary", []);
            echo "
         ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["post"], "taxonomy", []), "tag", []));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 59
                echo "    <button class=\"button-footer\"  style=\"color:white;\" onclick=\"window.location.href='/tags/";
                echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                echo "';\">";
                echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                echo "</button>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "</div>
<div class=\"panel-footer\">
<a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", []), "html", null, true);
            echo "\" class=\"button button-brand\">خواندن</a>
</div>
</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "</div>






";
        // line 150
        echo "


";
    }

    public function getTemplateName()
    {
        return "list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 150,  130 => 68,  119 => 63,  115 => 61,  104 => 59,  100 => 58,  96 => 57,  87 => 51,  83 => 49,  77 => 47,  71 => 45,  69 => 44,  62 => 40,  57 => 37,  53 => 36,  47 => 32,  42 => 3,  39 => 2,  29 => 1,);
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
 <h1 class=\"alert alert-title\" style=\"color:black;\"> {{ site.fa_title|e('html') }} </h1>
{#
{% for p in page.collection %}
<h2>{{ p.title|e }}</h2>
{{ p.summary|raw }}

{% endfor %}
{% for post in page.collection.order('order', 'date', 'desc').slice(0, 5000)|reverse %}


{% for post in page.collection.order('order', 'date', 'desc').slice(0, 5000)%}
{% if loop.index % 4 == 0 and post.published == true %}
<a style=\"color:black;\" href=\"{{ post.url }}\">
 <p class=\"alert alert-title\"> {{ post.title }} </p></a>
{% endif %}
{% if loop.index % 4 == 1 and post.published == true %}
<a style=\"color:black;\" href=\"{{ post.url }}\">
 <p class=\"alert alert-title\"> {{ post.title }} </p></a>
{% endif %}
{% if loop.index % 4 == 2 and post.published == true %}
<a style=\"color:black;\" href=\"{{ post.url }}\">
 <p class=\"alert alert-title\"> {{ post.title }} </p></a>
{% endif %}
{% if loop.index % 4 == 3  and post.published == true %}
<a style=\"color:black;\" href=\"{{ post.url }}\">
 <p class=\"alert alert-title\"> {{ post.title }} </p></a>
{% endif %}
{% endfor %}
#}



<div class=\"row\" >
{% for post in page.collection.order('order', 'date', 'desc').slice(0, 5000)%}
<div class=\"col col-md-6\">
<div class=\"panel\" >
  <div class=\"panel-head align-right\">
  <h2 class=\"alert alert-title\" style=\"color:black;\"> {{ post.title }} </h2>
  <p class=\"panel-title\">
  <div class=\"row\" >
  <div class=\"col col-md-12\">
  {% if post.header.author %}
  نویسنده: {{post.header.author|e}}
         {% else %}
      نویسنده: {{site.author.name|e}}
       {% endif %}
          </div>
  <div class=\"col col-md-12\">
تاریخ انتشار:     {{post.header.pdate|e}}
           </div>
</div>
    </p>
    </div>
<div class=\"panel-body\" style=\" text-align: justify; text-justify: inter-word;\">
{{ post.summary|raw }}
         {% for tag in post.taxonomy.tag %}
    <button class=\"button-footer\"  style=\"color:white;\" onclick=\"window.location.href='/tags/{{ tag }}';\">{{ tag }}</button>
{% endfor %}
</div>
<div class=\"panel-footer\">
<a href=\"{{ post.url }}\" class=\"button button-brand\">خواندن</a>
</div>
</div>
</div>
{% endfor %}
</div>






{#
<div class=\"row\" >
<div class=\"col col-md-6\">
{% for post in page.collection.order('order', 'date', 'desc').slice(0, 5000)%}
{% if (loop.index is odd) %}
<div class=\"panel\" >
  <div class=\"panel-head align-right\">
  </br>
  <h2 class=\"alert alert-title\" style=\"color:black;\"> {{ post.title }} </h2>
  <p class=\"panel-title\">
  <div class=\"row\" >
  <div class=\"col col-md-6\">
  {% if post.header.author %}
  نویسنده: {{post.header.author|e}}
         {% else %}
      نویسنده: {{site.author.name|e}}
       {% endif %}
          </div>
  <div class=\"col col-md-6\">
تاریخ انتشار:     {{post.header.pdate|e}}
           </div>
</div>
    </p>
    </div>
<div class=\"panel-body\" style=\" text-align: justify; text-justify: inter-word;\">
{{ post.summary|raw }}
         {% for tag in post.taxonomy.tag %}
    <button class=\"button-footer\"  style=\"color:white;\" onclick=\"window.location.href='/tags/{{ tag }}';\">{{ tag }}</button>
{% endfor %}
</div>
<div class=\"panel-footer\">
<a href=\"{{ post.url }}\" class=\"button button-brand\">خواندن</a>
</div>
</div>
{% endif %}
{% endfor %}
</div>

<div class=\"col col-md-6\">
{% for post in page.collection.order('order', 'date', 'desc').slice(0, 1000)%}
{% if (loop.index is even) %}
<div class=\"panel\" >
  <div class=\"panel-head align-right\">
  </br>
  <h2 class=\"alert alert-title\" style=\"color:black;\"> {{ post.title }} </h2>
  <p class=\"panel-title\">
  <div class=\"row\" >
  <div class=\"col col-md-6\">
  {% if post.header.author %}
  نویسنده: {{post.header.author|e}}
         {% else %}
      نویسنده: {{site.author.name|e}}
       {% endif %}
          </div>
  <div class=\"col col-md-6\">
تاریخ انتشار:     {{post.header.pdate|e}}
           </div>
</div>
    </p>
    </div>
<div class=\"panel-body\" style=\" text-align: justify; text-justify: inter-word;\">
{{ post.summary|raw }}
         {% for tag in post.taxonomy.tag %}
    <button class=\"button-footer\"  style=\"color:white;\" onclick=\"window.location.href='/tags/{{ tag }}';\">{{ tag }}</button>
{% endfor %}
</div>
<div class=\"panel-footer\">
<a href=\"{{ post.url }}\" class=\"button button-brand\">خواندن</a>
</div>
</div>
{% endif %}
{% endfor %}
</div>
</div>
#}



{% endblock %}", "list.html.twig", "/home/minato/domains/sibiya.ir/public_html/user/themes/mustard/templates/list.html.twig");
    }
}
