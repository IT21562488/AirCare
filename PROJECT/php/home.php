<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AirCare - Home</title>

    <!--Stylesheets-->
    <link rel="stylesheet" href = '../css/stylesHome.css'>
    <link rel="stylesheet" href="../css/styleSubPopUp.css">
    <!-- Search Icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Social Media Icons -->
    <script src="https://kit.fontawesome.com/269c22c92a.js" crossorigin="anonymous"></script>

</head>

<?php

$cookie_name = "user";

$cookie_value = "Isuru";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");



?>
<body>
    <header>
        <nav>
            <a href="#" class = 'logo'>
                <h1 id="lgo">AIRCARE</h1>
            </a>

            <ul class = 'menu'>
                <li><a href='Home.html'>Home</a></li>
                <li><a href='Flight Details.html'>Flight Details</a></li>
                <li><a href='booking.html'>Bookings</a></li>
                <li><a href='Contact Us.html'>Contact Us</a></li>
                <li><a href='AboutUs.html'>About Us</a></li>
            </ul>

            <div class = "searchLogin">
                <div class = "search-container">
                    <div class = "searchbox-container">
                        <input type = 'search' placeholder="Search" id = "searchbox">
                    </div>
                    <div class = "sbtn-container">
                        <a href="#"><span  id ="sbtn" class="material-icons">search</span></a>
                    </div>
                </div>
                <div class="lgn">
                    <a href="login.html"><button id = "loginbtn">Log-in | Sign Up</button></a>
                </div>
            </div>
        </nav>
    </header>

    <!--Header ends-->
    <br><br><br><br><br><br>
    <center>
    <p>This website is using cookies. By clicking Accept you agree to our Privacy Policy.</p>

<?php

if(!isset($_COOKIE[$cookie_name])) {

echo "Cookie named '" . $cookie_name . "' is not set!";

} else {

// echo "Cookie '" . $cookie_name . "' is set!<br>";

// echo "Value is: " . $_COOKIE[$cookie_name];

}

?>

<p></p>
<br><br>

<a href="../html/Home.html"><button>Accept</button></a><br>
<a href="../html/Home.html"><button>Cancel</button></a><br><br><br><br><br>
</center>
    

    <!--Footer-->
  <div class = "line"><hr></div>
    <footer>
        <div class="ftcontainer">
            <div class="ftrow">
              <div class="ftcol">
                <h4>About Us</h4>
                <ul>
                  <li><a href="AboutUs.html">About AirCare</a></li>
                  <li><a href="#">Advertise With Us</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                </ul>
              </div>
  
              <div class="ftcol">
                <h4>Contact Us</h4>
                <ul>
                  <li><a href="../html/contact.html">Help Center</a></li>
                  <li><a href="../html/FAQ.html">FAQ</a></li>
                  <li><a href="#">Live Chat</a></li>
                </ul>
              </div>
  
              <div class="ftcol">
                <h4>Terms & Conditions</h4>
                <ul>
                  <li><a href="#">Service Fees</a></li>
                  <li><a href="#">Conditions of Carriage</a></li>
                </ul>
              </div>
          
              <div class="ftcol">
                <h4>Follow Us on Social Media</h4>
                <div class="social-links">
                  
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
              </div>
  
                <div class="ftcol">
            
                  <div class = "subscribe">

                    <h4>Subscribe for Newsletter</h4>
                    <center>
                        <a class="subbtn" onclick="popupToggle();">Subscribe</a>
                    </center>
                    <div id="popup">
                    <div class="content">
                        <img src="../images/mail.png">
                        <h2>Subscribe to our Newsletter</h2>
                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, suscipit eos. Quisquam assumenda neque, sit repellat velit quibusdam eligendi accusamus! Explicabo id dolorum ipsum nesciunt maxime corporis tenetur debitis magnam.</p> -->

                        <form  action = "../php/subscribe.php" method = "POST">
                            <div class="inputBox">
                                <input type = "email" placeholder="Enter Your Email" name="email" required>
                            </div>
                            <div class="inputBox">
                                <input type = "submit" value="subscribe" class="btn">
                            </div>  
                        </form>

                    </div>
                    <a class="close" onclick="popupToggle();"><img src="../images/close.png"></a>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <div class = "copyrights">
            Created By SLIIT GROUP MLB_03.02_04 | ALL RIGHTS RESERVED
            <br>
            <div class="unsub">
              <a href="#" class = "unsubtxt">Unsubscribe</a>
            </div>
          </div>
    </footer>
    <script src = "../js/PopUp.js"></script>

</body>
</html>