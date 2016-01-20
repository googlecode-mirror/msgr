# Introduction #

Il serait utile de se mettre d'accord sur une convention d'écriture des commits sur le SVN. Il faut en effet que ces derniers soient clairs, compréhensibles par tous et détaillés.

# Détails #

Je propose cette convention:

```
* file_name:
  - modification 1
  - modification 2
  - ...

* file_name_2:
  - modification 1
```

Je propose également de committer le plus souvent possible des modifications les plus réduites possibles.
Il faut enfin bien penser à effectuer un svn update avant d'effectuer un svn commit.