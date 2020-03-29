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

/* article/show.html.twig */
class __TwigTemplate_84e12d7a1db3d3a280be4831e46ed638d66fb80328136fa3110d87fe9ab4f925 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Article Page
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    ";
        if ((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "        <!-- Page Header -->
        <header class=\"masthead\" style=\"background-image: url(";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/post-bg.jpg"), "html", null, true);
            echo ")\">
            <div class=\"overlay\"></div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-md-10 mx-auto\">
                        <div class=\"post-heading\">
                            <h1>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15), "html", null, true);
            echo "</h1>
                            <h2 class=\"subheading\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 16, $this->source); })()), "subtitle", [], "any", false, false, false, 16), "html", null, true);
            echo "</h2>
                            <span class=\"meta\">Posted by
\t\t\t\t\t\t\t\t<a href=\"#\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 18, $this->source); })()), "author", [], "any", false, false, false, 18), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\ton
\t\t\t\t\t\t\t\t";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 20, $this->source); })()), "createdAt", [], "any", false, false, false, 20), "F d, Y"), "html", null, true);
            echo "</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Post Content -->
        <article>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-md-10 mx-auto\">
                        ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 32, $this->source); })()), "body", [], "any", false, false, false, 32), "html", null, true);
            echo "
                    </div>
                </div>
            </div>
        </article>
    ";
        }
        // line 38
        echo "
    <hr>


    <div class=\"container\">
        <div class=\"row\">
            <h3 class=\"col-lg-8 col-md-10 mx-auto\"> ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 44, $this->source); })()), "comments", [], "any", false, false, false, 44), "count", [], "any", false, false, false, 44), "html", null, true);
        echo " Comments</h3>
        </div>

        <!-- Comments Form -->
        <div class=\"col-lg-10 col-md-10 mx-auto\">
            <div class=\"card my-4\">
                <h5 class=\"card-header\">Leave a Comment:</h5>
                <div class=\"card-body\">
                    ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 52, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                        <div class=\"form-group\">
                            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 54, $this->source); })()), "name", [], "any", false, false, false, 54), 'row');
        echo "
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 57, $this->source); })()), "email", [], "any", false, false, false, 57), 'row');
        echo "
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 60, $this->source); })()), "comment", [], "any", false, false, false, 60), 'row');
        echo "
                        </div>
                        <button type=\"submit\" class=\"btn btn-secondary\">Submit</button>
                    ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 63, $this->source); })()), 'form_end');
        echo "
                </div>
            </div>
        </div>


        ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 69, $this->source); })()), "comments", [], "any", false, false, false, 69));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 70
            echo "        <div class=\"row\">
            <div class=\"media mb-4 mt-4 col-lg-8 col-md-10 mx-auto\">
                <div class=\"media-body\">
                    <h5 class=\"mt-0\">";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "name", [], "any", false, false, false, 73), "html", null, true);
            echo " <small>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 73), "F d, Y"), "html", null, true);
            echo "</small></h5>
                    <blockquote>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 74), "html", null, true);
            echo "</blockquote>
                    <h6>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "email", [], "any", false, false, false, 75), "html", null, true);
            echo "</h6>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "


    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 80,  212 => 75,  208 => 74,  202 => 73,  197 => 70,  193 => 69,  184 => 63,  178 => 60,  172 => 57,  166 => 54,  161 => 52,  150 => 44,  142 => 38,  133 => 32,  118 => 20,  113 => 18,  108 => 16,  104 => 15,  95 => 9,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Article Page
{% endblock %}

{% block body %}
    {% if article %}
        <!-- Page Header -->
        <header class=\"masthead\" style=\"background-image: url({{ asset('img/post-bg.jpg') }})\">
            <div class=\"overlay\"></div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-md-10 mx-auto\">
                        <div class=\"post-heading\">
                            <h1>{{ article.title }}</h1>
                            <h2 class=\"subheading\">{{ article.subtitle }}</h2>
                            <span class=\"meta\">Posted by
\t\t\t\t\t\t\t\t<a href=\"#\">{{ article.author }}</a>
\t\t\t\t\t\t\t\ton
\t\t\t\t\t\t\t\t{{ article.createdAt|date(\"F d, Y\") }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Post Content -->
        <article>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-md-10 mx-auto\">
                        {{ article.body }}
                    </div>
                </div>
            </div>
        </article>
    {% endif %}

    <hr>


    <div class=\"container\">
        <div class=\"row\">
            <h3 class=\"col-lg-8 col-md-10 mx-auto\"> {{ article.comments.count }} Comments</h3>
        </div>

        <!-- Comments Form -->
        <div class=\"col-lg-10 col-md-10 mx-auto\">
            <div class=\"card my-4\">
                <h5 class=\"card-header\">Leave a Comment:</h5>
                <div class=\"card-body\">
                    {{ form_start(commentForm, {attr: {'novalidate': 'novalidate'}}) }}
                        <div class=\"form-group\">
                            {{ form_row(commentForm.name) }}
                        </div>
                        <div class=\"form-group\">
                            {{ form_row(commentForm.email) }}
                        </div>
                        <div class=\"form-group\">
                            {{ form_row(commentForm.comment) }}
                        </div>
                        <button type=\"submit\" class=\"btn btn-secondary\">Submit</button>
                    {{ form_end(commentForm) }}
                </div>
            </div>
        </div>


        {% for comment in article.comments %}
        <div class=\"row\">
            <div class=\"media mb-4 mt-4 col-lg-8 col-md-10 mx-auto\">
                <div class=\"media-body\">
                    <h5 class=\"mt-0\">{{ comment.name }} <small>{{ comment.createdAt|date(\"F d, Y\")  }}</small></h5>
                    <blockquote>{{ comment.comment }}</blockquote>
                    <h6>{{ comment.email }}</h6>
                </div>
            </div>
        </div>
        {% endfor %}



    </div>
{% endblock %}", "article/show.html.twig", "C:\\laragon\\www\\sf4-website\\sf4-website\\templates\\article\\show.html.twig");
    }
}
