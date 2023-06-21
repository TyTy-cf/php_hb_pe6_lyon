<?php

use Service\HttpApiClient;
use Models\GeoGouv\Region;
use Models\Region as MRegion;

$httpApiClient = new HttpApiClient();
$data = $httpApiClient->getArrayDataFromUrl('https://geo.api.gouv.fr/regions');

$regions = [];

new MRegion();

foreach ($data as $jsonItem) {
    $region = new Region();
    $region->setName($jsonItem["nom"]);
    $region->setCode($jsonItem["code"]);
    $regions[] = $region; // => array_push
}
//echo '<pre>';
//var_dump($regions);
//echo '</pre>';

?>

    <h1>Les régions de France</h1>
    <ul>
        <?php foreach ($regions as $item) : ?>
            <li><?= $item->getName() ?> (<?= $item->getCode() ?>)</li>
        <?php endforeach; ?>
    </ul>

<?php include_once __DIR__ . '/../component/footer.php' ?>
