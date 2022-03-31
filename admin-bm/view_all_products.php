<h1 class="page-header">
        All Products
    </h1>
<table class="table table-bordered table-hover text-center">
                        <thead>
                            <tr>
                                <th>Product Id</th>
                                <th>Product Category</th>
                                <th>Product Brand</th>
                                <th>Product Title</th>
                                <th>Product Price</th>
                                <th>Product Quantity</th>
                                <th>Product Description</th>                                
                                <th>Product Image</th>
                                <th>Product Keywords</th>
                                <th colspan="2">Operations</th>
                            </tr>
                        </thead>

                        <tbody>
        <?php 
            $query = "SELECT * FROM products";
            $select_products = mysqli_query($conn, $query);
            while($row = mysqli_fetch_assoc($select_products)) {
                $product_id = $row['product_id'];
                $product_cat_id = $row['product_cat_id'];
                $product_brand = $row['product_brand'];
                $product_title = $row['product_title'];
                $product_price = $row['product_price'];
                $product_quantity = $row['product_qty'];
                $product_desc = $row['product_desc'];
                $product_image = $row['product_image'];
                $product_keywords = $row['product_keywords'];

                echo "<tr>";
                echo "<td>{$product_id}</td>";
                // ///relating the Category id of products to the Product/
                 // ///relating the Category id of products to the Product/
                 $query = "SELECT * FROM categories WHERE cat_id = $product_cat_id";
                 $select_all_categories_id = mysqli_query($conn, $query);
                 while($row = mysqli_fetch_assoc($select_all_categories_id)) {
                     $category_id = $row['cat_id'];
                     $category_title = $row['cat_title'];

                     echo "<td class='align-middle'>{$category_title}</td>";
                 }
                // echo "<td class='align-middle'>{$product_cat_id}</td>";
                echo "<td>{$product_brand}</td>";
                echo "<td>{$product_title}</td>";
                echo "<td>{$product_price}</td>";
                echo "<td>{$product_quantity}</td>";
                echo "<td>{$product_desc}</td>";
                echo "<td><img src='../images/$product_image' alt='$product_image' width='150px' class='img-responsive'></td>";
                echo "<td>{$product_keywords}</td>";
               
                
                echo "<td><a href='products.php?delete_product={$product_id}'>Delete</a></td>";
                echo "<td><a href='products.php?source=edit_product&p_id={$product_id}'>Edit</a></td>";
                echo "</tr>";
            }              
                            
                            
        ?>
                        </tbody>
                    </table>


        <?php 
        if(isset($_GET['delete_product'])) {
            $product_id = $_GET['delete_product'];
            $query = "DELETE FROM products WHERE product_id = {$product_id}";
            $delete_prod_query = mysqli_query($conn, $query);
           
            header("Location: products.php");
        }
        
        
        ?>