<?php
session_start();

    include("login/connection.php");
    include("login/functions.php");

    $user_data = check_login($conn);

    $name=$user_data['username'];

 //write query
 $sql = "SELECT username, first_name, last_name, date_created, email
from user_account
where user_account.username='".$name."'";

//make query and get result
$result = mysqli_query($conn, $sql);

//fetch the resulting rows as an array
$acc = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);

//purchase query
$sql2 = "SELECT purchase_date, item_name, price
from user_account, user_purchase, purchase, item
where user_account.user_id=user_purchase.user_id 
and user_purchase.purchase_id=purchase.purchase_id
and item.item_id=purchase.item_id
and user_account.username='".$name."'";

//make query and get result
$result2 = mysqli_query($conn, $sql2);

//fetch the resulting rows as an array
$purs = mysqli_fetch_all($result2, MYSQLI_ASSOC);

mysqli_free_result($result2);

//close connection
mysqli_close($conn);

?>

<?php include('templates/head.php'); ?>
<body>
    <section class="user-header">
        <div class="logout-section">
            <a class="logout" href="logout.php">Logout</a>
        </div>
        <div class="user-intro">
            <h1>Welcome, <?php echo $user_data['username'];  ?></h1>
        </div>

    </section>

    <div class="acct-header">
        <h3>Account Information</h3>
    </div>

    <section class="user-section">
        <div class="u-row">
            <div class="u-col">
                <h4>Username:</h4>
                <?php foreach($acc as $info){ ?>
                    <p><?php echo htmlspecialchars($info['username']);?></p>
                <?php } ?>
            </div>
        </div>
        <div class="u-row">
            <div class="u-col">
                <h4>Name:</h4>
                <?php foreach($acc as $info){ ?>
                    <p><?php echo htmlspecialchars($info['first_name']);?> <?php echo htmlspecialchars($info['last_name']);?></p>
                <?php } ?>
            </div>
        </div>
        <div class="u-row">
            <div class="u-col">
                <h4>Email:</h4>
                <?php foreach($acc as $info){ ?>
                    <p><?php echo htmlspecialchars($info['email']);?></p>
                <?php } ?>
            </div>
        </div>
        <div class="u-row">
            <div class="u-col">
                <h4>Date Created:</h4>
                <?php foreach($acc as $info){ ?>
                    <p><?php echo htmlspecialchars($info['date_created']);?></p>
                <?php } ?>
            </div>
        </div>

    </section>
    
    <div>
        <h3>Purchase History</h3>
    </div>

    <section class="i-container">
        <div class="i-row">
            <div class="i-col">
                    <h4>Date Purchased</h4>
            </div>
            <div class="i-col">
                    <h4>Item</h4>
            </div>
            <div class="i-col">
                    <h4>Price</h4>
            </div>
        </div>
        <?php foreach($purs as $pur){ ?>
            <div class="i-row">
                <div class="i-col">
                        <p><?php echo htmlspecialchars($pur['purchase_date']);?></p>
                </div>
                <div class="i-col">
                        <p><?php echo htmlspecialchars($pur['item_name']);?></p>
                </div>
                <div class="i-col">
                        <p><?php echo htmlspecialchars($pur['price']);?></p>
                </div>
            </div>
        <?php } ?>
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