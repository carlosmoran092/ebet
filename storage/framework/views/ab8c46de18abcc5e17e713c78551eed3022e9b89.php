<?php $__env->startSection('content'); ?>

  <div class="headline-bg contact-headline-bg">
     </div><!--//headline-bg-->
     <!-- ******Contact Section****** --> 
     <section class="contact-section section section-on-bg">
        <div class="container">
            <h1 class="text-center camr-tilte">Contact Us</h1>
            <p class="intro text-center">In Tradekey we are always ready to answer your queries, we show below several ways to send us your questions.</p>
            <form id="contact-form" class="contact-form" method="post" action="">                    
                <div class="row text-center">

                 <div class="col-md-4 col-sm-12 col-xs-12 text-left">

                     <div class="jumbotron">
                        <div class="container" >
                           <div class="list-group">
                             <li class="list-group-item"><i class="icon-skype"></i> tradokey</li>
                             <li class="list-group-item"><i class="icon-mobile-5"></i> 34 55743443</li>
                             <li class="list-group-item"><i class="icon-phone-2"></i> 87 4544342</li>
                             <li class="list-group-item"><i class="icon-mail-4"></i> contact@tradokey.com</li>
                             <li class="list-group-item"><i class="icon-mail-4"></i> support@tradokey.com</li>
                         </div>
                     </div>
                 </div>



             </div> 
             <div class="contact-form-inner col-md-8 col-sm-12 col-xs-12">
                <div class="row"><br>                                                           

                    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                        <label class="sr-only" for="cname">Your name</label>
                        <input type="text" class="form-control" id="cname" name="name" placeholder="Your name" minlength="2" required>
                    </div>                    
                    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                        <label class="sr-only" for="cemail">Email address</label>
                        <input type="email" class="form-control" id="cemail" name="email" placeholder="Your email address" required>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                        <label class="sr-only" for="cmessage">Your message</label>
                        <textarea class="form-control" id="cmessage" name="message" placeholder="Enter your message" rows="4" required></textarea>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                        <button type="submit" class="btn btn-block btn-cta btn-cta-primary">Send Message</button>
                    </div>                           
                </div><!--//row-->
            </div>



        </div><!--//row-->
        <div id="form-messages"></div>
    </form><!--//contact-form-->
</div><!--//container-->
</section><!--//contact-section-->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master_site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>