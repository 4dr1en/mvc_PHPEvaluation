<div id="cart">
<?php
if(isset($_SESSION['cart']) && count($_SESSION['cart'])){
?>
    <h3>My Cart</h3>
    <div id="cartContent">
    <?php
    foreach ($_SESSION['cart'] as $value) {
        print('<p>'.$value.'</p>');
    }
    ?>
    </div>
<?php
}else{
    print('<p>Your Cart is empty.</p>');
}
?>


</div>