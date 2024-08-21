<!DOCTYPE html>
<html lang="en">
<head>

     <title>Arabinda Gram Panchayet</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">

     <!-- Bootstrap JavaScript -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

     <!-- Font Awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>

     <?php include('nav.php'); ?>


<!-- HOME -->
<section id="home">
     <div class="row">

          <div class="owl-carousel owl-theme home-slider">
               <div class="item item-first">
                    <div class="caption">
                         <div class="container">
                              <div class="col-md-6 col-sm-12">
                                   <h1>Welcome to Our Panchayat Complaint Portal</h1>
                                   <h3>Submit your grievances online and get them addressed by your local Panchayat authorities.</h3>
                                   <a href="#feature" class="section-btn btn btn-default smoothScroll">Learn more</a>
                              </div>
                         </div>
                    </div>
               </div>

               <div class="item item-second">
                    <div class="caption">
                         <div class="container">
                              <div class="col-md-6 col-sm-12">
                                   <h1>Your Voice Matters</h1>
                                   <h3>Report issues in your village, from infrastructure to social welfare, and help us serve you better.</h3>
                                   <a href="#courses" class="section-btn btn btn-default smoothScroll">File a Complaint</a>
                              </div>
                         </div>
                    </div>
               </div>

               <div class="item item-third">
                    <div class="caption">
                         <div class="container">
                              <div class="col-md-6 col-sm-12">
                                   <h1>Stay Informed</h1>
                                   <h3>Get updates on the status of your complaints and ongoing projects in your Panchayat area.</h3>
                                   <a href="#contact" class="section-btn btn btn-default smoothScroll">Contact Us</a>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</section>


<!-- FEATURE SECTION -->
<section id="feature">
     <div class="container">
         <div class="row">
 
             <!-- Notice Board Section -->
             <div class="col-md-5 col-sm-12">
                 <div class="notice-board">
                     <div class="notice-header">
                         <h3><i class="fa fa-bullhorn"></i> Notice Board</h3>
                     </div>
                     <div class="notice-content-wrapper">
                         <div class="notice-content">
                             <ul>
                                 <li>
                                     <i class="fa fa-calendar"></i> 
                                     <a href="#">Panchayat meeting on August 20th</a>
                                     <span class="date">Aug 18, 2024</span>
                                 </li>
                                 <li>
                                     <i class="fa fa-wrench"></i> 
                                     <a href="#">New sanitation project starting soon</a>
                                     <span class="date">Aug 15, 2024</span>
                                 </li>
                                 <li>
                                     <i class="fa fa-tint"></i> 
                                     <a href="#">Water supply maintenance schedule</a>
                                     <span class="date">Aug 12, 2024</span>
                                 </li>
                                 <li>
                                     <i class="fa fa-medkit"></i> 
                                     <a href="#">Important health camp next week</a>
                                     <span class="date">Aug 10, 2024</span>
                                 </li>
                                 <li>
                                     <i class="fa fa-building"></i> 
                                     <a href="#">Village development plans 2024</a>
                                     <span class="date">Aug 05, 2024</span>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
 
             <!-- Feature Thumbs Section -->
             <div class="col-md-7 col-sm-12">
                 <div class="row">
                     <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                             <span>01</span>
                             <h3>Submit a Complaint</h3>
                             <p>Easily report issues related to your village directly through our online platform.</p>
                         </div>
                     </div>
 
                     <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                             <span>02</span>
                             <h3>Track Complaint Status</h3>
                             <p>Stay updated on the progress of your complaint, from submission to resolution.</p>
                         </div>
                     </div>
 
                     <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                             <span>03</span>
                             <h3>Connect with Authorities</h3>
                             <p>Communicate directly with Panchayat officials to resolve your issues efficiently.</p>
                         </div>
                     </div>
                 </div>
             </div>
 
         </div>
     </div>
 </section> 
 
<!-- CSS Styles -->
<style>
.row {
    display: flex;
    flex-wrap: wrap;
    margin: 0 -15px; /* Adjusting margin to compensate for padding */
}

.col-md-5,
.col-md-7,
.col-sm-12,
.col-sm-4 {
    padding: 0 15px; /* Adding padding for spacing */
}

.notice-board {
    background: #ffffff;
    border-radius: 8px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
    overflow: hidden;
    height: 400px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    margin-bottom: 30px; /* Add space below the notice board */
}

.notice-header {
    background: #007bff;
    color: #fff;
    padding: 15px;
    text-align: center;
    border-bottom: 3px solid #0056b3;
}

.notice-header h3 {
    margin: 0;
    font-size: 24px;
    font-weight: 600;
}

.notice-header i {
    margin-right: 8px;
}

.notice-content-wrapper {
    flex-grow: 1;
    overflow: hidden;
    display: flex;
    align-items: center; 
}

.notice-content {
    width: 100%;
    padding: 10px 15px;
    box-sizing: border-box;
    animation: scrollUp 10s linear infinite; /* Add animation */
    overflow: hidden; /* Hide overflow to keep scrolling effect */
}

.notice-content ul {
    list-style-type: none;
    padding-left: 0;
    margin: 0;
}

.notice-content ul li {
    margin-bottom: 15px;
    padding-left: 35px;
    position: relative;
    line-height: 1.5;
}

.notice-content ul li i {
    color: #007bff;
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
}

.notice-content ul li a {
    text-decoration: none;
    color: #333;
    font-weight: 500;
    transition: color 0.3s ease;
}

.notice-content ul li a:hover {
    color: #007bff;
}

.notice-content ul li .date {
    display: block;
    color: #888;
    font-size: 12px;
    margin-top: 3px;
}

@keyframes scrollUp {
    0% { transform: translateY(100%); }
    100% { transform: translateY(-100%); }
}

