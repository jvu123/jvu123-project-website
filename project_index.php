<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Database</title>
    <link rel="stylesheet" href="project_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://kit.fontawesome.com/d791d40d5f.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
</head>
<body>
    <section class="user-header">
        <?php include('templates/navbar.php'); ?>

    <div class="intro">
        <h1>Project: New World</h1>
        <p>Where possibilities are endless.</p>
    </div>

    </section>

    <!-- Location section -->

    <section class="location">
        <h1>Location</h1>
        <p>Choose a location</p>

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

<!-------JavaScript for Toggle Menu ----->
<script>
    var navLinks = document.getElementById("navLinks");
    function showMenu(){
        navLinks.style.right = "0";
    }
    function hideMenu(){
        navLinks.style.right = "-200px";
    }
</script>

<!---JavaScript for Sticky Nav Bar-->
<script>
    // When the user scrolls the page, execute myFunction
    window.onscroll = function() {myFunction()};

    // Get the navbar
    var navbar = document.getElementById("navbar");

    // Get the offset position of the navbar
    var sticky = navbar.offsetTop;

    // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }
}
</script>


</body>
</html>