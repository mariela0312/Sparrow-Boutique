<?php include "functions/db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-sale=1.0">
    <title>Products - The Sparrow Boutique House</title>
    <link rel="icon" href="images/tsbh4.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap');</style>
</head>
<body>
    <?php include "layout/header.php"; ?></div></div>

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

    <?php include "layout/footer.php"; ?>
    <script text="text/javascript" src="js/menu_toogle.js"></script>
</body>
</html>