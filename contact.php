<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("head.php"); ?>
</head>

<body>
    <!-- Top menu -->
    <?php include("header.php"); ?>

    <!-- Page Title -->
    <div class="page-title-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 wow fadeIn">
                    <i class="fa fa-envelope"></i>
                    <h1>Contact Us /</h1>
                    <p>Here is how you can contact with us</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Us -->
    <div class="contact-us-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 contact-form wow fadeInLeft">
                    <h1>
                        Contact Form
                    </h1>
                    <form role="form" action="assets/sendmail.php" method="post">
                        <div class="form-group">
                            <label for="contact-name">Name</label>
                            <input type="text" name="name" placeholder="Enter your name..." class="contact-name" id="contact-name">
                        </div>
                        <div class="form-group">
                            <label for="contact-email">Email</label>
                            <input type="text" name="email" placeholder="Enter your email..." class="contact-email" id="contact-email">
                        </div>
                        <div class="form-group">
                            <label for="contact-subject">Subject</label>
                            <input type="text" name="subject" placeholder="Your subject..." class="contact-subject" id="contact-subject">
                        </div>
                        <div class="form-group">
                            <label for="contact-message">Message</label>
                            <textarea name="message" placeholder="Your message..." class="contact-message" id="contact-message"></textarea>
                        </div>
                        <button type="submit" class="btn" style="background-color:#003551;">Send</button>
                    </form>
                </div>
                <div class="col-sm-5 contact-address wow fadeInUp">
                    <h3>We Are Here</h3>
                    <div class="map"></div>
                    <h3>Address</h3>
                    <p>North South University Computer &amp; Engineering Club (NSUCEC)
                        <br/> Room No -NAC113 <br/>Plot-52, Block-B, Bashundhara R/A, Dhaka-1229 ,North South University</p>
                    <p>Phone : 01858266167 (Mohammad Shafayet Hossain - GS)</p>
                    <!--<p>Email : info@nsucec.org</p>-->
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <?php include("footer.php"); ?>

</body>

</html>
