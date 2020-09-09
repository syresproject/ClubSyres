<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'admin_category_index' => [[], ['_controller' => 'App\\Controller\\Backend\\CategoryController::indexAction'], [], [['text', '/admin/category/']], [], []],
    'admin_category_new' => [[], ['_controller' => 'App\\Controller\\Backend\\CategoryController::newAction'], [], [['text', '/admin/category/new']], [], []],
    'admin_category_show' => [['id'], ['_controller' => 'App\\Controller\\Backend\\CategoryController::showAction'], [], [['text', '/show'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category']], [], []],
    'admin_category_edit' => [['id'], ['_controller' => 'App\\Controller\\Backend\\CategoryController::editAction'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category']], [], []],
    'admin_category_delete' => [['id'], ['_controller' => 'App\\Controller\\Backend\\CategoryController::deleteAction'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category']], [], []],
    'admin_category_create' => [[], ['_controller' => 'App\\Controller\\Backend\\CategoryController::createDeleteForm'], [], [['text', '/admin/category/create']], [], []],
    'backend_categoryhabit_index' => [[], ['_controller' => 'App\\Controller\\Backend\\CategoryHabitController::indexAction'], [], [['text', '/admin/categoryhabit/']], [], []],
    'backend_categoryhabit_new' => [[], ['_controller' => 'App\\Controller\\Backend\\CategoryHabitController::newAction'], [], [['text', '/admin/categoryhabit/new']], [], []],
    'backend_categoryhabit_show' => [['id'], ['_controller' => 'App\\Controller\\Backend\\CategoryHabitController::showAction'], [], [['text', '/show'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/categoryhabit']], [], []],
    'backend_categoryhabit_edit' => [['id'], ['_controller' => 'App\\Controller\\Backend\\CategoryHabitController::editAction'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/categoryhabit']], [], []],
    'backend_categoryhabit_delete' => [['id'], ['_controller' => 'App\\Controller\\Backend\\CategoryHabitController::deleteAction'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/categoryhabit']], [], []],
    'backend_categoryhabit_create' => [[], ['_controller' => 'App\\Controller\\Backend\\CategoryHabitController::createDeleteForm'], [], [['text', '/admin/categoryhabit/create']], [], []],
    'admin_configuration_index' => [[], ['_controller' => 'App\\Controller\\Backend\\ConfigurationController::index'], [], [['text', '/admin/configuration/']], [], []],
    'admin_configuration_new' => [[], ['_controller' => 'App\\Controller\\Backend\\ConfigurationController::new'], [], [['text', '/admin/configuration/new']], [], []],
    'admin_configuration_configuration_show' => [['id'], ['_controller' => 'App\\Controller\\Backend\\ConfigurationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/configuration']], [], []],
    'admin_configuration_edit' => [['id'], ['_controller' => 'App\\Controller\\Backend\\ConfigurationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/configuration']], [], []],
    'admin_configuration_delete' => [['id'], ['_controller' => 'App\\Controller\\Backend\\ConfigurationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/configuration']], [], []],
    'admin_configuration_mentions_legales' => [[], ['_controller' => 'App\\Controller\\Backend\\ConfigurationController::legalNoticeAction'], [], [['text', '/admin/configuration/mentions-legales']], [], []],
    'admin_contact_index' => [[], ['_controller' => 'App\\Controller\\Backend\\ContactController::indexAction'], [], [['text', '/admin/contact/']], [], []],
    'admin_contact_show' => [['id'], ['_controller' => 'App\\Controller\\Backend\\ContactController::showAction'], [], [['text', '/show'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/contact']], [], []],
    'admin_contact_delete' => [['id'], ['_controller' => 'App\\Controller\\Backend\\ContactController::deleteAction'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/contact']], [], []],
    'admin_focus_group_show' => [['id'], ['_controller' => 'App\\Controller\\Backend\\FocusGroupController::showAction'], [], [['text', '/show'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/focus_group']], [], []],
    'admin_focus_group_accesses' => [['id'], ['_controller' => 'App\\Controller\\Backend\\FocusGroupController::accessesAction'], [], [['text', '/accesses'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/focus_group']], [], []],
    'admin_focus_group_access_edit' => [['survey', 'user'], ['_controller' => 'App\\Controller\\Backend\\FocusGroupController::accessEditAction'], [], [['variable', '/', '[^/]++', 'user', true], ['text', '/accesses-edit'], ['variable', '/', '[^/]++', 'survey', true], ['text', '/admin/focus_group']], [], []],
    'admin_focus_group_edit_message' => [['id'], ['_controller' => 'App\\Controller\\Backend\\FocusGroupController::editMessageAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/focus_group/edit-message']], [], []],
    'admin_focus_group_reply_message' => [['id'], ['_controller' => 'App\\Controller\\Backend\\FocusGroupController::replyMessageAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/focus_group/reply-message']], [], []],
    'admin_focus_group_validate_message' => [['id'], ['_controller' => 'App\\Controller\\Backend\\FocusGroupController::validateMessageAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/focus_group/validate_message']], [], []],
    'admin_focus_group_export_participant' => [['focusGroup'], ['_controller' => 'App\\Controller\\Backend\\FocusGroupController::exportParticipantsAction'], [], [['variable', '/', '[^/]++', 'focusGroup', true], ['text', '/admin/focus_group/export_participants']], [], []],
    'admin_focus_group_export_absents' => [['focusGroup'], ['_controller' => 'App\\Controller\\Backend\\FocusGroupController::exportAbsentsAction'], [], [['variable', '/', '[^/]++', 'focusGroup', true], ['text', '/admin/focus_group/export-absents']], [], []],
    'admin_home_page_show' => [[], ['_controller' => 'App\\Controller\\Backend\\HomePageController::index'], [], [['text', '/admin/home/show']], [], []],
    'admin_home_page_new' => [[], ['_controller' => 'App\\Controller\\Backend\\HomePageController::new'], [], [['text', '/admin/home/new']], [], []],
    'admin_home_page_admin_newsletter_edit' => [['id'], ['_controller' => 'App\\Controller\\Backend\\HomePageController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/home/edit']], [], []],
    'admin_link_access_details' => [['link'], ['_controller' => 'App\\Controller\\Backend\\LinkController::accessDetailsAction'], [], [['variable', '/', '[^/]++', 'link', true], ['text', '/admin/link/access-details']], [], []],
    'admin_link_replies_details' => [['link'], ['_controller' => 'App\\Controller\\Backend\\LinkController::repliesDetailsAction'], [], [['variable', '/', '[^/]++', 'link', true], ['text', '/admin/link/replies-details']], [], []],
    'admin_link_sync_replies' => [['link'], ['_controller' => 'App\\Controller\\Backend\\LinkController::syncRepliesAction'], [], [['variable', '/', '[^/]++', 'link', true], ['text', '/admin/link/sync-replies']], [], []],
    'admin_link_export-missings' => [['link'], ['_controller' => 'App\\Controller\\Backend\\LinkController::exportMissingsAction'], [], [['variable', '/', '[^/]++', 'link', true], ['text', '/admin/link/export-missings']], [], []],
    'admin_newsletter_show' => [[], ['_controller' => 'App\\Controller\\Backend\\NewsletterController::index'], [], [['text', '/admin/newsletter/show']], [], []],
    'admin_newsletter' => [[], ['_controller' => 'App\\Controller\\Backend\\NewsletterController::new'], [], [['text', '/admin/newsletter/new']], [], []],
    'admin_newsletter_edit' => [['id'], ['_controller' => 'App\\Controller\\Backend\\NewsletterController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/newsletter/edit']], [], []],
    'admin_paneliste_groups_index' => [[], ['_controller' => 'App\\Controller\\Backend\\PanelisteGroupController::indexAction'], [], [['text', '/admin/panelistegroup/']], [], []],
    'admin_paneliste_groups_select-Group-p' => [[], ['_controller' => 'App\\Controller\\Backend\\PanelisteGroupController::ajaxSelectGroupe'], [], [['text', '/admin/panelistegroup/select-Group-p']], [], []],
    'admin_paneliste_groups_app_backend_panelistegroup_apinewgroup' => [[], ['_controller' => 'App\\Controller\\Backend\\PanelisteGroupController::apiNewGroup'], [], [['text', '/admin/panelistegroup/api/new']], [], []],
    'admin_paneliste_groups_app_backend_panelistegroup_apiselect' => [[], ['_controller' => 'App\\Controller\\Backend\\PanelisteGroupController::apiSelect'], [], [['text', '/admin/panelistegroup/api/select']], [], []],
    'admin_paneliste_groups_newRend' => [[], ['_controller' => 'App\\Controller\\Backend\\PanelisteGroupController::rendNewAction'], [], [['text', '/admin/panelistegroup/rend-html-new']], [], []],
    'admin_paneliste_groups_new' => [[], ['_controller' => 'App\\Controller\\Backend\\PanelisteGroupController::newAction'], [], [['text', '/admin/panelistegroup/new']], [], []],
    'admin_paneliste_groups_show' => [['id'], ['_controller' => 'App\\Controller\\Backend\\PanelisteGroupController::showAction'], [], [['text', '/show'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/panelistegroup']], [], []],
    'admin_paneliste_groups_edit' => [['id'], ['_controller' => 'App\\Controller\\Backend\\PanelisteGroupController::editAction'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/panelistegroup']], [], []],
    'admin_paneliste_groups_delete' => [['id'], ['_controller' => 'App\\Controller\\Backend\\PanelisteGroupController::deleteAction'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/panelistegroup']], [], []],
    'admin_paneliste_groups_create' => [[], ['_controller' => 'App\\Controller\\Backend\\PanelisteGroupController::createDeleteForm'], [], [['text', '/admin/panelistegroup/create']], [], []],
    'admin_paneliste_groups_ajout_group' => [[], ['_controller' => 'App\\Controller\\Backend\\PanelisteGroupController::importAction'], [], [['text', '/admin/panelistegroup/ajout-groupe']], [], []],
    'admin_paneliste_groups_import' => [[], ['_controller' => 'App\\Controller\\Backend\\PanelisteGroupController::importGAction'], [], [['text', '/admin/panelistegroup/import']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\Backend\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'admin_survey_tests_index' => [[], ['surveyType' => 2, '_controller' => 'App\\Controller\\Backend\\SurveyController::indexAction'], [], [['text', '/admin/survey/tests/']], [], []],
    'admin_survey_enquetes_index' => [[], ['surveyType' => 0, '_controller' => 'App\\Controller\\Backend\\SurveyController::indexAction'], [], [['text', '/admin/survey/enquetes/']], [], []],
    'admin_survey_pre_recrutements_index' => [[], ['surveyType' => 1, '_controller' => 'App\\Controller\\Backend\\SurveyController::indexAction'], [], [['text', '/admin/survey/pre_recrutements/']], [], []],
    'admin_survey_new_test' => [[], ['surveyType' => 2, '_controller' => 'App\\Controller\\Backend\\SurveyController::newAction'], [], [['text', '/admin/survey/tests/new']], [], []],
    'admin_survey_new_enquete' => [[], ['surveyType' => 0, '_controller' => 'App\\Controller\\Backend\\SurveyController::newAction'], [], [['text', '/admin/survey/enquetes/new']], [], []],
    'admin_survey_new_prerecrutement' => [[], ['surveyType' => 1, '_controller' => 'App\\Controller\\Backend\\SurveyController::newAction'], [], [['text', '/admin/survey/pre_recrutements/new']], [], []],
    'admin_survey_show' => [['id'], ['_controller' => 'App\\Controller\\Backend\\SurveyController::showAction'], [], [['text', '/show'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/survey']], [], []],
    'admin_survey_enquete_edit' => [['id'], ['surveyType' => 0, '_controller' => 'App\\Controller\\Backend\\SurveyController::editAction'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/survey/enquetes']], [], []],
    'admin_survey_pre_recrutements_edit' => [['id'], ['surveyType' => 1, '_controller' => 'App\\Controller\\Backend\\SurveyController::editAction'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/survey/pre_recrutements']], [], []],
    'admin_survey_test_edit' => [['id'], ['surveyType' => 2, '_controller' => 'App\\Controller\\Backend\\SurveyController::editAction'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/survey/test']], [], []],
    'admin_survey_delete' => [['id'], ['_controller' => 'App\\Controller\\Backend\\SurveyController::deleteAction'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/survey']], [], []],
    'admin_user_index' => [[], ['_controller' => 'App\\Controller\\Backend\\UserController::indexAction'], [], [['text', '/admin/user/index']], [], []],
    'admin_user_create' => [[], ['_controller' => 'App\\Controller\\Backend\\UserController::createAction'], [], [['text', '/admin/user/create']], [], []],
    'admin_user_new' => [[], ['_controller' => 'App\\Controller\\Backend\\UserController::newAction'], [], [['text', '/admin/user/new']], [], []],
    'admin_user_show' => [['id'], ['_controller' => 'App\\Controller\\Backend\\UserController::showAction'], [], [['text', '/show'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], []],
    'admin_user_edit' => [['id'], ['_controller' => 'App\\Controller\\Backend\\UserController::editAction'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], []],
    'admin_user_delete' => [['id'], ['_controller' => 'App\\Controller\\Backend\\UserController::deleteAction'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], []],
    'admin_user_import' => [[], ['_controller' => 'App\\Controller\\Backend\\UserController::importAction'], [], [['text', '/admin/user/import']], [], []],
    'user_accueil_index' => [[], ['_controller' => 'App\\Controller\\Frontend\\AccueilController::index'], [], [['text', '/paneliste/']], [], []],
    'user_contact_index' => [[], ['_controller' => 'App\\Controller\\Frontend\\ContactController::index'], [], [['text', '/paneliste/contact/']], [], []],
    'user_fag' => [[], ['_controller' => 'App\\Controller\\Frontend\\FagController::index'], [], [['text', '/paneliste/fag']], [], []],
    'inscription_confirme' => [[], ['_controller' => 'App\\Controller\\Frontend\\InscriptionController::indexAction'], [], [['text', '/inscription/confirme']], [], []],
    'inscription_new' => [[], ['_controller' => 'App\\Controller\\Frontend\\InscriptionController::newAction'], [], [['text', '/inscription']], [], []],
    'user_mention_legale_index' => [[], ['_controller' => 'App\\Controller\\Frontend\\Legal_notice::index'], [], [['text', '/paneliste/mention-legale/']], [], []],
    'user_link_redirect' => [['token'], ['_controller' => 'App\\Controller\\Frontend\\LinkController::redirectAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/paneliste/link']], [], []],
    'pdf' => [['id'], ['_controller' => 'App\\Controller\\Frontend\\PdfController::index'], [], [['text', '/pdf'], ['variable', '/', '[^/]++', 'id', true]], [], []],
    'user_survey_enquete' => [[], ['_controller' => 'App\\Controller\\Frontend\\SurveyController::enqueteAction'], [], [['text', '/paneliste/enquete']], [], []],
    'user_survey_tests' => [[], ['_controller' => 'App\\Controller\\Frontend\\SurveyController::testAction'], [], [['text', '/paneliste/tests']], [], []],
    'user_survey_closed_tests' => [[], ['_controller' => 'App\\Controller\\Frontend\\SurveyController::closedTestAction'], [], [['text', '/paneliste/closed_tests']], [], []],
    'user_survey_details' => [['id'], ['_controller' => 'App\\Controller\\Frontend\\SurveyController::detailsAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/paneliste/details']], [], []],
    'app_admin_login' => [[], ['_controller' => 'App\\Controller\\Security\\SecurityAdminController::login'], [], [['text', '/admin/login']], [], []],
    'app_admin_logout' => [[], ['_controller' => 'App\\Controller\\Security\\SecurityAdminController::logout'], [], [['text', '/admin/logout']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\Security\\SecurityController::login'], [], [['text', '/']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\Security\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'user_test_a_venirs_index' => [[], ['_controller' => 'App\\Controller\\TestAvenir\\TestAVenirController::index'], [], [['text', '/paneliste/test_a_venir']], [], []],
    'liip_imagine_filter_runtime' => [['filter', 'hash', 'path'], ['_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter' => '[A-z0-9_-]*', 'path' => '.+'], [['variable', '/', '.+', 'path', true], ['variable', '/', '[^/]++', 'hash', true], ['text', '/rc'], ['variable', '/', '[A-z0-9_-]*', 'filter', true], ['text', '/media/cache/resolve']], [], []],
    'liip_imagine_filter' => [['filter', 'path'], ['_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter' => '[A-z0-9_-]*', 'path' => '.+'], [['variable', '/', '.+', 'path', true], ['variable', '/', '[A-z0-9_-]*', 'filter', true], ['text', '/media/cache/resolve']], [], []],
];
