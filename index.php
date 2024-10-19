<?php
require_once('vendor/autoload.php');

use Codwelt\Alegra\AlegraFacade;

$manager = new AlegraFacade(true);
$manager->setCredential([
    "usuario" => "codwelt.com2@gmail.com",
    "token" => ""
]);

/**
 *   CREAR CONTACTOS
$resultado = $manager->contactos()->crearContacto([
    "address" => [
        "city" => "Bogota",
        "address" => "111111111",
        "zipCode" => "111321",
        "country" => "Colombia",
        "department" => "Bogotá"
    ],
    "nameObject" => [
        "firstName" => "Codwelt",
        "secondName" => "Codwelt",
        "lastName" => "Codwelt Codwelt"
    ],
    "identificationObject" => [
        "type" => "NIT",
        "number" => "111111",
        "dv" => 3
    ],
    "kindOfPerson" => "LEGAL_ENTITY",
    "regime" => "COMMON_REGIME",
    "summary" => "Creación de contactos para versiones genéricas",
    "value" => [
        "name" => "Acrecer",
        "identification" => "963.654.988",
        "email" => "prueba2@alegra.com",
        "phonePrimary" => "111 11 11",
        "phoneSecondary" => "",
        "fax" => "",
        "mobile" => "(333) 555-55-55",
        "type" => [
            "client"
        ],
        "address" => [
            "address" => "Avenida Madison",
            "city" => "New York, USA"
        ],
        "seller" => 52,
        "term" => 2,
        "priceList" => null,
        "internalContacts" => [
            [
                "id" => 1,
                "name" => "Lina",
                "lastName" => "Montoya",
                "email" => "prueba4@alegra.com",
                "phone" => "123 45 67 ext 25",
                "mobile" => "(333) 333 33 33",
                "sendNotifications" => "no"
            ]
        ]
    ],
    "name" => "Codwelt sas",
    "phonePrimary" => "1111111",
    "email" => "codwelt.com@codwelt.com",
    "emailSecondary" => "codwelt.com@codwelt.com",
    "fiscalResidence" => "RESIDENT",
    "enableHealthSector" => false,
    "mobile" => "11111111",
    "term" => 1,
    "type" => "client",
    "status" => "active"
]);

*/
/**
 * LISTAR CONTACTOS
 * $manager->contactos()->listarContactos()
 */

/**
 * BUSCAR CONTACTO
 * $manager->contactos()->buscarContacto(2)
 */



echo "<pre>";
var_dump($manager->contactos()->listarContactos());