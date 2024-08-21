<!-- FOOTER -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <!-- Details Section (Left) -->
            <div class="col-md-8 col-sm-12">
                <div class="footer-info">
                    <div class="row">
                        <!-- Headquarter Section -->
                        <div class="col-md-6 col-sm-6">
                            <div class="footer-info">
                                <div class="section-title">
                                    <h2>Headquarter</h2>
                                </div>
                                <address>
                                    <p>1800 dapibus a tortor pretium,<br> Integer nisl dui, ABC 12000</p>
                                </address>
                                <ul class="social-icon">
                                    <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-instagram"></a></li>
                                </ul>
                                <div class="copyright-text"> 
                                    <p>Copyright &copy; 2024 Company Name</p>
                                    <p>Design: DevSoftt</p>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Info Section -->
                        <div class="col-md-6 col-sm-6">
                            <div class="footer-info">
                                <div class="section-title">
                                    <h2>Contact Info</h2>
                                </div>
                                <address>
                                    <p>+65 2244 1100, +66 1800 1100</p>
                                    <p><a href="mailto:youremail.co">hello@youremail.co</a></p>
                                </address>
                                <div class="footer_menu">
                                    <h2>Quick Links</h2>
                                    <ul>
                                        <li><a href="#">Career</a></li>
                                        <li><a href="#">Investor</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Refund Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Map Section (Right) -->
            <div class="col-md-4 col-sm-12">
                <div class="footer-info">
                    <div class="section-title">
                        <h2>Our Location</h2>
                    </div>
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345091547!2d144.95373631550464!3d-37.81627927975185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d43d4eccc81%3A0xb1f760f1b1157e6b!2sVictoria%20Street%2C%20Melbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2sin!4v1619776743380!5m2!1sen!2sin" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
/* General Styles for Footer */
#footer {
    background: linear-gradient(rgba(19, 47, 87, 0.9), rgba(19, 47, 87, 0.9)), 
                url('images/about-image.jpg') no-repeat center center;
    background-size: cover;
    padding: 60px 0;
    color: #fff;
}

/* Details and Map Section */
.footer-info .section-title h2 {
    color: #ffffff;
    margin-bottom: 20px;
}

/* Social Icons */
.social-icon {
    list-style: none;
    padding: 0;
    margin: 0;
}

.social-icon li {
    display: inline;
    margin-right: 10px;
}

.social-icon a {
    color: #ffffff;
    font-size: 20px;
    text-decoration: none;
}

/* Quick Links */
.footer_menu ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer_menu ul li {
    margin-bottom: 10px;
}

.footer_menu a {
    color: #ffffff;
    text-decoration: none;
}

/* Map Container */
.map-container {
    margin-top: 20px;
    position: relative;
    overflow: hidden;
    border-radius: 8px; /* Optional: rounded corners for a better look */
}

/* Ensure the map iframe takes up the full width of its container */
.map-container iframe {
    width: 100%;
    height: 200px;
    border: none;
}

/* Responsive Adjustments */
@media (max-width: 991px) {
    /* Stack columns on mobile */
    .col-md-8, .col-md-4 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .footer-info {
        text-align: center;
    }

    .footer-info .section-title h2 {
        font-size: 20px;
    }

    .footer_menu a {
        font-size: 14px;
    }

    .social-icon a {
        font-size: 18px;
    }
}

@media (max-width: 767px) {
    .footer-info {
        margin-bottom: 20px;
    }

    .col-md-8, .col-md-4 {
        text-align: center;
    }

    .col-md-8 {
        margin-bottom: 20px;
    }
}
</style>
