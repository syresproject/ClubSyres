# Refonte Du club syres fr de v2.8 vers la v5
### Changement ou la mise en place de l'environnement sur la nouvelle version
#### Symfony 5.0.11 (env: dev, debug: true)

## L'authentification avec Gouard, pour le Backend et le Frontend
```
symfony console make:user
symfony console  make:auth 
```
## Back-office 
### Groups
```
#### Creation, affichage et importation du Groups
```
### Panelistes
```
#### Creation, affichage et importation du Paneliste
```

### Tests
```
src/Controller/Backend/SurveyController

### Creation, modification des Tests
#### Creation, modification des Questionnaires
```

### Enquêtes
```
src/Controller/Backend/SurveyController

### Creation, modification des Enquêtes
#### Creation, modification des Questionnaires
```
### Newsletters
```
src/Controller/Backend/NewsletterController
### Creation, modification des newsletters mais, seule le lien de modification est afficher sur le front pour mettre à jour les données(les texts et le images du newsletters)

composer require vich/uploader-bundle
```

## Mention legals 
### Ajout et modification du Mention legal
```#### Integration de ckEditor

composer require friendsofsymfony/ckeditor-bundle
```




-------------------------------
# Ajout d'API Club Syres
-------------------------------


## Security.yaml
```
## Mise en place JWT : authentification avec API
### La config et la mise en place

composer require "lexik/jwt-authentication-bundle"

### retour sur le depot git pour l'ensemble de config
```

## Le retrun sous format json par l'API
```
### Recuperation des Tests
### Recuperation des Enquêtes
```

## Les Test avenir : il aura une redirection vers le Club de l'interface Mobile


---------------------
---------------------
---------------------


## Backend du front
#### Tests, Enquêtes et le details
``` 
src/Frontend/SurveyController

#### Recuperation de tests "incluant les questionnaires (Links)"
#### Recuperation de enquêtes
#### Recuperation de details du test ou enquête 
```


