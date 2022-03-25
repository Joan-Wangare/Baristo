<?php

include ('dp.php');

if(isset($_POST['save']))
{
    $sql="INSERT INTO user(userId,email_Id,password)
    VALUE (
    '".$_POST["userId"]."',
    '".$_POST["email_Id"]."',
    '".$_POST["password"]."')";

    header("location:index.html");

    $result = mysqli_query($conn, $sql);

    // if($result){
    //     echo "saved";
    // } else{
    //     echo "not saved";
    // }

};
?>