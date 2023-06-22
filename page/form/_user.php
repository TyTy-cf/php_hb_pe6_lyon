<?php

global $user;
global $isEdit;

?>

<form method="post" action="../user/action.php">
    <div class="mb-3 row">
        <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-10">
            <input type="text"
                   class="form-control"
                   id="inputUsername"
                   name="user_username"
                   value="<?= $user->getUsername() ?>"
            >
        </div>
    </div>
    <?php if (false === $isEdit) { ?>
        <div class="mb-3 row">
            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text"
                       class="form-control"
                       id="inputEmail"
                       name="user_email"
                       value="<?= $user->getEmail() ?>"
                >
            </div>
        </div>
    <?php } ?>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password"
                   class="form-control"
                   id="inputPassword"
                   name="user_password"
                   value="<?= $user->getPassword() ?>"
            >
        </div>
    </div>
    <button class="btn btn-primary" type="submit">
        Valider
    </button>
</form>

