<?php
session_start();

include("login/connection.php");
include("login/functions.php");

$user_data = check_login($conn);

$name=$user_data['username'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Village</title>
    <link rel="stylesheet" href="project_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://kit.fontawesome.com/d791d40d5f.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
</head>
<body>
    <section class="village-header">
        <div class="logout-section">
            <div class="logout-col">
                <a class="logout" href="logout.php">Logout</a>
            </div>
            <div class="buy-col">
                <a class="buy" href="project_user.php">Return to User</a>
            </div>
        </div>

        <div class="intro">
            <h1>Village</h1>
            <p>Welcome to the Village!</p>
        </div>

    </section>

    <!---Shops-->

    <section class="shop">
        <h2>Explore Shops</h2>

        <div class="row">
            <div class="shop-col">
                <img src="images/weapon.webp">
                <div class="layer">
                    <h3>Weapons</h3>
                    <a href="weapons.php"></a>
                </div>
            </div>
            <div class="shop-col">
                <img src="images/armor.png">
                <div class="layer">
                    <h3>Armor</h3>
                    <a href="armor.php"></a>
                </div>
            </div>
            <div class="shop-col">
                <img src="images/accessory.webp">
                <div class="layer">
                    <h3>Accessories</h3>
                    <a href="accessories.php"></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Location section -->

    <section class="location">
        <h2>Explore Locations</h2>

        <div class="ex-row">
            <div class="ex-location-col">
                <img src="images/about.jpg">
                <div class="layer">
                    <h3>Return: Locations</h3>
                    <a href="project_buy.php"></a>
                </div>
            </div>
            <div class="ex-location-col">
                <img src="images/town.jpg">
                <div class="layer">
                    <h3>Next: Town</h3>
                    <a href="project_town.php"></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->

    <?php include('templates/footer.php'); ?>

</body>
</html>