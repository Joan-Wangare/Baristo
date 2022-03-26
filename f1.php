<?php session_start();?>
<?php if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);    
}?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Baristo</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@500&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>

    <!-- navbar -->

      <?php include 'includes/navbar.php';?>

    <!-- <div class="header">
      <nav class="con">
          <input id="nav-toggle" type="checkbox" />
          <div class="logo">
              <img src="images/logo.png" alt="" />
          </div>
          <div class="menu">
              <ul class="links">
                  <li><a href="" class="a">Blog</a></li>
                  <li><a href="" class="a">About Us</a></li>
                  <li>
                      <button class="b btn2" data-modal-target="#modal">SIGN IN</button>
                  </li>
              </ul>
          </div>
          <div class="home">
            <a href="index.html"><i class="fa fa-home" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
          </div>
          <form action="javascript:" class="search-bar">
            <input type="search" name="search" pattern=".*\S.*" required>
            <button class="search-btn" type="submit">
                <span>Search</span>
            </button>
        </form>
          <label for="nav-toggle" class="burger">
              <div class="line"></div>
              <div class="line"></div>
              <div class="line"></div>
          </label>
      </nav>
    </div> -->
    
    <!-- body -->
    
    <div class="contain">
        <div class="view-more">
            <legend class="pop-section-title">
                <h3>Food</h3>
            </legend>
            <article class="populate_items">
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
