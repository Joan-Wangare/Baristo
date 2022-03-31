<?php 
if(isset($_POST['create_user'])) {

    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $isActive = $_POST['is-active'];
    

    $query = "INSERT INTO admin(name, email, password, is_active) ";
    $query .= "VALUES ('$username', '$email', '$password', '$isActive')";

    $create_user_query = mysqli_query($conn, $query);
    $_SESSION['status'] ="";

    confirmQuery($create_user_query);

}




?>
<div class="alert-success" id="change-alert"><?php echo $_SESSION['status'] = "User added Successfully!";?></div>
<h1 class="page-header">
           Add User
    </h1>
<form action="" method="post" enctype="multipart/form-data">    
     

      <!-- <div class="form-group">
            <label for="product_category_id">Product Category Id(Match this with the Categories Id)</label>
            <input type="text" class="form-control" name="product_category_id">
      </div> -->

      <div class="form-group">
         <label for="username">Username</label>
          <input type="text" class="form-control" name="username">
      </div>
      <div class="form-group">
         <label for="email">email</label>
         <input type="email" class="form-control" name="email">
        </div> 
        
        <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
              <label for="is-active">IsActive</label>
              <input type="text" class="form-control" name="is-active">
        </div>
             
     

      <div class="form-group">
          <input class="btn btn-primary" type="submit" name="create_user" value="Create User">
      </div>


</form>
    