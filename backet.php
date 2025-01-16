<html>

<?php
    include 'header.html';
?>
<body>


<h1>Корзина</h1>
  <div class="container">
    <div class="row">
      <div class="card" id="1" style="width: 20rem;">
        <img src="tea.jpg" alt="tea">
        <div class="card-body">
          <h5 class="card-title">Хун Ча</h5>
          <h6 class="card-title">500 р.</h6>
        </div>
        <div class="card-footer">
          <div class="quantity">
            <button onclick="decrementItem(this)">-</button>
            <span>1</span>
            <button onclick="incrementItem(this)">+</button>
          </div>
          <button onclick="removeItem(this)">Удалить</button>
        </div>
      </div>
    </div>
  </div>



<div class="counterSumm">
  <span>В итоге: </span>
</div>

<button type="submit" a href="#" class="btn btn-success" id="submitBacket">Оплатить</button>






<script>
function incrementItem(element) {
  const span = element.parentElement.querySelector('span');
  let currentQuantity = parseInt(span.textContent);
  span.textContent = currentQuantity + 1;
}

function decrementItem(element) {
  const span = element.parentElement.querySelector('span');
  let currentQuantity = parseInt(span.textContent);
  if (currentQuantity > 1) {
    span.textContent = currentQuantity - 1;
  }
}

function removeItem(element) {
  element.parentElement.remove();
}

</script>

</body>
<?php 
    include 'footer.html';
?>
</html>