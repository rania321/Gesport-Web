<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/activite' => [[['_route' => 'app_activite_index', '_controller' => 'App\\Controller\\ActiviteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/activite/back' => [[['_route' => 'app_activite_indexBack', '_controller' => 'App\\Controller\\ActiviteController::indexBack'], null, ['GET' => 0], null, false, false, null]],
        '/activite/new' => [[['_route' => 'app_activite_new', '_controller' => 'App\\Controller\\ActiviteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/base' => [[['_route' => 'base', '_controller' => 'App\\Controller\\ExampleController::index'], null, null, null, false, false, null]],
        '/baseBack' => [[['_route' => 'baseBack', '_controller' => 'App\\Controller\\ExampleController::indexBack'], null, null, null, false, false, null]],
        '/reservationactivite' => [[['_route' => 'app_reservationactivite_index', '_controller' => 'App\\Controller\\ReservationactiviteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservationactivite/back' => [[['_route' => 'app_reservationactivite_indexBack', '_controller' => 'App\\Controller\\ReservationactiviteController::indexBack'], null, ['GET' => 0], null, false, false, null]],
        '/reservationactivite/new' => [[['_route' => 'app_reservationactivite_new', '_controller' => 'App\\Controller\\ReservationactiviteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/activite/(?'
                    .'|([^/]++)(?'
                        .'|(*:31)'
                        .'|/edit(*:43)'
                        .'|(*:50)'
                    .')'
                    .'|reserv/([^/]++)(*:73)'
                    .'|([^/]++)/(?'
                        .'|love(*:96)'
                        .'|unlove(*:109)'
                    .')'
                    .'|rechercheAjax(*:131)'
                .')'
                .'|/reservation(?'
                    .'|activite/([^/]++)(?'
                        .'|/(?'
                            .'|show(*:183)'
                            .'|edit(?'
                                .'|(*:198)'
                                .'|Back(*:210)'
                            .')'
                            .'|back(*:223)'
                            .'|generate\\-pdf(*:244)'
                        .')'
                        .'|(*:253)'
                    .')'
                    .'|/new/([^/]++)(*:275)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:301)'
                    .'|/edit(*:314)'
                    .'|(*:322)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:362)'
                    .'|wdt/([^/]++)(*:382)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:428)'
                            .'|router(*:442)'
                            .'|exception(?'
                                .'|(*:462)'
                                .'|\\.css(*:475)'
                            .')'
                        .')'
                        .'|(*:485)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'app_activite_show', '_controller' => 'App\\Controller\\ActiviteController::show'], ['ida'], ['GET' => 0], null, false, true, null]],
        43 => [[['_route' => 'app_activite_edit', '_controller' => 'App\\Controller\\ActiviteController::edit'], ['ida'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        50 => [[['_route' => 'app_activite_delete', '_controller' => 'App\\Controller\\ActiviteController::delete'], ['ida'], ['POST' => 0], null, false, true, null]],
        73 => [[['_route' => 'app_activite_reserv', '_controller' => 'App\\Controller\\ActiviteController::reserv'], ['ida'], null, null, false, true, null]],
        96 => [[['_route' => 'ajouter_love_activite', '_controller' => 'App\\Controller\\ActiviteController::ajouterLove'], ['ida'], ['POST' => 0], null, false, false, null]],
        109 => [[['_route' => 'supprimer_love_activite', '_controller' => 'App\\Controller\\ActiviteController::supprimerLove'], ['ida'], ['DELETE' => 0], null, false, false, null]],
        131 => [[['_route' => 'rechercheAjax', '_controller' => 'App\\Controller\\ActiviteController::searchAjax'], [], ['GET' => 0], null, false, false, null]],
        183 => [[['_route' => 'app_reservationactivite_show', '_controller' => 'App\\Controller\\ReservationactiviteController::show'], ['idr'], ['GET' => 0], null, false, false, null]],
        198 => [[['_route' => 'app_reservationactivite_edit', '_controller' => 'App\\Controller\\ReservationactiviteController::edit'], ['idr'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        210 => [[['_route' => 'app_reservationactivite_editBack', '_controller' => 'App\\Controller\\ReservationactiviteController::editBack'], ['idr'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        223 => [[['_route' => 'app_reservationactivite_deleteBack', '_controller' => 'App\\Controller\\ReservationactiviteController::deleteBack'], ['idr'], ['POST' => 0], null, false, false, null]],
        244 => [[['_route' => 'app_reservationactivite_generate_pdf', '_controller' => 'App\\Controller\\ReservationactiviteController::generatePDF'], ['idr'], ['GET' => 0], null, false, false, null]],
        253 => [
            [['_route' => 'app_reservationactivite_showBack', '_controller' => 'App\\Controller\\ReservationactiviteController::showBack'], ['idr'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_reservationactivite_delete', '_controller' => 'App\\Controller\\ReservationactiviteController::delete'], ['idr'], ['POST' => 0], null, false, true, null],
        ],
        275 => [[['_route' => 'app_reservation_new_for_activity', '_controller' => 'App\\Controller\\ReservationactiviteController::newForActivity'], ['activityId'], null, null, false, true, null]],
        301 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['idu'], ['GET' => 0], null, false, true, null]],
        314 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['idu'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        322 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['idu'], ['POST' => 0], null, false, true, null]],
        362 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        382 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        428 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        442 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        462 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        475 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        485 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
