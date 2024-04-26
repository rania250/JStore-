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

/* home/index.html.twig */
class __TwigTemplate_6ef6de88fd61381e5d4f6a02e39058cd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        yield "Jstore | Home page ";
        
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
        yield "

<div  class=\"banner_section slide_medium shop_banner_slider staggered-animation-wrap\">
    <div  id=\"carouselExampleControls\" data-bs-ride=\"carousel\"
        class=\"carousel slide carousel-fade light_arrow\">
        <div  class=\"carousel-inner\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sliders"]) || array_key_exists("sliders", $context) ? $context["sliders"] : (function () { throw new RuntimeError('Variable "sliders" does not exist.', 12, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 13
            yield "            <div  class=\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 13) < 2)) ? ("carousel-item background_bg  active") : ("carousel-item background_bg"));
            yield "\"
               
                data-img-src=\"/assets/images/silders/";
            // line 15
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "imageUrl", [], "any", false, false, false, 15), "html", null, true);
            yield "\"
                style=\"background-image: url('/assets/images/silders/";
            // line 16
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "imageUrl", [], "any", false, false, false, 16), "html", null, true);
            yield "');\">
                <div  class=\"banner_slide_content\">
                    <div  class=\"container\">
                        <div  class=\"row\">
                            <div  class=\"col-lg-7 col-9\">
                                <div  class=\"banner_content overflow-hidden\">
                                    <h5  data-animation=\"slideInLeft\"
                                        data-animation-delay=\"0.5s\"
                                        class=\"mb-3 staggered-animation font-weight-light animated slideInLeft\"
                                        style=\"animation-delay: 0.5s; opacity: 1;\">
                                        ";
            // line 26
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "description", [], "any", false, false, false, 26), "html", null, true);
            yield "
                                    </h5>
                                    <h2  data-animation=\"slideInLeft\"
                                        data-animation-delay=\"1s\" class=\"staggered-animation animated slideInLeft\"
                                        style=\"animation-delay: 1s; opacity: 1;\">
                                        ";
            // line 31
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "title", [], "any", false, false, false, 31), "html", null, true);
            yield "
                                    </h2><a
                                         data-animation=\"slideInLeft\"
                                        data-animation-delay=\"1.5s\"
                                        target=\"_blank\"
                                        class=\"btn btn-fill-out rounded-0 staggered-animation text-uppercase animated slideInLeft\"
                                        href=\"";
            // line 37
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "buttonLink", [], "any", false, false, false, 37), "html", null, true);
            yield "\"
                                        style=\"animation-delay: 1.5s; opacity: 1;\">
                                        ";
            // line 39
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "buttonText", [], "any", false, false, false, 39), "html", null, true);
            yield "
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "           
        </div><a  href=\"#carouselExampleControls\" role=\"button\" data-bs-slide=\"prev\"
            class=\"carousel-control-prev\"><i  class=\"ion-chevron-left\"></i></a><a
             href=\"#carouselExampleControls\" role=\"button\" data-bs-slide=\"next\"
            class=\"carousel-control-next\"><i  class=\"ion-chevron-right\"></i></a>
    </div>
