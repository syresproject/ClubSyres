<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ky', array (
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Мурунку',
    'label_next' => 'Кийинки',
    'filter_searchword' => 'издөө...',
  ),
));

$catalogueFr = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This value should be false.' => 'Cette valeur doit être fausse.',
    'This value should be true.' => 'Cette valeur doit être vraie.',
    'This value should be of type {{ type }}.' => 'Cette valeur doit être de type {{ type }}.',
    'This value should be blank.' => 'Cette valeur doit être vide.',
    'The value you selected is not a valid choice.' => 'Cette valeur doit être l\'un des choix proposés.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Vous devez sélectionner au moins {{ limit }} choix.|Vous devez sélectionner au moins {{ limit }} choix.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Vous devez sélectionner au maximum {{ limit }} choix.|Vous devez sélectionner au maximum {{ limit }} choix.',
    'One or more of the given values is invalid.' => 'Une ou plusieurs des valeurs soumises sont invalides.',
    'This field was not expected.' => 'Ce champ n\'a pas été prévu.',
    'This field is missing.' => 'Ce champ est manquant.',
    'This value is not a valid date.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid datetime.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid email address.' => 'Cette valeur n\'est pas une adresse email valide.',
    'The file could not be found.' => 'Le fichier n\'a pas été trouvé.',
    'The file is not readable.' => 'Le fichier n\'est pas lisible.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux ({{ size }} {{ suffix }}). Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Le type du fichier est invalide ({{ type }}). Les types autorisés sont {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Cette valeur doit être inférieure ou égale à {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractère.|Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractères.',
    'This value should be {{ limit }} or more.' => 'Cette valeur doit être supérieure ou égale à {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractère.|Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractères.',
    'This value should not be blank.' => 'Cette valeur ne doit pas être vide.',
    'This value should not be null.' => 'Cette valeur ne doit pas être nulle.',
    'This value should be null.' => 'Cette valeur doit être nulle.',
    'This value is not valid.' => 'Cette valeur n\'est pas valide.',
    'This value is not a valid time.' => 'Cette valeur n\'est pas une heure valide.',
    'This value is not a valid URL.' => 'Cette valeur n\'est pas une URL valide.',
    'The two values should be equal.' => 'Les deux valeurs doivent être identiques.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux. Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Le fichier est trop volumineux.',
    'The file could not be uploaded.' => 'Le téléchargement de ce fichier est impossible.',
    'This value should be a valid number.' => 'Cette valeur doit être un nombre.',
    'This file is not a valid image.' => 'Ce fichier n\'est pas une image valide.',
    'This is not a valid IP address.' => 'Cette adresse IP n\'est pas valide.',
    'This value is not a valid language.' => 'Cette langue n\'est pas valide.',
    'This value is not a valid locale.' => 'Ce paramètre régional n\'est pas valide.',
    'This value is not a valid country.' => 'Ce pays n\'est pas valide.',
    'This value is already used.' => 'Cette valeur est déjà utilisée.',
    'The size of the image could not be detected.' => 'La taille de l\'image n\'a pas pu être détectée.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La largeur de l\'image est trop grande ({{ width }}px). La largeur maximale autorisée est de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La largeur de l\'image est trop petite ({{ width }}px). La largeur minimale attendue est de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La hauteur de l\'image est trop grande ({{ height }}px). La hauteur maximale autorisée est de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La hauteur de l\'image est trop petite ({{ height }}px). La hauteur minimale attendue est de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Cette valeur doit être le mot de passe actuel de l\'utilisateur.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Cette chaîne doit avoir exactement {{ limit }} caractère.|Cette chaîne doit avoir exactement {{ limit }} caractères.',
    'The file was only partially uploaded.' => 'Le fichier a été partiellement transféré.',
    'No file was uploaded.' => 'Aucun fichier n\'a été transféré.',
    'No temporary folder was configured in php.ini.' => 'Aucun répertoire temporaire n\'a été configuré dans le php.ini.',
    'Cannot write temporary file to disk.' => 'Impossible d\'écrire le fichier temporaire sur le disque.',
    'A PHP extension caused the upload to fail.' => 'Une extension PHP a empêché le transfert du fichier.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Cette collection doit contenir {{ limit }} élément ou plus.|Cette collection doit contenir {{ limit }} éléments ou plus.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Cette collection doit contenir {{ limit }} élément ou moins.|Cette collection doit contenir {{ limit }} éléments ou moins.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Cette collection doit contenir exactement {{ limit }} élément.|Cette collection doit contenir exactement {{ limit }} éléments.',
    'Invalid card number.' => 'Numéro de carte invalide.',
    'Unsupported card type or invalid card number.' => 'Type de carte non supporté ou numéro invalide.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Le numéro IBAN (International Bank Account Number) saisi n\'est pas valide.',
    'This value is not a valid ISBN-10.' => 'Cette valeur n\'est pas un code ISBN-10 valide.',
    'This value is not a valid ISBN-13.' => 'Cette valeur n\'est pas un code ISBN-13 valide.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Cette valeur n\'est ni un code ISBN-10, ni un code ISBN-13 valide.',
    'This value is not a valid ISSN.' => 'Cette valeur n\'est pas un code ISSN valide.',
    'This value is not a valid currency.' => 'Cette valeur n\'est pas une devise valide.',
    'This value should be equal to {{ compared_value }}.' => 'Cette valeur doit être égale à {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Cette valeur doit être supérieure à {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Cette valeur doit être supérieure ou égale à {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur doit être identique à {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Cette valeur doit être inférieure à {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Cette valeur doit être inférieure ou égale à {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Cette valeur ne doit pas être égale à {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur ne doit pas être identique à {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop grand ({{ ratio }}). Le rapport maximal autorisé est {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop petit ({{ ratio }}). Le rapport minimal attendu est {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'L\'image est carrée ({{ width }}x{{ height }}px). Les images carrées ne sont pas autorisées.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'L\'image est au format paysage ({{ width }}x{{ height }}px). Les images au format paysage ne sont pas autorisées.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'L\'image est au format portrait ({{ width }}x{{ height }}px). Les images au format portrait ne sont pas autorisées.',
    'An empty file is not allowed.' => 'Un fichier vide n\'est pas autorisé.',
    'The host could not be resolved.' => 'Le nom de domaine n\'a pas pu être résolu.',
    'This value does not match the expected {{ charset }} charset.' => 'Cette valeur ne correspond pas au jeu de caractères {{ charset }} attendu.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ce n\'est pas un code universel d\'identification des banques (BIC) valide.',
    'Error' => 'Erreur',
    'This is not a valid UUID.' => 'Ceci n\'est pas un UUID valide.',
    'This value should be a multiple of {{ compared_value }}.' => 'Cette valeur doit être un multiple de {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Ce code d\'identification d\'entreprise (BIC) n\'est pas associé à l\'IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Cette valeur doit être un JSON valide.',
    'This collection should contain only unique elements.' => 'Cette collection ne doit pas comporter de doublons.',
    'This value should be positive.' => 'Cette valeur doit être strictement positive.',
    'This value should be either positive or zero.' => 'Cette valeur doit être supérieure ou égale à zéro.',
    'This value should be negative.' => 'Cette valeur doit être strictement négative.',
    'This value should be either negative or zero.' => 'Cette valeur doit être inférieure ou égale à zéro.',
    'This value is not a valid timezone.' => 'Cette valeur n\'est pas un fuseau horaire valide.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Ce mot de passe a été divulgué lors d\'une fuite de données, il ne doit plus être utilisé. Veuillez utiliser un autre mot de passe.',
    'This value should be between {{ min }} and {{ max }}.' => 'Cette valeur doit être comprise entre {{ min }} et {{ max }}.',
    'This value is not a valid hostname.' => 'Cette valeur n\'est pas un nom d\'hôte valide.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Le nombre d\'éléments de cette collection doit être un multiple de {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Cette valeur doit satisfaire à au moins une des contraintes suivantes :',
    'Each element of this collection should satisfy its own set of constraints.' => 'Chaque élément de cette collection doit satisfaire à son propre jeu de contraintes.',
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir des champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
    'This value is not a valid HTML5 color.' => 'Cette valeur n\'est pas une couleur HTML5 valide.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Une exception d\'authentification s\'est produite.',
    'Authentication credentials could not be found.' => 'Les identifiants d\'authentification n\'ont pas pu être trouvés.',
    'Authentication request could not be processed due to a system problem.' => 'La requête d\'authentification n\'a pas pu être executée à cause d\'un problème système.',
    'Invalid credentials.' => 'Identifiants invalides.',
    'Cookie has already been used by someone else.' => 'Le cookie a déjà été utilisé par quelqu\'un d\'autre.',
    'Not privileged to request the resource.' => 'Privilèges insuffisants pour accéder à la ressource.',
    'Invalid CSRF token.' => 'Jeton CSRF invalide.',
    'No authentication provider found to support the authentication token.' => 'Aucun fournisseur d\'authentification n\'a été trouvé pour supporter le jeton d\'authentification.',
    'No session available, it either timed out or cookies are not enabled.' => 'Aucune session disponible, celle-ci a expiré ou les cookies ne sont pas activés.',
    'No token could be found.' => 'Aucun jeton n\'a pu être trouvé.',
    'Username could not be found.' => 'Le nom d\'utilisateur n\'a pas pu être trouvé.',
    'Account has expired.' => 'Le compte a expiré.',
    'Credentials have expired.' => 'Les identifiants ont expiré.',
    'Account is disabled.' => 'Le compte est désactivé.',
    'Account is locked.' => 'Le compte est bloqué.',
    'id' => 'Merci d’indiquer votre identifiant SYRES',
    'dob' => 'Merci d’indiquer votre date de naissance',
    'login' => 'Se connecter',
    'forgotten' => 'ID Panéliste oublié ?',
    'send' => 'Envoyer',
    'back' => 'Retour',
    'dd' => 'JJ',
    'mm' => 'MM',
    'yyyy' => 'AAAA',
  ),
  'messages' => 
  array (
    'vich_uploader.form_label.delete_confirm' => 'Supprimer?',
    'vich_uploader.link.download' => 'Télécharger',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Précédent',
    'label_next' => 'Suivant',
    'filter_searchword' => 'Recherche...',
  ),
  'bo_article' => 
  array (
    'list' => 'Liste des articles du club Syres',
    'see_pending_articles' => 'Voir les articles en attente',
    'place' => 'Lieu',
    'brand' => 'Marque',
    'retailer' => 'Enseigne',
    'title' => 'Titre',
    'name' => 'Nom',
    'firstname' => 'Prénom',
    'habits_headers' => 'Entêtes d\'habitudes',
    'labels_habits' => 'Libellés d\'habitudes',
    'product' => 'Produit',
    'product_name' => 'Nom du produit',
    'rating' => 'Note',
    'search' => 'Rechercher',
    'show' => 'Afficher',
    'items' => 'Éléments',
    'add' => 'Ajouter',
    'show_lowercase' => 'afficher',
    'edit' => 'éditer',
  ),
  'bo_brands' => 
  array (
    'brands' => 'Marques',
    'list' => 'liste des marques',
    'habit_header' => 'Entête d\'habitude',
    'category' => 'Catégorie',
    'add' => 'Ajouter',
    'search' => 'Rechercher',
    'show' => 'Afficher',
    'items' => 'Éléments',
    'name' => 'Nom',
    'show_lowercase' => 'afficher',
    'edit' => 'éditer',
  ),
  'bo_category' => 
  array (
    'add' => 'Ajouter',
    'search' => 'Rechercher',
    'show' => 'Afficher',
    'items' => 'Éléments',
    'name' => 'Nom',
    'show_lowercase' => 'afficher',
    'edit' => 'éditer',
    'sub_categories_number' => 'Nombre de sous-catégorie',
  ),
  'bo_formlabel' => 
  array (
    'internal_id' => 'ID Interne',
    'name' => 'Nom',
    'category' => 'Catégorie',
    'access_group' => 'Groupe d\'accès',
    'yes' => 'Oui',
    'no' => 'Non',
    'upcoming' => 'À venir',
    'on_going' => 'En cours',
    'closed' => 'Cloturé',
    'survey' => 'Enquête',
    'preselection' => 'Pré-recrutement',
    'email' => 'Adresse email',
    'birthdate' => 'Date de naissance',
    'enabled' => 'Activé',
    'title' => 'Titre',
    'firstname' => 'Prénom',
    'groups' => 'Groupes',
    'mr' => 'Monsieur',
    'mrs' => 'Madame',
    'ms' => 'Mademoiselle',
  ),
  'bo_headerhabits' => 
  array (
    'list' => 'liste des entêtes d\'habitudes',
    'habits_headers' => 'Entêtes d\'habitudes',
    'category' => 'Catégorie',
    'add' => 'Ajouter',
    'search' => 'Rechercher',
    'show' => 'Afficher',
    'items' => 'Éléments',
    'name' => 'Nom',
    'show_lowercase' => 'afficher',
    'edit' => 'éditer',
    'number_sub_category_detail' => 'Nombre de détails de sous-catégorie',
  ),
  'bo_home' => 
  array (
    'dashboard' => 'Tableau de bord',
    'admin' => 'espace administrateur',
    'visible_article' => 'Articles visibles',
    'non_visible_article' => 'Articles non visibles',
    'total_article' => 'Nombre total d\'articles',
    'total_number_article' => 'Nombre d\'articles au total',
    'categories_dashboard' => 'Tableau de bord pour les catégories',
    'sub_categories_dashboard' => 'Tableau de bord pour les sous-catégories',
    'brands_dashboard' => 'Tableau de bord pour les marques',
    'visible_number_article' => 'Nombre d\'articles visibles',
    'non_visible_number_article' => 'Nombre d\'articles non visibles',
    'category_name' => 'Nom de la catégorie',
    'number_article' => 'Nombre d\'articles',
    'sub_category_name' => 'Nom de la sous-catégorie',
    'brand_name' => 'Nom de la marque',
  ),
  'bo_labelshabits' => 
  array (
    'labels_habits' => 'Libellés d\'habitudes',
    'list' => 'liste des libellés d\'habitudes',
    'habit_header' => 'Entête d\'habitude',
    'category' => 'Catégorie',
    'add' => 'Ajouter',
    'search' => 'Rechercher',
    'show' => 'Afficher',
    'items' => 'Éléments',
    'name' => 'Nom',
    'show_lowercase' => 'afficher',
    'edit' => 'éditer',
    'number_sub_category_detail' => 'Nombre de détails de sous-catégorie',
  ),
  'bo_panelistegroup' => 
  array (
    'groups' => 'Groups',
    'list' => 'liste des groupes de panélistes',
    'add' => 'Ajouter',
    'search' => 'Rechercher',
    'show' => 'Afficher',
    'items' => 'Éléments',
    'name' => 'Nom',
    'show_lowercase' => 'afficher',
    'edit' => 'éditer',
    'combine' => 'Afficher',
    'panelist_number' => 'Nombre de panélistes',
  ),
  'bo_receivedmessages' => 
  array (
    'received_messages' => 'Messages reçus',
    'from_contact_form' => 'depuis le formulaire de contact',
    'search' => 'Rechercher',
    'items' => 'Éléments',
    'show_lowercase' => 'afficher',
    'show' => 'Afficher',
    'sending_date' => 'Envoyé le',
    'email' => 'Email',
    'object' => 'Objet',
  ),
  'bo_sidebar' => 
  array (
    'content' => 'Contenu',
    'dashboard' => 'Tableau de bord',
    'survey' => 'Enquêtes',
    'category' => 'Categorie',
    'pre_selection' => 'Pré-recrutements',
    'sub_category' => 'Sous-catégories',
    'sub_category_detail' => 'Détails de sous-catégorie',
    'brand' => 'Marques',
    'advanced_search' => 'Recherche avancée',
    'users' => 'Utilisateurs',
    'groups' => 'Groupes',
    'received_messages' => 'Messages reçus',
    'general' => 'Générale',
    'legal_notice' => 'Mentions légales',
    'export' => 'Exporter',
  ),
  'bo_survey' => 
  array (
    'category' => 'Catégories',
    'list_survey' => 'liste des enquêtes',
    'list_preselection' => 'liste des pré-recrutements',
    'list_tests' => 'liste des tests',
    'add' => 'Ajouter',
    'search' => 'Rechercher',
    'show' => 'Afficher',
    'items' => 'Éléments',
    'name' => 'Nom',
    'show_lowercase' => 'afficher',
    'edit' => 'éditer',
    'preselection' => 'Pré-recrutements',
    'tests' => 'Tests',
    'test' => 'Test',
    'survey' => 'Questionnaires',
    'type' => 'Type',
    'status' => 'Statut',
    'actions' => 'Actions',
  ),
  'bo_surveycategory' => 
  array (
    'category' => 'Catégories',
    'list' => 'liste des catégories',
    'add' => 'Ajouter',
    'search' => 'Rechercher',
    'show' => 'Afficher',
    'items' => 'Éléments',
    'name' => 'Nom',
    'show_lowercase' => 'afficher',
    'edit' => 'éditer',
  ),
  'bo_user' => 
  array (
    'name' => 'Nom',
    'add' => 'Ajouter',
    'search' => 'Rechercher',
    'show' => 'Afficher',
    'items' => 'Éléments',
    'show_lowercase' => 'afficher',
    'edit' => 'éditer',
    'firstname' => 'Prénom',
    'email' => 'Email',
    'birthdate' => 'Né le',
    'import' => 'Importer',
    'title' => 'Titre',
    'state' => 'État',
  ),
  'categorylist' => 
  array (
    'title' => 'Titre',
  ),
  'clubsyres' => 
  array (
    'title' => 'Club Syres',
    'text0' => 'Grâce au',
    'text1' => 'CLUB SYRES',
    'text2' => ', vous pourrez écrire des articles concernant vos achats/services/expériences (satisfaction ou mécontentement) et nous faire part de vos commentaires dans tous les domaines y compris vos
',
    'text3' => 'expériences à l\'étranger.',
    'text4' => 'Vous pourrez aussi lire les articles des autres panélistes et partager vos expériences identiques.
',
    'text5' => 'Vous gagnerez des points en écrivant vos histoires.
',
    'liste' => 'Liste des sujets',
    'zero' => 'Aucune expérience publiée',
    'one' => '1 expérience publiée',
    'many' => 'expériences publiées',
    'poste' => 'Je poste mon expérience',
    'back' => 'Retour',
    'experience' => 'Expériences utilisateurs',
    'sort_by_brand' => 'Triez par marque',
    'sort' => 'Trier',
    'me' => 'Je suis :',
    'date' => 'Et c’était le :',
    'where' => 'À :',
    'product' => 'Le sujet de l\'article :',
    'what' => 'Et c’était :',
    'note' => 'Je mets la note de :',
    'nothing' => 'Il n\'y a pas encore d\'expérience publié',
    'brandHeader' => 'Liste des marques',
    'post' => 'Poster',
    'noo' => 'Très insatisfait',
    'no' => 'Insatisfait',
    'ok' => 'Ni satisfait ni insatisfait',
    'yes' => 'Satisfait',
    'yess' => 'Très Satisfait',
    'not_empty_message' => 'Les champs suivants doivent être remplis',
    'confirmation' => 'Votre expérience a bien été postée, elle sera visible après notre validation',
    'form1' => 'L’expérience dont je vais vous parler était le...',
    'form2' => 'Lieu',
    'form3' => 'Enseigne du magasin, centre commercial',
    'form4' => 'Catégorie',
    'form5' => 'Mon expérience concerne :',
    'form6' => 'Je résumerais cette expérience en 2 mots :',
    'form7' => 'Je veux parler de cette expérience conso car......',
    'form8' => 'Voici la note que je donne à cette expérience :',
    'form9' => 'Nom du produit',
    'form10' => 'Marque du produit',
    'brand' => 'Marque',
    'categoryHabit' => 'Catégorie principale',
    'headerHabit' => 'Catégorie produits',
    'habit' => 'Produit',
    'searchinternet' => 'Recherche Internet',
    'plane' => 'Avion',
    'ph2' => 'Département, Ville et/ou Code postale...',
    'ph3' => 'Enseigne du magasin, centre commercial',
    'ph5' => 'Un mascara / un aspirateur...',
    'ph6' => 'Les fauteuils de cette enseigne ne sont plus ce qu’ils étaient / Je recommande cet endroit pour leurs mascaras de bonne qualité...',
    'ph7' => 'Je ne m’attendais pas à la qualité de ce produit / il est plus cher ailleurs / je suis déçue des conseils en magasins...',
    'ph8' => 'Nom du produit',
    'ph9' => 'Marque du produit',
  ),
  'clubsyrestype' => 
  array (
    'satisfaction' => 'Satisfaction',
    'dissatisfaction' => 'Mécontentement',
    'satisfaction_suggestion' => 'Satisfaction avec suggestion',
    'purchase' => 'Achat',
    'advice' => 'Conseil',
    'purchase_advice' => 'Conseil & Achat',
    'service' => 'Service',
    'web_surfing' => 'Surf Web',
    'other' => 'Autre',
  ),
  'contact' => 
  array (
    'title' => 'Nous contacter',
    'send' => 'Envoyer',
    'form1' => 'Nom',
    'form2' => 'Prénom',
    'form3' => 'Votre adresse email',
    'form4' => 'ID Panéliste',
    'form5' => 'Objet',
    'form6' => 'Message',
    'ph5' => 'Objet',
    'ph6' => 'Contenu du message',
  ),
  'editarticle' => 
  array (
    'satisfaction' => 'Satisfaction',
    'satisfactionDetails' => 'Satisfaction détails',
    'date' => 'Date',
    'websearch' => 'Recherche internet',
    'plane' => 'Avion',
    'location' => 'Location',
    'brand' => 'Marque',
    'locationBrand' => 'Enseigne',
    'productName' => 'Nom du produit',
    'productBrand' => 'Marque du produit',
    'clubSubject' => 'Club sujet',
    'product' => 'Produit',
    'comment' => 'Commentaire',
    'note' => 'Note',
    'visible' => 'Visible',
    'categoryHabit' => 'Catégorie principale',
    'headerHabit' => 'Entête d\'habitude',
    'habit' => 'Habitude',
    'testDateStart' => 'Date de début',
    'testDateEnd' => 'Date de fin',
    'waitingStatus' => 'En attente',
    'title' => 'Titre',
    'lastname' => 'Nom',
    'firstname' => 'Prénom',
  ),
  'focusgroup' => 
  array (
    'answer' => 'Répondre',
    'reply_to' => 'Répondre à',
    'reply_to_syres' => 'Répondre à Syres',
    'my_message' => 'Mon message',
    'required' => 'requis',
    'send' => 'Envoyer',
    'back' => 'Retour',
    'comment' => 'Laisser un commentaire',
    'comments' => 'Commentaires',
    'discuss_with_other_panelists' => 'Parlez avec les autres panélistes de ce test',
    'access_focus_group' => 'Accéder au focus group',
    'cannot_access_focus_test' => 'Vous n\'avez pas accès à ce focus test',
    'not_yet_accessible_focus_group' => 'Le focus group n\'est pas encore accessible',
  ),
  'footer' => 
  array (
    'phrase' => 'Devenez acteurs de nos tests',
    'rights' => 'Tous droits réservés',
  ),
  'gamification' => 
  array (
    'title' => 'Mes points',
    'rank' => 'Mon classement',
    'text1' => 'Vous gagnez des points en écrivant des articles, en participant à des enquêtes et des tests.
',
    'text2' => 'Cela vous permet de concourir à des tirages au sort toute l’année.
',
    'have' => 'J\'ai',
    'next_rank' => 'Prochain rang :',
    'ranking' => 'Rang',
    'complete' => 'J\'ai répondu à',
    'survey' => 'enquête',
    'preselections' => 'de pré-sélections',
    'post' => 'J\'ai posté',
    'experience' => 'expérience',
    'beginner' => 'Débutant',
    'gold' => 'Or',
    'silver' => 'Argent',
  ),
  'home' => 
  array (
    'dashboard' => 'Accueil',
    'surveys' => 'Enquêtes',
    'preselections' => 'Pré-sélections',
    'tests' => 'Tests',
    'points' => 'Mes points',
    'clubsyres' => 'Club Syres',
    'article' => 'Écrire un article',
    'top' => 'Haut de page',
  ),
  'maintenance' => 
  array (
    'maintenance' => 'Site en maintenance',
  ),
  'sidebar' => 
  array (
    'dashboard' => 'Accueil',
    'space' => 'Espace panéliste',
    'surveys' => 'Mes enquêtes',
    'preselections' => 'Mes pré-sélections',
    'tests' => 'Mes tests',
    'clubsyres' => 'Club Syres',
    'articles' => 'Tous les articles',
    'write' => 'Ecrire un article',
    'points' => 'Mes points',
    'contact' => 'Nous contacter',
    'notices' => 'Mentions légales',
    'logoff' => 'Se déconnecter',
    'close' => 'Fermer le menu',
    'rights' => 'Tous droits réservés',
  ),
  'survey' => 
  array (
    'survey_inprogress' => 'Mes enquêtes en cours',
    'coming' => 'À venir',
    'inprogress' => 'En cours',
    'focus' => 'Focus test',
    'closed' => 'Cloturé',
    'nothing' => 'Aucune enquête en cours',
    'preselections' => 'Pré-sélections',
    'test' => 'Test',
    'survey' => 'Questionnaire',
    'preselections_inprogress' => 'Mes pré-sélections en cours',
    'no_preselections' => 'Aucune pré-sélections en cours',
    'tests_inprogress' => 'Mon test en cours',
    'tests_closed' => 'Mes tests cloturés',
    'no_test' => 'Aucun test en cours',
    'no_closed_test' => 'Aucun test cloturé',
    'confirmation' => 'Vous avez déjà accédé à ce questionnaire, êtes-vous certain de vouloir y réaccéder ?',
  ),
));
$catalogue->addFallbackCatalogue($catalogueFr);

return $catalogue;
