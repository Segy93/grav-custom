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

/* partials/sidebar.html.twig */
class __TwigTemplate_48570a11d12f174b757a563e9f68f9a46c397607ee3da3d1da2acc49284a846b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["feed_url"] = (((($this->getAttribute(($context["blog"] ?? null), "url", []) == "/") || ($this->getAttribute(($context["blog"] ?? null), "url", []) == ($context["base_url_relative"] ?? null)))) ? (((($context["base_url_relative"] ?? null) . "/") . $this->getAttribute(($context["blog"] ?? null), "slug", []))) : ($this->getAttribute(($context["blog"] ?? null), "url", [])));
        // line 2
        $context["new_base_url"] = ((($this->getAttribute(($context["blog"] ?? null), "url", []) == "/")) ? ("") : ($this->getAttribute(($context["blog"] ?? null), "url", [])));
        // line 3
        echo "<div class=\"sidebar-content\">
    <h4>recent pages</h4>
</div>

";
        // line 7
        $this->loadTemplate("partials/recent-posts.html.twig", "partials/sidebar.html.twig", 7)->display($context);
        // line 8
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "enabled", [])) {
            // line 9
            echo "<div class=\"sidebar-content\">
    <h4>";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "SIDEBAR.SIMPLE_SEARCH.HEADLINE"), "html", null, true);
            echo "</h4>
    ";
            // line 11
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/sidebar.html.twig", 11)->display($context);
            // line 12
            echo "</div>
";
        }
        // line 14
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "relatedpages", []), "enabled", []) && (twig_length_filter($this->env, ($context["related_pages"] ?? null)) > 0))) {
            // line 15
            echo "    <h4>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "SIDEBAR.RELATED_POSTS.HEADLINE"), "html", null, true);
            echo "</h4>
    ";
            // line 16
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/sidebar.html.twig", 16)->display($context);
        }
        // line 18
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "random", []), "enabled", [])) {
            // line 19
            echo "<div class=\"sidebar-content\">
\t<h4>";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "SIDEBAR.RANDOM_ARTICLE.HEADLINE"), "html", null, true);
            echo "</h4>
\t<a class=\"button\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/random\"><i class=\"fa fa-retweet\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "SIDEBAR.RANDOM_ARTICLE.FEELING_LUCKY"), "html", null, true);
            echo "</a>
</div>
";
        }
        // line 24
        echo "<div class=\"sidebar-content\">
\t<h4>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "SIDEBAR.SOME_TEXT_WIDGET.HEADLINE"), "html", null, true);
        echo "</h4>
\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
</div>
";
        // line 28
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "taxonomylist", []), "enabled", [])) {
            // line 29
            echo "<div class=\"sidebar-content\">
    <h4>";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "SIDEBAR.POPULAR_TAGS.HEADLINE"), "html", null, true);
            echo "</h4>
    ";
            // line 31
            $this->loadTemplate("partials/taxonomylist.html.twig", "partials/sidebar.html.twig", 31)->display(twig_array_merge($context, ["base_url" => ($context["new_base_url"] ?? null), "taxonomy" => "tag"]));
            // line 32
            echo "</div>
";
        }
        // line 34
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "archives", []), "enabled", [])) {
            // line 35
            echo "<div class=\"sidebar-content\">
    <h4>";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "SIDEBAR.ARCHIVES.HEADLINE"), "html", null, true);
            echo "</h4>
\t";
            // line 37
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 37)->display(twig_array_merge($context, ["base_url" => ($context["new_base_url"] ?? null)]));
            // line 38
            echo "</div>
";
        }
        // line 40
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "feed", []), "enabled", [])) {
            // line 41
            echo "<div class=\"sidebar-content syndicate\">
    <h4>";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "SIDEBAR.SYNDICATE.HEADLINE"), "html", null, true);
            echo "</h4>
    <a class=\"button\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, ($context["feed_url"] ?? null), "html", null, true);
            echo ".atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
    <a class=\"button\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, ($context["feed_url"] ?? null), "html", null, true);
            echo ".rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 44,  132 => 43,  128 => 42,  125 => 41,  123 => 40,  119 => 38,  117 => 37,  113 => 36,  110 => 35,  108 => 34,  104 => 32,  102 => 31,  98 => 30,  95 => 29,  93 => 28,  87 => 25,  84 => 24,  76 => 21,  72 => 20,  69 => 19,  67 => 18,  64 => 16,  59 => 15,  57 => 14,  53 => 12,  51 => 11,  47 => 10,  44 => 9,  42 => 8,  40 => 7,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set feed_url = blog.url == '/' or blog.url == base_url_relative ? (base_url_relative~'/'~blog.slug) : blog.url %}
{% set new_base_url = blog.url == '/' ? '' : blog.url %}
<div class=\"sidebar-content\">
    <h4>recent pages</h4>
</div>

{% include 'partials/recent-posts.html.twig' %}
{% if config.plugins.simplesearch.enabled %}
<div class=\"sidebar-content\">
    <h4>{{ 'SIDEBAR.SIMPLE_SEARCH.HEADLINE'|t }}</h4>
    {% include 'partials/simplesearch_searchbox.html.twig' %}
</div>
{% endif %}
{% if config.plugins.relatedpages.enabled and related_pages|length > 0 %}
    <h4>{{ 'SIDEBAR.RELATED_POSTS.HEADLINE'|t }}</h4>
    {% include 'partials/relatedpages.html.twig' %}
{% endif %}
{% if config.plugins.random.enabled %}
<div class=\"sidebar-content\">
\t<h4>{{ 'SIDEBAR.RANDOM_ARTICLE.HEADLINE'|t }}</h4>
\t<a class=\"button\" href=\"{{ base_url }}/random\"><i class=\"fa fa-retweet\"></i> {{ 'SIDEBAR.RANDOM_ARTICLE.FEELING_LUCKY'|t }}</a>
</div>
{% endif %}
<div class=\"sidebar-content\">
\t<h4>{{ 'SIDEBAR.SOME_TEXT_WIDGET.HEADLINE'|t }}</h4>
\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
</div>
{% if config.plugins.taxonomylist.enabled %}
<div class=\"sidebar-content\">
    <h4>{{ 'SIDEBAR.POPULAR_TAGS.HEADLINE'|t }}</h4>
    {% include 'partials/taxonomylist.html.twig' with {'base_url':new_base_url, 'taxonomy':'tag'} %}
</div>
{% endif %}
{% if config.plugins.archives.enabled %}
<div class=\"sidebar-content\">
    <h4>{{ 'SIDEBAR.ARCHIVES.HEADLINE'|t }}</h4>
\t{% include 'partials/archives.html.twig' with {'base_url':new_base_url} %}
</div>
{% endif %}
{% if config.plugins.feed.enabled %}
<div class=\"sidebar-content syndicate\">
    <h4>{{ 'SIDEBAR.SYNDICATE.HEADLINE'|t }}</h4>
    <a class=\"button\" href=\"{{ feed_url }}.atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
    <a class=\"button\" href=\"{{ feed_url }}.rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
</div>
{% endif %}", "partials/sidebar.html.twig", "C:\\xampp\\htdocs\\grav-admin\\user\\themes\\custom-segi\\templates\\partials\\sidebar.html.twig");
    }
}
