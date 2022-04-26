<div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo"><a href="index.php"><img src="images/tsbh3.png" width="125px"></a></div>
            <?php
            if ($loggedIn) { ?>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.php">Начало</a></li>
                        <li><a href="products.php">Продукти</a></li>
                        <li><a href="contact.php">Контакти</a></li>
                        <li><a href="addAdvert.php">Добави обява</a></li>
                        <li><a href="profile.php">Профил</a></li>
                    </ul>
                </nav>
                <a href="https://www.facebook.com/The-Sparrow-Boutique-102690965722857/"><img src="images/f.png"></a>
                <a href="functions/logout.php"><img src="images/l.png"></a>
                <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
            <?php 
            } 
            else { ?>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.php">Начало</a></li>
                        <li><a href="products.php">Продукти</a></li>
                        <li><a href="contact.php">Контакти</a></li>
                        <li><a href="login.php">Влез</a></li>
                    </ul>
                </nav>
                <a href="https://www.facebook.com/The-Sparrow-Boutique-102690965722857/"><img src="images/f.png"></a>
                <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
            <?php 
            } ?>
        </div>