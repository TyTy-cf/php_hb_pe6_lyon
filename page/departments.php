<?php include_once __DIR__ . '/../component/header.php' ?>
<?php include_once __DIR__ . '/../models/geo-gouv/Department.php' ?>

<?php

$url = 'https://geo.api.gouv.fr/departements';
$json = file_get_contents($url);
$data = json_decode($json, true); // transformer le json en tableau

$departments = [];

foreach ($data as $jsonItem) {
   $departments[] = new Department(
       $jsonItem['nom'],
       $jsonItem['code'],
       $jsonItem['codeRegion']
   );
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
