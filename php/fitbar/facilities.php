<!doctype html>
<html lang="en" >

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    >
    <link rel="stylesheet" href="facilities.css">
    <title>facilities</title>


</head>

<body>
    <!-- navbar -->
    <?php include "navbar.php"; ?>
    <!-- header image -->
    <div class="header-image">
        <div class="header-head">
            <h1 >FACILITIES</h1>
        </div>
    </div>

    <main class="facility">
        <div class="facility-div odd" id="boxing">
            <div class="img">
                <img src="static/boxingF.jpg" class="image-fluid rounded float-start" alt="..." style=" height: 45vh;">
            </div>

            <div class="facility-content">
                <h1 class="f">Boxing</h1>
                <ul class="facility-ul">
                    <li class="facility-li" >Cardiovascular fitness</li>
                    <li class="facility-li" >Strength and conditioning</li>
                    <li class="facility-li">Discipline and respect</li>
                    <li class="facility-li">Self-defence benefits</li>
                    <li class="facility-li">Mental toughness</li>
                </ul>
            </div>
        </div>
        <div class="facility-div even" id="zumba">
            <div class="img">
                <img src="static/zumbaf.jpg" class="image-fluid rounded float-end " alt="..." style=" height: 45vh;">
            </div>

            <div class="facility-content">
                <h1 class="f">Zumba</h1>
                <ul class="facility-ul">
                    <li class="facility-li">Improved blood pressure</li>
                    <li class="facility-li">Improves your quality of life</li>
                    <li class="facility-li">Adaptable for any fitness level</li>
                    <li class="facility-li">Improves cardiovascular fitness</li>
                    <li class="facility-li">It’s a full-body workout</li>
                </ul>
            </div>
        </div>
        <div class="facility-div odd" id="yoga">
            <div class="img">
                <img src="static/yogaf.jpg" class="image-fluid rounded float-start" alt="..." style=" height: 45vh;">
            </div>

            <div class="facility-content">
                <h1 class="f">Yoga</h1>
                <ul class="facility-ul">
                    <li class="facility-li">Improves Flexibility</li>
                    <li class="facility-li">Supports Joint Health</li>
                    <li class="facility-li">Increases Muscle Tone</li>
                    <li class="facility-li">Increases Self Confidence</li>
                    <li class="facility-li">Reduces Stress</li>
                </ul>
            </div>
        </div>
        <div class="facility-div even" id="s&c">
            <div class="img">
                <img src="static/S&Cf.png" class="image-fluid rounded float-end" alt="..." style=" height: 45vh;">
            </div>

            <div class="facility-content">
                <h1 class="f">S&C</h1>
                <ul class="facility-ul">
                    <li class="facility-li">Helps Builds Muscle Size</li>
                    <li class="facility-li">Improved Endurance</li>
                    <li class="facility-li">Improves Speed</li>
                    <li class="facility-li">Better Posture</li>
                    <li class="facility-li">Raises Your Metabolism</li>
                </ul>
            </div>
        </div>
        <div class="facility-div odd" id="hiit">
            <div class="img">
                <img src="static/hiitf.jpg" class="image-fluid rounded float-start" alt="..." style=" height: 45vh;">
            </div>

            <div class="facility-content">
                <h1 class="f">HIIT</h1>
                <ul class="facility-ul">
                    <li class="facility-li">Burns a Lot of Calories</li>
                    <li class="facility-li">Metabolic Rate Is Higher</li>
                    <li class="facility-li">Helps You Lose Fat</li>
                    <li class="facility-li">Might Gain Muscle</li>
                    <li class="facility-li">Improves Oxygen Consumption</li>
                </ul>
            </div>
        </div>
        <div class="facility-div even" id="mma">
            <div class="img">
                <img src="static/mmaf.jpg" class="image-fluid rounded float-end" alt="..." style=" height: 45vh;">
            </div>

            <div class="facility-content">
                <h1 class="f">MMA</h1>
                <ul class="facility-ul">
                    <li class="facility-li">improves Mental Strength </li>
                    <li class="facility-li">Lower Stress Levels</li>
                    <li class="facility-li">Self Defense</li>
                    <li class="facility-li">Improved Aerobic Fitness</li>
                    <li class="facility-li">Mental toughness</li>
                </ul>
            </div>
        </div>

    </main>

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
    window.onscroll = function() {scrollFunction()};
 
function scrollFunction() {
  if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
    
    document.getElementById("mynav").style.background = "#000000";
    document.getElementById("mynav").style.color = "#FFFFFF" ;
     var ele=document.getElementsByClassName("nav-link");
     for(var i=0;i<ele.length;i++)
     {
         ele[i].style.color="#FFFFFF";
     }

  } else {
   
    document.getElementById("mynav").style.background = "#00000000";
    document.getElementById("mynav").style.color = "#FFFFFF" ;
    var ele=document.getElementsByClassName("nav-link");
     for(var i=0;i<ele.length;i++)
     {
         ele[i].style.color="#FFFFFF";
     }
  }
}
</script>
   



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>

    <script src="jquery-3.6.0.js"></script>
    <script src="facilities.js"></script>
</body>

</html>