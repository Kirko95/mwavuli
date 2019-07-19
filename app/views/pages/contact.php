<div role="main" class="main">
    <!-- <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section> -->

    <hr class="tall">
    
    <div class="col-md-12">
        <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7925248923534!2d36.81733971487526!3d-1.2992740360072392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10e400e852b7%3A0xae4857eea7d6651!2sUAP+Old+Mutual+Tower!5e0!3m2!1sen!2ske!4v1558681894793!5m2!1sen!2ske" width="100%" height="330" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>

    <br>
    <div class="clearfix"></div>

    <div class="container">

        <div class="row">
            <div class="col-md-6">

                <div class="alert alert-success hidden" id="contactSuccess">
                    <strong>Success!</strong> Your message has been sent to us.
                </div>

                <div class="alert alert-danger hidden" id="contactError">
                    <strong>Error!</strong> There was an error sending your message.
                </div>

                <h2 class="short"><strong>Contact</strong> Us</h2>
                <form action="php/contact-form.php" id="contactForm" type="post">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-6">
                                <label>Your name *</label>
                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name">
                            </div>
                            <div class="col-md-6">
                                <label>Your email address *</label>
                                <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Subject</label>
                                <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Message *</label>
                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" value="Send Message" class="btn btn-primary btn-lg" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">

                <h4 class="push-top">Get in <strong>touch</strong></h4>
                <p>Thank you for visiting our website. Should you have any queries or comments send us an email on <a href="mailto:info@mwavuli.co.ke"> info@mwavuli.co.ke</a> or fill in the contact and we will get back to you.</p>

                <hr />

                <h4>The <strong>Office</strong></h4>
                <ul class="list-unstyled">
                    <li><p><i class="icon icon-map-marker"></i> <strong>Address:</strong> 26<sup>th</sup> Floor, UAP OLD MUTUAL Tower, Upper Hill Road, Upper Hill, Nairobi, KENYA</p></li>
                    <li><p><i class="icon icon-phone"></i> <strong>Phone:</strong> (+254) 791 009 974 / (+254) 20 222 0099</p></li>
                    <li><p><i class="icon icon-envelope"></i> <strong>Email:</strong> <a href="mailto:info@mwavuli.co.ke"> info@mwavuli.co.ke</a></p></li>
                    <li><p><i class="icon icon-location-arrow"></i> <strong>Address:</strong> P.O.Box 15850-00100 Nairobi, Kenya</p></li>
                </ul>

                <hr />

                <h4>Business <strong>Hours</strong></h4>
                <ul class="list-unstyled">
                    <li style="color: rgb(0, 0, 0); font-size: 15px;"><i class="icon icon-time"></i> Monday - Friday 8am to 5pm</li>
                    <li style="color: rgb(0, 0, 0); font-size: 15px;"><i class="icon icon-time"></i> Saturday - Closed</li>
                    <li style="color: rgb(0, 0, 0); font-size: 15px;"><i class="icon icon-time"></i> Sunday - Closed</li>
                </ul>

            </div>

        </div>

    </div>

</div>