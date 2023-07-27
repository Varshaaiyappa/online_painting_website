<?php
include 'config.php';
if(isset($_POST['submit'])){
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){
      $message[] = 'user exist!';
   }
    if($pass && $cpass && $email && $name == ""){
        $message[] = 'enter the passwords';
     }
      if($pass != $pass){
         $message[] = 'enter your current password';
      }
         if($pass == $cpass){
            $message[] = 'enter your new password matches the old one';
         }
            if($pass != $cpass){
         mysqli_query($conn, "INSERT INTO `users`( password) VALUES('$cpass')") or die('query failed');
         $message[] = 'password changed  successfully!';
         // header('location:login.php');
      }
   }
   if(isset($_POST['name'])){   $name = mysqli_real_escape_string($conn, $_POST['name']);
   }else{
      $name='';
   }
   
   if(isset($_POST['password'])){   $pass = mysqli_real_escape_string($conn, $_POST['password']);
   }else{
      $pass='';
   }
                  $uppercase = preg_match('@[A-Z]@', $pass);
               $lowercase = preg_match('@[a-z]@', $pass);
               $number    = preg_match('@[0-9]@', $pass);
               $specialChars = preg_match('@[^\w]@', $pass);
               if (!preg_match("/^[a-zA-Z-' ]*$/",$name) || strlen($name)<=0){
                  $message[]='Only letters and white space allowed for Name';
              }
              elseif(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($pass) < 8) {
               $message[]='Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
               // echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
            }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="user_styles.css">
   <link rel="icon" type="image/x-icon" href="logo.png">
</head>
<body class="reset_pass">
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
 <div class="form-container">
   <form action="" method="post">
      <h3>RESET PASSWORD</h3>
      <input type="text" name="name" placeholder="enter your name" required class="box">
      <input type="email" name="email" placeholder="enter your email" required class="box">
      <input type="password" name="password" placeholder="enter your old password" required class="box">
      <input type="password" name="cpassword" placeholder="enter  your new password" required class="box">
      <input type="submit" name="submit" value="SUBMIT" class="btn">
      <p>go back<a href="login.php">login now</a></p>
   </form>
</div>
</body>
</html>