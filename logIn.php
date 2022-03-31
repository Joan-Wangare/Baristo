<?php include 'includes/header.php';?>
<?php include('formProcess.php');?>
<form id="login" class="input-group" method="POST">
    <?php include('errors.php');?>
    <input type="text" class="input-field" placeholder="User Id" name="userId"/>
    <input type="password" class="input-field" placeholder="Password" name="password"/>
    <input type="checkbox" class="check-box" /><span>Remember Password</span>
    <button type="submit" class="submit-btn" name="log">Log in</button>
</form>