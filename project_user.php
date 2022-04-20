<?php
session_start();

    include("login/connection.php");
    include("login/functions.php");

    $user_data = check_login($conn);

    $name=$user_data['username'];

 //write query
 $sql = "SELECT username, first_name, last_name, date_created, email, guild_name, job_name
from user_account, guild, job
where user_account.guild_id=guild.guild_id
AND user_account.job_id=job.job_id
AND user_account.username='".$name."'";

//make query and get result
$result = mysqli_query($conn, $sql);

//fetch the resulting rows as an array
$acc = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);

//purchase query
$sql2 = "SELECT purchase_date, item_name, price
from user_account, purchase, item
where user_account.user_id=purchase.user_id 
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
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

            <!--
            <div class="buy-col">
                <a class="buy" href="project_buy.php">Buy</a>
            </div>
            -->
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
        <div class="u-row">
            <div class="u-col">
                <h4>Guild:</h4>
                <?php foreach($acc as $info){ ?>
                    <p><?php echo htmlspecialchars($info['guild_name']);?></p>
                <?php } ?>
            </div>
        </div>
        <div class="u-row">
            <div class="u-col">
                <h4>Job:</h4>
                <?php foreach($acc as $info){ ?>
                    <p><?php echo htmlspecialchars($info['job_name']);?></p>
                <?php } ?>
            </div>
        </div>

    </section>
    
    <div class="acct-header">
        <h3>Purchase History</h3>
    </div>

    <section class="user-section">
        <div class="user-container">
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
                            <p><?php echo htmlspecialchars($pur['price']);?> gold</p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>

    <!-- Footer -->

    <?php include('templates/footer.php'); ?>


</body>
</html>