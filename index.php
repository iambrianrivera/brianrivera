<?php 
session_start();
include('header.php'); 
include('config.php'); 
?>

<div id="particles-js">
    <div class="slider-caption">
       <h1>Brian Rivera<span>.</span></h1>
        <p class="wow fadeIn">Web Designer and Developer</p>
    </div>
</div>
<!-- <section class="br-slider">
    <div class="carousel-item active slider-1" >
        <div class="carousel-caption">
            <h1>Brian Rivera<span>.</span></h1>
            <p class="wow fadeIn">Web Designer and Developer</p>
        </div>
    </div>
</section> -->
<section class="br-about-me" id="about">
    <div class="container">
        <div class="row br-section">
            <div class="col-md-6 wow fadeInLeft pb-5 pb-lg-0 order-2 order-md-1">
                <img src="img/about-me-img.jpg" class="img-fluid" alt="about brian rivera" />
            </div>
              <div class="col-md-6 py-auto my-auto order-1 order-md-2 pb-3 pb-lg-0">
                <div class="br-section-text text-center text-lg-left ">
                    <h6 class="br-section-title wow fadeInRight">ABOUT ME</h6>
                    <h3 class="wow fadeInRight">Why hire me for your project?</h3>
                    <p class="wow fadeInRight">"Find a group of people who challenge and inspire you, spend a lot of time with them, and it will change your life."</p>
                    <p class="wow fadeInRight">I love to work with other professionals who is passionate and creative thinker as me. Working cooperatively, ideas will be combined with everything we know and create a mobile or web application/design that is suited on your company/business needs. </p>
                    <!-- <a href="#" class="wow fadeIn">Learn More</a> -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="br-works" id="works">
    <div class="container">
        <div class="br-section">
            <div class="col-md-10 offset-md-1">
                <div class="br-section-text text-center">
                    <h6 class="br-section-title wow fadeInLeft">BLOGS</h6>
                    <h3 class="wow fadeInLeft">Get the latest news and announcements here.</h3>
                    <p class="text-center">Coming soon...</p>
                  <!--   <br> -->
                   <!--  <div class="row">
                        <div class="col-md-6">
                            <img src="img/works/recruitment.jpg" class="img-fluid" alt="Recruitment Web Design">
                        </div>
                         <div class="col-md-6">
        
                        </div>
                    </div> -->
                    <!-- <a class="wow fadeIn" href="#">View More Works</a> -->
                    <!-- <br> -->       
                </div>
            </div>
        </div>
    </div>
</section>

