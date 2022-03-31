<?php 
include "functions/db.php"; 
$id = $_GET['id'];
$query = "SELECT * FROM products WHERE id = $id";
$a = $db->query($query);
$if = $a->fetch_array();
while ($row = $a->fetch_assoc()) {
    echo $row['classtype']."<br>";
    header("Location: product.php/?id=$row");
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-sale=1.0">
    <title>The Sparrow Boutique House</title>
    <link rel="icon" href="images/tsbh4.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap');</style>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo"><a href="../index.php"><img src="../images/tsbh3.png" width="125px"></a></div>
                <?php
                if ($loggedIn) { ?>
                    <nav>
                        <ul id="MenuItems">
                        <li><a href="../index.php">Начало</a></li>
                            <li><a href="../products.php">Продукти</a></li>
                            <li><a href="../contact.php">Контакти</a></li>
                            <li><a href="../addAdvert.php">Добави обява</a></li>
                            <li><a href="../profile.php">Профил</a></li>
                        </ul>
                    </nav>
                    <a href="https://www.facebook.com/The-Sparrow-Boutique-102690965722857/"><img src="../images/f.png"></a>
                    <a href="../functions/logout.php"><img src="../images/l.png"></a>
                    <img src="../images/menu.png" class="menu-icon" onclick="menutoggle()">
                <?php 
                } 
                else { ?>
                    <nav>
                        <ul id="MenuItems">
                            <li><a href="../index.php">Начало</a></li>
                            <li><a href="../products.php">Продукти</a></li>
                            <li><a href="../contact.php">Контакти</a></li>
                            <li><a href="../login.php">Влез</a></li>
                        </ul>
                    </nav>
                    <a href="https://www.facebook.com/The-Sparrow-Boutique-102690965722857/"><img src="../images/f.png"></a>
                    <img src="../images/menu.png" class="menu-icon" onclick="menutoggle()">
                <?php 
                } ?>
            </div>
        </div>
    </div>
    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $if['img'] ).'" width="100%" />'; ?>
            </div>
            <div class="col-2">
                <h1><?php echo($if['title']);?></h1>
                <h3>
                <?php 
                if($row['params'] == 0){
                    echo "Дамски дрехи";
                    } else{
                        echo "Мъжки дрехи";
                    }?>
                </h3>
                <h4><?php echo($if['price']);?>лв.</h4>
                <h4>Телефон: 0<?php echo($if['phoneUser']);?></h4>
                <h3>Детайли</h3>
                <p><?php echo($if['description']);?></p>
            </div>
        </div>
    </div>
    
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-2"><img src="../images/tsbh1.png"></div>
                <div class="footer-col-3">
                    <h3>Полезни линкове</h3>
                    <ul>
                        <li><a href="https://www.facebook.com/The-Sparrow-Boutique-102690965722857/">Facebook</a></li>
                        <li><a href="">Доставки и плащане</a></li>
                        <li><a href="">Връщане и замяна</a></li>
                        <li><a href="">Контакти</a></li>
                    </ul>
                </div>                   
            </div>
            <hr>
        </div>
    </div>
    <script text="text/javascript" src="../js/menu_toogle.js"></script>
</body>
</html>