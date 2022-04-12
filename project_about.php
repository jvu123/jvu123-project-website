<?php



?>

<!DOCTYPE html>
<html lang="en">
    
<!--navbar content-->

<?php include('templates/navbar.php'); ?>

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