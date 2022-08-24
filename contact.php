<?php include 'include/header.php'; ?>

<!-- start innerpage -->
<section class="top-banner">
    <div class="container">
        <div class="row">
            <div class="h4 top-banner__title">Contact Us</div>
            <div class="breadcrumbs"><a href="index.php">Home</a> <i class="fa fa-angle-double-right"></i> Contact Us</div>
        </div>
    </div>
</section>

<section class="innerpage-wrapper contactpage-wrapper">
    <div class="container">
        <div class="row">            
            <div class="col-md-4">
                <div class="contactpage-wrapper__contact-wrap">
                    <div class="contact-follow"><i class="fab fa-whatsapp"></i> whatsapp</div>
                    <div>009779851037617</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contactpage-wrapper__contact-wrap">
                    <div class="contact-follow"><i class="fab fa-whatsapp"></i> We Chat</div>
                    <div>00977-9851149240, 00977-9851037617</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contactpage-wrapper__contact-wrap">
                    <div class="contact-follow"><i class="fab fa-whatsapp"></i> Hours</div>
                    <div>Sun-Fri: 10am-5pm (Nepal Time), <br>Sat: Holiday</div>
                </div>
            </div>
            <div class="clearfix"></div>
            <!-- form start -->
            <div class="col-md-8 order-2 order-md-1">
                <form class="contact__form" action="#" validate="">
                    <div class="title">Fill out the form below to get in touch.</div>

                    <div class="my-3">
                        <label for="contact_name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="contact_name" maxlength="200" value="" placeholder="John" required="">
                        
                        <small class="invalid-feedback">Enter your full name</small>
                    </div>    
                    <div class="mb-3">
                        <label for="contact_email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="contact_email" placeholder="name@example.com" required="">
                        
                    </div>
                    <div class="mb-3">
                        <label for="contactphone" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="contactphone" placeholder="9841XXXXXX" maxlength="15" required="">
                        <small class="invalid-feedback">Enter your home/mobile number</small>
                    </div>
                    <div class="mb-3">
                        <label for="contact_message" class="form-label">Message</label>
                        <textarea class="form-control" id="contact_message" rows="5" maxlength="1000" required=""></textarea>
                        <small class="invalid-feedback">Enter your message</small>
                    </div>
                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-4 order-1 order-md-2 mb-5 mb-md-0">
                <div class="title">Corporate Office</div>
                <div class="contact__map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7064.482022656409!2d85.319079!3d27.709844!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x985846fd427fd812!2sMega%20Bank%20Nepal%20Limited%20-%20Corporate%20office!5e0!3m2!1sen!2sin!4v1661327680298!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="clearfix"></div>
            <!-- form end -->
        </div>
    </div>
</section>
<!-- end innerpage -->

<?php include 'include/footer.php'; ?>
