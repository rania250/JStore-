<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/account' => [[['_route' => 'app_account', '_controller' => 'App\\Controller\\AccountController::index'], null, null, null, false, false, null]],
        '/account/address' => [[['_route' => 'app_address_index', '_controller' => 'App\\Controller\\AddressController::index'], null, ['GET' => 0], null, true, false, null]],
        '/account/address/new' => [[['_route' => 'app_address_new', '_controller' => 'App\\Controller\\AddressController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/api/address' => [[['_route' => 'app_post_address', '_controller' => 'App\\Controller\\Api\\ApiAddressController::index'], null, ['POST' => 0], null, false, false, null]],
        '/cart' => [[['_route' => 'app_cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/cart/get' => [[['_route' => 'app_get_cart', '_controller' => 'App\\Controller\\CartController::getCart'], null, null, null, false, false, null]],
        '/checkout' => [[['_route' => 'app_checkout', '_controller' => 'App\\Controller\\CheckoutController::index'], null, null, null, false, false, null]],
        '/compare' => [[['_route' => 'app_compare', '_controller' => 'App\\Controller\\CompareController::index'], null, null, null, false, false, null]],
        '/compare/get' => [[['_route' => 'app_get_compare', '_controller' => 'App\\Controller\\CompareController::getCompare'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/error' => [[['_route' => 'app_error', '_controller' => 'App\\Controller\\HomeController::errorPage'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/wishlist' => [[['_route' => 'app_wish_list', '_controller' => 'App\\Controller\\WishListController::index'], null, null, null, false, false, null]],
        '/wishlist/get' => [[['_route' => 'app_get_wishlist', '_controller' => 'App\\Controller\\WishListController::getWishList'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/a(?'
                    .'|ccount/address/([^/]++)(?'
                        .'|(*:233)'
                        .'|/edit(*:246)'
                        .'|(*:254)'
                    .')'
                    .'|pi/address/([^/]++)(?'
                        .'|(*:285)'
                    .')'
                .')'
                .'|/c(?'
                    .'|art/(?'
                        .'|add/([^/]++)(?:/([^/]++))?(*:333)'
                        .'|remove/([^/]++)(?:/([^/]++))?(*:370)'
                    .')'
                    .'|ompare/(?'
                        .'|add/([^/]++)(*:401)'
                        .'|remove/([^/]++)(*:424)'
                    .')'
                .')'
                .'|/p(?'
                    .'|roduct/(?'
                        .'|([^/]++)(*:457)'
                        .'|get/([^/]++)(*:477)'
                    .')'
                    .'|age/([^/]++)(*:498)'
                .')'
                .'|/wishlist/(?'
                    .'|add/([^/]++)(*:532)'
                    .'|remove/([^/]++)(*:555)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        233 => [[['_route' => 'app_address_show', '_controller' => 'App\\Controller\\AddressController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        246 => [[['_route' => 'app_address_edit', '_controller' => 'App\\Controller\\AddressController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        254 => [[['_route' => 'app_address_delete', '_controller' => 'App\\Controller\\AddressController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        285 => [
            [['_route' => 'app_api_put_address', '_controller' => 'App\\Controller\\Api\\ApiAddressController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'app_api_delete_address', '_controller' => 'App\\Controller\\Api\\ApiAddressController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        333 => [[['_route' => 'app_add_to_cart', 'count' => 1, '_controller' => 'App\\Controller\\CartController::addToCart'], ['productId', 'count'], null, null, false, true, null]],
        370 => [[['_route' => 'app_remove_to_cart', 'count' => 1, '_controller' => 'App\\Controller\\CartController::removeToCart'], ['productId', 'count'], null, null, false, true, null]],
        401 => [[['_route' => 'app_add_to_compare', '_controller' => 'App\\Controller\\CompareController::addToCompare'], ['productId'], null, null, false, true, null]],
        424 => [[['_route' => 'app_remove_to_compare', '_controller' => 'App\\Controller\\CompareController::removeToCompare'], ['productId'], null, null, false, true, null]],
        457 => [[['_route' => 'app_product_by_slug', '_controller' => 'App\\Controller\\HomeController::showProduct'], ['slug'], null, null, false, true, null]],
        477 => [[['_route' => 'app_product_by_id', '_controller' => 'App\\Controller\\HomeController::getProductById'], ['id'], null, null, false, true, null]],
        498 => [[['_route' => 'app_page', '_controller' => 'App\\Controller\\PageController::index'], ['slug'], null, null, false, true, null]],
        532 => [[['_route' => 'app_add_to_wishlist', '_controller' => 'App\\Controller\\WishListController::addToWishList'], ['productId'], null, null, false, true, null]],
        555 => [
            [['_route' => 'app_remove_to_wishlist', '_controller' => 'App\\Controller\\WishListController::removeToWishList'], ['productId'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
