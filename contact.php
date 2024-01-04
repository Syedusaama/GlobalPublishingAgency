<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<?php include "./components/head.php"?>
</head>

<body>
    <!-- /.preloader -->
    <?php include "./components/header.php"?> 
<section class="page-header clearfix" style="background-image: url(assets/images/backgrounds/page-header-bg1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page-header__wrapper clearfix">
                    <div class="page-header__title">
                        <h2>Contact US</h2>
                    </div>
                    <div class="page-header__menu">
                        <ul class="page-header__menu-list list-unstyled clearfix">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">ContactUs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Start Contact Details One-->
<section class="contact-details-one">
    <div class="container">
        <div class="row">
            <!--Start Single Contact Details One-->
            <div class="col-xl-6 col-lg-6">
                <div class="contact-details-one__single">
                    <div class="contact-details-one__single-icon">
                        <span class="icon-chat"></span>
                    </div>
                    <div class="contact-details-one__single-text">
                        <h4><a href="tel:+123456789">+123456789</a></h4>
                        <p>Call Anytime</p>
                    </div>
                </div>
            </div>
            <!--End Single Contact Details One-->

            <!--Start Single Contact Details One-->
            <div class="col-xl-6 col-lg-6">
                <div class="contact-details-one__single">
                    <div class="contact-details-one__single-icon">
                        <span class="icon-message-1"></span>
                    </div>
                    <div class="contact-details-one__single-text">
                        <h4><a href="mailto:info@golbalpublishingagency.com">info@golbalpublishingagency.com</a></h4>
                        <p>Send Email</p>
                    </div>
                </div>
            </div>
            <!--End Single Contact Details One-->
        </div>
    </div>
</section>
<!--End Contact Details One-->

<!--Contact Page Start-->
<section class="contact-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4">
                <div class="contact-page__left">
                    <div class="section-title">
                        <span class="section-title__tagline">Reach Out to Us</span>
                        <h2 class="section-title__title">We're at your service!<br></h2>
                        <p> </p>
                        <p> Ready to discuss your project with us? Fill out the form, and one of our experienced team members will reach out to you promptly.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8">
                <div class="contact-page__right">
                    <form action="https://golbalpublishingagency.com/assets/inc/sendemail.php" class="comment-one__form contact-form-validated" novalidate="novalidate">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Your name" name="name">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="comment-form__input-box">
                                    <input type="email" placeholder="Email address" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Phone number" name="phone">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="comment-form__input-box">
                                    <input type="email" placeholder="Subject" name="Subject">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="comment-form__input-box">
                                    <textarea name="message" placeholder="Write message"></textarea>
                                </div>
                                <button type="submit" class="thm-btn comment-form__btn">Submit Comment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact Page End-->

<!--<div class="floating_btn">-->
<!--    <a target="_blank" href="https://wa.me/+16164693925/?text=Hello, I need help in my publications">-->
<!--      <div class="contact_icon">-->
<!--           <img src="assets/images/whatsapp.png" class="my-float" alt="">-->

<!--      </div>-->
<!--</a></div>-->


<!--Start Footer One-->
<?php include "./components/footer.php"?> 
<!--End Footer One-->
</body>

</html>