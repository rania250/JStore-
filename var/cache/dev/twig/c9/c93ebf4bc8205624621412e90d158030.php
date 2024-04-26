<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* page/not-fount.html.twig */
class __TwigTemplate_3ae4b57543138820291053952b5962ef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/not-fount.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/not-fount.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/not-fount.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Jstore | Page Error ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield from         $this->loadTemplate("page_head/page_head.html.twig", "page/not-fount.html.twig", 6)->unwrap()->yield(CoreExtension::arrayMerge($context, ["page_name" => "Page Not Found"]));
        // line 7
        yield "<!-- START MAIN CONTENT -->
<div class=\"main_content\">

    <!-- START 404 SECTION -->
    <div class=\"section\">
        <div class=\"error_wrap\">
            <div class=\"container\">
                <div class=\"row align-items-center justify-content-center\">
                    <div class=\"col-lg-6 col-md-10 order-lg-first\">
                        <div class=\"text-center\">
                            <div class=\"error_txt\">404</div>
                            <h5 class=\"mb-2 mb-sm-3\">oops! The page you requested was not found!</h5>
                            <p>The page you are looking for was moved, removed, renamed or might never existed.</p>
                            <!-- <div class=\"search_form pb-3 pb-md-4\">
                                <form method=\"post\">
                                    <input name=\"text\" id=\"text\" type=\"text\" placeholder=\"Search\" class=\"form-control\">
                                    <button type=\"submit\" class=\"btn icon_search\"><i
                                            class=\"ion-ios-search-strong\"></i></button>
                                </form>
                            </div> -->
                            <a href=\"/\" class=\"btn btn-fill-out\">Back To Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END 404 SECTION -->

</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "page/not-fount.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  92 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Jstore | Page Error {% endblock %}

{% block body %}
{% include \"page_head/page_head.html.twig\" with {'page_name': \"Page Not Found\" } %}
<!-- START MAIN CONTENT -->
<div class=\"main_content\">

    <!-- START 404 SECTION -->
    <div class=\"section\">
        <div class=\"error_wrap\">
            <div class=\"container\">
                <div class=\"row align-items-center justify-content-center\">
                    <div class=\"col-lg-6 col-md-10 order-lg-first\">
                        <div class=\"text-center\">
                            <div class=\"error_txt\">404</div>
                            <h5 class=\"mb-2 mb-sm-3\">oops! The page you requested was not found!</h5>
                            <p>The page you are looking for was moved, removed, renamed or might never existed.</p>
                            <!-- <div class=\"search_form pb-3 pb-md-4\">
                                <form method=\"post\">
                                    <input name=\"text\" id=\"text\" type=\"text\" placeholder=\"Search\" class=\"form-control\">
                                    <button type=\"submit\" class=\"btn icon_search\"><i
                                            class=\"ion-ios-search-strong\"></i></button>
                                </form>
                            </div> -->
                            <a href=\"/\" class=\"btn btn-fill-out\">Back To Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END 404 SECTION -->

</div>

{% endblock %}
", "page/not-fount.html.twig", "C:\\Users\\Rania\\Documents\\formationPHP\\ecommerce_symfony\\templates\\page\\not-fount.html.twig");
    }
}
