<?php
session_start();

    include("login/connection.php");
    include("login/functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $user_name=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT * 
       from user_account 
       where username='".$user_name."'
       limit 1";

       $result=mysqli_query($conn, $sql);

       if($result){
            if($result && mysqli_num_rows($result) > 0){

                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['password'] === $password){

                    $_SESSION['username'] = $user_data['username'];
                    header("Location: project_user.php");
                    die;

                }
            }
       }
       echo "Wrong User or Password";
}

?>

<?php include('templates/head.php'); ?>

<body>
    <section class="header">
        <?php include('templates/navbar.php'); ?>

        <div class="intro">
            <h1>Login</h1>
            <div class="login-container">
                <form method="POST" action="#">
                    <div class="form_input">
                        <input type="text" name="username" placeholder="Enter your username"/>
                    </div>
                    <div class="form_input">
                        <input type="password" name="password" placeholder="Enter your password"/>
                    </div>
                    <input type="submit" name="submit" value="LOGIN" class="btn-login"/><br><br>
                    <a href="signup.php">Click to Signup</a>
                </form>
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