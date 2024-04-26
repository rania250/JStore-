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

/* header/index.html.twig */
class __TwigTemplate_4770d6e046a291f52bc857e33de23d27 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header/index.html.twig"));

        // line 1
        yield "<header class=\"header_wrap fixed-top header_with_topbar active\">
    <div class=\"top-header\" style=\"\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-6\">
                    <div class=\"d-flex align-items-center justify-content-center justify-content-md-start\">
                        <div class=\"me-3\">
                            <div class=\"ddOutOfVision\" id=\"msdrpdd20_msddHolder\"
                                style=\"height: 0px; overflow: hidden; position: absolute;\"><select name=\"countries\"
                                    class=\"custome_select\" id=\"msdrpdd20\" tabindex=\"-1\">
                                    <option value=\"USD\" data-title=\"USD\" ng-reflect-value=\"USD\">USD</option>
                                    <option value=\"EUR\" data-title=\"EUR\" ng-reflect-value=\"EUR\">EUR</option>
                                    <option value=\"GBR\" data-title=\"GBR\" ng-reflect-value=\"GBR\">GBR</option>
                                </select></div>
                            <div class=\"dd ddcommon borderRadius\" id=\"msdrpdd20_msdd\" tabindex=\"0\" style=\"width: 52px;\">
                                <div class=\"ddTitle borderRadiusTp\"><span class=\"divider\"></span><span
                                        class=\"ddArrow arrowoff\"></span><span class=\"ddTitleText \"
                                        id=\"msdrpdd20_title\"><span class=\"ddlabel\">USD</span><span class=\"description\"
                                            style=\"display: none;\"></span></span></div><input id=\"msdrpdd20_titleText\"
                                    type=\"text\" autocomplete=\"off\" class=\"text shadow borderRadius\"
                                    style=\"display: none;\">
                                <div class=\"ddChild ddchild_ border shadow\" id=\"msdrpdd20_child\"
                                    style=\"z-index: 9999; display: none; position: absolute; visibility: visible; height: 99px;\">
                                    <ul>
                                        <li class=\"enabled _msddli_ selected\" title=\"USD\"><span
                                                class=\"ddlabel\">USD</span>
                                            <div class=\"clear\"></div>
                                        </li>
                                        <li class=\"enabled _msddli_\" title=\"EUR\"><span class=\"ddlabel\">EUR</span>
                                            <div class=\"clear\"></div>
                                        </li>
                                        <li class=\"enabled _msddli_\" title=\"GBR\"><span class=\"ddlabel\">GBR</span>
                                            <div class=\"clear\"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <ul class=\"contact_detail text-center text-lg-start\">
                            <li><i class=\"ti-mobile\"></i><span>
                                    ";
        // line 41
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "session", [], "any", false, false, false, 41), "get", ["setting"], "method", false, false, false, 41), "phone", [], "any", false, false, false, 41), "html", null, true);
        yield "
                                </span></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"text-center text-md-end\">
                        <ul class=\"header_list\">
                            <li><a href=\"/compare\"><i class=\"ti-control-shuffle\"></i><span>Compare</span></a></li>
                            <li><a href=\"/wishlist\"><i class=\"ti-heart\"></i><span>Wishlist</span></a></li>

                            ";
        // line 52
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52)) {
            // line 53
            yield "                            <li>
                                <a href=\"/account\"><i class=\"ti-user\"></i><span>Account</span></a>
                            </li>
                            <li>
                                <a href=\"/logout\"><i class=\"ti-user\"></i><span>Logout</span></a>
                            </li>
                            ";
        } else {
            // line 60
            yield "                            <li>
                                <a href=\"/login\"><i class=\"ti-user\"></i><span>Signin</span></a>
                            </li>
                            <li>
                                <a href=\"/register\"><i class=\"ti-user\"></i><span>Signup</span></a>
                            </li>

                            ";
        }
        // line 68
        yield "                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"bottom_header dark_skin main_menu_uppercase\">
        <div class=\"container\">
            <nav class=\"navbar navbar-expand-lg\"><a routerlink=\"/\" class=\"navbar-brand\" ng-reflect-router-link=\"/\"
                    href=\"/\">
                    <h2>
                        ";
        // line 81
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "session", [], "any", false, false, false, 81), "get", ["setting"], "method", false, false, false, 81), "websiteName", [], "any", false, false, false, 81), "html", null, true);
        yield "
                    </h2>
                </a><button type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\"
                    aria-expanded=\"false\" class=\"navbar-toggler collapsed\"><span
                        class=\"ion-android-menu\"></span></button>
                <div id=\"navbarSupportedContent\" class=\"navbar-collapse justify-content-end collapse\" style=\"\">
                    <ul class=\"navbar-nav\">
                        <li class=\"dropdown\"><a routerlink=\"/\" class=\"nav-link\" ng-reflect-router-link=\"/\"
                                href=\"/\">Home</a></li>
                        <li class=\"dropdown\"><a href=\"#\" data-bs-toggle=\"dropdown\"
                                class=\"dropdown-toggle nav-link active\" aria-expanded=\"false\">Pages</a>
                            <div class=\"dropdown-menu\">
                                <ul>
                                    ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "session", [], "any", false, false, false, 94), "get", ["headerPages"], "method", false, false, false, 94));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 95
            yield "                                    <li><a class=\"dropdown-item nav-link nav_item\" href=\"/page/";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["page"], "slug", [], "any", false, false, false, 95), "html", null, true);
            yield "\">
                                            ";
            // line 96
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 96), "html", null, true);
            yield "
                                        </a>
                                    </li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        yield "
                            </div>
                        </li>
                        <li class=\"dropdown dropdown-mega-menu\"><a href=\"#\" data-bs-toggle=\"dropdown\"
                                class=\"dropdown-toggle nav-link\" aria-expanded=\"false\">Products</a>
                            <div class=\"dropdown-menu\">
                                <ul class=\"mega-menu d-lg-flex\">
                                    ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "session", [], "any", false, false, false, 107), "get", ["categories"], "method", false, false, false, 107));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 108
            yield "                                    <li class=\"mega-menu-col col-lg-3\">
                                        <ul>
                                            <li class=\"dropdown-header\">";
            // line 110
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 110), "html", null, true);
            yield "</li>
                                            ";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 111));
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
                // line 112
                yield "                                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 112) < 4)) {
                    yield " <li>
                                                <a class=\"dropdown-item nav-link nav_item\"
                                                    href=\"/product/";
                    // line 114
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 114), "html", null, true);
                    yield "\">
                                                    <img src=\"/assets/images/products/";
                    // line 115
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageUrls", [], "any", false, false, false, 115), 0, [], "array", false, false, false, 115), "html", null, true);
                    yield "\"
                                                        width=\"30\" height=\"30\" alt=\"\">
                                                    ";
                    // line 117
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 117), "html", null, true);
                    yield "
                                                </a>

                                    </li>

                                    ";
                }
                // line 123
                yield "                                    ";
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
            // line 124
            yield "                                </ul>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        yield "
                    </ul>
                    <div class=\"d-lg-flex menu_banners row g-3 px-3\">
                        ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 130, $this->source); })()), "session", [], "any", false, false, false, 130), "get", ["megaCollections"], "method", false, false, false, 130));
        foreach ($context['_seq'] as $context["_key"] => $context["collection"]) {
            // line 131
            yield "                        <div class=\"col-sm-4\">
                            <div class=\"header-banner\"><img alt=\"menu_banner1\"
                                    src=\"/assets/images/collections/";
            // line 133
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["collection"], "imageUrl", [], "any", false, false, false, 133), "html", null, true);
            yield "\">
                                <div class=\"banne_info\">
                                    <h6>";
            // line 135
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["collection"], "description", [], "any", false, false, false, 135), "html", null, true);
            yield "</h6>
                                    <h4>";
            // line 136
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["collection"], "title", [], "any", false, false, false, 136), "html", null, true);
            yield "</h4>
                                    <a href=\"";
            // line 137
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["collection"], "buttonLink", [], "any", false, false, false, 137), "html", null, true);
            yield "\">
                                        ";
            // line 138
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["collection"], "buttonText", [], "any", false, false, false, 138), "html", null, true);
            yield "
                                    </a>
                                </div>
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collection'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        yield "
                    </div>
                </div>
                </li>
                <li class=\"dropdown dropdown-mega-menu\"><a routerlink=\"/shop-list\" class=\"nav-link\"
                        ng-reflect-router-link=\"/shop-list\" href=\"/shop-list\">Shop</a></li>
                <li><a routerlink=\"/contact\" class=\"nav-link nav_item\" ng-reflect-router-link=\"/contact\"
                        href=\"/contact\">Contact
                        Us</a></li>
                </ul>
        </div>
        <ul class=\"navbar-nav attr-nav align-items-center\">
            <li><a href=\"javascript:void(0);\" class=\"nav-link search_trigger\"><i class=\"linearicons-magnifier\"></i></a>
                <div class=\"search_wrap\"><span class=\"close-search\"><i class=\"ion-ios-close-empty\"></i></span>
                    <form novalidate=\"\" class=\"ng-untouched ng-pristine ng-valid\">
                        <input type=\"text\" placeholder=\"Search\" id=\"search_input\" class=\"form-control\"><button
                            type=\"submit\" class=\"search_icon\"><i class=\"ion-ios-search-strong\"></i></button>
                    </form>
                </div>

            </li>
            <li class=\"dropdown cart_dropdown\">
                <a href=\"#\" data-bs-toggle=\"dropdown\" class=\"nav-link cart_trigger\">
                    <i class=\"linearicons-cart\"></i>
                    <span class=\"cart_count\"></span>
                </a>
                <div class=\"cart_box dropdown-menu dropdown-menu-right\">
                    <ul class=\"cart_list\">
                    </ul>
                    <div class=\"cart_footer\">
                        <p class=\"cart_total\">
                            <strong>Subtotal:</strong>
                            <span class=\"cart_price\">
                                <span class=\"price_symbole\"></span>
                            </span>
                            <span class=\"cart_price_value\">
                                
                            </span>
                        </p>
                        <p class=\"cart_buttons\">
                            <a routerlink=\"/cart\" class=\"btn btn-fill-line view-cart\" ng-reflect-router-link=\"/cart\"
                                href=\"/cart\">View Cart</a>
                            <a routerlink=\"/checkout\" class=\"btn btn-fill-out checkout\"
                                ng-reflect-router-link=\"/checkout\" href=\"/checkout\">Checkout</a>
                        </p>
                    </div>
                </div>
            </li>
        </ul>
        </nav>
    </div>
    </div>
