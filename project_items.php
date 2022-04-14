<?php
session_start();

 include("connection.php");
 include("functions.php");

 $user_data = check_login($conn);

 //write query for all item
 $sql = 'SELECT name, item_name, description, rarity, price  
    FROM item, item_category, category
    WHERE item.item_id=item_category.item_id AND category.category_id=item_category.category_id';

 //make query and get result
 $result = mysqli_query($conn, $sql);

 //fetch the resulting rows as an array
 $items = mysqli_fetch_all($result, MYSQLI_ASSOC);

 mysqli_free_result($result);

 //close connection
 mysqli_close($conn);

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
        <?php include('templates/navbar.php'); ?>

        <div class="about-intro">
            <h1>Items</h1>
        </div>

    </section>

    <section class="item-section">

        <div class="i-container">
            <div class="i-row">
                <div class="i-col">
                    <h4>Category</h4>
                </div>
                <div class="i-col">
                    <h4>Name</h4>
                </div>
                <div class="i-col">
                    <h4>Description</h4>
                </div>
                <div class="i-col">
                    <h4>Rarity</h4>
                </div>
                <div class="i-col">
                    <h4>Price</h4>
                </div>
            </div>
            <?php foreach($items as $item){ ?>
                <div class="i-row">

                    <div class="i-col">
                        <p><?php echo htmlspecialchars($item['name']); ?></p>
                    </div>
                    <div class="i-col">
                        <p><?php echo htmlspecialchars($item['item_name']); ?></p>
                    </div>
                    <div class="i-col">
                        <p><?php echo htmlspecialchars($item['description']); ?></p>
                    </div>
                    <div class="i-col">
                        <p><?php echo htmlspecialchars($item['rarity']); ?></p>
                    </div>
                    <div class="i-col">
                        <p><?php echo htmlspecialchars($item['price']) , ' gold'; ?></p>
                    </div>

                </div>
            <?php } ?>
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