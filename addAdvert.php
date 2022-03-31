<?php include "functions/db.php"; 
if (!$loggedIn){
    header("Location: profile.php");
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-sale=1.0">
    <title>Add New Advert - The Sparrow Boutique House</title>
    <link rel="icon" href="images/tsbh4.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap');</style>
</head>
<body>
<?php include "layout/header.php"; ?></div></div>

    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="images/addAdvert.svg" width="100%">
                </div>
                <div class="col-2">
                    <div class="form-container-advert">
                        <form method="POST" action="functions/add.php" enctype="multipart/form-data" style="top: 65px;">
                            <h3>Добави нова обява</h3>
                            <input type="text" name="title" maxlength="50" placeholder="Заглавие">
                            <input type="number" name="price" maxlength="4" placeholder="Цена (ЛВ)">
                            <textarea type="text" name="description" maxlength="600" placeholder="Описание" required></textarea>
                            <input type="file" name="img_upload" required>
                            <select id="params" name="params" class="select">
                                <option value="1" data-marker="1">Дамски дрехи</option>
                                <option value="2" data-marker="2">Мъжки дрехи</option>
                            </select>
                            <button type="submit" name="upload" value="Upload" class="btn">Качване</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "layout/footer.php"; ?>
    <script text="text/javascript" src="js/menu_toogle.js"></script>
    <script text="text/javascript" src="js/login.js"></script>
</body>
</html>