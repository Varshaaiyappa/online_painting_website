<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gallery</title>
    <link rel="stylesheet" href="gallery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/x-icon" href="logo.png">
</head>
<body>
<?php

include 'user_header.php';?>
<div class="heading">
   <h3>GALLERY</h3>
   <p> <a href="productpage.php">home</a> / Gallery </p>
</div>
    <!--Gallery-->

    <div class="gallery anim">

        <div class="gallery_box">

            <div class="gallery_image">
                <img src="product1.jpg">
            </div>

            <div class="gallery_image">
                <img src="product2.jpg">
            </div>

            <div class="gallery_image">
                <img src="product8.jpg">
            </div>

            <div class="gallery_image">
                <img src="product5.jpg">
            </div>

            <div class="gallery_image">
                <img src="product9.jpg">
            </div>

            <div class="gallery_image">
                <img src="product10.jpg">
            </div>

            <div class="gallery_image">
                <img src="prouduct3.jpg">
            </div>

            <div class="gallery_image">
                <img src="product12.jpg">
            </div>

            <div class="gallery_image">
                <img src="product13.jpg">
            </div>

            <div class="gallery_image">
                <img src="product16.jpg">
            </div>

            <div class="gallery_image">
                <img src="product15.jpg">
            </div>
            <div class="gallery_image">
                <img src="product17.jpg">
            </div>

             
        </div>

    </div>




    <!--Footer-->

   
   
</body>
</html>