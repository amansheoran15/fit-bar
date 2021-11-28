<?php
    require_once("merchandise_component.php");
    require_once("merchandise_database.php");
    //start session
    session_start();
    //create instance of Create_db class
    

    if(isset($_POST['add'])){

       // print_r($_POST['product_id']);
       if(isset($_SESSION['username'])){
       if(isset($_SESSION['cart'])){
        // print_r($_SESSION['cart']);
        $item_array_id=array_column($_SESSION['cart'],"product_id");
        if(in_array($_POST['product_id'],$item_array_id)){
            echo '<div class="alert alert-danger alert-dismissible fade show m-0" role="alert">
            <strong>Hey!</strong> Product is already added in the cart.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        else{
            $count=count($_SESSION['cart']);
            $item_array=array(
                'product_id'=>$_POST['product_id']
            );
            $_SESSION['cart'][$count]=$item_array;
            // print_r($_SESSION['cart']);
            include "dbconnect.php";
            $uname = $_SESSION['username'];
            $idd=$_POST['product_id'];
    
            

        $sql = "INSERT INTO `cart` (`username`, `prod_id`, `quantity`) VALUES ('$uname', '$idd', '1');";
        $result= mysqli_query($conn,$sql);
        //check for the data insertion success
        
        }


       }else{
           $item_array=array(
               'product_id'=>$_POST['product_id']
           );

           //create new session variable
           $_SESSION['cart'][0]=$item_array;
        //    print_r($_SESSION['cart']);
        include "dbconnect.php";
        $uname = $_SESSION['username'];
        $idd=$_POST['product_id'];
        $sql = "INSERT INTO `cart` (`username`, `prod_id`, `quantity`) VALUES ('$uname', '$idd', '1');";
        $result= mysqli_query($conn,$sql);
        
       }
    }else{
        echo '<div class="alert alert-danger alert-dismissible fade show m-0" role="alert">
            <strong>Hey!</strong> You need to login first.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
    }
    }

    // if(isset($_POST['view'])){
    //     // print_r($_POST['product_id2']);
    //     $_SESSION['view_id']=$_POST['product_id2'];
    //     print_r($_SESSION['view_id']);
    //     header("location: product_view.php");
    // }

    

    //for sign up
    if(isset($_SESSION['error'])){
        echo '<div class="alert alert-danger  m-0 alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '.$_SESSION['error'].'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button></div>';
        unset( $_SESSION['error']);
        
    }
    if(isset($_SESSION['showalert'])){
    if($_SESSION['showalert']==true){
        echo '<div class="alert alert-success m-0  alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button></div>';
        $_SESSION['showalert']=false;
    }
}

    //for login
    if(isset($_SESSION['loggedincheck'])){
        if($_SESSION['loggedin']==true){
            echo '<div class="alert alert-success m-0  alert-dismissible fade show" role="alert">
            <strong>Success! </strong>'.$_SESSION['username'].' , You have logged in successfuly!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button></div>';
            unset( $_SESSION['loggedincheck']);
        }
        else if($_SESSION['loggedin']==false){
            echo '<div class="alert alert-danger m-0 alert-dismissible fade show" role="alert">
          <strong>Sorry!</strong> invalid Credentials.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button></div>';
          unset( $_SESSION['loggedincheck']);
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

    <title>Merchandise</title>
</head>

<body class="bg-light">
    <?php
    include "navbar.php";
    require_once("merchandise_header.php");
    ?>
    
    <div class="container">
        <div class="row text-center py-5 div">
            <?php
            $database = new Create_db("productdb","producttb");
            $result3 = $database->getdata();
            while($rows=mysqli_fetch_assoc($result3)){
                component($rows['product_name'],$rows['product_price'],$rows['product_image'],$rows['product_price2'],$rows['id'],$rows['rating'],$rows['product_info'],$rows['product_image2'],$rows['product_image3']);
            }
            ?>
            

        </div>
    </div>




<script>
    window.onscroll = function() {scrollFunction()};
 
function scrollFunction() {
  if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
    
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
<script src="jquery-3.6.0.js"></script>
<script src="viewProduct.js"></script>
<!-- for active class in navbar  -->
<!-- <script>
    var element=document.getElementById("home");
    element.classlist.add('active');
    var a=element.classlist();
    for(let i=0;i<a.length;i++){
        console.log(i);
    }
</script> -->

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