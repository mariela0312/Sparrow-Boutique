<?php include "functions/db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-sale=1.0">
    <title>Home - The Sparrow Boutique House</title>
    <link rel="icon" href="images/tsbh4.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap');</style>
</head>
<body>
    <?php include "layout/header.php"; ?>

    <div class="row">
        <div class="col-2">
            <h1>Продавай и купувай на изгодни цени</h1>
            <p>Твоето ненужно става нужно за друг</p>
            <a href="login.php" class="btn">Присъедини се &#8594</a>
        </div>
        <div class="col-2">
            <img src="images/home2.svg">
        </div>
    </div></div></div>


    <div class="categories">
       <div class="small-container">
            <div class="row">
                <div class="col-3"><img src="images/category-1.jpg"></div>
                <div class="col-3"><img src="images/category-2.jpg"></div>
                <div class="col-3"><img src="images/category-3.jpg"></div>
            </div>
        </div>
   </div>

    <div class="small-container">
        <h2 class="title">Продукти</h2>
        <?php
        $query = "SELECT * FROM products";
        $a = $db->query($query);
        ?>
        <div class="row">
            <?php while($if = $a->fetch_array()){ ?>
                <div class="col-4">
                    <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $if['img'] ).'"/>'; ?>
                    <h4><?php echo($if['title']);?></h4>
                    <p><?php echo($if['price']);?>лв.</p>
                    <a href="product.php/?id=<?php echo($if['id']);?>" class="btn">Виж продукта</a>
                </div>
            <?php } ?>
        </div>
    </div>

    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="images/heels1.png" class="offer-img">
                </div>
                <div class="col-2">
                    <h1>Участвай в томболата</h1>
                    <p>Записвания само до 24.06.2022 в нашата Facebook страница</p>
                </div>
            </div>
        </div>
    </div>

    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5"><img src="images/econt.png"></div>
                <div class="col-5"><img src="images/logo-paypal.png"></div>
                <div class="col-5"><img src="images/msc.png"></div>
            </div>
        </div>
    </div>

    <?php include "layout/footer.php"; ?>
</body>
</html>