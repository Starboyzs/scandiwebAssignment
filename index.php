

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <title>Home page</title>
</head>
<body>
<div class="container">
<header>
<form id="deleteForm" action="" method="POST">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid header-container">
              <a class="navbar-brand" href="#" style="font-weight:bold;">Product List</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a href="add.php" type="button" class="btn btn-outline-dark">ADD</a>
                    <button id ="delete-product-btn" type="submit" name="delete" value = "delete" class="btnn btn btn-outline-dark">MASS DELETE</button>
                </div>
              </div>
            </div>
          </nav>
    </header>
    </div>
    <hr>

    <div class="container-fluid">  
                         <div class="row">
                <?php
                    include 'connect.php';
                    include 'delete.php';
                    $sql="Select * from `product` ";
                    $result=mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($result)){
                        $id=$row['id'];
                        $sku = $row['sku'];
                        $name = $row['name'];
                        $price = $row['price']."$";
                        $productType = $row['productType'];
                        $height = $row['height'];
                        $width = 'x'.$row['width'];
                        $length = 'x'.$row['length'];
                        $weight = $row['weight']."kg";
                        $size = $row['size'].'mb';

                        if ($productType==0){
                            echo '
                            <div class="col-lg-2 col-md-4 index_row" style="margin-left:5%;">
                          
                            <input type="checkbox" name="deleteId[]" class="delete-checkbox"  value="' . $id . '">  
                                        <p> '.$sku.'</P></br>
                                        <p> '.$name.'</P></br>
                                        <p> '.$price.'</P></br>
                                        <p> Dimension in meters: '.$height.$width.$length.'</P>
                                        
                                        </div>
                                
                            ';
                        }elseif ($productType==1){
                            echo'
                            <div class="col-lg-2 col-md-4 index_row" style="margin-left:5%;">
                            <input type="checkbox" name="deleteId[]" class="delete-checkbox"  value="' . $id . '">  
                                        <p> '.$sku.'</P></br>
                                        <p> '.$name.'</P></br>
                                        <p> '.$price.'</P></br>
                                        <p> '.$weight.'</P><br/>
                                        
                                        </div>
                                
                            ';
                        }elseif ($productType==2) {
                            echo'
                            <div class="col-lg-2 col-md-4 index_row" style="margin-left:5%;">
                            <input type="checkbox" name="deleteId[]" class="delete-checkbox"  value="' . $id . '">
                            
                            
                                        <p> '.$sku.'</P></br>
                                        <p> '.$name.'</P></br>
                                        <p> '.$price.'</P></br>
                                        <p> '.$size.'</P>
                                        
                                        </div>
                            ';
                        }
                    }
                    ?>
                    </div>

</div>
<hr>
</form>                    
    <?php include('footer.php')?>
</body>
</html>