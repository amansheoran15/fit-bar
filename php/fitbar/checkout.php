
<?php
    require_once("merchandise_component.php");
    require_once("merchandise_database.php");
    //start session
    session_start();
    $_SESSION['count']=0;
    $uname=$_SESSION['username'];
    include "dbconnect.php";
    $sqla="SELECT * FROM `cart` WHERE `username`='$uname'";
    $resulta= mysqli_query($conn,$sqla);
    $numa=mysqli_num_rows($resulta);
    $_SESSION['count']=$numa;
    $database=new Create_db("productdb","producttb");
    $result=$database->getdata();
    while($rows=mysqli_fetch_assoc($result)){
    $_SESSION['quantity'][$rows['id']]=1;
    }
    // $_SESSION['quantity'] = 1;
    //create instance of Create_db class
    $database=new Create_db("productdb","producttb");
    
        
    

    if(isset($_POST['shop'])){
        header("location: merchandise.php");
    }
   if(isset($_POST['confirm'])){
    if($_SESSION['count']!=0){
    include "dbconnect.php";
    $name=$_SESSION['username'];
    $phone=$_POST['Phone-No'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $pincode=$_POST['pincode'];
    $state=$_POST['state'];
    $orderid=bin2hex(random_bytes(50));
    $sqlz = "INSERT INTO `orders` (`srno`, `name`, `phone`,`address`,`city`,`pincode`,`state`,`orderid`) VALUES ('', '$name', '$phone','$address','$city','$pincode','$state','$orderid');";
    $resultz= mysqli_query($conn,$sqlz);
    $orderinfo="";
    $sql="SELECT * FROM `cart` WHERE `username`='$name'";
    $result2= mysqli_query($conn,$sql);

    //Usage of where clause to fetch data from database
    // echo mysqli_num_rows($result2)."<br>";
    $num=mysqli_num_rows($result2);
    if($num>0){
    while($row=mysqli_fetch_assoc($result2)){
    $orderinfo=$orderinfo."Product Id : ".$row['prod_id']."---Quantity : ".$row['quantity']."---Size : ".$row['size']."\r\n";
    }}
    $to_email = "asthasingh1908@gmail.com";
    $subject = "Order recieved";
    $credits="All rights are reserved | Techno Smarter "; 
    $body = "CUSTOMER DETAILS : \r\n
    Order ID : ".$orderid."\r\nCustomer Name : ".$name."\r\nPhone No. : ".$phone."\r\nDelivery Address : ".$address."\r\nCity : ".$city."\r\nPincode : ".$pincode."\r\nState : ".$state."\r\n
    ORDER DETAILS : \r\n
    ".$orderinfo."\r\n".$credits;
    $headers = "From: vikramanantsingh2908@gmail.com";
 
    if (mail($to_email, $subject, $body, $headers)) {
                
                echo '<div class="alert alert-success alert-dismissible fade show m-0" role="alert">
        <strong>Hey!</strong> Your order is successfully registered!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
            } else {
                
                echo '<div class="alert alert-danger alert-dismissible fade show m-0" role="alert">
                <strong>Hey!</strong> Email sending failed
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
    
            $sqll="DELETE FROM `cart` WHERE `username` = '$name'";
            $resultt= mysqli_query($conn,$sqll);
            
   }
   else{
    echo '<div class="alert alert-danger alert-dismissible fade show m-0" role="alert">
    <strong>Hey!</strong> Your cart is Empty!
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
    <link rel="stylesheet" href="cart.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

    <!-- font-awesome -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/8de4607864.js" crossorigin="anonymous"></script>

    <title>confirm order</title>
</head>

<body >
    <?php
    include "navbar.php";
    require_once("merchandise_header.php");
    ?>
    <div class="container-fluid">
        <div class="row px-5">
            <div class="col-md-7">
            <div id="page-heading">
    <h1>Complete Your Order</h1>
  </div>

  <div id="page-content">
    <div id="delivery-form" style="background-color : white;">
      <h2>Delivery Address</h2>
      <form action="" method="post">
        <table>
        <?php
          echo '<p class="p-3">hey '.$_SESSION["username"].' ! we need the following details to confirm your order.</p>';
          ?>
          <tr class="form-element">
            <td><label for="Phone-No">Phone Number</label></td>
            <td><input type="tel"  required name="Phone-No" id="Phone-No" align="right"></td>
          </tr>

          <tr class="form-element">
            <td><label for="address">Address</label></td>
            <td><textarea id="address"  required name="address"></textarea></td>
          </tr>

          <tr class="form-element">
            <td><label for="city">City</label></td>
            <td><input type="text" name="city"  required id="city"></td>
          </tr>

          <tr class="form-element">
            <td><label for="pincode">Pincode</label></td>
            <td><input type="number" name="pincode"  required id="pincode"></td>
          </tr>

          <tr class="form-element">
            <td><label for="state">State</label></td>
            <td>
              <select name="state" id="state"  required >
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chandigarh">Chandigarh</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                <option value="Daman and Diu">Daman and Diu</option>
                <option value="Delhi">Delhi</option>
                <option value="Lakshadweep">Lakshadweep</option>
                <option value="Puducherry">Puducherry</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Odisha">Odisha</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Uttarakhand">Uttarakhand</option>
                <option value="West Bengal">West Bengal</option>
              </select>
            </td>
          </tr>
        </table>

        <hr>
        
        <div class="mx-auto" style="display : flex; justify-content : space-around;">
        <button type="submit" class="btn btn-danger my-3 mx-1" name="confirm">Confirm Order <i class="fas fa-shopping-cart"></i></button>
        </form>
        <form action="checkout.php" method="post">
        
        <button type="submit" class="btn btn-warning my-3 mx-1" name="shop">Continue Shopping </button>
        </div>
        

      </form>

    </div>
    <div id="price-details">
    </div>
  </div>    


            </div>
            <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">
                <div class="pt-4">
                    <h6>PRICE DETAILS</h6>
                    <hr>
                    <div class="row price-details">
                        <div class="col-md-12">

                        
                            <?php

$total=0;
$countt=0;

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
    $size= $row['size'];
    $database=new Create_db("productdb","producttb");
    $result=$database->getdata();
    while($rows=mysqli_fetch_assoc($result)){
    
        if($rows['id']==$product_id){
            
            
            // print_r($_POST['quant1']);
            $total=$total+ (int)$rows['product_price']*$quanti;
            $countt=$countt+$quanti;
            
        }
    
}
}
}
}

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