<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatable" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ABOUT</title>
        <link rel="stylesheet" type="text/css" href="REGISTER.CSS">

        <!--swiper css link-->
        <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>


        <!--font awesome cdn link-->
        <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

        <!--custom css file link-->
        <link rel="stylesheet"  href="extra1.css">

                <!-- Add icon library -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        </head>
        <body>
            <!--header section start-->
            <section class="header">

                <a href="home.php" class="logo"> 
            <ion-icon name="airplane-outline"></ion-icon>SKY-WING AIRLINE..!</a> 


                <nav class="navbar">
                   <a href="home.php"> home </a>
                   <a href="about.php"> about </a>
                   <a href="flight.html"> flight details </a>
                
                   <a href="book.php"> book</a>
                   <a href="home.php"> Contact </a>
                <!--   <a href="REGISTER.php">Login/Signup</a>-->
                </nav>

                <div id="menu-btn" class="fas fa-bars"></div>
                 
            </section>

    

        <div class="container">
            <h2> SIGNUP NOW</h2>
            <form action="register_form.php" method="post" class="signup">
                
            <div class="form-container">
                <form>
                    <div class="input-name">
                        <i class="fa fa-user lock" ></i>
                        <input type="text" placeholder="first name" class="name" name="name1">

                        <span> 
                            <i class="fa fa-user lock" ></i>
                            <input type="text" placeholder="last name" class="name"  name="name2">
                        </span>
                    </div>

                    
                            <div class="input-name">
                                    <i class="fa fa-envelope email" ></i>
                                    <input type="email" placeholder="Email" class="text-name"  name="email">
                                </div>
            
                                <div class="input-name">
                                    <i class="fa fa-lock lock" ></i>
                                    <input type="password" placeholder="password" class="text-name"  name="password">
                                </div>
            
                                <div class="input-name">
                                    <i class="fa fa-lock lock" ></i>
                                    <input type="password" placeholder="confirm password" class="text-name" name="password1">
                                </div>

                                <div class="input-name">
                                <i class="fa fa-phone" ></i>
                                    <input type="text" placeholder="mobile no" class="text-name" name="mobileno">
                                </div>
            
                                <div class="input-name">
                                    <input type="radio" name="r1"   class="radio-button"  name="gender" >
                                    <label style="margin-right: 13px;"> Male</label>
                                        
                                <input type="radio" name="r1" class="radio-button" name="gender" >
                                 <label> Female</label>

                                 <input type="radio" name="r1" class="radio-button"  name="gender">
                                 <label> Other</label>
                                </div>

                              <!--  <div class="input-name" >
                                    <select class="country" name="select1">
                                        <option>Select your country </option>
                                        <option>INDIA </option>
                                        <option> ITALY</option>
                                        <option>NEPAL </option>
                                        <option> BHUTAN </option>
                                        <option>JAPAN </option>
                                        <option> UK </option>

                                    </select>
                                <div class="arrow"></div>
                                </div> -->

                               
                                <div class="input-name">
                                <i class="fa fa-phone" ></i>
                                    <input type="text" placeholder="Name your country" class="text-name" name="country">
                                </div>
            
                                   
                                <div class="input-name">
                                   <input type="checkbox" class="check-button" name="terms">
                                   <label> 
                                    I Accept terms and condition.</label>
                                </div>

                                <div class="input-name">
                                    <input type="submit" class="button" value="Register" name="submit">
                                 </div>
 
                                <div class="input-name">
                                    <a href="flight.html" class="btn" >    NEXT </a>

                                 </div>
                           
                                 <div class="input-name">
                                    <p> already have an account ? <a href="home.php"> LOGIN NOW </a></p>
                                  </div>
 

                </form>
            </div>
        </div> 


           



            




<!--swiper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<!--custom js file link-->
<script src="extra1.js"></script>


        </body>
</html>