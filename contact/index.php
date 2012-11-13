<?php
$pagetitle="Big Sisters Workshop - Contact Us";
$section = "contact";
include("../include/meta.php");
?>

<body>

<?php include("../include/header.php") ?>

<div class="pagecontent">
	<div id="submaincontent" class="clearfix">
  
		<h1>Contact Us</h1>
		<div class="row-fluid">
			
			<div class="span6">	

				<div id="contactform">
				    <form id="contact_form">
					<fieldset>
				      <input type="hidden" name="flag" value=1>
				      <div class="requiredfield">
				        <label for="reqname" >Name</label>
				        <span id='name_error' class='formerror'>Enter Your Name</span>
				        <input id="reqname" name="reqname" class="oversize input-text" type="text">
				      </div>
				      <div class="requiredfield">
				        <label for="reqemail" >Email</label>
				        <span id='email_error' class='formerror'>Enter Your Email</span>
				        <input id="reqemail" name="reqemail" class="expand input-text" type="text">
				      </div>
				      
				      <div class="requiredfield">
				        <label for="reqphone" >Phone</label>
				        <span id='phone_error' class='formerror'>Enter Your Phone</span>
				        <input id="reqphone" name="reqphone" class="oversize input-text requiredfield" type="text">
				      </div>

				      <div class="optionalfield">
				        <label for="reqmessage">Message</label>
				        <textarea name="reqmessage" id="reqmessage" class="oversize locked.large"></textarea>
				      </div>

				      <button id="message_send" type="submit" class="btn formbutton">Submit</button>
				    </fieldset>
				    </form>

				    <div id="mail_success" class="formsuccess">
				        <br />
				        <h2>Thanks for contating us! </h2>
				        <p>We'll get back to you as soon as possible.</p>
				    </div>
				    
				    <div id="mail_fail" class="formerror">
				        <br />
				        <p>There was an error submitting your request. We're sorry for the inconvenience. Please contact us directly with your inquiry.</p>
				    </div>

	  			</div>
    		</div>

    		<div class="span6">
    			<h2>Get in touch with us.</h2>
    			<p>
    				Whether you are a student, educator, parent or teacher we'd like to hear from you.
    			</p>
    		</div>
    	</div>

  	</div>
  

	<?php include("../include/latestvideos.php") ?>
	
</div>

<?php include("../include/ads.php") ?>

<?php include("../include/footer.php") ?>

<?php include("../include/scripts.php") ?>

<script type="text/javascript" src="/assets/js/contactus.js"></script>


</html>
