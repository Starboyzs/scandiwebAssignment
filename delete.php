<?php
    if(isset($_POST['delete'])&& isset($_POST["deleteId"])){
      foreach($_POST["deleteId"] as $deleteId){
        $delete="DELETE FROM product WHERE id=$deleteId";
        mysqli_query($conn,$delete);
      }
      header('location: index.php');
      mysqli_close($conn);
      }
    ?>