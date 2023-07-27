<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="admin_styles.css">
  <title>Document</title>
</head>
<body>
  <header class="header">
    <div class="flex">
      <a href="admin_home.php" class="logo">Admin<span>Panel</span></a>
      <nav class="admin_navbar">
        <a href="admin_home.php">home</a>
        <a href="admin_products.php">products</a>
        <a href="admin_orders.php">orders</a>
        <a href="admin_users.php">users</a>
        <a href="admin_contacts.php">messages</a>
            <div class="admin_icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="user-btn" class="fas fa-user"></div>
      </div>
      <div class="account-box">
        <p>username:<span><?php echo $_SESSION["username"]; ?></span></p>
        <a href="admin_logout.php" class="delete-btn">LOGOUT</a>
      </div>
      </nav>
    </div>
  </header>
</body>
</html>