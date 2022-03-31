<?php 


if(isset($_GET['edit_user'])) {
    $user_id_fetch = $_GET['edit_user'];
  

    $query = "SELECT * FROM admin WHERE id = $user_id_fetch";
            $select_user = mysqli_query($conn, $query);
            while($row = mysqli_fetch_assoc($select_user)) {
                $user_id = $row['id'];
                $username = $row['name'];
                $email = $row['email'];
                $isActive = $row['is_active'];
                
            }     
}

if(isset($_POST['edit_user'])) {

    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $isActive = $_POST['is-active'];
    // $user_password = $_POST['password'];
        // function for the Image
    
    $query = "UPDATE admin SET name ='{$username}', email ='{$email}', is_active = '{$isActive}' WHERE id = $user_id_fetch ";


    $update_user = mysqli_query($conn, $query);
    $_SESSION['status'] = "";
    confirmQuery($update_user);

}




?>
<div class="alert-success" id="change-alert"><?php echo $_SESSION['status'] = "User added Successfully!";?></div>
<h1 class="page-header">
        Edit User
    </h1>
<form action="" method="post" enctype="multipart/form-data">    
     

      <!-- <div class="form-group">
            <label for="product_category_id">Product Category Id(Match this with the Categories Id)</label>
            <input type="text" class="form-control" name="product_category_id">
      </div> -->

      <div class="form-group">
         <label for="username">Username</label>
          <input type="text" class="form-control" name="username" value= "<?php echo $username;?>">
      </div>
      <div class="form-group">
         <label for="email">Email</label>
          <input type="text" class="form-control" name="email" value="<?php echo $email;?>">
      </div> 
      <div class="form-group">
         <label for="is-active">Is Active</label>
          <input type="text" class="form-control" name="is-active" value="<?php echo $isActive;?>">
      </div> 

      <div class="form-group">
          <input class="btn btn-primary" type="submit" name="edit_user" value="Edit User">
      </div>


</form>
    