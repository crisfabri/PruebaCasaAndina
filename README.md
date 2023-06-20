# PruebaCasaAndina

Prueba Técnica Laravel - Casa Andina

Este es el repositorio para la prueba técnica de desarrollo de un API REST para la vista de hotel de Casa Andina. El repositorio contiene el código fuente y un archivo JSON con las pruebas realizadas en Postman, así como las respuestas correspondientes a las solicitudes requeridas.

##  1. Ruta hoteles
    Descripción: Obtener una lista de todos los hoteles, incluyendo solo los campos htl_tit, htl_img y htl_id. Esta lista puede filtrarse por tipo de hotel.

    Método HTTP: GET
    
    Ruta: localhost/hoteles
    
    Parámetros de consulta:
        tipohotel (opcional): Permite filtrar la lista de hoteles por tipo de hotel.
        
    Lógica de implementación: La lógica para obtener la lista de hoteles con los campos requeridos se encuentra en el controlador HotelController, específicamente en la función index.
    
##  2. Ruta hotel
    Descripción: Obtener información detallada de un solo hotel, incluyendo el hotel seleccionado y la información del tipo de hotel.

    Método HTTP: GET
    
    Ruta: localhost/hoteles/{id}
    
    Parámetros de ruta:
        id: ID del hotel a consultar.
        
    Lógica de implementación: La lógica para obtener la información detallada del hotel, incluyendo los campos solicitados de la tabla hotel y tipoHotel, se encuentra en el controlador HotelController, específicamente en la función show.

# Pruebas en Postman

Se incluye un archivo JSON en el repositorio que contiene las pruebas realizadas en Postman. Estas pruebas se realizaron para verificar el correcto funcionamiento de las rutas hoteles y hotel. Además, se incluyen las respuestas correspondientes a las solicitudes realizadas.
