<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <style>
        .marquee-container {
            width: 100%;
            overflow: hidden;
            white-space: nowrap;
        }

        .marquee {
            display: inline-block;
            animation: marquee 15s linear infinite;
            font-size: 2em;
            color: #342798;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); /* Add a subtle text shadow */
        }

        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }
        h3 {
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
}
body {
    font-family: 'Open Sans', sans-serif;
}

    </style>
    <title>User Dashboard</title>
</head>
<body>
  
    <header>
    <nav>
    <img src="logo.jpeg" alt="Your Company Logo">
    <h3> Welcome to Loan Express</h3>
      <button id="colorblind-toggle">Colorblind Mode</button>
      <a href="logout.php" class="btn btn-warning"><button id="logout">Logout</button></a>
    </nav>
  </header>
  <main>
  <div class="slider-container" >
        <div class="slide" onclick="redirectToWebsite('https://www.vidyalakshmi.co.in/Students/')">
            <img src="studentimg.jpg" alt="Image1" width=1000px height=200px>
        </div>
        <div class="slide" onclick="redirectToWebsite('https://www.education.gov.in/scholarships-education-loan-4')">
            <img src="csis.jpg" alt="Image3" width=1000px height=200px>
        </div>
        <div class="slide" onclick="redirectToWebsite('https://www.mudra.org.in/')">
            <img src="mudraimg.jpg" alt="Image2" width=1000px height=200px>
        </div>
        <div class="slide" onclick="redirectToWebsite('https://msme.gov.in/1-prime-ministers-employment-generation-programme-pmegp')">
            <img src="msme.jpg" alt="Image3" width=1000px height=200px>
        </div>
        <div class="slide" onclick="redirectToWebsite('https://pmaymis.gov.in/')">
            <img src="pmay.png" alt="Image3" width=1000px height=200px>
        </div>
        <div class="slide" onclick="redirectToWebsite('https://www.rbi.org.in/commonman/English/Scripts/Notification.aspx?Id=2311')">
            <img src="kcc.jpg" alt="Image3" width=1000px height=200px>
        </div>
        <div class="slide" onclick="redirectToWebsite('https://www.standupmitra.in/Home/SUISchemes')">
            <img src="standup.jpg" alt="Image3" width=1000px height=200px>
        </div>
        <div class="slide" onclick="redirectToWebsite('https://www.startupindia.gov.in/content/sih/en/startup-scheme.html')">
            <img src="startup.png" alt="Image3" width=1000px height=200px>
        </div>
        <div class="slide" onclick="redirectToWebsite('https://nskfdc.nic.in/en/content/schemes-programmes/mahila-samridhi-yojna-msy')">
            <img src="mahila.jpeg" alt="Image3" width=1000px height=200px>
        </div>
        <div class="slide" onclick="redirectToWebsite('https://nstfdc.tribal.gov.in/(S(gsongvvc1lrm03qideojomce))/default.aspx')">
            <img src="tribes.jpg" alt="Image3" width=1000px height=200px>
        </div>
        
    </div>
    <div class="marquee-container">
        <div class="marquee">
CLICK ON THE  ABOVE BANNER TO AVAIL YOUR LOAN TODAY!!
        </div>
    </div>
  <div class="box">
  <section id="home">
    <h3><br>This platform serves as a centralized information hub for government-sponsored 
        loans and insurance schemes<br><br>It aims to provide easy access to comprehensive 
        and up-to-date details from diverse sources like NABARD and RBI. 
        By doing so, the project seeks to empower individuals and businesses with 
        the knowledge needed to make informed decisions and leverage government financial support effectively, 
        ultimately promoting financial inclusion and efficiency in accessing these critical resources</h3>

    </section>
    <section id="contact-us">
        <h2>Contact Us</h2>
        <h3>If you have any questions, feel free to contact us:</h3>
        <h3>
        <address>
            Email: <a href="mailto:info@loanexpress.com">info@loanexpress.com</a><br>
            Phone: +91 83100527898 
        </address></h3>
    </section>

    <footer>
        <p>&copy; 2023 Loan Express. All rights reserved.</p>
    </footer>
      </div>
  </main>
  <script src="script.js"></script>
  <script src="script1.js"></script>
  <script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
<script src="https://mediafiles.botpress.cloud/7665d68d-a20e-4808-9b31-dd6b2fa287c8/webchat/config.js" defer></script>
<!-- <script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
<script src="https://mediafiles.botpress.cloud/7665d68d-a20e-4808-9b31-dd6b2fa287c8/webchat/config.js" defer></script>   -->
</body>
</html>