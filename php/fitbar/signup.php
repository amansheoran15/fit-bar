<?php
    session_start();
    $showalert=false;
    $showerror=false;
    if(isset($_POST['email'])){
        

    include "dbconnect.php";
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $email=$_POST['email'];
    // $exists=false;
    //check if username already exixsts
    $existsql="SELECT * FROM `users` WHERE username='$username'";
    $result=mysqli_query($conn,$existsql);
    $numExistrows= mysqli_num_rows($result);
    //check if email id already exixsts
    $existsql2="SELECT * FROM `users` WHERE email='$email'";
    $result2=mysqli_query($conn,$existsql2);
    $numExistrows2= mysqli_num_rows($result2);
    if($numExistrows>0){
        // $exists=true;
        $showerror="Username already taken.";
        $_SESSION['error']=$showerror;
        header("location: merchandise.php");
    }
     
     else if($numExistrows2>0){
         // $exists=true;
         $showerror="Email aleady exists.";
         $_SESSION['error']= $showerror;
         header("location: merchandise.php");
     }
    else{

    if($password==$cpassword){
        $hash=password_hash($password, PASSWORD_DEFAULT);
        $sql="INSERT INTO `users` (  `password`,`username`,`email`, `dt`) VALUES ( '$hash', '$username','$email', current_timestamp())";
        $result=mysqli_query($conn,$sql);
        if($result){
        $showalert=true;
        $_SESSION['showalert']=true;
        header("location: merchandise.php");
        }
    }
    else{
        $showerror="Passwords do not match";
        $_SESSION['error']=$showerror;
        header("location: merchandise.php");
    }

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

    <title>Signup</title>
 </head>
  <body>
   
    

    <div class="container">
    <h2 class="text-center">Signup</h2>
        <form action="signup.php" method="post">
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" maxlength="50" class="form-control" id="user" name="username" aria-describedby="emailHelp" required>
    
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" maxlength="40" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
    
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" maxlength="23" class="form-control" name="password" id="pass" required>
  </div>
  <div class="mb-3">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" maxlength="23" class="form-control" id="cpassword" name="cpassword" required>
    <div id="emailHelp" class="form-text">Make sure to type the same password.</div>
  </div>
  
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