.feature-thumb {
    background: #ffffff;
    border-radius: 8px;
    padding: 15px;
    text-align: left;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
    height: 400px; 
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin-bottom: 30px; /* Add space below each feature thumb */
}

.feature-thumb h3 {
    margin-bottom: 10px;
}

.feature-thumb p {
    margin: 0;
}

/* Responsive Styles */
@media (max-width: 767px) {
    .col-md-5, .col-md-7 {
        flex: 0 0 100%;
        max-width: 100%;
    }
    
    .notice-board, .feature-thumb {
        height: auto; /* Adjust height for smaller screens */
    }
    
    .row {
        margin: 0; /* Remove negative margins */
    }
    
    .col-md-5,
    .col-md-7,
    .col-sm-12,
    .col-sm-4 {
        padding: 0; /* Remove padding on smaller screens */
    }
    
    .notice-content {
        animation: scrollUp 20s linear infinite; /* Slow down animation on mobile */
        height: auto; /* Allow height to adjust for content */
        overflow-y: auto; /* Enable vertical scrolling */
    }
}
</style>




 
 <script>
 const noticeContent = document.querySelector('.notice-content');
 
 noticeContent.addEventListener('mouseover', () => {
     noticeContent.style.animationPlayState = 'paused';
 });
 
 noticeContent.addEventListener('mouseout', () => {
     noticeContent.style.animationPlayState = 'running';
 });
 </script>


<!-- GALLERY SECTION -->
<section id="gallery" class="gallery-section">
    <div class="container">
        <div class="section-title">
            <h2>Our Gallery</h2>
            <p>Explore our collection of beautiful moments.</p>
        </div>
        <div class="gallery-grid">
            <!-- Image 1 -->
            <div class="gallery-item">
                <img src="images/courses-image1.jpg" alt="Gallery Image 1" class="gallery-img">
                <div class="overlay">
                    <div class="overlay-text">Image Title 1</div>
                </div>
            </div>
            <!-- Image 2 -->
            <div class="gallery-item">
                <img src="images/courses-image2.jpg" alt="Gallery Image 2" class="gallery-img">
                <div class="overlay">
                    <div class="overlay-text">Image Title 2</div>
                </div>
            </div>
            <!-- Image 3 -->
            <div class="gallery-item">
                <img src="images/courses-image3.jpg" alt="Gallery Image 3" class="gallery-img">
                <div class="overlay">
                    <div class="overlay-text">Image Title 3</div>
                </div>
            </div>
            <!-- Image 4 -->
            <div class="gallery-item">
                <img src="images/courses-image4.jpg" alt="Gallery Image 4" class="gallery-img">
                <div class="overlay">
                    <div class="overlay-text">Image Title 4</div>
                </div>
            </div>
            <!-- Image 5 -->
            <div class="gallery-item">
                <img src="images/courses-image5.jpg" alt="Gallery Image 5" class="gallery-img">
                <div class="overlay">
                    <div class="overlay-text">Image Title 5</div>
                </div>
            </div>
            <!-- Image 6 -->
            <div class="gallery-item">
                <img src="images/courses-image1.jpg" alt="Gallery Image 6" class="gallery-img">
                <div class="overlay">
                    <div class="overlay-text">Image Title 6</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CSS for Gallery Section -->
<style>
/* General Gallery Styles */
.gallery-section {
    padding: 80px 0;
    background: #ffff;
}

.section-title {
    text-align: center;
    margin-bottom: 50px;
}

.section-title h2 {
    font-size: 36px;
    font-weight: 700;
    color: #333;
}

.section-title p {
    font-size: 20px;
    color: #777;
}

/* Gallery Grid */
.gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

/* Gallery Item */
.gallery-item {
    position: relative;
    overflow: hidden;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.gallery-img {
    width: 100%;
    height: auto;
    display: block;
    transition: transform 0.5s ease;
}

.gallery-item:hover .gallery-img {
    transform: scale(1.15);
}

/* Overlay */
.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    opacity: 0;
    transition: opacity 0.5s ease, transform 0.5s ease;
    display: flex;
    justify-content: center;
    align-items: center;
    transform: scale(1.2);
}

.gallery-item:hover .overlay {
    opacity: 1;
    transform: scale(1);
}

.overlay-text {
    color: #fff;
    font-size: 24px;
    font-weight: 600;
    text-align: center;
    padding: 10px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 8px;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .section-title h2 {
        font-size: 30px;
    }

    .section-title p {
        font-size: 18px;
    }

    .overlay-text {
        font-size: 20px;
    }
}
</style>

 


<!-- YouTube Video Section -->
<section id="video">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2>Watch Our Latest Video <small>Stay updated with our latest activities</small></h2>
                </div>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.youtube.com/embed/cHBqwj0Ed_I?si=ALQwesZEcAfW51zp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>





<!-- CSS Styles -->
<style>

/* General Styles for YouTube Video Section */
#video {
    background-color: #ffff;
    padding: 60px 0;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Responsive Styles for Embed Container */
.embed-responsive {
    position: relative;
    display: block;
    width: 100%;
    height: 0; /* Adjusted for aspect ratio */
    padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
    overflow: hidden;
    background: #000;
    margin: 0 auto; /* Center horizontally */
}

/* Ensure iframe scales properly */
.embed-responsive iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

/* Media Query for Larger Screens */
@media (min-width: 992px) {
    .embed-responsive {
        max-width: 1200px; /* Larger width for PC screens */
        padding-bottom: 56.25%; /* Maintain 16:9 Aspect Ratio */
    }
}

/* Responsive Adjustments */
@media (max-width: 767px) {
    .section-title h2 {
        font-size: 24px;
    }
    
    .section-title small {
        font-size: 14px;
    }
}


</style>




<?php include('footer.php'); ?>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>