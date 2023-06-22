<?php

use App\Models\Spotifish\User;

include_once '../../component/header.php';

$user = null;

if (isset($_SESSION['user'])) {
    $user = new User();
    $user->setUsername($_SESSION['user']['username']);
    $user->setPassword($_SESSION['user']['password']);
    $user->setEmail($_SESSION['user']['email']);
}
$isEdit = true;

if ($user === null) {
    header('location: page/user/register.php');
}

?>

<h1 class="text-center">
   Modifier profil
</h1>

<?php

include_once '../form/_user.php';

?>

<?php

include_once '../../component/footer.php';

?>
