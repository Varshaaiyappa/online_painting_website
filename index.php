<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art From Heart</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <script type="text/javascript" src="script.js"></script>
</head>

<body>
    <header>
        <div class="main">
            <ul class="navbar">
                <ul class="logotext">
                    <li class="name" id="logoname"><a href="#" class="logo"> <img src="logo.png"
                                alt="logo">&nbsp;<strong>
                                ART
                                FROM HEART</strong></a>
                    </li>
                </ul>

                <li><a><button class="login-class"
                            onclick="document.getElementById('id01').style.display='block'">LOGIN</button></a></li>
                <li><a href="question.html"><i class="bi bi-question-circle" style="color: beige;"></i></a></li>
                <li><a href="login.php">shop</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#service">Services</a></li>
                <li><a href="contact.php">Contact us</a></li>
                <li><a href="#newsletter">newsletter</a></li>
            </ul>
        </div>
    </header>
    <div class="banner">
        <video width="1280" height="720" autoplay muted loop poster="video.jpg" class="back-video" id="videobg">
            <!-- <source src="https://thumbs.gfycat.com/ConsiderateExhaustedCirriped-mobile.mp4" type="video/mp4"> -->
            <source src="ConsiderateExhaustedCirriped-mobile.mp4" type="video/mp4">
        </video>
        <div class="text-box">
            <h1>WELCOME</h1>
        </div>
        <div class="text-box1">
            <h6>To the world of creative , abstract , aesthetic paintings</h6>
            <div>
                <button class="explorebutton" onclick="redirect()">Explore</button>
            </div>
        </div>
    </div>
    <div class="heading">
        <h1>ABOUT US</h1>
    </div>
    <section class="about-us" id="about">
        <img src="about_us.jpg">
        <div class="content">
            <h2>"Frame your world with artistry and style!"</h2>
            <p>At ART FROM HEART, we curate an extensive range of paintings from renowned artists and emerging talents,
                all meticulously selected to ignite your imagination and evoke a profound connection with each piece.
                Whether you're a seasoned art aficionado or a newcomer to the art scene, our gallery offers a rich
                tapestry of styles, genres, and subjects that will captivate and inspire you.<br><br>

                Step into our virtual gallery space, where every stroke of the brush tells a story. From mesmerizing
                landscapes that transport you to distant lands to striking portraits that reveal the depths of the human
                soul, our collection encompasses a myriad of artistic expressions. Immerse yourself in the vibrant
                colors, intricate details, and masterful techniques that bring these paintings to life. </p>
            <button class="read-more-btn" onclick="redirect1()">Read More</button>
        </div>
    </section>
    <section class="our_services" id="service">
        <div class="row">
            <h2 class="section-heading">Our Services</h2>
        </div>
        <div class="row">
            <div class="column">
                <div class="card">
                    <div class="icon-wrapper">
                        <i class="ri-medal-line"></i>
                    </div>
                    <h3 class="service_head">QUALITY ASSURED PRODUCTS</h3>
                    <p class="service_para">
                        Our gallery offers quality assured paintings, ensuring exceptional craftsmanship and artistic
                        excellence
                    </p>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="icon-wrapper">
                        <i class="bx bxs-truck"></i>
                    </div>
                    <h3 class="service_head">SHIPPING AND RETURNS</h3>
                    <p class="service_para">
                        we offer secure packaging and shipping services to ensure the safe transport of purchased
                        artworks. you can return artworks if not satisfied and receive refunds or exchanges as per the
                        policy.
                    </p>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="icon-wrapper">
                        <i class="ri-customer-service-2-fill"></i>
                    </div>
                    <h3 class="service_head">24/7 CUSTOMER SUPPORT</h3>
                    <p class="service_para">
                        We provide 24/7 customer services through mail and phone service.our staff would be delightful
                        to sort your queries out
                    </p>
                </div>
            </div>
        </div>
    </section>
   
    <!-- modal box -->

    <div id="id01" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'" class="close"
            title="Close Modal">&times;</span>
        <form class="modal-content">
            <div class="container3">
                <h1>Hello , user!!</h1><br>
                <p>please select your role </p><br>

                <div class="clearfix">
                    <button type="button" class="cancelbtn" onclick=" redirect3()">ADMIN</button>
                    <button type="button" class="deletebtn" onclick=" redirect2()">USER</button>
                </div>
            </div>
        </form>
    </div>
    <!-- newsletter -->
    <section id="newsletter">
        <div class="newstext">
            <h4>Signup for newsletters</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers</span></p>
        </div>
        <div class="form3">
            <input type="text" placeholder="Your email address">
            <button class="normal">subscribe</button>
        </div>
    </section>
    <footer>
        <div class=”footer-content”>
            <h3>&nbsp; ART FROM HEART</h3><br>
            <p>phone: 7293199892 mail at:artfromheart@gmail.com</p>
        </div>
        <div class=”footer-bottom”>
            <p>copyright &copy;2023 <a href=”#”>artfromheart</a> </p>
        </div>
    </footer>
</body>

</html>