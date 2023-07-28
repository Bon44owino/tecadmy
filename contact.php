<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,400&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <script src="script.js"></script>
    <title>Contact Us</title>
</head>
<body>
    <!---Navigation bar-->
    <nav>
    <img src="Assets/images/tecdmy 1.PNG" alt="">
    <div class="navigation">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a  href="course.html">Courses</a></li>
            <li><a href="ment.html">Mentorship</a></li>
            <li><a class="active"  href="contact.html">Contact</a></li>
            <button onclick="window.location.href='signpage.html'"  class="btnlogin-popup">Login</button>
        </ul>
    </div>
</nav>


    <!---Home Section-->
    <section id="about-home">
        <h2> Contact Us/</h2>
        
    </section>
   
    <!---Contact Us form-->
    <section id="contact">
        <div class="getin">
            <h2>Get in Touch</h2>
            <p>Looking for help?Fill the form and start a new adventure</p>
            <div class="getin-details">
                <h3>Headquaters</h3>
                <div>
                    <i class="fas fa-home get"></i>
                    <p>Riara Downs Apartments,Riara Road</p>
                </div>
                <h3>Phone</h3>
                <div>
                    <i class="fas fa-phone-alt get"></i>
                    <p>(+254) 986 453 333 <br> (+254) 765 453 631 </p>
                </div>
                <h3>Support</h3>
                <div>
                    <i class="fas fa-envelope-open-text get"></i>
                    <p>Tecadmy@support.com</p>
                </div>
                <h3>Follow Us</h3>
                <div class="pro-links">
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>
        </div>
        <form  class="form" action="./database/code.php" method="post">
            <!-- <div class="form ">  -->
                <h4>Let's Connect</h4>
                <p>Please fill in your details and reach to us</p>
                <div class="form-row">
                    <input type="text" name="name" placeholder="Your Name">
                    <input type="text" name="email" placeholder="Email">
                </div>
                <div class="form-col">
                    <input type="text" name="subject" placeholder="Subject">
                </div>
                <div class="form-col">
                    <textarea name="body" id="" cols="30" rows="8" placeholder="Send us a Message"></textarea>
                </div>
                <div class="form-col">
                    <button type="submit" name="submitMessage">Submit</button>
                </div>
            <!-- </div> -->
        </form>
    </section>

 <!--Footer-->
 <footer>
    <div class="footer-col">
     <h3>Features</h3>
     <li>About</li>
     <li>Courses</li>
     <li>Mentorship</li>
     <li>Contact</li>
    </div>
    <div class="footer-col">
     <h3>Get Help</h3>
     <li>Contact us</li>
     <li>FAQS</li>
     <li>Terms & Services</li>
     <li>Privacy Policy</li>
    </div>
    <div class="footer-col">
     <h3>Top products</h3>
     <li>Manage reputation</li>
     <li>Power tools</li>
     <li>Managed websites</li>
     <li>Marketing Services</li>
    </div>
    <div class="footer-col">
     <h3>Follow us</h3>
     <li>Instagram</li>
     <li>Twitter</li>
     <li>Facebook</li>
     <li>Linkedn</li>
    </div>
    <div class="footer-col">
     <h3>Newsletter</h3>
     <p>You can trust us.We only send promo offers</p>
     <div class="subscribe">
         <input type="text" placeholder="Your Email address">
         <a href="#" class="yellow">SUBSCRIBE</a>
     </div>
    </div>
    <div class="copyright">
     <p>Copyright@2023 all rights reserved|Tecadmy.com</p>
     <div class="pro-links">
         <i class="fab fa-instagram"></i>
          <i class="fab fa-twitter"></i>
         <i class="fab fa-linkedin-in"></i>
     </div>
    </div>
 </footer>
</body>
</html>