<?php

$connection = mysqli_connect('localhost','root','', 'payment');

if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $email=$_POST['email']; 
    $address=$_POST['address'];
    $city=$_POST['city']; 
    $pincode=$_POST['pincode'];
    $card=$_POST['card']; 
    $month=$_POST['month'];
    $cvv=$_POST['cvv']; 
  
  
    
   
    $request="insert into   payment2(name, email, address, city, pincode, card, month, cvv) values
     ('$name',	'$email',	'$address',	'$city',	'$pincode',	'$card',	'$month',	'$cvv'	)";

    mysqli_query($connection, $request);

    header('location:payment.html');
}
else{
    echo('something went wrong,,try again');
}

?>