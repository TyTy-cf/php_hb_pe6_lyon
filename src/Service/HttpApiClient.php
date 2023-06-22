<?php

namespace App\Service;

// => Lorsque l'on utilise une classe d'un package (vendor) alors pas besoin de préciser App\
use Symfony\Component\HttpClient\HttpClient;

class HttpApiClient
{

    public function getFromUrl(string $url): array {
        $client = HttpClient::create();
        $response = $client->request('GET', $url);
        return json_decode($response->getContent(), true);
    }

}
