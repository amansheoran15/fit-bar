<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="contact.css">
    <title>contact</title>

    <!-- font awesome  -->
    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/8de4607864.js" crossorigin="anonymous"></script>
</head>

<body>

<!-- nav bar -->
<?php include "navbar.php"; ?>
<!-- main content  -->
<!-- header image -->
<div class="header-image">
    <div class="header-head">
        <h1>CONTACT</h1>
    </div>
</div>
<div class="first-sec">
    <div class="fs-div" id="web-contact">
        <h5>Contact via the Web</h5>
        <hr style="width: 30%;">
        <br>
        <p>Your questions and comments are
            <br> important to us. Need assistance?
            <br>
            <a href="mailto:fit.bar08@gmail.com"> Send an Email</a>
        </p>
    </div>
    <div class="fs-div">
        <h5>Mailing Address</h5>
        <hr style="width: 30%;">
        <p>fit.bar
            <br>
            51s, Model Town, Hisar
            <br>
            Haryana
        </p>
    </div>
    <div class="fs-div">
        <h5>Membership Services</h5>
        <hr style="width: 30%;">
        <p>Ravi Kumar
            <br> Phone: +91 85268 88889
            <br>
            <a href="mailto:fit.bar08@gmail.com">
                fit.bar08@gmail.com
            </a>
        </p>

    </div>

</div>
<!-- map  -->
<div id="map" class="container-fluid">
    <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4470.820046056346!2d75.74254032841235!3d29.134771408134203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391233ced58502c5%3A0xc5468fa3ad518bc1!2sfit.bar!5e0!3m2!1sen!2sin!4v1633002117048!5m2!1sen!2sin"
            width="1150" height="400" style="border:0;" class="map" allowfullscreen="" loading="lazy"></iframe>
</div>
<!-- help  -->
<div class="help" id="help">
    <h3>How Can We Help?</h3>
    <hr width="100vw">
    <br>
    <p>If you’ve got a question, a comment or just want to talk more about your fitness goals
        <br>
        leave us a message and we’ll be sure to get in touch.
    </p>
    <form action="https://submit-form.com/AmwWcTC2" method="POST">
        <div class="form">
            <div class="part1">
                <div class="p1div">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="Name" required>
                </div>
                <div class="p1div">
                    <label for="mail">Your Email</label>
                    <input type="email" id="mail" name="Email" required>
                </div>
                <div class="p1div">
                    <label for="website">Contact Number</label>
                    <input type="tel" id="website" name="Contact Number" required>
                </div>
            </div>
            <div class="part2">
                <label for="message">Message</label>
                <textarea name="message" id="message" required></textarea>
            </div>
        </div>
        <input type="submit" value="Send Message" id="submitbtn">
    </form>

</div>

<?php include "footer.php"; ?>
<div id="footer-bottom">
          <span id="copyright">
              &copy; Copyright - fit.bar
          </span>

    <span id="social-icons">
              <ul>
                  <li><a href="https://www.instagram.com/fit.bar1/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="mailto:fit.bar08@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a></li>
                  <li><a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
              </ul>
          </span>
</div>

<script src="jquery-3.6.0.js"></script>

<script>
    window.onscroll = function () {
        scrollFunction()
    };


    function scrollFunction() {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {

            document.getElementById("mynav").style.background = "#000000";
        } else {

            document.getElementById("mynav").style.background = "#00000000";
        }
    }
</script>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
-->
</body>

</html>