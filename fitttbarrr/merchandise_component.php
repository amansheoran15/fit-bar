<?php
function component($productname,$productprice,$productimage,$price,$productid,$rating,$product_info,$productimage2,$productimage3){
    echo '
    <div class="col-lg-3 col-md-6 col-sm-12 my-3 my-md-2">
    <form action="merchandise.php" method="post">
    <div class="card shadow">
        <div>
            <img src="'.$productimage.'" alt="image" class="img-fluid card-img-top">
        </div>
        <div class="card-body ">
            <h5 class="card-title">'.$productname.'</h5>
            <h6>';
            
                for($i=0;$i<$rating;$i++){
                    echo '<i class="fas fa-star"></i>';
                }
                for($i=0;$i<5-$rating;$i++){
                    echo '<i class="far fa-star"></i>';
                }

                
                
                echo '
            </h6>
            <p class="card-text">
                '.$product_info.'
            </p>
            <h5>
                <small><s class="text-secondary"><i class="fa fa-inr"></i>'.$price.'</s></small>
                <span class="price"><i class="fa fa-inr"></i>'.$productprice.'</span>
            </h5>
            
            

            <!-- Button trigger modal -->
<button type="button" class="btn btn-warning my-3 mx-1" data-bs-toggle="modal" data-bs-target="#staticBackdropx'.$productid.'">
 View Product
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdropx'.$productid.'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal'.$productid.'</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <div class="images-container d-inline-block p-50"
      style="margin-left : -80px;">
      <div class="large-image" style="
      height:500px;
    width:500px;
    background-image: url('.$productimage.') !important;
    background-size: contain;
    background-position: center;
    border-radius: 1rem;
    background-repeat: no-repeat;
      ">
                
      </div>
      
      <div class="small-image d-inline-block" data-src="url('.$productimage.')" id="img1" style="
      height:100px;
    width:100px;
    background-image: url('.$productimage.');
    background-size: contain;
    background-position: center;
    border-radius: 1rem;
    cursor: pointer;
    background-repeat: no-repeat;
    "></div>
      <div class="small-image d-inline-block" data-src="url('.$productimage2.')" id="img2" style=" 
      height:100px;
      width:100px;
      background-image: url('.$productimage2.');
      background-size: contain;
      background-position: center;
      border-radius: 1rem;
      cursor: pointer;
      background-repeat: no-repeat;
      "></div>
      <div class="small-image d-inline-block" data-src="url('.$productimage3.')" id="img3" style=" 
      height:100px;
      width:100px;
      background-image: url('.$productimage3.');
      background-size: contain;
      background-position: center;
      border-radius: 1rem;
      cursor: pointer;
      background-repeat: no-repeat;
      "></div>
  </div>
  <div class="product-info d-inline-block" style="vertical-align : top;">
      <div class="product-name">
         <h2> '.$productname.' <h2>
      </div>

      <div class="product-price">
      <h5>
      <small><s class="text-secondary"><i class="fa fa-inr"></i>'.$price.'</s></small>
      <span class="price"><i class="fa fa-inr"></i>'.$productprice.'</span>
     </h5>
      </div>

      <div class="product-size">
         <h5> <label for="size">Size &nbsp;</label>

          <select name="size" class="size">
              <option value="XS">XS</option>
              <option value="S">S</option>
              <option value="L">L</option>
              <option value="XL">XL</option>
              <option value="XXL">XXL</option>
          </select>
          </h5>
      </div>

      <div class="add-cart">
          <button class="btn btn-warning my-3 mx-1"><i class="fas fa-cart-arrow-down"></i>Add to Cart</button>
      </div>

  </div>

      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
            
            <button type="submit" class="btn btn-warning my-3 mx-1" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
           
            <input type="hidden" name="product_id" value='.$productid.'>
            <input type="hidden" name="product_id2" value='.$productid.'>
            
            
        </div>
    </div>
    </form>
    

</div>
';
  
}


function cartElement($productimg,$productname,$productprice,$productid,$quanti){
    $element=
    '<tr><form action="cart.php?action=remove&id='.$productid.'" method="post" class="cart-items">
    <div class="border rounded">
        <div class="row bg-white">
            <div class="col-md-3 pl-0">
                <img src="'.$productimg.'" alt="image1" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h5 class="pt-2">'.$productname.'</h5>
                <small class="text-secondary">Seller : Fitbar</small>
                <h5 class="pt-2"><i class="fa fa-inr"></i>'.$productprice.'</h5>
                
                <button type="submit" class="btn btn-danger  my-2" name="remove">Remove</button>
            </div>
            <div class="col-md-3 py-5">
                <div class="box">
                </form>
                <form action="cart.php" method="post" name="fform" >
                    
                    <input type="number" id="'.$productid.'" value="'.$quanti.'" min="1"  class="form-control w-50 d-inline text-center itemqty" name="quant">
                    
                    <input type="hidden" class="pid" value="'.$productid.'" name="pid" >
                    <input type="hidden" class="pprice" value="'.$productprice.'" >
                   
                </div>
            </div>
        </div>
    </div>
</form></tr>
    ';
    echo $element;

}
function view_product($productname,$productimage,$productprice,$productprice2,$productinfo){
echo '<img class="img-fluid" src="'.$productimage.'" alt="...">
<h1>'.$productname.'</h1>
<p>'.$productinfo.'</p>
<h2>'.$productprice2.'</h2>
<h2>'.$productprice.'</h2>';


}
?>
