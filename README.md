# Docker

J'ai décidé de faire ce projet seul comme vous l'avez mentionner pendant le cours

## Projet 1

On peut le lancer en local ou le voir sur [Docker hub de Gregory](https://hub.docker.com/repository/docker/gregorylp/gregorylp-wordpress/general) 

### Lancer en local

On peut le récupèrer le lancer avec cette commande
```
docker-compose up -d
```

### Correspondance des fichiers

Nous avons 3 fichiers :

- Le premier un docker-compose pour la création et connexion de la mariaDB avec le container wordpress

- Le deuxième fichier un dockerfile pour faire u la mise en place des différentes variables d'environements la copie du fichier wp-config et utilisationd de l'image wordpress basé php

- Le troisième fichiers my.cnf c'est un fichier pour la configuration SQL de la BDD

- Le dernier fichier wp-config, c'était pour résoudre un conflit, il arriver pas a créer le fichier wp-config.php alors j'en ai créer avec les informations nécessaires.


## Projet 2

### Composition

Il est composer comme ce qui était demander dans l'énoncer

- Un .env pour mettre les version de kibana et elasticsearch
- un docker compose pour les différents noeuds es01, es02 et es03
- Deux fichier yml pour la configuration de kibana et elasticsearch
