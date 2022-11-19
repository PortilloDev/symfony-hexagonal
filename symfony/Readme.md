# List of installed dependencies

```
- composer require symfony/orm-pack
- composer require symfony/uid

```


# Configuration to adapt the framework to a hexagonal architecture

- composer.json, modified psr4
- go to config\services.yaml => (La idea es que cada modulo tenga su configuración propia)
    - Creo una carpeta services en config y creo un fichero .yaml por cada modulo
    - pego la información del apartado services del fichero services.yaml en cada uno de los nuevos ficheros
    - importo esos ficheros en la carpeta services.yaml

- go to packages/doctrine.yaml => ( ejemplo sacado de la documentación de [symfony](https://symfony.com/doc/6.0/doctrine/multiple_entity_managers.html) )
    - se accede al fichero .env para configurar la conexión
    - Se modifica el apartado dba
    - Se crea un directorio de capetas a partir de config
        config 
            orm 
                mapping
                    ModuleA
                    ModuleB
        Se añade configuración en xml para los entity managers

    - Se modifica el apartado orm




