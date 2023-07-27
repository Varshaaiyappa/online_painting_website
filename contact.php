<?php
include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];
if (!isset($user_id)) {
   header('location:login.php');
}
function test_input($data){
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}   

if (isset($_POST['send'])) {

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $validname = test_input($_POST["name"]);
$validemail = test_input($_POST["email"]);

   $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

   if (mysqli_num_rows($select_message) > 0) {
      $message[] = 'message sent already!';
   } elseif(!filter_var($validemail, FILTER_VALIDATE_EMAIL)){
      $message[] = 'Invalid Email !';
   }elseif(!preg_match("/^[a-zA-Z-' ]*$/",$validname)){
      $message[] = "Invalid Name Only letters and white space allowed";
   }elseif(strlen($number)!=10){
      $message[] = 'Invalid Number,Enter 10 digits only !';
   }else{

      mysqli_query($conn, "INSERT INTO `message`(user_id, name, email, number, message) VALUES('$user_id', '$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }
}
?>
<html>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="user_style.css">
   <link rel="icon" type="image/x-icon" href="logo.png">
</head>
<body class="cont_body">
   <?php include 'user_header.php'; ?>
   <div class="heading">
      <h3>contact us</h3>
      <p> <a href="productpage.php">home</a> / contact </p>
   </div>
   <section class="contact">
      <form action="" method="post">
         <h3>say something!</h3>
         <input type="text" name="name" required placeholder="enter your name" class="box">
         <input type="email" name="email" required placeholder="enter your email" class="box">
         <input type="number" name="number" required placeholder="enter your number" class="box">
         <textarea name="message" class="box" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
         <input type="submit" value="send message" name="send" class="btn">
      </form>
   </section>
   <?php include 'footer.php'; ?>
   <script src="script.js"></script>
</body>
</html>