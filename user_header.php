<?php
if (isset($message)) {
    foreach ($message as $message) {
        echo '
      <div class="message">
         <span>' . $message . '</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="user_styles.css">

</head>
<body>
    <?php include 'config.php' ?>
    <header class="header">
        <div class="header-2">
            <div class="flex">
                <a href="productpage.php" class="logo">ART FROM HEART</a>
                <nav class="navbar">
                    <a href="productpage.php">home</a>
                    <a href="index.php">about</a>
                    <a href="shop.php">shop</a>
                    <a href="contact.php">contact</a>
                    <a href="orders.php">orders</a>
                </nav>
                <div class="icons">
                    <div id="menu-btn" class="fas fa-bars"></div>
                    <a href="search_page.php" class="fas fa-search"></a>
                    <div id="user-btn" class="fas fa-user"></div>
                    <?php
                    $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
                    $cart_rows_number = mysqli_num_rows($select_cart_number);
                    ?>
                    <a href="cart.php"> <i class="fas fa-shopping-cart"></i></a>
                </div>
                <div class="user-box">
                    <p>user id: <span><?php echo $_SESSION['user_email']; ?></span></p>
                    <a href="user_logout.php" class="delete-btn">logout</a>
                    <a href="reset.php" class="change-btn">change password</a>
                </div>
            </div>
        </div>

    </header>

</body>

</html>