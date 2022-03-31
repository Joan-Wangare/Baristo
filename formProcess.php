<?php

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

include ('dp.php');

if(isset($_POST['save']))
{
    // receive all input values from the form
    $username = mysqli_real_escape_string($conn, $_POST['userId']);
    $email = mysqli_real_escape_string($conn, $_POST['email_Id']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password)) { array_push($errors, "Password is required"); }

    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM user WHERE userId='$username' OR email_Id='$email' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { // if user exists
        if ($user['userId'] === $username) {
        array_push($errors, "Username already exists");
        }

        if ($user['email_Id'] === $email) {
        array_push($errors, "email already exists");
        }
    }
    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password);//encrypt the password before saving in the database

        $query = "INSERT INTO user (userId, email_Id, password) 
                VALUES('$username', '$email', '$password')";

          
        mysqli_query($conn, $query);
        $_SESSION['username'] = $username;
        header('location: index.php');
        // $_SESSION['success'] = "You are now logged in";
    }
    $get_username = "'SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $get_username);
    $get_user_info = mysqli_fetch_array($result);
    $_SESSION['username'] = $username;

}

    // LOGIN USER
    if (isset($_POST['log'])) {
        $username = mysqli_real_escape_string($conn, $_POST['userId']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
    
        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }
    
        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM user WHERE userId='$username' AND password='$password'";
            $results = mysqli_query($conn, $query);
            if (mysqli_num_rows($results) == 1) {
            
            $get_user_info = mysqli_fetch_array($results);
            $_SESSION['username'] = $username;
            // header('location: index.php');
            header("Refresh: 0; url = header.php");
            }else {
                array_push($errors, "Wrong username/password combination");
            }
        }
    }

?>