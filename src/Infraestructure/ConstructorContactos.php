<?php

namespace Codwelt\Alegra\Infraestructure;

class ConstructorContactos
{

    public function contactos($data)
    {
        return [
            "address" => [
                "city" => $data["address"]["city"],
                "address" => $data["address"]["address"],
                "zipCode" => $data["address"]["zipCode"],
                "country" => $data["address"]["country"],
                "department" => $data["address"]["department"]
            ],
            "nameObject" => [
                "firstName" => $data["nameObject"]["firstName"],
                "secondName" => $data["nameObject"]["secondName"],
                "lastName" => $data["nameObject"]["lastName"]
            ],
            "identificationObject" => [
                "type" => $data["identificationObject"]["type"],
                "number" => $data["identificationObject"]["number"],
                "dv" => $data["identificationObject"]["dv"]
            ],
            "kindOfPerson" => $data["kindOfPerson"],
            "regime" => $data["regime"],
            "summary" => $data["summary"],
            "name" => $data["name"],
            "phonePrimary" => $data["phonePrimary"],
            "email" => $data["email"],
            "emailSecondary" => $data["emailSecondary"],
            "fiscalResidence" => $data["fiscalResidence"],
            "enableHealthSector" => $data["enableHealthSector"],
            "mobile" => $data["mobile"],
            "term" => $data["term"],
            "type" => $data["type"],
            "status" => "active"
        ];
    }
}
