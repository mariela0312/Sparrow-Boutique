<?php include "functions/db.php"; 
if ($loggedIn){
    header("Location: profile.php");
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-sale=1.0">
    <title>Login - The Sparrow Boutique House</title>
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
                    <img src="images/login.svg" width="100%">
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Влез</span>
                            <span onclick="register()">Регистрация</span>
                            <hr id="Indicator">
                        </div>
                        <form id="LoginForm" method="POST" action="functions/user.php">
                            <input type="text" name="username" placeholder="Потребителско име">
                            <input type="password" name="password" placeholder="Парола">
                            <button type="submit" name="action" value="login" class="btn">Влез</button>
                        </form>
                        <form id="RegForm" method="POST" action="functions/user.php">
                            <input type="text" name="username" placeholder="Потребителско име">
                            <input type="email" name="email" placeholder="Имейл">
                            <input type="text" name="phone" placeholder="Телефонен номер">
                            <input type="password" name="password" placeholder="Парола">
                            <input type="password" name="confirmPassword" placeholder="Потвърди парола">
                            <button type="submit" name="action" value="register" class="btn">Регистрирай се</button>
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