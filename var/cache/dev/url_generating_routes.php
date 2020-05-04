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
    'accueil_liste' => [[], ['_controller' => 'App\\Controller\\AccueilController::liste'], [], [['text', '/liste']], [], []],
    'inter_liste' => [[], ['_controller' => 'App\\Controller\\AccueilController::inter'], [], [['text', '/inter']], [], []],
    'selection_liste' => [[], ['_controller' => 'App\\Controller\\AccueilController::selection'], [], [['text', '/selection']], [], []],
    'selectionproduit_liste' => [[], ['_controller' => 'App\\Controller\\AccueilController::selectionproduit'], [], [['text', '/selectionproduit']], [], []],
    'critere_surveille_index' => [[], ['_controller' => 'App\\Controller\\CritereSurveilleController::index'], [], [['text', '/critere/surveille/']], [], []],
    'critere_surveille_new' => [[], ['_controller' => 'App\\Controller\\CritereSurveilleController::new'], [], [['text', '/critere/surveille/new']], [], []],
    'critere_surveille_show' => [['id'], ['_controller' => 'App\\Controller\\CritereSurveilleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/critere/surveille']], [], []],
    'critere_surveille_edit' => [['id'], ['_controller' => 'App\\Controller\\CritereSurveilleController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/critere/surveille']], [], []],
    'critere_surveille_delete' => [['id'], ['_controller' => 'App\\Controller\\CritereSurveilleController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/critere/surveille']], [], []],
    'entreprise_index' => [[], ['_controller' => 'App\\Controller\\EntrepriseController::index'], [], [['text', '/entreprise/']], [], []],
    'entreprise_new' => [[], ['_controller' => 'App\\Controller\\EntrepriseController::new'], [], [['text', '/entreprise/new']], [], []],
    'entreprise_show' => [['id'], ['_controller' => 'App\\Controller\\EntrepriseController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/entreprise']], [], []],
    'entreprise_edit' => [['id'], ['_controller' => 'App\\Controller\\EntrepriseController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/entreprise']], [], []],
    'entreprise_delete' => [['id'], ['_controller' => 'App\\Controller\\EntrepriseController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/entreprise']], [], []],
    'equipe_index' => [[], ['_controller' => 'App\\Controller\\EquipeController::index'], [], [['text', '/equipe/']], [], []],
    'equipe_new' => [[], ['_controller' => 'App\\Controller\\EquipeController::new'], [], [['text', '/equipe/new']], [], []],
    'equipe_show' => [['id'], ['_controller' => 'App\\Controller\\EquipeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/equipe']], [], []],
    'equipe_edit' => [['id'], ['_controller' => 'App\\Controller\\EquipeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/equipe']], [], []],
    'equipe_delete' => [['id'], ['_controller' => 'App\\Controller\\EquipeController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/equipe']], [], []],
    'etape_index' => [[], ['_controller' => 'App\\Controller\\EtapeController::index'], [], [['text', '/etape/']], [], []],
    'etape_new' => [[], ['_controller' => 'App\\Controller\\EtapeController::new'], [], [['text', '/etape/new']], [], []],
    'etape_show' => [['id'], ['_controller' => 'App\\Controller\\EtapeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/etape']], [], []],
    'etape_edit' => [['id'], ['_controller' => 'App\\Controller\\EtapeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/etape']], [], []],
    'etape_delete' => [['id'], ['_controller' => 'App\\Controller\\EtapeController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/etape']], [], []],
    'identificationccp_danger_index' => [[], ['_controller' => 'App\\Controller\\IdentificationccpDangerController::index'], [], [['text', '/identificationccp/danger/']], [], []],
    'identificationccp_danger_new' => [[], ['_controller' => 'App\\Controller\\IdentificationccpDangerController::new'], [], [['text', '/identificationccp/danger/new']], [], []],
    'identificationccp_danger_show' => [['id'], ['_controller' => 'App\\Controller\\IdentificationccpDangerController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/identificationccp/danger']], [], []],
    'identificationccp_danger_edit' => [['id'], ['_controller' => 'App\\Controller\\IdentificationccpDangerController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/identificationccp/danger']], [], []],
    'identificationccp_danger_delete' => [['id'], ['_controller' => 'App\\Controller\\IdentificationccpDangerController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/identificationccp/danger']], [], []],
    'matiere_premiere_index' => [[], ['_controller' => 'App\\Controller\\MatierePremiereController::index'], [], [['text', '/matiere/premiere/']], [], []],
    'matiere_premiere_new' => [[], ['_controller' => 'App\\Controller\\MatierePremiereController::new'], [], [['text', '/matiere/premiere/new']], [], []],
    'matiere_premiere_show' => [['id'], ['_controller' => 'App\\Controller\\MatierePremiereController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/matiere/premiere']], [], []],
    'matiere_premiere_edit' => [['id'], ['_controller' => 'App\\Controller\\MatierePremiereController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/matiere/premiere']], [], []],
    'matiere_premiere_delete' => [['id'], ['_controller' => 'App\\Controller\\MatierePremiereController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/matiere/premiere']], [], []],
    'matiere_utiliser_index' => [[], ['_controller' => 'App\\Controller\\MatiereUtiliserController::index'], [], [['text', '/matiere/utiliser/']], [], []],
    'matiere_utiliser_new' => [[], ['_controller' => 'App\\Controller\\MatiereUtiliserController::new'], [], [['text', '/matiere/utiliser/new']], [], []],
    'matiere_utiliser_show' => [['id'], ['_controller' => 'App\\Controller\\MatiereUtiliserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/matiere/utiliser']], [], []],
    'matiere_utiliser_edit' => [['id'], ['_controller' => 'App\\Controller\\MatiereUtiliserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/matiere/utiliser']], [], []],
    'matiere_utiliser_delete' => [['id'], ['_controller' => 'App\\Controller\\MatiereUtiliserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/matiere/utiliser']], [], []],
    'personnel_index' => [[], ['_controller' => 'App\\Controller\\PersonnelController::index'], [], [['text', '/personnel/']], [], []],
    'personnel_new' => [[], ['_controller' => 'App\\Controller\\PersonnelController::new'], [], [['text', '/personnel/new']], [], []],
    'personnel_show' => [['id'], ['_controller' => 'App\\Controller\\PersonnelController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/personnel']], [], []],
    'personnel_edit' => [['id'], ['_controller' => 'App\\Controller\\PersonnelController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/personnel']], [], []],
    'personnel_delete' => [['id'], ['_controller' => 'App\\Controller\\PersonnelController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/personnel']], [], []],
    'poste_index' => [[], ['_controller' => 'App\\Controller\\PosteController::index'], [], [['text', '/poste/']], [], []],
    'poste_new' => [[], ['_controller' => 'App\\Controller\\PosteController::new'], [], [['text', '/poste/new']], [], []],
    'poste_show' => [['id'], ['_controller' => 'App\\Controller\\PosteController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/poste']], [], []],
    'poste_edit' => [['id'], ['_controller' => 'App\\Controller\\PosteController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/poste']], [], []],
    'poste_delete' => [['id'], ['_controller' => 'App\\Controller\\PosteController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/poste']], [], []],
    'produir_index' => [[], ['_controller' => 'App\\Controller\\ProduirController::index'], [], [['text', '/produir/']], [], []],
    'produir_new' => [[], ['_controller' => 'App\\Controller\\ProduirController::new'], [], [['text', '/produir/new']], [], []],
    'produir_show' => [['id'], ['_controller' => 'App\\Controller\\ProduirController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/produir']], [], []],
    'produir_edit' => [['id'], ['_controller' => 'App\\Controller\\ProduirController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/produir']], [], []],
    'produir_delete' => [['id'], ['_controller' => 'App\\Controller\\ProduirController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/produir']], [], []],
    'produit_index' => [[], ['_controller' => 'App\\Controller\\ProduitController::index'], [], [['text', '/produit/']], [], []],
    'produit_new' => [[], ['_controller' => 'App\\Controller\\ProduitController::new'], [], [['text', '/produit/new']], [], []],
    'produit_show' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/produit']], [], []],
    'produit_edit' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/produit']], [], []],
    'produit_delete' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/produit']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'systeme_surveillance_index' => [[], ['_controller' => 'App\\Controller\\SystemeSurveillanceController::index'], [], [['text', '/systeme/surveillance/']], [], []],
    'systeme_surveillance_new' => [[], ['_controller' => 'App\\Controller\\SystemeSurveillanceController::new'], [], [['text', '/systeme/surveillance/new']], [], []],
    'systeme_surveillance_show' => [['id'], ['_controller' => 'App\\Controller\\SystemeSurveillanceController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/systeme/surveillance']], [], []],
    'systeme_surveillance_edit' => [['id'], ['_controller' => 'App\\Controller\\SystemeSurveillanceController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/systeme/surveillance']], [], []],
    'systeme_surveillance_delete' => [['id'], ['_controller' => 'App\\Controller\\SystemeSurveillanceController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/systeme/surveillance']], [], []],
    'travailler_personnel_index' => [[], ['_controller' => 'App\\Controller\\TravaillerPersonnelController::index'], [], [['text', '/travailler/personnel/']], [], []],
    'travailler_personnel_new' => [[], ['_controller' => 'App\\Controller\\TravaillerPersonnelController::new'], [], [['text', '/travailler/personnel/new']], [], []],
    'travailler_personnel_show' => [['id'], ['_controller' => 'App\\Controller\\TravaillerPersonnelController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/travailler/personnel']], [], []],
    'travailler_personnel_edit' => [['id'], ['_controller' => 'App\\Controller\\TravaillerPersonnelController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/travailler/personnel']], [], []],
    'travailler_personnel_delete' => [['id'], ['_controller' => 'App\\Controller\\TravaillerPersonnelController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/travailler/personnel']], [], []],
    'type_probleme_index' => [[], ['_controller' => 'App\\Controller\\TypeProblemeController::index'], [], [['text', '/type/probleme/']], [], []],
    'type_probleme_new' => [[], ['_controller' => 'App\\Controller\\TypeProblemeController::new'], [], [['text', '/type/probleme/new']], [], []],
    'type_probleme_show' => [['id'], ['_controller' => 'App\\Controller\\TypeProblemeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/type/probleme']], [], []],
    'type_probleme_edit' => [['id'], ['_controller' => 'App\\Controller\\TypeProblemeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/type/probleme']], [], []],
    'type_probleme_delete' => [['id'], ['_controller' => 'App\\Controller\\TypeProblemeController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/type/probleme']], [], []],
];
