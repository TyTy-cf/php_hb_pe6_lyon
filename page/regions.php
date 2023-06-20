<?php include_once __DIR__ . '/../component/header.php' ?>
<?php include_once __DIR__ . '/../models/geo-gouv/Region.php' ?>

<?php

$url = 'https://geo.api.gouv.fr/regions';
$json = file_get_contents($url);
$data = json_decode($json, true); // transformer le json en tableau

$regions = [];

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
