<?php
if(!isset($footer_extra)) {
 $footer_extra = "";

}?>


<!--CTA-->
    <div class="content-section-d cta" data-aos="fade-down" data-aos-once="true">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center ">
            <h2>Become a Workforcer today </h2>
            <p>Join the hundreds of workforcers today!</p>
            <div class="button-header">
              <a href="https://ew.rosterfy.co/register" target="_blank" class="btn btn-outline">Register Now</a>
              <a href="https://ew.rosterfy.co/ewg" target="_blank" class="btn btn-outline log-in">Login Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--SOCIAL ICONS-->
    <div class="banner ">
      <div class="container ">
        <div class="row ">
          <div class="col-xs-12 ">
            <ul class="list-inline banner-social-buttons ">
              <li class="social-button "> <a href="http://www.facebook.com/EventWorkforceGroup/ " class="btn btn-default btn-lg hvr-radial-in "><i class="fa fa-facebook fa-fw "></i></a> </li>
              <li class="social-button "> <a href="http://twitter.com/_ewgroup " class="btn btn-default btn-lg hvr-radial-in "><i class="fa fa-twitter fa-fw "></i></a> </li>
              <li class="social-button "> <a href="http://www.instagram.com/eventworkforcegroup/ " class="btn btn-default btn-lg hvr-radial-in "><i class="fa fa-instagram fa-fw "></i></a> </li>
              <li class="social-button "> <a href="http://www.linkedin.com/company/eventworkforcegroup " class="btn btn-default btn-lg hvr-radial-in "><i class="fa fa-linkedin fa-fw "></i></a> </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </div>
    <!-- /.banner -->

    <!-- Footer -->
    <footer class="footer-img img-reponsive">
    <div class="container">
      <div class="row" align="center">
        <div class="col-md-12">
          <ul class="list-inline">
            <li>
              <a href="http://eventworkforcegroup.com/academy" target="_blank"><img src="assets/images/logos/ewg_acad_logo.svg" class="img-responsive footer-logo" alt="Academy Logo ">Academy</a>
            </li>
            <li>
              <a href="http://eventworkforcegroup.com/talent" target="_blank "> <img src="assets/images/logos/ewg_talent_logo.svg" class="img-responsive footer-logo" alt="Talent Logo"> Talent</a>
            </li>
            <li>
              <a href="http://eventworkforcegroup.com/technology " target="_blank "> <img src="assets/images/logos/ewg_tech_logo.svg " class="img-responsive footer-logo " alt="Technology Logo ">Technology</a>
            </li>
          </ul>
          <p class="copyright text-muted small">Australia: 80 Market Street, Southbank VIC 3205 Australia - America: 180 Sansome St, San Francisco, CA 94104, USA</p>
          <p class="copyright text-muted small ">Copyright &copy; Event Workforce Group 2017. All Rights Reserved</p>
          <p class="small"><a href="https://rosterfy.co/rosterfy_terms">Terms &amp; Conditions</a> <a href="http://eventworkforcegroup.com/technology/privacy-policy.php">Privacy Policy</a></p>
          <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page " data-toggle="tooltip " data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
        </div>
      </div>
    </div>
  </footer>

    <!-- MODAL FOR CONTACT -->

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Contact Us</h4>
                </div>
                <div class="modal-body">
                    <div class="col-lg-8 col-lg-offset-2">
                        <form id="contact-form" method="post" role="form">
                            <div class="messages"></div>
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group" data-toggle="validator" role="form">
                                            <label for="form_name">Name*</label>
                                            <input id="contact_name" type="text" name="name" class="form-control" placeholder="Please enter your name" required="required" data-error="Name is required." >
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="form_name">Email*</label>
                                            <input id="contact_email" type="email" name="email" class="form-control" placeholder="Please enter your email">
                                            <div class="help-block with-errors"></div>
                                            </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="form_phone">Phone</label>
                                            <input id="contact_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone number" required="required">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="sel1">Why are you contacting us?*</label>
                                            <select name="option_select">
                                                <option value="work">Looking for work?</option>
                                                <option value="staff">Looking for staff?</option>
                                                <option value="software">Looking for software?</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="form_message">Message*</label>
                                            <textarea id="contact_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                            <button type="submit" class="btn btn-success btn-send" id="submitButton">Send Message</button>
                                            <br>
                                            <input type="hidden" id="form_type" name="form_type" value="contact_us">
                                            <!-- EMAIL TEMPLATE TO USE -->
                                            <input type="hidden" name="email_template" id="email_template" value="001_ewg_academy_template">
                                    </div>
                                        <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id= "loading_div" style= "display:none">LOADING</div>
                                            <div id= "submitted_div" style= "display:none">Submitted</div>
                                            <p class="text-muted"><strong>*</strong> These fields are required.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer"></div>
                </div>  <!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>

<!-- jQuery -->
<script src="js/jquery.js "></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js "></script>
<!--CAROUSEL-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js "></script>
<!--ANIMATE ON SCROLL -->
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js "></script>
<!--STATS COUNTER-->
<script src="js/jquery.counterup.min.js "></script>
<script src="js/jquery.waypoints.min.js "></script>
<!-- MAIN JS -->
<script type="text/javascript" src="js/main.js"></script>
<!--VALIDATOR FOR CONTACT FORM-->
<script src="js/validator.js "></script>
<!--Web Script-->
<script src="js/script.js "></script>

</body>
</html>
