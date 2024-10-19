<?php

namespace Codwelt\Alegra;

use Codwelt\Alegra\Aplication\Contactos;
class AlegraFacade
{
    public $auth;
    public $url;

    function __construct($status = false)
    {
        $this->url = $status ? "https://api.alegra.com" : "https://sandbox-api.alegra.com";
    }
    public function setCredential($credencial)
    {
        $this->auth = $credencial;
    }

    public function contactos()
    {
        return new Contactos($this->url, $this->auth);
    }
}