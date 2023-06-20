<?php include_once __DIR__ . '/../component/header.php' ?>

<?php

$url = 'https://geo.api.gouv.fr/regions';
$json = file_get_contents($url);
$data = json_decode($json, true); // transformer le json en tableau

$regions = [];

// TODO :
// A part de $data récupéré depuis le json de l'API :
// instancier des objets régions à stocker le tableau $regions ci-dessus
// (les régions sont à créer depuis le tableau associatif)

?>

    <h1>Les régions de France</h1>
    <ul>
        <?php foreach ($regions as $item) : ?>
            <!-- TODO : afficher les noms de région avec leur code entre parenthèse -->
            <li>???????????</li>
        <?php endforeach; ?>
    </ul>

<?php include_once __DIR__ . '/../component/footer.php' ?>
