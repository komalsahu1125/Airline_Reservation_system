<?php

$connection = mysqli_connect('localhost','root','', 'register');

if(isset($_POST['loginpage'])){

    $email=$_POST['email']; 
    $password=$_POST['password'];
    
   
    $request="insert into   login(email, password) values
    ('$email', '$password' )";

    mysqli_query($connection, $request);

    header('location:home.php');
}
else{
    echo('something went wrong,,try again');
}

?>