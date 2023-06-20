# PruebaCasaAndina
Prueba Técnica Laravel - Casa Andina

En esta prueba técnica, se te solicita diseñar un API REST para nuestra nueva vista de hotel. El objetivo es crear un API que alimente las vistas hotel y hoteles con la información del modelo hotel.

Requisitos:

● Utiliza Laravel 10 para el desarrollo del API REST.

● Emplear la siguiente conexión de base de datos MySQL:

○ ○ ○ ○ ○ ○

DB_CONNECTION=mysql DB_HOST=144.91.99.144 DB_PORT=3306 DB_DATABASE=bdca_casaandina DB_USERNAME=bdca_4dm1ncasa DB_PASSWORD=Wn8!cB&wOrEo

● Diseña las rutas, los controladores y documentación necesaria para cumplir con los siguientes casos de uso.

Casos de uso:

1. Ruta hoteles: Obtener una lista de todos los hoteles, solo incluyendo su htl_tit, htl_img y htl_id. Este listado se puede filtrar por el tipo de hotel.

2. Ruta hotel: Obtener información detallada de un solo hotel, donde se muestre el hotel seleccionado y la información del tipo de hotel. Se enviará la siguiente información de la tabla hotel: htl_tit, htl_img y htl_id. Y de la tabla tipo hotel serán tht_id y tht_id.

Consideraciones:

● Implementar las funcionalidades antes mencionadas empleando los estándares de Laravel 10, así como las mejores prácticas de programación. Se tendrá en cuenta este punto para la evaluación.

● Emplear un gestionador de versiones, recomendamos usar Github.
