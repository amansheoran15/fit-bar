<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="about_us.css">
    <script src="https://kit.fontawesome.com/8de4607864.js" crossorigin="anonymous"></script>
    <title>About Us-fit.bar</title>
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    >
</head>
<body>
  <?php include "navbar.php"; ?>

  <div class="header-image">
      <div class="header-head">
          <h1>ABOUT US</h1></div>
  </div>

  <section id="about-container">
    <div id="about-text">
      <span id="about-heading">
        <h4>OUR STORY</h4>
        <h1>Welcome to <span id="fitbar"></span></h1>
      </span>

      <div id="about-text-content">
      Fit Bar was founded in 2019 as a family owned and operated business. The gym founders didn't want it to be just a fitness centre with weights and machines but to be the best in the industry. Hence our mission is to provide you with a total fitness experience  designed to help you reach your goals. We believe in encouraging , challenging , supporting , learning and growing  to be the best.
      </div>
    </div>
    <div id="about-image">
<!--        <img src="static/IMG_7306.HEIC.jpg" class="about-img">-->

    </div>
  </section>

  <section id="trainers">
      <div class="heading">
          OUR TRAINERS
      </div>

      <div id="trainers-div">
          <div class="trainers-div-card">
              <div class="trainer-img">
                  <img src="#">
              </div>
              <div class="trainer-name">
                  Ravi Kumar
              </div>
              <div class="trainer-degree">
                  <ul>
                      <li>Degree</li>
                      <li>Degree</li>
                      <li>Degree</li>
                      <li>Degree</li>
                      <li>Degree</li>
                  </ul>
              </div>
          </div>

          <div class="trainers-div-card">
              <div class="trainer-img">
                  <img src="#">
              </div>
              <div class="trainer-name">
                  Karan Soni
              </div>
              <div class="trainer-degree">
                  <ul>
                      <li>Degree</li>
                      <li>Degree</li>
                      <li>Degree</li>
                      <li>Degree</li>
                      <li>Degree</li>
                  </ul>
              </div>
          </div>

          <div class="trainers-div-card">
              <div class="trainer-img">
                  <img src="#">
              </div>
              <div class="trainer-name">
                  Salman
              </div>
              <div class="trainer-degree">
                  <ul>
                      <li>Degree</li>
                      <li>Degree</li>
                      <li>Degree</li>
                      <li>Degree</li>
                      <li>Degree</li>
                  </ul>
              </div>
          </div>

          <div class="trainers-div-card">
              <div class="trainer-img">
                  <img src="#">
              </div>
              <div class="trainer-name">
                  Deepak
              </div>
              <div class="trainer-degree">
                  <ul>
                      <li>Degree</li>
                      <li>Degree</li>
                      <li>Degree</li>
                      <li>Degree</li>
                      <li>Degree</li>
                  </ul>
              </div>
          </div>

      </div>
  </section>

  <section id="join">
      <div id="join-image">
<!--        <img src="static/benefits.png">-->
      </div>
      <div id="join-content">
          <div id="join-content-heading">
              If you had a bad day, don’t worry. Make it better by going to gym!
          </div>

          <div id="join-content-content">
              <div id="facilities">
                  <i class="fas fa-arrow-right"></i>
                  <span>Zumba</span><br>
                  <i class="fas fa-arrow-right"></i>
                  <span>Strength & Conditioning</span><br>
                  <i class="fas fa-arrow-right"></i>
                  <span>MMA</span><br>
                  <i class="fas fa-arrow-right"></i>
                  <span>HIIT</span><br>
                  <i class="fas fa-arrow-right"></i>
                  <span>Yoga</span><br>
                  <i class="fas fa-arrow-right"></i>
                  <span>Boxing</span><br>

              </div>
              <div id="benefit">
                  Keep your muscles and bones strong and improve your breathing. By working out, lower your risk of type 2 diabetes…
              </div>
          </div>

          <div id="buttons">
              <a href="contact.php#help" ><button class="join-button">JOIN US</button></a>
              <a href="membership.php" ><button class="join-button" id="">VIEW PLANS</button></a>
          </div>
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


  <script src="jquery-3.6.0.js"></script>
  <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
  <script src="about_us.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
          crossorigin="anonymous"></script>


</body>
</html>