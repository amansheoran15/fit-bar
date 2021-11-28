<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

    <!-- font-awesome -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/8de4607864.js" crossorigin="anonymous"></script>

    <title>fit.bar</title>
</head>

<body>
<?php include "navbar.php"; ?>

<!-- slider -->
<section class="slider d-flex w-100 wh"
         style="justify-content: center; align-items: center; width: 100% !important; height: 40% !important;">
    <div id="carouselExampleIndicators" class="carousel slide w-75 wh" data-bs-ride="carousel"
         data-bs-interval="3000" style="width: 100% !important; height: 40% !important;">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                    aria-label="Slide 6"></button>
        </div>
        <div class="carousel-inner  wh" style="margin: 0; width: 100vw !important; height: 60vh !important;">
            <div class="carousel-item active" style="height: 60vh !important; width: 100vw !important;">
                <img src="static/IMG_7299.HEIC.jpg" class="d-block  imgg" alt="..."
                     style="height: 60vh !important;">
            </div>
            <div class="carousel-item">
                <img src="static/IMG_7302.HEIC.jpg" class="d-block  imgg" alt="...">
            </div>
            <div class="carousel-item">
                <img src="static/IMG_7303.HEIC.jpg" class="d-block  imgg" alt="...">
            </div>
            <div class="carousel-item ">
                <img src="static/IMG_7304.HEIC.jpg" class="d-block  imgg" alt="...">
            </div>
            <div class="carousel-item ">
                <img src="static/IMG_7305.HEIC.jpg" class="d-block  imgg" alt="...">
            </div>
            <div class="carousel-item ">
                <img src="static/IMG_7309.HEIC.jpg" class="d-block  imgg" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<section id="facilities">
    <div class="section-heading">
        <i class="fas fa-anchor"></i>
        <span>Amenities</span>
    </div>
    <div id="facilities-content">
        <div id="zumba" class="facilities-div">
            <div class="facilities-img">
                <img src="static/zumba.jpeg">
            </div>

            <div class="facilities-content">
                <span class="facilities-subhead">Zumba</span>
                <p class="facilities-desc">A fully body aerobic workout, divided into different genres of music
                    providing peaks and troughs of intensity.</p>
            </div>

        </div>
        <div id="s&c" class="facilities-div">
            <div class="facilities-img">
                <img src="static/s&c.jpeg">
            </div>

            <div class="facilities-content">
                <span class="facilities-subhead">S & C</span>
                <p class="facilities-desc">Strength & Conditioning is a combination of compound movements and high
                    intensity interval training that provides lasting fitness and enhanced endurance.</p>
            </div>

        </div>
        <div id="yoga" class="facilities-div">
            <div class="facilities-img">
                <img src="static/yoga.jpeg">
            </div>

            <div class="facilities-content">
                <span class="facilities-subhead">Yoga</span>
                <p class="facilities-desc">Yoga helps in improving self-confidence and balance while gaining a stronger
                    body in the process.</p>
            </div>

        </div>
        <div id="hiit" class="facilities-div">
            <div class="facilities-img">
                <img src="static/hiit.jpeg">
            </div>

            <div class="facilities-content">
                <span class="facilities-subhead">HIIT</span>
                <p class="facilities-desc">HIIT is a training methodology which incorporates high intensity exercises
                    followed by planning intervals repeated over multiple rounds to achieve faster results.</p>
            </div>

        </div>
        <div id="boxing" class="facilities-div">
            <div class="facilities-img">
                <img src="static/boxing.jpeg">
            </div>

            <div class="facilities-content">
                <span class="facilities-subhead">Boxing</span>
                <p class="facilities-desc">A high cardio form of martial arts that not only enhances your strength,
                    cardiovascular and respiratory functioning, but also improves your balance, coordination and
                    reflexes.</p>
            </div>

        </div>
        <div id="mma" class="facilities-div">
            <div class="facilities-img">
                <img src="static/mma.jpeg">
            </div>

            <div class="facilities-content">
                <span class="facilities-subhead">MMA</span>
                <p class="facilities-desc">Training in MMA is guaranteed to improve your level of fitness. MMA fighters
                    are some of the most superior, well-rounded, Olympic-caliber athletes of the day. Living the MMA
                    lifestyle can therefore transform your body, along with your mind and spirit.</p>
            </div>

        </div>
    </div>
</section>

<section id="benefits">
    <div class="benefits-div1">
        <div class="benefits-div" id="reduce-stress">
            <img src="static/calm.png" alt="">
        </div>
        <h4>Reduce Stress</h4>
    </div>
    <div class="benefits-div1">
        <div class="benefits-div" id="Self-confidence">
            <img src="static/confidence.png" alt="">
        </div>
        <h4>Self-Confidence</h4>
    </div>
    <div class="benefits-div1">
        <div class="benefits-div" id="Relaxation">
            <img src="static/exercise.png" alt="">
        </div>
        <h4>Sharpen Memory</h4>
    </div>
    <div class="benefits-div1">
        <div class="benefits-div" id="Alleviate-Anxiety">
            <img src="static/happy.png" alt="">
        </div>
        <h4>More Relaxation</h4>
    </div>
    <div class="benefits-div1">
        <div class="benefits-div" id="Sharpen-Memory">
            <img src="static/memory.png" alt="">
        </div>
        <h4>Alleviate Anxiety</h4>
    </div>

</section>

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


<script>
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {

            document.getElementById("mynav").style.background = "#000000";
            document.getElementById("mynav").style.color = "#FFFFFF";
            var ele = document.getElementsByClassName("nav-link");
            for (var i = 0; i < ele.length; i++) {
                ele[i].style.color = "#FFFFFF";
            }

        } else {

            document.getElementById("mynav").style.background = "#00000000";
            document.getElementById("mynav").style.color = "#FFFFFF";
            var ele = document.getElementsByClassName("nav-link");
            for (var i = 0; i < ele.length; i++) {
                ele[i].style.color = "#FFFFFF";
            }
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