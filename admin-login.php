<?php
$host="localhost";
$user="root";
$password="";
$db="database123";

session_start();

$conn = mysqli_connect($host,$user, $password,$db);
if (!$conn) {
    die("Connection failed: ");
  }
  if ($_SERVER["REQUEST_METHOD"]=="POST") 
  {
$username=$_POST["username"];
$pswd=$_POST["pswd"];

$sql="select * from admin_login where username='".$username."'AND 
pswd='".$pswd."'";

$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

if(isset($row)){
    if($row["usertype"]=="admin")
    {
        $_SESSION["username"]=$username;
         header("location:admin_home.php");
        
    }
    }else{
        echo '<script>alert("wrong username or password check crediantials")</script>';
    }
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>admin login page</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="icon" type="image/x-icon" href="logo.png">
</head>
<body class="admin-login">
    <div class="banner">
        <video autoplay muted loop poster="video.jpg" class="back-video" id="videobg">
            <source src="admin_loginvd.mp4" type="video/mp4">
        </video>
        </div>

<div class="formContent blur"> <img src="Avatar-Profile-Vector.png" class="avatarImg">
    <h2>Admin Login Form</h2>
    <form action ="#" method="POST">
    <label>username</label>
    <input type="text" name="username" placeholder="Enter admin@yourname" required>
    <label>Password</label>
    <input type="password" name="pswd" placeholder="Enter Password" required>
    <input type="submit" name="submit" value="Login">
    
</form>
</div>
</body>
</html> 