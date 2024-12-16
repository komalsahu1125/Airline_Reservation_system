  <?php

   $connection = mysqli_connect('localhost','root','', 'forget');

   if(isset($_POST['submit'])){

    $password=$_POST['password'];
    $confirm_password=$_POST['confirm-password']; 
    $request="insert into  forget2(password, confirm_password ) values ('$password', '$confirm_password')";
  mysqli_query($connection, $request);

    header('location:forget2.html');
  }
   else{
    echo('something went wrong,,try again');
  }

   ?>





