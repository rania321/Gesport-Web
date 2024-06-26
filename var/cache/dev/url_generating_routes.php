<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_activite_index' => [[], ['_controller' => 'App\\Controller\\ActiviteController::index'], [], [['text', '/activite/']], [], [], []],
    'app_activite_indexBack' => [[], ['_controller' => 'App\\Controller\\ActiviteController::indexBack'], [], [['text', '/activite/back']], [], [], []],
    'app_activite_new' => [[], ['_controller' => 'App\\Controller\\ActiviteController::new'], [], [['text', '/activite/new']], [], [], []],
    'app_activite_show' => [['ida'], ['_controller' => 'App\\Controller\\ActiviteController::show'], [], [['variable', '/', '[^/]++', 'ida', true], ['text', '/activite']], [], [], []],
    'app_activite_edit' => [['ida'], ['_controller' => 'App\\Controller\\ActiviteController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'ida', true], ['text', '/activite']], [], [], []],
    'app_activite_delete' => [['ida'], ['_controller' => 'App\\Controller\\ActiviteController::delete'], [], [['variable', '/', '[^/]++', 'ida', true], ['text', '/activite']], [], [], []],
    'app_activite_reserv' => [['ida'], ['_controller' => 'App\\Controller\\ActiviteController::reserv'], [], [['variable', '/', '[^/]++', 'ida', true], ['text', '/activite/reserv']], [], [], []],
    'app_activite_favoris' => [[], ['_controller' => 'App\\Controller\\ActiviteController::favoris'], [], [['text', '/activite/listFav']], [], [], []],
    'base' => [[], ['_controller' => 'App\\Controller\\ExampleController::index'], [], [['text', '/base']], [], [], []],
    'baseBack' => [[], ['_controller' => 'App\\Controller\\ExampleController::indexBack'], [], [['text', '/baseBack']], [], [], []],
    'app_reservationactivite_index' => [[], ['_controller' => 'App\\Controller\\ReservationactiviteController::index'], [], [['text', '/reservationactivite/']], [], [], []],
    'app_reservationactivite_indexBack' => [[], ['_controller' => 'App\\Controller\\ReservationactiviteController::indexBack'], [], [['text', '/reservationactivite/back']], [], [], []],
    'app_reservationactivite_new' => [[], ['_controller' => 'App\\Controller\\ReservationactiviteController::new'], [], [['text', '/reservationactivite/new']], [], [], []],
    'app_reservationactivite_show' => [['idr'], ['_controller' => 'App\\Controller\\ReservationactiviteController::show'], [], [['text', '/show'], ['variable', '/', '[^/]++', 'idr', true], ['text', '/reservationactivite']], [], [], []],
    'app_reservationactivite_showBack' => [['idr'], ['_controller' => 'App\\Controller\\ReservationactiviteController::showBack'], [], [['variable', '/', '[^/]++', 'idr', true], ['text', '/reservationactivite']], [], [], []],
    'app_reservationactivite_edit' => [['idr'], ['_controller' => 'App\\Controller\\ReservationactiviteController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idr', true], ['text', '/reservationactivite']], [], [], []],
    'app_reservationactivite_editBack' => [['idr'], ['_controller' => 'App\\Controller\\ReservationactiviteController::editBack'], [], [['text', '/editBack'], ['variable', '/', '[^/]++', 'idr', true], ['text', '/reservationactivite']], [], [], []],
    'app_reservationactivite_delete' => [['idr'], ['_controller' => 'App\\Controller\\ReservationactiviteController::delete'], [], [['variable', '/', '[^/]++', 'idr', true], ['text', '/reservationactivite']], [], [], []],
    'app_reservationactivite_deleteBack' => [['idr'], ['_controller' => 'App\\Controller\\ReservationactiviteController::deleteBack'], [], [['text', '/back'], ['variable', '/', '[^/]++', 'idr', true], ['text', '/reservationactivite']], [], [], []],
    'app_reservationactivite_generate_pdf' => [['idr'], ['_controller' => 'App\\Controller\\ReservationactiviteController::generatePDF'], [], [['text', '/generate-pdf'], ['variable', '/', '[^/]++', 'idr', true], ['text', '/reservationactivite']], [], [], []],
    'search_Ajax' => [[], ['_controller' => 'App\\Controller\\ReservationactiviteController::searchAjax'], [], [['text', '/reservationactivite/search']], [], [], []],
    'app_user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/']], [], [], []],
    'app_user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], [], []],
    'app_user_show' => [['idu'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'idu', true], ['text', '/user']], [], [], []],
    'app_user_edit' => [['idu'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idu', true], ['text', '/user']], [], [], []],
    'app_user_delete' => [['idu'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'idu', true], ['text', '/user']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_reservation_new_for_activity' => [['activityId'], ['_controller' => 'App\\Controller\\ReservationactiviteController::newForActivity'], [], [['variable', '/', '[^/]++', 'activityId', true], ['text', '/reservation/new']], [], [], []],
    'ajouter_love_activite' => [['ida'], ['_controller' => 'App\\Controller\\ActiviteController::ajouterLove'], [], [['text', '/love'], ['variable', '/', '[^/]++', 'ida', true], ['text', '/activite']], [], [], []],
    'supprimer_love_activite' => [['ida'], ['_controller' => 'App\\Controller\\ActiviteController::supprimerLove'], [], [['text', '/unlove'], ['variable', '/', '[^/]++', 'ida', true], ['text', '/activite']], [], [], []],
    'rechercheAjax' => [[], ['_controller' => 'App\\Controller\\ActiviteController::searchAjax'], [], [['text', '/activite/rechercheAjax']], [], [], []],
];
