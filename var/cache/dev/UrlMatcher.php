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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/api/dechets' => [[['_route' => 'api_dechets', 'categorie' => '', '_controller' => 'App\\Controller\\HomeController::getDechets'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'mrBin_home', '_controller' => 'App\\Controller\\HomeController::main'], null, null, null, false, false, null]],
        '/categories' => [[['_route' => 'mrBin_categories', '_controller' => 'App\\Controller\\CategoriesController::main'], null, null, null, false, false, null]],
        '/etablissement/creer' => [[['_route' => 'mrBin_etablissement_create', '_controller' => 'App\\Controller\\EtablissementController::create'], null, null, null, false, false, null]],
        '/etablissement' => [[['_route' => 'mrBin_etablissement_showall', '_controller' => 'App\\Controller\\EtablissementController::showAll'], null, null, null, false, false, null]],
        '/mairie/creer' => [[['_route' => 'mrBin_mairie_create', '_controller' => 'App\\Controller\\MairieController::create'], null, null, null, false, false, null]],
        '/mairie' => [[['_route' => 'mrBin_mairie_showall', '_controller' => 'App\\Controller\\MairieController::showAll'], null, null, null, false, false, null]],
        '/type-dechet/creer' => [[['_route' => 'mrBin_typeDechet_create', '_controller' => 'App\\Controller\\TypeDechetController::create'], null, null, null, false, false, null]],
        '/type-dechet' => [[['_route' => 'mrBin_typeDechet_showall', '_controller' => 'App\\Controller\\TypeDechetController::showAll'], null, null, null, false, false, null]],
        '/contenant/creer' => [[['_route' => 'mrBin_contenant_create', '_controller' => 'App\\Controller\\ContenantController::create'], null, null, null, false, false, null]],
        '/contenant' => [[['_route' => 'mrBin_contenant_showall', '_controller' => 'App\\Controller\\ContenantController::showAll'], null, null, null, false, false, null]],
        '/jour-ramassage' => [[['_route' => 'mrBin_jourRamassage_showall', '_controller' => 'App\\Controller\\JourRamassageController::showAll'], null, null, null, false, false, null]],
        '/cgv' => [[['_route' => 'mrBin_cgv', 'template' => 'static/cgv.html.twig', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/resultat/(?'
                    .'|dechet(?'
                        .'|s\\-communs/(\\d+)(*:207)'
                        .'|erie/(\\d+)(*:225)'
                    .')'
                    .'|categorie\\-dechet/(\\d+)(*:257)'
                .')'
                .'|/etablissement/(?'
                    .'|(\\d+)(*:289)'
                    .'|maj/(\\d+)(*:306)'
                    .'|supprimer/(\\d+)(*:329)'
                .')'
                .'|/mairie/(?'
                    .'|(\\d+)(*:354)'
                    .'|supprimer/(\\d+)(*:377)'
                    .'|maj/(\\d+)(*:394)'
                .')'
                .'|/type(?'
                    .'|\\-dechet/(\\d+)(*:425)'
                    .'|Dechet/(?'
                        .'|maj/(\\d+)(*:452)'
                        .'|supprimer/(\\d+)(*:475)'
                    .')'
                .')'
                .'|/contenant/(\\d+)(*:501)'
                .'|/jour\\-ramassage/(\\d+)(*:531)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        207 => [[['_route' => 'mrBin_searchResults_DC', '_controller' => 'App\\Controller\\SearchResultsController::resultatDechetCommun'], ['id'], null, null, false, true, null]],
        225 => [[['_route' => 'mrBin_searchResults_detail', '_controller' => 'App\\Controller\\SearchResultsController::detailRecherche'], ['id'], null, null, false, true, null]],
        257 => [[['_route' => 'mrBin_searchResults_CD', '_controller' => 'App\\Controller\\SearchResultsController::resultatCategorieDecheterie'], ['id'], null, null, false, true, null]],
        289 => [[['_route' => 'mrBin_etablissement_show', '_controller' => 'App\\Controller\\EtablissementController::show'], ['id'], null, null, false, true, null]],
        306 => [[['_route' => 'mrBin_etablissement_update', '_controller' => 'App\\Controller\\EtablissementController::update'], ['id'], null, null, false, true, null]],
        329 => [[['_route' => 'mrBin_etablissement_delete', '_controller' => 'App\\Controller\\EtablissementController::delete'], ['id'], null, null, false, true, null]],
        354 => [[['_route' => 'mrBin_mairie_show', '_controller' => 'App\\Controller\\MairieController::show'], ['id'], null, null, false, true, null]],
        377 => [[['_route' => 'mrBin_mairie_delete', '_controller' => 'App\\Controller\\MairieController::delete'], ['id'], null, null, false, true, null]],
        394 => [[['_route' => 'mrBin_mairie_update', '_controller' => 'App\\Controller\\MairieController::update'], ['id'], null, null, false, true, null]],
        425 => [[['_route' => 'mrBin_typeDechet_show', '_controller' => 'App\\Controller\\TypeDechetController::show'], ['id'], null, null, false, true, null]],
        452 => [[['_route' => 'mrBin_typeDechet_update', '_controller' => 'App\\Controller\\TypeDechetController::update'], ['id'], null, null, false, true, null]],
        475 => [[['_route' => 'mrBin_typeDechet_delete', '_controller' => 'App\\Controller\\TypeDechetController::delete'], ['id'], null, null, false, true, null]],
        501 => [[['_route' => 'mrBin_contenant_show', '_controller' => 'App\\Controller\\ContenantController::show'], ['id'], null, null, false, true, null]],
        531 => [
            [['_route' => 'mrBin_jourRamassage_show', '_controller' => 'App\\Controller\\JourRamassageController::show'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
