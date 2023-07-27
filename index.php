<?php session_start(); ?>
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
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <title>Tecadmy</title>
</head>
<body>
    <!---Navigation bar-->
    <nav>
    <img src="Assets/images/tecdmy 1.PNG" alt="">
    <div class="navigation">
        <ul>
            <i id="menu-close" class="fas fa fa-times"></i>
            <li><a class="active" href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="course.html">Courses</a></li>
            <li><a href="ment.html">Mentorship</a></li>
            <li><a href="contact.html">Contact</a></li>
            <button onclick="window.location.href='signpage.html'" class="btnlogin-popup">Sign Up</button>
        </ul>
        <img  src="Assets/images/ham.PNG" id="menu-btn" alt="">
    </div>
</nav>
 
      <!--Forms-->


      <!-- Sessions -->
        <?php
            // Successful member registration
                if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                }
        ?>


    <!---Navigation bar-->

    <!---Home Section-->
    <section id="home">
        <h2>Access Quality Education from the Comfort of Your Home</h2>
        <p> Learning doesn't just happen during business hours in the office or in the classroom. It happens everywhere through a number of different channels.Unlock the Power of Knowledge, Ignite Your Mind, and Soar to New Heights with our Cutting-Edge Online Learning Platform, Where Learning Knows No Boundaries.The future of 
            Education is online and the future is now!
        </p>
        <div class="btn">
            <a class="green" href="about.html">Explore</a>
        </div>
    </section>
    <!---Home Section-->

     <!---Courses-->
     <section id="course">
        <h1>Popular Courses</h1>
        <p>Have a glance of our most learnt courses</p>
       
        <div class="course-box">
            <div onclick="window.location.href='course-inner.html'" class="courses">
                <img src="Assets/images/HTML 1.png" alt="">
                <div class="details">
                    <span>Updated 20/6/2023</span>
                    <h6>Introduction to HTML</h6>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>(200)</span>
                    </div>
                </div>
                
            </div>
            <div onclick="window.location.href='New-css.html'" class="courses">
                <img src="Assets/images/css 2.jpg" alt="">
                <div class="details">
                    <span>Updated 20/6/2023</span>
                    <h6>Styling Websites with CSS</h6>
                    
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>(200)</span>
                    </div>
                </div>
                
            </div>
            <div onclick="window.location.href='script.html'" class="courses">
                <img src="Assets/images/javscript.jpg" alt="">
                <div class="details">
                    <span>Updated 20/6/2023</span>
                    <h6>Javascript Beginners Course</h6>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>(200)</span>
                    </div>
                </div>
                
            </div>
            
            <div onclick="window.location.href='python.html'" class="courses">
                <img src="Assets/images/python.png" alt="">
                <div class="details">
                    <span>Updated 20/6/2023</span>
                    <h6>Introduction to Python Programming</h6>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>(200)</span>
                    </div>
                </div>
                
            </div>
            <div onclick="window.location.href='java.html'" class="courses">
                <img src="Assets/images/java.png" alt="">
                <div class="details">
                    <span>Updated 20/6/2023</span>
                    <h6>Java for Beginners</h6>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>(200)</span>
                    </div>
                </div>
                
            </div>
            
            <div onclick="window.location.href='flutter.html'" class="courses">
                <img src="Assets/images/flutter sd.png" alt="">
                <div class="details">
                    <span>Updated 20/6/2023</span>
                    <h6>Introduction to Mobile App development with Flutter</h6>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>(200)</span>
                    </div>
                </div>
                
            </div>

        </div>
        

     </section>
      <!---Courses-->

      <!--Profiles-->
      <section id="experts">
        <h1>Our Instructors</h1>
        <p>In learning you will teach,and in teaching you will learn</p>
        <div class="expert-box">

            <div class="profile">
                <img src="Assets/images/lec 1.png" alt="">
                <h6>Boniface Ode</h6>
                <p>Web & UI/UX Design</p>
                <div class="pro-links">
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>

            <div class="profile">
                <img src="Assets/images/simon mas.png" alt="">
                <h6>Simon Masinde</h6>
                <p>Flutter & Python</p>
                <div class="pro-links">
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>

            <div class="profile">
                <img src="Assets/images/new lec 1.png" alt="">
                <h6>Ezra Tambo</h6>
                <p>Kotlin & Java</p>
                <div class="pro-links">
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>

            <div class="profile">
                <img src="Assets/images/New lec 22.png" alt="">
                <h6>Rachel Mong'are</h6>
                <p>React & Javascript</p>
                <div class="pro-links">
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>
        </div>

      </section>
      <!--Profiles-->

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
<script>
    $('#menu-btn').click(function(){
  $('nav .navigation ul').addClass('active')
})

$('#menu-close').click(function(){
  $('nav .navigation ul').removeClass('active')
})

</script>
</body>
</html>