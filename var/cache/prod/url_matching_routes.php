<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
        '/paneliste/test-avenir/deo' => [[['_route' => 'user_test_a_venirs_deo_create', '_controller' => 'App\\Controller\\TestAvenir\\DeoController::create'], null, null, null, false, false, null]],
        '/paneliste/test_a_venir' => [[['_route' => 'user_test_a_venirs_index', '_controller' => 'App\\Controller\\TestAvenir\\TestAVenirController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|c(?'
                        .'|ategory(?'
                            .'|/([^/]++)/(?'
                                .'|show(*:48)'
                                .'|edit(*:59)'
                                .'|delete(*:72)'
                            .')'
                            .'|habit/([^/]++)/(?'
                                .'|show(*:102)'
                                .'|edit(*:114)'
                                .'|delete(*:128)'
                            .')'
                        .')'
                        .'|on(?'
                            .'|figuration/(?'
                                .'|([^/]++)(?'
                                    .'|(*:168)'
                                    .'|/edit(*:181)'
                                    .'|(*:189)'
                                .')'
                                .'|mentions\\-legales(*:215)'
                            .')'
                            .'|tact/([^/]++)/(?'
                                .'|show(*:245)'
                                .'|delete(*:259)'
                            .')'
                        .')'
                    .')'
                    .'|focus_group/(?'
                        .'|([^/]++)/(?'
                            .'|show(*:301)'
                            .'|accesses(?'
                                .'|(*:320)'
                                .'|\\-edit/([^/]++)(*:343)'
                            .')'
                        .')'
                        .'|e(?'
                            .'|dit\\-message/([^/]++)(*:378)'
                            .'|xport(?'
                                .'|_participants/([^/]++)(*:416)'
                                .'|\\-absents/([^/]++)(*:442)'
                            .')'
                        .')'
                        .'|reply\\-message/([^/]++)(*:475)'
                        .'|validate_message/([^/]++)(*:508)'
                    .')'
                    .'|home/edit/([^/]++)(*:535)'
                    .'|link/(?'
                        .'|access\\-details/([^/]++)(*:575)'
                        .'|replies\\-details/([^/]++)(*:608)'
                        .'|sync\\-replies/([^/]++)(*:638)'
                        .'|export\\-missings/([^/]++)(*:671)'
                    .')'
                    .'|newsletter/edit/([^/]++)(*:704)'
                    .'|panelistegroup/([^/]++)/(?'
                        .'|show(*:743)'
                        .'|edit(*:755)'
                        .'|delete(*:769)'
                    .')'
                    .'|survey/(?'
                        .'|([^/]++)/show(*:801)'
                        .'|enquetes/([^/]++)/edit(*:831)'
                        .'|pre_recrutements/([^/]++)/edit(*:869)'
                        .'|test/([^/]++)/edit(*:895)'
                        .'|([^/]++)/delete(*:918)'
                    .')'
                    .'|user/([^/]++)/(?'
                        .'|show(*:948)'
                        .'|edit(*:960)'
                        .'|delete(*:974)'
                    .')'
                .')'
                .'|/paneliste/link/([^/]++)(*:1008)'
                .'|/([^/]++)/pdf(*:1030)'
                .'|/paneliste/details/([^/]++)(*:1066)'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:1129)'
                    .'|([A-z0-9_-]*)/(.+)(*:1156)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        48 => [[['_route' => 'admin_category_show', '_controller' => 'App\\Controller\\Backend\\CategoryController::showAction'], ['id'], null, null, false, false, null]],
        59 => [[['_route' => 'admin_category_edit', '_controller' => 'App\\Controller\\Backend\\CategoryController::editAction'], ['id'], null, null, false, false, null]],
        72 => [[['_route' => 'admin_category_delete', '_controller' => 'App\\Controller\\Backend\\CategoryController::deleteAction'], ['id'], null, null, false, false, null]],
        102 => [[['_route' => 'backend_categoryhabit_show', '_controller' => 'App\\Controller\\Backend\\CategoryHabitController::showAction'], ['id'], null, null, false, false, null]],
        114 => [[['_route' => 'backend_categoryhabit_edit', '_controller' => 'App\\Controller\\Backend\\CategoryHabitController::editAction'], ['id'], null, null, false, false, null]],
        128 => [[['_route' => 'backend_categoryhabit_delete', '_controller' => 'App\\Controller\\Backend\\CategoryHabitController::deleteAction'], ['id'], null, null, false, false, null]],
        168 => [[['_route' => 'admin_configuration_configuration_show', '_controller' => 'App\\Controller\\Backend\\ConfigurationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        181 => [[['_route' => 'admin_configuration_edit', '_controller' => 'App\\Controller\\Backend\\ConfigurationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        189 => [[['_route' => 'admin_configuration_delete', '_controller' => 'App\\Controller\\Backend\\ConfigurationController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        215 => [[['_route' => 'admin_configuration_mentions_legales', '_controller' => 'App\\Controller\\Backend\\ConfigurationController::legalNoticeAction'], [], null, null, false, false, null]],
        245 => [[['_route' => 'admin_contact_show', '_controller' => 'App\\Controller\\Backend\\ContactController::showAction'], ['id'], null, null, false, false, null]],
        259 => [[['_route' => 'admin_contact_delete', '_controller' => 'App\\Controller\\Backend\\ContactController::deleteAction'], ['id'], null, null, false, false, null]],
        301 => [[['_route' => 'admin_focus_group_show', '_controller' => 'App\\Controller\\Backend\\FocusGroupController::showAction'], ['id'], null, null, false, false, null]],
        320 => [[['_route' => 'admin_focus_group_accesses', '_controller' => 'App\\Controller\\Backend\\FocusGroupController::accessesAction'], ['id'], null, null, false, false, null]],
        343 => [[['_route' => 'admin_focus_group_access_edit', '_controller' => 'App\\Controller\\Backend\\FocusGroupController::accessEditAction'], ['survey', 'user'], null, null, false, true, null]],
        378 => [[['_route' => 'admin_focus_group_edit_message', '_controller' => 'App\\Controller\\Backend\\FocusGroupController::editMessageAction'], ['id'], null, null, false, true, null]],
        416 => [[['_route' => 'admin_focus_group_export_participant', '_controller' => 'App\\Controller\\Backend\\FocusGroupController::exportParticipantsAction'], ['focusGroup'], null, null, false, true, null]],
        442 => [[['_route' => 'admin_focus_group_export_absents', '_controller' => 'App\\Controller\\Backend\\FocusGroupController::exportAbsentsAction'], ['focusGroup'], null, null, false, true, null]],
        475 => [[['_route' => 'admin_focus_group_reply_message', '_controller' => 'App\\Controller\\Backend\\FocusGroupController::replyMessageAction'], ['id'], null, null, false, true, null]],
        508 => [[['_route' => 'admin_focus_group_validate_message', '_controller' => 'App\\Controller\\Backend\\FocusGroupController::validateMessageAction'], ['id'], null, null, false, true, null]],
        535 => [[['_route' => 'admin_home_page_admin_newsletter_edit', '_controller' => 'App\\Controller\\Backend\\HomePageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        575 => [[['_route' => 'admin_link_access_details', '_controller' => 'App\\Controller\\Backend\\LinkController::accessDetailsAction'], ['link'], null, null, false, true, null]],
        608 => [[['_route' => 'admin_link_replies_details', '_controller' => 'App\\Controller\\Backend\\LinkController::repliesDetailsAction'], ['link'], null, null, false, true, null]],
        638 => [[['_route' => 'admin_link_sync_replies', '_controller' => 'App\\Controller\\Backend\\LinkController::syncRepliesAction'], ['link'], null, null, false, true, null]],
        671 => [[['_route' => 'admin_link_export-missings', '_controller' => 'App\\Controller\\Backend\\LinkController::exportMissingsAction'], ['link'], null, null, false, true, null]],
        704 => [[['_route' => 'admin_newsletter_edit', '_controller' => 'App\\Controller\\Backend\\NewsletterController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        743 => [[['_route' => 'admin_paneliste_groups_show', '_controller' => 'App\\Controller\\Backend\\PanelisteGroupController::showAction'], ['id'], null, null, false, false, null]],
        755 => [[['_route' => 'admin_paneliste_groups_edit', '_controller' => 'App\\Controller\\Backend\\PanelisteGroupController::editAction'], ['id'], null, null, false, false, null]],
        769 => [[['_route' => 'admin_paneliste_groups_delete', '_controller' => 'App\\Controller\\Backend\\PanelisteGroupController::deleteAction'], ['id'], null, null, false, false, null]],
        801 => [[['_route' => 'admin_survey_show', '_controller' => 'App\\Controller\\Backend\\SurveyController::showAction'], ['id'], null, null, false, false, null]],
        831 => [[['_route' => 'admin_survey_enquete_edit', 'surveyType' => 0, '_controller' => 'App\\Controller\\Backend\\SurveyController::editAction'], ['id'], null, null, false, false, null]],
        869 => [[['_route' => 'admin_survey_pre_recrutements_edit', 'surveyType' => 1, '_controller' => 'App\\Controller\\Backend\\SurveyController::editAction'], ['id'], null, null, false, false, null]],
        895 => [[['_route' => 'admin_survey_test_edit', 'surveyType' => 2, '_controller' => 'App\\Controller\\Backend\\SurveyController::editAction'], ['id'], null, null, false, false, null]],
        918 => [[['_route' => 'admin_survey_delete', '_controller' => 'App\\Controller\\Backend\\SurveyController::deleteAction'], ['id'], null, null, false, false, null]],
        948 => [[['_route' => 'admin_user_show', '_controller' => 'App\\Controller\\Backend\\UserController::showAction'], ['id'], null, null, false, false, null]],
        960 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\Backend\\UserController::editAction'], ['id'], null, null, false, false, null]],
        974 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\Backend\\UserController::deleteAction'], ['id'], null, null, false, false, null]],
        1008 => [[['_route' => 'user_link_redirect', '_controller' => 'App\\Controller\\Frontend\\LinkController::redirectAction'], ['token'], null, null, false, true, null]],
        1030 => [[['_route' => 'pdf', '_controller' => 'App\\Controller\\Frontend\\PdfController::index'], ['id'], null, null, false, false, null]],
        1066 => [[['_route' => 'user_survey_details', '_controller' => 'App\\Controller\\Frontend\\SurveyController::detailsAction'], ['id'], null, null, false, true, null]],
        1129 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        1156 => [
            [['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
