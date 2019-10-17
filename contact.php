<?php $page_title = "Contact"; ?>
<?php include "templates/contact-css.php"; ?>

<section class="featured-courses courses-wrap">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs">
                    <ul class="flex flex-wrap align-items-center p-0 m-0">
                        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div><!-- .breadcrumbs -->
            </div><!-- .col -->
        </div><!-- .row -->

        <div class="row justify-content-between">
            <div class="col-12">
                <div class="contact-gmap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.0343262216747!2d77.64234621435317!3d12.905514319817886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae15c00fd143e7%3A0x12a502d9d5d45b2c!2sYOR%20Skill%20Development%20Center!5e0!3m2!1sen!2sin!4v1571217426037!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div><!-- .contact-gmap -->
            </div><!-- .col -->

            <div class="col-12 col-lg-6">
                <div class="contact-form">
                    <h3>Contact Form</h3>

                    <form>
                        <input type="text" placeholder="Your Name">
                        <input type="email" placeholder="Your Email">
                        <input type="text" placeholder="Subject">
                        <textarea placeholder="Your Message" rows="4"></textarea>
                        <input type="submit" value="Send Message">
                    </form>
                </div><!-- .contact-form -->
            </div><!-- .col -->
                <div class="col-12 col-lg-6">
                <div class="contact-info">
                    <h3>Contact Information</h3>

                   

                    <ul class="p-0 m-0">
                        <li><span>Location:</span>#1705, 4th Floor,
                                            19th main, near 25th Cross,
                                            2nd Sector, HSR Layout,
                                            Bengaluru - 560102, India</li>
                        <li><span>Email:</span><a href="#">info@yorsdc.com</a></li>
                        <li><span>Phone:</span><a href="#">+91 96321 08701</a></li>
                    </ul>
                </div><!-- .contact-info -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
     
    <?php ?>
<?php include "templates/footer.php"; ?>
