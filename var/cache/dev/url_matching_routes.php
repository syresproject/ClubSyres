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
        '/admin/category' => [[['_route' => 'admin_category_index', '_controller' => 'App\\Controller\\Backend\\CategoryController::indexAction'], null, null, null, true, false, null]],
        '/admin/category/new' => [[['_route' => 'admin_category_new', '_controller' => 'App\\Controller\\Backend\\CategoryController::newAction'], null, null, null, false, false, null]],
        '/admin/category/create' => [[['_route' => 'admin_category_create', '_controller' => 'App\\Controller\\Backend\\CategoryController::createDeleteForm'], null, null, null, false, false, null]],
        '/admin/categoryhabit' => [[['_route' => 'backend_categoryhabit_index', '_controller' => 'App\\Controller\\Backend\\CategoryHabitController::indexAction'], null, null, null, true, false, null]],
        '/admin/categoryhabit/new' => [[['_route' => 'backend_categoryhabit_new', '_controller' => 'App\\Controller\\Backend\\CategoryHabitController::newAction'], null, null, null, false, false, null]],
        '/admin/categoryhabit/create' => [[['_route' => 'backend_categoryhabit_create', '_controller' => 'App\\Controller\\Backend\\CategoryHabitController::createDeleteForm'], null, null, null, false, false, null]],
        '/admin/configuration' => [[['_route' => 'admin_configuration_index', '_controller' => 'App\\Controller\\Backend\\ConfigurationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/configuration/new' => [[['_route' => 'admin_configuration_new', '_controller' => 'App\\Controller\\Backend\\ConfigurationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/contact' => [[['_route' => 'admin_contact_index', '_controller' => 'App\\Controller\\Backend\\ContactController::indexAction'], null, null, null, true, false, null]],
        '/admin/home/show' => [[['_route' => 'admin_home_page_show', '_controller' => 'App\\Controller\\Backend\\HomePageController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/home/new' => [[['_route' => 'admin_home_page_new', '_controller' => 'App\\Controller\\Backend\\HomePageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/newsletter/show' => [[['_route' => 'admin_newsletter_show', '_controller' => 'App\\Controller\\Backend\\NewsletterController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/newsletter/new' => [[['_route' => 'admin_newsletter', '_controller' => 'App\\Controller\\Backend\\NewsletterController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/panelistegroup' => [[['_route' => 'admin_paneliste_groups_index', '_controller' => 'App\\Controller\\Backend\\PanelisteGroupController::indexAction'], null, null, null, true, false, null]],
        '/admin/panelistegroup/select-Group-p' => [[['_route' => 'admin_paneliste_groups_select-Group-p', '_controller' => 'App\\Controller\\Backend\\PanelisteGroupController::ajaxSelectGroupe'], null, null, null, false, false, null]],
        '/admin/panelistegroup/api/new' => [[['_route' => 'admin_paneliste_groups_app_backend_panelistegroup_apinewgroup', '_controller' => 'App\\Controller\\Backend\\PanelisteGroupController::apiNewGroup'], null, ['POST' => 0], null, false, false, null]],
        '/admin/panelistegroup/api/select' => [[['_route' => 'admin_paneliste_groups_app_backend_panelistegroup_apiselect', '_controller' => 'App\\Controller\\Backend\\PanelisteGroupController::apiSelect'], null, ['POST' => 0], null, false, false, null]],
        '/admin/panelistegroup/rend-html-new' => [[['_route' => 'admin_paneliste_groups_newRend', '_controller' => 'App\\Controller\\Backend\\PanelisteGroupController::rendNewAction'], null, null, null, false, false, null]],
        '/admin/panelistegroup/new' => [[['_route' => 'admin_paneliste_groups_new', '_controller' => 'App\\Controller\\Backend\\PanelisteGroupController::newAction'], null, null, null, false, false, null]],
        '/admin/panelistegroup/create' => [[['_route' => 'admin_paneliste_groups_create', '_controller' => 'App\\Controller\\Backend\\PanelisteGroupController::createDeleteForm'], null, null, null, false, false, null]],
        '/admin/panelistegroup/ajout-groupe' => [[['_route' => 'admin_paneliste_groups_ajout_group', '_controller' => 'App\\Controller\\Backend\\PanelisteGroupController::importAction'], null, null, null, false, false, null]],
        '/admin/panelistegroup/import' => [[['_route' => 'admin_paneliste_groups_import', '_controller' => 'App\\Controller\\Backend\\PanelisteGroupController::importGAction'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\Backend\\RegistrationController::register'], null, null, null, false, false, null]],
        '/admin/survey/tests' => [[['_route' => 'admin_survey_tests_index', 'surveyType' => 2, '_controller' => 'App\\Controller\\Backend\\SurveyController::indexAction'], null, null, null, true, false, null]],
        '/admin/survey/enquetes' => [[['_route' => 'admin_survey_enquetes_index', 'surveyType' => 0, '_controller' => 'App\\Controller\\Backend\\SurveyController::indexAction'], null, null, null, true, false, null]],
        '/admin/survey/pre_recrutements' => [[['_route' => 'admin_survey_pre_recrutements_index', 'surveyType' => 1, '_controller' => 'App\\Controller\\Backend\\SurveyController::indexAction'], null, null, null, true, false, null]],
        '/admin/survey/tests/new' => [[['_route' => 'admin_survey_new_test', 'surveyType' => 2, '_controller' => 'App\\Controller\\Backend\\SurveyController::newAction'], null, null, null, false, false, null]],
        '/admin/survey/enquetes/new' => [[['_route' => 'admin_survey_new_enquete', 'surveyType' => 0, '_controller' => 'App\\Controller\\Backend\\SurveyController::newAction'], null, null, null, false, false, null]],
        '/admin/survey/pre_recrutements/new' => [[['_route' => 'admin_survey_new_prerecrutement', 'surveyType' => 1, '_controller' => 'App\\Controller\\Backend\\SurveyController::newAction'], null, null, null, false, false, null]],
        '/admin/user/index' => [[['_route' => 'admin_user_index', '_controller' => 'App\\Controller\\Backend\\UserController::indexAction'], null, null, null, false, false, null]],
        '/admin/user/create' => [[['_route' => 'admin_user_create', '_controller' => 'App\\Controller\\Backend\\UserController::createAction'], null, null, null, false, false, null]],
        '/admin/user/new' => [[['_route' => 'admin_user_new', '_controller' => 'App\\Controller\\Backend\\UserController::newAction'], null, null, null, false, false, null]],
        '/admin/user/import' => [[['_route' => 'admin_user_import', '_controller' => 'App\\Controller\\Backend\\UserController::importAction'], null, null, null, false, false, null]],
        '/paneliste' => [[['_route' => 'user_accueil_index', '_controller' => 'App\\Controller\\Frontend\\AccueilController::index'], null, null, null, true, false, null]],
        '/paneliste/contact' => [[['_route' => 'user_contact_index', '_controller' => 'App\\Controller\\Frontend\\ContactController::index'], null, null, null, true, false, null]],
        '/paneliste/fag' => [[['_route' => 'user_fag', '_controller' => 'App\\Controller\\Frontend\\FagController::index'], null, null, null, false, false, null]],
        '/inscription/confirme' => [[['_route' => 'inscription_confirme', '_controller' => 'App\\Controller\\Frontend\\InscriptionController::indexAction'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'inscription_new', '_controller' => 'App\\Controller\\Frontend\\InscriptionController::newAction'], null, null, null, false, false, null]],
        '/paneliste/mention-legale' => [[['_route' => 'user_mention_legale_index', '_controller' => 'App\\Controller\\Frontend\\Legal_notice::index'], null, null, null, true, false, null]],
        '/paneliste/enquete' => [[['_route' => 'user_survey_enquete', '_controller' => 'App\\Controller\\Frontend\\SurveyController::enqueteAction'], null, null, null, false, false, null]],
        '/paneliste/tests' => [[['_route' => 'user_survey_tests', '_controller' => 'App\\Controller\\Frontend\\SurveyController::testAction'], null, null, null, false, false, null]],
        '/paneliste/closed_tests' => [[['_route' => 'user_survey_closed_tests', '_controller' => 'App\\Controller\\Frontend\\SurveyController::closedTestAction'], null, null, null, false, false, null]],
        '/admin/login' => [[['_route' => 'app_admin_login', '_controller' => 'App\\Controller\\Security\\SecurityAdminController::login'], null, null, null, false, false, null]],
        '/admin/logout' => [[['_route' => 'app_admin_logout', '_controller' => 'App\\Controller\\Security\\SecurityAdminController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\Security\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\Security\\SecurityController::logout'], null, null, null, false, false, null]],
        '/paneliste/test_a_venir' => [[['_route' => 'user_test_a_venirs_index', '_controller' => 'App\\Controller\\TestAvenir\\TestAVenirController::index'], null, null, null, false, false, null]],
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
                .'|/admin/(?'
                    .'|c(?'
                        .'|ategory(?'
                            .'|/([^/]++)/(?'
                                .'|show(*:210)'
                                .'|edit(*:222)'
                                .'|delete(*:236)'
                            .')'
                            .'|habit/([^/]++)/(?'
                                .'|show(*:267)'
                                .'|edit(*:279)'
                                .'|delete(*:293)'
                            .')'
                        .')'
                        .'|on(?'
                            .'|figuration/(?'
                                .'|([^/]++)(?'
                                    .'|(*:333)'
                                    .'|/edit(*:346)'
                                    .'|(*:354)'
                                .')'
                                .'|mentions\\-legales(*:380)'
                            .')'
                            .'|tact/([^/]++)/(?'
                                .'|show(*:410)'
                                .'|delete(*:424)'
                            .')'
                        .')'
                    .')'
                    .'|focus_group/(?'
                        .'|([^/]++)/(?'
                            .'|show(*:466)'
                            .'|accesses(?'
                                .'|(*:485)'
                                .'|\\-edit/([^/]++)(*:508)'
                            .')'
                        .')'
                        .'|e(?'
                            .'|dit\\-message/([^/]++)(*:543)'
                            .'|xport(?'
                                .'|_participants/([^/]++)(*:581)'
                                .'|\\-absents/([^/]++)(*:607)'
                            .')'
                        .')'
                        .'|reply\\-message/([^/]++)(*:640)'
                        .'|validate_message/([^/]++)(*:673)'
                    .')'
                    .'|home/edit/([^/]++)(*:700)'
                    .'|link/(?'
                        .'|access\\-details/([^/]++)(*:740)'
                        .'|replies\\-details/([^/]++)(*:773)'
                        .'|sync\\-replies/([^/]++)(*:803)'
                        .'|export\\-missings/([^/]++)(*:836)'
                    .')'
                    .'|newsletter/edit/([^/]++)(*:869)'
                    .'|panelistegroup/([^/]++)/(?'
                        .'|show(*:908)'
                        .'|edit(*:920)'
                        .'|delete(*:934)'
                    .')'
                    .'|survey/(?'
                        .'|([^/]++)/show(*:966)'
                        .'|enquetes/([^/]++)/edit(*:996)'
                        .'|pre_recrutements/([^/]++)/edit(*:1034)'
                        .'|test/([^/]++)/edit(*:1061)'
                        .'|([^/]++)/delete(*:1085)'
                    .')'
                    .'|user/([^/]++)/(?'
                        .'|show(*:1116)'
                        .'|edit(*:1129)'
                        .'|delete(*:1144)'
                    .')'
                .')'
                .'|/paneliste/link/([^/]++)(*:1179)'
                .'|/([^/]++)/pdf(*:1201)'
                .'|/paneliste/details/([^/]++)(*:1237)'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:1300)'
                    .'|([A-z0-9_-]*)/(.+)(*:1327)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        210 => [[['_route' => 'admin_category_show', '_controller' => 'App\\Controller\\Backend\\CategoryController::showAction'], ['id'], null, null, false, false, null]],
        222 => [[['_route' => 'admin_category_edit', '_controller' => 'App\\Controller\\Backend\\CategoryController::editAction'], ['id'], null, null, false, false, null]],
        236 => [[['_route' => 'admin_category_delete', '_controller' => 'App\\Controller\\Backend\\CategoryController::deleteAction'], ['id'], null, null, false, false, null]],
        267 => [[['_route' => 'backend_categoryhabit_show', '_controller' => 'App\\Controller\\Backend\\CategoryHabitController::showAction'], ['id'], null, null, false, false, null]],
        279 => [[['_route' => 'backend_categoryhabit_edit', '_controller' => 'App\\Controller\\Backend\\CategoryHabitController::editAction'], ['id'], null, null, false, false, null]],
        293 => [[['_route' => 'backend_categoryhabit_delete', '_controller' => 'App\\Controller\\Backend\\CategoryHabitController::deleteAction'], ['id'], null, null, false, false, null]],
        333 => [[['_route' => 'admin_configuration_configuration_show', '_controller' => 'App\\Controller\\Backend\\ConfigurationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        346 => [[['_route' => 'admin_configuration_edit', '_controller' => 'App\\Controller\\Backend\\ConfigurationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        354 => [[['_route' => 'admin_configuration_delete', '_controller' => 'App\\Controller\\Backend\\ConfigurationController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        380 => [[['_route' => 'admin_configuration_mentions_legales', '_controller' => 'App\\Controller\\Backend\\ConfigurationController::legalNoticeAction'], [], null, null, false, false, null]],
        410 => [[['_route' => 'admin_contact_show', '_controller' => 'App\\Controller\\Backend\\ContactController::showAction'], ['id'], null, null, false, false, null]],
        424 => [[['_route' => 'admin_contact_delete', '_controller' => 'App\\Controller\\Backend\\ContactController::deleteAction'], ['id'], null, null, false, false, null]],
        466 => [[['_route' => 'admin_focus_group_show', '_controller' => 'App\\Controller\\Backend\\FocusGroupController::showAction'], ['id'], null, null, false, false, null]],
        485 => [[['_route' => 'admin_focus_group_accesses', '_controller' => 'App\\Controller\\Backend\\FocusGroupController::accessesAction'], ['id'], null, null, false, false, null]],
        508 => [[['_route' => 'admin_focus_group_access_edit', '_controller' => 'App\\Controller\\Backend\\FocusGroupController::accessEditAction'], ['survey', 'user'], null, null, false, true, null]],
        543 => [[['_route' => 'admin_focus_group_edit_message', '_controller' => 'App\\Controller\\Backend\\FocusGroupController::editMessageAction'], ['id'], null, null, false, true, null]],
        581 => [[['_route' => 'admin_focus_group_export_participant', '_controller' => 'App\\Controller\\Backend\\FocusGroupController::exportParticipantsAction'], ['focusGroup'], null, null, false, true, null]],
        607 => [[['_route' => 'admin_focus_group_export_absents', '_controller' => 'App\\Controller\\Backend\\FocusGroupController::exportAbsentsAction'], ['focusGroup'], null, null, false, true, null]],
        640 => [[['_route' => 'admin_focus_group_reply_message', '_controller' => 'App\\Controller\\Backend\\FocusGroupController::replyMessageAction'], ['id'], null, null, false, true, null]],
        673 => [[['_route' => 'admin_focus_group_validate_message', '_controller' => 'App\\Controller\\Backend\\FocusGroupController::validateMessageAction'], ['id'], null, null, false, true, null]],
        700 => [[['_route' => 'admin_home_page_admin_newsletter_edit', '_controller' => 'App\\Controller\\Backend\\HomePageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        740 => [[['_route' => 'admin_link_access_details', '_controller' => 'App\\Controller\\Backend\\LinkController::accessDetailsAction'], ['link'], null, null, false, true, null]],
        773 => [[['_route' => 'admin_link_replies_details', '_controller' => 'App\\Controller\\Backend\\LinkController::repliesDetailsAction'], ['link'], null, null, false, true, null]],
        803 => [[['_route' => 'admin_link_sync_replies', '_controller' => 'App\\Controller\\Backend\\LinkController::syncRepliesAction'], ['link'], null, null, false, true, null]],
        836 => [[['_route' => 'admin_link_export-missings', '_controller' => 'App\\Controller\\Backend\\LinkController::exportMissingsAction'], ['link'], null, null, false, true, null]],
        869 => [[['_route' => 'admin_newsletter_edit', '_controller' => 'App\\Controller\\Backend\\NewsletterController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        908 => [[['_route' => 'admin_paneliste_groups_show', '_controller' => 'App\\Controller\\Backend\\PanelisteGroupController::showAction'], ['id'], null, null, false, false, null]],
        920 => [[['_route' => 'admin_paneliste_groups_edit', '_controller' => 'App\\Controller\\Backend\\PanelisteGroupController::editAction'], ['id'], null, null, false, false, null]],
        934 => [[['_route' => 'admin_paneliste_groups_delete', '_controller' => 'App\\Controller\\Backend\\PanelisteGroupController::deleteAction'], ['id'], null, null, false, false, null]],
        966 => [[['_route' => 'admin_survey_show', '_controller' => 'App\\Controller\\Backend\\SurveyController::showAction'], ['id'], null, null, false, false, null]],
        996 => [[['_route' => 'admin_survey_enquete_edit', 'surveyType' => 0, '_controller' => 'App\\Controller\\Backend\\SurveyController::editAction'], ['id'], null, null, false, false, null]],
        1034 => [[['_route' => 'admin_survey_pre_recrutements_edit', 'surveyType' => 1, '_controller' => 'App\\Controller\\Backend\\SurveyController::editAction'], ['id'], null, null, false, false, null]],
        1061 => [[['_route' => 'admin_survey_test_edit', 'surveyType' => 2, '_controller' => 'App\\Controller\\Backend\\SurveyController::editAction'], ['id'], null, null, false, false, null]],
        1085 => [[['_route' => 'admin_survey_delete', '_controller' => 'App\\Controller\\Backend\\SurveyController::deleteAction'], ['id'], null, null, false, false, null]],
        1116 => [[['_route' => 'admin_user_show', '_controller' => 'App\\Controller\\Backend\\UserController::showAction'], ['id'], null, null, false, false, null]],
        1129 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\Backend\\UserController::editAction'], ['id'], null, null, false, false, null]],
        1144 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\Backend\\UserController::deleteAction'], ['id'], null, null, false, false, null]],
        1179 => [[['_route' => 'user_link_redirect', '_controller' => 'App\\Controller\\Frontend\\LinkController::redirectAction'], ['token'], null, null, false, true, null]],
        1201 => [[['_route' => 'pdf', '_controller' => 'App\\Controller\\Frontend\\PdfController::index'], ['id'], null, null, false, false, null]],
        1237 => [[['_route' => 'user_survey_details', '_controller' => 'App\\Controller\\Frontend\\SurveyController::detailsAction'], ['id'], null, null, false, true, null]],
        1300 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        1327 => [
            [['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
