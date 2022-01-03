<?php
session_start();
if(!isset($_SESSION['id'])){ //if login in session is not set
	echo "<script language='javaScript'>alert('Error! Please Login!');
		window.location.href='landing.html';</script>";
}
include ('dbcon.php')
?>

<!DOCTYPE html>
<html>
<head>
 <title>Leave Library</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="icon" href="https://3.bp.blogspot.com/-78YgnWTXN_4/WsVR0ygpRZI/AAAAAAAABK0/L4RwchsSuEISEwtw-0Fv86fTGO9Ui-LPwCLcBGAs/s1600/prasarana.jpg">
<style>
body{
background-color:#F8F8F9;
}
.nav-item{
align:center;
}
        /* ----- container stylings: 
        -> centers the whole content of the page
        -> defines width and height for container ----- */
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: auto;
            width: 100%;
          
        }
        /* ----- end of container stylings ----- */
  
        /* provides padding to main heading */
        .main-heading {
            padding: 2rem 0 2rem 0;
        }
  
        .content {
            position: relative;
        }
  
        /* ----- carousel content stylings ----- */
        /* places the carousel content on center of the carousel */
        .carousel-content {
            position: absolute;
            /*to center the content horizontally and vertically*/
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%); 
            text-align: center;
            z-index: 50;
        }
        .carousel-heading {
            font-size: 3rem;
            color: #308d46;
            margin-bottom: 1rem;
        }
        /*----- end of carousel content stylings ----- */
  
        /* ----- slideshow stylings ----- */
        .slideshow {
            height: 100%;
            overflow: hidden; /* to hide slides in x-direction */
            position: relative;
            max-height:400px;
			width: 100%;
			min-width: 100%;
        }
        /* wrapper which wraps all the slideshow images stylings */
        .slideshow-wrapper {
            display: flex;
            /* We give it width as 400% because we are making a 
               4 image carousel. If you want to make for example, 
               5 images carousel, then give width as 500%. */
            width: 400%;
            height: 100%;
            position: relative;
            /* you can change the animation settings from below */
            animation: slideshow 50s infinite;
         }
        /* define width and height for images*/
        .slide {
            width: 100%;
            height: 100%;
        }
        .slide-img {
            width: 100%;
            height: 100%;
			min-height: 400px;
            object-fit: contain;
        }
        /* @keyframes are used to provide animations
           We make these settings for 4 image carousel.
           Make modification accourding to your needs. */
        @keyframes slideshow {
            0%  { left: 0; }
            10% { left: 0; }
            15% { left: -100%; }
            25% { left: -100%; }
            30% { left: -200%; }
            40% { left: -200%; }
            45% { left: -300%; }
            55% { left: -300%; }
            60% { left: -200%; }
            70% { left: -200%; }
            75% { left: -100%; }
            85% { left: -100%; }
            90% { left: 0%; }
        }
        /* ----- end of slideshow stylings ----- */
  
        /* ----- carousel control buttons stylings ----- */
        .slide-btn {
            background-color: #bbb;
            border-radius: 50%;
            border: .2rem solid #626262;
            width: 1.2rem;
            height: 1.2rem;
            outline: none;
            cursor: pointer;
            /* stylings for positioning the buttons at
               the bottom of the carousel */
            position: absolute;
            bottom: 3%;
            left: 50%;
            transform: translateX(-50%);
            z-index: 70;
        }
        /* As we provide position as absolute, 
        the buttons places one over the other. 
        So, we have to place them individually
        at their correct positions. */
        .slide-btn-1 {
            left: 45%;
        }
        .slide-btn-2 {
            left: 50%;
        }
        .slide-btn-3 {
            left: 55%;
        }
        .slide-btn-4 {
            left: 60%;
        }
        /* When we focus on the particular button, 
        the animation stops to that particular image 
        to which the button is associated. */
        .slide-btn-1:focus~.slideshow-wrapper {
            animation: none;
            left: 0;
        }
        .slide-btn-2:focus~.slideshow-wrapper {
            animation: none;
            left: -100%;
        }
        .slide-btn-3:focus~.slideshow-wrapper {
            animation: none;
            left: -200%;
        }
        .slide-btn-4:focus~.slideshow-wrapper {
            animation: none;
            left: -300%;
        }
        /* when we focus on the button, the background color changes */
        .slide-btn:focus {
            background-color: #308d46;
        }
	.slide-btn:hover{
		background-color: #BA6100;
	}
	.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
