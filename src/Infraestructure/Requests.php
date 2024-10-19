<?php

namespace Codwelt\Alegra\Infraestructure;

class Requests
{
    public $cliente;
    public $urls;
    public $credentials;
    function __construct($url, $credential)
    {
        $this->urls = $url;
        $this->credentials = $credential;
        $this->cliente = new \GuzzleHttp\Client();
    }

    public function get($ruta)
    {
        // Inicializa cURL
        $ch = curl_init($this->urls . $ruta);
        // Configura las opciones de la solicitud
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Accept: application/json',
            'Authorization: Basic ' . base64_encode($this->credentials["usuario"] . ':' . $this->credentials["token"]),
            'Content-Type: application/json',
        ]);
        // Ejecuta la solicitud
        $response = curl_exec($ch);
        // Maneja errores
        if (curl_errno($ch)) {
            echo 'Error en la solicitud: ' . curl_error($ch);
            exit;
        }
        // Cierra la conexión
        curl_close($ch);
        // Retorna el resultado decodificado
        return json_decode($response, true);
    }
    public function post($ruta, $cuerpo)
    {
        // Inicializa cURL
        $ch = curl_init($this->urls . $ruta);
        // Configura las opciones de la solicitud
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true); // Método POST
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($cuerpo)); // Establece el cuerpo de la solicitud
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Accept: application/json',
            'Authorization: Basic ' . base64_encode($this->credentials["usuario"] . ':' . $this->credentials["token"]),
            'Content-Type: application/json',
        ]);
        // Ejecuta la solicitud
        $response = curl_exec($ch);
        // Maneja errores
        if (curl_errno($ch)) {
            echo 'Error en la solicitud: ' . curl_error($ch);
            exit;
        }
        // Cierra la conexión cURL
        curl_close($ch);
        // Retorna el resultado decodificado
        return json_decode($response, true);
    }
}
