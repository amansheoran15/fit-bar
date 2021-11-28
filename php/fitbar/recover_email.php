<?php
    session_start();
   
    if(isset($_POST['email'])){
        

    include "dbconnect.php";
    
     
    $input=$_POST['email'];
    // $exists=false;
    //check if username already exixsts
    $existsql="SELECT * FROM `users` WHERE (`email`='$input' OR `username`='$input')";
    $result=mysqli_query($conn,$existsql);
    $numExistrows= mysqli_num_rows($result);
    
    
    if($numExistrows>0){
        while($row=mysqli_fetch_assoc($result)){
            $oldemail= $row['email'];
        }
        $token=bin2hex(random_bytes(50));
        include "dbconnect.php";
        $sql = "INSERT INTO `passreset` (`id`, `email`, `token`) VALUES ('', '$oldemail', '$token');";
        $resultx= mysqli_query($conn,$sql);
        if($resultx){
            $to_email = "$oldemail";
            $subject = "Simple Email Test via PHP";
            $credits="All rights are reserved | Techno Smarter "; 
            $body = "Your password reset link <br> http://localhost/fitbar/password_reset.php?token=".$token." <br> Reset your password with this link .Click or open in new tab<br><br> <br> <br> <center>".$credits."</center>";
            $headers = "From: vikramanantsingh2908@gmail.com";
 
            if (mail($to_email, $subject, $body, $headers)) {
                
                echo '<div class="alert alert-success alert-dismissible fade show m-0" role="alert">
        <strong>Hey!</strong>Updation Email successfully sent to '.$to_email.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
            } else {
                
                echo '<div class="alert alert-danger alert-dismissible fade show m-0" role="alert">
                <strong>Hey!</strong>Email sending failed
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
//             $FromName="Fitbar";
//             $FromEmail="no_reply@Fitbar.com";
//             $ReplyTo="asthasingh7295@gmail.com";
//             $credits="All rights are reserved | Techno Smarter "; 
//             $headers  = "MIME-Version: 1.0\n";
//             $headers .= "Content-type: text/html; charset=iso-8859-1\n";
//             $headers .= "From: ".$FromName." <".$FromEmail.">\n";
//             $headers .= "Reply-To: ".$ReplyTo."\n";
//             $headers .= "X-Sender: <".$FromEmail.">\n";
//             $headers .= "X-Mailer: PHP\n"; 
//             $headers .= "X-Priority: 1\n"; 
//             $headers .= "Return-Path: <".$FromEmail.">\n"; 
//             $subject="You have received password reset email"; 
//             $msg="Your password reset link <br> http://localhost/fitbar/password_reset.php?token=".$token." <br> Reset your password with this link .Click or open in new tab<br><br> <br> <br> <center>".$credits."</center>"; 
//     if(mail($oldemail, $subject, $msg, $headers,'-f'.$FromEmail) ){
//     echo "sent";
          
//     } else {
        
//    echo "not sent";
//     } 
        }
    }
    else{
        echo '<div class="alert alert-danger alert-dismissible fade show m-0" role="alert">
            <strong>Hey!</strong> Email or Username not found.
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

    <title>Recover Email</title>
 </head>
  <body>
   
    

    <div class="container">
    <h2 class="text-center">Recover Your Account</h2>
        <form action="recover_email.php" method="post">
  
  <div class="mb-3 w-50 mx-auto" style="margin-top : 50px;">
    <label for="email" class="form-label">Email or Username</label>
    <input type="text" maxlength="255" class="form-control w-100 " id="email" name="email" aria-describedby="emailHelp" required>
    
  
  
  
  <button type="submit" class="btn btn-primary p-50 m-30" style="margin-top : 20px;">Send Mail</button>

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