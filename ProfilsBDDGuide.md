# Introduction #

Dans le but d'obtenir l'architecture d'accès à la BDD la plus modulable qui soit, il a été décidé de définir des profils de base de données, définissant des paramètres tels que l'hôte, le port, le nom d'utilisateur, etc. permettant d'effectuer la connexion.
Les applications cherchant ainsi à manipuler des données passent par un Wrapper qui va se charger d'obtenir une connexion et d'effectuer les requêtes et le traitement.
Ce Wrapper, lui, requiert de connaître un profil lors de la demande à la Factory qui va lui servir une connexion correspondant à ce dernier.
Ainsi, il va consulter 'lib/config.ini' pour obtenir ce profil, qui pourra être un profil global au framework ou au contraire spécifique à l'application.
Un autre paramètre est défini dans ce 'config'.ini, 'debug', dans le but d'autoriser des opérations supplémentaires dans le cadre du développement du projet.
Ce paramètre 'debug', si défini à 1, autorise l'utilisateur à créer un fichier 'override.ini' qui va lui permettre de redéfinir chaque paramètre du 'config.ini'.
Dans le cadre des profils de connexion, il peut ainsi forcer l'application à utiliser un profil différent.


# Les profils #

Ils sont stockés dans le dossier 'lib/db\_profiles/nom\_du\_profil.ini'.
Ils sont de la forme:

```
[General]
driver = "" ;nom du driver à utiliser. ex: mysql 
host = "" ; hôte sur lequel est stocké la base. ex: localhost
port = ; numéro de port sur lequel écoute la base. ex: 3306
dbname = "" ; nom de la base de données
username = "" ; nom d utilisateur pour se connecter
password = "" ; mot de passe

[DriverOptions]
; une ligne par option du driver. Voir la doc de PDO
; ex: MYSQL_ATTR_INIT_COMMAND = "SET NAMES 'UTF8'"
```