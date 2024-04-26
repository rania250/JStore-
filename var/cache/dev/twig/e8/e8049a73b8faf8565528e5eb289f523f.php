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

/* footer/index.html.twig */
class __TwigTemplate_53a0c236f3d67fc0abfebfe0a2c79839 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer/index.html.twig"));

        // line 1
        yield "<footer  class=\"footer_dark\">
    <div  class=\"footer_top\">
        <div  class=\"container\">
            <div  class=\"row\">
                <div  class=\"col-lg-3 col-md-6 col-sm-12\">
                    <div  class=\"widget\">
                        <div  class=\"footer_logo\"><a  href=\"#\">
                                <h2 >
                                    ";
        // line 9
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "session", [], "any", false, false, false, 9), "get", ["setting"], "method", false, false, false, 9), "websiteName", [], "any", false, false, false, 9), "html", null, true);
        yield "
                                </h2>
                            </a></div>
                        <p > 
                            ";
        // line 13
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "session", [], "any", false, false, false, 13), "get", ["setting"], "method", false, false, false, 13), "description", [], "any", false, false, false, 13), "html", null, true);
        yield "    
                        </p>
                    </div>
                    <div  class=\"widget\">
                        <ul  class=\"social_icons social_white\">
                            <li ><a  target=\"_blank\"
                                    href=\"";
        // line 19
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "session", [], "any", false, false, false, 19), "get", ["setting"], "method", false, false, false, 19), "facebookLink", [], "any", false, false, false, 19), "html", null, true);
        yield "\"><i 
                                        class=\"ion-social-facebook\"></i></a>
                            </li>
                            <li ></li>
                            <li ></li>
                            <li ><a  target=\"_blank\"
                                    href=\"";
        // line 25
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "session", [], "any", false, false, false, 25), "get", ["setting"], "method", false, false, false, 25), "youtubeLink", [], "any", false, false, false, 25), "html", null, true);
        yield "\"><i
                                         class=\"ion-social-youtube-outline\"></i></a>
                            </li>
                            <li ><a  target=\"_blank\"
                                    href=\"";
        // line 29
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "session", [], "any", false, false, false, 29), "get", ["setting"], "method", false, false, false, 29), "instagramLink", [], "any", false, false, false, 29), "html", null, true);
        yield "\"><i 
                                        class=\"ion-social-instagram-outline\"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div  class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div  class=\"widget\">
                        <h6  class=\"widget_title\">Useful Links</h6>
                        <ul  class=\"widget_links\">
                            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "session", [], "any", false, false, false, 39), "get", ["footerPages"], "method", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 40
            yield "                            <li ><a  
                                    href=\"/page/";
            // line 41
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["page"], "slug", [], "any", false, false, false, 41), "html", null, true);
            yield "\">
                                    ";
            // line 42
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 42), "html", null, true);
            yield "
                                </a>
                            </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "                        </ul>
                    </div>
                </div>
                <div  class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div  class=\"widget\">
                        <h6  class=\"widget_title\">Category</h6>
                        <ul  class=\"widget_links\">
                            <li ><a  href=\"#\">Men</a></li>
                            <li ><a  href=\"#\">Woman</a></li>
                            <li ><a  href=\"#\">Kids</a></li>
                            <li ><a  href=\"#\">Best Saller</a>
                            </li>
                            <li ><a  href=\"#\">New Arrivals</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div  class=\"col-lg-2 col-md-6 col-sm-6\">
                    <div  class=\"widget\">
                        <h6  class=\"widget_title\">My Account</h6>
                        <ul  class=\"widget_links\">
                            <li ><a  routerlink=\"account\"
                                    ng-reflect-router-link=\"account\" href=\"/account\">My Account</a></li>
                            <li ><a  routerlink=\"terms\"
                                    ng-reflect-router-link=\"terms\" href=\"/terms\">Terms</a></li>
                            <li ><a  routerlink=\"signin\"
                                    ng-reflect-router-link=\"signin\" href=\"/signin\">SignIn</a></li>
                            <li ><a  routerlink=\"signup\"
                                    ng-reflect-router-link=\"signup\" href=\"/signup\">Signup</a></li>
                        </ul>
                    </div>
                </div>
                <div  class=\"col-lg-3 col-md-4 col-sm-6\">
                    <div  class=\"widget\">
                        <h6  class=\"widget_title\">Contact Info</h6>
                        <ul  class=\"contact_info contact_info_light\">
                            <li ><i 
                                    class=\"ti-location-pin\"></i>
                                <p >

                                    ";
        // line 86
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "session", [], "any", false, false, false, 86), "get", ["setting"], "method", false, false, false, 86), "street", [], "any", false, false, false, 86), "html", null, true);
        yield "
                                    ";
        // line 87
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "session", [], "any", false, false, false, 87), "get", ["setting"], "method", false, false, false, 87), "codePostal", [], "any", false, false, false, 87), "html", null, true);
        yield "
                                    ";
        // line 88
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "session", [], "any", false, false, false, 88), "get", ["setting"], "method", false, false, false, 88), "city", [], "any", false, false, false, 88), "html", null, true);
        yield "
                                </p>
                            </li>
                            <li ><i  class=\"ti-email\"></i><a
                                     href=\"mailto:";
        // line 92
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "session", [], "any", false, false, false, 92), "get", ["setting"], "method", false, false, false, 92), "email", [], "any", false, false, false, 92), "html", null, true);
        yield "\">
                                     ";
        // line 93
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 93, $this->source); })()), "session", [], "any", false, false, false, 93), "get", ["setting"], "method", false, false, false, 93), "email", [], "any", false, false, false, 93), "html", null, true);
        yield "
                                    </a>
                            </li>
                            <li ><i  class=\"ti-mobile\"></i>
                                <p >";
        // line 97
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "session", [], "any", false, false, false, 97), "get", ["setting"], "method", false, false, false, 97), "phone", [], "any", false, false, false, 97), "html", null, true);
        yield "</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div  class=\"bottom_footer border-top-tran\">
        <div  class=\"container\">
            <div  class=\"row\">
                <div  class=\"col-md-6\">
                    <p  class=\"mb-md-0 text-center text-md-start\"> ";
        // line 109
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "session", [], "any", false, false, false, 109), "get", ["setting"], "method", false, false, false, 109), "copyright", [], "any", false, false, false, 109), "html", null, true);
        yield "</p>
                </div>
                <div  class=\"col-md-6\">
                    <ul 
                        class=\"footer_payment text-center text-lg-end d-flex gap-2 justify-content-end\">
                        <li ><a  href=\"#\"><img
                                     src=\"/assets/images/visa.png\" alt=\"visa\"></a></li>
                        <li ><a  href=\"#\"><img
                                     src=\"/assets/images/discover.png\" alt=\"discover\"></a>
                        </li>
                        <li ><a  href=\"#\"><img
                                     src=\"/assets/images/master_card.png\"
                                    alt=\"master_card\"></a></li>
                        <li ><a  href=\"#\"><img
                                     src=\"/assets/images/paypal.png\" alt=\"paypal\"></a></li>
                        <li ><a  href=\"#\"><img
                                     src=\"/assets/images/amarican_express.png\"
                                    alt=\"amarican_express\"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "footer/index.html.twig";
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
        return array (  203 => 109,  188 => 97,  181 => 93,  177 => 92,  170 => 88,  166 => 87,  162 => 86,  120 => 46,  110 => 42,  106 => 41,  103 => 40,  99 => 39,  86 => 29,  79 => 25,  70 => 19,  61 => 13,  54 => 9,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer  class=\"footer_dark\">
    <div  class=\"footer_top\">
        <div  class=\"container\">
            <div  class=\"row\">
                <div  class=\"col-lg-3 col-md-6 col-sm-12\">
                    <div  class=\"widget\">
                        <div  class=\"footer_logo\"><a  href=\"#\">
                                <h2 >
                                    {{ app.session.get(\"setting\").websiteName }}
                                </h2>
                            </a></div>
                        <p > 
                            {{ app.session.get(\"setting\").description }}    
                        </p>
                    </div>
                    <div  class=\"widget\">
                        <ul  class=\"social_icons social_white\">
                            <li ><a  target=\"_blank\"
                                    href=\"{{ app.session.get(\"setting\").facebookLink }}\"><i 
                                        class=\"ion-social-facebook\"></i></a>
                            </li>
                            <li ></li>
                            <li ></li>
                            <li ><a  target=\"_blank\"
                                    href=\"{{ app.session.get(\"setting\").youtubeLink }}\"><i
                                         class=\"ion-social-youtube-outline\"></i></a>
                            </li>
                            <li ><a  target=\"_blank\"
                                    href=\"{{ app.session.get(\"setting\").instagramLink }}\"><i 
                                        class=\"ion-social-instagram-outline\"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div  class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div  class=\"widget\">
                        <h6  class=\"widget_title\">Useful Links</h6>
                        <ul  class=\"widget_links\">
                            {% for page in app.session.get(\"footerPages\") %}
                            <li ><a  
                                    href=\"/page/{{page.slug}}\">
                                    {{page.title}}
                                </a>
                            </li>
                            {% endfor %}
                        </ul>
                    </div>
                </div>
                <div  class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div  class=\"widget\">
                        <h6  class=\"widget_title\">Category</h6>
                        <ul  class=\"widget_links\">
                            <li ><a  href=\"#\">Men</a></li>
                            <li ><a  href=\"#\">Woman</a></li>
                            <li ><a  href=\"#\">Kids</a></li>
                            <li ><a  href=\"#\">Best Saller</a>
                            </li>
                            <li ><a  href=\"#\">New Arrivals</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div  class=\"col-lg-2 col-md-6 col-sm-6\">
                    <div  class=\"widget\">
                        <h6  class=\"widget_title\">My Account</h6>
                        <ul  class=\"widget_links\">
                            <li ><a  routerlink=\"account\"
                                    ng-reflect-router-link=\"account\" href=\"/account\">My Account</a></li>
                            <li ><a  routerlink=\"terms\"
                                    ng-reflect-router-link=\"terms\" href=\"/terms\">Terms</a></li>
                            <li ><a  routerlink=\"signin\"
                                    ng-reflect-router-link=\"signin\" href=\"/signin\">SignIn</a></li>
                            <li ><a  routerlink=\"signup\"
                                    ng-reflect-router-link=\"signup\" href=\"/signup\">Signup</a></li>
                        </ul>
                    </div>
                </div>
                <div  class=\"col-lg-3 col-md-4 col-sm-6\">
                    <div  class=\"widget\">
                        <h6  class=\"widget_title\">Contact Info</h6>
                        <ul  class=\"contact_info contact_info_light\">
                            <li ><i 
                                    class=\"ti-location-pin\"></i>
                                <p >

                                    {{app.session.get(\"setting\").street}}
                                    {{app.session.get(\"setting\").codePostal}}
                                    {{app.session.get(\"setting\").city}}
                                </p>
                            </li>
                            <li ><i  class=\"ti-email\"></i><a
                                     href=\"mailto:{{app.session.get(\"setting\").email}}\">
                                     {{app.session.get(\"setting\").email}}
                                    </a>
                            </li>
                            <li ><i  class=\"ti-mobile\"></i>
                                <p >{{app.session.get(\"setting\").phone}}</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div  class=\"bottom_footer border-top-tran\">
        <div  class=\"container\">
            <div  class=\"row\">
                <div  class=\"col-md-6\">
                    <p  class=\"mb-md-0 text-center text-md-start\"> {{app.session.get(\"setting\").copyright}}</p>
                </div>
                <div  class=\"col-md-6\">
                    <ul 
                        class=\"footer_payment text-center text-lg-end d-flex gap-2 justify-content-end\">
                        <li ><a  href=\"#\"><img
                                     src=\"/assets/images/visa.png\" alt=\"visa\"></a></li>
                        <li ><a  href=\"#\"><img
                                     src=\"/assets/images/discover.png\" alt=\"discover\"></a>
                        </li>
                        <li ><a  href=\"#\"><img
                                     src=\"/assets/images/master_card.png\"
                                    alt=\"master_card\"></a></li>
                        <li ><a  href=\"#\"><img
                                     src=\"/assets/images/paypal.png\" alt=\"paypal\"></a></li>
                        <li ><a  href=\"#\"><img
                                     src=\"/assets/images/amarican_express.png\"
                                    alt=\"amarican_express\"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>", "footer/index.html.twig", "C:\\Users\\Rania\\Documents\\formationPHP\\ecommerce_symfony\\templates\\footer\\index.html.twig");
    }
}
