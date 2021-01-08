<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="/public/style/main.css">
    <?php
        if(isset($PAGE['additionalCSS'])){
            print('<link rel="stylesheet" href="'.$PAGE['additionalCSS'].'">');
        }
    ?>
    
    <script src="./public/script/main.js" defer></script>
    <?php
        if(isset($PAGE['additionalJS'])){
            print('<script src="'.$PAGE['additionalJS'].'" defer></script>');
        }
    ?>
    
</head>
<body>
    <?php
        include('./components/header.php');
        include('./components/formLogin.php');
        include('./components/cart.php');
        include($PAGE['mainSectionHtml']);
        include('./components/footer.php');
    ?>
</body>
</html>