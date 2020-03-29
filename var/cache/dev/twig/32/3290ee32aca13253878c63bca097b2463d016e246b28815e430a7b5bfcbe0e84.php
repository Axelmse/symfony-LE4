<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_6f24acf6e846b5efefa3e084e8ea95c085b2f2ea1fbff3ff98b9622f949b5717 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Page Header -->
    <header class=\"masthead\" style=\"background-image: url('../public/img/home-bg.jpg')\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-md-10 mx-auto\">
                    <div class=\"site-heading\">
                        <h1>Clean Blog</h1>
                        <span class=\"subheading\">A Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class=\"container\">
        <div class=\"row\">

            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 24
            echo "                <div class=\"col-lg-8 col-md-10 mx-auto\">
                    <div class=\"post-preview\">
                        <a href=\"post.html\">
                            <h2 class=\"post-title\">
                                ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 28, $this->source); })()), $context["i"], [], "array", false, false, false, 28), "title", [], "any", false, false, false, 28), "html", null, true);
            echo "
                            </h2>
                            <h3 class=\"post-subtitle\">
                                ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 31, $this->source); })()), $context["i"], [], "array", false, false, false, 31), "subtitle", [], "any", false, false, false, 31), "html", null, true);
            echo "
                            </h3>
                        </a>
                        <p class=\"post-meta\">Posted by ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 34, $this->source); })()), $context["i"], [], "array", false, false, false, 34), "author", [], "any", false, false, false, 34), "html", null, true);
            echo "
                            <a href=\"#\">Start Bootstrap</a>
                            on ";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 36, $this->source); })()), $context["i"], [], "array", false, false, false, 36), "createdAt", [], "any", false, false, false, 36), "m/d/y"), "html", null, true);
            echo "</p>
                    </div>
                    <!-- Pager -->
                    <div class=\"clearfix\">
                        <a class=\"btn btn-primary float-right\" href=\"#\">Older Posts &rarr;</a>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
        </div>
    </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 44,  116 => 36,  111 => 34,  105 => 31,  99 => 28,  93 => 24,  89 => 23,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <!-- Page Header -->
    <header class=\"masthead\" style=\"background-image: url('../public/img/home-bg.jpg')\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-md-10 mx-auto\">
                    <div class=\"site-heading\">
                        <h1>Clean Blog</h1>
                        <span class=\"subheading\">A Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class=\"container\">
        <div class=\"row\">

            {% for i in 0..1 %}
                <div class=\"col-lg-8 col-md-10 mx-auto\">
                    <div class=\"post-preview\">
                        <a href=\"post.html\">
                            <h2 class=\"post-title\">
                                {{ articles[i].title }}
                            </h2>
                            <h3 class=\"post-subtitle\">
                                {{ articles[i].subtitle }}
                            </h3>
                        </a>
                        <p class=\"post-meta\">Posted by {{articles[i].author}}
                            <a href=\"#\">Start Bootstrap</a>
                            on {{articles[i].createdAt|date(\"m/d/y\")}}</p>
                    </div>
                    <!-- Pager -->
                    <div class=\"clearfix\">
                        <a class=\"btn btn-primary float-right\" href=\"#\">Older Posts &rarr;</a>
                    </div>
                </div>
            {% endfor %}

        </div>
    </div>



{% endblock %}
", "home/index.html.twig", "/Applications/MAMP/htdocs/Projets/sf4-website/templates/home/index.html.twig");
    }
}
