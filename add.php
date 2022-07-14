
<?php
include 'connect.php';

if(isset($_POST['submit'])){
  // $sku=$name=$price=$height=$width=$length=$weight=$size="";
  $sku=$_POST['sku'];
  $name=$_POST['name'];
  $price=$_POST['price'];
  $productType=$_POST['productType'];
  $height=$_POST['height'];
  $width=$_POST['width'];
  $length=$_POST['length'];
  $weight=$_POST['weight'];
  $size=$_POST['size'];
  $sql = "insert into `product`(sku,name,price,productType,height,width,length,weight,size) values ('$sku','$name','$price','$productType','$height','$width','$length','$weight','$size')";
  $result = mysqli_query($conn, $sql);
  if ($result){
    header('location: index.php');
  }
  else{
    die (mysqli_error($conn));
  }
}


?>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<div class="container">
<header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid header-container">
              <a class="navbar-brand" href="#">Product Add</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <button form = "product_form" type="submit" class="btn btn-outline-dark" name="submit">Save</button>
                <button type="button" class="btn"><a href = "index.php" type="button" class="btn btn-outline-dark">Cancel</a></button>
                 
                </div>
              </div>
            </div>
          </nav
    </header>
    </div>
    <hr>

<section class="form" >
    <form id="product_form" action="" method="POST" >
        <div class="row">
            <div class="col-lg-2">
                <label for="sku">SKU</label>
            </div>
            <div class="col-lg-2">
                <input id = "sku" name="sku" type="text" placeholder="Enter SKU..." required >
            </div>
        </div>

        <div class="row">
            <div class="col-lg-2">
                <label for="name">Name</label>
            </div>
            <div class="col-lg-2">
                <input id = "name" name="name" type="text"  placeholder="Enter the name...." required>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-2">
                <label for="price">Price($)</label>
            </div>
            <div class="col-lg-2">
                <input id = "price" name="price" type="text"   placeholder="Enter the price" required>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label for="productTyoe">Typechecker</label>
            </div>
        <div class="col-lg-2">
        <select id="productType" onchange="switchFormBlock(this)" name="productType" class="dropdown btn btn-dark dropdown-toggle" required>
          <option  value="0" >Furniture</option>
          <option  value="1" >Book</option>
          <option  value="2" selected>DVD</option>
        </select>
      </div>
        </div>
        
      
    </div>
    <div class="product-types">
      <div id="FurnituresInputs"style="display:none">
        <div class="row">
            <div class="col-lg-2">
            <label for="Height" class="form-label">Height in CM:</label>
            </div>
        <div class="col-lg-2">
          <input type="number" class="form-control" id="height" placeholder="Enter height" name="height" value=0 >
        </div>
        </div>
        

        <div class="row">
            <div class="col-lg-2">
            <label for="Width" class="form-label">Width in CM:</label>
            </div>
        <div class="col-lg-2">
          <input type="number" class="form-control" id="width" placeholder="Enter Width" name="width" value=0>
        </div>
        </div>
        
  
        <div class="row">
            <div class="col-lg-2">
            <label for="text" class="form-label">Length in CM:</label>
            </div>
        <div class="col-lg-2">
          <input type="number" class="form-control" id="length" placeholder="Enter length" name="length" value=0 >
        </div>
      </div>
        </div>
        

      <div id="BookInputs" style="display:none">
  
        <div class="row">
            <div class="col-lg-2">
            <label for="text" class="form-label">Weight in KG:</label>
            </div>
        <div class="col-lg-2">
          <input type="number" class="form-control" id="weight" placeholder="Enter Weight" name="weight" value=0 >
        </div>
      </div>
        </div>
       

      <div id="DvdInputs">
        <div class="row">
            <div class="col-lg-2">
            <label for="DvD" class="form-label">Size in MB:</label>
            </div>
        <div class="col-lg-2">
          <input type="number" class="form-control" id="size" placeholder="Enter DVD size" name="size" value=0 >
        </div>
        </div>
        
      </div>
    </div>
  </div>
             </form>
             <script src="Swapper.js" charset="utf-8"></script>
</section>
