<?php

$connection = mysqli_connect('localhost','root','', 'signup');

if(isset($_POST['submit'])){

    $name1=$_POST['name1']; 
    $name2=$_POST['name2'];
    $email=$_POST['email']; 
    $password=$_POST['password'];
    $password1=$_POST['password1']; 
    $mobileno=$_POST['mobileno'];
    $country=$_POST['country']; 
   /* $select1=$_POST['select1'];*/
   
    
   
    $request="insert into  signup2(name1, name2, email, password, password1, mobileno, country) values
    ('$name1', '$name2', '$email', '$password',	'$password1', '$mobileno', '$country')";

    mysqli_query($connection, $request);

    header('location:REGISTER.php');
}
else{
    echo('something went wrong,,try again');
}

?>


