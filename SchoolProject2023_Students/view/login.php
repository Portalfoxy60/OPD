<?php 
ob_start();
?>

<h2 class="text-center m-4">Регистрация</h2>
<div class="container" style="width:450px">
    <form action="registrationResult.php" method="POST">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary" name="register">Зарегистрироваться</button>
    </form>
</div>
