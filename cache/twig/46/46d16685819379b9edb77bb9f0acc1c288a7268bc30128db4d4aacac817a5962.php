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

/* include/head.html.twig */
class __TwigTemplate_ebeb597335d467512a1ecd0423ff1deb7602ea96d5f91ccea20cd25594a10bd3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
        ];
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<head>
<meta charset=\"utf-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"author\" content=\"Sibiyā\" />
<meta name=\"copyright\" content=\"2023, Sibiyā\" />
<link rel=\"icon\" type=\"image/x-icon\" href=\"/assets/img/android-chrome-192x192.png\">
    <title>";
        // line 8
        if ($this->getAttribute(($context["page"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "metadata", []));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 11
            echo "    <meta ";
            if ($this->getAttribute($context["meta"], "name", [])) {
                echo "name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["meta"], "name", []));
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "http_equiv", [])) {
                echo "http-equiv=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["meta"], "http_equiv", []));
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "charset", [])) {
                echo "charset=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["meta"], "charset", []));
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "property", [])) {
                echo "property=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["meta"], "property", []));
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "content", [])) {
                echo "content=\"";
                echo $this->getAttribute($context["meta"], "content", []);
                echo "\" ";
            }
            echo ">
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "

";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "
<!--
        % do assets.addJs('jquery', 101) %
        % do assets.addJs('theme://js/matomo.js') %
-->

<!--
<link rel=\"stylesheet\" href=\"/assets/css/custom.css\">
<link rel=\"stylesheet\" href=\"/assets/css/poem.css\">
<link rel=\"stylesheet\" href=\"/assets/webfonts/fontawesome-free-5.15.2-web/css/all.css?ver=103\" >
-->


";
        // line 36
        $this->displayBlock('assets', $context, $blocks);
        // line 40
        echo "
</head>
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 15
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/mustard-ui.min.css"], "method");
        // line 16
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css"], "method");
    }

    // line 20
    public function block_javascripts($context, array $blocks = [])
    {
        // line 21
        echo "
";
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 36
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 37
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
        ";
        // line 38
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    public function getTemplateName()
    {
        return "include/head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 38,  149 => 37,  146 => 36,  136 => 21,  133 => 20,  129 => 16,  127 => 15,  124 => 14,  117 => 40,  115 => 36,  100 => 23,  98 => 20,  94 => 18,  92 => 14,  89 => 13,  56 => 11,  52 => 10,  43 => 8,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<head>
<meta charset=\"utf-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"author\" content=\"Sibiyā\" />
<meta name=\"copyright\" content=\"2023, Sibiyā\" />
<link rel=\"icon\" type=\"image/x-icon\" href=\"/assets/img/android-chrome-192x192.png\">
    <title>{% if page.title %}{{ page.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

{% for meta in page.metadata %}
    <meta {% if meta.name %}name=\"{{ meta.name|e }}\" {% endif %}{% if meta.http_equiv %}http-equiv=\"{{ meta.http_equiv|e }}\" {% endif %}{% if meta.charset %}charset=\"{{ meta.charset|e }}\" {% endif %}{% if meta.property %}property=\"{{ meta.property|e }}\" {% endif %}{% if meta.content %}content=\"{{ meta.content|raw }}\" {% endif %}>
{% endfor %}

{% block stylesheets %}
{% do assets.addCss('theme://css/mustard-ui.min.css') %}
{% do assets.addCss('theme://css/custom.css') %}
{% endblock %}


{% block javascripts %}

{% endblock %}

<!--
        % do assets.addJs('jquery', 101) %
        % do assets.addJs('theme://js/matomo.js') %
-->

<!--
<link rel=\"stylesheet\" href=\"/assets/css/custom.css\">
<link rel=\"stylesheet\" href=\"/assets/css/poem.css\">
<link rel=\"stylesheet\" href=\"/assets/webfonts/fontawesome-free-5.15.2-web/css/all.css?ver=103\" >
-->


{% block assets deferred %}
        {{ assets.css()|raw }}
        {{ assets.js()|raw }}
{% endblock %}

</head>
", "include/head.html.twig", "/home/minato/domains/sibiya.ir/public_html/user/themes/mustard/templates/include/head.html.twig");
    }
}
