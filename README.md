Maisonneuve 2196008 
===================
Ce site a pour but de recueillir de l’information auprès des étudiants/es. La plateforme est un réseau social qui permet de rassembler les étudiants/es et leur offrir des ressources. 

Dans un futur, ils pourront possiblement réagir, commenter et partager les publications. De plus, une fonctionnalité pourrait éventuellement permettre la discussion par messagerie privée, que ce soit en duos, ou en groupes. 

Fonctionnalités 
---------------
##### Général 
Premièrement, le site sera accessible pour tous les étudiants/es. Il pourra donc être consulté autant en français qu'en anglais. 

De plus, une page de bienvenue contenant un formulaire d'inscription ainsi qu'un formulaire de connexion accueillera les visiteurs. 

##### Utilisateur 
Une fois inscrit et connecté, l'étudiant aura accès à plusieurs sections du site. 

À partir du portail de l'utilisateur (dashboard), la possibilité de mettre à jour les informations de l’étudiant/e est disponible. De plus, la possibilité de fermer le compte (suppression) d’un élève est évidemment disponible également. 

##### Étudiants 
Le site permettra d’afficher la liste de tous les élèves ainsi que d’afficher une page détails d’un élève voulu. De cette page, il est aussi  possible de modifier ou de supprimer l'tudiant/e.
> _<small>Pour des raisons de sécurité, une fonction sera implémentée dans un futur proche afin de bloquer cet accès et ces permissions à tous et de seulement permettre aux administrateurs d'y accéder.</small>_ 

##### Forum 
Une section pour le forum sera également accessible. L'étudiant/e connecté/e peut voir tous les articles publiés par les autres membres. Cet élève peut évidemment visionner l'article dans une page afin de lire le contenu entier. 

Tout élève connecté peut rédiger, publier, mettre à jour et supprimer des articles. Par contre, seul l'étudiant/e qui a publié l'article a la permission de modifier ainsi que de supprimer celui-ci. 

##### Documents 
Finalement, une section pour les documents partagés sera également disponible. L'étudiant/e connecté/e peut voir tous ces documents et peut évidemment consulter les détails dans une page désignée à cet effet. 

Pour les documents de type PDF, la possibilité de les visionner et de les télécharger est disponible à tous les utilisateurs. 

Tout comme les articles du forum, tout élève connecté peut téléverser, mettre à jour et supprimer des documents. Par contre, seul l'étudiant/e qui a partagé le document a la permission de modifier ainsi que de supprimer celui-ci. 

---

Installation 
------------
1. Une fois le dossier récupéré (`git clone`), mettre à jour le projet local : 
```
# composer update
```
2. Faire une copie du fichier `.env.example` et le nommer `.env`. 
3. Regénérer une clé d'application `APP_KEY` : 
```
# php artisan key:generate
```
4. Créer une base de données locale : 
```sql
CREATE DATABASE `e2196008`;
```
> _<small>Par défaut, le nom donné à la base de données est `e2196008`. </small> <br> <small>En cas de changement, modifier dans le fichier `.env` à la ligne 14 `DB_DATABASE`.</small>_
5. Migrer les tables : 
```
# php artisan migrate
```
6. Démarrer le projet : 
```
# php artisan serve
```

---

##### Lien du site 
https://e2196008.webdev.cmaisonneuve.qc.ca/maisonneuve2196008 

##### Connexion utilisateur 
Username:  peter@gmail.com
Password:  123456
