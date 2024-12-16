<?php

$connection = mysqli_connect('localhost','root','','book_db');

if(isset($_POST['send'])){

    $name=$_POST['name'];
    $email=$_POST['email']; 
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $location1=$_POST['location1'];
    $location2=$_POST['location2'];
    $guests=$_POST['guests'];
    $date=$_POST['date'];
    
   
    $request="insert into  book_form(name, email, phone, address, location1, location2, guests, date) values
    ('$name','$email','$phone', '$address', '$location1', '$location2',	'$guests', '$date')";

    mysqli_query($connection, $request);

    header('location:book.php');
}
else{
    echo('something went wrong,,try again');
}


