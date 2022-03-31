<?php 
if(isset($_POST['create_product'])) {

    $product_category_id = $_POST['product_category'];
    // $product_category = $_POST['product_category'];
    $product_brand = $_POST['product_brand'];
    $product_title = $_POST['product_title'];
    $product_price = $_POST['product_price'];
    $product_quantity = $_POST['product_qty'];
    $product_desc = $_POST['product_desc'];
    $product_image = $_FILES['product_image']['name'];
    $product_image_temp = $_FILES['product_image']['tmp_name'];
    $product_keywords = $_POST['product_keywords'];
    
    


    // function for the Image
    move_uploaded_file($product_image_temp, "../images/$product_image"); //Moves the Image from a temporary location to a parmanent location.

    $query = "INSERT INTO products(product_cat_id, product_brand, product_title, product_price, product_qty, product_desc, product_image, product_keywords) ";
    $query .= "VALUES ($product_category_id, '$product_brand', '$product_title', $product_price, $product_quantity, '$product_desc', '$product_image', '$product_keywords')";

    $create_products_query = mysqli_query($conn, $query);
    $_SESSION['status'] ="";

    confirmQuery($create_products_query);

}




?>
<div class="alert-success" id="change-alert"><?php echo $_SESSION['status'] = "Product added Successfully!";?></div>
<h1 class="page-header">
           Add Products
    </h1>
<form action="" method="post" enctype="multipart/form-data">    
     

      <!-- <div class="form-group">
            <label for="product_category_id">Product Category Id(Match this with the Categories Id)</label>
            <input type="text" class="form-control" name="product_category_id">
      </div> -->
      <div class="form-group">
      <label for="product_category_id">Product Category/Id</label>
          <select name="product_category" id="product_category">
              <?php 
              
              $query = "SELECT * FROM categories";
                    $select_all_categories_edit = mysqli_query($conn, $query);
                    confirmQuery($select_all_categories_edit);
                    while($row = mysqli_fetch_assoc($select_all_categories_edit)) {
                        $category_id = $row['cat_id'];
                        $category_title = $row['cat_title'];

                        echo "<option value='{$category_id}'>{$category_title}</option>";
                        
                    }
              ?>
          </select>
          
            
      </div>     


      <div class="form-group">
         <label for="product_title">Product Title</label>
          <input type="text" class="form-control" name="product_title">
      </div>

      <div class="form-group">
         <label for="product_brand">Product Brand</label>
          <input type="text" class="form-control" name="product_brand">
      </div>

      <div class="form-group">
         <label for="product_desc">Product Description/Specs</label>
         <textarea class="form-control "name="product_desc" id="" cols="30" rows="10">
         </textarea>
      </div>

      <div class="form-group">
            <label for="product_price">Product Price (Ksh)</label>
            <input type="number" min='0' class="form-control" name="product_price">
      </div>

      <div class="form-group">
            <label for="product_qty">Product Quantity (Ksh)</label>
            <input type="number" min='0' class="form-control" name="product_qty">
      </div>

      <div class="form-group">
         <label for="product_image">Product Image</label>
          <input type="file"  name="product_image">
      </div>

      <div class="form-group">
         <label for="product_keywords">Product Keywords</label>
          <input type="text" class="form-control" name="product_keywords">
      </div>

      

       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="create_product" value="Publish Product">
      </div>


</form>
    