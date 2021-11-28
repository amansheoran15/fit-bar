<?php
    session_start();
    $showalert=false;
    $showerror="";
    $login=false;
    if(isset($_POST['pass'])){
    include "dbconnect.php";
    $_SESSION['loggedin']=false;
    $username=$_POST['username'];
    $password=$_POST['pass'];
    $hash=password_hash($password, PASSWORD_DEFAULT);
    $sqlx="SELECT * FROM `users` WHERE `username`='$username'";
    $resultx= mysqli_query($conn,$sqlx);
    $numx=mysqli_num_rows($resultx);
    if($numx==1){
      while($row=mysqli_fetch_assoc($resultx)){
        if(password_verify($password,$row['password'])){
          $_SESSION["loggedincheck"]=true;
      $_SESSION["loggedin"]=true;
      $_SESSION['username']=$username;
      $uname = $_SESSION['username'];
                        $sql2="SELECT * FROM `cart` WHERE `username`='$uname'";
                        $result2= mysqli_query($conn,$sql2);

                        //Usage of where clause to fetch data from database
                        echo mysqli_num_rows($result2)."<br>";
                        $num2=mysqli_num_rows($result2);
                        if($num2>0){
                        while($rows=mysqli_fetch_assoc($result2)){

                          if(isset($_SESSION['cart'])){
                            // print_r($_SESSION['cart']);
                            // $item_array_id=array_column($_SESSION['cart'],"product_id");
                            
                            
                                $count=count($_SESSION['cart']);
                                $item_array=array(
                                    'product_id'=>$rows['prod_id']
                                );
                                $_SESSION['cart'][$count]=$item_array;
                                // print_r($_SESSION['cart']);
                                
                            
                            
                    
                    
                           }else{
                               $item_array=array(
                                   'product_id'=>$rows['prod_id']
                               );
                    
                               //create new session variable
                               $_SESSION['cart'][0]=$item_array;
                            //    print_r($_SESSION['cart']);
                            
                            
                           }

                        }
                      }
                    header("location: merchandise.php");
        }else{
      $_SESSION["loggedincheck"]=false;
      $_SESSION["loggedin"]=false;
      header("location: merchandise.php");
        }
      }
      
    
    }
    else{
      $_SESSION["loggedincheck"]=false;
      $_SESSION["loggedin"]=false;
      header("location: merchandise.php");
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

    <title>login</title>
 </head>
  <body>
    
  
    <div class="container">
       <h2 class="text-center">Login</h2>
        <form action="login.php" method="post">
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="pass" id="password">
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