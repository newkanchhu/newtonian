<footer  class="footer">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-7">
                <div class="direction-wrap">
                    <h4>Our Directions</h4>
                    <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14137.09325337691!2d85.32395955!3d27.64701445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19a8d167988d%3A0x6a226bb1f36bc786!2sNewtonian%20Science%20Counselling%20Institute%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1660566260820!5m2!1sen!2snp" width="95%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                    <div class="loction-wrap">
                        <h4>Our <span>Location</span></h4>
                        <p>
                            <i class="fas fa-map-marker-alt"></i>  <span>Gyaneshwor, Pashupati Marga (Opposite to Mega Bank Ltd), Kathmandu, Nepal.</span><br class="clearfix">
                            <i class="fas fa-phone"></i><span> 00977-1-4544346 / 4523894,00977-9851149240</span><br class="clearfix">
                            <i class="fas fa-globe-americas"></i><span>mbbsadmission@hotmail.com, newton@ntc.net.np</span> 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="footer-menu">
                    <h4>Site <span>Information</span></h4>
                    <ul style="column-count: 2;">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="">Universities</a></li>
                        <li><a href="course.php">Course</a></li>
                        <li><a href="">Fees Structure</a></li>
                        <li><a href="">Scholorship in China</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="">Testimonials</a></li>
                        <li><a href="apply.php">How to Apply</a></li>
                        <li><a href="">Application Form</a></li>
                        <li><a href="news.php">News & Events</a></li>
                        <li><a href="">FAQ</a></li>
                    </ul>
                </div>
                <div class="get-in-touch">
                    <h4>Get in <span>Touch</span></h4>
                    <p>If you have any questions please use the contact form in <a href="contact.php">Contact Us</a> page. We will try to respond to you as soon as possible.</p>
                    <div class="footer-followus">
                        <a class="hvr-grow" href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a> 
                        <a class="hvr-grow" href="#" title="Twitter"><i class="fab fa-twitter"></i></a> 
                        <a class="hvr-grow" href="#" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
                        <a class="hvr-grow" href="#" title="Wechat"><i class="fas fa-comments"></i></a>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="copyright text-center">
                <span>Newtonian Science Counselling Institute (NSCI) Pvt. Ltd.</span> &copy; <?php echo date('Y'); ?> All Rights Reserved 
            </div>
        </div>
    </div>
    
</footer>
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.5.1/jquery.nicescroll.min.js"></script>
<script src="<?=url('js/app.js')?>"></script>
<script src="<?=url('js/lightbox.min.js')?>"></script>

<!-----------for image loader-----------------> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/lozad.js/1.16.0/lozad.min.js"></script>
<script>
lozad('.lozad', {
    load: function(el) {
        el.src = el.dataset.src;
        el.onload = function() {
            el.classList.add('fadelazy')
        }
    }
}).observe();
</script>
<!------------testimonial carousel--------->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</body>
</html>
