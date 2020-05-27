<?php 
session_start();
include('header.php') 
?>
<section class="br-slider" id="br-slider">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/slider-bg1.jpg" alt="Brian Rivera's Portfolio">
                <div class="carousel-caption d-none d-md-block">
                   <h1>Brian Rivera<span>.</span></h1>
                    <p class="wow fadein" >Web Designer and Developer</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="br-about-me" id="br-about-me">
    <div class="container">
        <div class="row br-section">
            <div class="col-md-7 wow fadeinLeft">
                <img src="img/about-me-img.png" class="img-fluid" alt="about brian rivera" />
            </div>
              <div class="col-md-5 py-auto my-auto">
                <div class="br-section-text">
                    <p class="br-section-title wow fadeinRight">ABOUT ME</p>
                    <h3 class="wow fadeinRight">Why hire me for your next project?</h3>
                    <p class="wow fadeinRight">With over 4 years of experience in this industry, We can help you convert your ideas into an awesome project.</p>
                    <!-- <a href="#" class="wow fadeIn">Learn More</a> -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="br-works" id="br-works">
    <div class="container">
        <div class="row br-section">
            <div class="col-md-6">
                <div class="br-section-text">
                    <p class="br-section-title wow fadeinLeft">WORKS</p>
                    <h3 class="wow fadeinLeft">Let’s make your idea an awesome project.</h3>
                    <p class="wow fadeinLeft">Working cooperatively, ideas will be combined with everything we know and tailor it to be a project that will help your brand/company to be one of the best in your industry.</p>
                    <!-- <a class="wow fadeIn" href="#">View More Works</a> -->
                </div>
            </div>
              <div class="col-md-6">
              
            </div>
        </div>
    </div>
</section>

<section class="br-services" id="br-services">
    <div class="container">
        <div class="br-section">
            <div class="br-section-text wow fadeIn">
                <p class="br-section-title text-center">SERVICES</p>
                <h3 class="text-center">Delivers quality service</h3>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-3 br-services-text wow fadeInLeft px-4">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="img/web-designing.png" class="img-fluid" alt="web designing">
                        </div>
                         <div class="col-md-8">
                            <h5>Web <br> Designing</h5>
                        </div>
                    </div>
                    <p>We provide website designs and layouts that are responsive and adaptive on different screen sizes.</p>
                </div>
                 <div class="col-md-3 br-services-text wow fadeInLeft px-4" data-wow-delay="0.3s">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="img/web-development.png" class="img-fluid" alt="web development">
                        </div>
                         <div class="col-md-8">
                            <h5>Web <br> Development</h5>
                        </div>
                    </div>
                    <p>We can help you build, create and maintain your website using latest technologies in web.</p>
                </div>                  
                <div class="col-md-3 br-services-text wow fadeInLeft px-4" data-wow-delay="0.6s">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="img/logo-designing.png" class="img-fluid" alt="web designing">
                        </div>
                         <div class="col-md-8">
                            <h5>Logo <br> Designing</h5>
                        </div>
                    </div>
                    <p>We can help your create your company branding by making a stunning and professional logo.</p>
                </div>
                 <div class="col-md-3 br-services-text wow fadeInLeft px-4" data-wow-delay="0.9s">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="img/seo-optimization.png" class="img-fluid" alt="seo optimization">
                        </div>
                         <div class="col-md-8">
                            <h5>SEO <br> Optimization</h5>
                        </div>
                    </div>
                    <p>We provide services to make your website more easily discoverable by users in search engines.</p>
                </div>
                <div class="br-section-text mx-auto pt-3">
                    <!-- <a class="wow fadeIn" href="#">View More Works</a> -->
                </div>
             
            </div>
        </div>
    </div>
</section>

<section class="br-contact-us" id="br-contact-us">
    <div class="container">
        <div class="row br-section">
            <div class="col-md-6 br-contact-us wow fadeIn" data-wow-duration="1s">
                <form class="mx-auto px-5" method="POST" action="contact-send.php">
                    <?php if ( isset($_SESSION['successMessage']) & !empty($_SESSION['successMessage'])) { ?>
                        <div class="alert alert-success" role="alert">
                            <div class="row">
                                    <div class="col-md-2">
                                        <i class="fas fa-check fa-3x"></i>
                                    </div>
                                     <div class="col-md-10">
                                         We have successfully received your inquiry. 
                                    </div>
                            </div>
                        </div>
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
                    <button type="submit" class="btn btn-block br-btn-contact">SUBMIT</button>
                </form>
            </div>
              <div class="col-md-6 py-auto my-auto">
                <div class="br-section-text">
                    <p class="br-section-title wow fadeInRight">CONTACT US</p>
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
                       
                    </div>
                    <!-- <a class="wow fadeIn" href="#">View Other Contact Details</a> -->
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php') ?>