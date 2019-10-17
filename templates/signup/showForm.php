    <form action="<?= $SignUpURL ?>" method="POST" class="text-center border border-light p-5 ">
        <input type="text" name="name" id="" required value="<?= $newSignUpDate['name'] ?? '' ?>">
        <input type="text" name="surname" id="" required value="<?= $newSignUpDate['surname'] ?? '' ?>">
        <input type="text" name="login" id="" required value="<?= $newSignUpDate['login'] ?? '' ?>">
        <input type="password" name="pass" id="" required>
        <input type="password" name="passrepeat" id="" required>
        <input type="submit" value="Регистрация">
    </form>