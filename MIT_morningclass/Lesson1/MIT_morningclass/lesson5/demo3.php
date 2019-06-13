



<?php

$firstname = $lastname = $email = $password = "";

$firstnameErr = $lastnameErr = $emailErr = $passwordErr = "";



if ($_SERVER["REQUESTED_METHOD"] == "POST"){
$firstname = clean_data($_POST['firstname']);
$lastname = clean_data($_POST['lastname']);
$email = clean_data($_POST['email']);
$password = $_POST['password'];

$success_msg = $msg = "";




if ($_SERVER["REQUEST_METHOD"] == 'POST'){
    if (empty($firstname)){
            $firstnameErr = "please enter firstname";
            }else{
            $firstname = clean_data($_POST("firstname"));
            }
            
            if (empty($lastname)){
            $lastnameErr = "please enter lastname";
            }else{
            $lastname = clean_data($_POST("lastname"));
            }
            
            if (empty($email)){
            $emailErr = "please enter email";
            }else{
            $email = clean_data($_POST("email"));
            }
            
            if (empty($password)){
            $passwordErr = "please enter password";
            }else{
            $password = $_POST("password");
            $msg = check_password($password);
            }
}}

function clean_data($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    
    return $data;

}

#create a function
#function takes an argument(password)
#check no. of characters
#strength of the password
#special characters

function check_password($pass_data){
    $num_chars = strlen($pass_data);
    
    #check if the no of characters is less than or equal to 8
    if ($num_chars >= 8 && $num_chars <= 12){
        $succes_msg = "strong password";
        return $success_msg;
    }elseif ($num_chars <8 ){
    $passwordErr = "weak password";
    return $passwordErr;

    }elseif(strpos($pass_data, '@') != "@"){
    $passwordErr = "password should contain special character @ ";
    return $passwordErr;


    }

}

check_password( "pass1234");




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP FORMS</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <h1 style="background-color: orangered">Welcome to php form</h1>
</header>
<br><br/>
<div class="container">
    <form action=""method="POST" role="form" class="fore-group">
        <label for="First name">
            Firstname
        </label>
        <input type="text" name="firstname" class="form-control" placeholder="Enter First name">
        <br><br/>
        <label for="lastname">
            lastname
        </label>
        <input type="text" name="lastname" class="form-control" placeholder="Enter last name">
        <br><br/>
        <label for="email">
            Email
        </label>
        <input type="email" name="email" class="form-control" placeholder="Enter email">
        <br><br/>
        <label for="password">
            Password
        </label>
        <input type="password" name="password" class="form-control" placeholder="Enter email">
        <br><br/>
        <input type="submit" value="Register" class="btn btn-primary btn-block">
        <br><br/>
    </form>
</div>
</body>
</html>










































