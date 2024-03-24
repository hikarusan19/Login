<?php

include("connection.php");
$fullname= $email= $password= $cpassword="";
$fullnameErr= $emailErr= $passwordErr= $cpasswordErr="";

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["fullname"])){
        $fullnameErr="Full name is Required!!";
    
    }
    else{
        $fullname= $_POST["fullname"];
    }

}
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["email"])){
        $emailErr="Email is Required!!";
    
    }
    else{
        $email= $_POST["email"];
    }

}
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["password"])){
        $passwordErr="PASSWORD is Required!!";
    
    }
    else{
        $password= $_POST["password"];
    }

}
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["cpassword"])){
        $cpasswordErr="Re-Enter password!!";
    
    }
    else{
        $cpassword= $_POST["cpassword"];
    }

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registraion Form</title>
    <link rel="stylesheet" href="login.css">
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
    <form class="log_form"  name="form" action=" <?php htmlspecialchars("PHP_SELF")?>" method="post">
            <h1>Sign-Up</h1>
            <div class="input-box">
                <input type="text" value="<?php echo $fullname;?>" id="name" class="form-control" name="fullname" placeholder="Full Name">
                <span class="error" style="color: red"><?php echo $fullnameErr ?></span>
            </div>
            <div class="input-box">
                <input type="email" value="<?php echo $email;?>" id="email" class="form-control" name="email" placeholder="Email">
                <span class="error" style="color: red"><?php echo $emailErr ?></span>
            </div>
            <div class="input-box">
                <input type="password" value="<?php echo $password;?>" id="password"  class="form-control" name="password" placeholder="Password">
                <span class="error" style="color: red"><?php echo $passwordErr ?></span>
            </div>
            <div class="input-box">
                <input type="password" value="<?php echo $cpassword?>" id="password" class="form-control" name="cpassword" placeholder="Repeat Password">
                <span class="error" style="color: red"><?php echo $cpasswordErr ?></span>
            </div>
            <div class="for-btn">
                <input type="submit" class="btn btn-primary" value="Register" name="submit"> 
            </div>
            <div class="register-link">
                    <p>Already a member?  <a href="login.php">Sign-in</a> </p>
                </div>
        </form>
    </div>
</body>
</html>