<?php

use App\Models\Spotifish\User;

include_once '../../component/header.php';

$user = new User();
$isEdit = false;

?>

<h1 class="text-center">
    S'inscrire
</h1>

<?php

include '../form/_user.php';

?>

<?php

include_once '../../component/footer.php';

?>
