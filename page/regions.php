<?php

include_once __DIR__ . '/../component/header.php';

use App\Service\RegionService;

$regions = (new RegionService())->getRegions();
//$region = (new RegionService())->getRegion('84');
//dump($region);

?>

    <h1>Les régions de France</h1>
    <ul>
        <?php foreach ($regions as $item) : ?>
            <li><?= $item->getName() ?> (<?= $item->getCode() ?>)</li>
        <?php endforeach; ?>
    </ul>

<?php include_once __DIR__ . '/../component/footer.php' ?>
