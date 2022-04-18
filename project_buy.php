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
    <title>Location</title>
    <link rel="stylesheet" href="project_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://kit.fontawesome.com/d791d40d5f.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
</head>
<body>
    <section class="user-header">
        <div class="logout-section">
            <div class="logout-col">
                <a class="logout" href="logout.php">Logout</a>
            </div>
            <div class="buy-col">
                <a class="buy" href="project_user.php">Return to User</a>
            </div>
        </div>
        <div class="user-intro">
            <h1>Locations</h1>
        </div>

    </section>

    <!-- Location section -->

    <section class="location">
        <h2>Choose a location</h2>

        <div class="row">
            <div class="location-col">
                <img src="images/village.jpg">
                <div class="layer">
                    <h3>Village</h3>
                    <a href="project_village.php"></a>
                </div>
            </div>
            <div class="location-col">
                <img src="images/town.jpg">
                <div class="layer">
                    <h3>Town</h3>
                    <a href="project_town.php"></a>
                </div>
            </div>
            <div class="location-col">
                <img src="images/city.jpg">
                <div class="layer">
                    <h3>City</h3>
                    <a href="project_city.php"></a>
                </div>
            </div>
            <div class="location-col">
                <img src="images/metro.jpg">
                <div class="layer">
                    <h3>Metropolis</h3>
                    <a href="project_metro.php"></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->

    <?php include('templates/footer.php'); ?>


</body>
</html>