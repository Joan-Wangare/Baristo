
<div class="header">
      <nav class="con">
          <input id="nav-toggle" type="checkbox" />
          <div class="logo">
              <img src="images/logo.png" alt="" />
          </div>
          <div class="menu">
              <ul class="links">
                  <li><a href="" class="a">Blog</a></li>
                  <li><a href="" class="a">About Us</a></li>
                  <?php 
                      
                      if (isset($_SESSION['username'])){
                       echo " <li id='account'> Hi,{$_SESSION['username']} <button id='logout_btn'>
                       <a href='logout.php'>Log Out</a></li></button></li>";
                      
                      }else {
                        echo '';
                      }
                    ?>
                    
                  
                  <li>
                    <?php 
                    if(!isset($_SESSION['username'])){
                      echo "<button class='b btn2' data-modal-target='#modal'> SIGN IN </button>";
                      
                    }
                    ?>
                  </li>
                 
              </ul>
          </div>
          <div class="home">
            <a href="./cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            <p>0</p>
            <a href="./index.php"><i class="fa fa-phone" aria-hidden="true"></i></a>
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
    </div>