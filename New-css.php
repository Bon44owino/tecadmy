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
    <title>Our Courses</title>
</head>
<body>
    <!---Navigation bar-->
    <?php include('./includes/nav.php')  ?>

    <!---Navigation bar-->

    <!---Home Section-->
    <section id="about-home">
        <h2>Enroll For Our Popular Courses/</h2>
        
    </section>
    <!---Home Section-->
 <section id="course-inner">
    <div class="overview">
        <img class="course-img" src="Assets/images/hechto.jpg" alt="">
        <div class="course-head">
            <div class="c-name">
                <h2>Styling With CSS</h2>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>CSS course from beginner level-all the way up to advanced level.</p>
            </div>
        </div>
        <h3>Instructor</h3>
        <div class="tutor">
            <img src="Assets/images/warsa.jpg" alt="">
            <div class="tutor-det">
                <h5>Boniface Owino</h5>
                <p>Web Developer at Tecadmy</p>
            </div>
        </div>
        <hr>
        <h3>Course Overview</h3>
        <p>
            Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language such as HTML or XML (including XML dialects such as SVG, MathML or XHTML).CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.
        </p>
            <hr>
            <h3>What You'll Learn</h3>
            <div class="learn">
                <p> <i class="fas  fa-check-circle"></i></i> CSS course from scratch-Beginner to advanced</p>
                <p> <i class="fas  fa-check-circle"></i></i>All about Selectors,Properties,Box-model,values e.t.c.</p>
                <p> <i class="fas  fa-check-circle"></i></i>Project-driven learning with plenty of examples</p>
                <p> <i class="fas  fa-check-circle"></i></i>All core features and concepts you need to know in modern Web development</p>
            </div>
    </div>
    <div class="enroll">
        <h3>This Course includes;</h3>
                 <p> <i class="fas fa-video"></i></i>52 hours video</p>
                <p> <i class="fas  fa-newspaper"></i></i>75 Articles</p>
                <p> <i class="fas  fa-infinity"></i></i>Full LIfetime access</p>
                <p> <i class="fas  fa-download"></i></i>Downloadable Resources</p>
                <div class="enroll-btn">
                    <a class="blue" href="https://youtu.be/qz0aGYrrlhU">Start Learning</a>
                </div>
    </div>
 </section>


 <!--Footer-->
 <?php include('./includes/footer.php'); ?>
 
</body>
</html>