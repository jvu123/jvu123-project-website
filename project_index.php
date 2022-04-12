<!DOCTYPE html>
<html lang="en">

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