<section class="br-skills" id="skills">
    <div class="container">
        <div class="br-section">
            <div class="br-section-text wow fadeIn">
                <h6 class="br-section-title text-center">SKILLS</h6>
                <h3 class="text-center">Look what I can do</h3>
            </div>
            <br><br>
            <div class="col-md-10 offset-md-1">
                <div class="row">
                    <div class="col-md-4 br-skills-text wow fadeInLeft px-4">
                        <div class="row">
                            <div class="col-4">
                                <img src="img/web-designing.png" class="img-fluid" alt="web designing">
                            </div>
                             <div class="col-8">
                                <h5>Web <br> Designing</h5>
                            </div>
                        </div>
                        <p>We can create website designs and layouts that are responsive and adaptive on different screen sizes.</p>
                    </div>
                     <div class="col-md-4 br-skills-text wow fadeInLeft px-4" data-wow-delay="0.3s">
                        <div class="row">
                            <div class="col-4">
                                <img src="img/web-development.png" class="img-fluid" alt="web development">
                            </div>
                             <div class="col-8">
                                <h5>Web <br> Development</h5>
                            </div>
                        </div>
                        <p>Let me help you build, create and maintain your website using latest technologies in web.</p>
                    </div>                  
                    <div class="col-md-4 br-skills-text wow fadeInLeft px-4" data-wow-delay="0.6s">
                        <div class="row">
                            <div class="col-4">
                                <img src="img/logo-designing.png" class="img-fluid" alt="web designing">
                            </div>
                             <div class="col-8">
                                <h5>SEO <br> Optimization</h5>
                            </div>
                        </div>
                        <p>Let's make your website more easily discoverable by users in search engines.</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4 br-skills-text wow fadeInLeft px-4" data-wow-delay="1.2s">
                        <div class="row">
                            <div class="col-4">
                                <img src="img/market.png" class="img-fluid" alt="seo optimization">
                            </div>
                             <div class="col-8">
                                <h5>Ecommerce <br> Website</h5>
                            </div>
                        </div>
                        <p> Let me provide you with a scalable and user friendly online store suited for your business.</p>
                    </div>
                    <div class="col-md-4 br-skills-text wow fadeInLeft px-4" data-wow-delay="1.5s">
                        <div class="row">
                            <div class="col-4">
                                <img src="img/wordpress.png" class="img-fluid" alt="wordpress development">
                            </div>
                             <div class="col-8">
                                <h5>Wordpress <br> Development</h5>
                            </div>
                        </div>
                        <p>Using Wordpress, Let's create a stunning and professional website for you.</p>
                    </div>
                    <div class="col-md-4 br-skills-text wow fadeInLeft px-4" data-wow-delay="1.8s">
                        <div class="row">
                            <div class="col-4">
                                <img src="img/ui-ux.png" class="img-fluid" alt="UI/UX Designing">
                            </div>
                             <div class="col-8">
                                <h5>UI/UX <br> Designing</h5>
                            </div>
                        </div>
                        <p>Let's create a mobile and website design that is user friendly and interactive for users.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="br-contact-us" id="contact">
    <div class="container">
        <div class="row br-section">
            <div class="col-md-6 br-contact-us wow fadeIn order-2 order-lg-1" data-wow-duration="1s">
                <form class="mx-auto px-0 px-lg-5" method="POST" action="contact-send.php">
                    <?php if ( isset($_SESSION['successMessage']) & !empty($_SESSION['successMessage'])) { ?>
                        <div class="alert alert-success text-center" role="alert">
                            We have successfully received your inquiry.    
                        </div>
                        <br>
                    <?php 
                        } 
                        $_SESSION['successMessage'] = [];
                    ?>    
                    <div class="form-group">
                        <input type="text" class="form-control" name="full_name" id="full_name" aria-describedby="nameHelp" placeholder="Name" required>
                    </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="contact_number" id="contact_number" aria-describedby="contactnumberHelp" placeholder="Contact Number" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email_address" id="email_address" aria-describedby="emailaddressHelp" placeholder="Email Address" required>
                    </div>
                    <div class="form-group">
                       <textarea id="message" class="form-control" placeholder="Message/Inquiry" name="message" rows="4" cols="50"></textarea>
                    </div>
                  <div class="form-group text-center">
                        <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="<?php echo $site_key ?>"></div>
                    </div>    
                    <button type="submit" class="btn btn-block br-btn-contact">SUBMIT</button>
                </form>
            </div>
              <div class="col-md-6 py-auto my-auto order-1 order-lg-2 pb-3 pb-lg-0">
                <div class="br-section-text text-center text-md-left">
                    <h6 class="br-section-title wow fadeInRight">CONTACT US</h6>
                    <h3 class="wow fadeInRight">Let’s get a project started.</h3>
                    <p class="wow fadeInRight">Whether you have a question about our services, pricing, need a demo, or anything else, our team is ready to answer all your questions.</p>
                    <div class="br-social-icons wow fadeInRight">
                        <a href="https://www.facebook.com/iambrianrivera" target="_blank" class="fa-stack br-fb">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/brian-keith-rivera-20826211a/" target="_blank" class="fa-stack br-linkedin">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-linkedin-in fa-stack-1x fa-inverse"></i>
                        </a>
                         <a href=" https://www.instagram.com/_iambrianrivera/" target="_blank" class="fa-stack br-ig">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                        </a>
                        <a href="mailto:admin@iambrianrivera.co" target="_blank" class="fa-stack br-email">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fas fa-envelope fa-stack-1x fa-inverse"></i>
                        </a>
                    </div>
                    <!-- <a class="wow fadeIn" href="#">View Other Contact Details</a> -->
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php') ?>