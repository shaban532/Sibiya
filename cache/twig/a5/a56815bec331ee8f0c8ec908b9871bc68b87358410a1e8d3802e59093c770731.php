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

/* default.html.twig */
class __TwigTemplate_aed939aa78b621f906e65cd595dc52a35d1c754ab43f99e872d1c7def3349b6a extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "default.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        // line 3
        echo "
          <h1 class=\"alert alert-title\" style=\"color:black;\"> ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
        echo " </h1>

  <div class=\"panel\">
    <div class=\"panel-head align-right\">
      ";
        // line 8
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", [])) {
            // line 9
            echo "  نویسنده: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []));
            echo "
         ";
        } else {
            // line 11
            echo "      نویسنده: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "name", []));
            echo "
       ";
        }
        // line 13
        echo "           <br>
تاریخ انتشار:     ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "pdate", []));
        echo "

    </div>
    <div class=\"panel-body\" style=\" text-align: justify; text-justify: inter-word;\">
        ";
        // line 18
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
         ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", []));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 20
            echo "    <button class=\"button-footer\"  style=\"color:white;\" onclick=\"window.location.href='/tags/";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "';\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</button>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </div>
    <div class=\"panel-footer align-right \">
        </br>
    </div>
</div>  
    
    
    
  ";
        // line 68
        echo "

</div>
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 68,  95 => 22,  84 => 20,  80 => 19,  76 => 18,  69 => 14,  66 => 13,  60 => 11,  54 => 9,  52 => 8,  45 => 4,  42 => 3,  39 => 2,  29 => 1,);
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

          <h1 class=\"alert alert-title\" style=\"color:black;\"> {{ page.title }} </h1>

  <div class=\"panel\">
    <div class=\"panel-head align-right\">
      {% if page.header.author %}
  نویسنده: {{page.header.author|e}}
         {% else %}
      نویسنده: {{site.author.name|e}}
       {% endif %}
           <br>
تاریخ انتشار:     {{page.header.pdate|e}}

    </div>
    <div class=\"panel-body\" style=\" text-align: justify; text-justify: inter-word;\">
        {{ page.content|raw }}
         {% for p in page.taxonomy.tag %}
    <button class=\"button-footer\"  style=\"color:white;\" onclick=\"window.location.href='/tags/{{p}}';\">{{ p }}</button>
{% endfor %}
    </div>
    <div class=\"panel-footer align-right \">
        </br>
    </div>
</div>  
    
    
    
  {#  
 <div class=\"align-center\">
{% for p in page.taxonomy.tag %}
    <button class=\"button-brand\" onclick=\"window.location.href='/tags/{{p}}';\">{{ p }}</button>
{% endfor %}
</div>


{% if not page.isFirst %}
<a style=\"color:black;\" href=\"{{ page.nextSibling.url }}\">
 <p class=\"alert alert-info\">قبلی : {{ page.nextSibling.title }} </p></a>
{% endif %}

{% if not page.isLast %}
<a style=\"color:black;\" href=\"{{ page.prevSibling.url }}\">
 <p class=\"alert alert-info\">بعدی : {{ page.prevSibling.title }} </p></a>
 {% endif %}
 
 <section class=\"align-center\">
 <ul class=\"pagination align-center\">
        {% if not page.isFirst %}
    <li calss=\"align-center\"><a href=\"{{ page.nextSibling.url }}\">قبلی : {{ page.nextSibling.title }}</a></li>
 {% endif %}
    {% if not page.isLast %}
    <li><a href=\"{{ page.prevSibling.url }}\">بعدی : {{ page.prevSibling.title }}</a></li>
 {% endif %}
</ul>
 </section>
 
  <div class=\"align-center\">
    {% if not page.isFirst %}
    <button class=\"button-primary-outlined\" onclick=\"window.location.href='{{ page.nextSibling.url }}';\">قبلی : {{ page.nextSibling.title }}</button>
 {% endif %}
    {% if not page.isLast %}
    <button class=\"button-primary-outlined\" onclick=\"window.location.href='{{ page.prevSibling.url }}';\">بعدی : {{ page.prevSibling.title }}</button>
    {% endif %}
</div>
#}


</div>
{% endblock %}", "default.html.twig", "/home/minato/domains/sibiya.ir/public_html/user/themes/mustard/templates/default.html.twig");
    }
}
