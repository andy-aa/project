<?php

/** @var string $loginURL */
?>
<form action="<?= $loginURL ?>" method="POST" class="loginForm">
    <label>
        <input type="text" name="user" placeholder="User">
    </label>
    <label>
        <input type="password" name="pass" placeholder="Password">
    </label>
    <input type="submit" value="Login">
</form>