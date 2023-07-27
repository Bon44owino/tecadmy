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
    <title>Become a Mentor</title>
</head>
<body>
    <!---Navigation bar-->
    <?php include('./includes/nav.php')  ?>
 

    <!---Navigation bar-->

    <!---Home Section-->
    <section id="homo">
        <h2>APPLY TO BECOME A MENTOR</h2>
        <p> Get Paid while making impact in the lives of others.
        </p>
        <div class="btn">
            <a class="green" href="#">Become A Mentor Now</a>
        </div>
    </section>
    <!---Home Section-->
     <!---Menta features-->
    <section id="features">
        <h1>Live Mentorship Program</h1>
        <p>Set your own schedule  and provide live One-On-One mentorship to help fellow developers .</p>
        <div class="fea-base">
            <div class="fea-box">
                <i class="fas fa-laptop"></i>
                <h3>Live 1:1 Mentorship</h3>
                <p>Provide live 1:1 help by answering questions and doing code reviews online via screen sharing, video, and text.</p>
            </div>
            <div class="fea-box">
                  <i class="fas fa-money-bill"></i>
                <h3>Get Paid</h3>
                <p>Get paid per session as you provide Live mentorship to the developers.</p>
            </div>
            <div class="fea-box">
                <i class="fas fa-clock"></i>
                <h3>Work at Your Pace</h3>
                <p>Work whenever it suits you. You decide your own schedule and customize your availability however you'd like.</p>
            </div>
        </div>
        </section>
    

      <!--Profiles-->
      <section id="experts">
        <h1>Join Our Network of Top Mentors</h1>
        <p>Among our 500+ vetted expert mentors are authors of books, well-known open source contributors, top Stack Overflow users, and engineers at leading tech firms.</p>
        <div class="expert-box">

            <div class="profile">
                <img src="Assets/images/Charles 1.png" alt="">
                <h6>Charles Edward</h6>
                <p>Senior Backend Developer</p>
                <div class="pro-links">
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>

            <div class="profile">
                <img src="Assets/images/janeh-1.png" alt="">
                <h6>Jane Macharia</h6>
                <p>Senior Front-end Developer</p>
                <div class="pro-links">
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>

            <div class="profile">
                <img src="Assets/images/Mark-1.png" alt="">
                <h6>Mark Griffith</h6>
                <p>Software Engineer</p>
                <div class="pro-links">
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>

            <div class="profile">
                <img src="Assets/images/Rajesh-1.png" alt="">
                <h6>Rajesh Patel</h6>
                <p>Data Science Engineer</p>
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
  <?php include('./includes/footer.php'); ?>
  
</body>
</html>