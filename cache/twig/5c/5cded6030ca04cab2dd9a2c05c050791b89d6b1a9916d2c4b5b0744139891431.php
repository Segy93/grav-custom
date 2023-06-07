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

/* partials/recent-posts.html.twig */
class __TwigTemplate_d9d83b523f6cbcbeb24aabd398c7d87235e856f0edf7ce40df5a6727b2e2753f extends \Twig\Template
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
        echo "<ul>
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recent_posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 3
            echo "        <li class=\"sidebar-post\">
            <a title=\"post.title\" href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", []), "html", null, true);
            echo "\">
                <span>";
            // line 5
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", []), "F Y"), "html", null, true);
            echo "</span><br>
                ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", []), "html", null, true);
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "partials/recent-posts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 10,  48 => 6,  44 => 5,  40 => 4,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<ul>
    {% for post in recent_posts %}
        <li class=\"sidebar-post\">
            <a title=\"post.title\" href=\"{{ post.url }}\">
                <span>{{ post.date|date(\"F Y\") }}</span><br>
                {{ post.title }}
            </a>
        </li>
    {% endfor %}
</ul>", "partials/recent-posts.html.twig", "C:\\xampp\\htdocs\\grav-admin\\user\\themes\\custom-segi\\templates\\partials\\recent-posts.html.twig");
    }
}
