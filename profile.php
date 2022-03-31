<?php include "functions/db.php"; 
if (!$loggedIn){
    header("Location: login.php");
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-sale=1.0">
    <title>Your Profile - The Sparrow Boutique House</title>
    <link rel="icon" href="images/tsbh4.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap');</style>
</head>
<body>
    <?php include "layout/header.php"; ?></div></div>

    <div class="small-container cart-page">
        <?php
        if(isset($_GET['delete'])){
            $ids = $_GET['id'];
            $db->query("DELETE FROM products WHERE id = '$ids'");
        }
        $query = $db->query("SELECT * FROM products ORDER BY 'user_id' DESC");
        $user_id = $userinfo['id'];
        $a = $db->query("SELECT COUNT(0) FROM products WHERE user_id = $user_id");
        $if = $a->fetch_array();
        if ($if[0] > 0){  ?>
        <table>
            <tr>
                <th>Продукт</th>
                <th>Цена</th>
            </tr>
            <?php
            while ($row = $query->fetch_assoc()){
            if ($row['user_id'] == $userinfo["id"]){;
                ?>
            <tr>
                <td>
                    <div class="cart-info">
                    <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['img'] ).'"/>'; ?>
                        <div>
                            <p><?php echo($row['title']);?></p>
                            <small>
                            <?php 
                            if($row['params'] == 1){
                                echo "Дамски дрехи";
                                } else{
                                    echo "Мъжки дрехи";
                                }?>
                            </small>
                            <br>
                            <a href="?&delete=&id=<?php echo($row['id']);?>">Премахни</a>
                        </div>
                    </div>
                </td>
                <td><?php echo($row['price']);?>лв.</td>
            </tr>
            <?php } } } else{?> 
                <div class="row">
                    <div class="col-2">
                        <h1>Все още нямаш качени обяви</h1> 
                    </div>
                    <div class="col-2">
                        <a href="addAdvert.php" class="btn">Създай нова обява</a>
                    </div>
                </div>
                
            <?php } ?>
        </table>
    </div>

    <?php include "layout/footer.php"; ?>
    <script text="text/javascript" src="js/menu_toogle.js"></script>
</body>
</html>
