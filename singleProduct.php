<?php include 'dp.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>


    <!-- navbar -->

    <!-- body -->
  
    <div class="contain">

    <!-- single product details -->

        <div class="small-cont single-prod">
        <?php

if(isset($_GET['prod_id'])) {

    $prod_id = $_GET['prod_id'];

}
$query = "SELECT * FROM products WHERE product_id = $prod_id ";
$fetch_product = mysqli_query($conn, $query);

  while($row = mysqli_fetch_assoc($fetch_product)) {
    $product_id = $row['product_id'];
    $product_title = $row['product_title'];
    $product_price = $row['product_price'];
    $product_desc = $row['product_desc'];
    $product_image = $row['product_image'];
    
    ?>

<div class="row">
                <div class="col-2">
                    <img src="images/<?php echo $product_image; ?>" width="100%">
                </div>
                <div class="col-2">
                    <p>Home / Drink</p>
                    <h1><?php echo $product_title; ?>.</h1>
                    <h3>Ksh <?php echo $product_price; ?></h3>
                    <select>
                        <option>Select Size</option>
                        <option>Large</option>
                        <option>Medium</option>
                        <option>Small</option>
                    </select>
                    <div class="se">
                        <input type="number" value="1">
                        <button id="checkout" class="btn btn1">Add to cart</button>
                    </div>
                    <div class="prog">
                        <h2>Products details <i class="fa fa-indent"></i></h2>
                        <p><?php echo $product_desc; ?>.</p></div>
                </div>
            </div>



<?php  }?>
            
</div>


        <!-- <div class="view-more">
            <legend class="pop-section-title">
                <h3>Food</h3>
                <button id="view_more">View More</button>
            </legend>
            <article class="populate_items">
                <div class="pop-item">
                  <img src="images/drinks.jpg" alt="" />
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
                  <img src="images/drinks.jpg" alt="" />
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
                  <img src="images/drinks.jpg" alt="" />
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
                  <img src="images/drinks.jpg" alt="" />
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
                    <img src="images/drinks.jpg" alt="" />
                    <h4>Name</h4>
                    <div class="item-description">
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Voluptatibus, culpa?
                      </p>
                      <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                  </div>
            </article>
        </div> -->

    <!-- CHAT BOX -->

        

    <!-- FOOTER -->

        <?php include 'includes/footer.php';?>
    </div>
        <!-- FORM SIGN IN -->

        <?php include 'form.php';?>
          <script src="app.js"></script>
  </body>
</html>
