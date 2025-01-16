<html>

<?php
    include 'header.html';
?>

<body>
    <div class="container col-md-6 col-lg-4">
            <h3 class="text-center">Авторизация</h3>
            <form method="POST" action="#">
                <div class="mb-3">
                    <label for="login" class="form-label">Логин</label>
                    <input type="text" class="form-control" id="login" name="login" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Пароль</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="button" class="btn btn-success">Авторизация</button>

                <i><a href="register.php" class="link-primary">Зарегистрироваться</a>

            </form>
        </div>
</body>


<?php 
    include 'footer.html';
?>
</html>