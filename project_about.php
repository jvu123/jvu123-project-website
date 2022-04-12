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
    <section class="about-header">
        <nav id="navbar">
            <a href="project_index.php"><img src="images/test.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="project_index.php">HOME</a></li>
                    <li><a href="project_about.php">ABOUT</a></li>
                    <a href="project_user.php" class="user">USER</a>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

        <div class="about-intro">
            <h1>About Project: New World</h1>
        </div>


    </section>

    <!--About us content-->

    <section class="about-project">
        <div class="row">
            <div class="about-col">
                <h1>This is a database project</h1>
                <p>This project is about the use of database systems and applying an interface to that database.
                    <br>This project is meant for educational purposes and is not designed for anything else but a school project. 
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                    <br>Laboriosam placeat voluptatem iusto! 
                    Explicabo saepe est voluptatibus porro dicta. Culpa, voluptates?</p>
            </div>
            <div class="about-col">
                <img src="images/database.jpg" alt="">
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