</header>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "header/index.html.twig";
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
        return array (  297 => 144,  285 => 138,  281 => 137,  277 => 136,  273 => 135,  268 => 133,  264 => 131,  260 => 130,  255 => 127,  247 => 124,  233 => 123,  224 => 117,  219 => 115,  215 => 114,  209 => 112,  192 => 111,  188 => 110,  184 => 108,  180 => 107,  171 => 100,  161 => 96,  156 => 95,  152 => 94,  136 => 81,  121 => 68,  111 => 60,  102 => 53,  100 => 52,  86 => 41,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"header_wrap fixed-top header_with_topbar active\">
    <div class=\"top-header\" style=\"\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-6\">
                    <div class=\"d-flex align-items-center justify-content-center justify-content-md-start\">
                        <div class=\"me-3\">
                            <div class=\"ddOutOfVision\" id=\"msdrpdd20_msddHolder\"
                                style=\"height: 0px; overflow: hidden; position: absolute;\"><select name=\"countries\"
                                    class=\"custome_select\" id=\"msdrpdd20\" tabindex=\"-1\">
                                    <option value=\"USD\" data-title=\"USD\" ng-reflect-value=\"USD\">USD</option>
                                    <option value=\"EUR\" data-title=\"EUR\" ng-reflect-value=\"EUR\">EUR</option>
                                    <option value=\"GBR\" data-title=\"GBR\" ng-reflect-value=\"GBR\">GBR</option>
                                </select></div>
                            <div class=\"dd ddcommon borderRadius\" id=\"msdrpdd20_msdd\" tabindex=\"0\" style=\"width: 52px;\">
                                <div class=\"ddTitle borderRadiusTp\"><span class=\"divider\"></span><span
                                        class=\"ddArrow arrowoff\"></span><span class=\"ddTitleText \"
                                        id=\"msdrpdd20_title\"><span class=\"ddlabel\">USD</span><span class=\"description\"
                                            style=\"display: none;\"></span></span></div><input id=\"msdrpdd20_titleText\"
                                    type=\"text\" autocomplete=\"off\" class=\"text shadow borderRadius\"
                                    style=\"display: none;\">
                                <div class=\"ddChild ddchild_ border shadow\" id=\"msdrpdd20_child\"
                                    style=\"z-index: 9999; display: none; position: absolute; visibility: visible; height: 99px;\">
                                    <ul>
                                        <li class=\"enabled _msddli_ selected\" title=\"USD\"><span
                                                class=\"ddlabel\">USD</span>
                                            <div class=\"clear\"></div>
                                        </li>
                                        <li class=\"enabled _msddli_\" title=\"EUR\"><span class=\"ddlabel\">EUR</span>
                                            <div class=\"clear\"></div>
                                        </li>
                                        <li class=\"enabled _msddli_\" title=\"GBR\"><span class=\"ddlabel\">GBR</span>
                                            <div class=\"clear\"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <ul class=\"contact_detail text-center text-lg-start\">
                            <li><i class=\"ti-mobile\"></i><span>
                                    {{ app.session.get(\"setting\").phone }}
                                </span></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"text-center text-md-end\">
                        <ul class=\"header_list\">
                            <li><a href=\"/compare\"><i class=\"ti-control-shuffle\"></i><span>Compare</span></a></li>
                            <li><a href=\"/wishlist\"><i class=\"ti-heart\"></i><span>Wishlist</span></a></li>

                            {% if app.user %}
                            <li>
                                <a href=\"/account\"><i class=\"ti-user\"></i><span>Account</span></a>
                            </li>
                            <li>
                                <a href=\"/logout\"><i class=\"ti-user\"></i><span>Logout</span></a>
                            </li>
                            {% else %}
                            <li>
                                <a href=\"/login\"><i class=\"ti-user\"></i><span>Signin</span></a>
                            </li>
                            <li>
                                <a href=\"/register\"><i class=\"ti-user\"></i><span>Signup</span></a>
                            </li>

                            {% endif %}
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"bottom_header dark_skin main_menu_uppercase\">
        <div class=\"container\">
            <nav class=\"navbar navbar-expand-lg\"><a routerlink=\"/\" class=\"navbar-brand\" ng-reflect-router-link=\"/\"
                    href=\"/\">
                    <h2>
                        {{ app.session.get(\"setting\").websiteName }}
                    </h2>
                </a><button type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\"
                    aria-expanded=\"false\" class=\"navbar-toggler collapsed\"><span
                        class=\"ion-android-menu\"></span></button>
                <div id=\"navbarSupportedContent\" class=\"navbar-collapse justify-content-end collapse\" style=\"\">
                    <ul class=\"navbar-nav\">
                        <li class=\"dropdown\"><a routerlink=\"/\" class=\"nav-link\" ng-reflect-router-link=\"/\"
                                href=\"/\">Home</a></li>
                        <li class=\"dropdown\"><a href=\"#\" data-bs-toggle=\"dropdown\"
                                class=\"dropdown-toggle nav-link active\" aria-expanded=\"false\">Pages</a>
                            <div class=\"dropdown-menu\">
                                <ul>
                                    {% for page in app.session.get(\"headerPages\") %}
                                    <li><a class=\"dropdown-item nav-link nav_item\" href=\"/page/{{page.slug}}\">
                                            {{page.title}}
                                        </a>
                                    </li>
                                    {% endfor %}

                            </div>
                        </li>
                        <li class=\"dropdown dropdown-mega-menu\"><a href=\"#\" data-bs-toggle=\"dropdown\"
                                class=\"dropdown-toggle nav-link\" aria-expanded=\"false\">Products</a>
                            <div class=\"dropdown-menu\">
                                <ul class=\"mega-menu d-lg-flex\">
                                    {% for category in app.session.get('categories') %}
                                    <li class=\"mega-menu-col col-lg-3\">
                                        <ul>
                                            <li class=\"dropdown-header\">{{category.name }}</li>
                                            {% for product in category.products %}
                                            {% if loop.index < 4 %} <li>
                                                <a class=\"dropdown-item nav-link nav_item\"
                                                    href=\"/product/{{product.slug}}\">
                                                    <img src=\"/assets/images/products/{{product.imageUrls[0]}}\"
                                                        width=\"30\" height=\"30\" alt=\"\">
                                                    {{ product.name }}
                                                </a>

                                    </li>

                                    {% endif %}
                                    {% endfor %}
                                </ul>
                        </li>
                        {% endfor %}

                    </ul>
                    <div class=\"d-lg-flex menu_banners row g-3 px-3\">
                        {% for collection in app.session.get('megaCollections') %}
                        <div class=\"col-sm-4\">
                            <div class=\"header-banner\"><img alt=\"menu_banner1\"
                                    src=\"/assets/images/collections/{{ collection.imageUrl }}\">
                                <div class=\"banne_info\">
                                    <h6>{{ collection.description}}</h6>
                                    <h4>{{ collection.title }}</h4>
                                    <a href=\"{{collection.buttonLink}}\">
                                        {{collection.buttonText}}
                                    </a>
                                </div>
                            </div>
                        </div>
                        {% endfor %}

                    </div>
                </div>
                </li>
                <li class=\"dropdown dropdown-mega-menu\"><a routerlink=\"/shop-list\" class=\"nav-link\"
                        ng-reflect-router-link=\"/shop-list\" href=\"/shop-list\">Shop</a></li>
                <li><a routerlink=\"/contact\" class=\"nav-link nav_item\" ng-reflect-router-link=\"/contact\"
                        href=\"/contact\">Contact
                        Us</a></li>
                </ul>
        </div>
        <ul class=\"navbar-nav attr-nav align-items-center\">
            <li><a href=\"javascript:void(0);\" class=\"nav-link search_trigger\"><i class=\"linearicons-magnifier\"></i></a>
                <div class=\"search_wrap\"><span class=\"close-search\"><i class=\"ion-ios-close-empty\"></i></span>
                    <form novalidate=\"\" class=\"ng-untouched ng-pristine ng-valid\">
                        <input type=\"text\" placeholder=\"Search\" id=\"search_input\" class=\"form-control\"><button
                            type=\"submit\" class=\"search_icon\"><i class=\"ion-ios-search-strong\"></i></button>
                    </form>
                </div>

            </li>
            <li class=\"dropdown cart_dropdown\">
                <a href=\"#\" data-bs-toggle=\"dropdown\" class=\"nav-link cart_trigger\">
                    <i class=\"linearicons-cart\"></i>
                    <span class=\"cart_count\"></span>
                </a>
                <div class=\"cart_box dropdown-menu dropdown-menu-right\">
                    <ul class=\"cart_list\">
                    </ul>
                    <div class=\"cart_footer\">
                        <p class=\"cart_total\">
                            <strong>Subtotal:</strong>
                            <span class=\"cart_price\">
                                <span class=\"price_symbole\"></span>
                            </span>
                            <span class=\"cart_price_value\">
                                
                            </span>
                        </p>
                        <p class=\"cart_buttons\">
                            <a routerlink=\"/cart\" class=\"btn btn-fill-line view-cart\" ng-reflect-router-link=\"/cart\"
                                href=\"/cart\">View Cart</a>
                            <a routerlink=\"/checkout\" class=\"btn btn-fill-out checkout\"
                                ng-reflect-router-link=\"/checkout\" href=\"/checkout\">Checkout</a>
                        </p>
                    </div>
                </div>
            </li>
        </ul>
        </nav>
    </div>
    </div>
</header>", "header/index.html.twig", "C:\\Users\\Rania\\Documents\\formationPHP\\ecommerce_symfony\\templates\\header\\index.html.twig");
    }
}
