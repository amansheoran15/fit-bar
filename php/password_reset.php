<?php
    session_start();
    $_SESSION['pu']=false;
    $token='';
    if(isset($_GET['token'])){
        $token=$_GET['token'];
    }
    // print_r($token);
    
    if(isset($_POST['cpassword'])){
        
        // print_r($token);

    include "dbconnect.php";
    
   
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    if($password==$cpassword){
    include "dbconnect.php";
    $existsql="SELECT * FROM `passreset` WHERE  `token`='$token'";
    $result=mysqli_query($conn,$existsql);
    $numExistrows= mysqli_num_rows($result);
    
    
    if($numExistrows>0){
        while($row=mysqli_fetch_assoc($result)){
            $email= $row['email'];
        }
        $ha=password_hash($_POST['password'], PASSWORD_DEFAULT);
        include "dbconnect.php";
        $sql4="UPDATE `users` SET `password` = '$ha' WHERE `email` = '$email'";
        $result4= mysqli_query($conn,$sql4);
        if($result4){
         
      include "dbconnect.php";
      $sqlxx="DELETE FROM `passreset` WHERE `token` = '$token'";
      $resultxx= mysqli_query($conn,$sqlxx);
      $_SESSION['pu']=true;
      header("location: merchandise.php");
        }
        else{
            echo '<div class="alert alert-danger alert-dismissible fade show m-0" role="alert">
        <strong>Hey!</strong> updation failed.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
        }
    }
    else{
        echo '<div class="alert alert-danger alert-dismissible fade show m-0" role="alert">
        <strong>Hey!</strong> Account not found!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    }
    else{
        echo '<div class="alert alert-danger alert-dismissible fade show m-0" role="alert">
        <strong>Hey!</strong> Passwords do not match.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    
}




?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="merchandise.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

    <!-- font-awesome -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/8de4607864.js" crossorigin="anonymous"></script>

    <title>password_reset</title>
 </head>
  <body>
   
    

    <div class="container">
    <h2 class="text-center">Reset Password</h2>
<form action="" method="post">
 
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" maxlength="23" class="form-control" name="password" id="pass" required>
  </div>
  <div class="mb-3">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" maxlength="23" class="form-control" id="cpassword" name="cpassword" required>
    <div id="emailHelp" class="form-text">Make sure to type the same password.</div>
  </div>
  <input type="hidden" class="pprice" value="<?php$tokenx?>"  name="tok">
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>