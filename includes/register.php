<?php session_start();?>
<?php include('signUp.php');?>
<form id="register" class="input-group" method="POST">
    <?php include('errors.php'); ?>
    <input type="text" class="input-field" placeholder="User Id" required name="userId"/>
    <input type="email" class="input-field" placeholder="Email Id" required name="email_Id"/>
    <input type="password" class="input-field" placeholder="Password" required name="password"/>
    <input type="checkbox" class="check-box" />
    <span>I agree to the terms & conditions</span>
    <button type="submit" class="submit-btn" name="save"> Register </button>
</form>