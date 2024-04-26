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

/* product/display_product.html.twig */
class __TwigTemplate_9a185442f4d84cfe1c1f847f602ded19 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/display_product.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/display_product.html.twig"));

        // line 1
        yield "<div class=\"col-lg-3 col-md-4 col-6\">
    <div class=\"product\">
        <div class=\"product_img\">
            <a href=\"/product/";
        // line 4
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 4, $this->source); })()), "slug", [], "any", false, false, false, 4), "html", null, true);
        yield "\">
                <img alt=\"product_img1\" src=\"/assets/images/products/";
        // line 5
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 5, $this->source); })()), "imageUrls", [], "any", false, false, false, 5), 0, [], "array", false, false, false, 5), "html", null, true);
        yield "\">
            </a>
            <div class=\"product_action_box\">
                <ul class=\"list_none pr_action_btn\">
                    <li>
                        <a href=\"/cart/add/";
        // line 10
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "html", null, true);
        yield "/1\" class=\"add-to-cart\">
                            <i class=\"icon-basket-loaded\"></i>
                            Add To Cart
                        </a>
                    </li>
                    <li>
                        <a href=\"/compare/add/";
        // line 16
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
        yield "\" class=\"add-to-compare\">
                            <i class=\"icon-shuffle\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"shop-quick-view.html\" class=\"popup-ajax\">
                            <i class=\"icon-magnifier-add\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"/wishlist/add/";
        // line 26
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26), "html", null, true);
        yield "\"
                        class=\"add-to-wishlist\"
                        >
                            <i class=\"icon-heart\"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"product_info\">
            <h6 class=\"product_title\">
                <a href=\"/product/";
        // line 37
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 37, $this->source); })()), "slug", [], "any", false, false, false, 37), "html", null, true);
        yield "\">
                    ";
        // line 38
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 38, $this->source); })()), "name", [], "any", false, false, false, 38), "html", null, true);
        yield "
                </a>
            </h6>
            <div class=\"product_price\">
                <span class=\"price\">";
        // line 42
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 42, $this->source); })()), "soldePrice", [], "any", false, false, false, 42) / 100), "EUR"), "html", null, true);
        yield "</span>
                <del>";
        // line 43
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 43, $this->source); })()), "regularPrice", [], "any", false, false, false, 43) / 100), "EUR"), "html", null, true);
        yield "</del>
                <div class=\"on_sale\"><span>";
        // line 44
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 44, $this->source); })()), "regularPrice", [], "any", false, false, false, 44) - CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 44, $this->source); })()), "soldePrice", [], "any", false, false, false, 44)) * 100) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 44, $this->source); })()), "regularPrice", [], "any", false, false, false, 44)), 2, ".", ","), "html", null, true);
        // line 45
        yield "% Off</span></div>
            </div>
            <div class=\"rating_wrap\">
                <div class=\"rating\">
                    <div class=\"product_rate\" style=\"width: 80%;\"></div>
                </div><span class=\"rating_num\">(21)</span>
            </div>
            <div class=\"pr_desc\">
                <p>Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit. Phasellus blandit massa enim.
                    Nullam id varius nunc id varius nunc.</p>
            </div>
            <div class=\"pr_switch_wrap\">
                <div class=\"product_color_switch\"><span data-color=\"#87554B\" class=\"active\"></span><span
                        data-color=\"#333333\"></span><span data-color=\"#DA323F\"></span>
                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "product/display_product.html.twig";
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
        return array (  118 => 45,  116 => 44,  112 => 43,  108 => 42,  101 => 38,  97 => 37,  83 => 26,  70 => 16,  61 => 10,  53 => 5,  49 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-lg-3 col-md-4 col-6\">
    <div class=\"product\">
        <div class=\"product_img\">
            <a href=\"/product/{{product.slug}}\">
                <img alt=\"product_img1\" src=\"/assets/images/products/{{ product.imageUrls[0] }}\">
            </a>
            <div class=\"product_action_box\">
                <ul class=\"list_none pr_action_btn\">
                    <li>
                        <a href=\"/cart/add/{{product.id}}/1\" class=\"add-to-cart\">
                            <i class=\"icon-basket-loaded\"></i>
                            Add To Cart
                        </a>
                    </li>
                    <li>
                        <a href=\"/compare/add/{{product.id}}\" class=\"add-to-compare\">
                            <i class=\"icon-shuffle\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"shop-quick-view.html\" class=\"popup-ajax\">
                            <i class=\"icon-magnifier-add\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"/wishlist/add/{{ product.id }}\"
                        class=\"add-to-wishlist\"
                        >
                            <i class=\"icon-heart\"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"product_info\">
            <h6 class=\"product_title\">
                <a href=\"/product/{{product.slug}}\">
                    {{ product.name}}
                </a>
            </h6>
            <div class=\"product_price\">
                <span class=\"price\">{{ (product.soldePrice/100) |format_currency('EUR') }}</span>
                <del>{{ (product.regularPrice/100) | format_currency('EUR') }}</del>
                <div class=\"on_sale\"><span>{{((product.regularPrice - product.soldePrice)*100/ product.regularPrice)
                        |number_format(2, '.', ',') }}% Off</span></div>
            </div>
            <div class=\"rating_wrap\">
                <div class=\"rating\">
                    <div class=\"product_rate\" style=\"width: 80%;\"></div>
                </div><span class=\"rating_num\">(21)</span>
            </div>
            <div class=\"pr_desc\">
                <p>Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit. Phasellus blandit massa enim.
                    Nullam id varius nunc id varius nunc.</p>
            </div>
            <div class=\"pr_switch_wrap\">
                <div class=\"product_color_switch\"><span data-color=\"#87554B\" class=\"active\"></span><span
                        data-color=\"#333333\"></span><span data-color=\"#DA323F\"></span>
                </div>
            </div>
        </div>
    </div>
</div>", "product/display_product.html.twig", "C:\\Users\\Rania\\Documents\\formationPHP\\ecommerce_symfony\\templates\\product\\display_product.html.twig");
    }
}
