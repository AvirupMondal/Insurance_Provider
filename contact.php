<?php
    require('include/header.php');
?>

      
        <!-- Start Contact Area -->
        <section class="htc__contact__area ptb--100 bg__white" >
            <div class="container">
                <div class="row" id="contact">
                  
                    <div class="col-xl-8 col-lg-10 col-md-10 col-sm-12 col-xs-12" >
                        <h2 class="title__line--6">CONTACT US</h2>
                        <div class="address">
                            <div class="address__icon">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="address__details">
                                <h2 class="ct__title">our address</h2>
                                <p>6/1C,RADHANATH CHOWDHURY ROAD, KOLKATA 700015 </p>
                            </div>
                        </div>
                        <div class="address">
                            <div class="address__icon">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="address__details">
                                <h2 class="ct__title">EMAIL ID</h2>
                                <p>mondalav@gmail.com</p>
                                <p>Timing: Any Time</p>
                            </div>
                        </div>

                        <div class="address">
                            <div class="address__icon">
                                <i class="fa fa-mobile" aria-hidden="true"></i>
                            </div>
                            <div class="address__details">
                                <h2 class="ct__title">Phone Number/Whats App</h2>
                                <p>+91-9433331339</p>
                                <p>Timing: 9am to 9pm (Every Day)</p>
                            </div>
                        </div>
                    </div>  
                      
                      <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="contact-form-wrap col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="col-xs-12">
                            <div class="contact-title">
                                <h2 class="title__line--6">SEND A MAIL</h2>
                            </div>
                        </div>
                        <div class="col-xs-12 col-lg-9">
                            <form id="contact-form" action="#" method="post">
                                <div class="single-contact-form">
                                    <div class="contact-box name">
                                        <input type="text" id="name" name="name" placeholder="Your Name">
                                        <input type="email" id="email" name="email" placeholder="Email">
                                         <input type="text" id="mobile" name="mobile" placeholder="Mobile">
                                    </div>
                                </div>
                                
                                <div class="single-contact-form">
                                    <div class="contact-box message">
                                        <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                    </div>
                                </div>
                                <div class="contact-btn">
                                    <button type="button" onclick="submit_message()" class="fv-btn">Send Message </button>
                                </div>
                            </form>
                            <div class="form-output">
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </section>
        <!-- End Contact Area -->
        <!-- End Banner Area -->
   <?php
    require('include/footer.php');
?>

</body>

</html>