<form action="" method="post">
                                <div class="form-group">
                                    <label for="category_title">Update Category</label>
                                    

                <?php 

                if(isset($_GET['edit'])) {
                    $fetched_category_id = $_GET['edit'];
                    
               
                    $query = "SELECT * FROM categories WHERE cat_id = $fetched_category_id";
                    $select_all_categories_edit = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_assoc($select_all_categories_edit)) {
                        $category_id = $row['cat_id'];
                        $category_title = $row['cat_title'];

                        ?>

                    <input value="<?php if(isset($category_title)){echo $category_title;}?>" class="form-control" type="text" name="category_title">
                                        
                    <?php } } ?>    
                    
                    <?php 
                    
                    // ////UPDATE QUERY

                    if(isset($_POST['update_category'])) {
                        $fetched_category_name = $_POST['category_title'];
        
                        $query = "UPDATE categories SET cat_title = '{$fetched_category_name}' WHERE cat_id = {$fetched_category_id}";
                        $update_query = mysqli_query($conn, $query);
                        $_POST['category_title'] = "";
                        if(!$update_query) {
                            die('Some Error:' . mysqli_error($conn));
                        }
                        
                    }
                    
                    
                    ?>
                                                               
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="update_category" Value="Update Category">
                                </div>
                            </form>
                            