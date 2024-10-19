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
        try {
            $response = $this->cliente->request('GET', $this->urls . $ruta, [
                'headers' => [
                    'accept' => 'application/json',
                    'authorization' => 'Basic ' . base64_encode($this->credentials["usuario"] . ':' . $this->credentials["token"]),
                    'content-type' => 'application/json',
                ],
            ]);
            return json_decode($response->getBody(), true);
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            // Capturar y manejar el error
            $responseBody = $e->getResponse()->getBody()->getContents();
            $responseJson = json_decode($responseBody, true);
            return $responseJson;
        }
    }
    public function post($ruta, $cuerpo)
    {
        try {
            $response = $this->cliente->request('POST', $this->urls . $ruta, [
                'body' => json_encode($cuerpo),
                'headers' => [
                    'accept' => 'application/json',
                    'authorization' => 'Basic ' . base64_encode($this->credentials["usuario"] . ':' . $this->credentials["token"]),
                    'content-type' => 'application/json',
                ],
            ]);

            return json_decode($response->getBody(), true);
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            // Capturar y manejar el error
            $responseBody = $e->getResponse()->getBody()->getContents();
            $responseJson = json_decode($responseBody, true);
            return $responseJson;
        }
    }
}
