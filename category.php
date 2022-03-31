<?php include 'dp.php';?>
<?php include 'includes/header.php';?>
    <!-- navbar -->

      <?php include 'includes/navbar.php';?>

    
    <div class="contain">
        <div class="view-more">
            <legend class="pop-section-title">
                <h3>Food</h3>
            </legend>




            <article class="populate_items">
              <!-- Populating Items as Category when the category button is clicked -->
              <?php
    if(isset($_GET['category'])){

        $product_category_id_get = $_GET['category'];
    }

        $query = "SELECT * FROM products WHERE product_cat_id =$product_category_id_get";
        $select_all_products = mysqli_query($conn, $query);

          while($row = mysqli_fetch_assoc($select_all_products)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_price = $row['product_price'];
            $product_desc = $row['product_desc'];
            $product_image = $row['product_image'];


            ?>
         <div class="pop-item">
                  <div class="item-img"><a href="./singleProduct.php?prod_id=<?php echo $product_id;?>">
                  <img src="images/<?php echo $product_image; ?>" alt="<?php echo $product_image; ?>" />
                  </div>
                  <h4><?php echo $product_title;?> <span id="price"><?php echo $product_price;?></span></h4>
                  
                  <div class="item-description">
                    <p>
                    <?php echo $product_desc;?>
                    </p></a>
                    <button class="add-to-cart-btn">Add to Cart</button>
                  </div>
         </div>
        
           
         <?php  }?>

<!-- 






                
                <div class="pop-item">
                  <div class="item-img">
                    <img src="images/pasta.jpg" alt="" />
                  </div>
                  <h4>Name</h4>
                  <div class="item-description">
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Voluptatibus, culpa?
                    </p>
                    <button class="add-to-cart-btn">Add to Cart</button>
                  </div>
                </div>
                <div class="pop-item">
                  <div class="item-img">
                    <img src="images/pasta.jpg" alt="" />
                  </div>
                  <h4>Name</h4>
                  <div class="item-description">
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Voluptatibus, culpa?
                    </p>
                    <button class="add-to-cart-btn">Add to Cart</button>
                  </div>
                </div>
                <div class="pop-item">
                  <div class="item-img">
                    <img src="images/pasta.jpg" alt="" />
                  </div>
                  <h4>Name</h4>
                  <div class="item-description">
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Voluptatibus, culpa?
                    </p>
                    <button class="add-to-cart-btn">Add to Cart</button>
                  </div>
                </div>
                <div class="pop-item">
                  <div class="item-img">
                    <img src="images/pasta.jpg" alt="" />
                  </div>
                  <h4>Name</h4>
                  <div class="item-description">
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Voluptatibus, culpa?
                    </p>
                    <button class="add-to-cart-btn">Add to Cart</button>
                  </div>
                </div>
                <div class="pop-item">
                  <div class="item-img">
                    <img src="images/pasta.jpg" alt="" />
                  </div>
                  <h4>Name</h4>
                  <div class="item-description">
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Voluptatibus, culpa?
                    </p>
                    <button class="add-to-cart-btn">Add to Cart</button>
                  </div>
                </div> -->
            </article>
        </div>

      <!-- footer -->

      <?php include 'includes/footer.php';?>

    </div>
        <!-- FORM SIGN IN -->

        <?php include 'includes/form.php';?>
      
          <script src="js/jquery-3.6.0.min.js"></script>
          <script src="app.js"></script>
  </body>
</html>
