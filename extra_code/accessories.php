<?php
session_start();

include("login/connection.php");
include("login/functions.php");

$user_data = check_login($conn);

$name=$user_data['username'];

 //write query for all item
 $sql = 'SELECT category.name, item_name, description, rarity, price  
    FROM item, item_category, category, shop, shop_item
    WHERE item.item_id=item_category.item_id 
    AND category.category_id=item_category.category_id
    AND shop.shop_id=shop_item.shop_id
    AND item.item_id=shop_item.item_id
    AND shop.shop_id=3';

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
    <title>Accesories</title>
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
                <a class="buy" href="project_village.php">Leave shop</a>
            </div>
        </div>

        <div class="intro">
            <h1>Accesories</h1>
            <p>Welcome to the Accesories Shop!</p>
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

</body>
</html>