# Docker

## Projet 1

On peut le lancer en local ou le voir sur [Docker hub de Gregory](https://hub.docker.com/repository/docker/gregorylp/gregorylp-wordpress/general) 

### Lancer en local

On peut le récupèrer le lancer avec cette commande
```
docker-compose up -d
```

#### Cas Spécifique

- Dans le cas ou le premier projet ne se lance pas, vous pouvez faire cette commande
```
docker build -t nomdevotreDockerHub/gregorylp-wordpress:latest .

docker build -t nomdevotreDockerHub/mariadb:latest .
```

Ensuite faire la commande dans comment lancer en local

### Correspondance des fichiers

Nous avons 2 dossiers :

- Le premier est pour la base de données
- Le deuxième est pour wordpress

- A l'intérieur de chacun de ces dossiers vous avez un dockerfile pour la configuration de celui-ci

- Il y a un fichiers my.cnf c'est un fichier pour la configuration SQL de la BDD

- Un .env pour les résultats de variable de la BDD

## Projet 2

### Composition

Il est composer comme ce qui était demander dans l'énoncer

- Un .env pour mettre les version de kibana et elasticsearch
- un docker compose pour les différents noeuds es01, es02 et es03
- Deux fichier yml pour la configuration de kibana et elasticsearch
