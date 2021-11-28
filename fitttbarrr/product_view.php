
<?php
    require_once("merchandise_component.php");
    require_once("merchandise_database.php");
    //start session
    session_start();
    //create instance of Create_db class
    
   
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
    <link rel="stylesheet" href="product_view.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

    <!-- font-awesome -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/8de4607864.js" crossorigin="anonymous"></script>

    <title>Product view</title>
</head>

<body>
    <?php
    
    require_once("merchandise_header.php");
    $prod_id=$_SESSION['view_id'];
    $database=new Create_db("productdb","producttb");
    $result=$database->getdata();
                    while($rows=mysqli_fetch_assoc($result)){
                            if($rows['id']==$prod_id){
                                view_product($rows['product_name'],$rows['product_image'],$rows['product_price'],$rows['product_price2'],$rows['product_info']);
                                
                            }
                        
                    }
    ?>
    

    
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