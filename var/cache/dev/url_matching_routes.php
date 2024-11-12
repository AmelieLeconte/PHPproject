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
        '/bank' => [[['_route' => 'app_bank_index', '_controller' => 'App\\Controller\\BankController::index'], null, ['GET' => 0], null, false, false, null]],
        '/bank/list' => [[['_route' => 'bank_list', '_controller' => 'App\\Controller\\BankController::listAction'], null, ['GET' => 0], null, false, false, null]],
        '/chemin/de/traverse' => [[['_route' => 'app_chemin_de_traverse_index', '_controller' => 'App\\Controller\\CheminDeTraverseController::index'], null, ['GET' => 0], null, false, false, null]],
        '/chemin/de/traverse/new' => [[['_route' => 'app_chemin_de_traverse_new', '_controller' => 'App\\Controller\\CheminDeTraverseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/coin' => [[['_route' => 'app_coin_index', '_controller' => 'App\\Controller\\CoinController::index'], null, ['GET' => 0], null, false, false, null]],
        '/coin/new' => [[['_route' => 'app_coin_new', '_controller' => 'App\\Controller\\CoinController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/bank/(\\d+)(*:213)'
                .'|/c(?'
                    .'|hemin/de/traverse/(?'
                        .'|([^/]++)(?'
                            .'|(*:258)'
                            .'|/edit(*:271)'
                            .'|(*:279)'
                        .')'
                        .'|(\\d+)/coin/(\\d+)(*:304)'
                        .'|(\\d+)/coin/list(*:327)'
                    .')'
                    .'|oin/([^/]++)(?'
                        .'|(*:351)'
                        .'|/edit(*:364)'
                        .'|(*:372)'
                    .')'
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
        213 => [[['_route' => 'bank_show', '_controller' => 'App\\Controller\\BankController::showAction'], ['id'], null, null, false, true, null]],
        258 => [[['_route' => 'app_chemin_de_traverse_show', '_controller' => 'App\\Controller\\CheminDeTraverseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        271 => [[['_route' => 'app_chemin_de_traverse_edit', '_controller' => 'App\\Controller\\CheminDeTraverseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        279 => [[['_route' => 'app_chemin_de_traverse_delete', '_controller' => 'App\\Controller\\CheminDeTraverseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        304 => [[['_route' => 'app_chemin_de_traverse_coin_show', '_controller' => 'App\\Controller\\CheminDeTraverseController::coinShow'], ['chemin_de_traverse_id', 'coin_id'], null, null, false, true, null]],
        327 => [[['_route' => 'app_chemin_de_traverse_coin_list', '_controller' => 'App\\Controller\\CheminDeTraverseController::coinlistAction'], ['chemin_de_traverse_id'], ['GET' => 0], null, false, false, null]],
        351 => [[['_route' => 'app_coin_show', '_controller' => 'App\\Controller\\CoinController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        364 => [[['_route' => 'app_coin_edit', '_controller' => 'App\\Controller\\CoinController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        372 => [
            [['_route' => 'app_coin_delete', '_controller' => 'App\\Controller\\CoinController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
