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
<?php
    include "navbar.php";
    ?>

  <div class="header-image">
      <div class="header-head">
          <h1>ABOUT US</h1></div>
  </div>

  <section id="about-container">
    <div id="about-text">
      <span id="about-heading">
        <h4>About Our Gym </h4>
        <h1>Welcome to <span id="fitbar">fit.bar</span></h1>
      </span>

      <div id="about-text-content">
          Aenean dignissim pellentesque felis. Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam consequat. Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcuc ras consequat. Aenean dignissim pellentesque felis. Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam consequat. Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetraa
      </div>
    </div>
    <div id="about-image">
<!--        <img src="static/IMG_7306.HEIC.jpg" class="about-img">-->

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
              <button class="join-button">JOIN US</button>
              <button class="join-button">VIEW PLANS</button>
          </div>
      </div>

  </section>

  <footer>
      <div id="footer-heading" class="section-heading">
          <i class="fas fa-map-signs"></i>
          <span>Reach Us</span>
      </div>

      <div class="footer-content">
          <div class="suggestions-form">
              <form>
                  <div class="suggestions-form-field">
                      <!--                    <label for="email-id">Email-ID: </label>-->
                      <input type="email" placeholder="Your email" id="email-id" name="email" required>
                  </div>

                  <div class="suggestions-form-field">
                      <!--                    <label for="suggestion-box">Suggestions: </label>-->
                      <textarea id="suggestion-box" placeholder="Suggestions" name="suggestions" required></textarea>
                  </div>

                  <button type="submit">Submit</button>

              </form>
          </div>

          <div id="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3485.018004242467!2d75.7421682510219!3d29.13465938213523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391233ced58502c5%3A0xc5468fa3ad518bc1!2sFit%20bar!5e0!3m2!1sen!2sin!4v1632745553951!5m2!1sen!2sin"
                      width="300" height="300" style="border:1px;" allowfullscreen="" loading="lazy"></iframe>
              <div class="contact-info">
                <span class="address">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>51s, Model Town, Hisar, Haryana</span>
                </span>
                  <span class="address">
                    <i class="fas fa-phone"></i>
                    <span>+91 85268 88889</span>
                </span>
                  <span class="address">
                    <i class="fas fa-envelope"></i>
                    <span>fitbar@gmail.com</span>
                </span>
              </div>
          </div>
      </div>

      <div class="social-media">
          <a href="https://www.instagram.com/fit.bar1/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="mailto:fit.bar08@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a>
          <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
      </div>
  </footer>


  <script src="jquery-3.6.0.js"></script>
  <script src="about_us.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
          crossorigin="anonymous"></script>


</body>
</html>