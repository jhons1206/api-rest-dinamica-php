<?php

$routesArray = explode("/", $_SERVER['REQUEST_URI']);
$routesArray = array_filter($routesArray);

// Cuando no se hace ninguna petición a la API
if(count($routesArray) == 0) {
    $json = array(
        'status' => 404,
        'result' => 'Not found',
    );
    
    echo json_encode($json, http_response_code($json["status"]));
    
    return;
}

// Cuando si se hace una petición a la API
if(count($routesArray) == 1 && isset($_SERVER['REQUEST_METHOD'])) {

    // Peticiones GET
    if($_SERVER['REQUEST_METHOD'] == "GET") {

        $json = array(
            'status' => 200,
            'result' => 'Solicitud GET',
        );

        echo json_encode($json, http_response_code($json["status"]));
    }
    
    // Peticiones POST
    if($_SERVER['REQUEST_METHOD'] == "POST") {

        $json = array(
            'status' => 200,
            'result' => 'Solicitud POST',
        );
        
        echo json_encode($json, http_response_code($json["status"]));
    }

    // Peticiones PUT
    if($_SERVER['REQUEST_METHOD'] == "PUT") {

        $json = array(
            'status' => 200,
            'result' => 'Solicitud PUT',
        );
        
        echo json_encode($json, http_response_code($json["status"]));
    }

    // Peticiones DELETE
    if($_SERVER['REQUEST_METHOD'] == "DELETE") {

        $json = array(
            'status' => 200,
            'result' => 'Solicitud DELETE',
        );
        
        echo json_encode($json, http_response_code($json["status"]));
    }

}


