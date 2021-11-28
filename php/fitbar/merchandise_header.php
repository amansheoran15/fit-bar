
<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin=true;
}
else{
  $loggedin=false;
}
echo '<header id="header">
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <a href="merchandise.php" class="navbar-brand">
            <h5 class="px-3">
                <i class="fas fa-shopping-basket"></i> Merchandise
            </h5>
        </a>
        ';
        if(!$loggedin){
        echo '
      <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#loginmodal"> <h6> <a class="nav-link text-light" href="#">Login</a></h6> </button>
       
       <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop2"><h6> <a class="nav-link text-light" href="#">Signup</a></h6> </button>
        ';}
if($loggedin){
  echo '<button class="btn btn-dark" ><h6> <a class="nav-link text-light" href="logout.php">Logout</a></h6> </button>';
}
echo'
       <!-- <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup"
        aria-expanded="false"
        aria-label="toggle navigation"
        >
        <span class="navbar-toggler-icon d-none"></span>
        </button> -->

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav" style="width: 100%; display: flex; justify-content: flex-end;">
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-lg-3 cart pr-sm-0 mr-sm-0" >
                    <i class="fas fa-shopping-cart"></i> Cart';
                    if(isset($_SESSION['username'])){
                        $uname = $_SESSION['username'];
                        include "dbconnect.php";
                        $sql="SELECT * FROM `cart` WHERE `username`='$uname'";
                        $result2= mysqli_query($conn,$sql);

                        //Usage of where clause to fetch data from database
                        // echo mysqli_num_rows($result2)."<br>";
                        $num=mysqli_num_rows($result2);
                    }
                        if(isset($_SESSION['cart'])){
                            $count=$num;
                            echo '<span id="cart-count" class="text-danger bg-light">'.$count.'</span>';
                        }
                        else{
                            echo '<span id="cart-count" class="text-danger bg-light">0</span>';
                        }

                        
                        echo '
                    </h5>
                </a>
            </div>

        </div>

    </nav>
</header>';

echo ' <!-- Modal -->
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">';
      
      include "signup.php"; 
      echo '
      </div>
      <div class="modal-footer">
      
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="loginmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered"   >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">';
       include "login.php"; 
       print_r($loggedin);
      echo '
      </div>
      <div class="modal-footer">
      <p class="text-center"><a href="recover_email.php">Forgot Password?</a></p>
        
       
      </div>
    </div>
  </div>
</div>

'

?>