    <div>
        <?php
            foreach ($signUpErrors as $key => $value) {
                echo "<div class='alert alert-danger' role='alert'>$value</div>";
            } 
        ?>
    </div>
    <form action="<?= $SignUpURL ?>" method="POST" class="text-center border border-light p-5 ">
        <div class="form-group">
            <input type="text" name="name" value="<?= $newSignUpDate['name'] ?? '' ?>" placeholder = "Введите имя" class="form-control">
        </div> 
        <div class="form-group">    
            <input type="text" name="surname" value="<?= $newSignUpDate['surname'] ?? '' ?>" placeholder = "Введите фамилию" class="form-control">
        </div>
        <div class="form-group">    
            <input type="text" name="login" value="<?= $newSignUpDate['login'] ?? '' ?>" placeholder = "Введите логин" class="form-control">
        </div>    
        <div class="form-group">
            <input type="password" name="pass" placeholder = "Введите пароль" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" name="passrepeat" placeholder = "Повторите пароль" class="form-control">         
        </div>
            <input type="submit" value="Регистрация" class="btn btn-primary">
    </form>
    