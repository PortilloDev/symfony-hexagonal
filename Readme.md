## Levantar contenedores

```bash
$ docker-compose up -d
```

## Acceder al contenedor de PHP

```bash
$ docker exec -ti symfony_php bash
```

## Instalar dependencias de PHP dentro del contenedor

```bash
$ docker exec -ti symfony_php bash

# composer install
```
composer create-project symfony/skeleton: my_project_directory

Para entrar a ver el proyecto accede a [http://localhost:80](http://localhost:80)
