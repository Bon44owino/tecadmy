<?php 
    if(session_status() != PHP_SESSION_ACTIVE)
    {
        session_start();
    }

    if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
        echo $_SESSION['success'];
        unset($_SESSION['success']);
      }

      // Incase of failure
      if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
        echo $_SESSION['status'];
        unset($_SESSION['status']);
      }

?>
<nav>
    <img src="Assets/images/tecdmy 1.PNG" alt="">
    <div class="navigation">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a class="active"  href="about.php">About</a></li>
            <li><a href="course.php">Courses</a></li>
            <li><a href="ment.php">Mentorship</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <button onclick="window.location.href='signpage.php'" class="btnlogin-popup">Login</button>
        </ul>
    </div>
</nav>