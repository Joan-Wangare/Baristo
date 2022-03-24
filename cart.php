<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
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
                  <li>
                      <button class="b btn2" data-modal-target="#modal">SIGN IN</button>
                  </li>
              </ul>
          </div>
          <div class="home">
            <a href="index.html"><i class="fa fa-home" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
          </div>
          <label for="nav-toggle" class="burger">
              <div class="line"></div>
              <div class="line"></div>
              <div class="line"></div>
          </label>
      </nav>
    </div>
    
    <!-- body -->
    
    <div class="contain">
        <div class="small-container cart-page">
            <table>
                <tr>
                    <th>Product</th>
                    <th>Quality</th>
                    <th>Subtotal</th>
                </tr>
                <tr>
                    <td>
                        <div class="cart-info">
                            <img class="prod" src="images/img1.jpg" alt="">
                            <div>
                                <p>Lorem ipsum dolor</p>
                                <small>Price: $14.90</small>
                                <br>
                                <a href="">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td><input type="text" value="1"></td>
                    <td>$14.90</td>
                </tr>
                <tr>
                    <td>
                        <div class="cart-info">
                            <img class="prod" src="images/pasta.jpg" alt="">
                            <div>
                                <p>Lorem ipsum dolor .</p>
                                <small>Price: $1.00</small>
                                <br>
                                <a href="">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td><input type="text" value="1"></td>
                    <td>$1.00</td>
                </tr>
                <tr>
                    <td>
                        <div class="cart-info">
                            <img class="prod" src="images/drinks.jpg" alt="">
                            <div>
                                <p>Lorem ipsum dolor .</p>
                                <small>Price: $20.00</small>
                                <br>
                                <a href="">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td><input type="text" value="1"></td>
                    <td>$20.00</td>
                </tr>
            </table>
            <div class="total-price">
                <table>
                    <tr>
                        <td>Subtotal</td>
                        <td>$35.90</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>$0.10</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>$36.00</td>
                    </tr>
                </table>
            </div>
            <div class="bT">
                <button class="b-bT">Proceed to checkout</button>
            </div>

        </div>

    <!-- footer -->

        <footer id="footer">
            <div class="waves">
                <div class="wave" id="wave1"></div>
                <div class="wave" id="wave2"></div>
                <div class="wave" id="wave3"></div>
                <div class="wave" id="wave4"></div>
            </div>
            <div class="media">
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-snapchat"></i></a>
            </div>
            <ul class="list">
                <li><a href="#Home" class="a">Home</a></li>
                <li><a href="#about" class="a">About us</a></li>
                <li><a href="#services" class="a">Services</a></li>
            </ul>
            <p>©2021 PIXELS | All Rights Reserved</p>
        </footer>
    </div>
        <!-- FORM SIGN IN -->

        <section>
            <div class="form" id="modal">
              <div class="form-box">
                <button data-close-button class="close">&times;</button>
                <div class="button-box">
                  <div id="btn"></div>
                  <button type="button" class="toggle-btn" onclick="login()">
                    Sign In
                  </button>
                  <button type="button" class="toggle-btn" onclick="register()">
                    Sign Up
                  </button>
                </div>
                <div class="social-icons">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-google"></i></a>
                </div>
                <form id="login" class="input-group" method="GET" action="signUp">
                  <input
                    type="text"
                    class="input-field"
                    placeholder="User Id"
                    required
                  />
                  <input
                    type="password"
                    class="input-field"
                    placeholder="Password"
                    required
                  />
                  <input type="checkbox" class="check-box" /><span
                    >Remember Password</span
                  >
                  <button type="submit" class="submit-btn" name="reg">Log in</button>
                </form>
                <form
                  id="register"
                  class="input-group"
                  method="POST"
                  action="signUp.php"
                >
                  <input
                    type="text"
                    class="input-field"
                    placeholder="User Id"
                    required
                    name="userId"
                  />
                  <input
                    type="email"
                    class="input-field"
                    placeholder="Email Id"
                    required
                    name="emailId"
                  />
                  <input
                    type="password"
                    class="input-field"
                    placeholder="Password"
                    required
                    name="password"
                  />
                  <input type="checkbox" class="check-box" /><span
                    >I agree to the terms & conditions</span
                  >
                  <button type="submit" class="submit-btn" name="save">
                    Register
                  </button>
                </form>
              </div>
              <!--javascript-->
              <script>
                var x = document.getElementById("login");
                var y = document.getElementById("register");
                var z = document.getElementById("btn");
      
                function register() {
                  x.style.left = "-400px";
                  y.style.left = "50px";
                  z.style.left = "110px";
                }
      
                function login() {
                  x.style.left = "50px";
                  y.style.left = "450px";
                  z.style.left = "0px";
                }
              </script>
            </div>
            <div id="overlay"></div>
          </section>
      
          <script src="js/jquery-3.6.0.min.js"></script>
          <script src="app.js"></script>
  </body>
</html>
