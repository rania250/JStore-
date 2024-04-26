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

/* product/show_product_by_slug.html.twig */
class __TwigTemplate_27654875182dc9609d2345dbf59b26aa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show_product_by_slug.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show_product_by_slug.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/show_product_by_slug.html.twig", 1);
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
        yield from         $this->loadTemplate("page_head/page_head.html.twig", "product/show_product_by_slug.html.twig", 6)->unwrap()->yield(CoreExtension::arrayMerge($context, ["page_name" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6)]));
        // line 7
        yield "<div class=\"main_content\">
    <div class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 col-md-6 mb-4 mb-md-0\">
                    <div class=\"product-image\">
                        <div class=\"product_img_box\"><img id=\"product_img\" alt=\"product_img1\"
                                src=\"/assets/images/products/";
        // line 14
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 14, $this->source); })()), "imageUrls", [], "any", false, false, false, 14), 0, [], "array", false, false, false, 14), "html", null, true);
        yield "\"
                                data-zoom-image=\"/assets/images/products/";
        // line 15
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "imageUrls", [], "any", false, false, false, 15), 0, [], "array", false, false, false, 15), "html", null, true);
        yield "\"><a title=\"Zoom\"
                                class=\"product_img_zoom\"><span class=\"linearicons-zoom-in\"></span></a>
                        </div>
                        <div id=\"pr_item_gallery\" data-slides-to-show=\"4\" data-slides-to-scroll=\"1\"
                            data-infinite=\"false\"
                            class=\"product_gallery_item slick_slider slick-initialized slick-slider\">
                            <div aria-live=\"polite\" class=\"slick-list draggable\">
                                <div class=\"slick-track\" role=\"listbox\" style=\"opacity: 1; width: 556px; left: 0px;\">
                                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 23, $this->source); })()), "imageUrls", [], "any", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["imageUrl"]) {
            // line 24
            yield "                                    <div class=\"item slick-slide slick-current slick-active\" data-slick-index=\"0\"
                                        aria-hidden=\"false\" tabindex=\"-1\" role=\"option\" aria-describedby=\"slick-slide20\"
                                        style=\"width: 129px;\"><a href=\"#\" class=\"product_gallery_item active\"
                                            data-image=\"/assets/images/products/";
            // line 27
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["imageUrl"], "html", null, true);
            yield "\"
                                            data-zoom-image=\"/assets/images/products/";
            // line 28
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["imageUrl"], "html", null, true);
            yield "\" tabindex=\"0\"><img
                                                alt=\"product_small_img1\"
                                                src=\"/assets/images/products/";
            // line 30
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["imageUrl"], "html", null, true);
            yield "\"></a>
                                    </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imageUrl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-6\">
                    <div class=\"pr_detail\">
                        <div class=\"product_description\">
                            <h4 class=\"product_title\"><a href=\"#\">";
        // line 43
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 43, $this->source); })()), "name", [], "any", false, false, false, 43), "html", null, true);
        yield "</a></h4>
                            <div class=\"product_price\">
                                <span class=\"price\">";
        // line 45
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 45, $this->source); })()), "soldePrice", [], "any", false, false, false, 45) / 100), "EUR"), "html", null, true);
        yield "</span>
                                <del>";
        // line 46
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 46, $this->source); })()), "regularPrice", [], "any", false, false, false, 46) / 100), "EUR"), "html", null, true);
        yield "</del>
                                <div class=\"on_sale\"><span>";
        // line 47
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 47, $this->source); })()), "regularPrice", [], "any", false, false, false, 47) - CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 47, $this->source); })()), "soldePrice", [], "any", false, false, false, 47)) * 100) / CoreExtension::getAttribute($this->env, $this->source,         // line 48
(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 48, $this->source); })()), "regularPrice", [], "any", false, false, false, 48)), "EUR"), "html", null, true);
        yield "% Off</span></div>
                            </div>
                            <div class=\"rating_wrap\">
                                <div class=\"rating\">
                                    <div class=\"product_rate\" style=\"width: 80%;\">
                                    </div>
                                </div><span class=\"rating_num\">(21)</span>
                            </div>
                            <div class=\"pr_desc\">
                                <p>";
        // line 57
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 57, $this->source); })()), "description", [], "any", false, false, false, 57), "html", null, true);
        yield " </p>
                            </div>
                            <div class=\"product_sort_info\">
                                <ul>
                                    <li><i class=\"linearicons-shield-check\"></i> 1 Year AL Jazeera Brand Warranty
                                    </li>
                                    <li><i class=\"linearicons-sync\"></i> 30 Day Return Policy </li>
                                    <li><i class=\"linearicons-bag-dollar\"></i>Cash on Delivery available</li>
                                </ul>
                            </div>

                            </div> -->
                        </div>
                        <hr>
                        <div class=\"cart_extra\">
                            <div class=\"cart-product-quantity\">
                                <div class=\"quantity\">
                                    <input type=\"button\" value=\"-\" class=\"minus\">
                                    <input type=\"text\" name=\"quantity\" value=\"1\" title=\"Qty\" size=\"4\" class=\"qty\">
                                    <input type=\"button\" value=\"+\" class=\"plus\">
                                </div>
                            </div>
                            <div class=\"cart_btn\">
                                <a href=\"/cart/add/";
        // line 80
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 80, $this->source); })()), "id", [], "any", false, false, false, 80), "html", null, true);
        yield "/1\" type=\"button\" class=\"btn btn-fill-out btn-addtocart\">
                                    <i class=\"icon-basket-loaded\"></i>
                                    Add to cart
                                </a>
                                <button type=\"button\" class=\"btn btn-fill-out\">
                                    <i class=\"icon-basket-loaded\"></i>
                                    Pay Now
                                </button>
                            </div>
                            <div class=\"cart_btn\"><a href=\"#\" class=\"add_compare\"><i class=\"icon-shuffle\"></i></a><a
                                    href=\"#\" class=\"add_wishlist\"><i class=\"icon-heart\"></i></a>
                            </div>
                        </div>
                        <hr>
                        <ul class=\"product-meta\">
                            <li>SKU: <a href=\"#\">BE45VGRT</a></li>
                            <li>Category: <a href=\"#\">Culotes </a></li>
                            <li>Tags: <a href=\"#\" rel=\"tag\">Cloth</a>, <a href=\"#\" rel=\"tag\">printed</a></li>
                        </ul>
                        <div class=\"product_share\"><span>Share:</span>
                            <ul class=\"social_icons\">
                                <li><a href=\"#\"><i class=\"ion-social-facebook\"></i></a></li>
                                <li><a href=\"#\"><i class=\"ion-social-twitter\"></i></a></li>
                                <li><a href=\"#\"><i class=\"ion-social-googleplus\"></i></a></li>
                                <li><a href=\"#\"><i class=\"ion-social-youtube-outline\"></i></a>
                                </li>
                                <li><a href=\"#\"><i class=\"ion-social-instagram-outline\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"large_divider clearfix\"></div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"tab-style3\">
                        <ul role=\"tablist\" class=\"nav nav-tabs\">
                            <li class=\"nav-item\"><a id=\"Description-tab\" data-bs-toggle=\"tab\" href=\"#Description\"
                                    role=\"tab\" aria-controls=\"Description\" aria-selected=\"true\"
                                    class=\"nav-link active\">Description</a></li>
                            <li class=\"nav-item\"><a id=\"Additional-info-tab\" data-bs-toggle=\"tab\"
                                    href=\"#Additional-info\" role=\"tab\" aria-controls=\"Additional-info\"
                                    aria-selected=\"false\" class=\"nav-link\">Additional info</a></li>
                            <li class=\"nav-item\"><a id=\"Reviews-tab\" data-bs-toggle=\"tab\" href=\"#Reviews\" role=\"tab\"
                                    aria-controls=\"Reviews\" aria-selected=\"false\" class=\"nav-link\">Reviews (2)</a>
                            </li>
                        </ul>
                        <div class=\"tab-content shop_info_tab\">
                            <div id=\"Description\" role=\"tabpanel\" aria-labelledby=\"Description-tab\"
                                class=\"tab-pane fade show active\">
                                ";
        // line 134
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 134, $this->source); })()), "description", [], "any", false, false, false, 134), "html", null, true);
        yield "
                            </div>
                            <div id=\"Additional-info\" role=\"tabpanel\" aria-labelledby=\"Additional-info-tab\"
                                class=\"tab-pane fade\">
                                <!-- ";
        // line 138
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 138, $this->source); })()), "moreDescription", [], "any", false, false, false, 138), "html", null, true);
        yield " -->
                                ";
        // line 139
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 139, $this->source); })()), "additionalInfos", [], "any", false, false, false, 139), "html", null, true);
        yield "
                            </div>
                            <div id=\"Reviews\" role=\"tabpanel\" aria-labelledby=\"Reviews-tab\" class=\"tab-pane fade\">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"small_divider\"></div>
                    <div class=\"divider\"></div>
                    <div class=\"medium_divider\"></div>
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
        return "product/show_product_by_slug.html.twig";
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
        return array (  275 => 139,  271 => 138,  264 => 134,  207 => 80,  181 => 57,  169 => 48,  168 => 47,  164 => 46,  160 => 45,  155 => 43,  143 => 33,  134 => 30,  129 => 28,  125 => 27,  120 => 24,  116 => 23,  105 => 15,  101 => 14,  92 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Jstore | Home page {% endblock %}

{% block body %}
{% include \"page_head/page_head.html.twig\" with {'page_name': product.name } %}
<div class=\"main_content\">
    <div class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 col-md-6 mb-4 mb-md-0\">
                    <div class=\"product-image\">
                        <div class=\"product_img_box\"><img id=\"product_img\" alt=\"product_img1\"
                                src=\"/assets/images/products/{{ product.imageUrls[0] }}\"
                                data-zoom-image=\"/assets/images/products/{{ product.imageUrls[0] }}\"><a title=\"Zoom\"
                                class=\"product_img_zoom\"><span class=\"linearicons-zoom-in\"></span></a>
                        </div>
                        <div id=\"pr_item_gallery\" data-slides-to-show=\"4\" data-slides-to-scroll=\"1\"
                            data-infinite=\"false\"
                            class=\"product_gallery_item slick_slider slick-initialized slick-slider\">
                            <div aria-live=\"polite\" class=\"slick-list draggable\">
                                <div class=\"slick-track\" role=\"listbox\" style=\"opacity: 1; width: 556px; left: 0px;\">
                                    {% for imageUrl in product.imageUrls %}
                                    <div class=\"item slick-slide slick-current slick-active\" data-slick-index=\"0\"
                                        aria-hidden=\"false\" tabindex=\"-1\" role=\"option\" aria-describedby=\"slick-slide20\"
                                        style=\"width: 129px;\"><a href=\"#\" class=\"product_gallery_item active\"
                                            data-image=\"/assets/images/products/{{ imageUrl }}\"
                                            data-zoom-image=\"/assets/images/products/{{ imageUrl }}\" tabindex=\"0\"><img
                                                alt=\"product_small_img1\"
                                                src=\"/assets/images/products/{{ imageUrl }}\"></a>
                                    </div>
                                    {% endfor %}

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-6\">
                    <div class=\"pr_detail\">
                        <div class=\"product_description\">
                            <h4 class=\"product_title\"><a href=\"#\">{{ product.name }}</a></h4>
                            <div class=\"product_price\">
                                <span class=\"price\">{{ (product.soldePrice/100)  |format_currency('EUR')  }}</span>
                                <del>{{ (product.regularPrice/100 )  |format_currency('EUR')  }}</del>
                                <div class=\"on_sale\"><span>{{((product.regularPrice - product.soldePrice)*100/
                                        product.regularPrice)  |format_currency('EUR')   }}% Off</span></div>
                            </div>
                            <div class=\"rating_wrap\">
                                <div class=\"rating\">
                                    <div class=\"product_rate\" style=\"width: 80%;\">
                                    </div>
                                </div><span class=\"rating_num\">(21)</span>
                            </div>
                            <div class=\"pr_desc\">
                                <p>{{ product.description}} </p>
                            </div>
                            <div class=\"product_sort_info\">
                                <ul>
                                    <li><i class=\"linearicons-shield-check\"></i> 1 Year AL Jazeera Brand Warranty
                                    </li>
                                    <li><i class=\"linearicons-sync\"></i> 30 Day Return Policy </li>
                                    <li><i class=\"linearicons-bag-dollar\"></i>Cash on Delivery available</li>
                                </ul>
                            </div>

                            </div> -->
                        </div>
                        <hr>
                        <div class=\"cart_extra\">
                            <div class=\"cart-product-quantity\">
                                <div class=\"quantity\">
                                    <input type=\"button\" value=\"-\" class=\"minus\">
                                    <input type=\"text\" name=\"quantity\" value=\"1\" title=\"Qty\" size=\"4\" class=\"qty\">
                                    <input type=\"button\" value=\"+\" class=\"plus\">
                                </div>
                            </div>
                            <div class=\"cart_btn\">
                                <a href=\"/cart/add/{{product.id}}/1\" type=\"button\" class=\"btn btn-fill-out btn-addtocart\">
                                    <i class=\"icon-basket-loaded\"></i>
                                    Add to cart
                                </a>
                                <button type=\"button\" class=\"btn btn-fill-out\">
                                    <i class=\"icon-basket-loaded\"></i>
                                    Pay Now
                                </button>
                            </div>
                            <div class=\"cart_btn\"><a href=\"#\" class=\"add_compare\"><i class=\"icon-shuffle\"></i></a><a
                                    href=\"#\" class=\"add_wishlist\"><i class=\"icon-heart\"></i></a>
                            </div>
                        </div>
                        <hr>
                        <ul class=\"product-meta\">
                            <li>SKU: <a href=\"#\">BE45VGRT</a></li>
                            <li>Category: <a href=\"#\">Culotes </a></li>
                            <li>Tags: <a href=\"#\" rel=\"tag\">Cloth</a>, <a href=\"#\" rel=\"tag\">printed</a></li>
                        </ul>
                        <div class=\"product_share\"><span>Share:</span>
                            <ul class=\"social_icons\">
                                <li><a href=\"#\"><i class=\"ion-social-facebook\"></i></a></li>
                                <li><a href=\"#\"><i class=\"ion-social-twitter\"></i></a></li>
                                <li><a href=\"#\"><i class=\"ion-social-googleplus\"></i></a></li>
                                <li><a href=\"#\"><i class=\"ion-social-youtube-outline\"></i></a>
                                </li>
                                <li><a href=\"#\"><i class=\"ion-social-instagram-outline\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"large_divider clearfix\"></div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"tab-style3\">
                        <ul role=\"tablist\" class=\"nav nav-tabs\">
                            <li class=\"nav-item\"><a id=\"Description-tab\" data-bs-toggle=\"tab\" href=\"#Description\"
                                    role=\"tab\" aria-controls=\"Description\" aria-selected=\"true\"
                                    class=\"nav-link active\">Description</a></li>
                            <li class=\"nav-item\"><a id=\"Additional-info-tab\" data-bs-toggle=\"tab\"
                                    href=\"#Additional-info\" role=\"tab\" aria-controls=\"Additional-info\"
                                    aria-selected=\"false\" class=\"nav-link\">Additional info</a></li>
                            <li class=\"nav-item\"><a id=\"Reviews-tab\" data-bs-toggle=\"tab\" href=\"#Reviews\" role=\"tab\"
                                    aria-controls=\"Reviews\" aria-selected=\"false\" class=\"nav-link\">Reviews (2)</a>
                            </li>
                        </ul>
                        <div class=\"tab-content shop_info_tab\">
                            <div id=\"Description\" role=\"tabpanel\" aria-labelledby=\"Description-tab\"
                                class=\"tab-pane fade show active\">
                                {{ product.description }}
                            </div>
                            <div id=\"Additional-info\" role=\"tabpanel\" aria-labelledby=\"Additional-info-tab\"
                                class=\"tab-pane fade\">
                                <!-- {{ product.moreDescription }} -->
                                {{ product.additionalInfos }}
                            </div>
                            <div id=\"Reviews\" role=\"tabpanel\" aria-labelledby=\"Reviews-tab\" class=\"tab-pane fade\">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"small_divider\"></div>
                    <div class=\"divider\"></div>
                    <div class=\"medium_divider\"></div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "product/show_product_by_slug.html.twig", "C:\\Users\\Rania\\Documents\\formationPHP\\ecommerce_symfony\\templates\\product\\show_product_by_slug.html.twig");
    }
}
