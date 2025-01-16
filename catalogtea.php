<html>

<?php
    include 'header.html';
?>

<body>
    <h1>Каталог</h1>

    <nav class="navbar navbar-expand-lg bg-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Черный чай</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Красный чай</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Зеленый чай</a>
            </li>
        </ul>
    </nav>

    <div class="row">
        <div class="card" id="1" style="width: 20rem;">
            <img src="img/tea.jpg" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Хун Ча — китайский красный чай</h5>
                <p class="card-text">Смесь чаев улун, кимун и лапсанг сушонг. Его описывают как ароматный и насыщенный чай со сладким, солодовым и дымным вкусом.</p>
                <a href="backet.php" class="btn btn-success">Добавить в корзину</a>
            </div>
        </div>
        <div class="card" id="2" style="width: 20rem;">
            <img src="img/tea2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Хей Ча — китайский черный чай</h5>
                <p class="card-text">Родиной хэй ча считают провинцию Хунань, небольшой городок Аньхуа. Именно здесь впервые и был произведён этот чай, во времена правления династии Мин.</p>
                <a href="backet.php" class="btn btn-success">Добавить в корзину</a>
            </div>
        </div>

    </div>


</body>


<?php 
    include 'footer.html';
?>
</html>