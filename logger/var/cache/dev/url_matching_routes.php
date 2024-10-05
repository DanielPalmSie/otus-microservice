<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/feed' => [[['_route' => 'get_feed', '_controller' => 'App\\Controller\\FeedController::getFeed'], null, ['GET' => 0], null, false, false, null]],
        '/api/post' => [[['_route' => 'add_post', '_controller' => 'App\\Controller\\PostController::createPost'], null, ['POST' => 0], null, false, false, null]],
        '/api/register' => [[['_route' => 'register_user', '_controller' => 'App\\Controller\\RegistrationController::register'], null, ['POST' => 0], null, false, false, null]],
        '/api/user/search' => [[['_route' => 'search_users', '_controller' => 'App\\Controller\\RegistrationController::searchUsers'], null, ['GET' => 0], null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/user/get/([^/]++)(*:64)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        64 => [
            [['_route' => 'get_user', '_controller' => 'App\\Controller\\UserController::getUserById'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
