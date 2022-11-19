## Up containers

```bash
$ docker-compose up -d
```

## Access the PHP container

```bash
$ docker exec -ti symfony_php bash
```

## Install dependencies in the PHP container

```bash
$ docker exec -ti symfony_php bash

## It's not necesary
 composer create-project symfony/skeleton: new_app
 
## move file to root path
 mv replace new_app/* .

## It's necesary
composer install


```

To enter to see the access to the project [http://localhost:8000](http://localhost:8000)
