# Laravel BDE

Site web du BDA de Polytech Tours

## Résumé du site :
Site du BDA de Polytech Tours regroupant les différentes teams.
Chaque Team créée possède un espace propre, contenant une présentation, des news et des événements.
Ces news et événements en questions peuvent concerner l'ensemble du BDA, ou bien une seule ou plusieurs Teams. 

Un compte superadmin est créé pour les dirigeants du BDA. Les dirigeants des teams (team admin) doivent demander à s'inscrire en remplissant un formulaire, que les superadmins acceptent/refusent.

les team admins peuvent créer une nouvelle team (qui sera validée/invalidée par un superadmin), ou gérer la/les team(s) qu'ils dirigent.

###Hiérarchie : 

####1. Team_admin : Administrateur d'une ou plusieurs teams.
  * Demander à créer une team.
  * Gérer sa/ses team(s) : Poster/modifier/supprimer news/événements, modifier la présentation.
  
####2. BDA_officers : Membres du bureau restreint du BDA qui ne sont pas superadmins.
  * _\*Team_admin_
  * Accepter/refuser la création d'une team.
  * Créer/modifier/supprimer des news/events globaux.
  * Accepter/refuser les demandes d'inscription

####3. BDA_headmaster : Dirigeants du BDA (superadmins).
  * _\*BDA_officers_
  * Supprimer/modifier des teams.
  
####4. Webmaster : créateur(s) du site.
  * _\*_
  
## Fonctionnalités :

- [ ] Bannière
- [x] Layout
- [x] Home
- [x] Edit Banner
- [x] Edit Content
- [x] Connexion
- [x] Première connexion
- [ ] Création de team
- [ ] Création d'un compte par un admin
- [x] Teams
- [x] Team presentation
- [x] Team news
- [x] Team events
- [x] BDA news
- [x] BDA events
- [ ] Rechercher une team

## Auteurs

- Robin Maréchal
