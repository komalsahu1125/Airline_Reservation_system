<!DOCTYPE ht<ml>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatable" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BOOK</title>
        <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>       
        <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">   
        <link rel="stylesheet"  href="extra1.css">
        </head>
        <body>   
            <section class="header">
                <a href="home.php" class="logo"> 
            <ion-icon name="airplane-outline"></ion-icon>SKY-WING AIRLINE..!</a> 
                <nav class="navbar">
                   <a href="home.php"> Home </a>
                   <a href="about.php"> About </a>
                   <a href="REGISTER.php">Login/Signup</a>
                   <a href="flight.html">Flight details</a>
                   <a href="home.php"> Contact </a>
                </nav>
                <div id="menu-btn" class="fas fa-bars"></div>              
                </section>   
            <div class="heading" style="background: url(../cloud3.jpg)">
             <h1> Book now</h1>
            </div>  
  

            <section class="booking">
            <h1 class="heading-title">Book your flight..</h1>          
            <form action="book_form.php" method="post" class="book-form">
            <div class="flex">
               <div class="inputBox">
                  <span> Full name:</span>
                  <input type="text" placeholder="Enter your name" name="name">
               </div>
               <div class="inputBox">
                  <span>Email:</span>
                  <input type="email" placeholder="Enter your emai;" name="email">
               </div>
               <div class="inputBox">
                  <span>Phone:</span>
                  <input type="text" placeholder="Enter your number" name="phone">
               </div>         
               <div class="inputBox">
                  <span>Address:</span>
                  <input type="text" placeholder="Enter your address" name="address">
               </div>
               <div class="inputBox">
                  <span>departure/from:</span>
                  <input type="text" placeholder="place where you want to take flight" name="location1">
               </div>
               <div class="inputBox">
                  <span>arrival/to</span>
                  <input type="text" placeholder="place where you want to visit" name="location2">
               </div>
               <div class="inputBox">
                  <span>Passenger(s)</span>
                  <input type="number" placeholder="How many guests" name="guests">
               </div>                              
               <div class="inputBox">
                  <span>Travel date</span>
                  <input type="Date" name="date">
               </div>
               <div class="inputBox">
                  <span>select your class</span>   
                  <select class="country">
                  <option>--- </option>
                     <option>ECONOMY </option>
                     <option> BUSSINESS CLASS</option>
                     <option>FIRST CLASS</option>
                  </div> 
            <input type="submit" value="submit" class="button1" name="send">            
    </form>
       <form action="payment.html">
                     <div class="input-name">
                          <input type="submit" class="button" value="NEXT">
                        </div>
               </form></section>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="extra1.js"></script>
    </body>
     </html>