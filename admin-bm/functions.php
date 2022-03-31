<?php


function insertCategories() {
    global $conn;
    if(isset($_POST['submit'])){
        $category_title = $_POST['cat_title'];

        if($category_title == "" || empty($category_title)) {
            echo "Category can't be Empty";
        }else {

            $query = "INSERT INTO product_categories(category_name) VALUE('$category_title')";
            
            $create_category = mysqli_query($conn, $query);

            if(!$create_category) {
                die('Category not Added' . mysqli_error($conn));
            }

        }

    }
}


function queryAllCategories() {
    global $conn;
    $query = "SELECT * FROM categories";
            $select_all_categories = mysqli_query($conn, $query);
            while($row = mysqli_fetch_assoc($select_all_categories)) {
                $category_id = $row['cat_id'];
                $category_title = $row['cat_title'];
                echo "<tr>";
                echo "<td>{$category_id}</td>";
                echo "<td>{$category_title}</td>";
                echo "<td><a href = 'categories.php?delete={$category_id}'><button class='btn btn-danger'>Delete</button></a></td>";
                echo "<td><a href ='categories.php?edit={$category_id}'><button class='btn btn-success'>Edit</button></a></td>";
                echo "</tr>";
            }
}

function deleteCategory() {
    global $conn;

    if(isset($_GET['delete'])) {
        $fetched_category_id = $_GET['delete'];

        $query = "DELETE FROM categories WHERE cat_id = {$fetched_category_id}";
        $delete_query = mysqli_query($conn, $query);
        header("Location: categories.php");
    }
}

function confirmQuery($result) {
    global $conn;
    if(!$result) {
        die("QUERY FAILED" . mysqli_error($conn));
    }
}

function populateProducts($category_id) {
    global $conn;
    
        $query = "SELECT * FROM products WHERE product_cat_id = '$category_id' LIMIT 6";
        $select_all_products = mysqli_query($conn, $query);
       

          while($row = mysqli_fetch_assoc($select_all_products)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_price = $row['product_price'];
            $product_quantity = $row['product_qty'];
            $product_desc = $row['product_desc'];
            $product_image = $row['product_image'];
          
            
            ?>
        <?php
     
        
        ?> 

        <form action="" method="post">
        <div class="pop-item"><a href="singleProduct.php?prod_id=<?php echo $product_id;?>">
              <div class="item-img">
                <img src="images/<?php  echo $product_image;?>" alt="<?php  echo $product_image;?>" />
              </div>
              <h4><?php  echo $product_title;?></h4>
              <div class="item-description">
                <p>
                <?php  echo $product_desc;?>
                </p></a>
                <button class="add-to-cart-btn">Add to Cart</button>
              </div>
            </div>
        </form>
       
         <?php  }
         

}
// function cartElement($product_name,$product_price, $product_image) {
//     $element = "


//     <form action='>
//        <div class='cart_items'>
//                 <div class='cart_image'>
//                     <img src='assets/images/$product_image' alt='>
//                 </div>
//                 <div class='cart_item_description'>
//                     <p id='cart_item_name'>$product_name</p>
//                     <div class='price_operations'>
//                         <p id='cart_item_price'>Ksh $product_price</p>
//                         <p id='initial_price'><strike>Ksh $product_initial_price</strike> </p>
//                         <div class='operations'>
//                             <button data-change-quant id='decrease_quant'>-</button>
//                             <span id='value_change'>1</span>
//                             <button data-change-quant id='increase_quant'>+</button>
//                         </div>
                        
//                     </div>
//                 </div>
//                 <button id='delete_cart_item'>Delete</button>

//         </div>
//     </form>
//         <br>
    
     
    
    
    
    
    
//  }   ";
    

    

?>


