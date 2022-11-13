<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>


    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php

use starlabsProject\ContactForm;
include('contactForm.php');
$c=new ContactForm();

if(isset($_POST['send'])){
    $c->setFirstName($_POST['firstname']);
    $c->setSurname($_POST['surname']);
    $c->setEmail($_POST['email']);
    $c->setPhone($_POST['phone']);
    $c->setProjectTitle($_POST['projecttitle']);
    $c->setDescription($_POST['descproject']);
    $c->store();
}
?>



<section class="header">

    <a href="home.php" class="logo">ANDA</a>

    <nav class="navbar">

        <a href="resume.php">Resume</a>
        <a href="projects.php">Projects</a>
        <a href="contact.php">Contact</a>
        <img src="images/moon.png" id="icon" alt="">
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>







<div class="allcontact">
    <section class="contactme">

        <h1 class="heading-title"></h1>

        <form method="post" class="contact-form">

            <div class="flex">
                <div class="inputBox">
                    <span>Firstname :</span>
                    <input type="text" placeholder="enter your firstnam" name="firstname">
                </div>
                <div class="inputBox">
                    <span>Lastname :</span>
                    <input type="text" placeholder="enter your lastname" name="surname">
                </div>
                <div class="inputBox">
                    <span>Email :</span>
                    <input type="email" placeholder="enter your email" name="email">
                </div>
                <div class="inputBox">
                    <span>Phone :</span>
                    <input type="number" placeholder="enter your phone number" name="phone">
                </div>
                <div class="inputBox">
                    <span>Project title :</span>
                    <input type="text" placeholder="enter your project title" name="projecttitle">
                </div>
                <div class="inputBox">
                    <span>Project Description</span>
                    <input type="text" placeholder="descripe your project" name="descproject">
                </div>

            </div>

            <input type="submit" value="submit" class="btn" name="send">

        </form>

    </section>
</div>



<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>Quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
            <a href="reserve.php"><i class="fas fa-angle-right"></i> Reserve</a>

        </div>

        <div class="box">
            <h3>Extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"><i class="fas fa-angle-right"></i> About us</a>
            <a href="#"><i class="fas fa-angle-right"></i> Privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
        </div>

        <div class="box">
            <h3>Contact info </h3>
            <a href="#"><i class="fas fa-phone"></i> +38349649828</a>
            <a href="#"><i class="fas fa-envelope"></i> andakadriu20@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i> Fushe Kosove,Kosove</a>


        </div>

        <div class="box">
            <h3>Follow me</h3>
            <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
            <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i>Linkedin</a>
            <a href="#"><i class="fab fa-github"></i>Github</a>
        </div>
    </div>

    <div class="credit">&copy By Anda Kadriu. Proudly created for Starlabs.</div></div>

</section>



<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>