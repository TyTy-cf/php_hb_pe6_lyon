<?php

use App\Models\Spotifish\User;

include_once '../../component/header.php';

$user = null;

if (isset($_POST['user_username']) &&
    isset($_POST['user_password'])
) {
    $user = new User();
    $user->setUsername($_POST['user_username']);
    $user->setPassword($_POST['user_password']);
}

if (isset($_POST['user_email'])) {
    $user->setEmail($_POST['user_email']);
}

if ($user !== null) {
    $_SESSION['user'] = [
        'username' => $user->getUsername(),
        'email' => $user->getEmail(),
        'password' => $user->getPassword(),
    ];
}

?>

<h1>Coucou <?= $user->getUsername() ?></h1>


<a href="edit.php" class="btn btn-warning mt-5">
    Modifier mon profil
</a>
