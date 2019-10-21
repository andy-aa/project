    <form action="<?= $SignUpURL ?>" method="POST" class="text-center border border-light p-5 ">
        <div class="form-group">
            <input type="text" name="name" id="" required value="<?= $newSignUpDate['name'] ?? '' ?>" placeholder = "Введите имя" class="form-control">
        </div> 
        <div class="form-group">    
            <input type="text" name="surname" id="" required value="<?= $newSignUpDate['surname'] ?? '' ?>" placeholder = "Введите фамилию" class="form-control">
        </div>
        <div class="form-group">    
            <input type="text" name="login" id="" required value="<?= $newSignUpDate['login'] ?? '' ?>" placeholder = "Введите логин" class="form-control">
        </div>    
        <div class="form-group">
            <input type="password" name="pass" id="" required placeholder = "Введите пароль" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" name="passrepeat" id="" required placeholder = "Повторите пароль" class="form-control">         
        </div>
            <input type="submit" value="Регистрация" class="btn btn-primary">
    </form>
    <div>
        <?=$_SESSION['SignUpError']?>
    </div>