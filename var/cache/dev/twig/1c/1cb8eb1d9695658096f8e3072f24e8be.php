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

/* checkout/index.html.twig */
class __TwigTemplate_77837680213a61c0a074e5e81221b8a9 extends Template
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
        return "default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/index.html.twig"));

        $this->parent = $this->loadTemplate("default.html.twig", "checkout/index.html.twig", 1);
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

        yield "Jstore | Checkout page";
        
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
<div  class=\"main_content\">
    <div  class=\"section\">
        <div  class=\"container\">
            <div  class=\"row\">

            </div>
            <div  class=\"row\">
                <div  class=\"col-12\">
                    <div  class=\"medium_divider\"></div>
                    <div  class=\"divider center_icon\"><i 
                            class=\"linearicons-credit-card\"></i></div>
                    <div  class=\"medium_divider\"></div>
                </div>
            </div>
            <div  class=\"row\">
                <div  class=\"col-md-6\">
                    <div  class=\"heading_s1\">
                        <h4 >Billing Address</h4>
                    </div>
                    <div  class=\"heading_s1\">
                        <h4 >Shipping Address</h4>
                    </div>
                  
                   
                </div>
                <div  class=\"col-md-6\">
                    <div  class=\"order_review\">
                        <div  class=\"heading_s1\">
                            <h4 >Your Orders</h4>
                        </div>
                        <div  class=\"table-responsive order_table\">
                            <table  class=\"table\">
                                <thead >
                                    <tr >
                                        <th >Product</th>
                                        <th >Total</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 46, $this->source); })()), "items", [], "any", false, false, false, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 47
            yield "                                    <tr >
                                        <td >
                                            ";
            // line 49
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 49), "name", [], "any", false, false, false, 49), "html", null, true);
            yield " 
                                            <span class=\"product-qty\">x ";
            // line 50
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 50), "html", null, true);
            yield "</span>
                                        </td>
                                        <td >
                                            ";
            // line 53
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 53), "soldePrice", [], "any", false, false, false, 53) / 100), "EUR"), "html", null, true);
            yield "
                                        </td>
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "                                </tbody>
                                <tfoot >
                                    <tr >
                                        <th >SubTotal</th>
                                        <td  class=\"product-subtotal\">";
        // line 61
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 61, $this->source); })()), "sub_total", [], "any", false, false, false, 61) / 100), "EUR"), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr >
                                        <th >Shipping</th>
                                        <td >Free Shipping</td>
                                    </tr>
                                    <tr >
                                        <th >Total</th>
                                        <td  class=\"product-subtotal\">";
        // line 69
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 69, $this->source); })()), "sub_total", [], "any", false, false, false, 69) / 100), "EUR"), "html", null, true);
        yield "</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div  class=\"payment_method\">
                           
                        </div>
                        <a  href=\"#\" class=\"btn btn-fill-out btn-block\">
                            Pay now (";
        // line 78
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 78, $this->source); })()), "sub_total", [], "any", false, false, false, 78) / 100), "EUR"), "html", null, true);
        yield ")
                        </a>
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
        return "checkout/index.html.twig";
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
        return array (  189 => 78,  177 => 69,  166 => 61,  160 => 57,  150 => 53,  144 => 50,  140 => 49,  136 => 47,  132 => 46,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'default.html.twig' %}

{% block title %}Jstore | Checkout page{% endblock %}

{% block body %}

<div  class=\"main_content\">
    <div  class=\"section\">
        <div  class=\"container\">
            <div  class=\"row\">

            </div>
            <div  class=\"row\">
                <div  class=\"col-12\">
                    <div  class=\"medium_divider\"></div>
                    <div  class=\"divider center_icon\"><i 
                            class=\"linearicons-credit-card\"></i></div>
                    <div  class=\"medium_divider\"></div>
                </div>
            </div>
            <div  class=\"row\">
                <div  class=\"col-md-6\">
                    <div  class=\"heading_s1\">
                        <h4 >Billing Address</h4>
                    </div>
                    <div  class=\"heading_s1\">
                        <h4 >Shipping Address</h4>
                    </div>
                  
                   
                </div>
                <div  class=\"col-md-6\">
                    <div  class=\"order_review\">
                        <div  class=\"heading_s1\">
                            <h4 >Your Orders</h4>
                        </div>
                        <div  class=\"table-responsive order_table\">
                            <table  class=\"table\">
                                <thead >
                                    <tr >
                                        <th >Product</th>
                                        <th >Total</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    {% for item in cart.items %}
                                    <tr >
                                        <td >
                                            {{ item.product.name }} 
                                            <span class=\"product-qty\">x {{item.quantity}}</span>
                                        </td>
                                        <td >
                                            {{(item.product.soldePrice/100) |format_currency('EUR')}}
                                        </td>
                                    </tr>
                                    {% endfor %}
                                </tbody>
                                <tfoot >
                                    <tr >
                                        <th >SubTotal</th>
                                        <td  class=\"product-subtotal\">{{(cart.sub_total/100) |format_currency('EUR')}}</td>
                                    </tr>
                                    <tr >
                                        <th >Shipping</th>
                                        <td >Free Shipping</td>
                                    </tr>
                                    <tr >
                                        <th >Total</th>
                                        <td  class=\"product-subtotal\">{{ (cart.sub_total/100) |format_currency('EUR') }}</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div  class=\"payment_method\">
                           
                        </div>
                        <a  href=\"#\" class=\"btn btn-fill-out btn-block\">
                            Pay now ({{ (cart.sub_total/100) |format_currency('EUR') }})
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}
", "checkout/index.html.twig", "C:\\Users\\Rania\\Documents\\formationPHP\\ecommerce_symfony\\templates\\checkout\\index.html.twig");
    }
}
