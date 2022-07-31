<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/user' => [[['_route' => 'api_users_email_item', '_controller' => 'App\\Controller\\UsersController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Users', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'email'], null, ['GET' => 0], null, false, false, null]],
        '/authentication_token' => [[['_route' => 'authentication_token'], null, ['POST' => 0], null, false, false, null]],
        '/admin/users-list' => [[['_route' => 'admin_users_list', '_controller' => 'App\\Controller\\AdminController::list'], null, null, null, false, false, null]],
        '/admin/user-view' => [[['_route' => 'admin_user_view', '_controller' => 'App\\Controller\\AdminController::view'], null, null, null, false, false, null]],
        '/admin/user-edit' => [[['_route' => 'admin_user_update', '_controller' => 'App\\Controller\\AdminController::update'], null, null, null, false, false, null]],
        '/habitations' => [[['_route' => 'app_habitations', '_controller' => 'App\\Controller\\CategoryController::index'], null, null, null, false, false, null]],
        '/dwelling/add-favorite' => [[['_route' => 'dwelling_add_favorite', '_controller' => 'App\\Controller\\DwellingController::favorite'], null, null, null, false, false, null]],
        '/dwelling/add-signal' => [[['_route' => 'dwelling_add_signal', '_controller' => 'App\\Controller\\DwellingController::signal'], null, null, null, false, false, null]],
        '/dwelling/closed-signal' => [[['_route' => 'dwelling_closed_signal', '_controller' => 'App\\Controller\\DwellingController::closedSignal'], null, null, null, false, false, null]],
        '/habitations/favoris' => [[['_route' => 'dwelling_favorite', '_controller' => 'App\\Controller\\FavoriteController::favorite'], null, null, null, false, false, null]],
        '/habitations/signal' => [[['_route' => 'dwelling_signal', '_controller' => 'App\\Controller\\FavoriteController::signal'], null, null, null, false, false, null]],
        '/mon-compte/historical/host' => [[['_route' => 'compte_historical_host', '_controller' => 'App\\Controller\\HistoricalController::host'], null, null, null, false, false, null]],
        '/mon-compte/historical/client' => [[['_route' => 'compte_historical_client', '_controller' => 'App\\Controller\\HistoricalController::client'], null, null, null, false, false, null]],
        '/mon-compte/historical/action' => [[['_route' => 'historical.action', '_controller' => 'App\\Controller\\HistoricalController::historicalAction'], null, null, null, false, false, null]],
        '/mon-compte/hote' => [[['_route' => 'host', '_controller' => 'App\\Controller\\HostController::host'], null, null, null, false, false, null]],
        '/habition/not-disponible' => [[['_route' => 'unavailable', '_controller' => 'App\\Controller\\HostController::unavailable'], null, null, null, false, false, null]],
        '/' => [
            [['_route' => 'app_index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null],
            [['_route' => 'index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null],
        ],
        '/product/likes' => [[['_route' => 'likes', '_controller' => 'App\\Controller\\LikesCommentsController::likes'], null, null, null, false, false, null]],
        '/product/comments' => [[['_route' => 'comments', '_controller' => 'App\\Controller\\LikesCommentsController::comments'], null, null, null, false, false, null]],
        '/dwelling/list' => [[['_route' => 'list_dwelling', '_controller' => 'App\\Controller\\ListDwellingController::listDwelling'], null, null, null, false, false, null]],
        '/dwelling/activate' => [[['_route' => 'dwelling_activate', '_controller' => 'App\\Controller\\ListDwellingController::dwellingActivate'], null, null, null, false, false, null]],
        '/dwelling/delete' => [[['_route' => 'dwelling_delete', '_controller' => 'App\\Controller\\ListDwellingController::dwellingDelete'], null, null, null, false, false, null]],
        '/search/location' => [[['_route' => 'location', '_controller' => 'App\\Controller\\LocationController::location'], null, null, null, false, false, null]],
        '/mon-compte/message/selected' => [[['_route' => 'message_selected', '_controller' => 'App\\Controller\\MessageController::selected'], null, null, null, false, false, null]],
        '/mon-compte/message/details' => [[['_route' => 'message_details', '_controller' => 'App\\Controller\\MessageController::details'], null, null, null, false, false, null]],
        '/mon-compte/message/send' => [[['_route' => 'message_send', '_controller' => 'App\\Controller\\MessageController::send'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\PageController::contact'], null, null, null, false, false, null]],
        '/mentions-légales' => [[['_route' => 'legalnotice', '_controller' => 'App\\Controller\\PageController::legalnotice'], null, null, null, false, false, null]],
        '/conditions-générales-de-vente' => [[['_route' => 'cgv', '_controller' => 'App\\Controller\\PageController::cgv'], null, null, null, false, false, null]],
        '/conditions-générales-dutilisation' => [[['_route' => 'cgu', '_controller' => 'App\\Controller\\PageController::cgu'], null, null, null, false, false, null]],
        '/foire-aux-questions' => [[['_route' => 'faq', '_controller' => 'App\\Controller\\PageController::faq'], null, null, null, false, false, null]],
        '/a-propos' => [[['_route' => 'about', '_controller' => 'App\\Controller\\PageController::about'], null, null, null, false, false, null]],
        '/checkout' => [[['_route' => 'single_product_check', '_controller' => 'App\\Controller\\ProductController::check'], null, ['POST' => 0], null, false, false, null]],
        '/search' => [[['_route' => 'app_search', '_controller' => 'App\\Controller\\SearchController::index'], null, null, null, false, false, null]],
        '/logout' => [
            [['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null],
            [['_route' => 'app_logout'], null, ['GET' => 0], null, false, false, null],
        ],
        '/connexion' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/account/settings' => [[['_route' => 'account_settings', '_controller' => 'App\\Controller\\SettingsController::settings'], null, null, null, false, false, null]],
        '/account/settings/search' => [[['_route' => 'account_settings_search', '_controller' => 'App\\Controller\\SettingsController::search'], null, null, null, false, false, null]],
        '/account/settings/signal' => [[['_route' => 'account_settings_signal', '_controller' => 'App\\Controller\\SettingsController::signal'], null, null, null, false, false, null]],
        '/account/settings/show' => [[['_route' => 'account_settings_show', '_controller' => 'App\\Controller\\SettingsController::show'], null, null, null, false, false, null]],
        '/newsletter' => [[['_route' => 'register_newsletter', '_controller' => 'App\\Controller\\SettingsController::newsletter'], null, null, null, false, false, null]],
        '/account/settings/update' => [[['_route' => 'account_settings_update', '_controller' => 'App\\Controller\\SettingsController::update'], null, null, null, false, false, null]],
        '/account/settings/delete' => [[['_route' => 'account_delete', '_controller' => 'App\\Controller\\SettingsController::delete'], null, null, null, false, false, null]],
        '/account/delete' => [[['_route' => 'delete', '_controller' => 'App\\Controller\\SettingsController::deleteAccount'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'register', '_controller' => 'App\\Controller\\UsersController::register'], null, null, null, false, false, null]],
        '/membre/compte' => [[['_route' => 'activate', '_controller' => 'App\\Controller\\UsersController::activate'], null, null, null, false, false, null]],
        '/membre/reinit' => [[['_route' => 'forgot', '_controller' => 'App\\Controller\\UsersController::forgot'], null, null, null, false, false, null]],
        '/mon-compte' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\UsersController::dashboard'], null, null, null, false, false, null]],
        '/mon-compte/paiement' => [[['_route' => 'payment', '_controller' => 'App\\Controller\\UsersController::payment'], null, null, null, false, false, null]],
        '/mon-compte/historical' => [[['_route' => 'historical', '_controller' => 'App\\Controller\\UsersController::historical'], null, null, null, false, false, null]],
        '/mon-compte/message' => [[['_route' => 'message', '_controller' => 'App\\Controller\\UsersController::message'], null, null, null, false, false, null]],
        '/docs' => [[['_route' => 'swagger', '_controller' => 'api_platform.swagger.action.ui'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:42)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:72)'
                        .'|contexts/(.+)(?:\\.([^/]++))?(*:107)'
                        .'|users(?:\\.([^/]++))?(*:135)'
                        .'|reservations(?'
                            .'|(?:\\.([^/]++))?(*:173)'
                            .'|/([^/]++)/([^/]++)/([^/]++)(*:208)'
                        .')'
                        .'|posts(?:\\.([^/]++))?(*:237)'
                        .'|notification/([^/]++)/([^/]++)/([^/]++)(*:284)'
                    .')'
                .')'
                .'|/checkout/(?'
                    .'|success/([^/]++)(*:323)'
                    .'|paiement/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:402)'
                .')'
                .'|/mon\\-compte/hote/([^/]++)(*:437)'
                .'|/habitation/([^/]++)/([^/]++)(*:474)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        42 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        72 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        107 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        135 => [[['_route' => 'api_users_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Users', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
        173 => [[['_route' => 'api_reservations_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Reservation', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
        208 => [[['_route' => 'api_reservations_update_item', '_controller' => 'App\\Controller\\HistoricalController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Reservation', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'update'], ['id', 'statut', 'salt'], ['GET' => 0], null, false, true, null]],
        237 => [[['_route' => 'api_posts_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Posts', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
        284 => [[['_route' => 'api_posts_notification_item', '_controller' => 'App\\Controller\\HostController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Posts', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'notification'], ['id', 'email', 'salt'], ['GET' => 0], null, false, true, null]],
        323 => [[['_route' => 'checkout_success', '_controller' => 'App\\Controller\\CheckoutController::habitation'], ['id'], null, null, false, true, null]],
        402 => [[['_route' => 'app_checkout_paiement', '_controller' => 'App\\Controller\\ProductController::paiement'], ['id', 'arrival', 'departure', 'adults', 'childrens', 'babies', 'animals'], null, null, false, true, null]],
        437 => [[['_route' => 'edit_dwelling', '_controller' => 'App\\Controller\\EditDwellingController::editDwelling'], ['id'], null, null, false, true, null]],
        474 => [
            [['_route' => 'app_habitation', '_controller' => 'App\\Controller\\ProductController::habitation'], ['slug', 'id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
