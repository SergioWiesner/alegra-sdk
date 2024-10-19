<?php

namespace Codwelt\Alegra\Aplication;
use Codwelt\Alegra\Infraestructure\ConstructorContactos;
use Codwelt\Alegra\Infraestructure\Requests;

class Contactos
{
    public $requests;
    function __construct($urls, $credencials)
    {
        $this->requests = new Requests($urls, $credencials);
    }
    public function buscarContacto($id)
    {
        return $this->requests->get('/api/v1/contacts/' . $id);
    }
    public function listarContactos()
    {
        return $this->requests->get('/api/v1/contacts');
    }
    public function crearContacto($data)
    {
        $constructor = new ConstructorContactos();
        $result = $this->requests->post('/api/v1/contacts', $constructor->contactos($data));
        return $result;
    }
}
