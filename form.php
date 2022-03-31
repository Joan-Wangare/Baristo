<?php session_start();?>
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
          <?php include 'logIn.php';?>
          <?php include 'register.php';?>
        </div>
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