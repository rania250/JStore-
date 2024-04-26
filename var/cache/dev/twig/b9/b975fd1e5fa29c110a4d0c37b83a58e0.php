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

/* cart/index.html.twig */
class __TwigTemplate_5139453439aa87fda7fd5ad1e07eeaee extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        yield "Jstore | Shopping Cart ";
        
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
        yield from         $this->loadTemplate("page_head/page_head.html.twig", "cart/index.html.twig", 6)->unwrap()->yield(CoreExtension::arrayMerge($context, ["page_name" => "Cart"]));
        // line 7
        yield "<div class=\"main_content cart_content\" data-cart=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["cart_json"]) || array_key_exists("cart_json", $context) ? $context["cart_json"] : (function () { throw new RuntimeError('Variable "cart_json" does not exist.', 7, $this->source); })()), "html", null, true);
        yield "\">
    <div class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"table-responsive shop_cart_table\">
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th class=\"product-thumbnail\">&nbsp;</th>
                                    <th class=\"product-name\">Product</th>
                                    <th class=\"product-price\">Price</th>
                                    <th class=\"product-quantity\">Quantity</th>
                                    <th class=\"product-subtotal\">Total</th>
                                    <th class=\"product-remove\">Remove</th>
                                </tr>
                            </thead>
                            <tbody>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"medium_divider\"></div>
                    <div class=\"divider center_icon\"><i class=\"ti-shopping-cart-full\"></i></div>
                    <div class=\"medium_divider\"></div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\"></div>
                <div class=\"col-md-6\">
                    <div class=\"border p-3 p-md-4\">
                        <div class=\"heading_s1 mb-3\">
                            <h6>Cart Totals</h6>
                        </div>
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <tbody>
                                    <tr>
                                        <td class=\"cart_total_label\">Cart Subtotal</td>
                                        <td class=\"cart_total_amount\">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"cart_total_label\">Shipping</td>
                                        <td class=\"cart_total_amount\">Free Shipping</td>
                                    </tr>
                                    <tr>
                                        <td class=\"cart_total_label\">Total</td>
                                        <td class=\"cart_total_amount\"><strong></strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><a routerlink=\"/checkout\" class=\"btn btn-fill-out\" ng-reflect-router-link=\"/checkout\"
                            href=\"/checkout\">Proceed To CheckOut</a>
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
        return "cart/index.html.twig";
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

{% block title %}Jstore | Shopping Cart {% endblock %}

{% block body %}
{% include \"page_head/page_head.html.twig\" with {'page_name': 'Cart'} %}
<div class=\"main_content cart_content\" data-cart=\"{{cart_json}}\">
    <div class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"table-responsive shop_cart_table\">
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th class=\"product-thumbnail\">&nbsp;</th>
                                    <th class=\"product-name\">Product</th>
                                    <th class=\"product-price\">Price</th>
                                    <th class=\"product-quantity\">Quantity</th>
                                    <th class=\"product-subtotal\">Total</th>
                                    <th class=\"product-remove\">Remove</th>
                                </tr>
                            </thead>
                            <tbody>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"medium_divider\"></div>
                    <div class=\"divider center_icon\"><i class=\"ti-shopping-cart-full\"></i></div>
                    <div class=\"medium_divider\"></div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\"></div>
                <div class=\"col-md-6\">
                    <div class=\"border p-3 p-md-4\">
                        <div class=\"heading_s1 mb-3\">
                            <h6>Cart Totals</h6>
                        </div>
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <tbody>
                                    <tr>
                                        <td class=\"cart_total_label\">Cart Subtotal</td>
                                        <td class=\"cart_total_amount\">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"cart_total_label\">Shipping</td>
                                        <td class=\"cart_total_amount\">Free Shipping</td>
                                    </tr>
                                    <tr>
                                        <td class=\"cart_total_label\">Total</td>
                                        <td class=\"cart_total_amount\"><strong></strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><a routerlink=\"/checkout\" class=\"btn btn-fill-out\" ng-reflect-router-link=\"/checkout\"
                            href=\"/checkout\">Proceed To CheckOut</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
{% endblock %}

", "cart/index.html.twig", "C:\\Users\\Rania\\Documents\\formationPHP\\ecommerce_symfony\\templates\\cart\\index.html.twig");
    }
}