</div>
<div  class=\"main_content\">
    <div  class=\"section pb_20\">
        <div  class=\"container\">
            <div  class=\"row\">
                ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["collections"]) || array_key_exists("collections", $context) ? $context["collections"] : (function () { throw new RuntimeError('Variable "collections" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["collection"]) {
            // line 60
            yield "                <div  class=\"col-md-6\">
                    <div  class=\"single_banner\"><img 
                            alt=\"shop_banner_img1\"
                            src=\"/assets/images/collections/";
            // line 63
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["collection"], "imageUrl", [], "any", false, false, false, 63), "html", null, true);
            yield "\">
                        <div  class=\"single_banner_info\">
                            <h5  class=\"single_bn_title1\">";
            // line 65
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["collection"], "description", [], "any", false, false, false, 65), "html", null, true);
            yield "</h5>
                            <h3  class=\"single_bn_title\">";
            // line 66
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["collection"], "title", [], "any", false, false, false, 66), "html", null, true);
            yield "</h3><a
                                 class=\"single_bn_link\"
                                 target=\"_blank\"
                                href=\"";
            // line 69
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["collection"], "buttonLink", [], "any", false, false, false, 69), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["collection"], "buttonText", [], "any", false, false, false, 69), "html", null, true);
            yield "</a>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collection'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        yield "                <!-- <div  class=\"col-md-6\">
                    <div  class=\"single_banner\"><img 
                            alt=\"shop_banner_img1\"
                            src=\"/assets/files/1231816139442978863631268994779183882351500061684757886381.png\">
                        <div  class=\"single_banner_info\">
                            <h5  class=\"single_bn_title1\">Super Sale</h5>
                            <h3  class=\"single_bn_title\">New Collection</h3><a
                                 class=\"single_bn_link\"
                                href=\"http://localhost:4400/\">Shop Now</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div  class=\"section small_pt pb_70\">
        <div  class=\"container\">
            <div  class=\"row justify-content-center\">
                <div  class=\"col-md-6\">
                    <div  class=\"heading_s1 text-center\">
                        <h2 >Exclusive Products</h2>
                    </div>
                </div>
            </div>
            <div  class=\"row\">
                <div  class=\"col-12\">
                    <div  class=\"tab-style1\">
                        <ul  role=\"tablist\" class=\"nav nav-tabs justify-content-center\">
                            <li  class=\"nav-item\"><a 
                                    id=\"arrival-tab\" data-bs-toggle=\"tab\" href=\"#arrival\" role=\"tab\"
                                    aria-controls=\"arrival\" aria-selected=\"true\" class=\"nav-link active\">New
                                    Arrival</a></li>
                            <li  class=\"nav-item\"><a 
                                    id=\"sellers-tab\" data-bs-toggle=\"tab\" href=\"#sellers\" role=\"tab\"
                                    aria-controls=\"sellers\" aria-selected=\"false\" class=\"nav-link\">Best Sellers</a>
                            </li>
                            <li  class=\"nav-item\"><a 
                                    id=\"featured-tab\" data-bs-toggle=\"tab\" href=\"#featured\" role=\"tab\"
                                    aria-controls=\"featured\" aria-selected=\"false\" class=\"nav-link\">Featured</a>
                            </li>
                            <li  class=\"nav-item\"><a 
                                    id=\"special-tab\" data-bs-toggle=\"tab\" href=\"#special\" role=\"tab\"
                                    aria-controls=\"special\" aria-selected=\"false\" class=\"nav-link\">Special Offer
                                </a></li>
                        </ul>
                    </div>
                    <div  class=\"tab-content\">
                        <div  id=\"arrival\" role=\"tabpanel\" aria-labelledby=\"arrival-tab\"
                            class=\"tab-pane fade show active\">
                            <div  class=\"row shop_container\">
                                ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["productsNewArrival"]) || array_key_exists("productsNewArrival", $context) ? $context["productsNewArrival"] : (function () { throw new RuntimeError('Variable "productsNewArrival" does not exist.', 124, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 125
            yield "                                    ";
            yield from             $this->loadTemplate("product/display_product.html.twig", "home/index.html.twig", 125)->unwrap()->yield($context);
            // line 126
            yield "                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        yield "                               
                            </div>
                        </div>
                        <div  id=\"sellers\" role=\"tabpanel\" aria-labelledby=\"sellers-tab\"
                            class=\"tab-pane fade\">
                            <div  class=\"row shop_container\">
                                ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["productsBestSeller"]) || array_key_exists("productsBestSeller", $context) ? $context["productsBestSeller"] : (function () { throw new RuntimeError('Variable "productsBestSeller" does not exist.', 133, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 134
            yield "                                    ";
            yield from             $this->loadTemplate("product/display_product.html.twig", "home/index.html.twig", 134)->unwrap()->yield($context);
            // line 135
            yield "                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        yield "                            </div>
                        </div>
                        <div  id=\"featured\" role=\"tabpanel\"
                            aria-labelledby=\"featured-tab\" class=\"tab-pane fade\">
                            <div  class=\"row shop_container\">
                                ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["productsFeatured"]) || array_key_exists("productsFeatured", $context) ? $context["productsFeatured"] : (function () { throw new RuntimeError('Variable "productsFeatured" does not exist.', 141, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 142
            yield "                                ";
            yield from             $this->loadTemplate("product/display_product.html.twig", "home/index.html.twig", 142)->unwrap()->yield($context);
            // line 143
            yield "                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        yield "                            </div>
                        </div>
                        <div  id=\"special\" role=\"tabpanel\" aria-labelledby=\"special-tab\"
                            class=\"tab-pane fade\">
                            <div  class=\"row shop_container\">
                                ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["productsSpecialOffer"]) || array_key_exists("productsSpecialOffer", $context) ? $context["productsSpecialOffer"] : (function () { throw new RuntimeError('Variable "productsSpecialOffer" does not exist.', 149, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 150
            yield "                                ";
            yield from             $this->loadTemplate("product/display_product.html.twig", "home/index.html.twig", 150)->unwrap()->yield($context);
            // line 151
            yield "                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        yield "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
        return "home/index.html.twig";
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
        return array (  443 => 152,  429 => 151,  426 => 150,  409 => 149,  402 => 144,  388 => 143,  385 => 142,  368 => 141,  361 => 136,  347 => 135,  344 => 134,  327 => 133,  319 => 127,  305 => 126,  302 => 125,  285 => 124,  233 => 74,  220 => 69,  214 => 66,  210 => 65,  205 => 63,  200 => 60,  196 => 59,  183 => 48,  160 => 39,  155 => 37,  146 => 31,  138 => 26,  125 => 16,  121 => 15,  115 => 13,  98 => 12,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Jstore | Home page {% endblock %}

{% block body %}


<div  class=\"banner_section slide_medium shop_banner_slider staggered-animation-wrap\">
    <div  id=\"carouselExampleControls\" data-bs-ride=\"carousel\"
        class=\"carousel slide carousel-fade light_arrow\">
        <div  class=\"carousel-inner\">
            {% for slide in sliders %}
            <div  class=\"{{loop.index < 2 ? 'carousel-item background_bg  active' : 'carousel-item background_bg'}}\"
               
                data-img-src=\"/assets/images/silders/{{slide.imageUrl}}\"
                style=\"background-image: url('/assets/images/silders/{{slide.imageUrl}}');\">
                <div  class=\"banner_slide_content\">
                    <div  class=\"container\">
                        <div  class=\"row\">
                            <div  class=\"col-lg-7 col-9\">
                                <div  class=\"banner_content overflow-hidden\">
                                    <h5  data-animation=\"slideInLeft\"
                                        data-animation-delay=\"0.5s\"
                                        class=\"mb-3 staggered-animation font-weight-light animated slideInLeft\"
                                        style=\"animation-delay: 0.5s; opacity: 1;\">
                                        {{ slide.description }}
                                    </h5>
                                    <h2  data-animation=\"slideInLeft\"
                                        data-animation-delay=\"1s\" class=\"staggered-animation animated slideInLeft\"
                                        style=\"animation-delay: 1s; opacity: 1;\">
                                        {{ slide.title }}
                                    </h2><a
                                         data-animation=\"slideInLeft\"
                                        data-animation-delay=\"1.5s\"
                                        target=\"_blank\"
                                        class=\"btn btn-fill-out rounded-0 staggered-animation text-uppercase animated slideInLeft\"
                                        href=\"{{ slide.buttonLink }}\"
                                        style=\"animation-delay: 1.5s; opacity: 1;\">
                                        {{ slide.buttonText }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {% endfor %}
           
        </div><a  href=\"#carouselExampleControls\" role=\"button\" data-bs-slide=\"prev\"
            class=\"carousel-control-prev\"><i  class=\"ion-chevron-left\"></i></a><a
             href=\"#carouselExampleControls\" role=\"button\" data-bs-slide=\"next\"
            class=\"carousel-control-next\"><i  class=\"ion-chevron-right\"></i></a>
    </div>
</div>
<div  class=\"main_content\">
    <div  class=\"section pb_20\">
        <div  class=\"container\">
            <div  class=\"row\">
                {% for collection in collections %}
                <div  class=\"col-md-6\">
                    <div  class=\"single_banner\"><img 
                            alt=\"shop_banner_img1\"
                            src=\"/assets/images/collections/{{collection.imageUrl}}\">
                        <div  class=\"single_banner_info\">
                            <h5  class=\"single_bn_title1\">{{ collection.description }}</h5>
                            <h3  class=\"single_bn_title\">{{ collection.title }}</h3><a
                                 class=\"single_bn_link\"
                                 target=\"_blank\"
                                href=\"{{ collection.buttonLink }}\">{{ collection.buttonText }}</a>
                        </div>
                    </div>
                </div>
                {% endfor %}
                <!-- <div  class=\"col-md-6\">
                    <div  class=\"single_banner\"><img 
                            alt=\"shop_banner_img1\"
                            src=\"/assets/files/1231816139442978863631268994779183882351500061684757886381.png\">
                        <div  class=\"single_banner_info\">
                            <h5  class=\"single_bn_title1\">Super Sale</h5>
                            <h3  class=\"single_bn_title\">New Collection</h3><a
                                 class=\"single_bn_link\"
                                href=\"http://localhost:4400/\">Shop Now</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div  class=\"section small_pt pb_70\">
        <div  class=\"container\">
            <div  class=\"row justify-content-center\">
                <div  class=\"col-md-6\">
                    <div  class=\"heading_s1 text-center\">
                        <h2 >Exclusive Products</h2>
                    </div>
                </div>
            </div>
            <div  class=\"row\">
                <div  class=\"col-12\">
                    <div  class=\"tab-style1\">
                        <ul  role=\"tablist\" class=\"nav nav-tabs justify-content-center\">
                            <li  class=\"nav-item\"><a 
                                    id=\"arrival-tab\" data-bs-toggle=\"tab\" href=\"#arrival\" role=\"tab\"
                                    aria-controls=\"arrival\" aria-selected=\"true\" class=\"nav-link active\">New
                                    Arrival</a></li>
                            <li  class=\"nav-item\"><a 
                                    id=\"sellers-tab\" data-bs-toggle=\"tab\" href=\"#sellers\" role=\"tab\"
                                    aria-controls=\"sellers\" aria-selected=\"false\" class=\"nav-link\">Best Sellers</a>
                            </li>
                            <li  class=\"nav-item\"><a 
                                    id=\"featured-tab\" data-bs-toggle=\"tab\" href=\"#featured\" role=\"tab\"
                                    aria-controls=\"featured\" aria-selected=\"false\" class=\"nav-link\">Featured</a>
                            </li>
                            <li  class=\"nav-item\"><a 
                                    id=\"special-tab\" data-bs-toggle=\"tab\" href=\"#special\" role=\"tab\"
                                    aria-controls=\"special\" aria-selected=\"false\" class=\"nav-link\">Special Offer
                                </a></li>
                        </ul>
                    </div>
                    <div  class=\"tab-content\">
                        <div  id=\"arrival\" role=\"tabpanel\" aria-labelledby=\"arrival-tab\"
                            class=\"tab-pane fade show active\">
                            <div  class=\"row shop_container\">
                                {% for product in productsNewArrival %}
                                    {% include \"product/display_product.html.twig\" %}
                                {% endfor %}
                               
                            </div>
                        </div>
                        <div  id=\"sellers\" role=\"tabpanel\" aria-labelledby=\"sellers-tab\"
                            class=\"tab-pane fade\">
                            <div  class=\"row shop_container\">
                                {% for product in productsBestSeller %}
                                    {% include \"product/display_product.html.twig\" %}
                                {% endfor %}
                            </div>
                        </div>
                        <div  id=\"featured\" role=\"tabpanel\"
                            aria-labelledby=\"featured-tab\" class=\"tab-pane fade\">
                            <div  class=\"row shop_container\">
                                {% for product in productsFeatured %}
                                {% include \"product/display_product.html.twig\" %}
                            {% endfor %}
                            </div>
                        </div>
                        <div  id=\"special\" role=\"tabpanel\" aria-labelledby=\"special-tab\"
                            class=\"tab-pane fade\">
                            <div  class=\"row shop_container\">
                                {% for product in productsSpecialOffer  %}
                                {% include \"product/display_product.html.twig\" %}
                            {% endfor %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{% endblock %}
", "home/index.html.twig", "C:\\Users\\Rania\\Documents\\formationPHP\\ecommerce_symfony\\templates\\home\\index.html.twig");
    }
}
