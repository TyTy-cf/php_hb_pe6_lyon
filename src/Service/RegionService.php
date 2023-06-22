<?php

namespace App\Service;


use App\Models\GeoGouv\Region;

class RegionService
{

    private HttpApiClient $httpClient;

    public function __construct()
    {
        $this->httpClient = new HttpApiClient();
    }

    /**
     * @return Region[]
     */
    public function getRegions(): array {
        $data = $this->httpClient->getFromUrl('https://geo.api.gouv.fr/regions');

        $regions = [];

        foreach ($data as $jsonItem) {
            $regions[] = $this->createRegion($jsonItem["nom"], $jsonItem["code"]); // => array_push
        }

        return $regions;
    }

    /**
     * @param string $code
     * @return Region
     */
    public function getRegion(string $code): Region {
        $data = $this->httpClient->getFromUrl('https://geo.api.gouv.fr/regions/' . $code);
        return $this->createRegion($data["nom"], $data["code"]);
    }

    /**
     * @param string $name
     * @param string $code
     * @return Region
     */
    private function createRegion(string $name, string $code): Region {
        $region = new Region();
        $region->setName($name);
        $region->setCode($code);
        return $region;
    }

}
