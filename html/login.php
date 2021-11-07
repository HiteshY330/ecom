<?php require ('top.php');
$msg="";
?>
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/photo.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">Login/Register</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Contact Area -->
        <section class="htc__contact__area ptb--100 bg__white">
            <div class="container">
                <div class="row">
					<div class="col-md-6">
						<div class="contact-form-wrap mt--60">
							<div class="col-xs-12">
								<div class="contact-title">
									<h2 class="title__line--6">Login</h2>
								</div>
							</div>
							<div class="col-xs-12">
								<form id="contact-form" action="login_submit.php"  method="post">
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="email" name="email" required placeholder="Your Email*" style="width:100%">
										</div>
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="password" name="password" required placeholder="Your Password*" style="width:100%">
										</div>
									</div>
									
									<div class="contact-btn">
										<button type="submit" name="submit" class="fv-btn">Login</button>
									</div>
								</form>
                                <div class="fied_errors"><?php echo "$msg"?></div>
								<div class="form-output">
									<p class="form-messege"></p>
								</div>
							</div>
						</div> 
                
				</div>
				

					<div class="col-md-6">
						<div class="contact-form-wrap mt--60">
							<div class="col-xs-12">
								<div class="contact-title">
									<h2 class="title__line--6">Register</h2>
								</div>
							</div>
							<div class="col-xs-12">
								<form id="contact-form" action="register_submit.php" method="post">
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="text" name="name" id="name" required placeholder="Your Name*" style="width:100%">
										</div>
                                        <span class="field_error" id="name_error"></span>
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="email" name="email" id="email" required placeholder="Your Email*" style="width:45%">

											<button type="button" class="fv-btn email_send_otp height_60px" onclick="email_send_otp()">Send OTP</button>


											<input type="email" name="email_otp" id="email_otp" required placeholder="OTP*" style="width:45%" class="email_verify_otp">

											<button type="button" class="fv-btn email_verify_otp height_60px" onclick="email_verify_otp()">verify OTP</button>

											<span id="email_otp_result"></span>



										</div>
                                        <span class="field_error" id="email_error"></span>
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="text" name="mobile" id="mobile" required placeholder="Your Mobile*" style="width:100%">
										</div>
                                        <span class="field_error" id="mobile_error"></span>
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="password" name="password" id="password" required placeholder="Your Password*" style="width:100%">
										</div>
                                        <span class="field_error" id="password_error"></span>
									</div>
									
									<div class="contact-btn">
										<button type="submit" class="fv-btn">Register</button>
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
        <script type="text/javascript">
        	function email_send_otp(){
        		jQuery('#email_error').html('');
        		var email=jQuery('#email').val();
        		if (email=='') {
        			jQuery('#email_error').html('Please Enter Email ID');

        		}else{
        			jQuery.ajax({
        				url:'send_otp.php',
        				type:'post',
        				data:'email='+email+'&type=email',
        				success:function(result){
        					if (result=='done') {
        						jQuery('#email').attr('disabled',true);
        						jQuery('.email_verify_otp').show();
        						jQuery('.email_send_otp').hide();
        					}
        					else{
        						jQuery('#email_error').html('Please try after sometime');

        					}

        				}
        			});
        			
        	    }

        	}

        	function email_verify_otp(){
        		jQuery('#email_error').html('');
        		var email_otp=jQuery('#email_otp').val();
        		if (email_otp=='') {
        			jQuery('#email_error').html('Please Enter OTP');

        		}else{
        			jQuery('.email_verify_otp').hide();
        			jQuery('#email_otp_result').html('Enter ID Verified');
        		}

        	}
        </script>
        <script type="text/javascript">
            
        </script>

        <script src="js/main.js"></script>
        <script src="js/vendor/jquery-3.2.1.min.js"></script>
        <!-- End Contact Area -->
<?php require ('footer.php');?>