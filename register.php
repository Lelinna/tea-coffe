<html>


<?php
    include 'header.html';
?>

<body>
    <div class="container col-md-6 col-lg-4">
        <h3 class="text-center">Регистрация</h3>
        <form method="POST" action="#" id="registrationForm">
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" name="email" required>
                <label for="email">Ваш e-mail:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="login" name="login" pattern="[a-zA-Z]{1,}" required>
                <label for="login">Логин:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" name="password" minlength="6" required>
                <label for="password">Пароль: (не меньше 6 символов)</label>
            </div>
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="consentCheck" name="check" required>
                <label class="form-check-label" for="consentCheck">Я даю согласие на обработку персональных данных</label>
            </div>
            <button type="submit" class="btn btn-success" id="submitButton" disabled>Зарегистрироваться</button>
        </form>
    </div>
    <script>
        const submit = document.getElementById('submitButton');
        const check = document.getElementById('consentCheck');
        check.addEventListener('click', function(){
            if(check.checked) {
                submit.removeAttribute("disabled");
            } else {
                submit.setAttribute("disabled", "");
            }
        });
    </script>
</body>

<?php 
    include 'footer.html';
?>

</html>