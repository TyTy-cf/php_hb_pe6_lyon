<?php

class HttpApiClient
{

    public function getArrayDataFromUrl(string $url): array {
        $json = file_get_contents($url);
        return json_decode($json, true);
    }

}
