
<?php 
if(isset($_GET['p_id'])) {
    $product_id_edit = $_GET['p_id'];

}

$query = "SELECT * FROM products WHERE product_id=' $product_id_edit' ";
$select_product_by_id = mysqli_query($conn, $query);
while($row = mysqli_fetch_assoc($select_product_by_id)) {
    $product_id = $row['product_id'];
    $product_category_id = $row['product_cat_id'];
    $product_brand = $row['product_brand'];
    $product_title = $row['product_title'];
    $product_price = $row['product_price'];
    $product_quantity = $row['product_qty'];
    $product_desc = $row['product_desc'];
    $product_image = $row['product_image'];
    $product_keywords = $row['product_keywords'];

}
if(isset($_POST['edit_product'])) {

    $product_category_id = $_POST['product_category'];
    $product_brand = $_POST['product_brand'];
    $product_title = $_POST['product_title'];
    $product_price = $_POST['product_price'];
    $product_quantity = $_POST['product_qty'];
    $product_desc = $_POST['product_desc'];
    $product_image = $_FILES['product_image']['name'];
    $product_image_temp = $_FILES['product_image']['tmp_name'];
    $product_keywords = $_POST['product_keywords'];
    

    move_uploaded_file($product_image_temp, "../images/$product_image");
//To make sure the image field is not empty on updating.
    if(empty($product_image)) {
        $query = "SELECT * FROM products WHERE product_id=' $product_id_edit' ";
            $select_image = mysqli_query($conn, $query);
            while($row = mysqli_fetch_assoc($select_image)) {
                $product_image = $row['product_image'];
            }
    }

    $query = "UPDATE products SET product_cat_id ='{$product_category_id}', product_brand ='{$product_brand}' , product_title ='{$product_title}', product_price ='{$product_price}' , product_qty ='{$product_quantity}', product_desc = '{$product_desc}' , product_image ='{$product_image}' , product_keywords = '{$product_keywords}' WHERE product_id = {$product_id_edit} ";


    $update_product = mysqli_query($conn, $query);
    $_SESSION['status'] = "";
    confirmQuery($update_product);
    

}
?>
<div class="alert-success" id="change-alert"><?php echo $_SESSION['status'] ="Product Updated Successfully!! ";?></div>
<h1 class="page-header">
            Edit Product
    </h1>

<form action="" method="post" enctype="multipart/form-data">    
     

      
     
      <div class="form-group">
         <label for="name">Product Title</label>
          <input type="text" class="form-control" name="product_title"value="<?php echo $product_title;?>">
      </div>

      <div class="form-group">

          <select name="product_category" id="product_category">
              <?php 
              
              $query = "SELECT * FROM categories";
                    $select_all_categories_edit = mysqli_query($conn, $query);
                    confirmQuery($select_all_categories_edit);
                    while($row = mysqli_fetch_assoc($select_all_categories_edit)) {
                        $category_id = $row['cat_id'];
                        $category_name = $row['cat_title'];

                        echo "<option value='{$category_id}'>{$category_name}</option>";
                        
                    }
              ?>
          </select>
          
            
      </div>
      <div class="form-group">
         <label for="product_brand">Product Brand</label>
         <input type="text" class="form-control" name="product_brand" value="<?php echo $product_brand;?>">
      </div>

      <div class="form-group">
         <label for="product_price">Product Price</label>
         <input type="number" min='0' class="form-control" name="product_price"value="<?php echo $product_price;?>">
      </div>

      <div class="form-group">
            <label for="product_quantity">Product Quantity</label>
            <input type="number" min='0' class="form-control" name="product_qty"value="<?php echo $product_quantity;?>">
      </div>

      <div class="form-group">
            <label for="product_desc">Product Description</label>
            <textarea class="form-control "name="product_desc" id="" cols="30" rows="10">
            <?php echo $product_desc;?>
         </textarea>
      </div>

      <div class="form-group">
         <label for="product_image">Product Image</label>
         <img width=150 src="../images/<?php echo $product_image;?>" alt="<?php echo $product_image;?>">
          <input type="file"  name="product_image"value="">
      </div>

      <div class="form-group">
         <label for="product_keywords">Product Keywords</label>
          <input type="text" class="form-control" name="product_keywords"value="<?php echo $product_keywords;?>">
      </div>

      

       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="edit_product" value="Publish Product">
      </div>


</form>
    