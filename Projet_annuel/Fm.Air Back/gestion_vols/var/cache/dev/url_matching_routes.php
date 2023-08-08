<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/auth/register' => [[['_route' => 'authenticationregister', '_controller' => 'App\\Controller\\AuthenticationController::register'], null, ['POST' => 0], null, false, false, null]],
        '/api/auth/login' => [[['_route' => 'authenticationlogin', '_controller' => 'App\\Controller\\AuthenticationController::login'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/(?'
                        .'|auth/logout/(\\d+)(*:35)'
                        .'|\\.well\\-known/genid/([^/]++)(*:70)'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:106)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:137)'
                        .'|contexts/([^.]+)(?:\\.(jsonld))?(*:176)'
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:214)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => 'authenticationlogout', '_controller' => 'App\\Controller\\AuthenticationController::logout'], ['id'], ['GET' => 0], null, false, true, null]],
        70 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        106 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        137 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        176 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        214 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