#card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 5px;
  text-align: center;
  background-color: #f1f1f1;
}
footer{
background-color:black;
color:white;
}
button{
background-color:black;
color:white;
}
#mainsection{
padding-top:50px;
padding-bottom:30px;
}
</style>
<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="prasarana.php"><img src="Logo_prasarana.png" alt="Home" width="350px" height="auto" class="attachment-full size-full" alt="myhrportal-logo" loading="lazy"sizes="(max-width: 650px) 100vw, 650px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button></div>
 <div class="container-fluid">
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav" id="nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Entitlement</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Guidelines</a>
        </li>
 <li class="nav-item">
          <a class="nav-link" href="#">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://myhrportal.prasarana.com.my/">Myhr Portal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Log Out</a>
        </li>        
      </ul>
    </div>
  </div>
</nav>
 <div class="container" style="width: 100%; max-width: 1480px;">
        <div class="content">
            <!-- The content which is placed at the center of the carousel -->
            <div class="slideshow">
                <!-- carousel control buttons -->
                <button class="slide-btn slide-btn-1"></button>
                <button class="slide-btn slide-btn-2"></button>
                <button class="slide-btn slide-btn-3"></button>
                <button class="slide-btn slide-btn-4"></button>
                <!-- carousel wrapper which contains all images -->
                <div class="slideshow-wrapper">
                    <div class="slide">
                        <img class="slide-img"
                            src=
"https://image-service-cdn.seek.com.au/841f7a2b9d8ba17a5dea5962092ba4f257018db1/a868bcb8fbb284f4e8301904535744d488ea93c1">
                    </div>
                    <div class="slide">
                        <img class="slide-img"
                            src=
"https://bfmcms.s3.amazonaws.com/websiteimages/images-lrt.webp">
                    </div>
                    <div class="slide">
                        <img class="slide-img" src=
"https://lifestyle.prod.content.iproperty.com/news/wp-content/uploads/sites/3/2017/11/10041426/7a94e858-ad03-43b9-908d-bae9d4afac9a.jpg">
                    </div>
                    <div class="slide">
                        <img class="slide-img" src=
"https://assets.bharian.com.my/images/articles/MINI_BAS%3Bsednvadjfuhierfuhiu78473t56_1592482036.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>	
</head>

	<body>
<div class="container" id="mainsection">
<h1>Hi! Welcome to Leave Records</h1><br>
<div></div>
</div>
	<section id="kad2">	
<div class="row">
	<div class="col-md-1">
		<div class="card"></div></div>
  <div class="column">
    <div class="card" id="card">
      <div class="container">
        <h2>New Leave Entries&nbsp;</h2>
        <p class="title">&nbsp;</p>
        <p>Click on the button below to update the staff's leave application</p>
        <p>&nbsp;</p>
        <p><a href="newentry.php"><button class="button">New Entries</button></a></p>
      </div>
    </div>
</div>
  <div class="column">
	  <div class="card" id="card">
      <div class="container">
        <h2>Staff Leave Status&nbsp;</h2>
        <p class="title">&nbsp;</p>
        <p>Click on the button below to view or check the staff leave status</p>
        <p>&nbsp;</p>
        <p><a href="profile.php"><button class="button">Check Status</button></a></p>
      </div>
    </div>
  </div>
	<div class="column">
    <div class="card" id="card">
      <div class="container">
        <h2>Guidelines for Leave</h2>
        <p class="title">&nbsp;</p>
        <p>Click on the button below to see the leave entitlement according to the staff grade</p>
        <p>&nbsp;</p>
        <p>
          <button class="button">Guidelines</button></p>
      </div>
    </div>
  </div>
</div>
	</section><br><br>
</body>
<footer>
<p style="text-align:center;">Copyright &copy; Prasarana Malaysia Berhad</p>
</footer>
</html>