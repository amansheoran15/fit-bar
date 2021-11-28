
<?php
    require_once("merchandise_component.php");
    require_once("merchandise_database.php");
    //start session
    session_start();
    $database=new Create_db("productdb","producttb");
    $result=$database->getdata();
    while($rows=mysqli_fetch_assoc($result)){
    $_SESSION['quantity'][$rows['id']]=1;
    }
    // $_SESSION['quantity'] = 1;
    //create instance of Create_db class
    $database=new Create_db("productdb","producttb");
    if(isset($_POST["remove"])){
        if($_GET['action']=="remove"){
            foreach($_SESSION['cart'] as $key=>$value){
                if($value['product_id']==$_GET['id']){
                    unset($_SESSION['cart'][$key]);
                    include "dbconnect.php";
                        $uname = $_SESSION['username'];
                        $sql="SELECT * FROM `cart` WHERE `username`='$uname'";
                        $result2= mysqli_query($conn,$sql);

                        //Usage of where clause to fetch data from database
                        // echo mysqli_num_rows($result2)."<br>";
                        $num=mysqli_num_rows($result2);
                        if($num>0){
                        while($row=mysqli_fetch_assoc($result2)){
                            if($row['prod_id']==$_GET['id']){
                                
                                
                                    $iddd=$_GET['id'];
                                    $sql="DELETE FROM `cart` WHERE `prod_id` = '$iddd'";
                                    $result= mysqli_query($conn,$sql);
                                    
                                
                            }
                        }}
                    echo '<div class="alert alert-danger m-0 alert-dismissible fade show" role="alert">
                    <strong>Alert!</strong> Product has been removed successfully.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
                }
            }
        }
    }

    if(isset($_POST['shop'])){
        header("location: merchandise.php");
    }
    if(isset($_POST['buy'])){
        header("location: checkout.php");
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
    <link rel="stylesheet" href="cart.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

    <!-- font-awesome -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/8de4607864.js" crossorigin="anonymous"></script>

    <title>cart</title>
</head>

<body >
    <?php
    include "navbar.php";
    require_once("merchandise_header.php");
    ?>
    <div class="container-fluid">
        <div class="row px-5">
            <div class="col-md-7">
                <div class="shopping-cart">
                    <h6>My Cart</h6>
                    <hr>
                    <?php
                    // print_r("yoyo");
                    $total=0;
                    $countt=0;
                    if(isset($_POST['qty'])){
                        print_r($_POST['qty']);
                        print_r("yoyo");
                        $qty=$_POST['qty'];
                        $pid=$_POST['pid'];
                        $pprice=$_POST['pprice'];
                        
                    }
                    // if(isset($_POST['quant'])){
                    //     $_SESSION['quantity'][$_POST['pid']]=$_POST['quant'];
                    // }
                    if(isset($_POST['quant'])){
                        $uname = $_SESSION['username'];
                        $idd= $_POST['pid'];
                        $qt=$_POST['quant'];
                        include "dbconnect.php";
                        $sql="SELECT * FROM `cart` WHERE `username`='$uname'";
                        $result2= mysqli_query($conn,$sql);

                        //Usage of where clause to fetch data from database
                        // echo mysqli_num_rows($result2)."<br>";
                        $num=mysqli_num_rows($result2);
                        if($num>0){
                        while($row=mysqli_fetch_assoc($result2)){
                            if($row['prod_id']==$idd){
                                $srno=$row['sr'];
                                $sql4="UPDATE `cart` SET `quantity` = '$qt' WHERE `cart`.`sr` = $srno";
                                $result4= mysqli_query($conn,$sql4);
                                
                            }
                        }
                    }

                    }
                    if(isset($_SESSION['cart'])){
                        include "dbconnect.php";
                        $uname = $_SESSION['username'];
                        $sql="SELECT * FROM `cart` WHERE `username`='$uname'";
                        $result2= mysqli_query($conn,$sql);

                        //Usage of where clause to fetch data from database
                        // echo mysqli_num_rows($result2)."<br>";
                        $num=mysqli_num_rows($result2);
                        if($num>0){
                        while($row=mysqli_fetch_assoc($result2)){
                        // echo var_dump($row)."<br>";
                        
                        

                        

                        // $product_id=array_column($_SESSION['cart'],'product_id');
                        $product_id=$row['prod_id'];
                        $quanti = $row['quantity'];
                        $database=new Create_db("productdb","producttb");
                    $result=$database->getdata();
                    while($rows=mysqli_fetch_assoc($result)){
                        
                            if($rows['id']==$product_id){
                                
                                cartElement($rows['product_image'],$rows['product_name'],$rows['product_price'],$rows['id'],$quanti);
                                // print_r($_POST['quant1']);
                                $total=$total+ (int)$rows['product_price']*$quanti;
                                $countt=$countt+$quanti;
                                
                            }
                        
                    }
                }
            }
                    }else{
                        echo "<h5>Your Cart is Empty</h5>";
                    }
                    ?>

                </div>
            </div>
            <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">
                <div class="pt-4">
                    <h6>PRICE DETAILS</h6>
                    <hr>
                    <div class="row price-details">
                        <div class="col-md-12">
                            <?php
                            if(isset($_SESSION['cart'])){
                                echo '<h6>Price('.$countt.' items) &emsp;&emsp;&emsp;&emsp;&ensp; <i class="fa fa-inr"></i> '.$total.' </h6>';
                            }else{
                                echo '<h6>Price(0 items) &emsp;&emsp;<i class="fa fa-inr"></i> '.$total.'</h6>';
                            }
                            ?>
                            <h6>Delivery Charges &emsp;&emsp;&emsp;&ensp;<span class="text-success">FREE</span></h6>
                            
                            <hr>
                            <h6>Amount Payable &emsp;&emsp;&emsp;&ensp;
                            <i class="fa fa-inr"></i>
                        <?php echo $total;
                        ?></h6>

                        <hr>
                        <form action="cart.php" method="post">
                        <div class="mx-auto" style="display : flex; justify-content : space-around;">
                        <button type="submit" class="btn btn-warning my-3 mx-1" name="shop">Continue Shopping </button>
                        <button type="submit" class="btn btn-danger my-3 mx-1" name="buy">Check Out <i class="fas fa-shopping-cart"></i></button>
                        </div>
                        </form>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="jquery-3.6.0.js"></script>


<script type="text/javascript">
    
    function incValue(idname)
    {
        // Changes the value of the button
        let text = document.getElementById(idname);
        text.value= parseInt(text.value) + 1;
        
        
    }
    function decValue(idname)
    {
        // Changes the value of the button
        let text = document.getElementById(idname);
        if(text.value>=2){
        text.value=parseInt(text.value) - 1;
        }
    }
    
    $(document).ready(function(){
        
        $(".itemqty").on('change',function(){
           
            
            var $el = $(this).closest('.box');
            var pid = $el.find('.pid').val();
            var pprice = $el.find('.pprice').val();
            var qty = $el.find('.itemqty').val();
            
            $.ajax({
                url: 'cart.php',
                method: 'post',
                cache: 'false',
                data: {qty:qty,pid:pid,pprice:pprice},
                success: function(response){
                    console.log(response);
                }  
            });

        });

    });

    function forms(){
        document.fform.submit();
    }
</script>

<script type="text/javascript">
    
    
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