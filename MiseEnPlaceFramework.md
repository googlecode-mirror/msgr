# Récupérer les sources #

```
$ svn checkout https://msgr.googlecode.com/svn/trunk/ msgr --username foo@bar.com
```

# Pointer vers les sources #

Localiser le répertoire racine d'Apache, renseigné dans le httpd.conf

```
$ cd apache_folder
[$|#] ln -s msgr_folder pokemon
```

Attention. Au premier commit, il vous demandera un mot de passe correspondant à un nom d'utilisateur erroné : entrez un mot de passe bidon; il vous demandera alors d'entrer le nom d"utilisateur (votre adresse gmail) et le mot de passe (le code donné par le lien dans l'onglet Source "When prompted, enter your generated googlecode.com password.").