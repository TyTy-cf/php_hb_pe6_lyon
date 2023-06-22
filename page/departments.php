<?php

include_once __DIR__ . '/../component/header.php';

use App\Models\GeoGouv\Department;
use App\Service\HttpApiClient;

$httpApiClient = new HttpApiClient();
$data = $httpApiClient->getFromUrl('https://geo.api.gouv.fr/departements');

$departments = [];

foreach ($data as $jsonItem) {
   $department = new Department(
       $jsonItem['nom'],
       $jsonItem['code'],
       $jsonItem['codeRegion']
   );
   $departments[] = $department;
}
//echo '<pre>';
//var_dump($departments);
//echo '</pre>';

?>

<h1>Les départements de France</h1>
<ul>
    <?php foreach ($departments as $item) : ?>
        <li><?= $item->getName() ?> (<?= $item->getCode() ?> : region <?= $item->getCodeRegion() ?>)</li>
    <?php endforeach; ?>
</ul>

<?php include_once __DIR__ . '/../component/footer.php' ?>
