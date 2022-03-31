<?php include 'includes/header.php';?>
<?php include('formProcess.php');?>
<form id="register" class="input-group" method="POST">
    <?php include('errors.php'); ?>
    <input type="text" class="input-field" placeholder="Username" name="userId"/>
    <input type="email" class="input-field" placeholder="Email Id" name="email_Id"/>
    <input type="password" class="input-field" placeholder="Password" name="password"/>
    <input type="checkbox" class="check-box" />
    <span>I agree to the terms & conditions</span>
    <button type="submit" class="submit-btn" name="save"> Register </button>
</form>